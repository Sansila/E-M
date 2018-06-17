<?php
	//$cars=array("Volvo","BMW","Toyota");
	$relation=array("Legal Student","father`s child","mother`s child","brother/sister","Cousin","niece/nephew");
	$social_status=array("Normal","alcohol","violent","Mental","Drug");
	$Health=array("Normal","Handicap 50%","Handicap 100%");
	$civil_status=array("Single","Married","Divorce/widow");
?>

<style type="text/css">
	ul,ol{
		margin-bottom: 0px !important;
	}
	a{
		cursor: pointer;
	}
	.datepicker {z-index: 9999;}
</style>
<div class="wrapper">
	<div class="clearfix" id="main_content_outer">
    <div id="main_content">
      <div class="alert alert-info"><strong>Student Information</strong><center style='margin:auto; color:red; text-align:center' class='error' ><?php if(isset($error)) echo "$error"; ?></center></div>      
       <div id="stdregister_div"></div>
      <!-- main content -->
       <form enctype="multipart/form-data" name="std_register" id="std_register" method="POST" action="<?php echo site_url('student/student/save')?>">
        <div class="row">
          <div class="col-sm-6">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title">Student Details</h4>
              </div>
              <div class="panel-body">
                <div class="form_sep">
                  <label class="req" for="student_num">Student ID</label>
                  <input type="text" data-required="true" value="<?php echo $this->std->getmaxid(); ?>" onblur='fillpwd(event);' required data-parsley-required-message="Enter Student ID" class="form-control parsley-validated" name="student_num" value="" id="student_num">
                </div>                
                <div class="form_sep">
                  <label class="req" for="classid">Class</label>
                  <select data-required="true" onchange="get_batch(this.value)" required data-parsley-required-message="Select Class" minlength='1' class="form-control parsley-validated" name="classid" id="classid">
                   
                    <option value="">Select Class</option>
                    <?php
                    	foreach ($this->std->getclass()->result() as $class) {?>
                    		<option value="<?php echo $class->classid ;?>" ><?php echo $class->class_name;?></option>
                    	<?php }
                    ?>
                  </select>
                </div>                 
              </div>
              
              <div class="panel-heading">
                <h4 class="panel-title">Personal Details</h4>
              </div>
              <div class="panel-body">
	          		<div class="form_sep">
		              <label class="req" for="last_name">Last Name</label>
		              <input type="text" data-required="true" onblur='fillusername(event);' required data-parsley-required-message="Enter Last Name" class="form-control parsley-validated" name="last_name" value="" id="last_name">
		           </div>
	               <div class="form_sep">
		              <label class="req" for="first_name">First Name</label>
		              <input type="text" data-required="true" class="form-control parsley-validated" onblur='fillusername(event);' required data-parsley-required-message="Enter First Name" name="first_name" value="" id="first_name">
		           </div>
		           
		           <div class="form_sep">
		              <label class="req" for="last_name_kh">Last Name(Kh)</label>
		              <input type="text" data-required="true" class="form-control parsley-validated" required data-parsley-required-message="Enter Last Name in Khmer" name="last_name_kh" value="" id="last_name_kh">
		           </div>
		           <div class="form_sep">
		              <label class="req">Date of Birth</label>
		              <div data-date-format="dd-mm-yyyy" class="input-group date dob">
		              <input type="text" value="" data-type="dateIso" required data-parsley-required-message="Choose Your Date of birth" data-required="true" class="form-control input_validate parsley-validated" id="dob" name="dob">
		              <span class="input-group-addon"><i class="icon-calendar"></i></span> </div>
		          </div>                
	                 <div class="form_sep">
	                 <label for="reg_input_name ">Nationality</label>
	                 <input type="text" data-type="dateIso" required data-parsley-required-message="Choose Your nationality" data-required="true" class="form-control input_validate parsley-validated" id="nationality" name="nationality">
	              </div>       
                <div class="form_sep">
                  <label for="reg_input_name">Religion</label>
                  <input type="text" value="" class="form-control" required data-parsley-required-message="Enter Religion" name="religion" id="religion">
                </div>
                      
             	<div class="form_sep">
                  <label class="req" for="comments">Comments</label>
                  <textarea data-required="true" class="form-control parsley-validated" name="comments" id="comments"></textarea>
                </div>
                <div class="form_sep">
                  <label for="reg_input_logo">Upload Photo</label>
                  <input type="file" class=""  name="file" id="file">
                </div>  
              </div>                           
              <div class="panel-heading">
                <h4 class="panel-title">Login Information</h4>
              </div>
              <div class="panel-body">
                <div class="form_sep">
                  <label class="req" for="login_username">User Name</label>                 
                  <input type="text" data-minlength-message="Username should have at least 5 characters." required data-parsley-required-message="Enter UserName"  data-minlength="5" value="" data-required="true" onclick="get_stdregno();" class="form-control parsley-validated" name="login_username" id="login_username">
                </div>
                <div class="form_sep">
                  <label class="req" for="password">Password</label>
                  <input type="password" value="<?php echo $this->std->getmaxid(); ?>"  data-required-message="Please enter a valid Password" required data-parsley-required-message="Enter Password" data-minlength-message="Password should have at least 6 characters." data-minlength="6" data-required="true" onclick="get_dob();" class="form-control parsley-validated" name="password" id="password">
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
	                  <label class="req" for="reg_input_name">Permanent Address</label>
	                  <textarea data-required="true" class="form-control parsley-validated" name="permanent_adr" required data-parsley-required-message="Enter Permanent Address" id="permanent"></textarea>
	                </div>
	                <div class="form_sep">
	                  <label class="req" for="province">Province</label>
	                  <input type="text" value="" data-required="true" required data-parsley-required-message="Enter Province" class="form-control parsley-validated" name="province" id="province">
	                </div>
	                <div class="form_sep">
	                  <label class="req" for="district">District</label>
	                  <input type="text" value="" data-required="true" class="form-control parsley-validated" required data-parsley-required-message="Enter District" name="district" id="district">
	                </div>
	                <div class="form_sep">
	                  <label class="req" for="commune">Commune</label>
	                  <input type="text" value="" data-type="number" data-required="true" required data-parsley-required-message="Enter Commune" class="form-control parsley-validated" name="commune" id="commune">
	                </div>
	                <div class="form_sep">
	                  <label class="req" for="village">Village</label>
	                  <input type="text" data-type="dateIso" required data-parsley-required-message="enter your Village" data-required="true" class="form-control input_validate parsley-validated" id="village" name="village">
	                </div>
	                <div class="form_sep">
	                  <label class="req" for="phone1">Phone</label>
	                  <input type="text" data-type="phone" onkeypress='return isNumberKey(event);' value="" data-required="true" required data-parsley-required-message="Enter Phone Number" class="form-control parsley-validated" name="phone1" id="phone1">
	                </div>                
	                <div class="form_sep">
	                  <label class="req" for="reg_input_currency">Email</label>
	                  <input type="email" data-parsley-type="email" data-type="email" value="" data-required="true" required data-parsley-required-message="Enter Email Address" class="form-control parsley-validated" name="email" id="email">
	                </div>
	                <div class="form_sep">
	                  <label class="req" for="phone1">Zoon</label>
	                  <input type="text" data-type="phone" value="" required data-parsley-required-message="Enter Zon" data-required="true" class="form-control parsley-validated" name="zoon" id="zoon">
	                </div>                 
	                <div class="form_sep">
	                  <label class="req" for="from_school">Distance from school</label>
	                  <input type="text" data-required="true" onkeypress='return isNumberKey(event);' required data-parsley-required-message="Enter Distance from school" class="form-control parsley-validated" name="from_school" id="from_school">                  
	                </div> 
	                <div class="form_sep">
	                  <label class="req" for="measure">Measure</label>
	                  <input type="text" data-required="true" value='' required data-parsley-required-message="Enter Measure from school" class="form-control parsley-validated" id="measure" name="measure"> 
	                </div> 
	                <div class="form_sep">
	                	<input type="checkbox" name="boarding_school" value="1" />		
	                  	<label class="req" for="boarding_school">Boarding School</label>                 
	                </div>
	                <div class="form_sep">
	                  <label class="req" for="boarding_reason">Boarding School Reason</label>
	                  <input type="text" data-required="true" class="form-control parsley-validated" name="boarding_reason" id="boarding_reason">                  
	                </div> 
	                <div class="form_sep">
	                	<input type="checkbox" name="leave_school" value="1" />		
	                  	<label class="req" for="leave_school">Leave School</label>                 
	                </div>
	                <div class="form_sep">
	                  <label class="req" for="leave_reason">Leave School Reason</label>
	                  <input type="text" data-required="true" class="form-control parsley-validated" name="leave_reason" id="leave_reason">                  
	                </div> 
	                <div class="form_sep">
					                <label class="req" for="classid">Family</label>
					                <select data-required="true" onchange="fillrevenue(event);" required data-parsley-required-message="Select family" minlength='1' class="form-control parsley-validated" name="familyid" id="familyid">
					                	<option value="">select Family</option>
					                   <?php
					                    	foreach ($this->db->get('sch_family')->result() as $family_row) {?>
					                    		<option value="<?php echo $family_row->familyid;?>" ><?php echo $family_row->family_name." | ".$family_row->family_code;?></option>
					                   <?php }
					                    ?>
					                </select>
					</div> 
	                <div class="form_sep">
	                  <label class="req" for="family_revenue">Family Revenue</label>
	                  <input type="text" data-required="true" onkeypress='return isNumberKey(event);' class="form-control parsley-validated" name="family_revenue" id="family_revenue">                  
	                </div> 
	                
              	</div>        
             </div>
          </div>
        </div>
        
        <div class="row">
          <div class="col-sm-12">
          	<div class="panel panel-default">
	          	<div class="panel-heading">
	                <h4 class="panel-title">Responsible Detail</h4>
	            </div> 
	            <div class="panel-body">
	           		<div class="table-responsive">
					  <table class="respontbl" id="respontbl">
					    <thead>
					    	<th>Last Name</th>
					    	<th>First Name</th>
					    	<th>Last Name(Kh)</th>
					    	<th>Sex</th>
					    	<th>Relation</th>
					    	<th>DOB</th>
					    	<th>Occupation</th>		
					    	<th>Revenue</th>
					    	<th>
					    		<a >
					    			<img data-toggle="modal" data-target="#addrespon"  src="<?php echo base_url().'assets/images/icons/add.png'?>" onclick="" />
					    		</a>
					    	</th>	
					    	<tbody>
					    		<tr class="td_blank">
					    			<td style='display:none'>
					    				 <input type="text" class="form-control input-sm res_id" name="res_id[]" >														    				
					    			</td>
					    			<td>
					    				 <input type="text" onblur="removerow(event);"  class="form-control input-sm res_lastname" name="res_lastname[]" >														    				
					    			</td>
					    			<td>
					    				 <input type="text" class="form-control input-sm res_first_name" name="res_first_name[]" disabled> 														    				
					    			</td>
					    			<td>
					    				 <input type="text" class="form-control input-sm res_last_name_kh" name="res_last_name_kh[]" disabled>														    				
					    			</td>
					    			<td>
					    				<select class="form-control parsley-validated res_sex" id="res_sex" name="res_sex[]" disabled>
						                    <option value="male">Male</option>
						                    <option value="female">Female</option>		
						                  </select>													    				
					    			</td>
					    			<td>
					    				 <select class="form-control parsley-validated res_relationship" name="res_relationship[]">
					    				 	<?php 
					    				 		foreach ($relation as $relat) {
					    				 			echo "<option>$relat</option>";
					    				 		}
					    				 	 ?>
					    				 </select>					    				 														    				
					    			</td>
					    			<td valign='top'>					    				 
					    				 <div data-date-format="dd-mm-yyyy" class="input-group date dob">
		              						<input type="text" value="" data-type="dateIso" data-required="true" class="form-control input-sm input_validate parsley-validated res_dob" name="res_dob[]" disabled>
		              						<span class="input-group-addon"><i class="icon-calendar"></i></span>
		              					</div>													    				
					    			</td>
					    			<td>
					    				 <input type="text" class="form-control input-sm res_occupation" name="res_occupation[]" disabled>														    				
					    			</td>
					    			<td>
					    				 <input type="text" class="form-control input-sm res_revenue" name="res_revenue[]" disabled>														    				
					    			</td>
					    			<td>
					    				 <a>
							    			<img onclick='deleteresrow(event);' src="<?php echo base_url().'assets/images/icons/delete.png'?>" />
							    		</a>													    				
					    			</td>					    			
					    		</tr>					    		
					    	</tbody>			    					    							    	   	
					    </thead>
					  </table>
					</div>  
				</div>
				
			</div>	
          </div>
        </div>
        
         <div class="row">
          <div class="col-sm-12">
          	<div class="panel panel-default">
	          	<div class="panel-heading">
	                <h4 class="panel-title">Member Detail</h4>
	            </div> 
	            <div class="panel-body">
	           		<div class="table-responsive">
					  <table class="table" id="tab_member">
					    <thead>
					    	<th>Last Name</th>
					    	<th>First Name</th>
					    	<th>Last Name(Kh)</th>
					    	<th>Sex</th>
					    	<th>Relation</th>
					    	<th>DOB</th>
					    	<th>Occupation</th>					    	
					    	<th>
					    		<a>
					    			<img data-toggle="modal" data-target="#addmember" src="<?php echo base_url().'assets/images/icons/add.png'?>" />
					    		</a>
					    	</th>	
					    	<tbody>
					    		<tr class="tdmem_blank">
					    			<td style='display:none;'>
					    				 <input type="text" class="form-control input-sm mem_id" name="mem_id[]">														    				
					    			</td>
					    			<td>
					    				 <input type="text" onblur="removerow(event);" class="form-control input-sm mem_lastname" name="mem_lastname[]">														    				
					    			</td>
					    			<td>
					    				 <input type="text" class="form-control input-sm mem_first_name" name="mem_first_name[]" disabled>														    				
					    			</td>
					    			<td>
					    				 <input type="text" class="form-control input-sm mem_last_name_kh" name="mem_last_name_kh[]" disabled>														    				
					    			</td>
					    			<td>
					    				<select class="form-control parsley-validated mem_sex" id="mem_sex" name="mem_sex[]" disabled>
						                    <option value="male">Male</option>
						                    <option value="female">Female</option>		
						                  </select>													    				
					    			</td>
					    			<td>
					    				 <select class="form-control parsley-validated mem_relationship" name="mem_relationship[]">
					    				 	<?php 
					    				 		foreach ($relation as $relat) {
					    				 			echo "<option>$relat</option>";
					    				 		}
					    				 	 ?>
					    				 </select>															    				
					    			</td>
					    			<td>					    				 
					    				 <div data-date-format="dd-mm-yyyy" class="input-group date dob">
		              						<input type="text" value="" data-type="dateIso" data-required="true" class="form-control input-sm input_validate parsley-validated mem_dob" name="mem_dob[]" disabled>
		              						<span class="input-group-addon"><i class="icon-calendar"></i></span>
		              					</div>													    				
					    			</td>
					    			<td>
					    				 <input type="text" class="form-control input-sm mem_occupation" name="mem_occupation[]" disabled>														    				
					    			</td>					    			
					    			<td>
							    			<img onclick='deletememrow(event);' src="<?php echo base_url().'assets/images/icons/delete.png'?>" />
							    		</a>													    				
					    			</td>					    			
					    		</tr>					    		
					    	</tbody>			    					    							    	   	
					    </thead>
					  </table>
					</div>  
				</div>
			</div>	
          </div>
        </div>
        <!-- +++++++++++++++++++++++++++++++++student link++++++++++++++++++++++++++++++++++++++++++++++++ -->
        <div class="row">
          <div class="col-sm-12">
          	<div class="panel panel-default">
	          	<div class="panel-heading">
	                <h4 class="panel-title">Student Link</h4>
	            </div> 
	            <div class="panel-body">
	           		<div class="table-responsive">
					  <table class="table" id="tab_link">
					    <thead>
					    	<th>Last Name</th>
					    	<th>First Name</th>
					    	<th>Last Name(Kh)</th>
					    	<th>Class</th>					    	
					    	<th>
					    		
					    	</th>	
					    	<tbody>
					    		<tr class="tdlink_blank">
					    			<td style='display:none;'>
					    				 <input type="text" class="form-control input-sm link_id" name="link_id[]">														    				
					    			</td>
					    			<td>
					    				 <input type="text" onblur="removerow(event);" class="form-control input-sm link_lastname" name="link_lastname[]">														    				
					    			</td>
					    			<td>
					    				 <input type="text" class="form-control input-sm link_first_name" name="link_first_name[]" disabled>														    				
					    			</td>
					    			<td>
					    				 <input type="text" class="form-control input-sm link_first_name" name="link_first_name[]" disabled>														    				
					    			</td>
					    			
					    			<td>
					    				 <input type="text" class="form-control input-sm link_class" name="link_class[]" disabled>														    				
					    			</td>					    			
					    			<td>
							    			<img onclick='deletelinkrow(event);' src="<?php echo base_url().'assets/images/icons/delete.png'?>" />
							    		</a>													    				
					    			</td>					    			
					    		</tr>					    		
					    	</tbody>			    					    							    	   	
					    </thead>
					  </table>
					</div>  
				</div>
			</div>	
          </div>
        </div>
        <!-- +++++++++++++++++++++++++++++++++ end student link++++++++++++++++++++++++++++++++++++++++++++++++ -->
        <div class="row">
          <div class="col-sm-5">
            <div class="form_sep">
              <button id="std_reg_submit" name="std_reg_submit" type="submit" class="btn btn-success">Save</button>
            </div>
          </div>
        </div>        
      </form>
    </div>
  </div>
