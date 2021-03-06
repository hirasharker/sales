<div class="right_col" role="main">
<div class="">
  <div class="page-title">
    <div class="title_left">
      <h3>Sales Report <small></small></h3>
    </div>

    <div class="title_right">
      
    </div>
  </div>

  <div class="clearfix"></div>
  <div class="row">
    <div class="col-md-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
              <div class="clearfix"></div>
            </div>
            <div class="x_content" style="height:auto">
            <br />
            <!-- <form class="form-horizontal form-label-left" method="post" action="<?php echo base_url();?>report/generate_booking_report/" enctype='multipart/form-data'> -->
            <form class="form-horizontal form-label-left" method="post" enctype='multipart/form-data'>


                <div class="form-group col-md-6 col-sm-12 col-xs-12">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Select Zone </label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                      <select id="zoneId" class="form-control select-tag" name="zone_id">
                        <option value="">Any</option>
                        <?php foreach($zone_list as $value){?> 
                        <option value="<?php echo $value->zone_id; ?>"><?php echo $value->zone_name;?></option>
                        <?php }?>
                      </select>
                  </div>
                </div>

                <div class="form-group col-md-6 col-sm-12 col-xs-12">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">City </label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                      <select id="cityId" class="form-control select-tag" name="city_id" >
                        <option value="">Any</option>
                        <?php foreach($city_list as $value){?> 
                        <option cityCode="<?php echo $value->city_code; ?>" zoneId="<?php echo $value->zone_id; ?>" value="<?php echo $value->city_id; ?>"><?php echo $value->city_name;?></option>
                        <?php }?>
                      </select>
                  </div>
                  <input id="zoneId" type="hidden" name="zone_id">
                  <input id="cityCode" type="hidden" name="city_code">
                </div>

                <div class="form-group col-md-6 col-sm-12 col-xs-12">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">District </label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                      <select id="districtId" class="form-control select-tag" name="district_id" >
                        <option value="">Any</option>
                        <?php foreach($district_list as $value){?> 
                        <option value="<?php echo $value->district_id; ?>"><?php echo $value->district_name;?></option>
                        <?php }?>
                      </select>
                  </div>
                </div>

                <div class="form-group col-md-6 col-sm-12 col-xs-12">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Sub District/PS </label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                      <select id="subDistrictId" class="form-control select-tag" name="sub_district_id" >
                        <option value="">Any</option>
                      </select>
                  </div>
                </div>

                <div class="form-group col-md-6 col-sm-12 col-xs-12">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Select Sales Person </label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                      <select id="salesPerson" class="form-control select-tag" name="mkt_id">
                        <option value="">Any</option>
                        <?php foreach($employee_list as $value){if($value->role==1){?> 
                        <option value="<?php echo $value->employee_id; ?>"><?php echo $value->employee_name;?></option>
                        <?php }}?>
                      </select>
                  </div>
                </div>
                
                <div class="form-group col-md-6 col-sm-12 col-xs-12">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Select Model </label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                      <select id="vehicleModel" class="form-control select-tag" name="model_id" >
                        <option value="">Any</option>
                        <?php foreach($model_list as $value){?> 
                        <option modelCode="<?php echo $value->model_code;?>" value="<?php echo $value->model_id; ?>"><?php echo $value->model_name;?></option>
                        <?php }?>
                      </select>
                      <input id="modelCode" type="hidden" name="model_code">
                  </div>
                </div>

                <div class="form-group col-md-6 col-sm-12 col-xs-12">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Select Yard </label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                      <select id="yardId" class="form-control select-tag" name="yard_id" >
                        <option value="">Any</option>
                        <?php foreach($yard_list as $value){?> 
                        <option value="<?php echo $value->delivery_yard_id; ?>"><?php echo $value->yard_name;?></option>
                        <?php }?>
                      </select>
                  </div>
                </div>

                <div class="form-group col-md-6 col-sm-12 col-xs-12">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Payment Mode </label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                      <select id="paymentMode" class="form-control select-tag" name="payment_mode" >
                      <option value="">Any</option>
                      <option value="1">Credit</option>
                      <option value="2">Semi Cash</option>
                      <option value="3">Cash</option>
                      <option value="4">Corporate</option>
                      </select>
                  </div>
                </div>
                <div class="form-group col-md-6 col-sm-12 col-xs-12">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Status </label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                      <select class="form-control select-tag" id="status" name="status" >
                      <option value="">Any</option>
                      <option value="8">Waiting for Delivery</option>
                      <option value="9">Delivered</option>
                      </select>
                  </div>
                </div>
                
                <div class="form-group col-md-6 col-sm-12 col-xs-12">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Select Date </label>
                  <div id="reportrange_right" class="pull-left col-md-9 col-sm-9 col-xs-12" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc" >
                    <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                    <span name="date">Click here to select range</span> <b class="caret"></b>
                    <input id="date" type="hidden" name="date" />
                  </div>
                </div>
                <input type="submit" name="">
              </form>
                <script>
                  $(function() { 
                      $("#reference").change(function(){ 
                          var element = $(this).find('option:selected'); 
                          var customerName = element.attr("customerName");
                          var fatherName = element.attr("fatherName");
                          var motherName = element.attr("motherName");
                          var permanentAddress = element.attr("permanentAddress");
                          var presentAddress = element.attr("presentAddress");

                          // $('#permanentAddress').val(permanentAddress);
                          // $('#presentAddress').val(presentAddress);
                          
                          if($("#reference").val()!="NULL"){
                            $('#customerName').val(customerName);
                            $('#fatherName').val(fatherName);
                            $('#motherName').val(motherName);
                            $('#phone').prop('disabled', true);
                            $('#permanentAddress').prop('disabled', true);
                            $('#presentAddress').prop('disabled', true);
                          }else{
                            $('#customerName').val("");
                            $('#fatherName').val("");
                            $('#motherName').val("");
                            $('#phone').prop('disabled', false);
                            $('#permanentAddress').prop('disabled', false);
                            $('#presentAddress').prop('disabled', false);
                          }
                            
                      });
                      $("#zoneId").change(function(){ 
                          var element = $(this).find('option:selected'); 
  
                          $('#cityId').empty();
                          var dropDown = document.getElementById("zoneId");
                          var zoneId = dropDown.options[dropDown.selectedIndex].value;
                          $.ajax({
                                  type: "POST",
                                  url: "<?php echo base_url()?>report/get_city_list_ajax/",
                                  data: { 'zoneId': zoneId  },
                                  success: function(data){
                                      // Parse the returned json data
                                      var opts = $.parseJSON(data);
                                      // Use jQuery's each to iterate over the opts value
                                      $('#cityId').append('<option value="">Any</option>');
                                      $.each(opts, function(i, d) {
                                          // You will need to alter the below to get the right values from your json object.  Guessing that d.id / d.modelName are columns in your carModels data
                                          $('#cityId').append('<option value="' + d.city_id + '">' + d.city_name + '</option>');
                                      });
                                  }
                              });
                      });

                      $("#cityId").change(function(){ 
                          var element = $(this).find('option:selected'); 
                          
                          $('#salesPerson').empty();
                          var dropDown = document.getElementById("cityId");
                          var cityId = dropDown.options[dropDown.selectedIndex].value;
                          $.ajax({
                                  type: "POST",
                                  url: "<?php echo base_url()?>customer/get_sales_person/",
                                  data: { 'cityId': cityId  },
                                  success: function(data){
                                      // Parse the returned json data
                                      var opts = $.parseJSON(data);
                                      // Use jQuery's each to iterate over the opts value
                                      $('#salesPerson').append('<option value="">Any</option>');
                                      $.each(opts, function(i, d) {
                                          // You will need to alter the below to get the right values from your json object.  Guessing that d.id / d.modelName are columns in your carModels data
                                          $('#salesPerson').append('<option value="' + d.employee_id + '">' + d.employee_name + '</option>');
                                      });
                                  }
                              });
                      });
                      $("#vehicleModel").change(function(){ 
                          var element = $(this).find('option:selected'); 
                          var modelCode = element.attr("modelCode");
                          var totalPrice = element.attr("creditPrice");
                          
                          $('#modelCode').val(modelCode);
                          $('#total-price').val(totalPrice);

                      });
                      $("#paymentMode").change(function(){ 
                          var element = $(this).find('option:selected'); 
                          if($("#paymentMode").val()==3){
                            $('#period').prop('disabled', true);
                            $('#interestRate').prop('disabled', true);
                            $('#downPayment').prop('disabled', true);
                          } else if($("#paymentMode").val()==4){
                            $('#period').prop('disabled', true);
                            $('#interestRate').prop('disabled', true);
                            $('#downPayment').prop('disabled', true);
                          } else if ($("#paymentMode").val()==2){
                            $('#period').prop('disabled', false);
                            $('#interestRate').prop('disabled', true);
                            $('#downPayment').prop('disabled', false);
                          } else{
                            $('#period').prop('disabled', false);
                            $('#totalPrice').prop('disabled', false);
                            $('#downPayment').prop('disabled', false);
                            $('#interestRate').prop('disabled', false);
                          }
                          
                          // $('#zoneId').val(zoneId);
                      });

                      $("#reset").click(function(){
                          $('#permanentAddress').prop('disabled', false);
                          $('#presentAddress').prop('disabled', false);
                          $('#period').prop('disabled', false);
                          $('#interestRate').prop('disabled', false);
                          $('#discount').prop('disabled', false);
                          $("#paymentMode").val("1").change();
                          $("#reference").val("NULL").change();
                      });

                      $("#generate").click(function(){ 
                          $('#report-view').html('');

                          
                          var zoneId = $('#zoneId').val();
                          var cityId = $('#cityId').val();
                          var districtId = $('#districtId').val();
                          var subDistrictId = $('#subDistrictId').val();
                          var mktId  = $('#salesPerson').val();
                          var modelId= $('#vehicleModel').val();
                          var yardId = $('#yardId').val();
                          var paymentMode = $('#paymentMode').val();
                          var date   = $('#date').val();
                          var status =  $('#status').val();
                          $.ajax({
                                  type: "POST",
                                  url: "<?php echo base_url()?>report/generate_sales_report/",
                                  data: { 'zone_id': zoneId, 'city_id' : cityId, 'district_id' : districtId, 'sub_district_id' : subDistrictId, 'mkt_id' : mktId, 'model_id': modelId,'yard_id': yardId, 'payment_mode': paymentMode, 'date': date, 'status' : status  },
                                  success: function(data){
                                      // Parse the returned json data
                                      var opts = $.parseJSON(data);
                                      // Use jQuery's each to iterate over the opts value
                                      $('#report-view').html(opts);

                                      var table = $("#datatable-buttons5").DataTable({
                                      dom: "Bfrtip",
                                      buttons: [
                                      {
                                        extend: "copy",
                                        className: "btn-sm"
                                      },
                                      {
                                        extend: "csv",
                                        className: "btn-sm"
                                      },
                                      {
                                        extend: "excel",
                                        className: "btn-sm"
                                      },
                                      {
                                        extend: 'pdf',
                                        className: "btn-sm",
                                        messageBottom: null
                                      },
                                      {
                                        extend: "pdfHtml5",
                                        className: "btn-sm"
                                      },
                                      {
                                        extend: "print",
                                        className: "btn-sm"
                                      },
                                      ],
                                      responsive: true,
                                      retrieve: true,
                                      destroy: true,
                                      paging: true
                                    });

                                   

                                  }
                              });
                          
                      });
  

                  }); 
                </script>
                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                    <button class="btn btn-primary" type="reset" id="reset">Reset</button>
                    <button id="generate" class="btn btn-success">Generate</button>
                    <!-- <button type="submit" class="btn btn-success">Submit</button> -->
                </div>
                
                <div class="clearfix"></div>
                <br />
            <!-- </form> -->
            </div>
        </div>
        </div>
  </div>

  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h2>Customer List <small></small></h2>
          <ul class="nav navbar-right panel_toolbox">
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
            </li>
            <li><a class="close-link"><i class="fa fa-close"></i></a>
            </li>
          </ul>
          <div class="clearfix"></div>
        </div>
        <div class="x_content"  >
          <!-- <p class="text-muted font-13 m-b-30">
            DataTables has most features enabled by default, so all you need to do to use it with your own tables is to call the construction function: <code>$().DataTable();</code>
          </p> -->
          <table id="datatable-buttons5" class="table table-striped table-bordered" >
            <thead>
              <tr>
                <th>SN</th>
                <th>Customer ID</th>
                <th>Customer Name</th>
                <th>City</th>
                <th>District</th>
                <th>Sub District</th>
                <th>Present Address</th>
                <th>Phone</th>
                <th>Model</th>
                <th>Application</th>
                <th>Engine No</th>
                <th>Chassis No</th>
                <th>Price</th>
                <th>Downpayment</th>
                <th>Period</th>
                <th>Sales Person</th>
                <th>Dealer Name</th>
                <th>Sales Generated By</th>
                <th>Payment Mode</th>
                <th>DO Date</th>
                <th>DC Date</th>
                <th>Delivery Point</th>
                <th>LC Bank</th>
                <th>Broker Name</th>
                <th>Broker NID</th>
                <th>Broker Commission</th>
              </tr>
              </thead>
              <tbody id="report-view">
              </tbody>
          </table>
          
        </div>
      </div>
      </div>
  </div>
</div>
</div>

<script type="text/javascript">
  $("#districtId").change(function(){
      // $('#subDistrictId').val('');
      // $('#subDistrictId').change();
      if($('#districtId').val()!="NULL"){
        $('#subDistrictId').empty();
        $(".sub-district-container").css("display", "block");
        // $('.sub-district-container').show(500);
      }
      var districtId = $('#districtId option:selected').val();
      $.ajax({
          type: "POST",
          url: "<?php echo base_url()?>customer/ajax_generate_sub_districts/",
          data: { 'district_id': districtId  },
          success: function(data){
              // Parse the returned json data
              var opts = $.parseJSON(data);
              // Use jQuery's each to iterate over the opts value
              $('#subDistrictId').append('<option value="">Select </option>');

              $.each(opts, function(i, d) {
                  // You will need to alter the below to get the right values from your json object.  Guessing that d.id / d.modelName are columns in your carModels data
                  $('#subDistrictId').append('<option value="' + d.sub_district_id + '">' + d.sub_district_name + '</option>');

              });
          }
      });
  });
</script>

