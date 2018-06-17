
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
   		$title='';
   		$dis_id=0;
   		if($_GET['dis_type']=='12')
   			$title='Families whom get rice every month'	;
   		if($_GET['dis_type']=='4')
   			$title='Families whom get rice 4 times per year'	;
   		if($_GET['dis_type']=='2')
   			$title='Families whom get rice 2 times per year'	;
   		if(isset($_GET['id']))
   			$dis_id=$_GET['id'];
   		$dis_info=$this->db->where('distribut_id',$dis_id)->get('sch_family_distributed')->row();


		
?>
<div class="wrapper">
	<div class="clearfix" id="main_content_outer">
	    <div id="main_content">
	      <div class="row result_info col-xs-10">
		      	<div class="col-xs-6">
		      		<strong>Distrbute Report</strong>
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
						<!-- <div style='float:right; margin:15px'>
								
								<span class='set'>Kingdom Of Cambodia </span><br/>
								<span class='set'>Nation Religion King</span>
						</div> -->
						<p style="clear:both"></p>
		                <table align='center'>
		                	<thead>
								<th valign='top' align="center" style='width:80%'><h4 align="center"><b><u>Annual Rice Proposal for : <?php echo $dis_info->year; ?></u></b></h4></th>
							</thead>
							<thead>
								<th valign='top' align="center" style='width:80%'><h4 align="center"><b><?php echo $title; ?></b></h4></th>
							</thead>
							<thead>
								<th valign='top' align="center" style='width:80%'><h4 align="center">Date : <?php echo date('d-m-Y',strtotime($dis_info->dis_date)) ?></h4></th>
							</thead>
						</table>
						<table align='center' class="table table-bordered" id='preview' style='width:100%'>
							<thead class='tab_head'>
								<tr align='center' >
									<th rowspan='2'  style="vertical-align: middle !important;">No</th>
									<th rowspan='2'  style="vertical-align: middle !important;">Family Code</th>
									<th rowspan='2'  style="vertical-align: middle !important;">Family Name</th>
									<!-- <th rowspan='2'  style="vertical-align: middle !important;">Father Name (Kh)</th> -->
									<th rowspan='2'  style="vertical-align: middle !important;">Family Name (KH)</th>
									<!-- <th rowspan='2' style="vertical-align: middle !important;">Mother Name(KH)</th> -->
									<th colspan='2' style="text-align: center !important;">Amount </th>
									<th rowspan='2' width='120' style="vertical-align: middle !important;">Remark</th>
									<th rowspan='2' style="vertical-align: middle !important;">Signature </th>
								</tr>
								<tr>
									<th>Rice(Kg)</th>
									<th>Oil(L)</th>
								</tr>
							</thead>
							<tbody>
								<?php 
								$i=1;
								$total_rice=0;
								$total_oil=0;
									foreach ($dis_bl as $row) {
										$family_name='';
										$family_name_kh='';
										if($row->father_name!=''){
											$family_name=$row->father_name;
											$family_name_kh=$row->father_name_kh;
										}else{
											$family_name=$row->mother_name;
											$family_name_kh=$row->mother_name_kh;
										}
											
										echo "
											<tr>
												<td class='no'>".str_pad($i,2,"0",STR_PAD_LEFT)."</td>
												 <td class='family_code' align='center'>".$row->family_code."</td>
												 <td class='father_name'>".$family_name."</td>	
												 <td class='mother_name'>".$family_name_kh."</td>
												 <td class='amt_rice' align='center'>".$row->amt_rice." ".$row->rice_uom."</td>
												 <td class='oil' align='center'>".$row->oil." ".$row->oil_uom."</td>
												 <td class='remark'>".$row->remark."</td>
												 <td class=''></td>
											</tr>
										";
										$i++;
										$total_rice+=$row->amt_rice;
										$total_oil+=$row->oil;
									}
								 ?>
								 <thead>
		                   			<th colspan="4">Total : <?php echo ($i-1);?></th>
		                   			<th style="text-align:center !important;"><?php echo $total_rice ;?> kg</th>
		                   			<th style="text-align:center !important;"><?php echo $total_oil ?> L</th>
		                   			<th colspan="2"></th>
								</thead>
							</tbody>
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

