<?php
/* Smarty version 3.1.30, created on 2017-09-05 02:37:06
  from "D:\wamp\www\php\mymvc\template\admin\guanlicont.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59adf1b2c46fd2_70182014',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '03e559e04fe7b0027d6018308455a220f616d462' => 
    array (
      0 => 'D:\\wamp\\www\\php\\mymvc\\template\\admin\\guanlicont.html',
      1 => 1502327510,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59adf1b2c46fd2_70182014 (Smarty_Internal_Template $_smarty_tpl) {
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
</head>
<style>
    .please{
        font-size: 18px;
        color: #666666;
        line-height: 40px;
    }
</style>
<body>
<form method="post" action="" id="listform">
    <div class="panel admin-panel">
        <div class="panel-head"><strong class="icon-reorder"> 内容列表</strong> <a href="" style="float:right; display:none;">添加字段</a></div>
        <div class="padding border-bottom">
            <ul class="search" style="padding-left:10px;">
                <li> <a class="button border-main icon-plus-square-o" href="index.php?m=admin&f=show&a=addshow"> 添加内容</a> </li>
                <li><a href="#" class="please">请选择栏目:</a></li>
                <if condition="$iscid eq 1">
                    <li>
                        <select name="cid" class="input catid" style="width:200px; line-height:17px;" onchange="changesearch()">
                            <?php echo $_smarty_tpl->tpl_vars['str']->value;?>

                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result1']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['cat_id'];?>
" <?php if ($_smarty_tpl->tpl_vars['cid']->value == $_smarty_tpl->tpl_vars['v']->value['cat_id']) {?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value['cat_name'];?>
</option>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                        </select>
                    </li>
                </if>
            </ul>
        </div>
        <table class="table table-hover text-center">
            <tr id="trd">
                <th width="100" style="text-align:left; padding-left:20px;">SID</th>
                <th>图片</th>
                <th>标题</th>
                <th>推荐位</th>
                <th>作者</th>
                <th>栏目名称</th>
                <th width="10%">更新时间</th>
                <th width="220">操作</th>
            </tr>
            <volist name="list" id="vo">

                <tr>
                    <td style="text-align:left; padding:19px 0;padding-left:20px;"><input type="checkbox" id="checkall"/>
                        全选 </td>
                    <td colspan="7" style="text-align:left;padding-left:20px;">
                        <a href="javascript:;" class="button border-red icon-trash-o" style="padding:5px 15px;"  onclick=DelSelect()> 批量删除</a>
                    </td>
                </tr>
                <tr>
                    <td colspan="8">
                        <div class="pagelist">

                        </div>
                    </td>
                </tr>
        </table>
    </div>
</form>
<?php echo '<script'; ?>
 type="text/javascript">

    function GetQueryString(name)
    {
        var reg = new RegExp("(^|&)"+ name +"=([^&]*)(&|$)");
        var r = window.location.search.substr(1).match(reg);
        if(r!=null)return  unescape(r[2]); return null;
    }

    var page=GetQueryString("page");
    var cid=$(".catid").val();

    if(GetQueryString("cid")){
        cid=GetQueryString("cid");
    }

    $(".delete").remove();

    $.ajax({
        url:'index.php?m=admin&f=show&a=getlist&cid='+cid+"&page="+page,
        dataType:"json",
        success:function (e) {
            $("#trd").after(e.text);
            $(".pagelist").html("").append(e.str);
        }
    });
    function changesearch(){
        $(".delete").remove();
        var aid=$(".catid").val();

        $.ajax({
            url:'index.php?m=admin&f=show&a=getlist&cid='+aid+"&page="+page,
            dataType:"json",
            success:function (e) {
                $("#trd").after(e.text);
                $(".pagelist").html("").append(e.str);
            }
        })
    }

    //全选
    $("#checkall").click(function(){
        $("input[name='id[]']").each(function(){
            if (this.checked) {
                this.checked = false;
            }
            else {
                this.checked = true;
            }
        });
    })

    //批量删除
    function DelSelect(){
        var Checkbox=false;
        $("input[name='id[]']").each(function(){
            if (this.checked==true) {
                Checkbox=true;
            }
        });
        if (Checkbox){
            var t=confirm("您确认要删除选中的内容吗？");
            if (t==false){ return false; }else{
                var data='';
                var n=0;
                $.each($(".checkid:checked"),function (index,value) {
                    n++;
                    data+="sid"+n+"="+value.value+"&";
                })
                data=data.substr(0,data.length-1);
                console.log(data)
                $.ajax({
                    url:"index.php?m=admin&f=show&a=delselect",
                    type:"post",
                    data:data,
                    success:function(e){
                        if(e=="true"){
                            alert("删除成功");
                            location.reload();
                        }else{
                            alert("删除失败");
                        }

                    }
                })
            }
        }
        else{
            alert("请选择您要删除的内容!");
            return false;
        }
    }

<?php echo '</script'; ?>
>

</body>
</html>
<?php }
}
