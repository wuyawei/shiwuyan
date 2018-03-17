<?php
/* Smarty version 3.1.30, created on 2017-08-30 15:26:50
  from "D:\wamp\www\php\mymvc\template\index\show.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59a6bd1aa1e487_65641456',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e7b8f9ffec20f860cb5b127e8ff5988c10f12877' => 
    array (
      0 => 'D:\\wamp\\www\\php\\mymvc\\template\\index\\show.html',
      1 => 1504099609,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:index/header.html' => 1,
    'file:index/modal.html' => 1,
  ),
),false)) {
function content_59a6bd1aa1e487_65641456 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:index/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:index/modal.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<link rel="stylesheet" href="<?php echo CSS_PATH;?>
index/show.css" />
<link rel="stylesheet" href="<?php echo CSS_PATH;?>
index/modal.css" />
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
index/moment.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
index/show.js"><?php echo '</script'; ?>
>
<div id="keep">内容不能为空</div>
		<div class="note">
			<div class="post">
				<div class="artice" sid="<?php echo $_smarty_tpl->tpl_vars['res']->value['sid'];?>
">
					<h1 class="stitle"><?php echo $_smarty_tpl->tpl_vars['res']->value['stitle'];?>
</h1>
					<div class="author">
						<a href=""><img src="<?php echo $_smarty_tpl->tpl_vars['res']->value['uimgurl'];?>
" alt="" /></a>
						<div class="sinfo">
							<span class="sauth">作者</span>
							<span class="name"><?php echo $_smarty_tpl->tpl_vars['res']->value['uname'];?>
</span>
							<?php if ($_smarty_tpl->tpl_vars['result']->value['id'] != $_smarty_tpl->tpl_vars['res']->value['uid']) {?><a href="javascript:;" flag="<?php echo $_smarty_tpl->tpl_vars['flag']->value;?>
" uid1="<?php echo $_smarty_tpl->tpl_vars['res']->value['uid'];?>
" <?php if ($_smarty_tpl->tpl_vars['flag']->value) {?> guan=<?php echo $_smarty_tpl->tpl_vars['guan']->value;?>
 <?php }?>><?php if ($_smarty_tpl->tpl_vars['flag']->value) {?> <?php if ($_smarty_tpl->tpl_vars['guan']->value == 'true') {?>已关注<?php } else { ?>+关注<?php }
} else { ?>+关注<?php }?></a><?php }?>
							<div class="meta">
                				<span class="publish-time"><?php echo $_smarty_tpl->tpl_vars['res']->value['stime'];?>
</span>
            					<span class="views-count">阅读 4017</span>
            					<span class="comments-count">评论 97</span>
            					<span class="likes-count">喜欢 181</span>
							</div>
						</div>
					</div>
					<div class="scont">
						<?php echo $_smarty_tpl->tpl_vars['res']->value['scont'];?>

					</div>
				</div>
				<div class="floau">
					<div class="author">
						<div class="s_info">
							<a href="" class="auimg"><img src="<?php echo $_smarty_tpl->tpl_vars['res']->value['uimgurl'];?>
" alt="" /></a>
							<span class="name"><?php echo $_smarty_tpl->tpl_vars['res']->value['uname'];?>
</span>
							<?php if ($_smarty_tpl->tpl_vars['result']->value['id'] != $_smarty_tpl->tpl_vars['res']->value['uid']) {?><a href="javascript:;" class="guan" flag="<?php echo $_smarty_tpl->tpl_vars['flag']->value;?>
"  <?php if ($_smarty_tpl->tpl_vars['flag']->value) {?> guan=<?php echo $_smarty_tpl->tpl_vars['guan']->value;?>
 <?php }?> uid1="<?php echo $_smarty_tpl->tpl_vars['res']->value['uid'];?>
"><?php if ($_smarty_tpl->tpl_vars['flag']->value) {?> <?php if ($_smarty_tpl->tpl_vars['guan']->value == 'true') {?>已关注<?php } else { ?>+关注<?php }
} else { ?>+关注<?php }?></a><?php }?>
							<p class="meta">
                				被 <i><?php echo $_smarty_tpl->tpl_vars['count']->value['num'];?>
</i>人关注，获得了 <em><?php echo $_smarty_tpl->tpl_vars['lovenum']->value;?>
</em>个收藏
							</p>
						</div>
					</div>
					<p class="aresume"><?php echo $_smarty_tpl->tpl_vars['res']->value['resume'];?>
</p>
				</div>
                <?php if ($_smarty_tpl->tpl_vars['result']->value['id'] != $_smarty_tpl->tpl_vars['res']->value['uid']) {?>
				<div class="meta_bottom">
					<div class="like">
						<div class="like-group <?php if ($_smarty_tpl->tpl_vars['flag']->value) {?> <?php if ($_smarty_tpl->tpl_vars['love']->value == 'true') {?>active<?php }?> <?php }?>" flag="<?php echo $_smarty_tpl->tpl_vars['flag']->value;?>
">
							<div class="btn-like">
								<span>
									<i class="icon icon8">&#xe8cf;</i>
									收藏
								</span>
							</div>
							<div class="modal-wrap">
								<span><?php echo $_smarty_tpl->tpl_vars['lovenum']->value;?>
</span>
							</div>
						</div>
					</div>
				</div>
                <?php }?>
				<?php if (!$_smarty_tpl->tpl_vars['flag']->value) {?>
				<div class="subcom">
					<a href=""><img src="<?php echo IMG_PATH;?>
index/per.png" alt=""></a>
					<div class="sign-container">
						<a href="index.php?a=login" class="btn-sign">登录</a>
						<span>后发表评论</span>
					</div>
				</div>
				<?php } else { ?>
				<div class="subcom" id="rate">
					<a href=""><img src="<?php echo $_smarty_tpl->tpl_vars['result']->value['imgurl'];?>
" alt=""></a>
					<textarea placeholder="写下你的评论..."></textarea>
					<div class="write">
						<span class="send">发送</span>
						<span class="cacel">取消</span>
					</div>
				</div>
				<?php }?>
				<div class="ping">
					<div class="ptop">
						<span><?php if ($_smarty_tpl->tpl_vars['ratenum']->value != '0') {?><i><?php echo $_smarty_tpl->tpl_vars['ratenum']->value;?>
</i>条<?php }?>评论</span>
					</div>
                    <div class="commentbox">
						<?php if (!$_smarty_tpl->tpl_vars['rate']->value) {?>
                        <div class="norate">
							<img src="<?php echo IMG_PATH;?>
index/p.png" alt="">
							<p>智慧如你，不想<a>发表一点想法</a>咩~</p>
						</div>
						<?php } else { ?>
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rate']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
						<div class="comment">
							<div class="mauth">
								<a href="" >
									<img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['imgurl'];?>
" alt="" />
								</a>
								<div class="minfo">
									<a href=""><?php echo $_smarty_tpl->tpl_vars['v']->value['uname'];?>
</a>
									<p >
										<span>13楼 ·<?php echo $_smarty_tpl->tpl_vars['v']->value['rtime'];?>
</span>
									</p>
								</div>
							</div>
							<div class="comment_wrap">
								<p><?php echo $_smarty_tpl->tpl_vars['v']->value['rtext'];?>
</p>
								<div class="groop" rid="<?php echo $_smarty_tpl->tpl_vars['v']->value['rid'];?>
" uid="<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
">
									<a href="javascript:;">
										<i class="icon icon6">&#xe6cd;</i>
										<span>点赞</span>
									</a>
									<a href="javascript:;" class="reply" flag="<?php echo $_smarty_tpl->tpl_vars['flag']->value;?>
">
										<i class="icon icon6">&#xe6a3;</i>
										<span>回复</span>
									</a>
									<?php if ($_smarty_tpl->tpl_vars['v']->value['uid'] == $_smarty_tpl->tpl_vars['result']->value['id']) {?>
									<a href="javascript:;" class="delrate">
										<span>删除</span>
									</a>
									<?php }?>
								</div>
							</div>
							<div class="sub_comment">
								<div class="comment_rebox">
							<?php if ($_smarty_tpl->tpl_vars['reply']->value) {?>
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['reply']->value, 'r');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
?>
									<?php if ($_smarty_tpl->tpl_vars['r']->value['rid'] == $_smarty_tpl->tpl_vars['v']->value['rid']) {?>
									<div class="comment_re">
										<p>
											<a href=""><?php echo $_smarty_tpl->tpl_vars['r']->value['uname2'];?>
</a>：
											<span>
										<?php echo $_smarty_tpl->tpl_vars['r']->value['mtext'];?>


											</span>
										</p>
										<div class="sub_group" mid="<?php echo $_smarty_tpl->tpl_vars['r']->value['mid'];?>
" uid="<?php echo $_smarty_tpl->tpl_vars['r']->value['uid2'];?>
">
											<span><?php echo $_smarty_tpl->tpl_vars['r']->value['mtime'];?>
</span>
											<a class="answer" flag="<?php echo $_smarty_tpl->tpl_vars['flag']->value;?>
">
												<i class="icon icon7">&#xe6a3;</i>
												<span>回复</span>
											</a>
											<?php if ($_smarty_tpl->tpl_vars['r']->value['uid2'] == $_smarty_tpl->tpl_vars['result']->value['id']) {?>
											<a href="javascript:;" class="delmess">
												<span>删除</span>
											</a>
											<?php }?>
										</div>
									</div>
								<?php if ($_smarty_tpl->tpl_vars['replymess']->value) {?>
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['replymess']->value, 'm');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['m']->value) {
?>
										<?php if ($_smarty_tpl->tpl_vars['m']->value['pid'] == $_smarty_tpl->tpl_vars['r']->value['mid']) {?>
									<div class="comment_re">
										<p>
											<a href=""><?php echo $_smarty_tpl->tpl_vars['m']->value['uname2'];?>
</a>：
											<span>
										<a href=""  >@<?php echo $_smarty_tpl->tpl_vars['m']->value['uname1'];?>
</a>
										<?php echo $_smarty_tpl->tpl_vars['m']->value['mtext'];?>


											</span>
										</p>
										<div class="sub_group" mid="<?php echo $_smarty_tpl->tpl_vars['m']->value['mid'];?>
" uid="<?php echo $_smarty_tpl->tpl_vars['m']->value['uid2'];?>
">
											<span><?php echo $_smarty_tpl->tpl_vars['m']->value['mtime'];?>
</span>
											<a class="answer" flag="<?php echo $_smarty_tpl->tpl_vars['flag']->value;?>
">
												<i class="icon icon7">&#xe6a3;</i>
												<span>回复</span>
											</a>
											<?php if ($_smarty_tpl->tpl_vars['m']->value['uid2'] == $_smarty_tpl->tpl_vars['result']->value['id']) {?>
											<a href="javascript:;" class="delmess">
												<span>删除</span>
											</a>
											<?php }?>
										</div>
									</div>
												<?php }?>
											<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

										<?php }?>
									<?php }?>
									<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

								<?php }?>

								</div>

								<div class="subcom">
									<textarea placeholder="写下你的评论..."></textarea>
									<div class="write" >
										<span class="send"  rid="<?php echo $_smarty_tpl->tpl_vars['v']->value['rid'];?>
" uid="<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
">发送</span>
										<span class="cacel">取消</span>
									</div>
								</div>
							</div>
						</div>
							<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

						<?php }?>





                    </div>




				</div>
			</div>
		</div>
	</body>
</html>
<?php }
}
