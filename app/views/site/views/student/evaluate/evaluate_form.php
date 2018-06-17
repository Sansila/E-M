
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
				      		<strong>Evaluate Information</strong>
				      		
				      	</div>
				      	<div class="col-sm-6" style="text-align: center">
				      		<strong>
				      			<center class='error' style='color:red;'><?php if(isset($error)) echo "$error"; ?></center>
				      		</strong>	
				      	</div>
			</div> 
	    <?php
	    	$en_teacher='';
	    	$kh_teacher='';
	    	$month=array(array('month'=>'Jan'),
	    				array('month'=>'Feb'),
	    				array('month'=>'Mar'),
	    				array('month'=>'Apr'),
	    				array('month'=>'May'),
	    				array('month'=>'Jun'),
	    				array('month'=>'Jul'),
	    				array('month'=>'Aug'),
	    				array('month'=>'Sep'),
	    				array('month'=>'Oct'),
	    				array('month'=>'Nov'),
	    				array('month'=>'Dec'));
	    	//$month[]=Array ( [0] => Array ( [month] => 'Feb' ), [1] => Array ( [month] => 'Jan' ) ) ;
	    	if(isset($data->kh_teacher)){
	    		$teacher_en='';
	    		$teacher_kh='';
	    		$teacher_fr='';
	    		$monthtran='';
	    		if($data->forign_teacher>0){
	    			$emp1=$this->db->where('empid',$data->forign_teacher)->get('sch_emp_profile')->row();
	    			$teacher_en=$emp1->last_name.' '.$emp1->first_name;
	    		}
	    		if($data->kh_teacher>0){
	    			$emp2=$this->db->where('empid',$data->kh_teacher)->get('sch_emp_profile')->row();
	    			$teacher_kh=$emp2->last_name.' '.$emp2->first_name;
	    		}
	    		if($data->eng_teach_name){
	    			$emp3=$this->db->where('empid',$data->eng_teach_name)->get('sch_emp_profile')->row();
	    			$teacher_fr=$emp3->last_name.' '.$emp3->first_name;
	    		}
	    		if($data->evaluate_type=='semester'){
	    			$month=$this->evaluate->getmonthclass($data->classid,$data->yearid);
	    		}
	    	}
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
	       <form enctype="multipart/form-data" id='frmtreatment' action="<?php echo base_url()."index.php/student/evaluate/save?m=$m&p=$p"; ?>" method="POST">
			        <div class="row">
						<div class="col-sm-6">
				            	<div class="panel panel-default">
				            		<div class="panel-heading">
						               <h4 class="panel-title">Evaluate Details 
								    		<label style="float:right !important; font-size:11px !important; color:red;"><?php if(isset($data->modified_by)) if($data->modified_by!='') echo "Last Modified Date: ".date_format(date_create($data->modified_date),'d-m-Y H:i:s')." By : $data->modified_by"; ?></label>	

						               </h4>
						        	</div>
					          		<div class="panel-body">
					          			<div class="form_sep">
								                <input type='text' value="<?php if(isset($data->transno)) echo $data->transno; ?>" class='hide' name='transno' id='transno'/>
								                <input type='text' value="<?php if(isset($data->transno)) echo 'update'; ?>" class='hide' name='upd' id='upd'/>
								        </div>
					          			<div class="form_sep">
									        <label class="req" for="student_num">Date</label>
									        <div class='input-group date' id='datetimepicker'>
											    <input type='text' <?php if(isset($data->date)){ echo "value='".$this->green->convertSQLDate($data->date)."' disabled"; } ?> required  data-parsley-required-message="Enter Date"  id="date" class="form-control" name="date"/>
											    <span class="input-group-addon"><span class="glyphicon glyphicon-calendar">
											</div>	
											<input type='text' class='hide' id='eva_date' name='eva_date' <?php if(isset($data->date)){echo "value='".$this->green->convertSQLDate($data->date)."'"; } ?>/>
									    </div>
									    <div class="form_sep">
						                  	<label class="req" for="student_num">Evaluate Type</label>
						                 	<select data-required="true" <?php if(isset($data->date)) echo "disabled"; ?> class="form-control parsley-validated" onchange="changemonth(event);" onclick="getmonthclass(event);" name="evaluate_type" value="" id="evaluate_type" >
							                   <option value="month" <?php if(isset($data->evaluate_type)) if($data->evaluate_type=='month') echo 'selected'; ?>>Monthly</option>
							                   <option value="Three Month" <?php if(isset($data->evaluate_type)) if($data->evaluate_type=='Three Month') echo 'selected'; ?>>Trimester</option>
							                   <option value="semester" <?php if(isset($data->evaluate_type)) if($data->evaluate_type=='semester') echo 'selected'; ?>>Semester</option>
							                  
				                  			</select>
				                  			<input type='text' class='hide' <?php if(isset($data->evaluate_type)){echo "value='$data->evaluate_type'"; } ?> id='eva_type' name='eva_type'/>
							            </div>
							            <div class="form_sep" id='semester'>
						                  	<label class="req" for="student_num">Trimester</label><br>
						                 	 	<label class="radio-inline">
											      <input type="radio" value='1st' class='semester' name="semester" <?php if(isset($data->evaluate_type)) if($data->eval_semester=='1st') echo 'checked disabled'; else echo 'disabled' ?>>1st
											    </label>
											    <label class="radio-inline">
											      <input type="radio" value='2nd' class='semester' name="semester" <?php if(isset($data->evaluate_type)) if($data->eval_semester=='2nd') echo 'checked disabled'; else echo 'disabled' ?>>2nd
											    </label>
											    <label class="radio-inline">
											      <input type="radio" value='3th' class='semester' name="semester" <?php if(isset($data->evaluate_type)) if($data->eval_semester=='3st') echo 'checked disabled';else echo 'disabled'  ?>>3th
											    </label>
											    <input type='text' class='hide' id='eva_semester' <?php if(isset($data->classid)){echo "value='$data->eval_semester'"; } ?> name='eva_semester'/>
							            </div>
							            <div class="form_sep" id='semesters'>
						                  	<label class="req" for="student_num">Semester</label><br>
						                 	 	<label class="radio-inline">
											      <input type="radio" value='1st' class='semester' name="semester" <?php if(isset($data->month)){ if($data->evaluate_type=='semester') if($data->eval_semester=='1st') echo 'checked disabled'; else echo 'disabled';} ?>>1st
											    </label>
											    <label class="radio-inline">
											      <input type="radio" value='2nd' class='semester' name="semester" <?php if(isset($data->month)){ if($data->evaluate_type=='semester') if($data->eval_semester=='2nd') echo 'checked disabled'; else echo 'disabled'; }?>>2nd
											    </label>
							            </div>
							            <div class="form_sep">
						                  	<label class="req" for="student_num">Class</label>
						                 	<select data-required="true" <?php if(isset($data->date)) echo "disabled"; ?> class="form-control parsley-validated" name="class" value="" id="class" onchange="getmonthclass(event);" >
							                  	<option value=''>Select Class</option>
							                  <?php 
							                  	foreach ($this->db->get('sch_class')->result() as $class) { ?>
							                  		<option value='<?php echo $class->classid ?>' <?php if(isset($data->classid)) if($class->classid==$data->classid) echo 'selected'; ?>> <?php echo $class->class_name ?></option>
							                  	<?php 
							                    }
							                  ?>
				                  			</select>
				                  			<input type='text' class='hide' id='classid' <?php if(isset($data->classid)){echo "value='$data->classid'"; } ?> name='classid'/>
							            </div>
						            </div>
						            <div class="panel-body">
								            <div class="form_sep">
								              <button id="btnnewdis" name="btnnewdis" <?php if(isset($data->date)) echo "disabled"; ?> onclick="gethearder(event);" type="button" class="btn btn-primary <?php if(isset($_GET['upd'])) echo "hide"?>">Select</button>
								              <button id="add_disease" name="btncancel"  onclick="rollback();"type="button" class="btn btn-danger <?php if(isset($data->date)) echo "hide"?>">Rollback Data</button>
								            </div>
								    </div>
						        </div>
						</div>
						<div class="col-sm-6">
				            <div class="panel panel-default">
				            		<div class="panel-heading">
						               <h4 class="panel-title">Evaluate Details</h4>
						            </div>
					          		<div class="panel-body">
						                <div class='form_sep'>
						                	<table class='table'>
						                		<thead>
						                			<th>Teacher Response</th>
						                		</thead>
						                		<tbody id='listteacher'>
						                			<?php 
						                				$yearid=$this->session->userdata('year');
						                				if(isset($data->classid))
						                					if(count($this->evaluate->getteacherbyclass($data->classid,$yearid))>0)
																foreach ($this->evaluate->getteacherbyclass($data->classid,$yearid) as $t) {
																	echo "<tr>
																			<td>".$t->last_name.' '.$t->first_name."</td>
																		</tr>";
																}
															else
																echo "<label style='color:red'>No Teacher in this Class</label>";
						                			 ?>
						                		</tbody>
						                	</table>
						                </div>
						                <div class="form_sep hide">
						                  	<label class="req" for="reg_input_name">Khmer Teacher</label>
						                   	<input type="text" <?php if(isset($data->forign_teacher)) echo "value='".$teacher_kh."' disabled" ?> class="form-control parsley-validated" name="teacher_kh" id="teacher_kh">
						                	<input type='text' value="<?php if(isset($data->kh_teacher)) echo $data->kh_teacher ?>" class='hide' id='teacher_khid' name='teacher_khid'/>
						                </div>
						                <div class="form_sep hide">
						                  	<label class="req" for="reg_input_name">English Teacher</label>
						                   	<input type="text" <?php if(isset($data->forign_teacher)) echo "value='".$teacher_en."' disabled" ?> class="form-control parsley-validated" name="teacher_en" id="teacher_en">
						                	<input type='text' class='hide' <?php if(isset($data->forign_teacher)) echo "value='".$data->forign_teacher."'" ?> id='teacher_enid' name='teacher_enid'/>
						                </div>
						                <div class="form_sep hide">
						                  	<label class="req" for="reg_input_name">French Teacher</label>
						                   	<input type="text" <?php if(isset($data->eng_teach_name)) echo "value='".$teacher_fr."' disabled" ?> class="form-control parsley-validated" name="teacher_fr" id="teacher_fr">
						                	<input type='text' class='hide' value="<?php if(isset($data->eng_teach_name)) echo $data->eng_teach_name ?>" id='teacher_frid' name='teacher_frid'/>
						                </div>
						                <div class="form_sep hide" id='sep_month'>
						                  	<label class="req" for="student_num">Month</label>
						                 	<select data-required="true" <?php if(isset($data->date)) echo "disabled"; ?> class="form-control parsley-validated" name="month" value="" id="month" >
							                  <?php 
							                  	foreach ($month as $montht) { ?>
							                  		<option value='<?php echo $montht->month ?>'<?php if(isset($data->month)) if($montht->month==$data->month) echo 'selected'; ?>><?php echo $montht->month; ?></option>
							                  	<?php }
							                  ?>
							                   
				                  			</select>
				                  			<input type='text' class='hide'  <?php if(isset($data->month)){echo "value='$data->month'"; } ?> id='eva_month' name='eva_month'/>
							            </div>
							            <div class="form_sep" id='sep_months'>
						                  	<label class="req" for="student_num">Months</label>
						                 	<select <?php if(isset($data->date)) echo "disabled"; ?> class="form-control months" multiple data-max-options="3" name="months[]" id="months" >
							                  <?php 
							                  if(isset($data->date)){
							                  	$srtM=$data->month;
							                  	$arrMs=explode(",", $srtM);
							                  }	
							                  //print_r($arrMs);
							                  	foreach ($month as $months) { 	
							                  		$sel='';	
							                  		$monthtran.=$months['transno'].',';
							                  		if(isset($data->date))					                  		 
								                  		 if(in_array($months['month'], $arrMs)){
								                  		 	$sel="selected";
								                  		 }
							                  		?>
							                  		<option value="<?php echo $months['month'] ?>"<?php  echo $sel; ?>><?php echo $months['month']; ?></option>
							                  	<?php }
							                  ?>
				                  			</select>

				                  			<input type='text' class='hide' <?php if(isset($data->month)){echo "value='$data->month'"; } ?> id='eva_months' name='eva_months'/>
				                  			<input type='text' class='hide' <?php if(isset($data->month)){echo "value='$monthtran'"; } ?> id='eva_transno' name='eva_transno'/>
							            </div>
							            <div class="form_sep">
						                  	<label class="req" for="student_num">Class Comment</label>
						                 	<textarea name='cmd' id='cmd' class='form-control'><?php if(isset($data->class_comment)){echo $data->class_comment; } ?></textarea>
				                  			<!-- <input type='text' class='hide' <?php if(isset($data->class_comment)){echo "value='$data->class_comment'"; } ?> id='comment' name='comment'/> -->
							            </div>

						            </div>
						           
					        </div>
					    </div>
					    <div class="col-sm-12">
				            	<div class="panel panel-default">
				            		<div class="panel-heading">
						               <h4 class="panel-title">Student Mention</h4>
						        	</div>
					          		<div class="panel-body">
					          			
						                <div class="form_sep">
						                  	<table class='table table-bordered' id='tblstdmention'>
						                		<?php
						                			if(isset($data->classid)){
						                				$schlevelid=$this->db->where('classid',$data->classid)->get('sch_class')->row()->schlevelid;
						                				$isvtc=$this->db->where('schlevelid',$schlevelid)->get('sch_school_level')->row()->is_vtc;
						                				$action='';
						                				$trimester=0;
														if($data->evaluate_type!='Three Month')
															$action='return isNumberKey(event);';
														else 
															$trimester=1;
														echo "<thead>
																	<tr>
													        			<th rowspan='2' style='vertical-align: middle !important;'><input type='text' class='hide' value='$isvtc' id='schlevelids'/>No</th>
													        			<th rowspan='2' style='vertical-align: middle !important;'>Student</th>";
													        			// echo "<th rowspan='2' width='70' style='vertical-align: middle !important;'>Comments</th>";
												        //==================subject type========================
														foreach ($this->evaluate->gets_type($data->classid,$data->yearid,$trimester) as $sub) {
															echo "<th colspan='$sub->s_total' style='text-align:center !important;'>$sub->subject_type</th>";
														}
															echo "<th  rowspan='2' style='vertical-align: middle !important;' width='100'>Teacher Comment</th>
																  <th  rowspan='2' style='vertical-align: middle !important;'>Save</th>
																</tr>
																<tr>";
														////=========================subject========================
														foreach ($this->evaluate->gets_type($data->classid,$data->yearid,$trimester) as $sub) {
															foreach ($this->evaluate->getsubject($data->classid,$sub->subj_type_id,$data->yearid,$trimester) as $subject) {
																echo "<th width='70'>$subject->short_sub</th>";
															}
														}
														echo "<th width='70' class='hide'>Foreing</th>
																<th width='70' class='hide'>Khmer</th>
														</tr></thead>
																<tbody>";
														$i=1;
														foreach ($this->evaluate->getstudent($data->classid,$data->yearid) as $std) {
															$eva_row=$this->db->where('transno',$data->transno)->where('studentid',$std->studentid)->get('sch_student_evaluated')->row();
															echo "<tr>
																	<td>".str_pad($i,2,"0",STR_PAD_LEFT)."</td>
																	<td><input class='form-control input-sm hide studentid' value='$std->studentid' name='studentid[]' id='studentid' />".$std->last_name.' '.$std->first_name."</td>";
																	
																	foreach ($this->evaluate->gets_type($data->classid,$data->yearid,$trimester) as $sub) {
																		foreach ($this->evaluate->getsubject($data->classid,$sub->subj_type_id,$data->yearid,$trimester) as $subject) {
																			$mention='';
																			if($data->evaluate_type=='Three Month')
																				$mention=$this->db->where('evaluateid',$eva_row->evaluateid)->where('studentid',$std->studentid)->where('subjectid',$subject->subjectid)->get('sch_student_evaluated_mention')->row()->mention;
																			else
																				$mention=$this->db->where('evaluateid',$eva_row->evaluateid)->where('studentid',$std->studentid)->where('subjectid',$subject->subjectid)->get('sch_student_evaluated_mention')->row()->score;
																			echo "<td>
																					<input type='text' onkeypress='".$action."' class='form-control input-sm txtmention' value='$mention' rel='$subject->subjectid' name='$subject->subjectid[]' id='txtmention'/>
																				</td>";
																		}
																	}
															echo"	<td><input class='form-control input-sm teacher_kh_cmd$std->studentid' rel='$std->studentid' onclick='t_comment(event);' value='$eva_row->kh_teacher_comment' name='teacher_kh_cmd[]'/></td>
																	<td class='hide'><input class='form-control input-sm hide teacher_f_cmd$std->studentid' rel='$std->studentid' onclick='t_comment(event);' value='$eva_row->forign_teacher_comment' name='teacher_f_cmd[]'/>
																		<input class='teacher_fr_cmd$std->studentid' rel='$std->studentid' onclick='t_comment(event);' value='$eva_row->eng_teach_com' name='teacher_fr_cmd[]'/>
																		<input class='technical_cmd$std->studentid' rel='$std->studentid' onclick='t_comment(event);' value='$eva_row->technic_com' name='technical_cmd[]'/>
																		<input class='sp_cmd$std->studentid' rel='$std->studentid' onclick='t_comment(event);' value='$eva_row->supple_com' name='sp_cmd[]'/>
																	</td>
																	<td style='text-align:center !important;' width='50'>
																		<a>
																 			<img onclick='saveinline(event);' src='".site_url('../assets/images/icons/save.png')."'/>
																 		</a>
																 	</td>
																</tr>";
																$i++;
														}
														echo "</tbody>";
						                			}

						                		 ?>
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

