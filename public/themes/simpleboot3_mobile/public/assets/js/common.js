$(document).ready(function () {
    $('.header .nav .nav-btn').click(function (){
        $(this).siblings('.nav-list').toggle();
    });

    $('.header .nav ul li .nav-sub-btn').click(function (){
        if ($(this).hasClass('active')){
            $(this).removeClass('active');
            $(this).siblings('.nav-sub').hide();
            $(this).html('+')
        }else{
            $(this).addClass('active');
            $(this).siblings('.nav-sub').show();
            $(this).html('-')
        }
    });

    $('.footer-feedback-btn').click(function (){
        let name=$('input[name=footer-name]').val();
        let email=$('input[name=footer-email]').val();
        let phone = getFormattedPhoneNumber($('input[name=footer-phone]'));
        let message=$('input[name=footer-message]').val();

        if(name==''||email==''||phone==''||message=='') {
            alert('Please fill in all information completely.')
            return;
        }
        let data = {
            name: name,
            email: email,
            phone: phone,
            content: message,
            type:2,
        }
        let $btn = $(this);
        $btn.prop('disabled', true).text('Sending...');

        $.ajax({
            url: '/portal/index/inquiry',
            type: 'POST',
            data:data,
            dataType: 'json',
            success: function (res) {
                if (res.code == 1) {
                    window.location.href = '/thankyou.html';
                } else {
                    alert('submit failed:'+res.msg);
                }
            },
            error: function() {
                alert('Network error, please try again.');
            },
            complete: function() {
                $btn.prop('disabled', false).text('Submit Your Request');
            }
        })
    })


    $('.right_fix_form, .open-popover-btn').click(function() {
        $('.popover_wrap').show();
        $('body').css('overflow', 'hidden');
    });

    $('.popover_wrap .popover_container .popover_close').click(function (){
        $('#feedback_type').val(2);
        $('#file').val('');
        $('.popover_wrap').hide();
        $('body').css('overflow', '');
    })

    function getFormattedPhoneNumber($input) {
        let rawValue = $input.val();
        if ($input[0] && $input[0]._iti) {
            let iti = $input[0]._iti;
            let fullNumber = iti.getNumber();
            // If getNumber() doesn't have the prefix (sometimes happens with auto-detection or partial entries)
            if (fullNumber && fullNumber.indexOf('+') === -1) {
                let countryData = iti.getSelectedCountryData();
                if (countryData && countryData.dialCode) {
                    return '+' + countryData.dialCode + ' ' + rawValue;
                }
            }
            return fullNumber || rawValue;
        }
        return rawValue;
    }

    $('#popover-submit').click(function (){
        console.log('Submit clicked');
        let $btn = $(this);
        if ($btn.hasClass('submitting')) return;

        $('input, textarea').blur(); // Close mobile keyboard

        let name = $('#popover-name').val();// 姓名
        let phone = getFormattedPhoneNumber($('#popover-phone'));// 手机号
        let email = $('#popover-email').val();// 邮箱
        let content = $('#popover-content').val();// 内容

        if (!name || !phone || !email || !content){
            alert('Please fill in all the information completely.');
            return;
        }

        $btn.addClass('submitting').text('Sending...').css('opacity', '0.7');

        if (typeof gtag === 'function') {
            gtag('set', 'user_data', {
                "email": email,
                "phone_number": phone
            });
        }
        let type = $('#feedback_type').val();
        let data = {
            name: name,
            phone: phone,
            email: email,
            content: content,
        };
        if (type==1){
            data.type = 1;
            product_feedback(data);
        } else if (type==3){
            data.type = 3;
            download_feedback(data);
        }else{
            data.type = 2;
            feedback(data);
        }
    })


    function product_feedback(data){
        let product_id = $('#product-id').val(); // 产品id
        let lifting_capacity = []; // 起重量
        $('.info_right_capacity_list_item.active').each(function (){
            var key = $(this).data('key');
            lifting_capacity.push(key);
        })
        let min_height = $('#minValue').text();
        let max_height = $('#maxValue').text();
        let height = min_height+','+max_height; // 起重高度
        let min_span = $('#minSpanValue').text();
        let max_span = $('#maxSpanValue').text();
        let span = min_span+','+max_span; // 跨度
        let voltage = $('.info_voltage_select').val(); // 工作电压
        let hertz = $('.info_hertz_select').val(); // 工作频率
        let job_level = []; // 工作等级
        $('.info_right_job_list_item.active').each(function (){
            var key = $(this).data('key');
            job_level.push(key);
        })
        let sling_available = []; // 吊具
        $('.info_available_list_item.active').each(function (){
            var key = $(this).data('key');
            sling_available.push(key);
        })
        data.product_id = product_id;
        data.lifting_capacity = lifting_capacity;
        data.lifting_height = height;
        data.span = span;
        data.operating_voltage = voltage;
        data.operating_herts = hertz;
        data.job_level = job_level;
        data.sling_available = sling_available;
        let file_url = $('#file').val();
        $.ajax({
            url: '/portal/index/inquiry',
            type: 'POST',
            data:data,
            dataType: 'json',
            success: function (res) {
                if (res.code == 1) {
                    //谷歌点击转化
                    if (typeof gtag_report_conversion === 'function') {
                        gtag_report_conversion();
                    }
                    if(file_url!==''){
                        window.open(file_url);
                    }
                    window.location.href = '/thankyou.html';
                } else {
                    alert('submit failed:'+res.msg);
                }
            },
            error: function() {
                alert('Network error, please try again.');
            },
            complete: function() {
                $('#popover-submit').removeClass('submitting').text('SUBMIT').css('opacity', '1');
            }
        })
    }

    function download_feedback(data){
        let $file_url = $('#file_url');
        let file = $file_url.val();

        $.ajax({
            url: '/portal/index/inquiry',
            type: 'POST',
            data:data,
            dataType: 'json',
            success: function (res) {
                if (res.code == 1) {
                    window.open(file);
                    window.location.href = '/thankyou.html';
                } else {
                    alert('submit failed:'+res.msg);
                }
            },
            error: function() {
                alert('Network error, please try again.');
            },
            complete: function() {
                $('#popover-submit').removeClass('submitting').text('SUBMIT').css('opacity', '1');
            }
        })
    }

    function feedback(data){
        $.ajax({
            url: '/portal/index/inquiry',
            type: 'POST',
            data:data,
            dataType: 'json',
            success: function (res) {
                if (res.code == 1) {
                    window.location.href = '/thankyou.html';
                } else {
                    alert('submit failed:'+res.msg);
                }
            },
            error: function() {
                alert('Network error, please try again.');
            },
            complete: function() {
                $('#popover-submit').removeClass('submitting').text('SUBMIT').css('opacity', '1');
            }
        })
    }

})
