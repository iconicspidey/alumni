<?php
       $current_user   = wp_get_current_user();
       $role_name      = $current_user->roles[0];
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
 <div class="grey-area-user">
                <div class="dd-user">
                <form  id="quotation-request">
                                  <div class="user-details-user">
                     <h5 class="text-center">QUOTATION REQUEST</h5>
                    <div class="input-box-user">
                     <input id="title" placeholder="E.g: Almunium roofing" type="text" name="title" class="" minlength="3" maxlength="200" required />
                    </div>

                    <div class="input-box-user">
                        <select id="service_type"  name="service_type"  required>
                            <option value="">--Select service category--</option>
                            <?php
                            for ($i=0; $i < count(array_keys($categories)); $i++) { 
                                echo "<option>".array_keys($categories)[$i]."</option>";
                            }
                            ?>
                        </select>
                    </div>

                    <div class="input-box-user">
                        <select  name="service_sub_type" id="service_sub_type" required>
                            <option value="">--Select service sub-category--</option>
                        </select>
                        
                    </div>

                    <div class="input-box-user">
                        <textarea placeholder="E.g: Aluminium zinc for a 100mx100m flat" name="comment" ></textarea>
                        <small class="text-center">
                            <br>
                        <strong>Note:</strong> Be as descriptive as possibe. However, we will contact you for further information via your phone/email</small>
                    </div>
                    <div class="input-box-user">
                    <div class="summer-user">
                    <div class="sum-user m-1">
                      <button type="submit" id="btn-register" name="Submit" id="tap">Submit</button>
                        <input type="button" id="btn-processing" value="Processing..."  style="display: none;">
                    </div>
                  </div>
                </div>
                        </div>
                </form>

            </div>
             <div class="popup1-user" id="popup">
        <div>
          <img src="<?php echo get_template_directory_uri();?>/images/Succf.png" alt="" />
          <div class="pp-user">
            <h5 class="text-center">Service Submitted Successful</h5>
            <div class="ppc-user text-center">
              <button onclick="change()">Close</button>
            </div>
          </div>
        </div>
      </div>
        </div>
         


    <script type="text/javascript">
        var artisanCategory = <?php echo json_encode($categories) ?? '{}';?>;

        $('#service_type').change(function(data){
            var selectedOption=$("#service_type option:selected");
            if(artisanCategory[selectedOption.text()] !== undefined){
                $('#service_sub_type').empty();
                $.each(artisanCategory[selectedOption.text()], function (i, item) {
                    $('#service_sub_type').append($('<option>', { 
                        value: item,
                        text : item 
                    }));
                });
            

            }
        });



        //request service
        $('#quotation-request').submit(function(e){
            e.preventDefault();
            var endpoint = '<?php echo admin_url('admin-ajax.php'); ?>';
            var form = $('#quotation-request').serialize();
            var formData = new FormData;
            formData.append('action', 'quotation-request');
            formData.append('quotation-request', form);

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
                        $('#quotation-request').hide();
                        $('#succ-msg').html(res.data)
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