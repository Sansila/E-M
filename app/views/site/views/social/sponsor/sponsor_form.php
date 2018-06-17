<?php       
	$m='';
	$p='';
	if(isset($_GET['m'])){
    	$m=$_GET['m'];
    }
    if(isset($_GET['p'])){
        $p=$_GET['p'];
    }
	// print_r($month);
 ?>
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
				      		<strong>Sponsor Information</strong>
				      		
				      	</div>
				      	<div class="col-sm-6" style="text-align: center">
				      		<strong>
				      			<center class='error' style='color:red;'><?php if(isset($error)) echo "$error"; ?></center>
				      		</strong>	
				      	</div>
			</div> 
	     
	       <form enctype="multipart/form-data" id='frmsponsor' action="<?php echo base_url()."index.php/social/sponsor/save?m=$m&p=$p"; ?>" method="POST">
			        <div class="row">
						<div class="col-sm-6">
				            	<div class="panel panel-default">
				            		<div class="panel-heading">
						               <h4 class="panel-title">Sponsor Details 
											<label style="float:right !important; font-size:11px !important; color:red;"><?php if(isset($data['modified_by'])) if($data['modified_by']!='') echo "Last Modified Date: ".date_format(date_create($data['modified_date']),'d-m-Y H:i:s')." By : $data[modified_by]"; ?></label>	
						               		
						               </h4>
						        	</div>
					          		<div class="panel-body">
					          			<div class="form_sep">
								               
								                <input type='text' value="<?php if(isset($data['sponsorid'])) echo $data['sponsorid']; ?>" class='hide' name='sponsorid' id='sponsorid'/>
								        </div>
									    <div class="form_sep">
								                <label class="req" for="student_num">SponsorID</label>
								                <input type="text" required  data-parsley-required-message="Enter SponsorID"  value="<?php if(isset($data['sponsor_code'])) echo $data['sponsor_code']; ?>" class="form-control parsley-validated" name="sponsor_code" id="sponsor_code">
								                
								        </div>
								        <div class="form_sep">
								                <label class="req" for="student_num">Last Name</label>
								                <input type="text" required  data-parsley-required-message="Enter Last Name"  value="<?php if(isset($data['last_name'])) echo $data['last_name']; ?>" class="form-control parsley-validated" name="last_name" id="last_name">
								                
								        </div>
								        <div class="form_sep">
								                <label class="req" for="student_num">First Name</label>
								                <input type="text" required  data-parsley-required-message="Enter First Name"  value="<?php if(isset($data['first_name'])) echo $data['first_name']; ?>" class="form-control parsley-validated" name="first_name" id="first_name">
								               
								        </div>
								        <div class="form_sep hide">
						                  	<label class="req" for="student_num">Gender</label>
						                 	<select data-required="true" onchange='getmember(event);' class="form-control parsley-validated" name="gender" value="" id="gender" >
							                  
							                   <option value="M" <?php if(isset($data['gender'])) if($data['gender']=='M') echo 'selected'; ?>>Male</option>
							                   <option value="F" <?php if(isset($data['gender'])) if($data['gender']=='F') echo 'selected'; ?>>Female</option>
							                   
				                  			</select>
							            </div>
					            		<div class="form_sep">
									        <label class="req" for="student_num">Date of Birth</label>
									        <div class='input-group date' id='datetimepicker'>
											    <input type='text' value="<?php if(isset($data['dob'])) echo $this->green->formatSQLDate($data['dob']); ?>"  id="dob" class="form-control" name="dob"/>
											    <span class="input-group-addon"><span class="glyphicon glyphicon-calendar">
											</div>	
									    </div>
							            <div class="form_sep">
								                <label class="req" for="student_num">Title</label>
								                <input type="text"  value="<?php if(isset($data['position'])) echo $data['position']; ?>" class="form-control parsley-validated" name="position" id="position">
								               
								        </div>
								        <div class="form_sep">
									        <label class="req" for="student_num">Start Sponsor Date</label>
									        <div class='input-group date' id='datetimepicker'>
											    <input type='text' value="<?php if(isset($data['start_sp_date'])) echo $this->green->formatSQLDate($data['start_sp_date']); ?>"  id="start_sp_date" class="form-control" name="start_sp_date"/>
											    <span class="input-group-addon"><span class="glyphicon glyphicon-calendar">
											</div>	
									    </div>
									    <div class="form_sep">
									        <label class="req" for="student_num">End Soponsor Date</label>
									        <div class='input-group date' id='datetimepicker'>
											    <input type='text' value="<?php if(isset($data['end_sp_date'])) echo $this->green->formatSQLDate($data['end_sp_date']); ?>"  id="end_sp_date" class="form-control" name="end_sp_date"/>
											    <span class="input-group-addon"><span class="glyphicon glyphicon-calendar">
											</div>	
									    </div>
									    <div class="form_sep">
								                <label class="req" for="student_num">Budget</label>
								                <input type="text" onkeypress="return isNumberKey(event);" value="<?php if(isset($data['phone'])) echo $data['phone']; ?>" class="form-control parsley-validated" name="budget" id="budget">
								               
								        </div>
							            <div class="form_sep">
						                  <label class="req" for="reg_input_name">Note</label>
						                  <textarea data-required="true"  value="" class="form-control parsley-validated" name="note"  id="note"><?php if(isset($data['note'])) echo $data['note'] ?></textarea>
						                </div>
						            </div>
						        </div>
						</div>
						<div class="col-sm-6">
				            <div class="panel panel-default">
				            		<div class="panel-heading">
						               <h4 class="panel-title">Sponsor Contact</h4>
						            </div>
					          		<div class="panel-body">
						                <div class="form_sep">
								                <label class="req" for="student_num">Country</label>
								                <input type="text"  value="<?php if(isset($data['country'])) echo $data['country']; ?>" class="form-control parsley-validated" name="country" id="country">
								               
								        </div>
								        <div class="form_sep">
								                <label class="req" for="student_num">City</label>
								                <input type="text" value="<?php if(isset($data['city'])) echo $data['city']; ?>" class="form-control parsley-validated" name="city" id="city">
								               
								        </div>
								         <div class="form_sep">
								                <label class="req" for="student_num">Street</label>
								                <input type="text"  value="<?php if(isset($data['street'])) echo $data['street'] ?>" class="form-control parsley-validated" name="street" id="street">
								               
								        </div>
								        <div class="form_sep">
								                <label class="req" for="student_num">House No</label>
								                <input type="text" value="<?php if(isset($data['house_num'])) echo $data['house_num']; ?>" class="form-control parsley-validated" name="house_no" id="house_no">
								               
								        </div>
								       
								        <div class="form_sep">
								                <label class="req" for="student_num">Phone</label>
								                <input type="text" onkeypress="return isNumberKey(event);" value="<?php if(isset($data['phone'])) echo $data['phone']; ?>" class="form-control parsley-validated" name="phone" id="phone">
								               
								        </div>
								        <div class="form_sep">
								                <label class="req" for="student_num">Email</label>
								                <input type="text"  value="<?php if(isset($data['email'])) echo $data['email']; ?>" class="form-control parsley-validated" name="email" id="email">
								               
								        </div>
								        <div class="form_sep">
								                <label class="req" for="student_num">Website</label>
								                <input type="text"   value="<?php if(isset($data['website'])) echo $data['website']; ?>" class="form-control parsley-validated" name="website" id="website">
								               
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
		$("#frmsponsor").parsley();
		$("#dob,#start_sp_date,#end_sp_date").datepicker({
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
					$('#member').html('<option>Select member/Respondsible</option>')
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
    
</script>
