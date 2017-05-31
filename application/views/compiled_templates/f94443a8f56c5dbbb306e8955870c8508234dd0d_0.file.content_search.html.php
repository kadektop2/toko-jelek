<?php
/* Smarty version 3.1.30, created on 2017-05-31 10:53:38
  from "C:\xampp\htdocs\web\application\views\templates\public\content_search.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_592e8492e5e245_34967330',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f94443a8f56c5dbbb306e8955870c8508234dd0d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web\\application\\views\\templates\\public\\content_search.html',
      1 => 1495437362,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_592e8492e5e245_34967330 (Smarty_Internal_Template $_smarty_tpl) {
?>
	<div class="zui section bg-light">
		<div class="inner">
			<form class="ads-general-filter">
				<div class="row">
					<div class="col-sm-12">
						<span class="ads-gf-sorting">
							<span class="ads-gf-label">Sort by:</span>
							<select name="sort">
								<option>Date</option>
								<option>Sales</option>
								<option>Rating</option>
								<option>Price</option>
							</select>
						</span>
						<span class="ads-gf-control separate"><i class="fa fa-sort-amount-asc"></i></span>
						<span class="ads-gf-control active"><i class="fa fa-th"></i></span>
						<span class="ads-gf-control"><i class="fa fa-th-list"></i></span>
					</div>
				</div>
				<div class="row">
						<div class="col-sm-5">
							<h3 class="widget-title"><b>Kamu mencari "<?php echo $_smarty_tpl->tpl_vars['keyword']->value;?>
"</b></h3>
						</div>
						<div class="col-sm-3"></div>
						<div class="col-sm-4" style="padding-left: 6.5%;">
							<span class="ads-gf-label">Ads per page:</span>
							<span class="ads-gf-control active">15</span>
							<span class="ads-gf-control">30</span>
							<span class="ads-gf-control">60</span>
							<span class="ads-gf-control">90</span>
						</div>
				</div>
			</form>
		</div>
	</div>

	<div class="zui section space-50">
		<div class="inner">
			<div class="content-with-sidebar">

				<div class="the-content">
					<?php if ($_smarty_tpl->tpl_vars['iklan']->value != null) {?>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['iklan']->value, 'ik');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ik']->value) {
?>
					<div class="ad-style-inline">
						<div class="row row-sm-middle">
							<div class="col-sm-3 col-md-2">
								<a href="#" class="photo">
									<img src="<?php echo assets_url();?>
/uploads/images/<?php echo $_smarty_tpl->tpl_vars['ik']->value->foto;?>
" data-src-large="<?php echo assets_url();?>
/uploads/images/<?php echo $_smarty_tpl->tpl_vars['ik']->value->foto;?>
" alt="" />
								</a>
							</div>
							<div class="col-sm-5 col-md-6">
								<div class="details">
									<h3 class="title"><a href="#"><?php echo $_smarty_tpl->tpl_vars['ik']->value->judul;?>
</a></h3>
									<div class="category subheading">from <a href="#"><?php echo $_smarty_tpl->tpl_vars['ik']->value->id_member->nama;?>
</a></div>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="meta">
									<div><span>Rp <?php echo $_smarty_tpl->tpl_vars['ik']->value->harga;?>
</span></div>
									<div><span class="date">07 June 2016, 20:08</span></div>
								</div>
							</div>
						</div>
					</div>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

					<?php } else { ?>
					<div class="col-sm-4">Data yang anda cari tidak ditemukan.</div>
					<?php }?>
				</div> <!-- .the-content -->

				<div class="the-sidebar">
					<div class="widget">
						<h3 class="widget-title">Category</h3>
						<div class="widget-content">
							<ul class="widget-category">
								<li><a href="#">Property Sales, Rentals<span class="zui text-gray"> (19503)</span></a></li>						
								<li><a href="#">Electronics<span class="zui text-gray"> (14900)</span></a></li>						
								<li><a href="#">Home, Office, Garden<span class="zui text-gray"> (1200)</span></a></li>						
								<li><a href="#">Services<span class="zui text-gray"> (800)</span></a></li>						
								<li><a href="#">Auto, Cars, Trucks<span class="zui text-gray"> (27684)</span></a></li>						
								<li><a href="#">For Sale<span class="zui text-gray"> (15000)</span></a></li>						
								<li><a href="#">Auto Parts, Accessories<span class="zui text-gray"> (5600)</span></a></li>						
								<li><a href="#">Jobs, Employment<span class="zui text-gray"> (2308)</span></a></li>						
							</ul>
						</div>
					</div>
					
					<div class="widget">
						<h3 class="widget-title">Filter</h3>
						<div class="widget-content">
							<form>
								<div class="row">
									<div class="col-xs-12">
										<div class="zui form-label">Keyword</div>
										<input type="text" class="fullwidth" />
									</div>
									<div class="col-xs-6">
										<div class="zui form-label">Min price</div>
										<input type="number" step="1000" class="fullwidth" placeholder="0" />
									</div>
									<div class="col-xs-6">
										<div class="zui form-label">Max price</div>
										<input type="number" step="1000" class="fullwidth" placeholder="900 000" />
									</div>
									<div class="col-xs-12">
										<div class="zui form-label">Country</div>
										<select class="fullwidth" name="country">
											<option>All Locations</option>
											<option>Albania</option>
											<option>Andorra</option>
											<option>Armenia</option>
											<option>Austria</option>
											<option>Azerbaijan</option>
											<option>Belarus</option>
											<option>Belgium</option>
											<option>Bosnia and Herzegovina</option>
											<option>Bulgaria</option>
											<option>Croatia</option>
											<option>Cyprus</option>
											<option>Czech Republic</option>
											<option>Denmark</option>
											<option>Estonia</option>
											<option>Finland</option>
											<option>France</option>
											<option>Georgia</option>
											<option>Germany</option>
											<option>Greece</option>
											<option>Hungary</option>
											<option>Iceland</option>
											<option>Ireland</option>
											<option>Italy</option>
											<option>Kazakhstan</option>
											<option>Kosovo</option>
											<option>Latvia</option>
											<option>Liechtenstein</option>
											<option>Lithuania</option>
											<option>Luxembourg</option>
											<option>Macedonia</option>
											<option>Malta</option>
											<option>Moldova</option>
											<option>Monaco</option>
											<option>Montenegro</option>
											<option>Netherlands</option>
											<option>Norway</option>
											<option>Poland</option>
											<option>Portugal</option>
											<option>Romania</option>
											<option>Russia</option>
											<option>San Marino</option>
											<option>Serbia</option>
											<option>Slovakia</option>
											<option>Slovenia</option>
											<option>Spain</option>
											<option>Sweden</option>
											<option>Switzerland</option>
											<option>Turkey</option>
											<option>Ukraine</option>
											<option>United Kingdom</option>
										</select>
									</div>
									<div class="col-xs-12">
										<button class="zui button right">Search</button>
									</div>
								</div>
							</form>
						</div>
					</div>

					<div class="widget">
						<h3 class="widget-title">Recently viewed</h3>
						<div class="widget-content">
							<div class="widget-ads-list">
								
								<div class="w-ad-item">
									<div class="row smallgutter row-sm-middle">
										<div class="col-xs-3">
											<a href="#"><img src="assets/ph/t17.jpg" alt="" /></a>
										</div>
										<div class="col-xs-9">
											<a href="#" class="title">BMW M3 Coupe LCI</a>
											<span class="zui mark red">$31,450</span>
											<span class="zui mark green">309 kW</span>
										</div>
									</div>
								</div>

								<div class="w-ad-item">
									<div class="row smallgutter row-sm-middle">
										<div class="col-xs-3">
											<a href="#"><img src="assets/ph/t14.jpg" alt="" /></a>
										</div>
										<div class="col-xs-9">
											<a href="#" class="title">Penthouse in Berlin</a>
											<span class="zui mark red">$2,000,000</span>
										</div>
									</div>
								</div>

								<div class="w-ad-item">
									<div class="row smallgutter row-sm-middle">
										<div class="col-xs-3">
											<a href="#"><img src="assets/ph/t23.jpg" alt="" /></a>
										</div>
										<div class="col-xs-9">
											<a href="#" class="title">Chevrolet Camaro ZL1</a>
											<span class="zui mark red">$98,200</span>
											<span class="zui mark green">477 kW</span>
										</div>
									</div>
								</div>

								<div class="w-ad-item">
									<div class="row smallgutter row-sm-middle">
										<div class="col-xs-3">
											<a href="#"><img src="assets/ph/t1.jpg" alt="" /></a>
										</div>
										<div class="col-xs-9">
											<a href="#" class="title">Professional php developer</a>
											<span class="zui mark red">$2000+</span>
										</div>
									</div>
								</div>

							</div>
						</div>
					</div>
					
					<div class="widget">
						<div class="wiget-subscribe">
							<h3>Subscribe to our newsletter</h3>
							<div class="subheading">Get news, offers and special deals.</div>
							<form>
								<input type="text" name="email" placeholder="Your email..." />
								<button class="zui button">Subscribe</button>
							</form>
						</div>
					</div>
				</div> <!-- .the-sidebar -->

			</div> <!-- .content-with-sidebar -->

		</div>
	</div><?php }
}
