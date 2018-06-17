<?php
	$stuom=isset($stock['uom'])?$stock['uom']:"";	
	$categoryid=isset($stock['categoryid'])?$stock['categoryid']:"";
  $m='';
  $p='';
  if(isset($_GET['m'])){
      $m=$_GET['m'];
    }
    if(isset($_GET['p'])){
        $p=$_GET['p'];
    }
?>

<style type="text/css">
	table tbody tr td img{width: 20px; margin-right: 10px}
	ul,ol{
		margin-bottom: 0px !important;
	}
	a{
		cursor: pointer;
	}
	.datepicker {z-index: 9999;}
</style>
<div class="wrapper">
	<div class="clearfix" id="main_content_outer">
    <div id="main_content">
       <div class="result_info">
	      	<div class="col-sm-6">
	      		<strong>Stock Information</strong>	      		
	      	</div>
	      	<div class="col-sm-6" style="text-align: center">
	      		<strong>
	      			<center class='error' style='color:red;'><?php if(isset($error)) echo "$error"; ?></center>
	      		</strong>	
	      	</div>
		</div> 
      <div id="stdregister_div"></div>
      <!-- main content -->
       <form enctype="multipart/form-data" name="std_register" id="std_register" method="POST" action="<?php echo site_url("stock/stock/save?m=$m&p=$p")?>">
        
        <div class="row">
          <div class="col-xs-6">

            <div class="panel panel-default">                          
              <div class="panel-heading">
                <h4 class="panel-title">Stock Details
                      <label style="float:right !important; font-size:11px !important; color:red;"><?php if(isset($stock['modified_by'])) if($stock['modified_by']!='') echo "Last Modified Date: ".date_format(date_create($stock['modified_date']),'d-m-Y H:i:s')." By : $stock[modified_by]"; ?></label> 

                </h4>
              </div>
              <div class="panel-body">              	
              	<div class="form_sep">
                  <input type="text" style='display:none;' value='<?php echo (isset($stock['stockid'])?$stock['stockid']:""); ?>' id="stockid" name="stockid">
                </div> 

                <div class="form_sep">
                  <label class="req" for="classid">Category</label>
                  <select data-required="true" onchange="get_batch(this.value)" required data-parsley-required-message="Select Class" minlength='1' class="form-control parsley-validated" name="categoryid" id="categoryid">
                    <option value="">Select Category</option>
                    <?php
                      foreach ($this->stock->getCategory()->result() as $cate) {?>
                        <option value="<?php echo $cate->categoryid ;?>" <?php if($categoryid==$cate->categoryid) echo 'selected' ?>><?php echo $cate->description;?></option>
                      <?php }
                    ?>
                  </select>
                </div> 

                <div class="form_sep">
                  <label class="req" for="stockcode">Code</label>
                  <input type="text" data-required="true" onblur='' class="form-control parsley-validated" name="stockcode" value='<?php echo isset($stock['stockcode'])?$stock['stockcode']:""; ?>' id="stockcode">
                </div> 
                <div class="form_sep">
                  <label class="req" for="stockcode">Description(Eng)</label>
                  <input type="text" data-required="true" class="form-control parsley-validated" name="descr_eng" value='<?php echo isset($stock['descr_eng'])?$stock['descr_eng']:""; ?>' id="descr_eng">
                </div> 
                <div class="form_sep">
                  <label class="req" for="stockcode">Description(Kh)</label>
                  <input type="text" data-required="true" class="form-control parsley-validated" name="descr_kh" value='<?php echo isset($stock['descr_kh'])?$stock['descr_kh']:""; ?>' id="descr_kh">
                </div> 
                <div class="form_sep">
                  <label class="req" for="stockcode">Reorder Qty.</label>
                  <input type="text" data-required="true" onblur='' class="form-control parsley-validated" name="reorder_qty" value='<?php echo isset($stock['reorder_qty'])?$stock['reorder_qty']:""; ?>' id="reorder_qty">
                </div> 
                <div class="form_sep">
                  <label class="req" for="uom">Unit of measure</label>
                  <select data-required="true" required data-parsley-required-message="Select Class" class="form-control parsley-validated" name="uom" id="uom">
                    <option value="">Select Unit of measure</option>
                    <?php
                    foreach ($this->stock->getOpUOM()->result() as $uom) {?>
                		<option value="<?php echo $uom->uom ;?>" <?php if($stuom==$uom->uom) echo 'selected' ?>><?php echo $uom->desciption;?></option>
                	<?php }?>
                  </select>
                </div>
                <div class="form_sep">
                  <label class="req" for="is_active">
                  <input type="checkbox" class="" name="is_active" <?php echo isset($stock['is_active'])?($stock['is_active']=='1'?"checked":""):"" ?>  value='<?php echo isset($stock['is_active'])?$stock['is_active']:""; ?>' id="is_active"> Active</label>
                </div>                
                               
              </div>
            </div>
          </div>
          <div class="col-xs-6">  
            <div class="panel panel-default">                          
              <div class="panel-heading">
                <h4 class="panel-title">Stock Balance</h4>
              </div>
              <div class="form_sep table-responsive">
                <table class="table">
                    <thead>
                      <th>Expired Date</th>
                      <th>Qty Used</th>                      
                      <th>Qty in stock</th>
                      <th>UOM</th>
                    </thead>
                    <tbody>
                      <?php echo isset($tbody)?$tbody:"<tr><td colspan='4'>No record for this stock</td></tr>" ?>                      
                    </tbody>
                </table>
              </div> 
            </div>

          </div>      
        </div>        
        <div class="row">
          <div class="col-sm-5">
            <div class="form_sep">
              <button id="std_reg_submit" name="std_reg_submit" type="submit" class="btn btn-primary">Save</button>
              <button id="btnback" name="btnback" type="botton" class="btn btn-info">Cancel</button>
            </div>
          </div>
        </div>        
      </form>
    </div>
  </div>
