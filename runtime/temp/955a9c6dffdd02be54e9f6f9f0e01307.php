<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:99:"E:\phpstudy\PHPTutorial\WWW\mall\public/../application/admin\view\product\product_service_edit.html";i:1574231205;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="/static/layui/css/layui.css">
    <link rel="stylesheet" href="/static/layui/css/view.css"/>
    <link rel="stylesheet" href="/static/admin/css/view.css"/>
    <title></title>
</head>
<body class="layui-view-body">
<form class="layui-form" action="" method="post" enctype="multipart/form-data">
    <div class="layui-content">
        <div class="layui-row">
            <div class="layui-card">
                <div class="layui-card-header">添加产品服务</div>
                <div class="layui-form-item">
                    <label class="layui-form-label">服务名称</label>
                    <div class="layui-input-block">
                        <input type="text" name="title" value="<?php echo $service['title']; ?>"  placeholder="请输入服务名称" autocomplete="off" class="layui-input">
                    </div>
                </div>

                <div class="layui-form-item">
                    <label class="layui-form-label">服务图片</label>
                    <div class="layui-input-block" style="position: relative">
                        <input type='file' class='doc' onchange="imgChange(this,0)" name='image' style='opacity:0;width:100px;height: 100px;position: absolute;'>
                        <table style="width:102px;height:102px;border:1px solid #e6e6e6" class="localImag">
                            <tr>
                                <td>
                                    <?php if($service['image']): ?>
                                    <img  class="preview" alt="" src="/uploads/<?php echo $service['image']; ?>" style="width: 100%;" >
                                    <?php else: ?>
                                    <img  class="preview" alt="" src="/static/public/image/upload.png" >
                                    <?php endif; ?>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>

                <div class="layui-form-item layui-form-text">
                    <label class="layui-form-label">服务描述</label>
                    <div class="layui-input-block">
                        <textarea name="summary" placeholder="请输入内容" class="layui-textarea"><?php echo $service['summary']; ?></textarea>
                    </div>
                </div>
                <div class="layui-form-item">
                    <div class="layui-input-block">
                        <button class="layui-btn layui-btn-blue" lay-submit lay-filter="formDemo">立即提交</button>
                        <button type="reset" class="layui-btn layui-btn-primary">重置</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
<script src="/static/layui/layui.all.js"></script>
<script src="/static/public/js/jquery.js"></script>
<script src="/static/public/js/upload.js"></script>
<script>
    var form = layui.form
        ,layer = layui.layer;
</script>
</body>
</html>
