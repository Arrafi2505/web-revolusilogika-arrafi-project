 <!--::blog_part start::-->
    <section class="blog_part section_padding">
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
                             <iframe width="100%" height="313" src="<?php echo $p['video_url']; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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