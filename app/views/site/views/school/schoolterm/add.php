
<div class="wrapper">
	<div class="clearfix" id="main_content_outer">
	    <div id="main_content">
	      <div class="row result_info">
	      	<div class="col-xs-6">
		      	<strong>Contract Information</strong>
		    </div>
		    <div class="col-xs-6" style="text-align: right">
		      		      		
		    </div>
	      </div>
	      	<!---Start form-->
			<form id="contract_register" method="POST" enctype="multipart/form-data"  action="<?php echo site_url("school/school_term/save?save=add&m=$m&p=$p")?>">
	     		<div class="row">
	     			<div class="col-sm-12 ">
	     				<div class="panel panel-default">
	     					<div class="panel-heading">
	     						<h4 class="panel-title">School Term</h4>
	     						<?php if(isset($msg))
	     								echo $msg ;
	     									 ?>
	     					</div>
	     					<div class="panel-body">
	     						<div class="row">
	     						<input type="text" class="hide" name="school_feeid" value="" id="school_feeid">
	     							<div class="col-xs-4 col-sm-offset-2">
	     								<div class="form_sep">
			     							<label>Term name </label>
			     							<input type="Text" name="fee_name" value="" id="fee_name" class="form-control" data-required="true" required data-parsley-required-message="Enter Term name">
			     							<!-- <input type="hidden" name="contr_code_hidden" id="contr_code_hidden" value=""> -->
			     						</div>
			     						<div class="form_sep">
			     							<label>Grade Level</label>
			     							<select name="grade_levelid" id="grade_levelid" class="form-control" data-required="true" required data-parsley-required-message="Please Select Level">
			     							<?php 
			     							$sql="SELECT * from sch_grade_level";
			     							$sl=$this->db->query($sql)->result();
			     							foreach ($sl as $key => $va) {			     					
			     							?>
			     							<option value="<?php echo $va->grade_levelid ?>"><?php echo $va->grade_level; ?></option>
			     							<?php }?>
			     							</select>
			     						</div>
	     								
			     						<div class="form_sep">
			     							<label >Year</label>
			     							<input type="hidden" name="yearid" value="<?php echo $this->session->userdata('year'); ?>" id="yearid" class="form-control" data-required="true" required data-parsley-required-message="Please Select Level"/>
			     							<select name="yearid" disabled id="yearid" class="form-control" data-required="true" required data-parsley-required-message="Please Select Level">
				     							<?php 
				     							$sql="SELECT * from sch_school_year";
				     							$sy=$this->db->query($sql)->result();
				     							
				     							foreach ($sy as $key => $vy) {
				     								$selected='';
				     								if($vy->yearid==$this->session->userdata('year'))
				     									$selected='selected';
				     							?>

					     							<option <?php echo $selected?> value="<?php echo $vy->yearid ?>"><?php echo $vy->sch_year; ?></option>
					     						<?php }?>
			     							</select>
			     						</div>
			     						<div class="form_sep">
			     							<label>Full Day Price</label>	
			     							<input type="text" name="fullprice" value="" onkeypress="return isNumberKey(event);" id="fullprice" class="form-control" data-required="true" required data-parsley-required-message="Enter Full Day Price">
			     							<input type="hidden" name="contr_code_hidden" id="contr_code_hidden" value="">
			     						</div>
			     						<div class="form_sep">
			     							<label>Full Time Price</label>	
			     							<input type="text" name="feeprice" value="" onkeypress="return isNumberKey(event);" id="feeprice" class="form-control" data-required="true" required data-parsley-required-message="Enter Full Time Price">
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
			     							?>
			     							<option value="<?php echo $va->pay_type_id ?>"><?php echo $va->payname; ?></option>
			     							<?php }?>
			     							</select>
			     						</div>
			     						<div class="form_sep term_level hide" >
			     							<label>Term Level</label>
			     							<select name="term_id" id="term_id" class="form-control" >
			     							<?php 
			     							$sql="SELECT * from sch_term";
			     							$sg=$this->db->query($sql)->result();
			     							foreach ($sg as $key => $vg) {			     					
			     							?>
			     							<option value="<?php echo $vg->term_id ?>"><?php echo $vg->term_name; ?></option>
			     							<?php }?>
			     							</select>
			     						</div>
			     						<div class="form_sep semester_level hide">
			     							<label >Semester Level</label>
			     							<select name="sem_id" id="sem_id" class="form-control" >
			     							<?php 
			     							$sql="SELECT * from sch_semester";
			     							$sg=$this->db->query($sql)->result();
			     							foreach ($sg as $key => $vg) {			     					
			     							?>
			     							<option value="<?php echo $vg->sem_id ?>"><?php echo $vg->sem_name; ?></option>
			     							<?php }?>
			     							</select>
			     						</div>
			     						<div class="form_sep" >
			     							<label>Start Date</label>
			     							<div class="input-group date begin_date" data-date-format="dd-mm-yyyy">
								              <input type="text" name="start_date" id="start_date" class="form-control b_date" data-type="dateIso" value="<?php echo date("d-m-Y");?>" data-parsley-id="3959"><ul class="parsley-errors-list" id="parsley-id-3959"></ul>
								              <span class="input-group-addon"><i class="icon-calendar"></i></span> 
								            </div>
			     						</div>
			     						<div class="form_sep">
			     							<label>End Date</label>
			     							<div class="input-group date end_date" data-date-format="dd-mm-yyyy">
								              <input type="text" name="end_date" id="end_date" class="form-control e_date" data-type="dateIso" value="<?php echo date("d-m-Y");?>" data-parsley-id="3959"><ul class="parsley-errors-list" id="parsley-id-3959"></ul>
								              <span class="input-group-addon"><i class="icon-calendar"></i></span> 
								            </div>
			     						</div>
			     						<div class="form_sep">
			     							<label>Part Time Price</label>	
			     							<input type="text" name="haft_day_fee" value="" onkeypress="return isNumberKey(event);" id="haft_day_fee" class="form-control" data-required="true" required data-parsley-required-message="Enter Part Time Price">
			     							<input type="hidden" name="contr_code_hidden" id="contr_code_hidden" value="">
			     						</div>
	     						</div>
	     						
	     						</div>
	     						<div class="row">
	     							<div class="col-xs-12  col-sm-offset-2">
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

		$('#contract_register').parsley();
		autoEmpId();

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
	
	$(document).ready(function () {
  	//called when key is pressed in textbox
  	$("#quantity").keypress(function (e) {
     //if the letter is not digit then display error and don't type anything
     if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
        //display error message
        $("#errmsg").html("Digits Only").show().fadeOut("slow");
               return false;
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