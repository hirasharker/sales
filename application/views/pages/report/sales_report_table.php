
	
    	
      		<?php $i=1; foreach($customer_list as $value){?>
			<tr>
				<td><?php echo $i; $i++; ?></td>
				<td><?php echo $value->customer_code; ?></td>			
				<td><?php echo $value->customer_name; ?></td>
				<td>
					<?php foreach($city_list as $c_value){ if($c_value->city_id == $value->city_id){
							echo $c_value->city_name;
						}
					}?>
				</td>
				<td><?php echo $value->district_name; ?></td>
				<td><?php echo $value->sub_district_name; ?></td>
				<td><?php echo $value->present_address; ?></td>
				<td><?php echo $value->phone; ?></td>
				
				<td>
				<?php foreach($model_list as $m_value){if($m_value->model_id==$value->model_id){
						echo $m_value->model_name;
					}
				}?>
				</td>
				<td>
				<?php 
					foreach($application_list as $ap_value){
						if($ap_value->application_id == $value->application_id){
							echo $ap_value->application_detail;
						}
					}				
				?>
				</td>
				<td><?php echo $value->engine_no; ?></td>
				<td><?php echo $value->chassis_no; ?></td>
				<td><?php echo $value->total_price-$value->discount; ?></td>
				<td><?php echo $value->downpayment; ?></td>
				<td><?php echo $value->period; ?></td>
				<td>
				<?php foreach($employee_list as $em_value){if($em_value->employee_id==$value->mkt_id){
						echo $em_value->employee_name;
				}
				}?>
				</td>
				<td>
				<?php foreach($dealer_list as $dlr_value){if($dlr_value->dealer_id==$value->dealer_id){
						echo $dlr_value->dealer_name;
				}
				}?>
				</td>
				<td>
				<?php foreach($employee_list as $em_value){if($em_value->employee_id==$value->sales_generated_by){
						echo $em_value->employee_name;
				}
				}?>
				</td>
				<td><?php 
                        switch ($value->payment_mode){
                            case 1:
                            echo "Credit";
                            break;
                            case 2:
                            echo "Semi Cash";
                            break;
                            case 3:
                            echo "Cash";
                            break;
                            default:
                            break;
                        }
                    ?>
                </td>

				<td><?php echo $value->do_update_time; ?></td>
				<td><?php echo $value->dc_update_time; ?></td>
				<td>
				<?php foreach($yard_list as $y_value){if($y_value->delivery_yard_id==$value->delivery_yard_id){
						echo $y_value->yard_name;
					}
				}?>
				</td>
				<td>
				<?php foreach($bank_list as $b_value){if($b_value->bank_id==$value->lc_bank_id){
						echo $b_value->bank_name;
					}
				}?>
				</td>
				<td><?php echo $value->broker_name; ?></td>
				<td><?php echo $value->broker_nid; ?></td>
				<td><?php echo $value->broker_commission; ?></td>

			</tr>
			<?php }?>
      	

  

	