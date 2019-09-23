

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>

          	<div class="row">
          		<div class="col-md">
          			<?php if(validation_errors()) : ?>
          				<div class="alert alert-danger" role="alert">
						  <?php echo validation_errors(); ?>
						</div>
          			<?php endif; ?>
          			<?php echo $this->session->flashdata('message'); ?>
          			<a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#exampleModal">Add New Submenu</a>

		          	<table class="table table-hover">
					  <thead>
					    <tr>
					      <th scope="col">#</th>
					      <th scope="col">Title</th>
					      <th scope="col">Menu</th>
					      <th scope="col">URL</th>
					      <th scope="col">Icon</th>
					      <th scope="col">Active</th>
					      <th scope="col">Action</th>
					    </tr>
					  </thead>
					  <tbody>
					  	<?php $i = 1; ?>
					  	<?php foreach($subMenu as $sm) : ?>
					    <tr>
					      <th scope="row"><?php echo $i; ?></th>
					      <td><?php echo $sm['judul']; ?></td>
					      <td><?php echo $sm['menu']; ?></td>
					      <td><?php echo $sm['url']; ?></td>
					      <td><i class="<?php echo $sm['icon']; ?>"></i></td>
					      <td><?php echo $sm['is_active']; ?></td>
					      <td>
					      	<a href="<?php echo base_url(); ?>menu/edit/sub_menu/<?php echo $sm['id']; ?>" class="badge badge-success">edit</a>
					      	<a href="<?php echo base_url(); ?>menu/delete/sub_menu/<?php echo $sm['id']; ?>" class="badge badge-danger" onclick="return confirm('delete data?')">delete</a>
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
		        <h5 class="modal-title" id="exampleModalLabel">Add New Submenu</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
		        <form action="<?php echo base_url(); ?>menu/submenu" method="post">
		        	<div class="form-group">
				    <input type="text" class="form-control" id="title" name="title" placeholder="Title name">
				  </div>
				  <div class="form-group">
				   <select name="menu_id" id="menu_id" class="form-control">
				   	<option value="">Select Menu</option>
				   	<?php foreach($menu as $m) : ?>
				   		<option value="<?php echo $m['id']; ?>"><?php echo $m['menu']; ?></option>
				   	<?php endforeach; ?>
				   </select>
				  </div>
				  <div class="form-group">
				    <input type="text" class="form-control" id="url" name="url" placeholder="URL name">
				  </div>
				  <div class="form-group">
				    <input type="text" class="form-control" id="icon" name="icon" placeholder="Icon name">
				  </div>
				   <div class="form-group">
				  	<label>Active?</label>
				  	<br>
					  <div class="form-check form-check-inline">
						 <input class="form-check-input" type="radio" name="active" id="active" value="1" checked>
						<label class="form-check-label" for="active">Yes</label>
					</div>
					<div class="form-check form-check-inline">
						 <input class="form-check-input" type="radio" name="active" id="active" value="0">
						<label class="form-check-label" for="active">No</label>
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