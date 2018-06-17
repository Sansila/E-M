<?php
	
	if(count($data)>0){		
		$arrPosNum=array();
		foreach($data as $row){
			$arrPosNum[$row['posid']][$row['nationality']][$row['sex']]=$row['total'];			
		}
	}
	//print_r($arrPosNum);
	//die();
?>

<div class="wrapper">
	<div class="clearfix" id="main_content_outer">
	    <div id="main_content">
	      <div class="row result_info">
		      	<div class="col-xs-3">
		      		<strong id='title'>EMPLOYEE DETAILS</strong>
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
		                   			<th >Position</th>
		                   			<th >Number</th>
		                   			<th>Nationality</th>
		                   			<th>Female</th>
		                   			<th>Male</th>
		                   		</thead>
		                   		<?php
		                   			foreach ($getall as $rows) {
		                   				$F=0;
		                   				$M=0;
		                   				if(isset($arrPosNum[$rows['posid']][$rows['nationality']]['F'])){
		                   					
		                   					$F=$arrPosNum[$rows['posid']][$rows['nationality']]['F'];
		                   				}
		                   				if(isset($arrPosNum[$rows['posid']][$rows['nationality']]['M'])){
		                   						
		                   					$M=$arrPosNum[$rows['posid']][$rows['nationality']]['M'];
		                   				}
		                   				echo '<tr>
		                   							<td>'.$rows['position'].'</td>		
		                   							<td>'.($F+$M).'</td>                   							
		                   							<td>'.$rows['nationality'].'</td>
		                   							<td>'.$F.'</td>
		                   							<td>'.$M.'</td>
		                   						</tr>';
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
	   			var export_data = $("<center><h3 align='center'>EMPLOYEE DETAILS</h3>"+data+"</center>").clone().find(".remove_tag").remove().end().html();
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