
	<div class="container mt-150">
		<?php echo $this->session->flashdata('message'); ?>
		<div class="row mb-5">
			<div class="col-md-4 text-center">
				<img src="<?php echo base_url(); ?>assets/img/upload/member/<?php echo $user['gambar']; ?>" class="rounded-circle" alt="" width="70%">
			</div>
			<div class="col-md-8">
				<h1 class="text_center_only"><?php echo $user['nama']; ?></h1>
				<h4 class="text_center_only"><a href="mailto:<?php echo $user['email']; ?>" target="_top"><?php echo $user['email']; ?></a></h4>
				<p class="text_center_only">Member since <?php echo date('d F Y', $user['date_created']); ?></p>
			</div>
		</div>
		
			<h3>Account</h3>
			<?php echo form_open_multipart('client/profile');?>

				<div class="form-group row">
				    <label for="email" class="col-sm-2 col-form-label">Email</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" id="email" name="email" value="<?php echo $user['email']; ?>" readonly>
				    </div>
				  </div>
				  <?php if(form_error('nama')) : ?>
				  <div class="form-group row">
				    <label for="nama" class="col-sm-2 col-form-label">Nama Lengkap</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control is-invalid" id="nama" name="nama" value="<?php echo $user['nama']; ?>">
				       <?php echo form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
				    </div>
				  </div>
				  <?php else : ?>
				  	<div class="form-group row">
				    <label for="nama" class="col-sm-2 col-form-label">Nama Lengkap</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $user['nama']; ?>">
				    </div>
				  </div>
				<?php endif; ?>
				<?php if(form_error('no_hp')) : ?>
				  <div class="form-group row">
				    <label for="no_hp" class="col-sm-2 col-form-label">Nomor HP</label>
				    <div class="col-sm-10">
				      <input type="number" class="form-control is-invalid" id="no_hp" name="no_hp" value="<?php echo $user['no_hp']; ?>">
				       <?php echo form_error('no_hp', '<small class="text-danger pl-3">', '</small>'); ?>
				    </div>
				  </div>
				  <?php else : ?>
				  	<div class="form-group row">
				    <label for="no_hp" class="col-sm-2 col-form-label">Nomor HP</label>
				    <div class="col-sm-10">
				      <input type="number" class="form-control" id="no_hp" name="no_hp" value="<?php echo $user['no_hp']; ?>">
				    </div>
				  </div>
				<?php endif; ?>
				 <div class="form-group row">
					 <label for="name" class="col-sm-2 col-form-label">Picture</label>
					  <div class="col-sm-10">
						   <div class="row">
						   	<div class="col-sm-3">
						    	<img src="<?php echo base_url(); ?>assets/img/upload/member/<?php echo $user['gambar']; ?>" class="img-thumbnail">
						    </div>
								<div class="col-sm-9">
						    			<div class="custom-file">
										  <input type="file" class="custom-file-input" id="gambar" name="gambar">
										  <label class="custom-file-label" for="gambar" >Choose file</label>
										</div>
						    		</div>
						    	</div>
						    </div>
						  </div>
						   <div class="form-group row justify-content-end">
						    	<div class="col-sm-10">
						    		<a href="<?php echo base_url(); ?>client" class="btn btn-secondary">Back</a>
						    		<button type="submit" name="submit" class="btn btn-primary">Edit</button>
								</div>
							</div>			
			</form>
	</div>