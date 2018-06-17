<?php 

	 
	 // print_r($permis['arr'][0]);
?>
<style>
	table tr:hover{cursor: pointer;}
</style>
<div class="wrapper">
	<div class="clearfix" id="main_content_outer">
	    <div id="main_content">
	      <div class="row result_info col-xs-12">
		      	<div class="col-xs-6">
		      		<strong>Employee Detail</strong>
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
	<div class="col-sm-12" id='preview_wr'>
	    <div class="panel panel-default">
	      	<div class="panel-body">
					<form class="form-inline" action="<?php echo site_url('employee/employee/view_attendence/'.$employee['empid']) ?>" method='POST'>
					  <div class="form-group">
					    <label for="exampleInputName2">Filter From</label>
					    <!-- <input type="text" class="form-control s_date" id="start_date" placeholder="yyyy-mm-dd"> -->
					    <select class="form-control" id="filter_type" name="filter_type">
					    	<option value='today' <?php if($filter_from=='today') echo 'selected';  ?>>Today</option>
					    	<option value='weekly' <?php if($filter_from=='weekly') echo 'selected';  ?>>Weekly</option>
					    	<option value='monthly' <?php if($filter_from=='monthly') echo 'selected';  ?>>Monthly</option>
					    	<option value='yearly' <?php if($filter_from=='yearly') echo 'selected';  ?>>Yearly</option>
					    	<option value='custom' <?php if($filter_from=='custom') echo 'selected';  ?>>Custom</option>
					    </select>
					    <input type="hidden" id="empid" value="<?php echo $employee['empid']; ?>" />
					  </div>
					  <div class="form-group s_sep">
					    <label for="exampleInputName2">Start Date</label>
					    <input type="text" <?php if($filter_from!='custom') echo 'disabled'; else echo 'required'; ?> class="form-control s_date" name="start_date" value="<?= $start_date?>" placeholder="yyyy-mm-dd">
					  </div>
					  <div class="form-group s_sep">
					    <label for="exampleInputEmail2">To Date</label>
					    <input type="text" <?php if($filter_from!='custom') echo 'disabled'; else echo 'required'; ?> class="form-control t_date" name="to_date" value="<?= $to_date?>" placeholder="yyyy-mm-dd">
					  </div>
					  <button type="submit"  class="btn btn-primary">Filter</button>
					</form>
	      	</div>
	    </div>
	</div>
</div>

