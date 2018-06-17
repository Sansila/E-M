
<style type="text/css">
	table tbody tr td img{width: 20px; margin-right: 10px}
	.table th td {border:1px solid gray;}

	table tr:hover{cursor: pointer;}
	a,.sort{cursor: pointer;}
	a,.sort,.panel-heading span{cursor: pointer;}
	.panel-heading span{margin-left: 10px;}
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
	.middle{
		vertical-align: middle !important;
	}
</style>
<div class="col-sm-offset-1 col-sm-10">
	<div class="clearfix" id="main_content_outer">
	    <div id="main_content">
	        <div class="row result_info">
		      	<div class="col-xs-6">
			      	<strong class="emp_title"><?php echo $title = "Student Attendence";?></strong>
			    </div>
			     <div class="col-xs-6">
			      	<strong class="emp_title"><a class="pull-right btn btn-warning" href="<?php echo site_url('login'); ?>">LOGIN</a></strong>
			    </div>
		    
	        </div>

	       <div class="row">
	       		<div class="col-sm-12">
	       			<div class="panel panel-default">
		       			<div class="panel-body">
		       				<!-- <form id="contract_register" method="POST" enctype="multipart/form-data"> -->
					     		
	     						<div class="row">
	     							<div class="col-xs-6">
	     							
			     						<div class="form_sep">
			     							<!-- <label><input type="radio" value="1" name="rdcheckin" checked> Check-in</label>
			     							<label><input type="radio" value="0" name="rdcheckin"> Check-Out</label> -->
			     							<div class="alert alert-success succ hide">
											  <strong>Success!</strong> Successfull .
											</div>
											<div class="alert alert-danger error hide">
											  <strong>Error!</strong> <span id="err_lable">Indicates a dangerous or potentially negative action.</span>
											</div>
			     						</div>
			     						<div class="col-xs-10" style="padding:0px !important;">
			     							<div class="form_sep">
				     							<!-- <label>Contract ID</label> -->
				     							<input type="text" name="student_id" onkeypress="enter(event);" autofocus placeholder='Enter Student ID' value="" id="student_id" class="form-control" data-required="true" required data-parsley-required-message="Enter Contract ID">
				     							<!-- <button class="btn btn-success">Submit</button> -->
				     						</div>
			     						</div>
			     						<div class="col-xs-2">
	     									<input type="button" class="btn btn-primary" onclick="submitatt(event);" value="Sumit">
			     						</div>
	     								
			     					</div>
			     				</div>
			     					<style type="text/css">
							#preview td{
								padding: 3px ;
							}
							th img{border:1px solid #CCCCCC; padding: 2px;}
							#preview_wr{
								margin: 10px auto !important;
							}
							.tab_head th,label.control-label{font-family:"Times New Roman", Times, serif !important; font-size: 14px;}
							td{font-family:"Khmer OS", "Khmer OS Battambang", "Khmer OS Bokor" !important; font-size: 14px;}

						</style>
					     	<!-- </form> -->
					     	<div class="listbody">
					     		
					     	</div>
					   
		       				<!-- <div class="table-responsive" id="div_export_print">
		       					<table class="table" border="0" cellspacing="0" cellpadding="0" style="border: none;font-family: font-family:"Times New Roman", Times, serif !important;"  class="listbody"> -->
		       						<!-- <br>
		       						<tbody  align="center" style="padding-top: 30px;">
		       							
		       						</tbody>
		       					</table>
		       				</div> -->
		       			</div>
		       			
	       			</div>
	       		</div>
	        </div>

	       	<form id="excel-form" action="<?php echo base_url('app/libraries/Z_EXPORT_TO_EXCEL.PHP')?>" method="POST">
	             <input type="hidden" name="num_colspan" value="6" id="num_colspan"/>
	             <input type="hidden" name="exporttile" value="<?php echo $title ?>"/>
	             <input type="hidden" name="pagesecurity" value="PgSecurity"/>
	             <textarea id="excel-data" name="data" style="display:none;"></textarea>
	        </form>

	       <!-------------End Show Table------------>
	    </div>
	</div>
