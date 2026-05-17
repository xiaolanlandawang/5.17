<?php /*a:2:{s:91:"/www/wwwroot/weihua/public/themes/admin_simpleboot3/portal/admin_product_category/edit.html";i:1778906036;s:70:"/www/wwwroot/weihua/public/themes/admin_simpleboot3/public/header.html";i:1730268636;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <!-- Set render engine for 360 browser -->
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- HTML5 shim for IE8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <![endif]-->


    <link href="/themes/admin_simpleboot3/public/assets/themes/<?php echo cmf_get_admin_style(); ?>/bootstrap.min.css" rel="stylesheet">
    <link href="/themes/admin_simpleboot3/public/assets/simpleboot3/css/simplebootadmin.css" rel="stylesheet">
    <link href="/static/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!--[if lt IE 9]>
    <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        form .input-order {
            margin-bottom: 0px;
            padding: 0 2px;
            width: 42px;
            font-size: 12px;
        }

        form .input-order:focus {
            outline: none;
        }

        .table-actions {
            margin-top: 5px;
            margin-bottom: 5px;
            padding: 0px;
        }

        .table-list {
            margin-bottom: 0px;
        }

        .form-required {
            color: red;
        }

        .td-actions .btn {
            margin-bottom: 2px;
            min-width: 96px;
            text-align: center;
        }

        .td-actions .btn:last-child {
            margin-bottom: 0;
        }
        a:hover, a:focus{
            text-decoration: none;
        }
    </style>
    <?php 
		$is_mobile=cmf_is_mobile();
        $_static_version='1.0.4';
        $cmf_version=cmf_version();
        if (strpos(cmf_version(), '6.') === 0) {
            $_app=app()->http->getName();
        }else{
            $_app=request()->module();
        }
     ?>
    <script type="text/javascript">
        //全局变量
        var GV = {
            ROOT: "/",
            WEB_ROOT: "/",
            JS_ROOT: "static/js/",
            APP: '<?php echo $_app; ?>'/*当前应用名*/,
            IS_MOBILE: <?php echo !empty($is_mobile) ? 'true'  :  'false'; ?>
        };
    </script>
    <script src="/themes/admin_simpleboot3/public/assets/js/jquery-1.12.4.min.js"></script>
    <script src="/themes/admin_simpleboot3/public/assets/js/jquery-migrate-1.4.1.min.js"></script>
<!--    <script src="/themes/admin_simpleboot3/public/assets/js/jquery-3.6.0.min.js"></script>-->
    <script src="/static/js/wind.js"></script>
    <script src="/themes/admin_simpleboot3/public/assets/js/bootstrap.min.js"></script>
    <script>
        Wind.css('artDialog');
        Wind.css('layer');
        $(function () {
            $("[data-toggle='tooltip']").tooltip({
                container: 'body',
                html: true,
            });
            $("li.dropdown").hover(function () {
                $(this).addClass("open");
            }, function () {
                $(this).removeClass("open");
            });
        });
    </script>
    <?php if(APP_DEBUG): ?>
        <style>
            #think_page_trace_open {
                z-index: 9999;
            }
        </style>
    <?php endif; ?>

<style type="text/css">
    .btn-cancel-thumbnail {
        margin-top: 8px;
    }
