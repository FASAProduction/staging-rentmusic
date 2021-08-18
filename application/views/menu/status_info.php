<?php
foreach($pemesan as $my):
?>
<div id="status<?php echo $my->id_pemesanan; ?>" tabindex="-1" role="dialog" aria-labelledby="login-modalLabel"
    aria-hidden="true" class="modal fade">
    <div role="document" class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 id="login-modalLabel" class="modal-title">Status Penyewaan</h4>
                <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span
                        aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <?php
                if($my->status_sewa=="Proses"){
                ?>
                <p class="text-center text-muted">Status sewa Anda sekarang adalah
                    <b><?php echo $my->status_sewa; ?></b>.
                    <br />
                    <br />
                    Lakukan pembayaran di <b>GM Musika Mini</b> agar status penyewaan menjadi <b>Disewa</b>.
                </p>
                <?php
                }else if($my->status_sewa=="Disewa"){
                ?>
                <p class="text-center text-muted">Status sewa Anda sekarang adalah
                    <b><?php echo $my->status_sewa; ?></b>.
                    <br />
                    <br />
                    Ketika Anda mengembalikan barang, status sewa menjadi <b>Selesai</b>.
                </p>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
<?php endforeach; ?>