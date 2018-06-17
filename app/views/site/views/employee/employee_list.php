<?php 
	$tr = ""; $tr_search=""; $num_emp = 1;
	if(count($tdata)>0){  
		$i=1;
		if(isset($_GET['per_page']))
		$i=$_GET['per_page']+1;
		$tr_search .= '<form class="frmsearch"><tr class="remove_tag">
						<td class="col-xs-1">&nbsp;</td>
						<td class="col-xs-1">&nbsp;</td>
						<td class="col-xs-1"><input type="text" name="sch_empId" id="sch_empId" class="form-control" ></td>
						<td class="col-xs-2"><input type="text" name="sch_fullname" id="sch_fullname" class="form-control" ></td>
						<td class="col-xs-2"><input type="text" name="sch_fullname_kh" id="sch_fullname_kh" class="form-control" ></td>
						<td class="col-xs-2"></td>
						<td class="col-xs-2"><input type="text" name="pos_id" id="pos_id" class="form-control"></td>
						<td ><input type="submit" value="Filter" class="btn btn-primary btn-sm" ></td>
					</tr></form>';
		foreach($tdata as $row_emp){

			if($row_emp['dob'] =="0000-00-00"){
				$date = "";
			}else{
				$cdate = date_create($row_emp['dob']);
				$date = date_format($cdate,"d/m/Y");
			}
			$img='';
			if(file_exists(FCPATH.'assets/upload/employees/photos/thumb/'.$row_emp['empid'].'.jpg')) 
				$img = site_url('../assets/upload/employees/photos/thumb/'.$row_emp['empid'].'.jpg'); 
			else 
				$img = site_url('../assets/upload/No_person.jpg');
			$tr .='<tr class="no_data" rel="1">
						<td class="pos_1">'.str_pad($num_emp++,2,"0",STR_PAD_LEFT).'</td>
						<td ><img src="'.$img.'" style="width:50px;"/></td>
						<td class="pos_2">'.$row_emp['empcode'].'</td>
						<td class="pos_3">'.($row_emp['last_name']." ".$row_emp['first_name']).'</td>
						<td class="pos_4">'.($row_emp['last_name_kh']." ".$row_emp['first_name_kh']).'</td>
			       		<td class="pos_5">'.$date.'</td>
			       		<td class="pos_6">'.$row_emp['position'].'</td>
			       		<td class="remove_tag">';
			       		$tr.="<div class='btn-group'>
							                  <button type='button' class='btn btn-default btn-sm'>Action</button>
							                  <button type='button' class='btn btn-default dropdown-toggle btn-sm' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
											    <span class='caret'></span></button>
											    <ul class='dropdown-menu'>";

											$tr.='<li><a title="View Employee" rel="'.$row_emp['empid'].'" onclick="view_employee(event);">View Employee</a></li>
											
												<li><a title="View Card" rel="'.$row_emp['empid'].'" onclick="view_card(event);">View Card</a></li>
												<li><a title="View Attendence" rel="'.$row_emp['empid'].'" onclick="view_attendence(event);">View Attendence</a></li>
											
												<li><a title="Delete Employee" class="clk_del" rel="'.$row_emp['empid'].'" onclick="delete_employee(event);">Delete Employee</a></li>
											
												<li><a title="Edit Employee" rel="'.$row_emp['empid'].'" onclick="edit_employee(event);">Edit Employee</a></li>
												 <li>
											    	<a data-target="#myModaladdsalary" data-toggle="modal" onclick="add_salary('.$row_emp['empid'].')">
											    		<i class="fa fa-money"></i>
											    		Salary
											    	</a>
											    </li>
											    <li>
											    	<a data-target="#myModal" data-toggle="modal" onclick="other_salary('.$row_emp['empid'].')">
											    		<i class="glyphicon glyphicon-plus-sign"></i>
											    		Other Salary
											    	</a>
											    </li>
											     <li>
											    	<a data-target="#myModalgetsalary" data-toggle="modal" onclick="get_salary('.$row_emp['empid'].')">
											    		<i class="fa fa-money"></i>
											    		Get Salary
											    	</a>
											    </li>

											</ul>
										</div>';
						$tr.='</td>
			       </tr>';
		}
	}else{
		$tr.="<tr class='no_data' rel='0' style='text-align:center;background:#FFFFFF;border-bottom:solid 2px #EEEEEE;'><td colspan='10'><b>No Employee</b></td></tr>";
	}
