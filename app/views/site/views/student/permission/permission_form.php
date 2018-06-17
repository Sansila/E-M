<?php 
	if(isset($_POST['act_ft'])==1){
		
		$get_empid = $this->input->post("job_type");
		$this->db->select('*');
		$this->db->from('sch_emp_profile');
		$this->db->where('empcode',$get_empid);
		$data =$this->db->get()->row_array();
		echo $row_type = $data['emp_type'];
		exit();
	}
?>
<?php
$m='';
$p='';
if(isset($_GET['m'])){
    $m=$_GET['m'];
}
if(isset($_GET['p'])){
    $p=$_GET['p'];
}
 ?>
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
	      <form id="permission_register" method="POST" enctype="multipart/form-data"  action="<?php echo site_url("student/permission/save?&save=add&m=$m&p=$p")?>">
	      		<div class="row">
	     			<div class="col-sm-12">
	     				<div class="panel panel-default">
	     					<div class="panel-heading">
	     						<h4 class="panel-title">Permission Requtest Detail
								    <label style="float:right !important; font-size:11px !important; color:red;"><?php if(isset($row->modified_by)) if($row->modified_by!='') echo "Last Modified Date: ".$this->green->convertSQLDate($row->modified_date)." By : $row->modified_by"; ?></label>	

	     						</h4>
	     					</div>
	     					<div class="panel-body">
	     						<div class="row">
	     							<div class="col-xs-6">
	     								<div class="form_sep hide">
								            <input type="text" id="permisid" name="permisid" value="<?php if(isset($row->permisid)) echo $row->permisid ?>">
								              
	     								</div>
	     								<div class="form_sep">
	     									<label>Request Date</label>
	     									<div data-date-format="dd-mm-yyyy" class="input-group date date_request">
								              <input type="text" value="<?php if(isset($row->date)) echo $this->green->convertSQLDate($row->date); else echo date('d-m-Y');?>" data-type="dateIso" class="form-control" id="date" name="date">
								              <span class="input-group-addon"><i class="icon-calendar"></i></span> 
								            </div>
	     								</div>
	     								<div class="form_sep">
	     									<label>Class</label>
	     									<select name="classid" id="classid" class="form-control">
	     										<!-- <option value="">Select Class</option> -->
	     										<?php foreach ($this->db->get('sch_class')->result() as $class) {?>
	     												<option value="<?php echo $class->classid ?>"<?php if(isset($row->classid)) if($row->classid==$class->classid ) echo "selected";?>><?php echo $class->class_name ?></option>
	     										<?php } ?>
	     									</select>
	     								</div>
	     								<div class="form_sep">
	     									<label>Student</label>
	     									<input type="text" name="student" value="<?php if(isset($row->fullname)) echo $row->fullname ?>"  required  data-parsley-required-message="Enter student" id="student" class="student form-control">
	     									<input type="text" class="hide" name="studentid" value="<?php if(isset($row->studentid)) echo $row->studentid ?>" id="studentid">
	     								</div>
	     								
	     								<div class="form_sep">
	     									<label>From</label>
	     									<div data-date-format="dd-mm-yyyy" class="input-group date from">
								              <input type="text"  required  data-parsley-required-message="Enter From Date" value="<?php if(isset($row->from_date)) echo $this->green->convertSQLDate($row->from_date); else echo date('d-m-Y');?>" data-type="dateIso" class="form-control" id="from_date" name="from_date">
								              <span class="input-group-addon"><i class="icon-calendar"></i></span> 
								            </div>
	     								</div>
	     								<div class="form_sep">
	     									<label>To</label>
	     									<div data-date-format="dd-mm-yyyy" class="input-group date to">
								              <input type="text"  required  data-parsley-required-message="Enter to date" value="<?php if(isset($row->to_date)) echo $this->green->convertSQLDate($row->to_date); else echo date('d-m-Y');?>" data-type="dateIso" class="form-control" id="to_date" name="to_date">
								              <span class="input-group-addon"><i class="icon-calendar"></i></span> 
								            </div>
	     								</div>
	     							</div>
	     							<div class="col-xs-6">
		     							
	     								<div class="form_sep">
	     									<label>Approve by</label>
	     									<input type="text" name="hr_respond"  value="<?php if(isset($row->last_name)) echo $row->last_name.' '.$row->first_name ?>" required  data-parsley-required-message="Enter Employee" id="hr_respond" class="form-control">
	     									<input type="text" value="<?php if(isset($row->last_name)) echo $row->approve_by ?>" name="approve_by" class="hide" id="approve_by" class="form-control">
	     								</div>
	     								<div class="form_sep">
	     									<label>Permission Status</label>
	     									<select name="permis_status" id="permis_status" class="form-control">
	     										<option value="1" <?php if(isset($row->permis_status)) if($row->permis_status==1) echo "selected";?>>Permission</option>
	     										<option value="0" <?php if(isset($row->permis_status)) if($row->permis_status==0) echo "selected";?>>No Permission</option>
	     									</select>
	     								</div>
	     								<div class="form_sep">
	     									<label>Reason</label>
	     									<textarea class="form-control"  name="reason" id="reason"><?php if(isset($row->reason)) echo $row->reason ?></textarea>
	     								</div>
	     								
	     							</div>
	     						</div>

	     					</div>
	     				</div>
	     			</div>
	     		</div>
	     		<div class="row">
		          <div class="col-sm-5">
		            <div class="form_sep">
		              <button id="std_reg_submit" name="std_reg_submit" type="submit" class="btn btn-success">Save</button>
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
		autostudent();
		autoemp();
		$('#permission_register').parsley();
		$("#from_date,#to_date,#date,#from_to").datepicker({
	  		language: 'en',
	  		pick12HourFormat: true,
	  		format:'dd-mm-yyyy'
		});

	});
	// end main function----
	$('#classid').change(function(){
		$('#studentid').val('');
		$('#student').val('');
		autostudent();
	})
	function get_year(){
		var get_year = $("#year").val();
		$(".get_year").val(get_year);
	}

	
	function autostudent(){	
		var classid=$('#classid').val();	
		var fillrespon="<?php echo site_url("student/permission/fillstudent")?>/"+classid;
    	$("#student").autocomplete({
			source: fillrespon,
			minLength:0,
			select: function( events, ui ) {	
				$('#studentid').val(ui.item.id);
				
			}						
		});
	}
	function autoemp(){		
		var fillrespon="<?php echo site_url("student/permission/fillemp")?>";
    	$("#hr_respond").autocomplete({
			source: fillrespon,
			minLength:0,
			select: function( events, ui ) {	
				$('#approve_by').val(ui.item.id);
				
			}						
		});
	}


</script>