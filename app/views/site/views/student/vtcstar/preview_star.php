
<style type="text/css">
	#preview td{
		padding: 3px ;
	}
	td img{border:1px solid #CCCCCC; padding: 2px;}
	#preview_wr{
		margin: 10px auto !important;
	}
	#tblmention td,#tblmention th{padding: 3px 5px !important;}
	span.set,.tab_head{font-family:"Times New Roman", Times, serif !important; font-size: 14px !important;}
	/*td,th{font-family:"Khmer OS", "Khmer OS Battambang", "Khmer OS Bokor" !important; font-size: 14px;}*/

</style>
<?php
		$school=$this->db->where('schoolid',$this->session->userdata('schoolid'))->get('sch_school_infor')->row();
   			$school_name=$school->name;
   			$school_adr=$school->address;
   		// $Student=$this->db->query("SELECT DISTINCT fullname,class_name,classid,familyid,dob,student_num FROM v_student_profile")->row();

   		
  ?>
<div class="wrapper">
	<div class="clearfix" id="main_content_outer">
	    <div id="main_content">
	      <div class="row result_info col-xs-10">
		      	<div class="col-xs-6">
		      		<strong>VTC Preview</strong>
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
							.tab_head th{font-family:"Times New Roman", Times, serif !important; font-size: 14px; font-weight: bold !important;}
							.tab_head th,label.control-label{font-family:"Times New Roman", Times, serif !important; font-size: 14px; font-weight: bold !important;}
							/*td,th,label.control-label{font-family:"Khmer OS", "Khmer OS Battambang", "Khmer OS Bokor" !important; font-size: 14px;}*/
						</style>
						
						<div style='width:300px; float:right;'>
							<img src="<?php echo base_url('assets/images/logo/logo.png')?>" style='width:250px;  height:60px;' />
							
						</div>
						<div style='float:left; '>
							<div style=' font-weight:bold; text-transform: uppercase;'><?php echo $school_name ?></div>
							<div style='text-align:center !important; font-weight:bold;'></div>
						</div>
						<p style="clear:both"></p>
		                <table align='center' style='width:100%'>
							<thead>
								<th valign='top' align="center" style='width:80%'><h4 align="center">VTC STAR DETAILS</h4></th> 
							</thead>
						</table>
						<table>
							<tr>
								<th>Promotion &nbsp</th>
								<td>: <?php echo $data->proname ?></td>
							</tr>
							<tr>
								<th>Partner </th>
								<td>: <?php echo $data->company_name ?></td>
							</tr>
							<tr>
								<th>From </th>
								<td>: <?php echo $this->green->convertSQLDate($data->from_date).' To '. $this->green->convertSQLDate($data->to_date) ?></td>
							</tr>
						</table><br/>
						<div class='table-responsive'>
		                  	<table class='table table-bordered table-striped' id='tblstdmention'>
		                		<thead>
		                			
			                		<tr>
			                			<th style='text-align:center;'>No</th>
			                			<th style='text-align:center;' >Student Name</th>
			                			<th style='text-align:center;' >Class</th>
			                			<th style='text-align:center;'>No</th>
			                			<th style='text-align:center;' >Student Name</th>
			                			<th style='text-align:center;' >Class</th>
			                		</tr>
			                		
		                		</thead>
		                		<tbody>
		                			<?php
		                				echo "<tr>";
		                				$i=1;
		                				foreach ($this->star->geteditlist($data->starid) as $std) {
											echo "
													<td>".str_pad($i,2,"0",STR_PAD_LEFT)."</td>
													<td>".$std->fullname."</td>
													<td>".$std->class_name."</td>
												";
											if(($i%2)==0)
												echo "</tr><tr>";
											$i++;
										}
										if($i!=1 && ($i-1)%2==1)
											echo "<td></td>
												<td></td>
												<td></td>
											</tr>";
										else
											echo "</tr>";
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

