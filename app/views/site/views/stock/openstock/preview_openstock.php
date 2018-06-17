
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
  ?>
<div class="wrapper">
	<div class="clearfix" id="main_content_outer">
	    <div id="main_content">
	      <div class="row result_info col-xs-10">
		      	<div class="col-xs-6">
		      		<strong>Open Stock</strong>
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
		         <div id="tab_print">
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
								<th valign='top' align="center" style='width:80%'><h4 align="center"><b><u>OPEN STOCK DETAILS</u></b></h4></th>
							</thead>
						</table>
							<table align='center' id='preview' style='width:100%'>
								<tbody>
									<tr>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td width='120'><label class="control-label">Transaction Date:</label></td>
										<td width='110'><?php if($query->transdate!='0000-00-00') echo date('d-m-Y',strtotime($query->transdate)); else echo '00-00-0000';?></td>
									</tr>
									<tr>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td><label class="control-label">Referance no :</label></td>
										<td><?php echo $query->ref_no; ?></td>
									</tr>
								</tbody>
							</table>
							<div class="table-responsive">
								<table align='center' id='preview' class='table table-bordered'>
									<thead class='tab_head'>
										<tr align='center' >
											<th>No</th>
											<th>Stock Name</th>
											<th>Expired Date</th>
											<th>Quantity</th>
											<th>UOM</th>
											<th>Wharehouse</th>
										</tr>
									</thead>
									<tbody>
										<?php 
										$i=1;
											foreach ($this->openstocks->getstockopen(8,$query->transno) as $row) {
												echo "<tr>
														<td>$i</td>
														<td>$row->descr_eng</td>
														<td class='alignright'>";
															if($row->expire_date!='0000-00-00') echo date('d-m-Y',strtotime($row->expire_date)); else echo '00-00-0000';
												echo	"</td>
														<td class='alignright'>$row->qty</td>
														<td>$row->uom</td>
														<td>$row->wharehouse</td>
													</tr>";
													$i++;
											}
										 ?>
										 
									</tbody>
								</table>
							</div>
							<table align='right'>
								<tbody>
									<tr>
										<td colspan='5'></td>
										<td width='120'>Prepared by </td>
									</tr>	
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

