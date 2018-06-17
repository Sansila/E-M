<style>
   .tdrow tr,.tdrow th,.tdrow td{
    border: none !important; 
  }
</style>
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
            ?>
          <!-- End block message -->
        </div> 
      </div> 
      
      <form method="post" accept-charset="utf-8" class="tdrow" action="<?php echo site_url("school/subjecttype/updatesubjecttype?m=$m&p=$p"); ?>" id="fschyear">
            <input type="text" style="display:none;" name="txtsubjecttype_id" id='txtsubjecttype_id' value="<?php echo $query->subj_type_id;?>"/>
        <div class="row">          
       
           <div class="col-sm-6">           
                <div class="panel-body">
                    <div class="form_sep">
                      <label class="req" for="cboschool">Subject Type<span style="color:red">*</span></label>
                    <input type="text" name="txtsubjecttype" id="txtsubjecttype" class="form-control" required data-parsley-required-message="Enter subject type" value="<?php echo $query->subject_type?>" />
                    </div>
                    <div class="form_sep">
                      <label class="req" for="cboschool">Main Type<span style="color:red">*</span></label>
                      <input type="text" name="txtmaintype" id="txtmaintype" class="form-control" required data-parsley-required-message="Enter main type"  value="<?php echo $query->main_type?>" />
                    </div>                 
                </div>
            </div>
            
            <div class="col-sm-6">                          
              <div class="panel-body">
                <div class="form_sep">
                  <label class="req" for="student_num">Description</label>
                  <textarea name="txtdescription" id="txtdescription" style="width:100%;height:90px; resize:none;" class="form-control"><?php echo $query->note?></textarea>  
                </div>                             
              </div> 
            </div>  
        </div>
        
        <div class="row">
          <div class="col-sm-12">
            
            <div class="panel-body">
                <div class="form_sep">
                <?php if($this->green->gAction("C")){ ?>
                 <input type="submit" name="btnsavesubjecttype" id='btnsavesubjecttype' value="Save" class="btn btn-primary" />
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

<script type="text/javascript">
    $(function() {
         $('#fschyear').parsley();

         $("#btncancel").click(function(){
             var r = confirm("Do you want to cancel?");
                 if (r == true) {
                     location.href=("<?php echo site_url('school/subjecttype/?m='.$m.'&p='.$p.'');?>");  
               } else {
                    
            }
        });

        // $("#btnsavesubjecttype").click(function() {
        //             updatesubjecttype();  
        // });
        //------ this function is not used any more ------
        function updatesubjecttype(){
            var subj_type_id=$('#txtsubjecttype_id').val();
            var subjecttype=$('#txtsubjecttype').val();
            var maintype=$('#txtmaintype').val();
            var description=$('#txtdescription').val();
            
            if(subjecttype=='', maintype==''){
                alert('Please fill the blank field...');
            }else{
                    
                    $.ajax({
                            //school/subjecttype is call controller
                            url:"<?php echo base_url(); ?>index.php/school/subjecttype/updatesubjecttype",    
                            data: {
                                    'subj_type_id':subj_type_id, 
                                    'subject_type':subjecttype,
                                    'maintype':maintype, 
                                    'description':description},
                            type: "POST",
                            success: function(data){
                            //alert(data);
                            if(data=='true'){
                                 location.href=("<?php echo site_url('school/subjecttype/?edit&m='.$m.'&p='.$p.'');?>");
                            }else{
                                 alert('This subject type is already exist...');
                            }
                        }
                    });
            }
        }
        
    })
</script>