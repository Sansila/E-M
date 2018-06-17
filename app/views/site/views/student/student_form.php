<?php
	//$cars=array("Volvo","BMW","Toyota");
	$relation=array("Legal Student","father`s child","mother`s child","brother/sister","Cousin","niece/nephew");
	$social_status=array("Normal","alcohol","violent","Mental","Drug");
	$Health=array("Normal","Handicap 50%","Handicap 100%");
	$civil_status=array("Single","Married","Divorce/widow");
	$m='';
	$p='';
	if(isset($_GET['m'])){
    	$m=$_GET['m'];
    }
    if(isset($_GET['p'])){
        $p=$_GET['p'];
    }
   
?>

<style type="text/css">
	ul,ol{
		margin-bottom: 0px !important;
	}
	a{
		cursor: pointer;
	}
	table tbody tr td img{width: 20px; margin-right: 10px}
	.payment_sep ul{
		display: none;
	}
	.datepicker {z-index: 9999;}
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
                <h4 class="panel-title">Student Details</h4>
              </div>
              <div class="panel-body">
              	<div class="form_sep hide">
					         <label class="req" for="classid">year</label>
                  	<input type="text" data-required="true" data-parsley-required-message="Enter Family" class="form-control parsley-validated year" name="year" value="">
                  	
				        </div>
      				<div class="form_sep">
      					<label class="req" for="classid">Family ID</label>
                        	<input type="text" data-required="true" required data-parsley-required-message="Enter Family" class="form-control parsley-validated family_id" name="family_id" value="" id="famil_id">
                        	<input type="text" class="hide" name="familyid" value="" id="familyid">
      				</div>
                <div class="form_sep">
                  <label class="req" for="student_num">Student ID:</label><br/>
                  <!-- <label class="req" for="student_num">  &nbsp;&nbsp;TAE-ID</label> -->
                  <input type="text" data-required="true" value="<?php echo $this->std->getmaxid(); ?>" onblur='fillpwd(event);' required data-parsley-required-message="Enter Student ID" class="form-control parsley-validated" name="student_num" value="" id="student_num">
                </div> 
                <div class="form_sep hide">
                  <label class="req" for="student_num">  &nbsp;&nbsp;MoEYS-ID</label>
                  <input type="text" data-required="true" class="form-control parsley-validated" name="moeys_id" value="" id="moeys_id">
                </div>  
                <div class="form_sep">
                  <label class="req" for="student_num"> Student Card Number</label>
                  <input type="text" data-required="true"  onkeypress="enter(event);" onblur="submitcard(event)" class="form-control parsley-validated" name="student_card" value="" id="student_card">
                </div>  
                <div class="form_group">
                    <label class="req" for="classid">Temporary Card number</label>
                    <input type="text" name="tem_card" onblur="checkcard(event);"  class="form-control" placeholder="Temporary card" />
                  </div>
                <div class="form_group">
                    <label class="req" for="classid">Temporary Card Expired date</label>
                    <input type="text" name="expired_date"  class="form-control" placeholder="yyyy-mm-dd" />
          
                </div>
                <div class="form_sep">
                  	<label class="req" for="student_num"> Student Enroll Date</label>
            		<div data-date-format="dd-mm-yyyy" class="input-group date dob">
                  		<input type="text" data-required="true" class="form-control parsley-validated" value="<?php echo date('d-m-Y'); ?>" name="student_enroll_date" value="" id="student_enroll_date">
	              		<span class="input-group-addon"><i class="icon-calendar"></i></span> 
	              	</div>
                </div>     
                <div class="form_sep">
                	<label class="req" for="moeys_schlevelid">School Level</label>	
                 	<select class="form-control" id="moeys_schlevelid" name="moeys_schlevelid">
                   <?php 
                    echo $this->green->GetSchLevel(0,1,0)
                   ?>
                </select>
                </div>          
                <div class="form_sep">
                  <label class="req" for="classid">Class</label>
                  <select data-required="true" onchange="isvtc(event);" required data-parsley-required-message="Select Class" minlength='1' class="form-control parsley-validated" name="classid" id="classid">
                   
                    <option value="">Select Class</option>
                    <?php
                    	foreach ($this->std->getclass()->result() as $class) {?>
                    		<option value="<?php echo $class->classid ;?>" ><?php echo $class->class_name;?></option>
                    	<?php }
                    ?>
                  </select>
                </div>
                <div class="form_sep hide">
                    <label>School Term</label>
                    <select class="form-control" name="term" id="term">
                      <option value="">Select Term</option>
                      <?php 
                        $grade=$this->db->query("SELECT * FROM sch_term")->result();
                        foreach ($grade as $row) {
                          echo "<option value='$row->term_id'>$row->term_name</option>";# code...
                        }
                      ?>
                    </select>
                    
                </div>
                <div class="form_sep">
                  <label class="req" for="classid">Class Type</label>
                  <select data-required="true" min=1 required data-parsley-required-message="Select Class Type" minlength='1' class="form-control parsley-validated" name="class_type" id="class_type">
                   
                    <option value="">Select Class</option>
                    <option value="3">Full Day</option>
                    <option value="2">Full Time</option>
                    <option value="1">Part Time</option>
                   
                  </select>
                </div>
                <div class="form_sep payment_sep">
                  <label class="req" for="classid">Payment Type</label><br>
                  <?php 
                  	$pay=$this->db->query("SELECT * FROM sch_pay_paytype")->result();
                  	foreach ($pay as $type) {
                  		$che='';
                  		if($type->pay_type_id==1)
                  			$che='checked';
                  		echo " <label><input $che type='radio' name='rdpay_type' value='".$type->pay_type_id."'/> $type->payname</label><br>";# code...
                  	}
                   ?>
                </div>
               
               <!--  <div class="form_sep hide" id='promo_sep'>
                  <label class="req" for="classid">Promotion</label>
                  <select data-required="true" class="form-control parsley-validated" name="promot_id" id="promot_id">
                   
                    <option value="">----Select Promotion----</option>
                    <?php
                    	$school=$this->session->userdata('schoolid');
                    	foreach ($this->db->where('schoolid',$school)->get('sch_school_promotion')->result() as $pro) {?>
                    		<option value="<?php echo $pro->promot_id ;?>" ><?php echo $pro->proname;?></option>
                    	<?php }
                    ?>
                  </select>
                </div>    -->              
              </div>
              
              <div class="panel-heading">
                <h4 class="panel-title">Personal Details</h4>
              </div>
              <div class="panel-body">
              		<div class="form_sep">
	                  <label class="req" for="classid">Student</label>
	                  <select data-required="true" onchange="fillstudentinf(event);" required data-parsley-required-message="Select Class" minlength='1' class="form-control parsley-validated" name="student" id="student">
	                  	 <option value="">Select Student</option>
	                  </select>
	                </div>  
	          		<div class="form_sep">
		              <label class="req" for="last_name">Last Name</label>
		              <input type="text" readonly data-required="true" onblur='fillusername(event);' class="form-control parsley-validated" name="last_name" value="" id="last_name">
		           </div>
	               <div class="form_sep">
		              <label class="req" for="first_name">First Name</label>
		              <input type="text" readonly data-required="true" class="form-control parsley-validated" onblur='fillusername(event);' name="first_name" value="" id="first_name">
		           </div>
		           
		           <div class="form_sep">
		              <label class="req" for="last_name_kh">Last Name(Kh)</label>
		              <input type="text" readonly data-required="true" class="form-control parsley-validated"  name="last_name_kh" value="" id="last_name_kh">
		           </div>
		            <div class="form_sep">
		              <label class="req" for="last_name_kh">First Name(Kh)</label>
		              <input type="text" readonly data-required="true" class="form-control parsley-validated"  name="first_name_kh" value="" id="first_name_kh">
		           </div>
		           <div class="form_sep">
		              <label class="req">Date of Birth</label>
		              <div data-date-format="dd-mm-yyyy" class="input-group date dob">
		              <input type="text" readonly value="" data-type="dateIso"  data-required="true" class="form-control input_validate parsley-validated" id="dob" name="dob">
		              <span class="input-group-addon"><i class="icon-calendar"></i></span> </div>
		          </div>                
	                 <div class="form_sep">
	                 <label for="reg_input_name ">Nationality</label>
	                 <input type="text" data-type="dateIso" data-parsley-required-message="Choose Your nationality" data-required="true" class="form-control input_validate parsley-validated" id="nationality" name="nationality">
	              </div>       
                <div class="form_sep">
                  <label for="reg_input_name">Religion</label>
                  <input type="text" value="" class="form-control" data-parsley-required-message="Enter Religion" name="religion" id="religion">
                </div>
                      
             	<div class="form_sep">
                  <label class="req" for="comments">Comments</label>
                  <textarea data-required="true" class="form-control parsley-validated" name="comments" id="comments"></textarea>
                </div>
                <p></p>
                <div class="form_sep">
                  <!-- <label class="req" for="comments">Image</label> -->

                  <img src="<?php echo site_url('../assets/upload/No_person.jpg') ?>" id="uploadPreview" style='width:120px; height:150px; margin-bottom:15px; border:1px solid #CCCCCC'>
                  <input id="uploadImage" type="file" accept="image/*" name="userfile" onchange="PreviewImage();" style="visibility:hidden; display:none;" />
                  <input type='button' class="btn btn-success" onclick="$('#uploadImage').click();" value='Browse'/>
                </div>  
              </div>                           
              <div class="panel-heading hide">
                <h4 class="panel-title">Login Information</h4>
              </div>
              <div class="panel-body hide">
                <div class="form_sep">
                  <label class="req" for="login_username">User Name</label>                 
                  <input type="text" data-minlength-message="Username should have at least 5 characters." value="" data-required="true" onclick="get_stdregno();" class="form-control parsley-validated" name="login_username" id="login_username">
                </div>
                <div class="form_sep">
                  <label class="req" for="password">Password</label>
                  <input type="password" value="<?php echo $this->std->getmaxid(); ?>"  data-required-message="Please enter a valid Password"  data-minlength-message="Password should have at least 6 characters." data-minlength="6" data-required="true" onclick="get_dob();" class="form-control parsley-validated" name="password" id="password">
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
	                  <textarea data-required="true" readonly class="form-control parsley-validated" name="permanent_adr"  id="permanent_adr"></textarea>
	                </div>
	                <div class="form_sep hide">
	                  <label class="req" for="province">Province</label>
	                  <input type="text" readonly value="" data-required="true" class="form-control parsley-validated" name="province" id="province">
	                </div>
	                <div class="form_sep hide">
	                  <label class="req" for="district">District</label>
	                  <input type="text" readonly value="" data-required="true" class="form-control parsley-validated"  name="district" id="district">
	                </div>
	                <div class="form_sep hide">
	                  <label class="req" for="commune">Commune</label>
	                  <input type="text" readonly value="" data-type="number" data-required="true" class="form-control parsley-validated" name="commune" id="commune">
	                </div>
	                <div class="form_sep hide">
	                  <label class="req"  for="village">Village</label>
	                  <input type="text" readonly data-type="dateIso"  data-required="true" class="form-control input_validate parsley-validated" id="village" name="village">
	                </div>
	                <div class="form_sep">
	                  <label class="req" for="phone1">Phone</label>
	                  <input type="text" readonly data-type="phone" onkeypress='return isNumberKey(event);' value="" data-required="true"  class="form-control parsley-validated" name="phone1" id="phone1">
	                </div>                
	                <div class="form_sep">
	                  <label class="req" for="reg_input_currency">Email</label>
	                  <input type="email"  data-parsley-type="email" data-type="email" value="" data-required="true"  class="form-control parsley-validated" name="email" id="email">
	                </div>
	                <div class="form_sep">
	                  <label class="req" for="phone1">Zone</label>
	                  <input type="text" readonly data-type="phone" value="" data-required="true" class="form-control parsley-validated" name="zoon" id="zoon">
	                </div>                 
	                <div class="form_sep">
	                  <label class="req" for="from_school">Distance from school</label>
	                  <input type="text" readonly data-required="true" onkeypress='return isNumberKey(event);' data-parsley-required-message="Enter Distance from school" class="form-control parsley-validated" name="from_school" id="from_school">                  
	                </div> 
	                <div class="form_sep">
	                  <label class="req" for="measure">Measure</label>
	                  <input type="text" readonly data-required="true" value='' class="form-control parsley-validated" id="measure" name="measure"> 
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
	                	<input type="checkbox" onclick="is_leave(event);" name="leave_school" id='leave_school' value="1" />		
	                  	<label class="req" for="leave_school">Leave School</label>                 
	                </div>
	                <div class="form_sep leave">
  		              <label class="req">Leave School Date</label>
  		              <div data-date-format="dd-mm-yyyy" class="input-group date dob">
  		              <input type="date" data-type="dateIso" data-required="true" class="form-control input_validate parsley-validated" id="leave_sch_date" name="leave_sch_date">
  		              <span class="input-group-addon"><i class="icon-calendar"></i></span> </div>
  		         	</div>
	                <div class="form_sep leave">
	                  <label class="req" for="leave_reason">Leave School Reason</label>
	                  <input type="text" data-required="true" class="form-control parsley-validated" name="leave_reason" id="leave_reason">                  
	                </div> 
	                 
	                <div class="form_sep">
	                  <label class="req" for="family_revenue">Family Revenue</label>
	                  <input type="text" data-required="true" onkeypress='return isNumberKey(event);' class="form-control parsley-validated" name="family_revenue" id="family_revenue">                  
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
									<th >Full Name kh </th>
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
									<th >First Name kh</th>
									<th >Last Name kh </th>
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

<script type="text/javascript">
function checkcard(event){
    var card_number=$(event.target).val();
    var studentid='';
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
$("#std_reg_submit").click(function(){
    var student_num=$('#student_num').val();
    $.ajax({
              url:"<?php echo base_url(); ?>index.php/student/student/getstdbyid",    
              data: {'std_num':student_num},
              type:"post",
              success: function(data){
              if(data==1){
               var errors='Student ID :'+ student_num+' is already used please choose other ID';
                $('.error').html(errors);
                alert(errors);
                // $('#student_num').val(''); 
              }else{
                $("#std_register").submit();
              }
          }
      });
})
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
		var student_id='';
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

	$('.year').val($('#year').val());
	is_leave();
	$('#year').change(function(){
		$('.year').val($('#year').val());
	});
	$(".payment_sep ul").remove();
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
	function is_leave(event){
		if($("#leave_school").is(':checked')){
			$('.leave').removeClass('hide');

		}else{
			$('.leave').addClass('hide');
		}
	}
	function previewstudent(event){
				var year=$(event.target).attr('year');
				var yearid=$(event.target).attr('yearid');
				var student_id=jQuery(event.target).attr("rel");
				window.open("<?PHP echo site_url('student/student/preview');?>/"+student_id+"?yearid="+yearid,"_blank");
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
	
	// function isvtc(event){

	// 	var classid=$(event.target).val();
	// 	$.ajax({
 //                    url:"<?php echo base_url(); ?>index.php/student/student/getschlevel",    
 //                    data: {'classid':classid},
 //                    type:"post",
 //                    success: function(data){
 //                   	if(data==4){
 //                   		$('#promo_sep').removeClass('hide');
 //                   		var familyid=$('#familyid').val();
 //                   		if(familyid!='')
 //                   			fillstudent(familyid);
                   		
 //                   	}else{
 //                   		$('#promo_sep').addClass('hide');
 //                   	}
 //                }
 //            });
	// }
	function fillpwd(event){
		var student_num=$('#student_num').val();
		// var student_num=$(event.target).val();
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
             		$('#password').val(student_num);
             		$('.error').html('');
             	}
          }
      });
	}
	
	$(function(){
		$('#std_register').parsley();
		autofillfamily();
		$("input[name='expired_date'],.res_dob,.mem_dob,#leave_sch_date,#student_enroll_date").datepicker({
      		language: 'en',
      		pick12HourFormat: true,
      		format:'dd-mm-yyyy'
    	});
	});
	function fillrevenue(familyid){
		//var familyid=$(event.target).val();
		if(familyid>0){
					$.ajax({
                            url:"<?php echo base_url(); ?>index.php/student/student/getfamilyrow",    
                            data: {
                                'familyid':familyid},
                            type:"post",
							dataType:"json",
                            async:false,
                            success: function(data){
                            	$('#province').val(data.province);
                            	$('#commune').val(data.commune);
                            	$('#district').val(data.district);
                            	$('#village').val(data.village);
                            	$('#phone1').val(data.tel);
                            	$('#zoon').val(data.zoon);
                            	$('#permanent_adr').val(data.permanent_adr);
                          		$('#family_revenue').val(data.revenue);
                          		$('#from_school').val(data.from_school);
                          		$('#measure').val(data.measure);
                          		$("#listparent").html("<tr>"+
                          									"<td>"+data.father_name+"</td>"+
                          									"<td>"+data.father_name_kh+"</td>"+
                          									"<td>Male</td>"+
                          									"<td>"+data.father_dob+"</td>"+
                          									"<td> Father's Child </td>"+
                          									"<td>"+data.father_ocupation+"</td>"+
                          									"<td>"+data.father_revenu+"</td>"+
                          									
                          								"</tr>"+
                          								"<tr>"+
                          									"<td>"+data.mother_name+"</td>"+
                          									"<td>"+data.mother_name_kh+"</td>"+
                          									"<td>FeMale</td>"+
                          									"<td>"+data.mother_dob+"</td>"+
                          									"<td> Mother's Child </td>"+
                          									"<td>"+data.mother_ocupation+"</td>"+
                          									"<td>"+data.mother_revenu+"</td>"+
                          									
                          								"</tr>");
                          		fillstudent(familyid);
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
                            	// alert(data.dob);
                            	$('#last_name').val(data.last_name);
                            	$('#first_name').val(data.first_name);
                            	$('#last_name_kh').val(data.last_name_kh);
                            	$('#first_name_kh').val(data.first_name_kh);
                            	$('#dob').val(convertSQLDate(data.dob));
                            	fillusername();
                            	getlistmember(familyid,memberid);
                        }
                   });
	}
	function getlistmember(familyid,memberid){
				$.ajax({
                            url:"<?php echo base_url(); ?>index.php/student/student/getmemberstudent",    
                            data: {
                                'familyid':familyid,
                                'memberid':memberid},
                            type:"post",
                            success: function(data){
                            	//alert(data);
                          		$("#listmember").html(data);
								$('#liststdlink').html(getstdlink(familyid));
									
                        }
                   });
				
	}
	function getstdlink(familyid){
		var count;
		$.ajax({
				     url:"<?php echo base_url(); ?>index.php/student/student/getstdlink",    
				     data: {'familyid':familyid,'studentid':0},
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
    	$(".family_id").autocomplete({
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
</script>
	
		
	
