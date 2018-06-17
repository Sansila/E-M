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
<?php //echo $year=$this->session->userdata('year'); ?>
<div class="row">
	<div class="col-sm-10" id='preview_wr'>
		
	    <div class="panel panel-default">
	      	<div class="panel-body">
	      		<div  id="tab_print" style="max-width: 700px !important;">
		      		<style type="text/css">
						.card{
							/*background: url(<?php echo site_url('../assets/images/card_front.png'); ?>);
							background-size: cover;*/
						    height: 600px;
						    width: 320px;
							}
						.id{
							font-size: 16px;
							color: #fff;
							font-weight: bold;
						}
						.name{
							font-size: 18px;
							color: #fff;
							font-weight: bold;
							text-transform: uppercase;

						}
						.position{
							font-size: 12px;
							color: #fff;
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
							width: 350px;
							position: absolute;
						}
						.desc div{margin:0px auto;}
						.left{float: left}
						.right{float: right}
						#div{
							margin:0px auto 0px auto;
							z-index: 999;
							position: absolute;
							bottom: 35px;
							width: 350px;
						}
						#bcTarget{
							margin: 0px auto;
						}
					</style>
		      		<div class="left">
		      			<div class="card">
		      				<?php foreach ($student as $student ) {
		      					
		      				} ?>
		      				<div class="desc">
			      				<div style='width:100px; margin:0px 0px 0px 25px; padding-top: 45px;'>
										<img src='<?php if(@ file_get_contents(site_url('../assets/upload/employees/photos/'.$employee['empid'].'.jpg'))) echo site_url('../assets/upload/employees/photos/'.$employee['empid'].'.jpg'); else echo site_url('../assets/upload/No_person.jpg') ?>' style='width:100px;border-radius:4px; height:130px;border::solid 2px #AB4585;' class="img-thumnail"/><br>
								</div>
								<div style="margin-top: -110px;margin-left:30px;margin-right:-60px; color:#fff;">
								<div class="name" style="text-align: center;"><?php echo $student->fullname;?></div>
								<div class="id" style="text-align: center;">ID : <?php echo $student->student_num;?><span style="padding-right:20px;"></span></div>
								
								</div>
							</div>
		      				<div class="background">
		      					<img src="<?php echo site_url('../Westland_doc_update/cardout.jpg'); ?>">
		      				</div>
							
		      			</div>
		      		</div>
		      		<div class="right">
		      			<div class="card">

		      				<div class="background">
		      					<div id="div">
		      						<div id="bcTarget"></div>
		      					</div>
								
		      					<img src="<?php echo site_url('../Westland_doc_update/cardfront.jpg'); ?>" style='z-index: 998;'>
								
		      				</div>
		      				
		      			</div>
		      		</div>
		      	</div>
	      	</div>
	    </div>
	</div>
</div>

<script type="text/JavaScript">
	$(function(){
		$("#print").on("click", function(){
			var export_data = $("#tab_print").html();
			var title = "Employee Card";
			gsPrint(title,export_data);
		});
		var emp="<?php echo $employee['empcode'] ?>";
		$("#bcTarget").barcode(emp, "code93");   
	});
</script>