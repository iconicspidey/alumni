<?php
/*
Template Name: Trainings
*/
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Voctech | Training</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/stylesheet.css" />
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
    <section class="header-store">
      <img src="<?php echo get_template_directory_uri();?>/images/Group 26.png" class="logo-store" alt="logo" />

      <ul id="navigation">
        <li><a class="active" href="<?php echo home_url();?>">Home</a></li>
        <li><a href="<?php echo home_url();?>/about">About</a></li>
        <li><a href="<?php echo home_url();?>/trainings">Trainings</a></li>
        <li><a href="<?php echo home_url();?>#contact">Contact Us</a></li>
        <li><a href="<?php echo home_url();?>/store">Store</a></li>
        <a id="signup-store" style="color: indianred" href="<?php echo home_url();?>/sign-up"
          >Register</a
        >
        <a id="login-store" href="<?php echo home_url();?>/sign-in">Login</a>
        <a href="#" id="close"><i class="fa-solid fa-xmark"></i></a>
      </ul>
      <div id="mobile">
        <i id="bar" class="fas fa-outdent"></i>
      </div>

      <ul class="nav-button-store">
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
    <section class="train-enter-store w-12">
      <div class="text-center">
        <h1 style="letter-spacing: 1px; font-family: 'Inter'">
          Welcome to Artisans Training
        </h1>
      </div>
      <div class="Train-holder-store">
        <div class="train-main-store">
          <div class="train-video-store">
            <video class="video-store" controls>
              <source src="<?php echo get_template_directory_uri();?>/images/videoplayback.mp4" type="video/mp4" />
              <source src="<?php echo get_template_directory_uri();?>/images//videoplayback.mp4" type="video/ogg" />
            </video>
          </div>
          <div class="mt-3">
            <h4 style="font-family: 'Inter'">How to make a script</h4>
          </div>
          <div class="train-video-below-store">
            <h5 style="font-family: 'Inter'">Take Assessment</h5>
            <div class="q-hold-store">
              <p style="font-family: 'Inter'">Q1</p>
            </div>
            <div class="text-start">
              <p style="font-family: 'Inter'">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Neque
                eu massa diam nec quam tristique vel. Vestibulum et netus morbi
                et id mauris sed eu rhoncus. Faucibus pretium a at pretium sit
                suspendisse et pretium. Massa nunc, pretium, adipiscing purus
                vel ac at ut. Adipiscing tincidunt in a, mi facilisis. Nulla
                arcu aenean varius sagittis, nam. Pellentesque sapien at ut duis
                malesuada platea. Tempus integer sit feugiat gravida commodo.
                Tempus sed venenatis eu viverra vulputate venenatis. Eleifend eu
                quis egestas amet elit. Nunc convallis id lorem non. Gravida
                lorem imperdiet eu purus ipsum urna felis vulputate. Gravida
                amet, turpis adipiscing orci. Et varius aliquet integer ipsum
                diam tincidunt vitae consectetur pellentesque. Sed massa gravida
                praesent volutpat massa rhoncus, ut. Ultricies eget nullam fames
                luctus fringilla sodales enim vulputate integer. Morbi ipsum
                aliquam ipsum, massa. Nibh lorem scelerisque fames eget
                vestibulum leo.
              </p>
            </div>
            <div class="row mb-2">
              <div class="col answer-store">
                <a href="" class=""
                  ><div class="bturn-store">
                    <div class="letholder-store">
                      <span style="font-family: 'Inter'">a</span>
                    </div>
                    <div class="textholder-store">
                      <span style="font-family: 'Inter'"
                        >Urna diam morbi consequat</span
                      >
                    </div>
                  </div>
                </a>
              </div>
              <div class="col answer-store">
                <a href="" class=""
                  ><div class="bturn-store">
                    <div class="letholder-store">
                      <span style="font-family: 'Inter'">b</span>
                    </div>
                    <div class="textholder-store">
                      <span style="font-family: 'Inter'"
                        >Urna diam morbi consequat</span
                      >
                    </div>
                  </div>
                </a>
              </div>
            </div>

            <div class="row">
              <div class="col answer-store">
                <a href="" class=""
                  ><div class="bturn-store">
                    <div class="letholder-store">
                      <span style="font-family: 'Inter'">c</span>
                    </div>
                    <div class="textholder-store">
                      <span style="font-family: 'Inter'"
                        >Urna diam morbi consequat</span
                      >
                    </div>
                  </div>
                </a>
              </div>
              <div class="col answer-store">
                <a href="" class=""
                  ><div class="bturn-store">
                    <div class="letholder-store">
                      <span style="font-family: 'Inter'">d</span>
                    </div>
                    <div class="textholder-store">
                      <span style="font-family: 'Inter'"
                        >Urna diam morbi consequat</span
                      >
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
        <hr class="mad-store" />
        <div class="train-side-store">
          <div class="sidebar-store">
            <div class="sidetrain-store">
              <img src="<?php echo get_template_directory_uri();?>/images/train2.png" alt="side" />
              <div>
                <a style="font-family: 'Inter'" href="">How to make a sculpt</a>
              </div>
            </div>
            <div class="sidetrain-store">
              <img src="<?php echo get_template_directory_uri();?>/images/train2.png" alt="side" />
              <div>
                <a style="font-family: 'Inter'" href="">How to make a sculpt</a>
              </div>
            </div>

            <div class="sidetrain-store">
              <img src="<?php echo get_template_directory_uri();?>/images/train2.png" alt="side" />
              <div>
                <a style="font-family: 'Inter'" href="">How to make a sculpt</a>
              </div>
            </div>

            <div class="sidetrain-store">
              <img src="<?php echo get_template_directory_uri();?>/images/train2.png" alt="side" />
              <div>
                <a style="font-family: 'Inter'" href="">How to make a sculpt</a>
              </div>
            </div>
            <div class="sidetrain-store">
              <img src="<?php echo get_template_directory_uri();?>/images/train2.png" alt="side" />
              <div>
                <a style="font-family: 'Inter'" href="">How to make a sculpt</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="container-fluid p-5 mt-5" style="background-color: #03303e">
      <div class="mx-auto">
        <p class="text-center text-white" style="font-family: 'Inter'">
          (C) Lorem ipsum dolor sit amet, consectetur adipiscing elit.
        </p>
      </div>
    </section>
    <script src="<?php echo get_template_directory_uri();?>/index.js"></script>
  </body>
</html>
