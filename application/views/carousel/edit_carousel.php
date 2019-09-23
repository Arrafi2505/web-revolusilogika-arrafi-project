
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>

			<div class="row">
				<div class="col-md-8">
					<div class="card mb-3">
					  <div class="card-header">
					    Edit Carousel
					  </div>
					  <div class="card-body">
					     <?php echo form_open_multipart('carousel/edit/'.$carousel['id']);?>

							<div class="form-group">
							    <label for="judul">Judul</label>
							    <input type="text" class="form-control" id="judul" name="judul" value="<?php echo $carousel['judul']; ?>">
							    <?php echo form_error('judul', '<small class="text-danger pl-3">', '</small>'); ?>
							 </div>
						  <div class="form-group">
							     <label>Deskripsi</label>
								 <textarea class="form-control" name="deskripsi" id="deskripsi" rows="5"><?php echo $carousel['deskripsi']; ?></textarea>
								 <?php echo form_error('deskripsi', '<small class="text-danger pl-3">', '</small>'); ?>
							  </div>
						 <label>Gambar</label>
					   <div class="col-sm-10">
						   <div class="row">
						   	<div class="col-sm-3">
						    	<img src="<?php echo base_url(); ?>assets/img/upload/carousel/<?php echo $carousel['image_url']; ?>" class="img-thumbnail">
						    </div>
								<div class="col-sm-9">
						    			<div class="custom-file">
										  <input type="file" class="custom-file-input" id="gambar" name="gambar">
										  <label class="custom-file-label" for="gambar" >Choose file</label>
										</div>
						    		</div>
						    	</div>
						    </div>
							<div class="form-group mt-3">
						  	<label>Visible</label>
						  	<br>
							  <div class="form-check form-check-inline">
								 <input class="form-check-input" type="radio" name="visible" id="visible" value="1" <?php if($carousel['visible'] == 1){echo "checked";} ?>>
								<label class="form-check-label" for="visible">Yes</label>
							</div>
							<div class="form-check form-check-inline">
								 <input class="form-check-input" type="radio" name="visible" id="visible" value="0" <?php if($carousel['visible'] == 0){echo "checked";} ?>>
								<label class="form-check-label" for="visible">No</label>
							</div>
						</div>
						<hr class="sidebar-divider mt-5">
					  <button type="submit" class="btn btn-primary float-right">Change</button>
					  <a href="<?php echo base_url(); ?>carousel" class="btn btn-secondary float-right mr-2">Back</a>
					</form>
					  </div>
					</div>
				</div>
			</div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->