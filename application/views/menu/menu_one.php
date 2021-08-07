<div class="top-bar">
        <div class="container">
          <div class="row d-flex align-items-center">
            <div class="col-md-6 d-md-block d-none">
              <p>Contact us on +123 456 789 or hello@gmusikamini.com.</p>
            </div>
            <div class="col-md-6">
              <div class="d-flex justify-content-md-end justify-content-between">
                <ul class="list-inline contact-info d-block d-md-none">
                  <li class="list-inline-item"><a href="#"><i class="fa fa-phone"></i></a></li>
                  <li class="list-inline-item"><a href="#"><i class="fa fa-envelope"></i></a></li>
                </ul>
                <?php if($this->session->userdata('masuk') == TRUE){ ?>
                <div class="login"><a href="<?php echo base_url('index.php/my'); ?>" class="signup-btn"><i class="fa fa-user"></i><span class="d-none d-md-inline-block"><?php echo $this->session->userdata('ses_uname'); ?></span></a> <a href="<?php echo base_url('index.php/login/logout'); ?>" class="signup-btn"><i class="fa fa-sign-out"></i><span class="d-none d-md-inline-block">Keluar</span></a></div>
                <?php }else{ ?>
                  <div class="login"><a href="#" data-toggle="modal" data-target="#login-modal" class="login-btn"><i class="fa fa-sign-in"></i><span class="d-none d-md-inline-block">Masuk</span></a><a href="<?php echo base_url('index.php/register'); ?>" class="signup-btn"><i class="fa fa-user"></i><span class="d-none d-md-inline-block">Daftar</span></a></div>
                <?php  } ?>
                <ul class="social-custom list-inline">
                  <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li class="list-inline-item"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                  <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li class="list-inline-item"><a href="#"><i class="fa fa-envelope"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Top bar end-->
      <!-- Navbar Start-->
      <header class="nav-holder make-sticky">
        <div id="navbar" role="navigation" class="navbar navbar-expand-lg">
          <div class="container"><a href="<?php echo base_url(); ?>" class="navbar-brand home"><img src="<?php echo base_url(); ?>komponen/img/gmlogo.png" alt="Universal logo" class="d-none d-md-inline-block" width="150" height="65"></a>
            <button type="button" data-toggle="collapse" data-target="#navigation" class="navbar-toggler btn-template-outlined"><span class="sr-only">Toggle navigation</span><i class="fa fa-align-justify"></i></button>
            <div id="navigation" class="navbar-collapse collapse">
              <ul class="nav navbar-nav ml-auto">
                <li class="nav-item dropdown active"><a href="<?php echo base_url(); ?>" class="">Beranda </a>
                </li>
                <li class="nav-item dropdown menu-large"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Kategori<b class="caret"></b></a>
                  <ul class="dropdown-menu megamenu">
                    <li>
                      <div class="row">
                        <div class="col-lg-6"><img src="<?php echo base_url(); ?>komponen/img/gt1.jpg" alt="" class="img-fluid d-none d-lg-block"></div>
                        <div class="col-lg-3 col-md-6">
                          <h5>Satuan</h5>
                          <ul class="list-unstyled mb-3">
                            <li class="nav-item"><a href="template-accordions.html" class="nav-link">Akustik</a></li>
                            <li class="nav-item"><a href="template-alerts.html" class="nav-link">Elektrik</a></li>
                          </ul>
                        </div>
                        <div class="col-lg-3 col-md-6">
                          <h5>Paket</h5>
                          <ul class="list-unstyled mb-3">
                            <li class="nav-item"><a href="template-header-default.html" class="nav-link">Paket Alat Musik + Sound System</a></li>
                            <li class="nav-item"><a href="template-header-nosticky.html" class="nav-link">Paket Only</a></li>
                          </ul>
                        </div>
                      </div>
                    </li>
                  </ul>
                </li>
                <li class="nav-item dropdown"><a href="<?php echo base_url('index.php/products'); ?>" class="">Produk </a>
                </li>
                <!-- ========== Contact dropdown ==================-->
                <li class="nav-item dropdown"><a href="<?php echo base_url('index.php/contact'); ?>" class="">Kontak Kami </a>
                </li>
                <!-- ========== Contact dropdown end ==================-->
              </ul>
            </div>
            <div id="search" class="collapse clearfix">
              <form role="search" class="navbar-form">
                <div class="input-group">
                  <input type="text" placeholder="Search" class="form-control"><span class="input-group-btn">
                    <button type="submit" class="btn btn-template-main"><i class="fa fa-search"></i></button></span>
                </div>
              </form>
            </div>
          </div>
        </div>
      </header>
      <!-- Navbar End-->