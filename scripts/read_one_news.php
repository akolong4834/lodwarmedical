<?php

// get ID of the product to be read
$news_id = isset($_GET['news_id']) ? $_GET['news_id'] : die('ERROR: missing ID.');

?>
<!DOCTYPE html>
<html lang="en">
<head>

     <title>Health Template - News Page</title>
<!--

Template 2098 Health

http://www.tooplate.com/view/2098-health

-->
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="Tooplate">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/magnific-popup.css">

     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/animate.css">

     <link rel="stylesheet" href="css/owl.carousel.css">
     <link rel="stylesheet" href="css/owl.theme.default.min.css">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/tooplate-style.css">

</head>
<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

     <!-- PRE LOADER -->
     <section class="preloader">
          <div class="spinner">

               <span class="spinner-rotate"></span>
               
          </div>
     </section>


     <!-- HEADER -->
     <header>
          <div class="container">
               <div class="row">

                    <div class="col-md-4 col-sm-5">
                         
                         <p>Quality In Service, Excellence In Care</p>                        
                    </div>
                         
                    <div class="col-md-8 col-sm-7 text-align-right">
                         <span class="phone-icon"><i class="fa fa-phone"></i> +254726411556 / +254769806847</span>
                         <span class="date-icon"><i class="fa fa-calendar-plus-o"></i> 6:00 AM - 08:00 PM (Mon-Fri)</span>
                         <span class="email-icon"><i class="fa fa-envelope-o"></i> <a href="#">info@lodwarmedicalcenter.co.ke</a></span>
                    </div>

               </div>
          </div>
     </header>


     <!-- MENU -->
     <section class="navbar navbar-default navbar-static-top" role="navigation">
          <div class="container">

               <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>

                    <!-- lOGO TEXT HERE -->
                    <a href="index.html" class="navbar-brand">Lodwar Medical Center</a>
               </div>

               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                         <li><a href="index.php" class="smoothScroll">Home</a></li>
                         <li><a href="#about" class="smoothScroll">About Us</a></li>
                         <li><a href="#team" class="smoothScroll">Doctors</a></li>
                         <li><a href="#news" class="smoothScroll">Medicine </a></li>
                         <li><a href="#google-map" class="smoothScroll">Contact</a></li>
                         <li class="appointment-btn"><a href="#appointment">Make an appointment</a></li>
						 <li class="appointment-btn"><a href="#appointment">Become A Member</a></li>
	
						<?php include_once "navigation1.php";?>
                    </ul>
               </div>

          </div>
     </section>
<?php

 
// include database and object files
include_once 'config/database.php';
include_once 'objects/news.php';

 
// get database connection
$database = new Database();
$db = $database->getConnection();
 
// prepare objects
$news = new news($db);

 
// set ID property of product to be read
$news->news_id = $news_id;
 
// read the details of product to be read
$news->readOne();
$page_title =  "{$news->heading}";

