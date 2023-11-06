<?php
/*
Template Name: Verify
*/
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Verify email</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/homepage.css" />
    <link href="http://fonts.cdnfonts.com/css/montserrat" rel="stylesheet" />
    <link
      href="https://fonts.googleapis.com/css?family=Inter"
      rel="stylesheet"
    />
    <!-- CSS only -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
      integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

    
  </head>
  <body>
    <section class="header">
      <img src="<?php echo get_template_directory_uri();?>/images/Group 26.png" class="logo" alt="logo" />

      <ul id="navigation">
        <li><a class="active" href="<?php echo home_url();?>">Home</a></li>
        <li><a href="./about">About</a></li>
        <li><a href="./trainings">Trainings</a></li>
        <li><a href="#contact">Contact Us</a></li>
        <li><a href="./store">Store</a></li>
        <a id="signup" style="color: indianred" href="./sign-up"
          >Register</a
        >
        <a id="login" href="sign-in">Login</a>
        <a href="#" id="close"><i class="fa-solid fa-xmark"></i></a>
      </ul>
      <div id="mobile">
        <i id="bar" class="fas fa-outdent"></i>
      </div>

      <ul class="nav-button">
        <li><a style="color: indianred" href="./sign-up">Register</a></li>
        <li><a href="./sign-in">Login</a></li>
      </ul>
    </section>
    <div class="tinner">
     
      <section
        class="w-12"
        id="about"
        style="background-color: rgba(231, 208, 201, 0.6)">
        <div class="container p-5">
          <div class="mx-auto pt-4">

    <?php get_template_part('includes/verify', 'user'); ?>

             </div>
        </div>
        

     
        <div class="d-flex justify-content-end p-5">
          <a href="" class="goup float-end">
            <img src="<?php echo get_template_directory_uri();?>/images/go up.png" class="img-fluid" />
          </a>
        </div>
      </section>
    </div>
    
    <section class="container-fluid p-5" style="background-color: #03303e">
      <div class="mx-auto">
        <p class="text-center text-white" style="font-family: 'Inter'">
          &copy; 2022
        </p>
      </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    
    <script src="<?php echo get_template_directory_uri();?>/index.js"></script>
  </body>
</html>
