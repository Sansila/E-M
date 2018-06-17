<?php
	//$cars=array("Volvo","BMW","Toyota");
	$family_code='';
	$relation=array("Legal Student","father`s child","mother`s child","brother/sister","Cousin","niece/nephew");
	$social_status=array("Normal","alcohol","violent","Mental","Drug");
	$Health=array("Normal","Handicap 50%","Handicap 100%");
	$civil_status=array("Single","Married","Divorce/widow");
  $year=isset($_GET['yearid'])?$_GET['yearid'] : $this->session->userdata('year');
		if(isset($student['familyid']))
			$family_code=$this->db->where('familyid', $student['familyid'])->get('sch_family')->row()->family_code;
		$sql="SELECT * FROM v_student_profile s WHERE s.studentid='".$student['studentid']."' AND s.yearid='".$_GET['yearid']."'";
		$stdrow=$this->db->query($sql)->row();
		$classid=$stdrow->classid;
		$moeys_id='';
		if(isset($this->std->getmoeys($stdrow->studentid,$stdrow->schlevelid,$stdrow->yearid)->moeys_id))
			$moeys_id=$this->std->getmoeys($stdrow->studentid,$stdrow->schlevelid,$stdrow->yearid)->moeys_id;

	$m='';
	$p='';
	if(isset($_GET['m'])){
    	$m=$_GET['m'];
    }
    if(isset($_GET['p'])){
        $p=$_GET['p'];
    }
    // print_r($student);
			
?>

<style type="text/css">
	table tbody tr td img{width: 20px; margin-right: 10px}
	ul,ol{
		margin-bottom: 0px !important;
	}
	a{
		cursor: pointer;
	}
	.payment_sep ul{
		display: none;
	}
	.ui-autocomplete,.datepicker {z-index: 9999;}
