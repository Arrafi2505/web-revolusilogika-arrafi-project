   <!-- breadcrumb start-->
<!--     <section class="breadcrumb breadcrumb_bg">
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
    </section> -->
    <!-- breadcrumb start-->

    <!--================Blog Area =================-->
    <section class="blog_area section_padding margin_top">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <div class="blog_left_sidebar">
                        <article class="blog_item">
                            <div class="blog_item_img">
                                <iframe width="100%" height="313" src="<?php echo $pengajian['video_url']; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>

                            <div class="blog_details">
                                <h2><?php echo $pengajian['judul']; ?></h2>
                                <p><?php echo $pengajian['deskripsi']; ?></p>
                                
                                <h2>Audio</h2>
                                <audio controls>
                                    <source src="<?php echo base_url(); ?>assets/img/upload/pengajian/audio/<?php echo $pengajian['audio_url']; ?>" type="<?php echo $pengajian['type_audio']; ?>">
                                </audio>
                            </div>
                        </article>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog_right_sidebar">
                        <aside class="single_sidebar_widget popular_post_widget">
                            <h3 class="widget_title">Recent Post</h3>
                            <?php foreach($pengajians as $p) : ?>
                            <div class="media post_item">
                                <img src="<?php echo base_url(); ?>assets/img/upload/pengajian/img/<?php echo $p['feature_image']; ?>" alt="post" width="50%" height="60">
                                <div class="media-body">
                                    <a href="<?php echo base_url(); ?>client/detail_pengajian/<?php echo $p['id']; ?>">
                                        <h3><?php echo $p['judul']; ?></h3>
                                    </a>
                                    <p><?php echo date('d F Y', strtotime($p['tanggal_terbit'])); ?></p>
                                </div>
                            </div>
                        <?php endforeach; ?>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================Blog Area =================-->