
<div class="right_col" role="main">
<div class="">
  <div class="page-title">
    <div class="title_left">
      <h3>Inspection <small></small></h3>
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
	<div class="col-md-12">
        <div class="card"><!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="#waiting-for-inspection" aria-controls="waiting-for-inspection" role="tab" data-toggle="tab">Waiting for Inspection</a></li>
                <li role="presentation"><a href="#denied" aria-controls="denied" role="tab" data-toggle="tab">Denied</a></li>
                <li role="presentation"><a href="#verified" aria-controls="verified" role="tab" data-toggle="tab">Verified</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="waiting-for-inspection">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                            <h2>Customer List for inspection<small></small></h2>
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
                                <table id="datatable-buttons1" class="table table-striped table-bordered">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Customer Name</th>
                                        <th>Present Address</th>
                                        <th>Date</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>00-00-000-000-00001</td>
                                        <td>Md. Salim Uddin</td>
                                        <td>Tongi, Gazipur.</td>
                                        <td>2017/10/25</td>
                                        <td><a href="#"><i class="fa fa-expand" aria-hidden="true" ></i> Detail</a> | <a href="#" style="color:#269414"><i class="fa fa-check" aria-hidden="true" ></i> Verify</a> | <a href="#" style="color:#f00"><i class="fa fa-times" aria-hidden="true" ></i> Deny</a></td>
                                    </tr>
                                    <tr>
                                        <td>00-00-000-000-00002</td>
                                        <td>Md. Kalim Uddin</td>
                                        <td>Sonargaon Road, Dhaka.</td>
                                        <td>2017/11/15</td>
                                        <td><a href="#"><i class="fa fa-expand" aria-hidden="true" ></i> Detail</a> | <a href="#" style="color:#269414"><i class="fa fa-check" aria-hidden="true" ></i> Verify</a> | <a href="#" style="color:#f00"><i class="fa fa-times" aria-hidden="true" ></i> Deny</a></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div role="tabpanel" class="tab-pane" id="denied">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Customer List <small></small></h2>
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
                                    <table id="datatable-buttons2" class="table table-striped table-bordered">
                                        <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Customer Name</th>
                                            <th>Present Address</th>
                                            <th>Date</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>00-00-000-000-00001</td>
                                            <td>Md. Salim Uddin</td>
                                            <td>Tongi, Gazipur.</td>
                                            <td>2017/10/25</td>
                                            <td><a href="#"><i class="fa fa-expand" aria-hidden="true" ></i> Detail</a> | <a href="#" style="color:#269414"><i class="fa fa-check" aria-hidden="true" ></i> Verify</a></td>
                                        </tr>
                                        <tr>
                                            <td>00-00-000-000-00002</td>
                                            <td>Md. Kalim Uddin</td>
                                            <td>Sonargaon Road, Dhaka.</td>
                                            <td>2017/11/15</td>
                                            <td><a href="#"><i class="fa fa-expand" aria-hidden="true" ></i> Detail</a> | <a href="#" style="color:#269414"><i class="fa fa-check" aria-hidden="true" ></i> Verify</a></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    <div class="clearfix"></div>
                </div>
                <div role="tabpanel" class="tab-pane" id="verified">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Customer List <small></small></h2>
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
                                <table id="datatable-buttons3" class="table table-striped table-bordered">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Customer Name</th>
                                        <th>Present Address</th>
                                        <th>Date</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>00-00-000-000-00001</td>
                                        <td>Md. Salim Uddin</td>
                                        <td>Tongi, Gazipur</td>
                                        <td>2017/10/25</td>
                                        <td><a href="#"><i class="fa fa-expand" aria-hidden="true" ></i> Detail</a> | <a href="#" style="color:#f00"><i class="fa fa-times" aria-hidden="true" ></i> Deny</a></td>
                                    </tr>
                                    <tr>
                                        <td>00-00-000-000-00002</td>
                                        <td>Md. Kalim Uddin</td>
                                        <td>Sonargaon Road, Dhaka-1000.</td>
                                        <td>2017/11/15</td>
                                        <td><a href="#"><i class="fa fa-expand" aria-hidden="true" ></i> Detail</a> | <a href="#" style="color:#f00"><i class="fa fa-times" aria-hidden="true" ></i> Deny</a></td>
                                    </tr>
                                    </tbody>
                                </table>
                                </div>
                            </div>
                        </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
  </div>
</div>
</div>

<script>
</script>

