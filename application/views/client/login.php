
	<div class="container">
      <div class="row justify-content-center mt-150">
        <div class="col-md-5">
          <h1 class="text-center">Login Member</h1>

          <div class="card mt-5">
            <div class="card-header">
              Silahkan Login
            </div>
            <div class="card-body">
              <form action="" method="post">
              	<div class="form-group">
                  <input type="text" class="form-control" id="email" name="email" placeholder="Email">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                </div>
                <button type="submit" name="submit" class="btn btn-primary btn-block">Login</button>
                <hr>
                <div class="text-center">
                    <a class="small" href="forgot-password.html">Lupa Password?</a>
                  </div>
                  <div class="text-center">
                    <a class="small" href="<?php echo base_url(); ?>client/registration">Buat akun!</a>
                  </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>