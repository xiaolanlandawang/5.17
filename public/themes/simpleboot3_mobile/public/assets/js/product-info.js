// script.js
$(document).ready(function() {
    // 点击导航项，平滑滚动到对应内容
    $('.info_content .info_content_title .info_content_item').click(function() {
        const targetId = $(this).data('target');
        let header_h = $('.header').height();
        const targetOffset = $('#' + targetId).offset().top - header_h

        // 平滑滚动到目标位置
        $('html, body').animate({
            scrollTop: targetOffset
        }, 800); // 800ms 滑动时间，可调整
    });

    $('#inquiry').click(function (){
        $('#feedback_type').val(1);
        $('#product-id').val($('#product-id').val() || $('input[name="product_id"]').val() || '');
        $('.popover_wrap').show();
    })

    $('.popover_wrap .popover_container .popover_close').click(function (){
        $('#file').val('');
        $('.popover_wrap').hide();
    })


    // 产品图片
    var $mainImg = $('#main-img');
    var $thumbnails = $('.thumbnail-gallery-item');
    var $thumbnailGallery = $('.thumbnail-gallery-list');
    var $prevBtn = $('.prev-btn');
    var $nextBtn = $('.next-btn');

    var currentIndex = 0;

    function updateMainImage(index) {
        $mainImg.attr('src', $thumbnails.eq(index).data('main-src'));
    }

    function updateThumbnailSelection() {
        $thumbnails.removeClass('active').eq(currentIndex).addClass('active');
    }

    $thumbnails.on('click', function() {
        currentIndex = $thumbnails.index(this);
        updateMainImage(currentIndex);
        updateThumbnailSelection();
    });

    $prevBtn.on('click', function() {
        currentIndex = (currentIndex - 1 + $thumbnails.length) % $thumbnails.length;
        $thumbnailGallery.scrollLeft(currentIndex * $thumbnails.eq(0).width());
        updateMainImage(currentIndex);
        updateThumbnailSelection();
    });

    $nextBtn.on('click', function() {
        currentIndex = (currentIndex + 1) % $thumbnails.length;
        $thumbnailGallery.scrollLeft(currentIndex * $thumbnails.eq(0).width());
        updateMainImage(currentIndex);
        updateThumbnailSelection();
    });

    // 初始化
    updateMainImage(currentIndex);
    updateThumbnailSelection();

    $prevBtn.hover(function() {
        $('.prev-img').hide()
        $('.prev-img-active').show()
    }, function() {
        $('.prev-img').show()
        $('.prev-img-active').hide()
    })

    $nextBtn.hover(function() {
        $('.next-img').hide()
        $('.next-img-active').show()
    }, function() {
        $('.next-img').show()
        $('.next-img-active').hide()
    })

    $('.info_btn img').hover(function (){
        var active_img = $(this).data('active_img');
        $(this).attr('src',active_img);
    },function (){
        var unactive_img = $(this).data('unactive_img');
        $(this).attr('src',unactive_img);
    })

    $('#inquiry').click(function (){
        $('#feedback_type').val(1);
        $('#product-id').val($('#product-id').val() || $('input[name="product_id"]').val() || '');
        $('.popover_wrap').show();
    })

    $('#download').click(function (){
        $('#feedback_type').val(1);
        $('#file').val($(this).data('href'));
        $('.popover_wrap').show();
    })

    // 热门产品
    $('.product-line ul li').click(function (){
        let index = $(this).index();
        $('.related_products_list ul').animate({'marginLeft':-1440*index+'px'});
        $(this).addClass('active').siblings().removeClass('active');
    })

    $(document).on('click','#inquiry1',function (){
        $('#feedback_type').val(1);
        $('#product-id').val($('#product-id').val() || $('input[name="product_id"]').val() || '');
        $('.popover_wrap').show();
    })

    $(document).on('click','#download1',function (){
        $('#feedback_type').val(1);
        $('#file').val($(this).data('href'));
        $('.popover_wrap').show();
    })

    // Wrap tables inside rich-text content to make them scrollable horizontally
    $('.info_content_content_item table').each(function() {
        if (!$(this).parent().hasClass('table-responsive-wrapper')) {
            $(this).wrap('<div class="table-responsive-wrapper"></div>');
        }
    });
});
