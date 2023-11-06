<div class="grey-area2-admin">
          <div class="fulltable1-admin">
    <div class="">
        <div class=""></div>
        <div class="text-sm">
            <div class=" text-sm">
                <h3 class="text-center">Quotation requests</h3>
                
                <div class="col-lg-12">
                    <div class="alert alert-danger " style="display: none;" id="err-container">
                        <p id="err-msg" class="text-center"></p>
                    </div>

                    <div class="alert alert-success" style="display: none;" id="success-container text-center"><p id="success-msg" class="text-center"></p></div>
                </div>

            <table class="table area text-sm" id="quotations">
                <thead>
                    <tr>
                        <th class="sp-admin" scope="col">S/N</th>
                        <th class="sp-admin" scope="col">Date submitted</th>
                        <th class="sp-admin" scope="col">Quotation number</th>
                        <th class="sp-admin" scope="col">Title</th>
                        <th class="sp-admin" scope="col">Category</th>
                        <th class="sp-admin" scope="col">Sub-category</th>
                        <th class="sp-admin" scope="col">Last comment</th>
                        <th class="sp-admin" scope="col">Last updated</th>
                        <th class="sp-admin" scope="col"></th>
                    </tr>
                </thead>
                <tbody class="text-sm">
                    <?php
                $quotations = voctech_get_quotation_request(['is_admin'=>true]);
                if(count($quotations)<=0):
                    echo "<tr><td colspan='11' class='text-center'>No Request made yet</td></tr>";
                else:
                    foreach ($quotations as $indx => $quotation):
                        // 'pending
                        // 'rejected
                        // 'processing
                        // 'done
                        $style = '';
                        $style = ($quotation->status === 'pending') ? '' : $style;
                        $style = ($quotation->status === 'rejected') ? 'bg-danger text-white' : $style;
                        $style = ($quotation->status === 'processing') ? 'alert alert-warning' : $style;
                        $style = ($quotation->status === 'done') ? 'alert alert-success' : $style;
                ?>
                    <tr <?php echo $style; ?>
                        <th scope="row"><?php echo ($indx+1);?></th>                        
                        <td><?php echo $quotation->created_at; ?></td>
                        <td><?php echo $quotation->request_id; ?></td>
                        <td><?php echo $quotation->title ?></td>
                        <td><?php echo $quotation->category ?></td>
                        <td><?php echo $quotation->sub_category ?></td>
                        <td><?php echo $quotation->last_description ?></td>
                        <td><?php echo $quotation->updated_at ?></td>
                       
                        <td>
                            <span style="visibility: hidden;font-size: 1px;"><?php echo $quotation->status;?></span>

                            <?php if($quotation->status === 'rejected' || $quotation->status === 'processing'): ?>
                            <a href="?p=manage-quotation&qid=<?php echo $quotation->request_id; ?>" class="btn btn-sm btn-primary border" title="Manage quotation"><i class="fa fa-eye"></i></a>

                            <button onclick="selectedQuotation('<?php echo $quotation->request_id; ?>', 'processing', '<?php echo $quotation->category; ?>', '<?php echo $quotation->sub_category; ?>')" class="btn btn-sm btn-secondary border" title="Manage quotation"><i class="fa fa-pencil"></i></button>
                            <button onclick="selectedQuotation('<?php echo $quotation->request_id; ?>', 'rejected')" class="btn btn-sm btn-danger border" title="Reject quot
                                    ation"><i class="fa fa-times"></i></button>
                            <?php else: ?>
                                <button onclick="selectedQuotation('<?php echo $quotation->request_id; ?>', 'rejected')" class="btn btn-sm btn-danger border" title="Reject quot
                                    ation"><i class="fa fa-times"></i></button>

                                <button onclick="selectedQuotation('<?php echo $quotation->request_id; ?>', 'processing', '<?php echo $quotation->category; ?>', '<?php echo $quotation->sub_category; ?>')" class="btn btn-sm btn-primary border" title="Manage quotation"><i class="fa fa-pencil"></i></button>
                            <?php endif; ?>


                            <!-- <button class="btn btn-sm btn-danger border" title="Ban artisan"><i class="fa fa-times"></i></button> -->
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
    <div class="modal fade" id="modal-process" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Artisan management</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form id="process-quotation">
            <p class="starlink" id="process-msg"></p>
            <br>
            <label for="business_type">Category</label>
            <select class="form-control m-2" name="business_type" id="business_type" required>
                            <option value="">--Select business category--</option>
                            <?php
                            $categories = voctech_get_categories();
                            for ($i=0; $i < count(array_keys($categories)); $i++) { 
                                echo "<option>".array_keys($categories)[$i]."</option>";
                            }
                            ?>
            </select>

            <label for="business_sub_category">Sub-Category</label>
            <select class="form-control m-2" name="business_sub_category" id="business_sub_category" required>
                            <option value="">--Select business sub-category--</option>
            </select>
            <input type="hidden" name="quotation-number" value="" id="quotation-number">
            <button type="submit" class="btn btn-primary float-right">Submit</button>

        </form>

          </div>
          <div class="modal-footer">
            <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
            <!-- <button onclick="" type="button" class="btn btn-primary">Submit</button> -->
          </div>
        </div>
      </div>
    </div>

    <!-- modal 2 -->
    <div class="modal fade" id="modal-reject" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">REJECT QUOTATION</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p class="starlink" id="reject-msg"></p>
                <textarea class="form-control" id="comment" placeholder="Reason for rejecting" required minlength="3"></textarea>            
                <button type="submit" onclick="process_quotation('rejected')" type="button" class="btn float-right m-1 btn-danger">Reject</button>
          </div>
          <div class="modal-footer">
            <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
            <!-- <button onclick="process_quotation('reject')" type="button" class="btn btn-primary">Reject</button> -->
          </div>
        </div>
      </div>
    </div>
                        </div>
                        </div>