</div>

<script type="text/javascript">
	
	

 	function isNumberKey(evt){
        var e = window.event || evt; // for trans-browser compatibility 
        var charCode = e.which || e.keyCode; 
        if ((charCode > 45 && charCode < 58) || charCode == 8){ 
            return true; 
        } 
        return false;  
        }    

	function fillusername(event){
		var f_name=$('#first_name').val();
		var l_name=$('#last_name').val();
		var username=f_name+'.'+l_name;
		
					$.ajax({
                            url:"<?php echo base_url(); ?>index.php/stock/stock/validateuser",    
                            data: {'username':username},
                            type:"post",
                            success: function(data){
                           if(data>0){
                           		$('#login_username').val(username+'1');
                           }else{
                           		$('#login_username').val(username);
                           }
                        }
                    });
	}
	
	function previewstudent(event){
        var year=$(event.target).attr('year');
        var yearid=$(event.target).attr('yearid');
        var student_id=jQuery(event.target).attr("rel");
        location.href="<?PHP echo site_url('stock/stock/preview');?>/"+student_id+"?yearid="+yearid;
  }
	$(function(){
		$('#std_register').parsley();
	
		$("#dob,.res_dob,.mem_dob").datepicker({
      		language: 'en',
      		pick12HourFormat: true,
      		format:'yyyy-mm-dd'
    	});

    $("#is_active").on("click",function(){      
      if($(this).prop("checked")==true){
        $(this).val(1);
      }else{
        if(window.confirm("Are you sure ! Do you want to set Inactive for this stock.")){
          $(this).val(0);
        }else{
          return false;
        }        
      }      
    })

    var old_stockcode=$("#stockcode").val();    
    $("#stockcode").on("change",function(){      
      var stockcode=$(this).val();
      if(old_stockcode!=stockcode){
        isDupRef('stockcode',stockcode,'stockcode','sch_stock',"<?php echo site_url('system/sys/dupcheck/')?>"); 
      }           
     
    }); 
    
    $("#btnback").on("click",function(){
      window.history.back();
    });

	});
	
	
	
	
</script>
	
		
	
