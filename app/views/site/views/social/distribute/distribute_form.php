<?php $m='';
$p='';
if(isset($_GET['m'])){
    $m=$_GET['m'];
}
if(isset($_GET['p'])){
    $p=$_GET['p'];
}
 ?>
<style type="text/css">
	ul,ol{
		margin-bottom: 0px !important;
	}
	a{
		cursor: pointer;
	}
	.ui-autocomplete{z-index: 9999;}
	.datepicker {z-index: 9999;}
</style>
<div class="wrapper">
	<div class="clearfix" id="main_content_outer">
	    <div id="main_content">
	      	<div class="result_info">
				      	<div class="col-sm-6">
				      		<strong>Distribute Information</strong>
				      		
				      	</div>
				      	<div class="col-sm-6" style="text-align: center">
				      		<strong>
				      			<center class='error' style='color:red;'><?php if(isset($error)) echo "$error"; ?></center>
				      		</strong>	
				      	</div>
			</div> 
	      <!-- main content -->
	       <form enctype="multipart/form-data" id='frmtreatment' action="<?PHP echo site_url("social/distribute/saveall?m=$m&p=$p") ?>" method="POST">
			        <div class="row">
						<div class="col-sm-6">
				            	<div class="panel panel-default">
				            		<div class="panel-heading">
						               <h4 class="panel-title">Distribute Details
											<label style="float:right !important; font-size:11px !important; color:red;"><?php if(isset($distrib['modified_by'])) if($distrib['modified_by']!='') echo "Last Modified Date: ".date_format(date_create($distrib['modified_date']),'d-m-Y H:i:s')." By : $distrib[modified_by]"; ?></label>	
						               		
						                </h4>
						        	</div>
					          		<div class="panel-body">
					          			<div class="form_sep">
											    <input type='text' id="distribut_id" class="form-control distribut_id hide " value="<?PHP if(isset($distrib['distribut_id'])) echo $distrib['distribut_id'] ?>" name="distribut_id"/>
									
									    </div>
					          			<div class="form_sep">
									        <label class="req" for="student_num">Date</label>
									        <div class='input-group date' id='datetimepicker'>
											    <input type='text' <?php if(isset($_GET['upd'])) echo "disabled"; ?>  required  data-parsley-required-message="Enter Date" value="<?PHP if(isset($distrib['dis_date'])) echo $this->green->formatSQLDate($distrib['dis_date']) ?>"  id="date" class="form-control"/>
											    <span class="input-group-addon"><span class="glyphicon glyphicon-calendar">
											    <input type='text' class="form-control hide " value="<?PHP if(isset($distrib['dis_date'])) echo $distrib['dis_date'] ?>" id='se_date' name="date"/>
											</div>	
									    </div>
									   
					            		<div class="form_sep">
						                  	<label class="req" for="student_num">Distribute Type</label>
						                 	<select data-required="true" <?php if(isset($_GET['upd'])) echo "disabled"; ?> class="form-control parsley-validated"  required  data-parsley-required-message="Enter Patient Type" minlength='1' value="" id="dis_type" >
							                   <?php
		           								$dt='';
		           								 if(isset($distrib['distrib_type'])) $dt=$distrib['distrib_type'];
		           							 	echo $this->green->gOption($this->distr->getDistribType(),$dt);

		           							 	?>
				                  			</select>
				                  			 <input type='text' class="form-control hide " class='se_dis_type' value="<?PHP if(isset($distrib['distrib_type'])) echo $distrib['distrib_type'] ?>"  name="dis_type"/>
							            </div>
							            <div class="panel-body">
								            <div class="form_sep">
								              <button id="btnnewdis" name="btnnewdis" onclick="getfamilyplan(event);" type="button" class="btn btn-primary <?php if(isset($_GET['upd'])) echo "hide"?>">Select</button>
								              <button id="add_disease" name="btncancel" onclick="rollback();"type="button" class="btn btn-danger <?php if(isset($_GET['upd'])) echo "hide"?>">Rollback Data</button>
								            </div>
								        </div>
						            </div>
						        </div>
						</div>
						<div class="col-sm-6">
				            <div class="panel panel-default">
				            		<div class="panel-heading">
						               <h4 class="panel-title">Address</h4>
						            </div>
					          		<div class="panel-body">
						               <div class="form_sep">
						                  <label class="req" for="reg_input_name">Distribute Address</label>
						                  <textarea data-required="true" class="form-control parsley-validated" name="dis_adr"  id="dis_adr"><?PHP if(isset($distrib['dis_adr'])) echo $distrib['dis_adr'] ?></textarea>
						                </div>
						               
							        </div>

					        </div>
					    </div>
				        
					</div>
					<div class="row">
						<div class="col-sm-12">
				            	<div class="panel panel-default">
				            		<div class="panel-heading">
						               <h4 class="panel-title">Family</h4>
						            </div>
					          		<div class="panel-body">
					            		<div class="form_sep">
						                  		<div class='table-responsive'>
								                   	<table class='table'>
								                   		<thead>
								                   			<th>No</th>
								                   			<th>FamilyID</th>
								                   			<th>Father Name</th>
								                   			<th>Mother Name</th>
								                   			<th width="80">Rice(Kg)</th>
								                   			<th width="80">Oil(L)</th>
								                   			<th width='200'>Remark</th>
								                   			<th width="60">Delete</th>
								                   			<th>
								                   				<a>
													    			<img data-toggle="modal" class='btnaddmidi' data-target="#addmedicine" src="<?php echo base_url().'assets/images/icons/add.png'?>" />
													    		</a>
								                   			</th>
								                   		</thead>
								                   		<tbody id='listfamily'>

								                   			<?php if(isset($_GET['upd'])){
								                   				$i=1;
								                   				foreach ($this->distr->getdisdetail($distrib['distribut_id']) as $row) {
								                   					echo "<tr>
																			<td>".str_pad($i,2,"0",STR_PAD_LEFT)."</td>
																			<td><input type='text' id='txtfamilyid' class='hide' name='txtfamilyid[]' value='".$row->familyid."'/>".$row->family_code."</td>
																			<td>".$row->father_name."</td>
																			<td>".$row->mother_name."</td>
																			<td class='transdate alignright'><input type='text' onkeypress='return isNumberKey(event);' onblur='updaterow(event);' onkeyup='gettotal();' name='p_rice[]' value='".$row->amt_rice."' class='form-control input-sm p_rice'/></td>
																			<td class='qty alignright'><input type='text' onkeypress='return isNumberKey(event);' onblur='updaterow(event);' onkeyup='gettotal();' name='p_oil[]' value='".$row->oil."' class='form-control input-sm p_oil'/></td>
																			<td class='uom'>".$row->remark."</td>
																			<td></td>
																			<td>
																				<a>
																			 		<img  f_id='".$row->familyid."' onclick='deletes(event);' src='".site_url('../assets/images/icons/delete.png')."'/>
																			 	</a>
																			</td>

																		</tr>";
																		$i++;
								                   				}

								                   			}?>
								                   		</tbody>
								                   		<tbody class='hide' id='total'>
								                   			<th>Total :</th>
								                   			<th><span id='f_total'></span></th>
								                   			<th></th>
								                   			<th></th>
								                   			<th><span id='r_total'></span></th>
								                   			<th><span id='o_total'></span></th>
								                   			<th></th>
								                   			<th></th>
								                   			<th></th>
								                   			<th></th>
								                   		</tbody>
								                   	</table>
								                </div>	
						                </div>
						            </div>
						        </div>
						</div>
					</div>
				<div class="row">
		          <div class="col-sm-5">
		            <div class="form_sep">
		              <button id="std_reg_submit" name="std_reg_submit" type="submit" class="btn btn-success">Save</button>
		            </div>
		          </div>
		        </div>  
		 </form>
	    </div>
	</div>
