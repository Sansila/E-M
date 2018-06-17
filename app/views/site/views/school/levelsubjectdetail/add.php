<!-- <div id='msg' style='color:white; background-color:#286090;height:30px;  text-align:center'></div> -->
<style>
  .gradecls td{
    padding:0 10px;
  }
  .gradecls ul{display: none !important;}
</style>

<div class="wrapper">
  <div class="clearfix" id="main_content_outer">
    <div id="main_content">
      
       <div class="result_info">
        <div class="col-sm-6">
          <strong>Setup Level Subject Detail</strong>  
        </div>
        <div class="col-sm-6" style="text-align: right">
          <strong>
              <?php if(isset($error)) echo $error ?>
          </strong> 
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
      <form method="post" accept-charset="utf-8" action="<?php echo site_url("school/levelsubjectdetail/saves?m=$m&p=$p"); ?>" class="tdrow" id="fschyear">
        <div class="row">          
       
           <div class="col-sm-6">           
              <div class="panel-body">
                  <div class="form_sep">
                    <label class="req" for="cboschool">School<span style="color:red">*</span></label>
                    <select class="form-control" id='cboschool' name='cboschool' min=1 required data-parsley-required-message="Select any school">
                        <option value='0'>Select School</option>
                        <?php foreach ($this->levelsubjectdetails->getschool() as $schoolrow) { ?>
                           <option value='<?php echo $schoolrow->schoolid; ?>' <?php if($schoolrow->schoolid==$this->session->userdata('schoolid')) echo "selected";?> > <?php echo $schoolrow->name;?></option>
                        <?php } ?>
                    </select>
                  </div> 

                  <div class="form_sep">
                    <label class="req" for="cboschool">Year<span style="color:red">*</span></label>
                    <!--<input type="text" name="txtyear" id="txtyear" class="form-control" maxlength="4" onkeypress='return isNumberKey(event);' required data-parsley-required-message="Enter year" />-->
                    <select class="form-control" id='cboyear'name='cboyear' min=1 required data-parsley-required-message="Select any school">
                        <option value='0'>Select year</option>
                       <?php foreach ($this->levelsubjectdetails->getschoolyear() as $row) { ?>
                           <option value='<?php echo $row->yearid; ?>' <?php if($row->yearid==$this->session->userdata('year')) echo "selected";?> > <?php echo $row->sch_year;?></option>
                       <?php } ?>
                    </select>
                  </div>

                  <div class="form_sep">
                    <label class="req" for="cboschool">Subject<span style="color:red">*</span></label>
                    <select class="form-control" id='cbosubject'name='cbosubject' min=1 required data-parsley-required-message="Select any school">
                        <option value='0'>Select Subject</option>
                        <?php
                        foreach ($this->db->get('sch_subject_type')->result() as $sj_type) {
                          echo "<option disabled value='$sj_type->subj_type_id'>$sj_type->subject_type</option>";
                           foreach($this->levelsubjectdetails->getsubjects($sj_type->subj_type_id) as $row1){
                              echo "<option value='$row1->subjectid'>&nbsp;&nbsp;&nbsp;$row1->subject</option>";
                           }
                        }
                       ?>
                    </select>
                  </div>

              </div>
            </div>
            
            <div class="col-sm-6">                        
              <div class="panel-body">

                  <div class="form_sep">
                      <label class="req" for="classid">Description</label></br>
                      <textarea name="txtdesc" id="txtdesc" style="height:100px;border-radius:4px; resize:none;" class="form-control"></textarea>                         
                  </div>

                  <div class="form_sep">
                      <label class="req" for="classid">Grade Level<span style="color:red">*</span></label>
                       <div class='table-responsive'>
                         <table class="gradecls">
                         <?php 
                         $i=1;
                         echo "<tr>";
                            foreach($query as $row){
                                echo "<td>$row->grade_level</td>";
                                $i++;
                              }
                         echo "</tr>";

                         echo "<tr>";
                            foreach($query as $row){?>
                               <td><input type='checkbox' name='grade[]' value='<?php echo $row->grade_levelid; ?>'/></td>
                         
                         <?php } echo "</tr>"; 
                         ?> 
                         
                         </table>
                        </div>
                  </div> 

              </div> 
          </div>  

        </div>     
        <div class="row">
          <div class="col-sm-12">
            
            <div class="panel-body">
                <div class="form_sep">
                  <?php if($this->green->gAction("C")){ ?>
                  <input type="submit" name="btnsave" id='btnsave' value="Save" class="btn btn-primary" />
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
</style>

<script type="text/javascript">  
$('#year').change(function(){
    var yearid=$('#year').val();
      $('#cboyear').val(yearid);
});

    //--- Text validate ---------
    function isNumberKey(evt){
        var e = window.event || evt; // for trans-browser compatibility 
        var charCode = e.which || e.keyCode; 
        if ((charCode > 47 && charCode < 58) || charCode == 8){ 
            return true; 
        } 
        return false;  
    }
    //--- end textbox validate -------

    $(function() {
      $('#fschyear').parsley();
      $("#btncancel").click(function(){
            var r = confirm("Do you want to cancel?");
            if (r == true) {
              location.href=("<?php echo site_url('school/levelsubjectdetail/?m='.$m.'&p='.$p.'');?>");  
            } else {
              
            }
        });      
    });
</script>