
<style type="text/css">
	#preview td{
		padding: 3px ;
	}
	td img{border:1px solid #CCCCCC; padding: 2px;}
	#preview_wr{
		margin: 10px auto !important;
	}
	#s_class{margin-top: 3px !important;}
	#tblmention td,#tblmention th{padding: 3px 5px !important;}
	span.set,.tab_head{font-family:"Times New Roman", Times, serif !important; font-size: 14px !important;}
	/*td,th{font-family:"Khmer OS", "Khmer OS Battambang", "Khmer OS Bokor" !important; font-size: 14px;}*/

</style>
<?php
		$school=$this->db->where('schoolid',$this->session->userdata('schoolid'))->get('sch_school_infor')->row();
   			$school_name=$school->name;
   			$school_adr=$school->address;
   		// $Student=$this->db->where('studentid',$stdid)->where('yearid',$row->yearid)->get('v_student_profile')->row();
   		
$mg='';
$pg='';
if(isset($_GET['m'])){
    $mg=$_GET['m'];
}
if(isset($_GET['p'])){
    $pg=$_GET['p'];
}

?>

<form method='post' action="<?php echo base_url()."index.php/school/student_sched/save?m=$mg&p=$pg"; ?>">
		<div class="wrapper">
			<div class="clearfix" id="main_content_outer">
			    <div id="main_content">
			      <div class="row result_info col-xs-10" style='width:100%'>
				      	<div class="col-xs-6">
				      		<strong>Schedule list</strong>
				      	</div>
				      	<div class="col-xs-6" style="text-align: right";>
				      		
				      		<span class="top_action_button">
				      			<?php if($this->green->gAction("P")){ ?>	
									<a  title="Print">
						    			<img onclick="preview(event);" src="<?php echo base_url('assets/images/icons/preview.png')?>" />
						    		</a>
						    	<?php } ?>
				      		</span>
				      		<span class="top_action_button">
								Class : <div class='col-xs-4 ' style='margin-top:3px !important; float:right'>
											<select onchange='selectclass(event);' class='form-control input-sm' id='s_classid' name='s_classid'>
												<option value=''>----Select----</option>
												<?php
													foreach ($this->db->where('is_active',1)->get('sch_class')->result() as $c) {?>
														<option value='<?php echo $c->classid ?>'<?php if(isset($classid)) if($classid->classid==$c->classid) echo 'Selected' ?>><?php echo $c->class_name ?></option>	
												<?php	}
												 ?>
											</select>
										</div>
				      		</span>
				      				
				      	</div> 			      
				  </div>
				</div>
			</div>
		</div>
		<div class="row" id='export_tap'>
			<div class="col-sm-12" id='preview_wr'>
			    <div class="panel panel-default">
			      	<div class="panel-body">
				         <div class="table-responsive" id="tab_print">
				         		<style type="text/css">
									#preview td{
										padding: 3px ;
									}
									#s_class{margin-top: 3px !important;}
									.small tbody tr td img{width: 15px; margin-right: 10px}
									table.small th{padding:2px !important;}
									td img{border:1px solid #CCCCCC; padding: 2px;}
									#preview_wr{
										margin: 10px auto !important;
									}
									#tblmention td,#tblmention th{padding: 3px 5px !important; text-align: center;}
									.tab_head th{font-family:"Times New Roman", Times, serif !important; font-size: 14px; font-weight: bold !important;}
									.tab_head th,label.control-label{font-family:"Times New Roman", Times, serif !important; font-size: 14px; font-weight: bold !important;}
									.teacherid{margin-top: 5px !important}
									/*td,th,label.control-label{font-family:"Khmer OS", "Khmer OS Battambang", "Khmer OS Bokor" !important; font-size: 14px;}*/
								</style>
								
								<div style='width:300px; float:right;'>
									<!-- <img src="<?php echo base_url('assets/images/logo/logo.png')?>" style='width:250px;  height:60px;' /> -->
									
								</div>
								<div style='float:left; '>
									<!-- <div style=' font-weight:bold; text-transform: uppercase;'><?php echo $school_name ?></div>
									<div style='text-align:center !important; font-weight:bold;'></div> -->
								</div>
								<p style="clear:both"></p>
				                <table align='center' style='width:100%'>
									<thead>
										<!-- <th valign='top' align="center" style='width:80%'><h4 align="center">STUDENT SCHEDULE</h4>
										<div style='text-align:left !important; font-weight:bold;'>Schedule For Class :<?php if(isset($classid)) echo $classid->class_name;  ?></div>
										<div style='text-align:left !important; font-weight:bold;'>Academy year :<?php echo $year->sch_year  ?></div> -->
										<input type='text' value='<?PHP echo $year->yearid ?>' name='yearid' class='hide'/>
										</th> 
									</thead>
								</table>
								<br/>
								<div class='table-responsive'>
									<table class='table table-bordered table-striped'>
										<thead>
											<th>Subject/Days</th>
											<?php 
												foreach ($this->sched->getdays() as $day) {
													echo "<th>".$day->dayname."</th>";
												}
											 ?>
										</thead>
										<tbody>
											<tr>
												<th colspan='8' style='background-color:#EEEEEE;'>MORNING TIMES</th>
											</tr>
											<?php 

												foreach ($this->sched->getmorningtimes('AM') as $m) {
													echo "<tr>
															<td style='vertical-align: middle !important'><input type='text' class='hide' value='$m->timeid' id='timeid' name='timeid[]'/>".$m->from_time.'-'.$m->to_time."</td>";
													foreach ($this->sched->getdays() as $day) {
														$subj='';
														$teacherid='';
														echo "<td><input type='text' class='hide' value='$day->dayid' id='dayid' name='dayid_$m->timeid[]'/>";?>
														<select class='form-control input-sm subjectid' onchange="getteacher(event);" name='subjectid_<?php echo $m->timeid.'_'.$day->dayid ?>'>
															<option value=''>--Subject--</option>
															<?PHP
																if(isset($classid))
																	foreach ($this->sched->getsubject($classid->grade_levelid,$year->yearid) as $s) {
																		$selec='';
																		$ishavesub=$this->sched->ishavesubject($day->dayid,$classid->classid,$s->subjectid,$m->timeid,$year->yearid);
																		if($ishavesub->count>0){
																			$selec='selected';
																			$subj=$s->subjectid;
																			$teacherid=$ishavesub->teacherid;
																		}
																			
																	?>
																		<option value='<?php echo $s->subjectid; ?>' <?php echo $selec; ?>><?php echo $s->subject.' ('.$s->subject_type; ?>)</option>
																<?php }
															 ?>
														</select>
														
														<select class='form-control input-sm teacherid' name='teacherid_<?php echo $m->timeid.'_'.$day->dayid ?>'>
															<option value=''>--Teacher--</option>
															<?php
															if($subj!='')
																foreach ($this->sched->getteacher($subj,$year->yearid) as $s) {
																	$ishaveclass=$this->sched->ishaveteacher($s->teacher_id,$classid->classid,$year->yearid);
																	$is_bc=$this->sched->isteacherbc($s->teacher_id,$m->timeid,$day->dayid,$year->yearid,$teacherid)->count;
																	if(count($ishaveclass)>0) {
																		if($is_bc==0){ ?>
																			<option value='<?php echo $s->teacher_id?>' <?php if($s->teacher_id==$teacherid) echo "selected"; ?>><?php echo $s->last_name.' '.$s->first_name ?></option>
																<?php }
																	}
																 }
															 ?>
														</select>
													<?PHP echo "</td>";
													}
													echo "</tr>";
												}
											?>
											<tr>
												<th colspan='8' style='background-color:#EEEEEE;'>EVENING TIMES</th>
											</tr>
											<?php 

												foreach ($this->sched->getmorningtimes('PM') as $m) {
													echo "<tr>
															<td style='vertical-align: middle !important'><input type='text' class='hide' value='$m->timeid' id='timeid' name='timeid[]'/>".$m->from_time.'-'.$m->to_time."</td>";
													foreach ($this->sched->getdays() as $day) {
														$subj='';
														$teacherid='';
														echo "<td><input type='text' class='hide' value='$day->dayid' id='dayid' name='dayid_$m->timeid[]'/>";?>
														<select class='form-control input-sm subjectid' onchange="getteacher(event);" name='subjectid_<?php echo $m->timeid.'_'.$day->dayid ?>'>
															<option value=''>--Subject--</option>
															<?PHP
																if(isset($classid))
																	foreach ($this->sched->getsubject($classid->grade_levelid,$year->yearid) as $s) {
																		$selec='';
																		$ishavesub=$this->sched->ishavesubject($day->dayid,$classid->classid,$s->subjectid,$m->timeid,$year->yearid);
																		if($ishavesub->count>0){
																			$selec='selected';
																			$subj=$s->subjectid;
																			$teacherid=$ishavesub->teacherid;
																		}
																			
																	?>
																		<option value='<?php echo $s->subjectid; ?>' <?php echo $selec; ?>><?php echo $s->subject.' ('.$s->subject_type; ?>)</option>
																<?php }
															 ?>
														</select>
														
														<select class='form-control input-sm teacherid' name='teacherid_<?php echo $m->timeid.'_'.$day->dayid ?>'>
															<option value=''>--Teacher--</option>
															<?php
															if($subj!='')
																foreach ($this->sched->getteacher($subj,$year->yearid) as $s) {
																	$ishaveclass=$this->sched->ishaveteacher($s->teacher_id,$classid->classid,$year->yearid);
																	$is_bc=$this->sched->isteacherbc($s->teacher_id,$m->timeid,$day->dayid,$year->yearid,$teacherid)->count;
																	if(count($ishaveclass)>0) {
																		if($is_bc==0){ ?>
																			<option value='<?php echo $s->teacher_id?>' <?php if($s->teacher_id==$teacherid) echo "selected"; ?>><?php echo $s->last_name.' '.$s->first_name ?></option>
																<?php }
																	}
																 }
															 ?>
														</select>
													<?PHP echo "</td>";
													}
													echo "</tr>";
												}

											?>
										</tbody>
									</table>

								</div>
								
							 <div class="form_sep">
							 	<?php if($this->green->gAction("C")){	?>
						          <button id="btnsavetimetable" name="btnsavetimetable" type="submit" class="btn btn-success">Save</button>
						        <?php } ?>
						          <button id="btncancel" type="button" class="btn btn-danger">Cancel</button>
						     </div>
						</div>
					</div>
				</div>
			</div>
