
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>

			<div class="row">
				<div class="col-md-8">
					<div class="card mb-3">
					  <div class="card-header">
					    Edit Produk
					  </div>
					  <div class="card-body">
					     <?php echo form_open_multipart('produk/edit/'.$produk['id']);?>

					<div class="form-group">
					    <label for="nama">Nama</label>
					    <input type="text" class="form-control" id="nama" name="nama" placeholder="Input nama" value="<?php echo $produk['nama']; ?>">
					     <?php echo form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
					  </div>
					  <div class="form-group">
					    <label>Tanggal terbit</label>
					    <?php $tanggal = explode('-', $produk['tanggal_terbit']); ?>
					    	<div class="row">
					    		<div class="col-md">
					    		 <select class="form-control" name="day">
					    		 	<option value="">Select Day</option>
					    			<?php for($i = 1; $i <= 31; $i++) : ?>
							      		<option value="<?php echo $i; ?>" <?php if($tanggal[2] == $i){echo "selected";} ?>><?php echo $i; ?></option>
							      	<?php endfor; ?>
							      </select>
					    		</div>
					    		<div class="col-md">
					    		 <select class="form-control" name="month">
					    		 	<option value="">Select Month</option>
					   					<?php foreach($bulan as $b) : ?>
					   						<option value="<?php echo $b['id']; ?>" <?php if($tanggal[1] == $b['id']){echo "selected";} ?>><?php echo $b['bulan'] ?></option>
					   					<?php endforeach; ?>
							      </select>
					    		</div>
					    		<div class="col-md">
					    		 <select class="form-control" name="year">
					    		 	<option value="">Select Year</option>
					    			<?php for($x = 1989; $x <= 2030; $x++) : ?>
							      		<option value="<?php echo $x; ?>" <?php if($tanggal[0] == $x){echo "selected";} ?>><?php echo $x; ?></option>
							      	<?php endfor; ?>
							      </select>
					    		</div>
					    	</div>
					    	<?php echo form_error('year', '<small class="text-danger pl-3">', '</small>'); ?>
					        <?php echo form_error('month', '<small class="text-danger pl-3">', '</small>'); ?>
					        <?php echo form_error('day', '<small class="text-danger pl-3">', '</small>'); ?>
					  </div>
					  <div class="form-group">
					     <label>Deskripsi</label>
						 <textarea class="form-control" name="deskripsi" id="deskripsi" rows="5"><?php echo $produk['deskripsi']; ?></textarea>
						  <?php echo form_error('deskripsi', '<small class="text-danger pl-3">', '</small>'); ?>
					  </div>
					  <div class="form-group">
					    <label for="harga">Harga</label>
					    <div class="row">
					    	<div class="col-md-2">
					    		<input type="text" class="form-control" id="rupiah" name="rupiah" placeholder="Input rupiah" value="Rp." readonly>
					    	</div>
					    	<div class="col-md-10">
					    		<input type="text" class="form-control" id="harga" name="harga" placeholder="Input harga" value="<?php echo $produk['harga']; ?>">
					    	</div>
					    	 <?php echo form_error('harga', '<small class="text-danger pl-3">', '</small>'); ?>
					    </div>
					  </div>
					  <label>Gambar</label>
					   <div class="col-sm-10">
						   <div class="row">
						   	<div class="col-sm-3">
						    	<img src="<?php echo base_url(); ?>assets/img/upload/produk/<?php echo $produk['gambar']; ?>" class="img-thumbnail">
						    </div>
								<div class="col-sm-9">
						    			<div class="custom-file">
										  <input type="file" class="custom-file-input" id="gambar" name="gambar">
										  <label class="custom-file-label" for="gambar" >Choose file</label>
										</div>
						    		</div>
						    	</div>
						    </div>
					<div class="form-group">
					    <label for="penulis">Penulis</label>
					    <input type="text" class="form-control" id="penulis" name="penulis" placeholder="Input penulis" value="<?php echo $produk['penulis']; ?>">
					     <?php echo form_error('penulis', '<small class="text-danger pl-3">', '</small>'); ?>
					  </div>
					  <hr class="sidebar-divider mt-5">
					  <button type="submit" class="btn btn-primary float-right">Change</button>
					  <a href="<?php echo base_url(); ?>produk" class="btn btn-secondary float-right mr-2">Back</a>
					</form>
					  </div>
					</div>
				</div>
			</div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->