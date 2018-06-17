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
		
	<!-- 	*************************List all of user******************************* -->
		<h3  align='center' class="text-muted">Currency</h3>
<div class="row">
	<div class="col-sm-6">
	      	<div class="panel-body">
		        <div class="table-responsive" id="tab_print">
					<table align='center' id='listuser' class='table table-bordered'>
						<thead>
							<th>No</th>
							<th>Rate</th>
							<th>Action</th>
						</thead>
						
						<tbody id='listbody'>
						<?php
						 $i=1;
							foreach ($tdata as $row) {
								echo "
									<tr>
										<td align='center'>$i</td>
										<td>$row->rate</td>
										<td align='center'>
											<a ><img rel='$row->id' onclick='updatepage(event);' src='".site_url('../assets/images/icons/edit.png')."'/></a>
										</td>
									</tr>

								";# code...
								$i++;
							}
						?>
							<tr>
								<td colspan='12' id='pgt'><div style='text-align:center'><ul class='pagination' style='text-align:center'><?php //echo $this->pagination->create_links(); ?></ul></div></td>
							</tr> 
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
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

		function updatepage(event){
				var p_id=jQuery(event.target).attr("rel");
				location.href="<?PHP echo site_url('employee/general_setup/editcurrency');?>/"+id;
			
		}
	</script>
	