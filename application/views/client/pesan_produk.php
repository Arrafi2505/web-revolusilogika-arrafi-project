
	<div class="container mt-150">
		<div class="row">
			<div class="col-md-8">
				<div class="row">
					<div class="col-md-4">
						<img src="<?php echo base_url(); ?>assets/img/upload/produk/<?php echo $produk['gambar']; ?>" alt="" class="img-thumbnail" width="100%" style="height: 200px;">
					</div>
					<div class="col-md-8">
						<h1><?php echo $produk['nama']; ?></h1>
						<?php if($produk['diskon'] > 0) : ?>                              
                              <?php 
                                    $harga = $produk['harga'] * $produk['diskon'] / 100;
                                    $hargaDiskon = $produk['harga'] - $harga;
                                 ?>
                                 <h3 class="mt-2">Rp<?php echo number_format($hargaDiskon); ?></h3>
                                 <p><s>Rp<?php echo number_format($produk['harga']); ?></s> - <?php echo $produk['diskon']; ?>%</p>                           
                             <?php else : ?>
                                <h3>Rp<?php echo number_format($produk['harga']); ?></h3>
                            <?php endif; ?>
                            <form action="" method="post">
                            	<div class="form-group row">
								    <label for="kuantitas" class="col-sm-2 col-form-label">Kuantitas</label>
								    <div class="col-sm-10">
								      <input type="number" class="form-control" id="kuantitas" name="
								      kuantitas" placeholder="Password" value="1">
								    </div>
								  </div>
								  <?php if($this->session->userdata('email')) : ?>
								  	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-fw fa-shopping-cart"></i> Beli</button>
								  <?php else : ?>
								  	<button type="submit" class="btn btn-primary"><i class="fa fa-fw fa-shopping-cart"></i> Beli</button>
								  <?php endif; ?>
                            </form>
					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        Silahkan login untuk melanjutkan
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
	        <a href="client/formLogin" class="btn btn-primary">OK</a>
	      </div>
	    </div>
	  </div>
	</div>