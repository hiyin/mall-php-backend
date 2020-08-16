<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:86:"/Applications/MAMP/htdocs/mall/public/../application/admin/view/cate/cate_content.html";i:1585914452;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="/static/layui/css/layui.css">
    <link rel="stylesheet" href="/static/layui/css/view.css"/>
    <link rel="stylesheet" href="/static/admin/css/view.css"/>
    <title></title>
    <style>
        .layui-quote-nm{margin: 30px;}
        .addBtn{float:right;margin:0;}
        .layui-card{padding-bottom:20px;}
        .layui-content{padding-bottom:0;}
        .layui-card-header{
            display: flex;align-items: center}
        .layui-card-header .layui-btn-xs{margin-top:25px;margin-left:20px;}
    </style>
</head>
<body class="layui-view-body">
<form action="" method="post" class="layui-form" enctype="multipart/form-data">
    <div class="layui-content-list">
        <?php if(count($catecontent)==0): ?>
        <div class="layui-content">
            <div class="layui-row">
                <div class="layui-card">
                    <div class="layui-card-header">添加产品分类
                        <div class="layui-btn layui-btn-blue  layui-btn-xs" onclick="addContent()">添加内容</div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">内容名称</label>
                        <div class="layui-input-block">
                            <input type="text" name="title[]" placeholder="请输入标题" autocomplete="off" class="layui-input">
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">内容图片</label>
                        <div class="layui-input-block" style="position: relative">
                            <input type='file' class='doc' onchange="imgChange(this,0)" name='image[]' style='opacity:0;width:100px;height: 100px;position: absolute;'>
                            <table style="width:102px;height:102px;border:1px solid #e6e6e6" class="localImag">
                                <tr>
                                    <td>
                                        <img  class="preview" alt="" src="/static/public/image/upload.png" >
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="layui-form-item layui-form-text">
                        <label class="layui-form-label">url地址</label>
                        <div class="layui-input-block">
                            <input type="text" name="url[]" placeholder="请输入url地址"
                                   autocomplete="off" class="layui-input">
                        </div>
                    </div>
                    <div class="layui-form-item layui-form-text">
                        <label class="layui-form-label">商品名称</label>
                        <div class="layui-input-block">
                            <input type="text" name="name[]" placeholder="请输入商品名称"

                                   autocomplete="off" class="layui-input">
                        </div>
                    </div>
                    <div class="layui-form-item layui-form-text">
                        <label class="layui-form-label">商品描述</label>
                        <div class="layui-input-block">
                            <input type="text" name="summary[]" placeholder="请输入商品描述"

                                   autocomplete="off" class="layui-input">

                        </div>
                    </div>
                    <div class="layui-form-item layui-form-text">
                        <label class="layui-form-label">商品价格</label>
                        <div class="layui-input-block">
                            <input type="text" name="price[]" placeholder="请输入商品价格"

                                   autocomplete="off" class="layui-input">
                        </div>
                    </div>
                    <div class="layui-form-item layui-form-text">
                        <label class="layui-form-label">背景颜色</label>
                        <div class="layui-input-block">
                            <input type="text" name="bg[]" placeholder="请填写背景颜色值"

                                   autocomplete="off" class="layui-input">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php else: if(is_array($catecontent) || $catecontent instanceof \think\Collection || $catecontent instanceof \think\Paginator): $i = 0; $__LIST__ = $catecontent;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                <div class="layui-content" >
                    <div class="layui-row">
                        <div class="layui-card">
                            <div class="layui-card-header">添加产品分类
                                <div class="layui-btn layui-btn-blue  layui-btn-xs" onclick="addContent()">添加内容</div>
                                <?php if($key!=0): ?>
                                <div class="layui-btn layui-btn-blue  layui-btn-xs" onclick="delContent(<?php echo $key; ?>)">删除内容</div>
                                <?php endif; ?>
                            </div>
                            <div class="layui-form-item">
                                <label class="layui-form-label">内容名称</label>
                                <div class="layui-input-block">
                                    <input type="text" name="title[]" placeholder="请输入标题"
                                           value="<?php echo $vo['title']; ?>"
                                           autocomplete="off" class="layui-input">
                                </div>
                            </div>
                            <div class="layui-form-item">
                                <label class="layui-form-label">内容图片</label>
                                <div class="layui-input-block" style="position: relative">
                                    <input type='file' class='doc' onchange="imgChange(this,0)" name='image[]' style='opacity:0;width:100px;height: 100px;position: absolute;'>
                                    <table style="width:102px;height:102px;border:1px solid #e6e6e6" class="localImag">
                                        <tr>
                                            <td>
                                                <?php if($vo['img']): ?>
                                                <img  class="preview" alt="" src="/uploads/<?php echo $vo['img']; ?>"  style="width: 100%;">
                                                <input type="hidden" value="<?php echo $vo['img']; ?>" name="editImg[]">
                                                <?php else: ?>
                                                <img  class="preview" alt="" src="/static/public/image/upload.png" >
                                                <?php endif; ?>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <div class="layui-form-item">
                                <label class="layui-form-label">商品设置</label>
                                <div class="layui-input-inline selectShop">
                                    <button onClick="cate_select_shop(this)" data-method="setTop" class="layui-btn layui-btn-blue " type="button" style="margin-bottom:0;">选择商品</button>
                                </div>
                            </div>
                            <div class="shopInfo" <?php if($vo['url']): ?> style="display: block;" <?php else: ?> style="display: none;" <?php endif; ?>>
                                <div class="layui-form-item layui-form-text">
                                    <label class="layui-form-label">url地址</label>
                                    <div class="layui-input-block">
                                        <input type="text" name="url[]" placeholder="请输入url地址"
                                               value="<?php echo $vo['url']; ?>"
                                               autocomplete="off" class="layui-input shopurl">

                                    </div>
                                </div>
                                <div class="layui-form-item layui-form-text">
                                    <label class="layui-form-label">商品名称</label>
                                    <div class="layui-input-block">
                                        <input type="text" name="name[]" placeholder="请输入名称"
                                               value="<?php echo $vo['name']; ?>"
                                               autocomplete="off" class="layui-input smalltitle">
                                    </div>
                                </div>
                                <div class="layui-form-item layui-form-text">
                                    <label class="layui-form-label">商品描述</label>
                                    <div class="layui-input-block">
                                        <input type="text" name="summary[]" placeholder="请输入商品描述"
                                               value="<?php echo $vo['summary']; ?>"
                                               autocomplete="off" class="layui-input longtitle">

                                    </div>
                                </div>
                                <div class="layui-form-item layui-form-text">
                                    <label class="layui-form-label">商品价格</label>
                                    <div class="layui-input-block">
                                        <input type="text" name="price[]" placeholder="请输入商品价格"
                                               value="<?php echo $vo['price']; ?>"
                                               autocomplete="off" class="layui-input shopprice">
                                    </div>
                                </div>

                            </div>


                            <div class="layui-form-item layui-form-text">
                                <label class="layui-form-label">背景颜色</label>
                                <div class="layui-input-block">
                                    <input type="text" name="bg[]" placeholder="请填写背景颜色值"
                                           value="<?php echo $vo['bg']; ?>"
                                           autocomplete="off" class="layui-input">
                                </div>
                            </div>
                        </div>
                    </div>
                 </div>
             <?php endforeach; endif; else: echo "" ;endif; endif; ?>
    </div>




    <div class="layui-form-item" style="margin-top:30px;">
        <div class="layui-input-block">
            <button class="layui-btn layui-btn-blue" lay-submit lay-filter="formDemo">立即提交</button>
            <a href="<?php echo url('Cate/index'); ?>" class="layui-btn layui-btn-primary">返回</a>
        </div>
    </div>