?>
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
	.dropdown-menu{
		z-index: 99999 !important;
	}
	.table-responsive{
		z-index: 99998 !important;
	}
</style>
<div class="wrapper">
	<div class="clearfix" id="main_content_outer">
	    <div id="main_content">
	      <div class="row result_info">
	      	<div class="col-xs-6">
		      	<strong class="emp_title"><?php echo $title = "Employee List";?></strong>
		    </div>

		    <div class="col-xs-6" style="text-align: right">
		      		<span class="top_action_button">
			    		<a>
			    			<img onclick="showsort(event);" src="<?php echo base_url('assets/images/icons/sort.png')?>" />
			    		</a>
			    	</span>
		      		<span class="top_action_button">
			    		<a href="<?php echo site_url('employee/employee/import')?>" >
			    			<img src="<?php echo base_url('assets/images/icons/import.png')?>" />
			    		</a>
			    	</span>
			    	<span class="top_action_button">	
			    		<a href="JavaScript:void(0);" id="emp_export"  title="Export">
			    			<img src="<?php echo base_url('assets/images/icons/export.png')?>" />
			    		</a>
			    	</span>
		      		<span class="top_action_button">
						<a href="JavaScript:void(0);" id="emp_print" title="Print">
			    			<img src="<?php echo base_url('assets/images/icons/print.png')?>" />
			    		</a>
		      		</span>		    	
			    	<span class="top_action_button">
			    		<a href="<?php echo site_url('employee/employee/add')?>" >
			    			<img src="<?php echo base_url('assets/images/icons/add.png')?>" />
			    		</a>
			    	</span>	      		
		    </div>
	       </div>
	        <?php if ($this->session->flashdata('msg')): ?>
			<div class="col-sm-12 alert alert-success"><?php echo $this->session->flashdata('msg') ?></div>
			<?php endif ?>
			<?php if ($this->session->flashdata('error')): ?>
				<div class="col-sm-12 alert alert-danger"><?php echo $this->session->flashdata('error') ?></div>
			<?php endif ?>
	       <div class="panel panel-default" id="sort_ad" style="display:none">
			  <div class="panel-heading">
			  		<span class="label label-default" onclick="sortadvance(event);">A</span>
			  		<span class="label label-default" onclick="sortadvance(event);">B</span>
			  		<span class="label label-default" onclick="sortadvance(event);">C</span>
			  		<span class="label label-default" onclick="sortadvance(event);">D</span>
			  		<span class="label label-default" onclick="sortadvance(event);">E</span>
			  		<span class="label label-default" onclick="sortadvance(event);">F</span>
			  		<span class="label label-default" onclick="sortadvance(event);">G</span>
			  		<span class="label label-default" onclick="sortadvance(event);">H</span>
			  		<span class="label label-default" onclick="sortadvance(event);">I</span>
			  		<span class="label label-default" onclick="sortadvance(event);">J</span>
			  		<span class="label label-default" onclick="sortadvance(event);">K</span>
			  		<span class="label label-default" onclick="sortadvance(event);">L</span>
			  		<span class="label label-default" onclick="sortadvance(event);">M</span>
			  		<span class="label label-default" onclick="sortadvance(event);">N</span>
			  		<span class="label label-default" onclick="sortadvance(event);">O</span>
			  		<span class="label label-default" onclick="sortadvance(event);">P</span>
			  		<span class="label label-default" onclick="sortadvance(event);">Q</span>
			  		<span class="label label-default" onclick="sortadvance(event);">R</span>
			  		<span class="label label-default" onclick="sortadvance(event);">S</span>
			  		<span class="label label-default" onclick="sortadvance(event);">T</span>
			  		<span class="label label-default" onclick="sortadvance(event);">U</span>
			  		<span class="label label-default" onclick="sortadvance(event);">V</span>
			  		<span class="label label-default" onclick="sortadvance(event);">W</span>
			  		<span class="label label-default" onclick="sortadvance(event);">X</span>
			  		<span class="label label-default" onclick="sortadvance(event);">Y</span>
			  		<span class="label label-default" onclick="sortadvance(event);">Z</span>
			  		<span class="label label-default" onclick="sortadvance(event);">0-9</span>
			  </div>
			</div>
	       <!-------------Start Show Table------------>
	       
	       <div class="row">
	       		<div class="col-sm-12">
	       			<div class="panel panel-default">
		       			<div class="panel-body">
		       				<div class="table-responsive" id="div_export_print">
		       					<table class="table table-striped" border="0" cellspacing="0" cellpadding="0">
		       						<thead>
		       							<tr>
		       								<th class="pos_1 sort">N&deg;</th>
		       								<th class="pos_1 sort">Images</th>
		       								<th class="pos_2 sort" onclick="sort(event);" rel="empcode">EmployeeID</th>
		       								<th class="pos_3 sort" onclick="sort(event);" rel="first_name">Full Name</th>
		       								<th class="pos_4 sort" onclick="sort(event);" rel="first_name_kh">Full Name(Kh)</th>
		       								<th class="pos_5 sort" onclick="sort(event);" rel="dob">Date of Birth</th>
		       								<th class="pos_6 sort" onclick="sort(event);" rel="pos_id">Position</th>
		       								<th class="remove_tag">Action</th>
		       							</tr>
		       							<input type='hidden' value='ASC' name='sort' id='sort' style='width:80px;'/>
		       							<input type='hidden' value='' name='sortquery' id='sortquery' style='width:200px;'/>
		       							<?php echo $tr_search;?>
		       						</thead>
		       						<tbody class="listbody">
		       						<?php echo $tr;?>
		       						<?php if(count($tdata)>0){ ?>
		       						<tr class="remove_tag">
										<td colspan='13' id='pgt'>
											<div style='margin-top:20px; width:11%; float:left;'>
											Display : <select id="sort_num" onchange="search();" style='padding:5px; margin-right:0px;'>
															<?php
															$num=50;
															for($i=0;$i<10;$i++){?>
																<option value="<?php echo $num ;?>" <?php if(isset($_GET['s_num'])){ if($num==$_GET['s_num']) echo 'selected'; }?> ><?php echo $num;?></option>
																<?php $num+=50;
															}
															?>
														</select>
											</div>
											<div style='text-align:center; verticle-align:center; width:89%; float:right;'>
												<ul class='pagination' style='text-align:center'>
													
													<?php echo $this->pagination->create_links(); ?>
												</ul>
											</div>

										</td>
									</tr> 
									<?php } ?>
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
        <b>Are you sure to delete this record !</b>
        <input type="hidden" name="get_rel" id="get_rel" value="">
      </div>
      <div class="modal-footer">
      	<button type="button" class="btn btn-success" onclick="delete_employee(event);">Yes</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div>


