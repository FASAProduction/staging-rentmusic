<?php
foreach ($detpak as $dp):
?>
<!DOCTYPE html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $dp->nama_paket; ?> - Detail</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/komponen/vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/komponen/vendor/font-awesome/css/font-awesome.min.css">
    <!-- Google fonts - Roboto-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,700">
    <!-- Bootstrap Select-->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/komponen/vendor/bootstrap-select/css/bootstrap-select.min.css">
    <!-- owl carousel-->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/komponen/vendor/owl.carousel/assets/owl.carousel.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/komponen/vendor/owl.carousel/assets/owl.theme.default.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/komponen/css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/komponen/css/custom.css">
    <!-- Favicon and apple touch icons-->
    <link rel="shortcut icon" href="<?php echo base_url(); ?>/komponen/img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="<?php echo base_url(); ?>/komponen/img/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo base_url(); ?>/komponen/img/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url(); ?>/komponen/img/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url(); ?>/komponen/img/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url(); ?>/komponen/img/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo base_url(); ?>/komponen/img/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo base_url(); ?>/komponen/img/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo base_url(); ?>/komponen/img/apple-touch-icon-152x152.png">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <div id="all">
      <!-- Top bar-->
      <?php $this->load->view('menu/menu_one'); ?>
      <!-- Navbar End-->
      
      <div id="heading-breadcrumbs">
        <div class="container">
          <div class="row d-flex align-items-center flex-wrap">
            <div class="col-md-7">
              <h1 class="h2"><?php echo $dp->nama_paket; ?></h1>
            </div>
            <div class="col-md-5">
              <ul class="breadcrumb d-flex justify-content-end">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item"><a href="shop-category.html">Alat Musik</a></li>
                <li class="breadcrumb-item"><a href="shop-category.html">Satuan</a></li>
                <li class="breadcrumb-item active"><?php echo $dp->nama_paket; ?></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div id="content">
        <div class="container">
          <div class="row bar">
            <!-- LEFT COLUMN _________________________________________________________-->
            <div class="col-lg-9">
              <p class="lead"></p>
              <p class="goToDescription"><a href="#details" class="scroll-to text-uppercase">Scroll kebawah untuk melihat detail produk.</a></p>
              <div id="productMain" class="row">
                <div class="col-sm-6">
                  <div data-slider-id="1" class="owl-carousel shop-detail-carousel">
                    <?php if($dp->pict==null){ ?>
                    <div> <img src="<?php echo base_url(); ?>komponen/img/nopic.png" alt="" class="img-fluid"></div>
                    <?php }else{ ?>
                      <div> <img src="../../../../staging-admrentmusic/komponen/dist/img/produk/paket/<?php echo $dp->pict; ?>" alt="" class="img-fluid"></div>
                    <?php } ?>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="box">
                    <form>
                      <div class="sizes">
                        <h3>Pilih Jumlah Hari</h3>
                        <select class="bs-select">
                          <?php
                          for($a=1;$a<=20;$a++){
                          ?>
                          <option value="<?php echo $a; ?>"><?php echo $a; ?> Hari</option>
                          <?php } ?>
                        </select>
                      </div>
                      <p class="price"><?php echo rupiah($dp->harga); ?></p>
                      <p class="text-center">
                        <button type="submit" class="btn btn-template-outlined"><i class="fa fa-shopping-cart"></i> Sewa Sekarang</button>
                      </p>
                    </form>
                  </div>
                </div>
              </div>
              <div id="details" class="box mb-4 mt-4">
                <p></p>
                <h4>Detail Produk</h4>
                <blockquote class="blockquote">
                  <p class="mb-0"><em>No Description.</em></p>
                </blockquote>
              </div>
            </div>
            <?php $this->load->view('menu/category-right'); ?>

            <?php $this->load->view('menu/modal_login'); ?>
          </div>
        </div>
      </div>
      <?php $this->load->view('menu/modal_login'); ?>
      <?php $this->load->view('menu/footer'); ?>
    </div>
    <!-- Javascript files-->
    <?php $this->load->view('menu/bottom_js'); ?>
  </body>
</html>
<?php endforeach; ?>