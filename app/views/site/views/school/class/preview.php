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
					<td align='center'>Setup Class Report</td>
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
				    foreach($query1 as $row1){
				      echo "
				        <tr>
				          	<td>$row1->grade_label</td>
				          	<td style='display:none'><input type='checkbox' class='checkall'></td>
				         ";
				         foreach($query as $row){
				         	if($this->getclassmode->getclass($row->grade_levelid, $row1->grade_labelid, $this->session->userdata('schoolid')) > 0 )
			        			echo "<td>&#x2611;&nbsp;".$this->getclassmode->getclassname($row->grade_levelid, $row1->grade_labelid, $this->session->userdata('schoolid'))->class_name."</td>";
							else
								echo "<td>&#x2610;&nbsp;$row->grade_level$row1->grade_label</td>";
			        	}
				     
				      echo "</tr>";
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
</script>