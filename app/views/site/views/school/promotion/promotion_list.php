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
	.datepicker{z-index: 9999 !important;}

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
		      		<strong id='title'>Promotion List</strong>
		      	</div>
		      	<div class="col-xs-6" style="text-align: right">
		      		<span class="top_action_button">
			      			<span class='error' style='color:red;'><?php if(isset($error)) echo "$error"; ?></span>
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
				    		<a>
				    			<img onclick='addnew();' src="<?php echo base_url('assets/images/icons/add.png')?>" />
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
									
									$tr.="<tr>
											<td class='no'>".str_pad($i,2,"0",STR_PAD_LEFT)."</td>
											<td class='proname'>".$row->proname."</td>
											<td class='proname_kh'>".$row->proname_kh."</td>
											<td class='sch_level'>".$row->sch_level."</td>
											<td class='start_date'>".$this->green->convertSQLDate($row->start_date)."</td>
											<td class='end_date'>".$this->green->convertSQLDate($row->end_date)."</td>
											<td class='remove_tag'>";
											if($this->green->gAction("D")){
												 $tr.="<a>
												 		<img rel=".$row->promot_id." onclick='deletes(event);' src='".site_url('../assets/images/icons/delete.png')."'/>
												 	</a>";
											}
											if($this->green->gAction("U")){
												 $tr.="<a>
												 		<img  rel=".$row->promot_id." onclick='edit(event);' src='".site_url('../assets/images/icons/edit.png')."'/>
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
									<td ></td>
							 		<td>
							 			<input type='text' value="<?php if(isset($_GET['des'])) echo $_GET['des']; ?>" onkeyup='search(event);' class='form-control input-sm' id='s_promotion'/>
							 		</td>
		           					<td></td>
		           					<td>
		           						<select class='form-control input-sm' name='s_schlevelid' onchange="search(event);" id='s_schlevelid'>
					                   		<option value=''>-----Select School Level-----</option>
					                   		<?php
					                   			foreach ($this->db->get('sch_school_level')->result() as $level) {
					                   				echo "<option value='".$level->schlevelid."'>".$level->sch_level."</option>";
					                   			}
					                   		 ?>
					                   </select>
		           					</td>
							 		<td ></td>
		           				</thead>
		           				<tbody class='listbody'>
		           					<?php echo $tr ?>
		           					<tr class='remove_tag'>
										<td colspan='12' id='pgt'>
											<div style='margin-top:20px; width:11%; float:left;'>
											Display : <select id="sort_num"  onchange='search(event);' style='padding:5px; margin-right:0px;'>
															<?php
															$num=10;
															for($i=0;$i<20;$i++){?>
																<option value="<?php echo $num ;?>" <?php if(isset($_GET['s_num'])){ if($num==$_GET['s_num']) echo 'selected'; }?> ><?php echo $num;?></option>
																<?php $num+=10;
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
<!-- ++++++++++++++++++++++++++++++++++++++++++++add form+++++++++++++++++++++++++++++++++++++++ -->

<div class="modal fade bs-example-modal-lg" id="adddisease" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="wrapper">
				<div class="clearfix" id="main_content_outer">
				    <div id="main_content">
					    <div class="result_info">
					    	<div class="col-sm-6">
					      		<strong>Promotion</strong>
					      	</div>
					      	<div class="col-sm-6" style="text-align: center">
					      		<strong>
					      			<center class='visit_error' style='color:red;'></center>
					      		</strong>	
					      	</div>
					    </div>
					      	<form enctype="multipart/form-data" action="<?php echo base_url()."index.php/school/promotion/save?m=$m&p=$p"; ?>"  id="frmdisease" method="POST">
						        <div class="row">
									<div class="col-sm-6">
						            	<div class="panel-body">
						            		<div class="form_sep" id="illness_sep">
								                <label class="req" for="student_num">Promotion</label>
								                <input type="text" class='hide' name="promot_id" id="promot_id" />
								                <input type="text" name="promotion" id="promotion"  class="form-control" />	
								               
								            </div>
								            <div class="form_sep" id="emp_sep">
							                   <label class="req" for="student_num">Promotion Kh</label>
							                   <input type="text" name="promotion_kh" id="promotion_kh"  class="form-control" />	
							                </div>
							                <div class="form_sep" id="emp_sep">
							                   <label class="req" for="student_num">School Level</label>
							                   <select class='form-control' name='schlevelid' id='schlevelid'>
							                   		<option value=''>-----Select School Level-----</option>
							                   		<?php
							                   			foreach ($this->db->get('sch_school_level')->result() as $level) {
							                   				echo "<option value='".$level->schlevelid."'>".$level->sch_level."</option>";
							                   			}
							                   		 ?>
							                   </select>
							                </div>
							                  <div class="form_sep" id="emp_sep">
							                   <label class="req" for="student_num">Is Closed</label>
							                   <input type='checkbox' name='is_close' id='is_close'/>	
							                </div>
							            </div>
							       </div>
						           <div class="col-sm-6">
					            		<div class="panel-body">
						            		<div class="form_sep" id="illness_sep">
								                <label class="req" for="student_num">Start Date</label>
								                <div class='input-group new_ex' id='datetimepicker'>
												    <input  type='text' class='form-control sdate' name='start_date' id='start_date'/>
												    <span class='input-group-addon'><span class='glyphicon glyphicon-calendar'>
												</div>								            </div>
								            <div class="form_sep" id="emp_sep">
							                   <label class="req" for="student_num">End Date</label>
							                	<div class='input-group new_ex' id='datetimepicker'>
												    <input  type='text' class='form-control edate' name='end_date' id='end_date'/>
												    <span class='input-group-addon'><span class='glyphicon glyphicon-calendar'>
												</div>   
							                </div>
							                <div class="form_sep" id="emp_sep">
							                   <label class="req" for="student_num">Description</label>
							                   <textarea class='form-control' name='desc' id='desc'></textarea>	
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
                <button type="button" id='btnsavedisease' class="btn btn-primary">Save</button>
            </div>
        </div>                       <!-- /.modal-content -->
    </div>
</div>
<!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
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
</div>
<script type="text/javascript">
	
	function edit(event){
		$('#adddisease').modal('show');
		$('#frmdisease')[0].reset();
		$('.visit_error').html('');
		var promot_id=$(event.target).attr('rel');
		$.ajax({
                url:"<?php echo base_url(); ?>index.php/school/promotion/edit",    
                data: {'promot_id':promot_id},
                type:"post",
                dataType:"json",
                async:false,
                success: function(data){
                	$('#promotion').val(data.proname);
                	$('#promotion_kh').val(data.proname_kh);
                	$("#schlevelid option[value='"+data.schlevelid+"']").prop('selected',true);
                	$("#promot_id").val(data.promot_id);
                	$('#start_date').val(convertSQLDate(data.start_date));
                	$("#end_date").val(convertSQLDate(data.end_date));
                	$("#desc").val(data.description);
                	if(data.is_closed==1)
                		$('#is_close').attr('checked',true);
                	if(data.modified_by!='' && data.modified_by!=null)
                		$(".visit_error").html("Last Modified Date : "+data.modified_date+" By : "+data.modified_by);

            }
        });
	}
	function deletes(event){
			var r = confirm("Are you sure to delete this iteme !");
			if (r == true) {
			    var diseaseid=$(event.target).attr('rel');
				location.href="<?PHP echo site_url('school/promotion/delete');?>/"+diseaseid+"?<?php echo "m=$m&p=$p" ?>";
			} 
	}
	function addnew(){
		$('#frmdisease')[0].reset();
		$('.visit_error').html('');
		$('#adddisease').modal('show');
	}
	$('#btnsavedisease').click(function(){
		var promotion=$('#promotion').val();
		var promot_id=$('#promot_id').val();
		$.ajax({
				url:"<?php echo base_url(); ?>index.php/school/promotion/validate",    
				data: {'promotion':promotion,
						'promot_id':promot_id},
				type: "POST",
				success: function(data){
                  if(data>0)
                  	$('.visit_error').html('Promotion is already exist...!');
                  else
                  	$('#frmdisease').submit();
			}
		});
		
	})
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
			$(".sdate,.edate").datepicker({
	      		language: 'en',
	      		pick12HourFormat: true,
	      		format:'dd-mm-yyyy'
	    	});
			$('#frmdisease').parsley();	
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
	
	function search(event){
		var roleid=<?php echo $this->session->userdata('roleid');?>;
		var m=<?php echo $m;?>;
		var p=<?php echo $p;?>;
		var promotion=$("#s_promotion").val();
		var schlevelid=$("#s_schlevelid").val();
		var s_num=$('#sort_num').val();
		$.ajax({
				url:"<?php echo base_url(); ?>index.php/school/promotion/search",    
				data: {'promotion':promotion,
						'schlevelid':schlevelid,
						'roleid':roleid,
						'm':m,
						'p':p,
						's_num':s_num
					},
				type: "POST",
				success: function(data){
                   //alert(data);
                   $('.listbody').html(data);
			}
		});
	}

	function isNumberKey(evt){
        var e = window.event || evt; // for trans-browser compatibility 
        var charCode = e.which || e.keyCode; 
        if ((charCode > 45 && charCode < 58) || charCode == 8){ 
            return true; 
        } 
        return false;  
    }	
</script>
