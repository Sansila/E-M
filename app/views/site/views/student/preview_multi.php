<?php
	$this->db->where('yearid',$_GET['yearid']);
	$year=$this->db->get('sch_school_year')->row()->sch_year;
 ?>
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

	<div class="wrapper">
		<div class="clearfix" id="main_content_outer">
		    <div id="main_content">
		      <div class="row result_info col-xs-12">
			      	<div class="col-xs-6">
			      		<strong>Student Detail</strong>
			      	</div>
			      	<div class="col-xs-6" style="text-align: right">
			      		<span class="top_action_button">
							<a href="#" id="print" title="Print">
				    			<img src="<?php echo base_url('assets/images/icons/print.png')?>" />
				    		</a>
			      		</span>	
			      		<span class="top_action_button">
							Class : <div class='col-xs-4 ' style='margin-top:3px !important; float:right'>
										<select onchange='previewmulti(event);' class='form-control input-sm' id='s_classid' name='s_classid'>
											<option value=''>----Select----</option>
											<?php
												foreach ($this->db->get('sch_class')->result() as $c) {?>
													<option value='<?php echo $c->classid ?>'<?php if(isset($class_id)) if($class_id==$c->classid) echo 'Selected' ?>><?php echo $c->class_name ?></option>	
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
<div class='table-responsive col-xs-10'>
	<div class="wrapper col-sm-12" id="tab_print">

	<?php 
		foreach ($student as $student) {	

			$family=$this->std->getfamilyrow($student['familyid']);
		
	?>

	 <div class="row ">
		<div class="col-sm-12" >
		    <div class="panel panel-default">
		      	<div class="panel-body">
			         <div class="table-responsive" id="">
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
								<img src="<?php echo base_url('assets/images/logo/logo.png')?>" style='width:240px;' />
							
							</div>
							<div style='float:left;'>
									<h5 style='margin:15px 5px 0px 0px; font-weight:bold;'>HAPPY CHANDARA SCHOOL</h5>
									<span>Phum Prek Thmey , Sangkat Prek Thmey,</span><br/>
									<span>Khan Mean Chey,Phnom Penh</span>
							</div>
							<p style="clear:both"></p>
			                <table align='center'>
								<thead>
									<th valign='top' align="center" style='width:80%'><h5 align="center"><u>FICHE DE RENSEIGNEMENTS</u></h5><div style='text-align:center;'>Année Scolaire: <?php echo $year;?> </div></th>
									<th align='right'>
										<img src='<?php if(@ file_get_contents(site_url('../assets/upload/students/'.$_GET['yearid'].'/'.$student['student_num'].'.png'))) echo site_url('../assets/upload/students/'.$_GET['yearid'].'/'.$student['student_num'].'.png'); else echo site_url('../assets/upload/No_person.jpg') ?>' style='width:140px; height:180px; float:right; margin-top:10px; margin-right:15px;'/>
									</th>
								</thead>
							</table>
							<table align='center' id='preview' style='width:100%'>
									<tr>
										<td><label class="control-label">Student ID :</label></td>
										<td><?php echo $student['student_num']; ?></td>
										<td><label class="control-label">Family ID :</label></td>
										<td><?php echo $family->family_code; ?></td>
										<td><label class="control-label">Class : </label><?php echo $student['class_name']; ?></td>
									</tr>
									<tr>
										<td><label class="control-label">Nom et Prénom:</label></td>
										<td><?php echo $student['last_name']." ".$student['first_name']; ?></td>
										
										<td><label class="control-label">En Khmer:</label></td>
										<td  colspan='2'><?php echo $student['last_name_kh']." ".$student['first_name_kh']; ?></td>
									</tr>
									<tr>
										<td><label class="control-label">Date de naissance : </label></td>
										<td colspan='4'><?php echo $student['dob']; ?></td>
									</tr>
									<tr>
										<td><label class="control-label">Nationalité : </label></td>
										<td colspan='4'><?php echo $student['nationality']; ?></td>
									</tr>
									<tr>
										<td><label class="control-label">Adresse : </label></td>
										<td colspan='4'><?php echo $family->permanent_adr; ?></td>
									</tr>
									<tr>
										<td><label class="control-label">Nom et Prénom de  la mère:</label></td>
										<td><?php echo $family->mother_name; ?></td>
										<td><?php echo $family->mother_name_kh; ?></td>
										<td><label class="control-label">Date de naissance : </label></td>
										<td><?php if($family->mother_dob!='0000-00-00') echo date('d-m-Y',strtotime($family->mother_dob)); else echo '00-00-0000'; ?></td>
									</tr>
									<tr>
										<td><label class="control-label">Profession : </label></td>
										<td><?php echo $family->mother_ocupation; ?></td>
										<td><label class="control-label">Revenu : </label></td>
										<td colspan='2'><?php echo $family->mother_revenu.' '.$family->mother_revenu_currcode; ?></td>
									</tr>
									<tr>
										<td><label class="control-label">Nom et Prénom du père:</label></td>
										<td><?php echo $family->father_name; ?></td>
										<td><?php echo $family->father_name_kh; ?></td>
										<td><label class="control-label">Date de naissance : </label></td>
										<td><?php if($family->father_dob!='0000-00-00') echo date('d-m-Y',strtotime($family->father_dob)); else echo '00-00-0000'; ?></td>
									</tr>
									<tr>
										<td><label class="control-label">Profession : </label></td>
										<td><?php echo $family->father_ocupation; ?></td>
										<td><label class="control-label">Revenu : </label></td>
										<td colspan='2'><?php echo $family->father_revenu.' '.$family->father_revenu_currcode; ?></td>
									</tr>
									<tr>
										<td><label class="control-label">Revenu Familial : </label></td>
										<td colspan='4'><?php echo $family->revenue.' '.$family->family_revenu_currcode; ?></td>
										
									</tr>
									<tr>
										<td style='width:150px'><label class="control-label">Frères et Sœurs: </label></td>
										<td colspan='4'></td>
									</tr>
									<tr>
										<td colspan='5'Member>
												<table align='center' id='preview' class='table table-bordered'>
													<thead class='tab_head'>
														<th>No</th>
														<th>Nom  et Prénom</th>
														<th>Date de naissance</th>
														<th>Sexe</th>
														<th>Profession</th>
														<th>Niveau  scolaire</th>
													</thead>
													<?php
													$i=1;
														foreach ($this->std->getmemberfamily($student['familyid'],0,$student['studentid']) as $mem_row) {
															//echo $mem_row->memid.'/'.$student['studentid']; 
																if($mem_row->dob==null || $mem_row->dob=='' || $mem_row=='00-00-0000' )
																	$date='00-00-0000';
																else
																	$date=date("d-m-Y", strtotime($mem_row->dob));
																//$select_relat='';
																// $this->db->where('memberid',$mem_row->memid);
															 //  	$this->db->where('studentid',$student['studentid']);
															 //  	if($this->db->get('sch_student_mem_detail')->num_rows()>0)
															 //  		$select_relat=$this->db->get('sch_student_mem_detail')->row()->relationship;
															  	$select_relat=$this->std->getrelation($student['studentid'],$mem_row->memid);
												    			echo "
												    				<tr>
														    			<td>$i</td>	
														    			<td>$mem_row->last_name $mem_row->first_name </td>	
														    			<td>$date</td>	
														    			<td>$mem_row->sex</td>
														    			<td>$mem_row->occupation</td>	
														    			<td>$mem_row->grade_level</td>				    			
														    		</tr>
												    			";
												    			$i++;
												    		}


													 ?>
													

												</table>
										</td>
									</tr>
									<tr>
										<td colspan='2'><label class="control-label">Distance parcourue (école-maison) : </label> <?php echo $family->from_school.' '.$family->measure; ?></td>
										<td colspan='4'></td>
									</tr>
								</table>
						</div>
					</div>
				</div>
			</div>
		</div>
		<p style="page-break-after:always;"></p>
		<?php } ?>
	</div>
</div>
	<script type="text/javascript">
		$(function(){			
			$("#print").on("click",function(){
				gPrint("tab_print");
			});
			
		})
		function previewmulti(event){
			var classid=$('#s_classid').val();
			var yearid=$('#year').val();
			location.href="<?PHP echo site_url('student/student/previewmulti');?>/"+classid+"?yearid="+yearid;
		}
	</script>

