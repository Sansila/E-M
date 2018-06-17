
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
<?php if(isset($_GET['s'])){?>
<div class="wrapper">
	<div class="clearfix" id="main_content_outer">
	    <div id="main_content">
	      <div class="row result_info col-xs-10">
		      	<div class="col-xs-6">
		      		<strong>Family Detail</strong>
		      	</div>
		      	<div class="col-xs-6" style="text-align: right">
		      		<span class="top_action_button">	
			    		<a href="#" id="export" title="Export">
			    			<img src="<?php echo base_url('assets/images/icons/export.png')?>" />
			    		</a>
			    	</span>
		      		<span class="top_action_button">
						<a href="#" id="print" title="Print">
			    			<img src="<?php echo base_url('assets/images/icons/print.png')?>" />
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
		         <div class="table-responsive" id="tab_print"><?php }?>
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
						<?php if(isset($_GET['s'])){?>
						<div style='width:250px; float:left;'>
							<img src="<?php echo base_url('assets/images/logo/logo.png')?>" style='width:240px;' />
						
						</div>
						<div style='float:right;'>
								<h5 style='margin:15px 5px 0px 0px; font-weight:bold;'>HAPPY CHANDARA SCHOOL</h5>
								<span>Phum Prek Thmey , Sangkat Prek Thmey,</span><br/>
								<span>Khan Mean Chey,Phnom Penh</span>
						</div>
						<p style="clear:both"></p>
		                <table align='center'>
							<thead>
								<th valign='top' align="center" style='width:80%'><h4 align="center"><b><u>Social worker follow up form</u></b></h4></th>
							</thead>
						</table>
						<?php } ?>
						<table align='center' id='preview' style='width:100%'>
							<?php if(isset($_GET['s'])){?>
								<tr>
									<td><label class="control-label">FamilyID :  <?php echo $family['family_code'];?></label></td>
									<td><label class="control-label">Father Name :</label></td>
									<td><?php echo $family['father_name'];?></td>
									
									<td><label class="control-label">Mother Name :</label></td>
									<td ><?php echo $family['mother_name']; ?></td>
								</tr>
								<tr>
									<td><label class="control-label">Address :</label></td>
									<td colspan='2'><?php echo $family['village'].', '.$family['commune'].', '.$family['district'].', '.$family['province']; ?></td>
									<td><label class="control-label">Contact Num:</label></td>
									<td><?php echo $family['tel']; ?></td>
								</tr>
							<?php } ?>
							<?php if(!isset($_GET['s'])){?>
								<tr>
									<td><label class="control-label">Visited Information :</label></td>
									<td colspan='4'></td>
								</tr>
							<?php } ?> 
								<tr>
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
<?php if(isset($_GET['s'])){?>
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
<?php } ?>