</style>
<div class="wrapper">
	<div class="clearfix" id="main_content_outer">
    <div id="main_content">
       <div class="result_info">
			      	<div class="col-sm-6">
			      		<strong>Student Information</strong>
			      		
			      	</div>
			      	<div class="col-sm-6" style="text-align: center">
			      		<strong>
			      			<center class='error' style='color:red;'><?php if(isset($error)) echo "$error"; ?></center>
			      		</strong>	
			      	</div>
		</div> 
      <div id="stdregister_div"></div>
      <!-- main content -->
       <form enctype="multipart/form-data" name="std_register" id="std_register" method="POST" action="<?php echo site_url("student/student/save?m=$m&p=$p")?>">
        <div class="row">
          <div class="col-sm-6">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title">
                	Student Details
					<label style="float:right !important; font-size:11px !important; color:red;"><?php if($student['last_modified_by']!='') echo "Last Modified Date: ".date_format(date_create($student['last_modified_date']),'d-m-Y H:i:s')." By : $student[last_modified_by]"; ?></label>	

                </h4>
              </div>
              <div class="panel-body">
              	<div class="form_sep hide">
					<label class="req" for="classid">year</label>
                  	<input type="text" class="form-control parsley-validated year" name="year" value="<?php echo $_GET['yearid'] ?>">
                  	
				</div>
              	<div class="form_sep">
                  <input type="text" style='display:none;' value='<?php echo $student['studentid']; ?>' id="studentid" name="s_id">
                </div> 
                <div class="form_sep hide">
                  <label class="req" for="student_num">family ID</label>
                  <input type="text"  class="form-control parsley-validated" name="familyid" value='<?php echo $student['familyid']; ?>' id="familyid" readonly>
                </div> 
                 <div class="form_sep">
                  <label class="req" for="student_num">family ID</label>
                  <input type="text" data-required="true" onblur='' class="form-control parsley-validated" name="family_code" value='<?php echo $family_code; ?>' id="family_code">
                </div> 
                <div class="form_sep">
                  <label class="req" for="student_num">Student ID:</label><br/>
                  <!-- <label class="req" for="student_num">  &nbsp;&nbsp;TAE-ID</label> -->
                  <input type="text" data-required="true" onblur='' required data-parsley-required-message="Enter Student ID" class="form-control parsley-validated" name="student_num" value='<?php echo $student['student_num']; ?>' id="student_num">
                </div>
                <div class="form_sep hide">
                  <label class="req" for="student_num">  &nbsp;&nbsp;MoEYS-ID</label>
                  <input type="text" data-required="true" class="form-control parsley-validated" name="moeys_id" value="<?php echo $moeys_id;?>" id="moeys_id">
                </div>   
                <div class="form_sep">
                  <label class="req" for="student_num"> Student Card Number</label>
                  <input type="text" data-required="true" onkeypress="enter(event);" onblur="submitcard(event)" class="form-control parsley-validated" name="student_card" value='<?php echo $student['student_card']; ?>' id="student_card">
                </div>         
                <div class="form_group">
                    <label class="req" for="classid">Temporary Card number</label>
                    <input type="text" name="tem_card" value='<?php echo $student['tem_card_number']; ?>' onblur="checkcard(event);" class="form-control" placeholder="Temporary card" />
                </div>
                <div class="form_group">
                    <label class="req" for="classid">Temporary Card Expired date</label>
                    <input type="text" name="expired_date" value='<?php echo $student['tem_card_expired']; ?>' class="form-control" placeholder="yyyy-mm-dd" />
          
                </div>
                <div class="form_sep">
                  	<label class="req" for="student_num"> Student Enroll Date</label>
            		<div data-date-format="dd-mm-yyyy" class="input-group date dob">
                  		<input type="text" data-required="true" class="form-control parsley-validated" value="<?php echo $this->green->formatSQLDate($student['student_enroll_date']); ?>" name="student_enroll_date" value="" id="student_enroll_date">
	              		<span class="input-group-addon"><i class="icon-calendar"></i></span> 
	              	</div>
                </div>         
                <div class="form_sep">
                  <label class="req" for="classid">Class</label>
                  <select data-required="true" onchange="isvtc(event)" required data-parsley-required-message="Select Class" minlength='1' class="form-control parsley-validated" name="classid" id="classid">
                    <option value="">Select Class</option>
                    <?php
                    	foreach ($this->std->getclass()->result() as $class) {?>
                    		<option value="<?php echo $class->classid ;?>" <?php if($classid==$class->classid) echo 'selected' ?>><?php echo $class->class_name;?></option>
                    	<?php }
                    ?>
                  </select>
                </div>
                <div class="form_sep">
	                <label class="req" for="classid">Class Type</label>
	                <select data-required="true" min=1 required data-parsley-required-message="Select Class Type" minlength='1' class="form-control parsley-validated" name="class_type" id="class_type">
	                   
	                    <option value="">Select Class</option>
	                    <option value="3" <?php echo ($student['class_type']==3)? 'selected' : '';  ?>>Full day</option>
	                    <option value="2" <?php echo ($student['class_type']==2)? 'selected' : '';  ?>>Full Time</option>
	                    <option value="1" <?php echo ($student['class_type']==1)? 'selected' : '';  ?>>Part Time</option>
	                   
	                </select>
                </div>
                <div class="form_sep payment_sep">
                  <label class="req" for="classid">Payment Type</label><br>
                  <?php 
                  	$pay=$this->db->query("SELECT * FROM sch_pay_paytype")->result();
                  	foreach ($pay as $type) {
                  		$checked='';
                  		if($type->pay_type_id==$student['pay_typeid'])
                  			$checked='checked';
                  		echo " <label><input type='radio' $checked name='rdpay_type' value='".$type->pay_type_id."'/> $type->payname</label><br>";# code...
                  	}
                   ?>
                </div>
               <!--  <div class="form_sep hide" id='promo_sep'>
                  <label class="req" for="classid">Promotion</label>
                  <select data-required="true"  data-parsley-required-message="Select Class" minlength='1' class="form-control parsley-validated" name="promot_id" id="promot_id">
                   
                    <option value="">----Select Promotion----</option>
                    <?php
                    	$school=$this->session->userdata('schoolid');
                    	foreach ($this->db->where('schoolid',$school)->get('sch_school_promotion')->result() as $pro) {?>
                    		<option value="<?php echo $pro->promot_id ;?>" <?php if($student['promot_id']==$pro->promot_id) echo 'selected' ?>><?php echo $pro->proname;?></option>
                    	<?php }
                    ?>
                  </select>
                </div>        -->           
              </div>
              
              <div class="panel-heading">
                <h4 class="panel-title">Personal Details</h4>
              </div>
              <div class="panel-body">
              		<div class="form_sep hide">
		              <label class="req "  for="last_name">Member ID</label>
		              <input type='text' name='update_mem' id='update_mem'/>
		              <input type="text" readonly data-required="true"   class="form-control parsley-validated" name="student" value='<?php echo $student['match_memid']; ?>' id="student">
		           </div> 
	          		<div class="form_sep">
		              <label class="req"  for="last_name">Last Name</label>
		              <input type="text"  data-required="true" onkeypress='updatemem(event);'  class="form-control parsley-validated" name="last_name" value='<?php echo $student['last_name']; ?>' id="last_name">
		           </div>
	               <div class="form_sep">
		              <label class="req" for="first_name">First Name</label>
		              <input type="text"  data-required="true" class="form-control parsley-validated" onkeypress='updatemem(event);'  value='<?php echo $student['first_name']; ?>' id="first_name" name="first_name">
		           </div>
		           
		           <div class="form_sep">
		              <label class="req" for="last_name_kh">Last Name(Kh)</label>
		              <input type="text"  data-required="true" onkeypress='updatemem(event);' class="form-control parsley-validated" value='<?php echo $student['last_name_kh']; ?>' id="last_name_kh" name="last_name_kh">
		           </div>
		           <div class="form_sep">
		              <label class="req" for="last_name_kh">First Name(Kh)</label>
		              <input type="text"  data-required="true" onkeypress='updatemem(event);' class="form-control parsley-validated"  name="first_name_kh" value='<?php echo $student['first_name_kh']; ?>' id="first_name_kh">
		           </div>
		           <div class="form_sep">
		              <label class="req">Date of Birth</label>
		              <div data-date-format="dd-mm-yyyy" class="input-group date dob">
		              <input type="text"  value="<?php echo $this->green->formatSQLDate($student['dob']); ?>" onblur='updatemem(event);' data-type="dateIso" required class="form-control" id="dob" name="dob">
		              <span class="input-group-addon"><i class="icon-calendar"></i></span> </div>
		          </div>                
	             <div class="form_sep">
	                 <label for="reg_input_name ">Nationality</label>
	                 <input type="text" value='<?php echo $student['nationality']; ?>' data-type="dateIso"  data-required="true" class="form-control input_validate parsley-validated" id="nationality" name="nationality">
	                 </div>
                <div class="form_sep">
                  <label for="reg_input_name">Religion</label>
                  <input type="text" value='<?php echo $student['religion']; ?>'class="form-control"  name="religion" id="religion">
                </div>
                      
             	<div class="form_sep">
                  <label class="req" for="comments">Comments</label>
                  <textarea value='' data-required="true" class="form-control parsley-validated" name="comments" id="comments"><?php echo $student['comments']; ?></textarea>
                </div>
                <p></p>
                <div class="form_sep">
                  <!-- <label class="req" for="comments">Image</label> -->

                  <img src="<?php if(@ file_get_contents(site_url('../assets/upload/students/'.$year.'/'.$student['student_num'].'.png'))) echo site_url('../assets/upload/students/'.$year.'/'.$student['student_num'].'.png'); else echo site_url('../assets/upload/No_person.jpg') ?>" id="uploadPreview" style='width:120px; height:150px; margin-bottom:15px; border:1px solid #CCCCCC'>
                  <input id="uploadImage" type="file" accept="image/*" name="userfile" onchange="PreviewImage();" style="visibility:hidden; display:none;" />
                  <input type='button' class="btn btn-success" onclick="$('#uploadImage').click();" value='Browse'/>
                </div> 
              </div>                           
             <!--  <div class="panel-heading hide">
                <h4 class="panel-title">Login Information</h4>
              </div>
              <div class="panel-body hide">
                <div class="form_sep">
                  <label class="req" for="login_username">User Name</label>                 
                  <input type="text" data-minlength-message="Username should have at least 5 characters."  value='<?php echo $student['login_username']; ?>'  data-required="true" onclick="get_stdregno();" class="form-control parsley-validated" name="login_username" id="login_username" readonly>
                </div>
                <div class="form_sep">
                  <label class="req" for="password">Password</label>
                  <input type="password" value="<?php if(isset($this->std->getuserrow($student['login_username'])->password)) echo $this->std->getuserrow($student['login_username'])->password; ?>"  data-required="true" class="form-control parsley-validated" name="password" id="password">
                </div>                
              </div>
               -->
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
	                  <textarea data-required="true" readonly class="form-control parsley-validated" readonly name="permanent_adr"  id="permanent_adr"><?php echo $student['permanent_adr']; ?></textarea>
	                </div>
	                
	                <div class="form_sep hide">
	                  <label class="req" for="province">Province</label>
	                  <input type="text" readonly value='<?php echo $student['province']; ?>' data-required="true"  class="form-control parsley-validated" name="province" id="province">
	                </div>
	                <div class="form_sep hide">
	                  <label class="req" for="district">District</label>
	                  <input type="text" readonly value='<?php echo $student['district']; ?>' data-required="true" class="form-control parsley-validated" name="district" id="district">
	                </div>
	                <div class="form_sep hide">
	                  <label class="req" for="commune">Commune</label>
	                  <input type="text" readonly value='<?php echo $student['commune']; ?>' data-type="number" data-required="true" class="form-control parsley-validated" name="commune" id="commune">
	                </div>
	                <div class="form_sep hide">
	                  <label class="req" for="village">Village</label>
	                  <input type="text" readonly value='<?php echo $student['village']; ?>'  data-required="true" class="form-control input_validate parsley-validated" id="village" name="village">
	                </div>
	                <div class="form_sep">
	                  <label class="req" for="phone1">Phone</label>
	                  <input type="text" readonly data-type="phone" onkeypress='return isNumberKey(event);' value='<?php echo $student['phone1']; ?>' data-required="true"  class="form-control parsley-validated" name="phone1" id="phone1">
	                </div>                
	                <div class="form_sep">
	                  <label class="req" for="reg_input_currency">Email</label>
	                  <input type="email" data-parsley-type="email" data-type="email" value='<?php echo $student['email']; ?>' data-required="true"  class="form-control parsley-validated" name="email" id="email">
	                </div>
	                <div class="form_sep">
	                  <label class="req" for="phone1">Zone</label>
	                  <input type="text" readonly data-type="phone" value='<?php echo $student['zoon']; ?>'  data-required="true" class="form-control parsley-validated" name="zoon" id="zoon">
	                </div>                 
	                <div class="form_sep">
	                  <label class="req" for="from_school">Distance from school</label>
	                  <input type="text" readonly data-required="true" onkeypress='return isNumberKey(event);' value='<?php echo $student['from_school']; ?>'  class="form-control parsley-validated" name="from_school" id="from_school">                  
	                </div> 
	                <div class="form_sep">
	                  <label class="req" for="measure">Measure</label>
	                  <input type="text" readonly data-required="true" value='<?php echo $student['measure']; ?>' class="form-control parsley-validated" id="measure" name="measure">                   
	                    
	                </div> 
	                <div class="form_sep">
	                	<input type="checkbox" name="boarding_school" value="1" <?php if($student['boarding_school']==1) echo 'checked'; ?>/>		
	                  	<label class="req" for="boarding_school">Boarding School</label>                 
	                </div>
	                <div class="form_sep">
	                  <label class="req" for="boarding_reason">Boarding School Reason</label>
	                  <input type="text" value='<?php echo $student['boarding_reason']; ?>' data-required="true" class="form-control parsley-validated" name="boarding_reason" id="boarding_reason">                  
	                </div> 
	                <div class="form_sep">
	                	<input type="checkbox" onclick="is_leave(event);" name="leave_school" id='leave_school' value="1" <?php if($student['leave_school']==1) echo 'checked'; ?>/>		
	                  	<label class="req" for="leave_school">Leave School</label>                 
	                </div>
	                <div class="form_sep leave">
  		              <label class="req">Leave School Date</label>
  		              <div data-date-format="dd-mm-yyyy" class="input-group date dob">
  		              <input type="date"  value="<?php echo $this->green->formatSQLDate($student['leave_sch_date']); ?>" data-type="dateIso" data-required="true" class="form-control input_validate parsley-validated" id="leave_sch_date" name="leave_sch_date">
  		              <span class="input-group-addon"><i class="icon-calendar"></i></span> </div>
  		          	</div> 
	                <div class="form_sep leave">
	                  <label class="req" for="leave_reason">Leave School Reason</label>
	                  <input type="text" value='<?php echo $student['leave_reason']; ?>' data-required="true" class="form-control parsley-validated" name="leave_reason" id="leave_reason">                  
	                </div> 
	                
	                <div class="form_sep hide">
	                  <label class="req" for="family_revenue">Family Revenue</label>
	                  <input type="text" data-required="true" onkeypress='return isNumberKey(event);' value='<?php echo $student['family_revenue']; ?>'  data-parsley-required-message="Enter Family Revenue" class="form-control parsley-validated" name="family_revenue" id="family_revenue">                  
	                </div> 
	                
              	</div>  
                <div class="panel-heading">
                     <h4 class="panel-title">Student Name Voice</h4>
                </div>
                <div class="panel-body">
                    <div class="form_sep">
                        <label class="req" for="family_revenue">Upload Voice</label>
                        <input type="file" class="btn btn-success" name="voice" accept="audio/*">
                    </div>
                </div>          
             </div>
          </div>
        </div>
         <div class="row">
			<div class="col-sm-12">
			    <div class="panel panel-default">
			    	<div class="panel-heading">
		               <h4 class="panel-title">Respondsible Information</h4>
		            </div>
			      	<div class="panel-body">
				        <div class="table-responsive" id="tab_print">
							<table align='center' class='table'>
								<thead>
									<th >Full Name</th>
									<th >Full Name(kh)</th>
									<th >Sex</th>
									<th >DOB</th>
									<th>Relationship</th>
									<th >Occupation</th>
									<th >Revenue</th>
								</thead>
								<tbody id='listparent'>
									
								</tbody>
								<tbody id='listrespon'>

							    </tbody>
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
		               <h4 class="panel-title">Member Information</h4>
		            </div>
			      	<div class="panel-body">
				        <div class="table-responsive" id="tab_print">
							<table align='center' class='table'>
								<thead>
									<th >First Name </th>
									<th >Last Name</th>
									<th >First Name(kh)</th>
									<th >Last Name(kh)</th>
									<th >Sex</th>
									<th >DOB</th>
									<th >Occupation</th>
									<th >Level</th>
									<th >School</th>
									<th class="hide">Relationship</th>
								</thead>
							    	<tbody id='listmember'>

							    	</tbody>
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
					    	<th>First Name</th>
					    	<th>Last Name</th>
					    	<th>First Name(Kh)</th>
					    	<th>Last Name(Kh)</th>
					    	<th>Class</th>
					    	<th>Preview</th>
					    </thead>
					    	<tbody id="liststdlink">
					    					    		
					    	</tbody>			    					    							    	   	
					    </thead>
					  </table>
					</div>  
				</div>
			</div>	
          </div>
        </div>
        <!-- +++++++++++++++++++++++++++++++++ end student link++++++++++++++++++++++++++++++++++++++++++++++++ -->
         <!-- +++++++++++++++++++++++++++++++++sponsor++++++++++++++++++++++++++++++++++++++++++++++++ -->
        <div class="row">
          <div class="col-sm-12">
          	<div class="panel panel-default">
	          	<div class="panel-heading">
	                <h4 class="panel-title">Sponsor</h4>
	            </div> 
	            <div class="panel-body">
	           		<div class="table-responsive">
					  <table class="table" id="tab_link">
					    <thead>
					    	<th>Sponsor's Name</th>
					    	<th>Start Sponsor Date</th>
					    	<th>End Sponsor Date</th>
					    	<th>
					    		<a>
					    			<img id='btnaddspon' data-toggle="modal" data-target="#btnaddsponsor" src="<?php echo base_url().'assets/images/icons/add.png'?>" />
					    		</a>
					    	</th>
					    </thead>
					    	<tbody id="listsponsor">
					    		<?php
					    			foreach ($this->std->getsponsor($student['studentid']) as $sponsor) {
					    				echo "<tr>
									<td>".$sponsor->last_name.' '.$sponsor->first_name."</td>
									<td>".$this->green->formatSQLDate($sponsor->start_sp_date)."</td>
									<td>".$this->green->formatSQLDate($sponsor->end_sp_date)."</td>
									<td>
							    		<a>
							    			<img onclick='removerow(event);' sponid='".$sponsor->sponsorid."' class='removespon' rel='".$sponsor->stdspid."' src='". base_url()."assets/images/icons/delete.png' />
							    		</a>
							    		<a>
							    			<img data-toggle='modal' data-target='#btnaddsponsor' onclick='editspon(event);' rel='".$sponsor->stdspid."' src='". base_url()."assets/images/icons/edit.png' />
							    		</a>
							    	</td>
								</tr>";
					    			}
					    		?>				    		
					    	</tbody>			    					    							    	   	
					    </thead>
					  </table>
					</div>  
				</div>
			</div>	
          </div>
        </div>
        <!-- +++++++++++++++++++++++++++++++++ end sponsor ++++++++++++++++++++++++++++++++++++++++++++++++ -->
        <div class="row">
          <div class="col-sm-5">
            <div class="form_sep">
              <button id="std_reg_submit" name="std_reg_submit" type="button" class="btn btn-success">Save</button>
            </div>
          </div>
        </div>        
      </form>
    </div>
  </div>
