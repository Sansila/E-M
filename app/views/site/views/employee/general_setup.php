<?php 
	
	$year=$this->session->userdata('year');
	
	$m='';
	$p='';
	if(isset($_GET['m'])){
    	$m=$_GET['m'];
    }
    if(isset($_GET['p'])){
        $p=$_GET['p'];
    }
    // print_r($rowdetail);
?>
<div class="wrapper">
	<div class="clearfix" id="main_content_outer">
	    <div id="main_content">
	      <div class="row result_info">
	      	<div class="col-xs-6">
		      	<strong>Setup Employee Time</strong>
		    </div>
		    <div class="col-xs-6" style="text-align: right">
		      		      		
		    </div>
	      </div>
	      <?php 
	      // print_r($row);
	     
	      $daydetailarr=array();
	      if(isset($daysdetail)){
	      	foreach ($daysdetail as $rows) {
	      		$daydetailarr[$rows->days]=$rows->days; # code...
	      	}

	      } ?>
	      	<!---Start form-->
			<form id="contract_register" method="POST" enctype="multipart/form-data"  action="<?php echo site_url("employee/general_setup/save/$row->id?save=add&m=$m&p=$p")?>">
	     		<div class="row">
	     			<div class="col-sm-12">
	     				<div class="panel panel-default">
	     					<div class="panel-heading">
	     						<h4 class="panel-title">SET YOUR WORKING TIME</h4>
	     					</div>
	     					<div class="panel-body">
	     						<div class="row">
	     							<div class="col-sm-12">
	     								<div class="form_sep">
			     							<label>Title</label>
			     							<!-- <div class="input-group bootstrap-timepicker timepicker"> -->
			     								<input type="text" name="title" value="<?php echo $row->title ?>" id="title" class="form-control" placeholder='Title'>
			     								<!-- <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span> -->
			     							<!-- </div>	 -->
			     						</div>
	     							</div>
	     							<div class="col-xs-4">
	     								<div class="form_sep">
			     							<label>Morning Check-in</label>
			     							<div class="input-group bootstrap-timepicker timepicker">
			     								<input type="text" name="m_in" value="<?php echo $row->m_checkin ?>" id="m_in" class="time form-control">
			     								<span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
			     							</div>	
			     						</div>
			     						<div class="form_sep">
			     							<label>Morning Check-out</label>
			     							<div class="input-group bootstrap-timepicker timepicker">
			     								<input type="text" name="m_out"  id="m_out" value="<?php echo $row->m_checkout ?>" class="time form-control" data-required="true" required data-parsley-required-message="Enter Contract ID">
			     								<span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
			     							</div>
			     						</div>
			     						<div class="form_sep">
			     							<label>Afternoon Check-in</label>
			     							<div class="input-group bootstrap-timepicker timepicker">
			     								<input type="text" name="a_in" value="<?php echo $row->a_checkin ?>" id="a_in" class=" time form-control" data-required="true" required data-parsley-required-message="Enter Contract ID">
			     								<span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
			     							</div>
			     						</div>

			     						<div class="form_sep">
			     							<label>Afternoon Check-out</label>
			     							<div class="input-group bootstrap-timepicker timepicker">
			     								<input type="text" name="a_out"  id="a_out"  value="<?php echo $row->a_checkout ?>" class="time form-control" data-required="true" required data-parsley-required-message="Enter Contract ID">
			     								<span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
			     							</div>
			     						</div>			     						
			     						<div class="form_sep">
			     							<label>Evening Check-in</label>
			     							<div class="input-group bootstrap-timepicker timepicker">
			     								<input type="text" name="e_in" value="<?php echo $row->e_checkin ?>" id="e_in" class="time form-control" data-required="true" required data-parsley-required-message="Enter Contract ID">
			     								<span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
			     							</div>
			     						</div>
			     						<div class="form_sep">
			     							<label>Evening Check-out</label>
			     							<div class="input-group bootstrap-timepicker timepicker">
			     								<input type="text" name="e_out"  id="e_out"  value="<?php echo $row->e_check_out ?>" class="time form-control" data-required="true" required data-parsley-required-message="Enter Contract ID">
			     								<span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
			     								
			     							</div>
			     						</div>
	     							</div>
	     							
	     							<div class="col-xs-4">
	     								<div class="form_sep">
			     							<label>Before morning checkin</label>
			     							<div class="input-group bootstrap-timepicker timepicker">
			     								<input type="text" name="m_margin_b_in"  id="m_margin_b_in"  value="<?php echo $rowdetail[0]->margin_befor ?>" onkeypress="return isNumberKey(event);" class="form-control" data-required="true" placeholder="Minute" required data-parsley-required-message="Enter Contract ID">
			     								<span class="input-group-addon">Min</span>
			     							</div>
			     						</div>
			     						<div class="form_sep">
			     							<label>Before morning checkout</label>
			     							<div class="input-group bootstrap-timepicker timepicker">
			     								<input type="text" name="m_margin_b_out"  id="m_margin_b_out" value="<?php echo $rowdetail[1]->margin_befor ?>" onkeypress="return isNumberKey(event);" class="form-control" data-required="true"  placeholder="Minute" required data-parsley-required-message="Enter Contract ID">
			     								<span class="input-group-addon">Min</span>
			     							</div>
			     						</div>
			     						<div class="form_sep">
			     							<label>Before afternoon checkin</label>
			     							<div class="input-group bootstrap-timepicker timepicker">
			     								<input type="text" name="a_margin_b_in"  id="a_margin_b_in" value="<?php echo $rowdetail[2]->margin_befor ?>" onkeypress="return isNumberKey(event);" class="form-control" data-required="true" placeholder="Minute" required data-parsley-required-message="Enter Contract ID">
			     								<span class="input-group-addon">Min</span>
			     								
			     							</div>
			     						</div>
			     						<div class="form_sep">
			     							<label>Before afternoon checkout</label>
			     							<div class="input-group bootstrap-timepicker timepicker">
			     								<input type="text" name="a_margin_b_out"  id="a_margin_b_out" value="<?php echo $rowdetail[3]->margin_befor ?>" onkeypress="return isNumberKey(event);" class="form-control" data-required="true" placeholder="Minute" required data-parsley-required-message="Enter Contract ID">
			     								<span class="input-group-addon">Min</span>
			     							</div>
			     						</div>
			     						<div class="form_sep">
			     							<label>Before evening checkin</label>
			     							<div class="input-group bootstrap-timepicker timepicker">
			     								<input type="text" name="e_margin_b_in"  id="e_margin_b_in" value="<?php echo $rowdetail[4]->margin_befor ?>" onkeypress="return isNumberKey(event);" class="form-control" data-required="true"  placeholder="Minute" required data-parsley-required-message="Enter Contract ID">
			     								<span class="input-group-addon">Min</span>
			     							</div>
			     						</div>
			     						<div class="form_sep">
			     							<label>Before evening checkout</label>
			     							<div class="input-group bootstrap-timepicker timepicker">
			     								<input type="text" name="e_margin_b_out"  id="e_margin_b_out" value="<?php echo $rowdetail[5]->margin_befor ?>" onkeypress="return isNumberKey(event);" class="form-control" data-required="true" placeholder="Minute" required data-parsley-required-message="Enter Contract ID">
			     								<span class="input-group-addon">Min</span>
			     								
			     							</div>
			     						</div>
	     								
	     							</div>
	     							<div class="col-xs-4">
	     								<div class="form_sep">
			     							<label>After morning checkin</label>
			     							<div class="input-group bootstrap-timepicker timepicker">
			     								<input type="text" name="m_margin_a_in"  id="m_margin_a_in"  value="<?php echo $rowdetail[0]->margin_after ?>" onkeypress="return isNumberKey(event);" class="form-control" data-required="true" placeholder="Minute" required data-parsley-required-message="Enter Contract ID">
			     								<span class="input-group-addon">Min</span>
			     							</div>
			     						</div>
			     						<div class="form_sep">
			     							<label>After morning checkout</label>
			     							<div class="input-group bootstrap-timepicker timepicker">
			     								<input type="text" name="m_margin_a_out"  id="m_margin_a_out" value="<?php echo $rowdetail[1]->margin_after ?>" onkeypress="return isNumberKey(event);" class="form-control" data-required="true"  placeholder="Minute" required data-parsley-required-message="Enter Contract ID">
			     								<span class="input-group-addon">Min</span>
			     							</div>
			     						</div>
			     						<div class="form_sep">
			     							<label>After afternoon checkin</label>
			     							<div class="input-group bootstrap-timepicker timepicker">
			     								<input type="text" name="a_margin_a_in"  id="a_margin_a_in" value="<?php echo $rowdetail[2]->margin_after ?>" onkeypress="return isNumberKey(event);" class="form-control" data-required="true" placeholder="Minute" required data-parsley-required-message="Enter Contract ID">
			     								<span class="input-group-addon">Min</span>
			     								
			     							</div>
			     						</div>
			     						<div class="form_sep">
			     							<label>After afternoon checkout</label>
			     							<div class="input-group bootstrap-timepicker timepicker">
			     								<input type="text" name="a_margin_a_out"  id="a_margin_a_out" value="<?php echo $rowdetail[3]->margin_after ?>" onkeypress="return isNumberKey(event);" class="form-control" data-required="true" placeholder="Minute" required data-parsley-required-message="Enter Contract ID">
			     								<span class="input-group-addon">Min</span>
			     							</div>
			     						</div>
			     						<div class="form_sep">
			     							<label>After evening checkin</label>
			     							<div class="input-group bootstrap-timepicker timepicker">
			     								<input type="text" name="e_margin_a_in"  id="e_margin_a_in" value="<?php echo $rowdetail[4]->margin_after ?>" onkeypress="return isNumberKey(event);" class="form-control" data-required="true"  placeholder="Minute" required data-parsley-required-message="Enter Contract ID">
			     								<span class="input-group-addon">Min</span>
			     							</div>
			     						</div>
			     						<div class="form_sep">
			     							<label>After evening checkout</label>
			     							<div class="input-group bootstrap-timepicker timepicker">
			     								<input type="text" name="e_margin_a_out"  id="e_margin_a_out" value="<?php echo $rowdetail[5]->margin_after ?>" onkeypress="return isNumberKey(event);" class="form-control" data-required="true" placeholder="Minute" required data-parsley-required-message="Enter Contract ID">
			     								<span class="input-group-addon">Min</span>
			     								
			     							</div>
			     						</div>
			     						
	     								
	     							</div>
	     							<?php 
	     									$timestamp = strtotime('next Sunday');
											$days = array();
											for ($i = 0; $i < 7; $i++) {
											    $days[] = strftime('%A', $timestamp);
											    $timestamp = strtotime('+1 day', $timestamp);
											}
	     							 ?>
	     							<div class="col-sm-12">
			     							<label>Working Days</label>
			     							<div class="col-sm-12">
			     							<?php 
			     							// print_r($daydetailarr);
			     								foreach ($days as $key => $value) {
			     									$check='';
			     									if(isset($daydetailarr[$value])){
			     										$check='checked';
			     									}
			     									echo "<label><input type='checkbox' $check name='working_day[]' value='$value'> $value</label> ";# code...
			     								}
			     							?>
			     								
			     								<!-- <label><input type="checkbox" name="working_day[]"> Monday</label>
			     								<label><input type="checkbox" name="working_day[]"> Monday</label>
			     								<label><input type="checkbox" name="working_day[]"> Monday</label>
			     								<label><input type="checkbox" name="working_day[]"> Monday</label>
			     								<label><input type="checkbox" name="working_day[]"> Monday</label>
			     								<label><input type="checkbox" name="working_day[]"> Monday</label>
			     								<label><input type="checkbox" name="working_day[]"> Monday</label>
			     								<label><input type="checkbox" name="working_day[]"> Monday</label> -->
			     							</div>
			     							
			     					</div>
	     						</div>
	     						<p></p>
	     						<div class="row">
	     							<div class="col-xs-12">
	     								<button class="btn btn-success pull-right">SUBMIT</button>
	     							</div>
	     						</div>
	     					</div>
	     				</div>
	     			</div>
	     		</div>
	     	</form>
	     	<!---End form-->
	    </div>
	</div>
</div>
<!--Modal  -->
<div class="modal fade" id="myModal_IDCard" data-backdrop=false>
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"><b>Warning</b></h4>
      </div>
      <div class="modal-body">
        <b class="message-body"></b>
      </div> 
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal">OK</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div>
<script type="text/javascript">
	$(function(){
		$('.time').timepicker({
                template: false,
                showInputs: true,
                minuteStep: 5,
                showMeridian:false
            });
	})
	function isNumberKey(evt){
        var e = window.event || evt; // for trans-browser compatibility 
        var charCode = e.which || e.keyCode; 
        if ((charCode > 45 && charCode < 58) || charCode == 8){ 
            return true; 
        } 
        return false;  
        }
</script>