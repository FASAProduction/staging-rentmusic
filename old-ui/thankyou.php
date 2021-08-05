<!DOCTYPE html>
<html lang="zxx">

<?php $this->load->view('menu/css_js'); ?>

<body>
	<!-- top-header -->
	<?php $this->load->view('menu/menu1'); ?>
	<!-- //navigation -->

	
	<!-- page -->
	<div class="services-breadcrumb">
		<div class="agile_inner_breadcrumb">
			<div class="container">
				<ul class="w3_short">
					<li>
						<a href="index.html">Home</a>
						<i>|</i>
					</li>
					<li>Thank You, <?php echo $this->session->userdata('ses_uname'); ?>!</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- //page -->

	<!-- privacy -->
	<div class="terms py-sm-5 py-4">
		<div class="container py-xl-4 py-lg-2">
			<!-- tittle heading -->
			<h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
				<span>T</span>erima
				<span>K</span>asih!</h3>
			<p class="font-weight-light pl-sm-4 mb-2">Pesanan Anda sedang di proses. Silahkan datang ke GM Musika Mini untuk mengambil barang dan lakukan pembayaran jika Anda memilih metode pembayaran COD.
			</p>
			<br/>
			<br/>
			<center><a href="<?php echo base_url('index.php/my'); ?>" class="buton button">Menuju Pesanan Saya</a></center>
		</div>
	</div>
	<!-- //privacy -->

	<?php $this->load->view('menu/footer'); ?>
	<!-- //copyright -->

	<?php $this->load->view('menu/js_bottom'); ?>

	<script>
		function detail(){
			var ar = document.getElementById("milih").value;

			if(ar==""){
				document.getElementById("this_acc").style.display = "none";
				document.getElementById("other_acc").style.display = "none";
			}else if(ar=="this"){
				document.getElementById("this_acc").style.display = "block";
				document.getElementById("other_acc").style.display = "none";
			}else if(ar=="other"){
				document.getElementById("this_acc").style.display = "none";
				document.getElementById("other_acc").style.display = "block";
			}
		}
	</script>

</body>

</html>