<div class="row">
	<div class="col-sm-12" id='preview_wr'>
	    <div class="panel panel-default">
	      	<div class="panel-body">

	      			
	      		<div class="table-responsive " id="tab_print">
	      			<div style='width:350px; margin:20px auto'>
							<h2 align="center">DSV</h2><!-- <img src="<?php echo base_url('assets/images/logo/logo.png')?>" style='width:240px;' /> -->
					</div>
					<!-- <div style='float:left;'>
							<h5 style='margin:15px 5px 0px 0px; font-weight:bold;'>WESTLAND INTERNATIONAL SCHOOL</h5>
					</div><br> -->
	      			<!--
	      			<div style="padding-bottom:20px;width:150px;float:right;">
	      				<img src='<?php if(@ file_get_contents(site_url('../assets/upload/employees/'.$year.'/'.$employee['empid'].'_.png'))) echo site_url('../assets/upload/employees/'.$year.'/'.$employee['empid'].'_.png'); else echo site_url('../assets/upload/No_person.jpg') ?>' style='width:130px; height:140px; float:right; margin-top:10px; margin-right:15px;border::solid 2px #AB4585;' class="img-circle"/><br>
	      			</div>
	      			-->
	      			<div style="clear:both;"></div><br>
	      			<div class='col-sm-12'>
	      				<table border="0" width="100%">
		      				<tr>
		      					<td rowspan="2" width="20%">
		      						<img src='<?php if(@ file_get_contents(site_url('../assets/upload/employees/photos/'.$employee['empid'].'.jpg'))) echo site_url('../assets/upload/employees/photos/'.$employee['empid'].'.jpg'); else echo site_url('../assets/upload/No_person.jpg') ?>' style='width:130px; height:140px; float::right; margin-top:10px; margin-right:15px;border::solid 2px #AB4585;' class="img-thumnail"/><br>
		      					</td>
		      					<td width="2%" align="center"></td>
		      					<td valign="top">
		      						<br><br>Full Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
		      						<span style="margin-left:10px;"><?php echo $employee['last_name']." ".$employee['first_name'];?></span>
		      						<br><br>Employee ID &nbsp;&nbsp;:
		      						<span style="margin-left:10px;"><?php echo $employee['empcode'];?></span>
		      						<br><br>Phone &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;:
		      						<span style="margin-left:10px;"><?php echo $employee['phone'];?></span>
		      						<br><br>Email &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;:
		      						<span style="margin-left:10px;"><?php echo $employee['email'];?></span>
		      					</td>
		      				</tr>
		      			</table>
	      			</div>
	      			
	      			<br>
	      			<div class="col-sm-12">
	      				<h4>Attendence Summary</h4>

	      			<?php 
	      				if($filter_from=='today'){
	      					echo "<label>For : ".date('Y-m-d')."</label>";
	      				}
	      				if($filter_from=='monthly'){
	      					echo "<label>For : ".date('Y-m')."</label>";
	      				}
	      				if($filter_from=='yearly'){
	      					echo "<label>For : ".date('Y')."</label>";
	      				}
	      				if($filter_from=='weekly'){
	      					echo "<label>From : ".date('Y-m-d',strtotime('monday this week')).' To '.date('Y-m-d')."</label>";
	      				}
	      				if($filter_from=='custom'){
	      					echo "<label>From : ".$start_date.' To '.$to_date."</label>";
	      				}
	      				echo '</div>';
	      				$come_early=0;
	      				$leav_early=0;
	      				$come_late=0;
	      				$leav_late=0;
	      				$onholiday=0;
	      				$ontime=0;
	      				// print_r($attsum);
		      			
		      			// if(!isset($attsum->emp_id)){
		      			// 	$total_absent=0;
		      			// }
	      				foreach ($att as $row) {
	      					if($row->att_time=='Check-in'){
	      						if($row->att_status=='Early'){
	      							$come_early=$row->total;
	      						}elseif($row->att_status=='Late'){
	      							$come_late=$row->total;
	      						}
	      					}elseif($row->att_time=='Check-out'){
	      						if($row->att_status=='Early'){
	      							$leav_early=$row->total;
	      						}elseif($row->att_status=='Late'){
	      							$leav_late=$row->total;
	      						}
	      					}elseif($row->att_time=='Ontime'){
	      						$ontime=$row->total;
	      						
	      					}else{
	      						$onholiday=$row->total;
	      					}
	      				}

	      			?>
	      			<div class="col-sm-12">
		      			<table class="table table-hover table-bordered table-striped">
			      			<thead>
			      				<tr>
				      				<th>Attedence Status</th>
			      					<th>Times</th>
			      					<td>View Detail</td>
				      			</tr>
			      			</thead>
			      			<tbody>
			      				<tr>
				      				<td>Come Early</td>
			      					<td><?= $come_early ?></td>
			      					<td><a href='javascript:void(0);' onclick="getdetail('come_early')">Detail</a></td>
				      			</tr>
				      			<tr>
				      				<td>Leave Early</td>
			      					<td><?= $leav_early ?></td>
			      					<td><a href='javascript:void(0);' onclick="getdetail('leav_early')">Detail</a></td>
				      			</tr>
				      			<tr>
				      				<td>Come Late</td>
			      					<td><?= $come_late ?></td>
			      					<td><a href='javascript:void(0);' onclick="getdetail('come_late')">Detail</a></td>
				      			</tr>
				      			<tr>
				      				<td>Leave Late</td>
			      					<td><?= $leav_late ?></td>
			      					<td><a href='javascript:void(0);' onclick="getdetail('leav_late')">Detail</a></td>
				      			</tr>
				      			<tr>
				      				<td>Ontime</td>
			      					<td><?= $ontime ?></td>
			      					<td><a href='javascript:void(0);' onclick="getdetail('ontime')">Detail</a></td>
				      			</tr>
				      			<tr>
				      				<td>Work on Holiday</td>
			      					<td><?= $holidayot->total/2 ?></td>
			      					<td><a href='javascript:void(0);' onclick="getdetail('Holiday')">Detail</a></td>
				      			</tr>
				      			
			      			</tbody>
		      				
			      			
		      				
		      			</table>
		      		</div>
	      			<div class="col-sm-6">
	      				<table class="table table-bordered table-striped">
	      						<tr>
				      				<td>Total Work Time(H)</td>
			      					<td><?= isset($attsum->empid)?$attsum->total_diff:0; ?></td>
			      					<td>Detail</td>
				      			</tr>
		      					<tr>
				      				<td>Berfor Leav</td>
			      					<td><?= isset($attsum->empid)?$attsum->total_diff:0; ?></td>
			      					<td>Detail</td>
				      			</tr>
				      			<tr>
				      				<td>After Leav</td>
			      					<td><?= isset($attsum->empid)?$attsum->total_diff:0; ?></td>
			      					<td>Detail</td>
				      			</tr>
				      			
				      			<tr>
				      				<td>Absent With Permission</td>
			      					<td><?= isset($permis['awp'])?$permis['awp']:0 ?></td>
			      					<td><a href='javascript:void(0);' onclick="getperdetail(1)">Detail</a></td>
				      			</tr>
				      			<tr>
				      				<td>Absent Without Permission</td>
			      					<td><?= isset($permis['awtp'])?$permis['awtp']:0 ?></td>
			      					<td><a href='javascript:void(0);' onclick="getperdetail(0)">Detail</a></td>
				      			</tr>
				      			<tr>
				      				<td>Total Absent(Times)</td>
			      					<td><?=	(isset($permis['awp'])?$permis['awp']:0)+(isset($permis['awtp'])?$permis['awtp']:0) ?></td>
			      					<td>Detail</td>
				      			</tr>
		      			</table>
	      			</div>
	      			
	      		</div>
	      	</div>
	    </div>
	</div>
