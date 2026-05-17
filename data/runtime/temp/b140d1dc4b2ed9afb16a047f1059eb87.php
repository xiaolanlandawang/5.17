<?php /*a:2:{s:77:"C:\laragon\www\weihua\public/themes/admin_simpleboot3/admin\setting\site.html";i:1778315504;s:72:"C:\laragon\www\weihua\public/themes/admin_simpleboot3/public\header.html";i:1730268636;}*/ ?>
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
    .pic-list li {
        margin-bottom: 5px;
    }

    .btn-cancel-thumbnail {
        margin-top: 5px;
    }

    #photos, #files {
        margin-bottom: 0;
    }
</style>
<script type="text/html" id="authentication_mark-item-tpl">
    <li id="saved-authentication_mark{id}">
        <input id="authentication_mark-{id}" type="hidden" name="authentication_mark_urls[]" value="{filepath}">
        <input class="form-control" id="authentication_mark-{id}-name" type="text" name="authentication_mark_names[]" value=""
               style="width: 200px;" title="图片名称">
        <img id="authentication_mark-{id}-preview" src="{url}" style="height:34px;width: 44px;"
             onclick="imagePreviewDialog(this.src);">
        <a class="btn btn-default" href="javascript:uploadOneImage('图片上传','#authentication_mark-{id}');"><i class="fa fa-upload fa-fw"></i></a>
        <a class="btn btn-danger" href="javascript:(function(){$('#saved-authentication_mark{id}').remove();})();"><i class="fa fa-trash fa-fw"></i></a>
        <a class="btn btn-success" href="javascript:(function(){$('#saved-authentication_mark{id}').before($('#saved-authentication_mark{id}').next());})();"><i class="fa fa-arrow-down fa-fw"></i></a>
    </li>
</script>
<script type="text/html" id="sling_available-item-tpl">
    <li id="saved-sling_available{id}">
        <input id="sling_available-{id}" type="hidden" name="sling_available_urls[]" value="{filepath}">
        <input class="form-control" id="sling_available-{id}-name" type="text" name="sling_available_names[]" value=""
               style="width: 200px;" title="图片名称">
        <img id="sling_available-{id}-preview" src="{url}" style="height:34px;width: 44px;"
             onclick="imagePreviewDialog(this.src);">
        <a class="btn btn-default" href="javascript:uploadOneImage('图片上传','#sling_available-{id}');"><i class="fa fa-upload fa-fw"></i></a>
        <a class="btn btn-danger" href="javascript:(function(){$('#saved-sling_available{id}').remove();})();"><i class="fa fa-trash fa-fw"></i></a>
        <a class="btn btn-success" href="javascript:(function(){$('#saved-sling_available{id}').before($('#saved-sling_available{id}').next());})();"><i class="fa fa-arrow-down fa-fw"></i></a>
    </li>
</script>
<script type="text/html" id="sling_available_active-item-tpl">
    <li id="saved-sling_available_active{id}">
        <input id="sling_available_active-{id}" type="hidden" name="sling_available_active_urls[]" value="{filepath}">
        <input class="form-control" id="sling_available_active-{id}-name" type="text" name="sling_available_active_names[]" value=""
               style="width: 200px;" title="图片名称">
        <img id="sling_available_active-{id}-preview" src="{url}" style="height:34px;width: 44px;"
             onclick="imagePreviewDialog(this.src);">
        <a class="btn btn-default" href="javascript:uploadOneImage('图片上传','#sling_available_active-{id}');"><i class="fa fa-upload fa-fw"></i></a>
        <a class="btn btn-danger" href="javascript:(function(){$('#saved-sling_available_active{id}').remove();})();"><i class="fa fa-trash fa-fw"></i></a>
        <a class="btn btn-success" href="javascript:(function(){$('#saved-sling_available_active{id}').before($('#saved-sling_available_active{id}').next());})();"><i class="fa fa-arrow-down fa-fw"></i></a>
    </li>
</script>
<script type="text/html" id="about_images-item-tpl">
    <li id="saved-about_images{id}">
        <input id="about_images-{id}" type="hidden" name="about_images_urls[]" value="{filepath}">
        <input class="form-control" id="about_images-{id}-name" type="text" name="about_images_names[]" value="{name}"
               style="width: 200px;" title="图片名称">
        <img id="about_images-{id}-preview" src="{url}" style="height:34px;width: 44px;"
             onclick="imagePreviewDialog(this.src);">
        <a class="btn btn-default" href="javascript:uploadOneImage('图片上传','#about_images-{id}');"><i class="fa fa-upload fa-fw"></i></a>
        <a class="btn btn-danger" href="javascript:(function(){$('#saved-about_images{id}').remove();})();"><i class="fa fa-trash fa-fw"></i></a>
        <a class="btn btn-success" href="javascript:(function(){$('#saved-about_images{id}').before($('#saved-about_images{id}').next());})();"><i class="fa fa-arrow-down fa-fw"></i></a>
    </li>
