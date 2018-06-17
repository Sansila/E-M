<style type="text/css">
	table tbody tr td img{width: 20px; margin-right: 10px}
	a,.sort,.panel-heading span{cursor: pointer;}
	.panel-heading span{margin-left: 10px;}
	.cur_sort_up{
		background-image: url('<?php echo base_url('assets/images/icons/sort-up.png')?>');
		background-position: left;
		background-repeat: no-repeat;
		padding-left: 15px !important;
	}
	.ui-autocomplete{z-index: 9999;}
	.cur_sort_down{
		background-image: url('<?php echo base_url('assets/images/icons/sort-down.png')?>');
		background-position: left;
		background-repeat: no-repeat;
		padding-left: 15px !important;
	}
	.datepicker {z-index: 9999;}

</style>
<?php
function f_date($date){
	if($date!='0000-00-00' && $date!='')
		return date('d-m-Y',strtotime($date));
	else 
		return '00-00-0000';
}

$school=$this->db->where('schoolid',$this->session->userdata('schoolid'))->get('sch_school_infor')->row();
		           			$school_name=$school->name;
		           			$school_adr=$school->address;	
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
		      		<strong id='title'>Open Stock List</strong>
		      	</div>
		      	<div class="col-xs-6" style="text-align: right">
			    	<span class="top_action_button">	
			    		<?php if($this->green->gAction("E")){ ?>
				    		<a href="#" id="exports" title="Export">
				    			<img id='export' src="<?php echo base_url('assets/images/icons/export.png')?>" />
				    		</a>
				    	<?php } ?>
			    	</span>
		      		<span class="top_action_button">
		      			<?php if($this->green->gAction("P")){ ?>
							<a href="#" id="print" title="Print">
				    			<img src="<?php echo base_url('assets/images/icons/print.png')?>" />
				    		</a>
				    	<?php } ?>
		      		</span>			    	
			    	<span class="top_action_button">
			    		<?php if($this->green->gAction("C")){ ?>
				    		<a>
				    			<img data-toggle="modal" class='btnaddmidi' data-target="#addmedicine" src="<?php echo base_url().'assets/images/icons/add.png'?>" />
				    		</a>
				    	<?php } ?>
			    	</span>	      		
		      	</div> 			      
		  </div>
	      <div class="row">
	      	<div class="col-sm-12">
	      		<div class="panel panel-default">
	      			<div class="panel-body">
		           		<div class="table-responsive" id="tab_print">
		           			<?php 
		           			$thr="";
		           			$tr="";		
		           			foreach($thead as $th=>$val){
		           				if($th=='No')
		           					$thr.="<th class='$val' align='center' rel='$val'>".$th."</th>";
		           				else if($th=='Action')
		           					$thr.="<th class='remove_tag' align='center'>".$th."</th>";
		           				else
		           					$thr.="<th class='$val' align='center' class='sort' rel='$val'>".$th."</th>";								
		           			}
		           			
		           			if(count($tdata)>0){
		           				
		           				$i=1;
		           				if(isset($_GET['per_page']))
									$i=$_GET['per_page']+1;
		           				$arrtran=array();
		           				foreach($tdata as $row){
									$tr.="<tr>
											 	<td class='No'>".str_pad($i,2,"0",STR_PAD_LEFT)."</td>
												 <td class='stock_name'>".$row->descr_eng."</td>
												 <td class='expired_date alignright'>".f_date($row->expire_date)."</td>
												 <td class='transdate alignright'>".f_date($row->transdate)."</td>
												 <td class='qty alignright'>".$row->qty."</td>
												 <td class='uom'>$row->uom</td>
												 <td class='where_house'>$row->wharehouse</td>												 
												 <td class='remove_tag no_wrap'>" ;
									if(!isset($arrtran[$row->transno])){
										if($this->green->gAction("P")){
											$tr.="<a>
												 		<img rel=".$row->ref_no."  onclick='view_image(event);' src='".site_url('../assets/images/icons/gallery.png')."'/>
												 	</a>
													<a>
												 		<img type=".$row->type." tran=".$row->transno."  onclick='preview(event);' src='".site_url('../assets/images/icons/preview.png')."'/>
												 	</a>";
										}
										if($this->green->gAction("D")){
											$tr.="<a>
												 		<img type=".$row->type." tran=".$row->transno." onclick='deletes(event);' src='".site_url('../assets/images/icons/delete.png')."'/>
												 	</a>";
										}
										if($this->green->gAction("U")){
											$tr.="<a>
												 		<img type=".$row->type." tran=".$row->transno." ref_no='".$row->ref_no."' onclick='edit(event);' src='".site_url('../assets/images/icons/edit.png')."'/>
												 	</a>" ;
										}		 	
									}	
									$tr.="</td>
												 
										 	</tr>
										 ";
									 	$i++;
									 	$arrtran[$row->transno]=$row->transno;
								}
							}?>
		           			<table class="table">
		           				<thead><?php echo $thr ?></thead>
		           				<thead class='remove_tag'>
		           						<th></th>
		           						<th >
		           							<input type='text' value="<?php if(isset($_GET['s_name'])) echo $_GET['s_name'] ?>" onkeyup="search(event);" id='s_stock_name' class='form-control input-sm'/>
		           						</th>	
		           						<th>
		           							<div class='input-group new_ex' id='datetimepicker'>
											    <input value="<?php if(isset($_GET['s_name'])) echo $_GET['s_date'] ?>" type='text' class='form-control input-sm s_date' name='s_date'/>
											    <span class='input-group-addon'><span class='glyphicon glyphicon-calendar'>
											</div>		
		           						</th>
		           						<th>
		           							<div class='input-group new_ex' id='datetimepicker'>
											    <input value="<?php if(isset($_GET['s_name'])) echo $_GET['e_date'] ?>" type='text' class='form-control input-sm end_date' name='end_date'/>
											    <span class='input-group-addon'><span class='glyphicon glyphicon-calendar'>
											</div>	
		           						</th>
		           						<th>
		           							<button type="button" onClick='search(event);' class="btn btn-default btn-sm">
											  	<span class="glyphicon glyphicon-search"  aria-hidden="true"></span> Search
											</button>	
		           						</th>
		           						<th></th>
		           						<th  width='150'></th>
		           						<th width='120'></th>
		           				</thead>	
		           				<tbody class='listbody'>
		           					<?php echo $tr ?>
		           					<tr class='remove_tag'>
										<td colspan='12' id='pgt'>
											<div style='margin-top:20px; width:11%; float:left;'>
											Display : <select id="sort_num"  onchange='search(event);' style='padding:5px; margin-right:0px;'>
															<?php
															$num=10;
															if(isset($_GET['s_num']))
																$s_num=$_GET['s_num'];
															else{
																$s_num=30;
															}
															for($i=0;$i<20;$i++){?>
																<option value="<?php echo $num ;?>" <?php if($num==$s_num) echo 'selected';?> ><?php echo $num;?></option>
																<?php $num+=10;
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
		           				</tbody>
		           			</table>
						</div>  
					</div>
	      		</div>
	      	</div>	      	
	      </div> 
	    </div>
   </div>
</div>
<div class="modal fade bs-example-modal-lg" id="exporttap" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="wrapper">
				<div class="clearfix" id="main_content_outer">
				    <div id="main_content">
					    <div class="result_info">
					    	<div class="col-sm-6">
					      		<strong>Choose Column To Export</strong>
					      	</div>
					      	<div class="col-sm-6" style="text-align: center">
					      		<strong>
					      			<center class='visit_error' style='color:red;'></center>
					      		</strong>	
					      	</div>
					    </div>
					      	<form enctype="multipart/form-data" name="frmvisit" id="frmvisit" method="POST">
						        <div class="row">
									<div class="col-sm-12">
							            	<div class="panel-body">
							            		<div class='table-responsive'>
										               <table class='table'>
										               		<thead >
										               			<?php
										               			foreach($thead as $th=>$val){
										               				if($th!='Action')
											           					echo "<th>".$th."</th>";	
											           			}?>
										               		</thead>
										               		<tbody >
										               			<?php
										               			foreach($thead as $th=>$val){
										               				if($th!='Action')
											           					echo "<td align='center'><input type='checkbox' checked class='colch' rel='".$val."'></td>";	
											           			}?>
										               		</tbody>
										               </table>
											   </div>
								            </div>
								    </div> 
								</div>
					      </form>
					</div> 
			    </div>
			</div> 
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" id='btnprint' class="btn btn-primary">Print</button>
                <button type="button" id='btnexport' class="btn btn-primary">Export</button>
            </div>
        </div>                       <!-- /.modal-content -->
    </div>
 </div>
  <!--++++++++++++++++++++++++++++++++++++++++++++++End Form add Member+++++++++++++++++++++++++++++++++++++++++++++++++++ -->
<div class="modal fade" id="addmedicine" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="wrapper">
				<div class="clearfix" id="main_content_outer">
				    <div id="main_content">
					    <div class="result_info">
					    	<div class="col-sm-6">
					      		<strong>Medicine Infomation</strong>
					      	</div>
					      	<div class="col-sm-6" style="text-align: center">
					      		<strong>
					      			<center class='openstock_error' style='color:red;'></center>
					      		</strong>	
					      	</div>
					    </div>
					      	<form enctype="multipart/form-data" action="<?php echo site_url("stock/openstock/save?m=$m&p=$p"); ?>" name="frmmedicine" id="frmmedicine" method="POST">
						        <div class="row">
									<div class="col-sm-12">
										<div class="panel-body">
											<div class="form_sep">
							            	  	<input type='text' class='hide' name='txttran' id='txttran'/>
							            	</div>
								            <div class="form_sep">
								                <label class="req" for="student_num">Category</label>
			                 					<select data-required="true"   data-parsley-required-message="Select Medicine Category" minlength='1' class="form-control parsley-validated" name="medicine_category" id="medicine_category" >
								                   <option value="">Select Category</option>
								                   <?php 
								                   	foreach ($this->openstocks->getmidicat() as $row) {
								                   		echo "<option value='$row->categoryid'>$row->description</option>";
								                   	}
								                   ?>
					                  			</select>
							                </div>
							                <div class="form_sep">
								                <label class="req" for="student_num">Wharehouse</label>
			                 					<select data-required="true"   data-parsley-required-message="Select Medicine Category" minlength='1' class="form-control parsley-validated" name="whcode" id="whcode" >
								                  <!--  <option value="">Select Where House</option> -->
								                   <?php 
								                   	foreach ($this->db->get('sch_stock_wharehouse')->result() as $rows) {
								                   		echo "<option value='$rows->whcode'>$rows->wharehouse</option>";
								                   	}
								                   ?>
					                  			</select>
							                </div>
							                <div class="form_sep">
							                  <label class="req" for="student_num">Stock Name</label>
							                  <input type="text" data-required="true" value="" class="form-control parsley-validated" name="a_medicine" value="" id="a_medicine">
							            	  <input type='text' class='hide' name='medicine' id='medicine'/>
							            	</div>
							            	 <div class="form_sep">
							                  <label class="req" for="student_num">Referance no</label>
							                  <input type="text" data-required="true" onblur="checkrefno(event);" required data-parsley-required-message="Enter referance" value="" class="form-control parsley-validated" name="ref_no" value="" id="ref_no">
							            	 <div class="form_sep">
							                  <label for="reg_input_logo">Upload Photo</label>
							                  <input type="file" class=""  name="file" id="file">
							                </div> 
							            	</div>
								    		<div class="form_sep">
								                <div class='table-responsive'>
								                   	<table class='table'>
								                   		<thead>
								                   			<th>Stock Name</th>
								                   			<th>Expired Date</th>
								                   			<th width='150'>New Expired Date</th>
								                   			<th>Qty</th>
								                   			<th>Qty on hand</th>
								                   			<th>UOM</th>
								                   			<th>Delete</th>
								                   		</thead>
								                   		<tbody id='lisexpire'>
								                   			
								                   		</tbody>
								                   	</table>
								                </div>	
								            </div>
							            </div>	
								    </div> 
								</div>
					      </form>
					</div> 
			    </div>
			</div> 
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" id='btnsave' class="btn btn-primary">Save</button>
            </div>
        </div>                       <!-- /.modal-content -->
    </div>                    <!-- /.modal-dialog -->
</div>  
<script type="text/javascript">
	
	$(function(){
		$("#a_medicine").focus(function(){
			autofillmedicine();
		});
		$("#frmmedicine").parsley();
		$(".new_date,.s_date,.end_date").datepicker({
      		language: 'en',
      		pick12HourFormat: true,
      		format:'dd-mm-yyyy'
    	});
	});
	function edit(event){
		var type=$(event.target).attr('type');
		var transno=$(event.target).attr('tran');
		var ref_no=$(event.target).attr('ref_no');
		$('#frmmedicine')[0].reset();
		$('#addmedicine').modal('show');
		$.ajax({
                url:"<?php echo base_url(); ?>index.php/stock/openstock/edit",    
                data: {'type':type,'transno':transno},
                type:"post",
                success: function(data){
                	$('#txttran').val(transno);
                	$('#ref_no').val(ref_no);
                	$('#lisexpire').html(data);
                	getlastmodi(transno);
                	$(".new_date").datepicker({
			      		language: 'en',
			      		pick12HourFormat: true,
			      		format:'dd-mm-yyyy'
			    	});
            }
        });

	}
	function getlastmodi(transno){
		$.ajax({
                url:"<?php echo base_url(); ?>index.php/stock/openstock/getlastmodi",    
                data: {'transno':transno},
                type:"post",
                success: function(data){
                $('.openstock_error').html(data);	
            }
        });
	}
	function deletes(event){
		var transno=$(event.target).attr('tran');
		var r = confirm("Are you sure to delete this item !");
			if (r == true) {
				location.href="<?PHP echo site_url('stock/openstock/delete');?>/"+transno+"?<?php echo "m=$m&p=$p" ?>";		
			}
	}
	function view_image(event){
		var refno=$(event.target).attr('rel');
		window.open("<?PHP echo site_url('stock/openstock/view_image');?>/"+refno,'_blank');
	}
	function checkrefno(event){
		var refno=$(event.target).val();
		$.ajax({
                url:"<?php echo base_url(); ?>index.php/stock/openstock/getrefno",    
                data: {'refno':refno},
                type:"post",
                success: function(data){
                	if(data>0){
                		$("#ref_no").val('');
                		$('.openstock_error').html('Referance No: '+refno+' is already Exist Please input again..!');
                	}else{
                		$('.openstock_error').html('');
                	}
	            }
	        });

	}
	function removerow(event){
		var transno=$(event.target).attr('tran');
		var r = confirm("Are you sure to delete this item !");
			if (r == true) {
				var row_class=$(event.target).closest('tr').remove();
			}
	}
	$(".btnaddmidi").click(function(){
		$('#frmmedicine')[0].reset();
		$('#lisexpire').html('');
	})
	$('#btnsave').click(function(){
		var countitem=$('.addstockid').length;
		if(countitem>0){
			$("#frmmedicine").submit();
		}else{
			$('.openstock_error').html('Please Select an items');
		}
	})
	function getexpiredinfo(event){
		var expire_date=$(event.target).val();
		var stockid=$(event.target).closest('tr').find('.addstockid').val();
		if(expire_date=='new'){
			$(event.target).closest('tr').find('.new_ex').removeClass('hide');
			$(event.target).closest('tr').find('#s_qty').text('');
		}else{
			$(event.target).closest('tr').find('.new_ex').addClass('hide');
			$.ajax({
                url:"<?php echo base_url(); ?>index.php/stock/openstock/getexpiredinfo",    
                data: {'stockid':stockid,'ex_date':expire_date},
                type:"post",
                dataType:"json",
                async:false,
                success: function(data){
                	$(event.target).closest('tr').find('#s_qty').text(data.quantity);
	            }
	        });
		}
	}
	$('.colch').click(function(){
			if($(this).is(':checked')){
				var col=$(this).attr('rel');
				$('.'+col).removeClass(' remove_tag');
			}else{
				var col=$(this).attr('rel');
				$('.'+col).addClass(' remove_tag');
			}
		})
	function autofillmedicine(){	
		var cat_id=$('#medicine_category').val();
		var whcode=$('#whcode').val();
		if(cat_id=='')
			cat_id=0;
		// alert(cat_id);
		var fillmedicine="<?php echo site_url('health/threatment/fillmedicine/"+cat_id+"')?>";
    	$("#a_medicine").autocomplete({
				source: fillmedicine,
				minLength:0,
				select: function( events, ui ) {
				var stockid=ui.item.id;
				$('#medicine').val(stockid);
					getexpiredate(stockid,whcode);
				}			
			});
	}
	
	function getexpiredate(medi_id,whcode){
		$.ajax({
                url:"<?php echo base_url(); ?>index.php/stock/openstock/getexpire",    
                data: {'stockid':medi_id,'whcode':whcode},
                type:"post",
                success: function(data){
                	$('#lisexpire').append(data);
                	$('.addexpired_date').each(function(){
                		if($(this).val()=='new')
                			$(this).closest('tr').find('.new_ex').removeClass('hide');
                	})
        			$(".new_date").datepicker({
			      		language: 'en',
			      		pick12HourFormat: true,
			      		format:'dd-mm-yyyy'
			    	});
            }
        });
	}
	function search(event){
		var s_name=$('#s_stock_name').val();
		var start_date=$('.s_date').val();
		var end_date=$('.end_date').val();
		var s_num=$('#sort_num').val();
		var roleid=<?php echo $this->session->userdata('roleid');?>;
		var m=<?php echo $m;?>;
		var p=<?php echo $p;?>;
		$.ajax({
                url:"<?php echo base_url(); ?>index.php/stock/openstock/search",    
                data: {'s_name':s_name,
            			'start_date':start_date,
            			'end_date':end_date,
            			'roleid':roleid,
            			'm':m,
            			'p':p,
            			's_num':s_num},
                type:"post",
                success: function(data){
                	$('.listbody').html(data);
                	
            }
        });
	}
	$('#export').click(function(){
		$('#exporttap').modal('show');
		$('#btnprint').hide();
		$('#btnexport').show();
	})
	$('#print').click(function(){
		$('#exporttap').modal('show');
		$('#btnprint').show();
		$('#btnexport').hide();
	})
	function gsPrint(emp_title,data){
		 var element = "<div>"+data+"</div>";
		 $("<center><p style='padding-top:15px;text-align:center;'><b>"+emp_title+"</b></p><hr>"+element+"</center>").printArea({
		  mode:"popup",  //printable window is either iframe or browser popup              
		  popHt: 600 ,  // popup window height
		  popWd: 500,  // popup window width
		  popX: 0 ,  // popup window screen X position
		  popY: 0 , //popup window screen Y position
		  popTitle:"test", // popup window title element
		  popClose: false,  // popup window close after printing
		  strict: false 
		  });
	}
	$(function(){			
			$("#btnprint").on("click",function(){
					var htmlToPrint = '' +
					        '<style type="text/css">' +
					        'table th, table td {' +
					        'border:1px solid #000 !important;' +
					        'padding;0.5em;' +
					        '}' +
					        'table th{border-top:1px solid #000 !important;}'+
					        '</style>';
					var title="<div style='width:300px; text-align:left;'><span style='font-weight:bold; font-size:16px;'><?php echo $school_name; ?></span><br>";
					var s_adr="<?php echo $school_adr; ?></div>";
						title+=s_adr;
						title +="<h4 align='center'>"+ $("#title").text()+"</h4>";
				   	var data = $("#tab_print").html().replace(/<img[^>]*>/gi,"");
				   	var export_data = $("<center>"+data+"</center>").clone().find(".remove_tag").remove().end().html();
				   		export_data+=htmlToPrint;
				   	gsPrint(title,export_data);
			});
			$("#btnexport").on("click",function(e){
				var title="<div style='width:300px; text-align:left;'><span style='font-weight:bold; font-size:16px;'><?php echo $school_name; ?></span><br>";
					var s_adr="<?php echo $school_adr; ?></div>";
						title+=s_adr;
						title +="<h4 align='center'>"+ $("#title").text()+"</h4>";
					
				var data=$('.table').attr('border',1);
					data = $("#tab_print").html().replace(/<img[^>]*>/gi,"");
	  		 var export_data = $("<center><h3 align='center'>"+title+"</h3>"+data+"</center>").clone().find(".remove_tag").remove().end().html();
				window.open('data:application/vnd.ms-excel,' + encodeURIComponent(export_data));
		    e.preventDefault();
		    $('.table').attr('border',0);
			});
	})
	function preview(event){
		var type=$(event.target).attr('type');
		var transno=$(event.target).attr('tran');
		window.open("<?PHP echo site_url('stock/openstock/preview');?>/"+transno,'_blank');
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
