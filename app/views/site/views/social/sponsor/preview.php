
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
   			$school_adr=$school->address;?>
<div class="wrapper">
	<div class="clearfix" id="main_content_outer">
	    <div id="main_content">
	      <div class="row result_info col-xs-10">
		      	<div class="col-xs-6">
		      		<strong>Sponsor Details</strong>
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
								<th valign='top' align="center" style='width:80%'><h4 align="center"><b><u>SPONSOR DETAILS</u></b></h4></th>
							</thead>
						</table>
						<table align='center' id='preview' style='width:100%'>
								<tr>
									<td><label class="control-label">SponsorID :  </label></td>
									<td> <?php echo $data['sponsor_code']; ?></td>
									<td><label class="control-label">Sponsor's Name :</label></td>
									<td> <?php echo $data['last_name'].' '.$data['first_name']; ?></td>
									<td><label class="control-label">Title :</label></td>
									<td> <?php echo $data['position']; ?></td>
								</tr>
								<tr>
									<td ><label class="control-label">Address : </label></td>
									<td colspan="5"><?PHP echo $data['house_num'].', st.'.$data['street'].','.$data['city'].','.$data['country']?></label></td>
									
								</tr>
								<tr>
									<td><label class="control-label">Phone :  </label></td>
									<td> <?php echo $data['phone']; ?></td>
									<td><label class="control-label">Email :</label></td>
									<td> <?php echo (isset($data['email'])?$data['email']:""); ?></td>
									<td><label class="control-label">Last Visited :</label></td>
									<td> <?php echo (isset($data['last_visited_sch'])?$data['email']:""); ?></td>
								</tr>
								<tr>
									<td colspan='6'><label class="control-label">Goddaughter :</label></td>
								</tr>
								<tr>
									<td colspan='6'>
											<table align='center' id='preview' class='table table-bordered'>
												<thead class='tab_head'>
													<tr align='center' >
														<th>No</th>
														<th>Student Name</th>
														<th>Class</th>
														<th>FamilyID</th>
													</tr>
												</thead>
												<tbody>
													<?php 
													$i=1;
														foreach ($this->sponsor->getstdsponsor($data['sponsorid']) as $std) {
															echo "<tr>
																	<td>".str_pad($i,2,"0",STR_PAD_LEFT)."</td>
																	<td>".$std->last_name.' '.$std->first_name."</td>
																	<td>".$std->class_name."</td>
																	<td>".$std->family_code."</td>
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

