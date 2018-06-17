
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
			<form id="contract_register" method="POST" enctype="multipart/form-data"  action="<?php echo site_url("payment/invoice/save?save=add&m=$m&p=$p")?>">
	     		<div class="row">
	     			<div class="col-sm-12 ">
	     				<div class="panel panel-default">
	     					<div class="panel-heading">
	     						<h4 class="panel-title">Service</h4>
	     					</div>
	     					<div class="panel-body">
	     						<div class="row">
	     						<input type="text" name="id" id="id" style="display: none;" />
	     						<input type="text" class="hide" name="serid" value="" id="serid">
	     							<div class="col-xs-5 col-sm-offset-2">
	     								<div class="form_sep">
			     							<label>Grade</label>
			     							<select class="form-control" name="grade" id="grade">
			     								<?php 
				     								$grade=$this->db->query("SELECT * FROM sch_grade_level")->result();
				     								foreach ($grade as $row) {
				     									echo "<option value='$row->grade_levelid'>$row->grade_level</option>";# code...
				     								}
				     							?>
			     							</select>
			     							
			     						</div>

	     								<div class="form_sep">
			     							<label>Student Name</label>
			     							<input type="text" name="student" value="" id="student" class="form-control parsley-validated" data-required="true" required data-parsley-required-message="Enter student Name or StudentID">
			     							<input type="hidden" name="student_id" value="" id="student_id" class="form-control parsley-validated" data-required="true" required data-parsley-required-message="Enter student Name or StudentID">
			     							
			     						</div>
			     						<div class="form_sep">
			     							<label>School Term</label>
			     							<select class="form-control" name="term" id="term">
			     								<?php 
				     								$grade=$this->db->query("SELECT * FROM sch_term")->result();
				     								foreach ($grade as $row) {
				     									echo "<option value='$row->term_id'>$row->term_name</option>";# code...
				     								}
				     							?>
			     							</select>
			     							
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
	$("#grade").change(function(){
		autoEmpId();
	})
	
	function autoEmpId(){		
		var grade=$("#grade").val();
		var fillrespon="<?php echo site_url("payment/invoice/autostd")?>/"+grade;
    	$("#student").autocomplete({
				source: fillrespon,
				minLength:0,
			    select: function (event, ui) {
			        $("#student_id").val(ui.item.id);
			        getstdterm();
			    }						
		});
	}
	function getstdterm(){
			var grade_id=$("#grade").val();
			$.ajax({
				type:"post",
				url:"<?php echo site_url('payment/invoice/getstdterm') ?>",
				data:{
					grade_id:grade_id
				},
				success:function(data){
					$("#term option").prop('selected',false);
					$("#term option[value='"+data+"']").prop('selected',true);
				}
			});
	}
</script>