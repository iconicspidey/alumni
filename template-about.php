<?php
/*
Template Name: About
*/
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>VOC-BEST | About us</title>
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
  </head>
  <body>
    <section class="header">
      <img src="<?php echo get_template_directory_uri();?>/images/Group 26.png" class="logo" alt="logo" />

      <ul id="navigation">
        <li><a class="active" href="<?php echo home_url();?>">Home</a></li>
        <li><a href="<?php echo home_url();?>/about">About</a></li>
        <li><a href="<?php echo home_url();?>/trainings">Trainings</a></li>
        <li><a href="<?php echo home_url();?>#contact">Contact Us</a></li>
        <li><a href="<?php echo home_url();?>/store">Store</a></li>
        <a id="signup" style="color: indianred" href="<?php echo home_url();?>/sign-up"
          >Register</a
        >
        <a id="login" href="<?php echo home_url();?>/sign-in">Login</a>
        <a href="#" id="close"><i class="fa-solid fa-xmark"></i></a>
      </ul>
      <div id="mobile">
        <i id="bar" class="fas fa-outdent"></i>
      </div>

      <ul class="nav-button">
        <li><a style="color: indianred" href="<?php echo home_url();?>/sign-up">Register</a></li>
        <li><a href="<?php echo home_url();?>/sign-in">Login</a></li>
      </ul>
    </section>
    <div class="tinner">
     
      <section
        class="w-12"
        id="about"
        style="background-color: rgba(231, 208, 201, 0.6)">
        <div class="container p-5">
          <h1 class="text-center pt-5" style="font-family: 'Inter'">
            <b>About us</b>
          </h1>
          <div class="mx-auto pt-4">
            <p class="about_home" style="font-family: 'Inter'">
              VOC-best Nigeria limited is a company that since its existence has been committed to helping artisans discover creativity within them. It is a company that trains Artisans on vocational skills and help them become self employed. Here in Voc-best Limited is where artisans meet with customers, research and develop high quality  tech service
            <br>
              We offer;
            <br>🔅Vocational Training

            <br>🔅Technical services ranging from automobile to building maintenance

            <br>🔅Train and re-train artisans.

            To crown it, our company creates employment for Artisans, with or without a degree.

<br>The company is run and managed by internationally trained technicians with a lot of versatilities who are committed and devoted to the sole aim of impacting and developing technical know-how. 
<br>The physical things we have done and still doing will always speak for us.    

<br>VOC-Best have been operating based on international standard and so far we have been working with international partners to keep abreast with modern practice on technical know-how.
Our website is the go to when you are in need of  quality technical projects or maintenance that includes but not limited to; car repairs or refurbish, home construction and maintenance and any other technical service in between.

<br>Our services also have warranty attached to ensure the satisfaction of our customers.


<br>Voc-Best Nigeria Limited
<br>Creativity is the Bedrock of development…

            </p>


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
     <script src="<?php echo get_template_directory_uri();?>/index.js"></script>
  </body>
</html>
