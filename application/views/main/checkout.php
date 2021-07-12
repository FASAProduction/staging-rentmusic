<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <title><?php echo $judul; ?></title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="GM Musika Mini, musika" name="keywords">
        <meta content="Music Rent" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Source+Code+Pro:700,900&display=swap" rel="stylesheet">

        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>komponen/lib/slick/slick.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>komponen/lib/slick/slick-theme.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="<?php echo base_url(); ?>komponen/css/style.css" rel="stylesheet">
    </head>

    <body>
        <!-- Top bar Start -->
        <div class="top-bar">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <i class="fa fa-envelope"></i>
                        support@email.com
                    </div>
                    <div class="col-sm-6">
                        <i class="fa fa-phone-alt"></i>
                        +012-345-6789
                    </div>
                </div>
            </div>
        </div>
        <!-- Top bar End -->
        
        <?php $this->load->view('menu/menu1'); ?>  
        
        <?php $this->load->view('menu/menu2'); ?> 
        
        <!-- Breadcrumb Start -->
        <div class="breadcrumb-wrap">
            <div class="container-fluid">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Beranda</a></li>
                    <li class="breadcrumb-item active">Checkout</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb End -->
        
        <!-- Checkout Start -->
        <div class="checkout">
            <div class="container-fluid"> 
                <div class="row">
                    <div class="col-lg-7">
                        <div class="checkout-inner">
                            <div class="billing-address">
                                <h2>Detail Akun</h2>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Nama</label>
                                        <input class="form-control" type="text" value="<?php echo $this->session->userdata('ses_nama'); ?>" readonly>
                                    </div>
                                    <div class="col-md-6">
                                        <label>Nomor HP</label>
                                        <input class="form-control" type="number" value="<?php echo $this->session->userdata('ses_hp'); ?>" readonly>
                                    </div>
                                    <div class="col-md-12">
                                        <label>Alamat</label>
                                        <textarea class="form-control" rows="10" readonly><?php echo $this->session->userdata('ses_alamat'); ?></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="checkout-inner">
                            <?php
                            foreach($hacheck as $che):

                                    error_reporting(0);
                                    $hrg = $che->harga;
                                    $hr = $che->jumlah_hari;

                                    $ttl = $hrg * $hr;
                            ?>
                            <div class="checkout-summary">
                                <h1>Detail Penyewaan</h1>
                                <p>Nama Produk:<span><?php echo $che->nama_alat_musik; ?></span></p>
                                <p>Jumlah Hari Penyewaan:<span><?php echo $che->jumlah_hari; ?> Hari</span></p>
                                <form action="<?php echo base_url('index.php/checkout/update_hari'); ?>" method="POST">
                                    <input type="hidden" name="id_pemesanan" value="<?php echo $che->id_pemesanan; ?>" />
                                    <select class="form-control" name="jumlah_hari" id="hari" onChange="auch()">
                                        <option value="">Ubah Hari</option>
                                        <?php
                                        for ($i=0;$i<=7;$i++){
                                        ?>
                                        <option value="<?php echo $i; ?>"><?php echo $i; ?> hari</option>
                                        <?php } ?>
                                    </select>
                                    <?php
                                    error_reporting(0);
                                    $hrg = $che->harga;
                                    $hr = $che->jumlah_hari;

                                    $ttl = $hrg * $hr;
                                    ?>
                                    <input type="hidden" name="total_bayar" id="hsal" />
                                    <button class="checkout-btn" type="submit">Change</button>
                                </form>
                                <br/>
                                <h2>Total<span><?php echo rupiah($che->total_bayar); ?></span></h2>
                            </div>
                            <script>

                            function auch(){
                                var au = document.getElementById("hari").value;
                                var tarii = <?php echo json_encode($hrg) ?>;
                                var htg = 0;
                                
                                if(au==""){
                                    document.getElementById("hsal").value = "0";
                                    console.log(htg);
                                }else{
                                    htg = parseInt(tarii) * parseInt(au);
                                    document.getElementById("hsal").value = htg;
                                    console.log(htg);
                                }
                            }
                            </script>
                            

                            <div class="checkout-payment">
                                <!--
                                <div class="payment-methods">
                                    <h1>Payment Methods</h1>
                                    <div class="payment-method">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" id="payment-1" name="payment">
                                            <label class="custom-control-label" for="payment-1">Paypal</label>
                                        </div>
                                        <div class="payment-content" id="payment-1-show">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tincidunt orci ac eros volutpat maximus lacinia quis diam.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="payment-method">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" id="payment-2" name="payment">
                                            <label class="custom-control-label" for="payment-2">Payoneer</label>
                                        </div>
                                        <div class="payment-content" id="payment-2-show">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tincidunt orci ac eros volutpat maximus lacinia quis diam.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="payment-method">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" id="payment-3" name="payment">
                                            <label class="custom-control-label" for="payment-3">Check Payment</label>
                                        </div>
                                        <div class="payment-content" id="payment-3-show">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tincidunt orci ac eros volutpat maximus lacinia quis diam.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="payment-method">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" id="payment-4" name="payment">
                                            <label class="custom-control-label" for="payment-4">Direct Bank Transfer</label>
                                        </div>
                                        <div class="payment-content" id="payment-4-show">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tincidunt orci ac eros volutpat maximus lacinia quis diam.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="payment-method">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" id="payment-5" name="payment">
                                            <label class="custom-control-label" for="payment-5">Cash on Delivery</label>
                                        </div>
                                        <div class="payment-content" id="payment-5-show">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tincidunt orci ac eros volutpat maximus lacinia quis diam.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                -->
                                <?php
                                foreach($peg as $pega):
                                ?>
                                <form action="<?php echo base_url('index.php/checkout/selesai'); ?>" method="POST">
                                    <input type="hidden" name="id_pemesanan" value="<?php echo $che->id_pemesanan; ?>" />
                                    <input type="hidden" name="kode_penyewaan" value="<?php echo $che->kode_penyewaan; ?>" />
                                    <input type="hidden" name="id_alat_musik" value="<?php echo $che->id_alat_musik;  ?>" />
                                    <input type="hidden" name="tgl_pemesanan" value="<?php echo $che->tgl_pemesanan;  ?>" />
                                    <input type="hidden" name="id_pelanggan" value="<?php echo $che->id_pelanggan;  ?>" />
                                    <input type="hidden" name="id_paket" value="<?php echo $che->id_paket; ?>" />
                                    <input type="hidden" name="id_pegawai" value="<?php echo $pega->id_pegawai; ?>" />
                                    <input type="hidden" name="jumlah" value="<?php echo $che->jumlah; ?>" />
                                    <input type="hidden" name="jumlah_hari" value="<?php echo $che->jumlah_hari; ?>" />
                                    <input type="hidden" name="jumlah_hari_telat" value="<?php echo $che->jumlah_hari_telat; ?>" />
                                    <input type="hidden" name="denda" value="<?php echo $che->denda; ?>" />
                                    <input type="hidden" name="total_bayar" value="<?php echo $che->total_bayar; ?>" />
                                    <input type="hidden" name="status_bayar" value="<?php echo $che->status_bayar; ?>" />
                                    <input type="hidden" name="status_sewa" value="Disewa" />
                                <div class="checkout-btn">
                                    <button type="submit"><font color="white">Sewa Sekarang</font></button>
                                </div>
                                </form>
                                <?php
                                endforeach; 
                            endforeach;
                            ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Checkout End -->
        
        <!-- Footer Bottom Start -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 copyright">
                        <p>Copyright &copy; <a href="https://htmlcodex.com">HTML Codex</a>. All Rights Reserved</p>
                    </div>

                    <div class="col-md-6 template-by">
                        <p>Template By <a href="https://htmlcodex.com">HTML Codex</a></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Bottom End -->       
        
        <!-- Back to Top -->
        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        
        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="<?php echo base_url(); ?>komponen/lib/easing/easing.min.js"></script>
        <script src="<?php echo base_url(); ?>komponen/lib/slick/slick.min.js"></script>
        
        <!-- Template Javascript -->
        <script src="<?php echo base_url(); ?>komponen/js/main.js"></script>
    </body>
</html>