<?php /*a:4:{s:73:"C:\laragon\www\weihua\public/themes/simpleboot3/portal\\product-info.html";i:1779677151;s:64:"C:\laragon\www\weihua\public/themes/simpleboot3/public\head.html";i:1779697000;s:63:"C:\laragon\www\weihua\public/themes/simpleboot3/public\nav.html";i:1779265794;s:64:"C:\laragon\www\weihua\public/themes/simpleboot3/public\foot.html";i:1779331371;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo (isset($site_info['site_name']) && ($site_info['site_name'] !== '')?$site_info['site_name']:''); ?></title>
    <meta name="keywords" content="<?php echo (isset($site_info['site_name']) && ($site_info['site_name'] !== '')?$site_info['site_name']:''); ?>">
    <meta name="description" content="<?php echo (isset($site_info['site_name']) && ($site_info['site_name'] !== '')?$site_info['site_name']:''); ?>">
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
    <link href="/themes/simpleboot3/public/assets/css/product-info.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="/themes/simpleboot3/public/assets/js/product-info.js"></script>
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



    <section class="product-detail-banner">
        <div class="product-detail-banner__media">
            <img src="<?php echo cmf_get_image_url($banner['image']); ?>" alt="<?php echo $banner['title']; ?>">
        </div>
        <div class="product-detail-banner__overlay">
            <div class="product-detail-banner__content">
                <h1 class="product-detail-banner__title"><?php echo (isset($banner['title']) && ($banner['title'] !== '')?$banner['title']:$product['title']); ?></h1>
                <p class="product-detail-banner__desc"><?php echo $product['industry']; ?></p>
                <div class="product-detail-banner__actions">
                    <a href="javascript:;" class="product-detail-banner__btn" id="inquiry">Get A Free Quote</a>
                </div>
            </div>
        </div>
    </section>

    <!--PRODUCT START-->
    <div class="main-content">

        <div class="product_info clearfix">
            <div class="title"><?php echo $product['title']; ?></div>
            <div class="info_left_box">
                <!--PRODUCT PHOTOS START-->
                <div class="swiper mainSwiper">
                    <!-- Swiper Wrapper -->
                    <div class="swiper-wrapper">
                        <?php if(is_array($product['photos']) || $product['photos'] instanceof \think\Collection || $product['photos'] instanceof \think\Paginator): if( count($product['photos'])==0 ) : echo "" ;else: foreach($product['photos'] as $key=>$vo): ?>
                            <div class="swiper-slide">
                                <img src="<?php echo cmf_get_image_url($vo['url']); ?>" alt="<?php echo $vo['name']; ?>">
                            </div>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </div>
                </div>
                <!--PRODUCT PHOTOS END-->
                <!-- 缩略图 -->
                <div class="swiper thumbSwiper">
                    <div class="swiper-wrapper">
                        <?php if(is_array($product['photos']) || $product['photos'] instanceof \think\Collection || $product['photos'] instanceof \think\Paginator): if( count($product['photos'])==0 ) : echo "" ;else: foreach($product['photos'] as $key=>$vo): ?>
                            <div class="swiper-slide">
                                <img src="<?php echo cmf_get_image_url($vo['url']); ?>" alt="<?php echo $vo['name']; ?>">
                            </div>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </div>
                </div>
            </div>

            <div class="info_right_box">
                <?php if(!(empty($product['authentication_mark']) || (($product['authentication_mark'] instanceof \think\Collection || $product['authentication_mark'] instanceof \think\Paginator ) && $product['authentication_mark']->isEmpty()))): ?>
                <div class="info_right_mark">
                    <span class="info_right_mark_title">
                        Authentication mark:
                    </span>
                    <?php if(is_array($product['authentication_mark']) || $product['authentication_mark'] instanceof \think\Collection || $product['authentication_mark'] instanceof \think\Paginator): if( count($product['authentication_mark'])==0 ) : echo "" ;else: foreach($product['authentication_mark'] as $key=>$vo): ?>
                        <div class="info_right_mark_img">
                            <img src="<?php echo cmf_get_image_url($vo['url']); ?>" alt="<?php echo $vo['name']; ?>">
                        </div>
                    <?php endforeach; endif; else: echo "" ;endif; ?>

                </div>
                <?php endif; ?>

                <div class="info_right_apply"><?php echo $product['industry']; ?></div>

                <?php if(!(empty($product['custom_field']['input']) || (($product['custom_field']['input'] instanceof \think\Collection || $product['custom_field']['input'] instanceof \think\Paginator ) && $product['custom_field']['input']->isEmpty()))): if(is_array($product['custom_field']['input']) || $product['custom_field']['input'] instanceof \think\Collection || $product['custom_field']['input'] instanceof \think\Paginator): if( count($product['custom_field']['input'])==0 ) : echo "" ;else: foreach($product['custom_field']['input'] as $key=>$vo): if(!(empty($product[$key]) || (($product[$key] instanceof \think\Collection || $product[$key] instanceof \think\Paginator ) && $product[$key]->isEmpty()))): ?>
                            <div class="info_right_line"></div>
                            <div class="info_right_capacity">
                                <div class="info_right_capacity_title"><?php echo $vo; ?>:</div>
                                <div class="info_right_capacity_value"><?php echo $product[$key]; ?></div>
                            </div>
                        <?php endif; ?>
                    <?php endforeach; endif; else: echo "" ;endif; else: if(!(empty($product['lifting_capacity']) || (($product['lifting_capacity'] instanceof \think\Collection || $product['lifting_capacity'] instanceof \think\Paginator ) && $product['lifting_capacity']->isEmpty()))): ?>
                        <div class="info_right_line"></div>
                        <div class="info_right_capacity">
                            <div class="info_right_capacity_title">Capacity:</div>
                            <div class="info_right_capacity_value"><?php echo $product['lifting_capacity']; ?></div>
                        </div>
                    <?php endif; if(!(empty($product['lifting_height']) || (($product['lifting_height'] instanceof \think\Collection || $product['lifting_height'] instanceof \think\Paginator ) && $product['lifting_height']->isEmpty()))): ?>
                        <div class="info_right_line"></div>
                        <div class="info_right_capacity">
                            <div class="info_right_capacity_title">Lifting Height:</div>
                            <div class="info_right_capacity_value"><?php echo $product['lifting_height']; ?></div>
                        </div>
                    <?php endif; if(!(empty($product['span']) || (($product['span'] instanceof \think\Collection || $product['span'] instanceof \think\Paginator ) && $product['span']->isEmpty()))): ?>
                        <div class="info_right_line"></div>
                        <div class="info_right_capacity">
                            <div class="info_right_capacity_title">Span:</div>
                            <div class="info_right_capacity_value"><?php echo $product['span']; ?></div>
                        </div>
                    <?php endif; if(!(empty($product['operating_voltage']) || (($product['operating_voltage'] instanceof \think\Collection || $product['operating_voltage'] instanceof \think\Paginator ) && $product['operating_voltage']->isEmpty()))): ?>
                        <div class="info_right_line"></div>
                        <div class="info_right_capacity">
                            <div class="info_right_capacity_title">Voltage/Hertz:</div>
                            <div class="info_right_capacity_value"><?php echo $product['operating_voltage']; ?></div>
                        </div>
                    <?php endif; if(!(empty($product['job_level']) || (($product['job_level'] instanceof \think\Collection || $product['job_level'] instanceof \think\Paginator ) && $product['job_level']->isEmpty()))): ?>
                        <div class="info_right_line"></div>
                        <div class="info_right_capacity">
                            <div class="info_right_capacity_title">Working Class:</div>
                            <div class="info_right_capacity_value"><?php echo $product['job_level']; ?></div>
                        </div>
                    <?php endif; ?>
                <?php endif; if(!(empty($product['parameter']) || (($product['parameter'] instanceof \think\Collection || $product['parameter'] instanceof \think\Paginator ) && $product['parameter']->isEmpty()))): if(is_array($product['parameter']) || $product['parameter'] instanceof \think\Collection || $product['parameter'] instanceof \think\Paginator): if( count($product['parameter'])==0 ) : echo "" ;else: foreach($product['parameter'] as $key=>$vo): ?>
                        <div class="info_right_line"></div>
                        <div class="info_right_capacity">
                            <div class="info_right_capacity_title"><?php echo $vo['parameter_name']; ?>:</div>
                            <div class="info_right_capacity_value"><?php echo $vo['parameter_val']; ?></div>
                        </div>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                <?php endif; ?>

                <div class="info_right_line"></div>
                <div class="info_right_btn" id="inquiry">CONSULT</div>
            </div>
        </div>

        <!-- PRODUCT CONTENT START -->
        <div class="product-content">
            <?php 
                $productContentTitles = [
                    'overview' => 'Product Overview',
                    'scenario' => 'Application Scenario',
                    'certificate' => 'Certificate',
                    'features' => 'Features',
                    'customized' => 'Customized'
                ];
             ?>
            <div class="product-content-title">
                <?php if(!(empty($product['custom_field']['content']) || (($product['custom_field']['content'] instanceof \think\Collection || $product['custom_field']['content'] instanceof \think\Paginator ) && $product['custom_field']['content']->isEmpty()))): if(is_array($product['custom_field']['content']) || $product['custom_field']['content'] instanceof \think\Collection || $product['custom_field']['content'] instanceof \think\Paginator): if( count($product['custom_field']['content'])==0 ) : echo "" ;else: foreach($product['custom_field']['content'] as $key=>$vo): if(!(empty($product[$key]) || (($product[$key] instanceof \think\Collection || $product[$key] instanceof \think\Paginator ) && $product[$key]->isEmpty()))): ?>
                            <div class="product-content-title-item" data-target="<?php echo $key; ?>"><?php echo $vo; ?></div>
                        <?php endif; ?>
                    <?php endforeach; endif; else: echo "" ;endif; else: if(!(empty($product['overview']) || (($product['overview'] instanceof \think\Collection || $product['overview'] instanceof \think\Paginator ) && $product['overview']->isEmpty()))): ?>
                        <div class="product-content-title-item" data-target="overview">Product Overview</div>
                    <?php endif; if(!(empty($product['scenario']) || (($product['scenario'] instanceof \think\Collection || $product['scenario'] instanceof \think\Paginator ) && $product['scenario']->isEmpty()))): ?>
                        <div class="product-content-title-item" data-target="scenario">Application Scenario</div>
                    <?php endif; if(!(empty($product['certificate']) || (($product['certificate'] instanceof \think\Collection || $product['certificate'] instanceof \think\Paginator ) && $product['certificate']->isEmpty()))): ?>
                        <div class="product-content-title-item" data-target="certificate">Certificate</div>
                    <?php endif; if(!(empty($product['features']) || (($product['features'] instanceof \think\Collection || $product['features'] instanceof \think\Paginator ) && $product['features']->isEmpty()))): ?>
                        <div class="product-content-title-item" data-target="features">Features</div>
                    <?php endif; if(!(empty($product['customized']) || (($product['customized'] instanceof \think\Collection || $product['customized'] instanceof \think\Paginator ) && $product['customized']->isEmpty()))): ?>
                        <div class="product-content-title-item" data-target="customized">Customized</div>
                    <?php endif; ?>
                <?php endif; if(!(empty($product['custom_content']) || (($product['custom_content'] instanceof \think\Collection || $product['custom_content'] instanceof \think\Paginator ) && $product['custom_content']->isEmpty()))): if(is_array($product['custom_content']) || $product['custom_content'] instanceof \think\Collection || $product['custom_content'] instanceof \think\Paginator): if( count($product['custom_content'])==0 ) : echo "" ;else: foreach($product['custom_content'] as $key=>$vo): ?>
                        <div class="product-content-title-item" data-target="<?php echo str_replace(' ', '', $vo['param_content_name']); ?>"><?php echo $vo['param_content_name']; ?></div>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                <?php endif; ?>
            </div>


            <?php if(!(empty($product['custom_field']['content']) || (($product['custom_field']['content'] instanceof \think\Collection || $product['custom_field']['content'] instanceof \think\Paginator ) && $product['custom_field']['content']->isEmpty()))): if(is_array($product['custom_field']['content']) || $product['custom_field']['content'] instanceof \think\Collection || $product['custom_field']['content'] instanceof \think\Paginator): if( count($product['custom_field']['content'])==0 ) : echo "" ;else: foreach($product['custom_field']['content'] as $key=>$vo): if(!(empty($product[$key]) || (($product[$key] instanceof \think\Collection || $product[$key] instanceof \think\Paginator ) && $product[$key]->isEmpty()))): $contentTitle = isset($productContentTitles[$key]) ? $productContentTitles[$key] : $vo; if($key == 'certificate'): ?>
                            <div class="product-content-content">
                                <div class="product-content-certificate" id="<?php echo $key; ?>">
                                    <div class="product-content-content-title"><?php echo $contentTitle; ?></div>
                                
                                    <ul>
                                        <?php if(is_array($product[$key]) || $product[$key] instanceof \think\Collection || $product[$key] instanceof \think\Paginator): if( count($product[$key])==0 ) : echo "" ;else: foreach($product[$key] as $key=>$v): ?>
                                            <li class="product-content-certificate-item">
                                                <a href="<?php echo cmf_get_image_url($v['url']); ?>" target="_blank"><img src="<?php echo cmf_get_image_url($v['url']); ?>" alt="<?php echo $v['name']; ?>"></a>
                                            </li>
                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                    </ul>
                                </div>
                            </div>
                            <?php else: ?>
                            <div class="product-content-content" id="<?php echo $key; ?>">
                                <div class="product-content-content-title"><?php echo $contentTitle; ?></div>
                                <?php echo $product[$key]; ?>
                            </div>
                        <?php endif; ?>
                    <?php endif; ?>
                <?php endforeach; endif; else: echo "" ;endif; else: if(!(empty($product['overview']) || (($product['overview'] instanceof \think\Collection || $product['overview'] instanceof \think\Paginator ) && $product['overview']->isEmpty()))): ?>
                    <div class="product-content-content" id="overview">
                        <div class="product-content-content-title">Product Overview</div>
                        <?php echo $product['overview']; ?>
                    </div>
                <?php endif; if(!(empty($product['scenario']) || (($product['scenario'] instanceof \think\Collection || $product['scenario'] instanceof \think\Paginator ) && $product['scenario']->isEmpty()))): ?>
                    <div class="product-content-content" id="scenario">
                        <div class="product-content-content-title">Application Scenario</div>
                        <?php echo $product['scenario']; ?>
                    </div>
                <?php endif; if(!(empty($product['certificate']) || (($product['certificate'] instanceof \think\Collection || $product['certificate'] instanceof \think\Paginator ) && $product['certificate']->isEmpty()))): ?>
                    <div class="product-content-content" id="certificate">
                        <div class="product-content-certificate">
                            <div class="product-content-content-title">Certificate</div>
                            <ul>
                                <?php if(is_array($product['certificate']) || $product['certificate'] instanceof \think\Collection || $product['certificate'] instanceof \think\Paginator): if( count($product['certificate'])==0 ) : echo "" ;else: foreach($product['certificate'] as $key=>$vo): ?>
                                    <li class="product-content-certificate-item">
                                        <a href="<?php echo cmf_get_image_url($vo['url']); ?>" target="_blank"><img src="<?php echo cmf_get_image_url($vo['url']); ?>" alt="<?php echo $vo['name']; ?>"></a>
                                    </li>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                            </ul>
                        </div>
                    </div>
                <?php endif; if(!(empty($product['features']) || (($product['features'] instanceof \think\Collection || $product['features'] instanceof \think\Paginator ) && $product['features']->isEmpty()))): ?>
                    <div class="product-content-content" id="features">
                        <div class="product-content-content-title">Features</div>
                        <?php echo $product['features']; ?>
                    </div>
                <?php endif; if(!(empty($product['customized']) || (($product['customized'] instanceof \think\Collection || $product['customized'] instanceof \think\Paginator ) && $product['customized']->isEmpty()))): ?>
                    <div class="product-content-content" id="customized">
                        <div class="product-content-content-title">Customized</div>
                        <?php echo $product['customized']; ?>
                    </div>
                <?php endif; ?>
            <?php endif; if(!(empty($product['custom_content']) || (($product['custom_content'] instanceof \think\Collection || $product['custom_content'] instanceof \think\Paginator ) && $product['custom_content']->isEmpty()))): if(is_array($product['custom_content']) || $product['custom_content'] instanceof \think\Collection || $product['custom_content'] instanceof \think\Paginator): if( count($product['custom_content'])==0 ) : echo "" ;else: foreach($product['custom_content'] as $key=>$vo): ?>
                    <div class="product-content-content" id="<?php echo str_replace(' ', '', $vo['param_content_name']); ?>">
                        <div class="product-content-content-title"><?php echo $vo['param_content_name']; ?></div>
                        <?php echo $vo['param_content_val']; ?>
                    </div>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            <?php endif; ?>

        </div>
        <!-- PRODUCT CONTENT END -->



        <!-- HOT PRODUCTS START -->
        <?php if(!(empty($recommended_list) || (($recommended_list instanceof \think\Collection || $recommended_list instanceof \think\Paginator ) && $recommended_list->isEmpty()))): ?>
            <div class="hot-products">
                <div class="hot-products-title">HOT PRODUCTS</div>
                <div class="hot-products-list">
                    <ul>
                        <?php if(is_array($recommended_list) || $recommended_list instanceof \think\Collection || $recommended_list instanceof \think\Paginator): if( count($recommended_list)==0 ) : echo "" ;else: foreach($recommended_list as $key=>$vo): ?>
                            <li class="product_item">
                                <a href="<?php echo cmf_url('portal/index/product_info',array('id'=>$vo['id'])); ?>">
                                    <div class="product_list_item_img">
                                        <img src="<?php echo cmf_get_image_url($vo['thumbnail']); ?>" alt="<?php echo $vo['title']; ?>" title="<?php echo $vo['title']; ?>">
                                    </div>
                                    <div class="product_list_item_title"><?php echo $vo['title']; ?></div>
                                    <div class="product_list_item_category"><?php echo $vo['industry']; ?></div>
                                </a>
                            </li>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                </div>
            </div>
        <?php endif; ?>
        <!-- HOT PRODUCTS END -->

    </div>
    <!--PRODUCT END-->

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
