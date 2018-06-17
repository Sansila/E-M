<?php
	
	$m='';
	$p='';
	if(isset($_GET['m'])){
	    $m=$_GET['m'];
	}
	if(isset($_GET['p'])){
	    $p=$_GET['p'];
	}


	$tr = ""; $tr_search =""; $num_tr = 1;
	if(count($tdata) > 0){
		$tr_search .= '<tr class="remove_tag">
							<td>&nbsp;</td>
							<td><input type="text" name="contractid" onkeyup="search();" id="contractid" class="form-control"></td>
							<td><input type="text" name="empid" id="empid" onkeyup="search();" class="form-control"></td>
							<td>
								<select id="contract_type" class="form-control" onchange="search();">
									<option value="">Select Contract Type</option>
									<option value="VSI">VSI Contract</option>
									<option value="Local">Local Contract</option>
								</select>
							</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							
							<td colspan="2">
								<select class="form-control" id="job_type" onchange="search();">
									<option value="">Select Job Type</option>
									<option value="FT">Full Time</option>
									<option value="PT">Part Time</option>
								</select>
							</td>
							<td colspan="3">&nbsp;</td>
					  </tr>';
		foreach( $tdata as $contract ){
			$cre_Bdate = date_create($contract['begin_date']);
			$begin_date = date_format($cre_Bdate, 'd/m/Y');
			$cre_Edate = date_create($contract['end_date']);
			$end_date = date_format($cre_Edate, 'd/m/Y');

			$arr_contr = array('VSI'=>'VSI Contract', 'Local'=>'Local Contract');
			$contr_type = $contract['contract_type'];

			$arr_job = array('FT'=>'Full Time', 'PT'=>'Part Time');
			$job_type = $contract['job_type'];
			$empinfo=$this->green->getEmpInf($contract['empid']);
			$tr .='<tr id="no_data" rel="1">
						<td>'.($num_tr++).'</td>
						<td>'.$contract['contractid'].'</td>
						<td>'.$empinfo['empcode'].'</td>
						<td>'.$arr_contr[$contr_type].'</td>
						<td>'.$begin_date.'</td>
						<td>'.$end_date.'</td>						
						<td>'.$arr_job[$job_type].'</td>
						<td>'.$contract['decription'].'</td>						
						<td width="1%" class="remove_tag">
							<a title="Delete Contract" id="clk_del" class="clk_del">
								<img rel="'.$contract['con_id'].'" src="'.site_url('../assets/images/icons/delete.png').'" onclick="delete_contract(event);" style="width:20px;height:20px;">
							</a>
						</td>
						<td width="1%" class="remove_tag">
							<a title="Edit Contract">
								<img rel="'.$contract['con_id'].'" src="'.site_url('../assets/images/icons/edit.png').'" onclick="edit_contract(event);" style="width:20px;height:20px;">
							</a>
						</td>
				  </tr>';
		}
		
	}
	else{
		$tr.="<tr style='text-align:center;background:#FFFFFF;border-bottom:solid 2px #EEEEEE;'><td colspan='10' id='no_data' rel='0'><b>No Employee Contract</b></td></tr>";
	}
?>
<style>
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
	      		<strong class="contr_title"><?php echo $title = "Contract List";?></strong>
	      	</div>
	      	<div class="col-xs-6" style="text-align: right">
	      		<span class="top_action_button">
		    		<a>
		    			<img onclick="showsort(event);" src="<?php echo base_url('assets/images/icons/sort.png')?>" />
		    		</a>
		    	</span>
	      		<span class="top_action_button">
		    		<a href="<?php echo site_url('employee/contract/import')?>" >
		    			<img src="<?php echo base_url('assets/images/icons/import.png')?>" />
		    		</a>
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
		    	<span class="top_action_button">
		    		<a href="<?php echo site_url("employee/contract/add?m=$m&p=$p")?>" >
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
	      <!---Table-->
	      <div class="row">
       		<div class="col-sm-12">
       			<div class="panel panel-default">
	       			<div class="panel-body">
	       				<div class="table-responsive" id="div_export_print">
	       					<table class="table" border="0" cellpadding="0" cellspacing="0">
	       						<thead>
	       							<th  class="pos_1">N&deg;</th>
	       							<th  class="pos_2 sort" rel="contractid" onclick="sort(event);">Contract ID</th>
	       							<th  class="pos_3 sort" rel="empid" onclick="sort(event);">Employee ID</th>
	       							<th  class="pos_4 sort" rel="contract_type" onclick="sort(event);">Contract&nbsp;Type</th>
	       							<th  class="pos_5 sort" rel="begin_date" onclick="sort(event);">Begin Date</th>
	       							<th  class="pos_6 sort" rel="end_date" onclick="sort(event);">End Date</th>	       							
	       							<th  class="pos_8 sort" rel="job_type" onclick="sort(event);">Job&nbsp;Type</th>
	       							<th  class="pos_9 sort" rel="decription" onclick="sort(event);">Description</th>
	       							<th colspan="3" class="remove_tag">Action</th>
	       							<input type='hidden' value='ASC' name='sort' id='sort' style='width:80px;'/>
		       							<input type='hidden' value='' name='sortquery' id='sortquery' style='width:200px;'/>
	       							<?php echo $tr_search;?>
	       						</thead>
	       						<tbody class="listbody">
	       							
	       							<?php echo $tr;?>
	       							<?php if(count($tdata) > 0){ ?>
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
									<?php } ?>
	       						</tbody>
	       					</table>
	       				</div>

	       			</div>
	       		</div>
	       	</div>
	      </div>
	      <!---End-->
	      <form id="excel-form" action="<?php echo base_url('app/libraries/Z_EXPORT_TO_EXCEL.PHP')?>" method="POST">
             <input type="hidden" name="num_colspan" value="9" id="num_colspan"/>
             <input type="hidden" name="exporttile" value="<?php echo $title ?>"/>
             <input type="hidden" name="pagesecurity" value="PgSecurity"/>
             <textarea id="excel-data" name="data" style="display:none;"></textarea>
         </form>
	    </div>
	</div>
