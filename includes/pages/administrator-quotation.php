<?php 
 $business_type = $_GET['business-type'] ?? 'NOT SELECTED';
 $business_sub_category = $_GET['business-sub-category'] ?? 'NOT SELECTED';
 $quotationNumber = $_GET['quotation-id'] ?? '';
?>

<div class="grey-area2-admin">
          <div class="fulltable1-admin">
    <div class="">
        <div class=""></div>
        <div class=" text-sm">
            <h3 class="text-center mt-5">VOCTECH ONLINE INVOICE MAKER</h3>
            <div class="row">
                <div class="col-lg-12">
                    <div class="alert alert-danger " style="display: none;" id="err-container">
                        <p id="err-msg" class="text-center"></p>
                    </div>

                    <div class="alert alert-success" style="display: none;" id="success-container text-center"><p id="success-msg" class="text-center"></p></div>
                </div>

            </div>
            <div class="card">
                <div class="card card-header">
                    <div class="row">
                        <div class="col-7">
                            Category: <b><?php echo $business_type; ?></b>
                        </div>
                        <div class="col-5">
                            Sub-category: <b><?php echo $business_sub_category; ?></b>
                        </div>

                        <div class="col-7">
                            Quotation number: <b><?php echo $quotationNumber; ?></b>
                        </div> 


                        <div class="col-5">
                            <div class="sixtyi-admin" style="width:80%">
                            <label for="artisans">Select artisan:</label> 
                            <select id="artisans" class="form-control">
                                <option value="admin">Admin</option>
                                 <?php
                                    $artisans = get_users(['role'=>'artisan']);
                                    foreach ($artisans as $indx => $artisan){
                                        $artisanMeta = get_user_meta($artisan->ID);
                                         /* if(strtoupper($artisanMeta['business_type'][0]) === strtoupper($business_type) && strtoupper($artisanMeta['business_sub_category'][0]) === strtoupper($business_sub_category))*/
                                        if(strtoupper($artisanMeta['business_type'][0]) === strtoupper($business_type)){
                                            echo '<option value="'.$artisan->ID.'">'.$artisanMeta['business_name'][0].' ('.$artisan->display_name.')</option>';
                                        }
                                    }
                                    ?>
                            </select>
                                </div>
                            <button class="merger-admin m-1" id="assign-artisan">Assign</button>
                            <div id="scc" style="display: none" class="alert alert-success"><i>Artisan has been assigned succesfully....</i></div id="scc" style="display: none">
                        </div>
                    </div>
                    
                </div>



                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-stripped">
                            <thead>
                                <tr>
                                    <th>Item</th>
                                    <th>Cost</th>
                                    <th>Quantity</th>
                                    <th>Description</th>
                                    <th></th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td><input class="form-control item" placeholder="E.g: 5' Plank" /></td>
                                    <td><input class="form-control cost" placeholder="E.g 2000" type="Number" min="0" /></td>
                                    <td><input class="form-control quantity" placeholder="E.g 5" type="Number" min="1" /></td>
                                    <td><textarea class="form-control description" placeholder="Comment/Description (optional) "></textarea></td>
                                    <td><i class="fa fa-minus-circle mt-4 text-danger" style="font-size: 20px" onclick="removeRow(this)"></i></td>
                                </tr>
                                <tr id="hidden"><td colspan="5"></td></tr>
                                <tr>
                                    <td colspan="4" class="text-center">
                                        <button onclick="addMore()" class="merger-admin">Add more fields <i class="fa fa-plus-circle"></i> </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="card card-footer">
                    <h4 class="text-center">Other expenses</h4>
                    <table id="others" class="table">
                        <tr>
                            <th>Description</th>
                            <th>Cost</th>
                        </tr>
                        <tr title="Can be se at 0 if you cannot determine the cost for now">
                            <td><textarea id="other-expenses" class="form-control" placeholder="List out all other epenses"></textarea></td>
                            <td><input class="form-control" id="total-expenses" placeholder="E.G 1000" type="Number" min="0"></td>
                        </tr>
                        <tr title="This is subjec to the date after payment">
                            <td>Time to finish(in days)</td>
                            <td><input id="completion-days" type="Number" min="1" class="form-control" placeholder="3 days"></td>
                        </tr>

                        <tr>
                            <td colspan="2">
                                <button onclick="calculate()" class="btn btn-primary btn-block btn-lg text-center">Calculate</button>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- modal 3 -->
    <div class="modal fade" id="modal-confirm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">PROCESS ASSIGNMENT</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
          <p id="confirmation"></p>
          Are you sure you wish to send this invoice to the client? <hr>  
                <button type="submit" onclick="updateJobs()" type="button" class="btn  m-1 btn-success">Yes</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>

          </div>

        </div>
      </div>
    </div>

    <!-- modal 2 -->
    <div class="modal fade" id="modal-assign" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">PROCESS ASSIGNMENT</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p>Are you sure you want to assign the work to this artisan?</p>            
                <button type="submit" onclick="process_asignment()" type="button" class="btn  m-1 btn-success">Yes</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>

          </div>

        </div>
      </div>
    </div>

    <!-- modal message -->
      <div class="modal fade" id="modal-jobs" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">MESSAGE</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p id="m-msg"></p>
          </div>

        </div>
      </div>
    </div>

                                </div></div>


