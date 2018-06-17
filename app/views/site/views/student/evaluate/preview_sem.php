
<style type="text/css">
	#preview td{
		padding: 3px ;
	}
	td img{border:1px solid #CCCCCC; padding: 2px;}
	#preview_wr{
		margin: 10px auto !important;
	}
	#tblmention td,#tblmention th{padding: 3px 5px !important;}
	span.set,.tab_head th,label.control-label{font-family:"Times New Roman", Times, serif !important; font-size: 14px !important;}
	td,th{font-family:"Khmer OS", "Khmer OS Battambang", "Khmer OS Bokor" !important; font-size: 14px;}

</style>
<?php
		$school=$this->db->where('schoolid',$this->session->userdata('schoolid'))->get('sch_school_infor')->row();
   			$school_name=$school->name;
   			$school_adr=$school->address;	
   		$level=$this->db->where('classid',$eva->classid)->get('sch_class')->row()->schlevelid;
   		$year=$this->db->where('yearid',$eva->yearid)->get('sch_school_year')->row()->sch_year;
   		$Student=$this->db->where('studentid',$eva->studentid)->where('yearid',$eva->yearid)->get('v_student_profile')->row();
   		$mention=$this->evaluate->getscoremention($level);
   		$month=$this->evaluate->getmonthclass($eva->classid,$eva->yearid);
   		$semster='';
   		if($eva->eval_semester=='1st')
   			$semster='១';
   		if($eva->eval_semester=='2nd')
   			$semster='២';
   		if($eva->eval_semester=='3th')
   			$semster='៣';
   		$permis=0;
   		$nopermis=0;
   		$permismonth=explode(',',$eva->month);
   		foreach ($permismonth as $m) {
   			foreach ($this->evaluate->getmonthpermis($eva->studentid,$m) as $row) {
	   			if($row->permis_status==1)
	   				$permis+=$row->days;
	   			else
	   				$nopermis+=$row->days;
	   		}
   		}
?>
<div class="wrapper">
	<div class="clearfix" id="main_content_outer">
	    <div id="main_content">
	      <div class="row result_info col-xs-10">
		      	<div class="col-xs-6">
		      		<strong>Evaluation Preview</strong>
		      	</div>
		      	<div class="col-xs-6" style="text-align: right">
		      		<span class="top_action_button">	
			    		<a href="#" id="export" title="Export">
			    			<img src="<?php echo base_url('assets/images/icons/export.png')?>" />
			    		</a>
			    	</span>
		      		<span class="top_action_button">
						<a href="#"  title="Print">
			    			<img id="print" src="<?php echo base_url('assets/images/icons/print.png')?>" />
			    		</a>
		      		</span>		
		      	</div> 			      
		  </div>
		</div>
	</div>
</div>

