<style type="text/css">
	/*table tbody tr td img{width: 20px; margin-right: 10px}*/
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
	.datepicker {z-index: 9999;}
	
</style>
<?php
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
		      		<strong id='title'>Student List</strong>
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
				    		<a href="javascript:void(0);" id="exports" title="Export">
				    			<img id='export' src="<?php echo base_url('assets/images/icons/export.png')?>" />
				    		</a>
				    	<?php } ?>
			    	</span>
		      		<span class="top_action_button">
		      			<?php if($this->green->gAction("P")){ ?>
							<a href="javascript:void(0);" id="print" title="Print">
				    			<img src="<?php echo base_url('assets/images/icons/print.png')?>" />
				    		</a>
				    	<?php } ?>
		      		</span>	
		      		<span class="top_action_button">
		      			<?php if($this->green->gAction("P")){ $yearid=$this->session->userdata('year'); if(isset($_GET['y'])) $yearid=$_GET['y']?>
							<a href="<?php echo site_url("student/student/previewmulti/?yearid=$yearid")?>" id="print_multi" title="print_multi" target="_blank">
				    			<img src="<?php echo base_url('assets/images/icons/preview.png')?>" />
				    		</a>
				    	<?php } ?>
		      		</span>		    	
			    	<span class="top_action_button">
			    		<?php if($this->green->gAction("C")){ ?>
				    		<a href="<?php echo site_url("student/student/add?m=$m&p=$p")?>" >
				    			<img src="<?php echo base_url('assets/images/icons/add.png')?>" />
				    		</a>
				    	<?php } ?>
			    	</span>	      		
		      	</div> 			      
		  </div>
		  <div class="table-responsive hide"  id="tab_print">
		  		<table class="table" id='exptbl' border='0'>

		  		</table>
		  </div>
	      <div class="row">
	      	<div class="col-sm-12">
	      		<div class="panel panel-default">
	      			<div class="panel-body">
		           		<div class="table-responsive">
		           			<?php 
		           			$thr="";	
		           			$tr="";	
		           			$school=$this->db->where('schoolid',$this->session->userdata('schoolid'))->get('sch_school_infor')->row();
		           			$school_name=$school->name;
		           			$school_adr=$school->address;
		           			foreach($thead as $th=>$val){
		           				if($th=='No' || $th=='Nationality' || $th=='Class')
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
								
								foreach($tdata as $row){
									if($row['familyid']!=''){
										$family_code=$this->db->query("SELECT family_code FROM sch_family WHERE familyid='".$row['familyid']."'")->row()->family_code;
									}
									else
										$family_code='';
									$p_img_path=base_url('assets/upload/No_person.jpg');
				                    if(@ file_get_contents(site_url('../assets/upload/students/'.$row['yearid'].'/thumb/'.$row['student_num'].'.png'))){
				                        $p_img_path=site_url('../assets/upload/students/'.$row['yearid'].'/thumb/'.$row['student_num'].'.png');
				                    } 
									$tr.="<tr>
										<td class='No'>".str_pad($i,2,"0",STR_PAD_LEFT)."</td>
										 <td ><img src='".$p_img_path."' style='width:60px;  height:65px;'/></td>
										 <td class='student_num'>".$row['student_num']."</td>
										 <td class='last_name'>".$row['last_name']." ".$row['first_name']."</td>
										 <td class='last_name_kh'>".$row['last_name_kh']." ".$row['first_name_kh']."</td>
										 <td class='dateofbirth'>".$row['dob']."</td>
										 <td class='class_name'>".$row['class_name']."</td>
										  <td class='yearid'>".$row['sch_year']."</td>
										 <td class='yearid'>".$row['enroll_date']."</td>
										 <td class='FamilyID'><a href='".site_url("social/family/preview/$row[familyid]")."' target='_blank'>$family_code</a></td>
										<td width='170'>
											<div class='btn-group'>
							                  <button type='button' class='btn btn-default'>Action</button>
							                  <button type='button' class='btn btn-default dropdown-toggle' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
											    <span class='caret'></span></button>
											    <ul class='dropdown-menu'>
											      <li><a title='Contract' rel='".$row['studentid']."' onclick='previewhistory(event);' role='menuitem' tabindex='-1' href='#'>List View</a></li>
											      <li><a title='Contract' rel='".$row['studentid']."' yearid='".$row['yearid']."' onclick='previewstudent(event);' role='menuitem' tabindex='-1' href='#'>Student Info</a></li>
											        <li><a title='Contract' rel='".$row['studentid']."' yearid='".$row['yearid']."' onclick='viewcard(event);' role='menuitem' tabindex='-1' href='javascript:void(0);'>Student Card</a></li>
											        <li><a title='Contract' rel='".$row['studentid']."' onclick='upgrade(event);' role='menuitem' tabindex='-1' href='#'>Promote Student</a></li>
											        <li><a title='Set Time' rel='".$row['studentid']."' onclick='settime(event);' role='menuitem' tabindex='-1' href='javascript:void(0)'>Set Time</a></li>
											        <li><a title='Temporary Card' rel='".$row['studentid']."' onclick='setcard(event);' role='menuitem' tabindex='-1' href='javascript:void(0)'>Temporary Card</a></li>
											       <li><a title='Contract' rel='".$row['studentid']."' yearid='".$row['yearid']."' onclick='updateuser(event);' role='menuitem' tabindex='-1' href='#'>Update</a></li>
											      <li class='divider'></li>";
											      if($trash==1){
											     	$data.="<li><a title='Contract' rel='".$row['studentid']."' onclick='deletestudent(event);' role='menuitem' tabindex='-1' href='#'>Delete</a></li>";
											      }else{
											      	$data.="<li><a title='Contract' rel='".$row['studentid']."' onclick='deletestudenttrash(event);' role='menuitem' tabindex='-1' href='#'>Delete From Trash</a></li>";
											      	$data.="<li><a title='Contract' rel='".$row['studentid']."' onclick='untrush(event);' role='menuitem' tabindex='-1' href='#'>Untrush</a></li>";
											   		}
											    $data.="</ul>
										  	</div>
										</td>

										 </tr> ";										 
									$i++;	 
								}
							}
													
		           			?>

		           			<table class="table table-striped" border='0'>
		           				<thead ><?php echo $thr ?></thead>
		           				<thead class='remove_tag'>
		           				<form class="frmsearch">
		           					<td  >
		           						<input type='text' id='page' class='hide' value="<?PHP if(isset($_GET['per_page'])) echo $_GET['per_page'] ?>" />
		           						<input type='text' value='asc' name='sort' id='sort' style='width:30px; display:none'/>
		           						
									</td>
									<td></td>
		           					<td class='col-xs-1'><input type='text' value="<?php if(isset($_GET['s_id'])) echo $_GET['s_id']; ?>"  class='form-control input-sm' name='s_student_id' id='s_student_id'/></td>
							 		<td class='col-xs-2' width="120"><input type='text' value="<?php if(isset($_GET['fn'])) echo $_GET['fn']; ?>"  class='form-control input-sm' name='s_full_name' id='s_full_name'/></td>
							 		<td class='col-xs-2'><input type='text' value="<?php if(isset($_GET['fnk'])) echo $_GET['fnk']; ?>" class='form-control input-sm' name='s_full_name_kh' id='s_full_name_kh'/></td>
							 		<td class='col-xs-1'>
							 			<!-- <input type='text' value='' name='sortquery' id='sortquery' style='width:80px; display:none'/>
							 			<select class='form-control input-sm parsley-validated' onchange='search(event);' name='s_level' id='s_level' title='Search Level'>
                   						 <option value="">Level</option>
					                    <?php
					                    	foreach ($this->db->get('sch_grade_level')->result() as $level) {?>
					                    		<option value="<?php echo $level->grade_levelid ;?>" <?php if(isset($_GET['le'])){ if($level->grade_levelid==$_GET['le']) echo 'selected'; }?> ><?php echo $level->grade_level;?></option>
					                    	<?php }
					                    ?>
				                 		</select> -->
							 		</td>
							 		<td class='col-xs-1'>
							 			<select class='form-control input-sm parsley-validated'  name='s_classid' id='s_classid'>
                   						 <option value="">Class</option>
					                    <?php
					                    	foreach ($this->std->getclass()->result() as $class) {?>
					                    		<option value="<?php echo $class->classid ;?>" <?php if(isset($_GET['class'])){ if($class->classid==$_GET['class']) echo 'selected'; }?> ><?php echo $class->class_name;?></option>
					                    	<?php }
					                    ?>
				                 		</select>
				              		</td>
				              		<td class='col-xs-1'>
							 			<select class='form-control input-sm parsley-validated'  name='s_trash' id='s_trash'>
                   						 <option value="1" <?php if(isset($_GET['tr']) && $_GET['tr']==1) echo 'selected'; ?>>Untrash</option>
                   						 <option value="0" <?php if(isset($_GET['tr']) && $_GET['tr']==0) echo 'selected'; ?>>Trashed</option>
					                    
				                 		</select>
				              		</td>
							 		<td ><input type="submit" value="Filter" class="btn btn-primary btn-sm"></td>
		           				</form>
		           					
		           				</thead>
		           				<tbody class='listbody'>
		           					<?php echo $tr ?>
		           					<tr class='remove_tag'>
										<td colspan='12' id='pgt'>
											<div style='margin-top:20px; width:11%; float:left;'>
											Display : <select id="sort_num"  onchange='search(event);' style='padding:5px; margin-right:0px;'>
															<?php
															$num=150;
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
<div class="modal fade bd-example-modal-sm" tabindex="-1" id='test' role="dialog" aria-labelledby="mySmallModalLabel1" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    	<div class="modal-content">
      		<div class="wrapper">
				<div class="clearfix" id="main_content_outer">
				    <div id="main_content">
					    <div class="result_info">
					    	<div class="col-sm-6">
					      		<strong>Student Study Times</strong>
					      	</div>
					      	<div class="col-sm-6" style="text-align: center">
					      		<strong>
					      			<center class='visit_error' style='color:red;'></center>
					      		</strong>	
					      	</div>
					    </div>
					      
				        <div class="row">
							<div class="col-sm-10 col-sm-offset-1">
									<form enctype="multipart/form-data" method="POST" action="<?php echo site_url('student/student/settime') ?>">
										<div class="form_grode">
											<input type="text" name="stid" class="stid" style="display: none;">
										</div>
						            	<div class="form_group">
						            	
						            	
						                  	<label class="req" for="classid">Study Type</label>
						                  	<select data-required="true" required data-parsley-required-message="Select Class" minlength='1' class="form-control parsley-validated" name="study_type" id="study_type">
						                   
						                    	<option value="">Select Class</option>
						                    	<option value="switch">Switch Time</option>
						                    	<option value="fix">Fix Time</option>
						                   
						                  	</select>
						                  	<input type="hidden" name="student_id" id="student_id">
						                </div>
						                <div class="form_group">
						                  	<label class="req" for="classid">Start Time</label>
						                  	<select data-required="true" required data-parsley-required-message="Select Class Type" minlength='1' class="form-control parsley-validated" name="start_time" id="start_time">
						                   
						                    	<option value="">Select Class</option>
						                    	<option value="morning">Morning</option>
						                    	<option value="afternoon">Afternoon</option>
						                    	<option value="both">Both</option>
						                   
						                  	</select>
						        
						                </div>
						                <div class="form_group month_start hide">
						                  <label class="req" for="classid">Start Month</label>
						                  <select data-required="true" required data-parsley-required-message="Select Class Type" minlength='1' class="form-control parsley-validated" name="start_month" id="start_month">
						                   
						                    <option value="">Select Class</option>
						                    <?php 
							                	$months = array(
													    '1'=>'January',
													    '2'=>'February',
													    '3'=>'March',
													    '4'=>'April',
													    '5'=>'May',
													    '6'=>'June',
													    '7'=>'July ',
													    '8'=>'August',
													    '9'=>'September',
													    '10'=>'October',
													    '11'=>'November',
													    '12'=>'December',
													);
							                	foreach ($months as $key => $value) {
							                		echo '<option value="'.$key.'">'.$value.'</option>';# code...
							                	}
							                ?>
						                   
						                  </select>
						        
						                </div>
						               
						                 <div class="modal-footer">
								                
									            <div class='col-sm-4 pull-right'>
									            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
									            <button type="Submit" class="btn btn-primary">Save</button>
									            </div>
								        </div>        
							    	</form>
						    </div> 

						</div><br>
					      
					</div> 
			    </div>
			</div> 
    	</div>
  </div>
