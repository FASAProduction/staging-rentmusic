<!DOCTYPE html>
<html>
  <?php $this->load->view('menu/head_css'); ?>
  <body>
    <div id="all">
      <!-- Top bar-->
      <?php $this->load->view('menu/menu_check'); ?>
      
      <div id="heading-breadcrumbs">
        <div class="container">
          <div class="row d-flex align-items-center flex-wrap">
            <div class="col-md-7">
              <h1 class="h2">Checkout - Order Review</h1>
            </div>
            <div class="col-md-5">
              <ul class="breadcrumb d-flex justify-content-end">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Checkout - Order Review</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <?php
      foreach($hacheck as $cek){
        if($cek->id_alat_musik > 0){
          $this->load->view('transaction/cekot_satuan');
        }else if($cek->id_paket > 0){
          $this->load->view('transaction/cekot_paket');
        }
      }
      ?>
      <?php $this->load->view('menu/modal_login'); ?>
      <?php $this->load->view('menu/footer'); ?>
    </div>
    <?php $this->load->view('menu/bottom_js'); ?>
  </body>
</html>