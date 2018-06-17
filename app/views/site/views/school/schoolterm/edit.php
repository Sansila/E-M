
<div class="wrapper">
	<div class="clearfix" id="main_content_outer">
	    <div id="main_content">
	      <div class="row result_info">
	      	<div class="col-xs-6">
		      	<strong>Contract Information</strong>
		    </div>
		    <div class="col-xs-6" style="text-align: right">
		      		      		<?php if(isset($msg))
	     								echo $msg;
	     									 ?>
		    </div>
	      </div>
	      	<!---Start form-->
			<form id="contract_register" method="POST" enctype="multipart/form-data"  action="<?php echo site_url("school/school_term/save?&save=edit")?>">
	     		<div class="row">
	     			<div class="col-sm-12">
	     				<div class="panel panel-default">
	     					<div class="panel-heading">
	     						<h4 class="panel-title">Service Detail							
	     						</h4>
	     					</div>
	     					<div class="panel-body">
	     						<div class="row">
	     						<input type="text" class="hide" name="school_feeid" value="<?php echo $ser_row['school_feeid'];?>" id="termid">
	     							<div class="col-xs-4 col-sm-offset-2">
	     								<div class="form_sep">
			     							<label>Fee name </label>
			     							<input type="Text" name="fee_name" value="<?php echo $ser_row['fee_name'];?>" id="fee_name" class="form-control" data-required="true" required data-parsley-required-message="Enter Price">
			     							<!-- <input type="hidden" name="contr_code_hidden" id="contr_code_hidden" value=""> -->
			     						</div>
	     							
			     						<div class="form_sep">
			     							<label>Grade Level</label>
			     							<select name="grade_levelid" id="grade_levelid" class="form-control" data-required="true" required data-parsley-required-message="Please Select Level">
			     							<?php 
			     							$sql="SELECT * from sch_grade_level";
			     							$sg=$this->db->query($sql)->result();

			     							foreach ($sg as $key => $vg) {	

			     							if($vg->grade_levelid == $ser_row['grade_levelid'])
			     								{
			     									$selected = "selected";
			     								}else{
			     									$selected = "";
			     								}	     		     					
			     							?>
			     							<option <?php echo $selected?> value="<?php echo $vg->grade_levelid ?>"><?php echo $vg->grade_level; ?></option>
			     							<?php }?>
			     							</select>
			     						</div>
			     						<div class="form_sep">
			     							<label>Year</label>
			     							<input type="hidden" name="yearid" value="<?php echo  $ser_row['yearid']; ?>" id="yearid" class="form-control" data-required="true" required data-parsley-required-message="Please Select Level"/>
			     							<select name="yearid" disabled id="yearid" class="form-control" data-required="true" required data-parsley-required-message="Please Select Level">
				     							<?php 
				     							$sql="SELECT * from sch_school_year";
				     							$sy=$this->db->query($sql)->result();
				     							$sys_year=$this->session->userdata('year');
				     							foreach ($sy as $key => $vy) {
					     							if($vy->yearid == $ser_row['yearid'])
					     								{
					     									$selected = "selected";
					     								}else{
					     									$selected = "";
					     								}  		     						     					
					     							?>
					     							<option <?php echo $selected?> value="<?php echo $vy->yearid ?>"><?php echo $vy->sch_year; ?></option>
					     						<?php }?>
			     							</select>
			     						</div>
			     						<div class="form_sep">
			     							<label>Full Day Price</label>	
			     							<input type="text" name="fullprice" value="<?php echo $ser_row['full_day_price'];?>" onkeypress="return isNumberKey(event);" id="fullprice" class="form-control" data-required="true" required data-parsley-required-message="Enter Full Day Price">
			     							<input type="hidden" name="contr_code_hidden" id="contr_code_hidden" value="">
			     						</div>
			     						<div class="form_sep">
			     							<label>Term Price</label>
			     							<input type="float" name="feeprice" value="<?php echo $ser_row['fee_price'];?>" onkeypress="return isNumberKey(event);" id="feeprice" class="form-control" data-required="true" required data-parsley-required-message="Enter Price">
			     							<input type="hidden" name="contr_code_hidden" id="contr_code_hidden" value="">
			     						</div>
			     					</div>
			     					<div class="col-xs-4">
			     							<div class="form_sep">
			     							<label>Pay Type</label>
			     							<select name="pay_type_id" id="pay_type_id" class="form-control" data-required="true" required data-parsley-required-message="Please Select Level">
			     							<?php 
			     							$sql="SELECT * from sch_pay_paytype";
			     							$sl=$this->db->query($sql)->result();

			     							foreach ($sl as $key => $va) {	
			     								if($va->pay_type_id == $ser_row['pay_type_id'])
			     								{
			     									$selected = "selected";
			     								}else{
			     									$selected = "";
			     								}	     					
			     							?>
			     								<option <?php echo $selected?> value="<?php echo $va->pay_type_id ?>"><?php echo $va->payname; ?></option>
			     							<?php }?>
			     							</select>
			     						</div>
			     						<?php $a='';  if($ser_row['pay_type_id'] == 3 ){ $a = ""; }else{ $a = " hide"; } ?>
			     						<div class="form_sep term_level <?php echo $a?>" >
			     							<label>Term Level</label>
			     							<select name="term_id" id="term_id" class="form-control" >
				     							<?php 
				     							$sql="SELECT * from sch_term";
				     							$st=$this->db->query($sql)->result();
				     							foreach ($st as $term) {	
				     								if($term->term_id == $ser_row['term_type_id'])
				     								{
				     									$selected3 = "selected";
				     								}else{
				     									$selected3 = "";
				     								}	 		     					
				     							?>
				     								<option <?php echo $selected3 ;?> value="<?php echo $term->term_id ?>"><?php echo $term->term_name; ?></option>
				     							<?php }?>
			     							</select>
			     						</div>
			     						<?php $b='';  if($ser_row['pay_type_id'] == 2 ){ $b = ""; }else{ $b = " hide"; } ?>
			     						<div class="form_sep semester_level <?php echo $b?>" >
			     							<label>Semester</label>
			     							<select name="sem_id" id="sem_id" class="form-control" data-required="true" required data-parsley-required-message="Please Select Level">
				     							<?php 
				     							$sql="SELECT * from sch_semester";
				     							$sl=$this->db->query($sql)->result();

				     							foreach ($sl as $key => $s) {	
				     								if($s->sem_id == $ser_row['sem_id'])
				     								{
				     									$selected1 = "selected";
				     								}else{
				     									$selected1 = "";
				     								}	     					
				     							?>
				     									<option <?php echo $selected1 ;?> value="<?php echo $s->sem_id ?>"><?php echo $s->sem_name; ?></option>
				     							<?php }?>
			     							</select>
			     						</div>
			     						<div class="form_sep">
			     							<label>Start Date</label>
			     							<div class="input-group date end_date" data-date-format="dd-mm-yyyy">
								              <input type="text" name="start_date" id="start_date" class="form-control b_date" data-type="dateIso" value="<?php echo $this->green->convertSQLDate($ser_row['term_start_date']);?>" ><ul class="parsley-errors-list" id="parsley-id-3959"></ul>
								              <span class="input-group-addon"><i class="icon-calendar"></i></span> 
								            </div>
			     						</div>
			     						<div class="form_sep">
			     							<label>End Date</label>
			     							<div class="input-group date end_date" data-date-format="dd-mm-yyyy">
								              <input type="text" name="end_date" id="end_date" class="form-control e_date" data-type="dateIso" value="<?php echo $this->green->convertSQLDate ($ser_row['term_end_date']);?>"><ul class="parsley-errors-list" id="parsley-id-3959"></ul>
								              <span class="input-group-addon"><i class="icon-calendar"></i></span> 
								            </div>
			     						</div>
			     						<div class="form_sep">
			     							<label>Part Time Price</label>	
			     							<input type="text" name="haft_day_fee" value="<?php echo $ser_row['haft_day_fee'];?>" onkeypress="return isNumberKey(event);" id="haft_day_fee" class="form-control" data-required="true" required data-parsley-required-message="Enter Price">
			     							<input type="hidden" name="contr_code_hidden" id="contr_code_hidden" value="">
			     						</div>
			     					</div>
	     						</div>			     			
	     						</div>
	     						<div class="row">
	     							<div class="col-xs-12 col-sm-offset-2">
	     								<button class="btn btn-success">Save</button>
	     							</div>
	     						</div>
	     					</div>
	     				</div>
	     			</div>
	     		</div>
	     	</form>
	     	<!---End form-->
	    </div>
	</div>