</div>


<!--++++++++++++++++++++++++++++++++++++++++++++++Form add Member+++++++++++++++++++++++++++++++++++++++++++++++++++ -->					
<!-- Modal popup add member -->
<div class="modal fade" id="addmember" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
         <div class="modal-content">
            <div class="wrapper">
				<div class="clearfix" id="main_content_outer">
			    <div id="main_content">
			      
			       <div class="result_info">
			      	<div class="col-sm-6">
			      		<strong>Member Infomation</strong>
			      		
			      	</div>
			      	<div class="col-sm-6" style="text-align: center">
			      		<strong>
			      			<center class='member_error' style='color:red;'></center>
			      		</strong>	
			      	</div>
			      </div> 
			      
			      <form method="post" id='frmaddmember' accept-charset="utf-8" class="tdrow" id="fschyear">
			      	<div class="row">          
			       		<div class="col-sm-6">                       	
			              	<div class="panel-body">
				                <div class="form_sep">
				                  <label class="req" for="student_num">Last Name</label>
				                   <input type="text" name="addmem_last_name" id="addmem_last_name"  class="form-control" required data-parsley-required-message="Enter last Name" />	
				                </div>                
				                <div class="form_sep">
				                  <label class="req" for="student_num">Last Name Kh</label>
				                   <input type="text" name="addmem_last_name_kh" id="addmem_last_name_kh"  class="form-control" required data-parsley-required-message="Enter last Name" />	
				                </div> 
					          	<div class="form_sep">
					                <label class="req" for="classid">Sex</label>
					                <select data-required="true"class="form-control parsley-validated" name="addmem_sex" id="addmem_sex">
					                	<option value="male">Male</option>
					                   <option value="female">Female</option>
					                </select>
					            </div>    
					            <div class="form_sep">
					                <label class="req" for="student_num">Occupation</label>
					                <input type="text" name="addmem_occupation" id="addmem_occupation"  class="form-control"  />	
					            </div>    
					            <div class="form_sep">
				                  <label class="req" for="student_num">Tel 1</label>
				                   <input type="text" name="addmem_tel1" onkeypress='return isNumberKey(event);' id="addmem_tel1"  class="form-control" required data-parsley-required-message="Enter Phone Number" />	
				                </div> 
				  
				                <div class="form_sep">
					                <label class="req" for="classid">Social Status</label>
					                <select data-required="true" class="form-control parsley-validated" name="addmem_social_status" id="addmem_social_status">
					                	<option value="">select Solcial status</option>
					                   <?php
					                    	foreach ($social_status as $s_row) {?>
					                    		<option value="<?php echo $s_row;?>" ><?php echo $s_row;?></option>
					                    	<?php }
					                    ?>
					                </select>
					            </div> 
					            <div class="form_sep">
					                <label class="req" for="classid">Civil Status</label>
					                <select data-required="true" class="form-control parsley-validated" name="addmem_civil_status" id="addmem_civil_status">
					                	<option value="">select Civil status</option>
					                   <?php
					                    	foreach ($civil_status as $c_row) {?>
					                    		<option value="<?php echo $c_row;?>" ><?php echo $c_row;?></option>
					                    	<?php }
					                    ?>
					                </select>
					            </div>  
					            <div class="form_sep">
				                  <label class="req" for="student_num">Grade Level</label>
				                   <select data-required="true" class="form-control parsley-validated" name="addmem_grade_level" id="addmem_grade_level">
					                	<option value="">select Grade level</option>
					                   <?php
					                    	foreach ($this->db->get('sch_grade_level')->result() as $grade_row) {?>
					                    		<option value="<?php echo $grade_row->grade_levelid;?>" ><?php echo $grade_row->grade_level;?></option>
					                    	<?php }
					                    ?>
					                </select>
				                </div> 
				                <div class="form_sep">
				                	<input type="checkbox" name="addmem_leave_school" id='addmem_leave_school' value='0'/>		
				                  	<label class="req" for="leave_school">Leave School</label>                 
				                </div>
				            </div>
			            </div>
			            <div class="col-sm-6">          	
				          	<div class="panel-body">
				          		<div class="form_sep">
					                <label class="req" for="student_num">Fisrt Name</label>
					                <input type="text" name="addmem_first_name" id="addmem_first_name"  class="form-control" required data-parsley-required-message="Enter First Name" />	
					            </div> 
					            <div class="form_sep">
					                <label class="req" for="student_num">first Name Kh</label>
					                <input type="text" name="addmem_first_name_kh" id="addmem_first_name_kh"  class="form-control" required data-parsley-required-message="Enter last Name" />	
					            </div> 
				          		<div class="form_sep">
				                  <label class="req" for="student_num">DOB</label>
				                  <div class='input-group date' id='datetimepicker'>
						                 <input type='text' id="addmem_dob" class="form-control" name="addmem_dob"/>
						                 <span class="input-group-addon"><span class="glyphicon glyphicon-calendar">
						          </div>	
				                </div> 
				          		<div class="form_sep">
				                  <label class="req" for="student_num">Note</label>
				                   <input type="text" name="addmem_note" id="addmem_note"  class="form-control"/>	
				                </div> 
				                <div class="form_sep">
				                  <label class="req" for="student_num">Tel 2</label>
				                   <input type="text" name="addmem_tel2" onkeypress='return isNumberKey(event);' id="addmem_tel2"  class="form-control"/>	
				                </div>   
				                
				                <div class="form_sep">
					                <label class="req" for="classid">Health</label>
					                <select data-required="true" class="form-control parsley-validated" name="addmem_health" id="addmem_health">
					                	<option value="">select Health</option>
					                   <?php
					                    	foreach ($Health as $h_row) {?>
					                    		<option value="<?php echo $h_row;?>" ><?php echo $h_row;?></option>
					                    	<?php }
					                    ?>
					                </select>
					            </div>  
					            <div class="form_sep">
				                  <label class="req" for="student_num">School</label>
				                   <select data-required="true" class="form-control parsley-validated" name="addmem_school" id="addmem_school">
					                	<option value="">select School</option>
					                   <?php
					                    	foreach ($this->db->get('sch_school_infor')->result() as $school_row) {?>
					                    		<option value="<?php echo $school_row->schoolid;?>" ><?php echo $school_row->name;?></option>
					                    	<?php }
					                    ?>
					                </select>
				                </div> 
				                <div class="form_sep">
					                <label class="req" for="classid">Family</label>
					                <select data-required="true" required data-parsley-required-message="Select family" minlength='1' class="form-control parsley-validated" name="addmem_familyid" id="addmem_familyid">
					                	<option value="">select Falmily</option>
					                   <?php
					                    	foreach ($this->db->get('sch_family')->result() as $family_row) {?>
					                    		<option value="<?php echo $family_row->familyid;?>" ><?php echo $family_row->family_name." | ".$family_row->family_code;?></option>
					                   <?php }
					                    ?>
					                </select>
								</div> 
				            </div>
			            </div>
			        </div>
        
			      </form>         
			    </div>
			    
			 </div>  
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" id='btnaddmember' class="btn btn-primary">Save Member</button>
            </div>
        </div>
        </div>
                                    <!-- /.modal-content -->
    </div>
                                <!-- /.modal-dialog -->
