<?php
foreach ($deta as $dd):
?>
<!DOCTYPE html>
<html lang="id">

<head>
	<title><?php echo $dd->nama_alat_musik; ?> - Detail</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content="Electro Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design"
	/>
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //Meta tag Keywords -->

	<!-- Custom-Files -->
	<link href="<?php echo base_url(); ?>komponen/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<!-- Bootstrap css -->
	<link href="<?php echo base_url(); ?>komponen/css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!-- Main css -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>komponen/css/fontawesome-all.css">
	<!-- Font-Awesome-Icons-CSS -->
	<link href="<?php echo base_url(); ?>komponen/css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
	<!-- pop-up-box -->
	<link href="<?php echo base_url(); ?>komponen/css/menu.css" rel="stylesheet" type="text/css" media="all" />
	<!-- menu style -->
	<!-- //Custom-Files -->

	<!-- web fonts -->
	<link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&amp;subset=latin-ext" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
	    rel="stylesheet">
	<!-- //web fonts -->

	<style>
		.buton{
    cursor: pointer;
    letter-spacing: 1px;
    padding: 12px 30px;
    background: #0879c9;
    color: #fff;
	box-shadow: 2px 2px 2px #000;
    margin: 2vw 0 1.5vw;
    -webkit-transition: 0.5s all;
    -o-transition: 0.5s all;
    -moz-transition: 0.5s all;
    -ms-transition: 0.5s all;
    transition: 0.5s all;
}

.logo{
            margin-left: -124px;
        }
	</style>

</head>

<body>
	<!-- top-header -->
	<?php $this->load->view('menu/menu1'); ?>
	<!-- //navigation -->

	<!-- banner-2 -->
	

	</div>
	<!-- //banner-2 -->
	<!-- page -->
	<div class="services-breadcrumb">
		<div class="agile_inner_breadcrumb">
			<div class="container">
				<ul class="w3_short">
					<li>
						<a href="<?php echo base_url(); ?>">Home</a>
						<i>|</i>
					</li>
					<li><?php echo $dd->nama_alat_musik; ?></li>
				</ul>
			</div>
		</div>
	</div>
	<!-- //page -->

	<!-- Single Page -->
	<div class="banner-bootom-w3-agileits py-5">
		<div class="container py-xl-4 py-lg-2">
			<!-- tittle heading -->
			<h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
			<img src="<?php echo base_url(); ?>komponen/img/details.png" width="210" height="50"  />
			</h3>
			<!-- //tittle heading -->
			<div class="row">
				<div class="col-lg-5 col-md-8 single-right-left ">
					<div class="grid images_3_of_2">
						<div class="flexslider">
							<ul class="slides">
								<?php
								if($dd->pic==null){
								?>
								<li data-thumb="<?php echo base_url(); ?>komponen/images/nophoto.png">
									<div class="thumb-image">
										<img src="<?php echo base_url(); ?>komponen/images/nophoto.png" data-imagezoom="true" class="img-fluid" alt=""> </div>
								</li>
								<?php }else{ ?>
									<li data-thumb="<?php echo base_url(); ?>komponen/images/product/<?php echo $dd->pic; ?>">
									<div class="thumb-image">
										<img src="<?php echo base_url(); ?>komponen/images/product/<?php echo $dd->pic; ?>" data-imagezoom="true" class="img-fluid" alt=""> </div>
								</li>
								<?php } ?>
							</ul>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>

				<div class="col-lg-7 single-right-left simpleCart_shelfItem">
					<h3 class="mb-3"><?php echo $dd->nama_alat_musik; ?></h3>
					<p class="mb-3">
					<span class="item_price"><?php echo rupiah($dd->harga); ?></span>
					</p>
					<div class="single-infoagile">
						<ul>
							<li class="mb-3">
								No Description.
							</li>
						</ul>
					</div>
					<div class="product-single-w3l">
						<p class="my-sm-4 my-3">
							No Description.
						</p>
					</div>
					<div class="occasion-cart">
						<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
						<?php
                                                if($this->session->userdata('masuk')!=TRUE){
                                                ?>
                                                <a href="<?php echo base_url('index.php/login'); ?>" class="button buton">Sewa</a>
                                                <?php }else{ ?>
												<form action="#" method="post">
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
		</div>
	</div>
	<!-- //Single Page -->

	

	<?php $this->load->view('menu/footer'); ?>

	<?php $this->load->view('menu/js_bottom'); ?>
</body>

</html>
<?php endforeach; ?>