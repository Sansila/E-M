<!-- <div id='msg' style='color:white; background-color:#286090;height:30px;  text-align:center'></div> -->
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
                    <select class="form-control" id='cboschool' name='cboschool' min='1' required data-parsley-required-message="Select any school">
                        <option value='0'>Select School</option>
                        <?php foreach ($this->gradelevels->getschool() as $schoolrow) { ?>
                           <option value="<?php echo $schoolrow->schoolid; ?>" <?php if($schoolrow->schoolid==$this->session->userdata('schoolid')) echo "selected";?> > <?php echo $schoolrow->name;?></option>
                        <?php } ?>
                    </select>
                  </div>  
                  <div class="form_sep">
                    <label class="req" for="cboschool">Next Grade Level<span style="color:red">*</span></label>
                    <input  name="txtnlevel" id="txtnlevel" class="form-control" readonly required data-parsley-required-message="Enter next grade level" />
                  </div>         
              </div>
            </div>
            
            <div class="col-sm-6">                        
              <div class="panel-body">
              <div class="form_sep">
                    <label class="req" for="cboschool">Grade Level<span style="color:red">*</span></label>
                    <input type="text" name="txtglevel" id="txtglevel" class="form-control" onKeyUp="glevelvalidate();"  required data-parsley-required-message="Enter grade level" />
                  </div>
                  <div class="form_sep">
                    <label class="req" for="cboschlevel">School level<span style="color:red">*</span></label>
                   <select class="form-control" id='cboschlevel'name='cboschlevel' min=1 required data-parsley-required-message="Select any school">
                        <option value='0'>Select School level</option>
                        <?php
                        foreach ($this->gradelevels->getschlevel() as $row) {
                        echo "<option value='$row->schlevelid'>$row->sch_level</option>";
                        }
                       ?>
                    </select>
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

  function glevelvalidate() {
    // ---------  validate event on glevel & next level ----------
    var glevel = document.getElementById('txtglevel').value;
      if(glevel >= 12) {
            document.getElementById('txtglevel').value=12;
            document.getElementById('txtnlevel').value=12;
      } else if(glevel==''){
            document.getElementById('txtnlevel').value='';
      } else if(glevel==0){
            document.getElementById('txtglevel').value=1;
            document.getElementById('txtnlevel').value=2;
      } else {
            document.getElementById('txtnlevel').value=parseInt(glevel)+1;
      }
  }

  function isNumberKey(evt){
        var e = window.event || evt; // for trans-browser compatibility 
        var charCode = e.which || e.keyCode; 
        if ((charCode > 47 && charCode < 58) || charCode == 8){ 
            return true; 
        } 
        return false;  
  }
  // ---------- End validate event on glevel & next level -----------

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
                    location.href=("<?php echo site_url('school/gradelevel/?m='.$m.'&p='.$p.'');?>");  
                } else {
                    
                }
        });
        
        function addgradelevel(){
            var schoolid=$('#cboschool').val()
            var glevel=$('#txtglevel').val();
            var nlevel=$('#txtnlevel').val();
            var schlevelid=$('#cboschlevel').val();

            $.ajax({
                    //school/gradelevel is controller
                    url:"<?php echo site_url('school/gradelevel/saves'); ?>",    
                    data: {
                        'schoolid':schoolid,
                        'glevel':glevel,
                        'nlevel':nlevel,
                        'schlevelid':schlevelid,
                    },
                    type: "POST",
                    
                    success: function(data){
                      if(data == 'true'){
                          location.href=("<?php echo site_url('school/gradelevel/?save&m='.$m.'&p='.$p.'');?>"); 
                      }else{
                        $("#exist").html("<p style='color:red;'>Your data has already exist...!</p>");    
                     }
                  }
            });
        }  
    });
 
</script>