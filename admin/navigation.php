<!-- navbar -->
<div class="navbar navbar-default navbar-static-top" role="navigation">
    <div class="container-fluid">
 
        <div class="navbar-header">
            <!-- to enable navigation dropdown when viewed in mobile device -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
 
            <!-- Change "Site Admin" to your site name -->
            <a class="navbar-brand" href="<?php echo $home_url; ?>admin/index.php">Admin</a>
        </div>
 
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
 
 
                <!-- highlight for order related pages -->
                <li <?php ?>>
                    <a href="<?php echo $home_url; ?>admin/index.php">Home</a>
                </li>
 
                <!-- highlight for user related pages -->
                <li <?php
                       ?> >
                    <a href="<?php echo $home_url; ?>admin/read_users.php">Users</a>
                </li>
                <!-- highlight for user related pages -->
                <li <?php
                        ?> >
                    <a href="<?php echo $home_url; ?>admin/view_appointments.php">Appointments</a>
                </li>	
                <!-- highlight for user related pages -->
                <li <?php
                        ?> >
                    <a href="<?php echo $home_url; ?>admin/view_products.php">Products</a>
                </li>
                <li <?php
                        ?> >
                    <a href="<?php echo $home_url; ?>admin/view_sales.php">Sales</a>
                </li>
                <li <?php
                        ?> >
                    <a href="<?php echo $home_url; ?>admin/view_news.php">News</a>
                </li>				
            </ul>
 
            <!-- options in the upper right corner of the page -->
            <ul class="nav navbar-nav navbar-right">
                <li>

                    
                        <!-- log out user -->
                        <li><a href="<?php echo $home_url; ?>logout.php">Logout</a></li>
                  
                </li>
            </ul>
 
        </div><!--/.nav-collapse -->
 
    </div>
</div>
<!-- /navbar -->