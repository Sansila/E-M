<style type="text/css">
	table tbody tr td img{width: 20px; margin-right: 10px}
	a,.sort,.panel-heading span{cursor: pointer;}
	.panel-heading span{margin-left: 10px;}
	.cur_sort_up{
		background-image: url('<?php echo base_url('assets/images/icons/sort-up.png')?>');
		background-position: left;
		background-repeat: no-repeat;
		padding-left: 15px !important;
	}
	.cur_sort_down{
		background-image: url('<?php echo base_url('assets/images/icons/sort-down.png')?>');
		background-position: left;
		background-repeat: no-repeat;
		padding-left: 15px !important;
	}

</style>
<?php
$school=$this->db->where('schoolid',$this->session->userdata('schoolid'))->get('sch_school_infor')->row();
		           			$school_name=$school->name;
		           			$school_adr=$school->address;	
$m='';
$p='';
if(isset($_GET['m'])){
    $m=$_GET['m'];
}
if(isset($_GET['p'])){
    $p=$_GET['p'];
}
 ?>

<div class="wrapper">
	<div class="clearfix" id="main_content_outer">
	    <div id="main_content">
	      <div class="row result_info">
		      	<div class="col-xs-6">
		      		<strong id='title'>Treatment List</strong>
		      	</div>
		      	<div class="col-xs-6" style="text-align: right">
			    	<span class="top_action_button">	
			    		<?php if($this->green->gAction("E")){ ?>
				    		<a href="#" id="exports" title="Export">
				    			<img id='export' src="<?php echo base_url('assets/images/icons/export.png')?>" />
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
			    		<?php if($this->green->gAction("C")){ ?>
				    		<a href="<?php echo site_url("health/ThreatMent/add?m=$m&p=$p")?>" >
				    			<img src="<?php echo base_url("assets/images/icons/add.png")?>" />
				    		</a>
				    	<?php } ?>
			    	</span>	      		
		      	</div> 			      
		  </div>
	      <div class="row">
	      	<div class="col-sm-12">
	      		<div class="panel panel-default">
	      			<div class="panel-body">
		           		<div class="table-responsive" id="tab_print">
		           			<?php 
		           			$thr="";
		           			$tr="";		
		           			foreach($thead as $th=>$val){
		           				if($th=='No')
		           					$thr.="<th class='$val' align='center' rel='$val'>".$th."</th>";
		           				else if($th=='Action')
		           					$thr.="<th class='remove_tag' align='center'>".$th."</th>";
		           				else
		           					$thr.="<th class='$val' align='center' class='sort' rel='$val'>".$th."</th>";								
		           			}
		           			
		           			if(count($tdata)>0){
		           				$i=1;
		           				if(isset($_GET['per_page']))
									$i=$_GET['per_page']+1;
								
								foreach($tdata as $row){
									if($row->sex=='F'){
										$sex="Female";
									}elseif ($row->sex=='M') {
										$sex='Male';
									}else{
										$sex=$row->sex;
									}
									$tr.="<tr>
										 <td class='No'>".str_pad($i,2,"0",STR_PAD_LEFT)."</td>
											 <td class='date'>".$row->date."</td>
											 <td class='patient_name'>".$row->first_name." ".$row->last_name."</td>
											 <td class='sex'>".$sex."</td>
											 <td class='patient'>".$row->position."</td>
											 <td class='class_name'>$row->class_name</td>
											 <td class='medicine'>";
											  foreach ($this->threatments->gettreatmidecinegroup($row->treatmentid) as $medi) {
													$tr.= "<span>$medi->descr_eng</span> <br>";
												}
										$tr.="</td>
											 <td class='remove_tag'>";
										if($this->green->gAction("P")){	
											 	$tr.="<a>
											 		<img rel=".$row->treatmentid." onclick='preview(event);' src='".site_url('../assets/images/icons/preview.png')."'/>
											 	</a>";
										}
										if($this->green->gAction("D")){	
											 	$tr.="<a>
											 		<img rel=".$row->treatmentid." onclick='deletetreat(event);' src='".site_url('../assets/images/icons/delete.png')."'/>
											 	</a>";
										}
										if($this->green->gAction("U")){	
											 	$tr.="<a>
											 		<img  rel=".$row->treatmentid." onclick='edit(event);' src='".site_url('../assets/images/icons/edit.png')."'/>
											 	</a>";
										}
											 $tr.="</td>
									 </tr>
									 ";
									 $i++;
								}
							}?>
		           			<table class="table">
		           				<thead><?php echo $thr ?></thead>
		           				<thead class='remove_tag'>
		           					<tr >
		           						<td colspan='2'>
		           							<select onchange="search(event);" class='form-control input-sm' id='s_type'>
		           								<option value="">Patient</option>
		           								<option value='emp' <?php if(isset($_GET['s_type'])=='emp') echo 'selected' ?>>Employee</option>
		           								<option value='student' <?php if(isset($_GET['s_type'])=='student') echo 'selected' ?>>Student</option>
		           								
		           							</select>
		           						</td>
		           						<td class='col-xs-2'>
		           							
		           								<input type='text' value="<?php if(isset($_GET['pat'])) echo $_GET['pat'] ?>" class='form-control input-sm' onkeyup="search(event);" id='s_name'/>
		           						</td>
		           						<td></td>
		           						<td class='col-xs-2'>
		           							<select  onchange="search(event);" class='form-control input-sm' id='s_position'>
		           								<option value=''>Select Position</option>
		           								<?php
		           									foreach ($this->db->get('sch_emp_position')->result() as $position) {?>
		           										<option value='<?php echo $position->posid ?>'  <?php if(isset($_GET['pos'])){ if($position->posid==$_GET['pos']) echo 'selected'; }?> > <?php echo $position->position ?></option>
		           									<?php }
		           								?>
		           							</select>
		           						</td>
		           						<td class='col-xs-1'>
		           							<select  onchange="search(event);" class='form-control input-sm' id='s_class'>
		           								<option value=''>Select Class</option>
		           								<?php
		           									foreach ($this->db->get('sch_class')->result() as $class) { ?>
		           										<option value="<?php echo $class->classid ?>" <?php if(isset($_GET['class'])){ if($class->classid==$_GET['class']) echo 'selected'; }?> ><?php echo $class->class_name ?></option>
		           									<?php }
		           								?>
		           							</select>
		           						</td><!-- 
		           						<td width="140">
		           							<select onchange="search(event);" class='form-control input-sm' id='s_doctor'>
		           								<option value=''>Select Doctor</option>
		           								<?php
		           									foreach ($this->threatments->getdoctor() as $doctor) { ?>
		           										<option value='<?php echo $doctor->empid ?>' <?php if(isset($_GET['doc'])){ if($doctor->empid==$_GET['doc']) echo 'selected'; }?>><?php echo $doctor->first_name .' '. $doctor->last_name ?></option>
		           									<?php }
		           								?>
		           							</select>
		           						</td> -->
		           					</tr>
		           				</thead>
		           				<tbody class='listbody'>
		           					<?php echo $tr ?>
		           					<tr class='remove_tag'>
										<td colspan='12' id='pgt'>
											<div style='margin-top:20px; width:11%; float:left;'>
											Display : <select id="sort_num"  onchange='search(event);' style='padding:5px; margin-right:0px;'>
															<?php
															$num=50;
															for($i=0;$i<10;$i++){?>
																<option value="<?php echo $num ;?>" <?php if(isset($_GET['s_num'])){ if($num==$_GET['s_num']) echo 'selected'; }?> ><?php echo $num;?></option>
																<?php $num+=50;
															}
															?>
														</select>
											</div>
											<div style='text-align:center; verticle-align:center; width:89%; float:right;'>
												<ul class='pagination' style='text-align:center'>
													
													<?php echo $this->pagination->create_links(); ?>
												</ul>
											</div>

										</td>
									</tr> 
		           				</tbody>
		           			</table>
						</div>  
					</div>
	      		</div>
	      	</div>	      	
	      </div> 
	    </div>
   </div>
</div>
<div class="modal fade bs-example-modal-lg" id="exporttap" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="wrapper">
				<div class="clearfix" id="main_content_outer">
				    <div id="main_content">
					    <div class="result_info">
					    	<div class="col-sm-6">
					      		<strong>Choose Column To Export</strong>
					      	</div>
					      	<div class="col-sm-6" style="text-align: center">
					      		<strong>
					      			<center class='visit_error' style='color:red;'></center>
					      		</strong>	
					      	</div>
					    </div>
					      	<form enctype="multipart/form-data" name="frmvisit" id="frmvisit" method="POST">
						        <div class="row">
									<div class="col-sm-12">
							            	<div class="panel-body">
							            		<div class='table-responsive'>
										               <table class='table'>
										               		<thead >
										               			<?php
										               			foreach($thead as $th=>$val){
										               				if($th!='Action')
											           					echo "<th>".$th."</th>";	
											           			}?>
										               		</thead>
										               		<tbody >
										               			<?php
										               			foreach($thead as $th=>$val){
										               				if($th!='Action')
											           					echo "<td align='center'><input type='checkbox' checked class='colch' rel='".$val."'></td>";	
											           			}?>
										               		</tbody>
										               </table>
											   </div>
								            </div>
								    </div> 
								</div>
					      </form>
					</div> 
			    </div>
			</div> 
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" id='btnprint' class="btn btn-primary">Print</button>
                <button type="button" id='btnexport' class="btn btn-primary">Export</button>
            </div>
        </div>                       <!-- /.modal-content -->
    </div>
<script type="text/javascript">
	getviewpermis();
	function getviewpermis(){
		var schlevelid=$('#schlevelid').val();
		if(schlevelid>0 || schlevelid!='')
			search();
	}
	var s_type=$("#s_type").val();
		if(s_type=='emp'){
			$('#s_position').removeClass('hide');
			$('#s_class').addClass('hide');
		}
		if(s_type=='student'){
			$('#s_class').removeClass('hide');
			$('#s_position').addClass('hide');
		}
		if (s_type==''){
			$('#s_class').removeClass('hide');
			$('#s_position').removeClass('hide');
		}
	function edit(event){
		var treat_id=$(event.target).attr('rel');
		location.href="<?PHP echo site_url('health/Threatment/edit');?>/"+treat_id+"?<?php echo "m=$m&p=$p" ?>";
	}
	function deletetreat(event){
			var r = confirm("Are you sure to delet this item !");
			if (r == true) {
			    var treat_id=$(event.target).attr('rel');
				location.href="<?PHP echo site_url('health/Threatment/delete');?>/"+treat_id+"?<?php echo "m=$m&p=$p" ?>";
			} else {
			    txt = "You pressed Cancel!";
			}
			
	}
	$('#export').click(function(){
		$('#exporttap').modal('show');
		$('#btnprint').hide();
		$('#btnexport').show();
	})
	$('#print').click(function(){
		$('#exporttap').modal('show');
		$('#btnprint').show();
		$('#btnexport').hide();
	})
	function gsPrint(emp_title,data){
		 var element = "<div>"+data+"</div>";
		 $("<center><p style='padding-top:15px;text-align:center;'><b>"+emp_title+"</b></p><hr>"+element+"</center>").printArea({
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
			$("#btnprint").on("click",function(){
					var htmlToPrint = '' +
					        '<style type="text/css">' +
					        'table th, table td {' +
					        'border:1px solid #000 !important;' +
					        'padding;0.5em;' +
					        '}' +
					        'table th{border-top:1px solid #000 !important;}'+
					        '</style>';
					var title="<div style='width:300px; text-align:left;'><span style='font-weight:bold; font-size:16px;'><?php echo $school_name; ?></span><br>";
					var s_adr="<?php echo $school_adr; ?></div>";
						title+=s_adr;
						title +="<h4 align='center'>"+ $("#title").text()+"</h4>";
				   	var data = $("#tab_print").html().replace(/<img[^>]*>/gi,"");
				   	var export_data = $("<center>"+data+"</center>").clone().find(".remove_tag").remove().end().html();
				   		export_data+=htmlToPrint;
				   	gsPrint(title,export_data);
			});

			$("#btnexport").on("click",function(e){
				var title="<div style='width:300px; text-align:left;'><span style='font-weight:bold; font-size:16px;'><?php echo $school_name; ?></span><br>";
					var s_adr="<?php echo $school_adr; ?></div>";
						title+=s_adr;
						title +="<h4 align='center'>"+ $("#title").text()+"</h4>";
					
				var data=$('.table').attr('border',1);
					data = $("#tab_print").html().replace(/<img[^>]*>/gi,"");
	  		 var export_data = $("<center><h3 align='center'>"+title+"</h3>"+data+"</center>").clone().find(".remove_tag").remove().end().html();
				window.open('data:application/vnd.ms-excel,' + encodeURIComponent(export_data));
		    e.preventDefault();
		    $('.table').attr('border',0);
			});
	})
	$('.colch').click(function(){
		if($(this).is(':checked')){
			var col=$(this).attr('rel');
				$('.'+col).removeClass(' remove_tag');
		}else{
			var col=$(this).attr('rel');
			$('.'+col).addClass(' remove_tag');
		}
	})
	function preview(event){
				var treatmentid=jQuery(event.target).attr("rel");
				window.open("<?PHP echo site_url('health/Threatment/preview');?>/"+treatmentid,'_blank');
		}
	$("#s_type").change(function(){
		var s_type=$(this).val();
		if(s_type=='emp'){
			$('#s_position').removeClass('hide');
			$('#s_class').addClass('hide');
		}
		if(s_type=='student'){
			$('#s_class').removeClass('hide');
			$('#s_position').addClass('hide');
		}
		if (s_type==''){
			$('#s_class').removeClass('hide');
			$('#s_position').removeClass('hide');
		}
	})
	$('#schlevelid').change(function(){
		search();
	})
	function search(event){
		var doctorid=$("#s_doctor").val();
		var p_name=$("#s_name").val();
		var classid=$("#s_class").val();
		var schlevelid=$("#schlevelid").val();
		var posid=$("#s_position").val();
		var s_type=$("#s_type").val();
		var s_num=$('#sort_num').val();
		var roleid=<?php echo $this->session->userdata('roleid');?>;
		var m=<?php echo $m;?>;
		var p=<?php echo $p;?>;
		$.ajax({
				url:"<?php echo base_url(); ?>index.php/health/threatment/search",    
				data: {'doctor':doctorid,
						'p_name':p_name,
						'class':classid,
						'schlevelid':schlevelid,
						'posid':posid,
						'roleid':roleid,
						'm':m,
						'p':p,
						's_type':s_type,
						's_num':s_num
					},
				type: "POST",
				success: function(data){
                   $('.listbody').html(data);
			}
		});
	}

		
</script>