<script type="text/javascript">
    // afterText();
    var data = {}
    function removeRow(me){
        me.parentNode.parentNode.remove()
    }

    function canNotLeave(){
        window.onbeforeunload = function() {
            return "You have unsaved data. Sure to leave page?";
        }
    }
    
    function addMore() {
        canNotLeave();
        var htmlDOM = '<tr><td><input class="form-control item" placeholder="E.g: 5 x 5 Plank" /></td><td><input class="form-control cost" placeholder="E.g 2000" type="Number" min="0" /></td><td><input class="form-control quantity" placeholder="E.g 5" type="Number" min="1" /></td><td><textarea class="form-control description" placeholder="Comment/Description (optional) "></textarea></td><td><i class="fa fa-minus-circle mt-4 text-danger" style="font-size: 20px" onclick="removeRow(this)"></i></td></tr>';
      $("#hidden").before(htmlDOM);
    }

    function calculate(){
        canNotLeave();
        var item = document.getElementsByClassName("item");
        var cost = document.getElementsByClassName("cost");
        var quantity = document.getElementsByClassName("quantity");
        var description = document.getElementsByClassName("description");

        var allItems = [];
        var totalForItems = 0;
        var validated = false;

        for (let i = 0; i < item.length; i++) {
            if((item[i].value !== '') && (cost[i].value !== '') && (quantity[i].value !== '')){
                // add t array
                allItems.push([
                    item[i].value,
                    cost[i].value,
                    quantity[i].value,
                    description[i].value
                ])
                totalForItems += Number(cost[i].value) * Number(quantity[i].value)
                validated = true
            }else{
                item[i].parentNode.parentNode.style.backgroundColor = '#ff0000'
                item[i].focus();
                setTimeout(function() {
                    item[i].parentNode.parentNode.style.backgroundColor = '#fff'
                }, 10000);
                validated = false
                break;
            }
        }

        return (true === validated) ? calculateAll(allItems, totalForItems) : ''
    }

    function calculateAll(allItems, totalForItems){
        // with other expenses and dys to deliver
        var otherExpenses = document.getElementById('other-expenses').value
        var totalForOtherExpenses = Number(document.getElementById('total-expenses').value)
        var completionDays = Number(document.getElementById('completion-days').value)

        var grandTotal = totalForItems + totalForOtherExpenses

        if((typeof allItems !== 'object') || (otherExpenses.length <= 0) || isNaN(completionDays) || completionDays <= 1 || isNaN(grandTotal)){
            // an error occured
            document.getElementById('others').style.backgroundColor = '#ff0000'
            $('#others').before('<div id="hid2" class="alert alert-danger>You have to fill all fields in this section</div>"')

            setTimeout(function() {
                // document.getElementById('hid2').style.display = 'none'
                document.getElementById('others').style.backgroundColor = '#fff'
            }, 10000);
            return 
        }


        data = {
            quotationID: '<?php echo $quotationNumber; ?>',
            items: allItems,
            other_expenses: otherExpenses,
            completion_days: completionDays,
            total: isNaN(grandTotal) ? 0 : grandTotal
        }

        var dataHtml = ''
        dataHtml = '<b>Grand total: </b>NGN'+data.total+'<br>'
        dataHtml += '<b>quotation number: </b>'+data.quotationID+'<br>'
        
        document.getElementById('confirmation').innerHTML = dataHtml
        $('#modal-confirm').modal('show')
        
        return ''

    }


    function updateJobs(){
        // send http request to update job request
        $('#modal-confirm').modal('hide')

        var endpoint = '<?php echo admin_url('admin-ajax.php'); ?>';
        var formData = new FormData;

        formData.append('action', 'manage-jobs');
        formData.append('manage-jobs', JSON.stringify(data));
        $('#modal-jobs').modal('show')

        $.ajax(endpoint, {
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,

            success: function(res){
                scrollTo(0,0)

                if(res.success === true){

                    $('#m-msg').html('Operation successful. You will be redirected in a bit')
                    setTimeout(function() {
                        window.onbeforeunload = function () {
                          // blank function do nothing
                        }
                        window.location = '?p=quotations';
                    },10000);
                }else{
                    $('#m-msg').html(res.data.join('<br>'))
                }
            },

            error: function(err){
                scrollTo(0,0)

                $('#m-msg').html('Server error. Try again')
            }
        })

    }



    var selected = ''
    $('#assign-artisan').click(function(e){
        var artisan = document.getElementById('artisans').value;
        selected = artisan
        $('#modal-assign').modal('show')
    })

    function process_asignment(){
        var endpoint = '<?php echo admin_url('admin-ajax.php'); ?>';
        var formData = new FormData;

        formData.append('action', 'manage-quotation');
        formData.append('manage-quotation', JSON.stringify({artisan: selected, quotationID: <?php echo $quotationNumber; ?>, action: 'processing', comment:'Your quotation request has been assigned to an artisan'}));

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
                    // location.reload();
                    document.getElementById('scc').style.display = 'block'

                    setTimeout(function() {
                        document.getElementById('scc').style.display = 'none'
                    }, 8000);
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

        $('#modal-assign').modal('hide')
    }
</script>