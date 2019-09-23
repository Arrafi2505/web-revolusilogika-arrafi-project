
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>

			<div class="row">
				<div class="col-md-8">
					<div class="card mb-3">
					  <div class="card-header">
					    Edit About
					  </div>
					  <div class="card-body">
					  	<form action="" method="post">
						<div class="form-group">
						    <label for="judul">Judul</label>
						    <input type="text" class="form-control" id="judul" name="judul" value="<?php echo $about['judul_situs']; ?>">
						     <?php echo form_error('judul', '<small class="text-danger pl-3">', '</small>'); ?>
						  </div>
						  <div class="form-group">
						    <label for="email">Email</label>
						    <input type="text" class="form-control" id="email" name="email" value="<?php echo $about['email_address']; ?>">
						     <?php echo form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
						  </div>
						  <div class="form-group">
						    <label for="slogan">Slogan</label>
						    <input type="text" class="form-control" id="slogan" name="slogan" value="<?php echo $about['slogan']; ?>">
						     <?php echo form_error('slogan', '<small class="text-danger pl-3">', '</small>'); ?>
						  </div>
						  <div class="form-group">
						    <label for="icon_small">Icon Small</label>
						    <input type="text" class="form-control" id="icon_small" name="icon_small" value="<?php echo $about['icon_small']; ?>">
						     <?php echo form_error('icon_small', '<small class="text-danger pl-3">', '</small>'); ?>
						  </div>
						  <div class="form-group">
						    <label for="icon_large">Icon Large</label>
						    <input type="text" class="form-control" id="icon_large" name="icon_large" value="<?php echo $about['icon_large']; ?>">
						     <?php echo form_error('icon_large', '<small class="text-danger pl-3">', '</small>'); ?>
						  </div>
						  <div class="form-group">
						    <label for="icon_square">Icon Square</label>
						    <input type="text" class="form-control" id="icon_square" name="icon_square" value="<?php echo $about['icon_square']; ?>">
						     <?php echo form_error('icon_square', '<small class="text-danger pl-3">', '</small>'); ?>
						  </div>
						  <div class="form-group">
						    <label for="whatsapp">No WhatsApp</label>
						    <input type="number" class="form-control" id="whatsapp" name="whatsapp" value="<?php echo $about['whatsapp']; ?>">
						     <?php echo form_error('whatsapp', '<small class="text-danger pl-3">', '</small>'); ?>
						  </div>
						  <div class="form-group">
						    <label for="telpon">No Telepon</label>
						    <input type="number" class="form-control" id="telpon" name="telpon" value="<?php echo $about['telpon']; ?>">
						     <?php echo form_error('telpon', '<small class="text-danger pl-3">', '</small>'); ?>
						  </div>
						  <div class="form-group">
						    <label for="alamat">Alamat</label>
						    <input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $about['alamat']; ?>">
						     <?php echo form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
						  </div>
						  <div class="form-group">
						    <label for="online_student">Online Student</label>
						    <input type="number" class="form-control" id="online_student" name="online_student" value="<?php echo $about['jml_online_student']; ?>">
						     <?php echo form_error('online_student', '<small class="text-danger pl-3">', '</small>'); ?>
						  </div>
						  <div class="form-group">
						    <label for="offline_student">Offline Student</label>
						    <input type="number" class="form-control" id="offline_student" name="offline_student" value="<?php echo $about['jml_offline_student']; ?>">
						     <?php echo form_error('offline_student', '<small class="text-danger pl-3">', '</small>'); ?>
						  </div>
						  <div class="form-group">
						    <label for="teacher">Teacher</label>
						    <input type="number" class="form-control" id="teacher" name="teacher" value="<?php echo $about['jml_teacher']; ?>">
						     <?php echo form_error('teacher', '<small class="text-danger pl-3">', '</small>'); ?>
						  </div>
						  <hr class="sidebar-divider mt-5">
						  <button type="submit" class="btn btn-primary float-right">Change</button>
						  <a href="<?php echo base_url(); ?>about" class="btn btn-secondary float-right mr-2">Back</a>
						</form>
					  </div>
					</div>
				</div>
			</div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->