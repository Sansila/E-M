
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
		       				<!-- <form id="contract_register" method="POST" enctype="multipart/form-data"> -->
					     		
	     						<div class="row">
	     							<div class="col-xs-12">
			     						<div class="col-xs-9" style="padding:0px !important;">
			     							<form class="form-inline">
											  <div class="form-group" style="margin-right: 10px;">
											    <label for="dtp_input1" class="control-label">Enter Name : </label>
											    <input type="text" class="form-control studentname" id="exampleInputEmail3" name="studentname" placeholder="Enter Students Name">
											  </div>
											  <div class="form-group" style="margin-right: 10px;">
												 <label for="dtp_input1" class="control-label">Select Class : </label>
					     							<select name="class_id" class="form-control class_id" data-required="true" required data-parsley-required-message="Please Select Class">
					     								<option value="">Please Select</option>
					     								<?php 
					     								$sql="SELECT * from sch_class";
					     								$sl=$this->db->query($sql)->result();
					     								foreach ($sl as $key => $va) {			     					
					     								?>
					     								<option value="<?php echo $va->classid ?>"><?php echo $va->class_name; ?></option>
					     								<?php }?>
				     								</select>
				     							</div>
											
										<div class="form-group" style="margin-right: 10px;">
			     							<label>Date : </label>
			     							<div class="input-group date end_date" data-date-format="dd-mm-yyyy">
								              <input type="text" name="start_date" id="start_date" class="form-control b_date" data-type="dateIso" value="<?php echo date("Y-m-d");?>" data-parsley-id="3959" ><ul class="parsley-errors-list" id="parsley-id-3959"></ul>
								              <span class="input-group-addon"><i class="icon-calendar"></i></span> 
								            </div>
								         </div>
								         
				     					 <div class="form-group" style="margin-right: 10px;">
												 <label for="dtp_input1" class="control-label">Atendent : </label>
					     							<select name="status" onchange="getdata();" class="form-control attr" id="status" data-required="true" required data-parsley-required-message="Please Select Class">
					     								<option value="0">Absent</option>
					     								<option value="1">Present</option>
					     								
					     								
				     								</select>
				     							</div>
			     						<!-- <div class="form-group">
			     							<label>End Date</label>
			     							<div class="input-group date end_date" data-date-format="dd-mm-yyyy">
								              <input type="text" name="end_date" id="end_date" class="form-control e_date" data-type="dateIso" value="<?php echo date("Y-m-d");?>" data-parsley-id="3959"><ul class="parsley-errors-list" id="parsley-id-3959"></ul>
								              <span class="input-group-addon"><i class="icon-calendar"></i></span> 
								            </div>
			     						</div> -->

					     			
									</form>
			     						</div>
			     						<div class="col-xs-3 pull-left" >
			    							<input type="button" class="btn btn-info" onclick="getlistdata();" value="Search">
			     						</div>
			     						
			     						
	     								
			     					</div>
			     				</div>
			     				
					     	<!-- </form> -->

		       				<div class="table-responsive" id="div_export_print">
		       					<table class="table" id="myTable" data-paging="true" border="0" cellspacing="0" cellpadding="0" style="margin-top: 30px;">
		       						<thead>
		       							<tr>
		       								<th class="pos_1 sort">N&deg;</th>
		       								<th class="pos_2 sort" rel="empcode">Image</th>
		       								<th class="pos_2 sort" rel="empcode">Student ID</th>
		       								<th class="pos_3 sort"  rel="first_name">Full Name</th>
		       								<th class="pos_3 sort"  rel="first_name">FamilyID</th> 
		       								<th class="pos_3 sort"  rel="first_name">Class</th>
		       								<th class="pos_4 sort"  rel="first_name_kh">Family Phone</th>
		       								<th class="pos_5 sort" rel="dob">Year</th>
		       								<!-- <th class="pos_6 sort"  rel="pos_id">ID Card</th>  -->
		       								<th class="pos_6 sort"  rel="pos_id" colspan="2">Check In/Check Out</th> 
		       								
		       								<th class="pos_6 sort"  rel="pos_id">Date</th> 
		       								<th class="pos_6 sort"  rel="pos_id">Is Called</th> 
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
	        <div class="fg-toolbar ui-toolbar ui-widget-header ui-corner-bl ui-corner-br ui-helper-clearfix">
                            <!-- <div class='col-sm-3'>
                                <label>Show 
                                    
                                    <select id='perpage' onchange='getdata(1);' name="DataTables_Table_0_length" size="1" aria-controls="DataTables_Table_0" tabindex="-1" class="form-control select2-offscreen">
                                        <?PHP
                                        for ($i=10; $i < 500; $i+=10) { 
                                            echo "<option value='$i'>$i</option>";
                                        }
                                         ?>
                                    </select> 
                                </label>
                            </div> -->
                            <div class='dataTables_paginate'>

                            </div>
                    </div>
	       	<form id="excel-form" action="<?php echo base_url('app/libraries/Z_EXPORT_TO_EXCEL.PHP')?>" method="POST">
	             <input type="hidden" name="num_colspan" value="6" id="num_colspan"/>
	             <input type="hidden" name="exporttile" value="<?php echo $title ?>"/>
	             <input type="hidden" name="pagesecurity" value="PgSecurity"/>
	             <textarea id="excel-data" name="data" style="display:none;"></textarea>
	        </form>
	        
	        

		
			<div id="myModal" class="modal fade" role="dialog" data-backdrop=false>
			  <div class="modal-dialog">

			    <!-- Modal content-->
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal">&times;</button>
			        <h4 class="modal-title">Modal Header</h4>
			      </div>
			      <div class="modal-body">
			        <p>Some text in the modal.</p>
			      </div>
			     
			    </div>

			  </div>
			</div>

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
<script type="text/javascript" src="<?php echo base_url();?>/tjs/bootstrap-datetimepicker.js" charset="UTF-8"></script>
<script type="text/JavaScript">

	$(document).ready(function(){
		$(".b_date,.e_date").datepicker({
	  		language: 'en',
	  		pick12HourFormat: true,
	  		format:'yyyy-mm-dd'
		});
	 // getlistdata();
	
	});
	
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
	                    submitatt();//alert('ok');//$( "#add_item" ).focus().autocomplete( "search", barcode );
	                }
	                chars = [];
	                pressed = false;
	            },200);
	        }
	        pressed = true;
	    });
	});
	function called(studentid){
		var con=confirm('This student is already call there parent ?');
		if(con==true){
			$.ajax({
				type: "POST",
				url:"<?php echo base_url(); ?>index.php/student/attendent/called/"+studentid,    
				data: {},
				success: function(data){
					getdata(1);
				}
			});
		}
		
	}
	function getdata(){
			var class_id=$(".class_id").val();
			var studentname=$(".studentname").val();
			var end_date=$("#end_date").val();
			var start_date=$("#start_date").val();
			var status=$('#status').val();
			var limit=$('#limit').val();
			$.ajax({
				type: "POST",
				url:"<?php echo base_url(); ?>index.php/student/attendent/getlistdata",    
				data: {'class_id':class_id,
						'studentname':studentname,
						'end_date' :end_date,
						'start_date':start_date,
						'status':status,
						'limit':limit
						},
				success: function(data){
		           $('.listbody').html(data.data);
		           $('table').trigger('footable_initialize');
				}
			});
		
	}
	function getlistdata(){
		var class_id=$(".class_id").val();
			var studentname=$(".studentname").val();
			var end_date=$("#end_date").val();
			var start_date=$("#start_date").val();
			var status=$('#status').val();
			var limit=$('#limit').val();
		//var chk=$("input[type='radio'][name='rdcheckin']:checked").val();
		// alert(chk);
		$.ajax({
				type: "POST",
				url:"<?php echo base_url(); ?>index.php/student/attendent/getlistdata",    
				data: {'class_id':class_id,
						'studentname':studentname,
						'end_date' :end_date,
						'start_date':start_date,
						'status':status,
						'limit':limit
						},
				success: function(data){
		           if(data==1){
		           		getdata();
		           		$('.dataTables_paginate').html(data.pagina.pagination);
		           }else{
		           		//alert("Don't have student at attendent list checkin");
		           		//$('#emp_id').val('');

		           }
				}
			});
	}
	setInterval(function(){
	  getdata();
	}, 15000) 
	// function getlistdata(){
	// 		var class_id=$(".class_id").val();
	// 		var studentname=$(".studentname").val();
	// 		var end_date=$("#end_date").val();
	// 		var start_date=$("#start_date").val();
	// 		var status=$('#status').val();
	// 		// alert(status);
	// 		//var chk=$("input[type='radio'][name='rdcheckin']:checked").val();
	// 		$.ajax({
	// 			type: "POST",
	// 			url:"<?php echo base_url(); ?>index.php/student/attendent/getlistdata",    
	// 			data: {'class_id':class_id,
	// 					'studentname':studentname,
	// 					'end_date' :end_date,
	// 					'start_date':start_date,
	// 					'status':status
	// 					},
	// 			success: function(data){
	// 	           $('.listbody').html(data.data);
	// 	           // $('#emp_id').val('');
	// 	           // $('#emp_id').focus();
	// 			}
	// 		});
		
	// }
	
	
	function removestd(student_acceptid){
			$.ajax({
				type: "POST",
				url:"<?php echo base_url(); ?>index.php/student/come_accept/removestd",    
				data: {'student_acceptid':student_acceptid},
				success: function(data){
					getdata();
				}
			});
	}
	

</script>