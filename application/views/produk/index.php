


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
          		<div class="col-md">
          			<a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#addNewProduk">Add New Produk</a>
          			<table class="table table-hover">
					  <thead>
					    <tr>
					      <th scope="col">#</th>
					      <th scope="col">Nama</th>
					      <th scope="col">Tanggal terbit</th>
					      <th scope="col">Deskripsi</th>
					      <th scope="col">Harga</th>
					      <th scope="col">gambar</th>
					      <th scope="col">Penulis</th>
					      <th scope="col">Diskon</th>
					      <th scope="col">Action</th>
					    </tr>
					  </thead>
					  <tbody>
					  	<?php $i = 1; ?>
					  	<?php foreach($produk as $p) : ?>
					    <tr>
					      <th scope="row"><?php echo $i; ?></th>
					      <td><?php echo $p['nama']; ?></td>
					      <td><?php echo $p['tanggal_terbit']; ?></td>
					      <td><?php echo substr($p['deskripsi'],0,75); ?> ......</td>
					      <td><?php echo $p['harga']; ?></td>
					      <td><img src="<?php echo base_url(); ?>assets/img/upload/produk/<?php echo $p['gambar']; ?>" class="img-thumbnail" width="100"></td>
					      <td><?php echo $p['penulis']; ?></td>
					      <td><?php echo $p['diskon']; ?></td>
					      <td>
					      	<a href="<?php echo base_url(); ?>produk/edit/<?php echo $p['id']; ?>" class="badge badge-success">edit</a>
					      	<a href="<?php echo base_url(); ?>produk/delete/<?php echo $p['id']; ?>" class="badge badge-danger">delete</a>
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
		<div class="modal fade" id="addNewProduk" tabindex="-1" role="dialog" aria-labelledby="addNewProdukLabel" aria-hidden="true">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="addNewProdukLabel">Add New Produk</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
		        <?php echo form_open_multipart('produk');?>

					<div class="form-group">
					    <label for="nama">Nama</label>
					    <input type="text" class="form-control" id="nama" name="nama" placeholder="Input nama">
					  </div>
					  <div class="form-group">
					    <label>Tanggal terbit</label>
					    	<div class="row">
					    		<div class="col-md">
					    		 <select class="form-control" name="day">
					    		 	<option value="">Select Day</option>
					    			<?php for($i = 1; $i <= 31; $i++) : ?>
							      		<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
							      	<?php endfor; ?>
							      </select>
					    		</div>
					    		<div class="col-md">
					    		 <select class="form-control" name="month">
					    		 	<option value="">Select Month</option>
					    		 	<?php foreach($bulan as $b) : ?>
					    		 		<option value="<?php echo $b['id']; ?>"><?php echo $b['bulan']; ?></option>
					    		 	<?php endforeach; ?>
							      </select>
					    		</div>
					    		<div class="col-md">
					    		 <select class="form-control" name="year">
					    		 	<option value="">Select Year</option>
					    			<?php for($x = 1989; $x <= 2030; $x++) : ?>
							      		<option value="<?php echo $x; ?>"><?php echo $x; ?></option>
							      	<?php endfor; ?>
							      </select>
					    		</div>
					    	</div>
					  </div>
					  <div class="form-group">
					     <label>Deskripsi</label>
						 <textarea class="form-control" name="deskripsi" id="deskripsi" rows="5"></textarea>
					  </div>
					  <div class="form-group">
					    <label for="harga">Harga</label>
					    <div class="row">
					    	<div class="col-md-2">
					    		<input type="text" class="form-control" id="rupiah" name="rupiah" placeholder="Input rupiah" value="Rp." readonly>
					    	</div>
					    	<div class="col-md-10">
					    		<input type="text" class="form-control" id="harga" name="harga" placeholder="Input harga">
					    	</div>
					    </div>
					  </div>
					  <label>Gambar</label>
					  <div class="custom-file">
						  <input type="file" class="custom-file-input" id="gambar" name="gambar" >
						  <label class="custom-file-label" for="gambar">Choose file</label>
						</div>

					<div class="form-group">
					    <label for="penulis">Penulis</label>
					    <input type="text" class="form-control" id="penulis" name="penulis" placeholder="Input penulis">
					  </div>
					  <div class="form-group">
					    <label for="diskon">Diskon</label>
					    <input type="text" class="form-control" id="diskon" name="diskon" placeholder="Input diskon" value="0">
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