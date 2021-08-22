<!DOCTYPE html>
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
                        <h1 class="h2">Selamat Datang!</h1>
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
                    <?php echo $this->session->flashdata('notice'); ?>
                    <div class="col-md-9">
                        <?php echo $this->session->flashdata('msg'); ?>
                        <h1 class="h2">Our Products</h1>
                        <p class="kanan"><a href="<?php echo base_url('index.php/products'); ?>">Lihat Semua</a></p>
                        <hr />
                        <p class="text-muted lead">Satuan</p>
                        <div class="row products products-big">
                            <?php
                foreach($alatlimit as $almit) :
                ?>
                            <div class="col-lg-4 col-md-6">
                                <div class="product">
                                    <div class="image">
                                        <?php if($almit->pic==null){ ?>
                                        <a
                                            href="<?php echo base_url(); ?>index.php/detail/satuan/<?php echo $almit->id_alat_musik; ?>"><img
                                                src="<?php echo base_url(); ?>komponen/img/nopic.png" alt=""
                                                class="img-fluid image1"></a>
                                        <?php }else{ ?>
                                        <a
                                            href="<?php echo base_url(); ?>index.php/detail/satuan/<?php echo $almit->id_alat_musik; ?>"><img
                                                src="../../../../staging-admrentmusic/komponen/dist/img/produk/almus/<?php echo $almit->pic; ?>"
                                                alt="" class="img-fluid image1"></a>
                                        <?php } ?>
                                    </div>
                                    <div class="text">
                                        <h3 class="h5"><a
                                                href="<?php echo base_url(); ?>index.php/detail/satuan/<?php echo $almit->id_alat_musik; ?>"><?php echo $almit->nama_alat_musik; ?></a>
                                        </h3>
                                        <p class="price"><?php echo rupiah($almit->harga); ?></p>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                        <br />
                        <br />
                        <p class="text-muted lead">Paket</p>
                        <div class="row products products-big">
                            <?php
                foreach($pak as $p) :
                ?>
                            <div class="col-lg-4 col-md-6">
                                <div class="product">
                                    <div class="image">
                                        <?php if($p->pict==null){ ?>
                                        <a
                                            href="<?php echo base_url(); ?>index.php/detail/paket/<?php echo $p->id_paket; ?>"><img
                                                src="<?php echo base_url(); ?>komponen/img/nopic.png" alt=""
                                                class="img-fluid image1"></a>
                                        <?php }else{ ?>
                                        <a
                                            href="<?php echo base_url(); ?>index.php/detail/paket/<?php echo $p->id_paket; ?>"><img
                                                src="../../../../staging-admrentmusic/komponen/dist/img/produk/paket/<?php echo $p->pict; ?>" alt=""
                                                class="img-fluid image1"></a>
                                        <?php } ?>
                                    </div>
                                    <div class="text">
                                        <h3 class="h5"><a
                                                href="<?php echo base_url(); ?>index.php/detail/paket/<?php echo $p->id_paket; ?>"><?php echo $p->nama_paket; ?></a>
                                        </h3>
                                        <p class="price"><?php echo rupiah($p->harga); ?></p>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                        <div class="row">
                            <div class="col-md-12 banner mb-small"><a href="#"><img
                                        src="<?php echo base_url(); ?>komponen/img/banner-gm.png" alt=""
                                        class="img-fluid"></a></div>
                        </div>
                    </div>
                    <?php $this->load->view('menu/category-right'); ?>
                </div>
            </div>
        </div>
        <!-- GET IT-->
        <?php $this->load->view('menu/modal_register'); ?>
        <?php $this->load->view('menu/modal_login'); ?>
        <?php $this->load->view('menu/footer'); ?>
    </div>
    <?php $this->load->view('menu/bottom_js'); ?>
</body>

</html>