<div class="header-right-sm-dropdown d-block d-lg-none">
    <button class="profile-dropdown">
        <i class="fa-solid fa-ellipsis-vertical"></i>
    </button>
    <!-- <h6>mobile</h6> -->
    <div class="header-right profile-active">
        <ul class="navbar-item flex-row ml-auto">
        <!-- national-flag-start -->
        <?php 
        require_once "component/flag-mobile.php";
         ?>
     
            <!-- brands-table-start -->
            <?php 
        require_once "component/brand-icon.php";
         ?>
            <!-- all-message-start -->
            <?php 
        require_once "component/message-box.php";
         ?>

            <!-- notifucation-start -->
            <?php 
        require_once "component/notification.php";
         ?>
            <!-- user-profile-start -->
            <?php 
        require_once "component/profile.php";
         ?>

        </ul>
    </div>
</div>