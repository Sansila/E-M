

<div class="wrapper">
	<div class="clearfix" id="main_content_outer">
	    <div id="main_content">
	      <div class="row result_info col-xs-12">
		      	<div class="col-xs-3">
		      		<strong>Family Detail</strong>
		      	</div>
		      	<div class="col-xs-9" style="text-align: right">
		      		<!-- <span class="top_action_button">
							<div style='float:right'>
								<input type='button' onclick="search(event);" class='btn btn-default' id='btnsearch' value='Search'/>
							</div>
		      		</span> -->
		      		<span class="top_action_button">
						<a href="#" id="print" title="Print">
			    			<img src="<?php echo base_url('assets/images/icons/print.png')?>" />
			    		</a>
		      		</span>	
		      		<!-- <span class="top_action_button">
							<div class='col-xs-2 ' style='margin-top:3px !important; float:right'>
								<input type='text' class='form-control input-sm' id='max_revenu' placeholder='Max Revenue'/>
							</div>
		      		</span>
		      		<span class="top_action_button">
							<div class='col-xs-2 ' style='margin-top:3px !important; float:right'>
								<input type='text' class='form-control input-sm' id='min_revenu' placeholder='Min Revenue'/>
							</div>
		      		</span>
		      		<span class="top_action_button">
							<div class='col-xs-2 ' style='margin-top:3px !important; float:right'>
								<input type='text' class='form-control input-sm' id='max_member' placeholder='Max Member'/>
							</div>
		      		</span>
		      		<span class="top_action_button">
							<div class='col-xs-2 ' style='margin-top:3px !important; float:right'>
								<input type='text' class='form-control input-sm' id='min_member' placeholder='Min Member'/>
							</div>
		      		</span> -->
		      		
		      	</div> 			      
		  </div>
		</div>
	</div>
