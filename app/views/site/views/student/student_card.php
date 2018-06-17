<?php 
$year=$this->session->userdata('year');
$this->db->where('yearid',$year);
$sch_year=$this->db->get('sch_school_year')->row()->sch_year;
?>
<style>
	table tr:hover{cursor: pointer;}
</style>
<div class="wrapper">
	<div class="clearfix" id="main_content_outer">
	    <div id="main_content">
	      <div class="row result_info col-xs-10">
		      	<div class="col-xs-6">
		      		<strong>Student Card</strong>
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

<div class="row">
	<div class="col-sm-10" id='preview_wr'>
		
	    <div class="panel panel-default">
	      	<div class="panel-body">
	      		<div  id="tab_print" style="max-width: 210px !important;">
		      		<style type="text/css">
						.card{
							/*background: url(<?php echo site_url('../assets/images/card_front.png'); ?>);
							background-size: cover;*/
						    height: 326px;
						    width: 206px;
							}
						.id{
							font-size: 16px !important;
							font-family: futura !important;
							color: #fff !important;
							
						}
						.name{
							font-size: 12px;
							color: green;
						
							text-transform: uppercase;

						}
						.position{
							font-size: 14px;
							color: red;
						
							text-transform: uppercase;
						}
						.background{
							width: 100%;
							height: 326px;
							position: relative;
							z-index: 998;

						}
						.background img{
							max-width: 100%;
							height: 326px;
						}
						.desc{
							z-index: 999;
							width: 206px;
							position: relative;
							margin-bottom: -285px;
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
						#bcTarget{
							margin: 0px auto;
						}
					</style>
		      			
		      		<!-- </div> -->
		      		<!-- <div class="right"> -->
		      		<!-- <div style="page-break-after:always;"></div> -->
		      			<div class="card">
		      				<div class="background">
		      					<div id="div">
		      						<div id="bcTarget"></div>
		      					</div>
		      					<img src="<?php echo site_url('../assets/images/StuBack.jpg'); ?>" style='z-index: 998;'>
		      				</div>
		      			</div>
		      			<div class="card" >
		      				
		      				<div class="desc">
		      					<!-- <div class="pull-right" style="color: #fff; margin-top: 80px;margin-right: 12px;font-family: times, serif;font-size: 14px;color: #fff !important;"><?php echo $student->class_name;?></div> -->
			      				<div style='width:155px; margin:0px auto; padding-top: 80px;'>
										<img src='<?php if(@ file_get_contents(site_url('../assets/upload/students/'.$_GET['yearid'].'/'.$student->student_num.'.png'))) echo site_url('../assets/upload/students/'.$_GET['yearid'].'/'.$student->student_num.'.png'); else echo site_url('../assets/upload/No_person.jpg') ?>' style='width:155px;border-radius:4px; height:155px;border:solid 0px #AB4585;' class="img-thumnail"/><br>
								</div>
								<div style="margin-top: 6px;">
									<div class="id" style="text-align: center; color: #fff !important;font-variant: small-caps;font-size:14px;text-transform:capitalize; "><?php echo $student->fullname;?></div>
									<div class="id" style="text-align: center;margin-top:-2px; color: #fff !important;text-transform:capitalize;">ID : <?php echo $student->student_num;?></div>
								</div>
								<div style="margin-top: 0px;color: #fff;">

									<!-- <div class="year" style="text-align: center;font-family: Century Gothic;margin-top: 8px; color: #fff !important;"><?php echo $student->sch_year;?></div> -->
									<!-- <div class="year" style="text-align: center;font-family: Century Gothic; color: #fff !important; font-size: 10px;font-variant: small-caps;text-transform:capitalize;">expriry date : 31 August 2017</div> -->
								</div>
							</div>
		      				<div class="background">
		      					<img src="<?php echo site_url('../assets/images/StuFront.jpg'); ?>">
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
			export_data+="<style>body{background:rgb(16,55,94);}</style>";
			var title = "";
			gsPrint(title,export_data);
		});
		var emp="<?php echo $employee['empcode'] ?>";
		$("#bcTarget").barcode(emp, "code93");   
	});
</script>