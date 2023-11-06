<?php
/*
Template Name: Activities
*/
?>

<!DOCTYPE html>
<html lang="en">

<head>

     <title>Fulafia Alumni</title>

     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description"
          content="Welcome to the Federal University Lafia (FULafia) Alumni Association. Join our thriving community of accomplished graduates dedicated to academic excellence, mentorship, and giving back to our beloved institution.">
     <link rel="icon" href="<?php echo get_template_directory_uri();?>/logo.jpg" type="image/jpg">
     <meta name="keywords" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/bootstrap.min.css">
     <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/font-awesome.min.css">
     <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/owl.carousel.css">
     <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/owl.theme.default.min.css">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/templatemo-style.css">
     

</head>

<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

     <!-- PRE LOADER -->
     <section class="preloader">
          <div class="spinner">

               <span class="spinner-rotate"></span>

          </div>
     </section>


     <!-- MENU -->
     <section class="navbar custom-navbar navbar-fixed-top" role="navigation">
          <div class="container">

               <div class="navbar-header">
                    <a href="<?php echo home_url();?>" class="navbar-brand">
                         <img src="<?php echo get_template_directory_uri();?>/logo/logo.jpg" alt="" srcset="">
                    </a>
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>

                    <!-- lOGO TEXT HERE -->
               </div>

               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-nav-first">
                         <li><a href="<?php echo home_url();?>" class="smoothScroll">Home</a></li>
                         <li><a href="<?php echo home_url();?>#about" class="smoothScroll">About us</a></li>
                         <li><a href="<?php echo home_url();?>/activities" class="smoothScroll">Recent Activities</a></li>
                         <li><a href="<?php echo home_url();?>/register/" class="smoothScroll">Join</a></li>
                         <li><a href="<?php echo home_url();?>#testimonial" class="smoothScroll">Contact us</a></li>
                         <!-- <li><a href="#contact" class="smoothScroll">About</a></li> -->
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                         <li><a href="#"><i class="fa fa-phone"></i> +234 706 115 7540</a></li>
                    </ul>
               </div>

          </div>
     </section>


 

     <!-- CONTACT -->
     <section id="">
      <div class="container">
      <?php get_template_part('includes/activities', 'user'); ?>
      </div>
	 </section>


     <!-- FOOTER -->
     <footer id="footer">
          <div class="container">
               <div class="row">

                    <div class="col-md-4 col-sm-6">
                         <div class="footer-info">
                              <div class="section-title">
                                   <h2>National Secreteriat</h2>
                              </div>
                              <address>
                                   <p>Adamu Adamu Hall, PMB 146, Maraba Akunza,
                                        Obi Road, <br> Lafia, Nasarawa State, Nigeria</p>
                              </address>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <div class="footer-info">
                              <div class="section-title">
                                   <h2>Contact Info</h2>
                              </div>
                              <address>
                                   <p> <i class="fa fa-phone"></i> +234 706 115 7540</p>
                                   <p><a href="mailto: fulaanational@gmail.com">fulaanational@gmail.com</a></p>
                              </address>

                              <div class="footer_menu">

                              </div>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-12">
                         <div class="footer-info newsletter-form">
                              <div class="section-title">
                                   <h2>Fulafia Anthem</h2>
                              </div>
                              <div>
                                   <div class="form-group">
                                        <form action="" method="get">
                                             <a href="https://www.youtube.com/watch?v=ioG5aSs9jow" class="link-custom" target="_blank">Listen now</a>
                                        </form>
                                        <!-- <span><sup>*</sup> Please note - we do not spam your email.</span> -->
                                   </div>
                              </div>
                         </div>
                    </div>

               </div>
          </div>
     </footer>


     <!-- SCRIPTS -->
     <script src="<?php echo get_template_directory_uri();?>/js/jquery.js"></script>
     <script src="<?php echo get_template_directory_uri();?>/js/bootstrap.min.js"></script>
     <script src="<?php echo get_template_directory_uri();?>/js/owl.carousel.min.js"></script>
     <script src="<?php echo get_template_directory_uri();?>/js/smoothscroll.js"></script>
     <script src="<?php echo get_template_directory_uri();?>/js/custom.js"></script>

</body>

</html>