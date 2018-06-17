<?php

	if(isset($_POST['act_empcode_val'])==1){
		$empcode_val = $this->input->post("empcode_val");

		$this->db->select('count(*)');
		$this->db->from('sch_emp_profile');
		$this->db->where('empcode',$empcode_val);
		$count = $this->db ->count_all_results();
		echo $count;
		exit();
	}

	if(isset($_POST['act_idcard_val'])==1){
		$idcard_val = $this->input->post("idcard_val");

		$this->db->select('count(*)');
		$this->db->from('sch_emp_profile');
		$this->db->where('idcard',$idcard_val);
		$count = $this->db ->count_all_results();
		echo $count;
		exit();
	}

	if(isset($_POST['act_employee_type'])==1){
		$emp_id = $this->input->post("emp_id");
		$emp_type = $this->input->post("empt_type");
		$option = "";

		$this->db->select('*');
		$this->db->from('sch_emp_position');
		$this->db->where('posid',$emp_id);
		$this->db->where('match_con_posid',$emp_type);
		$arr = $this->db->row();
		foreach($arr as $posid ){
			$option .='<option value="'.$posid->posid.'">'.$posid->position.'</option>';
		}
		echo $option;
		exit();
	}
	$last_con_stat=$this->emp->getLastContInf($employee['empid']);

	$arrLeaveType=array("1"=>"End of Contract",
						"2"=>"Resigned",
						"3"=>"Dismissal",
						"4"=>"Other"
						);	
?>
<style type="text/css">
	.disable{display: none;}
	.hideable{
		display: none;
	}
