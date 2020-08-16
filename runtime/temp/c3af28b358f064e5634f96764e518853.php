<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:80:"D:\phpStudy\WWW\mall\public/../application/admin\view\search\search_history.html";i:1574306079;}*/ ?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="/static/layui/css/layui.css">
    <link rel="stylesheet" href="/static/layui/css/view.css"/>

    <title>管理后台</title>
    <style>
        .pagination{padding:10px 0 20px;}
        .pagination li{float:left;padding: 0 12px;}
        .pagination li.active{background-color:#177ce3;border-radius: 2px;}
        .pagination li a,.pagination li span{font-size:14px;color:#333;}
        .pagination li.active span{ color:#fff;}
        .pagination li a:hover{color:#177ce3;}
        .pagination li.disabled span{color:#999;}
        p.center{text-align: center}
        .layui-table img{
            max-width:none;}
    </style>
</head>
<body class="layui-view-body">
<form action="" class="layui-form">

    <div class="layui-content">
        <div class="layui-row">
            <div class="layui-card">
                <div class="layui-card-header">搜索历史</div>
                <div class="layui-card-body">
                    <div class="form-box">

                        <table class="layui-table">
                            <colgroup>
                                <col width="100">


                                <col>
                                <col width="200">

                            </colgroup>
                            <thead>
                                <tr>
                                    <th><p class="center">id</p></th>
                                    <th>关键字</th>
                                    <th>搜索次数</th>

                                </tr>
                            </thead>
                            <tbody>
                            <?php if(is_array($search) || $search instanceof \think\Collection || $search instanceof \think\Paginator): $i = 0; $__LIST__ = $search;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                <tr>
                                    <td><p class="center"><?php echo $vo['id']; ?></p></td>
                                    <td><?php echo $vo['keyword']; ?></td>

                                    <td><?php echo $vo['count']; ?></td>

                                </tr>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                            </tbody>

                        </table>

                    </div>
                    <div class="pagination" style="margin-bottom:20px;"><?php echo $search->render(); ?></div>
                </div>
            </div>
        </div>
    </div>
</form>
    <script src="/static/layui/layui.all.js"></script>
<script src="/static/public/js/jquery.js"></script>
<script>
    var element = layui.element;
    var table = layui.table;
    var form = layui.form;
    form.on('switch()', function(data){
        var id=data.elem.id;
        var recommend;
        if(data.elem.checked){
            recommend=1;
        }else{
            recommend=0;
        }
        $.ajax({
            url: '<?php echo url("floor/recommend"); ?>',
            data:{
                recommend:recommend,
                id:id
            },//发送请求数据
            type: "POST",
            dataType: "json",//[重要]数据类型,一般为json格式,有些时候可以为html/text
            success: function(result){
                //成功处理函数,result为返回结果[重要]
                console.log(result)
            },

        });

    });

</script>
</body>
</html>
