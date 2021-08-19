<div id="content">
        <div class="container">
          <div class="row">
            <div id="checkout" class="col-lg-9">
              <div class="box">
                <form method="get" action="shop-checkout4.html">
                  <ul class="nav nav-pills nav-fill">
                    <li class="nav-item"><a href="#" class="nav-link active"><i class="fa fa-eye"></i><br>Order Review</a></li>
                  </ul>
                </form>
                <div class="content">
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Nama Produk</th>
                          <th>Jumlah</th>
                          <th>Jumlah Hari</th>
                          <th>Total</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php
							if($hachecke > 0){
							$no = 1; 
							foreach($hacheck as $hc): ?>
                        <tr>
                          <td><?php echo $no++; ?></td>
                          <td><?php echo $hc->nama_alat_musik; ?></td>
                          <td><?php echo $hc->jumlah; ?> Buah</td>
                          <td><?php echo $hc->jumlah_hari; ?> Hari</td>
                          <td><?php echo rupiah($hc->total_bayar); ?></td>
                        </tr>
                        <?php endforeach;
                            }else{ 
                        ?>
                        <tr>
                            <td colspan="5"><center>Tidak ada Barang.</center></td>
                        </tr>
                        <?php } ?>
                      </tbody>
                      <tfoot>
                      <?php
							if($hachecke > 0){
							foreach($hacheck as $ha): ?>
                        <tr> 
                          <th colspan="4">Total</th>
                          <th><?php echo rupiah($ha->total_bayar); ?></th>
                        </tr>
                        <?php 
                    endforeach; 
                }else{ ?>
                <tr> 
                          <th colspan="4">Total</th>
                          <th>0</th>
                        </tr>
                        <?php } ?>
                      </tfoot>
                    </table>
                  </div>
                </div>
                <div class="box-footer d-flex flex-wrap align-items-center justify-content-between">
                  <div class="left-col"><a href="shop-checkout3.html" class="btn btn-secondary mt-0"><i class="fa fa-chevron-left"></i>Kembali Belanja</a></div>
                  <div class="right-col">
                    <form action="<?php echo base_url('index.php/checkout/selesai'); ?>" method="post">
                    <?php
									foreach($hacheck as $hca):
									?>
									                  <input type="hidden" name="id_pemesanan" value="<?php echo $hca->id_pemesanan; ?>" />
                                    <input type="hidden" name="kode_penyewaan" value="<?php echo $hca->kode_penyewaan; ?>" />
                                    <input type="hidden" name="id_alat_musik" value="<?php echo $hca->id_alat_musik;  ?>" />
                                    <input type="hidden" name="tgl_pemesanan" value="<?php echo $hca->tgl_pemesanan;  ?>" />
                                    <input type="hidden" name="id_pelanggan" value="<?php echo $this->session->userdata('ses_id');  ?>" />
                                    <input type="hidden" name="id_paket" value="<?php echo $hca->id_paket; ?>" />
                                    <input type="hidden" name="id_pegawai" value="<?php echo $hca->id_pegawai; ?>" />
                                    <input type="hidden" name="jumlah" value="<?php echo $hca->jumlah; ?>" />
                                    <input type="hidden" name="jumlah_hari" value="<?php echo $hca->jumlah_hari; ?>" />
                                    <input type="hidden" name="jumlah_hari_telat" value="<?php echo $hca->jumlah_hari_telat; ?>" />
                                    <input type="hidden" name="denda" value="<?php echo $hca->denda; ?>" />
                                    <input type="hidden" name="total_bayar" value="<?php echo $hca->total_bayar; ?>" />
                                    <input type="hidden" name="status_bayar" value="<?php echo $hca->status_bayar; ?>" />
                                    <input type="hidden" name="status_sewa" value="Proses" />
									<?php endforeach; ?>
                    <button type="submit" class="btn btn-template-main">Checkout Sekarang<i class="fa fa-chevron-right"></i></button>
                  </form>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3">
              <div id="order-summary" class="box mb-4 p-0">
                <div class="box-header mt-0">
                  <h3>Ringkasan Order</h3>
                </div>
                <p class="text-muted text-small">Silahkan datang ke toko untuk melakukan pembayaran.</p>
                <div class="table-responsive">
                  <table class="table">
                    <tbody>
                    <?php
							if($hachecke > 0){
							foreach($hacheck as $hb): 
                    ?>
                      <tr class="total">
                        <td>Total</td>
                        <th><?php echo rupiah($hb->total_bayar); ?></th>
                      </tr>
                      <?php 
                    endforeach;
                }else{ 
                    ?>
                    <tr class="total">
                        <td>Total</td>
                        <th>0</th>
                      </tr>
                      <?php } ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>