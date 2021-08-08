<!DOCTYPE html>
  <?php $this->load->view('menu/head_css'); ?>
  <body>
    <div id="all">
      <!-- Top bar-->
      <?php $this->load->view('menu/menu_check'); ?>
      
      <div id="heading-breadcrumbs">
        <div class="container">
          <div class="row d-flex align-items-center flex-wrap">
            <div class="col-md-7">
              <h1 class="h2">Ruangan Saya</h1>
            </div>
            <div class="col-md-5">
              <ul class="breadcrumb d-flex justify-content-end">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Ruangan Saya</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
        <div id="content">
        <div class="container">
          <div class="row">
            <div class="col-lg-9">
                <br/>
                <br/>
                <br/>
                <br/>
                <br/>
                <br/>
                <section>
                    <div id="text-page">
                        <p class="lead">
                            Halo <b><?php echo $this->session->userdata('ses_uname'); ?></b>, berikut adalah dashboard Anda.
                            <br/>
                            Pilih menu disamping untuk melihat pesanan Anda.
                        </p>
                    </div>
                </section>
            </div>
            <?php $this->load->view('menu/dashboard_menu_1'); ?>
          </div>
        </div>
      </div>
      <?php $this->load->view('menu/modal_login'); ?>
      <?php $this->load->view('menu/footer_my'); ?>
    </div>
    <?php $this->load->view('menu/bottom_js'); ?>
  </body>
</html>