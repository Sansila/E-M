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
	      <form id="position_register" method="POST" enctype="multipart/form-data"  action="<?php echo site_url('employee/position/save?&save=edit')?>">
	      		<div class="row">
	     			<div class="col-sm-12">
	     				<div class="panel panel-default">
	     					<div class="panel-heading">
	     						<h4 class="panel-title">Position Detail
									
	     						</h4>
	     					</div>
	     					<div class="panel-body">
	     						<div class="row">
	     							<div class="col-xs-6">
	     								<div class="form_sep">
	     									<label>Postion</label>
	     									<input type="hidden" id="posid" name="posid" value="<?php echo $pos_row['posid'];?>">
	     									<input type="text" name="position" value="<?php echo $pos_row['position'];?>" id="position" class="form-control parsley-validated" data-required="true" required data-parsley-required-message="Enter Position">
	     								</div>
	     							</div>
	     							<div class="col-xs-6">
	     								<label>Postion (Kh)</label>
	     								<input type="text" name="position_kh" value="<?php echo $pos_row['position_kh'];?>" id="position_kh" class="form-control">
	     							</div>
	     							<div class="col-xs-6">
	     								<label>Job Description</label>
	     								<textarea name="description" id="description" class="form-control"><?php echo $pos_row['description'];?></textarea>
	     							</div>
	     							<div class="col-xs-6">
	     								<div class="checkbox">
	     									<label><input type="checkbox" name="teacher" <?php echo $pos_row['match_con_posid']=='tch'?'checked':'';?> value='tch' /> Teacher</label>
	     								</div>
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
		$("#position_register").parsley();
	});
</script>