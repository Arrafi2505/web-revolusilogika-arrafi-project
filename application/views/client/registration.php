
	<div class="container">
      <div class="row justify-content-center mt-150">
        <div class="col-md-5">
          <h1 class="text-center">Daftar Akun</h1>

          <div class="card mt-5">
            <div class="card-header">
              Daftar Akun
            </div>
            <div class="card-body">
              <form action="<?php echo base_url(); ?>client/registration" method="post">
                <?php if(form_error('nama')) : ?>
              	<div class="form-group">
                  <label for="nama">Nama Lengkap</label>
                  <input type="text" class="form-control is-invalid" id="nama" name="nama" placeholder="Masukkan Nama Lengkap Anda">
                  <?php echo form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <?php else : ?>
                <div class="form-group">
                  <label for="nama">Nama Lengkap</label>
                  <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama Lengkap Anda" value="<?php echo set_value('nama'); ?>">
                </div>
              <?php endif; ?>
              <?php if(form_error('no_hp')) : ?>
                  <div class="form-group">
                  <label for="no_hp">Nomor HP</label>
                  <input type="number" class="form-control is-invalid" id="no_hp" name="no_hp" placeholder="Contoh : 08XXXXXXXXXX">
                  <?php echo form_error('no_hp', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <?php else : ?>
                  <div class="form-group">
                  <label for="no_hp">Nomor HP</label>
                  <input type="number" class="form-control" id="no_hp" name="no_hp" placeholder="Contoh : 08XXXXXXXXXX" value="<?php echo set_value('no_hp'); ?>">
                </div>
              <?php endif; ?>
                <?php if(form_error('email')) : ?>
                  <div class="form-group">
                  <label for="email">Email</label>
                  <input type="text" class="form-control is-invalid" id="email" name="email" placeholder="Email" value="<?php echo set_value('email'); ?>">
                  <?php echo form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <?php else : ?>
                  <div class="form-group">
                  <label for="email">Email</label>
                  <input type="text" class="form-control" id="email" name="email" placeholder="Email" value="<?php echo set_value('email'); ?>">
                </div>
              <?php endif; ?>
               <?php if(form_error('password')) : ?>
                  <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" class="form-control is-invalid" id="password" name="password" placeholder="Password">
                  <?php echo form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <?php else : ?>
                  <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                </div>
              <?php endif; ?>
                <button type="submit" name="submit" class="btn btn-primary btn-block">Daftar</button>
                <hr>
                <div class="text-center">
                    <a class="small" href="forgot-password.html">Lupa Password?</a>
                  </div>
                  <div class="text-center">
                    <a class="small" href="<?php echo base_url(); ?>client/formLogin">Sudah punya akun? Login!</a>
                  </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>