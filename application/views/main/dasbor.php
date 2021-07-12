<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <title><?php echo $judul; ?></title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="GM Musika Mini, musika" name="keywords">
        <meta content="Music Rent" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Source+Code+Pro:700,900&display=swap" rel="stylesheet">

        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>komponen/lib/slick/slick.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>komponen/lib/slick/slick-theme.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="<?php echo base_url(); ?>komponen/css/style.css" rel="stylesheet">
    </head>

    <body>
        <!-- Top bar Start -->
        <div class="top-bar">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <i class="fa fa-envelope"></i>
                        support@email.com
                    </div>
                    <div class="col-sm-6">
                        <i class="fa fa-phone-alt"></i>
                        +012-345-6789
                    </div>
                </div>
            </div>
        </div>
        <!-- Top bar End -->
        
        <?php $this->load->view('menu/menu1'); ?>  
        
        <?php $this->load->view('menu/menu2'); ?>
        
        <!-- Breadcrumb Start -->
        <div class="breadcrumb-wrap">
            <div class="container-fluid">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Beranda</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb End -->
        
        <!-- My Account Start -->
        <div class="my-account">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3">
                        <div class="nav flex-column nav-pills" role="tablist" aria-orientation="vertical">
                            <a class="nav-link active" id="dashboard-nav" data-toggle="pill" href="#dashboard-tab" role="tab"><i class="fa fa-tachometer-alt"></i>Dashboard</a>
                            <a class="nav-link" id="orders-nav" data-toggle="pill" href="#orders-tab" role="tab"><i class="fa fa-shopping-bag"></i>Riwayat Pesanan</a>
                            <a class="nav-link" id="address-nav" data-toggle="pill" href="#address-tab" role="tab"><i class="fa fa-map-marker-alt"></i>Alamat Anda</a>
                            <a class="nav-link" id="account-nav" data-toggle="pill" href="#account-tab" role="tab"><i class="fa fa-user"></i>Akun Anda</a>
                            <a class="nav-link" href="<?php echo base_url('index.php/login/logout'); ?>"><i class="fa fa-sign-out-alt"></i>Keluar</a>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="dashboard-tab" role="tabpanel" aria-labelledby="dashboard-nav">
                                <h4>Dashboard</h4>
                                <p>
                                    Selamat Datang di dashboard Anda, <?php echo $this->session->userdata('ses_nama'); ?> !
                                    <br/>
                                    <br/>
                                    Berikut informasi - informasi yang Anda butuhkan, serta Anda dapat mengelola alamat serta akun Anda. 
                                </p> 
                            </div>
                            <div class="tab-pane fade" id="orders-tab" role="tabpanel" aria-labelledby="orders-nav">
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Alat Musik</th>
                                                <th>Tanggal Penyewaan</th>
                                                <th>Jumlah</th>
                                                <th>Jumlah Hari</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        $no = 1;
                                        foreach($pemesan as $sewa):
                                        ?>
                                            <tr>
                                                <td><?php echo $no++; ?></td>
                                                <td><?php echo $sewa->nama_alat_musik; ?></td>
                                                <td><?php echo $sewa->tgl_pemesanan; ?></td>
                                                <td><?php echo $sewa->jumlah; ?></td>
                                                <td><?php echo $sewa->jumlah_hari; ?> Hari</td>
                                                <td><button class="btn">View</button></td>
                                            </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="address-tab" role="tabpanel" aria-labelledby="address-nav">
                                <h4>Alamat Saya</h4>
                                <?php
                                if($this->session->userdata('ses_alamat')!=null){
                                ?>
                                <p>Belum ada alamat yang terdaftar.
                                <br/>
                                <br/>
                                <i><small>Silahkan tambah alamat Anda di tab <strong>Akun Anda</strong>.</small></i>
                                </p>
                                <?php
                                }else{
                                ?>
                                <p><?php echo $this->session->userdata('ses_alamat'); ?></p>
                                <?php } ?>
                            </div>
                            <div class="tab-pane fade" id="account-tab" role="tabpanel" aria-labelledby="account-nav">
                                <h4>Detail Akun Anda</h4>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Username</label>
                                        <input class="form-control" name="username" type="text" value="<?php echo $this->session->userdata('ses_uname'); ?>">
                                    </div>
                                    <div class="col-md-6">
                                        <label>Password</label>
                                        <input class="form-control" name="password" type="password" placeholder="Masukkan Password">
                                    </div>
                                    <div class="col-md-12">
                                        <label>Nama Depan</label>
                                        <input class="form-control" name="nama_pelanggan" type="text" value="<?php echo $this->session->userdata('ses_nama'); ?>">
                                    </div>
                                    <div class="col-md-12">
                                        <label>Alamat</label>
                                        <textarea class="form-control" name="alamat" value="<?php echo $this->session->userdata('ses_alamat'); ?>" rows="15"></textarea>
                                    </div>
                                    <div class="col-md-6">
                                        <label>Nomor HP</label>
                                        <input class="form-control" name="no_hp" type="number" value="<?php echo $this->session->userdata('ses_hp'); ?>">
                                    </div>
                                    <div class="col-md-6">
                                        <label>Jenis Kartu Identitas</label>
                                        <select class="form-control" name="kartu_identitas">
                                            <option value="">Pilih Salah Satu</option>
                                            <option value="KTP">KTP</option>
                                            <option value="SIM">SIM</option>
                                            <option value="KTM">KTM</option>
                                        </select>
                                    </div>
                                    <div class="col-md-12">
                                        <label>Nomor Identitas</label>
                                        <input class="form-control" name="no_identitas" type="number" value="<?php echo $this->session->userdata('ses_card_no'); ?>">
                                    </div>
                                    <div class="col-md-12">
                                        <button class="btn">Ubah Akun Anda</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- My Account End -->

        <!-- Footer Bottom Start -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 copyright">
                        <p>Copyright &copy; <a href="https://htmlcodex.com">HTML Codex</a>. All Rights Reserved</p>
                    </div>

                    <div class="col-md-6 template-by">
                        <p>Template By <a href="https://htmlcodex.com">HTML Codex</a></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Bottom End -->       
        
        <!-- Back to Top -->
        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        
        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="<?php echo base_url(); ?>komponen/lib/easing/easing.min.js"></script>
        <script src="<?php echo base_url(); ?>komponen/lib/slick/slick.min.js"></script>
        
        <!-- Template Javascript -->
        <script src="<?php echo base_url(); ?>komponen/js/main.js"></script>
    </body>
</html>