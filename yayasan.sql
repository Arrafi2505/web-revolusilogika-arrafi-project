-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 23, 2019 at 04:29 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yayasan`
--

-- --------------------------------------------------------

--
-- Table structure for table `sub_menu`
--

CREATE TABLE `sub_menu` (
  `id` int(11) NOT NULL,
  `judul` varchar(128) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_menu`
--

INSERT INTO `sub_menu` (`id`, `judul`, `menu_id`, `url`, `icon`, `is_active`) VALUES
(1, 'Dashboard', 1, 'admin', 'fas fa-fw fa-tachometer-alt', 1),
(2, 'My Profile', 2, 'user', 'fas fa-fw fa-user', 1),
(3, 'Menu Management', 3, 'menu', 'fas fa-fw fa-folder', 1),
(4, 'Submenu Management', 3, 'menu/submenu', 'fas fa-fw fa-folder-open', 1),
(5, 'Edit Profile', 2, 'user/edit', 'fas fa-user-edit', 1),
(6, 'Change Password', 2, 'user/changepassword', 'fas fa-fw fa-key', 1),
(7, 'Produk', 4, 'produk', 'fab fa-fw fa-product-hunt', 1),
(8, 'Tesimonial', 4, 'tesimonial', 'fas fa-fw fa-users', 1),
(9, 'Crew', 4, 'crew', 'fas fa-fw fa-user-tie', 1),
(10, 'Pengajian', 4, 'pengajian', 'fas fa-fw fa-quran', 1),
(11, 'Carousel', 4, 'carousel', 'fas fa-fw fa-images', 1),
(12, 'Rekening', 4, 'rekening', 'fas fa-fw fa-book', 1),
(13, 'About', 4, 'about', 'fas fa-fw fa-info-circle', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_about`
--

CREATE TABLE `tb_about` (
  `id` int(11) NOT NULL,
  `judul_situs` varchar(128) NOT NULL,
  `email_address` varchar(128) NOT NULL,
  `slogan` varchar(128) NOT NULL,
  `icon_small` varchar(128) NOT NULL,
  `icon_large` varchar(128) NOT NULL,
  `icon_square` varchar(128) NOT NULL,
  `whatsapp` varchar(128) NOT NULL,
  `telpon` varchar(128) NOT NULL,
  `alamat` varchar(128) NOT NULL,
  `map_location` varchar(128) NOT NULL,
  `jml_online_student` int(11) NOT NULL,
  `jml_offline_student` int(11) NOT NULL,
  `jml_teacher` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_about`
--

INSERT INTO `tb_about` (`id`, `judul_situs`, `email_address`, `slogan`, `icon_small`, `icon_large`, `icon_square`, `whatsapp`, `telpon`, `alamat`, `map_location`, `jml_online_student`, `jml_offline_student`, `jml_teacher`) VALUES
(1, 'Yayasan Darul Muttaqien', 'lorem123@gmail.com', 'lorem ipsum dolor', 'lorem ipsum dolor lorem', 'lorem ipsum dolor lorem', 'lorem ipsum dolor lorem', '081849743489', '085787925666', 'lorem ipsum dolor', 'Lorem ipsum dolor', 780, 620, 150);

-- --------------------------------------------------------

--
-- Table structure for table `tb_bulan`
--

CREATE TABLE `tb_bulan` (
  `id` int(11) NOT NULL,
  `bulan` varchar(128) NOT NULL,
  `value` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_bulan`
--

INSERT INTO `tb_bulan` (`id`, `bulan`, `value`) VALUES
(1, 'Januari', '01'),
(2, 'Februari', '02'),
(3, 'Maret', '03'),
(4, 'April', '04'),
(5, 'Mei', '05'),
(6, 'Juni', '06'),
(7, 'Juli', '07'),
(8, 'Agustus', '08'),
(9, 'September', '09'),
(10, 'Oktober', '10'),
(11, 'November', '11'),
(12, 'Desember', '12');

-- --------------------------------------------------------

--
-- Table structure for table `tb_carrousel`
--

CREATE TABLE `tb_carrousel` (
  `id` int(11) NOT NULL,
  `judul` varchar(128) NOT NULL,
  `image_url` varchar(128) NOT NULL,
  `deskripsi` text NOT NULL,
  `visible` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_carrousel`
--

INSERT INTO `tb_carrousel` (`id`, `judul`, `image_url`, `deskripsi`, `visible`) VALUES
(1, 'Carousel1', 'single_blog_2.png', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo, repellendus natus cumque maiores error dolorem ex cupiditate quos esse doloremque iusto, fugit nam. Obcaecati magni odit nihil optio suscipit consequuntur quo eveniet, similique illo labore atque, dolor! Veniam beatae temporibus assumenda ut dicta repudiandae maxime optio minima fugit, at similique, esse nobis, tempora rem consequatur perspiciatis facere! Asperiores soluta quia tenetur. Ad iusto ullam quasi nam esse similique, perspiciatis rerum qui sit aliquid repellendus nobis, cumque, reiciendis nisi deleniti natus. Minima aperiam repudiandae ducimus nobis similique sequi voluptatum ipsa, necessitatibus maiores nesciunt ad. Iusto repellat nobis mollitia quasi. Rem, asperiores.', 1),
(2, 'Carousel2', 'gallery_item_2.png', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut harum sequi tenetur ut, minima quod, ducimus saepe rem eum officia temporibus in, aliquid, ratione quisquam blanditiis perspiciatis fugit. Quis placeat velit est quod et illum quibusdam necessitatibus! Dolore harum nam tenetur esse aliquid. Porro, provident. Deleniti libero, id beatae ad est perspiciatis unde eaque perferendis dolore repellat nobis voluptatem recusandae, dignissimos deserunt, voluptatum consequatur minus molestias eos. Quasi, rem eligendi quis consectetur assumenda? Debitis nihil quas voluptates consequatur adipisci tempora hic dolorem non illum exercitationem est animi consectetur rem et minima ea, mollitia illo optio quos eaque, eos ratione aspernatur quia. Laudantium nisi ex, quibusdam commodi minus dolores neque, alias nemo qui animi sequi inventore repellendus, eveniet consequuntur. Veritatis accusamus soluta sed quasi maiores natus nesciunt dignissimos similique, dolorum laudantium neque eius ea at omnis sint! Voluptate, eos porro voluptatem, dolorum libero nulla commodi sunt hic nisi. Necessitatibus sit eos, laboriosam dolore veritatis magnam cumque, ad nisi dolorum maxime, qui.', 1),
(3, 'Carousel3', 'gallery_item_3.png', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut harum sequi tenetur ut, minima quod, ducimus saepe rem eum officia temporibus in, aliquid, ratione quisquam blanditiis perspiciatis fugit. Quis placeat velit est quod et illum quibusdam necessitatibus! Dolore harum nam tenetur esse aliquid. Porro, provident. Deleniti libero, id beatae ad est perspiciatis unde eaque perferendis dolore repellat nobis voluptatem recusandae, dignissimos deserunt, voluptatum consequatur minus molestias eos. Quasi, rem eligendi quis consectetur assumenda? Debitis nihil quas voluptates consequatur adipisci tempora hic dolorem non illum exercitationem est animi consectetur rem et minima ea, mollitia illo optio quos eaque, eos ratione aspernatur quia. Laudantium nisi ex, quibusdam commodi minus dolores neque, alias nemo qui animi sequi inventore repellendus, eveniet consequuntur. Veritatis accusamus soluta sed quasi maiores natus nesciunt dignissimos similique, dolorum laudantium neque eius ea at omnis sint! Voluptate, eos porro voluptatem, dolorum libero nulla commodi sunt hic nisi. Necessitatibus sit eos, laboriosam dolore veritatis.', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_crew`
--

CREATE TABLE `tb_crew` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `jabatan` varchar(128) NOT NULL,
  `foto` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_crew`
--

INSERT INTO `tb_crew` (`id`, `nama`, `jabatan`, `foto`) VALUES
(2, 'asd', 'asd', 'default.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengajian`
--

CREATE TABLE `tb_pengajian` (
  `id` int(11) NOT NULL,
  `judul` varchar(128) NOT NULL,
  `tanggal_terbit` date NOT NULL,
  `deskripsi` text NOT NULL,
  `feature_image` varchar(128) NOT NULL,
  `video_url` varchar(128) NOT NULL,
  `audio_url` varchar(128) NOT NULL,
  `type_video` varchar(128) NOT NULL,
  `type_audio` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pengajian`
--

INSERT INTO `tb_pengajian` (`id`, `judul`, `tanggal_terbit`, `deskripsi`, `feature_image`, `video_url`, `audio_url`, `type_video`, `type_audio`) VALUES
(10, 'Lorem ipsum dolor', '2005-12-15', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit fuga, reiciendis saepe impedit soluta ab error asperiores amet libero ratione assumenda magni earum rem vel id eos repellendus voluptatum quaerat optio eum in! Corporis, modi quidem optio laboriosam omnis mollitia in aliquid ea est id alias illum odio quis nesciunt autem fuga laborum, saepe, sint quod explicabo porro neque libero? Facilis inventore, unde dolorem, nam voluptate ad molestiae quo hic ratione ullam dolore. Labore ipsam doloremque facilis, quidem magnam ducimus hic minus explicabo sapiente. Veritatis unde dignissimos illum tempore hic laborum fugit, voluptatem, facilis porro enim, tempora. Blanditiis nemo adipisci voluptates amet perferendis at sed quasi odio consequatur officiis, distinctio, consequuntur dicta voluptate doloribus mollitia. Harum provident quia molestiae nemo voluptates, facilis quos rem, dolore ipsum alias quasi rerum quod nam eius illum a veritatis! Aperiam corrupti cupiditate asperiores quod autem est eum, totam molestiae vel eaque minima tenetur sit!', 'default.jpg', 'https://www.youtube.com/embed/vkrQxjQC2LE', 'Indonesia-Raya-with-Intro-and-Text_DhyDhaCynGw.mp3', 'asd', 'audio/mpeg'),
(11, 'Surah Yasin', '2006-06-05', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, natus omnis sed sapiente neque ex eveniet dolores porro maxime incidunt tenetur id odio assumenda quia possimus laudantium excepturi molestiae. Debitis ducimus molestias rem explicabo, quia quam dolorem! Vitae magnam reprehenderit distinctio molestias commodi, ex doloribus hic soluta adipisci mollitia dignissimos quod minima quidem inventore, officiis eum. Delectus iure debitis molestiae explicabo, provident facilis minus voluptas id hic, aliquid sit nam dignissimos voluptatem amet neque! Voluptatibus facilis nobis veritatis officia fugiat asperiores dignissimos! Dignissimos, itaque quibusdam assumenda dolores incidunt neque autem reprehenderit numquam minima cumque, inventore quos labore vel illo molestias.', 'default.jpg', 'https://www.youtube.com/embed/kcqF_HZvQjM', 'Indonesia-Raya-with-Intro-and-Text_DhyDhaCynGw1.mp3', 'asd', 'audio/mpeg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_produk`
--

CREATE TABLE `tb_produk` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `tanggal_terbit` date NOT NULL,
  `deskripsi` varchar(256) NOT NULL,
  `harga` double NOT NULL,
  `gambar` varchar(128) NOT NULL,
  `penulis` varchar(128) NOT NULL,
  `diskon` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_produk`
--

INSERT INTO `tb_produk` (`id`, `nama`, `tanggal_terbit`, `deskripsi`, `harga`, `gambar`, `penulis`, `diskon`) VALUES
(6, 'Buku', '2011-09-06', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis dicta incidunt vitae delectus quam consequatur culpa ut, libero vel rem numquam quos reiciendis animi veniam quod quibusdam eum veritatis, nostrum similique, necessitatibus laudantium. Itaque', 50000, 'produk1.jpg', 'aaaa', 10);

-- --------------------------------------------------------

--
-- Table structure for table `tb_rekening`
--

CREATE TABLE `tb_rekening` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `no_rekening` varchar(128) NOT NULL,
  `bank` varchar(128) NOT NULL,
  `icon_bank` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_rekening`
--

INSERT INTO `tb_rekening` (`id`, `nama`, `no_rekening`, `bank`, `icon_bank`) VALUES
(2, 'Visa', '10203892849834', 'Visa', 'fab fa-fw fa-cc-visa');

-- --------------------------------------------------------

--
-- Table structure for table `tb_tesimonial`
--

CREATE TABLE `tb_tesimonial` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `pekerjaan` varchar(128) NOT NULL,
  `foto_url` varchar(128) NOT NULL,
  `tesimonial` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_tesimonial`
--

INSERT INTO `tb_tesimonial` (`id`, `nama`, `pekerjaan`, `foto_url`, `tesimonial`) VALUES
(1, 'Lorem ipsum dolor', 'Lorem ipsum', 'default.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam iusto saepe, repellendus quae ab provident possimus corporis illu');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `gambar` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `nama`, `email`, `password`, `gambar`, `is_active`, `date_created`) VALUES
(1, 'Nur Maulana Arrafi', 'lazark3793@gmail.com', '$2y$10$sed/oKU0XLwdTQYkyVFrIORDxtQ3WrQKrbLIT195O3nmQZzuJkjPi', 'rafi.jpg', 1, 1567394375);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'User'),
(3, 'Menu'),
(4, 'Client');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sub_menu`
--
ALTER TABLE `sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_about`
--
ALTER TABLE `tb_about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_bulan`
--
ALTER TABLE `tb_bulan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_carrousel`
--
ALTER TABLE `tb_carrousel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_crew`
--
ALTER TABLE `tb_crew`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_pengajian`
--
ALTER TABLE `tb_pengajian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_produk`
--
ALTER TABLE `tb_produk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_rekening`
--
ALTER TABLE `tb_rekening`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_tesimonial`
--
ALTER TABLE `tb_tesimonial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sub_menu`
--
ALTER TABLE `sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tb_about`
--
ALTER TABLE `tb_about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_bulan`
--
ALTER TABLE `tb_bulan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tb_carrousel`
--
ALTER TABLE `tb_carrousel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_crew`
--
ALTER TABLE `tb_crew`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_pengajian`
--
ALTER TABLE `tb_pengajian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tb_produk`
--
ALTER TABLE `tb_produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_rekening`
--
ALTER TABLE `tb_rekening`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_tesimonial`
--
ALTER TABLE `tb_tesimonial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
