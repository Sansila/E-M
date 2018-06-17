
<style type="text/css">
	#preview td{
		padding: 3px ;
	}
	td img{border:1px solid #CCCCCC; padding: 2px;}
	#preview_wr{
		margin: 10px auto !important;
	}
	#tblmention td,#tblmention th{padding: 3px 5px !important;}
	span.set,.tab_head th,label.control-label{font-family:"Times New Roman", Times, serif !important; font-size: 14px !important;}
	td,th{font-family:"Khmer OS", "Khmer OS Battambang", "Khmer OS Bokor" !important; font-size: 14px;}

</style>
<?php
		$school=$this->db->where('schoolid',$this->session->userdata('schoolid'))->get('sch_school_infor')->row();
   			$school_name=$school->name;
   			$school_adr=$school->address;
   		//$Student=$this->db->where('studentid',$eva->studentid)->where('yearid',$eva->yearid)->get('v_student_profile')->row();

   		
  ?>
<div class="wrapper">
	<div class="clearfix" id="main_content_outer">
	    <div id="main_content">
	      <div class="row result_info col-xs-10">
		      	<div class="col-xs-6">
		      		<strong>Evaluation Preview</strong>
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
							.small tbody tr td img{width: 15px; margin-right: 10px}
							table.small th{padding:2px !important;}
							td img{border:1px solid #CCCCCC; padding: 2px;}
							#preview_wr{
								margin: 10px auto !important;
							}
							#tblmention td,#tblmention th{padding: 3px 5px !important; text-align: center;}
							.tab_head th,label.control-label{font-family:"Times New Roman", Times, serif !important; font-size: 14px; font-weight: bold !important;}
							td,th,label.control-label{font-family:"Khmer OS", "Khmer OS Battambang", "Khmer OS Bokor" !important; font-size: 14px;}

						</style>
						
						<div style='width:300px; float:right;'>
							<img src="<?php echo base_url('assets/images/logo/logo.png')?>" style='width:250px;  height:60px;' />
							
						</div>
						<div style='float:left; '>
							<div style=' font-weight:bold; text-transform: uppercase;'><?php echo $school_name ?></div>
							<div style='text-align:center !important; font-weight:bold;'></div>
						</div>
						<p style="clear:both"></p>
		                <table align='center'>
							<thead>
								<th valign='top' align="center" style='width:80%'><h4 align="center">Donation Report</h4></th> 
							</thead>
						</table>
						<table align='center' id='preview' style='width:100%'>
								<tr>
									<td ><label class="control-label">Donation Type : </label> </td>
									<td> <?php  if($row->donate_type=='AG') echo "Annual Gift"; else echo "Sponsor Order" ?></td>
									<td ><label class="control-label">Date : </label> </td>
									<td> <?php echo $this->green->convertSQLDate($row->date); ?></td>
									<td><label class="control-label">Year: </label></td>
									<td> <?php echo $this->db->where('yearid',$row->yearid)->get('sch_school_year')->row()->sch_year ?></td>
								</tr>
								
						</table>
						<div class='table-responsive'>
							                  	<table class='table table-bordered table-striped' id='tblstdmention'>
							                		<thead>
							                			<tr>
								                			<th rowspan='2' style='text-align:center; vertical-align:middle;'>Student Name</th>

								                			<th colspan='4' style='text-align:center; vertical-align:middle;'>Gift Information</th>
								                		</tr>
								                		<tr>
								                			<th width='250'>Name</th>
								                			<th width='100'>QTY</th>
								                			<th width='100'>Unit</th>
								                			<th width='100'>Remark</th>
								                		</tr>
								                		
							                		</thead>
							                		<tbody id='list_donation'>
							                				<?php
							                					if(isset($row))
							                					foreach ($this->donate->getstdgifbytran($row->transno) as $stdrow) {
							                						echo "<tr >
																			<td style='vertical-align:middle;' class='no_wrap'>$stdrow->fullname</td>
																			<td colspan='4'>
																				<table class='table small'>
																					
																					<tbody class='ds_$stdrow->studentid'>";
																						foreach ($this->donate->getgifbystd($stdrow->studentid,$row->transno) as $g) {
																							echo "<tr>
																									<td width='250'><span id='gifname'>".$g->gifname."</span></td>
																									<td width='100'>".$g->quantity."</td>
																									<td width='100'>".$g->unit."</td>
																									<td width='100'>".$g->remark."</td>
																									
																								</tr>";
																						}
																				echo "</tbody>
																				</table>
																			</td>
																			
																		</tr>";
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
		function gsPrint(data){
			 var element = "<div>"+data+"</div>";
			 $("<center>"+element+"</center>").printArea({
			  mode:"popup",  //printable window is either iframe or browser popup              
			  popHt: 600 ,  // popup window height
			  popWd: 500,  // popup window width
			  popX: 0 ,  // popup window screen X position
			  popY: 0 , //popup window screen Y position
			  popTitle:"test", // popup window title element
			  popClose: false,  // popup window close after printing
			  strict: false 
			  });
		}
		// $(function(){		
		// 	$("#print").on("click",function(){
		// 		gPrint("tab_print");
		// 	});
		// })
		$("#print").on("click",function(){
					var htmlToPrint = '' +
					        '<style type="text/css">' +
					        'table.table-bordered th, table.table-bordered td {' +
					        'border:1px solid #000 !important;' +
					        'padding;0.5em;' +
					        '}' +
					        'table.small th,table.small td{border:0px solid #000 !important; border-bottom:1px solid #CCCCCC !important;}'+
					        '</style>';
				   	var data = $("#tab_print").html();
				   	var export_data = $("<center>"+data+"</center>").clone().find(".remove_tag").remove().end().html();
				   		export_data+=htmlToPrint;
				   	gsPrint(export_data);
		});
		$("#export").on("click",function(e){
				var data=$('.table-bordered').attr('border',1);
					data = $("#export_tap").html().replace(/<img[^>]*>/gi,"");
	   			var export_data = $("<center><h3 align='center'></h3>"+data+"</center>").clone().find(".remove_tag").remove().end().html();
				window.open('data:application/vnd.ms-excel,' + encodeURIComponent(export_data));
    			e.preventDefault();
    			$('.table-bordered').attr('border',0);
		});
	</script>

