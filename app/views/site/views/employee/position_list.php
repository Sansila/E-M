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
						<td class="pos_2">'.$row_pos['position'].'</td>
						<td class="pos_3">'.$row_pos['position_kh'].'</td>
						<td class="pos_4">'.$row_pos['description'].'</td>
						<td width="1%" class="remove_tag">
							<a title="Delete Contract">
								<img class="clk_del" rel="'.$row_pos['posid'].'" onclick="delete_pos(event);" src="'.site_url('../assets/images/icons/delete.png').'" style="width:20px;height:20px;">
							</a>
						</td>
						<td width="1%" class="remove_tag">
							<a title="Edit Contract">
								<img rel="'.$row_pos['posid'].'" src="'.site_url('../assets/images/icons/edit.png').'" onclick="edit_pos(event);" style="width:20px;height:20px;">
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
	      		<strong class="contr_title"><?php echo $title = "Position List";?></strong>
	      	</div>
	      	<div class="col-xs-6" style="text-align: right">
	      		<span class="top_action_button">
		    		<a>
		    			<img onclick="showsort(event);" src="<?php echo base_url('assets/images/icons/sort.png')?>" />
		    		</a>
		    	</span>
	      		<span class="top_action_button">
		    		<a href="<?php echo site_url('employee/position/import')?>" >
		    			<img src="<?php echo base_url('assets/images/icons/import.png')?>" />
		    		</a>
		    	</span>
		    	<span class="top_action_button">	
		    		<a href="JavaScript:void(0);" id="export" class="export" title="Export">
		    			<img src="<?php echo base_url('assets/images/icons/export.png')?>" />
		    		</a>
		    	</span>
	      		<span class="top_action_button">
					<a href="JavaScript:void(0);" id="print" class="print" title="Print">
		    			<img src="<?php echo base_url('assets/images/icons/print.png')?>" />
		    		</a>
	      		</span>		    	
		    	<span class="top_action_button">
		    		<a href="<?php echo site_url('employee/position/add')?>" >
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
	      <!--End -->
	      <div class="row">
	      		<div class="col-xs-12">
	      			<div class="panel panel-default">
	      				<div class="panel-body">
	      					<div class="table-responsive" id="div_export_print">
				      			<table class="table" border="0" cellspacing="0" cellpadding="0">
				      				<thead>
				      					<tr>
				      						<th class="pos_1">N&deg;</th>
				      						<th class="pos_2 sort" onclick="sort(event);" rel="position">Postion</th>
				      						<th class="pos_3 sort" onclick="sort(event);" rel="position_kh">Position (Kh)</th>
				      						<th class="pos_4 sort" onclick="sort(event);" rel="description">Job Description</th>
				      						<th colspan="2" class="remove_tag">Action</th>
				      					</tr>
				      					<input type='hidden' value='ASC' name='sort' id='sort' style='width:80px;'/>
		       							<input type='hidden' value='' name='sortquery' id='sortquery' style='width:200px;'/>
				      					<?php echo $tr_search;?>
				      				</thead>
				      				<tbody class="listbody">
				      				<?php echo $tr;?>
				      				<tr class="remove_tag">
										<td colspan='12' id='pgt'>
											<div style='margin-top:20px; width:11%; float:left;'>
											Display : <select id="sort_num" style='padding:5px; margin-right:0px;'>
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
             <input type="hidden" name="num_colspan" value="4" id="num_colspan"/>
             <input type="hidden" name="exporttile" value="<?php echo $title ?>"/>
             <input type="hidden" name="pagesecurity" value="PgSecurity"/>
             <textarea id="excel-data" name="data" style="display:none;"></textarea>
        </form>
	    </div>
	</div>
</div>
<!--Check Print Export-->
<div class="modal fade" id="check_export_print" data-backdrop=false>
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"><b>Print Option</b></h4>
      </div>
      <div class="modal-body">
        <table width="100%" align="center" class="table">
        	<tr>
        		<th align="center">N&deg;</th>
        		<th align="center">Position</th>
        		<th align="center">Position (Kh)</th>
        		<th align="center">Job Description</th>
        	</tr>
        	<tr>
        		<td><input type="checkbox" class="chk" rel="1" checked="checked"></td>
        		<td><input type="checkbox" class="chk" rel="2" checked="checked"></td>
        		<td><input type="checkbox" class="chk" rel="3" checked="checked"></td>
        		<td><input type="checkbox" class="chk" rel="4" checked="checked"></td>
        	</tr>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" id="clk_print" data-dismiss="modal">Print</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div>
<!--Model Export Print-->
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
			location.href="<?php echo site_url('employee/position/delete');?>/"+posid;
		}
	}
	function view_position(event){
		var posid = $(event.target).attr('rel');
		location.href="<?php echo site_url('employee/position/view_pos');?>/"+posid;
	}

	function edit_pos(event){
		var posid = $(event.target).attr('rel');
		location.href="<?php echo site_url('employee/position/edit');?>/"+posid;
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