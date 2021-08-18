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
                        <br />
                        <br />
                        <br />
                        <br />
                        <div class="row">
                            <div class="col-md-6">
                                <section>
                                    <img src="<?php echo base_url(); ?>komponen/img/default.jpg"
                                        class="bulat zoom-effect" />
                                    <br />
                                    <br />
                                    <div id="text-page">
                                        <h3><?php echo $this->session->userdata('ses_nama'); ?></h3>
                                        <p class="lead">
                                            @<?php echo $this->session->userdata('ses_uname'); ?>
                                        <ul>
                                            <li class="atas"></li>
                                        </ul>
                                        </p>
                                        <p class="lead kanana">
                                            <?php echo $this->session->userdata('ses_card_no'); ?>
                                        </p>
                                        <p class="lead">
                                            *<i><small>Semua kolom yang berwarna abu - abu, tidak bisa
                                                    diubah.</small></i>
                                        </p>
                                    </div>
                                </section>
                            </div>
                            <div class="col-md-6">
                                <?php echo $this->session->userdata('edit'); ?>
                                <section>
                                    <h4>Edit Profil</h4>
                                    <hr />
                                    <form action="<?php echo base_url('index.php/myaccount/acc_edit'); ?>"
                                        method="POST">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Username</label>
                                                    <input id="email_modal" name="username" type="text"
                                                        value="<?php echo $this->session->userdata('ses_uname'); ?>"
                                                        class="form-control" required readonly>
                                                </div>
                                                <div class="form-group">
                                                    <label>Password</label>
                                                    <input id="password_modal" name="password" type="password"
                                                        placeholder="password baru Anda" class="form-control" required>
                                                    <i><small>Kosongkan jika tidak ingin mengganti.</small></i>
                                                </div>
                                                <div class="form-group">
                                                    <label>Nama Lengkap</label>
                                                    <input id="password_modal" name="nama_pelanggan" type="text"
                                                        value="<?php echo $this->session->userdata('ses_nama'); ?>"
                                                        class="form-control" required>
                                                </div>
                                                <div class="form-group">
                                                    <label>Alamat</label>
                                                    <textarea id="password_modal" name="alamat" placeholder="Alamat"
                                                        class="form-control" rows="8"
                                                        required><?php echo $this->session->userdata('ses_alamat'); ?></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Nomor HP</label>
                                                    <input id="password_modal" name="no_hp" type="number"
                                                        value="<?php echo $this->session->userdata('ses_hp'); ?>"
                                                        class="form-control" required>
                                                </div>
                                                <div class="form-group">
                                                    <label>Jenis Identitas</label>
                                                    <input id="password_modal" name="kartu_identitas" type="text"
                                                        value="<?php echo $this->session->userdata('ses_card'); ?>"
                                                        class="form-control" required readonly>
                                                </div>
                                                <div class="form-group">
                                                    <label>Nomor Identitas</label>
                                                    <input id="password_modal" name="no_identitas" type="number"
                                                        value="<?php echo $this->session->userdata('ses_card_no'); ?>"
                                                        class="form-control" required readonly>
                                                </div>
                                                <div class="form-group">
                                                    <button class="btn btn-success">Simpan</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </section>
                            </div>
                        </div>

                    </div>
                    <?php $this->load->view('menu/dashboard_menu_4'); ?>
                </div>
            </div>
        </div>
        <?php $this->load->view('menu/modal_login'); ?>
        <?php $this->load->view('menu/footer_my'); ?>
    </div>
    <?php $this->load->view('menu/bottom_js'); ?>
</body>

</html>