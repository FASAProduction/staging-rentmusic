<!DOCTYPE html>
<html lang="zxx">

<?php $this->load->view('menu/css_js'); ?>

<body>
	<!-- top-header -->
	<?php $this->load->view('menu/menu1'); ?>
	<!-- //navigation -->

	<!-- banner-2 -->
	<!-- //banner-2 -->
	<!-- page -->
	<div class="services-breadcrumb">
		<div class="agile_inner_breadcrumb">
			<div class="container">
				<ul class="w3_short">
					<li>
						<a href="index.html">Home</a>
						<i>|</i>
					</li>
					<li>Checkout</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- //page -->
	<!-- checkout page -->
	<div class="privacy py-sm-5 py-4">
		<div class="container py-xl-4 py-lg-2">
			<!-- tittle heading -->
			<h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
				<span>C</span>heckout
			</h3>
			<!-- //tittle heading -->
			<?php if($this->session->userdata('masuk') == TRUE){ ?>
			<div class="checkout-right">
				<h4 class="mb-sm-4 mb-3">Barang yang akan di sewa:
					<span><?php echo $hachecke; ?> Produk</span>
				</h4>
				<div class="table-responsive">
					<table class="timetable_sub">
						<thead>
							<tr>
								<th>No.</th>
								<th>Nama Produk</th>
								<th>Jumlah Hari</th>
								<th>Jumlah Produk</th>
								<th>Subtotal</th>
							</tr>
						</thead>
						<tbody>
							<?php
							if($hachecke > 0){
							$no = 1; 
							foreach($hacheck as $hc): ?>
							<tr class="rem1">
								<td class="invert"><?php echo $no++; ?></td>
								<td class="invert"><?php echo $hc->nama_alat_musik; ?></td>
								<td class="invert"><?php echo $hc->jumlah_hari; ?> Hari</td>
								<td class="invert"><?php echo $hc->jumlah; ?> Buah</td>
								<td class="invert"><?php echo rupiah($hc->total_bayar); ?></td>
							</tr>
							<?php endforeach; 
							}else{
							?>
							<tr class="rem1">
							<td class="invert" colspan="5"><center>Tidak ada barang. Sewa sekarang!</center></td>
							</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
			</div>
			<div class="checkout-left">
				<div class="address_form_agile mt-sm-5 mt-4">
					<h4 class="mb-sm-4 mb-3">Detail Penyewa</h4>
					<form action="payment.html" method="post" class="creditly-card-form agileinfo_form">
						<div class="creditly-wrapper wthree, w3_agileits_wrapper">
							<div class="information-wrapper">
								<div class="first-row">
									<div class="controls form-group">
										<select class="option-w3ls" id="milih" onChange="detail()">
											<option value="">== Pilih Salah Satu ==</option>
											<option value="this">Gunakan Akun ini</option>
											<option value="other">Alamat dan Penyewa lainnya</option>
										</select>
									</div>
								</div>
							</div>
						</div>
					</form>
					<form action="<?php echo base_url('index.php/checkout/selesai'); ?>" method="post" class="creditly-card-form agileinfo_form" id="this_acc" style="display:none;">
						<div class="creditly-wrapper wthree, w3_agileits_wrapper">
							<div class="information-wrapper">
								<div class="first-row">
									<div class="controls form-group">
										<input class="billing-address-name form-control" type="text" name="" value="<?php echo $this->session->userdata('ses_nama'); ?>" required="" readonly >
									</div>
									<div class="w3_agileits_card_number_grids">
										<div class="w3_agileits_card_number_grid_left form-group">
											<div class="controls">
												<input type="text" class="form-control" name="" value="<?php echo $this->session->userdata('ses_hp'); ?>" required="" readonly>
											</div>
										</div>
										<div class="w3_agileits_card_number_grid_right form-group">
											<div class="controls">
												<textarea class="form-control" name="" required="" readonly ><?php echo $this->session->userdata('ses_alamat'); ?></textarea>
											</div>
										</div>
									</div>
									<?php
									foreach($hacheck as $hca):
									?>
									<input type="hidden" name="id_pemesanan" value="<?php echo $hca->id_pemesanan; ?>" />
                                    <input type="hidden" name="kode_penyewaan" value="<?php echo $hca->kode_penyewaan; ?>" />
                                    <input type="hidden" name="id_alat_musik" value="<?php echo $hca->id_alat_musik;  ?>" />
                                    <input type="hidden" name="tgl_pemesanan" value="<?php echo $hca->tgl_pemesanan;  ?>" />
                                    <input type="hidden" name="id_pelanggan" value="<?php echo $hca->id_pelanggan;  ?>" />
                                    <input type="hidden" name="id_paket" value="<?php echo $hca->id_paket; ?>" />
                                    <input type="hidden" name="id_pegawai" value="<?php echo $hca->id_pegawai; ?>" />
                                    <input type="hidden" name="jumlah" value="<?php echo $hca->jumlah; ?>" />
                                    <input type="hidden" name="jumlah_hari" value="<?php echo $hca->jumlah_hari; ?>" />
                                    <input type="hidden" name="jumlah_hari_telat" value="<?php echo $hca->jumlah_hari_telat; ?>" />
                                    <input type="hidden" name="denda" value="<?php echo $hca->denda; ?>" />
                                    <input type="hidden" name="total_bayar" value="<?php echo $hca->total_bayar; ?>" />
                                    <input type="hidden" name="status_bayar" value="<?php echo $hca->status_bayar; ?>" />
                                    <input type="hidden" name="status_sewa" value="Akan Sewa" />
									<?php endforeach; ?>
								</div>
								<button class="submit check_out btn">Sewa Sekarang</button>
							</div>
						</div>
					</form>
					<form action="#" method="post" class="creditly-card-form agileinfo_form" id="other_acc" style="display:none;">
						<div class="creditly-wrapper wthree, w3_agileits_wrapper">
							<div class="information-wrapper">
								<div class="first-row">
								<div class="controls form-group">
										<input class="billing-address-name form-control" type="text" name="name" placeholder="Masukkan Nama Anda" required="">
									</div>
									<div class="w3_agileits_card_number_grids">
										<div class="w3_agileits_card_number_grid_left form-group">
											<div class="controls">
												<input type="text" class="form-control" name="number" placeholder="Masukkan Nomor HP Anda" required="">
											</div>
										</div>
										<div class="w3_agileits_card_number_grid_right form-group">
											<div class="controls">
												<textarea class="form-control" name="" required="" placeholder="Masukkan Alamat Anda" ></textarea>
											</div>
										</div>
									</div>
								</div>
								<button class="submit check_out btn">Sewa Sekarang</button>
							</div>
						</div>
					</form>
				</div>
			</div>
			<?php }else{ ?>
				<div class="checkout-right">
				<h4 class="mb-sm-4 mb-3">Barang yang akan di sewa:
					<span><?php echo $hachecke; ?> Produk</span>
				</h4>
				<div class="table-responsive">
					<table class="timetable_sub">
						<thead>
							<tr>
								<th>No.</th>
								<th>Nama Produk</th>
								<th>Jumlah Hari</th>
								<th>Jumlah Produk</th>
								<th>Subtotal</th>
							</tr>
						</thead>
						<tbody>
						<tr class="rem1">
							<td class="invert" colspan="5"><center>Anda harus login terlebih dahulu.</center></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<div class="checkout-left">
				<div class="address_form_agile mt-sm-5 mt-4">
					<h4 class="mb-sm-4 mb-3">Detail Penyewa</h4>
					<form action="payment.html" method="post" class="creditly-card-form agileinfo_form">
						<div class="creditly-wrapper wthree, w3_agileits_wrapper">
							<div class="information-wrapper">
								<div class="first-row">
									<div class="controls form-group">
										<select class="option-w3ls" disabled >
											<option>Anda harus login dahulu.</option>
										</select>
									</div>
								</div>
								<button class="submit check_out btn" disabled >Sewa Sekarang</button>
							</div>
						</div>
					</form>
				</div>
			</div>
			<?php } ?>
		</div>
	</div>
	<!-- //checkout page -->

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