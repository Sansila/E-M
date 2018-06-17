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
		           			foreach($semthead as $th=>$val){
		           				if($th=='No' || $th=='Evaluate Type' || $th=='Month' || $th=='Rank' || $th=='Semester')
		           					$thr.="<th class='$val' align='center' rel='$val'>".$th."</th>";
		           				else if($th=='Preview')
		           					$thr.="<th class='remove_tag' colspan='2' align='center'>".$th."</th>";
		           				else
		           					$thr.="<th class='sort $val' onclick='sort(event);' align='center' rel='$val'>".$th."</th>";								
		           			}
		           			
		           			if(count($tdata)>0){
		           				$i=1;
		           				if(isset($_GET['per_page']))
									$i=$_GET['per_page']+1;
								$sch=$this->session->userdata('schoolid');
								foreach($tdata as $row){	
																
									$tr.="<tr>
										 	 <td class='no'>".str_pad($i,2,"0",STR_PAD_LEFT)."</td>
											 <td class='s__fullname'>".$row->fullname."</td>
											 <td class='s__class_name  '>".$row->class_name."</td>
											 <td class='month'>".$row->months."</td>
											 <td class='semester'>".$row->semester."</td>
											 <td class='se__sem_exam_avg'>".$row->sem_exam_avg."</td>
											 <td class='se__months_avg'>".$row->months_avg."</td>
											 <td class='se__sem_avg'>".$row->sem_avg."</td>
											 <td class='se__sem_mention'>".$row->sem_mention."</td>
											 <td class='se__sem_result'>".$row->sem_result."</td>
											 <td class='sem_rank'>".$this->evaluate->getsemrank($row->transno,$row->semid)."</td>
											 <td class='remove_tag no_wrap'>";
											if($this->green->gAction("P")){	
											 	$tr.="<a>
												 		<img rel='".$row->semid."' onclick='preview(event);' src='".site_url('../assets/images/icons/preview.png')."'/>
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
		           						<th >
		           							<input type='text' value='asc' name='sort' id='sort' style='width:30px; display:none'/>
		           						</th>
		           							
		           						<th >
		           							<input type='text' value="<?php if(isset($_GET['s_name'])) echo $_GET['s_name'] ?>" onkeyup="search(event);" id='s_name' class='form-control input-sm'/>
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
		           							<input type='text' value='' name='sortquery' id='sortquery' style='width:80px; display:none'/>
		           						</th>
		           						<th >
		           							<select data-required="true" class="form-control input-sm parsley-validated" onchange="search(event);" name="s_semester" value="" id="s_semester" >
							                   <option value=''>Semester</option>
							                 	<option value='1st'>1st</option>
							                 	<option value='2nd'>2nd</option>
				                  			</select>
		           						</th>
		           						
		           						<th >
		           							
		           						</th>
		           						
		           						<th >
		           							
		           						</th>
		           						<th></th>	
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
										               			foreach($semthead as $th=>$val){
										               				if($th!='Preview')
											           					echo "<th>".$th."</th>";	
											           			}?>
										               		</thead>
										               		<tbody>
										               			<?php
										               			foreach($semthead as $th=>$val){
										               				if($th!='Preview')
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
	function preview(event){
				var semid=jQuery(event.target).attr("rel");
				window.open("<?PHP echo site_url('student/evaluate/previewsem');?>/"+semid+"?<?php echo "m=$m&p=$p" ?>","_blank");
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
		var sort_num=$('#sort_num').val();
		var roleid=<?php echo $this->session->userdata('roleid');?>;
		var m=<?php echo $m;?>;
		var p=<?php echo $p;?>;
		var name=$("#s_name").val();
		var semester=$("#s_semester").val();
		var classid=$("#s_class").val();
		var schlevelid=$("#schlevelid").val();
		var yearid=$("#year").val();
		var sortstd=$('#sortquery').val();
		if(sortstd=='')
			sortstd='order by se.transno desc';
		$.ajax({
				url:"<?php echo base_url(); ?>index.php/student/evaluate/searchsemester",    
				data: {'name':name,
						'roleid':roleid,
						'm':m,
						'p':p,
						'sort_num':sort_num,
						'classid':classid,
						'schlevelid':schlevelid,
						'semester':semester,
						'yearid':yearid,
						'sort':sortstd
					},
				type: "POST",
				success: function(data){
                   $('.listbody').html(data);
			}
		});
	}

		
</script>
