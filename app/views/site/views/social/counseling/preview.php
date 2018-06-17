
<style type="text/css">
	#preview td{
		padding: 3px ;
	}
	th img{border:1px solid #CCCCCC; padding: 2px;}
	#preview_wr{
		margin: 10px auto !important;
	}
	span.set,.tab_head th,label.control-label{font-family:"Times New Roman", Times, serif !important; font-size: 14px !important;}
	td{font-family:"Khmer OS", "Khmer OS Battambang", "Khmer OS Bokor" !important; font-size: 14px;}

</style>
<?php
		$school=$this->db->where('schoolid',$this->session->userdata('schoolid'))->get('sch_school_infor')->row();
   			$school_name=$school->name;
   			$school_adr=$school->address;	
   		$family=$this->db->where('familyid',$data['familyid'])->get('sch_family')->row();
   		if($data['c_type']=='father'){
   			$name=$family->father_name;
   			$class='';
   			$dob=$family->father_dob;
   		}
   		if($data['c_type']=='mother'){
   			$name=$family->mother_name;
   			$class='';
   			$dob=$family->mother_dob;
   		}
   		if($data['c_type']=='member'){
   			$member=$this->db->where('memid',$data['mem_id'])->get('sch_student_member')->row();
   			$name=$member->last_name.' '.$member->first_name;
   			$classrow=$this->db->where('classid',$data['classid'])->get('sch_class')->row();
   			$class=$classrow->class_name;
   			$dob=$member->dob;
   		}

		
?>
<div class="wrapper">
	<div class="clearfix" id="main_content_outer">
	    <div id="main_content">
	      <div class="row result_info col-xs-12">
		      	<div class="col-xs-6">
		      		<strong>Psychologist Details</strong>
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
	<div class="col-sm-12" id='preview_wr'>
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
							
						</div>
						<div style='float:right; margin:15px'>
							<div style=' font-weight:bold; text-transform: uppercase;'><?php echo $school_name ?></div>
						</div>
						<p style="clear:both"></p>
		                <table align='center'>
							<thead>
								<th valign='top' align="center" style='width:80%'><h4 align="center"><b><u>Psychologist</u></b></h4></th>
							</thead>
						</table>

						<table align='center' id='preview' style='width:100%'>
								<tr>
									<td><label class="control-label">Name : </label> </td>
									<td> <?php echo $name; ?></td>
									<td><label class="control-label">Grade : </label> <?php echo $class; ?></td>
									<td><label class="control-label">Family ID : </label> <?php echo $family->family_code ?></td>
									<td><label class="control-label">Date Of Birth : </label></td>
									<td> <?php echo $this->green->convertSQLDate($dob); ?></td>
								</tr>
								<!-- <tr>
									<td colspan='6'><label class="control-label">Reason : </label> <?php echo $data['reason'] ?></td>
								</tr> -->
								<tr>
									<td colspan='6'><label class="control-label">Address : </label> <?php echo $family->permanent_adr; ?></td>
								</tr>
								<!-- <tr>
									<td colspan='3'><label class="control-label">Date :</label> <?php echo date('d-m-Y',strtotime($data['date'])) ?></td>
									<td  colspan='3'><label class="control-label">Session :</label> <?php echo $data['session'] ?></td>
								</tr> -->
								<tr>
									<td colspan='6'>
										<div class="table-responsive">
											<table class='table table-bordered'>	
												<thead>
													<th>Session</th>
													<th>Date</th>
													<th>Reason</th>
													<th>Update Info</th>
													<th>Observation</th>
													<th>Intervation</th>
													<th>Planing Next session</th>
													<th>Next Date</th>
												</thead>
												<tbody>
													<?php
													foreach ($this->counsel->getfamilycoun($family->familyid,$data['c_type'],$data['mem_id']) as $coun) {
														echo "<tr>
															<td>$coun->session</td>
															<td>".$this->green->convertSQLDate($coun->date)."</td>
															<td>$coun->reason</td>
															<td>$coun->update_info</td>
															<td>$coun->observation</td>
															<td>$coun->intervation</td>
															<td>$coun->plan_next_session</td>
															<td>".$this->green->convertSQLDate($coun->plan_next_date)."</td>
														</tr>";
													}
													 ?>
												</tbody>
											</table>
										</div>
									</td>
								</tr>
								<!-- <tr>
									<td colspan='6'><label class="control-label">+ Update Information</label> </td>
								</tr>
								<tr>
									<td colspan='6'>&nbsp&nbsp<?php echo '  '.$data['update_info']; ?></td>
								</tr>
								<tr>
									<td colspan='6'><label class="control-label">+ Observation</label> </td>
								</tr>
								<tr>
									<td colspan='6'>&nbsp&nbsp<?php echo '  '.$data['observation']; ?></td>
								</tr>
								<tr>
									<td colspan='6'><label class="control-label">+ Intervation</label> </td>
								</tr>
								<tr>
									<td colspan='6'>&nbsp&nbsp<?php echo '  '.$data['intervation']; ?></td>
								</tr>
								<tr>
									<td colspan='6'><label class="control-label">+ Planning Next session : </label> <?php echo $data['plan_next_session']; ?></td>
								</tr> -->
								<tr>
									<td colspan='5'><label class="control-label"></label>  <?php //echo date('d-m-Y',strtotime($data['plan_next_date'])); ?></td>
									<td colspan='5'><label class="control-label"> Signature </label></td>
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

