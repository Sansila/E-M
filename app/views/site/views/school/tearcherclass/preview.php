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
.class_sub thead tr th{
	font-weight: bold;	
	font-size: 11px;
}
.class_sub thead tr th,.class_sub td{	
	padding: 3px !important;
}
.cl{
	width: 120px;
	display:inline !important; 
}
</style>
<?php

$m='';
$p='';
if(isset($_GET['m'])){
    $m=$_GET['m'];
}
if(isset($_GET['p'])){
    $p=$_GET['p'];
}
 ?>
<div class="wrapper">
	<div class="clearfix" id="main_content_outer">
	    <div id="main_content">
	      <div class="row result_info col-xs-10" style='width:100%'>
		      	<div class="col-xs-6">
		      		<strong>Teacher Assignation</strong>
		      	</div>
		      	<div class="col-xs-6" style="text-align: right";>
		      		<span class="top_action_button">Teacher</span>
		      		<span class="top_action_button">
	                    <select class="form-control input-sm cl" id='cbosearchteacher' name='cbosearchteacher' onchange="teacherclasspreview()">
			                <option value='0'>Select Teacher</option>
			                  <?php
			                    $sch=0;
			                    if (isset($_GET['empid']))
			                      $sch=$_GET['empid'];
			                    foreach ($this->tclass->getteacherfilter() as $row) {?>
			                    
			                      <option value='<?php echo $row->empid; ?>' <?php if(isset($t_row->empid)) if($t_row->empid==$row->empid) echo 'selected';?> > <?php echo $row->empcode.' : '.$row->last_name.' '. $row->first_name; ?></option>
			                        <?php }
			                      ?>
			            </select>
		      		</span>
		      		<span class="top_action_button">
		      			<?php if($this->green->gAction("E")){ ?>
						<a href="#" id="export" title="Export">
			    			<img src="<?php echo base_url('assets/images/icons/export.png')?>" />
			    		</a>
			    		<?php } ?>
		      		</span>	
		      		<span class="top_action_button">
		      			<?php if($this->green->gAction("P")){ ?>
						<a href="#" id="print" title="Print">
			    			<img src="<?php echo base_url('assets/images/icons/print.png')?>" />
			    		</a>
			    		<?php } ?>
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
		<div class="table-responsive" id="tab_print" >
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
					<td align='center'>Academic Year : <?php echo $this->db->where('yearid',$yearid)->get('sch_school_year')->row()->sch_year; ?></td>
					<td></td>
				</tr>
				<tr>
					<td align='center'>Teacher Assignation Report</td>
					<td width="150px"></td>
				</tr>
			</table>
			<!-------- End Header ------------>
		</br></br></br>
			<table border="0"​ align="center" id='listsubject' class="table">
			    <thead>
			    	<th></th>
			    	<th><strong>Teacher Name</strong></th>
			    	<th><strong>Class</strong></th>
			    	<th><strong>Subject</strong></th>
			    </thead>
				<tbody id='bodylist'>
				    <?php
				        $i=1;
				    foreach($query as $row){
				      echo "<tr>
				      			<td align=center>$i</td>
				      			<td>$row->last_name $row->first_name</td>
				      			<td>
				         			<table>";
								         foreach ($this->tclass->getteacherclass($row->teacher_id) as $c) {
								         		echo "<tr><td>$c->class_name</td></tr>"; 
								         }
					         echo "</table>
					         	</td>
					         	<td>
					         		<table class='table class_sub' style='border-collapse:collapse' cellspacing=0 cellpadding=0>";
					         			 echo '<thead><tr><th>Subject</th><th>Program</th></tr></thead>';		
								         foreach ($this->tclass->getteachersubject($row->teacher_id) as $s) {
								         		echo "<tr><td>$s->subject </td><td> $s->subject_type</td></tr>"; 
								         }
					         echo "</table>";
					         echo "</td>";
				         echo "</tr>";
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
	  function teacherclasspreview(){
		var yearid=$('#year').val();
		var teacherid=$('#cbosearchteacher').val();
		
		location.href="<?PHP echo site_url('school/tearcherclass/preview');?>/"+teacherid+'/'+yearid;
	}
</script>