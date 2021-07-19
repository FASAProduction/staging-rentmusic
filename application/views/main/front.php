<!DOCTYPE html>
<html lang="id">

<?php $this->load->view('menu/css_js'); ?>

<body>
	<!-- top-header -->
	<?php $this->load->view('menu/menu1'); ?>
	<!-- //navigation -->

	<!-- banner -->
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		<!-- Indicators-->
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
		</ol>
		<div class="carousel-inner">
			<div class="carousel-item item1 active">
				<div class="container">
					<div class="w3l-space-banner">
						<div class="carousel-caption p-lg-5 p-sm-4 p-3">
							<p>Get flat
								<span>10%</span> Cashback</p>
							<h3 class="font-weight-bold pt-2 pb-lg-5 pb-4">The
								<span>Big</span>
								Sale
							</h3>
							<a class="button2" href="product.html">Shop Now </a>
						</div>
					</div>
				</div>
			</div>
			<div class="carousel-item item2">
				<div class="container">
					<div class="w3l-space-banner">
						<div class="carousel-caption p-lg-5 p-sm-4 p-3">
							<p>advanced
								<span>Wireless</span> earbuds</p>
							<h3 class="font-weight-bold pt-2 pb-lg-5 pb-4">Best
								<span>Headphone</span>
							</h3>
							<a class="button2" href="product.html">Shop Now </a>
						</div>
					</div>
				</div>
			</div>
			<div class="carousel-item item3">
				<div class="container">
					<div class="w3l-space-banner">
						<div class="carousel-caption p-lg-5 p-sm-4 p-3">
							<p>Get flat
								<span>10%</span> Cashback</p>
							<h3 class="font-weight-bold pt-2 pb-lg-5 pb-4">New
								<span>Standard</span>
							</h3>
							<a class="button2" href="product.html">Shop Now </a>
						</div>
					</div>
				</div>
			</div>
			<div class="carousel-item item4">
				<div class="container">
					<div class="w3l-space-banner">
						<div class="carousel-caption p-lg-5 p-sm-4 p-3">
							<p>Get Now
								<span>40%</span> Discount</p>
							<h3 class="font-weight-bold pt-2 pb-lg-5 pb-4">Today
								<span>Discount</span>
							</h3>
							<a class="button2" href="product.html">Shop Now </a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
	<!-- //banner -->

	<!-- top Products -->
	<div class="ads-grid py-sm-5 py-4">
		<div class="container py-xl-4 py-lg-2">
			<!-- tittle heading -->
			<h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
				<span>O</span>ur
				<span>N</span>ew
				<span>P</span>roducts</h3>
			<!-- //tittle heading -->
			<div class="row">
				<!-- product left -->
				<div class="agileinfo-ads-display col-lg-9">
					<div class="wrapper">
						<!-- first section -->
						<div class="product-sec1 px-sm-4 px-3 py-sm-5  py-3 mb-4">
							<h3 class="heading-tittle text-center font-italic">Alat Musik Satuan</h3>
							<div class="row">
                                <?php
                                foreach ($alatlimited as $almus):
                                ?>
								<div class="col-md-4 product-men mt-5">
									<div class="men-pro-item simpleCart_shelfItem">
										<div class="men-thumb-item text-center">
                                            <?php
                                            if($almus->pic==null){
                                            ?>
											<img src="<?php echo base_url(); ?>komponen/images/nophoto.png" alt="" width="240px" height="240px">
                                            <?php } else { ?>
                                                <img src="<?php echo base_url(); ?>komponen/adm/komponen/images/products/<?php echo $almus->pic; ?>" alt="">
                                            <?php } ?>
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="<?php echo base_url(); ?>index.php/detail/dapat/<?php echo $almus->id_alat_musik; ?>"  class="link-product-add-cart">Quick View</a>
												</div>
											</div>
										</div>
										<div class="item-info-product text-center border-top mt-4">
											<h4 class="pt-1">
												<a href="<?php echo base_url(); ?>index.php/detail/dapat/<?php echo $almus->id_alat_musik; ?>"><?php echo $almus->nama_alat_musik; ?></a>
											</h4>
											<div class="info-product-price my-2">
												<span class="item_price"><?php echo rupiah($almus->harga); ?></span>
											</div>
											<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                                <?php
                                                if($this->session->userdata('masuk')!=TRUE){
                                                ?>
												<br/>
                                                <a href="<?php echo base_url('index.php/login'); ?>" class="button buton">Sewa</a>
                                                <?php }else{ 
												foreach($pega as $peg):	
												?>
												<form action="<?php echo base_url('index.php/front/checkout'); ?>" method="post">
													<fieldset>
														<input type="hidden" name="kode_penyewaan" value="GM<?php echo random_string('numeric',3); ?>" />
														<input type="hidden" name="id_alat_musik" value="<?php echo $almus->id_alat_musik; ?>" />
														<input type="hidden" name="tgl_pemesanan" value="<?php echo date('Y-m-d'); ?>" />
														<input type="hidden" name="tgl_jatuh_tempo" value="0000-00-00" />
														<input type="hidden" name="id_pelanggan" value="<?php echo $this->session->userdata('ses_id'); ?>" />
														<input type="hidden" name="id_paket" value="0" />
														<input type="hidden" name="id_pegawai" value="<?php echo $peg->id_pegawai; ?>" />
														<input type="hidden" name="jumlah" value="1" />
														<input type="hidden" name="jumlah_hari" value="1" />
														<input type="hidden" name="jumlah_hari_telat" value="0" />
														<input type="hidden" name="denda" value="0" />
														<input type="hidden" name="total_bayar" value="<?php echo $almus->harga; ?>" />
														<input type="hidden" name="status_bayar" value="Belum Bayar" />
														<input type="hidden" name="status_sewa" value="Akan Sewa" />
														<input type="submit" name="submit" value="Sewa" class="button btn" />
													</fieldset>
												</form>
                                                <?php 
												endforeach;
												} ?>
											</div>
										</div>
									</div>
								</div>
								<?php endforeach; ?>
							</div>
						</div>
						<!-- //first section -->
						<!-- second section -->
						<div class="product-sec1 px-sm-4 px-3 py-sm-5  py-3 mb-4">
							<h3 class="heading-tittle text-center font-italic">Alat Musik Paket</h3>
							<div class="row">
							<?php
							foreach($pak as $paket):
							?>
								<div class="col-md-4 product-men mt-5">
									<div class="men-pro-item simpleCart_shelfItem">
										<div class="men-thumb-item text-center">
										<?php
                                            if($paket->pict==null){
                                            ?>
											<img src="<?php echo base_url(); ?>komponen/images/nophoto.png" alt="" width="240px" height="240px">
                                            <?php } else { ?>
                                                <img src="<?php echo base_url(); ?>komponen/adm/komponen/images/products/<?php echo $paket->pict; ?>" alt="">
                                            <?php } ?>
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="single.html" class="link-product-add-cart">Quick View</a>
												</div>
											</div>
										</div>
										<div class="item-info-product text-center border-top mt-4">
											<h4 class="pt-1">
												<a href="single.html"><?php echo $paket->nama_paket; ?></a>
											</h4>
											<div class="info-product-price my-2">
												<span class="item_price"><?php echo rupiah($paket->harga); ?></span>
											</div>
											<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
											<?php
                                                if($this->session->userdata('masuk')!=TRUE){
                                                ?>
												<br/>
                                                <a href="<?php echo base_url('index.php/login'); ?>" class="button buton">Sewa</a>
                                                <?php }else{ ?>
												<form action="<?php echo base_url('index.php/front/checkout'); ?>" method="post">
													<fieldset>
														<input type="hidden" name="cmd" value="_cart" />
														<input type="hidden" name="add" value="1" />
														<input type="hidden" name="business" value=" " />
														<input type="hidden" name="item_name" value="Samsung Galaxy J7" />
														<input type="hidden" name="amount" value="200.00" />
														<input type="hidden" name="discount_amount" value="1.00" />
														<input type="hidden" name="currency_code" value="USD" />
														<input type="hidden" name="return" value=" " />
														<input type="hidden" name="cancel_return" value=" " />
														<input type="submit" name="submit" value="Sewa" class="button btn" />
													</fieldset>
												</form>
                                                <?php } ?>
											</div>
										</div>
									</div>
								</div>
								<?php endforeach; ?>
							</div>
						</div>
						<!-- //second section -->
						<!-- //fourth section -->
					</div>
				</div>
				<!-- //product left -->

				<!-- product right -->
				<div class="col-lg-3 mt-lg-0 mt-4 p-lg-0">
					<div class="side-bar p-sm-4 p-3">
						<div class="search-hotel border-bottom py-2">
							<h3 class="agileits-sear-head mb-3">Cari Disini</h3>
							<form action="#" method="post">
								<input type="search" placeholder="Nama Produk..." name="search" required="">
								<input type="submit" value=" ">
							</form>
						</div>
						<!-- price -->
						
						<!-- //best seller -->
					</div>
					<!-- //product right -->
				</div>
			</div>
		</div>
	</div>
	<!-- //top products -->

	<!-- middle section -->
	
	<!-- middle section -->

	<?php $this->load->view('menu/footer'); ?>

	<?php $this->load->view('menu/js_bottom'); ?>
</body>

</html>