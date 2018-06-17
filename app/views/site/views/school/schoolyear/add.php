<div class="wrapper">
	<div class="clearfix" id="main_content_outer">
    <div id="main_content">
      
       <div class="result_info">
      	<div class="col-sm-6">
      		<strong>Setup School Year</strong>	
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
                  <?php foreach ($this->schoolyears->getschool() as $row) { ?>
                           <option value='<?php echo $row->schoolid; ?>' <?php if($row->schoolid==$this->session->userdata('schoolid')) echo "selected";?> > <?php echo $row->name;?></option>
                  <?php } ?>
                    </select>
	                </div>
	                <div class="form_sep">
	                  <label class="req" for="cboschool">Year<span style="color:red">*</span></label>
	                  <input type="text" name="txtyear" id="txtyear" onkeypress='' class="form-control" required data-parsley-required-message="Enter Year" />
	                </div>                 
	            </div>
            </div>
            <div class="col-sm-6">                       	
              <div class="panel-body">
                <div class="form_sep">
                  <label class="req" for="student_num">From date<span style="color:red">*</span></label>
                  <div class='input-group date' id='datetimepicker'>
		                 <input type='text' id="txtdatefrom" class="form-control" name="txtdatefrom" required data-parsley-required-message="Choose From date"/>
		                 <span class="input-group-addon"><span class="glyphicon glyphicon-calendar">
		          </div>	
                </div>                
                <div class="form_sep">
                  <label class="req" for="classid">To date<span style="color:red">*</span></label>
                  <div class='input-group date' id='datetimepicker'>
                     <input type='text' id="txtdateto" class="form-control" name="txtdateto" required data-parsley-required-message="Choose To date"/>
                     <span class="input-group-addon"><span class="glyphicon glyphicon-calendar">
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
                  <input type="button" name="btnsaveschoolyear" id='btnsaveschoolyear' value="Save" class="btn btn-primary" />
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
<style>
   .tdrow tr,.tdrow th,.tdrow td{
    border: none !important; 
  }
</style>

<script type="text/javascript">  
    $(function() {
        //----- Start Date time picker -----
        $('#txtdatefrom').datepicker({format: 'dd-mm-yyyy'});
        $('#txtdateto').datepicker({format: 'dd-mm-yyyy'});        
        //----- End ate time picker -----
       
       //--------- parseley validation -----
        $('#fschyear').parsley();       
                
         $("#btnsaveschoolyear").click(function() {        	
        	$('#fschyear').submit();           
        });
        
        $('#fschyear').submit(function(e) { 
	        e.preventDefault();	        
	        if ( $(this).parsley().isValid() ) {
	            addschoolyear();   
	        }
	    });		
		//---------- end of validation ----
		
        $("#btncancel").click(function(){
            var r = confirm("Do you want to cancel?");
                if (r == true) {
                    location.href=("<?php echo site_url('school/schoolyear/?m='.$m.'&p='.$p.'');?>");
                } else {
                    
                }
        });
        
        function addschoolyear(){
            var year=$('#txtyear').val()
            var fromdate=$('#txtdatefrom').val();
            var todate=$('#txtdateto').val();
            var school=$('#cboschool').val();

            if(year==''){
                alert('Please fill the blank field...'); 
            }else if (fromdate==''){ 
                alert('Please select any From date...');
            }else if (todate==''){ 
                alert('Please select any To date...');
            }else if (school==0){ 
                alert('Please select any school...');   
            }else{
                $.ajax({
                        //school/schoolyear is controller
                        url:"<?php echo site_url('school/schoolyear/saveschoolyear'); ?>",    
                        data: {
                            'year':year,
                            'fromdate':fromdate,
                            'todate':todate,
                            'school':school
                          },
                        type: "POST",
                        
                        success: function(data){
                        if(data=='true'){
                            location.href=("<?php echo site_url('school/schoolyear/?save&m='.$m.'&p='.$p.'');?>");                               
                        }else{
                            alert('This School year is already exist... ');
                        }
                    }
                });
            }
        }
        
    });
 
</script>