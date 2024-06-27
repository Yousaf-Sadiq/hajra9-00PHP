<header>
  <!-- header-area-start -->
  <div class="main-wraper">
    <div class="main-container fixed-top">
      <div class="header header-expand-sm expand-header">
        <div class="header-left d-flex">
          <div class="logo"><a href="index-2.html">
              <img src="assets/img/logo/logo.png" alt="logo">
            </a></div>
          <!-- canvas_open -->
          <div class="canvas_open toggle-menu sidebar-collapse">
            <button class="menu-button">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                style="fill: rgba(116, 116, 116, 1); transform: msFilter">
                <path d="M4 6h16v2H4zm0 5h16v2H4zm0 5h16v2H4z"></path>
              </svg>
            </button>
          </div>
        </div>
        <!-- header-search -->
        <?php 
        require_once dirname(__FILE__)."/../components/header-search.php"; ?>
        <!-- header-right -->
        <div class="header-right d-none d-lg-block">
          <ul class="navbar-item flex-row ml-auto">
            <!-- national-flag-start -->
            <?php 
        require_once dirname(__FILE__)."/../components/flag-desktop.php";
         ?>
     
            <!-- brands-table-start -->
            <?php 
        require_once dirname(__FILE__)."/../components/brand-icon.php";
         ?>
            <!-- all-message-start -->
            <?php 
        require_once dirname(__FILE__)."/../components/message-box.php";
         ?>

            <!-- notifucation-start -->
            <?php 
        require_once dirname(__FILE__)."/../components/notification.php";
         ?>
            <!-- user-profile-start -->
            <?php 
        require_once dirname(__FILE__)."/../components/profile.php";
         ?>
          </ul>
        </div>
        
        <?php 
        require_once dirname(__FILE__)."/mobile/header.php";
         ?>
      </div>
    </div>
  </div>
  <!-- header-area-end -->
</header>