</div>
<!--++++++++++++++++++++++++++++++++++++++++++++++End Form add Member+++++++++++++++++++++++++++++++++++++++++++++++++++ -->
<div class="modal fade" id="addmedicine" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="wrapper">
				<div class="clearfix" id="main_content_outer">
				    <div id="main_content">
					    <div class="result_info">
					    	<div class="col-sm-4">
					      		<strong>Distribute</strong>
					      	</div>
					      	<div class="col-sm-8" style="text-align: center">
					      		<strong>
					      			<center class='f_error' style='color:red;'></center>
					      		</strong>	
					      	</div>
					    </div>
					      	<form enctype="multipart/form-data" name="frmmedicine" id="frmmedicine" method="POST">
						        <div class="row">
									<div class="col-sm-12">
										<div class="panel-body">
							                <div class="form_sep">
							                  <label class="req" for="student_num">Family Name</label>
							                  <input type="text" class="form-control parsley-validated" name="family_name" value="" id="family_name">
							            	  <input type='text' class='hide' name='familyid' id='familyid'/>
							            	  <input type='text' class='hide' name='family_code' id='family_code'/>
							            	  <input type='text' class='hide' name='father_name' id='father_name'/>
							            	  <input type='text' class='hide' name='mother_name' id='mother_name'/>
							            	</div>
								    		 <div class="form_sep">
								                <label class="req" for="student_num">Distribute Type</label>
								                <select name="distrib_type" class="form-control" id="distrib_type">
		           										<?php echo $this->green->gOption($this->distr->getDistribType()); ?>
				           						</select>
								            </div>
								            <div class="form_sep">
								                <label class="req" for="student_num">Amount of Rice (Kg)</label>
								                <input type="text" class="form-control parsley-validated" onkeypress='return isNumberKey(event);' required data-parsley-required-message="Enter Amount of rice" name="amt_rice" id="amt_rice">
								            </div>
								            <div class="form_sep">
								                <label class="req" for="student_num">Amount of Oil (L)</label>
								                <input type="text"  class="form-control parsley-validated" onkeypress='return isNumberKey(event);' required data-parsley-required-message="Enter Amount of oil" name="amt_oil" id="amt_oil">
								            </div>
								            <div class="form_sep">
							                  	<label class="req" for="reg_input_name">Remark</label>
							                  	<textarea data-required="true" class="form-control parsley-validated" name="remark" id="remark"></textarea>
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
                <button type="button" id='btnaddfamily' class="btn btn-primary">Add</button>
            </div>
        </div>                       <!-- /.modal-content -->
    </div>
                                <!-- /.modal-dialog -->
