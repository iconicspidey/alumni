<?php 
 if( is_user_logged_in() ) {
       $current_user   = wp_get_current_user();
       $role_name      = $current_user->roles[0];

        if ( 'artisan' !== $role_name ) {
           echo '<script>window.location="'.wp_logout_url().'"</script>';
           die();
            // $redirect_url = wp_logout_url();
            // wp_safe_redirect( $redirect_url );
            // exit;
        } 
 
  } else {
       echo '<script>window.location="'.home_url().'"</script>';
       die();
  }

?>
<section class="container">
       Artisan dashboard
       <br>ROLE: <?php echo $role_name;?>
</section>