</div>
<!--++++++++++++++++++++++++++++++++++++++++++++++End Form add sponsor+++++++++++++++++++++++++++++++++++++++++++++++++++ -->
<div class="modal fade" id="btnaddsponsor" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="wrapper">
				<div class="clearfix" id="main_content_outer">
				    <div id="main_content">
					    <div class="result_info">
					    	<div class="col-sm-6">
					      		<strong>Sponsor Infomation</strong>
					      	</div>
					      	<div class="col-sm-6" style="text-align: center">
					      		<strong>
					      			<center class='sposor_error' style='color:red;'></center>
					      		</strong>	
					      	</div>
					    </div>
					      	<form enctype="multipart/form-data" name="frmsponsor" id="frmsponsor" method="POST">
						        <div class="row">
									<div class="col-sm-12">
							            	<div class="panel-body">
							            		<div class="form_sep">
									                  <label class="req" for="student_num">Sponsor</label>
									                  <input type="text" data-required="true"  required data-parsley-required-message="Enter Sponsor" value="" class="form-control parsley-validated" name="sponsor" value="" id="sponsor" >
									            	  <input type="text" id='sponsorid' name='sponsorid' class='hide'/>
									            	   <input type="text" id='stdspid' name='stdspid' class='hide'/>
									            </div>
								                <div class="form_sep">
										            <label class="req">Start Sponsor Date</label>
										            <div data-date-format="dd-mm-yyyy" class="input-group date dob">
										            <input type="text" value="" data-type="dateIso"  required data-parsley-required-message="Enter Start Date" data-required="true" class="form-control input_validate parsley-validated" id="start_sp_date" name="start_sp_date">
										            <span class="input-group-addon"><i class="icon-calendar"></i></span> </div>
											    </div> 
											    <div class="form_sep">
										            <label class="req">End Sponsor Date</label>
										            <div data-date-format="dd-mm-yyyy" class="input-group date dob">
										            <input type="text" value="" data-type="dateIso"  data-required="true" class="form-control input_validate parsley-validated" id="end_sp_date" name="end_sp_date">
										            <span class="input-group-addon"><i class="icon-calendar"></i></span> </div>
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
                <button type="button" id='btnadsponsor' class="btn btn-primary">Save</button>
            </div>
        </div>                       <!-- /.modal-content -->
    </div>                     <!-- /.modal-dialog -->
