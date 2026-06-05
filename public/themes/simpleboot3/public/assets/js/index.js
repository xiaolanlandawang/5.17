$(document).ready(function() {


    $('.choose-list .choose-item').hover(function (){
        $(this).addClass('active')
        $(this).find('.choose-item-icon img').addClass('rotated').attr('src',$(this).find('.choose-item-icon img').data('active_img'))
    },function (){
        $(this).removeClass('active')
        $(this).find('.choose-item-icon img').removeClass('rotated').attr('src',$(this).find('.choose-item-icon img').data('default_img'))
    })

    if ($('.home-case-swiper .case-item').length) {
        new Swiper('.home-case-swiper', {
            slidesPerView: 3,
            slidesPerGroup: 3,
            spaceBetween: 28,
            loop: false,
            watchOverflow: true,
            navigation: {
                nextEl: '.home-case-button-next',
                prevEl: '.home-case-button-prev',
            },
            pagination: {
                el: '.home-case-pagination',
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

    if ($('.home-news-swiper .news-item').length) {
        new Swiper('.home-news-swiper', {
            slidesPerView: 4,
            slidesPerGroup: 4,
            spaceBetween: 18,
            loop: false,
            watchOverflow: true,
            navigation: {
                nextEl: '.home-news-button-next',
                prevEl: '.home-news-button-prev',
            },
            pagination: {
                el: '.home-news-pagination',
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
                    spaceBetween: 16,
                },
                1441: {
                    slidesPerView: 4,
                    slidesPerGroup: 4,
                    spaceBetween: 18,
                }
            }
        });
    }

    if ($('.certificate-swiper .certificate-item').length) {
        new Swiper('.certificate-swiper', {
            slidesPerView: 4,
            slidesPerGroup: 4,
            spaceBetween: 34,
            loop: false,
            grabCursor: true,
            watchOverflow: true,
            navigation: {
                nextEl: '.certificate-button-next',
                prevEl: '.certificate-button-prev',
            },
            pagination: {
                el: '.certificate-pagination',
                clickable: true,
            },
            breakpoints: {
                0: {
                    slidesPerView: 2,
                    slidesPerGroup: 2,
                    spaceBetween: 18,
                },
                1000: {
                    slidesPerView: 3,
                    slidesPerGroup: 3,
                    spaceBetween: 28,
                },
                1441: {
                    slidesPerView: 4,
                    slidesPerGroup: 4,
                    spaceBetween: 34,
                }
            }
        });
    }

    var $certificateItems = $('.certificate-swiper .certificate-item:not(.swiper-slide-duplicate)');
    var $certificatePreview = $('.certificate-preview');
    var $certificatePreviewImg = $('.certificate-preview-content img');
    var certificateIndex = 0;

    function showCertificatePreview(index) {
        var $img = $certificateItems.eq(index).find('img');

        if (!$img.length) {
            return;
        }

        certificateIndex = index;
        $certificatePreviewImg.attr({
            src: $img.attr('src'),
            alt: $img.attr('alt') || ''
        });
        $certificatePreview.addClass('active').attr('aria-hidden', 'false');
        $('body').css('overflow', 'hidden');
    }

    function closeCertificatePreview() {
        $certificatePreview.removeClass('active').attr('aria-hidden', 'true');
        $certificatePreviewImg.attr({
            src: '',
            alt: ''
        });
        $('body').css('overflow', '');
    }

    function switchCertificatePreview(step) {
        var total = $certificateItems.length;

        if (!total) {
            return;
        }

        certificateIndex = (certificateIndex + step + total) % total;
        showCertificatePreview(certificateIndex);
    }

    $certificateItems.on('click', function () {
        showCertificatePreview($certificateItems.index(this));
    });

    $('.certificate-preview-close').on('click', closeCertificatePreview);

    $('.certificate-preview-prev').on('click', function (e) {
        e.stopPropagation();
        switchCertificatePreview(-1);
    });

    $('.certificate-preview-next').on('click', function (e) {
        e.stopPropagation();
        switchCertificatePreview(1);
    });

    $certificatePreview.on('click', function (e) {
        if ($(e.target).is('.certificate-preview')) {
            closeCertificatePreview();
        }
    });

    $(document).on('keydown', function (e) {
        if (!$certificatePreview.hasClass('active')) {
            return;
        }

        if (e.key === 'Escape') {
            closeCertificatePreview();
        }

        if (e.key === 'ArrowLeft') {
            switchCertificatePreview(-1);
        }

        if (e.key === 'ArrowRight') {
            switchCertificatePreview(1);
        }
    });

    $(document).on('click','#inquiry',function (){
        $('#feedback_type').val(2);
        $('.popover_wrap').show();
    })

    $(document).on('click','#download',function (){
        $('#feedback_type').val(1);
        $('#file').val($(this).data('href'));
        $('.popover_wrap').show();
    })

    $(document).on('click', '.faq-contact-btn', function (e) {
        e.preventDefault();
        $('#feedback_type').val(2);
        $('#file').val('');
        $('.popover_wrap').show();
    });

    $('.faq-item').each(function(index){
        if (index === 0) {
            $(this).addClass('active').find('.faq-question em').text('−');
        } else {
            $(this).removeClass('active').find('.faq-question em').text('+');
        }
    });

    $(document).on('click', '.faq-question', function () {
        var $item = $(this).closest('.faq-item');
        var isActive = $item.hasClass('active');

        if (isActive) {
            $item.removeClass('active');
            $item.find('em').text('+');
            return;
        }

        $('.faq-item').removeClass('active').find('.faq-question em').text('+');
        $item.addClass('active');
        $item.find('em').text('−');
    });
})




// old
