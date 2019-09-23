

    <div class="bd-example">
      <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="<?php echo base_url(); ?>assets/img/special_cource_1.png" class="d-block w-100 tales" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>First slide label</h5>
              <p class="text-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo, repellendus natus cumque maiores error dolorem ex cupiditate quos esse doloremque iusto, fugit nam. Obcaecati magni odit nihil optio suscipit consequuntur quo eveniet, similique illo labore atque, dolor! Veniam beatae temporibus assumenda ut dicta repudiandae maxime optio minima fugit, at similique, esse nobis, tempora rem consequatur perspiciatis facere! Asperiores soluta quia tenetur. Ad iusto ullam quasi nam esse similique, perspiciatis rerum qui sit aliquid repellendus nobis, cumque, reiciendis nisi deleniti natus. Minima aperiam repudiandae ducimus nobis similique sequi voluptatum ipsa, necessitatibus maiores nesciunt ad. Iusto repellat nobis mollitia quasi. Rem, asperiores.</p>
            </div>
          </div>
          <?php foreach($carousel as $c) : ?>
          <div class="carousel-item">
            <img src="<?php echo base_url(); ?>assets/img/upload/carousel/<?php echo $c['image_url']; ?>" class="d-block w-100 tales" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5><?php echo $c['judul']; ?></h5>
              <p class="text-dark font-weight-bold"><?php echo $c['deskripsi']; ?></p>
            </div>
          </div>
      <?php endforeach; ?>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>

    <!-- banner part start-->
    <section class="banner_part">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-xl-6">
                    <div class="banner_text">
                        <div class="banner_text_iner">
                          <!--   <h5>Every child yearns to learn</h5> -->
                            <h1>Yayasan Darul Muttaqien</h1>
                            <p>Replenish seasons may male hath fruit beast were seas saw you arrie said man beast whales
                                his void unto last session for bite. Set have great you'll male grass yielding yielding
                                man</p>
<!--                             <a href="#" class="btn_1">View Course </a>
                            <a href="#" class="btn_2">Get Started </a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner part start-->