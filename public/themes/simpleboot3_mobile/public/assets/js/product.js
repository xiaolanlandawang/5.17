$(document).ready(function () {
    $('#product_category').change(function () {
        var url = $('#product_category').find('option:selected').data('url');
        location.href = url;
    });

    $(document).on('click', '#inquiry', function (e) {
        e.preventDefault();
        $('#feedback_type').val(2);
        $('#product-id').val('');
        $('.popover_wrap').show();
        $('body').css('overflow', 'hidden');
    });

    // FAQ Accordion
    $(document).on('click', '.faq-question', function() {
        var $item = $(this).parent('.faq-item');
        if ($item.hasClass('active')) {
            $item.removeClass('active').find('.faq-answer').slideUp(200);
        } else {
            $item.siblings('.faq-item').removeClass('active').find('.faq-answer').slideUp(200);
            $item.addClass('active').find('.faq-answer').slideDown(200);
        }
    });

    // Swiper Case Carousel
    if ($('.product-case-swiper').length && typeof Swiper !== 'undefined') {
        new Swiper('.product-case-swiper', {
            slidesPerView: 2,
            spaceBetween: 10,
            loop: true,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.product-case-pagination',
                clickable: true,
            }
        });
    }

    function getFormattedPhoneNumber($input) {
        let rawValue = $input.val();
        if ($input[0] && $input[0]._iti) {
            let iti = $input[0]._iti;
            let fullNumber = iti.getNumber();
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

    // Bottom Quote Form Submit
    let homeCollectSubmitting = false;
    $(document).on('click', '.home-collect-submit', function () {
        if (homeCollectSubmitting) {
            return;
        }
        let name = $('.home-collect-name').val();
        let email = $('.home-collect-email').val();
        let phone = getFormattedPhoneNumber($('.home-collect-phone'));
        let message = $('.home-collect-message').val();
        
        if (name == '' || email == '' || message == '') {
            alert('Please fill in Name, Email and Message.');
            return;
        }
        
        let data = {
            name: name,
            email: email,
            phone: phone,
            content: message,
            type: 2,
        };
        
        let $button = $(this);
        homeCollectSubmitting = true;
        $button.text('SUBMITTING...');
        
        $.ajax({
            url: '/portal/index/inquiry',
            type: 'POST',
            data: data,
            dataType: 'json',
            success: function (res) {
                if (res.code == 1) {
                    window.location.href = '/thankyou.html';
                } else {
                    alert(res.msg || 'Submit failed. Please try again.');
                }
            },
            error: function () {
                alert('Network error. Please try again later.');
            },
            complete: function () {
                homeCollectSubmitting = false;
                $button.text('SEND MESSAGE');
            }
        });
    });
});
