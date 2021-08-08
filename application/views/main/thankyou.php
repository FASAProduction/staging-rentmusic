<!DOCTYPE html>
<?php $this->load->view('menu/head_css'); ?>
  <body>
    <div id="all">
      <!-- Top bar-->
      <?php $this->load->view('menu/menu_check'); ?>
      <!-- Navbar End-->
      
      <div id="heading-breadcrumbs">
        <div class="container">
          <div class="row d-flex align-items-center flex-wrap">
            <div class="col-md-7">
              <h1 class="h2">Terima Kasih!</h1>
            </div>
            <div class="col-md-5">
              <ul class="breadcrumb d-flex justify-content-end">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Thanks</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div id="content">
        <div class="container">
          <div class="row bar">
            <div class="col-md-12">
              <section>
                <div id="text-page">
                  <p class="lead">
                      Terima kasih sudah menyewa produk kami. Silahkan ke toko kami untuk melakukan pembayaran.
                  </p>
                </div>
              </section>
            </div>
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