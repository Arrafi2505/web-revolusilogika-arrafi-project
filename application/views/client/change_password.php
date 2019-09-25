
	<div class="container mt-150">
		<div class="row justify-content-center">
			<div class="col-md-7">
				<h1 class="text-center mb-5"><?php echo $judul ?></h1>

				<?php echo $this->session->flashdata('message'); ?>
				<div class="card">
					<div class="card-header">
						<?php echo $judul; ?>
					</div>
					<div class="card-body">
							<form action="" method="post">
								<div class="form-group">
								<?php if(form_error('currentPassword')) : ?>
								    <label for="currentPassword">Current Password</label>
								    <input type="password" class="form-control is-invalid" id="currentPassword" name="currentPassword">
								    <?php echo form_error('currentPassword', '<small class="text-danger pl-3">', '</small>'); ?>
								  <?php else : ?>
								  	<label for="currentPassword">New Password</label>
								    <input type="password" class="form-control" id="curretPassword" name="currentPassword">
								  <?php endif; ?>
								  </div>
								  <div class="form-group">
								<?php if(form_error('newPassword1')) : ?>
								    <label for="newPassword1">Current Password</label>
								    <input type="password" class="form-control is-invalid" id="newPassword1" name="newPassword1">
								    <?php echo form_error('newPassword1', '<small class="text-danger pl-3">', '</small>'); ?>
								  <?php else : ?>
								  	<label for="newPassword1">Current Password</label>
								    <input type="password" class="form-control" id="newPassword1" name="newPassword1">
								  <?php endif; ?>
								  </div>
								  <div class="form-group">
								<?php if(form_error('newPassword2')) : ?>
								    <label for="newPassword2">New Password</label>
								    <input type="password" class="form-control is-invalid" id="newPassword2" name="newPassword2">
								    <?php echo form_error('newPassword2', '<small class="text-danger pl-3">', '</small>'); ?>
								  <?php else : ?>
								  	<label for="newPassword2">Repeat Password</label>
								    <input type="password" class="form-control" id="newPassword2" name="newPassword2">
								  <?php endif; ?>
								  </div>
						  <button type="submit" class="btn btn-primary">Change Password</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>