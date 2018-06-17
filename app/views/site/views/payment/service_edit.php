
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
			<form id="contract_register" method="POST" enctype="multipart/form-data"  action="<?php echo site_url("payment/service/save?&save=edit")?>">
	     		<div class="row">
	     			<div class="col-sm-12">
	     				<div class="panel panel-default">
	     					<div class="panel-heading">
	     						<h4 class="panel-title">Service Detail
									

	     						</h4>
	     					</div>
	     					<div class="panel-body">
	     						<div class="row">
	     						<input type="text" class="hide" name="serid" value="<?php echo $ser_row['service_id'];?>" id="serid">
	     							<div class="col-xs-4 col-sm-offset-2">
	     							
	     								<div class="form_sep">
			     							<label>Service Name</label>
			     							<input type="text" name="service_name" value="<?php echo $ser_row['service_name'];?>" id="service_name" class="form-control" data-required="true" required data-parsley-required-message="Enter Serive Name">
			     							<input type="hidden" name="contr_code_hidden" id="contr_code_hidden" value="">
			     						</div>

			     						<div class="form_sep">
			     							<label>Cost</label>
			     							<input type="text" name="cost" value="<?php echo $ser_row['cost'];?>" id="cost" class="form-control" data-required="true" required data-parsley-required-message="Enter Cost">
			     							<input type="hidden" name="contr_code_hidden" id="contr_code_hidden" value="">
			     						</div>
			     						<div class="form_sep">
			     							<label>Price</label>
			     							<input type="float" name="price" value="<?php echo $ser_row['price'];?>" id="price" class="form-control" data-required="true" required data-parsley-required-message="Enter Price">
			     							<input type="hidden" name="contr_code_hidden" id="contr_code_hidden" value="">
			     						</div>
			     						<div class="form_sep">
							                  <div class="checkbox">
							                    <label>
							                  	  <?php 
							                  	  	if($ser_row['use_quantity'] == 1)
							                  	  	{
							                  	  		$checked = "checked";
							                  	  	}else{
							                  	  		$checked = "";
							                  	  	}

							                  	  ?>
							                      <input <?php echo $checked ?> type="checkbox" value="1" name='use_quantity' id='use_quantity'>Check For Quantity of Used
							                    </label>  
							                  </div>                  
							            </div> 
							            <div class="form_sep">
							                  <div class="checkbox">
							                    <label>
							                  	  <?php 
							                  	  	if($ser_row['price_by_term'] == 1)
							                  	  	{
							                  	  		$checked = "checked";
							                  	  	}else{
							                  	  		$checked = "";
							                  	  	}

							                  	  ?>
							                      <input <?php echo $checked ?> type="checkbox" value="1" name='pricebyterm' id='pricebyterm'>Price By Term
							                    </label>  
							                  </div>                  
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
	
	
	// function autoEmpId(){		
	// 	var fillrespon="<?php echo site_url("employee/contract/autoCEmpId")?>";
 //    	$(".empcode").autocomplete({
	// 			source: fillrespon,
	// 			minLength:0,
	// 			focus: function (event, ui) {
	// 		        $("#empcode").val(ui.item.label);
	// 		        return false;
	// 		    },
	// 		    select: function (event, ui) {
	// 		        $("#empcode").val(ui.item.label);
	// 		        $("#empid").val(ui.item.value);
	// 		        $("#contractid").val(ui.item.ecode);
	// 		        //alert($("#empid").val());
	// 		        return false;
	// 		    }						
	// 		});
	// }
</script>