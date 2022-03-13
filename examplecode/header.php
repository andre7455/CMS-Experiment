<style>

.black{
    color: black !important;
}

</style>

<?php
@session_start();
?>

<div class="r-header r-header-inner r-header-strip-01">
<div class="r-header-strip r-header-strip-01">
    <div class="container">
    <div class="row clearfix">
        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12">
        <div class="r-logo">
            <a href="index.php" class="d-inline-block"><img src="assets/images/logo-white.png" class="img-fluid d-block"alt=""></a>
        </div>
        <a href="javaScript:void(0)" class="menu-icon"> <i class="fa fa-bars"></i> </a>
        </div>
        <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-xs-12">
        <div class="r-header-action float-left">
        <?php
              if(!isset($_SESSION['userEmail'])){
                  ?><a href="login-register.php"> <img src="assets/images/icon-lock.png" alt='' /> <span class="black">Login</span></a><?php
              }else{
                ?><form action="LogoutController.php" method="POST">
                  <button type=submit name="logout" class="btn btn-full">Logout</button></form><?php
              }
            ?>            <div class="r-search-wrapper">
            <div class="r-search-inner">
                <form>
                <input type="text" class="r-search-field" placeholder="Search" />
                <button type="submit" class="r-search-btn">
                    <i class="fa fa-search"></i>
                </button>
                </form>
            </div>
            </div> <!-- /r-search-wrapper -->
        </div>
        <div class="r-nav-section float-right">
            <nav>
            <ul>
                <li><a class="black" href="index.php">HOME</a></li>
                <li><a class="black" href="about.php">ABOUT US</a></li>
                <li><a class="black" href="faq.php">FAQ</a></li>
                <li><a class="black" href="contact.php">CONTACT US</a></li>
                <li><a class="black" href="mailpage.php">MAIL</a></li>
                <?php
                    if(isset($_SESSION["userEmail"])){
                        ?>
                        <li><a class="black" href="boat-listing.php">BOATS</a></li> 
                        <?php 
                    }
                    if($_SESSION["userRole"] == 1){
                        ?>
                        <li><a class="black" href="havens-overzicht.php">HAVENS OVERZICHT</a></li>
                        <li><a class="black" href="reserveringen.php">RESERVERINGEN</a></li>
                        <li><a class="black" href="addBoat.php">BOTEN TOEVOEGEN</a></li>
                        <li><a class="black" href="botenbeheren.php">BOTEN BEHEREN</a></li>
                        <li><a class="black" href="klantenoverzicht.php">KLANTEN OVERZICHT</a></li>
                        <?php
                    }
                ?>
            </ul>
            </nav>
        </div>
        </div>
    </div>
    </div>
</div>
</div>