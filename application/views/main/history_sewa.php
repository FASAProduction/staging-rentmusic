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
                    <div id="checkout" class="col-lg-9">
                        <div class="box">
                            <div class="content">
                            <div class="alert alert-success">Terima kasih telah mempercayai GM Musika Mini sebagai tempat menyewa alat musik.</div> 
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Produk</th>
                                                <th>Tanggal Penyewaan</th>
                                                <th>Jumlah</th>
                                                <th>Jumlah Hari</th>
                                                <th>Tanggal Kembali</th>
                                                <th>Status Sewa</th>
                                                <th>Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
							if($hhist > 0){
							$no = 1; 
							foreach($hist as $hp): ?>
                                            <tr>
                                                <td><?php echo $no++; ?></td>
                                                <td><?php echo $hp->nama_alat_musik; ?></td>
                                                <td><?php echo $hp->tgl_pemesanan; ?></td>
                                                <td><?php echo $hp->jumlah; ?> Buah</td>
                                                <td><?php echo $hp->jumlah_hari; ?> Hari</td>
                                                <td><?php echo $hp->tgl_jatuh_tempo; ?></td>
                                                <td><?php echo $hp->status_sewa; ?></td>
                                                <td><?php echo rupiah($hp->total_bayar); ?></td>
                                            </tr>
                                            <?php endforeach;
                            }else{ 
                        ?>
                                            <tr>
                                                <td colspan="8">
                                                    <center>Tidak ada Riwayat.</center>
                                                </td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php $this->load->view('menu/dashboard_menu_3'); ?>
                </div>
            </div>
        </div>
        <?php $this->load->view('menu/modal_login'); ?>
        <?php $this->load->view('menu/footer_my'); ?>
    </div>
    <?php $this->load->view('menu/bottom_js'); ?>
</body>

</html>