<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:91:"E:\phpstudy\PHPTutorial\WWW\mall\public/../application/admin\view\product\product_list.html";i:1573635346;}*/ ?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="/static/layui/css/layui.css">
    <link rel="stylesheet" href="/static/layui/css/view.css"/>
    <link rel="icon" href="/favicon.ico">
    <title>管理后台</title>
</head>
<body class="layui-view-body">
    <div class="layui-content">
        <div class="layui-row">
            <div class="layui-card">
                <div class="layui-card-body">
                    <div class="form-box">
                        <div class="layui-form layui-form-item">
                            <div class="layui-inline">
                                <div class="layui-form-mid">用户名:</div>
                                <div class="layui-input-inline" style="width: 200px;">
                                  <input type="text" autocomplete="off" class="layui-input">
                                </div>
                                <div class="layui-form-mid">分类:</div>
                                <div class="layui-input-inline" style="width: 150px;">
                                    <select name="sex">
                                        <option value="0">请选择分类</option>
                                        <?php if(is_array($cate) || $cate instanceof \think\Collection || $cate instanceof \think\Paginator): $i = 0; $__LIST__ = $cate;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                        <option value="<?php echo $vo['id']; ?>"><?php echo $vo['catename']; ?></option>
                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                    </select>
                                </div>
                                <button class="layui-btn layui-btn-blue">查询</button>
                                <button class="layui-btn layui-btn-primary">重置</button>
                            </div>
                        </div>
                        <a href="<?php echo url('Product/add'); ?>" class="layui-btn layui-btn-blue"><i class="layui-icon">&#xe654;</i>新增</a>
                        <table class="layui-table">
                            <colgroup>
                                <col width="150">
                                <col>
                                <col width="200">
                                <col width="200">
                                <col width="200">
                                <col width="200">
                            </colgroup>
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>文章标题</th>
                                    <th>文字图片</th>
                                    <th>所属分类</th>
                                    <th>发布时间</th>
                                    <th>操作</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php if(is_array($product) || $product instanceof \think\Collection || $product instanceof \think\Paginator): $i = 0; $__LIST__ = $product;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                <tr>
                                    <td><?php echo $vo['id']; ?></td>
                                    <td><?php echo $vo['title']; ?></td>
                                    <td>
                                        <?php if($vo['mainimage']): ?>
                                        <img src="/uploads/<?php echo $vo['mainimage']; ?>" alt="" style="display: block;margin:0 auto;height: 30px;">
                                        <?php else: ?>
                                        <p class="center"> 暂无图片</p>
                                        <?php endif; ?>
                                    </td>
                                    <th><?php echo $vo['catename']; ?></th>
                                    <td><?php echo date('Y-m-d h:i:s',$vo['data']); ?></td>
                                    <td>
                                        <a href="<?php echo url('product/edit',array('id'=>$vo['id'])); ?>" class="layui-btn layui-btn-xs layui-btn-blue">编辑</a>
                                        <a href="<?php echo url('product/del',array('id'=>$vo['id'])); ?>" class="layui-btn layui-btn-xs layui-btn-danger">删除</a>
                                    </td>
                                </tr>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="/static/layui/layui.all.js"></script>
    <script>
  var element = layui.element;
  var table = layui.table;
  var form = layui.form;

    </script>
</body>
</html>
