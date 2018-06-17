<?php
	$tr_search ='<tr class="remove_tag" >
					<td></td>
					<td><input type="text" name="name" id="name" class="form-control" onkeyup="search();"></td>
					<td><input type="text" name="quantity" id="quantity" class="form-control" onkeyup="search();"></td>
					<td><input type="text" name="price" id="price" class="form-control" onkeyup="search();"></td>
					<td><input type="text" name="edition" id="edition" class="form-control" onkeyup="search();"></td>
					<td><input type="text" name="author" id="author" class="form-control" onkeyup="search();"></td>
					<td><input type="text" name="author2" id="author2" class="form-control" onkeyup="search();"></td>
					<td><input type="text" name="desc" id="desc" class="form-control" onkeyup="search();"></td>
					
					<td"colspan="3"></td>
				</tr>';

	$tr = ""; $num_pos = 1;
	if(count($tdata) >0 ){
		foreach( $tdata as $row_pos ){
			$tr .= '<tr class="no_data" rel="1">
						<td class="pos_1">'.($num_pos++).'</td>
						<td class="pos_2">'.$row_pos['name'].'</td>
						<td class="pos_3">'.$row_pos['quantity'].'</td>
						<td class="pos_4">'.$row_pos['price'].'</td>
						<td class="pos_5">'.$row_pos['edition'].'</td>
						<td class="pos_6">'.$row_pos['author'].'</td>
						<td class="pos_7">'.$row_pos['author2'].'</td>
						<td class="pos_8">'.$row_pos['desc'].'</td>
						<td width="170">
							<div class="btn-group">
			                  <button type="button" class="btn btn-default">Action</button>
			                  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							    <span class="caret"></span></button>
							    <ul class="dropdown-menu">
							       <li><a title="Contract" rel="'.$row_pos['book_id'].'" onclick="edit_pos(event);" role="menuitem" tabindex="-1" href="#"">Update</a></li>
							      <li class="divider"></li>
							      <li><a title="Contract" rel="'.$row_pos['book_id'].'" onclick="delete_pos(event);" role="menuitem" tabindex="-1" href="#"">Delete</a></li>
							    </ul>
						  	</div>
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
	      		<strong class="contr_title"><?php echo $title = "Service List";?></strong>
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
		    		<a href="<?php echo site_url('library/book/add')?>" >
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
				      						<th class="pos_2 sort" onclick="sort(event);" rel="position">Book Name</th>
				      						<th class="pos_3 sort" onclick="sort(event);" rel="position_kh">Quantity</th>
				      						<th class="pos_4 sort" onclick="sort(event);" rel="description">Price</th>
				      						<th class="pos_5 sort" onclick="sort(event);" rel="position">Edition</th>
				      						<th class="pos_6 sort" onclick="sort(event);" rel="position_kh">Author</th>
				      						<th class="pos_7 sort" onclick="sort(event);" rel="description">Author2</th>
				      						<th class="pos_8 sort" onclick="sort(event);" rel="description">Description</th>
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
        		<th align="center">Service Name</th>
        		<th align="center">Quantity</th>
        		<th align="center">Price</th>
        		<th align="center">Edition</th>
        		<th align="center">Author</th>
        		<th align="center">Author2</th>
        		<th align="center">Description</th>
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
			location.href="<?php echo site_url('library/book/delete');?>/"+posid;
		}
	}
	function view_position(event){
		var posid = $(event.target).attr('rel');
		location.href="<?php echo site_url('employee/position/view_pos');?>/"+posid;
	}

	function edit_pos(event){
		var posid = $(event.target).attr('rel');
		location.href="<?php echo site_url('library/book/edit');?>/"+posid;
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
		var name 	= $("#name").val();
		var quantity = $("#quantity").val();
		var price = $("#price").val();
		var edition 	= $("#edition").val();
		var author = $("#author").val();
		var author2 = $("#author2").val();
		var desc = $("#desc").val();
		var sortpos		= $('#sortquery').val();
		if(sortpos == '')
		sortpos='ORDER BY book_id DESC';
		
		$.ajax({
			type: "POST",
			url:"<?php echo base_url(); ?>index.php/library/book/search_service",    
			data: {
				'sort_ad':sort,
				'sort':sortpos,
				'sort_num':sort_num,
				'name':name,
				'quantity':quantity,
				'price':price,
				'edition':edition,
				'author':author,
				'author2':author2,
				'desc':desc,
			},
			success: function(data){
	           //alert(data);
	           $('.listbody').html(data);
			}
		});
		
	}

</script>