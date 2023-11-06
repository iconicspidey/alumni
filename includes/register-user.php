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
                <?php if(!is_user_logged_in()):?>
                <form class="row" id="user-registration">
                    <div class="col-md-6">
                        <input placeholder="name" type="text" name="name" class="form-control m-2" minlength="5" maxlength="50" required>
                    </div>
                    <div class="col-md-6">
                        <input placeholder="email" type="email" name="email" class="form-control m-2" minlength="5" maxlength="40" required>
                    </div>

                    <div class="col-md-6">
                        <input placeholder="phone" type="tel" name="phone" class="form-control m-2" minlength="11" maxlength="11" required>
                    </div>
                    <div class="col-md-6">
                        <select class="form-control m-2" name="occupation" required>
                            <option value="">--Select occupation--</option>
                            <option>Civil servant</option>
                            <option>Student</option>
                            <option>Business</option>
                            <option>House wife</option>
                            <option>Others</option>
                        </select>
                        
                    </div>

                    <div class="col-md-6">
                        <input placeholder="password1" type="password" name="password1" class="form-control m-2" minlength="3" maxlength="10" required>
                    </div>
                    <div class="col-md-6">
                        <input placeholder="password2" type="password" name="password2" class="form-control m-2" minlength="3" maxlength="10" required>
                    </div>

                    <div class="col-md-6">
                        <input type="submit" id="btn-register" name="Submit" class="form-control btn btn-warning m-2">
                        <input type="button" id="btn-processing" value="Processing..." class="form-control btn btn-warning m-2 " style="display: none;">
                    </div>
                    
                </form>
            <?php else: ?>
            <div class="alert alert-info text-center">
                Already logged in. <br>
                <a href="/dashboard">Continue to dashboard</a>&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo wp_logout_url(home_url()) ?>">Logout</a>
            </div>
            <?php endif ?>
            </div>
            <div class="col-md-2"></div>
        </div>
</section>

    <script type="text/javascript">
        $('#user-registration').submit(function(e){
            // add a new user - role:client
            // $('#btn-register').hide();
            // $('#btn-processing').show();

            e.preventDefault();
            var endpoint = '<?php echo admin_url('admin-ajax.php'); ?>';
            var form = $('#user-registration').serialize();
            var formData = new FormData;
            formData.append('action', 'register');
            formData.append('register', form);

            $.ajax(endpoint, {
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,

                success: function(res){
                    scrollTo(0,0)

                    if(res.success === true){
                        $('#err-container').hide();
                        $('#success-container').show();
                        $('#user-registration').hide();
                    }else{
                        $('#err-container').show();
                        $('#err-msg').html(res.data.join('<br>'))
                    }
                    
                },
                error: function(err){
                    scrollTo(0,0)
                    
                    $('#err-container').show();
                    $('#err-msg').html('Server error. Try again')
                }
            })
        })
    </script>