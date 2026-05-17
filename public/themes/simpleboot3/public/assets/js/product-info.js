$(document).ready(function () {
    var thumbSwiper = new Swiper(".thumbSwiper", {
        spaceBetween: 16,
        slidesPerView: 5,
        freeMode: true,
        watchSlidesProgress: true,
    });
    var swiper = new Swiper('.mainSwiper', {
        // 其他配置
        loop: true,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        thumbs: {
            swiper: thumbSwiper,
        },
    });

    $(document).on('click', '#inquiry', function () {
        $('#feedback_type').val(1);
        $('#product-id').val($('#product-id').val() || $('input[name="product_id"]').val() || '');
        $('.popover_wrap').show();
    });

    // 点击导航项，平滑滚动到对应内容
    $('.product-content .product-content-title .product-content-title-item').click(function() {
        const targetId = $(this).data('target');
        let header_h = $('.header').height();
        const targetOffset = $('#' + targetId).offset().top - header_h

        // 平滑滚动到目标位置
        $('html, body').animate({
            scrollTop: targetOffset
        }, 800); // 800ms 滑动时间，可调整
    });
});
