


 
        <div class="navbar-collapse collapse">

 
            <?php
// check if users / customer was logged in
// if user was logged in, show "Edit Profile", "Orders" and "Logout" options
if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true && $_SESSION['access_level']=='Customer'){
?>
<ul class="nav navbar-nav navbar-right">
    <li >
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
            <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
            &nbsp;&nbsp;<?php echo $_SESSION['firstname']; ?>
            &nbsp;&nbsp;<span class="caret"></span>
        </a>
        <ul class="dropdown-menu" role="menu">
            <li><a href="<?php echo $home_url; ?>logout.php">Logout</a></li>
        </ul>
    </li>
</ul>
<?php
}
 
// if user was not logged in, show the "login" and "register" options
else{
?>
<ul class="nav navbar-nav navbar-right">
    <li >
        <a href="<?php echo $home_url; ?>">
            <span class="glyphicon glyphicon-check"></span> Home
        </a>
    </li>
    <li >
        <a href="<?php echo $home_url; ?>login.php">
            <span class="glyphicon glyphicon-log-in"></span> Log In
        </a>
    </li>
 
    <li >
        <a href="<?php echo $home_url; ?>register.php">
            <span class="glyphicon glyphicon-check"></span> Register
        </a>
    </li>
</ul>
<?php
}
            ?>
             
        </div><!--/.nav-collapse -->
 