<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add Salary</h4>
      </div>
      <div class="modal-body">
        <form action="<?php echo site_url('employee/employee/add_bonuse_salary')?>" method="post" id="bonus_form">
        <input type="hidden" class="empid" name="empid" value="">
      		<div ng-app="" class="row">
      			<div class="col-sm-12">
      				<div class="panel panel-default">
      					<div class="panel-heading">
      						<h4 class="panel-title">Salary Details
								<label style="float:right !important; font-size:11px !important; color:red;"></label>	
      						</h4>
      					</div>
      					<div class="panel-body">
                  <div class="form_sep">
                    <label>Salary Type *</label>
                    <select class="form-control typebonus" id="typebonus" name="typebonus"> 
                        <option value=""> Select </option>
                        <option value="OT"> OT </option>
                        <option value="Deductions"> Deductions </option>
                        <option value="Bonuses"> Bonuses </option>
                        <option value="Commission"> Commission </option>
                        <option value="Advance Salary"> Advance Salary </option>
                    </select>
                  </div>

                  <div class="date-ot form_sep​​ hide">
                    <label>Date OT *</label>
                    <input type="text" class="form-control" id="date_ot" name="date_ot">
                  </div>
                  <div class="form_sep​​ time-ot hide">
                    <label>Total Time OT *</label>
                    <input type="text" class="form-control" id="timeot" name="timeot" onblur="totalsalary(this);">
                  </div>

					<div class="form_sep">
						<label>Bonus Money *</label>
						<input type="text" class="form-control" id="salary" name="salary"  required>
					</div>
                  <div class="form_sep">
                    <label>Description</label>
                    <textarea class="form-control" name="desc"></textarea>
                  </div>
                  <div class="form_sep">
                    <label><input type="checkbox" name="tax_inc" /> Include to Tax</label>
                  </div>
                  <p></p>
                  <div class="form_sep">
                    <label>Bonus List</label>

                    <table class="table table-bordered table-stript" id="table_salary">
                        <thead>
                            <th>No</th>
                            <th>Date</th>
                            <th>Bonus Type</th>
                            <th>Date OT</th>
                            <th>Total Time OT</th>
                            <th>Bonus Money</th>
                            <th>Description</th>
                            <th>Tax</th>
                        </thead>
                        <tbody class="data_salary">
	                        
                        </tbody>
                    </table>
                  </div>

      					</div>
      				</div>
      			</div>

      		</div>
      		<div class="row">
      		<input type='hidden' id="osalary" class="osalary">
      		<input type='hidden' id="orate" class="orate">
      		
  				<div class="col-sm-12">
  					<button class="btn btn-success" type="submit" id="save_bonus">Save</button>
  				</div>
  			</div>
      	</form>
      </div>
      <div class="modal-footer">
      	
        <div class="loading_bar col-sm-6" align="left">
	        <img src="<?php echo base_url()?>assets/img/loading_bar.gif">
	    </div>
	    <div class="col-sm-6" style="float:right;">
        	<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>

  </div>
