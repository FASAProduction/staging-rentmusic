<!DOCTYPE html>
<?php $this->load->view('menu/head_css'); ?>
  <body>
    <div id="all">
      <!-- Top bar-->
      <?php $this->load->view('menu/menu_two'); ?>
      
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
              <h1 class="h2">Produk</h1>
              <hr/>
                <div class="sizes">
                        <h3>Pilih Kategori</h3>
                        <select class="bs-select" id="jenis" onChange="berubah()">
                        <option value="">-- Pilih Salah Satu --</option>
                            <option value="satuan">Satuan</option>
                            <option value="paket">Paket</option>
                        </select>
                </div>
                <br/>
                <div class="row products products-big">
                <?php
                foreach($alatm as $am) :
                ?>
                <div class="col-lg-4 col-md-6" id="satu" style="display: none;">
                  <div class="product">
                    <div class="image">
                    <?php if($am->pic==null){ ?>
                      <a href="<?php echo base_url(); ?>index.php/detail/satuan/<?php echo $am->id_alat_musik; ?>"><img src="<?php echo base_url(); ?>komponen/img/nopic.png" alt="" class="img-fluid image1"></a>
                      <?php }else{ ?>
                        <a href="<?php echo base_url(); ?>index.php/detail/satuan/<?php echo $am->id_alat_musik; ?>"><img src="<?php echo base_url(); ?>komponen/img/<?php echo $am->pic; ?>" alt="" class="img-fluid image1"></a>
                        <?php } ?>
                    </div>
                    <div class="text">
                      <h3 class="h5"><a href="<?php echo base_url(); ?>index.php/detail/satuan/<?php echo $am->id_alat_musik; ?>"><?php echo $am->nama_alat_musik; ?></a></h3>
                      <p class="price"><?php echo rupiah($am->harga); ?></p>
                    </div>
                  </div>
                </div>
                <?php endforeach; ?>

                <?php
                foreach($pak as $pp) :
                ?>
                <div class="col-lg-4 col-md-6" id="pak" style="display: none;">
                  <div class="product">
                    <div class="image">
                    <?php if($pp->pict==null){ ?>
                      <a href="<?php echo base_url(); ?>index.php/detail/paket/<?php echo $pp->id_paket; ?>"><img src="<?php echo base_url(); ?>komponen/img/nopic.png" alt="" class="img-fluid image1"></a>
                      <?php }else{ ?>
                        <a href="<?php echo base_url(); ?>index.php/detail/paket/<?php echo $pp->id_paket; ?>"><img src="<?php echo base_url(); ?>komponen/img/products/<?php echo $pp->pict; ?>" alt="" class="img-fluid image1"></a>
                        <?php } ?>
                    </div>
                    <div class="text">
                      <h3 class="h5"><a href="<?php echo base_url(); ?>index.php/detail/paket/<?php echo $pp->id_paket; ?>"><?php echo $pp->nama_paket; ?></a></h3>
                      <p class="price"><?php echo rupiah($pp->harga); ?></p>
                    </div>
                  </div>
                </div>
                <?php endforeach; ?>
              </div>
              <br/>
              <br/>
              <div class="row">
                <div class="col-md-12 banner mb-small"><a href="#"><img src="<?php echo base_url(); ?>komponen/img/banner-gm.png" alt="" class="img-fluid"></a></div>
              </div>
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