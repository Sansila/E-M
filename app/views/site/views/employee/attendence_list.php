
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
</style>
<div class="wrapper">
	<div class="clearfix" id="main_content_outer">
	    <div id="main_content">
	        <div class="row result_info">
		      	<div class="col-xs-6">
			      	<strong class="emp_title"><?php echo $title = "Employee Attendence";?></strong>
			    </div>
		    
	        </div>

	       <div class="row">
	       		<div class="col-sm-12">
	       			<div class="panel panel-default">
		       			<div class="panel-body">
		       				
					     	<!-- </form> -->
					     	<div class="table-responsive">
					     		<table class="table" style="margin-bottom: 0px !important">
					     			<tr>
		       							<form class="frmsearch">
		       								<td class="pos_2 sort">
		       								<label>Status</label>
		       									<select onchange="$('.frmsearch').submit();" class="form-control input-sm" id="status">
			       									<option value='0'>Absent</option>
			       									<option value='1'>Present</option>
			       									
			       								</select>
			       							</td>
		       								
		       								<th class="pos_2 sort" rel="empcode">
		       									<label>Employee Code</label>
		       									<input type="text" id="empcode" placeholder="Employee Code" onkeyup="" class="form-control input-sm">
		       								</th>
		       								<th class="pos_3 sort"  rel="first_name">
		       									<label>Employee name</label>
		       									<input type="text" placeholder="Employee name" id="fullname" onkeyup="" class="form-control input-sm">
		       								</th>
		       								<th class="pos_4 sort"  rel="first_name_kh">
		       									<label>Position</label>
			       								<select class="form-control input-sm" onchange="" id="position">
			       									<option value=''>Select Position</option>
			       									<?php 
			       										foreach ($position as $po) {
			       											echo "<option value='$po->posid'>$po->position</option>";# code...
			       										}
			       									 ?>
			       										
			       								</select>
		       								</th>

		       								<?php 
		       										$option ="<option value=''>Select Department</option>";
													foreach( $this->db->get('sch_emp_department')->result() as $dep ){
														$option .='<option value="'.$dep->dep_id.'">'.$dep->department.'</option>';
													}
		       								?>
		       								<th class="pos_4 sort"  rel="first_name_kh">
		       									<label>Shift Time</label>

			       								<select class="form-control input-sm" onchange="" id="shift_time">
			       									<option value=''>Select Shift Time</option>
			       									<option value='Morning'>Morning</option>
			       									<option value='Afternoon'>Afternoon</option>
			       									<option value='Evening'>Evening</option>
			       									
			       								</select>
		       								</th>
		       								<th class="pos_4 sort"  rel="first_name_kh">
		       									<label>Department</label>

			       								<select class="form-control input-sm" onchange="" id="department">
			       									<?php echo $option ?>
			       									
			       								</select>
		       								</th>

		       								<th class="pos_5 sort" rel="dob">
		       									<label>Date</label>

		       									<input type="text" onchange="" placeholder="Date" id="date" class="form-control input-sm" value="<?php echo date('Y-m-d') ?>">
		       								</th>
		       								<th class="pos_4 sort"  rel="first_name_kh">
		       									<p style="height: 11px;"></p>
			       								<input type="submit" class="btn btn-info btn-sm" onclick="" value="Search">
			       								
		       								</th>
		       							</form>
	       							</tr>
					     		</table>
					     	</div>
					     	<hr>
		       				<div class="table-responsive" id="div_export_print">
		       					<table class="table" border="0" cellspacing="0" cellpadding="0">
		       						<thead>
		       							<tr>
		       								<!-- <th class="pos_1 sort">N&deg;</th> -->
		       								<th class="pos_2 sort" rel="empcode">Images</th>
		       								<th class="pos_2 sort" rel="empcode">EmployeeID</th>
		       								
		       								<th class="pos_3 sort"  rel="first_name">Full Name</th>
		       								<th class="pos_4 sort"  rel="first_name_kh">Position</th>
		       								<th class="pos_5 sort" rel="dob">Check-in</th>
		       								<th class="pos_6 sort"  rel="pos_id">Check-out</th>
		       								<th class="pos_6 sort"  rel="pos_id">Phone Number</th>
		       								<!-- <th colspan="3" class="remove_tag">Action</th> -->
		       							</tr>
		       							
		       						</thead>
		       						<tbody class="listbody">
		       							
		       						</tbody>
		       					</table>
		       				</div>
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
				<th align="center">EmployeeID</th>
				<th align="center">Full Name</th>
				<th align="center">Full Name(Kh)</th>
				<th align="center">Date of Birth</th>
				<th align="center">Position</th>
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
	$(document).ready(function(){
		$("body").loading();
		$('.frmsearch').submit(function(e){
			e.preventDefault();
			$("body").loading();
			setTimeout(function(){ 	
				getdata();
			}, 500);
		})
		$("#date").datepicker({
	  		language: 'en',
	  		pick12HourFormat: true,
	  		format:'yyyy-mm-dd'
		});
	 // getlistdata();
	
	});
	function enter(event){
		// alert(event.keyCode);
		if (event.keyCode==13){submitatt();}
	}
	getdata();
	$(document).ready(function() {
	    var pressed = false; 
	    var chars = []; 
	    $(window).keypress(function(e) {
	        chars.push(String.fromCharCode(e.which));
	        if (pressed == false) {
	            setTimeout(function(){
	                if (chars.length >= 8) {
	                    var barcode = chars.join("");
	                    getdata();//alert('ok');//$( "#add_item" ).focus().autocomplete( "search", barcode );
	                }
	                chars = [];
	                pressed = false;
	            },200);
	        }
	        pressed = true;
	    });
	});
	function getdata(){
			var status=$('#status').val();
			var date=$('#date').val();
			var position=$('#position').val();
			var fullname=$('#fullname').val();
			var empcode=$('#empcode').val();
			var shift_time=$('#shift_time').val();
			var department=$('#department').val();
			$.ajax({
				type: "POST",
				url:"<?php echo base_url(); ?>index.php/employee/attendence/getlistdata",    
				data: {'status':status,'date':date,'position':position,'fullname':fullname,'empcode':empcode,'shift_time':shift_time,'department':department},
				success: function(data){
		           $('.listbody').html(data.data);
		            $('body').loading('stop');
				}
			});
		
	}
	function submitatt(event){
		var val=$("#emp_id").val();
		var chk=$("input[type='radio'][name='rdcheckin']:checked").val();
		// alert(chk);
		$.ajax({
				type: "POST",
				url:"<?php echo base_url(); ?>index.php/employee/attendence/submitdata",    
				data: {
					'val':val,
					'chk':chk
				},
				success: function(data){
		           if(data==1){
		           		getdata();
		           }else{
		           		alert('Employee Not Found ! ');
		           		$('#emp_id').val('');

		           }
				}
			});
	}
	setInterval(function(){
	  getdata();
	}, 5000) 

</script>