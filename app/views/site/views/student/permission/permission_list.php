
<style type="text/css">
	table tbody tr td img{width: 20px; margin-right: 10px}
	a,.sort{cursor: pointer;}
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

$yearid=$this->session->userdata('year');
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
		      		<strong id='title'>Student Permission List</strong>
		      	</div>
		      	<div class="col-xs-6" style="text-align: right">
		      		<span class="top_action_button">
		      			<?php if($this->green->gAction("I")){ ?>
				    		<a href="<?php echo site_url('student/student/import')?>" >
				    			<img src="<?php echo base_url('assets/images/icons/import.png')?>" />
				    		</a>
				    	<?php } ?>
			    	</span>
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
				    		<a href="<?php echo site_url("student/permission/add?m=$m&p=$p")?>" >
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
		           		<div class="table-responsive"  id="tab_print">
		           			<?php 
		           			$thr="";	
		           			$tr="";	
		           			$school=$this->db->where('schoolid',$this->session->userdata('schoolid'))->get('sch_school_infor')->row();
		           			$school_name=$school->name;
		           			$school_adr=$school->address;
		           			foreach($thead as $th=>$val){
		           				if($th=='No' || $th=='Nationality')
		           					$thr.="<th class='$val'>".$th."</th>";
		           				else if($th=='Action')
		           					$thr.="<th class='remove_tag'>".$th."</th>";
		           				else
		           					$thr.="<th class='sort $val' onclick='sort(event);' rel='$val'>".$th."</th>";								
		           			}
		           			
		           			if(count($tdata)>0){
		           				$i=1;
		           				if(isset($_GET['per_page']))
									$i=$_GET['per_page']+1;
								foreach ($tdata as $row) {
									$tr.="<tr>
											<td class='no'>".str_pad($i,2,"0",STR_PAD_LEFT)."</td>
											<td class='s__student_num'><a href='".site_url("/student/student/preview/$row->studentid?yearid=$yearid")."' target='_blank'>".$row->student_num."</a></td>
											<td class='s__fullname'>".$row->fullname."</td>
											<td class='s__class_name'>".$row->class_name."</td>
											<td class='stdp__date'>".$this->green->convertSQLDate($row->date)."</td>
											<td class='stdp__from_date'>".$this->green->convertSQLDate($row->from_date)."</td>
											<td class='stdp__to_date'>".$this->green->convertSQLDate($row->to_date)."</td>
											<td class='emp__last_name'>".$row->last_name." ".$row->first_name."</td>
											<td class='stdp__reason'>".$row->reason."</td>
											<td class='remove_tag no_wrap'>";
											if($this->green->gAction("P")){	
												 $tr.="<a><img rel=".$row->permisid." onclick='previews(event);' src='".site_url('../assets/images/icons/preview.png')."'/></a> "; 
											}
											if($this->green->gAction("D")){	
												$tr.="<a><img rel=".$row->permisid." onclick='deletes(event);' src='".site_url('../assets/images/icons/delete.png')."'/></a>";
											}
											if($this->green->gAction("U")){	
												$tr.="<a><img  rel=".$row->permisid." onclick='update(event);' src='".site_url('../assets/images/icons/edit.png')."'/></a>";
											}
										$tr.="</td>
											 </tr> ";	
										 $i++;		
								}
								
							}
													
		           			?>

		           			<table class="table" border='0'>
		           				<thead ><?php echo $thr ?></thead>
		           				<thead class='remove_tag'>
		           					<td>
		           						<input type='text' value='asc' name='sort' id='sort' style='width:30px; display:none'/>
									</td>
		           					<td class='col-xs-1'>
		           						<input type='text' value="<?php if(isset($_GET['s_id'])) echo $_GET['s_id']; ?>" onkeyup='search(event);' class='form-control input-sm' id='s_student_num'/>
		           					</td>
		           					<td width='120'>
		           						<input type='text' value="<?php if(isset($_GET['s_id'])) echo $_GET['s_id']; ?>" onkeyup='search(event);' class='form-control input-sm' id='s_name'/>
		           					</td>
							 		<td class='col-xs-1'>
							 			<select class='form-control input-sm parsley-validated' onchange='search(event);' name='s_classid' id='s_classid'>
	                   						 <option value="">Select Class</option>
						                    <?php
						                    	foreach ($this->db->get('sch_class')->result() as $class) {?>
						                    		<option value="<?php echo $class->classid ;?>" <?php if(isset($_GET['class'])){ if($class->classid==$_GET['class']) echo 'selected'; }?> ><?php echo $class->class_name;?></option>
						                    	<?php }
						                    ?>
					                 	</select>
							 		</td>
							 		<td ></td>
							 		<td ></td>
							 		<td ><input type='text' value='' name='sortquery' id='sortquery' style='width:80px; display:none'/></td></td>
							 		<td width='120'>
							 			<input type='text' value="<?php if(isset($_GET['s_id'])) echo $_GET['s_id']; ?>" onkeyup='search(event);' class='form-control input-sm' name='s_emp' id='s_emp'/>
							 		</td>
							 		<td ></td>
							 		<td ></td>

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
															<option value='all' <?php if(isset($_GET['s_num'])){ if($_GET['s_num']=='all') echo 'selected'; }?>>All</option>
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
<div class="modal fade bs-example-modal-sm" id='loading' tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-sm">
         <div class="modal-content">
			<img src="<?php echo base_url().'assets/images/icons/loading.gif'?>">
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
                                <!-- /.modal-dialog -->
