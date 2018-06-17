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

</style>
<?php
	$is_trim='';
	if(isset($_GET['is_t']))
		$is_trim=$_GET['is_t'];
 ?>
<div class="wrapper">
	<div class="clearfix" id="main_content_outer">
	    <div id="main_content">
	      <div class="row result_info col-xs-10" style='width:100%'>
		      	<div class="col-xs-6">
		      		<strong>Level Subject Detail</strong>
		      	</div>
		      	<div class="col-xs-6" style="text-align: right";>
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
		      		<span class="top_action_button">
						<div class='col-xs-4 ' style='margin-top:3px !important; float:right'>
							<select class='form-control input-sm' onchange='preview(event);' id='s_trim'>
								<option value='' <?PHP if($is_trim=='') echo 'selected'; ?>>----Select----</option>
								<option value='0' <?PHP if($is_trim=='0') echo 'selected'; ?>>Normal</option>
								<option value='1' <?PHP if($is_trim=='1') echo 'selected'; ?>>Trimester</option>
							</select>
						</div>
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
					<td rowspan=4 width="150px">
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
					<td align='center'>Academic Year : <?php echo $query3->sch_year; ?></td>
					<td></td>
				</tr>
				<tr>
					<td align='center'>Level Subject Report</td>
					<td width="150px"></td>
				</tr>
			</table>
			<!-------- End Header ------------>
		</br></br></br>
			<table border="0"​ align="center" id='listsubject' class="table">
			    <thead>
			    	<th></th>
			    	<?php 
			    	$countglevel=0;
			    	foreach($query as $row){
			        		echo "<th>$row->grade_level</th>";
			        		$countglevel++;
			        }
			        ?>
			        
			    </thead>
				<tbody id='bodylist'>
				    <?php
				    foreach ($this->db->get('sch_subject_type')->result() as $sj_type) {
					    	echo "<tr>
					    			<td>$sj_type->subject_type</td>";
					    			  foreach($query as $row){
					    			  	echo "<td></td>";
					    			  }
					    	echo "</tr>";
						    foreach($this->levelsubjectdetails->searchsubjects($sj_type->subj_type_id,'',$is_trim) as $row1){
					    		$trim='';
					    		if($row1->is_trimester_sub>0)
					    			$trim='*';
						      echo "
						        <tr>
						          	<td>&nbsp;&nbsp;&nbsp;$row1->subject <span style='color:red'>$trim</span></td>
						          	<td style='display:none' class='remove_tag'><input type='checkbox' class='checkall remove_tag'></td>
						         ";
						         foreach($query as $row){
						         	if($this->levelsubjectdetails->getlevelsubject($row->grade_levelid, $row1->subjectid,$this->session->userdata('year'),$this->session->userdata('schoolid')) > 0 )
					        		// 	echo "<td><input class='remove_tag' type='checkbox' checked disabled readonly><span class='ex'>yes</span></td>";
					        		// else
					        		// 	echo "<td><input class='remove_tag' type='checkbox' disabled readonly ></td>";
								     echo "<td>&#x2611;</td>";
								  else
								     echo "<td>&#x2610;</td>";
					        	}
						     
						      echo "</tr>";
						    }
				}
				    ?>
			    </tr> 
			</tbody>
		</table>
			
		</div>
  	 </div>
  	</div>
  	
  </div>
</div>
<script type="text/javascript">
		// function gsPrint(emp_title,data){
		// 	 var element = "<div>"+data+"</div>";
		// 	 $("<center><p style='padding-top:15px;text-align:center;'><b>"+emp_title+"</b></p><hr>"+element+"</center>").printArea({
		// 	  mode:"popup",  //printable window is either iframe or browser popup              
		// 	  popHt: 600 ,  // popup window height
		// 	  popWd: 500,  // popup window width
		// 	  popX: 0 ,  // popup window screen X position
		// 	  popY: 0 , //popup window screen Y position
		// 	  popTitle:"test", // popup window title element
		// 	  popClose: false,  // popup window close after printing
		// 	  strict: false 
		// 	  });
		// }
		// $(function(){			
		// 	$("#print").on("click",function(){
		// 			var htmlToPrint = '' +
		// 			        '<style type="text/css">' +
		// 			        'table.table th, table.table td {' +
		// 			        'border:1px solid #000 !important;' +
		// 			        'padding;0.5em;' +
		// 			        '}' +
		// 			        '</style>';
		// 			var title = $("#title").text();
		// 		   	var data = $("#tab_print").html().replace(/<img[^>]*>/gi,"");
		// 		   	var export_data = $("<center>"+data+"</center>").clone().find(".remove_tag").remove().end().html();
		// 		   		export_data+=htmlToPrint;
		// 		   	gsPrint(title,export_data);
		// 	});
		// });
      $(function(){			
			$("#print").on("click",function(){
				gPrint("tab_print");
			});	
	  });
	  function preview(event){
    	var is_trim=$('#s_trim').val();
    	location.href="<?php echo site_url('school/levelsubjectdetail/preview');?>/?is_t="+is_trim;
    }
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
</script>