</div>
<script type="text/javascript">
  function checkcard(event){
      var card_number=$(event.target).val();
      var studentid=$("#studentid").val();
      $.ajax({
                    url:"<?php echo base_url(); ?>index.php/student/student/validatecard/"+card_number+"/"+studentid,    
                    data: {},
                    type:"post",
                    dataType:'json',
                    async:false,
                    success: function(data){
                      if(data==1){
                        alert('This card is already register with someone.');
                        $(event.target).val('');
                      }
                  }
            });
  }
  function PreviewImage() {
      var oFReader = new FileReader();
      oFReader.readAsDataURL(document.getElementById("uploadImage").files[0]);

      oFReader.onload = function (oFREvent) {
          document.getElementById("uploadPreview").src = oFREvent.target.result;
          document.getElementById("uploadPreview").style.backgroundImage = "none";
      };
  }
	function enter(event){
		// alert(event.keyCode);
		if (event.keyCode==13){submitcard(event);}
	}
	function submitcard(event){
    var val=$("#student_card").val();
    var student_id=$("#studentid").val();
    $.ajax({
        type: "POST",
        url:"<?php echo base_url(); ?>index.php/student/student/validatecard/"+val+'/'+student_id,    
        data: {},
        success: function(data){
               if(data==1){
                  alert('This Card is aleady used by other student ! ');
                  $("#student_card").val('');
               }
        }
      });
  }




	var familyid=$("#familyid").val();
	var mem_stdid=$("#student").val();
	if(familyid!='' && mem_stdid!=''){
		getlistmember(familyid,mem_stdid);
		fillrevenue(familyid);
	}
		is_leave();
		// isvtc();
 	function isNumberKey(evt){
        var e = window.event || evt; // for trans-browser compatibility 
        var charCode = e.which || e.keyCode; 
        if ((charCode > 45 && charCode < 58) || charCode == 8){ 
            return true; 
        } 
        return false;  
        }
    $('#year').change(function(){
		$('.year').val($('#year').val());
	});
	$('#std_reg_submit').click(function(){
     var student_num=$('#student_num').val();
    var studentid=$("#studentid").val();
    
    $.ajax({
              url:"<?php echo base_url(); ?>index.php/student/student/getstdbyid/"+studentid,    
              data: {'std_num':student_num},
              type:"post",
              success: function(data){
              if(data==1){
                var errors='Student ID :'+ student_num+' is already used please choose other ID';
                $('.error').html(errors);
                alert(errors);
                // $('#student_num').val(''); 
              }else{
                  if($('#update_mem').val()!=''){
                    var con=confirm('Do you want to update infomation in member ?');
                    if(con==true){
                      $('#std_register').submit();
                    }else{
                      $('#update_mem').val('No');
                      if($('#update_mem').val()=='No')
                        $('#std_register').submit();
                    }
                  }else{
                    $('#std_register').submit();
                  }
              }
          }
      });
		

	})
	$('#btnaddspon').click(function(){
		$('#sponsor').attr('disabled',false);
		$('#frmsponsor')[0].reset();
	})
	function is_leave(event){
		if($("#leave_school").is(':checked')){
			$('.leave').removeClass('hide');

		}else{
			$('.leave').addClass('hide');
		}
	}
	function isvtc(event){
		var classid=$("#classid").val();

		$.ajax({
                    url:"<?php echo base_url(); ?>index.php/student/student/getschlevel",    
                    data: {'classid':classid},
                    type:"post",
                    success: function(data){
                   	if(data==4){
                   		$('#promo_sep').removeClass('hide');
                   		var familyid=$('#familyid').val();
                   		//fillstudent(familyid);
                   	}else{
                   		$('#promo_sep').addClass('hide');
                   		$('#class_type').html(data);
                   	}
                }
            });
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
		$('#frmsponsor').parsley();
		autofillfamily();
		autofillsponsor();
		$("input[name='expired_date'],#dob,.res_dob,.mem_dob,#start_sp_date,#end_sp_date,#leave_sch_date,#student_enroll_date").datepicker({
      		language: 'en',
      		pick12HourFormat: true,
      		format:'dd-mm-yyyy'
    	});
	});
	$('#btnadsponsor').click(function(){
		$('#frmsponsor').submit();
	})
	$('#frmsponsor').submit(function(e){
		 e.preventDefault();	        
		if ($(this).parsley().isValid()){
			var exis=false;
			var sponsorid=$('#sponsorid').val();
			var stdspid=$('#stdspid').val();
			if(stdspid==''){
				$('.removespon').each(function(){
	        			if($(this).attr('sponid')==sponsorid){
	        				exis=true;
	        			}
	        	})
			}
        	if(exis==false)
				savesponsor();
			else
				$('.sposor_error').html('This Sponsor already exist...!');
		}
	})
	function removerow(event){
		var conf=confirm('Are you sure to delete this row..?');
		if(conf==true){
			$(event.target).closest('tr').remove();
			var stdspid=$(event.target).attr('rel');
			$.ajax({
                        url:"<?php echo base_url(); ?>index.php/student/student/deletesponsor",    
                        data: {
                            'stdspid':stdspid},
                        type:"post",
                        success: function(data){
                      		
                    }
               });

		}
			
		
	}
	function savesponsor(){
		var sponsorid=$('#sponsorid').val();
		var studentid=$('#studentid').val();
		var stdspid=$('#stdspid').val();
		var s_date=$('#start_sp_date').val();
		var e_date=$('#end_sp_date').val();
		var classid=$('#classid').val();
		$.ajax({
                url:"<?php echo base_url(); ?>index.php/student/student/savesponsor",    
                data: {
                    'sponsorid':sponsorid,
                    'stdspid':stdspid,
                    'studentid':studentid,
                	's_date':s_date,
                	'classid':classid,
                	'e_date':e_date},
                type:"post",
                success: function(data){
                	if(stdspid!=''){
                		$('.removespon').each(function(){
                			if($(this).attr('rel')==stdspid){
                				$(this).closest('tr').remove();
                			}
                		})
                	}
              		addsponsorrow(data);
            }
       });
	}
	function addsponsorrow(stdspid){
		var sponsorid=$('#sponsorid').val();
		var sponsor_name=$('#sponsor').val();
		var s_date=$('#start_sp_date').val();
		var e_date=$('#end_sp_date').val();
		$('#listsponsor').append("<tr>"+
									"<td>"+sponsor_name+"</td>"+
									"<td>"+s_date+"</td>"+
									"<td>"+e_date+"</td>"+
									"<td>"+
							    		"<a>"+
							    			"<img onclick='removerow(event);' class='removespon' sponid='"+sponsorid+"' rel='"+stdspid+"' src='<?php echo base_url() ?>assets/images/icons/delete.png' />"+
							    		"</a>"+
							    		"<a>"+
							    			"<img  data-toggle='modal' data-target='#btnaddsponsor' onclick='editspon(event);' rel='"+stdspid+"' src='<?php echo base_url() ?>assets/images/icons/edit.png' />"+
							    		"</a>"+
							    	"</td>"+
								"</tr>");
		$('#frmsponsor')[0].reset();
		$('#btnaddsponsor').modal('hide');
	}
	function editspon(event){
		$('#frmsponsor')[0].reset();
		var stdspid=$(event.target).attr('rel');
		$.ajax({
                url:"<?php echo base_url(); ?>index.php/student/student/getedit",    
                data: {
                    'stdspid':stdspid},
                type:"post",
                dataType:"json",
                async:false,
                success: function(data){
	                $('#sponsor').val(data.last_name+' '+data.first_name);
	                $('#stdspid').val(data.stdspid);
	                $('#sponsorid').val(data.sponsorid);
	                $('#start_sp_date').val(data.start_sp_date);
	                $('#end_sp_date').val(data.end_sp_date);
	                $('#sponsor').attr('disabled','disabled');
              	}	
        })
		
	}
	function previewstudent(event){
				var year=$(event.target).attr('year');
				var yearid=$(event.target).attr('yearid');
				var student_id=jQuery(event.target).attr("rel");
				window.open("<?PHP echo site_url('student/student/preview');?>/"+student_id+"?yearid="+yearid,"_blank");
		}
	function fillrevenue(familyid){
		var familyid=familyid;
		if(familyid>0){
					$.ajax({
                            url:"<?php echo base_url(); ?>index.php/student/student/getfamilyrow",    
                            data: {
                                'familyid':familyid},
                            type:"post",
							dataType:"json",
                            async:false,
                            success: function(data){
                            	var m_date=data.mother_dob;
                            		m_date=m_date.split("-").reverse().join("-");
                          		$("#listparent").html("<tr>"+
                          									"<td>"+data.father_name+"</td>"+
                          									"<td>"+data.father_name_kh+"</td>"+
                          									"<td>Male</td>"+
                          									"<td>"+data.father_dob.split("-").reverse().join("-")+"</td>"+
                          									"<td> Father's Child </td>"+
                          									"<td>"+data.father_ocupation+"</td>"+
                          									"<td>"+data.father_revenu+" "+data.father_revenu_currcode+"</td>"+
                          									
                          								"</tr>"+
                          								"<tr>"+
                          									"<td>"+data.mother_name+"</td>"+
                          									"<td>"+data.mother_name_kh+"</td>"+
                          									"<td>FeMale</td>"+
                          									"<td>"+m_date+"</td>"+
                          									"<td> Mother's Child </td>"+
                          									"<td>"+data.mother_ocupation+" "+data.mother_revenu_currcode+"</td>"+
                          									
                          								"</tr>");
                          		getlistres(familyid);
                          		
                        }
                   });
		}else{
			 $('#family_revenue').val('');
		}
				
	}
	function getlistres(familyid){
				$.ajax({
                            url:"<?php echo base_url(); ?>index.php/student/student/getresponstudent",    
                            data: {
                                'familyid':familyid},
                            type:"post",
                            success: function(data){
                          		$("#listrespon").html(data);
                        }
                   });
	}
	function fillstudentinf(event){
				var memberid=$(event.target).val();
				var familyid=$('#familyid').val();
				$.ajax({
                            url:"<?php echo base_url(); ?>index.php/student/student/getmemberrow",    
                            data: {
                                'r_id':memberid},
                            type:"post",
							dataType:"json",
                            async:false,
                            success: function(data){
                            	$('#last_name').val(data.last_name);
                            	$('#first_name').val(data.first_name);
                            	$('#last_name_kh').val(data.last_name_kh);
                            	$('#first_name_kh').val(data.first_name_kh);
                            	$('#dob').val(data.dob);
                            	fillusername();
                            	getlistmember(familyid,memberid);
                        }
                   });
	}
	function getlistmember(familyid,memberid){
			var studentid=$('#studentid').val()
				$.ajax({
                            url:"<?php echo base_url(); ?>index.php/student/student/getmemberstudent",    
                            data: {
                                'familyid':familyid,
                                'studentid':studentid,
                                'memberid':memberid},
                            type:"post",
                            success: function(data){
                          		$("#listmember").html(data);
								$('#liststdlink').append(getstdlink(familyid,studentid));
								
                        }
                   });
				
	}
	function getstdlink(familyid,studentid){
		var count;
		
		$.ajax({
				     url:"<?php echo base_url(); ?>index.php/student/student/getstdlink",    
				     data: {'familyid':familyid,'studentid':studentid},
				     async: false,
				     type:"post",
				     success: function(data){
				     	count=data;
				   //alert(data);
				 }
		});
		return count;
	}
	function checkisstd(mem_id){
		var count;
		$.ajax({
				     url:"<?php echo base_url(); ?>index.php/student/student/checkisstd",    
				     data: {'mem_id':mem_id},
				     async: false,
				     type:"post",
				     success: function(data){
				     	count=data;
				   //alert(data);
				 }
		});
		return count;
	}
	function fillstudent(familyid){
				var classid=$('#classid').val();
				$.ajax({
                            url:"<?php echo base_url(); ?>index.php/student/student/getmemberbyfamily",    
                            data: {
                                'familyid':familyid,'classid':classid},
                            type:"post",
                            success: function(data){
                            	$('#student').html(data);
                        }
                   });
	}

	function autofillfamily(){		
		var fillrespon="<?php echo site_url("student/student/fillfamily")?>";
    	$("#family_code").autocomplete({
				source: fillrespon,
				minLength:0,
				select: function( events, ui ) {					
					var f_id=ui.item.id;
					//alert(f_id);
					$("#familyid").val(f_id);
					fillrevenue(ui.item.id)//alert(f_id);
				}						
			});
	}
	function updatemem(event){
		$('#update_mem').val('yes');
	}
	function autofillsponsor(){		
		var fillspon="<?php echo site_url("student/student/fillsponsor")?>";
    	$("#sponsor").autocomplete({
				source: fillspon,
				minLength:0,
				select: function( events, ui ) {					
					var f_id=ui.item.id;
					$("#sponsorid").val(f_id);
				}						
			});
	}
</script>
	
		
	
