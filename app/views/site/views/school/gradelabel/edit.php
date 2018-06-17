<div class="wrapper">
    <div class="clearfix" id="main_content_outer">
    <div id="main_content">
      
       <div class="result_info">
        <div class="col-sm-6">
            <strong>Setup Grade Level</strong>  
        </div>
        <div class="col-sm-6" style="text-align: right">
            <strong>
                       
            </strong>
            <!-- block messate -->
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
      <form method="post" accept-charset="utf-8" class="tdrow" id="fschyear">
            <input type="text" style="display:none;" name="txtlabelid" id='txtlabelid' value="<?php echo $query->grade_labelid;?>"/>
        <div class="row">          
       
           <div class="col-sm-6">           
                <div class="panel-body">
                    <div class="form_sep">
                    <label class="req" for="cboschool">Name<span style="color:red">*</span></label>
                    <select class="form-control" id='cboschool' name='cboschool' min=1 required data-parsley-required-message="Choose To date">
                        <option>Select School</option>
                            <?php
                            foreach ($this->gradelabels->getschool() as $schoolrow) {?>
                                <option value='<?php echo $schoolrow->schoolid; ?>' <?php if($schoolrow->schoolid==$query->schoolid) echo "selected";?>><?php echo $schoolrow->name;?></option>
                            <?php }
                           ?>
                      </select>
                  </div> 
                  
                </div>
            </div>
            
            <div class="col-sm-6">                          
              <div class="panel-body">            
              <div class="form_sep">
                    <label class="req" for="cboschool">Grade Label<span style="color:red">*</span></label>
                    <input type="text" name="txtglabel" id="txtglabel" class="form-control" required data-parsley-required-message="Enter grade label" value="<?php echo $query->grade_label?>" />
              </div>
              </div> 

            </div>  
             
        </div>
        
        <div class="row">
          <div class="col-sm-12">
            
            <div class="panel-body">
                <div class="form_sep">
                  <?php if($this->green->gAction("C")){ ?>
                  <input type="button" name="btnsaves" id='btnsaves' value="Save" class="btn btn-primary" />
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
      //----- Start Date time picker -----
        $('#txtdate').datepicker({format: 'dd-mm-yyyy'});        
        //----- End ate time picker -----

        //--------- parseley validation -----
        $('#fschyear').parsley();       
                
         $("#btnsaves").click(function() {         
            $('#fschyear').submit();           
        });
        
        $('#fschyear').submit(function(e) { 
            e.preventDefault();         
            if ($(this).parsley().isValid() ) {
                updategradelevel();   
            }
        });     
        //---------- end of validation ----


         $("#btncancel").click(function(){
             var r = confirm("Do you want to cancel?");
                 if (r == true) {
                     location.href=("<?php echo site_url('school/gradelabel/?m='.$m.'&p='.$p.'');?>"); 
               } else {
                    
            }
        });

        function updategradelevel(){
            var glabelid=$('#txtlabelid').val();
            var schoolid=$('#cboschool').val()
            var glabel=$('#txtglabel').val();

            if ($('#chbactive').is(":checked")) { is_active=1; }
   
            $.ajax({
                  //school/schoollevel is call controller
                  //url:"<?php echo base_url(); ?>index.php/school/schoollevel/updates" = url:"<?php echo site_url('school/schoollevel/updates'); ?>"
                  url:"<?php echo site_url('school/gradelabel/updates'); ?>",  
                  data: {
                          'glabelid':glabelid, 
                          'schoolid':schoolid,
                          'glabel':glabel,
                  },
                  type: "POST",
                  success: function(data){
                  if(data=='true'){
                       location.href=("<?php echo site_url('school/gradelabel/?edit&m='.$m.'&p='.$p.'');?>");
                  }else{
                       $("#exist").html("<p style='color:red;'>Your data has already exist...!</p>");
                  }
              }
          });
        }
        
    });
</script>