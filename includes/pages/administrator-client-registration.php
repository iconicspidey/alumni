<div class="grey-area2-admin">
          <div class="fulltable1-admin">
    <div class="">
        <div class=""></div>
        <div class=" text-sm">
            <div class=" text-sm">
                
                Color interpretaton:
            <div class="border border-warning text-center p-3 pb-0 mb-2">
                <p><span class="bg-danger">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>: Banned clients</p>
                <p><span class="bg-warning">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>: clients with verified email</p>
                <p><span class="bg-dark">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>: Registered but have not activated email</p>
            </div>

                <div class="col-lg-12">
            <div class="alert alert-danger " style="display: none;" id="err-container">
                <p id="err-msg" class="text-center"></p>
            </div>

            <div class="alert alert-success" style="display: none;" id="success-container text-center"><p id="success-msg" class="text-center"></p></div>

        </div>

            <table class="table area text-sm "  id="clients">
                <thead>
                    <tr>
                        <th class="sp-admin" scope="col">S/N</th>
                        <th class="sp-admin" scope="col">First name</th>
                        <th class="sp-admin" scope="col">Other names</th>
                        <th class="sp-admin" scope="col">Email</th>
                        <th class="sp-admin" scope="col">Phone</th>
                        <th class="sp-admin" scope="col">Occupation</th>
                        <th class="sp-admin" scope="col">Date created</th>
                      
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                $clients = get_users(['role'=>'client']);
                if(count($clients)<=0):
                    echo "<tr><td colspan='7'>NO client registered yet</td></tr>";
                else:
                    foreach ($clients as $indx => $client):
                    $clientMeta = get_user_meta($client->ID);
                    // 0 - registered
                    // 1 - verified email
                    // 2 - Banned
                ?>
                <?php 
                $style = ('2' === $clientMeta['activited'][0]) ? 'class="bg-danger text-white text-sm "' : $style;
                $style = ('1' === $clientMeta['activited'][0]) ? 'class="bg-success text-white text-sm "' : $style;
                $style = ('0' === $clientMeta['activited'][0]) ? 'class="bg-dark text-white text-sm "' : $style;

                ?>
                    <tr <?php echo $style; ?> >
                        <th scope="row"><?php echo ($indx+1);?></th>                        
                        <td><?php echo $clientMeta['first_name'][0]; ?></td>
                        <td><?php echo $clientMeta['last_name'][0] ?></td>
                        <td><?php echo $client->phone; ?></td>
                        <td><?php echo $client->user_email; ?></td>
                        <td><?php echo $clientMeta['occupation'][0] ?></td>
                        <td><?php echo $client->user_registered; ?></td>
                       <td>
                            <button onclick="selectedClient('<?php echo $client->id; ?>', 'approve')" class="btn btn-sm btn-success border" title="Approve artisan"><i class="fa fa-check"></i></button>
                            <button onclick="selectedClient('<?php echo $client->id; ?>', 'ban')" class="btn btn-sm btn-danger border" title="Ban artisan"><i class="fa fa-times"></i></button>
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
        <h5 class="modal-title" id="exampleModalLabel">Client management</h5>
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
        $('#clients').DataTable();
    } );

    var selected = {};
    function selectedClient(artisanID, action){
        // approve or ban artisan
        // 0 - registered
        // 1 - verified email
        // 2 - Banned
        selected = {artisan:artisanID, action};

        var msg = (action === 'approve') ? 'Are you sure you want to approve this account?' : 'Are you sure you want to ban this account? You may unban at any time';
            // show modal
        $('#txt-modal').html(msg)
        $('#modal-alert').modal('show')
    }

    function manage_artisan(options){
        // send api to backend

        if(selected.action === 'approve'){
            data = {
                artisan_id: selected.artisan,
                action: 1
            }
        }else if(selected.action === 'ban'){
            data = {
                artisan_id: selected.artisan,
                action: 2
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