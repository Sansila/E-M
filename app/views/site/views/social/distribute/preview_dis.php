
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
   		if($_GET['dis_type']=='12')
   			$title='Families whom get rice every month'	;
   		if($_GET['dis_type']=='4')
   			$title='Families whom get rice 4 times per year'	;
   		if($_GET['dis_type']=='2')
   			$title='Families whom get rice 2 times per year'	;


		
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
						</div>
						<!-- <div style='float:right; margin:15px'>
								
								<span class='set'>Kingdom Of Cambodia </span><br/>
								<span class='set'>Nation Religion King</span>
						</div> -->
						<p style="clear:both"></p>
		                <table align='center'>
							<thead>
								<th valign='top' align="center" style='width:80%'><h4 align="center"><b><u><?php echo $title; ?></u></b></h4></th>
							</thead>
						</table>
						<table align='center' class="table table-bordered" id='preview' style='width:100%'>
							<thead class='tab_head'>
								<tr align='center' >
									<th rowspan='2'  style="vertical-align: middle !important;">Family Code</th>
									<th rowspan='2'  style="vertical-align: middle !important;">Father Name</th>
									<th rowspan='2'  style="vertical-align: middle !important;">Father Name (Kh)</th>
									<th rowspan='2'  style="vertical-align: middle !important;">Mother Name</th>
									<th rowspan='2' style="vertical-align: middle !important;">Mother Name(KH)</th>
									<th colspan='2' style="text-align: center !important;">Amount </th>
									<th rowspan='2' width='150' style="vertical-align: middle !important;">Remark</th>
								</tr>
								<tr>
									<th>Rice(Kg)</th>
									<th>Oil(L)</th>
								</tr>
							</thead>
							<tbody>
								<?php 
									foreach ($dis_bl as $row) {
										echo "
											<tr>
												 <td class='family_code' align='center'>".$row['family_code']."</td>
												 <td class='father_name'>".$row['father_name']."</td>										 
												 <td class='father_name_kh'>".$row['father_name_kh']."</td>

												 <td class='mother_name'>".$row['mother_name']."</td>
												 <td class='mother_name_kh'>".$row['mother_name_kh']."</td>

												 <td class='amt_rice' align='center'>".$row['amt_rice']." ".$row['rice_uom']."</td>
												 <td class='oil' align='center'>".$row['oil']." ".$row['oil_uom']."</td>
												 <td class='remark'>".$row['remark']."</td>
											</tr>
										";
									}
								 ?>
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

