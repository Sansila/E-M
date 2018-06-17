<!-- <div id='msg' style='color:white; background-color:#286090;height:30px;  text-align:center'></div> -->

<div class="wrapper">
  <div class="clearfix" id="main_content_outer">
    <div id="main_content">
      
       <div class="result_info">
        <div class="col-sm-6">
          <strong>Setup Grade Label</strong>  
        </div>
        <div class="col-sm-6" style="text-align: right">
          <strong>

          </strong> 
          <!-- Block message -->
            <?PHP if(isset($_GET['save'])){
                  echo "<p id='exist'>Your data has been saved successfully...!</p>";
              }else if(isset($_GET['edit'])){
                  echo "<p id='exist'>Your data has been updated successfully...!</p>";
              }else if(isset($_GET['delete'])){
                  echo "<p style='color:red'>Your data has been deleted successfully...!</p>";
              }
              echo "<p id='exist'></p>";
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
      <form method="post" accept-charset="utf-8" class="tdrow" id="fschyear">
        <div class="row">          
       
           <div class="col-sm-6">           
              <div class="panel-body">
                  <div class="form_sep">
                    <label class="req" for="cboschool">School<span style="color:red">*</span></label>
                    <select class="form-control" id='cboschool'name='cboschool' min=1 required data-parsley-required-message="Select any school">
                        <option value='0'>Select School</option>
                  <?php foreach ($this->gradelabels->getschool() as $schoolrow) { ?>
                           <option value='<?php echo $schoolrow->schoolid; ?>' <?php if($schoolrow->schoolid==$this->session->userdata('schoolid')) echo "selected";?> > <?php echo $schoolrow->name;?></option>
                  <?php } ?>
                    </select>
                  </div>          
              </div>
            </div>
            
            <div class="col-sm-6">                        
              <div class="panel-body">
              <div class="form_sep">
                    <label class="req" for="cboschool">Grade Label<span style="color:red">*</span></label>
                    <input type="text" name="txtglabel" id="txtglabel" class="form-control" required data-parsley-required-message="Enter grade level" />
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
       //--------- parseley validation -----
        $('#fschyear').parsley();       
                
         $("#btnsaves").click(function() {         
          $('#fschyear').submit();           
        });
        
        $('#fschyear').submit(function(e) { 
          e.preventDefault();         
          if ( $(this).parsley().isValid() ) {
              addgradelevel();   
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
        
        function addgradelevel(){
          
            var schoolid=$('#cboschool').val();
            var glevel=$('#txtglabel').val();

            $.ajax({
                    url:"<?php echo site_url('school/gradelabel/saves'); ?>",    
                    data: {
                        'schoolid':schoolid,
                        'glabel':glevel,
                    },
                    type: "POST",
                    
                    success: function(data){
                      if(data == 'true'){
                          location.href=("<?php echo site_url('school/gradelabel/?save&m='.$m.'&p='.$p.'');?>");
                      }else{
                        $("#exist").html("<p style='color:red;'>Your data has already exist...!</p>"); 
                     }
                  }
            });
        }
        
    });
 
</script>