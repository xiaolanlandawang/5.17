$(document).ready(function (){
    $(document).on('click','#inquiry',function (){
        $('#feedback_type').val(2);
        $('.popover_wrap').show();
    })

    $(document).on('click','#download',function (){
        $('#feedback_type').val(1);
        $('#file').val($(this).data('href'));
        $('.popover_wrap').show();
    })

    $('.product-category').on('click','.product-category-item',function (){
        let index = $(this).index();
        $(this).addClass('active').siblings().removeClass('active');
        $('.products .product-list').eq(index).addClass('active').siblings().removeClass('active');
    })

    // ─── FAQ Interactive Toggle ───
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

    // ─── STATS Counter Animation ───
    const counters = document.querySelectorAll('.counter');
    const speed = 100;

    const animateCounters = () => {
        counters.forEach(counter => {
            const target = +counter.getAttribute('data-target');

            const updateCount = () => {
                const count = +counter.innerText.replace(/,/g, '');
                const inc = target / speed;

                if (count < target) {
                    counter.innerText = Math.ceil(count + inc).toLocaleString('en-US');
                    setTimeout(updateCount, 15);
                } else {
                    counter.innerText = target.toLocaleString('en-US');
                }
            };
            updateCount();
        });
    };

    const statsSection = document.querySelector('.home-stats');
    if (statsSection && counters.length) {
        const observer = new IntersectionObserver((entries) => {
            if (entries[0].isIntersecting) {
                animateCounters();
                observer.disconnect();
            }
        }, { threshold: 0.3 });
        observer.observe(statsSection);
    }

    // ─── CERTIFICATE Swiper ───
    if ($('.certificate-swiper').length) {
        new Swiper('.certificate-swiper', {
            slidesPerView: 3,
            spaceBetween: 10,
            loop: true,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.certificate-pagination',
                clickable: true,
            }
        });
    }

    // ─── CERTIFICATE Lightbox Modal ───
    $(document).on('click', '.certificate img', function () {
        var src = $(this).attr('src');
        var alt = $(this).attr('alt') || 'Certificate';
        
        // Create modal if it doesn't exist
        if ($('#cert-lightbox').length === 0) {
            $('body').append(`
                <div id="cert-lightbox" class="cert-modal">
                    <span class="cert-modal-close">&times;</span>
                    <img id="cert-lightbox-img" src="" alt="">
                    <p id="cert-lightbox-title"></p>
                </div>
            `);
            
            // Close event
            $(document).on('click', '#cert-lightbox, .cert-modal-close', function (e) {
                if (e.target.id === 'cert-lightbox' || $(e.target).hasClass('cert-modal-close')) {
                    $('#cert-lightbox').removeClass('active');
                }
            });
        }
        
        // Set image and title
        $('#cert-lightbox-img').attr('src', src).attr('alt', alt);
        $('#cert-lightbox-title').text(alt);
        
        // Show modal with animation
        setTimeout(function() {
            $('#cert-lightbox').addClass('active');
        }, 10);
    });
});