</form>
    <script src="/static/layui/layui.all.js"></script>
    <script src="/static/public/js/jquery.js"></script>
    <script src="/static/public/js/upload.js"></script>

    <script>


      layui.use('form', function(){
          var form = layui.form
             ,layer = layui.layer;



      });

      function cate_select_shop(obj) {
          var that = this;
          //多窗口模式，层叠置顶
          parent.layer.open({
              type:2 //此处以iframe举例
              ,title: '请您选择商品'
              ,area: ['800px', '619px']
              ,shade: 0.3
              ,maxmin: true
              ,offset:'auto'
              ,content: "<?php echo url('Product/selectShop'); ?>"
              ,zIndex: layer.zIndex //重点1
              ,btn:['保存','返回']
              ,yes:function(index, layero){
                  var i=parent.window["layui-layer-iframe" + index];
                  // //获取选中的商品名称
                  var shopid=$(i.document).find("#selectId").val();
                  var price=$(i.document).find("#selectPrice").val();
                  var title=$(i.document).find("#selectTitle").val();
                  var smalltitle=$(i.document).find("#selectSmall").val();
                  console.log(shopid,price,title,smalltitle)

                  $(obj).parent().parent().next().show();
                  $(obj).parent().parent().next().find('.shopurl').val('/pages/detail/detail?id='+shopid);
                  $(obj).parent().parent().next().find('.smalltitle').val(smalltitle)
                  $(obj).parent().parent().next().find('.longtitle').val(title)
                  $(obj).parent().parent().next().find('.shopprice').val(price)
                  parent.layer.closeAll()

              }
              ,success: function(layero){
                  console.log($(layero).find("#selectId").val())
                  parent.layer.setTop(layero); //重点2
              }
          });
      }





        function  addContent() {
           var content="";
           var num=$(".layui-content").length;
            if(num==2){parent.layer.msg("分类内容最多添加两项");return;}
            content =
                `
             <div class="layui-content">
            <div class="layui-row">
                <div class="layui-card">
                    <div class="layui-card-header">添加产品分类
                        <div class="layui-btn layui-btn-blue  layui-btn-xs" onclick="addContent()">添加内容</div>
                        <div class="layui-btn layui-btn-blue  layui-btn-xs" onclick="delContent(${num})">删除内容</div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">内容名称</label>
                        <div class="layui-input-block">
                            <input type="text" name="title[]" placeholder="请输入标题" autocomplete="off" class="layui-input">
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">内容图片</label>
                        <div class="layui-input-block" style="position: relative">
                            <input type='file' class='doc' onchange="imgChange(this,${num})" name='image[]' style='opacity:0;width:100px;height: 100px;position: absolute;'>
                            <table style="width:102px;height:102px;border:1px solid #e6e6e6" class="localImag">
                                <tr>
                                    <td>
                                        <img  class="preview" alt="" src="/static/public/image/upload.png" >
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="layui-form-item">
                                <label class="layui-form-label">商品设置</label>
                                <div class="layui-input-inline selectShop">
                                    <button onClick="cate_select_shop(this)" data-method="setTop" class="layui-btn layui-btn-blue " type="button" style="margin-bottom:0;">选择商品</button>
                                </div>
                    </div>
                    <div class="shopinfo" style="display: none;">
                            <div class="layui-form-item layui-form-text">
                                <label class="layui-form-label">url地址</label>
                                <div class="layui-input-block">
                                    <input type="text" name="url[]" placeholder="请输入url地址"

                                           autocomplete="off" class="layui-input shopurl">

                                </div>
                            </div>
                            <div class="layui-form-item layui-form-text">
                                <label class="layui-form-label">商品名称</label>
                                <div class="layui-input-block">
                                    <input type="text" name="name[]" placeholder="请输入商品名称"

                                           autocomplete="off" class="layui-input smalltitle">
                                 </div>
                             </div>
                            <div class="layui-form-item layui-form-text">
                                <label class="layui-form-label">商品描述</label>
                                <div class="layui-input-block">
                                    <input type="text" name="summary[]" placeholder="请输入商品描述"

                                           autocomplete="off" class="layui-input longtitle">

                                </div>
                            </div>
                            <div class="layui-form-item layui-form-text">
                                <label class="layui-form-label">商品价格</label>
                                <div class="layui-input-block">
                                    <input type="text" name="price[]" placeholder="请输入商品价格"

                                           autocomplete="off" class="layui-input shopprice">
                                </div>
                            </div>
                        </div>
                             <div class="layui-form-item layui-form-text">
                        <label class="layui-form-label">背景颜色</label>
                        <div class="layui-input-block">
                            <input type="text" name="bg[]" placeholder="请填写背景颜色值"

                                   autocomplete="off" class="layui-input">
                        </div>
                    </div>
                </div>
            </div>
        </div>
            `
            $(".layui-content-list").append(content);
        }
        function delContent(num) {

           $(".layui-content").eq(num).remove()
        }

    </script>
</body>
</html>
