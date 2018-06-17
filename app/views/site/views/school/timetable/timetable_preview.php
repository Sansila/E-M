<style type="text/css"> 
 
  a{
    cursor: pointer;
  }
 table tbody tr td img{
 	width: 20px;	
 }
 table th{
 	font-weight: normal;
 	
 }
.ex{display: none}
.cl{
	width: 120px;
	display:inline !important; 
}
</style>
<div class="wrapper">
	<div class="clearfix" id="main_content_outer">
	    <div id="main_content">
	      <div class="row result_info col-xs-10" style='width:100%'>
		      	<div class="col-xs-6">
		      		<strong>Schedule list</strong>
		      	</div>
		      	<div class="col-xs-6" style="text-align: right";>
		      		<span class="top_action_button">Class</span>
		      		<span class="top_action_button">
	                    <select class="form-control input-sm cl" id='cbosearchclass' name='cbosearchclass' onchange="schedulepreview()">
			                <option value='0'>Select Class</option>
			                  <?php
			                    $sch=0;
			                    if (isset($_GET['classid']))
			                      $sch=$_GET['classid'];
			                    foreach ($this->timetables->getclassfilter() as $row) {?>
			                    
			                      <option value='<?php echo $row->classid; ?>' <?php if(isset($t_row->classid)) if($t_row->classid==$row->classid) echo 'selected';?> > <?php echo $row->class_name; ?></option>
			                        <?php }
			                      ?>
			            </select>
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
		</div>
	</div>
</div>
<div class="row">
 <div class="col-sm-12">  
 	<div class="panel panel-default">  	
	  <div class="panel-body" >   

	  	<?php if(count($t_row)>0){ ?>
		<div class="table-responsive" id="tab_print">
			<!-------- Header ------------>

			<table width=100%>
				<tr>
					<td rowspan=5 width="150px">
                		<img src="<?php echo base_url('assets/images/logo/logo.png')?>" style="width:150px;" />
                	</td>
					<td style="font-weight:bold; font-size:15px;" align='center'><?php echo $query4->name ?></td>
					<td></td>
				</tr>
				<tr>
					<td align='center'>Address : <?php echo $query4->address; ?></td>
					<td></td>
				</tr>
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td></td>
				</tr>
				<tr>
					<td align='center'>Academic Year : <?php echo $this->timetables->getschoolyear($t_row->time_tableid)->sch_year; ?></td>
					<td></td>
				</tr>
				<tr>
					<td align='center'>Schedule for <input name='l_label' type='text' class='hide'/><span id='sp_label'><?php echo $this->timetables->getclass_name($t_row->time_tableid)->class_name; ?></span></td>
					<td width="150px"></td>
				</tr>
			</table>
			<!-------- End Header ------------>
		</br></br></br>
			<table border="0"​ align="center" id='listsubject' class="table">
			    <thead>
			    	<th></th>
			    	<?php 
			    	foreach($query7 as $row7){
			        	echo "<th style='font-weight: bold;'>$row7->dayname</th>";
			        }
			        ?>
			    </thead>
				<tbody id='bodylist'>
				    <?php
				    $tran[]=array();
				    foreach($query6 as $row6){
				    	if(!isset($tran[$row6->am_pm])){
				    		if($row6->am_pm=='PM')
				    			echo "<tr><th colspan='8'><strong>After noon</strong></th></tr>";
				    		elseif($row6->am_pm=='AM')
				    			echo "<tr><th colspan='8'><strong>Morning</strong></th></tr>";
				    	}
				      echo "
				        <tr>
				        <td style='font-weight: bold;'>".date('H:i',strtotime($row6->from_time)).'-'.date('H:i',strtotime($row6->to_time))."</td>
				         ";
				         foreach($query7 as $row7){
				        	// echo "<td style='font-weight: bold;'>$row7->dayname</td>";
				        	$s=$this->db->select('*')
				        			->from('sch_time_table tbl')
				        			->join('sch_subject s','tbl.subjectid=s.subjectid','inner')
				        			->join('sch_emp_profile emp','tbl.teacherid=emp.empid','inner')
				        			->where('tbl.dayid',$row7->dayid)
				        			->where('tbl.classid',$t_row->classid)
				        			->where('tbl.timeid',$row6->timeid)
				        			->where('tbl.year',$t_row->year)
				        			->where('tbl.schlevelid',$t_row->schlevelid)
				        			->where('tbl.schoolid',$t_row->schoolid)
				        			->get()->row_array();
				        		if(!empty($s['subjectid']))
				        			echo "<td width=200px style='padding-bottom:0px;font-weight:bold;'>".$s['subject']."<p style='font-style: italic;color:blue;font-weight:normal;padding-left:10px;'>".$s['last_name']." ".$s['first_name']."</p></td>";
				        		else
				        			echo "<td width=200px style='padding-bottom:0px;'>x</td>";
				        }
				   //       foreach($query9 as $row9){
				   //       	if($this->timetables->gethasclass($row9->timeid, $row9->subjectid, $row9->teacherid, $row9->dayid, $this->session->userdata('year'), $row9->schlevelid, $this->session->userdata('schoolid'),0,$row9->classid) > 0 )
			       //     			echo "<td width='100px'>$row9->subject&nbsp/&nbsp;$row9->first_name ".' '." $row9->last_name</td>";
				   // 		else
				   //     		echo "<td width='100px'></td>";
			       //}
				      echo "</tr>";
				      $tran[$row6->am_pm]=$row6->am_pm;
				    }
				    ?>
			    </tr> 
			</tbody>
		</table>
			
		</div>

		<?php }
			else{
				echo "<h3 align='center'>No Schedule...!</h3>";
		}?>
  	 </div>
  	</div>
  	
  </div>
