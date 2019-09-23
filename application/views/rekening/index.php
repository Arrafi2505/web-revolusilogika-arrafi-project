



        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
		
			<div class="row">
				<div class="col-md-6">
					<?php echo $this->session->flashdata('message'); ?>

					<?php if(validation_errors()) : ?>
						<div class="alert alert-danger" role="alert">
						  <?php echo validation_errors(); ?>
						</div>
					<?php endif; ?>
				</div>
			</div>
          	<div class="row">
          		<div class="col-md-8">
          			<a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#addNewRekening">Add New Rekening</a>
          			<table class="table table-hover">
					  <thead>
					    <tr>
					      <th scope="col">#</th>
					      <th scope="col">Nama</th>
					      <th scope="col">No rekening</th>
					      <th scope="col">Bank</th>
					      <th scope="col">Icon</th>
					      <th scope="col">Action</th>
					    </tr>
					  </thead>
					  <tbody>
					  	<?php $i = 1; ?>
					  	<?php foreach($rekening as $r) : ?>
					    <tr>
					      <th scope="row"><?php echo $i; ?></th>
					      <td><?php echo $r['nama']; ?></td>
					      <td><?php echo $r['no_rekening']; ?></td>
					      <td><?php echo $r['bank']; ?></td>
					      <td><i class="<?php echo $r['icon_bank']; ?>"></i></td>
					      <td>
					      	<a href="<?php echo base_url(); ?>rekening/edit/<?php echo $r['id']; ?>" class="badge badge-success">edit</a>
					      	<a href="<?php echo base_url(); ?>rekening/delete/<?php echo $r['id']; ?>" class="badge badge-danger">delete</a>
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
		<div class="modal fade" id="addNewRekening" tabindex="-1" role="dialog" aria-labelledby="addNewRekeningLabel" aria-hidden="true">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="addNewRekeningLabel">Add New Rekening</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
		      	<form action="<?php echo base_url(); ?>rekening" method="post">
					<div class="form-group">
					    <label for="nama">Nama</label>
					    <input type="text" class="form-control" id="nama" name="nama">
					  </div>
					  <div class="form-group">
					    <label for="nama">No rekening</label>
					    <input type="number" class="form-control" id="rekening" name="rekening">
					  </div>
					   <div class="form-group">
					    <label for="nama">Bank</label>
					    <input type="text" class="form-control" id="bank" name="bank">
					  </div>
					<div class="form-group">
					    <label for="penulis">Icon Bank</label>
					    <input type="text" class="form-control" id="icon" name="icon">
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