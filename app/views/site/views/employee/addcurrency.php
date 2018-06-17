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
		
<div class="row">
	<div class="col-sm-6">
	      	<div class="panel-body">
	      		<h3  align='center' class="text-muted">Currency</h3>
				<form id="contract_register" method="POST" enctype="multipart/form-data"  action="<?php echo site_url("employee/general_setup/save_cur?m=$m&p=$p")?>">
					<div class="row">
						<div class="col-sm-12" style="margin-bottom: 15px;">
							<div class="form_sep">
								<div class="form_sep">
									<label>USD To Riel(Rate/USD)</label>
									<input type="text" name="rate" class="form-control" value="<?php echo $tdata->rate ?>" required>
								</div>

							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12" style="margin-bottom: 15px;">
							<div class="form_sep">
								<div class="form_sep">
									<input type="submit" value="Save" class="btn btn-primary pull-right">
								</div>

							</div>
						</div>
					</div>
				</form>
		       
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
	