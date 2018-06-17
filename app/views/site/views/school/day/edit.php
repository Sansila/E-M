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
      <form method="post" accept-charset="utf-8" class="tdrow" id="fschyear">
            <input type="text" style="display:none;" name="txtdayid" id='txtdayid' value="<?php echo $query->dayid;?>"/>
        <div class="row">          
       
           <div class="col-sm-6">           
                <div class="panel-body">
                    <div class="form_sep">
                    <label class="req" for="cboschool">Day<span style="color:red">*</span></label>
                    <input type="text" name="txtday" id="txtday" class="form-control" required data-parsley-required-message="Enter grade label" value="<?php echo $query->dayname?>" />
                  </div> 
                  
                </div>
            </div>
            
            <div class="col-sm-6">                          
              <div class="panel-body">            
              <div class="form_sep">
                    <!-- <label class="req" for="cboschool">Grade Label<span style="color:red">*</span></label>
                    <input type="text" name="txtglabel" id="txtglabel" class="form-control" required data-parsley-required-message="Enter grade label" value="<?php echo $query->dayname?>" /> -->
              </div>
              </div> 

            </div>  
             
        </div>
        
        <div class="row">
          <div class="col-sm-12">
            
            <div class="panel-body">
                <div class="form_sep">
                  <input type="button" name="btnsaves" id='btnsaves' value="Save" class="btn btn-primary" />
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
                
         $("#btnsaves").click(function() {         
            $('#fschyear').submit();           
        });
        
        $('#fschyear').submit(function(e) { 
            e.preventDefault();         
            if ($(this).parsley().isValid() ) {
                updateday();   
            }
        });     
        //---------- end of validation ----


         $("#btncancel").click(function(){
             var r = confirm("Do you want to cancel?");
                 if (r == true) {
                     location.href=("<?php echo site_url('school/day/');?>");  
               } else {
                    
            }
        });

        function updateday(){
            var dayid=$('#txtdayid').val();
            var day=$('#txtday').val();
   
            $.ajax({
                  url:"<?php echo site_url('school/day/updates'); ?>",  
                  data: {
                          'dayid':dayid, 
                          'day':day,
                  },
                  type: "POST",
                  success: function(data){
                  if(data=='true'){
                       location.href=("<?php echo site_url('school/day/?edit');?>");
                  }else{
                       $("#exist").html("<p style='color:red;'>Your data has already exist...!</p>");
                  }
              }
          });
        }
        
    });
</script>