<div class="row" id='export_tap'>
	<div class="col-sm-10" id='preview_wr'>
	    <div class="panel panel-default">
	      	<div class="panel-body">
		         <div class="table-responsive" id="tab_print">
		         		<style type="text/css">
							#preview td{
								padding: 3px ;
							}
							td img{border:1px solid #CCCCCC; padding: 2px;}
							#preview_wr{
								margin: 10px auto !important;
							}
							#tblmention td,#tblmention th{padding: 3px 5px !important}
							.tab_head th,label.control-label{font-family:"Times New Roman", Times, serif !important; font-size: 14px; font-weight: bold !important;}
							td,th,label.control-label{font-family:"Khmer OS", "Khmer OS Battambang", "Khmer OS Bokor" !important; font-size: 14px;}

						</style>
						
						<div style='width:300px; float:right;'>
							<!-- <img src="<?php echo base_url('assets/images/logo/logo.png')?>" style='width:300px;  height:70px;' /> -->
							
						</div>
						<div style='float:left; '>
							<!-- <div style=' font-weight:bold; text-transform: uppercase;'><?php echo $school_name ?></div> -->
							<div style='text-align:center !important; font-weight:bold;'></div>
						</div>
						<p style="clear:both"></p>
		                <table align='center'>
							<thead>
								<th valign='top' align="center" style='width:80%'><h4 align="center">លទ្ធផលនៃការសិក្សាប្រចាំ <?php if($eva->evaluate_type!='month') echo " ឆមាសទី ".$semster." - ".$eva->eval_semester." Semester"; else echo "ខែ ".$this->evaluate->khmonth($eva->month) ."- ".$eva->month;?></h4></th> 
							</thead>
						</table>
						<table align='center' id='preview' style='width:100%'>
								<tr>
									<td ><label class="control-label">សិស្ស/Student : </label> </td>
									<td> <?php echo $Student->fullname; ?></td>
									<td><label class="control-label">ថ្ងៃ ខែ ឆ្នាំកំណើត/Date Of Birth : </label></td>
									<td> <?php echo $Student->dob; ?></td>
									<td><label class="control-label">ថ្នាក់/Class : </label></td>
									<td> <?php echo $Student->class_name; ?></td>
								</tr>
								
						</table>
						<div class="table-responsive">
							<table style='width:100%;' id='tblmention' border='1' cellspacing='0' cellpadding='0'>
								<tr>
									<th rowspan='3' style='text-align:center !important; vertical-align:middle;' >មុខវិជ្ជា/Subject</th>
									<th colspan='4' style='text-align:center !important; vertical-align:middle;' >និទ្ទេស/Mention</th>
									<th rowspan='3' style='text-align:center !important; vertical-align:middle;' >ចំណុចដែលត្រូវជួយពង្រឹងបន្ថែម<br>Remark</th>
								</tr>
								<tr>
									<?php
										foreach ($mention as $m) {
											echo "<th style='text-align:center !important; vertical-align:middle;'>".$m->mention_kh."-".$m->mention."</th>";
										}
									 ?>
								</tr>
								<tr>
									<?php
										foreach ($mention as $s) {
											echo "<th style='text-align:center !important; vertical-align:middle;'>".$s->min_score."-".$s->max_score."</th>";
										}
									 ?>
								</tr>
								<?php
								$counsub=0;
									foreach ($this->evaluate->gets_type($eva->classid,$eva->yearid,0) as $sub) {
													$rowspan=$sub->s_total+1;
													foreach ($this->evaluate->getsubject($eva->classid,$sub->subj_type_id,$eva->yearid,0) as $subject) {
														$counsub++;
														echo "<tr>
																<th width='150'>$subject->subject</th>";
																foreach ($mention as $m) {
																	if($this->evaluate->getmention($eva->evaluateid,$subject->subjectid)->mention==$m->mention)
																		echo "<th style='text-align:center !important; vertical-align:middle;'>X</th>";
																	else
																		echo "<td></td>";
																}	
															echo "<td></td></tr>";
													}
									}
									foreach ($month as $month) {
										$each_months_avg=($this->evaluate->getstdscore($month['transno'],$eva->studentid)->score)/$counsub;
										echo "<tr>
											<th width='150'>$month[month]</th>";
											foreach ($mention as $m) {
												if($this->evaluate->getstdmention($each_months_avg,$level)->mention==$m->mention)
													echo "<th style='text-align:center !important; vertical-align:middle;'>X</th>";
												else
													echo "<td></td>";
											}	
										echo "<td></td></tr>";
									}
								 ?>
								
							</table>
							<br>
							<label class="control-label">មធ្យមភាគ/Average<?php echo " :  <strong>".$eva->sem_avg." </strong> "; ?>ចំនាត់ថ្នាក់/Rank <?php echo ":  ".$this->evaluate->getsemrank($eva->transno,$eva->semid)."  "; ?> និទ្ទេស/Mention  <?php echo ":  ".$eva->sem_mention."  "; ?></label><br><br>
							<label class="control-label">អវត្តមាន មានច្បាប់/Abs. per.<?php echo $permis ?>.ដង/times ឥតច្បាប់/Abs. Sans per.<?php echo $nopermis ?>.ដង/times</label><br><br>
							<label class="control-label">វិន័យនិងសីលធម៏/Discipline....................................................................................................................................................................................................................................</label>
							<table align='center' id='preview' style='width:100%'>
								<tr>
									<td align='center'><label class="control-label">ថ្ងៃ ទី.............ខែ ................. ឆ្នាំ ២០............<br>នាយិកា/Director</label></td>
									<td align='center'><label class="control-label">មតិរបស់មាតាបិតា រឺ​អាណាព្យាបាល</label></td>
									<td align='center'><label class="control-label">ថ្ងៃ ទី.............ខែ ................. ឆ្នាំ ២០............<br>គ្រូប្រចាំថ្នាក់/Teacher</label></td>
								</tr>
							</table>
							<br/>
							
						</div>
							<div></div>
					</div>
					
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript">
		$(function(){		
			$("#print").on("click",function(){
				gPrint("tab_print");
			});
		})
		$("#export").on("click",function(e){
				var data=$('.table').attr('border',1);
					data = $("#export_tap").html().replace(/<img[^>]*>/gi,"");
	   			var export_data = $("<center><h3 align='center'></h3>"+data+"</center>").clone().find(".remove_tag").remove().end().html();
				window.open('data:application/vnd.ms-excel,' + encodeURIComponent(export_data));
    			e.preventDefault();
    			$('.table').attr('border',0);
		});
	</script>

