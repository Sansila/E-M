
<?php
		$school=$this->db->where('schoolid',$this->session->userdata('schoolid'))->get('sch_school_infor')->row();
   			$school_name=$school->name;
   			$school_adr=$school->address;	
   		
?>
<div class="wrapper col-xs-10">
	<div class="wrapper">
		<div class="clearfix" id="main_content_outer">
		    <div id="main_content">
		      <div class="row result_info col-xs-12">
			      	<div class="col-xs-6">
			      		<strong>Evaluation Preview</strong>
			      	</div>
			      	<div class="col-xs-6" style="text-align: right">
			      		<span class="top_action_button">	
				    		<a href="#" id="export" title="Export">
				    			<img src="<?php echo base_url('assets/images/icons/export.png')?>" />
				    		</a>
				    	</span>
			      		<span class="top_action_button">
							<a href="#"  title="Print">
				    			<img id="print" src="<?php echo base_url('assets/images/icons/print.png')?>" />
				    		</a>
			      		</span>		
			      	</div> 			      
			  </div>
			</div>
		</div>
	</div>

	<div class="wrapper" id="tab_print">
<?php
	foreach ($eval as $eva) {
					$level=$this->db->where('classid',$eva->classid)->get('sch_class')->row()->grade_levelid;
			   		$schlevel=$this->db->where('classid',$eva->classid)->get('sch_class')->row()->schlevelid;
			   		$direcrow=$this->db->query("SELECT * 
			   									FROM sch_school_level sch 
			   									INNER JOIN sch_emp_profile emp 
			   									ON(sch.schlv_director=emp.empid)")->row();
			   		$year=$this->db->where('yearid',$eva->yearid)->get('sch_school_year')->row()->sch_year;
			   		$Student=$this->db->where('studentid',$eva->studentid)->where('yearid',$eva->yearid)->get('v_student_profile')->row();
			   		
			   		$mention=array('A','B','C','D','O');
			   		$trimester=0;
			   		if($eva->evaluate_type=='Three Month')
						$trimester=1;
			 ?>
			<div class="row" id='export_tap'>
				<div class="col-sm-12" id='preview_wr'>
				    <div class="panel panel-default">
				      	<div class="panel-body">
					         <div class="table-responsive" >
					         		
									<style type="text/css">
										#preview td{
											padding: 3px ;
										}
										td img{border:1px solid #CCCCCC; padding: 2px;}
										#preview_wr{
											margin: 10px auto !important;
										}
										#tblmention th{padding: 3px;}
										ul.signatures li{list-style: none; display: inline-block;}
										ul.signatures li label{font-size: 10px;}
										img.signature{width: 70px; margin: 5px; border:none !important;}
										span.set,.tab_head th,label.control-label{font-family:"Times New Roman", Times, serif !important; font-size: 14px !important;}
										td{font-family:"Khmer OS", "Khmer OS Battambang", "Khmer OS Bokor" !important; font-size: 14px;}

									</style>
									
									<div style='width:300px; float:right;'>
										<img src="<?php echo base_url('assets/images/logo/logo.png')?>" style='width:300px;  height:70px;' />
										
									</div>
									<div style='float:left; '>
										<div style=' font-weight:bold; text-transform: uppercase;'><?php echo $school_name ?></div>
										<div style=' font-weight:bold;'><?php echo "LEVEL"; echo $level ?> - EVALUATION <?php if($eva->evaluate_type!='month') echo $eva->eval_semester." TRIMESTER"; else echo "FOR MONTH : ".$eva->month; echo " - $year"?></div>
									</div>
									<p style="clear:both"></p>
					                <table align='center'>
										<thead>
											<!-- <th valign='top' align="center" style='width:80%'><h4 align="center"><b><u>Psychologist</u></b></h4></th> -->
										</thead>
									</table>
									<table align='center' id='preview' style='width:100%'>
											<tr>
												<td ><label class="control-label">Student : </label> </td>
												<td> <?php echo $Student->fullname; ?></td>
												<td><label class="control-label">Date Of Birth : </label></td>
												<td> <?php echo $Student->dob; ?></td>
												<td><label class="control-label"><?php echo "Class";?> : </label></td>
												<td> <?php echo $Student->class_name; ?></td>
											</tr>
											
									</table>
									<table align='center' id='preview' style='width:100%'>
											<tr>
												<td style='border:1px solid black; vertical-align:top;'><label class="control-label"><u> General Comment For The Class</u> : </label>
													<br/><?php echo $eva->class_comment;?>
												</td>	
												<td width='200' style='vertical-align:top;'>
													<img src='<?php if(@ file_get_contents(site_url('../assets/upload/students/'.$eva->yearid.'/'.$Student->student_num.'.jpg'))) echo site_url('../assets/upload/students/'.$eva->yearid.'/'.$Student->student_num.'.jpg'); else echo site_url('../assets/upload/No_person.jpg') ?>' style='width:140px; height:180px; float:right; margin-top:10px; margin-right:15px;'/>
												</td>
											</tr>
									</table>
									<br>
									<div class="table-responsive">
										<table id='tblmention' border='1' style='width:100%;' cellspacing='0' cellpadding='0'>
											<tr>
												<th colspan='2' style='text-align:center !important; vertical-align:middle;' >Subject</th>
												<?php
													foreach ($mention as $m) {
														echo "<th style='text-align:center !important; vertical-align:middle;'>".$m."</th>";
													}
												 ?>
											</tr>
											<?php
												foreach ($this->evaluate->gets_type($eva->classid,$eva->yearid,$trimester) as $sub) {
																$rowspan=$sub->s_total+1;
																echo "<tr>
																		<th width='200' rowspan='".$rowspan."' style='text-align:center !important; vertical-align:middle; background-color:#EEEEEE; font-weight:bold !important;'>$sub->subject_type</th>
																	</tr>";
																foreach ($this->evaluate->getsubject($eva->classid,$sub->subj_type_id,$eva->yearid,$trimester) as $subject) {
																	echo "<tr>
																			<th width='150'>$subject->subject</th>";
																			foreach ($mention as $m) {
																				if($this->evaluate->getmention($eva->evaluateid,$subject->subjectid)->mention==$m)
																					echo "<th style='text-align:center !important; vertical-align:middle;'>X</th>";
																				else
																					echo "<td></td>";
																			}	
																		echo "</tr>";
																}
												}
											 ?>
											
										</table>
										<br/>
										<table align='center' id='preview' style='width:100%'>
											<tr>
												<td colspan='2' style='border:1px solid black; vertical-align:top;'><label class="control-label"><u> Personal Comment For Student</u> : </label>
													<br/>
													<table style='width:100%'>
														<?php
															if($eva->kh_teacher_comment!=''){
																echo "<tr>
																		<td width='150' valign='top'><label class='control-label'>Khmer :</label></td>
																		<td>".$eva->kh_teacher_comment."</td>
																	</tr>";
															}
																
															
																
															if($eva->forign_teacher_comment!=''){
																echo "<tr>
																		<td width='150' valign='top'><label class='control-label'>English :</label></td>
																		<td>".$eva->forign_teacher_comment."</td>
																	</tr>";
															}
															if($eva->technic_com!=''){
																echo "<tr>
																		<td width='150'><label class='control-label'>Technical Courses :</label></td>
																		<td>".$eva->technic_com."</td>
																	</tr>";
															}
															if($eva->supple_com!=''){
																echo "<tr>
																		<td width='150' class='no_wrap'><label class='control-label'>Supplementary Courses :</label></td>
																		<td>".$eva->supple_com."</td>
																	</tr>";
															}
															if($eva->eng_teach_com!=''){
																echo "<tr>
																		<td width='150' valign='top'><label class='control-label'>Franch :</label></td>
																		<td>".$eva->eng_teach_com."</td>
																	</tr>";
															}
																
														?>
													</table>
												</td>
											</tr>
											<tr>
												<td align='center'>Signature</td>
												<td align='center' valigh='top' style="min-width:200px;">Director</td>
												
											</tr>
											<tr>
												<td>
													<ul class='signatures'>
													<?php 
													$i=0;
														foreach ($this->evaluate->getteacherbyclass($eva->classid,$eva->yearid) as $t) {
															if($i==6) echo "</ul><span style='clear:both'></span><ul class='signatures'>";
															if(@ file_get_contents(base_url('/assets/upload/teacher/signature/'.$t->empid.'.jpg'))){
																echo "<li>
																		<img class='signature' src='".base_url('/assets/upload/teacher/signature/'.$t->empid.'.jpg')."'/>
																		
																	 	
																	 </li>";
															}
															$i++;
														}

													 ?>
													</ul>
												</td>
												<td align='center'>
													<?PHP if(@ file_get_contents(base_url('/assets/upload/school/director/'.$schlevel.'.jpg'))){
																echo "<span>
																		<img class='signature' src='".base_url('/assets/upload/school/director/'.$schlevel.'.jpg')."'/>
																	 	<br/><span>".$direcrow->last_name.' '.$direcrow->first_name."</span>
																	 </span>";
															}
												?>
												</td>
											</tr>
										</table>
										<br/>
										
									</div>
										
								</div>
								
							</div>
						</div>
					</div>
				</div>
		<p style="page-break-after:always;"></p>
	<?PHP } ?>
	</div>
</div>
	<script type="text/javascript">
		$(function(){		
			jQuery("#print").on("click",function(){
				gPrint("tab_print");
			});
		})
		$("#export").on("click",function(e){
				var data=$('.table').attr('border',1);
					data = $("#export_tap").html().replace(/<img[^>]*>/gi,"");
	   			var export_data = $("<center><h3 align='center'></h3>"+data+"</center>").clone().find(".remove_tag").remove().end().html();
				window.open('data:application/vnd.ms-excel,' + encodeURIComponent(export_data));
    			e.preventDefault();
    			$('.table').attr('border',0);
		});
	</script>

