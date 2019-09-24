
	<div class="container">
      <div class="row justify-content-center mt-150">
        <div class="col-md-5">
          <h1 class="text-center">Daftar Akun</h1>

          <div class="card mt-5">
            <div class="card-header">
              Daftar Akun
            </div>
            <div class="card-body">
              <form action="" method="post">
              	<div class="form-group">
                  <label for="nama">Nama Lengkap</label>
                  <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama Lengkap Anda">
                </div>
                  <div class="form-group">
                  <label for="no_hp">Nomor HP</label>
                  <input type="text" class="form-control" id="no_hp" name="no_hp" placeholder="Contoh : 08XXXXXXXXXX">
                </div>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                </div>
                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                </div>
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