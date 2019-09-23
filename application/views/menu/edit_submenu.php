

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
			
			<div class="row">
				<div class="col-md-6">
					<div class="card">
					  <div class="card-header">
					    Edit Submenu
					  </div>
					  <div class="card-body">
					    <form action="" method="post">
					    	<div class="form-group">
							    <input type="text" class="form-control" id="title" name="title" placeholder="Menu name" value="<?php echo $subMenu['judul']; ?>">
							    <?php echo form_error('title', '<small class="text-danger pl-3">', '</small>'); ?>
							  </div>
							  <div class="form-group">
							   <select name="menu_id" id="menu_id" class="form-control">
							   	<option value="">Select Menu</option>
							   	<?php foreach($menu as $m) : ?>
							   		<option value="<?php echo $m['id']; ?>" <?php if($subMenu
							   			['menu_id'] == $m['id']){echo "selected";} ?>><?php echo $m['menu']; ?></option>
							   	<?php endforeach; ?>
							   </select>
							   <?php echo form_error('menu_id', '<small class="text-danger pl-3">', '</small>'); ?>
							  </div>
							  <div class="form-group">
							    <input type="text" class="form-control" id="url" name="url" placeholder="URL name" value="<?php echo $subMenu['url']; ?>">
							    <?php echo form_error('url', '<small class="text-danger pl-3">', '</small>'); ?>
							  </div>
							   <div class="form-group">
							    <input type="text" class="form-control" id="icon" name="icon" placeholder="Icon name" value="<?php echo $subMenu['icon']; ?>">
							    <?php echo form_error('icon', '<small class="text-danger pl-3">', '</small>'); ?>
							  </div>
							  <div class="form-group">
								  	<label>Active?</label>
								  	<br>
									  <div class="form-check form-check-inline">
										 <input class="form-check-input" type="radio" name="active" id="active" value="1" <?php if($subMenu['is_active'] == 1){echo "checked";} ?>>
										<label class="form-check-label" for="active">Yes</label>
									</div>
									<div class="form-check form-check-inline">
										 <input class="form-check-input" type="radio" name="active" id="active" value="0" <?php if($subMenu['is_active'] == 0){echo "checked";} ?>>
										<label class="form-check-label" for="active">No</label>
									</div>
								</div>
							<hr class="sidebar-divider mt-5">
						  <button type="submit" name="submit" class="btn btn-primary float-right">Change</button>
						  <a href="<?php echo base_url(); ?>menu/submenu" class="btn btn-secondary float-right mr-2">Back</a>
					    </form>
					  </div>
					</div>
				</div>
			</div>          

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->