</style>
</head>
<body>
<div class="wrap js-check-wrap">
    <ul class="nav nav-tabs">
        <li><a href="<?php echo url('AdminProductCategory/index'); ?>">产品分类</a></li>
        <li><a href="<?php echo url('AdminProductCategory/add'); ?>">添加分类</a></li>
        <li class="active"><a>编辑分类</a></li>
    </ul>
    <div class="row margin-top-20">
        <div class="col-md-2">
            <div class="list-group">
                <a class="list-group-item active" href="#A" data-toggle="tab">基本信息</a>
                <a class="list-group-item" href="#B" data-toggle="tab">SEO设置</a>
            </div>
        </div>
        <div class="col-md-6">
            <form class="js-ajax-form" action="<?php echo url('AdminProductCategory/editPost'); ?>" method="post">
                <div class="tab-content">
                    <!-- 基本信息 -->
                    <div class="tab-pane active" id="A">
                        <div class="form-group">
                            <label for="input-name"><span class="form-required">*</span>分类名称</label>
                            <div>
                                <input type="text" class="form-control" id="input-name" name="name" value="<?php echo $name; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="input-alias"><span class="form-required">*</span>分类别名</label>
                            <div>
                                <input type="text" class="form-control" id="input-alias" name="alias" value="<?php echo $alias; ?>">
                                <p class="help-block">用于 URL 美化</p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="input-list_order">排序</label>
                            <div>
                                <input type="number" class="form-control" id="input-list_order" name="list_order" value="<?php echo $list_order; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>分类定制模块图片</label>
                            <div>
                                <input type="hidden" name="thumbnail" id="thumbnail" value="<?php echo (isset($thumbnail) && ($thumbnail !== '')?$thumbnail:''); ?>">
                                <a href="javascript:uploadOneImage('图片上传','#thumbnail');">
                                    <?php if(empty($thumbnail)): ?>
                                        <img src="/themes/admin_simpleboot3/public/assets/images/default-thumbnail.png" id="thumbnail-preview" width="180" style="cursor: pointer"/>
                                    <?php else: ?>
                                        <img src="<?php echo cmf_get_image_preview_url($thumbnail); ?>" id="thumbnail-preview" width="180" style="cursor: pointer"/>
                                    <?php endif; ?>
                                </a>
                                <div>
                                    <input type="button" class="btn btn-sm btn-cancel-thumbnail" value="取消图片">
                                </div>
                                <p class="help-block">用于具体分类页顶部定制模块右侧图片，建议尺寸 1920 x 700</p>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="input-hero_title">分类页展示标题</label>
                            <div>
                                <input type="text" class="form-control" id="input-hero_title" name="hero_title" value="<?php echo (isset($hero_title) && ($hero_title !== '')?$hero_title:''); ?>">
                                <p class="help-block">用于前端分类页顶部左侧标题展示，不影响 SEO 标题</p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="input-hero_description">分类页展示描述</label>
                            <div>
                                <textarea class="form-control" name="hero_description" id="input-hero_description"><?php echo (isset($hero_description) && ($hero_description !== '')?$hero_description:''); ?></textarea>
                                <p class="help-block">用于前端分类页顶部左侧描述展示，不影响 SEO 描述</p>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="input-selector_title">选型模块标题</label>
                            <div>
                                <input type="text" class="form-control" id="input-selector_title" name="selector_title" value="<?php echo (isset($selector_title) && ($selector_title !== '')?$selector_title:''); ?>">
                                <p class="help-block">用于底部选型模块左侧标题，留空则使用默认文案。</p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="input-selector_description">选型模块描述</label>
                            <div>
                                <textarea class="form-control" name="selector_description" id="input-selector_description"><?php echo (isset($selector_description) && ($selector_description !== '')?$selector_description:''); ?></textarea>
                                <p class="help-block">用于底部选型模块左侧描述，留空则使用默认文案。</p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="input-selector_button_text">选型模块按钮文案</label>
                            <div>
                                <input type="text" class="form-control" id="input-selector_button_text" name="selector_button_text" value="<?php echo (isset($selector_button_text) && ($selector_button_text !== '')?$selector_button_text:''); ?>">
                                <p class="help-block">用于底部选型模块按钮文字，留空则使用默认文案。</p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="input-selector_items_text">选型模块右侧列表</label>
                            <div>
                                <textarea class="form-control" name="selector_items_text" id="input-selector_items_text" rows="8"><?php echo (isset($selector_items_text) && ($selector_items_text !== '')?$selector_items_text:''); ?></textarea>
                                <p class="help-block">每行一条，格式：场景文案 | 产品类型文案（例如：车间起重 | 单梁桥式起重机）</p>
                            </div>
                        </div>
                        <hr>
                        <div class="form-group">
                            <label for="input-faq_title">FAQ模块标题</label>
                            <div>
                                <input type="text" class="form-control" id="input-faq_title" name="faq_title" value="<?php echo (isset($faq_title) && ($faq_title !== '')?$faq_title:''); ?>">
                                <p class="help-block">用于分类页底部 FAQ 标题，留空默认显示 FAQ。</p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="input-faq_items_text">FAQ问题列表</label>
                            <div>
                                <textarea class="form-control" name="faq_items_text" id="input-faq_items_text" rows="8"><?php echo (isset($faq_items_text) && ($faq_items_text !== '')?$faq_items_text:''); ?></textarea>
                                <p class="help-block">每行一条，格式：问题 | 答案</p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="input-faq_contact_title">FAQ联系区标题</label>
                            <div>
                                <input type="text" class="form-control" id="input-faq_contact_title" name="faq_contact_title" value="<?php echo (isset($faq_contact_title) && ($faq_contact_title !== '')?$faq_contact_title:''); ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="input-faq_contact_desc">FAQ联系区描述</label>
                            <div>
                                <textarea class="form-control" name="faq_contact_desc" id="input-faq_contact_desc"><?php echo (isset($faq_contact_desc) && ($faq_contact_desc !== '')?$faq_contact_desc:''); ?></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="input-faq_contact_btn_text">FAQ联系区按钮文案</label>
                            <div>
                                <input type="text" class="form-control" id="input-faq_contact_btn_text" name="faq_contact_btn_text" value="<?php echo (isset($faq_contact_btn_text) && ($faq_contact_btn_text !== '')?$faq_contact_btn_text:''); ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="input-faq_contact_btn_link">FAQ联系区按钮链接</label>
                            <div>
                                <input type="text" class="form-control" id="input-faq_contact_btn_link" name="faq_contact_btn_link" value="<?php echo (isset($faq_contact_btn_link) && ($faq_contact_btn_link !== '')?$faq_contact_btn_link:''); ?>">
                                <p class="help-block">例如：/portal/index/quote</p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>首页推荐</label>
                            <div>
                                <input class="js-check" type="checkbox" name="recommend" value="1" <?php echo !empty($recommend) ? 'checked'  :  ''; ?>/> 推荐
                            </div>
                        </div>
                    </div>

                    <!-- SEO设置 -->
                    <div class="tab-pane" id="B">
                        <div class="form-group">
                            <label for="input-seo_title">SEO 标题</label>
                            <div>
                                <input type="text" class="form-control" id="input-seo_title" name="seo_title" value="<?php echo $seo_title; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="input-seo_keywords">SEO 关键词</label>
                            <div>
                                <input type="text" class="form-control" id="input-seo_keywords" name="seo_keywords" value="<?php echo $seo_keywords; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="input-seo_description">SEO 描述</label>
                            <div>
                                <textarea class="form-control" name="seo_description" id="input-seo_description"><?php echo $seo_description; ?></textarea>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <button type="submit" class="btn btn-primary js-ajax-submit" data-refresh="0"><?php echo lang('SAVE'); ?></button>
                    <a class="btn btn-default" href="<?php echo url('AdminProductCategory/index'); ?>"><?php echo lang('BACK'); ?></a>
                </div>
            </form>
        </div>
    </div>
</div>
<script type="text/javascript" src="/static/js/admin.js?v=<?php echo $_static_version; ?>"></script>
<script type="text/javascript">
    $(function () {
        $('.btn-cancel-thumbnail').click(function () {
            $('#thumbnail').val('');
            $('#thumbnail-preview').attr('src', '/themes/admin_simpleboot3/public/assets/images/default-thumbnail.png');
        });
    });
</script>
</body>
</html>