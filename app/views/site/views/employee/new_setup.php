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
<form id="contract_register" method="POST" enctype="multipart/form-data"  action="">
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
			
	     		<div class="row">
	     			<div class="col-sm-12">
	     				<div class="panel panel-default">
	     					<div class="panel-heading">
	     						<h4 class="panel-title">SET YOUR WORKING TIME</h4>
	     					</div>
	     					<div class="panel-body">
	     						<div class="row">
	     							
	     							<?php 
	     									$timestamp = strtotime('next Sunday');
											$days = array();
											for ($i = 0; $i < 7; $i++) {
											    $days[] = strftime('%A', $timestamp);
											    $timestamp = strtotime('+1 day', $timestamp);
											}
	     							 ?>
	     							<div class="col-sm-12">
			     							<label>Work Days</label>
			     							<div class="col-sm-12">
			     							<?php 
			     							// print_r($daydetailarr);
			     								foreach ($days as $key => $value) {
			     									// $check='';
			     									// if(isset($daydetailarr[$value])){
			     									// 	$check='checked';
			     									// }
			     									echo "<label><input type='checkbox' $check name='working_day' value='$value'> $value</label> ";# code...
			     								}
			     							?>
			     							</div>
			     							
			     					</div>
			     					<div class="col-sm-12">
			     							<label>Shift Time</label>
			     							<div class="col-sm-12">
			     								<label><input type='checkbox' name='shift' checked value='morning'> Morning</label>
			     								<label><input type='checkbox' name='shift' checked value='afternoon'> Afternoon</label>
			     								<label><input type='checkbox' name='shift' checked value='evening'> Evening</label>
			     							</div>
			     							
			     					</div>
	     							<div class="col-xs-4">
	     								<div class="form_sep morning">
			     							<label>Morning Check-in</label>
			     							<div class="input-group bootstrap-timepicker timepicker">
			     								<input type="text"  value="" id="m_in" class="time form-control">
			     								<span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
			     							</div>	
			     						</div>
			     						<div class="form_sep morning">
			     							<label>Morning Check-out</label>
			     							<div class="input-group bootstrap-timepicker timepicker">
			     								<input type="text"  id="m_out" value="" class="time form-control" data-parsley-required-message="Enter Contract ID">
			     								<span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
			     							</div>
			     						</div>
			     						<div class="form_sep afternoon">
			     							<label>Afternoon Check-in</label>
			     							<div class="input-group bootstrap-timepicker timepicker">
			     								<input type="text"  value="" id="a_in" class=" time form-control" data-parsley-required-message="Enter Contract ID">
			     								<span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
			     							</div>
			     						</div>

			     						<div class="form_sep afternoon">
			     							<label>Afternoon Check-out</label>
			     							<div class="input-group bootstrap-timepicker timepicker">
			     								<input type="text"  id="a_out"  value="" class="time form-control" data-parsley-required-message="Enter Contract ID">
			     								<span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
			     							</div>
			     						</div>			     						
			     						<div class="form_sep evening">
			     							<label>Evening Check-in</label>
			     							<div class="input-group bootstrap-timepicker timepicker">
			     								<input type="text"  value="" id="e_in" class="time form-control" data-parsley-required-message="Enter Contract ID">
			     								<span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
			     							</div>
			     						</div>
			     						<div class="form_sep evening">
			     							<label>Evening Check-out</label>
			     							<div class="input-group bootstrap-timepicker timepicker">
			     								<input type="text"   id="e_out"  value="" class="time form-control" data-parsley-required-message="Enter Contract ID">
			     								<span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
			     								
			     							</div>
			     						</div>
	     							</div>
	     							
	     							<div class="col-xs-4">
	     								<div class="form_sep morning">
			     							<label>Before morning checkin</label>
			     							<div class="input-group bootstrap-timepicker timepicker">
			     								<input type="text"  id="m_margin_b_in"  value="" onkeypress="return isNumberKey(event);" class="form-control" data-required="true" placeholder="Minute" data-parsley-required-message="Enter Contract ID">
			     								<span class="input-group-addon">Min</span>
			     							</div>
			     						</div>
			     						<div class="form_sep morning">
			     							<label>Before morning checkout</label>
			     							<div class="input-group bootstrap-timepicker timepicker">
			     								<input type="text"   id="m_margin_b_out" value="" onkeypress="return isNumberKey(event);" class="form-control" data-required="true"  placeholder="Minute" data-parsley-required-message="Enter Contract ID">
			     								<span class="input-group-addon">Min</span>
			     							</div>
			     						</div>
			     						<div class="form_sep afternoon">
			     							<label>Before afternoon checkin</label>
			     							<div class="input-group bootstrap-timepicker timepicker">
			     								<input type="text"  id="a_margin_b_in" value="" onkeypress="return isNumberKey(event);" class="form-control" data-required="true" placeholder="Minute" data-parsley-required-message="Enter Contract ID">
			     								<span class="input-group-addon">Min</span>
			     								
			     							</div>
			     						</div>
			     						<div class="form_sep afternoon">
			     							<label>Before afternoon checkout</label>
			     							<div class="input-group bootstrap-timepicker timepicker">
			     								<input type="text"   id="a_margin_b_out" value="" onkeypress="return isNumberKey(event);" class="form-control" data-required="true" placeholder="Minute" data-parsley-required-message="Enter Contract ID">
			     								<span class="input-group-addon">Min</span>
			     							</div>
			     						</div>
			     						<div class="form_sep evening">
			     							<label>Before evening checkin</label>
			     							<div class="input-group bootstrap-timepicker timepicker">
			     								<input type="text"   id="e_margin_b_in" value="" onkeypress="return isNumberKey(event);" class="form-control" data-required="true"  placeholder="Minute" data-parsley-required-message="Enter Contract ID">
			     								<span class="input-group-addon">Min</span>
			     							</div>
			     						</div>
			     						<div class="form_sep evening">
			     							<label>Before evening checkout</label>
			     							<div class="input-group bootstrap-timepicker timepicker">
			     								<input type="text"   id="e_margin_b_out" value="" onkeypress="return isNumberKey(event);" class="form-control" data-required="true" placeholder="Minute" data-parsley-required-message="Enter Contract ID">
			     								<span class="input-group-addon">Min</span>
			     								
			     							</div>
			     						</div>
	     								
	     							</div>
	     							<div class="col-xs-4">
	     								<div class="form_sep morning">
			     							<label>After morning checkin</label>
			     							<div class="input-group bootstrap-timepicker timepicker">
			     								<input type="text"  id="m_margin_a_in"  value="" onkeypress="return isNumberKey(event);" class="form-control" data-required="true" placeholder="Minute" data-parsley-required-message="Enter Contract ID">
			     								<span class="input-group-addon">Min</span>
			     							</div>
			     						</div>
			     						<div class="form_sep morning">
			     							<label>After morning checkout</label>
			     							<div class="input-group bootstrap-timepicker timepicker">
			     								<input type="text"  id="m_margin_a_out" value="" onkeypress="return isNumberKey(event);" class="form-control" data-required="true"  placeholder="Minute" data-parsley-required-message="Enter Contract ID">
			     								<span class="input-group-addon">Min</span>
			     							</div>
			     						</div>
			     						<div class="form_sep afternoon">
			     							<label>After afternoon checkin</label>
			     							<div class="input-group bootstrap-timepicker timepicker">
			     								<input type="text"  id="a_margin_a_in" value="" onkeypress="return isNumberKey(event);" class="form-control" data-required="true" placeholder="Minute" data-parsley-required-message="Enter Contract ID">
			     								<span class="input-group-addon">Min</span>
			     								
			     							</div>
			     						</div>
			     						<div class="form_sep afternoon">
			     							<label>After afternoon checkout</label>
			     							<div class="input-group bootstrap-timepicker timepicker">
			     								<input type="text"   id="a_margin_a_out" value="" onkeypress="return isNumberKey(event);" class="form-control" data-required="true" placeholder="Minute" data-parsley-required-message="Enter Contract ID">
			     								<span class="input-group-addon">Min</span>
			     							</div>
			     						</div>
			     						<div class="form_sep evening">
			     							<label>After evening checkin</label>
			     							<div class="input-group bootstrap-timepicker timepicker">
			     								<input type="text"   id="e_margin_a_in" value="" onkeypress="return isNumberKey(event);" class="form-control" data-required="true"  placeholder="Minute" data-parsley-required-message="Enter Contract ID">
			     								<span class="input-group-addon">Min</span>
			     							</div>
			     						</div>
			     						<div class="form_sep evening">
			     							<label>After evening checkout</label>
			     							<div class="input-group bootstrap-timepicker timepicker">
			     								<input type="text"   id="e_margin_a_out" value="" onkeypress="return isNumberKey(event);" class="form-control" data-required="true" placeholder="Minute" data-parsley-required-message="Enter Contract ID">
			     								<span class="input-group-addon">Min</span>
			     								
			     							</div>
			     						</div>
			     						
	     								
	     							</div>
	     							
	     						</div>
	     						<p></p>
	     						<div class="row">
	     							<div class="col-xs-12">
	     								<button type='button' class="btn btn-primary pull-right" id="btn_add">Add</button>
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
	$('input[name="shift"]').click(function(){
		
		var val=$(this).val();
		// alert(val);
		if($(this).is(':checked')){
			$('.'+val).removeClass('hide');
		}else{
			$('.'+val).addClass('hide');
			$('.'+val).find('input').val('');


		}
	})
	function isNumberKey(evt){
        var e = window.event || evt; // for trans-browser compatibility 
        var charCode = e.which || e.keyCode; 
        if ((charCode > 45 && charCode < 58) || charCode == 8){ 
            return true; 
        } 
        return false;  
        }
    $('#btn_add').click(function(){
    	add_setup();
    });


    function add_setup(){
    	var setup_data = [];
    	$("form#contract_register :input").each(function(){
			if((this.type == 'radio' && !this.checked) || this.type=='button' || this.type=='submit'){
			        return true;  //skip loop
			}else{
				setup_data.push($(this).val())
			}
		});
		add_to_table(setup_data);
    }
    var j=0;
    function removerow(event){
    	$(event.target).closest('tr').remove();
    }
    function add_to_table(data){
    	var table = "";
    	// var da=$('input[name="working_day"]:checked').val();
    	var m_in=$('#m_in').val();
    	var m_out=$('#m_out').val();
    	var a_in=$('#a_in').val();
    	var a_out=$('#a_out').val();
    	var e_in=$('#e_in').val();
    	var e_out=$('#e_out').val();

    	var m_margin_b_in=$('#m_margin_b_in').val();
    	var m_margin_a_in=$('#m_margin_a_in').val();
    	var m_margin_b_out=$('#m_margin_b_out').val();
    	var m_margin_a_out=$('#m_margin_a_out').val();

    	var a_margin_b_in=$('#a_margin_b_in').val();
    	var a_margin_b_out=$('#a_margin_b_out').val();
    	var a_margin_a_in=$('#a_margin_a_in').val();
    	var a_margin_a_out=$('#a_margin_a_out').val();

    	var e_margin_b_in=$('#e_margin_b_in').val();
    	var e_margin_b_out=$('#e_margin_b_out').val();
    	var e_margin_a_in=$('#e_margin_a_in').val();
    	var e_margin_a_out=$('#e_margin_a_out').val();
    	// if(da==undefined){
    	// 	alert('Please select your work days.');
    	// 	return;
    	// }
    	// if (data) {

    		
    		$('input[name="working_day"]:checked').each(function(){
    			var da=$(this).val();
    			// alert(da);
    			j++
    			table='';
    			table+="<tr>";
	  
	    			table+="<td><input type='hidden' name='days[]' value='"+da+"'/>"+da+"</td>";

	    			table+="<td><input type='hidden' name='m_margin_b_in[]' value='"+m_margin_b_in+"'/>"+m_margin_b_in+"</td>";
	    			table+="<td><input type='hidden' name='m_in[]' value='"+m_in+"'/>"+m_in+"</td>";
	    			table+="<td><input type='hidden' name='m_margin_a_in[]' value='"+m_margin_a_in+"'/>"+m_margin_a_in+"</td>";

	    			table+="<td><input type='hidden' name='m_margin_b_out[]' value='"+m_margin_b_out+"'/>"+m_margin_b_out+"</td>";
	    			table+="<td><input type='hidden' name='m_out[]' value='"+m_out+"'/>"+m_out+"</td>";
	    			table+="<td><input type='hidden' name='m_margin_a_out[]' value='"+m_margin_a_out+"'/>"+m_margin_a_out+"</td>";
	    			// ++++++++++++++++++++++++++++++++++++++++++++

	    			table+="<td><input type='hidden' name='a_margin_b_in[]' value='"+a_margin_b_in+"'/>"+a_margin_b_in+"</td>";
	    			table+="<td><input type='hidden' name='a_in[]' value='"+a_in+"'/>"+a_in+"</td>";
	    			table+="<td><input type='hidden' name='a_margin_a_in[]' value='"+a_margin_a_in+"'/>"+a_margin_a_in+"</td>";

	    			table+="<td><input type='hidden' name='a_margin_b_out[]' value='"+a_margin_b_out+"'/>"+a_margin_b_out+"</td>";
	    			table+="<td><input type='hidden' name='a_out[]' value='"+a_out+"'/>"+a_out+"</td>";
	    			table+="<td><input type='hidden' name='a_margin_a_out[]' value='"+a_margin_a_out+"'/>"+a_margin_a_out+"</td>";

	    			// ++++++++++++++++++++++++++++++++++++++++++++

	    			table+="<td><input type='hidden' name='e_margin_b_in[]' value='"+e_margin_b_in+"'/>"+e_margin_b_in+"</td>";
	    			table+="<td><input type='hidden' name='e_in[]' value='"+e_in+"'/>"+e_in+"</td>";
	    			table+="<td><input type='hidden' name='e_margin_a_in[]' value='"+e_margin_a_in+"'/>"+e_margin_a_in+"</td>";

	    			table+="<td><input type='hidden' name='e_margin_b_out[]' value='"+e_margin_b_out+"'/>"+e_margin_b_out+"</td>";
	    			table+="<td><input type='hidden' name='e_out[]' value='"+e_out+"'/>"+e_out+"</td>";
	    			table+="<td><input type='hidden' name='e_margin_a_out[]' value='"+e_margin_a_out+"'/>"+e_margin_a_out+"</td>";

	    			table+="<td><a href='javascript:void(0);' onclick='removerow(event);'>Remove</a></td>";

			
				table+="</tr>";
				$('#listuser tbody').append(table);
    		})
    		
    	// };
    	
    	// setup_data = [];

    }

</script>