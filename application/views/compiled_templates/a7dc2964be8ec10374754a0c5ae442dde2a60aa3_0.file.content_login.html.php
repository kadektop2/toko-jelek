<?php
/* Smarty version 3.1.30, created on 2017-05-31 09:56:31
  from "C:\xampp\htdocs\web\application\views\templates\public\content_login.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_592e772f42f957_52166302',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a7dc2964be8ec10374754a0c5ae442dde2a60aa3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web\\application\\views\\templates\\public\\content_login.html',
      1 => 1495437362,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_592e772f42f957_52166302 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="zui section space-50">
		<div class="inner">

			<form action="<?php echo base_url();?>
home/ceklogin" method="post">
				<div class="row">
				<div class="col-md-3"></div>
				<div class="col-md-6">
					<div class="col-sm-12 col-sm-offset-2">
						<div class="zui form-label">Email</div>
						<input type="text" class="fullwidth" name="email">
					</div>

					<div class="col-sm-12">
						<div class="zui form-label">Password</div>
						<input type="password" class="fullwidth" name="password">
					</div>

					<div class="col-sm-12" style="margin-top:5%;">
						<input type="submit" class="fullwidth blue" value="Login Sekarang" name="login">
					</div>
					</div>
				</div>

			</form>

		</div>
	</div><?php }
}
