<div class="wrapper">
	<div class="clearfix" id="main_content_outer">
	    <div id="main_content">
	      <div class="row result_info">
	      	<div class="col-xs-6">
		      	<strong>Position Information</strong>
		    </div>
		    <div class="col-xs-6" style="text-align: right">
		      		      		
		    </div>
	      </div>
	      <!---Start form-->
	      <form id="position_register" method="POST" enctype="multipart/form-data"  action="<?php echo site_url('employee/public_holiday/save/'.$row->holiday_id)?>">
	      		<div class="row">
	     			<div class="col-sm-12">
	     				<div class="panel panel-default">
	     					<div class="panel-heading">
	     						<h4 class="panel-title">Public Holiday Detail</h4>
	     					</div>
	     					<div class="panel-body">
	     						<div class="row">
	     							<div class="col-xs-6">
	     								<div class="form_sep">
	     									<label>Title</label>
	     									<input type="text" value="<?= $row->title ?>" name="title" id="title" class="form-control parsley-validated" data-required="true" required data-parsley-required-message="Enter Title">
	     								</div>
	     							</div>
	     							<div class="col-xs-6">
	     								<label>Stat Date</label>
	     								<input type="text" name="start_date"  value="<?= $row->start_date ?>" id="start_date" class="form-control">
	     							</div>
	     							<div class="col-xs-6">
	     								<label>To Date</label>
	     								<input type="text" name="to_date"  value="<?= $row->to_date ?>" id="to_date" class="form-control">
	     							</div>
	     							<div class="col-xs-6">
	     								<label> Description</label>
	     								<textarea name="description"  value="" id="description" class="form-control"><?= $row->description ?></textarea>
	     							</div>
	     							
	     						</div>
	     						<div class="row">
	     							<div class="col-xs-12">
	     								<button class="btn btn-success">Save</button>
	     							</div>
	     						</div>
	     					</div>
	     				</div>
	     			</div>
	     		</div>
	      </form>
	      <!--End Form-->
	    </div>
	</div>
</div>
<script type="text/javascript">
	$(function(){
		$("#start_date,#to_date").datepicker({
	  		language: 'en',
	  		pick12HourFormat: true,
	  		format:'yyyy-mm-dd'
		});
		$("#position_register").parsley();
	});
</script>