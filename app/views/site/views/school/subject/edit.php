<style>
   .tdrow tr,.tdrow th,.tdrow td{
    border: none !important; 
  }
</style>
<div class="wrapper">
    <div class="clearfix" id="main_content_outer">
    <div id="main_content">
      
       <div class="result_info">
        <div class="col-sm-6">
            <strong>Setup Subject</strong>  
        </div>
        <div class="col-sm-6" style="text-align: right">
            <strong>                
            </strong>   
          <!-- Block message -->
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
              if ($query->modified_by !='')
                $user=$this->db->where('userid',$query->modified_by)->get('sch_user')->row()->user_name;
            ?>
          <!-- End block message -->
        </div> 
      </div> 
      
      <form method="post" accept-charset="utf-8" class="tdrow" action="<?php echo site_url("school/subject/updatesubject?m=$m&p=$p"); ?>" id="fschyear">
          <input type="text" style="display:none;" name="txtsubjectid" id='txtsubjectid' value="<?php echo $query->subjectid;?>"/>
          <label style="float:right !important; font-size:11px !important; color:red;"><?php if($query->modified_by!='') echo "Last Modified Date: ".date_format(date_create($query->modified_date),'d-m-Y H:i:s')." By : $user"; ?></label> 
        <div class="row">    
           <div class="col-sm-6">           
                <div class="panel-body">
                    <div class="form_sep">
                      <label class="req" for="cboschool">Subject<span style="color:red">*</span></label>
                    <input type="text" name="txtsubject" id="txtsubject" class="form-control" value="<?php echo $query->subject?>" required data-parsley-required-message="Please fill the subject" />
                    </div>
                    <div class="form_sep">
                      <label class="req" for="cboschool">Subject (KH)<span style="color:red">*</span></label>
                    <input type="text" name="txtsubjectkh" id="txtsubjectkh" class="form-control" value="<?php echo $query->subject_kh?>" required data-parsley-required-message="Please fill the subject" />
                    </div>
                    <div class="form_sep">
                      <label class="req" for="cboschool">Subject type<span style="color:red">*</span></label>
                      <select class="form-control" id='cbosubjecttype' name='cbosubjecttype' min=1 required data-parsley-required-message="Select any subject type">
                    <option>Select Subject type</option>
                        <?php
                        foreach ($this->subjects->getsubjecttype() as $subjecttyperow) {?>
                            <option value='<?php echo $subjecttyperow->subj_type_id; ?>' <?php if($subjecttyperow->subj_type_id==$query->subj_type_id) echo "selected";?>><?php echo $subjecttyperow->subject_type;?></option>
                       <?php }
                       ?>
                </select>
                    </div>                 
                </div>
            </div>
            
            <div class="col-sm-6">                          
              <div class="panel-body">
                <div class="form_sep">
                  <label class="req" for="student_num">Short Cut<span style="color:red">*</span></label>
                  <input type="text" name="txtshort_sub" id="txtshort_sub" class="form-control" value="<?php echo $query->short_sub?>"  required data-parsley-required-message="Please fill the short cut"/>   
                </div>                
                <div class="form_sep">
                  <label class="req" for="classid">School<span style="color:red">*</span></label>
                  <select class="form-control" id='cboschool' name='cboschool'  min=1 required data-parsley-required-message="Select any school">
                    <option>Select School</option>
                        <?php
                        foreach ($this->subjects->getschool() as $schoolrow) {?>
                            <option value='<?php echo $schoolrow->schoolid; ?>' <?php if($schoolrow->schoolid==$query->schoolid) echo "selected";?>><?php echo $schoolrow->name;?></option>
                       <?php }
                       ?>
                  </select>
                </div>
                <div class="form_sep">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name='is_trimester' id='is_trimester' <?PHP if($query->is_trimester_sub==1) echo 'checked'; ?>> For TAE
                    </label>  
                  </div>                  
                </div> 
                <div class="form_sep">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name='is_eval' id='is_eval' <?PHP if($query->is_eval==1) echo 'checked'; ?>>For Evaluate
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
                <!-- <input type="reset" name="btnreset" id='btnreset' value="Reset" class="btn btn-warning" /> -->
                <input type="button" name="btncancel" id='btncancel' value="Cancel" class="btn btn-warning" />
                </div>                               
            </div>
            
          </div>
        </div>
        
       </form>         
    </div>
    
 </div>  
</div>

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

        //----- not use any more cos use submit -----
        // $("#btnsavesubject").click(function() {

        //     //updatesubject();  
             
        // });
        function updatesubject(){
            var subjectid=$('#txtsubject_id').val();
            var subject=$('#txtsubject').val()
            var subjecttype=$('#cbosubjecttype').val();
            var short_sub=$('#txtshort_sub').val(); 
            var school=$('#cboschool').val();
            
            if(subject==''){
                alert('Please fill the blank field...');
            }else if (subjecttype==0){ 
                alert('Please select any subject type...');
            } else if (school==0){
                alert('Please select any school...')
            }else{
                    
                    $.ajax({
                            //school/subjecttype is call controller
                            url:"<?php echo base_url(); ?>index.php/school/subject/updatesubject",    
                            data: {'subjectid':subjectid, 
                                   'subject':subject,
                                   'subjecttype':subjecttype,
                                   'short_sub':short_sub, 
                                   'school':school},
                            type: "POST",
                            success: function(data){
                            //alert(data);
                            if(data=='true'){
                                 location.href=("<?php echo site_url('school/subject/');?>");
                            }else{
                                 alert('This subject type is already exist...');
                            }
                        }
                    });
            }
        }
        
    })
</script>