</div>
<script type="text/javascript">
      $(function(){			
			$("#print").on("click",function(){
				gPrint("tab_print");
			});	
	  });
     $("#export").on("click",function(e){
		var title=$('#title').text();
		var data=$('.table').attr('border',1);
		var datas = $("#tab_print").html();
		data = $("#tab_print").html().replace(/<A[^>]*>|<\/A>/gi,"");
		var export_data = $("<div><center><h3 align='center'>"+title+"</h3>"+data+"</center></div>").clone().find(".remove_tag").remove().end().html();
		//window.open('data:application/vnd.ms-excel,' + encodeURIComponent(export_data));
		//e.preventDefault();
		$('.table').attr('border',0);
		Export_Print_Fun("export",export_data);
	 });

	 function Export_Print_Fun(ObjVal,contents){
	    var createElementHtml ="<form id='excel-form' action='<?php echo base_url('school/levelsubjectdetail/export')?>' method='post'>";
	        createElementHtml +='<input type="hidden" name="exporttitle"  id="exporttitle" value="ppp" />';
	        createElementHtml +='<textarea id="excel-data" style="display:none" name="data"></textarea>';
	        createElementHtml +='</form>';
	    $("body").append(createElementHtml);
	    var title_ex = $("#exporttitle").val();
	    var export_exl_nolink = contents.replace(/<A[^>]*>|<\/A>/gi,""); // remove a link
	    var html = "";
	    html += "<center>" +
	      "<div><font size='+3'>"+$('#title').text()+"</font></div>" +
	      "<div>" + export_exl_nolink + "</div>" +
	      "</center>";
	    if(ObjVal.toLowerCase() == "export"){
	     $("#excel-data").val(html);
	     $("#excel-form").submit();
	    }else if(ObjVal.toLowerCase() == "print"){
	     $(html).jqprint();
	    }
	    return false;
	  }

	  $('#year').change(function(){
	  	$('#cbosearchclass').val('0');
	  });

	//----- filter class by school level -------
	  function filterclass(event){
	    var schlevelid=jQuery('#schlevelid').val();

	    $.ajax({
	       url:"<?php echo site_url('school/timetable/getschlevelid'); ?>",   
	       data: {
	              'schlevelid':schlevelid,
	             },
	       type: "POST",
	       success: function(data){
	          jQuery('#cbosearchclass').html(data);                   
	       }
	     });
	  }
	  //----- End ----------------------
	function schedulepreview(){
		var yearid=$('#year').val();
		var schlevel=$('#schlevelid').val();
		var classid=$('#cbosearchclass').val();
		
		location.href="<?PHP echo site_url('school/timetable/classfilter/');?>/"+classid+'/'+yearid+'/'+schlevel;
	}


	//----- note use any more select class name to label ----------
	function selectclassname(event){
	  //---- select name of class ---------
	  $("#cbosearchclass option").click(function(){
	  var sbox = $("#cbosearchclass option:selected").text();
	  
	  if(sbox!="Select Class"){
	    $("#sp_label").text(sbox);
	    $("#l_label").val(sbox);
	  }else{
	    $("#sp_label").text("");
	  }

	  //---- filer schedule by class name --------
	  var classid=jQuery('#cbosearchclass').val();
	  var schlevelid=jQuery('#schlevelid').val();
	  var yearid=jQuery('#year').val();

	  $.ajax({
	  	url:"<?php echo site_url('school/timetable/classfilter') ?>",
	  	data:{
	  		'classid':classid,
	  		'schlevelid':schlevelid,
	  		'yearid':yearid,
	  	},
	  	type: "POST",
	  	
	  	success: function(data){
	          //jQuery('#cbosearchclass').html(data);                   
	    }
	  });

	});
	}
</script>