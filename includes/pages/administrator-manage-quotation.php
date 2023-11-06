<?php 
$quotationNumber = (isset($_GET['qid'])) ? htmlspecialchars($_GET['qid']) : false;
$lastInvoice = ($quotationNumber !== false) ? voctech_get_quotation_and_jobs($quotationNumber, 'jobs') : false;
$lastRequest = ($quotationNumber !== false) ? voctech_get_quotation_and_jobs($quotationNumber, 'quotation_request') : false;
// die();
 $business_type = $lastRequest[0]->category ?? 'NOT SELECTED';
 $business_sub_category = $lastRequest[0]->sub_category ?? 'NOT SELECTED';
?>

<?php if($quotationNumber === false || !isset($lastRequest[0]->id)): ?>
<script type="text/javascript">
    alert('Wrong or invalid quoation number')
    window.location = '?p=quotations'
</script>
<?php endif; ?>

<section class="container content">
    <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-10 text-sm">
            <h3 class="text-center mt-5">JOB REQUEST DETAILS</h3>
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
                        <div class="col-6">
                            Category: <b><?php echo $business_type; ?></b>
                        </div>
                        <div class="col-6">
                            Sub-category: <b><?php echo $business_sub_category; ?></b>
                        </div>

                        <div class="col-6">
                            Quotation number: <b><?php echo $quotationNumber; ?></b>
                        </div> 


                        <div class="col-6">
                            Assigned to: <b><?php 
                            if($lastRequest[0]->artisan_id === 'admin'){
                                echo 'Admin';
                            }else if($lastRequest[0]->artisan_id === '' || is_null($lastRequest[0]->artisan_id)){
                                echo 'Not yet assigned';
                            }else{
                                echo get_userdata($lastRequest[0]->artisan_id)->display_name;
                            }
                            ?></b>
                    </div>

                    <div class="col-6">Status: <b><?php echo $lastRequest[0]->status; ?></b></div>
                    <div class="col-6">Title: <b><?php echo $lastRequest[0]->title; ?></b></div>
                    <div class="col-6">Customer description: <b><?php echo $lastRequest[0]->description; ?></b></div>
                    <div class="col-6">Last description: <b><?php echo $lastRequest[0]->last_description; ?></b></div>
                    <div class="col-6">Comment: <b><?php echo $lastRequest[0]->comment; ?></b></div>
                    
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
                                    <th>Total</th>
                                </tr>
                            </thead>

                            <tbody>
                            <?php if(!isset($lastInvoice[0]->items) || $lastInvoice[0]->items === '' || is_null($lastInvoice[0]->items)): ?>
                            <tr>
                                <td class="text-center" colspan="4">No recent invoice</td>
                            </tr>
                            <?php else: ?>
                            <?php
                              $invoices = unserialize($lastInvoice[0]->items);
                              foreach ($invoices as $indx => $invoice): 
                            ?>
                                <tr>
                                    <td><?php echo $invoice[0];?></td>
                                    <td>NGN <?php echo $invoice[1];?></td>
                                    <td><?php echo $invoice[2];?></td>
                                    <td><?php echo $invoice[3];?></td>
                                    <td>NGN<?php echo $invoice[1] * $invoice[2];?></td>
                                </tr>
                            <?php endforeach; ?>
                            <tr>
                                <td colspan="2"><b>Other expenses:</b></td>
                                <td colspan="3"><?php echo $lastInvoice[0]->other_expenses; ?></td>
                            </tr>

                            <tr>
                                <td colspan="2"><b>Completion days:</b></td>
                                <td colspan="3"><?php echo $lastInvoice[0]->completion_days; ?> days</td>
                            </tr>

                            <tr>
                                <td colspan="2"><b>Grand total:</b></td>
                                <td colspan="3">NGN<?php echo $lastInvoice[0]->total_amount; ?></td>
                            </tr>

                            <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>

</section>
