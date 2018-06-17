
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
			<form id="contract_register" method="POST" enctype="multipart/form-data"  action="<?php echo site_url("library/book/save?&save=edit")?>">
	     		<div class="row">
	     			<div class="col-sm-12">
	     				<div class="panel panel-default">
	     					<div class="panel-heading">
	     						<h4 class="panel-title">Service Detail
									<label style="float:right !important; font-size:11px !important; color:red;"><?php if($ser_row['last_modified_by']!='') echo "Last Modified Date: ".date_format(date_create($ser_row['last_modified_date']),'d-m-Y H:i:s')." By : $ser_row[last_modified_by]"; ?></label>	

	     						</h4>
	     					</div>
	     					<div class="panel-body">
	     						<div class="row">
	     						<input type="text" class="hide" name="serid" value="<?php echo $ser_row['book_id'];?>" id="serid">
	     							<div class="col-xs-4 col-sm-offset-2">
	     							
	     								<div class="form_sep">
			     							<label>Service Name</label>
			     							<input type="text" name="name" value="<?php echo $ser_row['name'];?>" id="name" class="form-control" data-required="true" required data-parsley-required-message="Enter Serive Name">
			     							<input type="hidden" name="contr_code_hidden" id="contr_code_hidden" value="">
			     						</div>

			     						<div class="form_sep">
			     							<label>Quantity</label>
			     							<input type="text" name="quantity" value="<?php echo $ser_row['quantity'];?>" id="quantity" class="form-control" data-required="true" required data-parsley-required-message="Enter Quantity">
			     							<input type="hidden" name="contr_code_hidden" id="contr_code_hidden" value="">
			     						</div>
			     						<div class="form_sep">
			     							<label>Price</label>
			     							<input type="float" name="price" value="<?php echo $ser_row['price'];?>" id="price" class="form-control" data-required="true" required data-parsley-required-message="Enter Price">
			     							<input type="hidden" name="contr_code_hidden" id="contr_code_hidden" value="">
			     						</div>
			     						<div class="form_sep">
			     							<label>Edition</label>
			     							<textarea class="form-control" name="edition" id="edition" class="form-control" data-required="true" required data-parsley-required-message="Enter Edition"><?php echo $ser_row['edition'];?></textarea>
			     						</div>
			     						
	     							</div>
	     							<div class="col-xs-4">
	     								<div class="form_sep">
			     							<label>Author</label>
			     							<textarea class="form-control" name="author" id="author" class="form-control" data-required="true" required data-parsley-required-message="Enter Author"><?php echo $ser_row['author'];?></textarea>
			     						</div>
	     								<div class="form_sep">
			     							<label>Author2</label>
			     							<textarea class="form-control" name="author2" id="author2"><?php echo $ser_row['author2'];?></textarea>
			     						</div>
			     						<div class="form_sep">
			     							<label>Description</label>
			     							<textarea class="form-control" name="desc" id="desc"><?php echo $ser_row['desc'];?></textarea>
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