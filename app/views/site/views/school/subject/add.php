<div class="wrapper">
    <div class="clearfix" id="main_content_outer">
    <div id="main_content">
      
       <div class="result_info">
        <div class="col-sm-6">
            <strong>Setup Subject</strong>  
        </div>
        <div class="col-sm-6" style="text-align: right"> 
          <!-- Block message -->
          <?php if(isset($exist)) echo $exist ?>
            <?PHP if(isset($_GET['save'])){
               echo "<p>Your data has been saved successfully...!</p>";
              }else if(isset($_GET['edit'])){
                  echo "<p>Your data has been updated successfully...!</p>";
              }else if(isset($_GET['delete'])){
                  echo "<p style='color:red'>Your data has been deleted successfully...!</p>";
              }
              $m='';
              $p='';
              if(isset($_GET['m'])){
                $m=$_GET['m'];
              }
              if(isset($_GET['p'])){
                  $p=$_GET['p'];
              }
            ?>
          <!-- End block message -->
        </div> 
      </div> 
      
      <form method="post" accept-charset="utf-8" class="tdrow" action="<?php echo site_url("school/subject/savesubject?m=$m&p=$p"); ?>" id="fschyear">
            
        <div class="row">          
       
           <div class="col-sm-6">           
                <div class="panel-body">
                    <div class="form_sep">
                        <label class="req" for="cboschool">Subject<span style="color:red">*</span></label>
                        <input type="text" name="txtsubject" id="txtsubject" class="form-control" required data-parsley-required-message="Please fill the subject" />
                    </div>
                    <div class="form_sep">
                        <label class="req" for="cboschool">Subject (KH)<span style="color:red">*</span></label>
                        <input type="text" name="txtsubjectkh" id="txtsubjectkh" class="form-control" required data-parsley-required-message="Please fill the subject" />
                    </div>
                    <div class="form_sep">
                      <label class="req" for="cboschool">Subject type<span style="color:red">*</span></label>
                      <select class="form-control" id='cbosubjecttypeid' name='cbosubjecttypeid' min=1 required data-parsley-required-message="Select any subject type">
                            <option value='0'>Select Subject type</option>
                            <?php
                            foreach ($this->subjects->getsubjecttype() as $subjecttyperow) {
                            echo "<option value='$subjecttyperow->subj_type_id'>$subjecttyperow->subject_type</option>";
                            }
                           ?>
                      </select>
                    </div>                 
                </div>
            </div>
            
            <div class="col-sm-6">                          
              <div class="panel-body">
                <div class="form_sep">
                      <label class="req" for="student_num">Short Cut<span style="color:red">*</span></label>
                      <input type="text" name="txtshort_sub" id="txtshort_sub" class="form-control" required data-parsley-required-message="Please fill the short cut"/>   
                </div> 

                <div class="form_sep">
                        <label class="req" for="classid">School<span style="color:red">*</span></label>
                        <select class="form-control" id='cboschool' name='cboschool' min=1 required data-parsley-required-message="Select any school">
                        <option value='0'>Select School</option>
                        <?php foreach ($this->subjects->getschool() as $schoolrow) { ?>
                           <option value='<?php echo $schoolrow->schoolid; ?>' <?php if($schoolrow->schoolid==$this->session->userdata('schoolid')) echo "selected";?> > <?php echo $schoolrow->name;?></option>
                        <?php } ?>
                    </select>
                </div>  
                <div class="form_sep">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name='is_trimester' id='is_trimester'>For TAE
                    </label>  
                  </div>                  
                </div>
                <div class="form_sep">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name='is_eval' id='is_eval' checked>For Evaluate
                    </label>  
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
                 <input type="submit" name="btnsavesubject" id='btnsavesubject' value="Save" class="btn btn-primary" />
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

    $(function() {
       //--------- parseley validation -----
        $('#fschyear').parsley();       
      
    //---------- end of validation ----

    $("#btncancel").click(function(){
        var r = confirm("Do you want to cancel?");
        if (r == true) {
          location.href=("<?php echo site_url('school/subject/?m='.$m.'&p='.$p.'');?>");  
        } else {
          
        }
    }); 

        // $("#btnsavesubject").click(function() {
        //     //addsubject();  
        // }); 
        //---- this function is not used any more ---- 
        function addsubject(){
            var subject=$('#txtsubject').val()
            var subjecttype=$('#cbosubjecttypeid').val();
            var short_sub=$('#txtshort_sub').val(); 
            var school=$('#cboschool').val();
            var is_trim=0;
            if($('#is_trimester').is(':checked'))
              is_trim=1;

            if(subject==''){
                alert('Please fill the blank field...'); 
            }else if (subjecttype==0){ 
                alert('Please select any subject type...')
            }else if (school==0){ 
                alert('Please select any school...')    
            }else{
                  $.ajax({
                          //school/subject is controller
                          url:"<?php echo base_url(); ?>index.php/school/subject/savesubject",    
                          data: {
                              'subject':subject,
                              'subjecttype':subjecttype,
                              'short_sub':short_sub, 
                              'is_trim':is_trim, 
                              'school':school},
                          type: "POST",
                          success: function(data){
                          if(data=='true'){
                              location.href=("<?php echo site_url('school/subject/?save');?>");
                              //$('#msg').html('Your data has been save successfully...,!');
                          }else{
                               alert('This subject is already exist... ');
                          }
                      }
                  });
            }
        }
        
    })
</script>