<div class="modal fade bs-example-modal-lg" id="tapcomment" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="wrapper">
				<div class="clearfix" id="main_content_outer">
				    <div id="main_content">
					    <div class="result_info">
					    	<div class="col-sm-6">
					      		<strong>Class Comment</strong>
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
							            		<div class='table-responsive'>
										               <div class="form_sep">
										                  <label class="req" for="reg_input_name">Class Comment</label>
										                  <textarea data-required="true"  value="" class="form-control parsley-validated" name="class_comment"  id="class_comment"></textarea>
										                	<input type='text' id='field' class='hide'/>
										                </div>
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
                <button type="button" id='savecmd' class="btn btn-primary">Save</button>
            </div>
        </div>                       <!-- /.modal-content -->
    </div>
</div>
<div class="modal fade bs-example-modal-lg" id="tapteacher" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="wrapper">
				<div class="clearfix" id="main_content_outer">
				    <div id="main_content">
					    <div class="result_info">
					    	<div class="col-sm-6">
					      		<strong>Teacher Comment</strong>
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
							            		<div class='table-responsive' id='std_sep'>
										               <div class="form_sep">
										                  <label class="req" for="reg_input_name">Khmer Teacher</label>
										                  <textarea data-required="true"  value="" class="form-control parsley-validated" name="kh_comment"  id="kh_comment"></textarea>
										                	<input type='text' id='tfield' class='hide'/>
										                </div>
										                <div class="form_sep">
										                  <label class="req" for="reg_input_name">English Teacher</label>
										                  <textarea data-required="true"  value="" class="form-control parsley-validated" name="f_comment"  id="f_comment"></textarea>
										                
										                </div>
										                <div class="form_sep">
										                  <label class="req" for="reg_input_name">French Teacher</label>
										                  <textarea data-required="true"  value="" class="form-control parsley-validated" name="fr_comment"  id="fr_comment"></textarea>
										                
										                </div>
											   </div>
											   <div class='table-responsive' id='vtc_sep'>
										               <div class="form_sep">
										                  <label class="req" for="reg_input_name">Technical Course</label>
										                  <textarea data-required="true"  value="" class="form-control parsley-validated" name="tec_comment"  id="tec_comment"></textarea>
										                	<input type='text' id='tfield' class='hide'/>
										                </div>
										                <div class="form_sep">
										                  <label class="req" for="reg_input_name">Supplementaary Course</label>
										                  <textarea data-required="true"  value="" class="form-control parsley-validated" name="supple_comment"  id="supple_comment"></textarea>
										                
										                </div>
										               
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
                <button type="button" id='savetcmd' class="btn btn-primary">Save</button>
            </div>
        </div>                       <!-- /.modal-content -->
    </div>
