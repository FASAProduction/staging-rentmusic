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
                                    <img src="<?php echo base_url(); ?>komponen/img/default.jpg" class="bulat" />
                                    <br />
                                    <br />
                                    <div id="text-page">
                                        <h3><?php echo $this->session->userdata('ses_nama'); ?></h3>
                                        <p class="lead">
                                            @<?php echo $this->session->userdata('ses_uname'); ?>
                                        </p>
                                    </div>
                                </section>
                            </div>
                            <div class="col-md-6">
                                <section>
                                    <h5>Edit Profil</h5>
                                    <form>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input id="email_modal" name="username" type="text"
                                                        placeholder="Username" class="form-control" required>
                                                </div>
                                                <div class="form-group">
                                                    <input id="password_modal" name="password" type="password"
                                                        placeholder="password" class="form-control" required>
                                                </div>
                                                <div class="form-group">
                                                    <input id="password_modal" name="nama_pelanggan" type="text"
                                                        placeholder="Nama Lengkap" class="form-control" required>
                                                </div>
                                                <div class="form-group">
                                                    <textarea id="password_modal" name="alamat" placeholder="Alamat"
                                                        class="form-control" required></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input id="password_modal" name="no_hp" type="number"
                                                        placeholder="Nomor HP" class="form-control" required>
                                                </div>
                                                <div class="form-group">
                                                    <select id="password_modal" name="kartu_identitas"
                                                        class="form-control" required>
                                                        <option value="">-- Pilih Salah Satu --</option>
                                                        <option value="KTP">KTP</option>
                                                        <option value="SIM">SIM</option>
                                                        <option value="KTM / KTPel">Kartu Pelajar / Mahasiswa</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <input id="password_modal" name="no_identitas" type="number"
                                                        placeholder="Nomor Identitas" class="form-control" required>
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