</div>
<!-- GET SALARY MODAL -->
<!-- Modal -->
<div id="myModalgetsalary" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Get Salary</h4>
      </div>
      <div class="modal-body">
        <form action="<?php echo site_url('employee/employee/add_getsalary')?>" method="post" id="getsalary_form">
        <input type="hidden" class="empid" name="empid" value="">
      		<div ng-app="" class="row">
      			<div class="col-sm-12">
      				<div class="panel panel-default">
      					<div class="panel-heading">
      						<h4 class="panel-title">Salary Details
								<label style="float:right !important; font-size:11px !important; color:red;"></label>	
      						</h4>
      					</div>
      					<div class="panel-body">
                  
		                  <div class="form_sep">
		                    <label>Bonus List</label>

		                    <table class="table table-bordered table-stript" id="table_salary">
		                        <thead>
		                            <th>No</th>
		                            <th>Date</th>
		                            <th>Bonus Type</th>
		                            <th>Date OT</th>
		                            <th>Total Time OT</th>
		                            <th>Description</th>
		                            <th>Tax Include</th>
		                            <th>Bonus Money</th>
		                        </thead>
		                        <tbody class="data_salary">
			                        
		                        </tbody>
		                        <tfoot>
		                          <tr>
		                              <td colspan="7">
		                                  <label class="pull-right">Sub Total :</label>
		                              </td>
		                              <td id="sub_total"></td>
		                          </tr>
		                          <tr>
		                              <td colspan="7">
		                                  <label class="pull-right">Main Salary :</label>
		                              </td>
		                              <td id="main_salary"></td>
		                          </tr>
		                          <tr>
		                              <td colspan="7">
		                                  <label class="pull-right">Grand Total :</label>
		                              </td>
		                              <td id="grand_total"></td>
		                          </tr>
		                           <tr>
		                              <td colspan="7">
		                                  <label class="pull-right">Grand Total For Tax :</label>
		                              </td>
		                              <td id="vatgrand_total"></td>
		                          </tr>
		                          <tr>
		                              <td colspan="7">
		                                  <label class="pull-right">Tax Salary :</label>
		                              </td>
		                              <td id="tax_salary"></td>
		                          </tr>
		                              <tr>
		                              <td colspan="7">
		                                  <label class="pull-right">Total Salary :</label>
		                              </td>
		                              <td id="total_salary"></td>
		                          </tr>
		                        </tfoot>
		                    </table>
		                  </div>
		                  <div class="form_sep">
		                    <label>Month *</label>
		                    <select class="form-control month" id="month" name="month" required min=1> 
		                        <option value=""> Select </option>
		                       <?php 
		                          $months = array(1 => 'Jan', 2 => 'Feb', 3 => 'Mar', 4 => 'Apr', 5 => 'May', 6 => 'Jun', 7 => 'Jul', 8 => 'Aug', 9 => 'Sep', 10 => 'Oct', 11 => 'Nov', 12 => 'Dec');
		                          foreach ($months as $key => $value) {
		                              echo "<option value='$key'>".$value."</option>";
		                          }
		                       ?>
		                    </select>
		                  </div>
		                  <div class="form_sep">
		                    <label>Description</label>
		                    <textarea class="form-control" name="desc"></textarea>
		                  </div>
		                  <p></p>
      					</div>
      				</div>
      			</div>

      		</div>
      		<div class="row">
	      		<input type='hidden' id="osalary" class="osalary">
	      		<input type='hidden' id="orate" class="orate">
      		
  				<div class="col-sm-12">
  					<button class="btn btn-success" type="submit" id="save_bonus">Save</button>
  				</div>
  			</div>

      	</form>

      	<div class="row" style="margin-top: 15px;">
	      		<div class="col-sm-12">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">Salary History
							<label style="float:right !important; font-size:11px !important; color:red;"></label>	
							</h4>
						</div>
						<div class="panel-body">
			  				<div>
			  					<label>Year</label>
			  					<select class="form-control" id="his_year">
			  						<?php 
			  							for ($i=date('Y')-1; $i <=date('Y')+1; $i++) { 
			  								$sel='';
			  								if($i==date('Y')){
			  									$sel='selected';
			  								}
			  								echo "<option $sel>$i</option>";# code...
			  							}
			  						 ?>
			  					</select>
			  				</div>
			  				<br>
			  				<div>
				  				<table class="table table-bordered table-stript" >
			                        <thead>
			                            <th>No</th>
			                            <th>Date</th>
			                            <th>Month</th>
			                            <th>Main Salary</th>
			                            <th>Bonus Money</th>
			                            <th>TAX </th>
			                            <th>Total </th>
			                            <th>View</th>

			                        </thead>
			                        <tbody class="his_salary">
				                        
			                        </tbody>
			                    </table>
			  				</div>
			  					
			  			</div>
		  			</div>
	  			</div>
	  		</div>
      </div>
      <div class="modal-footer">
      	<div class="loading_bar col-sm-6" align="left">
	        <img src="<?php echo base_url()?>assets/img/loading_bar.gif">
	    </div>
	    <div class="col-sm-6" style="float:right;">
        	<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>

  </div>
