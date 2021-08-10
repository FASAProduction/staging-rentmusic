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
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Produk</th>
                                                <th>Tanggal Penyewaan</th>
                                                <th>Jumlah</th>
                                                <th>Jumlah Hari</th>
                                                <th>Status Sewa</th>
                                                <th>Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
							if($hpemesan > 0){
							$no = 1; 
							foreach($pemesan as $my): ?>
                                            <tr>
                                                <td><?php echo $no++; ?></td>
                                                <td><?php echo $my->nama_alat_musik; ?></td>
                                                <td><?php echo $my->tgl_pemesanan; ?></td>
                                                <td><?php echo $my->jumlah; ?> Buah</td>
                                                <td><?php echo $my->jumlah_hari; ?> Hari</td>
                                                <td><?php echo $my->status_sewa; ?></td>
                                                <td><?php echo rupiah($my->total_bayar); ?></td>
                                            </tr>
                                            <?php endforeach;
                            }else{ 
                        ?>
                                            <tr>
                                                <td colspan="5">
                                                    <center>Tidak ada Barangg.</center>
                                                </td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php $this->load->view('menu/dashboard_menu_2'); ?>
                </div>
            </div>
        </div>
        <?php $this->load->view('menu/modal_login'); ?>
        <?php $this->load->view('menu/footer_my'); ?>
    </div>
    <?php $this->load->view('menu/bottom_js'); ?>
</body>

</html>