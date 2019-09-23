
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

					     <?php echo form_open_multipart('pengajian/insert');?>

							<div class="form-group">
								<label for="judul">Judul</label>
							    <input type="text" class="form-control" id="judul" name="judul" value="<?php echo set_value('judul'); ?>">
							     <?php echo form_error('judul', '<small class="text-danger pl-3">', '</small>'); ?>
							 </div>
						  <div class="form-group">
							    <label>Tanggal terbit</label>
							    	<div class="row">
							    		<div class="col-md">
							    		 <select class="form-control" name="day">
							    		 	<option value="">Select Day</option>
							    			<?php for($i = 1; $i <= 31; $i++) : ?>
									      		<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
									      	<?php endfor; ?>
									      </select>
							    		</div>
							    		<div class="col-md">
							    		 <select class="form-control" name="month">
							    		 	<option value="">Select Month</option>
							    		 	<?php foreach($bulan as $b) : ?>
							    		 		<option value="<?php echo $b['id']; ?>"><?php echo $b['bulan']; ?></option>
							    		 	<?php endforeach; ?>
									      </select>
							    		</div>
							    		<div class="col-md">
							    		 <select class="form-control" name="year">
							    		 	<option value="">Select Year</option>
							    			<?php for($x = 1989; $x <= 2030; $x++) : ?>
									      		<option value="<?php echo $x; ?>"><?php echo $x; ?></option>
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
								 <textarea class="form-control" name="deskripsi" id="deskripsi" rows="5"><?php echo set_value('deskripsi'); ?></textarea>
								  <?php echo form_error('deskripsi', '<small class="text-danger pl-3">', '</small>'); ?>
							  </div>
							  <div class="row">
							  	<div class="col-md">
							  		<label>Gambar</label>
									  <div class="custom-file">
										  <input type="file" class="custom-file-input" id="gambar" name="gambar" >
										  <label class="custom-file-label" for="gambar">Choose file</label>
									</div>
							  	</div>
							  	<div class="col-md">
							  		<label>Audio</label>
									  <div class="custom-file">
										  <input type="file" class="custom-file-input" id="audio" name="audio" >
										  <label class="custom-file-label" for="audio">Choose file</label>
									</div>
									 <?php echo form_error('audio', '<small class="text-danger pl-3">', '</small>'); ?>
							  	</div>
							  </div>
							  <div class="form-group mt-3">
								  <label for="video">Video URL</label>
								    <input type="text" class="form-control" id="video" name="video" value="<?php echo set_value('video'); ?>">
								  <?php echo form_error('video', '<small class="text-danger pl-3">', '</small>'); ?>
							 </div>
					  		<button type="submit" class="btn btn-primary float-right mt-3">Add Data</button>
						</form>
					  </div>
					</div>
				</div>
			</div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->