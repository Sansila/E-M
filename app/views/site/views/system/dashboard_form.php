<?php

$row=$this->db->query("SELECT * FROM sch_dashboard_item WHERE dashid='1'")->row();
$m=$row->moduleid;
$p=$row->link_pageid;
$showage=0;
if($age['s_minage']!="" || $age['s_maxage']!=""){	
	$showage=1;
}

 ?>
<div class="wrapper">
	<div class="clearfix" id="main_content_outer">
	    <div id="main_content">
	      <div class="row result_info">
		      	<div class="col-xs-3">
		      		<strong id='title'>DASHBOARD</strong>
		      	</div>
		      	<div class="col-xs-9" style="text-align: right">
		      		<span class="top_action_button">
							 
			    	</span>
			    	<span class="top_action_button">	
			    		<a href="#" id="export" title="Export">
			    			<img src="<?php echo base_url('assets/images/icons/export.png')?>" />
			    		</a>
			    	</span>
		      		<span class="top_action_button">
						<a href="#" id="print" title="Print">
			    			<img src="<?php echo base_url('assets/images/icons/print.png')?>" />
			    		</a>
		      		</span>		
		      	</div> 			      
		  </div>
		  <?php
		  	$year=$this->db->where('yearid',$date['year'])->get('sch_school_year')->row()->sch_year;
		  ?>
		   <div class="row">
	      	<div class="col-sm-12">
	      		<div class="panel panel-default">
	      			<div class="panel-heading">
		                   <h4 class="panel-title">Search</h4>
		            </div>
	      			<div class="panel-body">
		           		<div class="form_sep">
		           			  <div class="col-xs-3">
									<select onchange='search(event);' class='form-control input-sm' id='s_year'>
										<?php foreach ($this->db->order_by('yearid','DESC')->get('sch_school_year')->result() as $y) {?>
											<option value='<?PHP echo $y->yearid ?>'<?php if($y->yearid==$date['year']) echo 'selected' ?>><?PHP echo $y->sch_year ?></option>
										<?PHP } ?>
									</select>
									
							  </div>
							  <div class="col-xs-3">
							    	<div class='input-group new_ex' id='datetimepicker'>
									    <input value="<?php  echo $date['s_date'] ?>" type='text' class='form-control input-sm' id='s_date'/>
									    <span class='input-group-addon'><span class='glyphicon glyphicon-calendar'></span></span>
									</div>	
							  </div>
							  <div class="col-xs-3">
							    	<div class='input-group new_ex' id='datetimepicker'>
									    <input value="<?php echo $date['e_date'] ?>" type='text' class='form-control input-sm' id='e_date'/>
									    <span class='input-group-addon'><span class='glyphicon glyphicon-calendar'></span></span>
									</div>	
							  </div>
							  <div class="col-xs-2">
							   		<button type="button" onclick='search(event);' class="btn btn-default btn-sm">
									  	<span class="glyphicon glyphicon-search"  aria-hidden="true"></span> Search
									</button>	
							  </div>
		           		</div>
		           	</div>
		        </div>
		    </div>
		  </div>
		  <div class="row" id='tab_print'>
	      	<div class="col-sm-6">
	      		<div class="panel panel-default">

	      			<div class="panel-heading">
		                   <span class="panel-title">Student</span>
		                   <span class='panel-title pull-right danger'><a><img onclick="view_std();" src="<?php echo base_url('assets/images/icons/detail.png')?>" /></a></span>
		            </div>

	      			<div class="panel-body">

	      				<div class="row">
	      					<div class="col-sm-12">
			      				<div class="form_sep col-sm-6 remove_tag">
			      					<label class="control-label">Min Age</label>
			      					<input value="<?php  echo $age['s_minage'] ?>" type='text' class='form-control input-xs' id='s_minage'/>	      					
			      				</div>
			      				<div class="form_sep col-sm-6 remove_tag">
			      					<label class="control-label">Max Age</label>
			      					<input value="<?php  echo $age['s_maxage'] ?>" type='text' class='form-control input-xs' id='s_maxage'/>	      					
			      				</div>

			      			</div>	
		      			</div>
		      			<br/>
	      				<div class="row">
	      					<div class="col-sm-12">
				           		<div class="form_sep">
				                   <table class='table table-bordered'>
				                   		<tbody>
				                   			<tr>
				                   				<td><label class="control-label">Academy Year </label></td>
				                   				<th><?php echo $year?></th>
				                   				<?php echo ($showage==1?"<th>Student by Age</th>":"") ?>
				                   			</tr>
				                   			<tr>
				                   				<td><label class="control-label"> * Total Number Of Student</label></td>
				                   				<th><?php echo $data['total']->total?> Students</th>
				                   				<?php 
				                   					$totalbyage=$this->dash->getNumByAge($date['year'],$age['s_minage'],$age['s_maxage']);
				                   					
				                   					$st_stat="Student";
				                   					if($totalbyage>1) $st_stat.="s";
				                   					echo ($showage==1?"<th>".$totalbyage." $st_stat</th>":"");
				                   				 ?>
				                   			</tr>
				                   			<?php
				                   			$yearid=$this->session->userdata('year');

				                   				foreach ($data['level'] as $row) {
				                   					$num_by_age="";	
				                   					$age_str="";
				                   					$age_blank="";
				                   					if($showage==1){
				                   						$age_str=$age['s_minage']."__".$age['s_maxage'];
				                   						$num_by_age=$this->dash->getNumStdByAgeLev($row->gradeid,$date['year'],$age['s_minage'],$age['s_maxage']);
				                   					}

				                   					$level='Level ';
				                   					$tr='';	
				                   					$st_gen="Student";
				                   					$st_gen1="Student";

				                   					if($row->total_stu>1) $st_gen.="s";				                   					
				                   					if($num_by_age>1) $st_gen1.="s";
				                   						                   					
				                   					echo "$tr<tr>
								                   				<td><label class='control-label'> * $level ".$row->grade."</label></td>
								                   				<td>
								                   					<a href='".site_url("/student/student/search?s_id=&fn=&fnk=&class=&s_num=150&year=$yearid&m=$m&p=$p&l=&b=&le=$row->gradeid&per_page=0&ag=$age_blank")."' target='_blank'>".$row->total_stu." $st_gen</a>
								                   				</td>";
								                   	if($showage==1){								                   		
								                   		if($num_by_age>0){
															echo "<td><a href='".site_url("/student/student/search?s_id=&fn=&fnk=&class=&s_num=150&year=$yearid&m=$m&p=$p&l=&b=&le=$row->gradeid&per_page=0&ag=$age_str")."' target='_blank'>".$num_by_age." $st_gen1</a></td>";
								                  		}else{
								                  			echo "<td>".$num_by_age."</td>";
								                  		}
								                   		
								                   	}			
								                   	echo "</tr>";

				                   				}
				                   			?>		                   			
				                   			
				                   		</tbody>
				                   </table>
				                </div> 
				            </div>    
			            </div> 

					</div>

					<div class="panel-heading">
		                   <span class="panel-title">Vocation & Training</span>
		                   <span class='panel-title pull-right danger'><a><img onclick="" src="<?php echo base_url('assets/images/icons/detail.png')?>" /></a></span>
		            </div>
	      			<div class="panel-body">
		           		<div class="form_sep">
		                   <table class='table table-bordered'>
		                   		<tbody>

		                   			<tr>
		                   				<td><label class="control-label">Promotion </label></td>
		                   				<th><?php echo $data['vtc_promotion']?></th>
		                   			</tr>		                   			
		                   			<?php
		                   			$yearid=$this->session->userdata('year');
		                   				foreach ($data['level_vtc'] as $row) {
		                   					$level='Level ';
		                   					$tr='';		                   					
		                   					echo "$tr<tr>
						                   				<td><label class='control-label'> * ".$row->grade."</label></td>
						                   				<td>
						                   					<a href='".site_url("/student/student/search?s_id=&fn=&fnk=&class=&s_num=50&year=$yearid&m=$m&p=$p&l=&b=&le=$row->gradeid&per_page=0")."' target='_blank'>".$row->total_stu." Student</a>
						                   				</td>
						                   		</tr>";

		                   				}
		                   			?>		                   			
		                   		</tbody>
		                   </table>
		                </div> 
					</div>

					<div class="panel-heading">
		                   <span class="panel-title">Leave School</span>
		                   <span class='panel-title pull-right danger'><a><img onclick="" src="<?php echo base_url('assets/images/icons/detail.png')?>" /></a></span>
		            </div>
	      			<div class="panel-body">
		           		<div class="form_sep">
		                   <table class='table table-bordered'>
		                   		<tbody>
		                   			 <tr>
		                   				<td><label class="control-label"> * Total </label></td>
		                   				<td><a target='_blank' href='<?php echo site_url("system/dashboard/viewstdleave")?>' target='_blank'><?php echo $data['t_leave']->total?> Student</a></td>
		                   			</tr>                  			
		                   		</tbody>
		                   </table>
		                </div> 
					</div>

	      		</div>
	      	</div>
         	<div class="col-sm-6">
	      		<div class="panel panel-default">
	      			<div class="panel-heading">
		                   <span class="panel-title">Human Resource</span>
		                   <span class='panel-title pull-right danger'><a><img onclick="view_staff();" src="<?php echo base_url('assets/images/icons/detail.png')?>" /></a></span>
		            </div>
	      			<div class="panel-body">
		           		<div class="form_sep">
		                   <table class='table table-bordered'>
		                   		<tbody>
		                   			<tr>
		                   				<td colspan="2"><label class="control-label">Academy Year:</label> <?php echo $year ?> </td>
		                   			</tr>
		                   			<tr>
		                   				<td><label class="control-label"> # Of Employee </label></td>
		                   				<td><?php echo $emp['total'] ?> Staff</td>
		                   			</tr>
		                   		</tbody>
		                   </table>
		                </div> 
					</div>
					<div class="panel-heading">
		                <span class="panel-title">Health</span>
		                <span class='panel-title pull-right danger'><a><img onclick="view_health();" src="<?php echo base_url('assets/images/icons/detail.png')?>" /></a></span>
		            </div>
					<div class="panel-body">
		           		<div class="form_sep">
		           			<table class='table table-bordered'>
		                   		<tbody>
		                   			<tr>
		                   				<td colspan="2"><label class="control-label">Period  From:</label> <?php echo date('d-m-Y',strtotime($date['s_date'])).' <b>To :</b> '.date('d-m-Y',strtotime($date['e_date'])) ?> </td>
		                   			</tr>
		                   			<tr>
		                   				<td><label class="control-label">Medical Visite </label></td>
		                   				<td><?php echo $health['total'] ?> Times</td>
		                   			</tr>
		                   			<tr>
		                   				<td><label class="control-label">Staff</label></td>
		                   				<td><?php echo $health['emp'] ?> Times</td>
		                   			</tr>
		                   			<tr>
		                   				<td><label class="control-label">Student</label></td>
		                   				<td><?php echo $health['stu'] ?> Times</td>
		                   			</tr>
		                   			<tr>
		                   				<td><label class="control-label">Sickness Statistic</label></td>
		                   				<td>?</td>
		                   			</tr>
		                   		</tbody>
		                   </table>
		                </div> 
					</div>

					<div class="panel-heading">
		                <span class="panel-title">Social</span>
		                <span class='panel-title pull-right danger'><a><img onclick="view_soc();" src="<?php echo base_url('assets/images/icons/detail.png')?>" /></a></span>
		            </div>
					<div class="panel-body">
		           		<div class="form_sep">
		           			<table class='table table-bordered'>
		                   		<tbody>
		                   			<tr>
		                   				<td colspan="2"><label class="control-label">Period  From:</label> <?php echo date('d-m-Y',strtotime($date['s_date'])).' <b>To :</b> '.date('d-m-Y',strtotime($date['e_date'])) ?> </td>
		                   			</tr>
		                   			<tr>
		                   				<td><label class="control-label">Distribution </label></td>
		                   				<td><?php echo $social['dis'] ?> Times</td>
		                   			</tr>
		                   			<tr>
		                   				<td><label class="control-label">Visit</label></td>
		                   				<td><?php echo $social['visit'] ?> Times</td>
		                   			</tr>
		                   			<tr>
		                   				<td><label class="control-label">Psychologist Counseling</label></td>
		                   				<td><?php echo $social['counseling'] ?> Times</td>
		                   			</tr>
		                   		</tbody>
		                   </table>
		                </div>

					</div>

					<div class="panel-heading">
		                <span class="panel-title">Family Revenue Static</span>
		                <span class='panel-title pull-right danger'>		                	
		                </span>
		            </div>	
		            <div class="panel-body">	           
			            <div class="form_sep">		                	
		           			<table class='table table-bordered'>
		                   		<tbody>
		                   			<?php echo $frevenue?>
		                   		</tbody>
		                   </table>
		                </div> 
 					</div>

 					<div class="panel-heading">
		                <span class="panel-title">Statistic Of Distribution</span>
		                <span class='panel-title pull-right danger'>		                	
		                </span>
		            </div>	
		            <div class="panel-body">	           
			            <div class="form_sep">		                	
		           			<table class='table table-bordered'>
		                   		<tbody>
		                   			<tr>
		                   				<td colspan="2"><label class="control-label">Period  From:</label> <?php echo date('d-m-Y',strtotime($date['s_date'])).' <b>To :</b> '.date('d-m-Y',strtotime($date['e_date'])) ?> </td>
		                   			</tr>
		                   			<tr>
										<td>Amount Of Rice/kg</td>
										<td><?php echo $dis['tota_rice'] ?> kg</td>
		                   			</tr>
		                   			<tr>
										<td>Amount Of Oil/Litre</td>
										<td><?php echo $dis['oil_total'] ?> Litre</td>
		                   			</tr>

		                   		</tbody>
		                   </table>
		                </div> 
 					</div>
	      		</div>
	      	</div>
	    </div>
   </div>
