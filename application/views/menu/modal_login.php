<!-- Login Modal-->
<div id="login-modal" tabindex="-1" role="dialog" aria-labelledby="login-modalLabel" aria-hidden="true" class="modal fade">
        <div role="document" class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 id="login-modalLabel" class="modal-title">Masuk ke akun Anda</h4>
              <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
              <form action="<?php echo base_url('index.php/login/pro'); ?>" method="POST">
                <div class="form-group">
                  <input id="email_modal" name="username" type="text" placeholder="Username" class="form-control">
                </div>
                <div class="form-group">
                  <input id="password_modal" name="password" type="password" placeholder="password" class="form-control">
                </div>
                <p class="text-center">
                  <button class="btn btn-template-outlined"><i class="fa fa-sign-in"></i> Masuk</button>
                </p>
              </form>
              <p class="text-center text-muted">Belum menjadi member?</p>
              <p class="text-center text-muted"><a href="<?php echo base_url('index.php/register'); ?>"><strong>Mendaftar sekarang</strong></a>! Disamping mendaftar gratis, Anda juga akan mendapatkan keuntungan lebih dengan bertransaksi disini.</p>
            </div>
          </div>
        </div>
      </div>
      <!-- Login modal end-->