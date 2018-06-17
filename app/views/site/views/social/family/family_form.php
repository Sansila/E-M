<?php
	
	$housing_type=$this->db->query("SELECT * FROM sch_family_social_infor WHERE familynote_type='house_type'")->result();
	$Drinking_water=$this->db->query("SELECT * FROM sch_family_social_infor WHERE familynote_type='drinking_water'")->result();
	$invirenment=$this->db->query("SELECT * FROM sch_family_social_infor WHERE familynote_type='invironment'")->result();
	$sleeping_place=$this->db->query("SELECT * FROM sch_family_social_infor WHERE familynote_type='sleeping_place'")->result();
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
      <div class="result_info">
      	<div class="col-sm-6">
      		<strong>Family Information</strong>
      		
      	</div>
      	<div class="col-sm-6" style="text-align: center">
      		<strong>
      			<center class='error' style='color:red;'><?php if(isset($error)) echo "$error"; ?></center>
      		</strong>	
      	</div>
	</div> 
	<div id="stdregister_div"></div>
      <!-- main content -->
       <form enctype="multipart/form-data" name="std_register" id="std_register" method="POST" action="<?php echo site_url('social/family/save')?>">
        <div class="row">
          <div class="col-sm-6">
            <div class="panel panel-default">
	            <div class="panel-heading">
		            <h4 class="panel-title">Family Details</h4>
		        </div>
              	<div class="panel-body">
              		<!-- <div style='border:0px solid #CCCCCC; text-align:center; float: right; width:200px'>
						<img src="<?php if(@ file_get_contents(site_url('../assets/upload/familys/'.$family['familyid'].'_0.jpg'))) echo site_url('../assets/upload/familys/'.$family['familyid'].'_0.jpg'); else echo site_url('../assets/upload/No_person.jpg') ?>" id="uploadPreview_o" style='width:100px; height:125px; margin-bottom:15px'>
						<input id="uploadImage_o" accept="image/gif, image/jpeg, image/jpg, image/png" type="file" name="userfile[]" onchange="PreviewImage_o();" style="visibility:hidden; display:none" />
						<input type='button' class="btn btn-success" onclick="$('#uploadImage_o').click();" value='Browse'/>
					</div> -->
	                <div class="form_sep">
	                  <label class="req" for="student_num">Family Code</label>
	                  <input type="text" data-required="true" value="" onblur="fillpwd(event);" required data-parsley-required-message="Enter Family Code" class="form-control parsley-validated" name="family_code" value="" id="family_code">
	                </div> 
	                <div class="form_sep">
	                  <label class="req" for="student_num">Family Card Number</label>
	                  <input type="text" value="" onblur="checkcard(event);" data-parsley-required-message="Enter Family Card Number" class="form-control parsley-validated" name="family_card_num" value="" id="family_card_num">
	                </div>
	                <div class="form_group">
	                    <label class="req" for="classid">Temporary Card number</label>
	                    <input type="text" name="tem_card" onblur="checkcard(event);"  class="form-control" placeholder="Temporary card" />
	                </div>
                  	<div class="form_group">
	                    <label class="req" for="classid">Temporary Card Expired date</label>
	                    <input type="text" name="expired_date"  class="form-control" placeholder="yyyy-mm-dd" />
	                </div>
	                <div class="form_sep hide">
	                  <label class="req" for="student_num">Family Name</label>
	                  <input type="text"  class="form-control parsley-validated" name="family_name" value="" id="family_name">
	                </div>
	                <div class="form_sep">
	                	<div class="form_sep">
	                  <label class="req" for="family_revenue">Family Revenue</label>
	                  <input type="text" readonly  onkeypress='return isNumberKey(event);' class="form-control" name="family_revenue" id="family_revenue">                  
	                </div> 
	                  <label class="req hide" for="student_num">Family Revenue Currency </label>
	                  <!-- <input type="text" data-required="true" value=""class="form-control parsley-validated" name="family_revenu_currcode" value="" id="family_revenu_currcode"> -->
	                	<select onchange="getex_rate(event);" class="form-control hide" name="family_revenu_currcode" value="" id="family_revenu_currcode">
		                   <option value="">Select Currency</option>
		                    <?php
		                    	foreach ($this->db->get('sch_z_currency')->result() as $curr) {?>
		                    		<option value="<?php echo $curr->currcode ;?>" ><?php echo $curr->currcode;?></option>
		                    	<?php }
		                    ?>
                  		</select>
	                </div>

	                 <div class="form_sep hide">
	                  <label class="req" for="student_num">Family Revenue Period</label>
	                  <!-- <input type="text" data-required="true" value="" class="form-control parsley-validated" name="family_revenu_period" value="" id="family_revenu_period"> -->
	                	<select data-required="true" value="" class="form-control parsley-validated" name="family_revenu_period" value="" id="family_revenu_period">
		                   <option value="">Select Period</option>
		                    <?php
		                    	foreach ($this->db->get('sch_z_period_type')->result() as $perr) {?>
		                    		<option value="<?php echo $perr->period_code ;?>" ><?php echo $perr->period_code;?></option>
		                    	<?php }
		                    ?>
                  		</select>
	                </div>
	                <div class="form_sep hide">
	                  <label class="req" for="student_num">Exchange Rate</label>
	                  <input type="text" data-required="true" onkeypress='return isNumberKey(event);' value="" class="form-control parsley-validated" name="ex_rate" value="" id="ex_rate" readonly>
	                </div>
	            </div>
	            <div class="panel-heading">
		            <h4 class="panel-title">Father information</h4>
		        </div>
              	<div class="panel-body">
					<div style='border:0px solid #CCCCCC; text-align:center; float: right; width:200px'>
						<img src="<?php if(@ file_get_contents(site_url('../assets/upload/familys/'.$family['familyid'].'_0.jpg'))) echo site_url('../assets/upload/familys/'.$family['familyid'].'_0.jpg'); else echo site_url('../assets/upload/No_person.jpg') ?>" id="uploadPreview_o" style='width:100px; height:125px; margin-bottom:15px'>
						<input id="uploadImage_o" accept="image/gif, image/jpeg, image/jpg, image/png" type="file" name="userfile[]" onchange="PreviewImage_o();" style="visibility:hidden; display:none" />
						<input type='button' class="btn btn-success" onclick="$('#uploadImage_o').click();" value='Browse'/>
					</div>   
	                <div class="form_sep">
	                  <label class="req" for="student_num">Father Name</label>
	                  <input type="text"  onblur="fillusername1(event);" value="" class="form-control-left parsley-validated" name="father_name" value="" id="father_name">
	                </div> 
	                <div class="form_sep">
	                  <label class="req" for="student_num">Father Name(Kh)</label>
	                  <input type="text" value="" class="form-control-left parsley-validated" name="father_name_kh" value="" id="father_name_kh">
	                </div>
	                 <div class="form_sep">
	                  <label class="req" for="student_num">Father Occupation</label>
	                  <input type="text" value=""  class="form-control-left parsley-validated" name="father_ocupation" value="" id="father_ocupation">
	                </div>
	                <div class="form_sep hide">
	                  <label class="req" for="student_num">Father Occupation(Kh)</label>
	                  <input type="text" value="" class="form-control parsley-validated" name="father_ocupation_kh" value="" id="father_ocation_kh">
	                </div> 
	                <div class="form_sep">
				        <label class="req" for="student_num">Father DOB</label>
				        <div class='input-group date' id='datetimepicker'>
						    <input type='text' id="father_dob" class="form-control" name="father_dob"/>
						    <span class="input-group-addon"><span class="glyphicon glyphicon-calendar">
						</div>	
				    </div>
	                <div class="form_sep">
	                  <label class="req" for="student_num">Father Revenue Per Month in USD</label>
	                  <input type="text" onblur="totalrevenu(event);" onkeypress='return isNumberKey(event);' value="" required data-parsley-required-message="Enter Father Revenu" class="form-control parsley-validated" name="father_revenu" value="" id="father_revenu">
	                </div>
	                <div class="form_sep">
	                  	<label class="req" for="fa_soc_status">Father Social Status</label>
	                  	<select class="form-control" name="fa_soc_status" id="fa_soc_status">		                
		                   <?php
		                    	foreach ($social_status as $f_row) {?>
		                    		<option value="<?php echo $f_row;?>" ><?php echo $f_row;?></option>
		                    	<?php }
		                    ?>
		                </select>
	                </div>
	                <div class="form_sep">
	                  <label class="req" for="student_num">Father Education</label>
	                   <input type="text" name="father_education" id="father_education"  class="form-control"/>	
	                </div>
	              
	                <div class="form_sep hide">
	                  <label class="req" for="student_num">Father Revenue Currency </label>
	                  <!-- <input type="text" data-required="true" value=""class="form-control parsley-validated" name="father_revenu_currcode" value="" id="father_revenu_currcode"> -->
	                	<select data-required="true" readonly value=""class="form-control" name="father_revenu_currcode" value="" id="father_revenu_currcode">
		                  
		                    <?php
		                    	foreach ($this->db->get('sch_z_currency')->result() as $curr) {?>
		                    		<option value="<?php echo $curr->currcode ;?>" ><?php echo $curr->currcode;?></option>
		                    	<?php }
		                    ?>
                  		</select>
	                </div>
	                 <div class="form_sep hide">
	                  <label class="req" for="student_num">Father Revenue Period</label>
	                  <!-- <input type="text" data-required="true" value="" class="form-control parsley-validated" name="father_revenu_period" value="" id="father_revenu_period"> -->
	                	<select value="" class="form-control" name="father_revenu_period" value="" id="father_revenu_period">
		                   <option value="">Select Period</option>
		                    <?php
		                    	foreach ($this->db->get('sch_z_period_type')->result() as $perr) {?>
		                    		<option value="<?php echo $perr->period_code ;?>" ><?php echo $perr->period_code;?></option>
		                    	<?php }
		                    ?>
                  		</select>
	                </div>
	            </div>
	            <div class="panel-heading">
		            <h4 class="panel-title">Mother information</h4>
		        </div>
              	<div class="panel-body">
              		<div style='border:0px solid #CCCCCC; text-align:center; float: right; width:200px'>
						<img src="<?php if(@ file_get_contents(site_url('../assets/upload/familys/'.$family['familyid'].'_1.jpg'))) echo site_url('../assets/upload/familys/'.$family['familyid'].'_1.jpg'); else echo site_url('../assets/upload/No_person.jpg') ?>" id="uploadPreview" style='width:100px; height:125px; margin-bottom:15px'>
						<input id="uploadImage_f" accept="image/gif, image/jpeg, image/jpg, image/png" type="file" name="userfile[]" onchange="PreviewImage();" style="visibility:hidden; display:none" />
						<input type='button' class="btn btn-success" onclick="$('#uploadImage_f').click();" value='Browse'/>
					</div> 
	                <div class="form_sep">
	                  <label class="req" for="student_num">Mother Name</label>
	                  <input type="text" onblur="fillusername2(event);" value="" data-parsley-required-message="Enter Mother Name" class="form-control-left parsley-validated" name="mother_name" value="" id="mother_name">
	                </div> 
	                <div class="form_sep">
	                  <label class="req" for="student_num">Mother Name Kh</label>
	                  <input type="text" value="" class="form-control-left" name="mother_name_kh" value="" id="mother_name_kh">
	                </div>
	                 <div class="form_sep">
	                  <label class="req" for="student_num">Mother Occupation</label>
	                  <input type="text" value=""  class="form-control-left" name="mother_ocupation" value="" id="mother_ocupation">
	                </div>
	                <div class="form_sep hide">
	                  <label class="req" for="student_num">Mother Occupation(Kh)</label>
	                  <input type="text" value=""  class="form-control" name="mother_ocupation_kh" value="" id="mother_ocupation_kh">
	                </div> 
	                <div class="form_sep">
				        <label class="req" for="student_num">Mother DOB</label>
				        <div class='input-group date' id='datetimepicker'>
						    <input type='text' id="mother_dob" class="form-control" name="mother_dob"/>
						    <span class="input-group-addon"><span class="glyphicon glyphicon-calendar">
						</div>	
				    </div>
	                <div class="form_sep">
	                  <label class="req" for="student_num">Mother Revenue Per Month in USD</label>
	                  <input type="text" id="mother_revenu" onblur="totalrevenu(event);" onkeypress='return isNumberKey(event);' value="" required data-parsley-required-message="Enter Mother Revenu" class="form-control parsley-validated" name="mother_revenu" value="" >
	                </div>
	                <div class="form_sep">
	                  	<label class="req" for="ma_soc_status">Mother Social Status</label>
	                  	<select class="form-control" name="ma_soc_status" id="ma_soc_status">
		                    <?php
		                    	foreach ($social_status as $m_row) {?>
		                    		<option value="<?php echo $m_row;?>"  ><?php echo $m_row;?></option>
		                    	<?php }
		                    ?>
		                </select>
	                </div>
	                <div class="form_sep">
	                  <label class="req" for="student_num">Mother Education</label>
	                   <input type="text" name="mother_education" id="mother_education"  class="form-control"/>	
	                </div>
	                <!--  <div class="form_sep">
	                  <label class="req" for="student_num">Mother Min Revenu</label>
	                  <input type="text" data-required="true" onkeypress='return isNumberKey(event);' value=""  class="form-control parsley-validated" name="mother_min_revenu" value="" id="mother_min_revenu">
	                </div>                
	                 <div class="form_sep">
	                  <label class="req" for="student_num">Mother Max Revenu</label>
	                  <input type="text" data-required="true" onkeypress='return isNumberKey(event);' value="" class="form-control parsley-validated" name="mother_max_revenu" value="" id="mother_max_revenu">
	                </div>  -->
	                <div class="form_sep hide">
	                  <label class="req" for="student_num">Mother Revenue Currency </label>
	                  <!-- <input type="text" data-required="true" value=""class="form-control parsley-validated" name="mother_revenu_currcode" value="" id="mother_revenu_currcode"> -->
	                	<select readonly value=""class="form-control" name="mother_revenu_currcode" value="" id="mother_revenu_currcode">
		                  <?php
		                    	foreach ($this->db->get('sch_z_currency')->result() as $curr) {?>
		                    		<option value="<?php echo $curr->currcode ;?>" ><?php echo $curr->currcode;?></option>
		                    	<?php }
		                    ?>
                  		</select>
	                </div>
	                 <div class="form_sep hide">
	                  <label class="req" for="student_num">Mother Revenue Period</label>
	                  <!-- <input type="text" data-required="true" value="" class="form-control parsley-validated" name="mother_revenu_period" value="" id="mother_revenu_period"> -->
	                	<select  value="" class="form-control" name="mother_revenu_period" value="" id="mother_revenu_period">
		                   <?php
		                    	foreach ($this->db->get('sch_z_period_type')->result() as $perr) {?>
		                    		<option value="<?php echo $perr->period_code ;?>" ><?php echo $perr->period_code;?></option>
		                    	<?php }
		                    ?>
                  		</select>
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
	                  <label class="req" for="province">Province</label>
	                  <input type="text" onblur="fillpermanent(event);" value="" class="form-control parsley-validated" name="province" id="province">
	                </div>
	                <div class="form_sep">
	                  <label class="req" for="district">District</label>
	                  <input type="text" onblur="fillpermanent(event);"  class="form-control parsley-validated" name="district" id="district">
	                </div>
	                <div class="form_sep">
	                  <label class="req" for="commune">Commune</label>
	                  <input type="text" onblur="fillpermanent(event);" data-type="number"  class="form-control parsley-validated" name="commune" id="commune">
	                </div>
	                <div class="form_sep">
	                  <label class="req" for="village">Village</label>
	                  <input type="text" onblur="fillpermanent(event);" data-type="dateIso" class="form-control input_validate parsley-validated" id="village" name="village">
	                </div>
	                <div class="form_sep">
	                <label class="req" for="reg_input_name">Permanent Address</label>
	                  <textarea  class="form-control parsley-validated" name="permanent_adr"  id="permanent"></textarea>
	                </div>
	                  <div class="form_sep">
	                  <label class="req" for="reg_input_name">Address KH</label>
	                  <textarea data-required="true" onblur="fillpermanent(event);"  class="form-control parsley-validated" name="adition_adr"  id="adition_adr"></textarea>
	                </div>
	                <div class="form_sep">
	                  <label class="req" for="phone1">Phone</label>
	                  <input type="text" data-type="phone" onkeypress='return isNumberKey(event);' value="" class="form-control parsley-validated" name="tel" id="tel">
	                </div>  
	                <div class="form_sep">
	                  <label class="req" for="phone1">Zone</label>
	                  <input type="text" data-type="phone" value=""  class="form-control parsley-validated" name="zoon" id="zoon">
	                </div>                 
	                <div class="form_sep">
	                  <label class="req" for="from_school">Distance from school</label>
	                  <input type="text"  onkeypress='return isNumberKey(event);' class="form-control parsley-validated" name="from_school" id="from_school">                  
	                </div> 
	                 <div class="form_sep">
	                  <label class="req" for="measure">Measure</label>
	                  <select class="form-control" id="measure" name="measure"> 	                  	
	                  	<option value="m">Km</option>
	                  </select>	
	                </div>
              	</div>
              	<div class="panel panel-default">
	          		<div class="panel-heading">
		               <h4 class="panel-title">Relative Images</h4>
		            </div>
	              	<div class="panel-body">
	              		<div style='border:0px solid #CCCCCC; text-align:center; float: left; width:200px'>
							<img src="<?php if(@ file_get_contents(site_url('../assets/upload/familys/'.$family['familyid'].'_2.jpg'))) echo site_url('../assets/upload/familys/'.$family['familyid'].'_2.jpg'); else echo site_url('../assets/upload/No_person.jpg') ?>" id="uploadPreview_m" style='width:100px; height:125px; margin-bottom:15px'>
							<input id="uploadImage_m" accept="image/gif, image/jpeg, image/jpg, image/png" type="file" name="userfile[]" onchange="PreviewImage_m();" style="visibility:hidden; display:none" />
							<input type='button' class="btn btn-success" onclick="$('#uploadImage_m').click();" value='Browse'/>
						</div> 
					</div>
				</div>
              	<div class="panel-heading hide">
	               <h4 class="panel-title">Social Information</h4>
	            </div>
          		<div class="panel-body hide">
          			<div class="form_sep">
	                  <label class="req" for="classid">Housing Type</label>
	                  <select data-required="true" onchange="gethousingfree(event);"  minlength='1' class="form-control parsley-validated" name="housing_type" id="housing_type">
	                    <option value="">Select Housing</option>
	                    <?php
	                    	foreach ($housing_type as $housing) {?>
	                    		<option value="<?php echo $housing->description; ?>" ><?php echo $housing->description; ?></option>
	                    	<?php }
	                    ?>
	                    <option value="Free text">Free Text</option>
	                  </select>
	                </div>
              		<div class="form_sep" id='housing_type_free' style='display:none'>
	                  <label class="req" for="student_num">Housing type Free Text</label>
	                  <input type="text" value="" class="form-control parsley-validated" name="housing_type_free" value="" id="housing_type_free">
	                </div>   
	                <div class="form_sep">
	                  <label class="req" for="classid">Dringking Water</label>
	                  <select  onchange='getdrinkingfree(event);'  minlength='1' class="form-control parsley-validated" name="drinking_water" id="drinking_water">
	                    <option value="">Select drinking Water</option>
	                    <?php
	                    	foreach ($Drinking_water as $water) {?>
	                    		<option value="<?php echo $water->description; ?>" ><?php echo $water->description; ?></option>
	                    	<?php }
	                    ?>
	                    <option value="Free text">Free Text</option>
	                  </select>
	                </div>
	                <div class="form_sep" id='dringking_Water_free' style='display:none'>
	                  <label class="req" for="student_num">Dringking Water Free Text</label>
	                  <input type="text"  value="" class="form-control parsley-validated" name="dringking_Water_free" value="" id="dringking_Water_free">
	                </div> 
	               	<div class="form_sep">
	                  <label class="req" for="classid">Electricity</label>
	                  <select  minlength='1' class="form-control parsley-validated" name="electricity" id="electricity">
	                    <option value="1">Yes</option>
	                    <option value="0">No</option>
	                  </select>
	                </div>
	                <div class="form_sep">
	                  <label class="req" for="classid">Invironment</label>
	                  <select onchange='getinvfree(event);'  minlength='1' class="form-control parsley-validated" name="invirenment" id="invirenment">
	                     <?php
	                    	foreach ($invirenment as $invr) {?>
	                    		<option value="<?php echo $invr->description; ?>" ><?php echo $invr->description; ?></option>
	                    	<?php }
	                    ?>
	                    <option value="Free text">Free Text</option>
	                  </select>
	                </div>
	                <div class="form_sep" id='invironment_free' style='display:none'>
	                  <label class="req" for="student_num">invironment Free Text</label>
	                  <input type="text"  value="" class="form-control parsley-validated" name="invironment_free" value="" id="invironment_free">
	                </div> 
	                <div class="form_sep">
	                  <label class="req" for="classid">Sleeping Place</label>
	                  <select  onchange='getsleepfree(event);'  minlength='1' class="form-control parsley-validated" name="sleeping_place" id="sleeping_place">
	                    <?php
	                    	foreach ($sleeping_place as $sleep) {?>
	                    		<option value="<?php echo $sleep->description; ?>" ><?php echo $sleep->description; ?></option>
	                    	<?php }
	                    ?>
	                    <option value="Free text">Free Text</option>
	                  </select>
	                </div>
	                <div class="form_sep" id='sleeping_place_free' style='display:none'>
	                  <label class="req" for="student_num">Sleeping Place Free Text</label>
	                  <input type="text" value="" class="form-control parsley-validated" name="sleeping_place_free" value="" id="sleeping_place_free">
	                </div> 
	                 <div class="form_sep">
	                  <label class="req" for="classid">Sanitation</label>
	                  <select  minlength='1' class="form-control parsley-validated" name="sanitation" id="sanitation">
	                    <option value="personal toilet">Personal toilet</option>
	                    <option value="Open air toilet">Open air toilet</option>
	                  </select>
	                </div>
	          		<div class="form_sep">
		              <label class="req" for="last_name">Property</label>
		              <input type="text" class="form-control parsley-validated" name="property" value="" id="property">
		           </div>
	               <div class="form_sep">
		              <label class="req" for="first_name">Extra information</label>
		              <input type="text"  class="form-control parsley-validated" onblur='fillusername(event);'  data-parsley-required-message="Enter First Name" name="extra_information" value="" id="extra_information">
		           </div>
		        </div>
		        <div class="panel-heading hide">
	               <h4 class="panel-title">USER LOGIN</h4>
	            </div>
          		<div class="panel-body hide">
	          		<div class="form_sep">
		              <label class="req" for="last_name">Father's User Name</label>
		              <input type="text"  class="form-control parsley-validated" name="login_user1" value="" id="login_user1">
		           </div>
	               <div class="form_sep">
		              <label class="req" for="first_name">Password</label>
		              <input type="password"  class="form-control parsley-validated" onblur='fillusername(event);' name="password1" value="" id="password1">
		           </div>
		            <div class="form_sep">
	                  <label class="req" for="measure">Mother's User Name</label>
	                  <input type="text" class="form-control parsley-validated" id="login_user2" name="login_user2"> 
	                </div>
	                <div class="form_sep">
	                  <label class="req" for="family_revenue">Password</label>
	                  <input type="password" class="form-control parsley-validated" name="password2" id="password2">                  
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
									<th >First Name</th>
									<th >Last Name </th>
									<th >First Name kh</th>
									<th >Last Name kh </th>
									<th >Gender</th>
									<th >DOB</th>
									<th>Relationship</th>
									<th >Occupation</th>
									<th >Revenue</th>
									<th >Tel1</th>
									<th class='hide'>tel2</th>
									<th class='hide'>Social status</th>
									<th class='hide'>Civil status</th>
									<th class='hide'>Health</th>
									<th class='hide'>Education</th>
									<th class='hide'>Province</th>
									<th class='hide'>Commune</th>
									<th class='hide'>District</th>
									<th class='hide'>Village</th>
									<th>
							    		<a>
							    			<img data-toggle="modal" data-target="#addrespon" src="<?php echo base_url().'assets/images/icons/add.png'?>" />
							    		</a>
							    	</th>
								</thead>
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
									<th >Full Name </th>
									<th >Full Name(kh)</th>
									<th >Gender</th>
									<th >DOB</th>
									<th width='200'>Occupation</th>
									<th >Revenue</th>
									<th >Grade</th>
									<th >Relationship</th>
									<th >School</th>
									<th class='hide'>Tel1</th>
									<th class='hide'>tel2</th>
									<th class='hide'>note</th>
									<th class='hide'>Social_status</th>
									<th class='hide'>Civil_status</th>
									<th class='hide'>Health</th>
									<th class='hide'>School</th>
									<th class='hide'>Leaveschool</th>
									<th>
							    		<a>
							    			<img data-toggle="modal" class='btnaddmem' data-target="#addmember" src="<?php echo base_url().'assets/images/icons/add.png'?>" />
							    		</a>
							    	</th>
								</thead>
							    	<tbody id='listmember'>

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
              <input type="hidden" name="y" value="<?php echo isset($_GET['y'])?$_GET['y']:"" ?>" name="y"> 
              <input type="hidden" name="m" value="<?php echo isset($_GET['m'])?$_GET['m']:"" ?>" name="m"> 	
              <input type="hidden" name="p" value="<?php echo isset($_GET['p'])?$_GET['p']:"" ?>" name="p"> 
              <button id="std_reg_submit" name="std_reg_submit" type="submit" class="btn btn-success">Save</button>
            </div>
          </div>
        </div>               
      </form>
    </div>
  </div>
