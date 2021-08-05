<!DOCTYPE html>
<html>
<?php $this->load->view('menu/head_css'); ?>
  <body>
    <div id="all">
      <!-- Top bar-->
      <?php $this->load->view('menu/menu_one'); ?>
      
      <div id="heading-breadcrumbs">
        <div class="container">
          <div class="row d-flex align-items-center flex-wrap">
            <div class="col-md-7">
                <?php if($this->session->userdata('masuk') == TRUE){ ?>
              <h1 class="h2">Selamat Datang, <?php echo $this->session->userdata('ses_nama'); ?></h1>
              <?php }else{ ?>
                <h1 class="h2">Selamat Datang, Pengunjung!</h1>
                <?php } ?>
            </div>
            <div class="col-md-5">
              <ul class="breadcrumb d-flex justify-content-end">
                <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Home</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div id="content">
        <div class="container">
          <div class="row bar">
            <div class="col-md-9">
              <p class="text-muted lead">Our Products</p>
              <div class="row products products-big">
                <div class="col-lg-4 col-md-6">
                  <div class="product">
                    <div class="image"><a href="shop-detail.html"><img src="img/product1.jpg" alt="" class="img-fluid image1"></a></div>
                    <div class="text">
                      <h3 class="h5"><a href="shop-detail.html">Fur coat with very but very very long name</a></h3>
                      <p class="price">$143.00</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <div class="product">
                    <div class="image"><a href="shop-detail.html"><img src="img/product2.jpg" alt="" class="img-fluid image1"></a></div>
                    <div class="text">
                      <h3 class="h5"><a href="shop-detail.html">White Blouse Armani</a></h3>
                      <p class="price">
                        <del>$280</del> $143.00
                      </p>
                    </div>
                    <div class="ribbon-holder">
                      <div class="ribbon sale">SALE</div>
                      <div class="ribbon new">NEW</div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <div class="product">
                    <div class="image"><a href="shop-detail.html"><img src="img/product3.jpg" alt="" class="img-fluid image1"></a></div>
                    <div class="text">
                      <h3 class="h5"><a href="shop-detail.html">Black Blouse Versace</a></h3>
                      <p class="price">$143.00</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <div class="product">
                    <div class="image"><a href="shop-detail.html"><img src="img/product4.jpg" alt="" class="img-fluid image1"></a></div>
                    <div class="text">
                      <h3 class="h5"><a href="shop-detail.html">Black Blouse Versace</a></h3>
                      <p class="price">$143.00</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <div class="product">
                    <div class="image"><a href="shop-detail.html"><img src="img/product3.jpg" alt="" class="img-fluid image1"></a></div>
                    <div class="text">
                      <h3 class="h5"><a href="shop-detail.html">White Blouse Armani</a></h3>
                      <p class="price">
                        <del>$280</del> $143.00
                      </p>
                    </div>
                    <div class="ribbon-holder">
                      <div class="ribbon sale">SALE</div>
                      <div class="ribbon new">NEW</div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <div class="product">
                    <div class="image"><a href="shop-detail.html"><img src="img/product4.jpg" alt="" class="img-fluid image1"></a></div>
                    <div class="text">
                      <h3 class="h5"><a href="shop-detail.html">White Blouse Versace</a></h3>
                      <p class="price">$143.00</p>
                    </div>
                    <div class="ribbon-holder">
                      <div class="ribbon new">NEW</div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 banner mb-small"><a href="#"><img src="img/banner2.jpg" alt="" class="img-fluid"></a></div>
              </div>
              <div class="pages">
                <p class="loadMore text-center"><a href="#" class="btn btn-template-outlined"><i class="fa fa-chevron-down"></i> Load more</a></p>
                <nav aria-label="Page navigation example" class="d-flex justify-content-center">
                  <ul class="pagination">
                    <li class="page-item"><a href="#" class="page-link"> <i class="fa fa-angle-double-left"></i></a></li>
                    <li class="page-item active"><a href="#" class="page-link">1</a></li>
                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                    <li class="page-item"><a href="#" class="page-link">3</a></li>
                    <li class="page-item"><a href="#" class="page-link">4</a></li>
                    <li class="page-item"><a href="#" class="page-link">5</a></li>
                    <li class="page-item"><a href="#" class="page-link"><i class="fa fa-angle-double-right"></i></a></li>
                  </ul>
                </nav>
              </div>
            </div>
            <div class="col-md-3">
              <!-- MENUS AND FILTERS-->
              <div class="panel panel-default sidebar-menu">
                <div class="panel-heading">
                  <h3 class="h4 panel-title">Categories</h3>
                </div>
                <div class="panel-body">
                  <ul class="nav nav-pills flex-column text-sm category-menu">
                    <li class="nav-item"><a href="shop-category.html" class="nav-link d-flex align-items-center justify-content-between"><span>Satuan </span></a>
                      <ul class="nav nav-pills flex-column">
                        <li class="nav-item"><a href="shop-category.html" class="nav-link">Akustik</a></li>
                        <li class="nav-item"><a href="shop-category.html" class="nav-link">Elektrik</a></li>
                      </ul>
                    </li>
                    <li class="nav-item"><a href="shop-category.html" class="nav-link d-flex align-items-center justify-content-between"><span>Paket  </span></a>
                      <ul class="nav nav-pills flex-column">
                        <li class="nav-item"><a href="shop-category.html" class="nav-link">Paket + Sound System</a></li>
                        <li class="nav-item"><a href="shop-category.html" class="nav-link">Paket Only</a></li>
                      </ul>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="banner"><a href="shop-category.html"><img src="<?php echo base_url(); ?>komponen/img/banner.jpg" alt="sales 2014" class="img-fluid"></a></div>
            </div>
          </div>
        </div>
      </div>
      <!-- GET IT-->
      <?php $this->load->view('menu/modal_login'); ?>
      <!-- FOOTER -->
      <footer class="main-footer">
        <div class="container">
          <div class="row">
            <div class="col-lg-4">
              <h4 class="h6">About Us</h4>
              <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
              <hr>
              <h4 class="h6">Join Our Monthly Newsletter</h4>
              <form>
                <div class="input-group">
                  <input type="text" class="form-control">
                  <div class="input-group-append">
                    <button type="button" class="btn btn-secondary"><i class="fa fa-send"></i></button>
                  </div>
                </div>
              </form>
              <hr class="d-block d-lg-none">
            </div>
            <div class="col-lg-4">
              <h4 class="h6">Contact</h4>
              <p class="text-uppercase"><strong>Universal Ltd.</strong><br>13/25 New Avenue <br>Newtown upon River <br>45Y 73J <br>England <br><strong>Great Britain</strong></p><a href="contact.html" class="btn btn-template-main">Go to contact page</a>
              <hr class="d-block d-lg-none">
            </div>
            <div class="col-lg-3">
              <ul class="list-inline photo-stream">
                <li class="list-inline-item"><a href="#"><img src="img/detailsquare.jpg" alt="..." class="img-fluid"></a></li>
                <li class="list-inline-item"><a href="#"><img src="img/detailsquare2.jpg" alt="..." class="img-fluid"></a></li>
                <li class="list-inline-item"><a href="#"><img src="img/detailsquare3.jpg" alt="..." class="img-fluid"></a></li>
                <li class="list-inline-item"><a href="#"><img src="img/detailsquare3.jpg" alt="..." class="img-fluid"></a></li>
                <li class="list-inline-item"><a href="#"><img src="img/detailsquare2.jpg" alt="..." class="img-fluid"></a></li>
                <li class="list-inline-item"><a href="#"><img src="img/detailsquare.jpg" alt="..." class="img-fluid"></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="copyrights">
          <div class="container">
            <div class="row">
              <div class="col-lg-4 text-center-md">
                <p>&copy; 2020. Your company / name goes here</p>
              </div>
              <div class="col-lg-8 text-right text-center-md">
                <p>Template design by <a href="https://bootstrapious.com/snippets">Bootstrapious </a>&  <a href="https://fity.cz/">Fity</a></p>
                <!-- Please do not remove the backlink to us unless you purchase the Attribution-free License at https://bootstrapious.com/donate. Thank you. -->
              </div>
            </div>
          </div>
        </div>
      </footer>
    </div>
    <?php $this->load->view('menu/bottom_js'); ?>
  </body>
</html>