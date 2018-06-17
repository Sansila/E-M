
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

		$member=$this->db->where('familyid',$family->familyid)->get('sch_student_member')->result();
		$dis_info=$this->db->where('familyid',$family->familyid)->where('year',$year)->get('sch_family_distributed_detail')->result();
?>
<div class="wrapper">
	<div class="clearfix" id="main_content_outer">
	    <div id="main_content">
	      <div class="row result_info col-xs-10">
		      	<div class="col-xs-6">
		      		<strong>Distribute Details</strong>
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
						</div>
						<div style='float:right; margin:15px'>
						</div>
						<p style="clear:both"></p>
		                <table align='center'>
							<thead>
								<th valign='top' align="center" style='width:80%'><h4 align="center"><b><u>Family Rice Received <?php echo $year;?> </u></b></h4></th>
							</thead>
						</table>
						<table align='center' id='preview' style='width:100%'>
								<tr>
									<td><label class="control-label">FamilyID :  </label> <?PHP echo $family->family_code; ?></td>
									<td><label class="control-label">Father's Name :</label></td>
									<td> <?php echo $family->father_name; ?></td>
									<td><label class="control-label">Father's Name (Kh) :</label></td>
									<td> <?php echo $family->father_name_kh; ?></td>
								</tr>
								<tr>
									<td><label class="control-label"></label></td>
									<td><label class="control-label">Mother's Name :</label></td>
									<td><?php echo $family->mother_name ?></td>
									<td><label class="control-label">Mother's Name (Kh) :</label></td>
									<td><?php echo $family->mother_name_kh ?></td>
								</tr>
								<tr>
									<td style="vertical-align: top !important;"><label class="control-label">Family's Member : </label></td>
									<td colspan="4" >
										<table style='width:100%'>
												<?PHP 
												$i=1;
													// echo "<tr>";
													foreach ($member as $member) {
														if(($i+1)%2==0) echo "<tr>";
																		echo "<td> $i. ".$member->last_name.' '.$member->first_name."</td>";
														if(($i%2)==0) echo "</tr>";
														$i++;
													}
												
												?>
										</table>
									</td>
									
								</tr>
								<tr>
									<td colspan='5'>
											<table align='center' id='preview' class='table table-bordered'>
												<thead class='tab_head'>
													<tr align='center' >
														<th>No</th>
														<th>Date</th>
														<th>Rice (Kg)</th>
														<th>Oil (L)</th>
														<th>Remark</th>
													</tr>
												</thead>
												<tbody>
													<?php 
														$no=1;
														$total_rice=0;
														$total_oil=0;
														foreach ($dis_info as $dis_info) {
															echo "<tr>
																	<td>".$no."</td>
																	<td class='alignright'>".date('d-m-Y',strtotime($dis_info->dis_date))."</td>
																	<td class='alignright'>".$dis_info->amt_rice." Kg</td>
																	<td class='alignright'>".$dis_info->oil." L</td>
																	<td>".$dis_info->remark."</td>
																</tr>";
																$no++;
																$total_rice+=$dis_info->amt_rice;
																$total_oil+=$dis_info->oil;
														}
													 ?>
												</tbody>
											</table>
											<table class='table'>
												<thead>
						                   			<th colspan="2"><label class="control-label">Total : <?php echo ($no-1);?></label></th>
						                   			<th style="text-align:left !important;"><label class="control-label"><?php echo $total_rice ;?> kg</label></th>
						                   			<th style="text-align:left !important;"><label class="control-label"><?php echo $total_oil ?> L</label></th>
						                   			<th ></th>
												</thead>
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

