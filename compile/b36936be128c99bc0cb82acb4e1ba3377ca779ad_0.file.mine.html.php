<?php
/* Smarty version 3.1.30, created on 2017-08-29 17:59:06
  from "D:\wamp\www\php\mymvc\template\index\mine.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59a58f4acf0724_68522827',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b36936be128c99bc0cb82acb4e1ba3377ca779ad' => 
    array (
      0 => 'D:\\wamp\\www\\php\\mymvc\\template\\index\\mine.html',
      1 => 1502631164,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:index/header.html' => 1,
  ),
),false)) {
function content_59a58f4acf0724_68522827 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:index/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<link rel="stylesheet" href="<?php echo CSS_PATH;?>
index/mine.css" />
		<div class="minerow">
			<div class="rowmain">
				<div class="row_top">
					<a href="index.php?a=mineset"><img src="<?php echo $_smarty_tpl->tpl_vars['result']->value['imgurl'];?>
" alt="" /></a>
					<div class="mtitle">
						<a href=""><?php echo $_smarty_tpl->tpl_vars['result']->value['uname'];?>
</a>
						<div class="usign">个性签名：<span><?php echo $_smarty_tpl->tpl_vars['result']->value['usign'];?>
</span></div>
					</div>
					<div class="info">
						<ul>
							<li><a href="javascript:;">
								<p>0</p><span>关注></span>
							</a></li>
							<li><a href="javascript:;">
								<p>0</p><span>粉丝></span>
							</a></li>
							<li><a href="javascript:;">
								<p>0</p><span>文章></span>
							</a></li>
							<li><a href="javascript:;">
								<p>0</p><span>字数</span>
							</a></li>
							<li><a href="javascript:;">
								<p>0</p><span>收获喜欢</span>
							</a></li>
						</ul>
					</div>
					<div class="contenir">
						<ul class="tirgger active">
							<li class="active"><a href="javascript:;"><i class="icon icon5">&#xe619;</i>文章</a></li>
							<li><a href="javascript:;"><i class="icon icon2">&#xe626;</i>订阅</a></li>
							<li><a href="javascript:;"><i class="icon icon1">&#xe603;</i>收藏</a></li>
						</ul>
						<ul class="tirgger">
							<li class="active"><a href="javascript:;"><i class="icon icon2">&#xe705;</i>我关注的</a></li>
							<li><a href="javascript:;"><i class="icon icon1">&#xe62f;</i>我的粉丝</a></li>

						</ul>
					</div>
				</div>
				<div class="row_fot">
					<ul class="minecont">
						<li></li>
						<li></li>
						<li></li>
					</ul>
					<ul class="minecont">
						<li></li>
						<li></li>
					</ul>
				</div>
			</div>
		</div>
	</body>
</html>
<?php }
}
