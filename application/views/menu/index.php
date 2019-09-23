

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
          			<?php echo $this->session->flashdata('message'); ?>
          			<a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#exampleModal">Add New Menu</a>

		          	<table class="table table-hover">
					  <thead>
					    <tr>
					      <th scope="col">#</th>
					      <th scope="col">Menu</th>
					      <th scope="col">Action</th>
					    </tr>
					  </thead>
					  <tbody>
					  	<?php $i = 1; ?>
					  	<?php foreach($menu as $m) : ?>
					    <tr>
					      <th scope="row"><?php echo $i; ?></th>
					      <td><?php echo $m['menu']; ?></td>
					      <td>
					      	<a href="<?php echo base_url(); ?>menu/edit/user_menu/<?php echo $m['id']; ?>" class="badge badge-success">edit</a>
					      	<a href="<?php echo base_url(); ?>menu/delete/user_menu/<?php echo $m['id']; ?>" class="badge badge-danger" onclick="return confirm('delete data?')">delete</a>
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
		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLabel">Add New Menu</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
		        <form action="<?php echo base_url(); ?>menu" method="post">
		        	<div class="form-group">
				    <input type="text" class="form-control" id="menu" name="menu" placeholder="Menu name">
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