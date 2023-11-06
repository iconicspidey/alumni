<?php
/*
Template Name: Administrator dashboard
*/
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <title>Administrator dashboard</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/stylesheet.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT"
      crossorigin="anonymous"
    />
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

    
    <!-- Latest compiled and minified CSS -->
    
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
      integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link href="http://fonts.cdnfonts.com/css/montserrat" rel="stylesheet" />
    <link
      href="https://fonts.googleapis.com/css?family=Inter"
      rel="stylesheet"
    />
  </head>
  <body>
    <section class="header-admin w-12">
      <div class="header-first-admin">
        <div class="hff-admin"><h6>WELCOME BACK</h6></div>
        <div class="hfb-admin"><h6>ADMIN DASHBOARD</h6></div>
      </div>
      <div class="w-12 header-second-admin">
        <div class="headnav-admin">
          <ul id="headina-admin">
            <a href="#" id="close1-admin"><i class="fa-solid fa-xmark"></i></a>
          </ul>
          <div class="sunami-admin">
            <div class="mell-admin">
              <img src="<?php echo get_template_directory_uri();?>/images/iconoir_bell-notification.png" />
            </div>

            <div><img src="<?php echo get_template_directory_uri();?>/images/dashicons_admin-users.png" /></div>
          </div>
          <div id="mobile-admin">
            <i id="bar1" class="fas fa-outdent"></i>
          </div>
        </div>
      </div>
    </section>
    <section class="main-admin w-12">
      <div class="egbe-admin">
        <ul id="sidebar-admin">
          <li>
            <a href=""
              ><img src="<?php echo get_template_directory_uri();?>/images/carbon_intent-request-scale-out.png" /><span style="letter-spacing:1px;"
                >Dashboard
              </span></a
            >
          </li>
          <!----
          <li>
            <a href="<?php echo esc_url( add_query_arg( 'p', 'quotation' ) );?>"
              ><img src="<?php echo get_template_directory_uri();?>/images/Vector.png" /><span style="letter-spacing:1px;">Invoice Maker </span></a
            >
          </li>
---->
          <li>
            <a  href="<?php echo esc_url( add_query_arg( 'p', 'artisan-registration' ) );?>">
              <img src="<?php echo get_template_directory_uri();?>/images/medical-icon_i-registration.png" /><span style="letter-spacing:1px;"
                >Artisan Registration
              </span></a>
            
          </li>
          <li>
            <a href="<?php echo esc_url( add_query_arg( 'p', 'client-registration' ) );?>"
              ><img src="<?php echo get_template_directory_uri();?>/images/arcticons_rdclient.png" /><span style="letter-spacing:1px;"
                >Clients Management
              </span></a
            >
          </li>

          <li>
            <a href="<?php echo esc_url( add_query_arg( 'p', 'quotations' ) );?>"
              ><img
                src="<?php echo get_template_directory_uri();?>/images/healthicons_exercise-walk-supported-outline.png"
              /><span style="letter-spacing:1px;">Quotations </span></a
            >
          </li>
         
          <li>
            <a href="<?php echo get_admin_url();?>"
              ><img src="<?php echo get_template_directory_uri();?>/images/ep_setting.png" /><span style="letter-spacing:1px;">Settings </span></a
            >
          </li>
          <li>
            <a href="<?php echo wp_logout_url(home_url()) ?>"
              ><img src="<?php echo get_template_directory_uri();?>/images/fluent_sign-out-24-regular.png" /><span style="letter-spacing:1px;"
                >Sign Out
              </span></a
            >
          </li>
          <a href="#" id="close2-admin"><i class="fa-solid fa-xmark"></i></a>
        </ul>
      </div>

      <div class="other-admin">
        <div id="mobile1-admin">
          <i id="bar2" class="fas fa-outdent"></i>
        </div>
        <div class="abovegrey-admin">
          <div class="stats">
            <div class="stater1 s1-admin shadow-lg">
              <h6>All Job Request</h6>
              <div class="stats-inner1">
                <div class="hello">
                  <div class="circle" style="background-color: lightgray">
                    <div class="mask half" style="background-color: white">
                      <div class="fill" style="background-color: white"></div>
                    </div>
                    <div class="mask full" style="background-color: white">
                      <div class="fill" style="background-color: white"></div>
                    </div>
                    <div
                      class="inside-circle"
                      style="background: rgb(93, 164, 216); color: white"
                    >
                      20%
                    </div>
                  </div>
                </div>
                <div>
                  <div>
                    <h4>1021</h4>
                    <h6 class="text-white">All Time</h6>
                  </div>
                </div>
              </div>
            </div>
            <div class="stater1 s2-admin shadow-lg">
              <h6>Payments</h6>
              <div class="stats-inner1">
                <div class="hello">
                  <div class="circle" style="background-color: lightgray">
                    <div class="mask half" style="background-color: white">
                      <div class="fill" style="background-color: white"></div>
                    </div>
                    <div class="mask full" style="background-color: white">
                      <div class="fill" style="background-color: white"></div>
                    </div>

                    <div
                      class="inside-circle"
                      style="color: white; background: rgb(251, 164, 59)"
                    >
                      20%
                    </div>
                  </div>
                </div>
                <div>
                  <div>
                    <h4>1021</h4>
                    <h6 class="text-white">All Time</h6>
                  </div>
                </div>
              </div>
            </div>
            <div class="breaker"><br /></div>
            <div class="stater1 s3-admin shadow-lg">
              <h6>Artisans</h6>
              <div class="stats-inner1">
                <div class="hello">
                  <div class="circle" style="background-color: lightgray">
                    <div class="mask half" style="background-color: white">
                      <div class="fill" style="background-color: white"></div>
                    </div>
                    <div class="mask full" style="background-color: white">
                      <div class="fill" style="background-color: white"></div>
                    </div>

                    <div
                      class="inside-circle"
                      style="color: white; background: rgb(96, 190, 104)"
                    >
                      20%
                    </div>
                  </div>
                </div>
                <div>
                  <div>
                    <h4>521</h4>
                    <h6 class="text-white">Clients</h6>
                  </div>
                </div>
              </div>
            </div>
            <div class="stater1 s4-admin shadow-lg">
              <h6>Earnings</h6>
              <div class="stats-inner1">
                <div class="hello">
                  <div class="circle" style="background-color: lightgray">
                    <div class="mask half" style="background-color: white">
                      <div class="fill" style="background-color: white"></div>
                    </div>
                    <div class="mask full" style="background-color: white">
                      <div class="fill" style="background-color: white"></div>
                    </div>
                    <div
                      class="inside-circle"
                      style="color: white; background: rgb(241, 124, 176)"
                    >
                      20%
                    </div>
                  </div>
                </div>
                <div>
                  <div>
                    <h4>1021</h4>
                    <h6 class="text-white">All Time</h6>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>


    <?php
        if( is_user_logged_in() ) {
               $current_user   = wp_get_current_user();
               $role_name      = $current_user->roles[0];

                if ( 'administrator' !== $role_name ) {
                   echo '<script>window.location="'.wp_logout_url().'"</script>';
                   die();
                } 

                $page = htmlentities($_GET['p'] ?? '');
                
                if(false === get_template_part('includes/pages/administrator', $page)){
                  get_template_part('includes/pages/administrator', 'dashboard');
                }

         
          } else {
               echo '<script>window.location="'.home_url().'"</script>';
               die();
          }
    ?>


    <!-- Latest compiled JavaScript -->
   
 </section>
     <script src="<?php echo get_template_directory_uri();?>/index.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
  </body>
</html>