</div>
<!--Modal  -->
<div class="modal fade" id="myModal_IDCard" data-backdrop=false>
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"><b>Warning</b></h4>
      </div>
      <div class="modal-body">
        <b class="message-body"></b>
      </div> 
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal">OK</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div>
<script type="text/javascript">
	function isNumberKey(evt){
        var e = window.event || evt; // for trans-browser compatibility 
        var charCode = e.which || e.keyCode; 
        if ((charCode > 45 && charCode < 58) || charCode == 8){ 
            return true; 
        } 
        return false;  
    }
	$(function(){
		
		$('#contract_register').parsley();
		autoEmpId();

		$('#pay_type_id').change(function(){
			var id = $(this).val();
			if(id == 3)
			{
				$('.term_level').removeClass('hide');
				$('.semester_level').addClass('hide');
			}else if(id == 2){
				$('.semester_level').removeClass('hide');
				$('.term_level').addClass('hide');
			}else{
				$('.term_level').addClass('hide');
				$('.semester_level').addClass('hide');
			}

		});
	$(".b_date,.e_date").datepicker({
	  		language: 'en',
	  		pick12HourFormat: true,
	  		format:'dd-mm-yyyy'
		});

		$("#contractid").on("change", function(){
			var contr_val = $(this).val();
			$.ajax({
				type:"post",
				url:"<?php echo $_SERVER['PHP_SELF']?>",
				data:{
					act_contract_val:1,
					contr_val:contr_val
				},
				success:function(data){
					
					if( data ==1 ){
						$(".message-body").text("Please try another, You have enter duplicate Contract ID.");
						$("#myModal_IDCard").modal('show');
						var contr_code = $("#contr_code_hidden").val();
						$("#contractid").val(contr_code).focus();
						return false;
					}
				}
			});
		});

		$("#year").on("change",function(){
			$("#con_year").val($(this).val());
			$("#year_label").val($(this).text());
		});

		$("#duration_type").on("change",function(){
			if($(this).val()=="UDC"){
				$("#end_date").val("");
			}
		});
	});
	
	
	function autoEmpId(){		
		var fillrespon="<?php echo site_url("employee/contract/autoCEmpId")?>";
    	$(".empcode").autocomplete({
				source: fillrespon,
				minLength:0,
				focus: function (event, ui) {
			        $("#empcode").val(ui.item.label);
			        return false;
			    },
			    select: function (event, ui) {
			        $("#empcode").val(ui.item.label);
			        $("#empid").val(ui.item.value);
			        $("#contractid").val(ui.item.ecode);
			        //alert($("#empid").val());
			        return false;
			    }						
			});
	}
</script>