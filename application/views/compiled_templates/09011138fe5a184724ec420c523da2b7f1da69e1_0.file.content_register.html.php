<?php
/* Smarty version 3.1.30, created on 2017-05-31 09:56:33
  from "C:\xampp\htdocs\web\application\views\templates\public\content_register.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_592e77314c56b5_19867466',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '09011138fe5a184724ec420c523da2b7f1da69e1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web\\application\\views\\templates\\public\\content_register.html',
      1 => 1495619397,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_592e77314c56b5_19867466 (Smarty_Internal_Template $_smarty_tpl) {
?>
	<div class="zui section space-50">
		<div class="inner">

			<form action="<?php echo base_url();?>
home/prosesdaftar" method="post" enctype="multipart/form-data">
				<div class="row">
					<div class="col-md-3"></div>	
					<div class="col-md-6">
						<div class="col-sm-12">
							<div class="zui form-label">Email</div>
							<input type="text" name="email" class="fullwidth">
						</div>

						<div class="col-sm-12">
							<div class="zui form-label">Password</div>
							<input type="password" name="password" class="fullwidth">
						</div>
						<div class="col-sm-12">
							<div class="zui form-label">Nama</div>
							<input type="text" name="nama" class="fullwidth">
						</div>
						<div class="col-sm-12">
							<div class="zui form-label">Tanggal lahir</div>
							<input type="text" name="dob" class="fullwidth">
						</div>

						<div class="col-sm-12">
							<div class="zui form-label">No Handphone</div>
							<input type="text" name="hp" class="fullwidth">
						</div>
						<div class="col-sm-12">
							<div class="zui form-label">Upload Foto</div>
							<input type="file" name="foto">
						</div>

						<div class="col-sm-12" style="margin-top:2%;">
							<input type="submit" class="fullwidth green" value="Register Sekarang">
						</div>
					</div>
				</div>

			</form>

		</div>
	</div><?php }
}
