

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
			
			<div class="row">
				<div class="col-md-6">
					<div class="card">
					  <div class="card-header">
					    Edit Menu
					  </div>
					  <div class="card-body">
					    <form action="" method="post">
					    	<div class="form-group">
					    	<label for="menu">Menu name</label>
						    <input type="text" class="form-control" id="menu" name="menu" placeholder="Menu name" value="<?php echo $menu['menu']; ?>">
						    <?php echo form_error('menu', '<small class="text-danger pl-3">', '</small>'); ?>
						  </div>
						  <hr class="sidebar-divider mt-5">
						  <button type="submit" name="submit" class="btn btn-primary float-right">Change</button>
						  <a href="<?php echo base_url(); ?>menu" class="btn btn-secondary float-right mr-2">Back</a>
					    </form>
					  </div>
					</div>
				</div>
			</div>          

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->