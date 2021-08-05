<!DOCTYPE html>
<html lang="id">
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
                    <li class="breadcrumb-item active">Masuk</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb End -->
        
        <!-- Login Start -->
        <div class="login">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="login-form">
                        <?php
                        if($this->session->flashdata('notice') == TRUE){
                        ?>
                        <h2>Anda berhasil mendaftar. Silahkan login terlebih dahulu!</h2>
                        <?php
                        }else{
                        ?>
                        <h2>Masuk Akun</h2>
                        <?php  } ?>
                            <br/>
                            <form action="<?php echo base_url('index.php/login/pro'); ?>" method="POST">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Username</label>
                                    <input class="form-control" name="username" type="text" placeholder="Masukkan Username Anda">
                                </div>
                                <div class="col-md-6">
                                    <label>Password</label>
                                    <input class="form-control" name="password" type="password" placeholder="Masukkan Password">
                                </div>
                                <div class="col-md-12">
                                    <button class="btn">Masuk</button>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Login End -->
        
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