

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
	      <div class="row result_info col-xs-10">
		      	<div class="col-xs-6">
		      		<strong>Stock Detail</strong>
		      	</div>
		      	<div class="col-xs-6" style="text-align: right">
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
<div class="row">
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
								<th valign='top' align="center" style='' colspan="2"><h5 align="center"><u><div style='text-align:center;font-weight:bold' class="control-label">Stock Profile</h5></div></th>
								<th align='right'>
									<!-- <img src='<?php if(@ file_get_contents(site_url('../assets/upload/students/'.$_GET['yearid'].'/'.$stock['student_num'].'.jpg'))) echo site_url('../assets/upload/students/'.$_GET['yearid'].'/'.$stock['student_num'].'.jpg'); else echo site_url('../assets/upload/No_person.jpg') ?>' style='width:140px; height:180px; float:right; margin-top:10px; margin-right:15px;'/> -->
								</th>
							</thead>
						</table>
						<table align='center' id='preview' style='width:100%' class="table">
							<tr>
								<td><label class="control-label">Code:</label></td>
								<td><?php echo $stock['stockcode']; ?></td>
								<td><label class="control-label">Description:</label></td>
								<td><?php echo $stock['descr_eng']; ?></td>
								<td><label class="control-label">Category:</label></td>
								<td><?php echo $stock['category'] ?></td>									
								<td><label class="control-label">Reorder Qty:</label></td>
								<td  colspan='2'><?php echo $stock['reorder_qty']?></td>
							</tr>								
							<tr>								
								<td colspan="4"><label class="control-label"></label></td>
								
								<td><label class="control-label">Expired Date</label></td>
								<td><label class="control-label">Quantity in stock</label></td>
								<td><label class="control-label">Unit of Measure</label></td>
								<td></td>
							</tr>							
							<?php 
								if(count($stock_bl->result())>0){
									foreach($stock_bl->result() as $row){?>
										<tr>
											<td colspan="4"></td>
											<td><?php echo $row->expired_date ?></td>											
											<td><?php echo $row->quantity?></td>
											<td><?php echo $row->uom?></td>
											<td></td>
										</tr>	
										<?php 
									}
								}
							?>	
							
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
	</script>