?>


     <!-- NEWS DETAIL -->
     <section id="news-detail" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                    <div class="col-md-8 col-sm-7">
                         <!-- NEWS THUMB -->
                         <div class="news-detail-thumb">
                              <div class="news-image">
                               <img src="images/img1.jpg" class="img-responsive"/>
                              </div>
                              <?php         echo "<h3>{$news->heading}</h3>";  ?>
                              <?php         echo "<p>{$news->smallcontent}</p>";  ?>
                              <ul>
                                   <li>Phasellus posuere nisi eleifend, vestibulum ipsum eleifend</li>
                                   <li>Nulla sapien neque, posuere vitae porta eu</li>
                                   <li>Fusce quis enim vel libero pulvinar gravida sed eu justo</li>
                              </ul>

                                                           <?php         echo "<p>{$news->content}</p>";  ?>
                              <div class="news-social-share">
                                   <h4>Share this article</h4>
                                        <a href="#" class="btn btn-primary"><i class="fa fa-facebook"></i>Facebook</a>
                                        <a href="#" class="btn btn-success"><i class="fa fa-twitter"></i>Twitter</a>
                                        <a href="#" class="btn btn-danger"><i class="fa fa-google-plus"></i>Google+</a>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-5">
                         <div class="news-sidebar">
                              <div class="news-author">
                                   <h3>About the author</h3>
                                    <p><h4>Authors Name:</h4> <strong><?php         echo "{$news->author}";  ?></strong></p>
								    <p><h4>Authors Information:</h4> <?php         echo "<p>{$news->author_info}</p>";  ?></p>
									<p><h4>Authors Position:</h4> <?php         echo "<p>{$news->position}</p>";  ?></p>
                              </div>




                              <div class="news-ads sidebar-ads">
                                 
								   <img src="images/img2.jpg" class="img-responsive"/>
                              </div>


                         </div>
                    </div>
                    
               </div>
          </div>
     </section>
         


     <!-- FOOTER -->
     <footer data-stellar-background-ratio="5">
          <div class="container">
               <div class="row">

                    <div class="col-md-4 col-sm-4">
                         <div class="footer-thumb"> 
                              <h4 class="wow fadeInUp" data-wow-delay="0.4s">Contact Info</h4>
                              <p>Fusce at libero iaculis, venenatis augue quis, pharetra lorem. Curabitur ut dolor eu elit consequat ultricies.</p>

                              <div class="contact-info">
                                   <p><i class="fa fa-phone"></i> 010-070-0170</p>
                                   <p><i class="fa fa-envelope-o"></i> <a href="#">info@company.com</a></p>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-4"> 
                         <div class="footer-thumb"> 
                              <h4 class="wow fadeInUp" data-wow-delay="0.4s">Latest News</h4>
                              <div class="latest-stories">
                                   <div class="stories-image">
                                        <a href="#"><img src="images/news-image.jpg" class="img-responsive" alt=""></a>
                                   </div>
                                   <div class="stories-info">
                                        <a href="#"><h5>Amazing Technology</h5></a>
                                        <span>March 08, 2018</span>
                                   </div>
                              </div>

                              <div class="latest-stories">
                                   <div class="stories-image">
                                        <a href="#"><img src="images/news-image.jpg" class="img-responsive" alt=""></a>
                                   </div>
                                   <div class="stories-info">
                                        <a href="#"><h5>New Healing Process</h5></a>
                                        <span>February 20, 2018</span>
                                   </div>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-4"> 
                         <div class="footer-thumb">
                              <div class="opening-hours">
                                   <h4 class="wow fadeInUp" data-wow-delay="0.4s">Opening Hours</h4>
                                   <p>Monday - Friday <span>06:00 AM - 10:00 PM</span></p>
                                   <p>Saturday <span>09:00 AM - 08:00 PM</span></p>
                                   <p>Sunday <span>Closed</span></p>
                              </div> 

                              <ul class="social-icon">
                                   <li><a href="#" class="fa fa-facebook-square" attr="facebook icon"></a></li>
                                   <li><a href="#" class="fa fa-twitter"></a></li>
                                   <li><a href="#" class="fa fa-instagram"></a></li>
                              </ul>
                         </div>
                    </div>

                    <div class="col-md-12 col-sm-12 border-top">
                         <div class="col-md-4 col-sm-6">
                              <div class="copyright-text"> 
                                   <p>Copyright &copy; 2018 Your Company 
                                   
                                   | Design: Tooplate</p>
                              </div>
                         </div>
                         <div class="col-md-6 col-sm-6">
                              <div class="footer-link"> 
                                   <a href="#">Laboratory Tests</a>
                                   <a href="#">Departments</a>
                                   <a href="#">Insurance Policy</a>
                                   <a href="#">Careers</a>
                              </div>
                         </div>
                         <div class="col-md-2 col-sm-2 text-align-center">
                              <div class="angle-up-btn"> 
                                  <a href="#top" class="smoothScroll wow fadeInUp" data-wow-delay="1.2s"><i class="fa fa-angle-up"></i></a>
                              </div>
                         </div>   
                    </div>
                    
               </div>
          </div>
     </footer>


     <!-- SCRIPTS -->
     <script src="js/jquery.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/jquery.sticky.js"></script>
     <script src="js/jquery.stellar.min.js"></script>
     <script src="js/jquery.magnific-popup.min.js"></script>
     <script src="js/magnific-popup-options.js"></script>
     <script src="js/wow.min.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/custom.js"></script>

</body>
</html>