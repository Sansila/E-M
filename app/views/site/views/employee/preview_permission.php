
<style type="text/css">
	/*#preview td{
		padding: 3px ;
	}
	td img{border:1px solid #CCCCCC; padding: 2px;}
	#preview_wr{
		margin: 10px auto !important;
	}
	#tblmention td,#tblmention th{padding: 3px 5px !important;}
	span.set,.tab_head th,label.control-label{font-family:"Times New Roman", Times, serif !important; font-size: 14px !important;}
	td,th{font-family:"Khmer OS", "Khmer OS Battambang", "Khmer OS Bokor" !important; font-size: 14px;}
*/
</style>

<div class="wrapper">
	<div class="clearfix" id="main_content_outer">
	    <div id="main_content">
	      <div class="row result_info col-xs-10">
		      	<div class="col-xs-6">
		      		<strong>Employee Leave Preview</strong>
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
		         			.grey{background-color: #CCCCCC;}
							#preview td{
								padding: 3px ;
							}
							td img{border:1px solid #CCCCCC; padding: 2px;}
							#preview_wr{
								margin: 10px auto !important;
							}
							#tblmention td,#tblmention th{padding: 3px 5px !important; text-align: center;}
							.tab_head th,label.control-label{font-family:"Times New Roman", Times, serif !important; font-size: 14px; font-weight: bold !important;}
							td,th,label.control-label{font-family:"Khmer OS", "Khmer OS Battambang", "Khmer OS Bokor" !important; font-size: 14px;}

						</style>
						
						<div style='width:300px; float:right;'>
							<h2>DSV</h2><!-- <img src="<?php echo base_url('assets/images/logo/logo.png')?>" style='width:250px;  height:60px;' /> -->
							
						</div>
						<div style='float:left; '>
							<div style=' font-weight:bold; text-transform: uppercase;'><?php echo $school_name ?></div>
							<div style='text-align:center !important; font-weight:bold;'></div>
						</div>
						<p style="clear:both"></p>
		                <table align='center'>
							<thead>
								<th valign='top' align="center" style='width:80%'><h4 align="center">Employee Leave Report</h4></th> 
							</thead>
						</table>
						<table align='center' id='preview' style='width:100%'>
								<tr>
									<td ><label class="control-label">EmployeeID : </label> </td>
									<td> <?php echo $emp->empcode; ?></td>
									<td ><label class="control-label">Employee : </label> </td>
									<td> <?php echo $emp->last_name.' '.$emp->first_name; ?></td>
									<td><label class="control-label">Sex: </label></td>
									<td> <?php echo $emp->sex; ?></td>
									<td><label class="control-label">Position : </label></td>
									<td> <?php echo $position->position; ?></td>
								</tr>
								
						</table>
						<div class="table-responsive">
							<table style='width:100%;' id='tblmention' border='1' cellspacing='0' cellpadding='0'>
								<tbody>
									<tr class="grey" >
										<th  colspan='8'>Annual Leave Taken <?php echo "($emp->annual_leave days/year)" ?></th>
									</tr>
									<tr>
										<th style='text-align:center !important; vertical-align:middle;' >No</th>
										<th style='text-align:center !important; vertical-align:middle;' colspan='2'>Leave Date</th>
										<th style='text-align:center !important; vertical-align:middle;' ># Leave Taken</th>
										<th style='text-align:center !important; vertical-align:middle;' >Balance</th>
										<th style='text-align:center !important; vertical-align:middle;' >Requested Date</th>
										<th style='text-align:center !important; vertical-align:middle;' >Approved by</th>
										<th style='text-align:center !important; vertical-align:middle;' >Reason</th>
									</tr>
									<?php
										$i=1;
										$AL_total=$emp->annual_leave;
										foreach ($this->perm->getpermis($emp->empid,$this->session->userdata('year'),'AL') as $al) {
											$AL_total=$AL_total-$al->total_day;
											if($AL_total<0)
												$AL_total=0;
											echo "<tr>
													<td>".str_pad($i,2,"0",STR_PAD_LEFT)."</td>
													<td>".$this->green->convertSQLDate($al->from)."</td>
													<td>".$this->green->convertSQLDate($al->to)."</td>
													<td>".$al->total_day."</td>
													<td>".$AL_total."</td>
													<td>".$this->green->convertSQLDate($al->date_request)."</td>
													<td>".$al->last_name.' '.$al->first_name."</td>
													<td>".$al->comment."</td>
												</tr>";
											$i++;
										}
									 ?>
								</tbody>
							</table>
						</div><br/>
						<div class="table-responsive">
							<table style='width:100%;' id='tblmention' border='1' cellspacing='0' cellpadding='0'>
								<tbody>
									<tr class="grey" >
										<th  colspan='8'>Sick Leave Taken <?php echo "($emp->sick_leave days/year)" ?></th>
									</tr>
									<tr>
										<th style='text-align:center !important; vertical-align:middle;' >No</th>
										<th style='text-align:center !important; vertical-align:middle;' colspan='2'>Leave Date</th>
										<th style='text-align:center !important; vertical-align:middle;' ># Leave Taken</th>
										<th style='text-align:center !important; vertical-align:middle;' >Balance</th>
										<th style='text-align:center !important; vertical-align:middle;' >Requested Date</th>
										<th style='text-align:center !important; vertical-align:middle;' >Approved by</th>
										<th style='text-align:center !important; vertical-align:middle;' >Reason</th>
									</tr>
									<?php
										$i=1;
										$SL_total=$emp->sick_leave;
										foreach ($this->perm->getpermis($emp->empid,$this->session->userdata('year'),'SL') as $sl) {
											$SL_total=$SL_total-$sl->total_day;
											if($AL_total<0)
												$AL_total=0;
											echo "<tr>
													<td>".str_pad($i,2,"0",STR_PAD_LEFT)."</td>
													<td>".$this->green->convertSQLDate($sl->from)."</td>
													<td>".$this->green->convertSQLDate($sl->to)."</td>
													<td>".$sl->total_day."</td>
													<td>".$SL_total."</td>
													<td>".$this->green->convertSQLDate($sl->date_request)."</td>
													<td>".$sl->last_name.' '.$sl->first_name."</td>
													<td>".$sl->comment."</td>
												</tr>";
											$i++;
										}
									 ?>
								</tbody>
							</table>
						</div><br/>
						<div class="table-responsive">
							<table style='width:100%;' id='tblmention' border='1' cellspacing='0' cellpadding='0'>
								<tbody>
									<tr class="grey" >
										<th  colspan='8'>Other Leave Taken</th>
									</tr>
									<tr>
										<th style='text-align:center !important; vertical-align:middle;' >No</th>
										<th style='text-align:center !important; vertical-align:middle;' colspan='2'>Leave Date</th>
										<th style='text-align:center !important; vertical-align:middle;' ># Leave Taken</th>
										<th style='text-align:center !important; vertical-align:middle;' >Balance</th>
										<th style='text-align:center !important; vertical-align:middle;' >Requested Date</th>
										<th style='text-align:center !important; vertical-align:middle;' >Approved by</th>
										<th style='text-align:center !important; vertical-align:middle;' >Reason</th>
									</tr>
									<?php
										$i=1;
										foreach ($this->perm->getpermis($emp->empid,$this->session->userdata('year'),'OTHER') as $sl) {
											
											if($AL_total<0)
												$AL_total=0;
											echo "<tr>
													<td>".str_pad($i,2,"0",STR_PAD_LEFT)."</td>
													<td>".$this->green->convertSQLDate($sl->from)."</td>
													<td>".$this->green->convertSQLDate($sl->to)."</td>
													<td>".$sl->total_day."</td>
													<td></td>
													<td>".$this->green->convertSQLDate($sl->date_request)."</td>
													<td>".$sl->last_name.' '.$sl->first_name."</td>
													<td>".$sl->comment."</td>
												</tr>";
											$i++;
										}
									 ?>
								</tbody>
							</table>
						</div>

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

