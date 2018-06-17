<?php

$m='';
$p='';
if(isset($_GET['m'])){
    $m=$_GET['m'];
}
if(isset($_GET['p'])){
    $p=$_GET['p'];
}
	$leave_type=array('AL'=>'Annual Leave',
						'SL'=>'Sick Leave',
						'SPL'=>'Special Leave',
						'MA'=>'Marriage',
						'ML'=>'Maternity',
						'P'=>'Personal',
						'O'=>'Other');
	$tr = ""; $num_perm = 1;
	$tr_search = "";
	if(count($tdata) > 0){
		$tr_search .='<tr class="remove_tag">
							<td>&nbsp;</td>
							<td><input type="text" name="empid" id="empid" class="form-control" onkeyup="search();"></td>
							<td>
								<select name="request_type" id="request_type" class="form-control" onchange="search();">
									<option value="">---Select---</option>
									<option value="LR">Leave Request</option>
	     							<option value="OTR">Overtime Request</option>
								</select>
							</td>
							<td>
								<select name="leave_type" id="leave_type" class="form-control" onchange="search();">
									<option value="">---Select---</option>';
							foreach ($leave_type as $key => $value) {
								$tr_search.="<option value='$key'>$value</option>";
							}
		  $tr_search.='</td></tr>';
		foreach($tdata as $rows_perm){
			$arr_rt = array('LR'=>'Leave Request','OTR'=>'Overtime Request');
			$tr .='<tr id="no_data" no_data="1">
						<td class="post_1">'.($num_perm++).'</td>
						<td class="post_2">'.$rows_perm['last_name'].' '.$rows_perm['first_name'].'</td>
						<td class="post_3">'.$arr_rt[$rows_perm['request_type']].'</td>
						<td class="post_3">'.$leave_type[$rows_perm['reason']].'</td>
						<td class="post_4">'.date_format(date_create($rows_perm['from']),'d/m/Y').'</td>
						<td class="post_5">'.date_format(date_create($rows_perm['to']),'d/m/Y').'</td>
						<td class="post_6">'.date_format(date_create($rows_perm['date_request']),'d/m/Y').'</td>
						<td width="1%" class="remove_tag">
							<a title="View Employee">
								<img rel="'.$rows_perm['requestid'].'" src="'.site_url('../assets/images/icons/preview.png').'" onclick="view_permission(event);" style="width:20px;height:20px;">
							</a>
						</td>
						<td width="1%" class="remove_tag">
							<a title="Delete Employee">
								<img rel="'.$rows_perm['requestid'].'" onclick="delete_permission(event);" src="'.site_url('../assets/images/icons/delete.png').'" style="width:20px;height:20px;">
							</a>
						</td>
						<td width="1%" class="remove_tag">
							<a title="Edit Employee">
								<img rel="'.$rows_perm['requestid'].'" src="'.site_url('../assets/images/icons/edit.png').'" onclick="edit_permission(event);" style="width:20px;height:20px;">
							</a>
						</td>
				   </tr>';
		}
	}else{
		$tr.="<tr style='text-align:center;' id='no_data' no_data='0'><td colspan='9'><b>No Permission</b></td></tr>";
	}
?>
<style>
	a,.sort{cursor: pointer;}
	a,.sort,.panel-heading span{cursor: pointer;}
	.panel-heading span{margin-left: 10px;}
		.cur_sort_up{
			background-image: url('<?php echo base_url('assets/images/icons/sort-up.png')?>');
			background-position: left;
			background-repeat: no-repeat;
			padding-left: 15px !important;
		}
		.cur_sort_down{
			background-image: url('<?php echo base_url('assets/images/icons/sort-down.png')?>');
			background-position: left;
			background-repeat: no-repeat;
			padding-left: 15px !important;
		}
