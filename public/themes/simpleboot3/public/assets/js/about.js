// $(document).ready(function() {
//     $('.choose-list .choose-item').hover(function (){
//         $(this).addClass('active')
//         $(this).find('.choose-item-icon img').addClass('rotated').attr('src',$(this).find('.choose-item-icon img').data('active_img'))
//     },function (){
//         $(this).removeClass('active')
//         $(this).find('.choose-item-icon img').removeClass('rotated').attr('src',$(this).find('.choose-item-icon img').data('default_img'))
//     })
// })




$(document).ready(function() {
    $('.choose-list .choose-item').hover(function (){
        $(this).addClass('active')
        $(this).find('.choose-item-icon img').addClass('rotated').attr('src',$(this).find('.choose-item-icon img').data('active_img'))
    },function (){
        $(this).removeClass('active')
        $(this).find('.choose-item-icon img').removeClass('rotated').attr('src',$(this).find('.choose-item-icon img').data('default_img'))
    })

    var $certificateItems = $('.certificate-list .certificate-item');
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
    // Counter animation for about stats
    function animateAboutCounter($el) {
        var target = parseInt($el.data('target'), 10);
        var duration = 1800;
        var start = null;

        function step(timestamp) {
            if (!start) start = timestamp;
            var progress = Math.min((timestamp - start) / duration, 1);
            var ease = 1 - Math.pow(1 - progress, 3);
            $el.text(Math.floor(ease * target).toLocaleString());
            if (progress < 1) {
                requestAnimationFrame(step);
            } else {
                $el.text(target.toLocaleString());
            }
        }
        requestAnimationFrame(step);
    }

    var aboutCounterObserver = new IntersectionObserver(function(entries, obs) {
        entries.forEach(function(entry) {
            if (entry.isIntersecting) {
                animateAboutCounter($(entry.target));
                obs.unobserve(entry.target);
            }
        });
    }, { threshold: 0.3 });

    $('.about-counter').each(function() {
        aboutCounterObserver.observe(this);
    });
})
