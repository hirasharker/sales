<div class="right_col" role="main">
<div class="">
  <div class="page-title">
    <div class="title_left">
      <h3>Vehicle Model <small></small></h3>
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
    <div class="col-md-5 col-sm-6 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
            <!-- <h2>Add new Employees <small>click the plus icon to add new employee..</small></h2> -->
            <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link">Add New <i class="fa fa-plus"></i></a>
                </li>
                <li class="dropdown">
                </li>
                <!-- <li><a class="close-link"><i class="fa fa-close"></i></a>
                </li> -->
            </ul>
              <div class="clearfix"></div>
            </div>
            <div class="x_content" style="display:none">
            <br />
            <form class="form-horizontal form-label-left" method="post" action="<?php echo base_url();?>model/add_model/">

                <div class="x_title">
                <h2>Vehicle Model <small></small></h2>
                  <div class="clearfix"></div>
                </div>


                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Model Name </label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                      <input type="text" class="form-control" name="model_name" placeholder="">
                  </div>
                </div>
                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Model Code </label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                      <input type="number" class="form-control" name="model_code" placeholder="">
                  </div>
                </div>
                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Price </label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                      <input type="text" class="form-control" name="total_price" placeholder="">
                  </div>
                </div>
                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Downpayment </label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                      <input type="text" class="form-control" name="downpayment" placeholder="">
                  </div>
                </div>
                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Interest Rate </label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                      <input type="text" class="form-control" name="interest_rate" placeholder="">
                  </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                  <button class="btn btn-primary" type="reset">Reset</button>
                  <button type="submit" class="btn btn-success">Submit</button>
                </div>
                <div class="x_title">
                  <div class="clearfix"></div>
                </div>
            </form>
            </div>
        </div>
        </div>
  </div>

  <div class="row">
    <div class="col-md-5 col-sm-6 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h2>Vehicle Model List <small></small></h2>
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
                <td>Price</td>
                <td>Downpayment</td>
                <td>Interest Rate</td>
                <td>Action</td>
              </tr>
            </thead>

            <tbody>
            <?php foreach($model_list as $value){?>
              <tr>
                <td><?php echo $value->model_name; ?></td>
                <td><?php echo $value->total_price; ?></td>
                <td><?php echo $value->downpayment; ?></td>
                <td><?php echo $value->interest_rate; ?>%</td>
                <td><a href="#">edit</a> | <a href="#">delete</a></td>
              </tr>
            <?php }?>
            </tbody>
          </table>
        </div>
      </div>
      </div>
  </div>
</div>
</div>