</style>
<div class="wrapper">
	<div class="clearfix" id="main_content_outer">
	    <div id="main_content">
	      <div class="row result_info">
	      		<div class="col-xs-6">
			      	<strong class="emp_title"><?php echo $title = "Permission Request List";?></strong>
			    </div>
			    <div class="col-xs-6" style="text-align: right">
		      		<!-- <span class="top_action_button">
			    		<a>
			    			<img onclick="showsort(event);" src="<?php echo base_url('assets/images/icons/sort.png')?>" />
			    		</a>
			    	</span> -->
		      		<!-- <span class="top_action_button">
			    		<a href="<?php echo site_url('employee/permission/import')?>" >
			    			<img src="<?php echo base_url('assets/images/icons/import.png')?>" />
			    		</a>
			    	</span> -->
			    	<span class="top_action_button">	
			    		<a id="perm_export"  title="Export">
			    			<img src="<?php echo base_url('assets/images/icons/export.png')?>" />
			    		</a>
			    	</span>
		      		<span class="top_action_button">
						<a href="JavaScript:void(0);" id="perm_print" title="Print">
			    			<img src="<?php echo base_url('assets/images/icons/print.png')?>" />
			    		</a>
		      		</span>		    	
			    	<span class="top_action_button">
			    		<a href="<?php echo site_url('employee/permission/add')?>" >
			    			<img src="<?php echo base_url('assets/images/icons/add.png')?>" />
			    		</a>
			    	</span>	      		
		   		</div>
	      </div>
	      <div class="panel panel-default" id="sort_ad" style="display:none">
			  <div class="panel-heading">
			  		<span class="label label-default" onclick="sortadvance(event);">A</span>
			  		<span class="label label-default" onclick="sortadvance(event);">B</span>
			  		<span class="label label-default" onclick="sortadvance(event);">C</span>
			  		<span class="label label-default" onclick="sortadvance(event);">D</span>
			  		<span class="label label-default" onclick="sortadvance(event);">E</span>
			  		<span class="label label-default" onclick="sortadvance(event);">F</span>
			  		<span class="label label-default" onclick="sortadvance(event);">G</span>
			  		<span class="label label-default" onclick="sortadvance(event);">H</span>
			  		<span class="label label-default" onclick="sortadvance(event);">I</span>
			  		<span class="label label-default" onclick="sortadvance(event);">J</span>
			  		<span class="label label-default" onclick="sortadvance(event);">K</span>
			  		<span class="label label-default" onclick="sortadvance(event);">L</span>
			  		<span class="label label-default" onclick="sortadvance(event);">M</span>
			  		<span class="label label-default" onclick="sortadvance(event);">N</span>
			  		<span class="label label-default" onclick="sortadvance(event);">O</span>
			  		<span class="label label-default" onclick="sortadvance(event);">P</span>
			  		<span class="label label-default" onclick="sortadvance(event);">Q</span>
			  		<span class="label label-default" onclick="sortadvance(event);">R</span>
			  		<span class="label label-default" onclick="sortadvance(event);">S</span>
			  		<span class="label label-default" onclick="sortadvance(event);">T</span>
			  		<span class="label label-default" onclick="sortadvance(event);">U</span>
			  		<span class="label label-default" onclick="sortadvance(event);">V</span>
			  		<span class="label label-default" onclick="sortadvance(event);">W</span>
			  		<span class="label label-default" onclick="sortadvance(event);">X</span>
			  		<span class="label label-default" onclick="sortadvance(event);">Y</span>
			  		<span class="label label-default" onclick="sortadvance(event);">Z</span>
			  		<span class="label label-default" onclick="sortadvance(event);">0-9</span>
			  </div>
			</div>
	      <div class="row">
	      		<div class="col-xs-12">
	      			<div class="panel panel-default">
	      				<div class="panel-body">
	      					<div class="table-responsive" id="div_export_print">
	      						<table class="table" border="0" cellspacing="0" cellpadding="0">
	      							<thead>
	      								<tr>
	      									<th class="pos_1">N&deg;</th>
	      									<th class="pos_2 sort no_wrap" onclick="sort(event);" rel="emp.empid">Employee ID</th>
	      									<th class="pos_3 sort no_wrap" onclick="sort(event);" rel="epr.request_type">Request Type</th>
	      									<th class="pos_3 sort no_wrap" onclick="sort(event);" rel="epr.reason">Leave Type</th>
	      									<th class="pos_4 sort no_wrap" onclick="sort(event);" rel="epr.from">From</th>
	      									<th class="pos_5 sort no_wrap" onclick="sort(event);" rel="epr.to">To</th>
	      									<th class="pos_6 sort no_wrap" onclick="sort(event);" rel="epr.date_request">Date Request</th>
	      									<th colspan="3" class="remove_tag">Action</th>
	      								</tr>
	      								<input type='hidden' value='ASC' name='sort' id='sort' style='width:80px;'/>
		       							<input type='hidden' value='' name='sortquery' id='sortquery' style='width:200px;'/>
	      								<?php echo $tr_search; ?>
	      							</thead>
	      							<tbody class="listbody">
	      							<?php echo $tr;?>
	      							<tr class="remove_tag">
										<td colspan='12' id='pgt'>
											<div style='margin-top:20px; width:11%; float:left;'>
											Display : <select id="sort_num" style='padding:5px; margin-right:0px;' onchange="search();">
															<?php
															$num=50;
															for($i=0;$i<10;$i++){?>
																<option value="<?php echo $num ;?>" <?php if(isset($_GET['s_num'])){ if($num==$_GET['s_num']) echo 'selected'; }?> ><?php echo $num;?></option>
																<?php $num+=50;
															}
															?>
														</select>
											</div>
											<div style='text-align:center; verticle-align:center; width:89%; float:right;'>
												<ul class='pagination' style='text-align:center'>
													
													<?php echo $this->pagination->create_links(); ?>
												</ul>
											</div>

										</td>
									</tr>
	      							</tbody>
	      						</table>
	      						
	      					</div>
	      				</div>
	      			</div>
	      		</div>
	      </div>
	      <form id="excel-form" action="<?php echo base_url('app/libraries/Z_EXPORT_TO_EXCEL.PHP')?>" method="POST">
             <input type="hidden" name="num_colspan" value="6" id="num_colspan"/>
             <input type="hidden" name="exporttile" value="Permission List"/>
             <textarea id="excel-data" name="data" style="display:none;"></textarea>
          </form>
	    </div>
	</div>