</div>
<!-- END GET SALARY MODAL -->
<!-- ADD SALARY MODAL -->
<!-- Modal -->
<div id="myModaladdsalary" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add Salary</h4>
      </div>
      <div class="modal-body">
        <form action="<?php echo site_url('employee/employee/store_salary')?>" method="post" id="salary_form">
        <input type="hidden" class="empid" name="empid" value="">
      		<div ng-app="" class="row">
      			<div class="col-sm-12">
      				<div class="panel panel-default">
      					<div class="panel-heading">
      						<h4 class="panel-title">Salary Details
								<label style="float:right !important; font-size:11px !important; color:red;"></label>	
      						</h4>
      					</div>
      					<div class="panel-body">
	      					<div class="form_sep">
	      						<label>Salary *</label>
	      						<input type="text" class="form-control" id="add_salary" name="add_salary" value="" required>
	      					</div>

      					</div>
      				</div>
      			</div>

      		</div>
      		<div class="row">
  				<div class="col-sm-12">
  					<button class="btn btn-success" type="submit">Save</button>
  				</div>
  			</div>
      	</form>
      </div>
      <div class="modal-footer">
      	
        <div class="loading_bar col-sm-6" align="left">
	        <img src="<?php echo base_url()?>assets/img/loading_bar.gif">
	    </div>
	    <div class="col-sm-6" style="float:right;">
        	<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>

  </div>