<script type="text/javascript">
 	changemonth();
	$(function(){
		autofillteacher();
		autofillteacheren(); 
		autofillteacherfr();
		$("#frmmedicine").parsley();
		// $("#frmtreatment").parsley();
		$("#date").datepicker({
      		language: 'en',
      		pick12HourFormat: true,
      		format:'dd-mm-yyyy'
    	});
	});
	$('#savecmd').click(function(){
		var field=$('#field').val();
		var value=$('#class_comment').val();
		$('.'+field).val(value);
		$('#tapcomment').modal('hide');
	})
	$('#savetcmd').click(function(){
		var field=$('#tfield').val();
		var kh=$('#kh_comment').val();
		var forign=$('#f_comment').val();
		var france=$('#fr_comment').val();
		var tech=$('#tec_comment').val();
		var supple=$('#supple_comment').val();
		$('.teacher_kh_cmd'+field).val(kh);
		$('.teacher_f_cmd'+field).val(forign);
		$('.teacher_fr_cmd'+field).val(france);
		$('.technical_cmd'+field).val(tech);
		$('.sp_cmd'+field).val(supple);
		$('#tapteacher').modal('hide');
	})
	function getmonthclass(event){
		var classid=$('#class').val();
		var yearid=$('#year').val();
		var evaluate_type=$('#evaluate_type').val();
		getteacher(classid);
		if(evaluate_type=='semester'){
			$.ajax({
	                url:"<?php echo site_url('student/evaluate/getmonthclass') ?>",    
	                data: {'classid':classid,'yearid':yearid},
	                type:"post",
	                success: function(data){
	                	$('#months').html(data);
	                }
	    	});
		}else{
			$.ajax({
	                url:"<?php echo site_url('student/evaluate/getmonth') ?>",    
	                data: {'classid':classid,'yearid':yearid},
	                type:"post",
	                success: function(data){
	                	$('#months').html(data);
	                }
	    	});
		}
			
	}
	function changemonth(event){
		var val=$('#evaluate_type').val();
		// alert(val);
		if(val=='month'){
			$('#semester').addClass('hide');
			$('#semesters').addClass('hide');
			$('#sep_months').removeClass('hide');
		}
		if(val=='semester'){
			$('#semesters').removeClass('hide');
			$('#semester').addClass('hide');
			$('#sep_months').removeClass('hide');
		}
		if(val=='Three Month'){
			$('#semester').removeClass('hide');
			$('#semesters').addClass('hide');
			$('#sep_months').addClass('hide');
		}
	}
	function getteacher(classid){
		$.ajax({
	                url:"<?php echo site_url('student/evaluate/getteacher') ?>",    
	                data: {'classid':classid},
	                type:"post",
	                success: function(data){
	              		$('#listteacher').html(data);
	            	}
	       });
	}
	function gethearder(event){
		var semester=$('#eva_semester').val();
		var month=$('#months').val();//alert($('#months').val());
		//alert(month);
		var classid=$('#class').val();
		var year=$('#year').val();
		var evaluate_type=$("#evaluate_type").val();
		if($('#date').val()!='' && classid!='' && ($('#months').val()!=null || evaluate_type=='Three Month')) {

			$.ajax({
	                url:"<?php echo site_url('student/evaluate/getsub_type') ?>",    
	                data: {'classid':classid,'year':year,'evaluate_type':evaluate_type,'month':month},
	                type:"post",
	                success: function(data){
	                	if(data!='false'){
	                		$('#tblstdmention').html(data);
		              		$('#eva_date').val($('#date').val());
		              		$('#eva_type').val($('#evaluate_type').val());
		              		$('#classid').val($('#class').val());
		              		$('#eva_month').val($('#month').val());
		              		$('.semester').each(function(){
		              			if($(this).is(':checked'))
		              				$('#eva_semester').val($(this).val());
		              		})
		              		var months='';
		              		var eva_transno='';
		              		$('.months>option').each(function(){
		              			if($(this).is(':selected')){
		              				months+=$(this).text()+',';// $('#eva_semester').val($(this).val());
		              				eva_transno+=$(this).val()+',';
		              			}
		              		})
		              		$('#eva_months').val(months);
		              		$('#eva_transno').val(eva_transno);
		              		$('#date').attr('disabled',true);
		              		$('#evaluate_type').attr('disabled',true);
		              		$('#class').attr('disabled',true);
		              		$('#month').attr('disabled',true);
		              		$('#months').attr('disabled',true);
		              		$('#teacher_kh').attr('disabled',true);
		              		$('#teacher_en').attr('disabled',true);
		              		$('#teacher_fr').attr('disabled',true);
		              		$('#btnnewdis').attr('disabled',true);
		              		$('.semester').attr('disabled',true);
		              		gettransno();
	                	}else{
	                		$('.error').html("This month, Trimester Or Semester is already exist....!");
	                	}
	              		
	            	}
	       });
			$('.error').html('');
		}else{
			$('.error').html('Please Fill out all field...!');
		}
	}
	$('#btncancel').click(function(){
		var con=confirm('Are you Sure to Cancel...!');
		if(con==true)
			location.href="<?PHP echo site_url('student/evaluate');?>"+"?<?php echo "m=$m&p=$p" ?>";
	})
	function rollback(){
		var transno=$('#transno').val();
		var con=confirm('This action will be clear all data in this form...!');
		if(con==true)
			location.href="<?PHP echo site_url('student/evaluate/rollback');?>/"+transno+"?<?php echo "m=$m&p=$p" ?>";
	}
	function gettransno(){
		$.ajax({
	                url:"<?php echo site_url('student/evaluate/gettransno') ?>",    
	                data: {'test':1},
	                type:"post",
	                success: function(data){
	              		$('#transno').val(data);
	            	}
	       });
	}
	function t_comment(event){
		var field=$(event.target).attr('rel');
		var schlevelid=$('#schlevelids').val()
		//alert(schlevelid);
		if(schlevelid==1){
			$('#std_sep').addClass('hide');
			$('#vtc_sep').removeClass('hide');
		}else{
			$('#std_sep').removeClass('hide');
			$('#vtc_sep').addClass('hide');
		}
		$('#tfield').val(field);
		$('#kh_comment').val($('.teacher_kh_cmd'+field).val());
		$('#f_comment').val($('.teacher_f_cmd'+field).val());
		$('#fr_comment').val($('.teacher_fr_cmd'+field).val());
		$('#tec_comment').val($('.technical_cmd'+field).val());
		$('#supple_comment').val($('.sp_cmd'+field).val());
		$('#tapteacher').modal('show');
	}
	function saveinline(event){
		var date=$('#date').val();
		var studentid=$(event.target).closest('tr').find('#studentid').val();
  		var eva_type=$('#evaluate_type').val();
  		var classid=$('#class').val();
  		var month=$('#eva_months').val();
  		var semester='';
  		var teacher_kh=$('#teacher_khid').val();
  		var teacher_en=$('#teacher_enid').val();
  		var teacher_fr=$('#teacher_frid').val();
  		var teacher_en_cmd=$(event.target).closest('tr').find('.teacher_f_cmd'+studentid).val();
  		var teacher_kh_cmd=$(event.target).closest('tr').find('.teacher_kh_cmd'+studentid).val();
  		var teacher_fr_cmd=$(event.target).closest('tr').find('.teacher_fr_cmd'+studentid).val();
  		var technical_cmd=$(event.target).closest('tr').find('.technical_cmd'+studentid).val();
  		var sp_cmd=$(event.target).closest('tr').find('.sp_cmd'+studentid).val();
  		var class_cmd=$('#cmd').val();
  		var transno=$('#transno').val();
  		var upd=$('#upd').val();
  		var tranmonth='';
  		if(eva_type!='month'){
  			month=$('#eva_months').val();
  			semester=$('#eva_semester').val();
  			tranmonth=$('#eva_transno').val();
  		}
  		$.ajax({
	                url:"<?php echo site_url('student/evaluate/saveinline') ?>",    
	                data: {'date':date,
	            			'eva_type':eva_type,
	            			'classid':classid,
	            			'studentid':studentid,
	            			'teacher_en_cmd':teacher_en_cmd,
	            			'teacher_kh_cmd':teacher_kh_cmd,
	            			'teacher_fr_cmd':teacher_fr_cmd,
	            			'class_cmd':class_cmd,
	            			'transno':transno,
	            			'month':month,
	            			'semester':semester,
	            			'upd':upd,
	            			'teacher_kh':teacher_kh,
	            			'teacher_fr':teacher_fr,
	            			'technical_cmd':technical_cmd,
	            			'sp_cmd':sp_cmd,
	            			'teacher_en':teacher_en},
	                type:"post",
	                dataType:"json",
                    async:false,
	                success: function(data){
	                	var total_score=0;
	                	var countsub=0;
	                	$(event.target).closest('tr').find('.txtmention').each(function(){
	                		countsub++;
	                		var subjectid=$(this).attr('rel');
	                		var mention=$(this).val();
	                			total_score+=Number(mention);
	                		savemention(transno,subjectid,mention,data.evaluateid,studentid,data.level,eva_type);
	                	});
	                	if(eva_type=='semester'){
	                		alert(total_score);
	                		savesemester(transno,total_score,studentid,classid,data.yearid,semester,month,tranmonth,countsub);
	                	}
	                		//
	            	}
	       });
	}
	function savesemester(transno,total_score,studentid,classid,yearid,semester,month,tranmonth,countsub){
			$.ajax({
	                url:"<?php echo site_url('student/evaluate/savesemester') ?>",    
	                data: {'total_score':total_score,
	            			'transno':transno,
	            			'classid':classid,
	            			'countsub':countsub,
	            			'yearid':yearid,
	            			'month':month,
	            			'tranmonth':tranmonth,
	            			'semester':semester,
		            		'studentid':studentid},
	                type:"post",
	                success: function(data){
	              		//alert(data);
	            	}
	       });
	}
	function savemention(transno,subject,mention,evaluateid,studentid,level,eva_type){
			$.ajax({
	                url:"<?php echo site_url('student/evaluate/savemention') ?>",    
	                data: {'subjectid':subject,
	            			'mention':mention,
	            			'level':level,
	            			'eva_type':eva_type,
	            			'transno':transno,
		            		'evaluateid':evaluateid,
		            		'studentid':studentid},
	                type:"post",
	                success: function(data){
	              		//alert(data);
	            	}
	       });
	}
	function classcomment(event){
		var field=$(event.target).attr('rel');
		$('#field').val(field);
		$('#class_comment').val($(event.target).val());
		$('#tapcomment').modal('show');
	}
	function removerow(event){
		var row_class=$(event.target).closest('tr').remove();
	}
	function autofillteacher(){		
		var teacher="<?php echo site_url("student/evaluate/fillteacher")?>";
    	$("#teacher_kh").autocomplete({
				source: teacher,
				minLength:0,
				select: function( events, ui ) {	
					$('#teacher_khid').val(ui.item.id);
				}			
		});
	}
	function autofillteacheren(){		
		var teacher="<?php echo site_url("student/evaluate/fillteacher")?>";
    	$("#teacher_en").autocomplete({
				source: teacher,
				minLength:0,
				select: function( events, ui ) {	
					$('#teacher_enid').val(ui.item.id);
				}			
		});
	}
	function autofillteacherfr(){		
		var teacher="<?php echo site_url("student/evaluate/fillteacher")?>";
    	$("#teacher_fr").autocomplete({
				source: teacher,
				minLength:0,
				select: function( events, ui ) {	
					$('#teacher_frid').val(ui.item.id);
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