</div>
<div class="wrapper" id="tab_print">
<?php foreach ($familys as $family) { ?>
		<div class="row">
			<div class="col-sm-12" id='preview_wr'>
			    <div class="panel panel-default">
			      	<div class="panel-body">
				         <div class="table-responsive" >
				         		<style type="text/css">
									#preview>tr>td{
										padding: 2px ;
										line-height: 0.2 !important;
									}
									th img{border:1px solid #CCCCCC; padding: 2px;}
									#preview_wr{
										margin: 10px auto !important;
									}
									.tab_head th,label.control-label{font-family:"Times New Roman", Times, serif !important; font-size: 12px !important; line-height:0.2 !important;}
									td{font-family:"Khmer OS", "Khmer OS Battambang", "Khmer OS Bokor" !important; font-size: 12px !important; line-height:1 !important;}
									.table > tbody > tr > td, 
									.table > tbody > tr > th, 							
									.table > thead > tr > td, 
									.table > thead > tr > th{
										padding: 3px !important;
										line-height:1 !important;
									}
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
										<th valign='top' align="center" style='width:80%'><h5 align="center"><u>FAMILY INFORMATION</u></h5></th>
									</thead>
								</table>
								<table align='center' id='preview' style='width:100%'>

										<tr>
											<td><label class="control-label">Family ID:</label></td>
											<td  colspan='4'><?php echo $family['family_code']; ?></td>
											
										</tr>
										<tr>
											<td><label class="control-label">Address : </label></td>
											<td colspan='4'><?php echo $family['permanent_adr']; ?></td>
										</tr>
										<tr>
											<td><label class="control-label">Zoon : </label></td>
											<td colspan='4'><?php echo $family['zoon']; ?></td>
										</tr>
										<tr>
											<td><label class="control-label">Contact Number : </label></td>
											<td colspan='4'><?php echo $family['tel']; ?></td>
										</tr>
										<tr>
											<td><label class="control-label">Housing Type :</label></td>
											<td><?php echo $family['housing_type']; ?></td>
											
											<td><label class="control-label">Drinking Water :</label></td>
											<td  colspan='2'><?php echo $family['drinking_water']; ?></td>
										</tr>
										<tr>
											<td><label class="control-label">Electricity :</label></td>
											<td><?php if($family['electricity']=='1') echo 'Yes'; elseif ($family['electricity']=='0') echo 'No'; else echo $family['electricity']; ?></td>
											
											<td><label class="control-label">Envirenment:</label></td>
											<td  colspan='2'><?php echo $family['envirenment']; ?></td>
										</tr>
										<tr>
											<td><label class="control-label">Sleeping Place :</label></td>
											<td><?php echo $family['sleeping_place']; ?></td>
											
											<td><label class="control-label">Santitation:</label></td>
											<td  colspan='2'><?php echo $family['santitation']; ?></td>
										</tr>
										<tr>
											<td><label class="control-label">Property :</label></td>
											<td><?php echo $family['property']; ?></td>
											
											<td><label class="control-label">Extra Information :</label></td>
											<td  colspan='2'><?php echo $family['extra_information']; ?></td>
										</tr>
										<tr>
											<td><label class="control-label">Revenue Family : </label></td>
											<td colspan='4'><?php echo $family['revenue']." ".$family['family_revenu_currcode']; ?></td>
										</tr>
										<tr>
											<td style='width:150px'><label class="control-label">Respondsible :</label></td>
											<td colspan='4'></td>
										</tr>
										<tr>
											<td colspan='5'>
													<table align='center' class='table table-bordered'>
														<thead class='tab_head'>
															<th>No</th>
															<th>Name </th>
															<th class='no_wrap'>Name in Khmer</th>
															<th>Sex </th>
															<th>Age </th>
															<th class='no_wrap'>Date of Birth </th>
															<th>Occupation </th>
															<th>Revenue</th>
															<th class='no_wrap'>Social Status</th>
															<th>Health </th>
															<th class='no_wrap'>Civil Status </th>
															<th>Relationship</th>
															<th>Education</th>
														</thead>
														<tbody>
															<tr>
												    			<td>1</td>	
												    			<td><?php echo $family['mother_name']; ?></td>
												    			<td><?php echo $family['mother_name_kh']; ?></td>	
												    			<td>F</td>
												    			<td><?php echo $this->family->age($this->green->formatSQLDate($family['mother_dob'])); ?></td>
												    			<td class="alright no_wrap"><?php echo $this->green->formatSQLDate($family['mother_dob']);?></td>	
												    			
												    			<td><?php echo $family['mother_ocupation']; ?></td>
												    			<td class="alright"><?php echo $family['mother_revenu'].' '.$family['mother_revenu_currcode']?></td>
												    			<td><?php echo $family['ma_soc_status']; ?></td>	
												    			<td><?php echo $family['ma_health']; ?></td>
												    			<td></td>
												    			<td>Mother's Child</td>
												    			
												    			<td></td>				    			
												    		</tr>
												    		<tr>
												    			<td>2</td>	
												    			<td><?php echo $family['father_name']; ?></td>	
												    			<td><?php echo $family['father_name_kh']; ?></td>	
												    			<td>M</td>
												    			<td><?php echo $this->family->age($this->green->formatSQLDate($family['father_dob'])); ?></td>
												    			<td class="alright no_wrap"><?php echo $this->green->formatSQLDate($family['father_dob']); ?></td>	
												    			<td><?php echo $family['father_ocupation']; ?></td>	
												    			<td class="alright"><?php echo $family['father_revenu'].' '.$family['father_revenu_currcode']?></td>
												    			<td><?php echo $family['fa_soc_status']; ?></td>	
												    			<td><?php echo $family['fa_health']; ?></td>
												    			<td></td>
												    			<td>Father's Child</td>
												    			<td></td>				    			
												    		</tr>
															<?php
															$i=3;
																foreach ($this->family->getresponfamily($family['familyid']) as $res_row){
														    			echo "
														    				<tr>
																    			<td>$i</td>	
																    			<td>$res_row->last_name $res_row->first_name</td>
																    			<td>$res_row->last_name_kh $res_row->first_name_kh</td>	
																    			<td>$res_row->sex</td>
																    			<td>".$this->family->age($this->green->formatSQLDate($res_row->dob))."</td>
																    			<td class='alright no_wrap'>".$this->green->formatSQLDate($res_row->dob)."</td>	
																    			<td>$res_row->occupation</td>
																    			<td class='alright no_wrap'>$res_row->revenue</td>	
																    			<td>$res_row->social_status</td>
																    			<td>$res_row->health</td>
																    			<td>$res_row->civil_status</td>
																    			<td>$res_row->relationship</td>	
																    			<td>$res_row->education</td>			    			
																    		</tr>
														    			";
														    			$i++;
														    	}


															 ?>
														</tbody>
													</table>
											</td>
										</tr>
										<tr>
											<td style='width:150px'><label class="control-label">Member : </label></td>
											<td colspan='4'></td>
										</tr>
										<tr>
													<td colspan='5'Member>
															<table align='center' class='table table-bordered'>
																<thead class='tab_head'>
																	<th>No</th>
																	<th>Name </th>
																	<th class='no_wrap'>Name in Khmer </th>
																	<th>Sex </th>
																	<th>Age </th>
																	<th class='no_wrap'>Date of Birth </th>
																	<th>Occupation </th>
																	<th>Revenue </th>
																	<th class='no_wrap'>Social Status</th>
																	<th>Health </th>
																	<th class='no_wrap'>Civil Status </th>
																	<th>Relationship </th>
																	<th>School</th>
																	<th>Grade</th>
																	<th>Class</th>
																	<th class='no_wrap'>Leave School</th>
																</thead>
																<?php
																$i=1;
																foreach ($this->family->getmemberfamily($family['familyid']) as $mem_row) {
																	 if($mem_row->leave_school=='1') $l='Yes'; elseif ($mem_row->leave_school=='0') $l='No'; else echo $l=$mem_row->leave_school; 
																	$class='';
																  	$select_relat=$this->family->getmemberfamily($family['familyid']);
																  	if($mem_row->studentid!=''){
																		$year=$this->db->query("SELECT year FROM sch_student_enrollment Where studentid='$mem_row->studentid' AND year=(SELECT MAX(year) FROM sch_student_enrollment WHERE studentid='$mem_row->studentid')")->row()->year;	
																		$class=$this->family->getclassmember($mem_row->studentid,$year);
																  	}
																		
													    			echo "
													    				<tr>
															    			<td>$i</td>	
															    			<td>$mem_row->last_name $mem_row->first_name</td>	
															    			<td>$mem_row->last_name_kh $mem_row->first_name_kh</td>	
															    			<td>$mem_row->sex</td>
															    			<td>".$this->family->age($this->green->formatSQLDate($mem_row->dob))."</td>
															    			<td class='alright no_wrap'>".$this->green->formatSQLDate($mem_row->dob)."</td>	
															    			<td>$mem_row->occupation</td>
															    			<td class='alright no_wrap'>$mem_row->revenue</td>
															    			<td>$mem_row->social_status</td>
															    			<td>$mem_row->health</td>
															    			<td>$mem_row->civil_status</td>
															    			<td>$mem_row->relationship</td>
															    			<td>$mem_row->school</td>
															    			<td>$mem_row->grade_level</td>
															    			<td>$class</td>
															    			<td>$l</td>			    			
															    		</tr>
													    			";
													    			$i++;
													    		}


																 ?>
																

															</table>
													</td>
												</tr>
												<tr>
													<td colspan='2'><label class="control-label">Distance From School : </label><?php echo $family['from_school']." ".$family['measure'] ?></td>
													<td colspan='4'></td>
												</tr><tr>
											<td colspan='5'>
													<table align='center' id='preview' class='table table-bordered'>
														<thead class='tab_head'>
															<tr align='center' >
																<th rowspan='2'  style="vertical-align: middle !important;">No</th>
																<th rowspan='2'  style="vertical-align: middle !important;">Date</th>
																<th rowspan='2'  style="vertical-align: middle !important;">Update Information</th>
																<th rowspan='2'  style="vertical-align: middle !important;">S/W Activities</th>
																<th rowspan='2' style="vertical-align: middle !important;">Next Plan</th>
																<th colspan='2' style="text-align: center !important;">Visited by </th>
															</tr>
															<tr>
																<th>Employee</th>
																<th>Sponsors</th>
															</tr>
														</thead>
														
														<tbody>
															<?php
															$i=1;
																foreach ($this->visit->getvisitrow($family['familyid']) as $family_visit) {
																		if($family_visit->date==null || $family_visit->date=='' || $family_visit->date=='00-00-0000' )
																			$date='00-00-0000';
																		else
																			$date=date("d-m-Y", strtotime($family_visit->date));
																		$emp=$this->db->select('*')
																					->from('sch_emp_profile emp')
																					->join('sch_family_visit_staff st','emp.empid=st.empid','inner')
																					->where('st.visitid',$family_visit->visitid)
																					->get()->result();
																		$spon=$this->db->select('*')
																					->from('sch_family_sponsor sp')
																					->join('sch_family_visit_sponsor s','sp.sponsorid=s.sponsorid','inner')
																					->where('s.visitid',$family_visit->visitid)
																					->get()->result();
														    			echo "
														    				<tr>
																    			<td>$i</td>	
																    			<td class='no_wrap'>$date</td>	
																    			<td>$family_visit->update_info</td>	
																    			<td>$family_visit->sw_activities</td>
																    			<td>$family_visit->outcome</td>
																    			<td>";
																    			foreach ($emp as $row) {
																    				echo "$row->first_name $row->last_name <br>";
																    			}
																    		echo "</td>
																    			<td>";
																    			
																    			foreach ($spon as $row) {
																    				echo "$row->first_name $row->last_name <br>";
																    			}
																    	echo	"</td>			    			
																    		</tr>";
														    			$i++;
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
			<p style="page-break-after:always;"></p>
	<?php } ?>
</div>
	<script type="text/javascript">
		$(function(){			
			$("#print").on("click",function(){
				gPrint("tab_print");
			});
			
		})
		function search(event){
				var min_r=jQuery('#min_revenu').val();
				var max_r=jQuery('#max_revenu').val();
				var min_m=jQuery('#min_member').val();
				var max_m=jQuery('#max_member').val();
				location.href="<?php echo base_url(); ?>index.php/social/family/multipreview?mr="+min_r+"&mar="+max_r+"&mm="+min_m+"&mam="+max_m;
				
			}
	</script>

