<div class="right_col" role="main">
<div class="">
  <div class="page-title">
    <div class="title_left">
      <h3>Incentive Master <small></small></h3>
    </div>

    <div class="title_right">
      <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Search for...">
          <span class="input-group-btn">
            <button class="btn btn-default" type="button">Go!</button>
          </span>
        </div>
      </div>
    </div>
  </div>

  <div class="clearfix"></div>

  <div class="row">
    <div class="col-md-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h2>Incentive Amount as per Models</h2>
          <ul class="nav navbar-right panel_toolbox">
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Settings 1</a>
                </li>
                <li><a href="#">Settings 2</a>
                </li>
              </ul>
            </li>
            <li><a class="close-link"><i class="fa fa-close"></i></a>
            </li>
          </ul>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
          <!-- <p class="text-muted font-13 m-b-30">
            DataTables has most features enabled by default, so all you need to do to use it with your own tables is to call the construction function: <code>$().DataTable();</code>
          </p> -->
          <table id="datatable-buttons" class="table table-striped table-bordered">
            <thead>
              <tr>
                <th>Model Name</th>
                <th>Code</th>
                <th>Category</th>
                <th>Sub Category</th>
                <th>Incentive Cr</th>
                <th>Incentive SC</th>
                <th>Incentive Cash</th>
                <th>Action</th>
              </tr>
            </thead>

            <tbody>
            <?php foreach($model_list as $value){?>
              <tr>
                <td><?php echo $value->model_name; ?></td>
                <td><?php echo $value->model_code; ?></td>
                <td><?php echo $value->category; ?></td>
                <td><?php echo $value->sub_category; ?></td>
                <form id="<?php echo $value->model_id; ?>" method="post" action="<?php echo base_url(); ?>incentive/update_model_wise_incentive/">
                    <input type="hidden" name="model_id" value="<?php echo $value->model_id; ?>">
                    <td><input type="number" class="form-control" step="1" min="0" name="incentive_credit" value="<?php echo $value->incentive_credit; ?>" required></td>
                    <td><input type="number" class="form-control" step="1" min="0" name="incentive_semicash" value="<?php echo $value->incentive_semicash; ?>" required></td>
                    <td><input type="number" class="form-control" step="1" min="0" name="incentive_cash" value="<?php echo $value->incentive_cash; ?>" required></td>
                    <td><a data-value="<?php echo $value->model_id; ?>" href="#" style="color:#269414" class="approve"><i class="fa fa-check" aria-hidden="true" ></i> update</a></td>
                </form>
              </tr>
            <?php }?>
            </tbody>
          </table>
        </div>
      </div>

      <script type="text/javascript">
          $(function() { 
          $( ".approve" ).click(function() {
              var id = $(this).data("value");
              $('#'+id).submit();
          });
      });
      </script>



    </div>

    




    <div class="col-md-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h2>Zonewise TIV and Incentive</h2>
          <ul class="nav navbar-right panel_toolbox">
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Settings 1</a>
                </li>
                <li><a href="#">Settings 2</a>
                </li>
              </ul>
            </li>
            <li><a class="close-link"><i class="fa fa-close"></i></a>
            </li>
          </ul>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
          <!-- <p class="text-muted font-13 m-b-30">
            DataTables has most features enabled by default, so all you need to do to use it with your own tables is to call the construction function: <code>$().DataTable();</code>
          </p> -->

          <form class="form-horizontal form-label-left" method="post"  enctype='multipart/form-data'>
            <div class="form-group col-md-6 col-sm-6 col-xs-12">
              <label class="control-label col-md-3 col-sm-3 col-xs-12">Select Month </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                  <div class="control-group">
                    <div class="controls">
                      <div class="col-md-11 xdisplay_inputx form-group has-feedback">
                        <input type="text" name="tiv_date" class="form-control has-feedback-left" id="single_cal4" placeholder="Select Date" aria-describedby="inputSuccess2Status4">
                        <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                        <span id="inputSuccess2Status4" class="sr-only">(success)</span>
                      </div>
                    </div>
                  </div>
              </div>
            </div>


            
          </form>

          <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
              <button id="generate" class="btn btn-success">Generate</button>
              <!-- <button type="submit" class="btn btn-success">Submit</button> -->
          </div>
          

          <script type="text/javascript">
            $(function() { 

                $("#generate").click(function(){ 
                    $('#report-view').html('');

                    
                    var tivDate = $('#single_cal4').val();
                    $.ajax({
                            type: "POST",
                            url: "<?php echo base_url()?>incentive/generate_tiv/",
                            data: { 'tiv_date': tivDate },
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


          <div class="x_content" id="report-view">
          </div>


        </div>
      </div>

      




    </div>
















    <div class="col-md-6 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h2>Target vs Achievement</h2>
          <ul class="nav navbar-right panel_toolbox">
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Settings 1</a>
                </li>
                <li><a href="#">Settings 2</a>
                </li>
              </ul>
            </li>
            <li><a class="close-link"><i class="fa fa-close"></i></a>
            </li>
          </ul>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
          <!-- <p class="text-muted font-13 m-b-30">
            DataTables has most features enabled by default, so all you need to do to use it with your own tables is to call the construction function: <code>$().DataTable();</code>
          </p> -->

          <form class="form-horizontal form-label-left" method="post"  enctype='multipart/form-data'>
            <div class="form-group col-md-6 col-sm-6 col-xs-12">
              <label class="control-label col-md-3 col-sm-3 col-xs-12">Select Month </label>
              <div class="col-md-9 col-sm-9 col-xs-12">
                  <div class="control-group">
                    <div class="controls">
                      <div class="col-md-11 xdisplay_inputx form-group has-feedback">
                        <input type="text" name="ta_date" class="form-control has-feedback-left" id="single_cal3" placeholder="Select Date" aria-describedby="inputSuccess2Status4">
                        <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                        <span id="inputSuccess2Status4" class="sr-only">(success)</span>
                      </div>
                    </div>
                  </div>
              </div>
            </div>


            
          </form>

          <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
              <button id="generate-ta" class="btn btn-success">Generate</button>
              <!-- <button type="submit" class="btn btn-success">Submit</button> -->
          </div>
          

          <script type="text/javascript">
            $(function() { 

                $("#generate-ta").click(function(){ 
                    $('#report-view').html('');

                    
                    var taDate = $('#single_cal3').val();
                    $.ajax({
                            type: "POST",
                            url: "<?php echo base_url()?>incentive/generate_ta/",
                            data: { 'ta_date': taDate },
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


          <div class="x_content" id="report-view-ta">
          </div>


        </div>
      </div>

      




    </div>




    <div class="col-md-6 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h2>Form Buttons <small>Sessions</small></h2>
          <ul class="nav navbar-right panel_toolbox">
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Settings 1</a>
                </li>
                <li><a href="#">Settings 2</a>
                </li>
              </ul>
            </li>
            <li><a class="close-link"><i class="fa fa-close"></i></a>
            </li>
          </ul>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">

          <form class="form-horizontal form-label-left">

            <div class="form-group">
              <label class="col-sm-3 control-label">Button addons</label>

              <div class="col-sm-9">
                <div class="input-group">
                  <span class="input-group-btn">
                                    <button type="button" class="btn btn-primary">Go!</button>
                                </span>
                  <input type="text" class="form-control">
                </div>
                <div class="input-group">
                  <input type="text" class="form-control">
                  <span class="input-group-btn">
                                    <button type="button" class="btn btn-primary">Go!</button>
                                </span>
                </div>
              </div>
            </div>
            <div class="divider-dashed"></div>

            <div class="form-group">
              <label class="col-sm-3 control-label">Button addons</label>

              <div class="col-sm-9">
                <div class="input-group">
                  <input type="text" class="form-control" aria-label="Text input with dropdown button">
                  <div class="input-group-btn">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Action <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-right" role="menu">
                      <li><a href="#">Action</a>
                      </li>
                      <li><a href="#">Another action</a>
                      </li>
                      <li><a href="#">Something else here</a>
                      </li>
                      <li class="divider"></li>
                      <li><a href="#">Separated link</a>
                      </li>
                    </ul>
                  </div>
                  <!-- /btn-group -->
                </div>
                <div class="input-group">
                  <input type="text" class="form-control">
                  <span class="input-group-btn">
                    <button type="button" class="btn btn-primary">Go!</button>
                  </span>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>





    <div class="col-md-6 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h2>Form Buttons <small>Sessions</small></h2>
          <ul class="nav navbar-right panel_toolbox">
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Settings 1</a>
                </li>
                <li><a href="#">Settings 2</a>
                </li>
              </ul>
            </li>
            <li><a class="close-link"><i class="fa fa-close"></i></a>
            </li>
          </ul>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">

          <form class="form-horizontal form-label-left">

            <div class="form-group">
              <label class="col-sm-3 control-label">Button addons</label>

              <div class="col-sm-9">
                <div class="input-group">
                  <span class="input-group-btn">
                                    <button type="button" class="btn btn-primary">Go!</button>
                                </span>
                  <input type="text" class="form-control">
                </div>
                <div class="input-group">
                  <input type="text" class="form-control">
                  <span class="input-group-btn">
                                    <button type="button" class="btn btn-primary">Go!</button>
                                </span>
                </div>
              </div>
            </div>
            <div class="divider-dashed"></div>

            <div class="form-group">
              <label class="col-sm-3 control-label">Button addons</label>

              <div class="col-sm-9">
                <div class="input-group">
                  <input type="text" class="form-control" aria-label="Text input with dropdown button">
                  <div class="input-group-btn">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Action <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-right" role="menu">
                      <li><a href="#">Action</a>
                      </li>
                      <li><a href="#">Another action</a>
                      </li>
                      <li><a href="#">Something else here</a>
                      </li>
                      <li class="divider"></li>
                      <li><a href="#">Separated link</a>
                      </li>
                    </ul>
                  </div>
                  <!-- /btn-group -->
                </div>
                <div class="input-group">
                  <input type="text" class="form-control">
                  <span class="input-group-btn">
                    <button type="button" class="btn btn-primary">Go!</button>
                  </span>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>






  </div>






</div>
</div>