
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>

			<div class="row">
				<div class="col-md-8">
					<div class="card mb-3">
					  <div class="card-header">
					    Insert Pengajian
					  </div>
					  <div class="card-body">

					     <?php echo form_open_multipart('pengajian/edit/'.$pengajian['id']);?>

							<div class="form-group">
								<label for="judul">Judul</label>
							    <input type="text" class="form-control" id="judul" name="judul" value="<?php echo $pengajian['judul']; ?>">
							     <?php echo form_error('judul', '<small class="text-danger pl-3">', '</small>'); ?>
							 </div>
						  <div class="form-group">

								<?php $tanggal = explode('-', $pengajian['tanggal_terbit']); ?>

							    <label>Tanggal terbit</label>
							    	<div class="row">
							    		<div class="col-md mt-2">
							    		 <select class="form-control" name="day">
							    		 	<option value="">Select Day</option>
							    			<?php for($i = 1; $i <= 31; $i++) : ?>
									      		<option value="<?php echo $i; ?>" <?php if($tanggal[2] == $i){echo "selected";} ?>><?php echo $i; ?></option>
									      	<?php endfor; ?>
									      </select>
							    		</div>
							    		<div class="col-md mt-2">
							    		 <select class="form-control" name="month">
							    		 	<option value="">Select Month</option>
							    		 	<?php foreach($bulan as $b) : ?>
							    		 		<option value="<?php echo $b['id']; ?>" <?php if($tanggal[1] == $b['id']){echo "selected";} ?>><?php echo $b['bulan']; ?></option>
							    		 	<?php endforeach; ?>
									      </select>
							    		</div>
							    		<div class="col-md mt-2">
							    		 <select class="form-control" name="year">
							    		 	<option value="">Select Year</option>
							    			<?php for($x = 1989; $x <= 2030; $x++) : ?>
									      		<option value="<?php echo $x; ?>" <?php if($tanggal[0] == $x){echo "selected";} ?>><?php echo $x; ?></option>
									      	<?php endfor; ?>
									      </select>
							    		</div>
							    	</div>
							    	 <?php echo form_error('day', '<small class="text-danger pl-3">', '</small>'); ?>
							    	 <?php echo form_error('month', '<small class="text-danger pl-3">', '</small>'); ?>
							    	 <?php echo form_error('year', '<small class="text-danger pl-3">', '</small>'); ?>
							  </div>
							  <div class="form-group">
							     <label>Deskripsi</label>
								 <textarea class="form-control" name="deskripsi" id="deskripsi" rows="5"><?php echo $pengajian['deskripsi']; ?></textarea>
								  <?php echo form_error('deskripsi', '<small class="text-danger pl-3">', '</small>'); ?>
							  </div>
							  <label>Gambar</label>
							   <div class="row">
							   	<div class="col-sm-3">
							    	<img src="<?php echo base_url(); ?>assets/img/upload/pengajian/img/<?php echo $pengajian['feature_image']; ?>" class="img-thumbnail">
							    </div>
									<div class="col-sm-9 mt-3">
							    			<div class="custom-file">
											  <input type="file" class="custom-file-input" id="gambar" name="gambar">
											  <label class="custom-file-label" for="gambar" >Choose file</label>
											</div>
							    		</div>
							    	</div>
								   <div class="row mt-4">
								   	<div class="col-sm-6">
								    	<audio controls>
								    		<source src="<?php echo base_url(); ?>assets/img/upload/pengajian/audio/<?php echo $pengajian['audio_url']; ?>">
								    	</audio>
								    </div>
										<div class="col-sm-6 mt-2">
								    			<div class="custom-file">
												  <input type="file" class="custom-file-input" id="audio" name="audio">
												  <label class="custom-file-label" for="audio" >Choose file</label>
												</div>
								    		</div>
								    	</div>
								    	<iframe width="100%" height="315" src="<?php echo $pengajian['video_url']; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						    			<div class="form-group mt-3">
											  <label for="video">Video URL</label>
											    <input type="text" class="form-control" id="video" name="video" value="<?php echo $pengajian['video_url']; ?>">
											  <?php echo form_error('video', '<small class="text-danger pl-3">', '</small>'); ?>
										 </div>
								<hr class="sidebar-divider mt-5">
							<button type="submit" class="btn btn-primary float-right">Change</button>
							<a href="<?php echo base_url(); ?>pengajian" class="btn btn-secondary float-right mr-2">Back</a>
						</form>
					  </div>
					</div>
				</div>
			</div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->