</div>
<div class="modal fade bs-example-modal-lg" id="upgrade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="wrapper">
				<div class="clearfix" id="main_content_outer">
				    <div id="main_content">
					    <div class="result_info">
					    	<div class="col-sm-6">
					      		<strong>Promote student</strong>
					      	</div>
					      	<div class="col-sm-6" style="text-align: center">
					      		<strong>
					      			<center class='visit_error' style='color:red;'></center>
					      		</strong>	
					      	</div>
					    </div>
					      
				        <div class="row">
							<div class="col-sm-10 col-sm-offset-1">
								<form enctype="multipart/form-data" name="" id="" method="POST" action="">
										<div class="form_grode">
											<input type="text" name="stid" class="stid" style="display: none;">
										</div>
						            	<div class="form_group">
						            	
						            	
						                  <label class="req" for="classid">Grade Lavel</label>
						                  <select data-required="true" onchange="getclass(event);" required data-parsley-required-message="Select Class" minlength='1' class="form-control parsley-validated" >
						                   
						                    <option value="">Select grade</option>
						                    <?php
						                    	foreach ($this->std->getgrade() as $class) {?>
						                    		<option value="<?php echo $class->grade_levelid ;?>" ><?php echo $class->grade_level;?></option>
						                    	<?php }
						                    ?>
						                  </select>
						                </div>

						                <div class="form_group">
							                  <label class="req" for="classid">Class</label>
							                  <select data-required="true" onchange="isvtc(event);" required data-parsley-required-message="Select Class" minlength='1' class="form-control parsley-validated" name="classid" id="classid">
							                   
							                    <option value="">Select Class</option>
							                    <?php
							                    	foreach ($this->std->getclass()->result() as $class) {?>
							                    		<option value="<?php echo $class->classid ;?>" ><?php echo $class->class_name;?></option>
							                    	<?php }
							                    ?>
							                  </select>
						                </div>

						                <div class="form_group">
						                  <label class="req" for="classid">Class Type</label>
						                  <select data-required="true" min=1 required data-parsley-required-message="Select Class Type" minlength='1' class="form-control parsley-validated" name="class_type" id="class_type">
						                   
						                    <option value="">Select type</option>
						                    <option value="3">Full Day</option>
						                    <option value="2">Full Time</option>
						                    <option value="1">Part Time</option>
						                   
						                  </select>
						        
						                </div>
						                 <div class="modal-footer">
								            	
								                <div class='col-sm-2 pull-right'>
				             						<button type="button" class="btn btn-primary" onclick="clup(event);" >Save</button>
									            </div>
									            <div class='col-sm-2 pull-right'>
				             						<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
									            </div>
								        </div>        
						    	</form>
						    </div> 

						</div><br>
					      
					</div> 
			    </div>
			</div> 
					                          <!-- /.modal-content -->
    	</div>
                                <!-- /.modal-dialog -->
	</div>
