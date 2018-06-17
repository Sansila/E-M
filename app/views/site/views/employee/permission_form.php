<style>
.disable{display: none;}
</style>
<div class="wrapper">
	<div class="clearfix" id="main_content_outer">
	    <div id="main_content">
	      <div class="row result_info">
	      	<div class="col-xs-6">
		      	<strong>Permission Information</strong>
		    </div>
		    <div class="col-xs-6" style="text-align: right">
		      		      		
		    </div>
	      </div>
	      <!---Start form-->
	      <form id="permission_register" method="POST" enctype="multipart/form-data"  action="<?php echo site_url('employee/permission/save?&save=add')?>">
	      		<div class="row">
	     			<div class="col-sm-12">
	     				<div class="panel panel-default">
	     					<div class="panel-heading">
	     						<h4 class="panel-title">Permission Requtest Detail</h4>
	     					</div>
	     					<div class="panel-body">
	     						<div class="row">
	     							<div class="col-xs-6">
	     								<div class="form_sep">
	     									<label>Employee ID</label>
	     									<input type="text" name="empid" id="empid" class="empid form-control">
	     									<input type="text" class="hide" name="employeeid" value="" id="employeeid">
	     								</div>
	     								<div class="form_sep hide">
	     									<label>Job Type</label>
	     									<input type="text" name="job_type" id="job_type" class="form-control">
	     									<input type="hidden" name="h_job_type" id="h_job_type" value="">
	     									<input type="hidden" name="get_job" id="get_job" value="">
	     								</div>
	     								<div class="form_sep hide">
	     									<label>Request Type</label>
	     									<select class="form-control" name="request_type" id="request_type">
	     										<option value="LR">Leave Request</option>
	     										<option value="OTR">Overtime Request</option>
	     									</select>
	     								</div>
	     								<div class="form_sep disable" id="hide_date">
	     									<label>Date</label>
	     									<div data-date-format="dd-mm-yyyy" class="input-group date from_to">
								              <input type="text" value="<?php echo date('d-m-Y');?>" data-type="dateIso" class="form-control" id="from_to" name="from_to">
								              <span class="input-group-addon"><i class="icon-calendar"></i></span> 
								            </div>
	     								</div>
	     								<div class="LR disable">
	     								<div class="form_sep hide">
		     								<label>Request Hour</label>
		     								<input type="text" name="request_hour" id="request_hour" class="form-control">
	     								</div>
	     								<div class="form_sep">
	     									<label>From</label>
	     									<div data-date-format="dd-mm-yyyy" class="input-group date from">
								              <input type="text" value="<?php echo date('d-m-Y');?>" data-type="dateIso" class="form-control from" id="from" name="from">
								              <span class="input-group-addon"><i class="icon-calendar"></i></span> 
								            </div>
	     								</div>
	     								<div class="form_sep">
	     									<label>To</label>
	     									<div data-date-format="dd-mm-yyyy" class="input-group date to">
								              <input type="text" value="<?php echo date('d-m-Y');?>" data-type="dateIso" class="form-control" id="to" name="to">
								              <span class="input-group-addon"><i class="icon-calendar"></i></span> 
								            </div>
	     								</div>
	     								<div class="form_sep">
		     								<label>Total Days</label>
		     								<input type="text" name="total_days" value='1' id="total_days" class="form-control">
	     								</div>
	     								<div class="form_sep hide">
	     									<label>AM/PM</label>
	     									<select name="am_pm" id="am_pm" class="form-control">
	     										<option value="AM">AM</option>
	     										<option value="PM">PM</option>
	     									</select>
	     								</div>
	     								</div><br>
	     								<div>
	     									<button class="btn btn-success">Save</button>
	     								</div>
	     							</div>
	     							<div class="col-xs-6">
		     							<div class="form_sep">
	     									<input type="hidden" name="year" id="year get_year" class="form-control get_year">
	     								</div>
	     								<div class="LR disable">
	     								<div class="form_sep">
	     									<label>Request Date</label>
	     									<div data-date-format="dd-mm-yyyy" class="input-group date date_request">
								              <input type="text" value="<?php echo date('d-m-Y');?>" data-type="dateIso" class="form-control" id="date_request" name="date_request">
								              <span class="input-group-addon"><i class="icon-calendar"></i></span> 
								            </div>
	     								</div>
	     								</div>
	     								<div class="form_sep">
	     									<label>Suppervisor Name</label>
	     									<input type="text" name="sup_name" id="sup_name" class="sup_name form-control">
	     									<input type="text" class="hide" name="immediate_sup_name" value="" id="immediate_sup_name">
	     								</div>
	     								<div class="form_sep">
	     									<label>Responsible of HR</label>
	     									<input type="text" name="hr" id="hr" class="form-control">
	     									<input type="text" class="hide" name="hr_respond" value="" id="hr_respond">
	     								</div>
	     								<div class="LR disable">
		     								<div class="form_sep">
		     									<label>Leave Type</label>
		     									<select name="reason_LR" required id="reason_LR" class="form-control">
		     										<option value="">Please Select</option>
		     										<option value="AL">Annual Leave</option>
		     										<option value="SL">Sick Leave</option>
		     										<option value="SPL">Special Leave</option>
		     										<option value="MA">Marriage</option>
		     										<option value="ML">Maternity Leave</option>
		     										<option value="P">Personal</option>
		     										<option value="O">Other</option>
		     									</select>	
		     								</div>
		     								<div class="form_sep disable" id="medical_attach">
		     									<label>Medical Attach</label>
		     									<input type="file" name="medical_attach">
		     								</div>
		     								<div class="form_sep">
		     									<label>Comment</label>
		     									<textarea class="form-control" name="comment" id="comment"></textarea>
		     								</div>
	     								</div>
	     								<div class="form_sep disable" id="show_reason">
	     									<label>Reason</label>
	     									<textarea class="form-control" name="reason" id="reason"></textarea>
	     								</div>
	     								
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
		get_year();
		autoEmpId();
		autohr();
		autoSup();
		request_type($("#request_type").val());
		
		$("#sup_name").on("focus",function(){
			autoSup();			
		});

		$('#permission_register').parsley();
		$("#from,#to,#date_request,#from_to").datepicker({
	  		language: 'en',
	  		pick12HourFormat: true,
	  		format:'dd-mm-yyyy'
		});

		$("#year").on("change", function(){
			get_year();
		});

		$("#request_type").on("change", function(){
			var get_Rtype = $(this).val();
			request_type(get_Rtype);
		});

		$("#reason_LR").on("change", function(){
			var reason = $(this).val();
			reason_LR(reason);
		});

		$("#empid").on("change", function(){
			var get_val = $(this).val();
		});
	});
	// end main function----
	function get_year(){
		var get_year = $("#year").val();
		$(".get_year").val(get_year);
	}
	$('#from,#to').datepicker().on('changeDate', function (ev) {
	    //alert('ok');
	    getdays();
	});	
	function getdays(event){
		var from =$('#from').val();
		var to = $('#to').val();
		$.ajax({
				type: "POST",
				url:"<?php echo base_url(); ?>index.php/employee/permission/getdays/"+to+'/'+from,    
				data: {'from':from,
						'to':to},
				success: function(data){
		           $('#total_days').val(data);
		           //$('.listbody').html(data);
				}
			});
	}
	function request_type(type){
		if(type =="LR"){
				$(".LR").removeClass('disable');
				$("#show_reason").addClass('disable');
				$("#hide_date").addClass('disable');
			}else{
				$(".LR").addClass('disable');
				$("#show_reason").removeClass('disable');
				$("#hide_date").removeClass('disable');
			}
	}

	function reason_LR(reason){
		if(reason == "SL"){
			$("#medical_attach").removeClass('disable');
			
		}else{
			$("#medical_attach").addClass('disable');
		}
	}

	function autoEmpId(){		
		var fillrespon="<?php echo site_url("employee/permission/autoCEmpId")?>";
    	$(".empid").autocomplete({
			source: fillrespon,
			minLength:0,
			select: function( events, ui ) {	
				var arr_val = ui.item.value;
				var get_val = arr_val.split('|');
				$("#employeeid").val(ui.item.id);
				$("#h_job_type").val(ui.item.job_type);
				if(ui.item.job_type=="FT"){
					$("#job_type").val("Full Time");	
				}else{
					$("#job_type").val("Time Time");
				}
							
			}						
		});
	}

	function autoSup(){		
		var fillrespon="<?php echo site_url("employee/permission/autoSup")?>";
    	$(".sup_name").autocomplete({
			source: fillrespon,
			minLength:0,
			select: function( events, ui ) {	
				var arr_val = ui.item.value;
				var get_val = arr_val.split('|');
				$("#immediate_sup_name").val(ui.item.id);
			}						
		});
	}
	function autohr(){		
		var fillrespon="<?php echo site_url("employee/permission/autoCEmpId")?>";
    	$("#hr").autocomplete({
			source: fillrespon,
			minLength:0,
			select: function( events, ui ) {	
				var arr_val = ui.item.value;
				var get_val = arr_val.split('|');
				$("#hr_respond").val(ui.item.id);
			}						
		});
	}


</script>