</div>
<!--Modal Export -->
<div class="modal fade" id="myModal_export_print" data-backdrop=false>
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"><b>Warning</b></h4>
      </div>
      <div class="modal-body">
        <b class="message-body"></b>
        <input type="hidden" name="get_rel" id="get_rel" value="">
      </div> 
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal">OK</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div>
<!--Modal Delete -->
<div class="modal fade" id="myModal_del" data-backdrop=false>
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"><b>Warning</b></h4>
      </div>
      <div class="modal-body">
        <b>Are you sure to delete this record !</b>
        <input type="hidden" name="get_rel" id="get_rel" value="">
      </div> 
      <div class="modal-footer">
      	<button type="button" class="btn btn-success" onclick="delete_contract(event);">Yes</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div>

<script type="text/javascript">
	$(function(){
		
		//----------Export to excel--------
		$("#export").on("click", function(){
			var no_data = $("#no_data").attr('rel');
			var data = $("#div_export_print").html().replace(/<img[^>]*>/gi,"");
			var export_data = $("<center>"+data+"</center>").clone().find(".remove_tag").remove().end().html();
			if( no_data == 0){
				$(".message-body").text("We didn't find anything to Export.");
				$("#myModal_export_print").modal('show');
			}else{
				$('#excel-data').text(export_data);
				$('#excel-form').submit();
			}
		});
		//----------print data--------
		$("#print").on("click", function(){
			var no_data = $("#no_data").attr('rel');
			var data = $("#div_export_print").html();
			if( no_data == 0){
				$(".message-body").text("We didn't find anything to Print.");
				$("#myModal_export_print").modal('show');
			}else{
				gsPrint('Contract List', data, 'remove_tag');
			}
		});

	});
	//-----------End Main Function-----
	function edit_contract(event){
		var contr_id=jQuery(event.target).attr("rel");
		location.href="<?PHP echo site_url('employee/contract/edit');?>/"+contr_id+"?<?php echo "m=$m&p=$p" ?>";
	}
	function delete_contract(event){
		var r = confirm("Are you sure to delete this record !");
		if( r == true){
		var contr_id= $(event.target).attr('rel');
		location.href="<?PHP echo site_url('employee/contract/delete');?>/"+contr_id+"?<?php echo "m=$m&p=$p" ?>";
		}
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
				sql=field+" LIKE '"+value+"%' ";
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
		var sort_num 		= $("#sort_num").val();
		var contr_id 		= $("#contractid").val();
		var empid 			= $("#empid").val();
		var contract_type 	= $("#contract_type").val();
		var job_type 		= $("#job_type").val();
		var sortcontr		= $('#sortquery').val();
		if(sortcontr == '')
			sortcontr='ORDER BY con_id DESC';

		$.ajax({
			type: "POST",
			url:"<?php echo base_url(); ?>index.php/employee/contract/search_contr",    
			data: {
				'sort_ad':sort,
				'sort':sortcontr,
				'sort_num':sort_num,
				'contr_id':contr_id,
				'empid':empid,
				'contract_type':contract_type,
				'job_type':job_type
			},
			success: function(data){
	           $('.listbody').html(data);
			}
		});
	}

</script>