</style>
<div class="wrapper">
	<div class="clearfix" id="main_content_outer">
	    <div id="main_content">
	      <div class="row result_info">
	      	<div class="col-xs-6">
		      	<strong>Employee Information</strong>
		    </div>
		    <div class="col-xs-6" style="text-align: right">
		      		      		
		    </div>
	      </div>
	      <!--Start Form Employee---->
	      	<form id="emp_register" method="POST" enctype="multipart/form-data"  action="<?php echo site_url('employee/employee/save?&save=edit')?>">
	      		<div class="row" ng-app="">
	      			<div class="col-sm-6">
	      				<div class="panel panel-default">
	      					<div class="panel-heading">
	      						<h4 class="panel-title">Personal Details
											<label style="float:right !important; font-size:11px !important; color:red;"><?php if($employee['last_modified_by']!='') echo "Last Modified Date: ".date_format(date_create($employee['last_modified_date']),'d-m-Y H:i:s')." By : $employee[last_modified_by]"; ?></label>	

	      						</h4>
	      					</div>
	      					<div class="panel-body">
	      						<div class="form_sep">
	      							<label>Employee ID</label>
	      							<input type="text" data-required="true" name="empcode" value="<?php echo $employee['empcode']; ?>" id="empcode" class="form-control parsley-validated" required data-parsley-required-message="Enter Employee ID">
	      							<input type="hidden" id="empid" name="empid" value="<?php echo $employee['empid'];?>">
	      							<input type="hidden" name="empcode_hidden" id="empcode_hidden" value="<?php echo $employee['empcode']; ?>">
	      						</div>
	      						<div class="form_sep">
		      						<label>Employee Card</label>
		      						<input type="text" name="emp_card" value="<?php echo $employee['emp_card'];?>" id="emp_card" class="form-control">
		      					</div>
		      					<div class="form_sep">
		      						<label>ID Card</label>
		      						<input type="text" name="idcard" value="<?php echo $employee['idcard'];?>" id="idcard" class="form-control">
		      					</div>
		      					<div class="form_sep">
	      							<label>Working Time</label>
	      							<select name="time_id" id="time_id" class="form-control">
	      								<option value="">Please Select</option>
	      								<?php 
	      									foreach ($time as $row) {
	      										$sel='';
	      										if($row->id==$employee['time_id']){
	      											$sel='selected';
	      										}
	      										echo "<option value='$row->id' $sel>$row->title</option>";# code...
	      									}
	      								?>
	      							</select>
	      						</div>
		      					<div class="form_sep">
			      					<label>Last Name</label>
			      					<input type="text" data-required="true" name="last_name" value="<?php echo $employee['last_name']; ?>" id="last_name" class="form-control parsley-validated" required data-parsley-required-message="Enter Last Name">
		      					</div>
		      					<div class="form_sep">
			      					<label>First Name</label>
			      					<input type="text" data-requried="true" name="first_name" value="<?php echo $employee['first_name']; ?>" id="first_name" class="form-control parsley-validated" required data-parsley-required-message="Enter First Name">
		      					</div>
		      					<div class="form_sep">
			      					<label>Last Name(kh)</label>
			      					<input type="text" name="last_name_kh" value="<?php echo $employee['last_name_kh']; ?>" id="last_name_kh" class="form-control">
		      					</div>
		      					<div class="form_sep">
			      					<label>First Name(kh)</label>
			      					<input type="text" name="first_name_kh" value="<?php echo $employee['first_name_kh']; ?>" id="first_name_kh" class="form-control">
		      					</div>
		      					<div class="form_sep">
		      						<label>Sex</label>
		      						<select name="sex" id="sex" class="form-control">
		      							<option value="M" <?php echo ( $employee['sex'] =="M" ? "selected" :"")?> >Male</option>
		      							<option value="F" <?php echo ( $employee['sex'] =="F" ? "selected" :"")?> >Female</option>
		      						</select>
		      					</div>
		      					<div class="form_sep">
	      							<label>Marital Status</label>
	      							<select name="marital_status" id="marital_status" class="form-control">
	      								<option value="S" <?php echo ( $employee['marital_status'] =="S" ? "selected" :"")?> >Single</option>
	      								<option value="M" <?php echo ( $employee['marital_status'] =="M" ? "selected" :"")?>>Marital</option>
	      							</select>
	      						</div>
		      					<div class="form_sep">
	      							<label>Phone</label>
	      							<input type="text" name="phone" value="<?php echo $employee['phone'];?>" id="phone" class="form-control">
	      						</div>
	      						<div class="form_sep">
	      							<label>Email</label>
	      							<input type="email" name="email" value="<?php echo $employee['email'];?>" id="email" class="form-control">
	      						</div>
		      					<div class="form_sep">
			      					<label>Date of Birth</label>
			      					<div data-date-format="dd-mm-yyyy" class="input-group date dob">
						              <input type="text" value="<?php echo ($employee['dob'] !="" ? $employee['dob'] : date("Y-m-d") )?>" data-type="dateIso" class="form-control" id="dob" name="dob">
						              <span class="input-group-addon"><i class="icon-calendar"></i></span> 
						            </div>
		      					</div>
		      					<div class="form_sep">
			      					<label>Place of Birth</label>
			      					<textarea name="pob" id="pob" class=" form-control"><?php echo $employee['pob'];?></textarea>
		      					</div>
		      					<div class="form_sep">
	      							<label>Permanant Address</label>
	      							<textarea name="perm_adr" id="perm_adr"  class="form-control"><?php echo $employee['perm_adr'];?></textarea>
	      						</div>
		      					<div class="form_sep hide">
	      							<label>Employee Type</label>
	      							<select name="emp_type" id="emp_type" class="form-control">
	      								<option value="S" <?php echo ( $employee['emp_type'] =="S" ? "selected" :"")?> >Office Staff</option>
	      								<option value="T" <?php echo ( $employee['emp_type'] =="T" ? "selected" :"")?> >Teacher</option>
	      							</select>
	      						</div>      						
	      						
	      						<div class="form_sep hide">
	      							<label>Leave School</label>
	      							<select name="leave_school" id="leave_school" class="form-control">
	      								<option value="0" <?php echo ( $employee['leave_school'] =="0" ? "selected" :"")?> >No</option>
	      								<option value="1" <?php echo ( $employee['leave_school'] =="1" ? "selected" :"")?> >Yes</option>
	      							</select>
	      						</div>
	      						<div class="form_sep disable" id="sh_reason">
	      							<label>Leave School Reason</label>
	      							<textarea name="leave_school_reason" id="leave_school_reason" class="form-control">
	      								<?php echo $employee['leave_school_reason'];?>
	      							</textarea>
	      						</div>
	      					</div>
	      				</div>
	      			</div>
	      			<div class="col-sm-6">
	      				<div class="panel panel-default">
	      					<div class="panel-heading">
	      						<h4 class="panel-title">Contact Details</h4>
	      					</div>
	      					<div class="panel-body">
	      						<div class="form_sep">
	      							<label>Hire Date</label>
	      							<div data-date-format="dd-mm-yyyy" class="input-group date employed_date">
						              <input type="text" value="<?php echo $employee['employed_date']?>" data-type="dateIso" class="form-control" id="employed_date" name="employed_date">
						              <span class="input-group-addon"><i class="icon-calendar"></i></span> 
						            </div>
	      						</div>
	      						<div class="form_sep">
			      					<label>Nationality</label>
			      					<input type="text" value="<?php echo $employee['nationality']; ?>" name="nationality" id="nationality" class="form-control nationality">
		      					</div>	      						
		      					<div class="form_sep">
	      							<label>Department</label>
	      							<?php
	      								$option = "";
										foreach( $this->db->get('sch_emp_department')->result() as $dep ){
											$option .='<option value="'.$dep->dep_id.'" '.($dep->dep_id == $employee['dep_id'] ? "selected" :"").'>'.$dep->department.'</option>';
										}
	      							?>
	      							<select class="form-control" name="dep_id" id="dep_id">
	      								<option value="">Select Department</option>
	      								<?php echo $option;?>
	      							</select>
	      						</div>
	      						<div class="form_sep">
	      							<label>Position</label>
	      							<select name="pos_id" id="pos_id" class="form-control">
	      								<option value="<?php echo $employee['posid'];?>"><?php echo $employee['position'];?></option>
	      							</select>
	      						</div>		      					
		      					<div class="form_sep hide">
		      						<label>Foreigner</label>
		      						&nbsp;&nbsp;&nbsp;&nbsp;
		      						<input type="radio" value="1" <?php echo ( $employee['is_foreigner'] =="1" ? "checked" :"")?> name="is_foreigner" id="is_foreigner" class="is_foreigner is_yes">
		      						<label>Yes</label>&nbsp;&nbsp;
		      						<input type="radio" value="0" <?php echo ( $employee['is_foreigner'] =="0" ? "checked" :"")?> name="is_foreigner" id="is_foreigner" class="is_foreigner is_no"/>
		      						<label>No</label>&nbsp;&nbsp;
		      					</div>
	      						<div class="form_sep hide">
	      							<label>Village</label>
	      							<input type="text" name="village" value="<?php echo $employee['village'];?>" id="village" class="form-control">
	      						</div>
	      						<div class="form_sep  hide">
	      							<label>Khan / Communce</label>
	      							<input type="text" name="commune" value="<?php echo $employee['commune'];?>" id="commune" class="form-control">
	      						</div>
	      						<div class="form_sep  hide">
	      							<label>Sankat / District</label>
	      							<input type="text" name="district" value="<?php echo $employee['district'];?>" id="district" class="form-control">
	      						</div>
	      						<div class="form_sep  hide">
	      							<label>Province</label>
	      							<input type="text" name="province" value="<?php echo $employee['province'];?>" id="province" class="form-control">
	      						</div>
	      						<div class="form_sep  hide">
	      							<label>Zoon</label>
	      							<input type="text" name="zoon"  value="<?php echo $employee['zoon'];?>" id="zoon" class="form-control">
	      						</div>	      						
	      						<div class="form_sep hide">
	      							<label>note</label>
	      							<textarea name="note" id="note" class="form-control"><?php echo $employee['zoon'];?></textarea>
	      						</div>
	      						<div class="form_sep">
	      							<img src="<?php if(@ file_get_contents(site_url('../assets/upload/employees/photos/'.$employee['empid'].'.jpg'))) echo site_url('../assets/upload/employees/photos/'.$employee['empid'].'.jpg'); else echo site_url('../assets/upload/No_person.jpg') ?>" id="uploadPreview" style='width:120px; height:150px; margin-bottom:15px; border:1px solid #CCCCCC'>
									<input id="uploadImage" type="file" accept="image/gif, image/jpeg, image/jpg, image/png" name="userfile" onchange="PreviewImage();" style="visibility:hidden; display:none;" />
									<input type='button' class="btn btn-success" onclick="$('#uploadImage').click();" value='Browse'/>
		      					</div>
	      					</div>

	      					<div class="panel-heading">
	      						<h4 class="panel-title">Leave Details</h4>
	      					</div>
	      					<div class="panel-body">	
	      						<div class="form_sep">
	      							<label>Khmer New</label>	      							
	      							<input type="text" class="form-control" name="kh_newyear_hol" value="<?php echo $employee['kh_newyear_hol']?>"/> 
	      						</div>
	      						<div class="form_sep">
	      							<label>End of the year</label>	      							
	      							<input type="text" class="form-control" name="endoftheyear_hol" value="<?php echo $employee['endoftheyear_hol']?>"/> 
	      						</div>
	      						<div class="form_sep">
	      							<label>Annual Leave</label>	      							
	      							<input type="text" class="form-control" name="annual_leave" value="<?php echo $employee['annual_leave']?>"/> 
	      						</div>	      						
	      						<div class="form_sep">
	      							<label>Sick Leave</label>	      							
	      							<input type="text" class="form-control"  name="sick_leave" value="<?php echo $employee['sick_leave']?>"/> 
	      						</div>
	      						
	      					</div>
	      						
	      					<div class="panel-heading">
	      						<h4 class="panel-title">Contract Details</h4>
	      					</div>
	      					<div class="panel-body">	
	      						<div class="form_sep">
	      							<label>Last Contract ID </label>
	      							<label class="form-control"><?php echo $last_con_stat['contractid'] ?></label>
	      							<input type="hidden" name="con_id" value="<?php echo $last_con_stat['con_id']?>"/> 
	      						</div>   						
	      						<div class="form_sep">
	      							<label>Last Contract Status</label>	   	      							   							
	      							<select name="cont_status" class="form-control" id="cont_status">
	      								<?php echo $this->green->getStatusOp(0,$last_con_stat['status'],0)?>
	      							</select>	      								      							
	      						</div>
	      						<!-- ---------------- Check if contract Inactive ----------------	 --> 
	      						     						
	      						<div class="form_sep hideable">
	      							<label>Effective Date</label>
	      							<div data-date-format="dd-mm-yyyy" class="input-group date dob">
						              <input type="text" value="<?php echo ($employee['resigned_date'] !="" ? $employee['resigned_date'] : date("Y-m-d") )?>" data-type="dateIso" class="form-control" id="resigned_date" name="resigned_date">
						              <span class="input-group-addon"><i class="icon-calendar"></i></span> 
						            </div>
	      						</div>
	      						<div class="form_sep hideable">
	      							<label>Leave Type</label>	      								
	      							<select class="form-control" name="leave_type" id="leave_type">
	      								<?php echo $this->green->gOption($arrLeaveType,$employee['leave_type'] );?>
	      							</select>    							
	      						</div>
	      						<div class="form_sep hideable">
	      							<label>Reason</label>	      								
	      							<textarea class="leave_reason form-control" id="leave_reason" name="leave_reason"></textarea>      							
	      						</div>
								<div class="form_sep hideable">
	      							<label>Comments</label>	      								
	      							<textarea class="leave_come form-control" id="leave_come" name="leave_come"></textarea>      							
	      						</div>
	      						

	      					</div>

	      				</div>
	      			</div>
	      		</div>
	      		<div class="row">
      				<div class="col-sm-12">
      					<button type="submit" class="btn btn-success">Save</button>
      				</div>
      			</div>
	      	</form>
	      <!--End Form Employee---->
	    </div>
	</div>
