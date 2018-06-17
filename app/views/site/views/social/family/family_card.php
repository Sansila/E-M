<?php 
	  $year=$this->session->userdata('year');
	  // $this->db->where('yearid',$year);
	  // $sch_year=$this->db->get('sch_school_year')->row()->sch_year;
?>
<style>
	table tr:hover{cursor: pointer;}
</style>
<div class="wrapper">
	<div class="clearfix" id="main_content_outer">
	    <div id="main_content">
	      <div class="row result_info col-xs-10">
		      	<div class="col-xs-6">
		      		<strong>Family Card</strong>
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
						    /*height: 327px;
						    width: 206px;*/
						    height: 206px;
						    width: 324px;
							}
						.id{
							font-size: 14px !important;
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
							height: 100%;
							position: relative;
							z-index: 998;

						}
						.background img{
							max-width: 100%;
							max-height: 100%;
						}
						.desc{
							text-align: center;
							z-index: 999;
							width: 327px;
							position: absolute;
						}
						.desc div{margin:0px auto;}
						/*.left{float: left}
						.right{float: right}*/
						#div{
							margin:0px auto 0px auto;
							z-index: 999;
							position: absolute;
							height: 164px;
						    width: 324px;
							margin-top: 42px;
							text-align: center;
						}
						#bcTarget{
							margin: 0px auto;
						}
						#img{
							
							margin: 0px 9px 0px 9px;
							
							
							border:solid 0px #AB4585;
						}
						.wid{
							height:92px;
							width:90px !important;
						}
						.swid{
							height:95px;
							width:80px !important;
						}
						.img-circle.profile_img {
						    width: 70%;
						    border-radius:50%; 
						    background: #337ab7;
						    margin-left: 15%;
						    z-index: 1000;
						    position: inherit;
						    margin-top: 20px;
						    border: 2px solid rgba(52,73,94,0.44);
						    padding: 4px;
						}
					</style>
		      		<!-- <div class="left"> -->
		      			<div class="card">
		      				
		      				<div class="desc">
		      					<div class="pull-right" style="color: #fff; margin-top: 60px;margin-right: 12px;font-family: times, serif;font-size: 14px;color: #fff !important;"><?php //echo $family->class_name;?></div>
			      				<div style='width:322px; margin:0px auto; padding-top: 70px;'>
			      					<!-- Family -->
			      					<?php if(@ file_get_contents(site_url('../assets/upload/familys/'.$family['familyid'].'_0.jpg'))){ ?>
			      						<img src="<?php echo site_url('../assets/upload/familys/'.$family['familyid'].'_0.jpg'); ?>" id="img" class="wid img-circle profile_img"/>			      					
			      					<?php } ?>
									<?php if(@ file_get_contents(site_url('../assets/upload/familys/'.$family['familyid'].'_1.jpg'))){ ?>
			      						<img src='<?php echo site_url('../assets/upload/familys/'.$family['familyid'].'_1.jpg'); ?>' id="img" class="wid img-circle profile_img"/>			      					
			      					<?php } ?>
			      					<?php if(@ file_get_contents(site_url('../assets/upload/familys/'.$family['familyid'].'_2.jpg'))){ ?>
			      						<img src='<?php echo site_url('../assets/upload/familys/'.$family['familyid'].'_2.jpg'); ?>' id="img" class="wid img-circle profile_img"/>			      					
			      					<?php } ?>
			      					<!-- <?php 
			      					// print_r($student);
			      					foreach ($student as $stu) {
			      						if(@ file_get_contents(site_url('../assets/upload/students/'.$year.'/'.$stu['student_num'].'.jpg'))){
			      					?>
			      							<img src="<?php echo site_url('../assets/upload/students/'.$year.'/'.$stu['student_num'].'.jpg'); ?>" id="img" class="img-thumnail"/>			      					
			      					<?php } } ?> -->
								</div>
							</div>
		      				<div class="background">
		      					<img src="<?php echo site_url('../assets/images/card/studentFront.jpg'); ?>">
		      				</div>
							
		      			</div>
		      		<!-- </div> -->

		      		<!-- <div class="right"> -->
		      		<!-- <div style="page-break-after:always;"></div> -->
		      			<div class="card">

		      				<div class="background">
		      					<div id="div">
		      						<?php 
			      					// print_r($student);
			      					foreach ($student as $stu) {
			      						if(@ file_get_contents(site_url('../assets/upload/students/'.$year.'/'.$stu['student_num'].'.png'))){
			      					?>
			      							<img src="<?php echo site_url('../assets/upload/students/'.$year.'/'.$stu['student_num'].'.png'); ?>" id="img" class="swid profile_img"/>			      					
			      					<?php } } ?>
			      					<!-- <?php if(@ file_get_contents(site_url('../assets/upload/familys/'.$family['familyid'].'_1.jpg'))){ ?>
			      						<img src='<?php echo site_url('../assets/upload/familys/'.$family['familyid'].'_1.jpg'); ?>' id="img" class="img-thumnail"/>			      					
			      					<?php } ?> -->
		      					</div>
								
		      					<img src="<?php echo site_url('../assets/images/card/studentBack.jpg'); ?>" style='z-index: 998;'>
								
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
		 
	});
</script>