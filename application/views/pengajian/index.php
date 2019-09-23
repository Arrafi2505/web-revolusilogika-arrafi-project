

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

          		<div class="col-md">
	
					<a href="<?php echo base_url(); ?>pengajian/insert" class="btn btn-primary mb-3">Add New Data</a>

          			<table class="table table-hover">
					  <thead>
					    <tr>
					      <th scope="col">#</th>
					      <th scope="col">Image</th>
					      <th scope="col">Judul</th>
					      <th scope="col">Tanggal terbit</th>
					      <th scope="col">Deskripsi</th>
					      <th scope="col">Audio</th>
					      <th scope="col">Video</th>
					      <th scope="col">Action</th>
					    </tr>
					  </thead>
					  <tbody>
					  	<?php $i = 1; ?>
					  	<?php foreach($pengajian as $p) : ?>
					    <tr>
					      <th scope="row"><?php echo $i; ?></th>
					      <td><img src="<?php echo base_url(); ?>assets/img/upload/pengajian/img/<?php echo $p['feature_image']; ?>" width="50"></td>
					      <td><?php echo $p['judul']; ?></td>
					      <td><?php echo $p['tanggal_terbit']; ?></td>
					      <td><?php echo substr($p['deskripsi'],0,50); ?></td>
					      <td><?php echo $p['audio_url']; ?></td>
					      <td><?php echo $p['video_url']; ?></td>
					      <td>
					      	<a href="<?php echo base_url(); ?>pengajian/edit/<?php echo $p['id']; ?>" class="badge badge-success">edit</a>
					      	<a href="<?php echo base_url(); ?>pengajian/delete/<?php echo $p['id']; ?>" class="badge badge-danger">delete</a>
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