<?php
/* Smarty version 3.1.30, created on 2017-09-05 02:38:02
  from "D:\wamp\www\php\mymvc\template\admin\addshow.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59adf1ea0c3680_99957894',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '63abb65a033a559ea5690f36e63554481ea4f4c3' => 
    array (
      0 => 'D:\\wamp\\www\\php\\mymvc\\template\\admin\\addshow.html',
      1 => 1502330832,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59adf1ea0c3680_99957894 (Smarty_Internal_Template $_smarty_tpl) {
?>

<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title></title>
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
</style>
<body>
<div class="panel admin-panel">
    <div class="panel-head" id="add"><strong><span class="icon-pencil-square-o"></span>添加内容</strong></div>
    <div class="body-content">
        <form method="post" class="form-x" action="index.php?m=admin&f=show&a=addcontinfo">
            <div class="form-group">
                <div class="label">
                    <label>标题：</label>
                </div>
                <div class="field">
                    <input type="text" class="input w50" value="" name="stitle" data-validate="required:请输入标题" />
                    <div class="tips"></div>
                </div>
            </div>
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
                </div>
            </div>

            <if condition="$iscid eq 1">
                <div class="form-group">
                    <div class="label">
                        <label>所属栏目：</label>
                    </div>
                    <div class="field">
                        <select name="cid" class="input w50 lanmu">
                            <option value="000">请选择栏目</option>
                            <?php echo $_smarty_tpl->tpl_vars['str']->value;?>

                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result1']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['cat_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['cat_name'];?>
</option>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                        </select>
                        <div class="tips"></div>
                    </div>
                </div>

            </if>
            <?php echo '<script'; ?>
 id="container" name="scont" type="text/plain">

            <?php echo '</script'; ?>
>

            <div class="clear"></div>

            <div class="form-group">
                <div class="label">
                    <label>内容关键字：</label>
                </div>
                <div class="field">
                    <input type="text" class="input" name="skey" value=""/>
                </div>
            </div>

            <div class="form-group">
                <div class="label">
                    <label>作者：</label>
                </div>
                <div class="field">
                    <input type="text" class="input w50" name="authour" value=""  />
                    <div class="tips"></div>
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
            <input type="hidden" name="user" value="<?php echo $_smarty_tpl->tpl_vars['user']->value;?>
">
            <input type="hidden" name="imgurl" id="imgurl" value="">
            <div class="form-group">
                <div class="label">
                    <label></label>
                </div>
                <div class="field">
                    <button class="button bg-main icon-check-square-o sub" type="submit"> 提交</button>
                </div>
            </div>
        </form>
    </div>
</div>

</body>
</html>

<?php echo '<script'; ?>
>
    $(function () {

        $(".sub").click(function (e) {
            e.preventDefault();
            if($(".lanmu").val()=="000"){
                alert("请选择栏目");
            }else{
                $(".form-x").get(0).submit();
            }
        });

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
                    }
                    $(".show_p").css("display","block");
                }
            };

        $(".btn").click(function(){
            if(files==""){
                alert("请选择文件")
                return;
            }
            var formdata =new FormData();
            formdata.append("file",files);
            var ajax=window.XMLHttpRequest?new XMLHttpRequest():new ActiveXObject("Microsoft.XMLHTTP");
            ajax.upload.onprogress=function (e) {
                var e = e||window.event;
                var itm=e.loaded/e.total*100+"%";
                $(".itm").css("height",itm);
            }
            ajax.onload=function (){
                $("#imgurl").attr("value",ajax.responseText);
                $(".itm").css("height",0);
                $(".btn").get(0).innerText="上传成功";
            }
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
