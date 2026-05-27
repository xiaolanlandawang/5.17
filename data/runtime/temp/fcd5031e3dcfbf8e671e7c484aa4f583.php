<?php /*a:5:{s:68:"C:\laragon\www\weihua\public/themes/simpleboot3/portal\\product.html";i:1779431578;s:64:"C:\laragon\www\weihua\public/themes/simpleboot3/public\head.html";i:1779697000;s:63:"C:\laragon\www\weihua\public/themes/simpleboot3/public\nav.html";i:1779265794;s:74:"C:\laragon\www\weihua\public/themes/simpleboot3/public\crane_selector.html";i:1778987227;s:64:"C:\laragon\www\weihua\public/themes/simpleboot3/public\foot.html";i:1779331371;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo (isset($page_title) && ($page_title !== '')?$page_title:$site_info['site_name']); ?></title>
    <meta name="keywords" content="<?php echo (isset($page_keywords) && ($page_keywords !== '')?$page_keywords:$site_info['site_name']); ?>">
    <meta name="description" content="<?php echo (isset($page_description) && ($page_description !== '')?$page_description:$site_info['site_name']); ?>">
    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-2V25J0DR5Z"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-2V25J0DR5Z');
</script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="shortcut icon" type="image/x-icon" href="/themes/simpleboot3/public/assets/images/logo.ico">
<link href="/themes/simpleboot3/public/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="/themes/simpleboot3/public/assets/css/swiper-bundle.min.css" rel="stylesheet" type="text/css">
<link href="/themes/simpleboot3/public/assets/css/common.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="/themes/simpleboot3/public/assets/js/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="/themes/simpleboot3/public/assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/themes/simpleboot3/public/assets/js/swiper-bundle.min.js"></script>
<script type="text/javascript" src="/themes/simpleboot3/public/assets/js/common.js"></script>

<?php if(!(empty($site_info['google_analytics']) || (($site_info['google_analytics'] instanceof \think\Collection || $site_info['google_analytics'] instanceof \think\Paginator ) && $site_info['google_analytics']->isEmpty()))): ?>
    <?php echo htmlspecialchars_decode($site_info['google_analytics']); ?>
<?php endif; if(!(empty($site_info['google_head']) || (($site_info['google_head'] instanceof \think\Collection || $site_info['google_head'] instanceof \think\Paginator ) && $site_info['google_head']->isEmpty()))): ?>
    <?php echo htmlspecialchars_decode($site_info['google_head']); ?>
<?php endif; ?>

<script type="text/javascript">
    (function(c,l,a,r,i,t,y){
        c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
        t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;
        y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);
    })(window, document, "clarity", "script", "wwe66llrvz");
</script>


<style>
    #zsiq_chat_wrap{
        max-height: 550px !important;
    }
</style>
    <link href="/themes/simpleboot3/public/assets/css/product.css" rel="stylesheet" type="text/css">
    <link href="/themes/simpleboot3/public/assets/css/crane-selector.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="/themes/simpleboot3/public/assets/js/product.js"></script>
</head>
<body>

<?php if(!(empty($site_info['google_body']) || (($site_info['google_body'] instanceof \think\Collection || $site_info['google_body'] instanceof \think\Paginator ) && $site_info['google_body']->isEmpty()))): ?>
    <?php echo htmlspecialchars_decode($site_info['google_body']); ?>
<?php endif; 
    $cleanNumber = preg_replace('/[^0-9]/', '', $site_info['whatsapp']);
    if (strpos($cleanNumber, '0') === 0) {
    $cleanNumber = preg_replace('/^0+/', '', $cleanNumber);
    }
 ?>
<!--NAV START-->

<div class="header">
    <div class="header-top">
        <div class="header-container">
            <div class="header-contact">
                <div class="header-contact-item">
                    <a href="mailto:<?php echo $site_info['email']; ?>">
                        <img src="/themes/simpleboot3/public/assets/images/header-email.png" alt="email">
                        <span class="contact-label">E-Mail:</span> <?php echo $site_info['email']; ?>
                    </a>
                </div>
                <div class="header-contact-item">
                    <a href="tel:<?php echo $site_info['sale_tel']; ?>">
                        <img src="/themes/simpleboot3/public/assets/images/header-tel.svg" alt="tel">
                        <span class="contact-label">Tel:</span> <?php echo $site_info['sale_tel']; ?>
                    </a>
                </div>
                <div class="header-contact-item">
                    <a href="https://api.whatsapp.com/send?phone=<?php echo $cleanNumber; ?>">
                        <img src="/themes/simpleboot3/public/assets/images/header-whatsapp.png" alt="whatsapp">
                        <span class="contact-label">WhatsApp:</span> <?php echo $site_info['whatsapp']; ?>
                    </a>
                </div>
                <div class="header-contact-item">
                    <img src="/themes/simpleboot3/public/assets/images/header-wechat.png" alt="wechat">
                    <span class="contact-label">Wechat:</span> <?php echo $site_info['wechat']; ?>
                </div>
            </div>
            <div class="header-link">
                <div class="header-link-item">
                    <a href="<?php echo $site_info['facebook']; ?>"><img src="/themes/simpleboot3/public/assets/images/header-facebook.png" alt="facebook"></a>
                </div>
                <div class="header-link-item">
                    <a href="<?php echo $site_info['youtube']; ?>"><img src="/themes/simpleboot3/public/assets/images/header-youtube.png" alt="youtube"></a>
                </div>
                <div class="header-link-item">
                    <a href="<?php echo $site_info['linkedin']; ?>"><img src="/themes/simpleboot3/public/assets/images/header-linkedin.png" alt="linkedin"></a>
                </div>
                <div class="header-link-item">
                    <a href="<?php echo $site_info['vk']; ?>"><img src="/themes/simpleboot3/public/assets/images/header-vk.png" alt="vk"></a>
                </div>
            </div>
        </div>
    </div>
    <div class="header-container">
        <div class="header-logo">
            <a href="/">
                <img src="/themes/simpleboot3/public/assets/images/logo.svg" alt="<?php echo (isset($site_info['site_name']) && ($site_info['site_name'] !== '')?$site_info['site_name']:''); ?>">
            </a>
        </div>

        <ul class="header-nav">
            <li class="nav-item">
                <a class="nav-title" href="/">Home</a>
            </li>
            <li class="nav-item nav-item-about">
                <a class="nav-title" href="<?php echo cmf_url('portal/index/about'); ?>">About Us</a>
                <div class="nav-sub about-nav">
                    <div class="nav-sub-item">
                        <a href="<?php echo cmf_url('portal/index/about'); ?>">About Weihua</a>
                    </div>
                    <div class="nav-sub-item">
                        <a href="<?php echo cmf_url('portal/index/cert'); ?>">Certificates</a>
                    </div>
                    <div class="nav-sub-item">
                        <a href="<?php echo cmf_url('portal/index/create'); ?>">Innovation&Creation</a>
                    </div>
                </div>
            </li>
            <li class="nav-item nav-item-product">
                <a class="nav-title" href="<?php echo cmf_url('portal/index/product'); ?>">Products</a>
                <div class="nav-sub product-nav">
                    <?php if(is_array($category_list) || $category_list instanceof \think\Collection || $category_list instanceof \think\Paginator): if( count($category_list)==0 ) : echo "" ;else: foreach($category_list as $key=>$vo): ?>
                        <div class="nav-sub-item">
                            <a href="<?php echo cmf_url('portal/index/product',array('id'=>$vo['id'])); ?>">
                                <?php echo $vo['name']; ?>
                            </a>
                        </div>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </div>
            </li>
            <li class="nav-item nav-item-about">
                <a class="nav-title" href="<?php echo cmf_url('portal/index/service'); ?>">Service</a>
                <div class="nav-sub about-nav">
                    <div class="nav-sub-item">
                        <a href="<?php echo cmf_url('portal/index/service'); ?>">Global Market</a>
                    </div>
                    <div class="nav-sub-item">
                        <a href="<?php echo cmf_url('portal/index/excellent_service'); ?>">Excellent Service</a>
                    </div>
                    <div class="nav-sub-item">
                        <a href="<?php echo cmf_url('portal/index/download'); ?>">Download</a>
                    </div>
                </div>
            </li>
            <li class="nav-item nav-item-about">
                <a class="nav-title" href="<?php echo cmf_url('portal/index/industries'); ?>">Case</a>
            </li>
            <li class="nav-item nav-item-about">
                <a class="nav-title" href="<?php echo cmf_url('portal/index/news'); ?>">News Center</a>
                <div class="nav-sub about-nav">
                    <?php if(is_array($news_category) || $news_category instanceof \think\Collection || $news_category instanceof \think\Paginator): if( count($news_category)==0 ) : echo "" ;else: foreach($news_category as $key=>$vo): ?>
                        <div class="nav-sub-item">
                            <a href="<?php echo cmf_url('portal/index/news',array('id'=>$vo['id'])); ?>">
                                <?php echo $vo['name']; ?>
                            </a>
                        </div>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </div>
            </li>
            
            <li class="nav-item nav-item-contact">
                <a class="nav-title" href="<?php echo cmf_url('portal/index/quote'); ?>">Get A Quote</a>
            </li>
        </ul>

    </div>
</div>
<!--NAV END-->



<div class="product-page">
    <?php if(!$is_category_page): ?>
        <section class="products-banner" style="background-image:url('<?php echo $hero_image; ?>');">
            <div class="products-banner__inner">
                <h1 class="products-banner__title"><?php echo $hero_title; ?></h1>
                <p class="products-banner__desc"><?php echo $hero_description; ?></p>
                <a href="javascript:;" class="products-banner__btn" id="inquiry">Get A Free Quote</a>
            </div>
        </section>

        <section class="products-category-section reveal">
            <div class="products-category-section__inner">
                <div class="products-category-section__head">
                    <h2 class="products-category-section__title"><?php echo $category_headline; ?></h2>
                    <p class="products-category-section__desc"><?php echo $category_intro; ?></p>
                </div>

                <ul class="category-grid">
                    <?php if(is_array($category_cards) || $category_cards instanceof \think\Collection || $category_cards instanceof \think\Paginator): if( count($category_cards)==0 ) : echo "" ;else: foreach($category_cards as $key=>$vo): ?>
                        <li class="category-grid__item">
                            <a href="<?php echo cmf_url('portal/index/product',array('id'=>$vo['id'])); ?>" class="category-card">
                                <div class="category-card__image-wrap">
                                    <img src="<?php echo cmf_get_image_url($vo['thumbnail']); ?>" alt="<?php echo $vo['name']; ?>" class="category-card__image">
                                </div>
                                <div class="category-card__content">
                                    <div class="category-card__title"><?php echo $vo['name']; ?></div>
                                    <div class="category-card__desc"><?php echo $vo['custom_description']; ?></div>
                                    <div class="category-card__action">Explore Products</div>
                                </div>
                            </a>
                        </li>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
            </div>
        </section>
    <?php else: ?>
        <div class="product-breadcrumb">
            <div class="product-breadcrumb__inner">
                <a href="/">Home</a>
                <span>&gt;</span>
                <a href="<?php echo cmf_url('portal/index/product'); ?>">Products</a>
                <span>&gt;</span>
                <span><?php echo $current_category_name; ?></span>
            </div>
        </div>

        <section class="category-hero reveal">
            <div class="category-hero__inner">
                <div class="category-hero__content">
                    <h1 class="category-hero__title"><?php echo $hero_title; ?></h1>
                    <p class="category-hero__desc"><?php echo $hero_description; ?></p>
                    <div class="category-hero__actions">
                        <a href="javascript:;" class="category-hero__btn" id="inquiry">Get A Free Quote</a>
                    </div>
                </div>
                <div class="category-hero__media">
                    <div class="category-hero__image-wrap">
                        <img src="<?php echo $hero_image; ?>" alt="<?php echo $current_category_name; ?>" class="category-hero__image">
                    </div>
                </div>
            </div>
        </section>

        <section class="products-showcase reveal">
            <div class="products-showcase__head">
                <h2 class="products-showcase__title"><?php echo $category_headline; ?></h2>
                <p class="products-showcase__desc"><?php echo $category_intro; ?></p>
            </div>

            <div class="product_list_warp">
                <ul class="product_list">
                    <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): if( count($list)==0 ) : echo "" ;else: foreach($list as $key=>$vo): ?>
                        <li class="product_item">
                            <a href="<?php echo cmf_url('portal/index/product_info',array('id'=>$vo['id'])); ?>" class="product_item__link">
                                <div class="product_list_item_img">
                                    <img src="<?php echo cmf_get_image_url($vo['thumbnail']); ?>" alt="<?php echo $vo['title']; ?>" title="<?php echo $vo['title']; ?>">
                                </div>
                                <div class="product_item__content">
                                    <div class="product_list_item_title"><?php echo $vo['title']; ?></div>
                                    <div class="product_list_item_category"><?php echo (isset($vo['industry']) && ($vo['industry'] !== '')?$vo['industry']:'Engineered lifting equipment for high-efficiency industrial material handling.'); ?></div>
                                </div>
                            </a>
                            <div class="product_item__footer">
                                <div class="product_list_item_btn" id="inquiry">CONSULT</div>
                            </div>
                        </li>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>

                <?php if(count($list) == 0): ?>
                    <div class="product-empty">
                        <h3>No products available</h3>
                        <p>This category does not have visible products yet. Once products are added in the backend, they will appear here automatically.</p>
                    </div>
                <?php endif; ?>

                <div class="products-content-right-page">
                    <ul class="pagination"><?php echo $page; ?></ul>
                </div>
            </div>
        </section>

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


    <?php if(!(empty($case_list) || (($case_list instanceof \think\Collection || $case_list instanceof \think\Paginator ) && $case_list->isEmpty()))): ?>
        <div class="home-case reveal product-case">
            <div class="title">CASE STUDY</div>
            <div class="product-case-carousel">
                <div class="swiper product-case-swiper">
                    <div class="swiper-wrapper">
                        <?php if(is_array($case_list) || $case_list instanceof \think\Collection || $case_list instanceof \think\Paginator): if( count($case_list)==0 ) : echo "" ;else: foreach($case_list as $key=>$vo): ?>
                            <div class="swiper-slide case-item" title="<?php echo $vo['post_title']; ?>">
                                <a href="<?php echo cmf_url('portal/index/industries_info',array('id'=>$vo['id'])); ?>">
                                    <div class="case-item-img">
                                        <img loading="lazy" decoding="async" src="<?php echo cmf_get_image_url($vo['more']['thumbnail']); ?>" alt="<?php echo $vo['post_title']; ?>">
                                    </div>
                                    <div class="case-item-title"><?php echo $vo['post_title']; ?></div>
                                    <div class="case-item-desc"><?php echo $vo['post_excerpt']; ?></div>
                                </a>
                            </div>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </div>
                </div>
                <div class="product-case-button-prev"></div>
                <div class="product-case-button-next"></div>
                <div class="product-case-pagination"></div>
            </div>
        </div>
    <?php endif; if($is_category_page): if(!(empty($category_faq['faq']) || (($category_faq['faq'] instanceof \think\Collection || $category_faq['faq'] instanceof \think\Paginator ) && $category_faq['faq']->isEmpty()))): 
                $categoryFaqTitle = !empty($category_faq['faq_title']) ? $category_faq['faq_title'] : 'FAQ';
                $categoryFaqContactLink = !empty($category_faq['faq_contact_btn_link']) ? $category_faq['faq_contact_btn_link'] : cmf_url('portal/index/quote');
                $categoryFaqContactTitle = !empty($category_faq['faq_contact_title']) ? $category_faq['faq_contact_title'] : 'Can not Find Your Question?';
                $categoryFaqContactDesc = !empty($category_faq['faq_contact_desc']) ? $category_faq['faq_contact_desc'] : 'If you can not find the answer, contact us and let us know how we can help you.';
                $categoryFaqContactBtnText = !empty($category_faq['faq_contact_btn_text']) ? $category_faq['faq_contact_btn_text'] : 'Contact Us';
             ?>
            <div class="faq reveal product-faq">
                <div class="title"><?php echo $categoryFaqTitle; ?></div>
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
                    <div class="faq-contact">
                        <div class="faq-contact-icon">?</div>
                        <div class="faq-contact-title"><?php echo $categoryFaqContactTitle; ?></div>
                        <div class="faq-contact-desc"><?php echo $categoryFaqContactDesc; ?></div>
                        <a class="faq-contact-btn" href="<?php echo $categoryFaqContactLink; ?>"><?php echo $categoryFaqContactBtnText; ?></a>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    <?php endif; ?>

    <section class="product-collect-section reveal">
        <div class="home-collect">
            <div class="home-collect-container">
                <div class="home-collect-left">
                    <div class="quote-intro">
                        <h2 class="intro-title">Need a Quick Quote? Help Us Serve You Better!</h2>
                        <p class="intro-subtitle">To ensure we provide the most accurate solution, please share:</p>
                        <ul class="intro-list">
                            <li>
                                <strong>1. Application:</strong> What will the crane be used for? 
                            </li>
                            <li>
                                <strong>2. Key Specs:</strong> Lifting capacity (ton), span (m), and lifting height (m) required.
                            </li>
                            <li>
                                <strong>3. Project Details:</strong> Site conditions (indoor/outdoor), budget range, and timeline.
                            </li>
                        </ul>
                        <div class="intro-footer">
                            Our team will recommend the most suitable and cost-effective solution for your project.
                        </div>
                    </div>
                    
                </div>

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
</div>

<!--FOOT START-->
<div class="footer">
    <div class="footer-content clearfix">

        <div class="footer-about">
            <div class="footer-logo">
                <img src="/themes/simpleboot3/public/assets/images/logo-white.svg" alt="logo">
            </div>
            <div class="footer-about-desc">
                HENAN WEIHUA CO., LTD. is a leading professional industry crane manufacturer and exporter located in the
                crane hometown of China. As a trusted name in the industry, we cover more than 2/3 of the crane market
                in China. Our expertise lies in designing, manufacturing, installation, sales, and consultation for
                overhead cranes, gantry cranes, port cranes, electric hoists, and other related equipment.
            </div>
            <div class="footer-social">
                <a href="<?php echo $site_info['facebook']; ?>" target="_blank" title="Facebook">
                    <img src="/themes/simpleboot3/public/assets/images/header-facebook.png" alt="facebook">
                </a>
                <a href="<?php echo $site_info['linkedin']; ?>" target="_blank" title="LinkedIn">
                    <img src="/themes/simpleboot3/public/assets/images/header-linkedin.png" alt="linkedin">
                </a>
                <a href="<?php echo $site_info['youtube']; ?>" target="_blank" title="YouTube">
                    <img src="/themes/simpleboot3/public/assets/images/header-youtube.png" alt="youtube">
                </a>
                <a href="<?php echo $site_info['vk']; ?>" target="_blank" title="VK">
                    <img src="/themes/simpleboot3/public/assets/images/header-vk.png" alt="vk">
                </a>
            </div>
        </div>

        <div class="footer-news">
            <div class="footer-title">PRODUCTS</div>
            <div class="footer-news-list">
                <?php if(is_array($category_list) || $category_list instanceof \think\Collection || $category_list instanceof \think\Paginator): if( count($category_list)==0 ) : echo "" ;else: foreach($category_list as $key=>$vo): ?>
                    <a href="<?php echo cmf_url('portal/index/product', ['id' => $vo['id']]); ?>"
                        class="footer-news-item"><?php echo $vo['name']; ?></a>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
        </div>

        <div class="footer-contact">
            <div class="footer-title">Contact Info</div>
            <div class="footer-contact-item footer-contact-email" onclick="location.href='mailto:<?php echo $site_info['email']; ?>';">
                <?php echo $site_info['email']; ?></div>
            <div class="footer-contact-item footer-contact-address"><?php echo $site_info['address']; ?></div>
            <?php 
                $cleanNumber = preg_replace('/[^0-9]/', '', $site_info['whatsapp']);
                if (strpos($cleanNumber, '0') === 0) {
                    $cleanNumber = preg_replace('/^0+/', '', $cleanNumber);
                }
             if(!empty($site_info['whatsapp'])): ?>
                <div class="footer-contact-item footer-contact-whatsapp" onclick="window.open('https://api.whatsapp.com/send?phone=<?php echo $cleanNumber; ?>', '_blank');">
                    <?php echo $site_info['whatsapp']; ?></div>
            <?php endif; ?>
            <div class="footer-contact-item footer-contact-tel" onclick="location.href='tel:<?php echo $site_info['sale_tel']; ?>';">
                <?php echo $site_info['sale_tel']; ?></div>
            <div class="footer-contact-item footer-contact-wechat"><?php echo $site_info['wechat']; ?></div>
        </div>

        <div class="footer-form">
            <div class="footer-title">CONTACT US</div>
            <div class="footer-field">
                <label>Name</label>
                <input type="text" class="footer-name" placeholder="Name">
            </div>
            <div class="footer-field">
                <label>Email</label>
                <input type="text" class="footer-email" placeholder="Email">
            </div>
            <div class="footer-field">
                <label>Phone/Whatsapp</label>
                <input type="text" class="footer-phone" placeholder="Phone/Whatsapp">
            </div>
            <div class="footer-field">
                <label>Message</label>
                <textarea class="footer-message"
                    placeholder="Tell us your lifting requirement, capacity, span, lifting height or project details."></textarea>
            </div>
            <div class="footer-submit">SUBMIT</div>
        </div>

    </div>

    <div class="footer-bottom">
        Copyright &copy; HENAN WEIHUA CO.,LTD. All Rights Reserved.
    </div>
</div>
<!--FOOT END-->

<div class="form-message-modal" aria-hidden="true">
    <div class="form-message-dialog">
        <div class="form-message-icon"></div>
        <div class="form-message-title">Submit Success</div>
        <div class="form-message-text">Thank you for your inquiry. We will contact you soon.</div>
        <button class="form-message-button" type="button">OK</button>
    </div>
</div>


<!-- Floating box -->

<div class="right_fix">
    <div class="right_fix_connect">
        <div class="right_fix_box right_fix_form">
            <img src="/themes/simpleboot3/public/assets/images/fix-form.webp" alt="form" title="form">
        </div>
        <div class="right_fix_box right_fix_whatsapp">
            <a href="https://api.whatsapp.com/send?phone=<?php echo $cleanNumber; ?>" target="_blank">
                <img src="/themes/simpleboot3/public/assets/images/fix-whatsapp.webp" alt="whatsapp" title="whatsapp">
                <div class="right_fix_box_connect">
                    <p>WhatsApp:</p>
                    <p class="right_fix_box_connect_text"><?php echo $site_info['whatsapp']; ?></p>
                </div>
            </a>
        </div>
        <div class="right_fix_box right_fix_wechat">
            <img src="/themes/simpleboot3/public/assets/images/fix-wechat.webp" alt="wechat" title="wechat">
            <div class="right_fix_box_connect">
                <p>Wechat:</p>
                <p class="right_fix_box_connect_text"><?php echo $site_info['wechat']; ?></p>
            </div>
        </div>
        <div class="right_fix_box right_fix_email">
            <a href="mailto:<?php echo $site_info['email']; ?>">
                <img src="/themes/simpleboot3/public/assets/images/fix-email.webp" alt="email" title="email">
                <div class="right_fix_box_connect">
                    <p>Email:</p>
                    <p class="right_fix_box_connect_text"><?php echo $site_info['email']; ?></p>
                </div>
            </a>
        </div>
        <div class="right_fix_box right_fix_top" title="Back to top">
            <span class="right_fix_top_icon">&#8679;</span>
        </div>
    </div>
</div>


<!--弹窗-->
<div class="popover_wrap" style="display: none;">
    <div class="popover_container">
        <div class=popover_close>
            <img src="/themes/simpleboot3/public/assets/images/close.png" alt="close">
        </div>
        <div class="popover_content">
            <div class="popover_title">
                <h2>Develop your lifting solution</h2>
                <p class="popover_title_description">Contact us today by email at :<a
                        href="mailto:<?php echo $site_info['email']; ?>"><?php echo $site_info['email']; ?></a>,
                    or fill out the form below.</p>
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
                        <button id="popover-submit" type="button">SUBMIT</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- Floating WhatsApp Button (above live chat) - PC -->
<?php if(!empty($site_info['whatsapp'])): 
        $cleanNumberWaPC = preg_replace('/[^0-9]/', '', $site_info['whatsapp']);
     ?>
    <a href="https://api.whatsapp.com/send?phone=<?php echo $cleanNumberWaPC; ?>" target="_blank" id="pc-float-whatsapp" title="WhatsApp">
        <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946C.06 5.348 5.397.01 12.008.01c3.202.001 6.212 1.246 8.477 3.513 2.262 2.268 3.507 5.28 3.505 8.484-.004 6.657-5.34 11.997-11.953 11.997-2.005-.001-3.973-.502-5.724-1.455L0 24zm6.59-4.846c1.6.95 3.188 1.449 4.825 1.451 5.436 0 9.86-4.37 9.864-9.799.002-2.63-1.023-5.101-2.885-6.965C16.528 1.978 14.057.95 11.433.95c-5.449 0-9.873 4.38-9.877 9.808 0 1.813.499 3.59 1.443 5.161l-1.005 3.67 3.774-.984zm11.085-6.732c-.3-.15-1.774-.875-2.05-.975-.273-.1-.472-.15-.672.15-.2.3-.775.975-.95 1.174-.175.2-.35.225-.65.075-1.127-.566-1.958-1.034-2.738-2.372-.2-.35-.2-.6-.35-.75-.15-.15-.3-.35-.45-.525-.15-.175-.2-.3-.3-.5-.1-.2-.05-.375.025-.525.075-.15.672-.782.75-.95.08-.175.04-.325-.02-.475-.06-.15-.672-1.62-.92-2.21-.242-.58-.487-.5-.672-.51-.173-.008-.371-.01-.57-.01-.2 0-.525.075-.8.375-.273.3-1.042 1.016-1.042 2.479 0 1.462 1.067 2.877 1.217 3.078.15.2 2.1 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.774-.725 2.024-1.425.25-.7.25-1.299.175-1.425-.076-.125-.275-.2-.575-.35z"/>
        </svg>
    </a>
    <style>
        #pc-float-whatsapp {
            position: fixed;
            bottom: 100px;
            right: 28px;
            width: 60px;
            height: 60px;
            background-color: #25D366;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 99998;
            box-shadow: 0 4px 14px rgba(37,211,102,0.5);
            text-decoration: none;
            opacity: 0;
            transform: scale(0.5);
            pointer-events: none;
            transition: opacity 0.4s ease, transform 0.4s ease, box-shadow 0.2s ease;
        }
        #pc-float-whatsapp.wa-visible {
            opacity: 1;
            transform: scale(1);
            pointer-events: auto;
        }
        #pc-float-whatsapp:hover {
            transform: scale(1.1);
            box-shadow: 0 8px 22px rgba(37,211,102,0.6);
        }
        #pc-float-whatsapp svg {
            width: 32px;
            height: 32px;
            fill: #fff;
        }
        #pc-float-whatsapp::after {
            content: '';
            position: absolute;
            width: 100%;
            height: 100%;
            border-radius: 50%;
            background: #25D366;
            opacity: 0.35;
            z-index: -1;
            animation: wa-pulse-pc 2s ease-out infinite;
        }
        @keyframes wa-pulse-pc {
            0%   { transform: scale(1);   opacity: 0.35; }
            100% { transform: scale(1.7); opacity: 0; }
        }
    </style>
    <script>
        setTimeout(function () {
            var btn = document.getElementById('pc-float-whatsapp');
            if (btn) btn.classList.add('wa-visible');
        }, 4000);
    </script>
<?php endif; ?>

<!-- Tawk.to position alignment: match WhatsApp button right:24px -->
<script>
    var Tawk_API = Tawk_API || {};
    Tawk_API.customStyle = {
        zIndex: 99997,
        visibility: {
            desktop: {
                position: 'br',
                xOffset: 24,
                yOffset: 170
            },
            mobile: {
                position: 'br',
                xOffset: 6,
                yOffset: 15
            }
        }
    };
</script>

<?php if(!(empty($site_info['salesiq']) || (($site_info['salesiq'] instanceof \think\Collection || $site_info['salesiq'] instanceof \think\Paginator ) && $site_info['salesiq']->isEmpty()))): ?>
    <div id="zoho-salesiq-raw" style="display: none;"><?php echo htmlspecialchars_decode($site_info['salesiq']); ?></div>
    <script>
        $(document).ready(function () {
            var salesiqLoaded = false;
            function loadSalesIQ() {
                if (salesiqLoaded) return;
                salesiqLoaded = true;
                
                var rawContainer = document.getElementById('zoho-salesiq-raw');
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

        function loadCss(href) {
            return new Promise(function (resolve, reject) {
                var link = document.createElement('link');
                link.rel = 'stylesheet';
                link.href = href;
                link.onload = resolve;
                link.onerror = function () { reject(new Error('CSS load failed')); };
                document.head.appendChild(link);
            });
        }

        function loadJs(src) {
            return new Promise(function (resolve, reject) {
                var script = document.createElement('script');
                script.src = src;
                script.async = true;
                script.onload = resolve;
                script.onerror = function () { reject(new Error('JS load failed')); };
                document.body.appendChild(script);
            });
        }

        function appendStylesOnce() {
            if (document.getElementById('iti-custom-styles')) {
                return;
            }
            var style = document.createElement('style');
            style.id = 'iti-custom-styles';
            style.innerHTML = `
                .iti { 
                    width: 100%; 
                    display: block !important;
                }
                .iti__country-list { 
                    z-index: 9999; 
                    color: #333;
                    text-align: left;
                }
                /* Fix for input padding when ITI is active */
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
            `;
            document.head.appendChild(style);
        }

        function initIntlTelInputs() {
            if (!window.intlTelInput) {
                return;
            }
            var phoneInputs = document.querySelectorAll('.home-collect-phone, .quote-phone, .footer-phone, #popover-phone');
            phoneInputs.forEach(function (input) {
                if (input._iti) {
                    return;
                }
                var iti = window.intlTelInput(input, {
                    initialCountry: "auto",
                    geoIpLookup: function (callback) {
                        fetch("https://ipapi.co/json")
                            .then(function (res) { return res.json(); })
                            .then(function (data) { callback(data.country_code || "us"); })
                            .catch(function () { callback("us"); });
                    },
                    utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@23.0.10/build/js/utils.js"
                });
                // Store the instance on the element for later access
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

        // Load on focus/click of any phone input elements
        $(document).on('focus click', '.home-collect-phone, .quote-phone, .footer-phone, #popover-phone, #popover-submit', function () {
            ensureIntlTelInputLoaded();
        });

        // Listen to interaction to load immediately
        window.addEventListener('scroll', ensureIntlTelInputLoaded, { passive: true, once: true });
        window.addEventListener('mousemove', ensureIntlTelInputLoaded, { passive: true, once: true });
        window.addEventListener('touchstart', ensureIntlTelInputLoaded, { passive: true, once: true });
    });
</script>
<!-- old -->

</body>
</html>












<!-- old -->
