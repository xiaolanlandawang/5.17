<?php /*a:2:{s:82:"C:\laragon\www\weihua\public/themes/admin_simpleboot3/portal\admin_news\index.html";i:1750736455;s:72:"C:\laragon\www\weihua\public/themes/admin_simpleboot3/public\header.html";i:1730268636;}*/ ?>
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

</head>
<body>
<div class="wrap js-check-wrap">
    <ul class="nav nav-tabs">
        <li class="active"><a href="javascript:;">文章列表</a></li>
        <li><a href="<?php echo url('AdminNews/add'); ?>">添加文章</a></li>
    </ul>
    <form class="well form-inline margin-top-20" method="post" action="<?php echo url('AdminNews/index'); ?>">
        分类:
        <select class="form-control" name="category" style="width: 140px;">
            <option value='0'>全部</option>
            <?php echo (isset($category_tree) && ($category_tree !== '')?$category_tree:''); ?>
        </select> &nbsp;&nbsp;
        时间:
        <input type="text" class="form-control js-bootstrap-datetime" name="start_time"
               value="<?php echo (isset($start_time) && ($start_time !== '')?$start_time:''); ?>"
               style="width: 140px;" autocomplete="off">-
        <input type="text" class="form-control js-bootstrap-datetime" name="end_time"
               value="<?php echo (isset($end_time) && ($end_time !== '')?$end_time:''); ?>"
               style="width: 140px;" autocomplete="off"> &nbsp; &nbsp;
        关键字:
        <input type="text" class="form-control" name="keyword" style="width: 200px;"
               value="<?php echo (isset($keyword) && ($keyword !== '')?$keyword:''); ?>" placeholder="请输入关键字...">
        <input type="submit" class="btn btn-primary" value="搜索"/>
        <a class="btn btn-danger" href="<?php echo url('AdminNews/index'); ?>">清空</a>
    </form>
    <form class="js-ajax-form" action="" method="post">
        <div class="table-actions">
            <?php if(!(empty($category) || (($category instanceof \think\Collection || $category instanceof \think\Paginator ) && $category->isEmpty()))): ?>
                <button class="btn btn-primary btn-sm js-ajax-submit" type="submit"
                        data-action="<?php echo url('AdminNews/listOrder'); ?>"><?php echo lang('SORT'); ?>
                </button>
            <?php endif; ?>
            <button class="btn btn-danger btn-sm js-ajax-submit" type="submit"
                    data-action="<?php echo url('AdminNews/delete'); ?>" data-subcheck="true" data-msg="您确定删除吗？">
                <?php echo lang('DELETE'); ?>
            </button>
        </div>
        <table class="table table-hover table-bordered table-list">
            <thead>
            <tr>
                <th width="15">
                    <input type="checkbox" class="js-check-all" data-direction="x" data-checklist="js-check-x">
                </th>
                <?php if(!(empty($category) || (($category instanceof \think\Collection || $category instanceof \think\Paginator ) && $category->isEmpty()))): ?>
                    <th width="50"><?php echo lang('SORT'); ?></th>
                <?php endif; ?>
                <th>标题</th>
                <th>分类</th>
                <th width="160">缩略图</th>
                <th width="160">创建时间</th>
                <th width="95">操作</th>
            </tr>
            </thead>
            <?php if(is_array($articles) || $articles instanceof \think\Collection || $articles instanceof \think\Paginator): if( count($articles)==0 ) : echo "" ;else: foreach($articles as $key=>$vo): ?>
                <tr>
                    <td>
                        <input type="checkbox" class="js-check" data-yid="js-check-y" data-xid="js-check-x" name="ids[]"
                               value="<?php echo $vo['id']; ?>" title="ID:<?php echo $vo['id']; ?>">
                    </td>
                    <?php if(!(empty($category) || (($category instanceof \think\Collection || $category instanceof \think\Paginator ) && $category->isEmpty()))): ?>
                        <td>
                            <input name="list_orders[<?php echo $vo['post_category_id']; ?>]" class="input-order" type="text"
                                   value="<?php echo $vo['list_order']; ?>">
                        </td>
                    <?php endif; ?>
                    <td>
                        <?php echo $vo['post_title']; ?>
                    </td>
                    <td>
                        <?php if(is_array($vo['categories']) || $vo['categories'] instanceof \think\Collection || $vo['categories'] instanceof \think\Paginator): if( count($vo['categories'])==0 ) : echo "" ;else: foreach($vo['categories'] as $key=>$voo): ?>
                            <?php echo $voo['name']; ?>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </td>
                    <td>
                        <?php if(!(empty($vo['more']['thumbnail']) || (($vo['more']['thumbnail'] instanceof \think\Collection || $vo['more']['thumbnail'] instanceof \think\Paginator ) && $vo['more']['thumbnail']->isEmpty()))): ?>
                            <a href="javascript:parent.imagePreviewDialog('<?php echo cmf_get_image_preview_url($vo['more']['thumbnail']); ?>');">
                                <i class="fa fa-photo fa-fw"></i>
                            </a>
                            <?php else: ?>
                            <i class="fa fa-close fa-fw"></i>
                        <?php endif; ?>
                    </td>
                    <td>
                        <?php if(!(empty($vo['update_time']) || (($vo['update_time'] instanceof \think\Collection || $vo['update_time'] instanceof \think\Paginator ) && $vo['update_time']->isEmpty()))): ?>
                            <?php echo date('Y-m-d H:i',$vo['create_time']); ?>
                        <?php endif; ?>
                    </td>
                    <td>
                        <a class="btn btn-xs btn-primary" href="javascript:;"
                           onclick="openPortalArticleEditDialog(this)"
                           data-href="<?php echo url('AdminNews/edit',array('id'=>$vo['id'])); ?>"><?php echo lang('EDIT'); ?></a>
                        <a class="btn btn-xs btn-danger js-ajax-delete"
                           href="<?php echo url('AdminNews/delete',array('id'=>$vo['id'])); ?>"><?php echo lang('DELETE'); ?></a>
                    </td>
                </tr>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </table>
        <div class="table-actions">
            <?php if(!(empty($category) || (($category instanceof \think\Collection || $category instanceof \think\Paginator ) && $category->isEmpty()))): ?>
                <button class="btn btn-primary btn-sm js-ajax-submit" type="submit"
                        data-action="<?php echo url('AdminNews/listOrder'); ?>"><?php echo lang('SORT'); ?>
                </button>
            <?php endif; ?>
            <button class="btn btn-danger btn-sm js-ajax-submit" type="submit"
                    data-action="<?php echo url('AdminNews/delete'); ?>" data-subcheck="true" data-msg="您确定删除吗？">
                <?php echo lang('DELETE'); ?>
            </button>
        </div>
        <ul class="pagination"><?php echo (isset($page) && ($page !== '')?$page:''); ?></ul>
    </form>
