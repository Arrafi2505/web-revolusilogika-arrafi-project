 <!--::review_part start::-->
    <section class="special_cource padding_top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5">
                    <div class="section_tittle text-center">
                        <p>Produk</p>
                        <h2>Other Produk</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php foreach($produk as $p) : ?>

                    <div class="col-sm-6 col-lg-4">
                    <div class="single_special_cource">
                        <img src="<?php echo base_url(); ?>assets/img/upload/produk/<?php echo $p['gambar']; ?>" class="special_img" alt="" width="360" height="313">
                        <div class="special_cource_text">
                            <a href="" class="btn_4">Beli</a>
                            <?php if($p['diskon'] > 0) : ?>                              
                              <?php 
                                    $harga = $p['harga'] * $p['diskon'] / 100;
                                    $hargaDiskon = $p['harga'] - $harga;
                                 ?>
                                 <h4>Rp<?php echo number_format($hargaDiskon); ?></h4>
                                 <p class="float-right ml-5"><s>Rp<?php echo number_format($p['harga']); ?></s> - <?php echo $p['diskon']; ?>%</p>                           
                             <?php else : ?>
                                <h4>Rp<?php echo number_format($p['harga']); ?></h4>
                            <?php endif; ?>
                            <a href=""><h3><?php echo $p['nama']; ?></h3></a>
                            <p><?php echo substr($p['deskripsi'],0,100) ?></p>
                            <div class="author_info">
                                <div class="author_img">
                                    <img src="<?php echo base_url(); ?>assets/img/author/author_1.png" alt="">
                                    <div class="author_info_text">
                                        <p>Conduct by:</p>
                                        <h5><a href="#">James Well</a></h5>
                                    </div>
                                </div>
                                <div class="author_rating">
                                    <div class="rating">
                                        <a href="#"><img src="<?php echo base_url(); ?>assets/img/icon/color_star.svg" alt=""></a>
                                        <a href="#"><img src="<?php echo base_url(); ?>assets/img/icon/color_star.svg" alt=""></a>
                                        <a href="#"><img src="<?php echo base_url(); ?>assets/img/icon/color_star.svg" alt=""></a>
                                        <a href="#"><img src="<?php echo base_url(); ?>assets/img/icon/color_star.svg" alt=""></a>
                                        <a href="#"><img src="<?php echo base_url(); ?>assets/img/icon/star.svg" alt=""></a>
                                    </div>
                                    <p>3.8 Ratings</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <!--::blog_part end::-->