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
                <section>
                            <div id="text-page">
                                <center>
                                    <img src="<?php echo base_url(); ?>komponen/img/404.gif" width="550" height="400" />
                                <h3>Oops!</h3>
                                <p class="lead">
                                    Halaman tidak ditemukan.
                                </p>
                                </center>
                            </div>
                        </section>
            </div>
            <?php $this->load->view('menu/category-right'); ?>
          </div>
        </div>
      </div>
      <!-- GET IT-->
      <?php $this->load->view('menu/modal_login'); ?>
      <?php $this->load->view('menu/footer'); ?>
    </div>
    <?php $this->load->view('menu/bottom_js'); ?>
    <script>
        function berubah(){
            var aw = document.getElementById("jenis").value;

            if(aw==""){
                document.getElementById("satu").style.display = 'none';
                document.getElementById("pak").style.display = 'none';
            }else if(aw=="satuan"){
                document.getElementById("satu").style.display = 'block';
                document.getElementById("pak").style.display = 'none';
            }else if(aw=="paket"){
                document.getElementById("satu").style.display = 'none';
                document.getElementById("pak").style.display = 'block';
            }
        }
    </script>
  </body>
</html>