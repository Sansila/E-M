<div class="wrapper">
	<div class="clearfix" id="main_content_outer">
	    <div id="main_content">
	      <div class="row result_info col-xs-12">
		      	<div class="col-xs-6">
		      		<strong>Visit Image</strong>
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
	<div class="panel panel-default" id='tab_print'>
		<div class="row">

			<style type="text/css">
				#img>img{
					width: 100%;
				}
			</style>
			<!-- <div style='width:250px; margin-left:25px; float:left;'>
				<img src="<?php echo base_url('assets/images/logo/logo.png')?>" style='width:240px;' />
			
			</div>
			<div style='float:left;'>
					<h5 style='margin:15px 5px 0px 0px; font-weight:bold;'>HAPPY CHANDARA SCHOOL</h5>
					<span>Phum Prek Thmey , Sangkat Prek Thmey,</span><br/>
					<span>Khan Mean Chey,Phnom Penh</span>
			</div> -->
			<p style="clear:both"></p>
	        <table align='center'>
				<thead>
					<th valign='top' align="center" style='width:80%'><h5 align="center"><b><u>FAMILY VISITED PICTURE</u></b></h5></th>
				</thead>
				<thead>
					<th valign='top' align="center" style='width:80%; text-align:center;'>FamilyID : <?PHP echo $family['family_code']; ?></th>
				</thead>
			</table>
		</div>
			<?php 
			$count=0;
			$visitnum=6;//number of image to show 
			$loop=2;
			foreach ($this->visit->getvisitrow($family['familyid']) as $family_visit) {
				if(@ file_get_contents(base_url('/assets/upload/family/'.$family['familyid'].'/'.$this->session->userdata('year').'/'.$family_visit->visitid.'.jpg')) && $count<$visitnum){
					if($loop%2==0)
						echo "<div class='row'>";
					echo "<div class='col-sm-6' id='preview_wr'>
					      	<div class='panel-body'>
						        <div class='table-responsive' id='img'>
						         		<img src='".site_url()."/../assets/upload/family/".$family['familyid']."/".$this->session->userdata('year')."/".$family_visit->visitid.".jpg'/>
										<br/><center> Visited Date : ".$this->green->formatSQLDate($family_visit->date)."</center>
								</div>
							</div>
					</div>";
					if($loop%2==1)
						echo "</div>";
					$count++;
					$loop++;
				}
			}?>
		</div>
	</div>
</div>

	<script type="text/javascript">
		$(function(){			
			$("#print").on("click",function(){
				gPrint("tab_print");
			});
			
		})
	</script>