</form>
<script type="text/javascript">
	function selectclass(event){
		var classid=$(event.target).val();
		var yearid=$("#year").val();
		var m="<?PHP echo $mg; ?>";
		var p="<?php echo $pg; ?>";
		location.href="<?PHP echo site_url('school/student_sched/scheclass');?>/"+classid+"/"+yearid+"?m="+m+"&p="+p;
		
	}
	function getteacher(event){
		var subjectid=$(event.target).val();
		var timeid=$(event.target).closest('tr').find('#timeid').val();
		var dayid=$(event.target).closest('td').find('#dayid').val();
		var yearid=$('#year').val();
		var classid=$('#s_classid').val();
		$.ajax({
				url:"<?php echo base_url(); ?>index.php/school/student_sched/getteacher",    
				data: {'subjectid':subjectid,'timeid':timeid,'dayid':dayid,'yearid':yearid,'classid':classid},
				type: "POST",
				success: function(data){
                   $(event.target).closest('td').find('.teacherid').html(data);
			}
		});
	}
    function preview(event){
		var classid=$("#s_classid").val();
		var yearid=$("#year").val();
		var m="<?PHP echo $mg; ?>";
		var p="<?php echo $pg; ?>";
		if(classid!='')
			location.href="<?PHP echo site_url('school/student_sched/previewstdsched');?>/"+classid+"/"+yearid+"?m="+m+"&p="+p;
		else{
			alert('Please Select Class ... !');
		}
	} 
</script>