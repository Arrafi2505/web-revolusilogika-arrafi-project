

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>

          	<div class="row">
          		<div class="col-md-6">
          			<?php echo $this->session->flashdata('message'); ?>
          		</div>
          	</div>
			
				<div class="card mb-3" style="max-width: 540px;">
				  <div class="row no-gutters">
				    <div class="col-md-4">
				      <img src="<?php echo base_url(); ?>assets/img/<?php echo $user['gambar']; ?>" class="card-img" alt="...">
				    </div>
				    <div class="col-md-8">
				      <div class="card-body">
				        <h5 class="card-title"><?php echo $user['nama']; ?></h5>
				        <p class="card-text"><?php echo $user['email'] ?></p>
				        <p class="card-text"><small class="text-muted">Member since <?php echo date('d F Y', $user['date_created']); ?></small></p>
				      </div>
				    </div>
				  </div>
				</div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->