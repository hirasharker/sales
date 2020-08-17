<script type="text/javascript">
    $('body').on('click','.update-tiv',function(){ 


                    
        var zoneId = $(this).data("value");

        var tivMonth = $('#tivMonth'+zoneId).val();

        var tivVolume = $('#tivVolume'+zoneId).val();

        var incentiveAmount = $('#incentiveAmount'+zoneId).val();

        // alert(incentiveAmount);

        $.ajax({
            type: "POST",
            url: "<?php echo base_url()?>incentive/ajax_update_tiv/",
            data: { 'zone_id': zoneId , 'tiv_month': tivMonth, 'tiv_volume': tivVolume, 'incentive_amount': incentiveAmount },
            success: function(data){
                // Parse the returned json data
                var opts = $.parseJSON(data);
                // Use jQuery's each to iterate over the opts value
                // $('#report-view').html(opts);
                console.log('worked!');
             

            }
        });
        
    }); 
</script>



<table id="datatable-buttons5" class="table table-striped table-bordered" >
    <thead>
      <tr>
        <th>SN</th>
        <th>tiv_month</th>
        <th>Zone</th>
        <th>MS</th>
        <th>tiv_volume</th>
        <th>incentive_amount</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody >
        <?php $i=1; foreach($tiv_list as $value){?>
        <tr>
            <td><?php echo $i; $i++; ?></td>
            <td><?php echo $tiv_month; ?></td>           
            <td><?php echo $value->zone_name; ?></td>
            <td><?php echo $value->market_share; ?></td>
            <form id="<?php echo 'zone'.$value->zone_id; ?>" method="post" action="<?php echo base_url(); ?>incentive/update_zone_wise_incentive/">
                <input type="hidden" name="zone_id" value="<?php echo $value->zone_id; ?>">
                <input type="hidden" id="<?php echo 'tivMonth'.$value->zone_id ?>" name="tiv_month" value="<?php echo $tiv_month; ?>">
                <td><input type="number" id="<?php echo 'tivVolume'.$value->zone_id ?>" class="form-control" step="1" min="0" name="tiv_volume" value="<?php echo $value->tiv_volume; ?>" required></td>
                <td><input type="number" id="<?php echo 'incentiveAmount'.$value->zone_id ?>" class="form-control" step="1" min="0" name="incentive_amount" value="<?php echo $value->incentive_amount; ?>" required></td>
                <td><a data-value="<?php echo $value->zone_id; ?>" href="#" style="color:#269414" class="update-tiv"><i class="fa fa-check" aria-hidden="true" ></i> update</a></td>
            </form>
        </tr>
        <?php }?>
    </tbody>
</table> 

