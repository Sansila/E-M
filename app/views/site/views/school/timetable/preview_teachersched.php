
<style type="text/css">
	#preview td{
		padding: 3px ;
	}
	td img{border:1px solid #CCCCCC; padding: 2px;}
	#preview_wr{
		margin: 10px auto !important;
	}
	#s_class{margin-top: 3px !important;}
	#tblmention td,#tblmention th{padding: 3px 5px !important;}
	span.set,.tab_head{font-family:"Times New Roman", Times, serif !important; font-size: 14px !important;}
	/*td,th{font-family:"Khmer OS", "Khmer OS Battambang", "Khmer OS Bokor" !important; font-size: 14px;}*/

</style>
<?php
		$school=$this->db->where('schoolid',$this->session->userdata('schoolid'))->get('sch_school_infor')->row();
   			$school_name=$school->name;
   			$school_adr=$school->address;
   		// $Student=$this->db->where('studentid',$stdid)->where('yearid',$row->yearid)->get('v_student_profile')->row();
   		
$mg='';
$pg='';
if(isset($_GET['m'])){
    $mg=$_GET['m'];
}
if(isset($_GET['p'])){
    $pg=$_GET['p'];
}
  ?>
<form method='post' action="<?php echo base_url()."index.php/school/student_sched/save?m=$mg&p=$pg"; ?>">
		<div class="wrapper">
			<div class="clearfix" id="main_content_outer">
			    <div id="main_content">
			      <div class="row result_info col-xs-10" style='width:100%'>
				      	<div class="col-xs-6">
				      		<strong>Schedule list</strong>
				      	</div>
				      	<div class="col-xs-6" style="text-align: right";>
				      		<span class="top_action_button">
				      			<?php if($this->green->gAction("E")){ ?>	
									<a href="#" id="export" title="Print">
						    			<img src="<?php echo base_url('assets/images/icons/export.png')?>" />
						    		</a>
						    	<?php } ?>
				      		</span>
				      		<span class="top_action_button">
				      			<?php if($this->green->gAction("P")){ ?>	
									<a href="#" id="print" title="Print">
						    			<img src="<?php echo base_url('assets/images/icons/print.png')?>" />
						    		</a>
						    	<?php } ?>
				      		</span>
				      		
				      		<span class="top_action_button">
								Teacher : <div class='col-xs-4 ' style='margin-top:3px !important; float:right'>
											<input type='text' class='form-control input-sm' id='s_teacher'/>
										</div>
				      		</span>
				      				
				      	</div> 			      
				  </div>
				</div>
			</div>
		</div>
		<div class="row" id='export_tap'>
			<div class="col-sm-12" id='preview_wr'>
			    <div class="panel panel-default">
			      	<div class="panel-body">
				         <div class="table-responsive" id="tab_print">
				         		<style type="text/css">
									#preview td{
										padding: 3px ;
									}
									#s_class{margin-top: 3px !important;}
									.small tbody tr td img{width: 15px; margin-right: 10px}
									.table th,.table td{padding:2px !important;}
									td img{border:1px solid #CCCCCC; padding: 2px;}
									#preview_wr{
										margin: 10px auto !important;
									}
									#tblmention td,#tblmention th{padding: 3px 5px !important; text-align: center;}
									.tab_head th{font-family:"Times New Roman", Times, serif !important; font-size: 14px; font-weight: bold !important;}
									.tab_head th,label.control-label{font-family:"Times New Roman", Times, serif !important; font-size: 14px; font-weight: bold !important;}
									#subj{font-weight: bold ; font-size: 11px;}
									#sub_type{font-style: italic; font-size: 10px;}
									#teach{ font-size: 11px;}
									#noclass{background-color: #CCCCCC}
									p{margin: 0px !important}
								</style>
								
								<div style='width:300px; float:right;'>
									<img src="<?php echo base_url('assets/images/logo/logo.png')?>" style='width:250px;  height:60px;' />
									
								</div>
								<div style='float:left; '>
									<div style=' font-weight:bold; text-transform: uppercase;'><?php echo $school_name ?></div>
									<div style='text-align:center !important; font-weight:bold;'></div> 
								</div>
								<p style="clear:both"></p>
				                <table align='center' style='width:100%'>
									<thead>
										<th valign='top' align="center" style='width:80%'><h4 align="center">TEACHER SCHEDULE</h4>
										<div style='text-align:left !important; font-weight:bold;'>Schedule For :<?php if($emp->sex=='M') echo "Mr."; else echo "Ms."; echo $emp->last_name.' '.$emp->first_name;  ?></div>
										<div style='text-align:left !important; font-weight:bold;'>Academy year :<?php echo $year->sch_year  ?></div>
										<!-- <input type='text' value='<?PHP echo $year->yearid ?>' name='yearid' class='hide'/> -->
										</th> 
									</thead>
								</table>
								<div class='table-responsive'>
									<table class='table table-bordered table-striped'>
										<thead>
											<th style='text-align:center !important'>Subject/Days</th>
											<?php 
												foreach ($this->sched->getdays() as $day) {
													echo "<th style='text-align:center !important'>".$day->dayname."</th>";
												}
											 ?>
										</thead>
										<tbody>
											<tr>
												<th colspan='8' style='background-color:#EEEEEE; text-align:center !important'>MORNING TIMES</th>
											</tr>
											<?php 

												foreach ($this->sched->getmorningtimes('AM') as $m) {
													echo "<tr>
															<td style='vertical-align: middle !important'>".$m->from_time.'-'.$m->to_time."</td>";
													foreach ($this->sched->getdays() as $day) {
														$teachrow=$this->sched->isteacherbc($emp->empid,$m->timeid,$day->dayid,$year->yearid);
														if(count($teachrow)>0){
															$classrow=$this->db->where('classid',$teachrow->classid)->get('sch_class')->row();
															$subrow=$this->sched->getsubjectrow($teachrow->subjectid);
															echo "<td width='150' height='50' align='center'  style='vertical-align: middle !important'>";
																echo "<span id='subj'>".$subrow->subject."</span><br/><span id='sub_type'>(".$subrow->subject_type.")</span><br/><span id='teach'> Class : ".$classrow->class_name."</span>";
															echo "</td>";
														}else{
															echo "<td width='150' height='50' id='noclass' align='center'  style='vertical-align: middle !important'>X</td>";
														}
																
													}
													echo "</tr>";
												}
											?>
											<tr>
												<th colspan='8' style='background-color:#EEEEEE; text-align:center !important'>EVENING TIMES</th>
											</tr>
											<?php 

												foreach ($this->sched->getmorningtimes('PM') as $m) {
													echo "<tr>
															<td style='vertical-align: middle !important'>".$m->from_time.'-'.$m->to_time."</td>";
													foreach ($this->sched->getdays() as $day) {
														$teachrow=$this->sched->isteacherbc($emp->empid,$m->timeid,$day->dayid,$year->yearid);
														if(count($teachrow)>0){
															$classrow=$this->db->where('classid',$teachrow->classid)->get('sch_class')->row();
															$subrow=$this->sched->getsubjectrow($teachrow->subjectid);
															echo "<td width='150' height='50' align='center'  style='vertical-align: middle !important'>";
																echo "<span id='subj'>".$subrow->subject."</span><br/><span id='sub_type'>(".$subrow->subject_type.")</span><br/><span id='teach'> Class : ".$classrow->class_name."</span>";
															echo "</td>";
														}else{
															echo "<td width='150' height='50' id='noclass' align='center'  style='vertical-align: middle !important'>X</td>";
														}
																
													}
													echo "</tr>";
												}
											?>
										</tbody>
									</table>

								</div>
								
							
						</div>
					</div>
				</div>
			</div>
