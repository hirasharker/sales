<table id="datatable-buttons5" class="table table-striped table-bordered" >
    <thead>
      <tr>
        <th>SN</th>
        <th>Customer ID</th>
        <th>Customer Name</th>
        <th>Father's Name</th>
        <th>Mother's Name</th>
        <th>Spouse Name</th>
        <th>District</th>
        <th>Sub District</th>
        <th>ZIP</th>
        <th>Area</th>
        <th>Present Address</th>
        <th>Permanent Address</th>
        <th>Phone</th>
        <th>NID</th>
        <th>Model</th>
        <th>Price</th>
        <th>Additional Charge</th>
        <th>Sales Person</th>
        <th>Dealer Name</th>
        <th>Payment Mode</th>
        <th>Booking Date</th>
        <th>Status</th>
        <th>Co-ordinator</th>
      </tr>
    </thead>
    <tbody >
        <?php $i=1; foreach($customer_list as $value){?>
        <tr>
            <td><?php echo $i; $i++; ?></td>
            <td><?php echo $value->customer_code; ?></td>           
            <td><?php echo $value->customer_name; ?></td>
            <td><?php echo $value->father_name; ?></td>
            <td><?php echo $value->mother_name; ?></td>
            <td><?php echo $value->spouse_name; ?></td>
            <td><?php foreach($district_list as $dst_value){ if($dst_value->district_id == $value->district_id){
                     echo $dst_value->district_name; 
                 }}?>
            </td>
            <td><?php echo $value->sub_district_name; ?></td>

            <td><?php echo $value->post_code; ?></td>
            <td><?php echo $value->city_name; ?></td>
            <td><?php echo $value->present_address; ?></td>
            <td><?php echo $value->permanent_address; ?></td>
            <td><?php echo $value->phone; ?></td>
            <td><?php echo $value->national_id; ?></td>
            <td>
            <?php foreach($model_list as $m_value){if($m_value->model_id==$value->model_id){
                echo $m_value->model_name;
                }}?>
            </td>
            <td><?php echo $value->total_price; ?></td>
            <td><?php echo $value->additional_charge; ?></td>
            <td>
                <?php foreach($employee_list as $e_value){if($e_value->employee_id==$value->mkt_id){
                    echo $e_value->employee_name;
                    }}?>
            </td>
            <td>
                <?php foreach($dealer_list as $d_value){if($d_value->dealer_id == $value->dealer_id){ 
                    echo $d_value->dealer_name; 
                    }}?>
            </td>
            <td>
            <?php switch ($value->payment_mode) {
                case 1:
                    echo 'Credit';
                    break;
                case 2:
                    echo 'Semi-Cash';
                    break;
                case 3:
                    echo 'Cash';
                    break;
                case 4:
                    echo 'Corporate';
                    break;
                default:
                    break;
            }?>
            </td>
            <td><?php echo $value->time_stamp; ?></td>
            <td><?php 
              switch ($value->status){
                case 0:
                echo "Waiting for approval of Zonal Head";
                break;
                case 1:
                echo "Waiting for approval of Head of Sales";
                break;
                case 2:
                echo "Waiting for address and history verification";
                break;
                case 3:
                echo "Waiting for history verification";
                break;
                case 4:
                echo "Waiting for address verification";
                break;
                case 19:
                echo "Address verification temporary heldup";
                break;
                case 5:
                echo "Waiting for accounts clearence";
                break;
                case 6:
                echo "Waiting for Documents";
                break;
                case 7:
                echo "Waiting for Printing DO";
                break;
                case 8:
                echo "Waiting for Delivery Challan";
                break;
                case 9:
                echo "Delivered";
                break;
                case 11:
                echo "Denied by Zonal Head!";
                break;
                case 12:
                echo "Denied by Head of Sales!";
                break;
                case 13:
                echo "Address Verification Failed!";
                break;
                case 14:
                echo "History Verification Failed!";
                break;
                case 15:
                echo "Payment Verification Failed!";
                break;
                case 16:
                echo "Document Verification Failed!";
                break;
                case 25:
                echo "Canceled!";
                break;
                default:
                break;
              }
            ?></td>
            <td>
                <?php foreach($employee_list as $e_value){if($e_value->employee_id==$value->coordinator_id){
                    echo $e_value->employee_name;
                }}?>
                
            </td>

        </tr>
        <?php }?>
    </tbody>
</table>    	
      		
      	

  

	