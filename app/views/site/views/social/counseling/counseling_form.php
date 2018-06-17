
<style type="text/css">
	ul,ol{
		margin-bottom: 0px !important;
	}
	a{
		cursor: pointer;
	}
	.ui-autocomplete{z-index: 9999;}
	.datepicker {z-index: 9999;}
</style>
<div class="wrapper">
	<div class="clearfix" id="main_content_outer">
	    <div id="main_content">
	      	<div class="result_info">
				      	<div class="col-sm-6">
				      		<strong>Psychologist Information</strong>
				      		
				      	</div>
				      	<div class="col-sm-6" style="text-align: center">
				      		<strong>
				      			<center class='error' style='color:red;'><?php if(isset($error)) echo "$error"; ?></center>
				      		</strong>	
				      	</div>
			</div> 
	      <!-- main content -->
	      <?php
	      		$member='';
		      if(isset($data['familyid'])){
		      	$family=$this->counsel->getfamilyrow($data['familyid']);
		      	if($data['c_type']=='mother'){
		      		$member.="<option value=''>$family[mother_name]</option>";
		      	}
		      	if($data['c_type']=='father'){
		      		$member.="<option value=''>$family[father_name]</option>";
		      	}
		      	if($data['c_type']=='member'){
		      		foreach ($this->counsel->getmember($data['familyid']) as $row) {
			      		$member.="<option value='$row->memid'"; 
			      		if($row->memid==$data['mem_id']) 
			      			$member.="selected"; 
			      		$member.=">$row->last_name $row->first_name</option>";
			      	}
		      	}
		      	

		      }else{
		      		$member.="<option value=''>Select Client Name</option>";
		      }
		      $m='';
				$p='';
				if(isset($_GET['m'])){
			    	$m=$_GET['m'];
			    }
			    if(isset($_GET['p'])){
			        $p=$_GET['p'];
			    }

	       ?>
	       <form enctype="multipart/form-data" id='frmtreatment' action="<?php echo base_url()."index.php/social/counseling/save?m=$m&p=$p";?>" method="POST">
			        <div class="row">
						<div class="col-sm-6">
				            	<div class="panel panel-default">
				            		<div class="panel-heading">
						               <h4 class="panel-title">Counseling Details 
											<label style="float:right !important; font-size:11px !important; color:red;"><?php if(isset($data['modified_by'])) if($data['modified_by']!='') echo "Last Modified Date: ".date_format(date_create($data['modified_date']),'d-m-Y H:i:s')." By : $data[modified_by]"; ?></label>	

						               </h4>
						        	</div>
					          		<div class="panel-body">
					          			<div class="form_sep">
								               
								                <input type='text' value="<?php if(isset($data['counsel_id'])) echo $data['counsel_id']; ?>" class='hide' name='counsel_id' id='counsel_id'/>
								        </div>
					          			<div class="form_sep">
									        <label class="req" for="student_num">Date</label>
									        <div class='input-group date' id='datetimepicker'>
											    <input type='text' value="<?php if(isset($data['date'])) echo $this->green->formatSQLDate($data['date']); ?>" required  data-parsley-required-message="Enter Date"  id="date" class="form-control" name="date"/>
											    <span class="input-group-addon"><span class="glyphicon glyphicon-calendar">
											</div>	
									    </div>
									    <div class="form_sep">
								                <label class="req" for="student_num">Family Name</label>
								                <input type="text" required  data-parsley-required-message="Enter family"  value="<?php if(isset($data['familyid'])) echo $family['family_name'].' | '.$family['family_code']; ?>" class="form-control parsley-validated" name="family" id="family">
								                <input type='text' class='hide' name='familyid' value="<?php if(isset($data['familyid'])) echo $data['familyid']; ?>" id='familyid' />
								        </div>
								        <div class="form_sep">
						                  	<label class="req" for="student_num">Client</label>
						                 	<select data-required="true" onchange='getmember(event);' class="form-control parsley-validated"  required  data-parsley-required-message="Enter Patient Type" minlength='1' name="c_type" value="" id="c_type" >
							                   <option value="">Select Client</option>
							                   <option value="mother" <?php if(isset($data['c_type'])) if($data['c_type']=='mother') echo 'selected'; ?>>Mother</option>
							                   <option value="father" <?php if(isset($data['c_type'])) if($data['c_type']=='father') echo 'selected'; ?>>Father</option>
							                   <option value="member" <?php if(isset($data['c_type'])) if($data['c_type']=='member') echo 'selected'; ?>>Member</option>
				                  			</select>
							            </div>
					            		<div class="form_sep">
						                  	<label class="req" for="student_num">Client Name</label>
						                 	<select data-required="true" class="form-control parsley-validated" minlength='1' name="member" value="" id="member" >
							                   <?php echo $member; ?>
				                  			</select>
							            </div>
							             <div class="form_sep">
						                  <label class="req" for="reg_input_name">Session</label>
						                  <input type="text" name="session" id="session" class="form-control" value="<?php if(isset($data['session'])) echo $data['session']; ?>" /> 
						                </div>
							            <div class="form_sep">
						                  <label class="req" for="reg_input_name">Reason</label>
						                  <textarea data-required="true"  value="" class="form-control parsley-validated" name="reason"  id="reason"><?php if(isset($data['reason'])) echo $data['reason'] ?></textarea>
						                </div>
						                
							           
						            </div>
						        </div>
						</div>
						<div class="col-sm-6">
				            <div class="panel panel-default">
				            		<div class="panel-heading">
						               <h4 class="panel-title">Counseling Update</h4>
						            </div>
					          		<div class="panel-body">
						                <div class="form_sep">
						                  <label class="req" for="reg_input_name">Update Information</label>
						                  <textarea data-required="true" class="form-control parsley-validated" name="update_info"  id="update_info"><?php if(isset($data['update_info'])) echo $data['update_info']; ?></textarea>
						                </div>
							            <div class="form_sep">
						                  <label class="req" for="reg_input_name">Observation</label>
						                  <textarea data-required="true" class="form-control parsley-validated" name="observation"  id="observation"><?php if(isset($data['observation'])) echo $data['observation']; ?></textarea>
						                </div>
						                <div class="form_sep">
						                  <label class="req" for="reg_input_name">Intervation</label>
						                  <textarea data-required="true" class="form-control parsley-validated" name="intervation"  id="intervation"><?php if(isset($data['intervation'])) echo $data['intervation']; ?></textarea>
						                </div>
						                <div class="form_sep">
						                  	<label class="req" for="reg_input_name">Planning Next Session</label>
						                   	<input type="text" value="<?php if(isset($data['plan_next_session'])) echo $data['plan_next_session']; ?>" class="form-control parsley-validated" name="planning_next_session" id="planning_next_session">
						                </div>
						                <div class="form_sep">
									        <label class="req" for="student_num">Planning Next Date</label>
									        <div class='input-group date' id='datetimepicker'>
											    <input type='text' value="<?php if(isset($data['plan_next_date'])) echo $this->green->formatSQLDate($data['plan_next_date']); ?>"  id="planning_next_date" class="form-control" name="planning_next_date"/>
											    <span class="input-group-addon"><span class="glyphicon glyphicon-calendar">
											</div>	
									    </div>
						            
							            <div class="form_sep">
						                  	<label class="req" for="reg_input_name">Counselor</label>
						                   	<input type="text" class="form-control parsley-validated" name="countsulted_by" id="countsulted_by">
						                	<table class='table'>
						                		<thead>
						                			<th>Name</th>
						                			<th>Position</th>
						                			<th>Remark</th>
						                			<th>Remove</th>
						                		</thead>
						                		<tbody id='liststaff'>
						                			<?php 
						                				if(isset($data['familyid'])){
						                					foreach ($this->counsel->getcounsulted($data['counsel_id']) as $row) {
						                						echo "<tr>
																	<td><input type='text' name='empid[]' class='form-control hide empid' value='".$row->empid."'/>".$row->last_name.' '.$row->first_name."</td>
																	<td>".$row->position."</td>
																	<td><input type='text' name='remark[]' value='".$row->remark."' class='form-control'/></td>
																	<td>
																		<a>
																		 		<img onclick='removerow(event);' src='".site_url('../assets/images/icons/delete.png')."'/>
																		</a>
																</tr>";
						                					}
						                				}
						                			?>
						                		</tbody>
						                	</table>
						                </div>
					            	</div>
					        </div>
					    </div>
				        
				</div>
				<div class="row">
		          <div class="col-sm-5">
		            <div class="form_sep">
		              <button id="std_reg_submit" name="std_reg_submit" type="submit" class="btn btn-success">Save</button>
		              <button id="btncancel" type="button" class="btn btn-danger">Cancel</button>
		            </div>
		          </div>
		        </div>  
		 </form>
	    </div>
	</div>
