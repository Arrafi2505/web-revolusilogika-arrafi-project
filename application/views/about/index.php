


        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
		
			<div class="row">
				<div class="col-md-6">
					<?php echo $this->session->flashdata('message'); ?>
				</div>
			</div>
          	<div class="row">
          		<div class="col-md">
          			<table class="table table-hover table-responsive">
					  <thead>
					    <tr>
					      <th scope="col">#</th>
					      <th scope="col">Judul</th>
					      <th scope="col">Email</th>
					      <th scope="col">Slogan</th>
					      <th scope="col">Icon small</th>
					      <th scope="col">Icon large</th>
					      <th scope="col">Icon square</th>
					      <th scope="col">WhatsApp</th>
					      <th scope="col">Telepon</th>
					      <th scope="col">Alamat</th>
					      <th scope="col">Location</th>
					      <th scope="col">Online student</th>
					      <th scope="col">Offline student</th>
					      <th scope="col">Teacher</th>
					      <th scope="col">Action</th>
					    </tr>
					  </thead>
					  <tbody>
					  	<?php $i = 1; ?>
					  	<?php foreach($about as $a) : ?>
					    <tr>
					      <th scope="row"><?php echo $i; ?></th>
					      <td><?php echo $a['judul_situs']; ?></td>
					      <td><?php echo $a['email_address']; ?></td>
					      <td><?php echo $a['slogan']; ?></td>
					      <td><?php echo $a['icon_small']; ?></td>
					      <td><?php echo $a['icon_large']; ?></td>
					      <td><?php echo $a['icon_square']; ?></td>
					      <td><?php echo $a['whatsapp']; ?></td>
					      <td><?php echo $a['telpon']; ?></td>
					      <td><?php echo $a['alamat']; ?></td>
					      <td><?php echo $a['map_location']; ?></td>
					      <td><?php echo $a['jml_online_student']; ?></td>
					      <td><?php echo $a['jml_offline_student']; ?></td>
					      <td><?php echo $a['jml_teacher']; ?></td>
					      <td>
					      	<a href="<?php echo base_url(); ?>about/edit/<?php echo $a['id']; ?>" class="badge badge-success">edit</a>
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