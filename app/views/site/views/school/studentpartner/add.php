<!-- <div id='msg' style='color:white; background-color:#286090;height:30px;  text-align:center'></div> -->
<div class="wrapper">
  <div class="clearfix" id="main_content_outer">
    <div id="main_content">
      
       <div class="result_info">
        <div class="col-sm-6">
          <strong>New Partner</strong>  
        </div>
        <div class="col-sm-6" style="text-align: right">
          <strong>

          </strong> 
          <!-- Block message -->
            <?php if(isset($exist)) echo $exist ?>
            <?PHP if(isset($_GET['save'])){
               echo "<p>Your data has been saved successfully...!</p>";
              }else if(isset($_GET['edit'])){
                  echo "<p>Your data has been updated successfully...!</p>";
              }else if(isset($_GET['delete'])){
                  echo "<p style='color:red'>Your data has been deleted successfully...!</p>";
              }
            ?>
          <!-- End block message -->
        </div> 
      </div> 
      <?php
          $m='';
          $p='';
          if(isset($_GET['m'])){
              $m=$_GET['m'];
          }
          if(isset($_GET['p'])){
              $p=$_GET['p'];
        }
      ?>
      <form method="post" accept-charset="utf-8" action="<?php echo site_url("school/studentpartner/saves?m=$m&p=$p"); ?>" class="tdrow" id="fschyear">
        <div class="row">          
       
           <div class="col-sm-6">           
              <div class="panel-body">
                  <div class="form_sep">
                    <label class="req" for="cboschool">Company Name<span style="color:red">*</span></label>
                    <input type="text" name="txtcname" id="txtcname" class="form-control" required data-parsley-required-message="Enter Company name" />
                  </div>
                  <div class="form_sep">
                    <label class="req" for="cboschool">Contact Person</label>
                    <input type="text" name="txtcperson" id="txtcperson" class="form-control" />
                  </div> 
                   <div class="form_sep">
                    <label class="req" for="cboschool">Business Type</label>
                    <input type="text" name="txtbtype" id="txtbtype" class="form-control" />
                  </div>
                  <div class="form_sep">
                    <label class="req" for="cboschool">Partner Since</label>
                    <div class='input-group date' id='datetimepicker'>
                     <input type='text' name="txtpdate" id="txtpdate" class="form-control" />
                     <span class="input-group-addon"><span class="glyphicon glyphicon-calendar">
                    </div>
                  </div>                 
              </div>
            </div>
            
            <div class="col-sm-6">
              <div class="panel-body">
                <div class="form_sep">
                    <label class="req" for="cboschool">Telephone</label>
                    <input type="text" name="txttel" id="txttel" class="form-control" onkeypress="return isNumberKey(event)" />
                  </div> 
                  <div class="form_sep">
                    <label class="req" for="cboschool">Email</label>
                    <input type="text" name="txtemail" id="txtemail" class="form-control" data-parsley-type="email" />
                  </div>
                  <div class="form_sep">
                    <label class="req" for="cboschool">Website</label>
                    <input type="text" name="txtwebsite" id="txtwebsite" class="form-control" />
                  </div>                               
                <div class="form_sep">
                    <label class="req" for="cboschool">Address</label>
                    <textarea name="txtaddress" id="txtaddress" style="height:50px;border-radius:4px; resize:none;" class="form-control"></textarea>
                  </div>                
              </div> 
          </div>  
             
        </div>
        
        <div class="row">
          <div class="col-sm-12">
            
            <div class="panel-body">
                <div class="form_sep">
                  <?php if($this->green->gAction("C")){ ?>
                  <input type="submit" name="btnsaves" id='btnsaves' value="Save" class="btn btn-primary" />
                  <?php } ?>
                  <input type="button" name="btncancel" id='btncancel' value="Cancel" class="btn btn-warning" />
                </div>                               
            </div>
            
          </div>
        </div>
        
       </form>         
    </div>
    
 </div>  
</div>
<style>
   .tdrow tr,.tdrow th,.tdrow td{
    border: none !important; 
   }
   .red{color:red ;}
</style>

<script type="text/javascript">  
function isNumberKey(evt){
    var e = window.event || evt; // for trans-browser compatibility 
    var charCode = e.which || e.keyCode; 
    if ((charCode > 47 && charCode < 58 ) || charCode == 8 || charCode==37 || charCode==39 || charCode==46){ 
        return true; 
    } 
    return false;  
}

$(function() {
 
  $('#txtpdate').datepicker({format: 'dd-mm-yyyy'});
  // $('#txtpdate').datepicker({format: 'yyyy-mm-dd'});

  $('#fschyear').parsley();

$("#btncancel").click(function(){
    var r = confirm("Do you want to cancel?");
        if (r == true) {
            location.href=("<?php echo site_url('school/studentpartner/?m='.$m.'&p='.$p.'');?>");  
        } else {
            
        }
});
});

</script>