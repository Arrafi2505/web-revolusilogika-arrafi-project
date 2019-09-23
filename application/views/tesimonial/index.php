

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

					<?php echo $this->session->flashdata('message'); ?>
				</div>

				<div class="col-md">
					
					<a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#addNewTesimonial">Add New Tesimonial</a>

					<table class="table table-hover">
					  <thead>
					    <tr>
					      <th scope="col">#</th>
					      <th scope="col">Image</th>
					      <th scope="col">Nama</th>
					      <th scope="col">Pekerjaan</th>
					      <th scope="col">Tesimonial</th>
					      <th scope="col">Action</th>
					    </tr>
					  </thead>
					  <tbody>
					  	<?php $i = 1; ?>
					  	<?php foreach($tesimonials as $t) : ?>
					    <tr>
					      <th scope="row"><?php echo $i; ?></th>
					      <td><img src="<?php echo base_url(); ?>assets/img/upload/tesimonial/<?php echo $t['foto_url']; ?>" alt="" width="50"></td>
					      <td><?php echo $t['nama']; ?></td>
					      <td><?php echo $t['pekerjaan']; ?></td>
					      <td><?php echo substr($t['tesimonial'],0,75); ?></td>
					      <td>
					      	<a href="<?php echo base_url(); ?>tesimonial/edit/<?php echo $t['id']; ?>" class="badge badge-success">edit</a>
					      	<a href="<?php echo base_url(); ?>tesimonial/delete/<?php echo $t['id']; ?>" class="badge badge-danger">delete</a>
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
		<div class="modal fade" id="addNewTesimonial" tabindex="-1" role="dialog" aria-labelledby="addNewTesimonialLabel" aria-hidden="true">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="addNewTesimonialLabel">Add New Tesimonial</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
		        <?php echo form_open_multipart('tesimonial');?>
		        	<div class="form-group">
					    <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama">
					</div>
					<div class="form-group">
					    <input type="text" class="form-control" name="pekerjaan" id="pekerjaan" placeholder="Pekerjaan">
					</div>
					<label>Gambar</label>
					  <div class="custom-file">
						  <input type="file" class="custom-file-input" id="gambar" name="gambar" >
						  <label class="custom-file-label" for="gambar">Choose file</label>
					</div>
					<div class="form-group mt-4">
						 <textarea class="form-control" name="tesimonial" id="tesimonial" rows="5" placeholder="Input text...."></textarea>
					  </div>
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		        <button type="submit" name="submit" class="btn btn-primary">Add</button>
		      </div>
		     </form>
		    </div>
		  </div>
		</div>