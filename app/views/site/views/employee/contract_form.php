<?php 
	// if(isset($_POST['act_contract_val'])){		
	// 	$contr_val = $_POST['contr_val'];
	// 	$this->db->select('count(*)');
	// 	$this->db->from('sch_emp_contract');
	// 	$this->db->where('contractid', $contr_val);
	// 	$count = $this->db->count_all_results();
	// 	echo $count;
	// 	exit();
	// }
	// $year=$this->session->userdata('year');
	
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
		      	<strong>Contract Information</strong>
		    </div>
		    <div class="col-xs-6" style="text-align: right">
		      		      		
		    </div>
	      </div>
	      	<!---Start form-->
			<form id="contract_register" method="POST" enctype="multipart/form-data"  action="<?php echo site_url("employee/contract/save?save=add&m=$m&p=$p")?>">
	     		<div class="row">
	     			<div class="col-sm-12">
	     				<div class="panel panel-default">
	     					<div class="panel-heading">
	     						<h4 class="panel-title">Contract</h4>
	     					</div>
	     					<div class="panel-body">
	     						<div class="row">
	     							<div class="col-xs-6">
	     								<div class="form_sep">
			     							<label>Employee ID</label>
			     							<input type="text" name="empcode" id="empcode" class="empcode form-control">
			     							<input type="text" class="hide" name="empid" value="" id="empid">
			     						</div>
	     								<div class="form_sep">
			     							<label>Contract ID</label>
			     							<input type="text" name="contractid" value="<?php echo $this->contract->getmaxid();?>" id="contractid" class="form-control" data-required="true" required data-parsley-required-message="Enter Contract ID">
			     							<input type="hidden" name="contr_code_hidden" id="contr_code_hidden" value="<?php echo $this->contract->getmaxid();?>">
			     						</div>

			     						<div class="form_sep">
			     							<label>Start Date</label>
			     							<div class="input-group date begin_date" data-date-format="dd-mm-yyyy">
								              <input type="text" name="begin_date" id="begin_date" class="form-control" data-type="dateIso" value="<?php echo date("d-m-Y");?>" data-parsley-id="3959"><ul class="parsley-errors-list" id="parsley-id-3959"></ul>
								              <span class="input-group-addon"><i class="icon-calendar"></i></span> 
								            </div>
			     						</div>
			     						<div class="form_sep">
			     							<label>End Date</label>
			     							<div class="input-group date end_date" data-date-format="dd-mm-yyyy">
								              <input type="text" name="end_date" id="end_date" class="form-control" data-type="dateIso" value="<?php echo date("d-m-Y");?>" data-parsley-id="3959"><ul class="parsley-errors-list" id="parsley-id-3959"></ul>
								              <span class="input-group-addon"><i class="icon-calendar"></i></span> 
								            </div>
			     						</div>

			     						<div class="form_sep hide">
			     							<label>Year <span id="year_label"></span></label>
			     							<input type="text" name="con_year" id="con_year" class="form-control" value="<?php echo $year ?>" readonly>
			     						</div>

			     						<div class="form_sep">
			     							<label>Upload Contract</label>
			     							<input type="file" name="contract_attach">
			     						</div>
	     							</div>
	     							<div class="col-xs-6">
	     								<div class="form_sep">
			     							<label>Contract Duration</label>
			     							<select name="duration_type" id="duration_type" class="form-control">
			     								<option value="FDC">Specified Duration</option>
			     								<option value="UDC">Unspecified Duration</option>
			     							</select>
			     						</div>
	     								<div class="form_sep">
			     							<label>Contract Type</label>
			     							<select name="contract_type" id="contract_type" class="form-control">			     								
			     								<option value="Local">Local Contract</option>
			     								<option value="VSI">VSI Contract</option>
			     							</select>
			     						</div>
			     						
			     						<div class="form_sep">
			     							<label>Job Type</label>
			     							<select name="job_type" id="job_type" class="form-control">
			     								<option value="FT">Full Time</option>
			     								<option value="PT">Part Time</option>
			     							</select>
			     						</div>

			     						<div class="form_sep">
			     							<label>Description</label>
			     							<textarea class="form-control" name="decription" id="decription"></textarea>
			     						</div>
			     						<div class="form_sep">
			     							<label>Contract Status</label>
			     							<select name="cont_status" id="cont_status" class="form-control">
			     								<?php $this->green->getStatusOp(0,0,0)?>
			     							</select>
			     						</div>
	     							</div>
	     						</div>
	     						<div class="row">
	     							<div class="col-xs-12">
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
	$(function(){
		
		$('#contract_register').parsley();
		autoEmpId();

		$("#begin_date,#end_date").datepicker({
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