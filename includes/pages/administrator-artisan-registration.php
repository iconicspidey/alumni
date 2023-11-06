<div class="grey-area2-admin">
          <div class="fulltable1-admin">
    <div class="">
        <div class=""></div>
        <div class=" text-sm">
            <div class=" text-sm">
                <h3 class="text-center m-3">ARTISANS</h3>
                Color interpretaton:
            <div class="border border-warning text-center p-3 pb-0 mb-2">
                <p><span class="bg-danger">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>: Banned artisans</p>
                <p><span class="bg-warning">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>: Artisans with verified email</p>
                <p><span class="bg-dark">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>: Registered but have not activated email</p>
                <p><span class="bg-success">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>: Artisan verified by admin</p>
            </div>

                <div class="col-lg-12">
            <div class="alert alert-danger " style="display: none;" id="err-container">
                <p id="err-msg" class="text-center"></p>
            </div>

            <div class="alert alert-success" style="display: none;" id="success-container text-center"><p id="success-msg" class="text-center"></p></div>

        </div>

            <table class="table area text-sm" id="artisans">
                <thead>
                    <tr>
                        <th class="sp-admin" scope="col">S/N</th>
                        <th class="sp-admin" scope="col">Business name</th>
                        <th class="sp-admin" scope="col">Business location</th>
                        <th class="sp-admin" scope="col">Business LGA</th>
                        <th class="sp-admin" scope="col">Business type</th>
                        <th class="sp-admin" scope="col">Business Sub-category</th>
                        <!-- <th>Address <i class="fa fa-external-link"></i> </th> -->
                        <th class="sp-admin" scope="col">Contact person</th>
                        <th class="sp-admin" scope="col">Email</th>
                        <th class="sp-admin" scope="col">Phone</th>
                        <th class="sp-admin" scope="col">Date created</th>
                        <th class="sp-admin" scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                $artisans = get_users(['role'=>'artisan']);
                if(count($artisans)<=0):
                    echo "<tr><td colspan='11'>NO Request made yet</td></tr>";
                else:
                    foreach ($artisans as $indx => $artisan):
                    $artisanMeta = get_user_meta($artisan->ID);
                    // print_r($artisanMeta);
                    // break;   
                    // print_r($artisan);
                    // 0 - registered
        // 1 - verified email
        // 2 - Approved by admin
        // 3 - Banned
                ?>
                <?php 
                $style = ('3' === $artisanMeta['activited'][0]) ? 'class="bg-danger text-white text-sm"' : 'class="bg-success text-white text-sm"';
                $style = ('2' === $artisanMeta['activited'][0]) ? 'class="bg-success text-white text-sm"' : $style;
                $style = ('1' === $artisanMeta['activited'][0]) ? 'class="bg-warning text-white text-sm"' : $style;
                $style = ('0' === $artisanMeta['activited'][0]) ? 'class="bg-dark text-white text-sm"' : $style;

                ?>
                    <tr <?php echo $style; ?> >
                        <td><?php echo ($indx+1);?></td>                        
                        <td><?php echo $artisanMeta['business_name'][0]; ?></td>
                        <td><?php echo $artisanMeta['business_state'][0] ?></td>
                        <td><?php echo $artisanMeta['business_lga'][0] ?></td>
                        <td><?php echo $artisanMeta['business_type'][0] ?></td>
                        <td><?php echo $artisanMeta['business_sub_category'][0] ?></td>
                        <td><?php echo $artisan->display_name; ?></td>
                        <td><?php echo $artisan->user_email; ?></td>
                        <td><?php echo $artisan->phone; ?></td>
                        <td><?php echo $artisan->user_registered; ?></td>
                       
                        <td>
                            <button onclick="selectedArtisan('<?php echo $artisan->id; ?>', 'approve')" class="btn btn-sm btn-success border" title="Approve artisan"><i class="fa fa-check"></i></button>
                            <button onclick="selectedArtisan('<?php echo $artisan->id; ?>', 'ban')" class="btn btn-sm btn-danger border" title="Ban artisan"><i class="fa fa-times"></i></button>
                        </td>
                    </tr>
            <?php endforeach;endif;?>
        </tbody>
            </table>
        </div>
        </div>
    </div>


    <!-- modal -->
    <!-- Button trigger modal -->
<!-- Modal -->
<div class="modal fade" id="modal-alert" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Artisan management</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <span class="starlink" id="txt-modal"></span>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button onclick="manage_artisan()" type="button" class="merger-admin">Submit</button>
      </div>
    </div>
  </div>
</div>
</div>
                        </div>


<script type="text/javascript">
    $(document).ready( function () {
        $('#artisans').DataTable();
    } );

    var selected = {};
    function selectedArtisan(artisanID, action){
        // approve or ban artisan
        // 0 - registered
        // 1 - verified email
        // 2 - Approved by admin
        // 3 - Banned
        selected = {artisan:artisanID, action};

        var msg = (action === 'approve') ? 'Are you sure you want to approve this <br> account?' : 'Are you sure you want to ban this account? You may unban at any time';
            // show modal
        $('#txt-modal').html(msg)
        $('#modal-alert').modal('show')
    }

    function manage_artisan(options){
        // send api to backend

        if(selected.action === 'approve'){
            data = {
                artisan_id: selected.artisan,
                action: 2
            }
        }else if(selected.action === 'ban'){
            data = {
                artisan_id: selected.artisan,
                action: 3
            }
        }else{
            return $('#modal-alert').modal('hide')
        }

        //send api request
        var endpoint = '<?php echo admin_url('admin-ajax.php'); ?>';
        var formData = new FormData;

        formData.append('action', 'manage-artisan');
        formData.append('manage-artisan', JSON.stringify(data));
        
        $.ajax(endpoint, {
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,

            success: function(res){
                scrollTo(0,0)

                if(res.success === true){
                    console.log('was success-msg')
                    console.log(res.data)

                    $('#success-container').show();
                    $('#success-msg').html(res.data)
                    $('#err-container').hide();
                    location.reload();

                    // $('#user-registration').hide();
                }else{
                    location.reload();
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

        $('#modal-alert').modal('hide')
        
    }
</script>