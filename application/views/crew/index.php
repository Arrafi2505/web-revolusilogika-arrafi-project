

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>

          	<div class="row">
          		<div class="col-md-7">

          			<?php if(validation_errors()) : ?>
          				<div class="alert alert-danger" role="alert">
					  		<?php echo validation_errors(); ?>
						</div>
          			<?php endif; ?>

          			<?php echo $this->session->flashdata('message') ?>
	
					<a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#addNewCrew">Add New Crew</a>

          			<table class="table table-hover">
					  <thead>
					    <tr>
					      <th scope="col">#</th>
					      <th scope="col">Image</th>
					      <th scope="col">Nama</th>
					      <th scope="col">Jabatan</th>
					      <th scope="col">Action</th>
					    </tr>
					  </thead>
					  <tbody>
					  	<?php $i = 1; ?>
					  	<?php foreach($crew as $c) : ?>
					    <tr>
					      <th scope="row"><?php echo $i; ?></th>
					      <td><img src="<?php echo base_url(); ?>assets/img/upload/crew/<?php echo $c['foto']; ?>" width="50"></td>
					      <td><?php echo $c['nama']; ?></td>
					      <td><?php echo $c['jabatan']; ?></td>
					      <td>
					      	<a href="<?php echo base_url(); ?>crew/edit/<?php echo $c['id']; ?>" class="badge badge-success">edit</a>
					      	<a href="<?php echo base_url(); ?>crew/delete/<?php echo $c['id']; ?>" class="badge badge-danger">delete</a>
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
		        <?php echo form_open_multipart('crew');?>

					<div class="form-group">
					    <label for="nama">Nama</label>
					    <input type="text" class="form-control" id="nama" name="nama">
					 </div>
				  <div class="form-group">
				    <label for="jabatan">Pekerjaan</label>
				    	<input type="text" class="form-control" id="jabatan" name="jabatan">
				 </div>
				 <label>Gambar</label>
					  <div class="custom-file">
						  <input type="file" class="custom-file-input" id="gambar" name="gambar" >
						  <label class="custom-file-label" for="gambar">Choose file</label>
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