</div>
<!-- END ADD SALARY MODAL -->

<script type="text/JavaScript">

	$(function(){
		$("#date_ot").datepicker({
		     language: 'en',
		     pick12HourFormat: true,
		     format:'yyyy-mm-dd'
		  });
		$('.frmsearch').submit(function(e){
			e.preventDefault();
			search();
		})
		$("#emp_export").on("click", function(){
			var no_data = $(".no_data").attr('rel');
			var data = $("#div_export_print").html().replace(/<img[^>]*>/gi,"");
			var export_data = $("<center>"+data+"</center>").clone().find(".remove_tag").remove().end().html();
			if(no_data == 1){
				$('#excel-data').text(export_data);
				$('#excel-form').submit();
			}else{
				$("#message_body").text("We didn't find anything to Export.");
				$("#myModal_export_print").modal('show');
			}
			
		});
		//----------------Print Data--------
		$("#emp_print").on("click",function(){
			var no_data = $(".no_data").attr('rel');
			var data = $("#div_export_print").html();
			//alert(no_data);return false;
			if(no_data == 1){
				$("#check_export_print").modal('show');
			}else{
				$("#message_body").text("We didn't find anything to Print.");
				$("#myModal_export_print").modal('show');
			}
		});

		//---------------show number of record--------
		
		$(".chk").on("click", function(){
			var get_chk = $(this).attr('rel');
			if($(this).is(":checked")){
				$(".pos_"+get_chk).removeClass('remove_tag');
			}else{
				$(".pos_"+get_chk).addClass('remove_tag');
			}
		});

		$("#clk_print").on("click", function(){
			var data = $("#div_export_print").html();
			gsPrint('Employee List',data,'remove_tag');
		});

	});
	//-----------------End Main Function-----------------------
	function showsort(event){	
		$('#sort_ad').fadeToggle('3000');
	}

	function sortadvance(event){
		var value = $(event.target).text();
		
		var sql='';
		if($('.cur').attr('rel')==undefined){
			alert('please select field');
		}else {
			$(event.target).removeClass('label-default');
			$('.panel div span').removeClass('label-danger');
			$('.panel div span').addClass('label-default');
			$(event.target).addClass('label-danger');
			var field = $('.cur').attr('rel');
			
			if(value=='0-9')
				sql="ORDER BY Case When "+field+" Like '[0-9]%' Then 1 Else 0 End Asc, "+field;
			else
				sql="AND "+field+" LIKE '"+value+"%' ";
			search(sql);	
		}
	}
	function sort(event){
		var sort=$(event.target).attr('rel');

		var sorttype=$('#sort').val();
		if(sorttype=='ASC'){
			$('#sort').val('DESC');
			$('.sort').removeClass('cur_sort_down cur');
			$(event.target).addClass('cur_sort_up cur');
		}
		else{

			$('#sort').val('ASC');
			$('.sort').removeClass('cur_sort_up cur');
			$(event.target).addClass('cur_sort_down cur');
		}
		$('#sortquery').val('ORDER BY '+sort+' '+sorttype);
		search();
	}

	function search(sort){
		$("body").loading();
		if(sort==''){
			$('.panel div span').removeClass('label-danger');
			$('.panel div span').addClass('label-default');
		}
		var sort_num = $("#sort_num").val();
		var sch_empId = $("#sch_empId").val();
		var pos_id		= $("#pos_id").val();
		var sch_fullname = $("#sch_fullname").val();
		var sch_fullname_kh = $("#sch_fullname_kh").val();
		var sortemp=$('#sortquery').val();

		if(sortemp == '')
			sortemp='ORDER BY empid DESC';
			setTimeout(function(){ 
				$.ajax({
					type: "POST",
					url:"<?php echo base_url(); ?>index.php/employee/employee/search_emp",    
					data: {
						'sort_ad':sort,
						'sort':sortemp,
						'sort_num':sort_num,
						'pos_id':pos_id,
						'sch_empId':sch_empId,
						'sch_fullname':sch_fullname,
						'sch_fullname_kh':sch_fullname_kh
					},
					success: function(data){
			           $('.listbody').html(data);
			           $("body").loading('stop');
					}
				});
			}, 500);
		
	}
	//----load to model employee/employee/view_emp
	function view_employee(event){
			var employee_id=jQuery(event.target).attr("rel");
			location.href="<?PHP echo site_url('employee/employee/view_emp');?>/"+employee_id;
	}
	function view_card(event){
			var employee_id=jQuery(event.target).attr("rel");
			// location.href="<?PHP echo site_url('employee/employee/view_card');?>/"+employee_id;
			window.open("<?PHP echo site_url('employee/employee/view_card');?>/"+employee_id,'_blank');
	}
	function view_attendence(event){
			var employee_id=jQuery(event.target).attr("rel");
			window.open("<?PHP echo site_url('employee/employee/view_attendence');?>/"+employee_id,'_blank');
	}
	function edit_employee(event){
		var employee_id=jQuery(event.target).attr("rel");
		location.href="<?PHP echo site_url('employee/employee/get_emp');?>/"+employee_id;
	}
	//----load to model employee/employee/delete
	function delete_employee(event){
		var r = confirm("Are you sure to delete this record !");
		if(r == true){
			var emp_id= $(event.target).attr('rel');
			location.href="<?PHP echo site_url('employee/employee/delete');?>/"+emp_id;
		}
	}


	function get_salary(empid){
		$('.loading_bar').removeClass('hide');
  		$('.empid').val(empid);
       	$('.data_salary').html('');
        $('#osalary').val('');
        $('#orate').val('');
		reset_form();
		var employee_id = empid;
		// alert(employee_id);
		$.post("<?php echo site_url('employee/employee/getsalary')?>"+'/'+employee_id,
			{
			emp_id:employee_id

			}, function(data){
        	// $("span").html(result);
        	// $('.loading_bar').addClass('hide');
        	$(".loading_bar").removeClass("hide").delay(500).queue(function(next){
			    $(this).addClass("hide");
			    if (data) {
	        		$('.empid').val(data.empid);
	        		$('.data_salary').html(data.bonus_table);
	        		$('#osalary').val(data.salary);
	        		$('#orate').val(data.rate);
	        		$('#sub_total').text(data.sub_total);
	        		$('#main_salary').text(data.main_salary);
	        		$('#grand_total').text(data.grand_total);
	        		$('#vatgrand_total').text(data.vatgrand_total);
	        		$('#tax_salary').text(data.tax_salary);
	        		$('#total_salary').text(data.total_salary);
	        		
        		};
			    next();
			});
        	getsalaryhis();
    	},'json');
	}
	$('#his_year').change(function(){
		getsalaryhis();
	})
	function getsalaryhis(){
		var empid=$('.empid').val();
		var year=$('#his_year').val();
		$.ajax({
			type: "POST",
			url:"<?php echo base_url(); ?>index.php/employee/employee/getsalaryhis/"+empid,    
			data: {
				'year':year
			},
			success: function(data){
	           $('.his_salary').html(data);
			}
		});
	}
	function add_salary(empid){
		$('.loading_bar').removeClass('hide');
  		$('.empid').val('');
       	$('#add_salary').val('');
        // $('#osalary').val('');
        // $('#orate').val('');
		reset_form();
		var employee_id = empid;
		// alert(employee_id);
		$.post("<?php echo site_url('employee/employee/edit_salary')?>"+'/'+employee_id,
			{
			emp_id:employee_id

			}, function(data){
        	// $("span").html(result);
        	// $('.loading_bar').addClass('hide');
        	$(".loading_bar").removeClass("hide").delay(500).queue(function(next){
			    $(this).addClass("hide");
			    if (data) {
	        		$('.empid').val(data.empid);
	        		$('#add_salary').val(data.salary);
	        		// $('.data_salary').html(data.bonus_table);
	        		// $('#osalary').val(data.salary);
	        		// $('#orate').val(data.rate);
	        		// $('#sub_total').text(data.sub_total);
	        		// $('#main_salary').text(data.main_salary);
	        		// $('#grand_total').text(data.grand_total);
        		};
			    next();
			});
        	
    	},'json');
	}
	function other_salary(empid){
		$('.loading_bar').removeClass('hide');
  		$('.empid').val('');
       	$('.data_salary').html('');
        $('#osalary').val('');
        $('#orate').val('');
		reset_form();
		var employee_id = empid;
		// alert(employee_id);
		$.post("<?php echo site_url('employee/employee/bonus_salary')?>"+'/'+employee_id,
			{
			emp_id:employee_id

			}, function(data){
        	// $("span").html(result);
        	// $('.loading_bar').addClass('hide');
        	$(".loading_bar").removeClass("hide").delay(500).queue(function(next){
			    $(this).addClass("hide");
			    if (data) {
	        		$('.empid').val(data.empid);
	        		$('.data_salary').html(data.bonus_table);
	        		$('#osalary').val(data.salary);
	        		$('#orate').val(data.rate);
        		};
			    next();
			});
        	
    	},'json');
	}
	function reset_form(){
		// $('#bonus_form').reset();
		document.getElementById("bonus_form").reset();
		$("#typebonus").val('');

	}
	$(document).ready(function(){
		
    
		$("#salary").keydown(function (e) {
	        // Allow: backspace, delete, tab, escape, enter and .
	        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
	             // Allow: Ctrl+A, Command+A
	            (e.keyCode === 65 && (e.ctrlKey === true || e.metaKey === true)) || 
	             // Allow: home, end, left, right, down, up
	            (e.keyCode >= 35 && e.keyCode <= 40)) {
	                 // let it happen, don't do anything
	                 return;
	        }
	        // Ensure that it is a number and stop the keypress
	        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
	            e.preventDefault();
	        }
	    });
    //====================

    $('.typebonus').change(function(){
        var ot = $(this).val();
        if(ot == "OT")
        {
          $('.time-ot').removeClass('hide');
          $('.date-ot').removeClass('hide');
        }else{
          $('.time-ot').addClass('hide');
          $('.date-ot').addClass('hide');
        }
    });

    //======================


	});
  function totalsalary(x)
  {
        var salary = $('#osalary').val();
        var time    = (8 * 30);
            time    = salary / time;
        var ot      = $('#timeot').val();
        var rate    = $('#orate').val();
            rate    = rate / 100 ;
        var totalot = (time * ot) * rate;
            totalot    = Number(totalot);
        $('#salary').val('');
        $('#salary').val(totalot);

  }
</script>