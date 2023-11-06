<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/assets/js/state.js"></script>

<section class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-6 bg-light p-4 border">
                <div class="alert alert-danger " style="display: none;" id="err-container">
                    <p id="err-msg"></p>
                </div>

                <div class="alert alert-success" style="display: none;" id="success-container">
                    Artisan registration successful. Kindly check your email for a confirmation email! <br>
                    <a href="<?php echo home_url();?>">Click here to go back home</a>
                </div>

                        <?php
                          $args = [
                            'numberposts'=>10,
                            'order'=> 'DESC',
                            'post_type'=>'artisan-category'
                          ];
                          $categories = [];
                          $postslist = get_posts( $args );
                          foreach ($postslist as $indx=>$post): ?>
                            <?php 
                                $categories = get_post_meta( $post->ID);
                                if(isset($categories['_edit_lock'])) unset($categories['_edit_lock']);
                                if(isset($categories['_edit_last'])) unset($categories['_edit_last']);
                            ?>
                        <?php endforeach; ?>
                        

                
                <form class="row" id="arisan-registration">
                    <div class="col-md-12"><h1 class="text-center">ARTISAN REGISTRATION</h1></div>
                    <div class="col-md-6">
                        <input placeholder="Business name" type="text" name="business_name" class="form-control m-2" minlength="5" maxlength="100" required>
                    </div>
                    <div class="col-md-6">
                        <input placeholder="Contact person name" type="text" name="name" class="form-control m-2" minlength="5" maxlength="50" required>
                    </div>
                    <div class="col-md-6">
                        <input placeholder="email" type="email" name="email" class="form-control m-2" minlength="5" maxlength="50" required>
                    </div>

                    <div class="col-md-6">
                        <input placeholder="phone" type="tel" name="phone" class="form-control m-2" minlength="11" maxlength="11" required>
                    </div>

                    <div class="col-md-6">
                        <select   name="business_state"  required="required" class="form-control m-2" onchange="print_state('state',this.selectedIndex);" id="country" required></select>                        
                    </div>
                    <div class="col-md-6">
                        <select id="state" class="form-control m-2"  name="business_lga"  required></select>
                        <script language="javascript">
                            print_country("country");
                        </script>

                    </div>
                    <div class="col-md-6">
                        <select class="form-control m-2" name="business_type" id="business_type" required>
                            <option value="">--Select business category--</option>
                            <?php
                            for ($i=0; $i < count(array_keys($categories)); $i++) { 
                                echo "<option>".array_keys($categories)[$i]."</option>";
                            }
                            ?>
                        </select>
                    </div>

                    <div class="col-md-6">
                        <select class="form-control m-2" name="business_sub_category" id="business_sub_category" required>
                            <option value="">--Select business sub-category--</option>
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
            
            </div>
            <div class="col-md-2"></div>
        </div>
    </section>


    <script type="text/javascript">
        var artisanCategory = <?php echo json_encode($categories) ?? '{}';?>;

        $('#business_type').change(function(data){
            var selectedOption=$("#business_type option:selected");
            if(artisanCategory[selectedOption.text()] !== undefined){
                $('#business_sub_category').empty();
                $.each(artisanCategory[selectedOption.text()], function (i, item) {
                    $('#business_sub_category').append($('<option>', { 
                        value: item,
                        text : item 
                    }));
                });
            

            }
        });



        //register
        $('#arisan-registration').submit(function(e){
            // add a new user - role:client
            // $('#btn-register').hide();
            // $('#btn-processing').show();

            e.preventDefault();
            var endpoint = '<?php echo admin_url('admin-ajax.php'); ?>';
            var form = $('#arisan-registration').serialize();
            var formData = new FormData;
            formData.append('action', 'register-artisan');
            formData.append('register-artisan', form);

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
                        $('#arisan-registration').hide();
                    }else{
                        console.log(res)
                        $('#err-container').show();
                        $('#err-msg').html(res.data.join('<br>') || 'Unable to proces request')
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