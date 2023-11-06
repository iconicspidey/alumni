<?php
/*
Template Name: Client dashboard
*/
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Client dashboard</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/stylesheet.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

    <link href="http://fonts.cdnfonts.com/css/montserrat" rel="stylesheet" />
    <link
      href="https://fonts.googleapis.com/css?family=Inter"
      rel="stylesheet"
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
    <section class="header-user w-12">
      <div class="header-first-user">
        <div class="hff-user"><h6>User</h6></div>
        <div class="hfb-user"><h6>Welcome 0809000000</h6></div>
      </div>
      <div class="w-12 header-second-user">
        <div class="bnav-user">
          <div><img src="<?php echo get_template_directory_uri();?>/images/iconoir_bell-notification.png" /></div>

          <div><span>080900000000</span></div>
          <div><img src="<?php echo get_template_directory_uri();?>/images/dashicons_admin-users.png" /></div>
        </div>
        <div id="headnav-user">
          <ul id="headina-user">
           <li><a class="active" href="<?php echo home_url();?>">Home</a></li>
      <li><a href="<?php echo home_url();?>/about">About</a></li>
        <li><a href="<?php echo home_url();?>/trainings">Trainings</a></li>
        <li><a href="<?php echo home_url();?>#contact">Contact Us</a></li>
        <li><a href="<?php echo home_url();?>/store">Store</a></li>
            <a href="#" id="close1-user"><i class="fa-solid fa-xmark"></i></a>
          </ul>
        </div>
        <div id="mobile-user">
          <i id="bar111" class="fas fa-outdent"></i>
        </div>
      </div>
    </section>
    <section class="main-user w-12">
      <div class="egbe-user">
        <ul id="sidebar-user">
          <li>
            <a href="<?php echo home_url();?>/client-dashboard/"
              ><img src="<?php echo get_template_directory_uri();?>/images/carbon_intent-request-scale-out.png" /><span
                >Dashboard
              </span></a
            >
          </li>
          <li>
            <a href="<?php echo esc_url( add_query_arg( 'p', 'quotation-request' ) );?>"
              ><img src="<?php echo get_template_directory_uri();?>/images/Vector.png" /><span>Quotation Request </span></a
            >
          </li>
          <li>
              <a href="<?php echo esc_url( add_query_arg( 'p', 'invoices' ) );?>"
              ><img
                src="<?php echo get_template_directory_uri();?>/images/healthicons_exercise-walk-supported-outline.png"
              /><span>Invoices </span></a
            >
          </li>
          <li>
          <a href="<?php echo esc_url( add_query_arg( 'p', 'requests' ) );?>"
              ><img src="<?php echo get_template_directory_uri();?>/images/ep_setting.png" /><span>Request </span></a
            >
          </li>
          <li>
            <a href="<?php echo wp_logout_url(home_url()) ?>"
              ><img src="<?php echo get_template_directory_uri();?>/images/fluent_sign-out-24-regular.png" /><span
                >Sign Out
              </span></a
            >
          </li>
          <a href="#" id="close2-user"><i class="fa-solid fa-xmark"></i></a>
        </ul>
      </div>
      <div class="other-user">
        <div id="mobile1-user">
          <i id="bar222" class="fas fa-outdent"></i>
        </div>
        <div class="abovegrey-user">
          <div class="above-link-user">
            <ul>
              <li class="shadow"><a href="">Payment History</a></li>
              <li class="shadow"><a href="">Withdrawal</a></li>
            </ul>
          </div>
        </div>

    <?php
        if( is_user_logged_in() ) {
               $current_user   = wp_get_current_user();
               $role_name      = $current_user->roles[0];

                if ( 'client' !== $role_name ) {
                   echo '<script>window.location="'.wp_logout_url().'"</script>';
                   die();
                }

                $page = htmlentities($_GET['p'] ?? '');

                $clientMeta = get_user_meta($current_user->ID);

                if($clientMeta['activited'][0] === '2'){
                  echo ' <div class="grey-area-user"><div class="row"><div class="col-lg-2"></div><div class="col-lg-10 alert alert-danger text-center p-5">Acount banned. Please contact the admin for more details</div></div></div>';
                }else if($clientMeta['activited'][0] === '0'){
                  echo ' <div class="grey-area-user"><div class="row"><div class="col-lg-2"></div><div class="col-lg-10 alert alert-info p-5 text-center">Acount not yet activated. Please check your email'.$current_user->email.' for confirmation mail.</div></div></div>';
                }else if($clientMeta['activited'][0] === '1'){
                  if(false === get_template_part('includes/pages/client', $page)){
                    get_template_part('includes/pages/client', 'dashboard');
                  }
                }
    

         
          } else {
               echo '<script>window.location="'.home_url().'"</script>';
               die();
          }
    ?>


    <!-- Latest compiled JavaScript -->
    </div>
    </section>
      <script src="<?php echo get_template_directory_uri();?>/index.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
  </body>
</html>