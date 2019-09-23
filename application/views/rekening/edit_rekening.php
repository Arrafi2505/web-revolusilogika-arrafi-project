

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
			
			<div class="row">
				<div class="col-md-6">
					<div class="card">
					  <div class="card-header">
					    Edit Rekening
					  </div>
					  <div class="card-body">
					   	<form action="" method="post">
								<div class="form-group">
								    <label for="nama">Nama</label>
								    <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $rekening['nama']; ?>">
								    <?php echo form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
								  </div>
								  <div class="form-group">
								    <label for="nama">No rekening</label>
								    <input type="number" class="form-control" id="rekening" name="rekening" value="<?php echo $rekening['no_rekening']; ?>">
								    <?php echo form_error('rekening', '<small class="text-danger pl-3">', '</small>'); ?>
								  </div>
								   <div class="form-group">
								    <label for="nama">Bank</label>
								    <input type="text" class="form-control" id="bank" name="bank" value="<?php echo $rekening['bank']; ?>">
								    <?php echo form_error('bank', '<small class="text-danger pl-3">', '</small>'); ?>
								  </div>
								<div class="form-group">
								    <label for="penulis">Icon Bank</label>
								    <input type="text" class="form-control" id="icon" name="icon" value="<?php echo $rekening['icon_bank']; ?>">
								    <?php echo form_error('icon', '<small class="text-danger pl-3">', '</small>'); ?>
							  </div>
							<hr class="sidebar-divider mt-5">
						  <button type="submit" name="submit" class="btn btn-primary float-right">Change</button>
						  <a href="<?php echo base_url(); ?>rekening" class="btn btn-secondary float-right mr-2">Back</a>
					    </form>
					  </div>
					</div>
				</div>
			</div>          

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->