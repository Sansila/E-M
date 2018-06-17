
<style type="text/css">
	ul,ol{
		margin-bottom: 0px !important;
	}
	table tbody tr td img{width: 20px; margin-right: 10px}
	.small tbody tr td img{width: 15px; margin-right: 10px}
	table.small th{padding:2px !important;}
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
				      		<strong>Donation Information</strong>
				      		
				      	</div>
				      	<div class="col-sm-6" style="text-align: center">
				      		<strong>
				      			<center class='error' style='color:red;'><?php if(isset($error)) echo "$error"; ?></center>
				      		</strong>	
				      	</div>
			</div> 
	    <?php
	    
	    	$m='';
			$p='';
			if(isset($_GET['m'])){
		    	$m=$_GET['m'];
		    }
		    if(isset($_GET['p'])){
		        $p=$_GET['p'];
		    }
	    	// print_r($month);
	     ?>
	       <form enctype="multipart/form-data" id='frmtreatment' action="<?php echo base_url()."index.php/student/donation/save?m=$m&p=$p"; ?>" method="POST">
			        <div class="row">
							<div class="col-sm-6">
								<div class="panel panel-default">
					          		<div class="panel-body">
					          			<div class="form_sep">
								                <input type='text' value="<?php if(isset($row->transno)) echo $row->transno; ?>" class='hide' name='transno' id='transno'/>
								                <input type='text' value="<?php if(isset($row->donateid)) echo $row->donateid; ?>" class='hide' name='donateid' id='donateid'/>
								                <input type='text' value="<?php if(isset($row->donateid)) echo 'upd'; ?>" class='hide' name='is_up' id='is_up'/>
								        </div>
					          			<div class="form_sep">
									        <label class="req" for="student_num">Date</label>
									        <div class='input-group date' id='datetimepicker'>
											    <input type='text' <?php if(isset($row->date)){ echo "value='".$this->green->convertSQLDate($row->date)."' disabled"; } ?> required  data-parsley-required-message="Enter Date"  id="date" class="form-control" name="date"/>
											    <span class="input-group-addon"><span class="glyphicon glyphicon-calendar">
												<input type='text' value="<?php if(isset($row->date)) echo $this->green->convertSQLDate($row->date); ?>" class='hide' name='d_date' id='d_date'/>
											</div>
									    </div>
									    <div class="form_sep">
						                  	<label class="req" for="student_num">Donation Type</label>
						                  	<select class='form-control' <?php if(isset($row->donate_type)) echo "disabled";  ?> name='donate_type' id='donate_type'>
						                  		<option value='AG' <?php if(isset($row->donate_type)) if($row->donate_type=='AG') echo "selected" ?>>Annual Gift</option>
						                  		<option value='SO' <?php if(isset($row->donate_type)) if($row->donate_type=='SO') echo "selected" ?>>Sponsor Order</option>
						                  	</select>
						                  	<input type='text' value="<?php if(isset($row->donate_type)) echo $row->donate_type; ?>" class='hide' name='d_type' id='d_type'/>
							            </div>
							            <div class="form_sep">
						                  	<label class="req" for="student_num">Donation For</label>
						                  	<select class='form-control' onchange='donatefor(event);' name='donate_for' id='donate_for'>
						                  		<option value=''>--------Select--------</option>
						                  		<option value='schlevel'>School Level</option>
						                  		<option value='class'>Class</option>
						                  		<option value='student'>Student</option>
						                  	</select>
							            </div>
									   
						        	</div>
						        	<div class="panel-body">
								            <div class="form_sep">
								              <button id="btnnewdis" onclick="getstdrow(event);" name="btnnewdis" type="button" class="btn btn-primary">Add</button>
								              <button id="add_disease" name="btncancel"   onclick="rollback();"type="button" class="btn btn-danger <?php if(isset($row->date)) echo "hide"?>">Rollback Data</button>
								            </div>
								    </div>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="panel panel-default">
					          		<div class="panel-body">
							            
									    <div class="form_sep" id='sch_sep'>
						                  	<label class="req"  for="student_num">School Level</label>
						                  	<select class='form-control' onchange='getclassch(event);' disabled name='schlevelid' id='schlevel_id'>
						                  		<option value=''>-------Select-------</option>
						                  		<?php
						                  			foreach ($this->db->get('sch_school_level')->result() as $l) {
						                  				echo "<option value='$l->schlevelid'>$l->sch_level</option>";
						                  			}
						                  		 ?>
						                  	</select>
							            </div>
							            <div class="form_sep" id='class_sep'>
						                  	<label class="req"  for="student_num">Class</label>
						                  	<select class='form-control' disabled name='classid' id='classid'>
						                  		<option value=''>-------Select-------</option>
						                  		<?php
						                  			foreach ($this->db->get('sch_class')->result() as $c) {
						                  				echo "<option value='$c->classid'>$c->class_name</option>";
						                  			}
						                  		 ?>
						                  	</select>
							            </div>
							            <div class="form_sep" id='std_sep'>
									        <label class="req" for="student_num">Student</label>
										    <input type='text' disabled class='form-control' name='student' id='student'/>
										    <input type='text' class='hide' name='student_id' id='student_id'/>
									    </div>
							        </div>
						        </div>
						    </div>
						    <div class="col-sm-12">
				            	<div class="panel panel-default">
				            		<div class="panel-heading">
							            <div class="panel-title" >
							            	Student Donation 
								            <label style="float:right !important; font-size:11px !important; color:red;"><?php if(isset($row->modify_date)) if($row->modify_by!='') echo "Last Modified Date: ".$this->green->convertSQLDate($row->modify_date)." By : $row->modify_by"; ?></label>	

							            </div>
						        	</div>
					          		<div class="panel-body">
					          			
						                <div class="form_sep">
						                	<div class='table-responsive'>
							                  	<table class='table table-bordered table-striped' id='tblstdmention'>
							                		<thead>
							                			<tr>
							                				<th rowspan='2' style='text-align:center; vertical-align:middle;'>
								                				<input type='checkbox' id='chall' onclick="chkall(event);"/>
								                			</th>
								                			<th rowspan='2' style='text-align:center; vertical-align:middle;'>Student Name</th>

								                			<th colspan='4' style='text-align:center; vertical-align:middle;'>Gift Information</th>
								                			<th rowspan='2' style='text-align:center; vertical-align:middle;'>Save</th>
								                			<th rowspan='2' style='text-align:center; vertical-align:middle;'>Remove</th>
								                		</tr>
								                		<tr>
								                			<th width='250'>Name</th>
								                			<th width='100'>QTY</th>
								                			<th width='100'>Unit</th>
								                			<th width='100'>Action</th>
								                		</tr>
								                		
							                		</thead>
							                		<tbody id='list_donation'>
							                				<?php
							                					if(isset($row))
							                					foreach ($this->donate->getstdgifbytran($row->transno) as $stdrow) {
							                						echo "<tr >
																			<td style='vertical-align:middle; text-align:center;'><input type='checkbox' class='chstd' rel='$stdrow->studentid' id='chk_$stdrow->studentid'/></td>
																			<td style='vertical-align:middle;'><input type='text' class='studentid hide' value='$stdrow->studentid' name='studentid[]' id='studentid'/>$stdrow->fullname</td>
																			<td colspan='4'>
																				<table class='table small'>
																					<thead>
																						<th width='250'></th>
																						<th width='100'></th>
																						<th width='100'></th>
																						<th style='text-align:right'>
																							<img rel='$stdrow->studentid' onclick='addgif(event);' src='".site_url('../assets/images/icons/add.png')."' />
																						</th>
																					</thead>
																					<tbody class='ds_$stdrow->studentid'>";
																						foreach ($this->donate->getgifbystd($stdrow->studentid,$row->transno) as $g) {
																							echo "<tr>
																									<td><input type='text' class='hide gifid' value='".$g->gifid."' name='gifid_".$stdrow->studentid."[]' id='gifid'/><span id='gifname'>".$g->gifname."</span></td>
																									<td><input type='text' class='hide' value='".$g->quantity."' name='qty_".$stdrow->studentid."[]' id='qty'/>".$g->quantity."</td>
																									<td><input type='text' class='hide' value='".$g->unit."' name='unit_".$stdrow->studentid."[]' id='unit'/>".$g->unit."</td>
																									<td class='hide'><input type='text' class='hide' value='".$g->remark."' name='remark_".$stdrow->studentid."[]' id='remark'/>".$g->remark."</td>
																									<td>
																										<img onclick='removerow(event);' rel='".$stdrow->studentid."' src='".site_url('../assets/images/icons/delete.png')."'/>
																										<img onclick='editgif(event);' rel='".$stdrow->studentid."' src='".site_url('../assets/images/icons/edit.png')."'/>
																									</td>
																								</tr>";
																						}
																				echo "</tbody>
																				</table>
																			</td>
																			<td style='text-align:center; vertical-align:middle;'>
																				<img onclick='saveinline(event);' src='".site_url('../assets/images/icons/save.png')."'/>
																			</td>

																			<td style='text-align:center; vertical-align:middle;'>
																				<img onclick='removerow(event);' src='".site_url('../assets/images/icons/delete.png')."'/>
																			</td>
																			
																		</tr>";
							                					}
							                				?>
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
		              <button id="btncancel" type="button" class="btn btn-danger">Cancel</button>
		            </div>
		          </div>
		        </div>  
		 </form>
	    </div>
	</div>