</div>
<script src="/static/js/admin.js?v=<?php echo $_static_version; ?>"></script>
<script>

    function openPortalArticleEditDialog(obj) {
        var $obj = $(obj);
        var href = $obj.data('href');
        parent.openIframeLayer(href, '编辑文章', {
            area: GV.IS_MOBILE ? ['100%', '100%'] : ['95%', '95%'],
            offset: GV.IS_MOBILE ? ['0px', '0px'] : 'auto',
            // btn: ['确定', '取消'],
            yes: function (index, layero) {
                console.log(layero);
                var iframeWin = parent.window[layero.find('iframe')[0]['name']];
                //iframeWin.confirm();
                parent.layer.close(index); //如果设定了yes回调，需进行手工关闭
            },
            end: function () {
            }
        });
    }

    function reloadPage(win) {
        win.location.reload();
    }

    $(function () {
        setCookie("refersh_time", 0);
        Wind.use('ajaxForm', 'artDialog', 'iframeTools', function () {
            //批量复制
            $('.js-articles-copy').click(function (e) {
                var ids = [];
                $("input[name='ids[]']").each(function () {
                    if ($(this).is(':checked')) {
                        ids.push($(this).val());
                    }
                });

                if (ids.length == 0) {
                    art.dialog.through({
                        id: 'error',
                        icon: 'error',
                        content: '您没有勾选信息，无法进行操作！',
                        cancelVal: '关闭',
                        cancel: true
                    });
                    return false;
                }

                ids = ids.join(',');
                art.dialog.open("/index.php?g=portal&m=AdminNews&a=copy&ids=" + ids, {
                    title: "批量复制",
                    width: "300px"
                });
            });
            //批量移动
            $('.js-articles-move').click(function (e) {
                var ids = [];
                $("input[name='ids[]']").each(function () {
                    if ($(this).is(':checked')) {
                        ids.push($(this).val());
                    }
                });

                if (ids.length == 0) {
                    art.dialog.through({
                        id: 'error',
                        icon: 'error',
                        content: '您没有勾选信息，无法进行操作！',
                        cancelVal: '关闭',
                        cancel: true
                    });
                    return false;
                }

                ids = ids.join(',');
                art.dialog.open("/index.php?g=portal&m=AdminNews&a=move&old_term_id=<?php echo (isset($term['term_id']) && ($term['term_id'] !== '')?$term['term_id']:0); ?>&ids=" + ids, {
                    title: "批量移动",
                    width: "300px"
                });
            });
        });
    });
</script>
</body>
</html>
