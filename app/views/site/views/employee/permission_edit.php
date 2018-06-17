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
	      <?php
	      	$emp=$this->db->where('empid',$perm_row['empid'])->get('sch_emp_profile')->row();
	      	$sup=$this->db->where('empid',$perm_row['immediate_sup_name'])->get('sch_emp_profile')->row();
	      	$hr=$this->db->where('empid',$perm_row['hr_respond'])->get('sch_emp_profile')->row();
	       ?>
	      <form id="permission_register" method="POST" enctype="multipart/form-data"  action="<?php echo site_url('employee/permission/save?&save=edit')?>">
	      		<div class="row">
	     			<div class="col-sm-12">
	     				<div class="panel panel-default">
	     					<div class="panel-heading">
	     						<h4 class="panel-title">Permission Requtest Detail
											<label style="float:right !important; font-size:11px !important; color:red;"><?php if($perm_row['modified_by']!='') echo "Last Modified Date: ".date_format(date_create($perm_row['modified_date']),'d-m-Y H:i:s')." By : $perm_row[modified_by]"; ?></label>	

	     						</h4>
	     					</div>
	     					<div class="panel-body">
	     						<div class="row">
	     							<div class="col-xs-6">
	     								<div class="form_sep">
	     									<label>Employee ID</label>
	     									<input type="text" name="empid" id="empid" class="empid form-control" value="<?php if(isset($emp->last_name)) echo $emp->last_name.' '.$emp->first_name ?>">
	     									<input type="text" class="hide" name="employeeid" value="<?php echo $perm_row['empid'];?>" id="employeeid" >
	     									<input type="hidden" id="requestid" name="requestid" value="<?php echo $perm_row['requestid'];?>">
	     								</div>
	     								<div class="form_sep">
	     									<label>Job Type</label>
	     									<input type="text" name="job_type" id="job_type" class="form-control" value="<?php echo ($perm_row['job_type']=='FT'?'Full Time':'Part Time') ?>">
	     									<input type="hidden" name="h_job_type" id="h_job_type" value="<?php echo $perm_row['job_type']?>">
	     								</div>
	     								<div class="form_sep">
	     									<label>Request Type</label>
	     									<select class="form-control" name="request_type" id="request_type">
	     										<option value="LR" <?php echo $perm_row['request_type'] == "LR" ? "selected" :"" ?> >Leave Request</option>
	     										<option value="OTR" <?php echo $perm_row['request_type'] == "OTR" ? "selected" :"" ?>>Overtime Request</option>
	     									</select>
	     								</div>
	     								<div class="form_sep disable" id="hide_date">
	     									<label>Date</label>
	     									<div data-date-format="dd-mm-yyyy" class="input-group date from_to">
								              <input type="text" value="<?php echo date('Y-m-d');?>" data-type="dateIso" class="form-control" id="from_to" name="from_to">
								              <span class="input-group-addon"><i class="icon-calendar"></i></span> 
								            </div>
	     								</div>
	     								<div class="LR disable">
	     								<div class="form_sep">
		     								<label>Request Hour</label>
		     								<input type="text" name="request_hour" value="<?php echo $perm_row['request_hour'];?>" id="request_hour" class="form-control">
	     								</div>
	     								<div class="form_sep">
	     									<label>From</label>
	     									<div data-date-format="dd-mm-yyyy" class="input-group date from">
								              <input type="text" value="<?php echo $this->green->convertSQLDate($perm_row['from']) ;?>" data-type="dateIso" class="form-control" id="from" name="from">
								              <span class="input-group-addon"><i class="icon-calendar"></i></span> 
								            </div>
	     								</div>
	     								<div class="form_sep">
	     									<label>To</label>
	     									<div data-date-format="dd-mm-yyyy" class="input-group date to">
								              <input type="text" value="<?php echo $this->green->convertSQLDate($perm_row['to']);?>" data-type="dateIso" class="form-control" id="to" name="to">
								              <span class="input-group-addon"><i class="icon-calendar"></i></span> 
								            </div>
	     								</div>
	     								<div class="form_sep">
		     								<label>Total Days</label>
		     								<input type="text" name="total_days" value='<?php echo $perm_row['total_day'];?>' id="total_days" class="form-control">
	     								</div>
	     								<div class="form_sep">
	     									<label>AM/PM</label>
	     									<select name="am_pm" id="am_pm" class="form-control">
	     										<option value="AM" <?php if($perm_row['am_pm'] =="AM") echo 'selected'?>>AM</option>
	     										<option value="PM" <?php if($perm_row['am_pm'] =="PM") echo 'selected'?>>PM</option>
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
								              <input type="text" value="<?php echo $this->green->convertSQLDate($perm_row['date_request']) ?>" data-type="dateIso" class="form-control" id="date_request" name="date_request">
								              <span class="input-group-addon"><i class="icon-calendar"></i></span> 
								            </div>
	     								</div>
	     								</div>
	     								<div class="form_sep">
	     									<label>Suppervisor Name</label>
	     									<input type="text" name="sup_name" id="sup_name" class="sup_name form-control" value="<?php if(isset($sup->last_name)) echo $sup->last_name.' '.$sup->first_name ?>">
	     									<input type="text" class="hide" name="immediate_sup_name" value="<?php echo $perm_row['immediate_sup_name'] ?>" id="immediate_sup_name">
	     								</div>
	     								<div class="form_sep">
	     									<label>Responsible of HR</label>
	     									<input type="text" name="hr" id="hr" class="form-control" value="<?php if(isset($hr->last_name)) echo $hr->last_name.' '.$hr->first_name ?>">
	     									<input type="text" class="hide" name="hr_respond" value="<?php echo $perm_row['hr_respond'] ?>" id="hr_respond">
	     								</div>
	     								<div class="LR disable">
		     								<div class="form_sep">
		     									<label>Leave</label>
		     									<select name="reason_LR" id="reason_LR" class="form-control">
		     										<option value=""></option>
		     										<option value="AL" <?php echo $perm_row['reason'] =="AL" ? "selected" :""?> >Annual Leave</option>
		     										<option value="SL" <?php echo $perm_row['reason'] =="SL" ? "selected" :""?> >Sick Leave</option>
		     										<option value="SPL" <?php echo $perm_row['reason'] =="SPL" ? "selected" :""?> >Special Leave</option>
		     										<option value="MA" <?php echo $perm_row['reason'] =="MA" ? "selected" :""?> >Marriage</option>
		     										<option value="ML" <?php echo $perm_row['reason'] =="ML" ? "selected" :""?> >Maternity Leave</option>
		     										<option value="P" <?php echo $perm_row['reason'] =="P" ? "selected" :""?> >Personal</option>
		     										<option value="O" <?php echo $perm_row['reason'] =="O" ? "selected" :""?> >Other</option>
		     									</select>	
		     								</div>
		     								<div class="form_sep disable" id="medical_attach">
		     									<label>Medical Attach</label>
		     									<input type="file" name="medical_attach">
		     								</div>
		     								<div class="form_sep">
		     									<label>Comment</label>
		     									<textarea class="form-control" name="comment" id="comment"><?php echo $perm_row['comment'];?></textarea>
		     								</div>
	     								</div>
	     								<div class="form_sep disable" id="show_reason">
	     									<label>Reason</label>
	     									<textarea class="form-control" name="reason" id="reason"><?php echo  $perm_row['reason'];?></textarea>
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

	});
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
		var fillrespon="<?php echo site_url("employee/permission/autoCEmpId")?>";
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