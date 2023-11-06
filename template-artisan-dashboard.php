<?php
/*
Template Name: Artisan dashboard
*/
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <title>Artisan dashboard</title>
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
    <section class="header-artisan w-12">
      <div class="header-first-artisan">
        <div class="hff-artisan"><h6>Artisan Dashboard</h6></div>
        <div class="hfb-artisan"><h6>Welcome 0809000000</h6></div>
      </div>
      <div class="w-12 header-second-artisan">
        <div class="bnav-artisan">
          <div><img src="<?php echo get_template_directory_uri();?>/images/iconoir_bell-notification.png" /></div>

          <div><span>080900000000</span></div>
          <div><img src="<?php echo get_template_directory_uri();?>/images/dashicons_admin-users.png" /></div>
        </div>
        <div id="headnav-artisan">
          <ul id="headina-artisan">
            
            <a href="#" id="close1-artisan"
              ><i class="fa-solid fa-xmark"></i
            ></a>
          </ul>
        </div>
        <div id="mobile-artisan">
          <i id="bar11" class="fas fa-outdent"></i>
        </div>
      </div>
    </section>
    <section class="main-artisan w-12" id="main">
      <div class="egbe-artisan">
        <ul id="sidebar-artisan">
          <li>
            <a href=""
              ><img src="<?php echo get_template_directory_uri();?>/images/carbon_intent-request-scale-out.png" /><span
                >Job Request
              </span></a
            >
          </li>
          <li>
            <a href=""
              ><img src="<?php echo get_template_directory_uri();?>/images/Vector.png" /><span>Payment </span></a
            >
          </li>
          <li>
            <a href=""
              ><img
                src="<?php echo get_template_directory_uri();?>/images/healthicons_exercise-walk-supported-outline.png"
              /><span>Support </span></a
            >
          </li>
          <li>
            <a href=""
              ><img src="<?php echo get_template_directory_uri();?>/images/ep_setting.png" /><span>Settings </span></a
            >
          </li>
          <li>
            <a href="<?php echo wp_logout_url(home_url()) ?>"
              ><img src="<?php echo get_template_directory_uri();?>/images/fluent_sign-out-24-regular.png" /><span
                >Sign Out
              </span></a
            >
          </li>
          <a href="#" id="close2-artisan"><i class="fa-solid fa-xmark"></i></a>
        </ul>
      </div>
      <div class="other-artisan">
        <div id="mobile1-artisan">
          <i id="bar22" class="fas fa-outdent"></i>
        </div>
        <div class="abovegrey-artisan">
          <div class="stats">
            <div class="stater shadow-lg">
              <h6>Pending Jobs</h6>
              <div class="stats-inner">
                <div class="hello">
                  <div class="circle">
                    <div class="mask half">
                      <div class="fill"></div>
                    </div>
                    <div class="mask full">
                      <div class="fill"></div>
                    </div>
                    <div class="inside-circle">20%</div>
                  </div>
                </div>
                <div>
                  <div>
                    <h4>001</h4>
                    <h6>All Time</h6>
                  </div>
                </div>
              </div>
            </div>
            <div class="stater shadow-lg">
              <h6>Finished Jobs</h6>
              <div class="stats-inner">
                <div class="hello">
                  <div class="circle">
                    <div class="mask half">
                      <div class="fill"></div>
                    </div>
                    <div class="mask full">
                      <div class="fill"></div>
                    </div>
                    <div class="inside-circle">20%</div>
                  </div>
                </div>
                <div>
                  <div>
                    <h4>002</h4>
                    <h6>All Time</h6>
                  </div>
                </div>
              </div>
            </div>
            <div class="breaker"><br /></div>
            <div class="stater shadow-lg">
              <h6>History</h6>
              <div class="stats-inner">
                <div class="hello">
                  <div class="circle">
                    <div class="mask half">
                      <div class="fill"></div>
                    </div>
                    <div class="mask full">
                      <div class="fill"></div>
                    </div>
                    <div class="inside-circle">20%</div>
                  </div>
                </div>
                <div>
                  <div>
                    <h4>003</h4>
                    <h6>Completed Jobs</h6>
                  </div>
                </div>
              </div>
            </div>
            <div class="stater shadow-lg">
              <h6>Clients</h6>
              <div class="stats-inner">
                <div class="hello">
                  <div class="circle">
                    <div class="mask half">
                      <div class="fill"></div>
                    </div>
                    <div class="mask full">
                      <div class="fill"></div>
                    </div>
                    <div class="inside-circle">20%</div>
                  </div>
                </div>
                <div>
                  <div>
                    <h4>004</h4>
                    <h6>All Time</h6>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    <?php 
     if( is_user_logged_in() ) {
         // approve or ban artisan
        // 0 - registered
        // 1 - verified email
        // 2 - Approved by admin
        // 3 - Banned
           $current_user   = wp_get_current_user();
           $role_name      = $current_user->roles[0];

                $page = htmlentities($_GET['p'] ?? '');

                $artisanMeta = get_user_meta($current_user->ID);

                if($artisanMeta['activited'][0] === '3'){
                  echo '<section class="container content"><div class="row"><div class="col-lg-2"></div><div class="col-lg-10 alert alert-danger text-center p-5">Acount banned. Please contact the admin for more details</div></div></section>';
                }else if($artisanMeta['activited'][0] === '1'){
                  echo '<section class="container content"><div class="row"><div class="col-lg-2"></div><div class="col-lg-10 alert alert-info p-5 text-center">Acount not yet activated by system admin. Please check in laer.</div></div></section>';
                }else if($artisanMeta['activited'][0] === '0'){
                  echo '<section class="container content"><div class="row"><div class="col-lg-2"></div><div class="col-lg-10 alert alert-info p-5 text-center">Acount not yet activated. Please check your email'.$current_user->email.' for confirmation mail.</div></div></section>';
                }else if($artisanMeta['activited'][0] === '2'){
                  if(false === get_template_part('includes/pages/artisan', $page)){
                    get_template_part('includes/pages/artisan', 'dashboard');
                  }
                }

     
      } else {
           echo '<script>window.location="'.home_url().'"</script>';
           die();
      }

?>
  </div>
    </section>
    <!-- Latest compiled JavaScript -->
     <script src="<?php echo get_template_directory_uri();?>/index.js"></script>
     
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>