</div>
<script type="text/javascript">
	function view_std(){
		var yearid=$('#s_year').val();
		window.open("<?PHP echo site_url('system/dashboard/view_std');?>/"+yearid,'_blank');
	}

	function view_staff(){
		var yearid=$('#s_year').val();
		window.open("<?PHP echo site_url('system/dashboard/view_staff');?>/"+yearid,'_blank');
	}
	function view_soc(){
		var yearid=$('#s_year').val();
		window.open("<?PHP echo site_url('system/dashboard/view_soc');?>/"+yearid,'_blank');
	}	
	function view_health(){
		//var yearid=$('#s_year').val();
		var s_date=$('#s_date').val();
		var e_date=$('#e_date').val();
		window.open("<?PHP echo site_url('system/dashboard/view_health');?>/"+s_date+'/'+e_date,'_blank');
	}
	function gsPrint(emp_title,data){
		 var element = "<div id='print_area'>"+data+"</div>";
		 $("<center><p style='padding-top:15px;text-align:center;'><b>"+emp_title+"</b></p><hr>"+element+"</center>").printArea({
		  mode:"popup",  //printable window is either iframe or browser popup              
		  popHt: 1000 ,  // popup window height
		  popWd: 1024,  // popup window width
		  popX: 0 ,  // popup window screen X position
		  popY: 0 , //popup window screen Y position
		  popTitle:"test", // popup window title element
		  popClose: false,  // popup window close after printing
		  strict: false 
		  });
	}
	$(function(){
		$("#s_date,#e_date").datepicker({
	      		language: 'en',
	      		pick12HourFormat: true,
	      		format:'yyyy-mm-dd'
		});
		$("#print").on("click",function(){					
				var title="<h4 align='center'>"+ $("#title").text()+"</h4>";
			   	var data = $("#tab_print").html().replace(/<img[^>]*>/gi,"");
			   	var data_print=$("<div>"+data+"</div>").html().replace(/<A[^>]*>|<\/A>/gi,"");
			   	var export_data = $("<center>"+data_print+"</center>").clone().find(".remove_tag").remove().end().html();
			   		
			   	gsPrint(title,export_data);
			});
		$("#export").on("click",function(e){
				var data=$("#tab_print").html().replace(/<img[^>]*>/gi,"");
	   			var export_data = $("<center><h3 align='center'>DASHBOARD</h3>"+data+"</center>").clone().find(".remove_tag").remove().end().html();
				window.open('data:application/vnd.ms-excel,' + encodeURIComponent(export_data));
    			e.preventDefault();
		});
	})
	function search(){
		var yearid=$('#s_year').val();
		var s_date=$('#s_date').val();
		var e_date=$('#e_date').val();
		var s_minage=$('#s_minage').val();
		var s_maxage=$('#s_maxage').val();

		location.href="<?PHP echo site_url('system/dashboard/search');?>/"+yearid+'/'+s_date+'/'+e_date+'/'+s_minage+'/'+s_maxage;
	}
</script>