<!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Administrator</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- QUERY MENU -->
      <?php 

          // "SELECT column-names
          //  FROM table-name1 JOIN table-name2 
          //  ON column-name1 = column-name2
          // WHERE condition"

          $queryMenu = "SELECT * FROM user_menu";
          $menu = $this->db->query($queryMenu)->result_array();

       ?>

       <!-- LOOPING MENU -->
       <?php foreach($menu as $m) : ?>
          <!-- Heading -->
          <div class="sidebar-heading">
            <?php echo $m['menu']; ?>
          </div>

            <?php 

                $menu_id = $m['id'];

                $querySubMenu = "SELECT `sub_menu`.*, `user_menu`.`menu`
                                   FROM `sub_menu` JOIN `user_menu` 
                                   ON `sub_menu`.`menu_id` = `user_menu`.`id`
                                  WHERE `sub_menu`.`menu_id` = $menu_id
                                  AND `sub_menu`.`is_active` = 1";
                $subMenu = $this->db->query($querySubMenu)->result_array();

             ?>

             <?php foreach($subMenu as $sm) : ?>
              <?php if($judul == $sm['judul']) : ?>
                <li class="nav-item active">
              <?php else : ?>
                <li class="nav-item">
              <?php endif; ?>
                <a class="nav-link pb-0" href="<?php echo base_url() . $sm['url']; ?>">
                  <i class="<?php echo $sm['icon']; ?>"></i>
                  <span><?php echo $sm['judul']; ?></span></a>
              </li>
            <?php endforeach; ?>

                <!-- Divider -->
                <hr class="sidebar-divider mt-3">

        <?php endforeach; ?>

      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url(); ?>auth/logout">
          <i class="fas fa-fw fa-sign-out-alt"></i>
          <span>Logout</span></a>
      </li>

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar