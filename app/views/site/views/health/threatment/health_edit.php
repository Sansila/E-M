
<style type="text/css">
	.hiddenable{
		display: none;
	}
	ul,ol{
		margin-bottom: 0px !important;
	}
	a{
		cursor: pointer;
	}
	.ui-autocomplete{z-index: 9999;}
	.datepicker {z-index: 9999;}
</style>
<?php
	if ($query['patient_type']=='student') {
		$position='Student';
		$sex='Female';
		$patient=$this->db->query("SELECT * 
								FROM v_student_profile 
								Where studentid='$query[patientid]'
								AND yearid='$query[yearid]' 
								")->row();
		$class=$this->green->getValue("SELECT class_name FROM sch_class WHERE classid='".$query['classid']."'");
	}else{
		$patient=$this->db->query("SELECT * 
								FROM sch_emp_profile emp
								INNER JOIN sch_emp_position emp_p
								ON(emp.pos_id=emp_p.posid) 
								Where emp.empid='$query[patientid]'
								")->row();
		$position=$patient->position;
		$class='';
		$sex=$patient->sex;
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
<div class="wrapper">
	<div class="clearfix" id="main_content_outer">
	    <div id="main_content">
	      	<div class="result_info">
				      	<div class="col-sm-6">
				      		<strong>Threatment Information</strong>
				      		
				      	</div>
				      	<div class="col-sm-6" style="text-align: center">
				      		<strong>
				      			<center class='error' style='color:red;'><?php if(isset($error)) echo "$error"; ?></center>
				      		</strong>	
				      	</div>
			</div> 
	      <!-- main content -->
	       <form enctype="multipart/form-data" id='frmtreatment' action="<?php echo base_url()."index.php/health/threatment/save?m=$m&p=$p"; ?>" method="POST">
			        <div class="row">
						<div class="col-sm-6">
				            	<div class="panel panel-default">
				            		<div class="panel-heading">
						               <h4 class="panel-title">Patient Details 
											<label style="float:right !important; font-size:11px !important; color:red;"><?php if(isset($query['modified_by'])) if($query['modified_by']!='') echo "Last Modified Date: ".date_format(date_create($query['modified_date']),'d-m-Y H:i:s')." By : $query[modified_by]"; ?></label>	
						               		
						               </h4>
						        	</div>
					          		<div class="panel-body">
					          			 <div class="form_sep hide">
						                   <label class="req" for="student_num">treatmentid</label>
						                   <input type="text" value='<?php echo $query['treatmentid'] ?>' name="treatmentid" id="treatmentid"  class="form-control" />	
						                </div>
					          			<div class="form_sep">
									        <label class="req" for="student_num">Date</label>
									        <div class='input-group date' id='datetimepicker'>
											    <input type='text' value='<?php echo $this->green->formatSQLDate($query['date']) ?>'  required  data-parsley-required-message="Enter Date"  id="date" class="form-control" name="date"/>
											    <span class="input-group-addon"><span class="glyphicon glyphicon-calendar">
											</div>	
									    </div>
									    <div class="form_sep">
						                   <label class="req" for="student_num">Medician</label>
						                   <select data-required="true"  required  data-parsley-required-message="Select Doctor"  minlength='1' class="form-control parsley-validated" name="doctor" value="" id="doctor" >
							                   <option value="">Select Medician</option>
							                   <?php 
							                   	foreach ($this->threatments->getdoctor() as $row) { ?>
							                   		<option value='<?php echo $row->empid; ?>'<?php if($row->empid==$query['doctorid']) echo "selected"; ?>><?php echo $row->first_name.' '.$row->last_name ?></option>
							                   <?php 	}
							                   ?>
				                  			</select>	
						                </div>
					            		<div class="form_sep">
						                  	<label class="req" for="student_num">Patient</label>
						                 	<select data-required="true" class="form-control parsley-validated"  required  data-parsley-required-message="Enter Patient Type" minlength='1' name="patient_type" value="" id="patient_type" >
							                   <option value="">Select Patient</option>
							                   <option value="emp" <?php if($query['patient_type']=='emp') echo 'selected' ?>>Employee</option>
							                   <option value="student"  <?php if($query['patient_type']=='student') echo 'selected' ?>>Student</option>
				                  			</select>
							            </div>
							            <div class="form_sep hide" id="emp_sep">
						                   <label class="req" for="student_num">Employee</label>
						                   <input type="text" value='<?php echo $patient->first_name ." ".$patient->last_name; ?>' name="emplyee" id="emplyee"  class="form-control" />	
						                </div>
						                <div class="form_sep hide" id='std_sep'>
						                   <label class="req" for="student_num">Student</label>
						                   <input type="text"  value='<?php echo $patient->first_name ." ".$patient->last_name; ?>' name="student" id="student"  class="form-control" />	
						                </div>
						                 <div class="form_sep hide">
						                   <label class="req" for="student_num">patientid</label>
						                   <input type="text"  value='<?php echo $query['patientid'] ?>'  name="patientid" id="patientid"  required  data-parsley-required-message=""   class="form-control" />	
						                </div>
					            		<div class="form_sep ">
						                   <label class="req" for="student_num">Sex</label>
						                   <input type="text"  value='<?php echo $sex; ?>' readonly name="sex" id="sex"  class="form-control" />	
						                </div>
						               <div class="form_sep">
						                  <label class="req" for="student_num">Date of Birth</label>
						                   <input type="text"  value='<?php echo $this->green->formatSQLDate($patient->dob); ?>' readonly name="dob" id="dob"  class="form-control" />	
						                </div>
									    <div class="form_sep">
							                  <label class="req" for="student_num">Position</label>
							                  <input type="text"  value='<?php echo $position; ?>' readonly data-required="true"  value="" class="form-control parsley-validated" name="position" value="" id="position" >
							            </div>
							            <div class="form_sep">
							                  <label class="req" for="student_num">Class</label>
							                  <input type="hidden" id="classid" name="classid" value="<?php echo $query['classid'] ?>" />
							                  <input type="text"  value='<?php echo $class; ?>' readonly data-required="true" value="" class="form-control parsley-validated" name="class" value="" id="class">
							            </div>
							            
							            <div class="form_sep">
						                	<input type="checkbox" name="external_hospital" id='external_hospital' <?php if($query['is_internal_treat']=='0') echo 'checked' ?> value='0'/>		
						                  	<label class="req" for="leave_school">External Hospital</label>                 
						                </div>
						                <div class="form_sep hide" id='hospital'>
							                  <label class="req" for="student_num">Hospital Name</label>
							                  <input type="text" data-required="true" value='<?php echo $query['external_hospital']; ?>' class="form-control parsley-validated" name="external_hospital" value="" id="external_hospital">
							            </div>
							            <div class="form_sep">
						                  <label for="reg_input_logo">Upload Photo</label>
						                  <input type="file" class=""  name="userfile" class="userfile">
						                </div>  
						            </div>
						        </div>
						</div>
						<div class="col-sm-6">
				            <div class="panel panel-default">
				            		<div class="panel-heading">
						               <h4 class="panel-title">Disease Details </h4>
						            </div>
					          		<div class="panel-body">
						                <div class="form_sep">
							                <label class="req" for="student_num">Consultation</label>
							                <select data-required="true" class="form-control parsley-validated" name="consultation" value="" id="consultation" >
							                   <option value="">Select Consultation</option>
							                   <option value="gr">General</option>
							                   <option value="sp">Special</option>
					                  		</select>
							            </div>
							            <div class="form_sep" id="illness_sep">
							                <label class="req" for="student_num">Illness Type</label>
							                <select onchange="getdisease(event);" data-required="true" class="form-control parsley-validated" name="illness_type" value="" id="illness_type" >
							                   <option value="">Select illness</option>
					                  		</select>
							            </div>
							            <div class="form_sep">
							                <label class="req" for="student_num" id='lbldiseas'>Disease</label>
							                <select data-required="true" class="form-control parsley-validated" name="disease" value="" id="disease" >
							                   <option value="">Select Disease</option>
					                  		</select>					                  		
							            </div>
							            <div class="form_sep hiddenable">
							                <label class="req" for="sponfree">Specialize on Free Text</label>
							                <input type="text" class="form-control" name="sponfree" value="" id="sponfree" />							                   				                  		
							            </div>
							        </div>
							        <div class="panel-body">
							            <div class="form_sep">
							              <button id="add_disease" name="add_disease" type="button" class="btn btn-success">Add</button>
							            </div>
							        </div>
						            
					        </div>
					    </div>
				        <div class="col-sm-6">
				            	<div class="panel panel-default">
				            		<div class="panel-heading">
						               <h4 class="panel-title">Disease List </h4>
						            </div>
					          		<div class="panel-body">
					            		<div class="form_sep">
						                  		<div class='table-responsive'>
								                   	<table class='table'>
								                   		<thead>
								                   			<th>Disease/Specailize on</th>
								                   			<th>Consultation</th>
								                   			<th width="60">Delete</th>
								                   		</thead>
								                   		<tbody id='listdisease'>
								                   			<?php
								                   				foreach ($this->threatments->gettreatdisease($query['treatmentid']) as $disease) {
								                   					$con='Special';
								                   					if($disease->illness_typeid!=""){
																		$consult=$this->db->query("SELECT type_of_consultation FROM sch_medi_illness_type WHERE illness_typeid='".$disease->illness_typeid."'")->row();
									                   					if($consult->type_of_consultation=='gr') $con='General';
									                   				}								                   					

								                   					echo "
								                   							<tr>
								                   								<td>
								                   									<input class='hide' type='text' value='$disease->diseaseid' id='diseaseid' name='diseaseid[]'/>
								                   									<input class='hide' type='text' value='$disease->sponfree' id='sponfrees' name='sponfrees[]'/>
								                   									".($disease->disease==""?$disease->sponfree:$disease->disease)."
								                   									</td>
								                   								<td>$con</td>
								                   								<td>
																		    		<a>
																		    			<img onclick='removerow(event);' src='".base_url()."assets/images/icons/delete.png' />
																		    		</a>
																		    	</td>
								                   							</tr>
								                   						";

								                   				}
								                   			?>
								                   		</tbody>
								                   	</table>
								                </div>	
						                </div>
						            </div>
						        </div>
						</div>
						<div class="col-sm-6">
				            	<div class="panel panel-default">
				            		<div class="panel-heading">
						               <h4 class="panel-title">Visited Details</h4>
						            </div>
					          		<div class="panel-body">
					            		<div class="form_sep">
									        <label class="req" for="student_num">Next Visit Date</label>
									        <div class='input-group date' id='datetimepicker'>
											    <input  value='<?php echo $this->green->formatSQLDate($query['next_visit_date']); ?>'  type='text' id="next_visit_date" class="form-control" name="next_visit_date"/>
											    <span class="input-group-addon"><span class="glyphicon glyphicon-calendar">
											</div>	
									    </div>
						            </div>
						        </div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
				            	<div class="panel panel-default">
				            		<div class="panel-heading">
						               <h4 class="panel-title">Medicine </h4>
						            </div>
					          		<div class="panel-body">
					            		<div class="form_sep">
						                  		<div class='table-responsive'>
								                   	<table class='table'>
								                   		<thead>
								                   			<th>Medicine Name</th>
								                   			<th>Expire Date</th>
								                   			<th>Quantity</th>
								                   			<th>Number of days</th>
								                   			<th>Amount per day</th>
								                   			<th>Amount per times</th>
								                   			<th>Comment</th>
								                   			<th width="60">Delete</th>
								                   			<th>
								                   				<a>
													    			<img data-toggle="modal" class='btnaddmidi' data-target="#addmedicine" src="<?php echo base_url().'assets/images/icons/add.png'?>" />
													    		</a>
								                   			</th>
								                   		</thead>
								                   		<tbody id='listmedicine'>
							                   				<?php
							                   				foreach ($this->threatments->gettreatmidecinegroup($query['treatmentid']) as $medicine) {
							                   					// $consult=$this->db->query("SELECT type_of_consultation FROM sch_medi_illness_type WHERE illness_typeid='".$disease->illness_typeid."'")->row();
							                   					// if($consult->type_of_consultation=='gr')
							                   					// 	$con='General';
							                   					// else
							                   					// 	$con='Special';
							                   					foreach ($this->threatments->getstocktreat($medicine->treatmentid,$medicine->stockid) as $rows) {
							                   						
								                   					echo "<tr>
																			<td><input class='hide' type='text' value='".$rows->stockid."' id='r_stockid' name='r_stockid[]'/>".$medicine->descr_eng."</td>
																			<td><input class='hide' type='text' value='".$this->green->formatSQLDate($rows->expire_date)."' id='r_expire_date' name='r_expire_date[]'/>".$this->green->formatSQLDate($rows->expire_date)."</td>
																			<td><input class='hide' type='text' value='".$rows->qty."' id='r_qty' name='r_qty[]'/>".$rows->qty."</td>
																			<td><input class='hide' type='text' value='".$medicine->days_use."' id='r_day_use' name='r_day_use[]'/>".$medicine->days_use."</td>
																			<td><input class='hide' type='text' value='".$medicine->perday_use."' id='r_perday_use' name='r_perday_use[]'/>".$medicine->perday_use."</td>
																			<td><input class='hide' type='text' value='".$medicine->pertimes_use."' id='r_pertime_use' name='r_pertime_use[]'/>".$medicine->pertimes_use."</td>
																			<td><input class='hide' type='text' value='".$medicine->note."' id='r_note' name='r_note[]'/>".$medicine->note."</td>
																			<td class='hide'><input type='text' value='".$medicine->uom."' id='r_uom' name='r_uom[]'/></td>
																			<td class='hide'><input  type='text' value='".$query['whcode']."' id='r_whcode' name='r_whcode[]'/></td>
																			<td>
																	    		<a>
																	    			<img onclick='removerow(event);' src='".base_url()."assets/images/icons/delete.png' />
																	    		</a>
																	    	</td>
																		</tr>";
																		$medicine->descr_eng='';
																		$medicine->days_use='';
																		$medicine->perday_use='';
																		$medicine->pertimes_use='';
																		$medicine->note='';

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
					</div>
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
<!--++++++++++++++++++++++++++++++++++++++++++++++End Form add Member+++++++++++++++++++++++++++++++++++++++++++++++++++ -->
<div class="modal fade" id="addmedicine" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="wrapper">
				<div class="clearfix" id="main_content_outer">
				    <div id="main_content">
					    <div class="result_info">
					    	<div class="col-sm-6">
					      		<strong>Medicine Infomation</strong>
					      	</div>
					      	<div class="col-sm-6" style="text-align: center">
					      		<strong>
					      			<center class='medicine_error' style='color:red;'></center>
					      		</strong>	
					      	</div>
					    </div>
					      	<form enctype="multipart/form-data" name="frmmedicine" id="frmmedicine" method="POST">
						        <div class="row">
									<div class="col-sm-6">
										<div class="panel-body">
								            <div class="form_sep">
								                <label class="req" for="student_num">Medicine Category</label>
			                 					<select data-required="true"   data-parsley-required-message="Select Medicine Category" minlength='1' class="form-control parsley-validated" name="medicine_category" id="medicine_category" >
								                   <option value="">Select Category</option>
								                   <?php 
								                   	foreach ($this->threatments->getmidicat() as $row) {
								                   		echo "<option value='$row->categoryid'>$row->description</option>";
								                   	}
								                   ?>
					                  			</select>
							                </div>
							                <div class="form_sep">
								                <label class="req" for="student_num">Where house</label>
			                 					<select data-required="true"   data-parsley-required-message="Select Medicine Category" minlength='1' class="form-control parsley-validated" name="whcode" id="whcode" >
								                  <!--  <option value="">Select Where House</option> -->
								                   <?php 
								                   	foreach ($this->db->get('sch_stock_wharehouse')->result() as $rows) {
								                   		echo "<option value='$rows->whcode'>$rows->wharehouse</option>";
								                   	}
								                   ?>
					                  			</select>
							                </div>
							                <div class="form_sep">
							                  <label class="req" for="student_num">Medicine Name</label>
							                  <input type="text" data-required="true" value="" class="form-control parsley-validated" name="a_medicine" value="" id="a_medicine">
							            	  <input type='text' class='hide' name='medicine' id='medicine'/>
							            	</div>
							                 <div class="form_sep"><!-- 
								                <label class="req" for="student_num">Expired Date</label> -->
								                <div class='table-responsive'>
								                   	<table class='table'>
								                   		<thead>
								                   			<th>Expired Date</th>
								                   			<th>Qty</th>
								                   			<th>Qty on hand</th>
								                   			<th>UOM</th>
								                   		</thead>
								                   		<tbody id='lisexpire'>
								                   			
								                   		</tbody>
								                   	</table>
								                </div>	
								            </div>
							                <!-- <div class="form_sep">
							                 	<label class="req" for="student_num">Expire Date</label>
			                 					<select data-required="true"  onchange="getuom(event);"  class="form-control parsley-validated" required  data-parsley-required-message="Select Expire Date" minlength='1' name="expire_date" value="" id="expire_date" >
								                   <option value="">Select Expire Date</option>
					                  			</select>
								            </div>
								             <div class="form_sep">
								                  <label class="req" for="student_num">Quantity</label>
								                  <input type="text" onkeypress='return isNumberKey(event);' data-required="true" required  data-parsley-required-message="Enter Quantity" class="form-control parsley-validated" name="qty" value="" id="qty">
								            </div>
								             <div class="form_sep">
								                  <label class="req" for="student_num">UOM</label>
								                  <input type="text" readonly data-required="true" class="form-control parsley-validated" name="uom" value="" id="uom">
								            </div> -->
							            </div>
								    </div>
								    <div class="col-sm-6">
								    	<div class="panel-body">
								    		 <div class="form_sep">
								                <label class="req" for="student_num">Number of day</label>
								                <input type="text" onkeypress='return isNumberKey(event);'  data-required="true" value="" class="form-control parsley-validated" name="day_use" value="" id="day_use">
								            </div>
								            <div class="form_sep">
								                <label class="req" for="student_num">Amount per day</label>
								                <input type="text"  data-required="true" value="" class="form-control parsley-validated" name="perday_use" value="" id="perday_use">
								            </div>
								            <div class="form_sep">
								                <label class="req" for="student_num">Amout per times</label>
								                <input type="text"  data-required="true" value="" class="form-control parsley-validated" name="pertime_use" value="" id="pertime_use">
								            </div>
								            <div class="form_sep">
							                  	<label class="req" for="reg_input_name">Comment</label>
							                  	<textarea data-required="true" class="form-control parsley-validated" name="comment"  data-parsley-required-message="Enter Permanent Address" id="comment"></textarea>
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
                <button type="button" id='btnaddmedicine' class="btn btn-primary">Add</button>
            </div>
        </div>                       <!-- /.modal-content -->
    </div>
                                <!-- /.modal-dialog -->
</div>
<script type="text/javascript">
	changpatient();
	if($("#external_hospital").is(':checked'))
			$("#hospital").removeClass('hide');
		else
			$("#hospital").addClass('hide');
	$(function(){
		autofillemp();
		autofillstd();
		$("#a_medicine").focus(function(){
			autofillmedicine();
		});
		$("#frmmedicine").parsley();
		$("#frmtreatment").parsley();
		$("#date,#next_visit_date").datepicker({
      		language: 'en',
      		pick12HourFormat: true,
      		format:'dd-mm-yyyy'
    	});
	});

	function culculateqty(event){
		var s_qty=$(event.target).closest('tr').find('#s_qty').text();
		var qty=$(event.target).val();
		var allowstocknegative=true;
		if(allowstocknegative==true){
			if(Number(qty)>Number(s_qty)){
				var r = confirm("stock have not enougth Quantity ! do you want to continue ?");
				if (r == true) {
				} else {
				    $(event.target).val(s_qty);
				}
			}
		}else{
			if(Number(qty)>Number(s_qty))
			 	$(event.target).val(s_qty);
		}
	}
	$("#add_disease").click(function(){
		adddisease();
	})
	$("#medicine_category").change(function(){
		var catid=$(this).val();
		$.ajax({
                url:"<?php echo base_url(); ?>index.php/health/threatment/getmedicine",    
                data: {'catid':catid},
                type:"post",
                success: function(data){
                	$('#medicine').html(data);
            }
        });
	})

	$("#consultation").change(function(){
		var consult=$(this).val();
		if(consult!='sp'){
			$("#illness_sep").removeClass('hide');
			$("#lbldiseas").html("Disease");
			$.ajax({
                url:"<?php echo base_url(); ?>index.php/health/threatment/getillness",    
                data: {'consult':consult},
                type:"post",
                success: function(data){
                	$('#illness_type').html(data);
                	$('#disease').html("<option value=''>Select Disease</option>");
            	}
        	});

		}else{
			$("#illness_sep").addClass('hide');
			$("#lbldiseas").html("Specialize on ");
			$.ajax({
			                url:"<?php echo base_url(); ?>index.php/health/threatment/getdisease",    
			                data: {'illnessid':'10'},
			                type:"post",
			                success: function(data){
			                	$('#disease').html(data);
			            }
			        });
		}
		
	})
	$("#disease").change(function(){
		var disease=$(this).val();		
		if(disease=="freetext"){
			$(".hiddenable").show();
		}else{
			$(".hiddenable").hide();
		}
	});
	function getdisease(event){
		var illnessid=$(event.target).val();
		$.ajax({
                url:"<?php echo base_url(); ?>index.php/health/threatment/getdisease",    
                data: {'illnessid':illnessid},
                type:"post",
                success: function(data){
                	$('#disease').html(data);
            }
        });
	}
	function getexpiredate(medi_id,whcode){
		$.ajax({
                url:"<?php echo base_url(); ?>index.php/health/threatment/getexpire",    
                data: {'stockid':medi_id,'whcode':whcode},
                type:"post",
                success: function(data){
                	$('#lisexpire').html(data);
            }
        });
	}
	function getuom(event){
		var ex_date=$(event.target).val();
		var stockid=$('#medicine').val();
		$.ajax({
                url:"<?php echo base_url(); ?>index.php/health/threatment/getuom",    
                data: {'ex_date':ex_date,'stockid':stockid},
                type:"post",
                success: function(data){
                	$('#uom').val(data);
            }
        });
	}
	$("#btnaddmedicine").click(function(){
		$('#frmmedicine').submit();
	})
	$('#frmmedicine').submit(function(e) { 
	    e.preventDefault();	        
	    if ( $(this).parsley().isValid() ) {
	        addmedicine();
	    }
	})
	$('#patient_type').change(function(){
		clearpatient();
		changpatient();

	});
	function changpatient(){
		var type=$('#patient_type').val();
		if(type=='student'){
			$('#std_sep').removeClass('hide');
			$('#emp_sep').addClass('hide');
		}else{
			$('#std_sep').addClass('hide');
			$('#emp_sep').removeClass('hide');
		}
	}
	function clearpatient(){
		$('#student').val('');
		$('#sex').val('');
		$('#dob').val('');
		$('#position').val('');
		$('#class').val('');
		$('#emplyee').val('');

	}
	function removerow(event){
		var row_class=$(event.target).closest('tr').remove();
		
	}
	$("#external_hospital").click(function(){
		if($("#external_hospital").is(':checked'))
			$("#hospital").removeClass('hide');
		else
			$("#hospital").addClass('hide');

	})
	function adddisease(){
		var diseaseid=$('#disease').val();
		var exist=false;
		$('#listdisease tr').each(function(){
			var c_disease=$(this).find('#diseaseid').val();
			if(c_disease==diseaseid){
				exist=true;
				$('.error').html('Data is already Exist...!');
				
			}
		})
		addrowdisease(exist);
	}
	function addmedicine(){
		var medicine=$('#medicine').val();
		var exist=false;
		$('#listmedicine tr').each(function(){
			var c_medicine=$(this).find('#r_stockid').val();
			if(c_medicine==medicine){
				exist=true;
				$('.medicine_error').html('Data is already Exist...!');
			}
		})
		addrowmedicine(exist);
		// $('#frmmedicine')[0].reset();
	}
	function addrowdisease(exist){
		var diseaseid=$('#disease').val();
		var consultation=$('#consultation :selected').text();
		var illness=$('#illness_type :selected').text();
		var diseas=$('#disease :selected').text();
		var sponfree=$('#sponfree').val();
		if(diseas=="Free Text"){
			diseas=sponfree;
		}
		if(exist==false){
			$('#listdisease').append("<tr>"+
								"<td><input class='hide' type='text' value='"+diseaseid+"' id='diseaseid' name='diseaseid[]'/>"+
								"<input class='hide' type='text' value='"+sponfree+"' id='sponfrees' name='sponfrees[]'/>"+diseas+"</td>"+								
								"<td>"+consultation+"</td>"+
								"<td>"+
						    		"<a>"+
						    			"<img onclick='removerow(event);' src='<?php echo base_url() ?>assets/images/icons/delete.png' />"+
						    		"</a>"+
						    	"</td>"+
							"</tr>");
			$('.medicine_error').html('');
		}
	}
	function addrowmedicine(exist){
		var stockid=$('#medicine').val();
		var stockname=$('#a_medicine').val();
		var perday_use=$('#perday_use').val();
		var pertime_use=$('#pertime_use').val();
		var day_use=$('#day_use').val();
		var whcode=$('#whcode').val();
		var note=$('#comment').val();
		if(exist==false){
			$('.expiredrow').each(function(){
				var expire_date=$(this).find('#expired_date').text();
				var qty=$(this).find('#qty').val();
				var uom=$(this).find('#uom').text();
				if(qty!='' && qty!=0){
					$('#listmedicine').append("<tr>"+
												"<td><input class='hide' type='text' value='"+stockid+"' id='r_stockid' name='r_stockid[]'/>"+stockname+"</td>"+
												"<td><input class='hide' type='text' value='"+expire_date+"' id='r_expire_date' name='r_expire_date[]'/>"+expire_date+"</td>"+
												"<td><input class='hide' type='text' value='"+qty+"' id='r_qty' name='r_qty[]'/>"+qty+"</td>"+
												"<td><input class='hide' type='text' value='"+day_use+"' id='r_day_use' name='r_day_use[]'/>"+day_use+"</td>"+
												"<td><input class='hide' type='text' value='"+perday_use+"' id='r_perday_use' name='r_perday_use[]'/>"+perday_use+"</td>"+
												"<td><input class='hide' type='text' value='"+pertime_use+"' id='r_pertime_use' name='r_pertime_use[]'/>"+pertime_use+"</td>"+
												"<td><input class='hide' type='text' value='"+note+"' id='r_note' name='r_note[]'/>"+note+"</td>"+
												"<td class='hide'><input class='hide' type='text' value='"+uom+"' id='r_uom' name='r_uom[]'/></td>"+
												"<td class='hide'><input class='hide' type='text' value='"+whcode+"' id='r_whcode' name='r_whcode[]'/></td>"+
												"<td>"+
										    		"<a>"+
										    			"<img onclick='removerow(event);' src='<?php echo base_url() ?>assets/images/icons/delete.png' />"+
										    		"</a>"+
										    	"</td>"+
											"</tr>");
					stockname='';
					perday_use='';
					pertime_use='';
					day_use='';
					note='';
				}
			})
				
			$('.error').html('');
			 setTimeout(function(){
			    $('#frmmedicine')[0].reset();
			     $('#lisexpire').html('');
			  },300);
		}
		return false;
	}
	$('#whcode').change(function(){
		var whcode=$(this).val();
		var stockid=$('#medicine').val();
		if(stockid!='')
			getexpiredate(stockid,whcode);
	})
	function autofillmedicine(){	
		var cat_id=$('#medicine_category').val();
		var whcode=$('#whcode').val();
		if(cat_id=='')
			cat_id=0;
		// alert(cat_id);
		var fillmedicine="<?php echo site_url('health/threatment/fillmedicine/"+cat_id+"')?>";
    	$("#a_medicine").autocomplete({
				source: fillmedicine,
				minLength:0,
				select: function( events, ui ) {
				var stockid=ui.item.id;
				$('#medicine').val(stockid);
					getexpiredate(stockid,whcode);
				}			
			});
	}
	function autofillemp(){		
		var fillemp="<?php echo site_url("health/threatment/fillemp")?>";
    	$("#emplyee").autocomplete({
				source: fillemp,
				minLength:0,
				select: function( events, ui ) {	
					$('#patientid').val(ui.item.id);
					$('#dob').val(convertSQLDate(ui.item.dob));	
					$('#sex').val(ui.item.sex);
					$('#position').val(ui.item.position);	
				}			
			});
	}
	function autofillstd(){		
		var fillstd="<?php echo site_url("health/threatment/fillstd")?>";
    	$("#student").autocomplete({
				source: fillstd,
				minLength:0,
				select: function( events, ui ) {	
					$('#patientid').val(ui.item.id);
					$('#dob').val(convertSQLDate(ui.item.dob));	
					$('#sex').val(ui.item.sex);
					$('#class').val(ui.item.position);
					$('#classid').val(ui.item.classid);
					$('#position').val('Student');	
				}			
			});
	}
	function getstdbyfamily(familyid){
		$.ajax({
                url:"<?php echo base_url(); ?>index.php/social/visit/getstdbyfamily",    
                data: {'familyid':familyid},
                type:"post",
                success: function(data){
                	$("#liststd").html(data);
               
            }
        });
	}
	function getfamilyrow(familyid){
		$.ajax({
                url:"<?php echo base_url(); ?>index.php/social/visit/getfamilyrow",    
                data: {'familyid':familyid},
                type:"post",
                dataType:"json",
                async:false,
                success: function(data){
                	$("#address").val(data.village +', '+data.commune +', '+data.district +', '+ data.province);
               		$("#contact_num").val(data.tel);
            }
        });
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
