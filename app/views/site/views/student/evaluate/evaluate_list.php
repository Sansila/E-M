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
$month=array('Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec');
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
		      		<strong id='title'>Evaluation List</strong>
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
				    		<a href="<?php echo site_url("student/evaluate/add?m=$m&p=$p")?>" >
				    			<img src="<?php echo base_url('assets/images/icons/add.png')?>" />
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
		           				if($th=='No' || $th=='Evaluate Type' || $th=='Month' || $th=='Average' || $th=='Rank')
		           					$thr.="<th class='$val' align='center' rel='$val'>".$th."</th>";
		           				else if($th=='Action')
		           					$thr.="<th class='remove_tag' colspan='2' align='center'>".$th."</th>";
		           				else
		           					$thr.="<th class='sort $val' onclick='sort(event);' align='center' rel='$val'>".$th."</th>";								
		           			}
		           			
		           			if(count($tdata)>0){
		           				$i=1;
		           				if(isset($_GET['per_page']))
									$i=$_GET['per_page']+1;
								$sch=$this->session->userdata('schoolid');
								$arrtran[]=array();
								foreach($tdata as $row){	
									$g_level=$this->db->where('classid',$row->classid)->get('sch_class')->row()->grade_levelid;
									$count_grade=$this->db->query("SELECT COUNT(grade_levelid) as c 
																	FROM sch_level_subject_detail 
																	WHERE grade_levelid='".$g_level."'
																	AND year='".$row->yearid."'
																	AND schoolid='".$sch."'")->row()->c;									
									$tr.="<tr>
										 	 <td class='no'>".str_pad($i,2,"0",STR_PAD_LEFT)."</td>
											 <td class='se__date'>".$this->green->formatSQLDate($row->date)."</td>
											 <td class='s__fullname'>".$row->last_name.' '.$row->first_name."</td>
											 <td class='evaluate_type  '>".$row->evaluate_type."</td>
											 <td class='s__class_name'>".$row->class_name."</td>
											 <td class='month'>".$row->month."</td>";
										if($row->evaluate_type!='Three Month'){
											$tr.= "<td class='score'>".$this->evaluate->getaverage($row->transno,$row->evaluateid)->score."</td>
											 <td class='average'>".number_format($this->evaluate->getaverage($row->transno,$row->evaluateid)->score/$count_grade, 2, '.', '')."</td>
											 <td class='rank'>".$this->evaluate->getrank($row->transno,$row->evaluateid)."</td>";
										}else{
											$tr.= "<td class='score'></td>
											 <td class='average'></td>
											 <td class='rank'></td>";
											}
										$tr.= "<td class='remove_tag no_wrap'>";
										if($this->green->gAction("P")){	
											 $tr.="<a title='Print This Class'>
												 		<img rel='".$row->evaluateid."' onclick='preview(event);' title='Print This Class' src='".site_url('../assets/images/icons/preview.png')."'/>
												</a>
												<a>
												 		<img rel='".$row->evaluateid."' onclick='previewbook(event);' src='".site_url('../assets/images/icons/a_preview.png')."'/>
												</a>";
										}
											 $tr.="</td>
											 <td class='remove_tag no_wrap'>";
									if(!isset($arrtran[$row->transno])){
										if($this->green->gAction("P")){	
											 $tr.="<a>
												 		<img rel='".$row->transno."' onclick='previewclass(event);' src='".site_url('../assets/images/icons/preview_all.png')."'/>
												</a>";
										}
										if($this->green->gAction("D")){	
											$tr.="<a>
												 		<img rel='".$row->transno."' onclick='deletes(event);' src='".site_url('../assets/images/icons/delete.png')."'/>
												 </a>";
										}
										if($this->green->gAction("U")){	
											$tr.="<a>
												 		<img rel='".$row->transno."' onclick='edit(event);' src='".site_url('../assets/images/icons/edit.png')."'/>
												 </a>" ;
										}
									}	
									$tr.="</td>
												 
										 	</tr>
										 ";
									 	$i++;
									 	$arrtran[$row->transno]=$row->transno;
								}
							}?>
		           			<table class="table">
		           				<thead><?php echo $thr ?></thead>
		           				<thead class='remove_tag'>
		           						<th >
		           							<input type='text' value='asc' name='sort' id='sort' style='width:30px; display:none'/>
		           						</th>
		           						<th >
		           							<input type='text' value='' name='sortquery' id='sortquery' style='width:80px; display:none'/>
		           						</th>	
		           						<th >
		           							<input type='text' value="<?php if(isset($_GET['s_name'])) echo $_GET['s_name'] ?>" onkeyup="search(event);" id='s_name' class='form-control input-sm'/>
		           						</th>
		           						<th >
		           							<select data-required="true" class="form-control input-sm parsley-validated" onchange="search(event);" name="evaluate_type" value="" id="s_evaluate_type" >
							                   <option value=''>Select type</option>
							                   <option value="month" <?php if(isset($data->month)) if($data->month=='month') echo 'selected'; ?>>Monthly</option>
							                   <option value="Three Month" <?php if(isset($data->month)) if($data->month=='Three Month') echo 'selected'; ?>>Trimester</option>
							                   <option value="semester" <?php if(isset($data->month)) if($data->month=='Three Month') echo 'selected'; ?>>Semester</option>
				                  			</select>
		           						</th>
		           						<th >
		           							<select data-required="true" class="form-control input-sm parsley-validated" onchange="search(event);" name="s_class" value="" id="s_class" >
							                   <option value=''>Select class</option>
							                  <?php 
							                  	foreach ($this->db->get('sch_class')->result() as $class) { ?>
							                  		<option value='<?php echo $class->classid ?>' <?php if(isset($data->classid)) if($class->classid==$data->classid) echo 'selected'; ?>> <?php echo $class->class_name ?></option>
							                  	<?php }
							                  ?>
				                  			</select>
		           						</th>
		           						<th >
		           							<select data-required="true" class="form-control input-sm parsley-validated" onchange="search(event);" id="s_month" >
							                   <option value=''>Select month</option>
							                  <?php 
							                  	foreach ($month as $month) { ?>
							                  		<option value='<?php echo $month ?>'<?php if(isset($data->month)) if($month==$data->month) echo 'selected'; ?>><?php echo $month; ?></option>
							                  	<?php }
							                  ?>
							                  
				                  			</select>
		           						</th>
		           						<th>
		           							<div class="has-error hide" id='sem'>
											  <select type="text" class="form-control input-sm semester" id="inputError1 " onchange="search(event);">
											  		<option value=''>---Select---</option>
											  		<option value='1st'>1st</option>
											  		<option value='2nd'>2nd</option>
											  		<option value='3th'>3th</option>
											  </select>
											</div>
		           						</th>	
		           						<th></th>
		           						<th></th>	
		           						<th></th>
		           						<th></th>	
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
										               		<tbody>
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
			$(".s_date,.end_date").datepicker({
	      		language: 'en',
	      		pick12HourFormat: true,
	      		format:'yyyy-mm-dd'
	    	});	
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
	$('#s_evaluate_type').change(function(){
		var type=$('#s_evaluate_type').val();
		if(type=='month'){
			$('#sem').addClass('hide');
		}else{
			$('#sem').removeClass('hide');
		}
	})
	function chkall(event){
		if($(event.target).is(':checked')){
			$('.chstd').prop('checked',true);
		}
		else{
			$('.chstd').prop('checked',false);
		}
				
	}
	function preview(event){

				var evaluate=jQuery(event.target).attr("rel");
				window.open("<?PHP echo site_url('student/evaluate/preview');?>/"+evaluate,'_blank');
	}
	function previewclass(event){
				var transno=jQuery(event.target).attr("rel");
				window.open("<?PHP echo site_url('student/evaluate/previewclass');?>/"+transno,'_blank');
	}
	function previewbook(event){
				var evaluate=jQuery(event.target).attr("rel");
				window.open("<?PHP echo site_url('student/evaluate/previewbook');?>/"+evaluate,'_blank');
		}
	function edit(event){
		var transno=$(event.target).attr('rel');
		location.href="<?PHP echo site_url('student/evaluate/edit');?>/"+transno+"?<?php echo "m=$m&p=$p" ?>";
	}
	function deletes(event){
			var transno=jQuery(event.target).attr("rel");
			var con=confirm("Are you sure want to delete ...!");
			if(con==true)
				location.href="<?PHP echo site_url('student/evaluate/deletes');?>/"+transno+"?<?php echo "m=$m&p=$p" ?>";
	}
	function sort(event)
		{
			var sort=$(event.target).attr('rel');
			var sorttype=$('#sort').val();
			if(sorttype=='asc'){
				$('#sort').val('desc');
				$('.sort').removeClass('cur_sort_down');
				$(event.target).addClass('cur_sort_up');
			}
			else{
				$('#sort').val('asc');
				$('.sort').removeClass('cur_sort_up');
				$(event.target).addClass('cur_sort_down');
			}
				
			//alert('sort : '+ sort);
			$('#sortquery').val('ORDER BY '+sort+' '+sorttype);
			search();
			//loading();
		}
	$('#schlevelid').change(function(){
		search();
	})
	function search(event){
		var roleid=<?php echo $this->session->userdata('roleid');?>;
		var m=<?php echo $m;?>;
		var p=<?php echo $p;?>;
		var sort_num=$('#sort_num').val();
		var name=$("#s_name").val();
		var eva_type=$("#s_evaluate_type").val();
		var classid=$("#s_class").val();
		var schlevelid=$("#schlevelid").val();
		var month=$("#s_month").val();
		var semester=$(".semester").val();
		var yearid=$("#year").val();
		var sortstd=$('#sortquery').val();
		if(sortstd=='')
			sortstd='order by se.transno desc';
		$.ajax({
				url:"<?php echo base_url(); ?>index.php/student/evaluate/search",    
				data: {'name':name,
						'eva_type':eva_type,
						'sort_num':sort_num,
						'month':month,
						'semester':semester,
						'yearid':yearid,
						'classid':classid,
						'schlevelid':schlevelid,
						'roleid':roleid,
						'm':m,
						'p':p,
						'sort':sortstd
					},
				type: "POST",
				success: function(data){
                   $('.listbody').html(data);
			}
		});
	}

		
</script>
