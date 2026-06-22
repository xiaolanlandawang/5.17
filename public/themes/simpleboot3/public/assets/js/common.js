$(document).ready(function(){
    // Scroll reveal animation
    const revealObserver = new IntersectionObserver(function(entries) {
        entries.forEach(function(entry) {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
                revealObserver.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.08,
        rootMargin: '0px 0px -40px 0px'
    });
    document.querySelectorAll('.reveal').forEach(function(el) {
        revealObserver.observe(el);
    });

    window.showFormMessage = function (title, message, type) {
        var $modal = $('.form-message-modal');

        if (!$modal.length) {
            alert(message || title);
            return;
        }

        $modal.toggleClass('error', type === 'error');
        $modal.find('.form-message-title').text(title || 'Submit Success');
        $modal.find('.form-message-text').text(message || 'Thank you for your inquiry. We will contact you soon.');
        $modal.addClass('active').attr('aria-hidden', 'false');
    }

    function notifyFormResult(title, message, type) {
        if (typeof window.showFormMessage === 'function') {
            window.showFormMessage(title, message, type);
        } else {
            alert(message || title);
        }
    }

    function clearFooterForm() {
        $('.footer-name, .footer-email, .footer-phone, .footer-message').val('');
    }

    function clearHomeCollectForm() {
        $('.home-collect-name, .home-collect-email, .home-collect-phone, .home-collect-message').val('');
    }

    function clearPopoverForm() {
        $('#popover-name, #popover-phone, #popover-email, #popover-content').val('');
    }

    function closeFormMessage() {
        $('.form-message-modal').removeClass('active error').attr('aria-hidden', 'true');
    }

    $(document).on('click', '.form-message-button', closeFormMessage);
    $(document).on('click', '.form-message-modal', function (e) {
        if ($(e.target).is('.form-message-modal')) {
            closeFormMessage();
        }
    });
    $(document).on('keydown', function (e) {
        if (e.key === 'Escape') {
            closeFormMessage();
        }
    });

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


    /****** 悬浮框鼠标移入效果 ********/
    $('.right_fix .right_fix_box').hover(function (){
        $(this).addClass('active')
    }, function (){
        $(this).removeClass('active')
    })




    $('.footer-submit').click(function () {
        let name = $('.footer-name').val();
        let email = $('.footer-email').val();
        let phone = getFormattedPhoneNumber($('.footer-phone'));
        let message = $('.footer-message').val();
        if (name == '' || email == '' || message == '') {
            notifyFormResult('Incomplete Information', 'Please fill in Name, Email and Message.', 'error');
            return;
        }
        let data = {
            name: name,
            email: email,
            phone: phone,
            content: message,
            type: 2,
        }
        $.ajax({
            url: '/portal/index/inquiry',
            type: 'POST',
            data: data,
            dataType: 'json',
            success: function (res) {
                if (res.code == 1) {
                    window.location.href = '/thankyou.html';
                } else {
                    notifyFormResult('Submit Failed', res.msg || 'Please try again later.', 'error');
                }
            },
            error: function () {
                notifyFormResult('Submit Failed', 'Network error. Please try again later.', 'error');
            }
        })
    })

    let homeCollectSubmitting = false;

    $('.home-collect-submit').click(function () {
        if (homeCollectSubmitting) {
            return;
        }
        let name = $('.home-collect-name').val();
        let email = $('.home-collect-email').val();
        let phone = getFormattedPhoneNumber($('.home-collect-phone'));
        let message = $('.home-collect-message').val();
        if (name == '' || email == '' || message == '') {
            notifyFormResult('Incomplete Information', 'Please fill in Name, Email and Message.', 'error');
            return;
        }
        let data = {
            name: name,
            email: email,
            phone: phone,
            content: message,
            type: 2,
        }
        let $button = $('.home-collect-submit');
        homeCollectSubmitting = true;
        $button.addClass('is-loading').text('SUBMITTING...');
        $.ajax({
            url: '/portal/index/inquiry',
            type: 'POST',
            data: data,
            dataType: 'json',
            success: function (res) {
                if (res.code == 1) {
                    window.location.href = '/thankyou.html';
                } else {
                    notifyFormResult('Submit Failed', res.msg || 'Please try again later.', 'error');
                }
            },
            error: function () {
                notifyFormResult('Submit Failed', 'Network error. Please try again later.', 'error');
            },
            complete: function () {
                homeCollectSubmitting = false;
                $button.removeClass('is-loading').text('SUBMIT');
            }
        })
    })

    var $backToTop = $('.right_fix_top');
    function toggleBackTop() {
        if ($(window).scrollTop() > 220) {
            $backToTop.fadeIn(180);
        } else {
            $backToTop.fadeOut(180);
        }
    }
    toggleBackTop();
    $(window).on('scroll', toggleBackTop);
    $backToTop.on('click', function () {
        $('html, body').animate({scrollTop: 0}, 300);
    });


    $('.right_fix_form, .open-popover-btn').click(function() {
        $('.popover_wrap').show();
    });

    $('.popover_wrap .popover_container .popover_close').click(function (){
        $('#feedback_type').val(2);
        $('#file').val('');
        $('.popover_wrap').hide();
    })

    $('#popover-submit').click(function (){
        let name = $('#popover-name').val();// 姓名
        let phone = getFormattedPhoneNumber($('#popover-phone')); // 手机号
        let email = $('#popover-email').val();// 邮箱
        let content = $('#popover-content').val();// 内容

        if (!name || !email || !content){
            notifyFormResult('Incomplete Information', 'Please fill in Name, Email and Message.', 'error');
            return;
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
                    notifyFormResult('Submit Failed', res.msg || 'Please try again later.', 'error');
                }
            },
            error: function () {
                notifyFormResult('Submit Failed', 'Network error. Please try again later.', 'error');
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
                    notifyFormResult('Submit Failed', res.msg || 'Please try again later.', 'error');
                }
            },
            error: function () {
                notifyFormResult('Submit Failed', 'Network error. Please try again later.', 'error');
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
                    notifyFormResult('Submit Failed', res.msg || 'Please try again later.', 'error');
                }
            },
            error: function () {
                notifyFormResult('Submit Failed', 'Network error. Please try again later.', 'error');
            }
        })
    }
})




// oldddddddddddddd

