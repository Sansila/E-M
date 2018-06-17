
<style>
	table tr:hover{cursor: pointer;}
</style>
<div class="wrapper">
	<div class="clearfix" id="main_content_outer">
	    <div id="main_content">
	      <div class="row result_info col-xs-10">
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
	<div class="col-sm-10" id='preview_wr'>
	    <div class="panel panel-default">
	      	<div class="panel-body">
	      		<div class="table-responsive" id="tab_print">
	      			<div style='width:300px; margin:0px auto'>
							<img src="<?php echo base_url('assets/images/logo/logo.png')?>" style='width:240px;' />
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
	      			<br>
	      			<table class="table table-hover">
	      				<tr>
	      					<th width="20%">Date of Birth</th>
	      					<td width="2%">:</td>
	      					<td>
	      						<?php echo $date = date_format(date_create($employee['dob']),"d/m/Y");?>
	      					</td>
	      				</tr>
	      				<tr>
	      					<th>Marital Status</th>
	      					<td>:</td>
	      					<td>
	      						<?php 
	      							$arr_status = array("S"=>"Single","M"=>"Marital");
	      							$status = $employee['marital_status'];
	      							echo $arr_status[$status];
	      						?>
	      					</td>
	      				</tr>
	      				<tr>
	      					<th>Employee Type</th>
	      					<td>:</td>
	      					<td>
	      					<?php
	      						$arr_type = array("T"=>"Teacher","S"=>"Office Staff");
	      						$emp_type = $employee['emp_type'];
	      						echo $arr_type[$emp_type]; 
	      					?>
	      					</td>
	      				</tr>
	      				<tr>
	      					<th>Position</th>
	      					<td>:</td>
	      					<td><?php echo $employee['position'];?></td>
	      				</tr>
	      				<tr>
	      					<th>ID Card</th>
	      					<td>:</td>
	      					<td><?php echo $employee['idcard'];?></td>
	      				</tr>
	      				<tr>
	      					<th>Nationality</th>
	      					<td>:</td>
	      					<td><?php echo $employee['nationality'];?></td>
	      				</tr>
	      				<tr>
	      					<th>Village</th>
	      					<td>:</td>
	      					<td><?php echo $employee['village'];?></td>
	      				</tr>
	      				<tr>
	      					<th>Khan / Communce</th>
	      					<td>:</td>
	      					<td><?php echo $employee['commune'];?></td>
	      				</tr>
	      				<tr>
	      					<th>Sankat / District</th>
	      					<td>:</td>
	      					<td><?php echo $employee['district'];?></td>
	      				</tr>
	      				<tr>
	      					<th>Permanant Address</th>
	      					<td>:</td>
	      					<td><?php echo $employee['perm_adr'];?></td>
	      				</tr>
	      				<tr>
	      					<th>Note</th>
	      					<td>:</td>
	      					<td><?php echo $employee['note'];?></td>
	      				</tr>
	      				<tr>
	      					<th>Sick Leave </th>
	      					<td>:</td>
	      					<td>
	      						<table style='width:100%'>
	      							<tr>
	      								<td align='center'><?php echo $employee['sick_leave'] ?></td>
	      								<td align='center'>Sick Leave Taken :</td>
	      								<td align='center'><?php echo $employee['sick_taken']; ?></td>
	      								<td align='center'>Sick Leave balance :</td>
	      								<td align='center'><?php $sl=$employee['sick_leave']-$employee['sick_taken'];  if($sl>0) echo $sl; else echo "<span style='color:red'>(".($sl-($sl*2)).")</span>" ?></td>
	      							</tr>
	      						</table>
	      						<?php //$sl=$employee['sick_leave']-$employee['sick_taken']; echo $sl;?>
	      					</td>
	      				</tr>
	      				<tr>
	      					<th>Annual Leave</th>
	      					<td>:</td>
	      					<td>
	      						<table style='width:100%'>
	      							<tr>
	      								<td align='center'><?php echo $employee['annual_leave'] ?></td>
	      								<td align='center'>Annual Leave Taken :</td>
	      								<td align='center'><?php echo $employee['al_taken']; ?></td>
	      								<td align='center'>Annual Leave balance :</td>
	      								<td align='center'><?php $al=$employee['annual_leave']-$employee['al_taken']; if($al>0) echo $al; else echo "<span style='color:red'>(".($al+$al).")</span>" ?></td>
	      							</tr>
	      						</table>
	      					</td>
	      				</tr>
	      			</table>
	      		</div>
	      	</div>
	    </div>
	</div>
</div>

<script type="text/JavaScript">
	$(function(){
		$("#print").on("click", function(){
			var export_data = $("#tab_print").html();
			var title = "Employee Detail";
			gsPrint(title,export_data);
		});
	});
</script>