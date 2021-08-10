<!-- Login Modal-->
<div id="reg-modal" tabindex="-1" role="dialog" aria-labelledby="login-modalLabel" aria-hidden="true" class="modal fade">
        <div role="document" class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 id="login-modalLabel" class="modal-title">Daftar menjadi pelanggan GM Musika Mini</h4>
              <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
              <form action="<?php echo base_url('index.php/login/pro'); ?>" method="POST">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                        <input id="email_modal" name="username" type="text" placeholder="Username" class="form-control">
                        </div>
                        <div class="form-group">
                        <input id="password_modal" name="password" type="password" placeholder="password" class="form-control">
                        </div>
                        <div class="form-group">
                        <input id="password_modal" name="nama_pelanggan" type="text" placeholder="Nama Lengkap" class="form-control">
                        </div>
                        <div class="form-group">
                        <textarea id="password_modal" name="alamat" placeholder="Alamat" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="col-md-6">
                            <div class="form-group">
                        <input id="password_modal" name="no_hp" type="number" placeholder="Nomor HP" class="form-control">
                        </div>
                        <div class="form-group">
                            <select id="password_modal" name="kartu_identitas" class="form-control">
                                <option value="">-- Pilih Salah Satu --</option>
                                <option value="KTP">KTP</option>
                                <option value="SIM">SIM</option>
                                <option value="KTM / KTPel">Kartu Pelajar /  Mahasiswa</option>
                            </select>
                        </div>
                        <div class="form-group">
                        <input id="password_modal" name="no_identitas" type="number" placeholder="Nomor Identitas" class="form-control">
                        </div>
                    </div>
                </div>
                <p class="text-center">
                  <button class="btn btn-template-outlined"><i class="fa fa-sign-up"></i> Daftar</button>
                </p>
              </form>
              <p class="text-center text-muted">Sudah menjadi member?</p>
              <p class="text-center text-muted"><a href="" data-toggle="modal" data-target="#login-modal" data-dismiss="modal"><strong>Masuk</strong></a>.</p>
            </div>
          </div>
        </div>
      </div>
      <!-- Login modal end-->