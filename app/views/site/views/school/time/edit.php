<div class="wrapper">
    <div class="clearfix" id="main_content_outer">
    <div id="main_content">
      
       <div class="result_info">
        <div class="col-sm-6">
            <strong>Setup Time</strong>  
        </div>
        <div class="col-sm-6" style="text-align: right">
            <strong>
                       
            </strong>
            <!-- block messate -->
            <?php if(isset($exist)) echo $exist ?>
            <p id='exist'></p>
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
      <form method="post" accept-charset="utf-8" action="<?php echo site_url("school/time/updates?m=$m&p=$p"); ?>" class="tdrow" id="fschyear">
            <input type="text" style="display:none;" name="txttimeid" id='txttimeid' value="<?php echo $query->timeid;?>"/>
        <div class="row">          
       
           <div class="col-sm-6">           
                <div class="panel-body">
                    <div class="form_sep">
                    <label class="req" for="cboschool">Name<span style="color:red">*</span></label>
                    <select class="form-control" id='cboschool' name='cboschool' min=1 required data-parsley-required-message="Choose To date">
                        <option>Select School</option>
                            <?php
                            foreach ($this->times->getschool() as $row) {?>
                                <option value='<?php echo $row->schoolid; ?>' <?php if($row->schoolid==$query->schoolid) echo "selected";?>><?php echo $row->name;?></option>
                            <?php }
                           ?>
                      </select>
                  </div> 
                  <div class="form_sep">
                  <label class="req" for="student_num">From time<span style="color:red">*</span></label>
                  <div class='input-group date'>
                     <input type='text' name="txtfromtime" id="txtfromtime" class="form-control" maxlength="8" onKeyUp="durationcalculate();" onkeypress='return isNumberKey(event);' required data-parsley-required-message="Choose From time" value="<?php echo $query->from_time?>"/>
                     <span class="input-group-addon"><span class="glyphicon glyphicon-calendar">
              </div>  
                </div>                
                <div class="form_sep">
                  <label class="req" for="classid">To time<span style="color:red">*</span></label>
                  <div class='input-group date'>
                     <input type='text' name="txttotime" id="txttotime" class="form-control" maxlength="8" onKeyUp="durationcalculate();" onkeypress='return isNumberKey(event);' required data-parsley-required-message="Choose To time" value="<?php echo $query->to_time;?>" />
                     <span class="input-group-addon"><span class="glyphicon glyphicon-calendar">
                  </div>
                </div>  
                <div class="form_sep">   
                    <label class="req" for="classid">AM/PM<span style="color:red">*</span></label>
                    <select class="form-control" id='cboampm'name='cboampm'>
                          <option value="AM">AM</option>
                          <option value="PM">PM</option>
                    </select> 
                </div> 
                </div>
            </div>
            
            <div class="col-sm-6">                          
              <div class="panel-body">            
              <div class="form_sep">
                    <label class="req" for="cboschool">Duration<span style="color:red">*</span></label>
                    <input type="text" readonly name="txtduration" id="txtduration" class="form-control" required data-parsley-required-message="Enter grade label" value="<?php echo $query->duration;?>" />
              </div>
              <div class="form_sep">
                    <label class="req" for="cboschool">Time relax</label>
                    <input type="text" name="txtrelax" id="txtrelax" class="form-control" value="<?php echo $query->minute_relax;?>"/>
                  </div>
                  <div class="form_sep">
                  <fieldset class="br_trans">
                      <label class="req" for="cboschool">Use for<span style="color:red">*</span></label>
                      </br>
                      <?php if ($query->for_tran_type==1) {
                              echo "<input type='radio' name='tran' id='transtudy' value='1' checked>Study&nbsp;&nbsp;";
                              echo "<input type='radio' name='tran' id='tranteach' value='2'>Teach&nbsp;&nbsp;";
                            // echo "<input type='radio' name='tran' id='tranoffwork' value='3'>Off work";
                            }else if ($query->for_tran_type==2) {
                              echo "<input type='radio' name='tran' id='transtudy' value='1'>Study&nbsp;&nbsp;";
                              echo "<input type='radio' name='tran' id='tranteach' value='2' checked>Working Hour&nbsp;&nbsp;";
                            //echo "<input type='radio' name='tran' id='tranoffwork' value='3'>Off work";
                            // }else if ($query->for_tran_type==3) {
                            //   echo "<input type='radio' name='tran' id='transtudy' value='1'>Study&nbsp;&nbsp;";
                            //   echo "<input type='radio' name='tran' id='tranteach' value='2'>Teach&nbsp;&nbsp;";
                            //   echo "<input type='radio' name='tran' id='tranoffwork' value='3' checked>Off work&";
                            }  
                      ?>
                  </fieldset>
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
  .br_trans{
    border:1px solid #CCCCCC;
    padding: 5px;
    border-radius:5px;
    margin-top: 10px;
   }
</style>

<script type="text/javascript">
// --------- calculate time duration ----------
function durationcalculate() {
    a = $('#txtfromtime').val();
    b = $('#txttotime').val();
    p = "1/1/1970 ";

    difference = new Date(new Date(p+b) - new Date(p+a)).toUTCString().split(" ")[4];
    document.getElementById('txtduration').value = difference;
}
//---------- End Time Calculate ----------------

//----- Validate time picker ------------------
function isNumberKey(evt){
        var e = window.event || evt; // for trans-browser compatibility 
        var charCode = e.which || e.keyCode; 
        if ((charCode > 47 && charCode < 58 ) || charCode == 8 || String.fromCharCode(charCode) == ":" || charCode==37 || charCode==39 || charCode==46){ 
            return true; 
        } 
        return false;  
}
//----- End validate --------------------------

$(function() {
   //--------- parseley validation -----
    $('#fschyear').parsley();       
  });   
//---------- end of validation ----
    
$("#btncancel").click(function(){
    var r = confirm("Do you want to cancel?");
    if (r == true) {
      location.href=("<?php echo site_url('school/time/?m='.$m.'&p='.$p.'');?>");
    } else {
      
    } 
});
</script>