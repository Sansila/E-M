
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
				      		<strong>Rollover</strong>				      		
				      	</div>
				      	<div class="col-sm-6" style="text-align: center">
				      		<strong>
				      			<center class='error' style='color:red;'><?php if(isset($error)) echo "$error"; ?></center>
				      		</strong>	
				      	</div>
			</div> 
	       <form enctype="multipart/form-data" id='frmtreatment' action="<?php echo base_url(); ?>index.php/student/rollover/save" method="POST">
		        <div class="row">
		        	<div class="col-sm-12">
						<div class="panel panel-default">
		            		<div class="panel-heading">
				               <h4 class="panel-title">RollOver Details </h4>
				        	</div>
				          	<div class="panel-body">
				          			<div class="col-sm-4">
				          					<div class="form_sep">
							                  	<label class="req" for="classid">To Year</label>
								                <select data-required="true" class="form-control input-sm parsley-validated" name="to_year" value="" id="to_year" >
								                   <option value=''>Select To Year</option>
								                  <?php 
								                  	foreach ($this->rollover->getyear() as $toyear) { ?>
								                  		<option value='<?php echo $toyear->yearid ?>' <?php if(isset($data->classid)) if($class->classid==$data->classid) echo 'selected'; ?>> <?php echo $toyear->sch_year ?></option>
								                  	<?php }
								                  ?>
					                  			</select>
								            </div>	
								            <div class="form_sep">	
						            				<label class="checkbox">
												      <input type="checkbox" value='1st' checked disabled class='semester' name="semester"?>Student
												    </label>
												    <label class="checkbox">
												      <input type="checkbox" class='semester' name="chkcontract" <?php if(isset($data->month)) if($data->eval_semester==2) echo 'checked disabled'; else echo 'disabled' ?>>Contract
												    </label>
												    <label class="checkbox">
												      <input type="checkbox"  class='semester' name="chktimetable" <?php if(isset($data->month)) if($data->eval_semester==3) echo 'checked disabled';else echo 'disabled'  ?>>Time Table
												    </label>
												   <!--  <label class="checkbox">
												      <input type="checkbox" class='semester' name="chkdistribute" <?php if(isset($data->month)) if($data->eval_semester==3) echo 'checked disabled';else echo 'disabled'  ?>>Distribute Plan
												    </label> -->
								            </div>
							        </div>
							        <div class="col-sm-8">
								            <div class="form_sep" id='rollovertype'>
							                  	<label class="req" for="classid">RollOver Type</label>
								                <select data-required="true" onchange="rollovertype();" required data-parsley-required-message="Select family" minlength='1' class="form-control parsley-validated" name="roll_type" id="roll_type">
								                	<option value="all">For all Class</option>
								                	<option value="schlevel">For School Level</option>
								                	<option value="class">For Class</option>
								                </select>
								            </div>
								            <div class="form_sep" id='schlevel_select'>
							                  	<label class="req" for="classid">School Level</label>
								                <select data-required="true" disabled required data-parsley-required-message="Select family" minlength='1' class="form-control parsley-validated" name="roll_schlevel" id="roll_schlevel">
								                	 <!-- <option value=''>Select School Level</option> -->
									                  <?php 
									                  	foreach ($this->rollover->getschlevel() as $schlevel) { ?>
									                  		<option value='<?php echo $schlevel->schlevelid ?>' <?php if(isset($data->classid)) if($class->classid==$data->classid) echo 'selected'; ?>> <?php echo $schlevel->sch_level ?></option>
									                  	<?php }
									                  ?>
								                </select>
								            </div>
								            <div class="form_sep" id='class_select'>
							                  	<label class="req" for="classid">Class</label>
								                <select data-required="true" disabled required data-parsley-required-message="Select family" minlength='1' class="form-control parsley-validated" name="roll_class" id="roll_class">
								                	<!-- <option value=''>Select class</option> -->
								                  <?php 
								                  	foreach ($this->db->get('sch_class')->result() as $class) { ?>
								                  		<option value='<?php echo $class->classid ?>' <?php if(isset($data->classid)) if($class->classid==$data->classid) echo 'selected'; ?>> <?php echo $class->class_name ?></option>
								                  	<?php }
								                  ?>
								                </select>
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
		              <button id="btncancel" type="button" class="btn btn-danger">Cancel</button>
		            </div>
		          </div>
		        </div>  
		 </form>
	    </div>
	</div>
</div>
<script type="text/javascript">
	function rollovertype(){
		var type=$('#roll_type').val();
		if(type=='all'){
			$('#roll_class').attr('disabled',true);
			$('#roll_schlevel').attr('disabled',true);
		}else if(type=='schlevel'){
			$('#roll_class').attr('disabled',true);
			$('#roll_schlevel').attr('disabled',false);
		}else{
			$('#roll_class').attr('disabled',false);
			$('#roll_schlevel').attr('disabled',true);
		}
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