</form>
<script type="text/javascript">
	function preview(teacherid){
		var yearid=$("#year").val();
		var m="<?PHP echo $mg; ?>";
		var p="<?php echo $pg; ?>";
		location.href="<?PHP echo site_url('school/student_sched/previewteach');?>/"+teacherid+"/"+yearid+"?m="+m+"&p"+p;
		
	}
	function gsPrint(data){
			 var element = "<div>"+data+"</div>";
			 $("<center>"+element+"</center>").printArea({
			  mode:"popup",  //printable window is either iframe or browser popup              
			  popHt: 600 ,  // popup window height
			  popWd: 500,  // popup window width
			  popX: 0 ,  // popup window screen X position
			  popY: 0 , //popup window screen Y position
			  popTitle:"test", // popup window title element
			  popClose: false,  // popup window close after printing
			  strict: false 
			  });
		}
		$(function(){		
			fillgift();
		})
		$("#print").on("click",function(){
					var htmlToPrint = '' +
					        '<style type="text/css">' +
					        'table.table-bordered th, table.table-bordered td {' +
					        'border:1px solid #000 !important;' +
					        'padding;0.5em;' +
					        '}' +
					        'table.small th,table.small td{border:0px solid #000 !important; border-bottom:1px solid #CCCCCC !important;}'+
					        '</style>';
				   	var data = $("#tab_print").html();
				   	var export_data = $("<center>"+data+"</center>").clone().find(".remove_tag").remove().end().html();
				   		export_data+=htmlToPrint;
				   	gsPrint(export_data);
		});
		$("#export").on("click",function(e){
				var data=$('.table-bordered').attr('border',1);
					data = $("#export_tap").html().replace(/<img[^>]*>/gi,"");
	   			var export_data = $("<center><h3 align='center'></h3>"+data+"</center>").clone().find(".remove_tag").remove().end().html();
				window.open('data:application/vnd.ms-excel,' + encodeURIComponent(export_data));
    			e.preventDefault();
    			$('.table-bordered').attr('border',0);
		});
	function fillgift(){		
		var techer="<?php echo site_url("school/student_sched/fillteacher")?>";
    	$("#s_teacher").autocomplete({
				source: techer,
				minLength:0,
				select: function( events, ui ) {
					preview(ui.item.id);
				}			
		});
	}
	function getteacher(event){
		var subjectid=$(event.target).val();
		var timeid=$(event.target).closest('tr').find('#timeid').val();
		var dayid=$(event.target).closest('td').find('#dayid').val();
		var yearid=$('#year').val();
		var classid=$('#s_classid').val();
		$.ajax({
				url:"<?php echo base_url(); ?>index.php/school/student_sched/getteacher",    
				data: {'subjectid':subjectid,'timeid':timeid,'dayid':dayid,'yearid':yearid,'classid':classid},
				type: "POST",
				success: function(data){
                   $(event.target).closest('td').find('.teacherid').html(data);
			}
		});
	}
      
</script>