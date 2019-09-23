

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>

          	<div class="row">
          		<div class="col-md-6">

          			<?php if(validation_errors()) : ?>
          				<div class="alert alert-danger" role="alert">
					  		<?php echo validation_errors(); ?>
						</div>
          			<?php endif; ?>

          			<?php echo $this->session->flashdata('message') ?>

          		</div>

          		<div class="col-md-10">
	
					<a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#addNewCrew">Add New Carousel</a>

          			<table class="table table-hover">
					  <thead>
					    <tr>
					      <th scope="col">#</th>
					      <th scope="col">Image</th>
					      <th scope="col">Judul</th>
					      <th scope="col">Deskripsi</th>
					      <th scope="col">Visible</th>
					      <th scope="col">Action</th>
					    </tr>
					  </thead>
					  <tbody>
					  	<?php $i = 1; ?>
					  	<?php foreach($carousel as $c) : ?>
					    <tr>
					      <th scope="row"><?php echo $i; ?></th>
					      <td><img src="<?php echo base_url(); ?>assets/img/upload/carousel/<?php echo $c['image_url']; ?>" width="50"></td>
					      <td><?php echo $c['judul']; ?></td>
					      <td><?php echo substr($c['deskripsi'],0,100); ?></td>
					      <td><?php echo $c['visible']; ?></td>
					      <td>
					      	<a href="<?php echo base_url(); ?>carousel/edit/<?php echo $c['id']; ?>" class="badge badge-success">edit</a>
					      	<a href="<?php echo base_url(); ?>carousel/delete/<?php echo $c['id']; ?>" class="badge badge-danger">delete</a>
					      </td>
					    </tr>
					    <?php $i++; ?>
						<?php endforeach; ?>
					  </tbody>
					</table>
          		</div>
          	</div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

		<!-- Modal -->
		<div class="modal fade" id="addNewCrew" tabindex="-1" role="dialog" aria-labelledby="addNewCrewLabel" aria-hidden="true">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="addNewCrewLabel">Add New Crew</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
		        <?php echo form_open_multipart('carousel');?>

					<div class="form-group">
					    <label for="judul">Judul</label>
					    <input type="text" class="form-control" id="judul" name="judul">
					 </div>
				  <div class="form-group">
					     <label>Deskripsi</label>
						 <textarea class="form-control" name="deskripsi" id="deskripsi" rows="5"></textarea>
					  </div>
				 <label>Gambar</label>
					  <div class="custom-file">
						  <input type="file" class="custom-file-input" id="gambar" name="gambar" >
						  <label class="custom-file-label" for="gambar">Choose file</label>
					</div>
					<div class="form-group mt-3">
				  	<label>Visible</label>
				  	<br>
					  <div class="form-check form-check-inline">
						 <input class="form-check-input" type="radio" name="visible" id="visible" value="1" checked>
						<label class="form-check-label" for="visible">Yes</label>
					</div>
					<div class="form-check form-check-inline">
						 <input class="form-check-input" type="radio" name="visible" id="visible" value="0">
						<label class="form-check-label" for="visible">No</label>
					</div>
				</div>
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		        <button type="submit" class="btn btn-primary">Add</button>
		      </div>
		  	 </form>
		    </div>
		  </div>
		</div>