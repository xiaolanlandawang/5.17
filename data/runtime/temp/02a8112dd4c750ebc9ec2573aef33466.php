<?php /*a:2:{s:80:"C:\laragon\www\weihua\public/themes/admin_simpleboot3/portal\admin_case\add.html";i:1774445482;s:72:"C:\laragon\www\weihua\public/themes/admin_simpleboot3/public\header.html";i:1730268636;}*/ ?>
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
</head>
<body>
<div class="wrap js-check-wrap">
  <ul class="nav nav-tabs">
    <li><a href="<?php echo url('AdminCase/index'); ?>">案例列表</a></li>
    <li class="active"><a href="<?php echo url('AdminCase/add'); ?>">添加案例</a></li>
  </ul>
  <form action="<?php echo url('AdminCase/addPost'); ?>" method="post" class="form-horizontal js-ajax-form margin-top-20">
    <div class="row">
      <div class="col-md-9">
        <table class="table table-bordered">
          <tr>
            <th width="100">标题<span class="form-required">*</span></th>
            <td>
              <input class="form-control" type="text" name="post[post_title]"
                     id="title" required value="" placeholder="请输入标题"/>
            </td>
          </tr>
          <tr>
            <th width="100">别名</th>
            <td>
              <input class="form-control" type="text" style="width: 400px;" name="post[post_alias]"
                     value="" placeholder="请输入别名"/>
              <p class="help-block">用于美化url链接</p>
            </td>
          </tr>
          <tr>
            <th><b>图片</b></th>
            <td>
              <div>
                <input type='hidden' name='post[more][thumbnail]' id='thumbnail'>
                <a href="javascript:uploadOneImage('图片上传','#thumbnail');">
                  <img src="/themes/admin_simpleboot3/public/assets/images/default-thumbnail.png"
                       id='thumbnail-preview'
                       width='135' height='135' style='cursor: hand'/>
                </a>
                <input type="button" class="btn btn-sm btn-cancel-thumbnail"
                       onclick="$('#thumbnail-preview').attr('src','/themes/admin_simpleboot3/public/assets/images/default-thumbnail.png');$('#thumbnail').val('');return false;"
                       value="取消图片">
              </div>
              <p class="help-block">建议尺寸：770*420</p>
            </td>
          </tr>
          <tr>
            <th>关键词</th>
            <td>
              <input class="form-control" type="text" name="post[post_keywords]" style="width:400px"
                     placeholder="请输入关键字">
              <p class="help-block">多关键词之间用英文逗号隔开</p>
            </td>
          </tr>
          <tr>
            <th>摘要</th>
            <td><textarea class="form-control" name="post[post_excerpt]" style="height: 50px;"></textarea>
            </td>
          </tr>
          <tr>
            <th>内容</th>
            <td>
              <script type="text/plain" id="content" name="post[post_content]"></script>
            </td>
          </tr>
        </table>
        <?php 
    hook('portal_admin_article_edit_view_main',null,false);
 ?>
        <div class="form-group">
          <div class="col-sm-12 text-center">
            <button type="submit" class="btn btn-primary js-ajax-submit"><?php echo lang('ADD'); ?></button>
            <a class="btn btn-default" href="<?php echo url('AdminCase/index'); ?>"><?php echo lang('BACK'); ?></a>
          </div>
        </div>
      </div>
    </div>
  </form>
</div>
<script type="text/javascript" src="/static/js/admin.js?v=<?php echo $_static_version; ?>"></script>
<script type="text/javascript">
  //编辑器路径定义
  var editorURL = GV.WEB_ROOT;
</script>
<script type="text/javascript" src="/static/js/ueditor/ueditor.config.js"></script>
<script type="text/javascript" src="/static/js/ueditor/ueditor.all.min.js"></script>
<script type="text/javascript">
  $(function () {
    editorcontent = new baidu.editor.ui.Editor();
    editorcontent.render('content');
    try {
      editorcontent.sync();
    } catch (err) {
    }
  });
</script>
</body>
</html>