</div>

<div class="modal fade bs-example-modal-lg" id="temporarycard" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="wrapper">
				<div class="clearfix" id="main_content_outer">
				    <div id="main_content">
					    <div class="result_info">
					    	<div class="col-sm-6">
					      		<strong>Student Temporary Card</strong>
					      	</div>
					      	<div class="col-sm-6" style="text-align: center">
					      		<strong>
					      			<center class='visit_error' style='color:red;'></center>
					      		</strong>	
					      	</div>
					    </div>
					      
				        <div class="row">
							<div class="col-sm-10 col-sm-offset-1">
									<form enctype="multipart/form-data" name="" id="frm_temcard" method="POST" action="">
									
						                <div class="form_group">
							                <label class="req" for="classid">Card number</label>
							               	<input type="text" name="tem_card" onblur="checkcard(event);" class="form-control" placeholder="Temporary card" />
						        			<input type="hidden" id="stdid_tem" />
						                </div>
						                <div class="form_group">
							                <label class="req" for="classid">Expired date</label>
							               	<input type="text" name="expired_date" class="form-control" placeholder="yyyy-mm-dd" />
						        
						                </div>
						                <div class="modal-footer">
								            	<div class="col-sm-8 checkbox">
								                   
								                </div>
								                
									            <div class='col-sm-4'>
									            	<button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
									           
									                <button type="submit" class="btn btn-primary">Save</button>
									            </div>
								        </div>        
							    	</form>
						    </div> 

						</div><br>
					      
					</div> 
			    </div>
			</div> 
					                          <!-- /.modal-content -->
    	</div>
                                <!-- /.modal-dialog -->
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
										               			foreach($exp as $th=>$val){
											           					echo "<th class='no_wrap'>".$th."</th>";	
											           			}?>
										               		</thead>
										               		<tbody >
										               			<?php
										               			foreach($exp as $th=>$val){
										               				if($th!='Action')
											           					echo "<td align='center'><input type='checkbox' checked class='colch' value='$th' rel='".$val."'></td>";	
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
            	<div class="col-sm-9 checkbox">
                    <label>
                      <input type="checkbox" name='is_all' id='is_all' value='0'>Print/Export All Page
                    </label>  
                </div>
                <div class='col-sm-3'>
	                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	                <button type="button" id='btnprint' rel='P' onclick='expdata(event);' class="btn btn-primary">Print</button>
	                <button type="button" id='btnexport' rel='E' onclick='expdata(event);' class="btn btn-primary">Export</button>
	            </div>
        	</div>                       <!-- /.modal-content -->
    	</div>
                                <!-- /.modal-dialog -->
	</div>
</div>
<script type="text/javascript">
	var m="<?php echo isset($_GET['m'])?$_GET['m']:'' ?>";
	var p="<?php echo isset($_GET['p'])?$_GET['p']:'' ?>";
		selectschlevel();
		getviewpermis();
		$('#frm_temcard').on('keyup keypress', function(e) {
		  var keyCode = e.keyCode || e.which;  
		  if (keyCode === 13) { 
		  	// alert('test');
		    e.preventDefault();
		    return false;
		  }
		});
		$('.frmsearch').submit(function(e){
			e.preventDefault();
			search();
		})
		function checkcard(event){
			var card_number=$(event.target).val();
			var studentid=$("#stdid_tem").val();
			$.ajax({
                    url:"<?php echo base_url(); ?>index.php/student/student/validatecard/"+card_number+"/"+studentid,    
                    data: {},
                    type:"post",
                    dataType:'json',
                    async:false,
                    success: function(data){
                    	if(data==1){
                    		alert('This card is already register with someone.');
                    		$(event.target).val('');
                    	}
	                }
            });
		}
		$(function(){
			$("input[name='expired_date']").datepicker({
	      		language: 'en',
	      		pick12HourFormat: true,
	      		format:'yyyy-mm-dd'
	    	});
		})
		function settime(event){
			$.ajax({
					url:"<?php echo base_url(); ?>index.php/student/student/getstdtime",    
					data: {'studentid':$(event.target).attr('rel')},
					type: "POST",
					dataType:'json',
					async:false,
					success: function(data){
						$('#study_type option[value="'+data.study_type+'"]').prop('selected',true);
						$('#start_time option[value="'+data.start_time+'"]').prop('selected',true);
						$('#start_month option[value="'+data.start_month+'"]').prop('selected',true);
						if(data.study_type=='switch'){
							$('.month_start').removeClass('hide');
							$('#start_month').prop('required',true);
						}else{
							$('.month_start').addClass('hide');
							$('#start_month').prop('required',false);


						}
					}
			});
			$("#test").modal('show');
			$("#student_id").val($(event.target).attr('rel'));
		}
		function untrush(event){
			var r = confirm("Are you sure to untrush this family ?");
			if (r == true) {
			    var fam_id=jQuery(event.target).attr("rel");
				location.href="<?PHP echo site_url('student/student/untrush');?>/"+fam_id+"?m="+m+"&p="+p; 
			} else {
			    txt = "You pressed Cancel!";
			}
			
		}
		function getviewpermis(){
			var schlevelid=$('#schlevelid').val();
			if(schlevelid>0 || schlevelid!='')
				search();
		}
		function getclass(event){
			var glavelid=$(event.target).val();
			$.ajax({
                    url:"<?php echo base_url(); ?>index.php/student/student/getclass/"+glavelid,    
                    data: {},
                    type:"post",
                    dataType:'json',
                    async:false,
                    success: function(data){
                    	$('#classid').html(data);
	                }
            });
		}
		$("#study_type").change(function(){
			if($(this).val()=='switch'){
				$('.month_start').removeClass('hide');
				$('#start_month').prop('required',true);
			}else{
				$('.month_start').addClass('hide');
				$('#start_month').prop('required',false);


			}
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
		function selectschlevel(){
			var schlevelid="<?php if(isset($_GET['l'])) echo $_GET['l'] ?>";
			$("#schlevelid option[value='"+schlevelid+"']").attr('selected',true);
		}
		$('#schlevelid').change(function(){
			search();
		})	
		function prints(){
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
		}
		function exports(){
			var title="<div style='width:300px; text-align:left;'><span style='font-weight:bold; font-size:16px;'><?php echo $school_name; ?></span><br>";
			var s_adr="<?php echo $school_adr; ?></div>";
					title+=s_adr;
					title +="<h4 align='center'>"+ $("#title").text()+"</h4>";
			var year =$("#year :selected").text();
					title+="Year : "+year;
				if($('#s_classid').val()!='')
					title+="<br>Class : " + $('#s_classid :selected').text();
			var data=$('#exptbl').attr('border',1);
				data = $("#tab_print").html().replace(/<img[^>]*>/gi,"");
   			var export_data = $("<center><h3 align='center'>"+title+"</h3>"+data+"</center>").clone().find(".remove_tag").remove().end().html();
			window.open('data:application/vnd.ms-excel,' + encodeURIComponent(export_data));
			$('.table').attr('border',0);
		}
		function expdata(event){
			var year=$('#year').val();
			var studentid=jQuery('#s_student_id').val();
			var full_name=jQuery('#s_full_name').val();
			var full_name_kh=jQuery('#s_full_name_kh').val();
			var classid=jQuery('#s_classid').val();
			var level=jQuery('#s_level').val();
			var sortstd=$('#sortquery').val();
			var schlevelid=$('#schlevelid').val();
			var page=$('#page').val();
			var sort_num=$('#sort_num').val();
			var is_all=0;
			if($('#is_all').is(':checked'))
				is_all=1;
			if(sortstd=='')
				sortstd='order by studentid desc';
			var field={};
			$('.colch').each(function(){
				if($(this).is(':checked')){
					var key=$(this).attr('rel');
					var val=$(this).val();
					field[key]=val;
				}
					
			})
			$.ajax({
					url:"<?php echo base_url(); ?>index.php/student/student/getexp",    
					data: {'schlevelid':schlevelid,
							'level':level,
							'year':year,
							'sort':sortstd,
							'page':page,
							'is_all':is_all,
							'sort_num':sort_num,
							'f':field,
							'studentid':studentid,
							'full_name':full_name,
							'full_name_kh':full_name_kh,
							'classid':classid},
					type: "POST",
					dataType:'json',
					async:false,
					success: function(data){
						$('#exptbl').html(data.data);
						var s=$(event.target).attr('rel');
						if(s=='E')
							exports();
						else
							prints();
				}
			});
		}
		function search(event){
			$("body").loading();
			var roleid=<?php echo $this->session->userdata('roleid');?>;
			var m="<?php echo $m;?>";
			var p="<?php echo $p;?>";
			var year=$('#year').val();
			var studentid=jQuery('#s_student_id').val();
			var full_name=jQuery('#s_full_name').val();
			var full_name_kh=jQuery('#s_full_name_kh').val();
			var classid=jQuery('#s_classid').val();
			var level=jQuery('#s_level').val();
			var sort_num=$('#sort_num').val();
			var sortstd=$('#sortquery').val();
			var schlevelid=$('#schlevelid').val();
			var trash=$('#s_trash').val();
			if(sortstd=='')
				sortstd='order by studentid desc';
			setTimeout(function(){ 
				$.ajax({
						url:"<?php echo base_url(); ?>index.php/student/student/search",    
						data: {'schlevelid':schlevelid,
								'level':level,'roleid':roleid,
								'm':m,'p':p,'year':year,
								'sort_num':sort_num,'sort':sortstd,
								'studentid':studentid,'full_name':full_name,
								'full_name_kh':full_name_kh,
								'trash':trash,
								'classid':classid},
						type: "POST",
						dataType:'json',
						async:false,
						success: function(data){
                           //alert(data);
                           jQuery('.listbody').html(data.data);
		           			$('body').loading('stop');

						}
				});
			}, 500);
		}
		$('#year').change(function(){
			var year_id=$(this).val();
			search();
		})
		function deletestudent(event){
			var r = confirm("Are you sure to delet this item !");
			if (r == true) {
			    var stu_id=jQuery(event.target).attr("rel");
				location.href="<?PHP echo site_url('student/student/delete');?>/"+stu_id+"?<?php echo "m=$m&p=$p" ?>";
			} else {
			    txt = "You pressed Cancel!";
			}
			
		}
		function deletestudenttrash(event){
			var r = confirm("Are you sure to delet this item !");
			if (r == true) {
			    var stu_id=jQuery(event.target).attr("rel");
				location.href="<?PHP echo site_url('student/student/deletetrash');?>/"+stu_id+"?<?php echo "m=$m&p=$p" ?>";
			} else {
			    txt = "You pressed Cancel!";
			}
			
		}
		function loading(){
			 $('#loading').modal('show');
              setTimeout(function() { $('#loading').modal('hide'); }, 2000);
		}
		function updateuser(event){
				var student_id=jQuery(event.target).attr("rel");
				var classid=jQuery(event.target).attr("yearid");
				location.href="<?PHP echo site_url('student/student/edit');?>/"+student_id+'?yearid='+classid+"&<?php echo "m=$m&p=$p" ?>";
		}
		function viewcard(event){
				var student_id=jQuery(event.target).attr("rel");
				var year=jQuery(event.target).attr("yearid");
				 window.open("<?PHP echo site_url('student/student/view_card');?>/"+student_id+'?yearid='+year,'_blank');
		}
		function previewstudent(event){
				// var year=$(event.target).attr('year');
				var yearid=$(event.target).attr('yearid');
				var student_id=jQuery(event.target).attr("rel");
				window.open("<?PHP echo site_url('student/student/preview');?>/"+student_id+"?yearid="+yearid+"","_blank");
		}
		function previewhistory(event){
				var student_id=jQuery(event.target).attr("rel");
				window.open("<?PHP echo site_url('student/student/previewhistory');?>/"+student_id,"_blank");
		}
		function sort(event)
		{
			var sort=$(event.target).attr('rel');
			var ex_sort="";
			var sorttype=$('#sort').val();
			var classid=$("#s_classid").val();
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
			
			if(sort!=""){
				ex_sort=" classid ASC , ";
			}	
			//alert('sort : '+ sort);
			$('#sortquery').val('ORDER BY'+ex_sort+sort+' '+sorttype);

			search();
			//loading();
		}
		function upgrade(event){
			var student_id=jQuery(event.target).attr("rel");
			var yearid=jQuery(event.target).attr('yearid');
			$('#upgrade').modal('show');
			$('.stid').val(student_id);
			$('.yid').val(yearid);

		}

		function setcard(event){
			var studentid=$(event.target).attr('rel');
			$("#stdid_tem").val(studentid);
			$.ajax({
                    url:"<?php echo base_url(); ?>index.php/student/student/gettemcard/"+studentid,    
                    data: {},
                    type:"post",
                    dataType:'json',
                    async:false,
                    success: function(data){
                    	// alert(data.tem_card_expired);
                    	$('input[name="tem_card"]').val(data.tem_card_number);
                    	$('input[name="expired_date"]').val(data.tem_card_expired);
	                }
            });
			$('#temporarycard').modal('show');
			$('#frm_temcard').attr('action',"<?php echo site_url('student/student/settemcard') ?>/"+studentid+"?m=<?php echo $m ?>&p=<?php echo $m ?>");

		}
		function clup(event){ 
			var type=$("#class_type").val();
			var classid=$("#classid").val();
			var stid=$(".stid").val();
			
			$.ajax({
	                    url:"<?php echo base_url(); ?>index.php/student/student/upgrade",    
	                    data: {'classid':classid,'type':type,'stid':stid},
	                    type:"post",
	                    success: function(data){
	                   	$('#upgrade').modal('hide');
	                }
	            });
		}
		function isvtc(event){
		var classid=$("#classid").val();


		$.ajax({
                url:"<?php echo base_url(); ?>index.php/student/student/getschlevel",    
                data: {'classid':classid},
                type:"post",
                success: function(data){
               	if(data==4){
               		$('#promo_sep').removeClass('hide');
               		var familyid=$('#familyid').val();
               		//fillstudent(familyid);
               	}else{
               		$('#promo_sep').addClass('hide');
               		$('#class_type').html(data);
               	}
            }
        });
	}
	</script>