</script>
</head>
<body>
<div class="wrap js-check-wrap">
    <ul class="nav nav-tabs">
        <li class="active"><a href="#A" data-toggle="tab"><?php echo lang('WEB_SITE_INFOS'); ?></a></li>
        <li><a href="#B" data-toggle="tab"><?php echo lang('SEO_SETTING'); ?></a></li>
        <li><a href="#C" data-toggle="tab">主页设置</a></li>
        <li><a href="#D" data-toggle="tab">产品设置</a></li>
    </ul>
    <form class="form-horizontal js-ajax-form margin-top-20" role="form" action="<?php echo url('Setting/sitePost'); ?>"
          method="post">
        <fieldset>
            <div class="tabbable">
                <div class="tab-content">
                    <div class="tab-pane active" id="A">
                        <div class="form-group">
                            <label for="input-site-name" class="col-sm-2 control-label"><span
                                    class="form-required">*</span><?php echo lang('WEBSITE_NAME'); ?></label>
                            <div class="col-md-6 col-sm-10">
                                <input type="text" class="form-control" id="input-site-name" name="options[site_name]"
                                       value="<?php echo (isset($site_info['site_name']) && ($site_info['site_name'] !== '')?$site_info['site_name']:''); ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="input-admin_url_password" class="col-sm-2 control-label">
                                <?php echo lang('Admin URL Password'); ?>
                                <a href="http://www.thinkcmf.com/faq.html?url=https://www.kancloud.cn/thinkcmf/faq/493509"
                                   title="查看帮助手册"
                                   data-toggle="tooltip"
                                   target="_blank"><i class="fa fa-question-circle"></i></a>
                            </label>
                            <div class="col-md-6 col-sm-10">
                                <input type="text" class="form-control" id="input-admin_url_password"
                                       name="admin_settings[admin_password]"
                                       value="<?php echo (isset($admin_settings['admin_password']) && ($admin_settings['admin_password'] !== '')?$admin_settings['admin_password']:''); ?>"
                                       id="js-site-admin-url-password">
                                <p class="help-block">英文字母数字，不能为纯数字</p>
                                <p class="help-block" style="color: red;">
                                    设置加密码后必须通过以下地址访问后台,请牢记此地址，为了安全，您也可以定期更换此加密码！</p>
                                <?php 
                                    $root=cmf_get_root();
                                    $root=empty($root)?'':'/'.$root;
                                    $site_domain = cmf_get_domain().$root;
                                 ?>
                                <p class="help-block">后台登录地址：<span id="js-site-admin-url"><?php echo $site_domain; ?>/<?php echo (isset($admin_settings['admin_password']) && ($admin_settings['admin_password'] !== '')?$admin_settings['admin_password']:'admin'); ?></span>
                                </p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="input-sale_tel" class="col-sm-2 control-label">服务热线</label>
                            <div class="col-md-6 col-sm-10">
                                <input type="text" class="form-control" id="input-sale_tel" name="options[sale_tel]"
                                       value="<?php echo (isset($site_info['sale_tel']) && ($site_info['sale_tel'] !== '')?$site_info['sale_tel']:''); ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="input-email" class="col-sm-2 control-label">邮箱</label>
                            <div class="col-md-6 col-sm-10">
                                <input type="text" class="form-control" id="input-email" name="options[email]"
                                       value="<?php echo (isset($site_info['email']) && ($site_info['email'] !== '')?$site_info['email']:''); ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="input-whatsapp" class="col-sm-2 control-label">WhatsApp</label>
                            <div class="col-md-6 col-sm-10">
                                <input type="text" class="form-control" id="input-whatsapp" name="options[whatsapp]"
                                       value="<?php echo (isset($site_info['whatsapp']) && ($site_info['whatsapp'] !== '')?$site_info['whatsapp']:''); ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="input-wechat" class="col-sm-2 control-label">微信号</label>
                            <div class="col-md-6 col-sm-10">
                                <input type="text" class="form-control" id="input-wechat" name="options[wechat]"
                                       value="<?php echo (isset($site_info['wechat']) && ($site_info['wechat'] !== '')?$site_info['wechat']:''); ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">地址</label>
                            <div class="col-md-6 col-sm-10">
                                <input type="text" class="form-control" id="input-location" name="options[address]"
                                       value="<?php echo (isset($site_info['address']) && ($site_info['address'] !== '')?$site_info['address']:''); ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="input-facebook" class="col-sm-2 control-label">Facebook链接</label>
                            <div class="col-md-6 col-sm-10">
                                <input type="text" class="form-control" id="input-facebook" name="options[facebook]"
                                       value="<?php echo (isset($site_info['facebook']) && ($site_info['facebook'] !== '')?$site_info['facebook']:''); ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="input-youtube" class="col-sm-2 control-label">Youtube链接</label>
                            <div class="col-md-6 col-sm-10">
                                <input type="text" class="form-control" id="input-youtube" name="options[youtube]"
                                       value="<?php echo (isset($site_info['youtube']) && ($site_info['youtube'] !== '')?$site_info['youtube']:''); ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="input-linkedin" class="col-sm-2 control-label">Linkedin链接</label>
                            <div class="col-md-6 col-sm-10">
                                <input type="text" class="form-control" id="input-linkedin" name="options[linkedin]"
                                       value="<?php echo (isset($site_info['linkedin']) && ($site_info['linkedin'] !== '')?$site_info['linkedin']:''); ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="input-vk" class="col-sm-2 control-label">VK链接</label>
                            <div class="col-md-6 col-sm-10">
                                <input type="text" class="form-control" id="input-vk" name="options[vk]"
                                       value="<?php echo (isset($site_info['vk']) && ($site_info['vk'] !== '')?$site_info['vk']:''); ?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="input-salesiq" class="col-sm-2 control-label">SalesIQ代码</label>
                            <div class="col-md-6 col-sm-10">
                                <textarea class="form-control" id="input-salesiq" name="options[salesiq]" style="height: 100px;"><?php echo (isset($site_info['salesiq']) && ($site_info['salesiq'] !== '')?$site_info['salesiq']:''); ?></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="input-google_analytics" class="col-sm-2 control-label">Google Analytics代码</label>
                            <div class="col-md-6 col-sm-10">
                                <textarea class="form-control" id="input-google_analytics" name="options[google_analytics]" style="height: 100px;"><?php echo (isset($site_info['google_analytics']) && ($site_info['google_analytics'] !== '')?$site_info['google_analytics']:''); ?></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-primary js-ajax-submit" data-refresh="1">
                                    <?php echo lang('SAVE'); ?>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="B">
                        <div class="form-group">
                            <label for="input-site_seo_title" class="col-sm-2 control-label"><?php echo lang('WEBSITE_SEO_TITLE'); ?></label>
                            <div class="col-md-6 col-sm-10">
                                <input type="text" class="form-control" id="input-site_seo_title"
                                       name="options[site_seo_title]" value="<?php echo (isset($site_info['site_seo_title']) && ($site_info['site_seo_title'] !== '')?$site_info['site_seo_title']:''); ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="input-site_seo_keywords" class="col-sm-2 control-label"><?php echo lang('WEBSITE_SEO_KEYWORDS'); ?></label>
                            <div class="col-md-6 col-sm-10">
                                <input type="text" class="form-control" id="input-site_seo_keywords"
                                       name="options[site_seo_keywords]"
                                       value="<?php echo (isset($site_info['site_seo_keywords']) && ($site_info['site_seo_keywords'] !== '')?$site_info['site_seo_keywords']:''); ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="input-site_seo_description" class="col-sm-2 control-label"><?php echo lang('WEBSITE_SEO_DESCRIPTION'); ?></label>
                            <div class="col-md-6 col-sm-10">
                                <textarea class="form-control" id="input-site_seo_description"
                                          name="options[site_seo_description]"><?php echo (isset($site_info['site_seo_description']) && ($site_info['site_seo_description'] !== '')?$site_info['site_seo_description']:''); ?></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-primary js-ajax-submit" data-refresh="0">
                                    <?php echo lang('SAVE'); ?>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="C">
                        <div class="form-group">
                            <label for="input-products_description" class="col-sm-2 control-label">热门产品描述</label>
                            <div class="col-md-6 col-sm-10">
                                <textarea class="form-control" id="input-products_description" name="products_description" style="height: 100px"><?php echo (isset($index_setting['products_description']) && ($index_setting['products_description'] !== '')?$index_setting['products_description']:''); ?></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="input-about_description" class="col-sm-2 control-label">关于我们描述</label>
                            <div class="col-md-6 col-sm-10">
                                <textarea class="form-control" id="input-about_description" name="about_description" style="height: 100px"><?php echo (isset($index_setting['about_description']) && ($index_setting['about_description'] !== '')?$index_setting['about_description']:''); ?></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">
                                关于我们设置
                            </label>
                            <div class="col-md-8 col-sm-10">
                                <ul id="engineering" class="pic-list list-unstyled form-inline">
                                    <?php if(!(empty($index_setting['engineering']) || (($index_setting['engineering'] instanceof \think\Collection || $index_setting['engineering'] instanceof \think\Paginator ) && $index_setting['engineering']->isEmpty()))): if(is_array($index_setting['engineering']) || $index_setting['engineering'] instanceof \think\Collection || $index_setting['engineering'] instanceof \think\Paginator): if( count($index_setting['engineering'])==0 ) : echo "" ;else: foreach($index_setting['engineering'] as $key=>$vo): ?>
                                            <li id="saved-engineering<?php echo $key; ?>">
                                                名称：<input class="form-control" type="text"
                                                                name="engineering_name[]"
                                                                value="<?php echo (isset($vo['engineering_name']) && ($vo['engineering_name'] !== '')?$vo['engineering_name']:''); ?>" style="width: 300px;">
                                                &nbsp;&nbsp;&nbsp;
                                                描述：<input class="form-control" type="text"
                                                            name="engineering_desc[]"
                                                            value="<?php echo (isset($vo['engineering_desc']) && ($vo['engineering_desc'] !== '')?$vo['engineering_desc']:''); ?>" style="width: 300px;">
                                                &nbsp;&nbsp;&nbsp;
                                                数量：<input class="form-control" type="number"
                                                                name="engineering_num[]"
                                                                value="<?php echo (isset($vo['engineering_num']) && ($vo['engineering_num'] !== '')?$vo['engineering_num']:''); ?>" style="width: 100px;" >
                                                &nbsp;&nbsp;&nbsp;
                                                <a class="btn btn-danger" href="javascript:(function(){$('#saved-engineering<?php echo $key; ?>').remove();})();"><i class="fa fa-trash fa-fw"></i></a>
                                            </li>
                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                    <?php endif; ?>
                                </ul>
                                <a href="javascript:engineering_add();" class="btn btn-default">Add</a>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">关于我们图片</label>
                            <div class="col-md-6 col-sm-10">
                                <input type="hidden" name="about_img" id="about_img" value="<?php echo (isset($index_setting['about_img']) && ($index_setting['about_img'] !== '')?$index_setting['about_img']:''); ?>">
                                <a href="javascript:uploadOneImage('图片上传','#about_img');">
                                    <?php if(empty($index_setting['about_img'])): ?>
                                        <img src="/themes/admin_simpleboot3/public/assets/images/default-thumbnail.png"
                                             id="about_img-preview" width="135" style="cursor: hand"/>
                                        <?php else: ?>
                                        <img src="<?php echo cmf_get_image_preview_url($index_setting['about_img']); ?>" id="about_img-preview"
                                             width="135" style="cursor: hand"/>
                                    <?php endif; ?>
                                </a>
                                <input type="button" class="btn btn-sm"
                                       onclick="$('#about_img').attr('src','/themes/admin_simpleboot3/public/assets/images/default-thumbnail.png');$('#about_img').val('');return false;"
                                       value="取消图片">
                                <p class="help-block">图片尺寸：440*320</p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="input-choose_description" class="col-sm-2 control-label">选择我们描述</label>
                            <div class="col-md-6 col-sm-10">
                                <textarea class="form-control" id="input-choose_description" name="choose_description" style="height: 100px"><?php echo (isset($index_setting['choose_description']) && ($index_setting['choose_description'] !== '')?$index_setting['choose_description']:''); ?></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">
                                选择我们设置
                            </label>
                            <div class="col-md-8 col-sm-10">
                                <ul id="choose" class="pic-list list-unstyled form-inline">
                                    <?php if(!(empty($index_setting['choose']) || (($index_setting['choose'] instanceof \think\Collection || $index_setting['choose'] instanceof \think\Paginator ) && $index_setting['choose']->isEmpty()))): if(is_array($index_setting['choose']) || $index_setting['choose'] instanceof \think\Collection || $index_setting['choose'] instanceof \think\Paginator): if( count($index_setting['choose'])==0 ) : echo "" ;else: foreach($index_setting['choose'] as $key=>$vo): ?>
                                            <li id="saved-choose<?php echo $key; ?>">
                                                名称：<input class="form-control" type="text"
                                                            name="choose_name[]"
                                                            value="<?php echo (isset($vo['choose_name']) && ($vo['choose_name'] !== '')?$vo['choose_name']:''); ?>" style="width: 250px;">
                                                &nbsp;&nbsp;&nbsp;
                                                描述：<input class="form-control" type="text"
                                                            name="choose_desc[]"
                                                            value="<?php echo (isset($vo['choose_desc']) && ($vo['choose_desc'] !== '')?$vo['choose_desc']:''); ?>" style="width: 400px;">
                                                &nbsp;&nbsp;&nbsp;
                                                图标：<input type="hidden" name="choose_image[]" id="choose_image<?php echo $key; ?>"
                                                                value="<?php echo $vo['choose_image']; ?>">
                                                <a href="javascript:uploadOneImage('图片上传','#choose_image<?php echo $key; ?>');">
                                                    <?php if(empty($vo['choose_image'])): ?>
                                                        <img src="/themes/admin_simpleboot3/public/assets/images/default-thumbnail.png"
                                                             id="choose_image<?php echo $key; ?>-preview"
                                                             width="30" style="cursor: pointer"/>
                                                        <?php else: ?>
                                                        <img src="<?php echo cmf_get_image_preview_url($vo['choose_image']); ?>"
                                                             id="choose_image<?php echo $key; ?>-preview"
                                                             width="30" style="cursor: pointer"/>
                                                    <?php endif; ?>
                                                </a>
                                                &nbsp;&nbsp;&nbsp;
                                                选中图标：<input type="hidden" name="choose_image_active[]" id="choose_image_active<?php echo $key; ?>"
                                                            value="<?php echo isset($vo['choose_image_active']) ? $vo['choose_image_active'] : ''; ?>">
                                                <a href="javascript:uploadOneImage('图片上传','#choose_image_active<?php echo $key; ?>');">
                                                    <?php if(empty($vo['choose_image_active'])): ?>
                                                        <img src="/themes/admin_simpleboot3/public/assets/images/default-thumbnail.png"
                                                             id="choose_image_active<?php echo $key; ?>-preview"
                                                             width="30" style="cursor: pointer"/>
                                                        <?php else: ?>
                                                        <img src="<?php echo cmf_get_image_preview_url($vo['choose_image_active']); ?>"
                                                             id="choose_image_active<?php echo $key; ?>-preview"
                                                             width="30" style="cursor: pointer"/>
                                                    <?php endif; ?>
                                                </a>
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                <a class="btn btn-danger" href="javascript:(function(){$('#saved-choose<?php echo $key; ?>').remove();})();"><i class="fa fa-trash fa-fw"></i></a>
                                            </li>
                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                    <?php endif; ?>
                                </ul>
                                <a href="javascript:choose_add();" class="btn btn-default">Add</a>
                            </div>
                        </div>
                        <?php 
                            $faqTitle = !empty($index_setting['faq_title']) ? $index_setting['faq_title'] : 'FAQ';
                            $faqContactTitle = !empty($index_setting['faq_contact_title']) ? $index_setting['faq_contact_title'] : 'Can not Find Your Question?';
                            $faqContactDesc = !empty($index_setting['faq_contact_desc']) ? $index_setting['faq_contact_desc'] : 'If you can not find the answer, contact us and let us know how we can help you.';
                            $faqContactBtnText = !empty($index_setting['faq_contact_btn_text']) ? $index_setting['faq_contact_btn_text'] : 'Contact Us';
                            $faqContactBtnLink = !empty($index_setting['faq_contact_btn_link']) ? $index_setting['faq_contact_btn_link'] : '';
                         ?>
                        <div class="form-group">
                            <label for="input-faq_title" class="col-sm-2 control-label">常见问题标题</label>
                            <div class="col-md-6 col-sm-10">
                                <input class="form-control" id="input-faq_title" type="text" name="faq_title" value="<?php echo $faqTitle; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">常见问题项目</label>
                            <div class="col-md-8 col-sm-10">
                                <ul id="faq" class="pic-list list-unstyled form-inline">
                                    <?php if(!(empty($index_setting['faq']) || (($index_setting['faq'] instanceof \think\Collection || $index_setting['faq'] instanceof \think\Paginator ) && $index_setting['faq']->isEmpty()))): if(is_array($index_setting['faq']) || $index_setting['faq'] instanceof \think\Collection || $index_setting['faq'] instanceof \think\Paginator): if( count($index_setting['faq'])==0 ) : echo "" ;else: foreach($index_setting['faq'] as $key=>$vo): ?>
                                            <li id="saved-faq<?php echo $key; ?>" style="margin-bottom: 10px;">
                                                问题：<input class="form-control" type="text" name="faq_question[]" value="<?php echo (isset($vo['question']) && ($vo['question'] !== '')?$vo['question']:''); ?>" style="width: 420px;">
                                                &nbsp;&nbsp;&nbsp;
                                                答案：<textarea class="form-control" name="faq_answer[]" style="width: 420px;height: 80px;vertical-align: top;"><?php echo (isset($vo['answer']) && ($vo['answer'] !== '')?$vo['answer']:''); ?></textarea>
                                                &nbsp;&nbsp;&nbsp;
                                                <a class="btn btn-danger" href="javascript:(function(){$('#saved-faq<?php echo $key; ?>').remove();})();"><i class="fa fa-trash fa-fw"></i></a>
                                            </li>
                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                    <?php endif; ?>
                                </ul>
                                <a href="javascript:faq_add();" class="btn btn-default">Add FAQ</a>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="input-faq_contact_title" class="col-sm-2 control-label">右侧标题</label>
                            <div class="col-md-6 col-sm-10">
                                <input class="form-control" id="input-faq_contact_title" type="text" name="faq_contact_title" value="<?php echo $faqContactTitle; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="input-faq_contact_desc" class="col-sm-2 control-label">右侧描述</label>
                            <div class="col-md-6 col-sm-10">
                                <textarea class="form-control" id="input-faq_contact_desc" name="faq_contact_desc" style="height: 80px"><?php echo $faqContactDesc; ?></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="input-faq_contact_btn_text" class="col-sm-2 control-label">按钮文本</label>
                            <div class="col-md-6 col-sm-10">
                                <input class="form-control" id="input-faq_contact_btn_text" type="text" name="faq_contact_btn_text" value="<?php echo $faqContactBtnText; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="input-faq_contact_btn_link" class="col-sm-2 control-label">按钮链接</label>
                            <div class="col-md-6 col-sm-10">
                                <input class="form-control" id="input-faq_contact_btn_link" type="text" name="faq_contact_btn_link" value="<?php echo $faqContactBtnLink; ?>" placeholder="Example: /portal/index/quote.html">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-primary js-ajax-submit" data-refresh="0" data-action="<?php echo url('indexSitePost'); ?>">
                                    <?php echo lang('SAVE'); ?>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="D">
                        <div class="form-group">
                            <label class="col-sm-2 control-label">
                                Certificates
                            </label>
                            <div class="col-md-6 col-sm-10">
                                <ul id="authentication_mark" class="pic-list list-unstyled form-inline">
                                    <?php if(!(empty($product_setting['authentication_mark']) || (($product_setting['authentication_mark'] instanceof \think\Collection || $product_setting['authentication_mark'] instanceof \think\Paginator ) && $product_setting['authentication_mark']->isEmpty()))): if(is_array($product_setting['authentication_mark']) || $product_setting['authentication_mark'] instanceof \think\Collection || $product_setting['authentication_mark'] instanceof \think\Paginator): if( count($product_setting['authentication_mark'])==0 ) : echo "" ;else: foreach($product_setting['authentication_mark'] as $key=>$vo): 
                                                $img_url=cmf_get_image_preview_url($vo['url']); ?>
                                            <li id="saved-authentication_mark<?php echo $key; ?>">
                                                <input id="authentication_mark-<?php echo $key; ?>" type="hidden" name="authentication_mark_urls[]"
                                                       value="<?php echo $vo['url']; ?>">
                                                <input class="form-control" id="authentication_mark-<?php echo $key; ?>-name" type="text"
                                                       name="authentication_mark_names[]"
                                                       value="<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>" style="width: 200px;" title="图片名称">
                                                <img id="authentication_mark-<?php echo $key; ?>-preview"
                                                     src="<?php echo cmf_get_image_preview_url($vo['url']); ?>"
                                                     style="height:34px;width: 44px;"
                                                     onclick="parent.imagePreviewDialog(this.src);">
                                                <a class="btn btn-default"  href="javascript:uploadOneImage('图片上传','#authentication_mark-<?php echo $key; ?>');"><i class="fa fa-upload fa-fw"></i></a>
                                                <a class="btn btn-danger"  href="javascript:(function(){$('#saved-authentication_mark<?php echo $key; ?>').remove();})();"><i class="fa fa-trash fa-fw"></i></a>
                                                <a class="btn btn-success"  href="javascript:(function(){$('#saved-authentication_mark<?php echo $key; ?>').before($('#saved-authentication_mark<?php echo $key; ?>').next());})();"><i class="fa fa-arrow-down fa-fw"></i></a>
                                            </li>
                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                    <?php endif; ?>
                                </ul>
                                <a href="javascript:uploadMultiImage('图片上传','#authentication_mark','authentication_mark-item-tpl');"
                                   class="btn btn-default">选择图片</a>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">
                                Operating Voltage
                            </label>
                            <div class="col-md-6 col-sm-10">
                                <ul id="operating_voltage" class="pic-list list-unstyled form-inline">
                                    <?php if(!(empty($product_setting['operating_voltage']) || (($product_setting['operating_voltage'] instanceof \think\Collection || $product_setting['operating_voltage'] instanceof \think\Paginator ) && $product_setting['operating_voltage']->isEmpty()))): if(is_array($product_setting['operating_voltage']) || $product_setting['operating_voltage'] instanceof \think\Collection || $product_setting['operating_voltage'] instanceof \think\Paginator): if( count($product_setting['operating_voltage'])==0 ) : echo "" ;else: foreach($product_setting['operating_voltage'] as $key=>$vo): ?>
                                            <li id="saved-operating_voltage<?php echo $key; ?>">
                                                <input class="form-control" type="text"
                                                       name="operating_voltage[]"
                                                       value="<?php echo (isset($vo) && ($vo !== '')?$vo:''); ?>" style="width: 200px;" >
                                                <a class="btn btn-danger" href="javascript:(function(){$('#saved-operating_voltage<?php echo $key; ?>').remove();})();"><i class="fa fa-trash fa-fw"></i></a>
                                            </li>
                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                    <?php endif; ?>
                                </ul>
                                <a href="javascript:operating_voltage_add();" class="btn btn-default">AddOperating Voltage</a>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">
                                工作赫兹
                            </label>
                            <div class="col-md-6 col-sm-10">
                                <ul id="operating_hertz" class="pic-list list-unstyled form-inline">
                                    <?php if(!(empty($product_setting['operating_hertz']) || (($product_setting['operating_hertz'] instanceof \think\Collection || $product_setting['operating_hertz'] instanceof \think\Paginator ) && $product_setting['operating_hertz']->isEmpty()))): if(is_array($product_setting['operating_hertz']) || $product_setting['operating_hertz'] instanceof \think\Collection || $product_setting['operating_hertz'] instanceof \think\Paginator): if( count($product_setting['operating_hertz'])==0 ) : echo "" ;else: foreach($product_setting['operating_hertz'] as $key=>$vo): ?>
                                            <li id="saved-operating_hertz<?php echo $key; ?>">
                                                <input class="form-control" type="text"
                                                       name="operating_hertz[]"
                                                       value="<?php echo (isset($vo) && ($vo !== '')?$vo:''); ?>" style="width: 200px;" >
                                                <a class="btn btn-danger" href="javascript:(function(){$('#saved-operating_hertz<?php echo $key; ?>').remove();})();"><i class="fa fa-trash fa-fw"></i></a>
                                            </li>
                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                    <?php endif; ?>
                                </ul>
                                <a href="javascript:operating_hertz_add();" class="btn btn-default">Add工作赫兹</a>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">
                                工作等级
                            </label>
                            <div class="col-md-6 col-sm-10">
                                <ul id="job_level" class="pic-list list-unstyled form-inline">
                                    <?php if(!(empty($product_setting['job_level']) || (($product_setting['job_level'] instanceof \think\Collection || $product_setting['job_level'] instanceof \think\Paginator ) && $product_setting['job_level']->isEmpty()))): if(is_array($product_setting['job_level']) || $product_setting['job_level'] instanceof \think\Collection || $product_setting['job_level'] instanceof \think\Paginator): if( count($product_setting['job_level'])==0 ) : echo "" ;else: foreach($product_setting['job_level'] as $key=>$vo): ?>
                                            <li id="saved-job_level<?php echo $key; ?>">
                                                <input class="form-control" type="text"
                                                       name="job_level[]"
                                                       value="<?php echo (isset($vo) && ($vo !== '')?$vo:''); ?>" style="width: 200px;">
                                                <a class="btn btn-danger" href="javascript:(function(){$('#saved-job_level<?php echo $key; ?>').remove();})();"><i class="fa fa-trash fa-fw"></i></a>
                                            </li>
                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                    <?php endif; ?>
                                </ul>
                                <a href="javascript:job_level_add();" class="btn btn-default">Add工作等级</a>
                            </div>
                        </div>

                        <script>
                            function lifting_capacity_add() {
                                var timestamp = new Date().getTime();
                                var randomNum = Math.random();
                                var scaledRandomNum = Math.floor(randomNum * 1000);
                                var id = timestamp.toString() + scaledRandomNum.toString();
                                $('#lifting_capacity').append('<li id="saved-lifting_capacity'+id+'"><input class="form-control" type="text" name="lifting_capacity[]" value="" style="width: 200px;"><a class="btn btn-danger" href="javascript:(function(){$(\'#saved-lifting_capacity'+id+'\').remove();})();"><i class="fa fa-trash fa-fw"></i></a></li>');
                            }
                            function operating_voltage_add() {
                                var timestamp = new Date().getTime();
                                var randomNum = Math.random();
                                var scaledRandomNum = Math.floor(randomNum * 1000);
                                var id = timestamp.toString() + scaledRandomNum.toString();
                                $('#operating_voltage').append('<li id="saved-operating_voltage'+id+'"><input class="form-control" type="text" name="operating_voltage[]" value="" style="width: 200px;"><a class="btn btn-danger" href="javascript:(function(){$(\'#saved-operating_voltage'+id+'\').remove();})();"><i class="fa fa-trash fa-fw"></i></a></li>');
                            }
                            function operating_hertz_add() {
                                var timestamp = new Date().getTime();
                                var randomNum = Math.random();
                                var scaledRandomNum = Math.floor(randomNum * 1000);
                                var id = timestamp.toString() + scaledRandomNum.toString();
                                $('#operating_hertz').append('<li id="saved-operating_hertz'+id+'"><input class="form-control" type="text" name="operating_hertz[]" value="" style="width: 200px;"><a class="btn btn-danger" href="javascript:(function(){$(\'#saved-operating_hertz'+id+'\').remove();})();"><i class="fa fa-trash fa-fw"></i></a></li>');
                            }
                            function job_level_add() {
                                var timestamp = new Date().getTime();
                                var randomNum = Math.random();
                                var scaledRandomNum = Math.floor(randomNum * 1000);
                                var id = timestamp.toString() + scaledRandomNum.toString();
                                $('#job_level').append('<li id="saved-job_level'+id+'"><input class="form-control" type="text" name="job_level[]" value="" style="width: 200px;"><a class="btn btn-danger" href="javascript:(function(){$(\'#saved-job_level'+id+'\').remove();})();"><i class="fa fa-trash fa-fw"></i></a></li>');
                            }
                        </script>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">
                                产品附件
                            </label>
                            <div class="col-md-6 col-sm-10">
                                <input id="product_file" type="hidden" name="file_url" value="<?php echo isset($product_setting['product_file']['url']) ? $product_setting['product_file']['url'] : ''; ?>">
                                <input class="form-control" id="product_file-name" type="text" name="file_name" value="<?php echo isset($product_setting['product_file']['name']) ? $product_setting['product_file']['name'] : ''; ?>"
                                       style="width: 200px;display: inline-block" title="文件名称">
                                <?php if(!(empty($product_setting['product_file']['url']) || (($product_setting['product_file']['url'] instanceof \think\Collection || $product_setting['product_file']['url'] instanceof \think\Paginator ) && $product_setting['product_file']['url']->isEmpty()))): ?>
                                    <a class="btn btn-info" id="file-preview" href="<?php echo cmf_get_image_preview_url($product_setting['product_file']['url']); ?>" target="_blank"><i class="fa fa-download fa-fw"></i></a>
                                <?php endif; ?>
                                <a class="btn btn-default" href="javascript:uploadOne('文件上传','#product_file','file');"><i class="fa fa-upload fa-fw"></i></a>
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-primary js-ajax-submit" data-refresh="0" data-action="<?php echo url('productSitePost'); ?>">
                                    <?php echo lang('SAVE'); ?>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </fieldset>
    </form>

