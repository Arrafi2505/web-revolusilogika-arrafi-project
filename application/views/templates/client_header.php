<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo $judul; ?></title>
    <link rel="icon" href="<?php echo base_url(); ?>assets/img/icon.jpg">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/client/css/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/client/css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/client/css/owl.carousel.min.css">
    <!-- themify CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/client/css/themify-icons.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/client/css/flaticon.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/client/css/magnific-popup.css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/client/css/slick.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/client/css/style.css">
    <link href="<?php echo base_url(); ?>assets/admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <style>
        .tales {
            margin-top: 100px;
            width : 100%;
            height : 500px;
        }
        @media (min-width: 465px) and (max-width: 1200px) {
            .margin_top {
                margin-top: 100px;
            }
        }
         @media (min-width: 465px) and (max-width: 1400px) {
            .mt-150 {
                margin-top: 150px;
                margin-bottom : 150px;
            }
        }
         @media (min-width: 465px) and (max-width: 767px) {
            .text_center_only {
                text-align: center;
            }
        }
    </style>
</head>

<body>
    <!--::header part start::-->
    <header class="main_menu home_menu">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="<?php echo base_url(); ?>"> <img src="<?php echo base_url(); ?>assets/img/icon.jpg" alt="logo" width="200" height="60"> </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item justify-content-end"
                            id="navbarSupportedContent">
                            <ul class="navbar-nav align-items-center mr-auto">
                                <li class="nav-item active">
                                    <a class="nav-link" href="<?php echo base_url(); ?>client">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo base_url(); ?>client/about">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo base_url(); ?>client/produk">Produk</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo base_url(); ?>client/pengajian">Pengajian</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo base_url(); ?>client/contac">Kontak</a>
                                </li>
                                <?php if($this->session->userdata('email_member')) : ?>

                                    <?php $user = $this->db->get_where('tb_member', ['email' => $this->session->userdata('email_member')])->row_array(); ?>

                                     <ul class="navbar-nav" style="margin-left: 200px;">

                                        <div class="topbar-divider d-none d-sm-block"></div>

                                        <!-- Nav Item - User Information -->
                                        <li class="nav-item dropdown no-arrow">
                                          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $user['nama']; ?></span>
                                            <img class="img-profile rounded-circle" src="<?php echo base_url(); ?>assets/img/upload/member/<?php echo $user['gambar']; ?>" width="10%">
                                          </a>
                                          <!-- Dropdown - User Information -->
                                          <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                            <a class="dropdown-item" href="<?php echo base_url(); ?>client/profile">
                                              <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                              Profile
                                            </a>
                                            <a class="dropdown-item" href="<?php echo base_url(); ?>client/changePassword">
                                              <i class="fas fa-fw fa-key"></i>
                                              Change Password
                                            </a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                              <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                              Logout
                                            </a>
                                          </div>
                                        </li>

                                      </ul>
                                <?php else : ?>
                                     <li class="nav-item" style="margin-left: 380px;">
                                        <a class=" btn_1 float-right text-white" href="<?php echo base_url(); ?>client/formLogin">Login</a>
                                    </li>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header part end-->

    <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="<?php echo base_url(); ?>client/logout">Logout</a>
        </div>
      </div>
    </div>
  </div>