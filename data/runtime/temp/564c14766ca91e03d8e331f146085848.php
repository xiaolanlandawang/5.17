<?php /*a:5:{s:75:"C:\laragon\www\weihua\public/themes/simpleboot3_mobile/portal\\product.html";i:1779247130;s:71:"C:\laragon\www\weihua\public/themes/simpleboot3_mobile/public\head.html";i:1779090900;s:70:"C:\laragon\www\weihua\public/themes/simpleboot3_mobile/public\nav.html";i:1779090902;s:81:"C:\laragon\www\weihua\public/themes/simpleboot3_mobile/public\crane_selector.html";i:1779246595;s:71:"C:\laragon\www\weihua\public/themes/simpleboot3_mobile/public\foot.html";i:1779358330;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo (isset($page_title) && ($page_title !== '')?$page_title:$site_info['site_name']); ?></title>
    <meta name="keywords" content="<?php echo (isset($page_keywords) && ($page_keywords !== '')?$page_keywords:$site_info['site_name']); ?>">
    <meta name="description" content="<?php echo (isset($page_description) && ($page_description !== '')?$page_description:$site_info['site_name']); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <link rel="preload" as="image" href="<?php echo $hero_image; ?>" fetchpriority="high">

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0" />
<script>
    // Immediate font-size calculation to prevent layout shifts
    (function() {
        var width = window.innerWidth;
        document.documentElement.style.fontSize = (width / 37.5) + 'px';
    })();
</script>
<link rel="shortcut icon" type="image/x-icon" href="/themes/simpleboot3_mobile/public/assets/images/logo.ico">
<link href="/themes/simpleboot3_mobile/public/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="/themes/simpleboot3_mobile/public/assets/css/swiper-bundle.min.css" rel="stylesheet" type="text/css">
<link href="/themes/simpleboot3_mobile/public/assets/css/common.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="/themes/simpleboot3_mobile/public/assets/js/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="/themes/simpleboot3_mobile/public/assets/js/bootstrap.min.js" defer></script>
<script type="text/javascript" src="/themes/simpleboot3_mobile/public/assets/js/swiper-bundle.min.js" defer></script>
<script type="text/javascript" src="/themes/simpleboot3_mobile/public/assets/js/common.js" defer></script>

<?php if(!(empty($site_info['google_analytics']) || (($site_info['google_analytics'] instanceof \think\Collection || $site_info['google_analytics'] instanceof \think\Paginator ) && $site_info['google_analytics']->isEmpty()))): ?>
    <?php echo htmlspecialchars_decode($site_info['google_analytics']); ?>
<?php endif; if(!(empty($site_info['google_head']) || (($site_info['google_head'] instanceof \think\Collection || $site_info['google_head'] instanceof \think\Paginator ) && $site_info['google_head']->isEmpty()))): ?>
    <?php echo htmlspecialchars_decode($site_info['google_head']); ?>
<?php endif; ?>



<style>
    #zsiq_chat_wrap{
        max-height: 550px !important;
    }
    .zsiq-float{
        bottom: 80px!important;
    }
</style>

    <link href="/themes/simpleboot3_mobile/public/assets/css/products.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="/themes/simpleboot3_mobile/public/assets/js/product.js" defer></script>
</head>
<body>
<div class="main">
    <?php if(!(empty($site_info['google_body']) || (($site_info['google_body'] instanceof \think\Collection || $site_info['google_body'] instanceof \think\Paginator ) && $site_info['google_body']->isEmpty()))): ?>
    <?php echo htmlspecialchars_decode($site_info['google_body']); ?>
<?php endif; ?>
<!--NAV START-->

<div class="header">
    <div class="logo">
        <a href="/">
            <img class="logo-img" src="/themes/simpleboot3_mobile/public/assets/images/logo.svg"
                 alt="<?php echo (isset($site_info['site_name']) && ($site_info['site_name'] !== '')?$site_info['site_name']:''); ?>" title="<?php echo (isset($site_info['site_name']) && ($site_info['site_name'] !== '')?$site_info['site_name']:''); ?>">
        </a>
    </div>
    <div class="nav">
        <div class="nav-btn fr">
            <span class="line line1"></span>
            <span class="line line2"></span>
            <span class="line line3"></span>
        </div>
        <ul class="nav-list">
            <li><a class="nav-title" href="/">HOME</a></li>
            <li>
                <a class="nav-title" href="<?php echo cmf_url('portal/index/product'); ?>">PRODUCTS</a>
                <div class="nav-sub-btn">+</div>
                <div class="nav-sub product-nav">
                    <ul class="nav-sub-ul">
                        <?php if(is_array($category_list) || $category_list instanceof \think\Collection || $category_list instanceof \think\Paginator): if( count($category_list)==0 ) : echo "" ;else: foreach($category_list as $key=>$vo): ?>
                            <li>
                                <a href="<?php echo cmf_url('portal/index/product',array('id'=>$vo['id'])); ?>">
                                    <div class="nav-sub-title"><?php echo $vo['name']; ?></div>
                                </a>
                            </li>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                </div>
            </li>
            <li>
                <a class="nav-title" href="<?php echo cmf_url('portal/index/about'); ?>">ABOUT US</a>
                <div class="nav-sub-btn">+</div>
                <div class="nav-sub product-nav">
                    <ul class="nav-sub-ul">
                        <li>
                            <a href="<?php echo cmf_url('portal/index/about'); ?>">
                                <div class="nav-sub-title">About Weihua</div>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo cmf_url('portal/index/cert'); ?>">
                                <div class="nav-sub-title">Certificates</div>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo cmf_url('portal/index/create'); ?>">
                                <div class="nav-sub-title">Innovation&Creation</div>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li>
                <a class="nav-title" href="<?php echo cmf_url('portal/index/service'); ?>">SERVICE</a>
                <div class="nav-sub-btn">+</div>
                <div class="nav-sub product-nav">
                    <ul class="nav-sub-ul">
                        <li>
                            <a href="<?php echo cmf_url('portal/index/service'); ?>">
                                <div class="nav-sub-title">Global Market</div>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo cmf_url('portal/index/excellent_service'); ?>">
                                <div class="nav-sub-title">Excellent Service</div>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo cmf_url('portal/index/download'); ?>">
                                <div class="nav-sub-title">Download</div>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li>
                <a class="nav-title" href="<?php echo cmf_url('portal/index/industries'); ?>">INDUSTRIES</a>
            </li>
            <li>
                <a class="nav-title" href="<?php echo cmf_url('portal/index/news'); ?>">NEWS CENTER</a>
            </li>
            <li><a class="nav-title" href="<?php echo cmf_url('portal/index/quote'); ?>">GET A QUOTE</a></li>
        </ul>
    </div>
</div>
<!--NAV END-->


    <?php if(!$is_category_page): ?>
        <!-- ========================================== -->
        <!-- PRODUCTS OVERVIEW / MAIN PAGE             -->
        <!-- ========================================== -->
        <section class="mobile-product-hero mobile-overview-hero">
            <img class="mobile-product-hero__bg"
                 src="<?php echo $hero_image; ?>"
                 alt="<?php echo (isset($hero_title) && ($hero_title !== '')?$hero_title:'Weihua Products'); ?>"
                 fetchpriority="high"
                 loading="eager"
                 decoding="sync">
            <div class="mobile-overview-hero__text">PRODUCTS</div>
        </section>

        <div class="mobile-product-breadcrumb">
            <a href="/">Home</a>
            <span>/</span>
            <span>Products</span>
        </div>

        <div class="main-content">
            <div class="products-category-section">
                <div class="products-category-section__head">
                    <h2 class="products-category-section__title"><?php echo $category_headline; ?></h2>
                    <p class="products-category-section__desc"><?php echo $category_intro; ?></p>
                </div>

                <ul class="mobile-category-grid">
                    <?php if(is_array($category_cards) || $category_cards instanceof \think\Collection || $category_cards instanceof \think\Paginator): if( count($category_cards)==0 ) : echo "" ;else: foreach($category_cards as $key=>$vo): ?>
                        <li class="mobile-category-grid__item">
                            <a href="<?php echo cmf_url('portal/index/product',array('id'=>$vo['id'])); ?>" class="mobile-category-card">
                                <div class="mobile-category-card__image-wrap">
                                    <img src="<?php echo cmf_get_image_url($vo['thumbnail']); ?>" alt="<?php echo $vo['name']; ?>" class="mobile-category-card__image" loading="lazy">
                                </div>
                                <div class="mobile-category-card__content">
                                    <div class="mobile-category-card__title"><?php echo $vo['name']; ?></div>
                                    <div class="mobile-category-card__count"><?php echo (isset($vo['product_count']) && ($vo['product_count'] !== '')?$vo['product_count']:0); ?> Products</div>
                                    <span class="mobile-category-card__arrow">View All ➔</span>
                                </div>
                            </a>
                        </li>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
            </div>
        </div>

    <?php else: ?>
        <!-- ========================================== -->
        <!-- SPECIFIC CATEGORY PAGE                    -->
        <!-- ========================================== -->
        <section class="mobile-product-hero mobile-category-hero">
            <img class="mobile-product-hero__bg"
                 src="<?php echo $hero_image; ?>"
                 alt="<?php echo $current_category_name; ?>"
                 fetchpriority="high"
                 loading="eager"
                 decoding="sync">
        </section>

        <div class="mobile-product-breadcrumb">
            <a href="/">Home</a>
            <span>/</span>
            <a href="<?php echo cmf_url('portal/index/product'); ?>">Products</a>
            <span>/</span>
            <span><?php echo $current_category_name; ?></span>
        </div>

        <div class="mobile-product-hero__inner">
            <h1 class="mobile-product-hero__title"><?php echo $hero_title; ?></h1>
            <p class="mobile-product-hero__desc"><?php echo $hero_description; ?></p>
            <a href="javascript:;" class="mobile-product-hero__btn" id="inquiry">Get A Free Quote</a>
        </div>

        <div class="main-content">
            <!-- Select dropdown for quick switching (keeps excellent UX) -->
            <div class="products-content-select">
                <div class="products-content_title">Product Categories</div>
                <div class="product_select">
                    <select name="category_id" id="product_category" aria-label="Product Categories">
                        <option value="0" data-url="<?php echo cmf_url('portal/index/product'); ?>">All Products</option>
                        <?php if(is_array($category_list) || $category_list instanceof \think\Collection || $category_list instanceof \think\Paginator): if( count($category_list)==0 ) : echo "" ;else: foreach($category_list as $key=>$vo): ?>
                            <option value="<?php echo $vo['id']; ?>" data-url="<?php echo cmf_url('portal/index/product',array('id'=>$vo['id'])); ?>"
                                    <?php echo $vo['id']==input('id') ? 'selected'  :  ''; ?>><?php echo $vo['name']; ?></option>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </select>
                </div>
                <div class="mobile-product-summary">Showing <?php echo $product_total; ?> product<?php if($product_total != 1): ?>s<?php endif; ?></div>
            </div>

            <!-- Products Grid Section -->
            <div class="products-showcase-section">
                <div class="products-showcase__head">
                    <h2 class="products-showcase__title"><?php echo $category_headline; ?></h2>
                    <p class="products-showcase__desc"><?php echo $category_intro; ?></p>
                </div>

                <div class="products-content">
                    <ul class="products-content-list">
                        <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): if( count($list)==0 ) : echo "" ;else: foreach($list as $k=>$vo): ?>
                            <li class="products-content-list-item" data-id="<?php echo $vo['id']; ?>">
                                <a href="<?php echo cmf_url('portal/index/product_info',array('id'=>$vo['id'])); ?>">
                                    <div class="products-content-list-item-img">
                                        <img src="<?php echo cmf_get_image_url($vo['thumbnail']); ?>"
                                             alt="<?php echo $vo['title']; ?>"
                                             <?php if($k == 0): ?>loading="eager" fetchpriority="high"<?php else: ?>loading="lazy"<?php endif; ?>
                                             decoding="async">
                                    </div>
                                    <div class="products-content-list-item-title"><?php echo $vo['title']; ?></div>
                                    <div class="product-content-li-desc"><?php echo (isset($vo['industry']) && ($vo['industry'] !== '')?$vo['industry']:'Tap to view more product details and parameters.'); ?></div>
                                </a>
                                <div class="product_list_item_btn">
                                    <div class="product_list_item_btn_submit" id="inquiry">CONSULT</div>
                                </div>
                            </li>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                </div>

                <?php if(count($list) == 0): ?>
                    <div class="mobile-product-empty">
                        No products in this category yet.
                    </div>
                <?php endif; ?>

                <div class="products-pagination-container">
                    <span class="products-pagination-info">Page <?php echo $list->currentPage(); ?> of <?php echo $list->lastPage(); ?></span>
                    <div class="products-content-right-page">
                        <ul class="pagination"><?php echo $page; ?></ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- FAQ Section -->
        <?php if(!(empty($category_faq['faq']) || (($category_faq['faq'] instanceof \think\Collection || $category_faq['faq'] instanceof \think\Paginator ) && $category_faq['faq']->isEmpty()))): ?>
            <div class="faq product-faq">
                <div class="title"><?php echo (isset($category_faq['faq_title']) && ($category_faq['faq_title'] !== '')?$category_faq['faq_title']:'FAQ'); ?></div>
                <div class="faq-wrap">
                    <div class="faq-list">
                        <?php if(is_array($category_faq['faq']) || $category_faq['faq'] instanceof \think\Collection || $category_faq['faq'] instanceof \think\Paginator): if( count($category_faq['faq'])==0 ) : echo "" ;else: foreach($category_faq['faq'] as $key=>$vo): ?>
                            <div class="faq-item <?php echo $key==0 ? 'active'  :  ''; ?>">
                                <div class="faq-question">
                                    <span><?php echo $key+1; ?>.<?php echo $vo['question']; ?></span>
                                    <em>+</em>
                                </div>
                                <div class="faq-answer"><?php echo nl2br($vo['answer']); ?></div>
                            </div>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    <?php endif; ?>

    <section class="crane-selector-module">
    <div class="crane-selector__inner">
        <div class="crane-selector__panel">
            <h2 class="crane-selector__title">
                <?php if(!(empty($crane_selector_title) || (($crane_selector_title instanceof \think\Collection || $crane_selector_title instanceof \think\Paginator ) && $crane_selector_title->isEmpty()))): ?><?php echo $crane_selector_title; else: ?>Not Sure Which Crane Type You Need?<?php endif; ?>
            </h2>
            <p class="crane-selector__desc">
                <?php if(!(empty($crane_selector_desc) || (($crane_selector_desc instanceof \think\Collection || $crane_selector_desc instanceof \think\Paginator ) && $crane_selector_desc->isEmpty()))): ?><?php echo $crane_selector_desc; else: ?>Send your lifting capacity, span, lifting height, working area and application. Our team can help you choose the suitable crane category and configuration.<?php endif; ?>
            </p>
            <a href="javascript:;" class="crane-selector__cta" id="inquiry">
                <?php if(!(empty($crane_selector_btn_text) || (($crane_selector_btn_text instanceof \think\Collection || $crane_selector_btn_text instanceof \think\Paginator ) && $crane_selector_btn_text->isEmpty()))): ?><?php echo $crane_selector_btn_text; else: ?>Ask for Selection Support<?php endif; ?>
            </a>
        </div>

        <div class="crane-selector__list-wrap">
            <ul class="crane-selector__list">
                <?php if(!empty($crane_selector_items)): if(is_array($crane_selector_items) || $crane_selector_items instanceof \think\Collection || $crane_selector_items instanceof \think\Paginator): if( count($crane_selector_items)==0 ) : echo "" ;else: foreach($crane_selector_items as $key=>$vo): ?>
                        <li class="crane-selector__item">
                            <span class="crane-selector__item-scene"><?php echo $vo['scene']; ?></span>
                            <span class="crane-selector__item-type"><?php echo $vo['type']; ?></span>
                        </li>
                    <?php endforeach; endif; else: echo "" ;endif; else: ?>
                    <li class="crane-selector__item">
                        <span class="crane-selector__item-scene">Workshop or warehouse heavy lifting</span>
                        <span class="crane-selector__item-type">Overhead Cranes</span>
                    </li>
                    <li class="crane-selector__item">
                        <span class="crane-selector__item-scene">Outdoor construction or open-yard lifting</span>
                        <span class="crane-selector__item-type">Gantry Cranes</span>
                    </li>
                    <li class="crane-selector__item">
                        <span class="crane-selector__item-scene">High-temperature steel plant handling</span>
                        <span class="crane-selector__item-type">Metallurgy Cranes</span>
                    </li>
                    <li class="crane-selector__item">
                        <span class="crane-selector__item-scene">Container terminal and marine cargo handling</span>
                        <span class="crane-selector__item-type">Port Cranes</span>
                    </li>
                    <li class="crane-selector__item">
                        <span class="crane-selector__item-scene">Compact workshop and light-duty lifting</span>
                        <span class="crane-selector__item-type">Light Cranes</span>
                    </li>
                    <li class="crane-selector__item">
                        <span class="crane-selector__item-scene">Crane spare parts and lifting accessories</span>
                        <span class="crane-selector__item-type">Crane Parts</span>
                    </li>
                    <li class="crane-selector__item">
                        <span class="crane-selector__item-scene">Efficient material lifting for factories and warehouses</span>
                        <span class="crane-selector__item-type">Electric Hoists</span>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</section>


    <!-- Customize Inquiry / Quick Quote Section (only on specific category page) -->
    <?php if($is_category_page): ?>
        <section class="product-collect-section">
            <div class="home-collect">
                <div class="home-collect-container">
                    <div class="home-collect-form-section">
                        <h2 class="form-title">Customize Your Lifting Solutions</h2>
                        <div class="home-collect-form">
                            <div class="home-collect-field">
                                <label>Name</label>
                                <input type="text" class="home-collect-name" placeholder="Name">
                            </div>
                            <div class="home-collect-field">
                                <label>Email</label>
                                <input type="text" class="home-collect-email" placeholder="Email">
                            </div>
                            <div class="home-collect-field full-width">
                                <label>Phone / Whatsapp</label>
                                <input type="text" class="home-collect-phone" placeholder="Phone / Whatsapp">
                            </div>
                            <div class="home-collect-field full-width">
                                <label>Message</label>
                                <textarea class="home-collect-message" placeholder="Tell us your lifting requirement, capacity, span, lifting height or project details."></textarea>
                            </div>
                            <div class="home-collect-submit">SEND MESSAGE</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <!-- Case Studies Section (rendered globally on products pages for excellent cross-linking) -->
    <?php if(!(empty($case_list) || (($case_list instanceof \think\Collection || $case_list instanceof \think\Paginator ) && $case_list->isEmpty()))): ?>
        <div class="home-case product-case">
            <div class="title">CASE STUDY</div>
            <div class="swiper product-case-swiper">
                <div class="swiper-wrapper">
                    <?php if(is_array($case_list) || $case_list instanceof \think\Collection || $case_list instanceof \think\Paginator): if( count($case_list)==0 ) : echo "" ;else: foreach($case_list as $k=>$vo): if($k < 4): ?>
                            <div class="swiper-slide case-item" title="<?php echo $vo['post_title']; ?>">
                                <a href="<?php echo cmf_url('portal/index/industries_info',array('id'=>$vo['id'])); ?>">
                                    <div class="case-item-img">
                                        <img loading="lazy" decoding="async" src="<?php echo cmf_get_image_url($vo['more']['thumbnail']); ?>" alt="<?php echo $vo['post_title']; ?>">
                                    </div>
                                    <div class="case-item-title"><?php echo $vo['post_title']; ?></div>
                                    <div class="case-item-desc"><?php echo $vo['post_excerpt']; ?></div>
                                </a>
                            </div>
                        <?php endif; ?>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </div>
                <div class="swiper-pagination product-case-pagination"></div>
            </div>
        </div>
    <?php endif; ?>

    <!--FOOT START-->
<div class="footer">
    <div class="footer-logo">
        <img loading="lazy" decoding="async" src="/themes/simpleboot3_mobile/public/assets/images/logo-white.svg" alt="logo">
    </div>
    <div class="footer-line"></div>
    <div class="footer-content">
        <div class="footer-contact clearfix">
            <div class="footer-contact-item">
                <img loading="lazy" decoding="async" src="/themes/simpleboot3_mobile/public/assets/images/foot-email.webp" alt="email">
                <p class="footer-contact-item-content">
                    <a onclick="gtag_report_conversion('mailto:<?php echo $site_info['email']; ?>');"><?php echo $site_info['email']; ?></a>
                </p>
            </div>
            <div class="footer-contact-item">
                <img loading="lazy" decoding="async" src="/themes/simpleboot3_mobile/public/assets/images/foot-location.webp"
                    alt="location">
                <p class="footer-contact-item-content"><?php echo $site_info['address']; ?></p>
            </div>
            <?php 
                $cleanNumber = preg_replace('/[^0-9]/', '', $site_info['whatsapp']);
                if (strpos($cleanNumber, '0') === 0) {
                $cleanNumber = preg_replace('/^0+/', '', $cleanNumber);
                }
             if(!empty($site_info['whatsapp'])): ?>
                <div class="footer-contact-item">
                    <img loading="lazy" decoding="async" src="/themes/simpleboot3_mobile/public/assets/images/quote-whatsapp.webp"
                        alt="whatsapp">
                    <p class="footer-contact-item-content">
                        <a onclick="gtag_report_conversion('https://api.whatsapp.com/send?phone=<?php echo $cleanNumber; ?>');"
                            target="_blank"><?php echo $site_info['whatsapp']; ?></a>
                    </p>
                </div>
            <?php endif; if(!empty($site_info['sale_tel'])): ?>
                <div class="footer-contact-item">
                    <img loading="lazy" decoding="async" src="/themes/simpleboot3_mobile/public/assets/images/foot-phone.webp"
                        alt="phone">
                    <p class="footer-contact-item-content">
                        <a onclick="gtag_report_conversion('tel:<?php echo $site_info['sale_tel']; ?>');"><?php echo $site_info['sale_tel']; ?></a>
                    </p>
                </div>
            <?php endif; if(!empty($site_info['wechat'])): ?>
                <div class="footer-contact-item">
                    <img loading="lazy" decoding="async" src="/themes/simpleboot3_mobile/public/assets/images/foot-wechat.webp"
                        alt="wechat">
                    <p class="footer-contact-item-content">
                        <a target="_blank"><?php echo $site_info['wechat']; ?></a>
                    </p>
                </div>
            <?php endif; ?>
            <div class="footer-contact-social">
                <a href="<?php echo (isset($site_info['linkedin']) && ($site_info['linkedin'] !== '')?$site_info['linkedin']:'javascript:;'); ?>"><img loading="lazy" decoding="async"
                        src="/themes/simpleboot3_mobile/public/assets/images/linkedin.webp" alt="linkedin"></a>
                <a href="<?php echo (isset($site_info['facebook']) && ($site_info['facebook'] !== '')?$site_info['facebook']:'javascript:;'); ?>"><img loading="lazy" decoding="async"
                        src="/themes/simpleboot3_mobile/public/assets/images/facebook.webp" alt="facebook"></a>
                <a href="<?php echo (isset($site_info['youtube']) && ($site_info['youtube'] !== '')?$site_info['youtube']:'javascript:;'); ?>"><img loading="lazy" decoding="async"
                        src="/themes/simpleboot3_mobile/public/assets/images/youtube.webp" alt="youtube"></a>
                <a class="vk-social" href="<?php echo (isset($site_info['vk']) && ($site_info['vk'] !== '')?$site_info['vk']:'javascript:;'); ?>"><img loading="lazy" decoding="async"
                        src="/themes/simpleboot3_mobile/public/assets/images/header-vk.png" alt="vk"></a>
            </div>
        </div>

        <div class="footer-feedback">
            <div class="footer-feedback-item">
                <label>NAME:</label>
                <input type="text" name="footer-name" value="" placeholder="Please Enter">
            </div>
            <div class="footer-feedback-line"></div>
            <div class="footer-feedback-item">
                <label>EMAIL:</label>
                <input type="text" name="footer-email" value="" placeholder="Please Enter">
            </div>
            <div class="footer-feedback-line"></div>
            <div class="footer-feedback-item">
                <label>PHONE:</label>
                <input type="text" class="footer-phone" name="footer-phone" value="" placeholder="Please Enter">
            </div>
            <div class="footer-feedback-line"></div>
            <div class="footer-feedback-item">
                <label>MESSAGE:</label>
                <input type="text" name="footer-message" value="" placeholder="Please Enter">
            </div>
            <div class="footer-feedback-line"></div>
            <button class="footer-feedback-btn">Submit Your Request</button>
        </div>
        <div class="footer-bottom"
            style="text-align: center; color: rgba(255,255,255,0.6); font-size: 1.2rem; margin-top: 2rem; padding-bottom: 2rem;">
            Copyright &copy; HENAN WEIHUA CO.,LTD. All Rights Reserved.
        </div>
    </div>
    <div class="right_fix">
        <div class="right_fix_connect">
            <div class="right_fix_box right_fix_email">
                <a href="mailto:<?php echo $site_info['email']; ?>">
                    <img loading="lazy" decoding="async" src="/themes/simpleboot3_mobile/public/assets/images/fix-email-mobile.webp"
                        alt="email" title="email">
                    <p class="right_fix_box_title">Send Email</p>
                </a>
            </div>
            <div class="right_fix_box right_fix_whatsapp">
                <a href="https://api.whatsapp.com/send?phone=<?php echo $cleanNumber; ?>">
                    <img loading="lazy" decoding="async" src="/themes/simpleboot3_mobile/public/assets/images/fix-whatsapp-mobile.webp"
                        alt="whatsapp" title="whatsapp">
                    <p class="right_fix_box_title">WhatsApp</p>
                </a>
            </div>
            <div class="right_fix_box right_fix_form">
                <a href="javascript:;">
                    <img loading="lazy" decoding="async" src="/themes/simpleboot3_mobile/public/assets/images/fix-form-mobile.webp"
                        alt="form" title="form">
                    <p class="right_fix_box_title">Get A Quote</p>
                </a>
            </div>
            <div class="right_fix_box right_fix_wechat">
                <a href="tel:<?php echo $site_info['sale_tel']; ?>">
                    <img loading="lazy" decoding="async" src="/themes/simpleboot3_mobile/public/assets/images/fix-tel-mobile.webp"
                        alt="sale_tel" title="sale_tel">
                    <p class="right_fix_box_title">Sale Tel</p>
                </a>
            </div>
        </div>
    </div>
</div>
<!--FOOT END-->

<div class="popover_wrap" style="display: none;">
    <div class="popover_container">
        <div class=popover_close>
            <img loading="lazy" decoding="async" src="/themes/simpleboot3_mobile/public/assets/images/close.png" alt="">
        </div>
        <div class="popover_content">
            <div class="popover_title">
                <h2>Develop your lifting solution</h2>
                <p class="popover_title_description">Contact us today by email at :<a
                        onclick="gtag_report_conversion('mailto:<?php echo $site_info['email']; ?>');"><?php echo $site_info['email']; ?></a>, or fill
                    out the form below.</p>
            </div>
            <div class="popover_form">
                <form method="post">
                    <div class="popover_form_name">
                        <input id="popover-name" type="text" name="name" placeholder="Name:">
                    </div>
                    <div class="popover_form_phone">
                        <input id="popover-phone" type="text" name="phone" placeholder="Phone / WhatsApp:">
                    </div>
                    <div class="popover_form_email">
                        <input id="popover-email" type="text" name="email" placeholder="E-mail:">
                    </div>
                    <div class="popover_form_content">
                        <textarea id="popover-content" name="content" placeholder="Message:"></textarea>
                    </div>
                    <div class="popover_form_submit">
                        <input name="product_id" id="product-id" type="hidden" value="<?php echo (isset($product['id']) && ($product['id'] !== '')?$product['id']:''); ?>">
                        <input name="file" id="file" type="hidden" value="">
                        <input type="hidden" name="feedback_type" id="feedback_type" value="2">
                        <input type="hidden" id="file_url" value="">
                        <button id="popover-submit" type="button">SUBMIT</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Floating WhatsApp Button (above live chat) -->
<?php if(!empty($site_info['whatsapp'])): 
        $cleanNumberWa = preg_replace('/[^0-9]/', '', $site_info['whatsapp']);
     ?>
    <a href="https://api.whatsapp.com/send?phone=<?php echo $cleanNumberWa; ?>" target="_blank" id="mobile-float-whatsapp" title="WhatsApp">
        <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946C.06 5.348 5.397.01 12.008.01c3.202.001 6.212 1.246 8.477 3.513 2.262 2.268 3.507 5.28 3.505 8.484-.004 6.657-5.34 11.997-11.953 11.997-2.005-.001-3.973-.502-5.724-1.455L0 24zm6.59-4.846c1.6.95 3.188 1.449 4.825 1.451 5.436 0 9.86-4.37 9.864-9.799.002-2.63-1.023-5.101-2.885-6.965C16.528 1.978 14.057.95 11.433.95c-5.449 0-9.873 4.38-9.877 9.808 0 1.813.499 3.59 1.443 5.161l-1.005 3.67 3.774-.984zm11.085-6.732c-.3-.15-1.774-.875-2.05-.975-.273-.1-.472-.15-.672.15-.2.3-.775.975-.95 1.174-.175.2-.35.225-.65.075-1.127-.566-1.958-1.034-2.738-2.372-.2-.35-.2-.6-.35-.75-.15-.15-.3-.35-.45-.525-.15-.175-.2-.3-.3-.5-.1-.2-.05-.375.025-.525.075-.15.672-.782.75-.95.08-.175.04-.325-.02-.475-.06-.15-.672-1.62-.92-2.21-.242-.58-.487-.5-.672-.51-.173-.008-.371-.01-.57-.01-.2 0-.525.075-.8.375-.273.3-1.042 1.016-1.042 2.479 0 1.462 1.067 2.877 1.217 3.078.15.2 2.1 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.774-.725 2.024-1.425.25-.7.25-1.299.175-1.425-.076-.125-.275-.2-.575-.35z"/>
        </svg>
    </a>
    <style>
        #mobile-float-whatsapp {
            position: fixed;
            bottom: 80px;
            right: 10px;
            width: 60px;
            height: 60px;
            background-color: #25D366;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 99998;
            box-shadow: 0 4px 14px rgba(37,211,102,0.5);
            opacity: 0;
            transform: scale(0.5);
            pointer-events: none;
            transition: opacity 0.4s ease, transform 0.4s ease;
        }
        #mobile-float-whatsapp.wa-visible {
            opacity: 1;
            transform: scale(1);
            pointer-events: auto;
        }
        #mobile-float-whatsapp:active {
            transform: scale(0.92);
        }
        #mobile-float-whatsapp svg {
            width: 32px;
            height: 32px;
            fill: #fff;
        }
        #mobile-float-whatsapp::after {
            content: '';
            position: absolute;
            width: 100%;
            height: 100%;
            border-radius: 50%;
            background: #25D366;
            opacity: 0.35;
            z-index: -1;
            animation: wa-pulse 2s ease-out infinite;
        }
        @keyframes wa-pulse {
            0%   { transform: scale(1);   opacity: 0.35; }
            100% { transform: scale(1.7); opacity: 0; }
        }
    </style>
    <script>
        setTimeout(function () {
            var btn = document.getElementById('mobile-float-whatsapp');
            if (btn) btn.classList.add('wa-visible');
        }, 4000);
    </script>
<?php endif; ?>

<!-- Tawk.to position alignment: match WhatsApp button right:6px -->
<script>
    var Tawk_API = Tawk_API || {};
    Tawk_API.customStyle = {
        zIndex: 99997,
        visibility: {
            mobile: {
                position: 'br',
                xOffset: 6,
                yOffset: 160
            }
        }
    };
</script>

<?php if(!(empty($site_info['salesiq']) || (($site_info['salesiq'] instanceof \think\Collection || $site_info['salesiq'] instanceof \think\Paginator ) && $site_info['salesiq']->isEmpty()))): ?>
    <div id="zoho-salesiq-raw-mobile" style="display: none;"><?php echo htmlspecialchars_decode($site_info['salesiq']); ?></div>
    <script>
        $(document).ready(function () {
            var salesiqLoaded = false;
            function loadSalesIQ() {
                if (salesiqLoaded) return;
                salesiqLoaded = true;
                
                var rawContainer = document.getElementById('zoho-salesiq-raw-mobile');
                if (!rawContainer) return;
                
                var tempDiv = document.createElement('div');
                tempDiv.innerHTML = rawContainer.innerHTML;
                
                // Inject non-script elements (a, style, div, etc.)
                while (tempDiv.firstChild) {
                    var node = tempDiv.firstChild;
                    if (node.nodeName && node.nodeName.toLowerCase() === 'script') {
                        tempDiv.removeChild(node);
                    } else {
                        document.body.appendChild(node);
                    }
                }
                
                // Re-parse and inject scripts (must recreate to execute)
                var tempDiv2 = document.createElement('div');
                tempDiv2.innerHTML = rawContainer.innerHTML;
                var scripts = tempDiv2.getElementsByTagName('script');
                var scriptArr = [];
                for (var i = 0; i < scripts.length; i++) { scriptArr.push(scripts[i]); }
                for (var i = 0; i < scriptArr.length; i++) {
                    var s = document.createElement('script');
                    for (var j = 0; j < scriptArr[i].attributes.length; j++) {
                        var attr = scriptArr[i].attributes[j];
                        s.setAttribute(attr.name, attr.value);
                    }
                    if (scriptArr[i].src) {
                        s.src = scriptArr[i].src;
                    } else {
                        s.text = scriptArr[i].text || scriptArr[i].textContent || scriptArr[i].innerHTML;
                    }
                    document.body.appendChild(s);
                }
                rawContainer.remove();
            }
            
            setTimeout(function () {
                window.addEventListener('scroll', loadSalesIQ, { passive: true, once: true });
                window.addEventListener('mousemove', loadSalesIQ, { passive: true, once: true });
                window.addEventListener('touchstart', loadSalesIQ, { passive: true, once: true });
                window.addEventListener('click', loadSalesIQ, { passive: true, once: true });
            }, 3000);
            
            setTimeout(loadSalesIQ, 8000);
        });
    </script>
<?php endif; if(!(empty($site_info['google_tag_body']) || (($site_info['google_tag_body'] instanceof \think\Collection || $site_info['google_tag_body'] instanceof \think\Paginator ) && $site_info['google_tag_body']->isEmpty()))): ?>
    <?php echo htmlspecialchars_decode($site_info['google_tag_body']); ?>
<?php endif; ?>

<script>
    $(document).ready(function () {
        var itiReady = false;
        var itiLoading = false;
        var itiPromise = null;

        function appendStylesOnce() {
            if (document.getElementById('intl-tel-inline-style')) {
                return;
            }
            var style = document.createElement('style');
            style.id = 'intl-tel-inline-style';
            style.innerHTML = `
                .iti {
                    width: 100%;
                    display: block !important;
                    margin-bottom: 10px;
                }
                .iti__country-list {
                    z-index: 9999;
                    color: #333;
                    text-align: left;
                }
                .iti input {
                    padding-left: 52px !important;
                    width: 100% !important;
                }
                .iti__selected-flag {
                    padding: 0 8px 0 12px !important;
                    background: transparent !important;
                }
                .iti__flag-container {
                    height: 100%;
                    display: flex;
                    align-items: center;
                }
                .iti--container {
                    z-index: 100010 !important;
                }
            `;
            document.head.appendChild(style);
        }

        function loadCss(href) {
            return new Promise(function (resolve) {
                var existed = document.querySelector('link[href="' + href + '"]');
                if (existed) {
                    resolve();
                    return;
                }
                var link = document.createElement('link');
                link.rel = 'stylesheet';
                link.href = href;
                link.onload = resolve;
                link.onerror = resolve;
                document.head.appendChild(link);
            });
        }

        function loadJs(src) {
            return new Promise(function (resolve, reject) {
                var existed = document.querySelector('script[src="' + src + '"]');
                if (existed) {
                    if (window.intlTelInput) {
                        resolve();
                    } else {
                        existed.addEventListener('load', function () { resolve(); }, { once: true });
                        existed.addEventListener('error', function () { reject(new Error('load failed')); }, { once: true });
                    }
                    return;
                }
                var script = document.createElement('script');
                script.src = src;
                script.async = true;
                script.onload = resolve;
                script.onerror = function () { reject(new Error('load failed')); };
                document.body.appendChild(script);
            });
        }

        function initIntlTelInputs() {
            if (!window.intlTelInput) {
                return;
            }
            var phoneInputs = document.querySelectorAll('.quote-phone, .footer-phone, #popover-phone, .home-collect-phone');
            phoneInputs.forEach(function (input) {
                if (input._iti) {
                    return;
                }
                var iti = window.intlTelInput(input, {
                    initialCountry: "auto",
                    dropdownContainer: document.body,
                    useFullscreenPopup: false,
                    geoIpLookup: function (callback) {
                        fetch("https://ipapi.co/json")
                            .then(function (res) { return res.json(); })
                            .then(function (data) { callback(data.country_code || "us"); })
                            .catch(function () { callback("us"); });
                    },
                    utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@23.0.10/build/js/utils.js"
                });
                input._iti = iti;
            });
            itiReady = true;
        }

        function ensureIntlTelInputLoaded() {
            if (itiReady) {
                return Promise.resolve();
            }
            if (itiLoading && itiPromise) {
                return itiPromise;
            }

            itiLoading = true;
            itiPromise = Promise.all([
                loadCss("https://cdn.jsdelivr.net/npm/intl-tel-input@23.0.10/build/css/intlTelInput.css"),
                loadJs("https://cdn.jsdelivr.net/npm/intl-tel-input@23.0.10/build/js/intlTelInput.min.js")
            ]).then(function () {
                appendStylesOnce();
                initIntlTelInputs();
            }).catch(function () {
                // Keep form available even when CDN/network fails
            }).finally(function () {
                itiLoading = false;
            });

            return itiPromise;
        }

        $(document).on('focus click', '.quote-phone, .footer-phone, #popover-phone, .home-collect-phone, .right_fix_form, .footer-feedback-btn, #popover-submit', function () {
            ensureIntlTelInputLoaded();
        });

        // Listen to interaction to load immediately
        window.addEventListener('scroll', ensureIntlTelInputLoaded, { passive: true, once: true });
        window.addEventListener('mousemove', ensureIntlTelInputLoaded, { passive: true, once: true });
        window.addEventListener('touchstart', ensureIntlTelInputLoaded, { passive: true, once: true });
    });
</script>
</div>
</body>
</html>
