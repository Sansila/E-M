
<div class="wrapper">
	<div class="clearfix" id="main_content_outer">
	    <div id="main_content">
	      <div class="row result_info">
	      	<div class="col-xs-6">
		      	<strong>Borrow Book Information</strong>
		    </div>
		    <div class="col-xs-6" style="text-align: right">
		      		      		
		    </div>
	      </div>
	      	<!---Start form-->
			<form id="contract_register" method="POST" enctype="multipart/form-data"  action="<?php echo site_url("library/book_borrow/edit1")?>">
	     		<div class="row">
	     			<div class="col-sm-12 ">
	     				<div class="panel panel-default">
	     					<div class="panel-heading">
	     						<h4 class="panel-title">Book Borrow</h4>
	     					</div>
	     					<div class="panel-body">
	     						<div class="row">
	     						<input type="text" class="hide" name="bid" value="<?php if(isset($x->borrow_id)) echo $x->borrow_id ;?>" id="bid">
	     							<div class="col-xs-6" >
	     								<div class="form_sep">
			     							<label>Student Name</label>
			     							<input type="text" name="student" value="<?php if(isset($x->fullname)) echo $x->fullname ;?>" id="student" class="form-control parsley-validated" data-required="true" required data-parsley-required-message="Enter student Name or StudentID">
			     							<input type="hidden" name="student_id" value="<?php if(isset($x->studentid)) echo $x->studentid ;?>" id="student_id" class="form-control parsley-validated student_id" data-required="true" required data-parsley-required-message="Enter student Name or StudentID">
			     							
			     						</div>
	     								
	     							</div>
	     							<div class="col-xs-5">
	     							
	     							</div>
	     							
	     						</div>
	     						<hr>
	     						<div class="book_list">
		     						<div class="row list">
		     						
		     							<div class="col-sm-5">
		     								<div class="form_sep">
				     							<label for="cboschool">Book Name</label>
				     							<select name="booklist" id='booklist' class="form-control booklist"  required data-parsley-required-message="Select any subject type">
					     							<?php 
					     							$sql="SELECT * from sch_lib_book where status=1 and quantity>0";
					     							$lb=$this->db->query($sql)->result();
					     							foreach ($lb as $key => $b) {

					     							if($b->book_id == $x->book_id)
				     								{
				     									$selected = "selected";
				     								}else{
				     									$selected = "";
				     								}	     			     					
					     							?>
					     							<option <?php echo $selected?> value="<?php echo $b->book_id ;?>"><?php echo $b->name; ?></option>
					     							<?php }?>
				     							</select>
				     						</div>
		     							</div>
		     							<div class="col-sm-5">
		     								<div class="form_sep" >
				     							<label>Return Date</label>
				     							<div class="input-group date begin_date" data-date-format="dd-mm-yyyy">
									              <input type="text" name="retrundate" id="retrundate" class="form-control b_date" data-type="dateIso" value="<?php echo $this->green->convertSQLDate($x->return_date);?>" data-parsley-id="3959"><ul class="parsley-errors-list" id="parsley-id-3959"></ul>
									              <span class="input-group-addon"><i class="icon-calendar"></i></span> 
									            </div>
				     						</div>
		     							</div>
		     							<div class="col-sm-2">
			     							
		     							</div>
		     						</div>
		     						
		     					</div>
	     					</div>
	     					<hr>
	     					</div>
	     					<div class="panel-footer">
	     						<div class="row">
	     							<div class="col-xs-12">
	     								<input type="submit" name="submit" value="Save" class="btn btn-info"/>
	     								<!-- <button class="btn btn-success btn-save">Save</button> -->
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

	  	//called when key is pressed in textbox
	  	$("#quantity").keypress(function (e) {
	     //if the letter is not digit then display error and don't type anything
	     if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
	        //display error message
	        $("#errmsg").html("Digits Only").show().fadeOut("slow");
	               return false;
		    }
		  });


	  	//============================on click save=============================//

	  // 	$('.btn-save').click(function(){
	  		
	  // 		$('.list').each(function(){
	  // 			var bid=$("#bid").val();
	  // 			var stuid = $("#student_id").val();
	  // 			var data = $(this).closest('div div').find('.booklist').val();
	  // 			var date = $(this).closest('div div').find('.b_date').val();
	  // 			$.ajax({
			// 		type: "POST",
			// 		url:"<?php echo base_url(); ?>index.php/library/book_borrow/save",
			// 		async: false,   
			// 		data: {
			// 			'data':data,
			// 			'date':date,
			// 			'stuid':stuid,
			// 			'bid':bid
			// 		},
			// 		success: function(data){
						
			// 		}
			// 	});
	  // 		});

	  // // 		setTimeout(function() {
			// // 	location.href = "<?php echo site_url('library/book_borrow/')?>";
			// // },1000);
	  // 	});
	});
		
	
	function autoEmpId(){		
		var fillrespon="<?php echo site_url("library/book_borrow/autostd")?>";
    	$("#student").autocomplete({
				source: fillrespon,
				minLength:0,
			    select: function (event, ui) {
			        $("#student_id").val(ui.item.id);
			    }						
		});
	}
	// function addnewrow(event){
	// 	var book_list=$("#booklist").html();
	// 	$('.book_list').append('<div class="row list">'+
	// 				'<div class="col-sm-5">'+
	// 					'<div class="form_sep">'+
	// 						'<label for="cboschool">Book Name</label>'+
	// 						'<select name="book_list" class="form-control booklist"  required data-parsley-required-message="Select any subject type">'+book_list+'</select>'+
	// 					'</div>'+
	// 				'</div>'+
	// 				'<div class="col-sm-5">'+
	// 					'<div class="form_sep" >'+
	// 						'<label>Start Date</label>'+
	// 						'<div class="input-group date begin_date" data-date-format="dd-mm-yyyy">'+
	// 			              '<input type="text" name="retrundate[]" id="retrundate" class="form-control b_date" data-type="dateIso" value="<?php echo date("d-m-Y");?>" data-parsley-id="3959"><ul class="parsley-errors-list" id="parsley-id-3959"></ul>'+
	// 			              '<span class="input-group-addon"><i class="icon-calendar"></i></span> '+
	// 			            '</div>'+
	// 					'</div>'+
	// 				'</div>'+
	// 				'<div class="col-sm-2">'+
	// 					'<div class="form_sep" style="margin-top:20px;">'+
	// 						'<span class="input-group-btn">'+
	//                         	'<button class="btn btn-success btn-add" onclick="removerow(event);" type="button">'+
	//                             	'<span class="glyphicon glyphicon-minus"></span>'+
	// 	                        '</button>'+
	// 	                    '</span>'+
	//                     '</div>'+
	// 				'</div>'+
	// 			'</div>');
	// 	$(".b_date,.e_date").datepicker({
	//   		language: 'en',
	//   		pick12HourFormat: true,
	//   		format:'dd-mm-yyyy'
	// 	});
	// 	     	// alert(test);
	// }
	function removerow(event){
		$(event.target).closest('.row').remove();
	}

</script>