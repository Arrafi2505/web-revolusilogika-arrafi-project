
	<!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                            <h2>Our Courses</h2>
                            <p>Home<span>/</span>Courses</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->

    <div class="container my-5">
    	<div class="row justify-content-center">
    		<div class="col-md-6">
    			<div class="card">
				  <div class="card-header">
				    <?php echo $produk['nama']; ?>
				  </div>
				  <div class="card-body">
				    <div class="row">
				    	<div class="col-md">
				    		<img src="<?php echo base_url(); ?>assets/img/upload/produk/<?php echo $produk['gambar']; ?>" alt="">
				    	</div>
				    	<div class="col-md">
				    		 <?php if($produk['diskon'] > 0) : ?>                              
                              <?php 
                                    $harga = $produk['harga'] * $produk['diskon'] / 100;
                                    $hargaDiskon = $produk['harga'] - $harga;
                                 ?>
                                 <h2>Rp<?php echo number_format($hargaDiskon); ?></h2>
                                 <p class=""><s>Rp<?php echo number_format($produk['harga']); ?></s> - <?php echo $produk['diskon']; ?>%</p>                           
                             <?php else : ?>
                                <h2>Rp<?php echo number_format($produk['harga']); ?></h2>
                            <?php endif; ?>
                            <h4><?php echo $produk['nama']; ?></h4>
				    	</div>
				    </div>
				    <p class="mt-1"><?php echo $produk['deskripsi']; ?></p>
				    <hr>
				    <form action="" method="post">
				    	<div class="form-group">
						    <label for="nama">Nama</label>
						    <input type="text" class="form-control" id="nama" name="nama">
						      <?php echo form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
						<div class="form-group">
						    <label for="rekening">No Rekening</label>
						    <input type="number" class="form-control" id="rekening" name="rekening">
						      <?php echo form_error('rekening', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
						<fieldset class="form-group">
						    <div class="row">
						      <legend class="col-form-label col-sm-2 pt-0">Bank</legend>
						      <div class="col-sm-10">
						        <div class="form-check">
						          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
						          <label class="form-check-label" for="gridRadios1">
						            Mandiri
						          </label>
						        </div>
						        <div class="form-check">
						          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
						          <label class="form-check-label" for="gridRadios2">
						            BCA
						          </label>
						        </div>
						        <div class="form-check">
						          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3">
						          <label class="form-check-label" for="gridRadios3">
						            BRI
						          </label>
						        </div>
						      </div>
						    </div>
						  </fieldset>
						  <hr class="mt-5">
						  <button type="submit" class="btn btn-primary float-right">Beli sekarang</button>
						  <a href="<?php echo base_url(); ?>client/produk" class="btn btn-secondary float-right mr-1">Back</a>
				    </form>
				  </div>
				</div>
    		</div>
    	</div>
	</div>