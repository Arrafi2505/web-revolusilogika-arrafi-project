 <!--::blog_part start::-->
    <section class="blog_part section_padding margin_top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5">
                    <div class="section_tittle text-center">
                        <p>Our Blog</p>
                        <h2>Students Blog</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php foreach($pengajian as $p) : ?>
                <div class="col-sm-6 col-lg-4 col-xl-4">
                    <div class="single-home-blog">
                        <div class="card">
                             <img src="<?php echo base_url(); ?>assets/img/upload/pengajian/img/<?php echo $p['feature_image']; ?>" class="img-thumbnail" alt="" height="313">
                            <div class="card-body">
                                <a href="<?php echo base_url(); ?>client/detail_pengajian/<?php echo $p['id']; ?>">
                                    <h5 class="card-title"><?php echo $p['judul']; ?></h5>
                                </a>
                                <p><?php echo substr($p['deskripsi'],0,100); ?> ......</p>
                                <ul>
                                    <li> <span class="ti-comments"></span>2 Comments</li>
                                    <li> <span class="ti-heart"></span>2k Like</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <!--::blog_part end::-->