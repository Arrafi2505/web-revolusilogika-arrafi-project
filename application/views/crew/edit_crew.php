
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>

			<div class="row">
				<div class="col-md-8">
					<div class="card mb-3">
					  <div class="card-header">
					    Edit Crew
					  </div>
					  <div class="card-body">
					     <?php echo form_open_multipart('crew/edit/'.$crew['id']);?>

					<div class="form-group">
					    <label for="nama">Nama</label>
					    <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $crew['nama']; ?>">
					     <?php echo form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
					  </div>
					  <div class="form-group">
					    <label for="jabatan">Pekerjaan</label>
					    <input type="text" class="form-control" id="jabatan" name="jabatan" value="<?php echo $crew['jabatan']; ?>">
					     <?php echo form_error('jabatan', '<small class="text-danger pl-3">', '</small>'); ?>
					  </div>
					  <label>Gambar</label>
					   <div class="col-sm-10">
						   <div class="row">
						   	<div class="col-sm-3">
						    	<img src="<?php echo base_url(); ?>assets/img/upload/crew/<?php echo $crew['foto']; ?>" class="img-thumbnail">
						    </div>
								<div class="col-sm-9">
						    			<div class="custom-file">
										  <input type="file" class="custom-file-input" id="gambar" name="gambar">
										  <label class="custom-file-label" for="gambar" >Choose file</label>
										</div>
						    		</div>
						    	</div>
						    </div>
						<hr class="sidebar-divider mt-5">
					  <button type="submit" class="btn btn-primary float-right">Change</button>
					  <a href="<?php echo base_url(); ?>crew" class="btn btn-secondary float-right mr-2">Back</a>
					</form>
					  </div>
					</div>
				</div>
			</div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->