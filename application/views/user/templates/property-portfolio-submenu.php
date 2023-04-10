  <!-- Sub menu for booking section starts here -->
  <div class="container-fluid d-flex nav-bottom-color sub-menu">
    <div class="sub-nav d-flex flex-wrap">
      <a class="text-decoration-none secondary-text-color mr-4 py-3 <?php echo ($profile_title == 'Property Portfolio')? 'sub-menu--dashboard-active' : '' ; ?>"
        href="<?php echo base_url('user/property-portfolio'); ?>" >
        <div class="sub-menu-link  ">
          Portfolio
        </div>
      </a>

      <a class="text-decoration-none secondary-text-color mr-4 py-3 <?php echo ($profile_title == 'Payments')? 'sub-menu--dashboard-active' : '' ; ?>" href="<?php echo base_url('user/payments'); ?>">
        <div class="sub-menu-link  ">
          Payments
        </div>
      </a>
    </div>
  </div>