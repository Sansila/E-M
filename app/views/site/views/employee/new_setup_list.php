	<style type="text/css">
		table{
			border-collapse: collapse;
			/*border:1px solid #CCCCCC;*/
		}
		/*#listuser td,#listuser th{
			border:1px solid #CCCCCC;
			padding: 5px ;
		}*/
		td,th{
			padding: 5px ;
		}
		#pgt{
			border:solid 0px !important;
		}
		#listbody tr td a img{height: 20px !important; border:none !important;}
		/*th{
				background-color: #383547; 
				text-align: center;
				color: white;
		}*/
		a{cursor: pointer;}
	</style>
<?php 
	$days_arr=array();
	foreach ($rowdetail as $rows) {
		$days_arr[$rows->days][$rows->desc][$rows->is_check_in]=$rows;
	}
	// print_r($days_arr);
?>
	<!-- 	*************************List all of user******************************* -->
		<h3  align='center' class="text-muted">LIST ATTENDENCE TIME</h3>
<form id="contract_register" method="POST" enctype="multipart/form-data"  action="<?php echo site_url("employee/general_setup/new_save/$row->id?save=add&m=$m&p=$p")?>">
<div class="row">
	<div class="col-sm-12" style="margin-bottom: 15px;">
		<div class="form_sep">
			<label>Title</label>
			<!-- <div class="input-group bootstrap-timepicker timepicker"> -->
				<input type="text" name="title" value="<?php echo $row->title ?>" id="title" class="form-control" required placeholder='Title'>
				<!-- <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span> -->
			<!-- </div>	 -->
		</div>
	</div>

	<div class="col-sm-12" style="margin-bottom: 15px;">
	    <div class="panel panel-default">
	      	<div class="panel-body">
		        <div class="table-responsive" id="tab_print">
					<table align='center' id='listuser' class='table table-bordered'>
						<thead>
							<tr>
								<!-- <th rowspan="2">No</th> -->
								<!-- <th rowspan="2">Title</th> -->
								<th rowspan="2" style="text-align:center;  vertical-align: middle;">Day</th>
								<th colspan="6" style="text-align:center">Moning </th>
								<th colspan="6" style="text-align:center">Afternoon</th>
								<th colspan="6" style="text-align:center">Evening</th>
								<th width="130" style="text-align:center; vertical-align: middle;"  rowspan='2'>Remove</th>

							</tr>
							<tr>
								<?php
									for ($i=0; $i < 3; $i++) { 
										?>
										<th colspan="3" style="text-align:center">Check-In</th>
										<th colspan="3" style="text-align:center">Check-Out</th>
										<?php
									}
								?>
							</tr>

						</thead>
						
						<tbody id='listbody'>
							<?php 
								foreach ($daysdetail as $row) {
									echo "<tr>
											<td><input type='hidden' name='days[]' value='$row->days'/>$row->days</td>
											<td><input type='hidden' name='m_margin_b_in[]' value='".$days_arr[$row->days]['Morning'][1]->margin_befor."'/>".$days_arr[$row->days]['Morning'][1]->margin_befor."</td>
											<td><input type='hidden' name='m_in[]' value='".$days_arr[$row->days]['Morning'][1]->real_check_in."'/>".$days_arr[$row->days]['Morning'][1]->real_check_in."</td>
											<td><input type='hidden' name='m_margin_a_in[]' value='".$days_arr[$row->days]['Morning'][1]->margin_after."'/>".$days_arr[$row->days]['Morning'][1]->margin_after."</td>
											<td><input type='hidden' name='m_margin_b_out[]' value='".$days_arr[$row->days]['Morning'][0]->margin_befor."'/>".$days_arr[$row->days]['Morning'][0]->margin_befor."</td>
											<td><input type='hidden' name='m_out[]' value='".$days_arr[$row->days]['Morning'][0]->real_check_in."'/>".$days_arr[$row->days]['Morning'][0]->real_check_in."</td>
											<td><input type='hidden' name='m_margin_a_out[]' value='".$days_arr[$row->days]['Morning'][0]->margin_after."'/>".$days_arr[$row->days]['Morning'][0]->margin_after."</td>

											<td><input type='hidden' name='a_margin_b_in[]' value='".$days_arr[$row->days]['Afternoon'][1]->margin_befor."'/>".$days_arr[$row->days]['Afternoon'][1]->margin_befor."</td>
											<td><input type='hidden' name='a_in[]' value='".$days_arr[$row->days]['Afternoon'][1]->real_check_in."'/>".$days_arr[$row->days]['Afternoon'][1]->real_check_in."</td>
											<td><input type='hidden' name='a_margin_a_in[]' value='".$days_arr[$row->days]['Afternoon'][1]->margin_after."'/>".$days_arr[$row->days]['Afternoon'][1]->margin_after."</td>
											<td><input type='hidden' name='a_margin_b_out[]' value='".$days_arr[$row->days]['Afternoon'][0]->margin_befor."'/>".$days_arr[$row->days]['Afternoon'][0]->margin_befor."</td>
											<td><input type='hidden' name='a_out[]' value='".$days_arr[$row->days]['Afternoon'][0]->real_check_in."'/>".$days_arr[$row->days]['Afternoon'][0]->real_check_in."</td>
											<td><input type='hidden' name='a_margin_a_out[]' value='".$days_arr[$row->days]['Afternoon'][0]->margin_after."'/>".$days_arr[$row->days]['Afternoon'][0]->margin_after."</td>

											<td><input type='hidden' name='e_margin_b_in[]' value='".$days_arr[$row->days]['Evening'][1]->margin_befor."'/>".$days_arr[$row->days]['Evening'][1]->margin_befor."</td>
											<td><input type='hidden' name='e_in[]' value='".$days_arr[$row->days]['Evening'][1]->real_check_in."'/>".$days_arr[$row->days]['Evening'][1]->real_check_in."</td>
											<td><input type='hidden' name='e_margin_a_in[]' value='".$days_arr[$row->days]['Evening'][1]->margin_after."'/>".$days_arr[$row->days]['Evening'][1]->margin_after."</td>
											<td><input type='hidden' name='e_margin_b_out[]' value='".$days_arr[$row->days]['Evening'][0]->margin_befor."'/>".$days_arr[$row->days]['Evening'][0]->margin_befor."</td>
											<td><input type='hidden' name='e_out[]' value='".$days_arr[$row->days]['Evening'][0]->real_check_in."'/>".$days_arr[$row->days]['Evening'][0]->real_check_in."</td>
											<td><input type='hidden' name='e_margin_a_out[]' value='".$days_arr[$row->days]['Evening'][0]->margin_after."'/>".$days_arr[$row->days]['Evening'][0]->margin_after."</td>

											<td><a href='javascript:void(0);' onclick='removerow(event);'>Remove</a></td>

									</tr>";

								}
							?>
					
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	<div class="col-sm-12" style="margin-bottom: 15px;">
		<div class="form_sep">
			<input type="submit" value="Submit" class="btn btn-primary pull-right" />
		</div>
	</div>
</div>
</form>
	<script type="text/javascript">
		function search(event){
				var page_name=jQuery('#txtsp_name').val();
				var m_id=jQuery('#cbomodule_id').val();
					$.ajax({
							url:"<?php echo base_url(); ?>index.php/setting/page/search",    
							data: {'page_name':page_name,'m_id':m_id},
							type: "POST",
							success: function(data){
                               //alert(data);
                               jQuery('#listbody').html(data);
                           
						}
					});
			}
		function deletepage(event){
			var r = confirm("Are you sure to delet this item !");
			if (r == true) {
			    var p_id=jQuery(event.target).attr("rel");
				location.href="<?PHP echo site_url('employee/general_setup/delete');?>/"+p_id;
			} else {
			    txt = "You pressed Cancel!";
			}
			
		}
		function updatepage(event){
				var p_id=jQuery(event.target).attr("rel");
				location.href="<?PHP echo site_url('employee/general_setup/edit');?>/"+p_id;
			
		}

		check_table();
		function check_table(){
			var i = $('#listuser tbody tr').length;
			if (i<=0) {
				$('#btn-submit').addClass('disabled');
			}else{
				$('#btn-submit').removeClass('disabled');
			};
			console.log(i);
		}
	</script>
	