</div>
<!--Check Print Export-->
<div class="modal fade" id="check_export_print" data-backdrop=false>
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"><b>Print Option</b></h4>
      </div>
      <div class="modal-body">
        <table width="100%" align="center" class="table">
        	<tr>
        		<th align="center">N&deg;</th>
				<th align="center">Student ID</th>
				<th align="center">First Name</th>
				<th align="center">Last Name</th>
				<th align="center">Class</th>
				<th align="center">Year</th>
				<th align="center">Grade</th>
				<th align="center">ID Card</th>
				<th align="center">Check In</th>
				<th align="center">Date</th>
				
        	</tr>
        	<tr>
        		<td><input type="checkbox" class="chk" rel="1" checked="checked"></td>
				<td><input type="checkbox" class="chk" rel="2" checked="checked"></td>
				<td><input type="checkbox" class="chk" rel="3" checked="checked"></td>
				<td><input type="checkbox" class="chk" rel="4" checked="checked"></td>
				<td><input type="checkbox" class="chk" rel="5" checked="checked"></td>
				<td><input type="checkbox" class="chk" rel="6" checked="checked"></td>
        	</tr>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" id="clk_print" data-dismiss="modal">Print</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div>

<!--Modal Export Print-->
<div class="modal fade" id="myModal_export_print" data-backdrop=false>
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"><b>Warning</b></h4>
      </div>
      <div class="modal-body">
        <b id="message_body"></b>
        <input type="hidden" name="get_rel" id="get_rel" value="">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal">OK</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div>
<!--Modal Delete-->
<div class="modal fade" id="myModal_del" data-backdrop=false>
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"><b>Warning</b></h4>
      </div>
      <div class="modal-body">
        <b>Are you sure to delet this record !</b>
        <input type="hidden" name="get_rel" id="get_rel" value="">
      </div>
      <div class="modal-footer">
      	<button type="button" class="btn btn-success" onclick="delete_employee(event);">Yes</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div>

<script type="text/JavaScript">

	function enter(event){
		// alert(event.keyCode);
		if (event.keyCode==13){submitatt();}
	}
	// getdata();
	// $(document).ready(function() {
	//     var pressed = false; 
	//     var chars = []; 
	//     $(window).keypress(function(e) {
	//         chars.push(String.fromCharCode(e.which));
	//         if (pressed == false) {
	//             setTimeout(function(){
	//                 if (chars.length >= 8) {
	//                     var barcode = chars.join("");
	//                     submitatt();//alert('ok');//$( "#add_item" ).focus().autocomplete( "search", barcode );
	//                 }
	//                 chars = [];
	//                 pressed = false;
	//             },200);
	//         }sch_student_attendent
	//         pressed = true;
	//     });
	// });
	//  setInterval(function(){ getdata(); }, 3000);
	function getdata(){
		var val=$("#student_id").val();
			//var chk=$("input[type='radio'][name='rdcheckin']:checked").val();
			$.ajax({
				type: "POST",
				url:"<?php echo base_url(); ?>index.php/student/attendent/getdata",    
				data: {'val':val},
				success: function(data){
		           $('.listbody').html(data.data);
		           $('#student_id').val('');
		           $('#student_id').focus();
				}
			});
		
	}


	function submitatt(event){
		var val=$("#student_id").val();
		//var chk=$("input[type='radio'][name='rdcheckin']:checked").val();
		// alert(chk);
		$('body').loading({theme: 'dark'});
		$.ajax({
				type: "POST",
				url:"<?php echo base_url(); ?>index.php/student/attendent/submitdata",    
				data: {
					'val':val,
					// 'chk':chk
				},
				success: function(data){
					if(data==1){
		           		getdata();
		           		 $('.succ').removeClass('hide'); 
		           		 $('.error').addClass('hide');
		           		$('#student_id').focus();

		           }else{
		           		// alert('Employee Not Found ! ');
		           		 $('.succ').addClass('hide'); 
		           		 $('.error').removeClass('hide');
		           		$('#err_lable').html(data);
		           		$('#student_id').focus();
		           		$('#student_id').val('');

		           }
					setTimeout(function(){ $('body').loading('stop'); }, 1000);

		           setInterval(function(){ $('.succ').addClass('hide'); $('.error').addClass('hide');  }, 5000);
		           
				}
			});

	}
	function removestd(student_acceptid){
			$.ajax({
				type: "POST",
				url:"<?php echo base_url(); ?>index.php/student/attendent/removestd",    
				data: {'student_acceptid':student_acceptid},
				success: function(data){
					getdata();
				}
			});
	}
	

</script>