</div>
<div class="modal fade bs-example-modal-lg" id="tapgift" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="wrapper">
				<div class="clearfix" id="main_content_outer">
				    <div id="main_content">
					    <div class="result_info">
					    	<div class="col-sm-6">
					      		<strong>Add Gift</strong>
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
										               <div class="form_sep">
										                  <label class="req" for="reg_input_name">Gift Name</label>
										                  <input type='text' required data-parsley-required-message="Enter Gift Name" name='a_gift' id='a_gift' class='form-control'/>
										                  <input type='text' name='a_giftid' id='a_giftid' class='hide'/>
										                  <input type='text' id='tfield' class='hide'/>
										                  <input type='text' id='is_up' class='hide'/>
										                  <input type='text' id='is_next' class='hide'/>
										                </div>
										                <div class="form_sep">
										                  <label class="req" for="reg_input_name">Quantity</label>
										                  <input type='text' onkeypress="return isNumberKey(event);" required data-parsley-required-message="Enter Quantity" name='a_qty' id='a_qty' class='form-control'/>
										                
										                </div>
										                <div class="form_sep">
										                  <label class="req" for="reg_input_name">Unit</label>
										                  <input type='text' required data-parsley-required-message="Enter Unit" name='a_unit' id='a_unit' class='form-control'/>
										                </div>
										                <div class="form_sep">
										                  <label class="req" for="reg_input_name">Remark</label>
										                  <textarea class='form-control' name='a_remark' id='a_remark'></textarea>
										                </div>
											   </div>
											   
								            </div>
								    </div> 
								</div>
					      </form>
					</div> 
			    </div>
			</div> 
            <div class="modal-footer">
                <button type="button" onclick="$('.chstd').prop('checked',false); $('#chall').prop('checked',false); " class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" id='btnaddgift' class="btn btn-primary">Add</button>
                <button type="button" id='btnaddgiftnext' class="btn btn-success">Add Next >></button>
            </div>
        </div>                       <!-- /.modal-content -->
    </div>