</div>
<script type="text/javascript">
	<?php if(isset($_GET['upd'])) echo "gettotal(); "?>
	$(function(){

		$('#frmmedicine').parsley();
		autofillfmily();
		$("#date").datepicker({
      		language: 'en',
      		pick12HourFormat: true,
      		format:'dd-mm-yyyy'
    	});
	});
	$('#btnaddfamily').click(function(){
		$('#frmmedicine').submit();
	})
	$('#frmmedicine').submit(function(e){
		e.preventDefault();	        
		if ( $(this).parsley().isValid() ) {
			if($('#familyid').val()==''){
				$('.f_error').html('Error : Family Not Selected yet...!');
			}else{
				savenewplan();
			}
		}
	})
	function savenewplan(event){
		var familyid=$('#familyid').val();
		var amt_rice=$('#amt_rice').val();
		var amt_oil=$('#amt_oil').val();
		var dis_type=$('#distrib_type').val();
		var dis_id=$('#distribut_id').val();
		var b_dis_type=$('#dis_type').val();
		var remark=$('#remark').val();
		var family_code=$('#family_code').val();	
		var father_name=$('#father_name').val();	
		var mother_name=$('#mother_name').val();

		$.ajax({
	                url:"<?php echo base_url(); ?>index.php/social/Distribute/savenewplan",    
	                data: {
	                    'familyid':familyid,
	                    'amt_rice':amt_rice,
	                    'amt_oil':amt_oil,
	                    'dis_id':dis_id,
	                    'remark':remark,
	                    'dis_type':dis_type
	                },
	                type:"post",
	                success: function(data){
	                	if(data=='false'){
	                		$('.f_error').html('This family already exist Please check again...!');
	                	}else{
	                		 if(dis_id>0 && dis_type==b_dis_type)
	              				addnewrow(familyid,amt_rice,amt_oil,remark,family_code,father_name,mother_name);
	              			$('.f_error').html('Family Add successful......!');
	              			$('#frmmedicine')[0].reset();
	                	}
	               
	            }
	       });
	}
	function addnewrow(familyid,rice,oil,remark,family_code,father_name,mother_name){
		var count=$('.p_rice').length+1;
		$('#listfamily').append("<tr>"+
									"<td>"+count+"</td>"+
									"<td><input type='text' id='txtfamilyid' class='hide' name='txtfamilyid[]' value='"+familyid+"'/>"+family_code+"</td>"+
									"<td>"+father_name+"</td>"+
									"<td>"+mother_name+"</td>"+
									"<td class='transdate alignright'><input type='text' onkeypress='return isNumberKey(event);' onblur='updaterow(event);' onkeyup='gettotal();' name='p_rice[]' value='"+rice+"' class='form-control input-sm p_rice'/></td>"+
									"<td class='qty alignright'><input type='text' onkeypress='return isNumberKey(event);' onblur='updaterow(event);' onkeyup='gettotal();' name='p_oil[]' value='"+oil+"' class='form-control input-sm p_oil'/></td>"+
									"<td class='uom'>"+remark+"</td>"+
									"<td></td>"+
									"<td>"+
										"<a>"+
									 		"<img  f_id='"+familyid+"' onclick='deletes(event);'  src='<?php echo base_url() ?>assets/images/icons/delete.png' />"+
									 	"</a>"+
									"</td>"+
								"</tr>");
		gettotal();
	}
	function getfamilyplan(event){
		$('#distribut_id').val('');
		var dis_type=$("#dis_type").val();
		var save=0;
		var date=$('#date').val();
		if(date!=''){
			$('.error').html('');
			$.ajax({
	                url:"<?php echo base_url(); ?>index.php/social/Distribute/getfamilyplan",    
	                data: {
	                    'dis_type':dis_type},
	                type:"post",
	                success: function(data){
	              		$("#listfamily").html(data);
	              		$('#se_date').val(date);
	              		$('#se_dis_type').val(dis_type);
	              		$('#dis_type').attr('disabled','disabled');
	              		$('#btnnewdis').attr('disabled','disabled');
	              		$('#date').attr('disabled','disabled');
	              		var contr=confirm("Do you want to save all data before check ?");
						if(contr==true){
							save=1;
						}else{
							 savedis();
						}
	              		gettotal(save);
	              		// savedis();
	            }
	       });
		}else{
			$('.error').html('Please Select Date');
		}
	}
	function deletes(event){
		var familyid=$(event.target).attr('f_id');
		var dis_id=$('#distribut_id').val();
		var conf=confirm('Are you sure to delete ? this will be delete from distribute and distribute plan..!')
		if(conf==true){
			//location.href="<?php echo site_url('social/distribute/deletes/') ?>"+familyid+"/"+dis_id;
			$.ajax({
	                url:"<?php echo site_url('social/distribute/deletes') ?>/"+familyid+"/"+dis_id,    
	                data: {'test':1},
	                type:"post",
	                success: function(data){
	              		if(data=='ok')
	              			$(event.target).closest('tr').remove();
	              			gettotal();
	            }
	       });
		}
	}
	//=============================auto complete===================
	function autofillfmily(){		
		var fillfmily="<?php echo site_url("social/distribute/fillfamily")?>";
    	$("#family_name").autocomplete({
				source: fillfmily,
				minLength:0,
				select: function( events, ui ) {	
					$('#familyid').val(ui.item.id);	
					$('#family_code').val(ui.item.family_code);	
					$('#father_name').val(ui.item.father_name);	
					$('#mother_name').val(ui.item.mother_name);	
					$('.f_error').html('');
				}			
			});
	}
	//==================================end auto complete============================
	function gettotal(save){
		if(save==""){
			save=0;
		}
		$('#total').removeClass('hide');
		var f_total=$('.p_rice').length;
		$('#f_total').html(f_total);
		var rice=0;
		var oil=0;
		$('.p_rice').each(function(){
			rice+=Number($(this).val());
		})
		$('.p_oil').each(function(){
			oil+=Number($(this).val());
		})
		$('#r_total').html(rice+' Kg');
		$('#o_total').html(oil+' L');
		if(save>0){
			 saves(f_total,rice,oil);
		}
		udpatetotal(rice,oil,f_total);
	}
	function udpatetotal(rice,oil,f_total){
		var dis_id=$('#distribut_id').val();
		$.ajax({
	                url:"<?php echo base_url(); ?>index.php/social/Distribute/updatetotal",    
	                data: {
	                    'rice':rice,
	                    'oil':oil,
	                    'f_total':f_total,
	                    'dis_id':dis_id},
	                type:"post",
	                success: function(data){
	            }
	       });
	}
	function saves(f_total,rice,oil){
		var date=$('#date').val();
		var adr=$('#dis_adr').val();
		var dis_type=$("#dis_type").val();
		$.ajax({
	                url:"<?php echo base_url(); ?>index.php/social/Distribute/save",    
	                data: {
	                    'f_total':f_total,
	                    'f_rice':rice,
	                    'f_oil':oil,
	                    'dis_type':dis_type,
	               		'adr':adr,
	            		'date':date},
	                type:"post",
	                success: function(data){
	                	if(data=='false')
	                		$('.error').html('Can not sace because your maximume is '+dis_type+' times');
	                	else
	              			$('.distribut_id').val(data);
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
     function savedis(){
     	// gettotal();
     	var f_total=$('#f_total').html();
     	var r_total=$('#r_total').html();
		var o_total=$('#o_total').html();
		var date=$('#date').val();
		var adr=$('#dis_adr').val();
		var dis_type=$("#dis_type").val();
     	$.ajax({
	                url:"<?php echo base_url(); ?>index.php/social/Distribute/save/1",    
	                data: {
	                    'f_total':f_total,
	                    'f_rice':r_total,
	                    'f_oil':o_total,
	                    'dis_type':dis_type,
	               		'adr':adr,
	            		'date':date},
	                type:"post",
	                success: function(data){
	                	if(data=='false'){
	                		$('.error').html('Can not save because your maximume is '+dis_type+' times');
	                	}else{
	                		$('#distribut_id').val(data);
	                	}
	              			
	            }
	       });
     }
     function updaterow(event){
     		var dis_id=$('#distribut_id').val();
	     	var rice=$(event.target).closest('tr').find('.p_rice').val();
	     	var oil=$(event.target).closest('tr').find('.p_oil').val();
	     	var familyid=$(event.target).closest('tr').find('#txtfamilyid').val();
     		saverow(familyid,rice,oil,dis_id);
     }
     function saverow(familyid,rice,oil,dis_id){
     		$.ajax({
	                url:"<?php echo base_url(); ?>index.php/social/Distribute/saverow",    
	                data: {
	                    'familyid':familyid,
	                    'rice':rice,
	                    'oil':oil,
	                    'dis_id':dis_id },
	                type:"post",
	                success: function(data){
	            }
	       });
     }
     
     function rollback(){
     	var dis_id=$('#distribut_id').val();
     	if(dis_id>0){
     		var conf=confirm('Are you sure to Rollback data ? Data will be delete from Distribute....!');
     		if(conf==true){
     			location.href="<?php echo base_url(); ?>index.php/social/Distribute/rollback/"+dis_id+"?<?php echo "m=$m&p=$p" ?>";
     		}
     		
     	}else{
     		$('.error').html('Data Can not Rollback....!');
     	}
     }
</script>
