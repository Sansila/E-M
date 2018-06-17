
<style type="text/css">
	#preview td{
		padding: 3px ;
	}
	th img{border:1px solid #CCCCCC; padding: 2px;}
	#preview_wr{
		margin: 10px auto !important;
	}
	span.set,.tab_head th,label.control-label{font-family:"Times New Roman", Times, serif !important; font-size: 14px;}
	td{font-family:"Khmer OS", "Khmer OS Battambang", "Khmer OS Bokor" !important; font-size: 14px;}

</style>
<?php
		$school=$this->db->where('schoolid',$this->session->userdata('schoolid'))->get('sch_school_infor')->row();
   			$school_name=$school->name;
   			$school_adr=$school->address;	

		if ($treatment['patient_type']=='student') {
			$position='Student';
			$sex='Female';
			$patient=$this->db->query("SELECT * 
									FROM v_student_profile 
									Where studentid='$treatment[patientid]'
									AND yearid='$treatment[yearid]' 
									")->row();
			$class=$this->green->getValue("SELECT class_name FROM sch_class WHERE classid='".$treatment['classid']."'");

		}else{
			$patient=$this->db->query("SELECT emp.sex,
											DATE_FORMAT(emp.dob,'%d-%m-%Y') as dob,
											emp.last_name,
											emp.first_name,
											emp_p.position  
									FROM sch_emp_profile emp
									INNER JOIN sch_emp_position emp_p
									ON(emp.pos_id=emp_p.posid) 
									Where emp.empid='$treatment[patientid]'
									")->row();
			$position=$patient->position;
			$class='';
			$sex=$patient->sex;
		}		
?>
<div class="wrapper">
	<div class="clearfix" id="main_content_outer">
	    <div id="main_content">
	      <div class="row result_info col-xs-10">
		      	<div class="col-xs-6">
		      		<strong>Health Care</strong>
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

<div class="row" id='export_tap'>
	<div class="col-sm-10" id='preview_wr'>
	    <div class="panel panel-default">
	      	<div class="panel-body">
		         <div class="table-responsive" id="tab_print">
		         		<style type="text/css">
							#preview td{
								padding: 3px ;
							}
							th img{border:1px solid #CCCCCC; padding: 2px;}
							#preview_wr{
								margin: 10px auto !important;
							}
							.tab_head th,label.control-label{font-family:"Times New Roman", Times, serif !important; font-size: 14px;}
							td{font-family:"Khmer OS", "Khmer OS Battambang", "Khmer OS Bokor" !important; font-size: 14px;}

						</style>
						
						<div style='width:250px; float:left;'>
							<img src="<?php echo base_url('assets/images/logo/logo.png')?>" style='width:200px;  height:40px;' />
							<div style=' font-weight:bold; text-transform: uppercase;'><?php echo $school_name ?></div>
							<div style=' font-weight:bold; font-style:italic'>Department : Health Care</div>
						</div>
						<div style='float:right; margin:15px'>
								
								<span class='set'>Kingdom Of Cambodia </span><br/>
								<span class='set'>Nation Religion King</span>
						</div>
						<p style="clear:both"></p>
		                <table align='center'>
							<thead>
								<th valign='top' align="center" style='width:80%'><h4 align="center"><b><u>DAILY HEALTH RECORD </u></b></h4></th>
							</thead>
						</table>
						<table align='center' id='preview' style='width:100%'>
								<tr>
									<td><label class="control-label">Patient's Name :  </label></td>
									<td><?PHP echo $patient->first_name .' '. $patient->last_name ?></td>
									<td><label class="control-label">Sex : </label></td>
									<td> <?php echo $sex; ?></td>
									<td><label class="control-label">Date Of Birth :</label></td>
									<td><?php echo $patient->dob ?></td>
								</tr>
								<tr>
									<td><label class="control-label">Position :</label></td>
									<td><?php echo $position ?></td>
									<td><label class="control-label">Class :</label></td>
									<td colspan='2'><?php echo $class ?></td>
								</tr>
								<tr>
									<td colspan='6'>
											<table align='center' id='preview' class='table table-bordered'>
												<thead class='tab_head'>
													<tr align='center' >
														<th>Date</th>
														<th>Symptom Or Diagnosis</th>
														<th>Treatment</th>
														<th>#Day</th>
														<th>Medician</th>
													</tr>
												</thead>
												<tbody>
													<?php 
														foreach ($this->threatments->gettreatmentbypatient($treatment['patientid'],$treatment['patient_type']) as $row) {
															$days_use=$this->db->query("SELECT MAX(days_use) as days_use from sch_medi_treatment_medicine where treatmentid='".$row->treatmentid."'")->row()->days_use;
															$doctor=$this->db-> query("SELECT first_name,last_name FROM sch_emp_profile WHERE empid='$row->doctorid'")->row();
															$doc_name=$doctor->first_name." ".$doctor->last_name;
															echo "<tr>
																	<td>"; if($row->date!='0000-00-00') echo date('d-m-Y',strtotime($row->date)); else echo '00-00-0000'; 
																echo "</td>
																	<td>";
																		
																		foreach ($this->threatments->gettreatdisease($row->treatmentid) as $disease) {																			
																			echo $disease->disease==""?$disease->sponfree."<br/>":$disease->disease."<br/>";																			
																		}
																echo "</td>
																	<td>";
																		foreach ($this->threatments->gettreatmidecinegroup($row->treatmentid) as $medi) {
																			echo "$medi->descr_eng <br>";
																		}
																echo "</td>
																	<td>".$days_use."</td>
																	<td>$doc_name</td>

																</tr>";
														}
													 ?>
												</tbody>
											</table>
									</td>
								</tr>
								
							</table>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script type="text/javascript">
		$(function(){			
			$("#print").on("click",function(){
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