</div>
<!--++++++++++++++++++++++++++++++++++++++++++++++End Form add Member+++++++++++++++++++++++++++++++++++++++++++++++++++ -->
<!--++++++++++++++++++++++++++++++++++++++++++++++Form add Respondsible+++++++++++++++++++++++++++++++++++++++++++++++++++ -->
<!-- Modal popup add respond -->
<div class="modal fade" id="addrespon" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
         <div class="modal-content">
            <div class="wrapper">
				<div class="clearfix" id="main_content_outer">
			    <div id="main_content">
			      
			       <div class="result_info">
			      	<div class="col-sm-6">
			      		<strong>Respondsible Infomation</strong>
			      	</div>
			      	<div class="col-sm-6" style="text-align: center">
			      		<strong>
			      			<center class='respon_error' style='color:red;'></center>
			      		</strong>	
			      	</div> 
			      </div> 
			      
			      <form method="post" accept-charset="utf-8" class="frmaddrespond" id="frmaddrespond">
			      	<div class="row">          
			       		<div class="col-sm-6">                       	
			              	<div class="panel-body">
				                <div class="form_sep">
				                  <label class="req" for="student_num">Last Name</label>
				                   <input type="text" name="addres_last_name" id="addres_last_name"  class="form-control" required data-parsley-required-message="Enter last Name" />	
				                </div>                
				                <div class="form_sep">
				                  <label class="req" for="student_num">Last Name Kh</label>
				                   <input type="text" name="addres_last_name_kh" id="addres_last_name_kh"  class="form-control" required data-parsley-required-message="Enter last Name Khmer" />	
				                </div> 
					          	<div class="form_sep">
					                <label class="req" for="classid">Sex</label>
					                <select data-required="true" required data-parsley-required-message="Select Class" minlength='1' class="form-control parsley-validated" name="addres_sex" id="addres_sex">
					                	<option value="male">Male</option>
					                   <option value="female">Female</option>
					                </select>
					            </div>    
					            <div class="form_sep">
					                <label class="req" for="student_num">Occupation</label>
					                <input type="text" name="addres_occupation" id="addres_occupation"  class="form-control"/>	
					            </div>    
					            <div class="form_sep">
				                  <label class="req" for="student_num">Tel 1</label>
				                   <input type="text" name="addres_tel1" onkeypress='return isNumberKey(event);' id="addres_tel1"  class="form-control" required data-parsley-required-message="Enter Phone Number" />	
				                </div> 
				                <div class="form_sep">
				                  <label class="req" for="student_num">District</label>
				                   <input type="text" name="addres_district" id="addres_district"  class="form-control" />	
				                </div> 
				                <div class="form_sep">
				                  <label class="req" for="student_num">Village</label>
				                   <input type="text" name="addres_viilage" id="addres_viilage"  class="form-control"/>	
				                </div>
				                <div class="form_sep">
					                <label class="req" for="classid">Social Status</label>
					                <select data-required="true" minlength='1' class="form-control parsley-validated" name="addres_social_status" id="addres_social_status">
					                	<option value="">select Solcial status</option>
					                   <?php
					                    	foreach ($social_status as $s_row) {?>
					                    		<option value="<?php echo $s_row;?>" ><?php echo $s_row;?></option>
					                    	<?php }
					                    ?>
					                </select>
					            </div> 
					            <div class="form_sep">
					                <label class="req" for="classid">Civil Status</label>
					                <select data-required="true" class="form-control parsley-validated" name="addres_civil_status" id="addres_civil_status">
					                	<option value="">select Civil status</option>
					                   <?php
					                    	foreach ($civil_status as $c_row) {?>
					                    		<option value="<?php echo $c_row;?>" ><?php echo $c_row;?></option>
					                    	<?php }
					                    ?>
					                </select>
					            </div>  
					            <div class="form_sep">
					                <label class="req" for="classid">Family</label>
					                <select data-required="true" required data-parsley-required-message="Select family" minlength='1' class="form-control parsley-validated" name="addres_familyid" id="addres_familyid">
					                	<option value="">select Falmily</option>
					                   <?php
					                    	foreach ($this->db->get('sch_family')->result() as $family_row) {?>
					                    		<option value="<?php echo $family_row->familyid;?>" ><?php echo $family_row->family_name." | ".$family_row->family_code;?></option>
					                   <?php }
					                    ?>
					                </select>
								</div>  
				            </div>
			            </div>
			            <div class="col-sm-6">          	
				          	<div class="panel-body">
				          		<div class="form_sep">
					                <label class="req" for="student_num">Fisrt Name</label>
					                <input type="text" name="addres_first_name" id="addres_first_name"  class="form-control" required data-parsley-required-message="Enter First Name" />	
					            </div> 
					            <div class="form_sep">
					                <label class="req" for="student_num">first Name Kh</label>
					                <input type="text" name="addres_first_name_kh" id="addres_first_name_kh"  class="form-control" required data-parsley-required-message="Enter fisrt Name Khmer" />	
					            </div> 
				          		<div class="form_sep">
				                  <label class="req" for="student_num">DOB</label>
				                  <div class='input-group date' id='datetimepicker'>
						                 <input type='text' id="addres_dob" class="form-control" name="addres_dob"/>
						                 <span class="input-group-addon"><span class="glyphicon glyphicon-calendar">
						          </div>	
				                </div> 
				          		<div class="form_sep">
				                  <label class="req" for="student_num">Revenue</label>
				                   <input type="text" name="addres_revenue" onkeypress='return isNumberKey(event);' id="addres_revenue" data-parsley-type="number" data-parsley-required-message="Please Input only Number" class="form-control"/>	
				                </div> 
				                <div class="form_sep">
				                  <label class="req" for="student_num">Tel 2</label>
				                   <input type="text" name="addres_tel2" onkeypress='return isNumberKey(event);' id="addres_tel2"  class="form-control"/>	
				                </div>   
				                <div class="form_sep">
				                  <label class="req" for="student_num">Province</label>
				                   <input type="text" name="addres_province" id="addres_province"  class="form-control"  />	
				                </div>
				                <div class="form_sep">
				                  <label class="req" for="student_num">Commune</label>
				                   <input type="text" name="addres_commune" id="addres_commune"  class="form-control"  />	
				                </div>
				                <div class="form_sep">
					                <label class="req" for="classid">Health</label>
					                <select data-required="true" minlength='1' class="form-control parsley-validated" name="addres_health" id="addres_health">
					                	<option value="">select Health</option>
					                   <?php
					                    	foreach ($Health as $h_row) {?>
					                    		<option value="<?php echo $h_row;?>" ><?php echo $h_row;?></option>
					                    	<?php }
					                    ?>
					                </select>
					            </div>  
					            <div class="form_sep">
				                  <label class="req" for="student_num">Education</label>
				                   <input type="text" name="addres_education" id="addres_education"  class="form-control"/>	
				                </div> 
				            </div>
			            </div>
			        </div>
        
			      </form>         
			    </div>
			    
			 </div>  
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" id='btnsaverpb' class="btn btn-primary">Save Respondsible</button>
            </div>
        </div>
                                    <!-- /.modal-content -->
    </div>
                                <!-- /.modal-dialog -->
