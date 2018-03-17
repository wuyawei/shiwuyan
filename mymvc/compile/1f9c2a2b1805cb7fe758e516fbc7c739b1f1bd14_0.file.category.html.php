<?php
/* Smarty version 3.1.30, created on 2017-09-05 02:38:10
  from "D:\wamp\www\php\mymvc\template\admin\category.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59adf1f2e42bf0_70981264',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1f9c2a2b1805cb7fe758e516fbc7c739b1f1bd14' => 
    array (
      0 => 'D:\\wamp\\www\\php\\mymvc\\template\\admin\\category.html',
      1 => 1502591406,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59adf1f2e42bf0_70981264 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title>网站信息</title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
pintuer.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
admin.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
jquery.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
pintuer.js"><?php echo '</script'; ?>
>
    <!-- 配置文件 -->
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo EDIT_PATH;?>
ueditor.config.js"><?php echo '</script'; ?>
>
    <!-- 编辑器源码文件 -->
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo EDIT_PATH;?>
ueditor.all.js"><?php echo '</script'; ?>
>
</head>
<style>
    #tfile {
        position: relative;
        background: #D0EEFF;
        border: 1px solid #99D3F5;
        border-radius: 4px;
        padding: 5px 12px;
        overflow: hidden;
        color: #1E88C7;
        line-height: 30px;
        text-align: center;
        margin-left: 15px;
    }
    #tfile input {
        width:100%;
        height: 100%;
        position: absolute;
        right: 0;
        top: 0;
        opacity: 0;
    }
    .itm{
        width:100%;
        height: 0%;
        border-radius: 4px;
        position: absolute;
        left:0;
        bottom: 0;
        background-color: rgba(0,0,0,0.3);
        color: #fff;
        text-align: center;
        line-height: 40px;
    }
    .btn{
        width:80px;
        background: #D0EEFF;
        border: 1px solid #99D3F5;
        border-radius: 4px;
        padding: 5px 5px;
        overflow: hidden;
        color: #1E88C7;
        line-height: 18px;
        text-align: center;
        margin-left: 15px;
        margin-top: 10px;
        float: left;
        cursor: pointer;
        position: relative;
    }
    .show_p{
        float: left;
        margin: 0;
        margin-left: 15px;
        line-height: 50px;
        cursor: pointer;
        display: none;
        position: relative;
    }
    .show_p:hover .show_d{
        display: block;
    }
    .show_d{
        position: absolute;
        left:0;
        top:0;
        width:300px;
        z-index: 111;
        display: none;
    }
    .show_d img{
        width:100%;
    }
    .curr{
        width:300px;
        float: left;
        overflow: hidden;
        margin-left: 15px;
    }
    .curr img{
        width:100%;
    }
</style>
<body>
<div class="panel admin-panel">
    <table class="table table-hover text-center">
        <tr>
            <th width="5%">cate_id</th>
            <th>栏目名称</th>
            <th>栏目图片</th>
            <th>推荐位</th>
            <th>parent_id</th>
            <th width="250">操作</th>
        </tr>
        <?php echo $_smarty_tpl->tpl_vars['let']->value;?>

    </table>
</div>

<div class="panel admin-panel margin-top">
    <div class="panel-head" id="add"><strong><span class="icon-pencil-square-o"></span>添加栏目</strong></div>
    <div class="body-content">
        <form method="post" class="form-x" action="index.php?m=admin&f=category&a=addcateinfo">
            <input type="hidden" name="id"  value="" />
            <div class="form-group">
                <div class="label">
                    <label>父级栏目</label>
                </div>
                <div class="field">
                    <select name="parent_id" class="input w50">
                        <option value="0">一级栏目</option>
                        <?php echo $_smarty_tpl->tpl_vars['str']->value;?>

                    </select>
                    <div class="tips"></div>
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label>栏目名称：</label>
                </div>
                <div class="field">
                    <input type="text" class="input w50" name="cname" value="" data-validate="required:请输入标题" />
                    <div class="tips"></div>
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label>专题描述：</label>
                </div>
                <div class="field">
                    <input type="text" class="input" name="catdesc" value=""/>
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label>专题公告：</label>
                </div>
            </div>
            <?php echo '<script'; ?>
 id="container" name="notice" type="text/plain">

            <?php echo '</script'; ?>
>
            <div class="form-group">
                <div class="label">
                    <label>图片：</label>
                </div>
                <div class="field">
                    <div id="tfile" style="float:left;">
                        选择文件
                        <input type="file" name="file" id="image1" value="+ 浏览上传" >
                    </div>
                    <div class="show_p">查看预览
                        <div class="show_d">
                            <img src="" alt="">
                        </div>
                    </div>
                    <div class="btn">点击上传
                        <div class="itm"></div>
                    </div>
                    <div class="curr">
                        当前图片：
                        <img src="" alt="">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label>推荐位：</label>
                </div>
                <div class="field" style="padding-top:8px;">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result']->value, 'r');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
?>
                    <?php echo $_smarty_tpl->tpl_vars['r']->value['posname'];?>
<input type="radio" name="posit" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['id'];?>
"/>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label>是否在导航显示：</label>
                </div>
                <div class="field" style="padding-top:8px;">
                    是 <input id="ishome"  type="radio" name="show" checked value="1"/>
                    否 <input id="isvouch"  type="radio" name="show" value="1000001"/>
                </div>
            </div>
            <input type="hidden" name="imgurl" id="imgurl" value="">
            <div class="form-group">
                <div class="label">
                    <label></label>
                </div>
                <div class="field">
                    <button class="button bg-main icon-check-square-o" type="submit"> 提交</button>
                </div>
            </div>
        </form>
    </div>
</div>
</body></html>

<?php echo '<script'; ?>
>
    $(function () {

        var file=document.querySelector("#image1");
        var fname;
        var files="";
        var size=20*1024*1024;
        var typearr=["jpg","jpeg","gif","png"];
        file.onchange=function () {
            $(".btn").get(0).innerText="点击上传";
            files=this.files[0];
            fname=files.name.substr(files.name.lastIndexOf(".")+1);
            function check(){
                if(files.size>size){
                    alert("文件过大");
                    return false;
                }
                var flag = false;
                for(var i =0;i<typearr.length;i++){
                    if(fname==typearr[i]){
                        flag=true;
                        break;
                    }
                }
                if(!flag){
                    alert("格式不符");
                    return false;
                }
                return true;
            }
            if(check()){
                var read = new FileReader;
                read.readAsDataURL(files);
                read.onload=function(e) {
                    var e = e||window.event;
                    $(".show_d img").get(0).src=e.target.result;
                    $(".curr img").get(0).src=e.target.result;
                }
                $(".show_p").css("display","block");
            }
        };

        $(".btn").click(function(){
            if(files==""){
                alert("请选择文件");
                return;
            }
            var formdata =new FormData();
            formdata.append("file",files);
            var ajax=window.XMLHttpRequest?new XMLHttpRequest():new ActiveXObject("Microsoft.XMLHTTP");
            ajax.upload.onprogress=function (e) {
                var e = e||window.event;
                var itm=e.loaded/e.total*100+"%";
                $(".itm").css("height",itm);
            };
            ajax.onload=function () {
                $("#imgurl").attr("value",ajax.responseText);
                $(".itm").css("height",0);
                $(".btn").get(0).innerText="上传成功";
            };
            ajax.open("post","index.php?m=admin&f=show&a=upload");
            ajax.send(formdata);
        })
    })
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
    var ue = UE.getEditor('container', {
        initialFrameWidth:1000,
        initialFrameHeight:500,
    });
<?php echo '</script'; ?>
><?php }
}
