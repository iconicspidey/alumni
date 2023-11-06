<?php
$token = htmlentities($_GET['token'] ?? '');
//format: mail@gmail.com=|||=phone
$verified = 'Incorrect or expired verification link clicked. Check again';
$decryptedText = voctech_hash_unhash($token, 'decrypt');

if($decryptedText !== $token && strpos($decryptedText, '=|||=') > 1){
    $data = explode('=|||=', $decryptedText);

    if(count($data) === 2){
        $email = $data[0];
        $phone = $data[1];

        $verified = voctech_verify_user($email, $phone);
    }else{
        $verified = 'Cannot verify account at the moment';
    }

}

?>
<section class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-6 bg-light p-4 border">
                <div class="alert alert-danger " style="display: none;" id="err-container">
                    <p id="err-msg"></p>
                </div>

                <div class="alert alert-success" style="display: none;" id="success-container">
                    User registration successful. Kindly check your email for a confirmation email! <br>
                    <a href="<?php echo home_url();?>">Click here to go back home</a>
                </div>
                
                <div class="alert alert-info text-center">
                    <?php print_r($verified); ?>
                </div>

                <?php if(is_user_logged_in()):?>
                <div class="alert alert-info text-center">
                    Already logged in. <br>
                    <a href="/dashboard">Continue to dashboard</a>&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo wp_logout_url(home_url()) ?>">Logout</a>
                </div>
                <?php endif ?>

            </div>
            <div class="col-md-2"></div>
        </div>
</section>