</div>
<!--++++++++++++++++++++++++++++++++++++++++++++++End form add Respondsible+++++++++++++++++++++++++++++++++++++++++++++++++++ -->

<script type="text/javascript">
 function isNumberKey(evt){
        var e = window.event || evt; // for trans-browser compatibility 
        var charCode = e.which || e.keyCode; 
        if ((charCode > 45 && charCode < 58) || charCode == 8){ 
            return true; 
        } 
        return false;  
        }
	function fillusername(event){
		var f_name=$('#first_name').val();
		var l_name=$('#last_name').val();
		var username=f_name+'.'+l_name;
		
					$.ajax({
                            url:"<?php echo base_url(); ?>index.php/student/student/validateuser",    
                            data: {'username':username},
                            type:"post",
                            success: function(data){
                           if(data>0){
                           		$('#login_username').val(username+'1');
                           }else{
                           		$('#login_username').val(username);
                           }
                        }
                    });
	}
	function fillpwd(event){
		var pwd=$('#student_num').val();
		
		var student_num=$(event.target).val();
		//alert(student_num);
		$.ajax({
                            url:"<?php echo base_url(); ?>index.php/student/student/getstdbyid",    
                            data: {'std_num':student_num},
                            type:"post",
                            success: function(data){
                           	if(data==1){
                           		$('.error').html('Student ID :'+ student_num+' is already used please choose other ID');
                           		$('#student_num').val(''); 
                           	}else{
                           		$('#password').val(pwd);
                           		$('.error').html('');
                           	}
                        }
                    });
	}
	$(function(){
					$('#std_register').parsley();
					$('#frmaddrespond').parsley();
					$('#frmaddmember').parsley();
					$('#addres_dob').datepicker({format: 'yyyy-mm-dd'});
					$('#addmem_dob').datepicker({format: 'yyyy-mm-dd'});
					//++++++++++++++++++++++++++++++add respond submit++++++++++++++++++
					$("#btnsaverpb").click(function() {        	
			        	$('#frmaddrespond').submit();           
			        });
			        
			        $('#frmaddrespond').submit(function(e) { 
				        e.preventDefault();	        
				        if ( $(this).parsley().isValid() ) {
				            saverespond();   
				        }
       				})		
       				//++++++++++++++++++++++++++++++end save++++++++++++++++++	
       				//++++++++++++++++++++++++++++++add member submit++++++++++++++++++
					$("#btnaddmember").click(function() {        	
			        	$('#frmaddmember').submit();           
			        });
			        
			        $('#frmaddmember').submit(function(e) { 
				        e.preventDefault();	        
				        if ( $(this).parsley().isValid() ) {
				            savemember();   
				        }
       				})		
       				//++++++++++++++++++++++++++++++end save++++++++++++++++++	
	})
	$(function(){
		$("#dob,.res_dob,.mem_dob").datepicker({
      		language: 'en',
      		pick12HourFormat: true,
      		format:'yyyy-mm-dd'
    	});
    	autofillrespon();
    	autofillmember();
    	autofilllink();
	});
	function getresponrow(r_id){
		var resinf=[];
					$.ajax({
                            url:"<?php echo site_url('student/student/getresponrow'); ?>",    
                            data: {
                                'r_id':r_id},
                            type:"post",
							dataType:"json",
                            async:false,
                            success: function(data){
                            resinf=	data;
                        }
                    });
        return resinf;
	}
	function getmemberrow(r_id){
		var resinf=[];
					$.ajax({
                            url:"<?php echo base_url(); ?>index.php/student/student/getmemberrow",    
                            data: {
                                'r_id':r_id},
                            type:"post",
							dataType:"json",
                            async:false,
                            success: function(data){
                            resinf=	data;
                        }
                    });
        return resinf;
	}
	function getstudentrow(std_id){
		var stdinf=[];
					$.ajax({
                            url:"<?php echo base_url(); ?>index.php/student/student/getstudentrow",    
                            data: {
                                'std_id':std_id},
                            type:"post",
							dataType:"json",
                            async:false,
                            success: function(data){
                            stdinf=	data;
                        }
                    });
        return stdinf;
	}
	function addresponrow(){
		var img="<?php echo base_url().'assets/images/icons/delete.png';?>";
		var relation="<?php 
					    foreach ($relation as $relat) {
					    	echo "<option>$relat</option>";
					    }
					    ?>";
		if($(".td_blank").size()-0>0){

		}else{
		jQuery('.respontbl').append(+
			'<tbody>'+
					    		'<tr class="td_blank">'+
					    			'<td style="display:none;">'+
					    				 '<input  type="text" class="form-control input-sm res_id" name="res_id[]" >'+													    				
					    			'</td>'+
					    			'<td>'+
					    				 '<input  type="text" onblur="removerow(event);"  class="form-control input-sm res_lastname" name="res_lastname[]" >'+													    				
					    			'</td>'+
					    			'<td>'+
					    				 '<input type="text" class="form-control input-sm res_first_name" name="res_first_name[]" disabled>'+														    				
					    			'</td>'+
					    			'<td>'+
					    				 '<input type="text" class="form-control input-sm res_last_name_kh" name="res_last_name_kh[]" disabled>'+														    				
					    			'</td>'+
					    			'<td>'+
					    				'<select class="form-control parsley-validated res_sex" id="res_sex" name="res_sex[]" disabled>'+
						                    '<option value="male">Male</option>'+
						                    '<option value="female">Female</option>'+	
						                  '</select>'+												    				
					    			'</td>'+
					    			'<td>'+
					    				'<select class="form-control parsley-validated res_relationship" id="res_relationship" name="res_relationship[]">'+
						                        relation+		
						                 '</select>'+													    				
					    			'</td>'+
					    			'<td>'+					    				 
					    				 '<div data-date-format="dd-mm-yyyy" class="input-group date dob">'+
		              						'<input type="text" value="" data-type="dateIso" data-required="true" class="form-control input-sm input_validate parsley-validated res_dob" name="res_dob[]" disabled>'+
		              						'<span class="input-group-addon"><i class="icon-calendar"></i></span>'+
		              					'</div>'+													    				
					    			'</td>'+
					    			'<td>'+
					    				 '<input type="text" class="form-control input-sm res_occupation" name="res_occupation[]" disabled>'+														    				
					    			'</td>'+
					    			'<td>'+
					    				 '<input type="text" class="form-control input-sm res_revenue" name="res_revenue[]" disabled>'+														    				
					    			'</td>'+
					    			'<td>'+
					    				 '<a  >'+
							    			'<img onclick="deleteresrow(event);" src="'+img+'"/>'+
							    		'</a>'+													    				
					    			'</td>'+					    			
					    		'</tr>'+					    		
					    	'</tbody>');
			autofillrespon();			
		}	
	}
	function addmemberrow(){
		var img="<?php echo base_url().'assets/images/icons/delete.png';?>";
		var relation="<?php 
					    				 		foreach ($relation as $relat) {
					    				 			echo "<option>$relat</option>";
					    				 		}
					    				 	 ?>";
		if($(".tdmem_blank").size()-0>0){

		}else{
		jQuery('#tab_member').append(+
			'<tbody>'+
					    		'<tr class="tdmem_blank">'+
					    			'<td style="display:none;">'+
					    				 '<input type="text" class="form-control input-sm mem_id" name="mem_id[]">'+														    				
					    			'</td>'+
					    			'<td>'+
					    				 '<input type="text" onblur="removerow(event);" class="form-control input-sm mem_lastname" name="mem_lastname[]">'+														    				
					    			'</td>'+
					    			'<td>'+
					    				 '<input type="text" class="form-control input-sm mem_first_name" name="mem_first_name[]" disabled>	'+													    				
					    			'</td>'+
					    			'<td>'+
					    				 '<input type="text" class="form-control input-sm mem_last_name_kh" name="mem_last_name_kh[]" disabled>'+														    				
					    			'</td>'+
					    			'<td>'+
					    				'<select class="form-control parsley-validated mem_sex" id="mem_sex" name="mem_sex[]" disabled>'+
						                    '<option value="male">Male</option>'+
						                    '<option value="female">Female</option>'+		
						                  '</select>'+													    				
					    			'</td>'+
					    			'<td>'+
					    				'<select class="form-control parsley-validated mem_relationship" id="mem_relationship" name="mem_relationship[]">'+
						                    relation+		
						                 '</select>'+														    				
					    			'</td>'+
					    			'<td>'+					    				 
					    				 '<div data-date-format="dd-mm-yyyy" class="input-group date dob">'+
		              						'<input type="text" value="" data-type="dateIso" data-required="true" class="form-control input-sm input_validate parsley-validated mem_dob" name="mem_dob[]" disabled>'+
		              						'<span class="input-group-addon"><i class="icon-calendar"></i></span>'+
		              					'</div>'+													    				
					    			'</td>'+
					    			'<td>'+
					    				 '<input type="text" class="form-control input-sm mem_occupation" name="mem_occupation[]" disabled>'+														    				
					    			'</td>'+					    			
					    			'<td>'+
					    				 '<a >'+
							    			'<img onclick="deletememrow(event);"" src="'+img+'"/>'+
							    		'</a>'+													    				
					    			'</td>'+					    			
					    		'</tr>'+					    		
					    	'</tbody>');
			autofillmember();			
		}	
	}
	function addlinkrow(){
		var img="<?php echo base_url().'assets/images/icons/delete.png';?>";
		
		if($(".tdlink_blank").size()-0>0){

		}else{
		jQuery('#tab_link').append(+
			'<tbody>'+
					    		'<tr class="tdlink_blank">'+
					    			'<td style="display:none;">'+
					    				 '<input type="text" class="form-control input-sm link_id" name="link_id[]">'+														    				
					    			'</td>'+
					    			'<td>'+
					    				 '<input type="text" onblur="removerow(event);" class="form-control input-sm link_lastname" name="link_lastname[]">'+														    				
					    			'</td>'+
					    			'<td>'+
					    				 '<input type="text" class="form-control input-sm link_first_name" name="link_first_name[]" disabled>	'+													    				
					    			'</td>'+
					    			'<td>'+
					    				 '<input type="text" class="form-control input-sm link_last_name_kh" name="link_last_name_kh[]" disabled>'+														    				
					    			'</td>'+
					    			
					    			'<td>'+
					    				 '<input type="text" class="form-control input-sm link_class" name="link_class[]" disabled>'+														    				
					    			'</td>'+					    			
					    			'<td>'+
					    				 '<a >'+
							    			'<img onclick="deletelinkrow(event);"" src="'+img+'"/>'+
							    		'</a>'+													    				
					    			'</td>'+					    			
					    		'</tr>'+					    		
					    	'</tbody>');
			autofilllink();			
		}	
	}
	function autofillrespon(){		
		var fillrespon="<?php echo site_url("student/student/fillrespon")?>";
    	$(".res_lastname").autocomplete({
				source: fillrespon,
				minLength:0,
				select: function( events, ui ) {					
					var resinf=getresponrow(ui.item.id);
					var tr=$(this).parent().parent();
					var exis=false;
					$(".res_id").each(function() {
					   var id = $(this).val();
					   if(id==ui.item.id)
					   	exis=true;
					    // compare id to what you want
					});
					if(exis==false){
						tr.find(".res_id").val(resinf.respondid);
						tr.find(".res_first_name").val(resinf.first_name);
						tr.find(".res_last_name_kh").val(resinf.last_name_kh);
						tr.find(".res_sex").val(resinf.sex);
						//tr.find(".res_relationship").val(resinf.relationship);
						tr.find(".res_dob").val(resinf.dob);
						tr.find(".res_occupation").val(resinf.occupation);
						tr.find(".res_revenue").val(resinf.revenue);
						tr.removeClass("td_blank");
						addresponrow();
					}else{
						alert('This respondsible is already add before Please choose Other..!');
						//$(this).val('');
					}
					
				}						
			});
	}
	function autofillmember(){		
		var fillmem="<?php echo site_url("student/student/fillmember")?>";
    	$(".mem_lastname").autocomplete({
				source: fillmem,
				minLength:0,
				select: function( events, ui ) {					
					var meminf=getmemberrow(ui.item.id);
					var tr=$(this).parent().parent();
					var exis=false;
					$(".mem_id").each(function() {
					   var id = $(this).val();
					   if(id==ui.item.id)
					   	exis=true;
					});
					if(exis==false){
						tr.find(".mem_id").val(meminf.memid);
						tr.find(".mem_first_name").val(meminf.first_name);
						tr.find(".mem_last_name_kh").val(meminf.last_name_kh);
						tr.find(".mem_sex").val(meminf.sex);
						//tr.find(".mem_relationship").val(meminf.relationship);
						tr.find(".mem_dob").val(meminf.dob);
						tr.find(".mem_occupation").val(meminf.occupation);
						tr.removeClass("tdmem_blank");
						addmemberrow();
					}else{
						alert('This member is already add before Please choose Other..!');
					}
					
				}						
			});
	}
	function autofilllink(){		
		var filllink="<?php echo site_url("student/student/filllink")?>";
    	$(".link_lastname").autocomplete({
				source: filllink,
				minLength:0,
				select: function( events, ui ) {					
					var stdinf=getstudentrow(ui.item.id);
					var tr=$(this).parent().parent();
					var exis=false;
					$(".link_id").each(function() {
					   var id = $(this).val();
					   if(id==ui.item.id)
					   	exis=true;
					});
					if(exis==false){
						tr.find(".link_id").val(stdinf.studentid);
						tr.find(".link_first_name").val(stdinf.first_name);
						tr.find(".link_last_name_kh").val(stdinf.last_name_kh);
						tr.find(".link_class").val(stdinf.class_name);
						tr.removeClass("tdlink_blank");
						addlinkrow();
					}else{
						alert('This member is already add before Please choose Other..!');
					}
					
				}						
			});
	}
	function removerow(event){
		var values=$(event.target).val();
		var row_class=$(event.target).parent().parent().attr('class');
		//alert(row_class);
		if(values==""){
			if(row_class==undefined || row_class=='')
			$(event.target).closest('tr').remove()
		}
	}
	function deleteresrow(event){
			var r = confirm("Are you sure to delete this row !");
			if (r == true) {
			    $(event.target).closest('tr').remove();
			    addresponrow();
			} else {
			    txt = "You pressed Cancel!";
			}
			
	}
	function deletelinkrow(event){
			var r = confirm("Are you sure to delete this row !");
			if (r == true) {
			    $(event.target).closest('tr').remove()
			    addlinkrow();
			} else {
			    txt = "You pressed Cancel!";
			}
			
	}
	function deletememrow(event){
			var r = confirm("Are you sure to delete this row !");
			if (r == true) {
			    $(event.target).closest('tr').remove()
			    addmemberrow();

			} else {
			    txt = "You pressed Cancel!";
			}
			
	}
	function fillrevenue(event){
		var familyid=$(event.target).val();
		if(familyid>0){
					$.ajax({
                            url:"<?php echo base_url(); ?>index.php/family/Respondsible/getfamilyrow",    
                            data: {
                                'familyid':familyid},
                            type:"post",
							dataType:"json",
                            async:false,
                            success: function(data){
                          $('#family_revenue').val(data.revenue);
                        }
                   });
		}else{
			 $('#family_revenue').val('');
		}
				
	}
	function saverespond(){
		var last_name=$('#addres_last_name').val();
		var first_name=$('#addres_first_name').val();
		var last_name_kh=$('#addres_last_name_kh').val();
		var first_name_kh=$('#addres_first_name_kh').val();
		var sex=$('#addres_sex').val();
		var dob=$('#addres_dob').val();
		var occupation=$('#addres_occupation').val();
		var revenue=$('#addres_revenue').val();
		var tel1=$('#addres_tel1').val();
		var tel2=$('#addres_tel2').val();
		var village=$('#addres_viilage').val();
		var commune=$('#addres_commune').val();
		var district=$('#addres_district').val();
		var province=$('#addres_province').val();
		var social_status=$('#addres_social_status').val();
		var health=$('#addres_health').val();
		var civil_status=$('#addres_civil_status').val();
		var education=$('#addres_education').val();
		var respond_type=1;
		var familyid=$('#addres_familyid').val();
		//alert(revenue);
					$.ajax({
                            url:"<?php echo base_url(); ?>index.php/family/Respondsible/save",    
                            data: {
                                'last_name':last_name,
                                'first_name':first_name,
                                'last_name_kh':last_name_kh,
                                'fisrt_name_kh':first_name_kh,
                                'sex':sex,
                                'dob':dob,
                                'occupation':occupation,
                                'revenue':revenue,
                                'tel1':tel1,
                                'tel2':tel1,
                                'village':village,
                                'commune':commune,
                                'district':district,
                                'province':province,
                                'social_status':social_status,
                                'health':health,
                                'civil_status':civil_status,
                                'education':education,
                                'respond_type':respond_type,
                                'familyid':familyid
                            },
                            type:"post",
                            success: function(data){
                            	//alert(data);
                          	if(data=='true'){
                          		$('.respond_error').html('Save Successfull...!');
                          		$('#frmaddrespond')[0].reset();	
                          	}
                          	if(data=='false')
                          		$('.respond_error').html('This Responsible already exist...!');
                          	
                        }
                   });
				
	}
	function savemember(){
		var last_name=$('#addmem_last_name').val();
		var first_name=$('#addmem_first_name').val();
		var last_name_kh=$('#addmem_last_name_kh').val();
		var first_name_kh=$('#addmem_first_name_kh').val();
		var sex=$('#addmem_sex').val();
		var dob=$('#addmem_dob').val();
		var occupation=$('#addmem_occupation').val();
		var note=$('#addmem_note').val();
		var tel1=$('#addmem_tel1').val();
		var tel2=$('#addmem_tel2').val();
		var grade_level=$('#addmem_grade_level').val();
		var social_status=$('#addmem_social_status').val();
		var health=$('#addmem_health').val();
		var civil_status=$('#addmem_civil_status').val();
		var school=$('#addmem_school').val();
		var leave_school=0;
		var familyid=$('#addmem_familyid').val();
		if($('#addmem_leave_school').is(":checked")){
			leave_school=1;
		}
		//alert(leave_school);
					$.ajax({
                            url:"<?php echo base_url(); ?>index.php/family/Member/save",    
                            data: { 
                                'last_name':last_name,
                                'first_name':first_name,
                                'last_name_kh':last_name_kh,
                                'fisrt_name_kh':first_name_kh,
                                'sex':sex,
                                'dob':dob,
                                'occupation':occupation,
                                'note':note,
                                'tel1':tel1,
                                'tel2':tel1,
                                'grade_level':grade_level,
                                'social_status':social_status,
                                'health':health,
                                'civil_status':civil_status,
                                'school':school,
                                'leave_school':leave_school,
                                'familyid':familyid
                            },
                            type:"post",
                            success: function(data){
                            	//alert(data);
                          	if(data=='true'){
                          		$('.member_error').html('Save Successfull...!');
                          		$('#frmaddmember')[0].reset();	
                          	}
                          	if(data=='false')
                          		$('.member_error').html('This Member already exist...!');
                          	
                        }
                   });
				
	}

</script>
	
		
	
