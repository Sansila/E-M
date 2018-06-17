
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
	      	<div class="result_info col-sm-10">
				      	<div class="col-sm-6">
				      		<strong>VTC Star Information</strong>
				      		
				      	</div>
				      	<div class="col-sm-6" style="text-align: center">
				      		<strong>
				      			<center class='error' style='color:red;'><?php if(isset($error)) echo "$error"; ?></center>
				      		</strong>	
				      	</div>
			</div> 
	      <!-- main content -->
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
	       <form enctype="multipart/form-data" id='frmtreatment' action="<?php echo base_url()."index.php/student/vtcstar/save?m=$m&p=$p";?>" method="POST">
			        <div class="row">
						<div class="col-sm-5">
				            <div class="panel panel-default">
				            		<div class="panel-heading">
						               <h4 class="panel-title">VTC Star Details</h4>
						            </div>
					          		<div class="panel-body">
						               
						                <div class="form_sep">
									        <label class="req" for="student_num">From Date<span class='text-danger'> *</span></label>
									        <div class='input-group date' id='datetimepicker'>
											    <input type='text' <?php if(isset($data->from_date)) echo "disabled value='".$this->green->formatSQLDate($data->from_date)."'"; ?>  id="from_date" class="form-control" name="from_date"/>
											    <span class="input-group-addon"><span class="glyphicon glyphicon-calendar">
											    
											</div>
											<input type='text' class='form-control hide' <?php if(isset($data->from_date)) echo " value='".$this->green->formatSQLDate($data->from_date)."'"; ?> name='f_date' id='f_date'/>	
											<input type='text' class='form-control hide' <?php if(isset($data->starid)) echo " value='".$data->starid."'"; ?> name='starid' id='starid'/>	
									    </div>
									    <div class="form_sep">
									        <label class="req" for="student_num">To Date<span class='text-danger'> *</span></label>
									        <div class='input-group date' id='datetimepicker'>
											    <input type='text' <?php if(isset($data->from_date)) echo "disabled value='".$this->green->formatSQLDate($data->to_date)."'"; ?>  id="to_date" class="form-control" name="to_date"/>
											    <span class="input-group-addon"><span class="glyphicon glyphicon-calendar">
											</div>	
											<input type='text' class='form-control hide' <?php if(isset($data->from_date)) echo "value='".$this->green->formatSQLDate($data->to_date)."'"; ?>  name='e_date' id='e_date'/>
									    </div>
						            	<div class="form_sep">
									        <label class="req" for="student_num">Partner<span class='text-danger'> *</span></label>
									        <input type='text' class='form-control' name='paterner' id='partner' <?php if(isset($data->from_date)) echo "disabled value='".$data->company_name."'"; ?>/>
									        
									    </div>
							            <input type='text' class='form-control hide' <?php if(isset($data->from_date)) echo " value='".$data->partnerid."'"; ?> name='partnerid' id='partnerid'/>
					            	</div>
					            	<div class="panel-body">
								            <div class="form_sep">
								              <button id="btnnewdis" onclick="add(event);" name="btnnewdis" type="button" class="btn btn-primary">Add</button>
								              <!-- <button id="add_disease" name="btncancel"   onclick="rollback();"type="button" class="btn btn-danger <?php if(isset($row->date)) echo "hide"?>">Rollback Data</button> -->
								            </div>
								    </div>
					        </div>
					    </div>
					    <div class="col-sm-5">
				            <div class="panel panel-default">
				            		<div class="panel-heading">
						               <h4 class="panel-title">Students</h4>
						            </div>
					          		<div class="panel-body">
						               
						                <div class="form_sep" id='promo_sep'>
									        <label class="req" for="student_num">Promotion</label>
									        <select class='form-control' name='promotion' <?php if(isset($data->promot_id)) echo "disabled" ?> id='promotion' onchange='onchanges(event);'>
									        	<!-- <option value='0'>-----Select-----</option> -->
									        	<?php foreach ($this->star->getpromomte() as $p) { ?>
									        			<option value='<?PHP echo $p->promot_id ?>' <?PHP if(isset($data->promot_id)) if($data->promot_id==$p->promot_id) echo 'selected'; ?>><?PHP echo $p->proname ?></option>
									        	<?PHP } ?>
									        </select>
									        <input type='text' class='form-control hide' <?php if(isset($data->promot_id)) echo " value='".$data->promot_id."'"; ?> name='promot_id' id='promot_id'/>
									    </div>
									    <div class="form_sep">
									        <label class="req" for="student_num">Class</label>
									        <select class='form-control' name='classid' id='classid' onchange='onchanges(event);'>
									        	<option value='0'>-----Select-----</option>
									        	<?PHP
									        		if(count($this->star->getvtcclass())){
									        			foreach ($this->star->getvtcclass() as $c) { ?>
									        				<option value='<?PHP echo $c->classid ?>'><?PHP echo $c->class_name ?></option>
									        		<?php	}
									        		}
									        	 ?>
									        </select>
									    </div>
									    <div class="form_sep">
						                  	<label class="req" for="reg_input_name">Student</label>
						                   	<input type="text" class="form-control" name="student" id="student" onkeyup="$('#studentid').val('');">
						                	<input type="text" class="form-control hide" name="studentid" id="studentid">
						                </div>
					            	</div>
					        </div>
					    </div>
					    <div class="col-sm-10">
				            <div class="panel panel-default">
				            		<div class="panel-heading">
						               <h4 class="panel-title">Students List</h4>
						            </div>
									    <div class="form_sep">
						                  	
						                	<table class='table'>
						                		<thead>
						                			<th>Student Name</th>
						                			<th>Class</th>
						                			<th width='100'>Remove</th>
						                		</thead>
						                		<tbody id='liststaff'>
						                			<?php 
						                			if(isset($data))
						          						foreach ($this->star->geteditlist($data->starid) as $std) {
															echo "<tr>
																		<td>
																			<input type='text' name='student_id[]' value='$std->studentid' id='student_id' class='hide student_id'/>".$std->fullname."</td>
																		<td>
																			<input type='text' name='class_id[]' value='$std->classid' id='class_id' class='hide'/>".$std->class_name."</td>
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

<script type="text/javascript">
	 $(function(){
		autofillstd();
		autofillpartner();
		$("#a_medicine").focus(function(){
			autofillmedicine();
		});
		$("#frmtreatment").parsley();
		$("#from_date,#to_date").datepicker({
      		language: 'en',
      		pick12HourFormat: true,
      		format:'dd-mm-yyyy'
    	});
	});
	function onchanges(event){
		autofillstd();
	}
	function removerow(event){
		var conf=confirm('Are you sure to remove this items...!');
		if(conf==true)
			$(event.target).closest('tr').remove();
	}
	function autofillpartner(){	
		
		var partner="<?php echo site_url("student/vtcstar/fillpartner")?>";
    	$("#partner").autocomplete({
				source: partner,
				minLength:0,
				select: function( events, ui ) {
					$('#partnerid').val(ui.item.id);
				}			
			});
	}
	function add(){
		var stdarr={};
		var f_date=$('#from_date').val();
		var e_date=$('#to_date').val();
		var partnerid=$('#partnerid').val();
		var promot_id=$('#promotion').val();
		var classid=$('#classid').val();
		var studentid=$('#studentid').val();
		$('.student_id').each(function(){
			var studentid=$(this).val();			
			stdarr[studentid]=studentid;
		});
		if(f_date!='' && e_date!='' && partnerid!='')
			$.ajax({
		    		url:"<?php echo site_url('student/vtcstar/getstdtolist')?>",
		    		type:"post",
		    		dataType:'json',
		    		dataType:"json",
                    async:false,
		    		data:{
		    			'f_date':f_date,
		    			'e_date':e_date,
		    			'promot_id':promot_id,
		    			'classid':classid,
		    			'promot_id':promot_id,
		    			'studentid':studentid,
		    			'stdarr':stdarr,
		    			'partnerid':partnerid
		    		},
		    		success:function(data){
		    			$("#liststaff").append(data.data);
		    			$('.error').html(data.error);
		    			$("#from_date").attr('disabled',true);
		    			$("#to_date").attr('disabled',true);
		    			$("#partner").attr('disabled',true);
		    			$("#promotion").attr('disabled',true);
		    			$("#f_date").val(f_date);
		    			$("#e_date").val(e_date);
		    			$("#promot_id").val(promot_id);
		    		}
	    	})
		else
			$('.error').html("Please Input all field that required *");
	}
	function autofillstd(){	
		var promo=$('#promotion').val();
		var classid=$('#classid').val();	
		var std="<?php echo site_url("student/vtcstar/fillstd")?>/"+promo+'/'+classid;
    	$("#student").autocomplete({
				source: std,
				minLength:0,
				select: function( events, ui ) {
					$("#studentid").val(ui.item.id);
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
