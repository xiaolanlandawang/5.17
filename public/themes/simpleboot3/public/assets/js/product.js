$(document).ready(function () {
    $('.category_item').click(function () {
        location.href = $(this).data('url');
    });

    $(document).on('click', '#inquiry', function (e) {
        e.preventDefault();
        $('#feedback_type').val(2);
        $('#product-id').val('');
        $('.popover_wrap').show();
    });

    if ($('.product-case-swiper .case-item').length) {
        new Swiper('.product-case-swiper', {
            slidesPerView: 3,
            slidesPerGroup: 3,
            spaceBetween: 28,
            loop: false,
            watchOverflow: true,
            navigation: {
                nextEl: '.product-case-button-next',
                prevEl: '.product-case-button-prev',
            },
            pagination: {
                el: '.product-case-pagination',
                clickable: true,
            },
            breakpoints: {
                0: {
                    slidesPerView: 1,
                    slidesPerGroup: 1,
                    spaceBetween: 12,
                },
                1000: {
                    slidesPerView: 2,
                    slidesPerGroup: 2,
                    spaceBetween: 18,
                },
                1441: {
                    slidesPerView: 3,
                    slidesPerGroup: 3,
                    spaceBetween: 28,
                }
            }
        });
    }

    $('.faq-item').each(function(index){
        if (index === 0) {
            $(this).addClass('active').find('.faq-question em').text('−');
        } else {
            $(this).removeClass('active').find('.faq-question em').text('+');
        }
    });

    $(document).on('click', '.faq-question', function () {
        var $item = $(this).closest('.faq-item');
        if ($item.hasClass('active')) {
            $item.removeClass('active');
            $item.find('em').text('+');
            return;
        }

        $('.faq-item').removeClass('active').find('.faq-question em').text('+');
        $item.addClass('active');
        $item.find('em').text('−');
    });
});