</div>
<!--Modal Export Print-->
<div class="modal fade" id="myModal_export_print" data-backdrop=false>
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"><b>Warning</b></h4>
      </div>
      <div class="modal-body">
        <b id="message_body"></b>
        <input type="hidden" name="get_rel" id="get_rel" value="">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal">OK</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div>
<script type="text/JavaScript">
	$(function(){
		$("#perm_export").on("click", function(e){
			var title="<div style='width:300px; text-align:left;'><span style='font-weight:bold; font-size:16px;'><?php echo $school_name; ?></span><br>";
			var s_adr="<?php echo $school_adr; ?></div>";
						title+=s_adr;
						title +="<h4 align='center'>"+ $("#title").text()+"</h4>";
				title +="<h4 align='center'>"+ $(".emp_title").text()+"</h4>";		
			var data=$('.table').attr('border',1);
				data = $("#div_export_print").html().replace(/<img[^>]*>/gi,"");
	  		var export_data = $("<center><h3 align='center'>"+title+"</h3>"+data+"</center>").clone().find(".remove_tag").remove().end().html();
			window.open('data:application/vnd.ms-excel,' + encodeURIComponent(export_data));
		    e.preventDefault();
		    $('.table').attr('border',0);
		});

		$("#perm_print").on("click", function(){
			var no_data = $("#no_data").attr('no_data');
			var data = $("#div_export_print").html();
			if( no_data == 1 ){
				gsPrint('Permission List',data,'remove_tag');
			}else{
				$("#message_body").text("We didn't find anything to Print.");
				$("#myModal_export_print").modal('show');
			}
		});
	});

	function view_permission(event){
		var permission_id= $(event.target).attr('rel');
		location.href="<?PHP echo site_url('employee/permission/view');?>/"+permission_id;
	}
	function delete_permission(event){
		var r = confirm("Are you sure to delete this record !");
		if(r == true){
			var permission_id= $(event.target).attr('rel');
			location.href="<?PHP echo site_url('employee/permission/delete');?>/"+permission_id;
		}
	}
	function edit_permission(event){
		var permission_id= $(event.target).attr('rel');
		location.href="<?PHP echo site_url('employee/permission/edit');?>/"+permission_id;
	}
	function showsort(event){	
		$('#sort_ad').fadeToggle('3000');
	}
	function sortadvance(event){
		var value = $(event.target).text();
		
		var sql='';
		if($('.cur').attr('rel')==undefined){
			alert('please select field');
		}else {
			$(event.target).removeClass('label-default');
			$('.panel div span').removeClass('label-danger');
			$('.panel div span').addClass('label-default');
			$(event.target).addClass('label-danger');
			var field = $('.cur').attr('rel');
			
			if(value=='0-9')
				sql="ORDER BY Case When "+field+" Like '[0-9]%' Then 1 Else 0 End Asc, "+field;
			else
				sql="AND "+field+" LIKE '"+value+"%' ";
			search(sql);	
		}
	}
	function sort(event){
		var sort=$(event.target).attr('rel');
		var sorttype=$('#sort').val();
		if(sorttype=='ASC'){
			$('#sort').val('DESC');
			$('.sort').removeClass('cur_sort_down cur');
			$(event.target).addClass('cur_sort_up cur');
		}
		else{
			$('#sort').val('ASC');
			$('.sort').removeClass('cur_sort_up cur');
			$(event.target).addClass('cur_sort_down cur');
		}
		$('#sortquery').val('ORDER BY '+sort+' '+sorttype);
		search();
	}

	function search(sort){
		if(sort==''){
			$('.panel div span').removeClass('label-danger');
			$('.panel div span').addClass('label-default');
		}
		var sort_num 	 = $("#sort_num").val();
		var empid 		 = $("#empid").val();
		var request_type = $("#request_type").val();
		var leave_type = $("#leave_type").val(); 
		var sortperm	 = $('#sortquery').val();
		if(sortperm  == '')
		sortperm = 'ORDER BY epr.requestid DESC';
		
			$.ajax({
				type: "POST",
				url:"<?php echo base_url(); ?>index.php/employee/permission/search_perm",    
				data: {
					'sort_ad':sort,
					'sort':sortperm,
					'sort_num':sort_num,
					'empid':empid,
					'leave_type':leave_type,
					'request_type': request_type
				},
				success: function(data){
		           //alert(data);
		           $('.listbody').html(data);
				}
			});
	}
</script>