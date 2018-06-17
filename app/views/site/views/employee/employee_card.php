
<style>
	table tr:hover{cursor: pointer;}
</style>
<div class="wrapper">
	<div class="clearfix" id="main_content_outer">
	    <div id="main_content">
	      <div class="row result_info col-xs-10">
		      	<div class="col-xs-6">
		      		<strong>Employee Card</strong>
		      	</div>
		      	<div class="col-xs-6" style="text-align: right">
		      		<span class="top_action_button">
						<a href="#" id="print" title="Print">
			    			<img src="<?php echo base_url('assets/images/icons/print.png')?>" />
			    		</a>
		      		</span>		
		      	</div> 			      
		  </div>
		</div>
	</div>
</div>
<?php //echo $year=$this->session->userdata('year'); ?>
<div class="row">
	<div class="col-sm-10" id='preview_wr'>
		
	    <div class="panel panel-default">
	      	<div class="panel-body">
	      		<div  id="tab_print" style="max-width: 210px !important;">
		      		<style type="text/css">
						.card{
							/*background: url(<?php echo site_url('../assets/images/card_front.png'); ?>);
							background-size: cover;*/
						    height: 324px;
						    width: 206px;
							}
						.id{
							font-size: 11px;
							color: green !important;
							font-weight: bold;
						}
						.name,.names{
							font-size: 12px;
							color: green;
							font-weight: bold;
							text-transform: uppercase;
							padding: 0px !important;
							margin: 0px !important;

						}
						.position{
							font-size: 12px;
							color: red !important;
							font-weight: bold;
							text-transform: uppercase;
						}
						.background{
							width: 100%;
							height: 100%;
							position: relative;
							z-index: 998;

						}
						.background img{
							max-width: 100%;
							max-height: 100%;
						}
						.desc{
							z-index: 999;
							width: 206px;
							position: absolute;
						}
						.desc div{margin:0px auto;}
						/*.left{float: left}
						.right{float: right}*/
						#div{
							margin:0px auto 0px auto;
							z-index: 999;
							position: absolute;
							bottom: 25px;
							width: 206px;
						}
						.name::first-letter {
						    /*font-size: 128%;*/
						    /*color: #8A2BE2;*/
						}
						.names::first-letter {
						    font-size: 128%;
						    /*color: #8A2BE2;*/
						}
						#bcTarget{
							margin: 0px auto;
						}
					</style>
		      		<!-- <div class="left"> -->
		      			<div class="card">
		      				
		      				<div class="desc">
			      				<div style='width:145px; margin:0px auto; padding-top: 76px;'>
										<img src='<?php if(@ file_get_contents(site_url('../assets/upload/employees/photos/'.$employee['empid'].'.jpg'))) echo site_url('../assets/upload/employees/photos/'.$employee['empid'].'.jpg'); else echo site_url('../assets/upload/No_person.jpg') ?>' style='width:145px;border-radius:4px; height:145px;border::solid 2px #AB4585;' class="img-thumnail"/><br>
								</div>
								<div class="id" style="text-align: center; color: green !important;">ID : <?php echo $employee['empcode'];?></div>
								<div class="name" style="text-align: center !important;color: black !important;font-variant: small-caps;font-size:14px;text-transform:capitalize; "><?php echo $employee['last_name']." ".$employee['first_name'];?></div>
								<div class="position" style="text-align: center; color: red !important;"><?php echo $employee['position'];?></div>
								<div class="id" style="text-align: center; color: green !important;">Issued Date : <?php echo '30/09/2016'//$this->green->convertSQLDate($employee['begin_date']);?></div>
								<div class="id" style="text-align: center; color: green !important;">Expiry Date : <?php echo '31/08/2017'//$this->green->convertSQLDate($employee['end_date']);?></div>

							</div>
		      				<div class="background">
		      					<img src="<?php echo site_url('../assets/images/card_front.png'); ?>">
		      				</div>
							
		      			</div>
		      		<!-- </div> -->

		      		<!-- <div class="right"> -->
		      		<!-- <div style="page-break-after:always;"></div> -->
		      			<div class="card">

		      				<div class="background">
		      					<div id="div">
		      						<div id="bcTarget"></div>
		      					</div>
								
		      					<img src="<?php echo site_url('../assets/images/card_back.png'); ?>" style='z-index: 998;'>
								
		      				</div>
		      				
		      			</div>
		      		<!-- </div> -->
		      	</div>
	      	</div>
	    </div>
	</div>
</div>

<script type="text/JavaScript">
	$(function(){
		$("#print").on("click", function(){
			var export_data = $("#tab_print").html();
			var title = "";
			gsPrint(title,export_data);
		});
		var emp="<?php echo $employee['empcode'] ?>";
		$("#bcTarget").barcode(emp, "code93");   
	});
</script>