</div>
<div class="modal fade" id="detailmodal" data-backdrop=false>
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"><b>Detail Option</b></h4>
      </div>
      <div class="modal-body">
        <table width="100%" align="center" class="table table-bordered" id="tbl_detail">
        	
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div>
<div class="modal fade" id="permisdetailmodal" data-backdrop=false>
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"><b>Detail Option</b></h4>
      </div>
      <div class="modal-body">
        <table width="100%" align="center" class="table table-bordered" id="tbl_detail">
        	<?php 

        	$head="<tr>
						<th>No</th>
						<th>Date</th>
						<th>Status</th>
						<th>Shift Time</th>
						<th>Num. days</th>
					</tr>";
			$i=1;
			foreach ($permis['arr'][1] as $key=>$value) {
				// print_r($key);
				foreach ($value as $m => $val) {
					$head.="<tr>
						<th>$i</th>
						<th>$key</th>
						<th>Have Permission</th>
						<th>$m</th>
						<th>$val</th>

					</tr>";# code...
					$i++;# code...
				}
				
			}
			echo $head;
        	 ?>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div>
<div class="modal fade" id="wpermisdetailmodal" data-backdrop=false>
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"><b>Detail Option</b></h4>
      </div>
      <div class="modal-body">
        <table width="100%" align="center" class="table table-bordered" id="tbl_detail">
        	<?php 

        	$head="<tr>
						<th>No</th>
						<th>Date</th>
						<th>Status</th>
						<th>Shift Time</th>
						<th>Num. days</th>
					</tr>";
			$i=1;
			foreach ($permis['arr'][0] as $key=>$value) {
				// print_r($key);
				foreach ($value as $m => $val) {
					$head.="<tr>
						<th>$i</th>
						<th>$key</th>
						<th>Without Permission</th>
						<th>$m</th>
						<th>$val</th>

					</tr>";# code...
					$i++;# code...
				}
				
			}
			echo $head;
        	 ?>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div>
<script type="text/JavaScript">
	function getdetail(status){
			$.ajax({
				type: "POST",
				url:"<?php echo base_url(); ?>index.php/employee/employee/getdetail",    
				data: {'empid':$('#empid').val(),'status':status,'filter_type':$('#filter_type').val(),'start_date':$('.s_date').val(),'to_date':$('.t_date').val()},
				success: function(data){
					$('#tbl_detail').html(data);
				}
			});
			$("#detailmodal").modal('show');
		}
		function getperdetail(status){
			if(status==1)
				$("#permisdetailmodal").modal('show');
			else
				$("#wpermisdetailmodal").modal('show');

		}
	$(function(){
		$(".s_date,.t_date").datepicker({
	  		language: 'en',
	  		pick12HourFormat: true,
	  		format:'yyyy-mm-dd'
		});
		
		$('#filter_type').change(function(){
			if($(this).val()!='custom'){
				$('.s_sep input').prop('disabled',true);
				$('.s_sep input').prop('required',false);

				$('.s_sep input').val('');
			}else{
				$('.s_sep input').prop('disabled',false);
				$('.s_sep input').prop('required',true);

			}
		})
		$("#print").on("click", function(){
			var export_data = $("#tab_print").html();
			var title = "";
			gsPrint(title,export_data);
		});
	});
</script>