</div>

<script type="text/javascript">
	 $(function(){
		autofillfamily();
		autofillemp();
		$("#a_medicine").focus(function(){
			autofillmedicine();
		});
		$("#frmmedicine").parsley();
		$("#frmtreatment").parsley();
		$("#date,#planning_next_date").datepicker({
      		language: 'en',
      		pick12HourFormat: true,
      		format:'dd-mm-yyyy'
    	});
	});
	function getmember(event){
		var co_type=$(event.target).val();
		var familyid=$("#familyid").val();
		if(familyid!=''){
			$.ajax({
	                url:"<?php echo site_url('social/counseling/getmember') ?>",    
	                data: {'co_type':co_type,'familyid':familyid},
	                type:"post",
	                success: function(data){
	              		$('#member').html(data);
	            	}
	       });
		}else{
			$('.error').html('Please select family first');
		}
		
	}
	function removerow(event){
		var row_class=$(event.target).closest('tr').remove();
	}
	function autofillfamily(){		
		var family="<?php echo site_url("social/counseling/fillfamily")?>";
    	$("#family").autocomplete({
				source: family,
				minLength:0,
				select: function( events, ui ) {	
					$('#familyid').val(ui.item.id);
					$('#member').html('<option>Select Client Name</option>');
					$('#session').val(getSesCs(ui.item.id));
				}			
			});
	}
	function autofillemp(){	
		var emp="<?php echo site_url("social/counseling/fillemp")?>";
    	$("#countsulted_by").autocomplete({
				source: emp,
				minLength:0,
				select: function( events, ui ) {
						addstaffrow(ui.item.value,ui.item.id,ui.item.position);
				}			
			});
	}
	function addstaffrow(name,id,position){
		
			$('#liststaff').append("<tr>"+
										"<td><input type='text' name='empid[]' class='form-control hide empid' value='"+id+"'/>"+name+"</td>"+
										"<td>"+position+"</td>"+
										"<td><input type='text' name='remark[]' class='form-control'/></td>"+
										"<td>"+
											"<a>"+
											 		"<img onclick='removerow(event);' src='<?php echo site_url('../assets/images/icons/delete.png'); ?>'/>"+
											"</a>"+
									"</tr>");
		

	}
	
	function isNumberKey(evt){
        var e = window.event || evt; // for trans-browser compatibility 
        var charCode = e.which || e.keyCode; 
        if ((charCode > 45 && charCode < 58) || charCode == 8){ 
            return true; 
        } 
        return false;  
    }
    function getSesCs(familyid){
    	var num=0;
    	$.ajax({
    		url:"<?php echo site_url('social/counseling/getSesCs')?>",
    		type:"post",
    		datatype:"Json",
    		async:false,
    		data:{
    			familyid:familyid
    		},
    		success:function(re){
    			num=re.num;
    		}
    	})
    	return num;

    }
</script>
