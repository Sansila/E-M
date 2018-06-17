<div class="wrapper">
	<div class="clearfix" id="main_content_outer">
	    <div id="main_content">
	      <div class="row result_info">
		      	<div class="col-xs-3">
		      		<strong id='title'>STUDENT DETAILS</strong>
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
		  <div class="row" id='tab_print'>
	      	<div class="col-sm-12">
	      		<div class="panel panel-default">
	      			<div class="panel-heading">
		                   <span class="panel-title">Academy Year : <?php echo $year ?></span>
		            </div>
	      			<div class="panel-body">
		           		<div class="form_sep">
		                   <table class='table'>
		                   		<thead>
		                   			<th width='200'>Level</th>
		                   			<th width='150'>Class</th>
		                   			<th>Number of student</th>
		                   		</thead>
		                   		<?php
		                   			foreach ($data['level'] as $row) {
		                   				$levels='Level ';
	                   					if($row->is_vtc>0)
	                   						$levels='';
		                   				$age=$this->dash->getminmax($row->gradeid,$date['year']);
		                   				$i=1;
		                   				foreach ($this->dash->getclassname($row->gradeid,$date['year']) as $level) {
		                   					$col='';
		                   					if($i==1)
		                   						$col="<td style='vertical-align: middle !important;' rowspan='$row->te_grade'>$levels ".$row->grade;
		                   					echo "<tr>
						                   			$col
						                   			<td>".$level->class_name."</td>
						                   			<td>".$level->total_stu."</td>
						                   		</tr>";
						                   		$i++;
		                   				}
		                   				echo "<thead>
					                   			<th>Total $levels ".$row->grade."</th>
					                   			<th>".$row->te_grade." Classes</th>
					                   			<th>".$row->total_stu." studends (age ".$age['min']->min_age." years old to ".$age['max']->max_age." years old)</th>
					                   		</thead>";
		                   			}
		                   		?>
		                   		<tbody>

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
	function gsPrint(emp_title,data){
		 var element = "<div>"+data+"</div>";
		 $("<center><p style='padding-top:15px;text-align:center;'><b>"+emp_title+"</b></p><hr>"+element+"</center>").printArea({
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
	$(function(){
		$("#s_date,#e_date").datepicker({
	      		language: 'en',
	      		pick12HourFormat: true,
	      		format:'yyyy-mm-dd'
		});
		$("#print").on("click",function(){
					
					var title="<h4 align='center'>"+ $("#title").text()+"</h4>";
				   	var data = $("#tab_print").html().replace(/<img[^>]*>/gi,"");
				   	var export_data = $("<center>"+data+"</center>").clone().find(".remove_tag").remove().end().html();
				   		
				   	gsPrint(title,export_data);
			});
		$("#export").on("click",function(e){
			$('.table').attr('border',1);
				var data = $("#tab_print").html().replace(/<img[^>]*>/gi,"");
	   			var export_data = $("<center><h3 align='center'>DASHBOARD</h3>"+data+"</center>").clone().find(".remove_tag").remove().end().html();
				window.open('data:application/vnd.ms-excel,' + encodeURIComponent(export_data));
    			e.preventDefault();
    			 $('.table').attr('border',0);
		});
	})
	function search(){
		var yearid=$('#s_year').val();
		var s_date=$('#s_date').val();
		var e_date=$('#e_date').val();
		location.href="<?PHP echo site_url('system/dashboard/search');?>/"+yearid+'/'+s_date+'/'+e_date;
	}
</script>