

    <!-- learning part start-->
    <section class="learning_part margin_top">
        <div class="container">
            <div class="row align-items-sm-center align-items-lg-stretch">
                <div class="col-md-7 col-lg-7">
                    <div class="learning_img">
                        <img src="<?php echo base_url(); ?>assets/img/learning_img.png" alt="">
                    </div>
                </div>
                <div class="col-md-5 col-lg-5">
                    <div class="learning_member_text">
                        <h5>Tentang Kami</h5>
                        <h2><?php echo $about[0]['judul_situs']; ?></h2>
                        <p>Fifth saying upon divide divide rule for deep their female all hath brind Days and beast
                            greater grass signs abundantly have greater also
                            days years under brought moveth.</p>
                        <ul>
                            <li><span class="ti-pencil-alt"></span>Him lights given i heaven second yielding seas
                                gathered wear</li>
                            <li><span class="ti-ruler-pencil"></span>Fly female them whales fly them day deep given
                                night.</li>
                        </ul>
                        <a href="#" class="btn_1">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- learning part end-->

    <!-- member_counter counter start -->
    <section class="member_counter">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="single_member_counter">
                        <span class="counter"><?php echo $about[0]['jml_teacher']; ?></span>
                        <h4>All Teachers</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_member_counter">
                        <span class="counter"><?php echo $about[0]['jml_online_student'] + $about[0]['jml_offline_student']; ?></span>
                        <h4> All Students</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_member_counter">
                        <span class="counter"><?php echo $about[0]['jml_online_student']; ?></span>
                        <h4>Online Students</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_member_counter">
                        <span class="counter"><?php echo $about[0]['jml_offline_student']; ?></span>
                        <h4>Ofline Students</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- member_counter counter end --> 