</div>
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
				                   <input type="text" name="addres_last_name_kh" id="addres_last_name_kh"  class="form-control"  data-parsley-required-message="Enter Last Name Khmer" />	
				                </div> 
					          	<div class="form_sep">
					                <label class="req" for="classid">Gender</label>
					                <select data-required="true" required data-parsley-required-message="Select Class" minlength='1' class="form-control parsley-validated" name="addres_sex" id="addres_sex">
					                	<option value="M">M</option>
					                   <option value="F">F</option>
					                </select>
					            </div>    
					            <div class="form_sep">
					                <label class="req" for="student_num">Occupation</label>
					                <input type="text" name="addres_occupation" id="addres_occupation"  class="form-control"/>	
					            </div>    
					            <div class="form_sep">
				                  <label class="req" for="student_num">Tel 1</label>
				                   <input type="text" name="addres_tel1" onkeypress='return isNumberKey(event);' id="addres_tel1"  class="form-control"  data-parsley-required-message="Enter Phone Number" />	
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
					                <label class="req" for="classid">RelationShip</label>
					                <select data-required="true"  data-parsley-required-message="Select Relationship" minlength='1' class="form-control parsley-validated" name="addres_relationship" id="addres_relationship">
					                	<option value="">select Relationship</option>
					                   <?php
					                    	foreach ($relation as $relat_row) {?>
					                    		<option value="<?php echo $relat_row;?>" ><?php echo $relat_row;?></option>
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
					                <input type="text" name="addres_first_name_kh" id="addres_first_name_kh"  class="form-control"  data-parsley-required-message="Enter Fisrt Name Khmer" />	
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
                <button type="button" id='btnsaverpb' class="btn btn-primary">Add</button>
            </div>
        </div>
                                    <!-- /.modal-content -->
    </div>
                                <!-- /.modal-dialog -->
</div>
<!--++++++++++++++++++++++++++++++++++++++++++++++End form add Respondsible+++++++++++++++++++++++++++++++++++++++++++++++++++ -->
<!--++++++++++++++++++++++++++++++++++++++++++++++Form add Member+++++++++++++++++++++++++++++++++++++++++++++++++++ -->					
<!-- Modal popup add member -->
<div class="modal fade" id="addmember" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
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
				                   <input type="text" name="addmem_last_name_kh" id="addmem_last_name_kh"  class="form-control"  data-parsley-required-message="Enter last Name" />	
				                </div> 
					          	<div class="form_sep">
					                <label class="req" for="classid">Gender</label>
					                <select data-required="true"class="form-control parsley-validated" name="addmem_sex" id="addmem_sex">
					                	<option value="M">M</option>
					                   <option value="F">F</option>
					                </select>
					            </div>    
					            <div class="form_sep">
					                <label class="req" for="student_num">Occupation</label>
					                <input type="text" name="addmem_occupation" id="addmem_occupation"  class="form-control"  />	
					            </div>    
					            <div class="form_sep">
				                  <label class="req" for="student_num">Tel 1</label>
				                   <input type="text" name="addmem_tel1" onkeypress='return isNumberKey(event);' id="addmem_tel1"  class="form-control"  data-parsley-required-message="Enter Phone Number" />	
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
				              	 <div class="form_sep hide" id="reason">
					                <label class="req" for="student_num">Leave School Reason</label>
					                <input type="text" name="addmem_reason" id="addmem_reason"  class="form-control"/>	
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
					                <input type="text" name="addmem_first_name_kh" id="addmem_first_name_kh"  class="form-control"  data-parsley-required-message="Enter last Name" />	
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
				                   <input type="text" name="addmem_school" value="" id="addmem_school"  class="form-control"/>	
				                </div> 
				                 <div class="form_sep">
					                <label class="req" for="student_num">Revenue</label>
					                <input type="text" name="addmem_revenue" id="addmem_revenue"  class="form-control"/>	
					            </div> 
				                <div class="form_sep">
				                  <label class="req" for="student_num">Relationship</label>
				                   <input type="text" name="addmem_relationship" value="" id="addmem_relationship"  class="form-control"/>	
				                </div> 
					            <!-- <div class="form_sep">
				                  <label class="req" for="student_num">School</label>
				                   <select data-required="true" class="form-control parsley-validated" name="addmem_school" id="addmem_school">
					                	<option value="">select School</option>
					                   <?php
					                    	foreach ($this->db->get('sch_school_infor')->result() as $school_row) {?>
					                    		<option value="<?php echo $school_row->schoolid;?>" ><?php echo $school_row->name;?></option>
					                    	<?php }
					                    ?>
					                </select>
				                </div>  -->
				            </div>
			            </div>
			        </div>
        
			      </form>         
			    </div>
			    
			 </div>  
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" id='btnaddmember' class="btn btn-primary">Add</button>
            </div>
        </div>
        </div>
                                    <!-- /.modal-content -->
    </div>
                                <!-- /.modal-dialog -->
</div>

<!--++++++++++++++++++++++++++++++++++++++++++++++End Form add Member+++++++++++++++++++++++++++++++++++++++++++++++++++ -->
<div class="modal fade" id="btnaddvisit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="wrapper">
				<div class="clearfix" id="main_content_outer">
				    <div id="main_content">
					    <div class="result_info">
					    	<div class="col-sm-6">
					      		<strong>Visit Infomation</strong>
					      	</div>
					      	<div class="col-sm-6" style="text-align: center">
					      		<strong>
					      			<center class='visit_error' style='color:red;'></center>
					      		</strong>	
					      	</div>
					    </div>
					      	<form enctype="multipart/form-data" name="frmvisit" id="frmvisit" method="POST">
						        <div class="row">
									<div class="col-sm-12">
							            	<div class="panel-body">
								                <div class="form_sep">
										            <label class="req">Visit Date</label>
										            <div data-date-format="dd-mm-yyyy" class="input-group date dob">
										            <input type="text" value="" data-type="dateIso"  data-required="true" class="form-control input_validate parsley-validated" id="add_date" name="add_date">
										            <span class="input-group-addon"><i class="icon-calendar"></i></span> </div>
											    </div> 
											    <div class="form_sep">
									                  <label class="req" for="student_num">Visit Reason</label>
									                  <input type="text" data-required="true"  required data-parsley-required-message="Enter Reason" value="" class="form-control parsley-validated" name="add_visit_reason" value="" id="add_visit_reason" >
									            </div>
									            <div class="form_sep">
									                  	<label class="req" for="reg_input_name">Update Information</label>
									                  	<textarea data-required="true" class="form-control parsley-validated" name="add_update_info"  id="add_update_info"></textarea>
									            </div>
								                <div class="form_sep">
								                  <label class="req" for="student_num">Intervation Type</label>
								                  <select data-required="true" class="form-control parsley-validated" name="add_intervation_type" value="" id="add_intervation_type" >
									                   <option value="">Select intervation</option>
									                   <option value="planed">Planed</option>
									                   <option value="not planed">Not Planed</option>
							                  		</select>
									            </div>
									            <div class="form_sep">
									                  <label class="req" for="student_num">S/W Activity</label>
									                  <input type="text" data-required="true" value="" class="form-control parsley-validated" name="add_sw_activity" value="" id="add_sw_activity" >
									            </div>
									             <div class="form_sep">
									                  <label class="req" for="student_num">Out Come</label>
									                  <input type="text" data-required="true" required data-parsley-required-message="Enter Out Come" value="" class="form-control parsley-validated" name="add_out_come" value="" id="add_out_come">
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
                <button type="button" id='btnsavevisit' class="btn btn-primary">Save</button>
            </div>
        </div>                       <!-- /.modal-content -->
    </div>
                                <!-- /.modal-dialog -->
</div>

<script type="text/javascript">
	function checkcard(event){
		var card_number=$(event.target).val();
		var studentid='';
		$.ajax({
                url:"<?php echo base_url(); ?>index.php/social/family/validatecard/"+card_number+"/"+studentid,    
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
        oFReader.readAsDataURL(document.getElementById("uploadImage_f").files[0]);

        oFReader.onload = function (oFREvent) {
            document.getElementById("uploadPreview").src = oFREvent.target.result;
             document.getElementById("uploadPreview").style.backgroundImage = "none";
        };
    };
	$(function(){
		$('#defaultform').parsley();				
	})
	function PreviewImage_m() {
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("uploadImage_m").files[0]);

        oFReader.onload = function (oFREvent) {
            document.getElementById("uploadPreview_m").src = oFREvent.target.result;
             document.getElementById("uploadPreview_m").style.backgroundImage = "none";
        };
    };
	$(function(){
		$('#defaultform').parsley();				
	})
	function PreviewImage_o() {
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("uploadImage_o").files[0]);

        oFReader.onload = function (oFREvent) {
            document.getElementById("uploadPreview_o").src = oFREvent.target.result;
             document.getElementById("uploadPreview_o").style.backgroundImage = "none";
        };
    };
	$(function(){
		$('#defaultform').parsley();				
	})

	function gethousingfree(event){
		var valu=$(event.target).val();
		if(valu=='Free text')
			$('#housing_type_free').show();
		else
			$('#housing_type_free').hide();
	}
	$("#addmem_leave_school").click(function(){
		if($('#addmem_leave_school').is(':checked')){
			$('#reason').removeClass('hide');
		}
		else{
			$('#reason').addClass('hide');
		}
			
	})
	function totalrevenu(event){

		var father_revenu=$("#father_revenu").val();
		var mother_revenu=$("#mother_revenu").val();
		var total=Number(father_revenu+0)+Number(mother_revenu+0);
		$("#family_revenue").val(total);
	}
	function getinvfree(event){
		var valu=$(event.target).val();
		if(valu=='Free text')
			$('#invironment_free').show();
		else
			$('#invironment_free').hide();
	}
	$(".btnaddmem").click(function(){
		$("#frmaddmember")[0].reset(); 
		$('.member_error').html(''); 
		if($('#addmem_leave_school').is(':checked'))
			$('#reason').removeClass('hide'); 
		else
			$('#reason').addClass('hide'); 
	})
	function getsleepfree(event){
		var valu=$(event.target).val();
		if(valu=='Free text')
			$('#sleeping_place_free').show();
		else
			$('#sleeping_place_free').hide();
	}
	function getex_rate(event){
		var currcode=$(event.target).val();
			if(currcode!=''){
				$.ajax({
                            url:"<?php echo base_url(); ?>index.php/social/family/getexrate",    
                            data: {'currcode':currcode},
                            type:"post",
                            success: function(data){
                            	//alert(data);
                           	$('#ex_rate').val(data);
                        }
                    });
			}else{
					$('#ex_rate').val('');
			}
			
	}
	function fillpermanent(event){
		var village=$('#village').val();
		if(village!='')
			village=$('#village').val()+' Village, ';
		var commune=$('#commune').val();
		if(commune!='')
			commune=$('#commune').val()+' Commune, ';
		var district=$('#district').val();
		if(district!='')
			district=$('#district').val()+' District, ';
		var adition_adr=$('#adition_adr').val();
		if(adition_adr!='')
			adition_adr=$('#adition_adr').val();
		var province=$('#province').val();
		if(province!='')
			province=$('#province').val()+' Province';
		var permanent_adr=village+commune+district+province+"/"+adition_adr;
		$('#permanent').val(permanent_adr);
	}
	function fillusername1(event){
		var username=$('#father_name').val();
					$.ajax({
                            url:"<?php echo base_url(); ?>index.php/student/student/validateuser",    
                            data: {'username':username},
                            type:"post",
                            success: function(data){
                           if(data>0){
                           		$('#login_user1').val(username+'1');
                           }else{
                           		$('#login_user1').val(username);
                           }
                        }
                    });
	}
	function fillusername2(event){
		var username=$('#mother_name').val();
					$.ajax({
                            url:"<?php echo base_url(); ?>index.php/student/student/validateuser",    
                            data: {'username':username},
                            type:"post",
                            success: function(data){
                           if(data>0){
                           		$('#login_user2').val(username+'1');
                           }else{
                           		$('#login_user2').val(username);
                           }
                        }
                    });
	}
	function fillpwd(event){
		var pwd=$('#family_code').val();
		
		var family_code=$(event.target).val();
		//alert(student_num);
		$.ajax({
                            url:"<?php echo base_url(); ?>index.php/social/Family/getfamilybycode",    
                            data: {'std_num':family_code},
                            type:"post",
                            success: function(data){
                           	if(data==1){
                           		$('.error').html('Family Code :'+ family_code+' is already used please choose other Code');
                           		$('#family_code').val(''); 
                           	}else{
                           		$('#password1').val(pwd);
                           		$('#password2').val(pwd);
                           		$('.error').html('');
                           	}
                        }
                    });
	}
	function getdrinkingfree(event){
		var valu=$(event.target).val();
		//alert(valu);
		if(valu=='Free text')
			$('#dringking_Water_free').show();
		else
			$('#dringking_Water_free').hide();
	}
 	function isNumberKey(evt){
        var e = window.event || evt; // for trans-browser compatibility 
        var charCode = e.which || e.keyCode; 
        if ((charCode > 45 && charCode < 58) || charCode == 8){ 
            return true; 
        } 
        return false;  
     }
	
	$(function(){
					$('#std_register').parsley();
					$('#frmaddrespond').parsley();
					$('#frmaddmember').parsley();
					$('#frmvisit').parsley();

					$.fn.datepicker.defaults.format = "dd-mm-yyyy";

					$('#add_date').datepicker();
					$('#mother_dob').datepicker();
					$('#father_dob').datepicker();
					$('#addres_dob').datepicker();
					$('#addmem_dob').datepicker();
					//++++++++++++++++++++++++++++++add respond submit++++++++++++++++++
					$("#btnsaverpb").click(function() {        	
			        	$('#frmaddrespond').submit();           
			        });
			        
			        $('#frmaddrespond').submit(function(e) { 
				        e.preventDefault();	        
				        if ( $(this).parsley().isValid() ) {
				        	var exist=false;
				        		var last_name=$('#addres_last_name').val();
								var first_name=$('#addres_first_name').val();
								var dob=$('#addres_dob').val();
				        	$("#listrespon tr").each(function() {
						            var first_name_tb = $(this).find("#res_first_name").val();
						            var last_name_tb = $(this).find("#res_last_name").val();
						            var dob_tb = $(this).find("#res_dob").val();
						        	if(last_name==last_name_tb && first_name==first_name_tb && dob==dob_tb)
						        		exist=true;
						    });
						    if(exist==true){
						    	$('.respon_error').html('This respondsible already exist...!')
						    }else{
						    	saverespond();  
				            	$("#frmaddrespond")[0].reset();  
						    }
				           
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
				        	var exist=false;
				        		var last_name=$('#addmem_last_name').val();
								var first_name=$('#addmem_first_name').val();
								var dob=$('#addmem_dob').val();
				        	$("#listmember tr").each(function() {
						            var first_name_tb = $(this).find("#mem_first_name").val();
						            var last_name_tb = $(this).find("#mem_last_name").val();
						            var dob_tb = $(this).find("#mem_dob").val();
						        	if(last_name==last_name_tb && first_name==first_name_tb && dob==dob_tb)
						        		exist=true;
						    });
						    if(exist==true){
						    	$('.member_error').html('This Member already exist...!')
						    }else{
						    	  savemember();
				            	$("#frmaddmember")[0].reset();  
						    }
				             
				        }
       				})		
       				//++++++++++++++++++++++++++++++end save++++++++++++++++++	
       				$("#btnsavevisit").click(function() {        	
			        	$('#frmvisit').submit();           
			        });
			        $("#frmvisit").submit(function(e){
			        	 e.preventDefault();
			        	 if ( $(this).parsley().isValid() ) {
			        	 	var exist=false;
				        		var add_date=$('#add_date').val();
				        		var add_visit_reason=$('#add_visit_reason').val();
				        		var add_visit_id=$('#add_visit_id').val();
				        		//alert(add_date+' / '+ add_visit_reason+' / '+add_visit_id);
				        	$("#listvisit tr").each(function() {
						            var date = $(this).find("#visit_date").val();
						            var reason = $(this).find("#visit_reason").val();
						            var visitid = $(this).find(".editvisit").attr('rel');
						           // alert(date+' / '+ reason+' / '+visitid);
						        	if(add_visit_id!=visitid && add_date==date && add_visit_reason==reason)
						        		exist=true;
						    });
						    if(exist==true){
						    	$('.visit_error').html('This Visit already exist...!')
						    }else{
						    	 savevisit(); 
						    }
						    	
				        }
			        		
			        })
	})
	$(function(){
		$("input[name='expired_date'],#dob,.res_dob,.mem_dob").datepicker({
      		language: 'en',
      		pick12HourFormat: true,
      		format:'yyyy-mm-dd'
    	});
	});
	
	function removerow(event){
		var row_class=$(event.target).closest('tr').remove();
		
	}
	function savevisit(){
		var visitid=$("#add_visit_id").val();
		var familyid=$("#familyid").val();
		var visit_date=$("#add_date").val();
		var reason=$("#add_visit_reason").val();
		var intervation_type=$("#add_intervation_type").val();
		var sw_activity=$("#add_sw_activity").val();
		var update_info=$("#add_update_info").val();
		var outcome=$("#add_out_come").val();
                	$("#listvisit").append("<tr>"+
									"<td ><input class='hide' type='text' value='"+visit_date+"' name='visit_date[]' id='visit_date'/>"+visit_date.split('-').reverse().join('-')+"</td>"+
									"<td ><input class='hide' type='text' value='"+reason+"' name='visit_reason[]' id='visit_reason'/>"+reason+"</td>"+
									"<td ><input class='hide' type='text' value='"+intervation_type+"' name='intervation_type[]' id='intervation_type'/>"+intervation_type+"</td>"+
									"<td ><input class='hide' type='text' value='"+sw_activity+"' name='sw_activity[]' id='sw_activity'/>"+sw_activity+"</td>"+
									"<td ><input class='hide' type='text' value='"+outcome+"' name='outcome[]' id='outcome'/>"+outcome+"</td>"+
									"<td>"+
							    	"</td>"+
							    	"<td>"+
							    	"</td>"+
							    "</tr>");
 				$("#frmvisit")[0].reset();
			
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
		var relationship=$('#addres_relationship').val();
		$('#listrespon').append("<tr>"+
									"<td ><input class='hide' type='text' value='"+first_name+"' name='res_first_name[]' id='res_first_name'/>"+first_name+"</td>"+
									"<td ><input class='hide' type='text' value='"+last_name+"' name='res_last_name[]'  id='res_last_name'/>"+last_name+" </td>"+
									"<td ><input class='hide' type='text' value='"+first_name_kh+"' name='res_first_name_kh[]'/>"+first_name_kh+"</td>"+
									"<td ><input class='hide' type='text' value='"+last_name_kh+"' name='res_last_name_kh[]'/>"+last_name_kh+"</td>"+
									"<td ><input class='hide' type='text' value='"+sex+"' name='res_sex[]'/>"+sex+"</td>"+
									"<td ><input class='hide' type='text' value='"+dob+"' name='res_dob[]'  id='res_dob'/>"+dob+"</td>"+
									"<td><input class='hide' type='text' value='"+relationship+"' name='res_relationship[]'/>"+relationship+"</td>"+
									"<td ><input class='hide' type='text' value='"+occupation+"' name='res_occupation[]'/>"+occupation+"</td>"+
									"<td ><input class='hide' type='text' value='"+revenue+"' name='res_revenue[]'/>"+revenue+"</td>"+
									"<td ><input class='hide' type='text' value='"+tel1+"' name='res_tel1[]'/>"+tel1+"</td>"+
									"<td class='hide'><input class='hide' type='text' value='"+tel2+"' name='res_tel2[]'/>"+tel2+"</td>"+
									"<td class='hide'><input class='hide' type='text' value='"+social_status+"' name='res_social_status[]'/>"+social_status+"</td>"+
									"<td class='hide'><input class='hide' type='text' value='"+civil_status+"' name='res_civil_status[]'/>"+civil_status+"</td>"+
									"<td class='hide'><input class='hide' type='text' value='"+health+"' name='res_health[]'/>"+health+"</td>"+
									"<td class='hide'><input class='hide' type='text' value='"+education+"' name='res_education[]'/>"+education+"</td>"+
									"<td class='hide'><input class='hide' type='text' value='"+province+"' name='res_province[]'/>"+province+"</td>"+
									"<td class='hide'><input class='hide' type='text' value='"+commune+"' name='res_commune[]'/>"+commune+"</td>"+
									"<td class='hide'><input class='hide' type='text' value='"+district+"' name='res_district[]'/>"+district+"</td>"+
									"<td class='hide'><input class='hide' type='text' value='"+village+"' name='res_village[]'/>"+village+"</td>"+
									"<td>"+
							    		"<a>"+
							    			"<img onclick='removerow(event);' src='<?php echo base_url() ?>assets/images/icons/delete.png' />"+
							    		"</a>"+
							    "</td></tr>");
	
		//alert(revenue);
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
		var leave_reason=$('#addmem_reason').val();
		var relationship=$('#addmem_relationship').val();
		var revenue=$('#addmem_revenue').val();
		var leave_school=0;
		if($('#addmem_leave_school').is(':checked'))
				leave_school=1;
		$('#listmember').append("<tr>"+
									"<td ><input class='hide' type='text' value='"+first_name+"' name='mem_first_name[]' id='mem_first_name'/>"+
										"<input class='hide' type='text' value='"+last_name+"' name='mem_last_name[]' id='mem_last_name'/>"+first_name+" "+last_name+" </td>"+
									"<td ><input class='hide' type='text' value='"+first_name_kh+"' name='mem_first_name_kh[]'/>"+
										"<input class='hide' type='text' value='"+last_name_kh+"' name='mem_last_name_kh[]'/>"+first_name_kh+" "+last_name_kh+"</td>"+
									"<td ><input class='hide' type='text' value='"+sex+"' name='mem_sex[]'/>"+sex+"</td>"+
									"<td ><input class='hide' type='text' value='"+dob+"' name='mem_dob[]' id='mem_dob'/>"+dob+"</td>"+
									"<td ><input class='hide' type='text' value='"+occupation+"' name='mem_occupation[]'/>"+occupation+"</td>"+
									"<td ><input class='hide' type='text' value='"+revenue+"' name='mem_revenue[]'/>"+revenue+"</td>"+
									"<td ><input class='hide' type='text' value='"+grade_level+"' name='mem_grade_level[]'/>"+grade_level+"</td>"+
									"<td ><input class='hide' type='text' value='"+relationship+"' name='mem_relationship[]'/>"+relationship+"</td>"+
									"<td ><input class='hide' type='text' value='"+school+"' name='mem_school[]'/>"+school+"</td>"+
									"<td class='hide'><input class='hide' type='text' value='"+tel1+"' name='mem_tel1[]'/>"+tel1+"</td>"+
									"<td class='hide'><input class='hide' type='text' value='"+tel2+"' name='mem_tel2[]'/>"+tel2+"</td>"+
									"<td class='hide'><input class='hide' type='text' value='"+note+"' name='mem_note[]'/>"+note+"</td>"+
									"<td class='hide'><input class='hide' type='text' value='"+social_status+"' name='mem_social_status[]'/>"+social_status+"</td>"+
									"<td class='hide'><input class='hide' type='text' value='"+civil_status+"' name='mem_civil_status[]'/>"+civil_status+"</td>"+
									"<td class='hide'><input class='hide' type='text' value='"+health+"' name='mem_health[]'/>"+health+"</td>"+
									"<td class='hide'><input class='hide' type='text' value='"+leave_school+"' name='mem_leave_school[]'/>"+leave_school+"</td>"+
									"<td class='hide'><input class='hide' type='text' value='"+leave_reason+"' name='mem_leave_school_reason[]'/>"+leave_reason+"</td>"+
									"<td>"+
							    		"<a>"+
							    			"<img onclick='removerow(event);' src='<?php echo base_url() ?>assets/images/icons/delete.png' />"+
							    		"</a>"+
							    	"</td></tr>");
		
	}

</script>
	
		
	
