<?php
	$tr_search ='<tr class="remove_tag" >
					<td></td>
					<td><input type="text" name="position" id="position" class="form-control" onkeyup="search();"></td>
					<td><input type="text" name="position_kh" id="position_kh" class="form-control" onkeyup="search();"></td>
					<td><input type="text" name="description" id="description" class="form-control" onkeyup="search();"></td>
					<td"colspan="3"></td>
				</tr>';

	$tr = ""; $num_pos = 1;
	if(count($tdata) >0 ){
		foreach( $tdata as $row_pos ){
			$tr .= '<tr class="no_data" rel="1">
						<td class="pos_1">'.($num_pos++).'</td>
						<td class="pos_2">'.$row_pos['title'].'</td>
						<td class="pos_3">'.$row_pos['start_date'].'</td>
						<td class="pos_3">'.$row_pos['to_date'].'</td>
						<td class="pos_4">'.$row_pos['description'].'</td>
						<td width="1%" class="remove_tag">
							<a title="Delete Contract">
								<img class="clk_del" rel="'.$row_pos['holiday_id'].'" onclick="delete_pos(event);" src="'.site_url('../assets/images/icons/delete.png').'" style="width:20px;height:20px;">
							</a>
						</td>
						<td width="1%" class="remove_tag">
							<a title="Edit Contract">
								<img rel="'.$row_pos['holiday_id'].'" src="'.site_url('../assets/images/icons/edit.png').'" onclick="edit_pos(event);" style="width:20px;height:20px;">
							</a>
						</td>
					</tr>';
		}
			
	}else{
		//$tr .="<tr><td colspan='8'>No Position</td></tr>";
		$tr .="<tr class='no_data' rel='0'><td colspan='8' style='text-align:center;'><b>We didn't find anything to show here</b></td></tr>";
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
	      		<strong class="contr_title"><?php echo $title = "Public Holiday List";?></strong>
	      	</div>
	      	<div class="col-xs-6" style="text-align: right">
	      		
	      		<span class="top_action_button">
					<a href="JavaScript:void(0);" id="print" class="print" title="Print">
		    			<img src="<?php echo base_url('assets/images/icons/print.png')?>" />
		    		</a>
	      		</span>		    	
		    	<span class="top_action_button">
		    		<a href="<?php echo site_url('employee/public_holiday/add')?>" >
		    			<img src="<?php echo base_url('assets/images/icons/add.png')?>" />
		    		</a>
		    	</span>	      		
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
				      						<th class="pos_3 sort"  rel="position_kh">Title</th>

				      						<th class="pos_2 sort"  rel="position">Start Date</th>
				      						<th class="pos_2 sort"  rel="position">To Date</th>
				      						<th class="pos_4 sort"  rel="description">Description</th>
				      						<th colspan="2" class="remove_tag">Action</th>
				      					</tr>
				      					<input type='hidden' value='ASC' name='sort' id='sort' style='width:80px;'/>
		       							<input type='hidden' value='' name='sortquery' id='sortquery' style='width:200px;'/>
				      					<?php //echo //$tr_search;?>
				      				</thead>
				      				<tbody class="listbody">
				      					<?php echo $tr;?>
					      			</tbody>
				      			</table>
				      		</div>
	      				</div>
	      			</div>
	      		</div>
	      </div>
	      <form id="excel-form" action="<?php echo base_url('app/libraries/Z_EXPORT_TO_EXCEL.PHP')?>" method="POST">
             <input type="hidden" name="num_colspan" value="4" id="num_colspan"/>
             <input type="hidden" name="exporttile" value="<?php echo $title ?>"/>
             <input type="hidden" name="pagesecurity" value="PgSecurity"/>
             <textarea id="excel-data" name="data" style="display:none;"></textarea>
        </form>
	    </div>
	</div>
</div>

<div class="modal fade" id="myModal_export_print" data-backdrop=false>
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"><b>Warning</b></h4>
      </div>
      <div class="modal-body">
        <b id="message_body"></b>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal">OK</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div>
<!--Modal Delete-->
<div class="modal fade" id="myModal_del" data-backdrop=false>
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"><b>Warning</b></h4>
      </div>
      <div class="modal-body">
        <b>Are you sure to delet this record !</b>
        <input type="hidden" name="get_rel" id="get_rel">
      </div>
      <div class="modal-footer">
      	<button type="button" class="btn btn-success" onclick="delete_pos(event);">Yes</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div>

<!------>
<script type="text/javascript">
	$(function(){
		$("#print").on("click", function(){
			var no_data = $(".no_data").attr('rel');
			$(".chk").attr('checked', true);
			if(no_data ==1){
				$("#check_export_print").modal('show');
			}else{
				$("#message_body").text("We didn't find anything to Print.");
				$("#myModal_export_print").modal('show');

			}
		});

		$("#export").on("click", function(){
			var no_data = $(".no_data").attr('rel');
			var data = $("#div_export_print").html().replace(/<img[^>]*>/gi,"");
			var export_data = $("<center>"+data+"</center>").clone().find(".remove_tag").remove().end().html();
			if(no_data ==1){
				$('#excel-data').text(export_data);
				$('#excel-form').submit();
			}else{
				$("#message_body").text("We didn't find anything to Export.");
				$("#myModal_export_print").modal('show');
			}

		});

		$("#sort_num").on("change", function(){
			search();
		});

		$(".chk").on("click", function(){
			var get_chk = $(this).attr('rel');
			if($(this).is(":checked")){
				$(".pos_"+get_chk).removeClass('remove_tag');
			}else{
				$(".pos_"+get_chk).addClass('remove_tag');
			}
		});

		$("#clk_print").on("click", function(){
			var data = $("#div_export_print").html();
			gsPrint('Position List',data,'remove_tag');
		});

	});
	//---------End Main Function 


	function delete_pos(event){
		var r = confirm("Are you sure to delete this record !");
		if(r == true){
			var posid = $(event.target).attr('rel');
			location.href="<?php echo site_url('employee/public_holiday/delete');?>/"+posid;
		}
	}
	
	function edit_pos(event){
		var posid = $(event.target).attr('rel');
		location.href="<?php echo site_url('employee/public_holiday/edit');?>/"+posid;
	}

	
	function search(sort){
		if(sort==''){
			$('.panel div span').removeClass('label-danger');
			$('.panel div span').addClass('label-default');
		}
		var sort_num 	= $("#sort_num").val();
		var position 	= $("#position").val();
		var position_kh = $("#position_kh").val();
		var description = $("#description").val();
		var sortpos		= $('#sortquery').val();
		if(sortpos == '')
		sortpos='ORDER BY posid DESC';
		
		$.ajax({
			type: "POST",
			url:"<?php echo base_url(); ?>index.php/employee/position/search_pos",    
			data: {
				'sort_ad':sort,
				'sort':sortpos,
				'sort_num':sort_num,
				'position':position,
				'position_kh':position_kh,
				'description':description
			},
			success: function(data){
	           //alert(data);
	           $('.listbody').html(data);
			}
		});
		
	}

</script>