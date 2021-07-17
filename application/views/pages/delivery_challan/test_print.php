<div class="right_col" role="main">
  <div class="page-title">
    <div class="title_left">
      <h3>Delivery Challan <small></small></h3>
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
		<form action="<?php echo base_url(); ?>delivery_challan/test_print_dc/" target="_blank" method="post">
			<input type="text" value="67415" name="customer_id">
	    	<a onclick='this.parentNode.submit(); return false;' href="#"><i class="fa fa-print"></i> print</a>
		</form>	
	</div>
</div>