<script type="text/javascript">
    $(document).ready( function () {
        $('#quotations').DataTable();
    } );
    var selected = {};
    function selectedQuotation(quotationID, action, category = '', subCategory = ''){
        // acceptable status:
        // 'pending
        // 'rejected
        // 'processing
        // 'done
        selected = quotationID
        if(action === 'rejected'){
            msg = 'You are about to reject this quotation request('+selected+').<br> Rejecting this request will not delete the quotation.<br> Only the client can. Do you wish to proceed?';
            // show modal
            $('#reject-msg').html(msg)
            $('#modal-reject').modal('show')
        }else if(action === 'processing'){
            msg = 'Kindly assign this quotation ('+selected+') to an artisan having <br> same category as job requested. <br>Initial selection: <b>'+category+' ('+subCategory+')</b>';
            // show modal
            document.getElementById('quotation-number').value = selected
            $('#process-msg').html(msg)
            $('#modal-process').modal('show')
        }
        
    }



    function process_quotation(action){
        //send api request
        var endpoint = '<?php echo admin_url('admin-ajax.php'); ?>';
        var formData = new FormData;
        var comment = document.getElementById('comment').value

        
        // console.log({action, quotationID: selected, comment})
        formData.append('action', 'manage-quotation');
        formData.append('manage-quotation', JSON.stringify({action, quotationID: selected, comment}));

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
                    // location.reload();
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
        
        // console.log(action, selected)
    }



    var artisanCategory = <?php print_r(json_encode(voctech_get_categories()));?>;
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

        $('#process-quotation').submit(function(e){
            e.preventDefault();
            var business_type = document.getElementById('business_type').value;
            var business_sub_category = document.getElementById('business_sub_category').value;
            var quotationID = document.getElementById('quotation-number').value;
            // console.log(business_type, business_sub_category)
            window.location = '?p=quotation&business-type='+business_type+'&business-sub-category='+business_sub_category+'&quotation-id='+quotationID
        })

</script>