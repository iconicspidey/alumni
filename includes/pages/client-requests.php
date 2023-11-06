<div class="grey-area2-adminn">
          <div class="fulltable1-admin">
    <div class="">
        <div class=""></div>
        <div class="">
            <div class=" responsive">
            <table class=" table area" id="requests">
                <thead>
                    <tr>
                        <th  class="sp-admin" scope="col">S/N</th>
                        <th  class="sp-admin" scope="col">Date submitted</th>
                        <th  class="sp-admin" scope="col">Quotation ID</th>
                        <th  class="sp-admin" scope="col">Title</th>
                        <th  class="sp-admin" scope="col">Service type</th>
                        <th  class="sp-admin" scope="col">Sub-category</th>
                        <th  class="sp-admin" scope="col">Desription <i class="fa fa-external-link"></i> </th>
                        <th  class="sp-admin" scope="col">Status</th>
                        <th  class="sp-admin" scope="col">Payment info</th>
                        <th  class="sp-admin" scope="col">Date updated</th>
                        <th  class="sp-admin" scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                $requests = voctech_get_quotation_request();
                if(count($requests)<=0):
                    echo "<tr><td class='text-center' colspan='11'>NO Request made yet</td></tr>";
                else:
                    foreach ($requests as $indx => $request):
                ?>
                    <tr class="abijan-admin">
                        <th scope="row"><?php echo ($indx+1);?></th>                        
                        <td><?php echo $request->created_at; ?></td>
                        <td><?php echo $request->request_id; ?></td>
                        <td><?php echo $request->title; ?></td>
                        <td><?php echo $request->category; ?></td>
                        <td><?php echo $request->sub_category; ?></td>
                        <td><small><?php echo $request->last_description; ?> <a href="/description?id=<?php echo $request->request_id; ?>" title="click to read more">read more <i class="fa fa-external-link"></i></a> </small></td>
                        <td><?php echo $request->status; ?></td>
                        <td><?php echo ($request->payment_id) ? "<a href='/payment/?id=$request->payment_id' title='click to read more'>Paid<i class='fa fa-external-link'></i></a>" :'NOT PAID'; ?></td>
                        <td><?php echo $request->updated_at; ?></td>

                        <td>
                            <button class="btn btn-sm btn-secondary"><i class="fa fa-pencil"></i></button>
                            <button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                        </td>
                    </tr>
            <?php endforeach;endif;?>
        </tbody>
            </table>
        </div>
        </div>
    </div>
   </div>
    </div>


<script type="text/javascript">
    $(document).ready( function () {
        $('#requests').DataTable();
    } );
</script>