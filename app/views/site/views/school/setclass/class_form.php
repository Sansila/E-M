
<div class="wrapper">
	<div class="clearfix" id="main_content_outer">
	    <div id="main_content">
	      <div class="row result_info">
	      	<div class="col-xs-6">
		      	<strong>Class Information</strong>
		    </div>
		    <div class="col-xs-6" style="text-align: right">
		      		      		
		    </div>
	      </div>
	      	<!---Start form-->
			<form id="contract_register" method="POST" enctype="multipart/form-data"  action="<?php echo site_url("school/classe/save")?>">
	     		<div class="row">
	     			<div class="col-sm-12 ">
	     				<div class="panel panel-default">
	     					<div class="panel-heading">
	     						<h4 class="panel-title">Setup Class</h4>
	     					</div>
	     					<div class="panel-body">
	     						<div class="row">
	     					<input type="text" name="classid" value="<?php if (isset($all->classid)) echo $all->classid;?>" style="display: none;">
	     							<div class="col-xs-5 col-sm-offset-2">
	     							
	     								<div class="form_sep">
			     							<label>Grade Level </label>
			     								<select name="grade_levelid" id="grade_levelid" class="form-control" data-required="true" required data-parsley-required-message="Please Select Level">
			     							<?php 
			     							foreach ($glvl as $vg) {	
			     							if($vg->grade_levelid == $all->grade_levelid)
			     								{
			     									$selected1 = "selected";
			     								}else{
			     									$selected1 = "";

			     								}	     		     					
			     							?>
			     							<option <?php echo $selected1 ;?> value="<?php echo $vg->grade_levelid ?>"><?php echo $vg->grade_level; ?></option>
			     							<?php }?>
			     							</select>
			     						</div>

			     						<div class="form_sep">
			     							<label>Grade Label</label>
			     							<select name="grade_levellbid" id="grade_levellbid" class="form-control" data-required="true" required data-parsley-required-message="Please Select Level">
			     							<?php 
			     							foreach ($glb as $gb) {	
			     							if($gb->grade_labelid == $all->grade_labelid)
			     								{
			     									$selected = "selected";
			     								}else{
			     									$selected = "";

			     								}	     		     					
			     							?>
			     							<option <?php echo $selected ;?> value="<?php echo $gb->grade_labelid ?>"><?php echo $gb->grade_label; ?></option>
			     							<?php }?>
			     							</select>
			     						</div>
			     						<div class="form_sep">
			     							<label>Class Name</label>
			     							<input type="float" name="cname" value="<?php echo $all->class_name ;?>" id="cname" class="form-control" data-required="true" required data-parsley-required-message="Enter Price">
			     							<input type="hidden" name="contr_code_hidden" id="contr_code_hidden" value="">
			     						</div>

			     						<div class="form-group">
							                  <div class="checkbox">
							                    <label>
							                    <?php 
							                    	if($all->full_day == 1)
			     								{
			     									$checked1 = "checked";
			     								}else{
			     									$checked1 = "";

			     								}
							                    ?>
							                      <input <?php echo $checked1 ;?> type="checkbox" value="1" name='fullday' class='fullday' id='fullday'> Full Day  
							                    </label>  
							                  </div>       

							             </div> 
							             <div class="form-group">
							                  <div class="checkbox">
							                    <label>
							                    <?php 
							                    	if($all->full_time == 1)
			     								{
			     									$checked = "checked";
			     								}else{
			     									$checked = "";

			     								}
							                    ?>
							                      <input <?php echo $checked ;?> type="checkbox" value="1" name='fulltime' class='fulltime' id='fulltime'> Full time  
							                    </label>  
							                  </div>       

							             </div> 
							            
							           	  <div class="form_sep">
							                  <div class="checkbox">
							                    <label>
							                    <?php 
							                    	if($all->part_time == 1)
			     								{
			     									$checked2 = "checked";
			     								}else{
			     									$checked2 = "";

			     								}
							                    ?>
							                      <input <?php echo $checked2 ;?> type="checkbox" value="1" name='parttime' id='parttime' class='parttime'> Part Time 
							                    </label>  
							                  </div>                  
							            </div>

			     					</div>

			     						
			     					</div>
			     						
			     						
	     							</div>
	     							
	     						</div>
	     						<div class="row">
	     							<div class="col-xs-12  col-sm-offset-2">
	     								<input type="submit" value="Save" class="btn btn-success btnsave"></input>
	     								
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
    $('.fullday').change(function(){
    	$('.btnsave').attr('disabled',false);
    });
    $('.fulltime').change(function(){
    	$('.btnsave').attr('disabled',false);
    });
    $('.parttime').change(function(){
    	$('.btnsave').attr('disabled',false);
    });

	if (!$('input.fullday').is(':checked')) {

		$('.btnsave').attr('disabled',true);
	}

	var cname=$('#cname').val();
	if(cname == ""){
		$('input.fullday').attr('disabled',true);
		$('input.fulltime').attr('disabled',true);
		$('input.parttime').attr('disabled',true);
		//alert('hello');
	}



    $('#grade_levellbid').change(function(){
   		
    	var a = $('#grade_levellbid option:selected').text();
    	var b = $('#grade_levelid option:selected').text();
    
       $("#cname").val(b+a);
       $('input.fullday').attr('disabled',false);
       $('input.fulltime').attr('disabled',false);
		$('input.parttime').attr('disabled',false);
     }); 
   
   });
   $(function(){
    $('#grade_levelid').change(function(){
   		
    	var a = $('#grade_levellbid option:selected').text();
    	var b = $('#grade_levelid option:selected').text();
    
       $("#cname").val(b+a);
       $('input.fullday').attr('disabled',false);
       $('input.fulltime').attr('disabled',false);
		$('input.parttime').attr('disabled',false);
     }); 
   
   });
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

		$("#grade_levelid").select("change",function(){
				$("#cname").val($(this).text());
			
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