</div>
<script type="text/javascript" src="/static/js/admin.js?v=<?php echo $_static_version; ?>"></script>
<script type="text/javascript">
    function engineering_add() {
        var timestamp = new Date().getTime();
        var randomNum = Math.random();
        var scaledRandomNum = Math.floor(randomNum * 1000);
        var id = timestamp.toString() + scaledRandomNum.toString();
        $('#engineering').append('<li id="saved-engineering'+id+'">名称：<input class="form-control" type="text" name="engineering_name[]" value="" style="width: 300px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;描述：<input class="form-control" type="text" name="engineering_desc[]" style="width: 300px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;数量：<input class="form-control" type="number" name="engineering_num[]" value="" style="width: 100px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a class="btn btn-danger" href="javascript:(function(){$(\'#saved-engineering'+id+'\').remove();})();"><i class="fa fa-trash fa-fw"></i></a></li>');
    }


    function choose_add() {
        var timestamp = new Date().getTime();
        var randomNum = Math.random();
        var scaledRandomNum = Math.floor(randomNum * 1000);
        var id = timestamp.toString() + scaledRandomNum.toString();
        var html = '<li id="saved-choose'+id+'">' +
            '名称：' +
            '<input class="form-control" type="text" name="choose_name[]" value="" style="width: 250px;">' +
            '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;描述：' +
            '<input class="form-control" type="text" name="choose_desc[]" value="" style="width: 400px;">' +
            '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;图标：' +
            '<input type="hidden" name="choose_image[]" id="choose_image'+id+'" value="">' +
            '<a href="javascript:uploadOneImage(\'图片上传\',\'#choose_image'+id+'\');">' +
            '<img src="/themes/admin_simpleboot3/public/assets/images/default-thumbnail.png" id="choose_image'+id+'-preview" width="30" style="cursor: pointer"/>' +
            '</a>' +
            '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;选中图标：' +
            '<input type="hidden" name="choose_image_active[]" id="choose_image_active'+id+'" value="">' +
            '<a href="javascript:uploadOneImage(\'图片上传\',\'#choose_image_active'+id+'\');">' +
            '<img src="/themes/admin_simpleboot3/public/assets/images/default-thumbnail.png" id="choose_image_active'+id+'-preview" width="30" style="cursor: pointer"/>' +
            '</a>' +
            '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ' +
            '<a class="btn btn-danger" href="javascript:(function(){$(\'#saved-choose'+id+'\').remove();})();">' +
            '<i class="fa fa-trash fa-fw"></i>' +
            '</a>' +
            '</li>';
        $('#choose').append(html);
    }

    function faq_add() {
        var timestamp = new Date().getTime();
        var randomNum = Math.random();
        var scaledRandomNum = Math.floor(randomNum * 1000);
        var id = timestamp.toString() + scaledRandomNum.toString();
        var html = '<li id="saved-faq'+id+'" style="margin-bottom: 10px;">' +
            '问题：<input class="form-control" type="text" name="faq_question[]" value="" style="width: 420px;">' +
            '&nbsp;&nbsp;&nbsp;' +
            '答案：<textarea class="form-control" name="faq_answer[]" style="width: 420px;height: 80px;vertical-align: top;"></textarea>' +
            '&nbsp;&nbsp;&nbsp;' +
            '<a class="btn btn-danger" href="javascript:(function(){$(\'#saved-faq'+id+'\').remove();})();">' +
            '<i class="fa fa-trash fa-fw"></i>' +
            '</a>' +
            '</li>';
        $('#faq').append(html);
    }
</script>
</body>
</html>