</div>
<script type="text/javascript">
		//loading();
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
		$('.colch').click(function(){
			if($(this).is(':checked')){
				var col=$(this).attr('rel');
				$('.'+col).removeClass(' remove_tag');
			}else{
				var col=$(this).attr('rel');
				$('.'+col).addClass(' remove_tag');
			}
		})
		$(function(){			
			$("#btnprint").on("click",function(){
					var htmlToPrint = '' +
					        '<style type="text/css">' +
					        'table th, table td {' +
					        'border:1px solid #000 !important;' +
					        'padding;0.5em;' +
					        '}' +
					        '</style>';
					var title="<div style='width:300px; text-align:left;'><span style='font-weight:bold; font-size:16px;'><?php echo $school_name; ?></span><br>";
					var s_adr="<?php echo $school_adr; ?></div>";
						title+=s_adr;
						title +="<h4 align='center'>"+ $("#title").text()+"</h4>";
					var year =$("#year :selected").text();
						title+="Year : "+year;
					if($('#s_classid').val()!='')
						title+="<br>Class : " + $('#s_classid :selected').text();
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
				var year =$("#year :selected").text();
						title+="Year : "+year;
					if($('#s_classid').val()!='')
						title+="<br>Class : " + $('#s_classid :selected').text();
				var data=$('.table').attr('border',1);
					data = $("#tab_print").html().replace(/<img[^>]*>/gi,"");
	   			var export_data = $("<center><h3 align='center'>"+title+"</h3>"+data+"</center>").clone().find(".remove_tag").remove().end().html();
				window.open('data:application/vnd.ms-excel,' + encodeURIComponent(export_data));
    			e.preventDefault();
    			$('.table').attr('border',0);
			});
		})
		$('#schlevelid').change(function(){
			search();
		})
		function search(event){
				var roleid=<?php echo $this->session->userdata('roleid');?>;
				var m=<?php echo $m;?>;
				var p=<?php echo $p;?>;
				var year=$('#year').val();
				var student_num=jQuery('#s_student_num').val();
				var s_name=jQuery('#s_name').val();
				var s_emp=jQuery('#s_emp').val();
				var classid=jQuery('#s_classid').val();
				var schlevelid=jQuery('#schlevelid').val();
				var sort_num=$('#sort_num').val();
				var sortstd=$('#sortquery').val();
				if(sortstd=='')
					sortstd='order by stdp.permisid desc';
				$.ajax({
							url:"<?php echo base_url(); ?>index.php/student/permission/search",    
							data: {'roleid':roleid,'m':m,'p':p,
								'sort_num':sort_num,
								'sort':sortstd,
								'student_num':student_num,
								's_name':s_name,
								's_emp':s_emp,
								'schlevelid':schlevelid,
								'classid':classid},
							type: "POST",
							success: function(data){
                               //alert(data);
                               jQuery('.listbody').html(data);
						}
					});
			}
		$('#year').change(function(){
			var year_id=$(this).val();
			search();
		})
		function deletes(event){
			var r = confirm("Are you sure to delete this item !");
			if (r == true) {
			    var stu_id=jQuery(event.target).attr("rel");
				location.href="<?PHP echo site_url('student/permission/delete');?>/"+stu_id+"?<?php echo "m=$m&p=$p" ?>";
			} else {
			    txt = "You pressed Cancel!";
			}
			
		}
		function loading(){
			 $('#loading').modal('show');
              setTimeout(function() { $('#loading').modal('hide'); }, 2000);
		}
		function update(event){
				var permisid=jQuery(event.target).attr("rel");
				location.href="<?PHP echo site_url('student/permission/edit');?>/"+permisid+"?<?php echo "m=$m&p=$p" ?>";
		}
		function previews(event){
				var permisid=jQuery(event.target).attr("rel");
				window.open("<?PHP echo site_url('student/permission/preview');?>/"+permisid,'_blank');
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
	</script>