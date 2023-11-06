<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign up</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/register.css" />
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
  </head>
  <body>
    <div class="bg-holder">
      <section class="header">
        <img src="<?php echo get_template_directory_uri();?>/images/VOCTECH.png" class="logo" alt="logo" />

        <ul id="navigation">
        <li><a class="active" href="<?php echo home_url();?>">Home</a></li>
        <li><a href="<?php echo home_url();?>/about">About</a></li>
        <li><a href="<?php echo home_url();?>/trainings">Trainings</a></li>
        <li><a href="#contact">Contact Us</a></li>
        <li><a href="<?php echo home_url();?>/store">Store</a></li>
        <a id="signup" style="color: indianred" href="<?php echo home_url();?>/sign-up"
          >Register</a
        >
        <a id="login" href="sign-in">Login</a>
        <a href="#" id="close"><i class="fa-solid fa-xmark"></i></a>
      </ul>
        <div id="mobile">
          <i id="bar" class="fas fa-outdent"></i>
        </div>

        <ul class="nav-button">
          <li>
            <a
              style="color: indianred; font-family: 'Inter'; font-weight: 600"
              href="<?php echo home_url();?>/sign-up"
              >Register</a
            >
          </li>
          <li>
            <a style="font-family: 'Inter'; font-weight: 600" href="<?php echo home_url();?>/sign-in"
              >Login</a
            >
          </li>
        </ul>
      </section>
      <section class="container-fluid">
        <div class="Artisan">
          <div>
            <a href="<?php echo home_url();?>/artisan-register">
              <img
                src="<?php echo get_template_directory_uri();?>/images/carbon_user-avatar1.png"
                class="p-1 img-fluid"
              />
              Artisan Account
            </a>
            <div class="arttext">
              <h6 style="font-family: 'Montserrat'"><b>Brief:</b></h6>
              <p style="font-family: 'Montserrat'">
                Artisans are indivisuals or businesses who render their skills
                as a service on this platform and this registration lead you to
                where you can register as a service provider
              </p>
            </div>
          </div>
          <div>
            <a style="font-family: 'Montserrat'" href="<?php echo home_url();?>/register">
              <img src="<?php echo get_template_directory_uri();?>/images/carbon_user-avatar1.png" class="img-fluid" />
              User Account
            </a>
            <div class="arttext">
              <h6 style="font-family: 'Montserrat'"><b>Brief:</b></h6>
              <p style="font-family: 'Montserrat'">
                Artisans are indivisuals or businesses who render their skills
                as a service on this platform and this registration lead you to
                where you can register as a service provider
              </p>
            </div>
          </div>
          <!---<div class="row">
            <div class="col-6">
              <a href="">
                <img src="<?php echo get_template_directory_uri();?>/images/carbon_user-avatar1.png" />
                Artisan Account
              </a>
            </div>
            <div class="col-6">
              <a href="">
                <img src="<?php echo get_template_directory_uri();?>/images/carbon_user-avatar1.png" />
                User Account
              </a>
            </div>
          </div>/-->
        </div>
      </section>
    </div>

    <script src="<?php echo get_template_directory_uri();?>/index.js"></script>
  </body>
</html>