</div>
<!--Modal  -->
<div class="modal fade" id="myModal_Emp_IDCard" data-backdrop=false>
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
function PreviewImage() {
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("uploadImage").files[0]);

        oFReader.onload = function (oFREvent) {
            document.getElementById("uploadPreview").src = oFREvent.target.result;
            document.getElementById("uploadPreview").style.backgroundImage = "none";
        };
    }
$(function(){
	$('#emp_register').parsley();
	$("#dob,#employed_date,#resigned_date").datepicker({
  		language: 'en',
  		pick12HourFormat: true,
  		todayHighlight:true,
  		autoclose:true,
  		format:'yyyy-mm-dd'
	});

	$(".nationality").on("change", function(){
		var get_value = $(this).val();
		//alert(get_value);
		validate_foriegn(get_value);
		window.getSelection().removeAllRanges();
	});
	//------is_foreigner------------
	var load_value_na = $("#nationality").val();

	validate_foriegn(load_value_na);

	$(".is_foreigner").on("click", function(){
		var get_value = $("#nationality").val();
		validate_foriegn(get_value);
	});

	function validate_foriegn(get_value){
		var get_national = get_value.toLowerCase();
		var is_yes = $(".is_yes").val();
		var is_no = $(".is_no").val();
		if( get_national =="cambodia" || get_national =="cambodian" || get_national == "khmer" || get_national ==""  ) {
			$(".is_no").attr("checked", true);
			$(".is_yes").attr("checked", false);
		}else{
			$(".is_yes").attr("checked", true);
			$(".is_no").attr("checked", false);
		}
	}
	//------Check Duplicate Employee ID-------
	$("#empcode").on("change", function(){
		var empcode_val = $(this).val();
		$.ajax({
			type:"post",
			url:"<?php echo $_SERVER['PHP_SELF']?>",
			data:{
				act_empcode_val:1,
				empcode_val:empcode_val
			},
			success:function(data){
				if( data ==1 ){
					$(".message-body").text("You have enter Duplicate ID, Please try another Employee ID!");
					$("#myModal_Emp_IDCard").modal('show');
					var empcode = $("#empcode_hidden").val();
					$("#empcode").val(empcode).focus();
					return false;
				}
			}
		});
	});
	//------ Chage Employee Type-----------
	$("#emp_type").on("change", function(){
		var empt_type = $(this).val();
		employee_type(empt_type);
	});

	function employee_type(empt_type){

		$.ajax({
			type:"post",
			url:"<?php echo site_url('employee/employee/fn_emp_type'); ?>",
			data:{
				empt_type:empt_type
			},
			success: function(data){
				//alert(data);
				$("#pos_id").html(data);
			}
		});
	}
	//------Check Duplicate ID Card-----------
	$("#idcard").on("change", function(){
		var idcard_val = $(this).val();
		$.ajax({
			type:"post",
			url:"<?php echo $_SERVER['PHP_SELF'];?>",
			data:{
				act_idcard_val:1,
				idcard_val:idcard_val
			},
			success:function(data){
				if( data ==1 ){
					//bootbox.alert("Employee Code already exist!");
					bootbox.dialog({
					title: "<b style='font-size:12px;'>Warning Message!</b>",
					width:100,
					height:200,
						message: '<p style="color:#A94442;padding-buttom:16px;padding-left:10px;"><b>Please try another, You have enter duplicate ID Card.</b></p>'
					}); 
					
					$("#idcard").val('').select();
					return false;
				}
			}
		});

	});

	//----------Validate Leave School----
	var load_val = $("#leave_school").val();
	show_leave_school(load_val);

	$("#leave_school").on("change", function(){
		var get_val = $(this).val();
		show_leave_school(get_val);
	});

	function show_leave_school(get_val){
		if(get_val == 0 ){
			$("#sh_reason").fadeOut("slow");
		}else if(get_val == 1){
			$("#sh_reason").fadeIn("slow");
		}
	}

	getPosition(<?php echo $employee['posid'] ?>);
	function getPosition(selected){
		$.ajax({
			type:"post",
			url:"<?php echo site_url('employee/employee/getPosition'); ?>",
			data:{
				posid:selected
			},
			success: function(data){				
				$("#pos_id").html(data);
			}
		});
	}

	$("#cont_status").on("change",function(){
		if($(this).val()==0){
			$('.hideable').show();
		}else{
			$('.hideable').hide();
		}				
	});

});

</script>