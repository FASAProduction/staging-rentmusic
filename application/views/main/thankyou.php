<!DOCTYPE html>
<?php $this->load->view('menu/head_css'); ?>

<body>
    <div id="all">
        <!-- Top bar-->
        <?php $this->load->view('menu/menu_check'); ?>
        <!-- Navbar End-->

        <div id="heading-breadcrumbs">
            <div class="container">
                <div class="row d-flex align-items-center flex-wrap">
                    <div class="col-md-7">
                        <h1 class="h2">Terima Kasih!</h1>
                    </div>
                    <div class="col-md-5">
                        <ul class="breadcrumb d-flex justify-content-end">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active">Thanks</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div id="content">
            <div class="container">
                <div class="row bar">
                    <div class="col-md-12">
                        <section>
                            <div id="text-page">
                                <p class="lead">
                                    Terima kasih sudah menyewa produk kami. Silahkan ke toko kami untuk melakukan
                                    pembayaran.
                                </p>

                                <p class="lead">
                                    Berikut rincian penyewaan Anda:
                                    <hr />
                                    <?php
                    foreach($prosewa as $ps):
                    ?>
                                <div class="row">
                                    <div class="col-md-4">
                                        Nama Alat Musik
                                        <br />
                                        Tanggal penyewaan
                                        <br />
                                        Tanggal kembali
                                        <br />
                                        Jumlah Hari
                                        <br />
                                        Total Pembayaran
                                    </div>
                                    <div class="col-md-8">
                                        <strong>
                                            : <?php echo $ps->nama_alat_musik; ?>
                                            <br />
                                            : <?php echo format_indo($ps->tgl_pemesanan); ?>
                                            <br />
                                            : <?php echo format_indo($ps->tgl_jatuh_tempo); ?>
                                            <br />
                                            : <?php echo $ps->jumlah_hari; ?> Hari
                                            <br />
                                            : <?php echo rupiah($ps->total_bayar); ?>
                                        </strong>
                                    </div>
                                </div>
                                <?php endforeach; ?>
                                <br />
                                <br />
                                Silahkan menuju ke <a href="<?php echo base_url('index.php/myorder'); ?>">Penyewaan
                                    Saya</a> untuk detail penyewaan lebih lanjut.
                                </p>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>

        <?php $this->load->view('menu/modal_login'); ?>
        <?php $this->load->view('menu/footer'); ?>
    </div>
    <!-- Javascript files-->
    <?php $this->load->view('menu/bottom_js'); ?>
</body>

</html>