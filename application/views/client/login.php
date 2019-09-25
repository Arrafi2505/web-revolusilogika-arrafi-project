
	<div class="container">
      <div class="row justify-content-center mt-150">
        <div class="col-md-5">
          <h1 class="text-center mb-5">Login Member</h1>
			
			<?php echo $this->session->flashdata('message'); ?>
          <div class="card">
            <div class="card-header">
              Silahkan Login
            </div>
            <div class="card-body">
              <form action="<?php echo base_url(); ?>client/formLogin" method="post">
              	<?php if(form_error('email')) : ?>
                  <div class="form-group">
                  <label for="email">Email</label>
                  <div class="input-group">
			        <div class="input-group-prepend">
			          <div class="input-group-text"><i class="fa fa-fw fa-envelope"></i></div>
			        </div>
			        <input type="text" class="form-control is-invalid" id="email" name="email" placeholder="Email" value="<?php echo set_value('email'); ?>">
			      </div>
                  <?php echo form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <?php else : ?>
                  <div class="form-group">
                  <label for="email">Email</label>
                  <div class="input-group">
			        <div class="input-group-prepend">
			          <div class="input-group-text"><i class="fa fa-fw fa-envelope"></i></div>
			        </div>
			        <input type="text" class="form-control" id="email" name="email" placeholder="Email">
			      </div>
                </div>
              <?php endif; ?>
               <?php if(form_error('password')) : ?>
                  <div class="form-group">
                  <label for="password">Password</label>
                  <div class="input-group">
			        <div class="input-group-prepend">
			          <div class="input-group-text"><i class="fa fa-fw fa-lock"></i></div>
			        </div>
			        <input type="password" class="form-control is-invalid" id="password" name="password" placeholder="Password">
			      </div>
                  <?php echo form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <?php else : ?>
                  <div class="form-group">
                  <label for="password">Password</label>
                  <div class="input-group">
			        <div class="input-group-prepend">
			          <div class="input-group-text"><i class="fa fa-fw fa-lock"></i></div>
			        </div>
			        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
			      </div>
                </div>
              <?php endif; ?>
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