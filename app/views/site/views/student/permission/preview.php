
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
   		$Student=$this->db->where('studentid',$eva->studentid)->where('yearid',$eva->yearid)->get('v_student_profile')->row();

   		
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
								<th valign='top' align="center" style='width:80%'><h4 align="center">Student Leave Report</h4></th> 
							</thead>
						</table>
						<table align='center' id='preview' style='width:100%'>
								<tr>
									<td ><label class="control-label">StudentID : </label> </td>
									<td> <?php echo $Student->student_num; ?></td>
									<td ><label class="control-label">Student : </label> </td>
									<td> <?php echo $Student->fullname; ?></td>
									<td><label class="control-label">Year: </label></td>
									<td> <?php echo $Student->sch_year; ?></td>
									<td><label class="control-label">Class : </label></td>
									<td> <?php echo $Student->class_name; ?></td>
								</tr>
								
						</table>
						<table style='width:100%;' id='tblmention' border='1' cellspacing='0' cellpadding='0'>
							<thead>
								<th  style='text-align:center !important; vertical-align:middle;' >No</th>
								<th  style='text-align:center !important; vertical-align:middle;' >Leave Date</th>
								<th style='text-align:center !important; vertical-align:middle;' >Permission</th>
								<th  style='text-align:center !important; vertical-align:middle;' >No permission</th>
							</thead>
							<tbody>
								<?php 
								$i=1;
								$total=0;
								$permis=0;
									foreach ($this->stdpermis->getallstdpermis($eva->studentid,$eva->yearid) as $per) {										
										$days=$per->num_day;
										$total+=$days;
										if($per->permis_status==1)
											$permis+=$days;
										echo "<tr>
												<td>".str_pad($i,2,"0",STR_PAD_LEFT)."</td>
												<td>".$this->green->convertSQLDate($per->from_date).' to '.$this->green->convertSQLDate($per->to_date)."</td>
												<td>";
												if($per->permis_status==1) echo "YES";
										echo "</td>
											<td>";
												if($per->permis_status==0) echo "YES";
										echo "</td>
											</tr>";
										$i++;
									}
								?>
								<tr>
									<td>Total :</td>
									<td><?php echo $total ?> days</td>
									<td><?php echo $permis ?> days</td>
									<td><?php echo ($total-$permis); ?> days</td>
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