<script type="text/javascript">
	$(function(){
		getstd();
		fillgift();
		$("#frmvisit").parsley();
		$("#date").datepicker({
      		language: 'en',
      		pick12HourFormat: true,
      		format:'dd-mm-yyyy'
    	});
    	$('#btnaddgift').click(function(){
			$('#frmvisit').submit();
		})
		$('#btnaddgiftnext').click(function(){
			$('#is_next').val(1);
			$('#frmvisit').submit();
		})
		$('#frmvisit').submit(function(e){
			e.preventDefault();
			if ( $(this).parsley().isValid() ) {addstdgif(e) ;  }
		})
	});
	$('#btncancel').click(function(){
		var con=confirm('Are you Sure to Cancel...!');
		if(con==true)
			location.href="<?PHP echo site_url('student/donation');?>"+"?<?php echo "m=$m&p=$p" ?>";
	})
	function chkall(event){
		if($(event.target).is(':checked')){
			$('.chstd').prop('checked',true);
		}
		else{
			$('.chstd').prop('checked',false);
		}
				
	}
	function rollback(){
		var transno=$('#transno').val();
		var con=confirm('This action will be clear all data in this form...!');
		if(con==true)
			location.href="<?PHP echo site_url('student/evaluate/rollback');?>/"+transno+"?<?php echo "m=$m&p=$p" ?>";
	}
	$('#classid').change(function(){
		getstd();
	})
	function getclassch(event){
		var schlevelid=$("#schlevel_id").val();
		getstd();
		if($('#donate_for').val()!='schlevel')
			$.ajax({
		                url:"<?php echo site_url('student/donation/getclassch') ?>",    
		                data: {'schlevelid':schlevelid},
		                type:"post",
		                success: function(data){
		              		$('#classid').html(data);
		            	}
		       });
	}
	function donatefor(event){
		var type=$(event.target).val();
		if(type=='schlevel'){
			$('#classid').attr('disabled',true);
			$('#student').attr('disabled',true);
			$("#classid option[value='']").attr('selected',true);
			$("#student_id").val('');
			$('#schlevel_id').attr('disabled',false);
		}
		if(type=='class'){
			$('#classid').attr('disabled',false);
			$('#student').attr('disabled',true);
			$("#student_id").val('');
			$('#schlevel_id').attr('disabled',false);
			getclassch();
		}
		if(type=='student'){
			$('#classid').attr('disabled',false);
			$('#student').attr('disabled',false);
			$('#schlevel_id').attr('disabled',false);
			getclassch();
		}
	}
	function addgif(event){
		$('#frmvisit')[0].reset();
		$('.visit_error').html('');
		$('#a_gift').attr('disabled',false);
		
		var studentid=$(event.target).attr('rel');
		$('#chk_'+studentid).prop('checked',true);
		$('#tfield').val(studentid);
		$('#tapgift').modal('show');
	}
	
	function editgif(event){
		$('#frmvisit')[0].reset();
		$('.visit_error').html('');
		var studentid=$(event.target).attr('rel');
		var gifg_name=$(event.target).closest('tr').find('#gifname').text();
		var gifid=$(event.target).closest('tr').find('#gifid').val();
		var qty=$(event.target).closest('tr').find('#qty').val();
		var unit=$(event.target).closest('tr').find('#unit').val();
		var remark=$(event.target).closest('tr').find('#remark').val();

		$('#a_gift').val(gifg_name);
		$('#a_gift').attr('disabled',true);
		$('#a_giftid').val(gifid);
		$('#tfield').val(studentid);
		$('#a_qty').val(qty);
		$('#a_unit').val(unit);
		$("#a_remark").val(remark);
		$("#is_up").val(1);
		$('#chk_'+studentid).prop('checked',true);
		$('#tapgift').modal('show');
		
	}
	function saveinline(event){
		var studentid=$(event.target).closest('tr').find('.studentid').val();
		var donateid=$('#donateid').val();
		var is_up=$('#is_up').val();
		var date=$('#date').val();
		var donate_type=$('#donate_type').val();
		var transno=$('#transno').val();
		
		if(donateid==''){
			$.ajax({
	                url:"<?php echo site_url('student/donation/savedonate') ?>",    
	                data: {'date':date,'donate_type':donate_type,'transno':transno,'is_up':is_up},
	                type:"post",
	                success: function(data){
	              		$('#donateid').val(data);
	              		donateid=data;
	              		$.ajax({
			                url:"<?php echo site_url('student/donation/clear') ?>",    
			                data: {'donateid':data,'studentid':studentid},
			                type:"post",
			                success: function(data){
			              		$(event.target).closest('tr').find('.gifid').each(function(){			
									var gifid=$(this).val();
									var qty=$(this).closest('tr').find('#qty').val();
									var unit=$(this).closest('tr').find('#unit').val();
									var remark=$(this).closest('tr').find('#remark').val();
									saveinlinedetail(date,donateid,studentid,transno,gifid,qty,unit,remark)
								})
							}
	       				});
	            	}
	       	});
		}else{
			$.ajax({
	                url:"<?php echo site_url('student/donation/clear') ?>",    
	                data: {'donateid':donateid,'studentid':studentid},
	                type:"post",
	                success: function(data){
	              		$(event.target).closest('tr').find('.gifid').each(function(){
							var gifid=$(this).val();
							var qty=$(this).closest('tr').find('#qty').val();
							var unit=$(this).closest('tr').find('#unit').val();
							var remark=$(this).closest('tr').find('#remark').val();
							saveinlinedetail(date,donateid,studentid,transno,gifid,qty,unit,remark);
						})
	            	}
	       	});
			
		}
	}
	
	function saveinlinedetail(date,donateid,studentid,transno,gifid,qty,unit,remark){
			$.ajax({
	                url:"<?php echo site_url('student/donation/savedonatedetail') ?>",    
	                data: {'date':date,
	                		'donateid':donateid,
	                		'transno':transno,
	                		'studentid':studentid,
	                		'gifid':gifid,
	                		'qty':qty,
	                		'unit':unit,
	                		'remark':remark},
	                type:"post",
	                success: function(data){
	            	}
	       	});
	}
	function addstdgif(e){
		//var studentid=$('#tfield').val();
		var gifid=$('#a_giftid').val();
		var is_up=$('#is_up').val();
		var is_next=$('#is_next').val();
		var is_ex='';
		if(gifid!=''){
			$('.chstd').each(function(){
				if($(this).is(':checked')){
					var studentid=$(this).attr('rel');
					var exis=false;
					$(".ds_"+studentid+' tr').each(function(){
						var o_gifid=$(this).find('#gifid').val();
						if(o_gifid==gifid && is_up!=1){
							exis=true;
							is_ex=1;
						}
						if(o_gifid==gifid && is_up==1){
							$(this).remove();
						}
					})
					if(exis==false)
						giftrow(studentid);
				}
			});
			if(is_next==1 || is_ex==1){
				$('#frmvisit')[0].reset();
				if(is_ex==1)
					$('.visit_error').html('Some Gift is already Exist.....!');
			}
			else{
				$('#tapgift').modal('hide');
				$('.chstd').prop('checked',false);
				$('#chall').prop('checked',false);
			}
		}else{
			$('.visit_error').html('Please Choose Gift To continue...!');
		}
	}
	function giftrow(studentid){
		var gifg_name=$('#a_gift').val();
		var gifid=$('#a_giftid').val();
		var qty=$('#a_qty').val();
		var unit=$('#a_unit').val();
		var remark=$('#a_remark').val();
		$('.ds_'+studentid).append("<tr>"+
										"<td><input type='text' class='hide gifid' value='"+gifid+"' name='gifid_"+studentid+"[]' id='gifid'/><span id='gifname'>"+gifg_name+"</span></td>"+
										"<td><input type='text' class='hide' value='"+qty+"' name='qty_"+studentid+"[]' id='qty'/>"+qty+"</td>"+
										"<td><input type='text' class='hide' value='"+unit+"' name='unit_"+studentid+"[]' id='unit'/>"+unit+"</td>"+
										"<td class='hide'><input type='text' class='hide' value='"+remark+"' name='remark_"+studentid+"[]' id='remark'/>"+remark+"</td>"+
										"<td>"+
											"<img onclick='removerow(event);' rel='"+studentid+"' src='<?php echo site_url('../assets/images/icons/delete.png');?>'/>"+
											"<img onclick='editgif(event);' rel='"+studentid+"' src='<?php echo site_url('../assets/images/icons/edit.png');?>'/>"+
										"</td>"+
									"</tr>");
		//$('#tapgift').modal('hide');
	}
	function gettransno(){
		$.ajax({
	                url:"<?php echo site_url('student/donation/gettransno') ?>",    
	                data: {'test':1},
	                type:"post",
	                success: function(data){
	              		$('#transno').val(data);
	            	}
	       });
	}
	function getstdrow(){
		var arrstd={};
		var date=$('#date').val();
		var donate_type=$('#donate_type').val();
		var schlevelid=$('#schlevel_id').val();
		var classid=$('#classid').val();
		var student_id=$('#student_id').val();
		if(date!='' && (schlevelid!='' || classid!='' || student_id!='')){
					$('.error').html("");
					gettransno();
					$('.studentid').each(function(){
						var studentid=$(this).val();			
						arrstd[studentid]=studentid;
					});
						stdrow(arrstd);
					$('#date').attr('disabled',true);
					$('#d_date').val(date);
					$('#donate_type').attr('disabled',true);
					$('#d_type').val(donate_type);
		}else{
			$('.error').html("Please input all field...!");
		}
		
	}
	function stdrow(arr){
		var studentid=$('#student_id').val()
		var schlevelid=$('#schlevel_id').val()
		var classid=$('#classid').val();
		$.ajax({
	                url:"<?php echo site_url('student/donation/getstdrow') ?>",    
	                data: {'arr':arr,'studentid':studentid,'schlevelid':schlevelid,'classid':classid},
	                type:"post",
	                dataType:"json",
                    async:false,
	                success: function(data){
	              		$('#list_donation').append(data.data);
	              		$('.error').html(data.error);
	            	}
	       });
	}
	function removerow(event){
		var con=confirm('Are you Sure to remove this item..?');
		if(con==true)
			$(event.target).closest('tr').remove();
	}
	function getstd(){		
		var schlevelid=$('#schlevel_id').val();
		var classid=$('#classid').val();
		var std="<?php echo site_url("student/donation/getstd")?>?l="+schlevelid+"&c="+classid;
    	$("#student").autocomplete({
				source: std,
				minLength:0,
				select: function( events, ui ) {	
					$('#student_id').val(ui.item.id);
				}			
		});
	}
	function fillgift(){		
		var std="<?php echo site_url("student/donation/getgift")?>";
    	$("#a_gift").autocomplete({
				source: std,
				minLength:0,
				select: function( events, ui ) {	
					$('#a_giftid').val(ui.item.id);
					$('#a_unit').val(ui.item.unit);
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



