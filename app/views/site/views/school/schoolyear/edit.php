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
            <input type="text" style="display:none;" name="txtschoolyear_id" id='txtschoolyear_id' value="<?php echo $query->yearid;?>"/>
        <div class="row">
           <div class="col-sm-6">           
                <div class="panel-body">
                    <div class="form_sep">
                      <label class="req" for="cboschool">School<span style="color:red">*</span></label>
                      <select class="form-control" id='cboschool' name='cboschool' min=1 required data-parsley-required-message="Choose To date">
                        <option>Select School</option>
                            <?php
                            foreach ($this->schoolyears->getschool() as $schoolrow) {?>
                                <option value='<?php echo $schoolrow->schoolid; ?>' <?php if($schoolrow->schoolid==$query->schoolid) echo "selected";?>><?php echo $schoolrow->name;?></option>
                           <?php }
                           ?>
                      </select>
                    </div>
                    <div class="form_sep">
                      <label class="req" for="cboschool">Year<span style="color:red">*</span></label>
                      <input type="text" name="txtyear" id="txtyear" class="form-control" required data-parsley-required-message="Choose To date" value="<?php echo $query->sch_year?>" />
                    </div>                 
                </div>
            </div>
            <div class="col-sm-6">                          
              <div class="panel-body">
                <div class="form_sep">
                  <label class="req" for="student_num">From date<span style="color:red">*</span></label>
                  <div class='input-group date' id='datetimepicker'>
                         <input type='text' id="txtdatefrom" class="form-control" name="txtdatefrom" required data-parsley-required-message="Choose From date" value="<?php echo date_format(date_create($query->from_date), 'd-m-Y')?>"/>
                         <span class="input-group-addon"><span class="glyphicon glyphicon-calendar">
                  </div>    
                </div>                
                <div class="form_sep">
                  <label class="req" for="classid">To date<span style="color:red">*</span></label>
                  <div class='input-group date' id='datetimepicker'>
                     <input type='text' id="txtdateto" class="form-control" name="txtdateto" required data-parsley-required-message="Choose To date" value="<?php echo date_format(date_create($query->to_date), 'd-m-Y')?>"/>
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
                  <input type="button" name="btnsaveschoolyear" id='btnsaveschoolyear' value="Save" class="btn btn-primary" />
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
        $('#txtdatefrom').datepicker({format: 'yyyy-mm-dd'});
        $('#txtdateto').datepicker({format: 'yyyy-mm-dd'});
        //----- End ate time picker -----

        //--------- parseley validation -----
        $('#fschyear').parsley();       
                
         $("#btnsaveschoolyear").click(function() {         
            $('#fschyear').submit();           
        });
        
        $('#fschyear').submit(function(e) { 
            e.preventDefault();         
            if ($(this).parsley().isValid() ) {
                updateschoolyear();   
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

        function updateschoolyear(){
            var yearid=$('#txtschoolyear_id').val();
            var year=$('#txtyear').val()
            var fromdate=$('#txtdatefrom').val();
            var todate=$('#txtdateto').val(); 
            var school=$('#cboschool').val();
            
            if(year==''){
                alert('Please fill the blank field...');
            }else if (fromdate==''){ 
                alert('Please select any From date...');
            } else if (todate==''){
                alert('Please select any To date...');
            } else if (school==0){
                alert('Please select any school...')
            }else{
                    
                    $.ajax({
                            //school/schoolyear is call controller
                            url:"<?php echo base_url(); ?>index.php/school/schoolyear/updateschoolyear",    
                            data: {'yearid':yearid, 
                                   'year':year,
                                   'fromdate':fromdate,
                                   'todate':todate,
                                   'school':school},
                            type: "POST",
                            success: function(data){
                            
                            if(data=='true'){
                              location.href=("<?php echo site_url('school/schoolyear/?edit&m='.$m.'&p='.$p.'');?>");
                            }else{
                                 alert('This subject type is already exist...');
                            }
                        }
                    });
            }
        }
        
    });
</script>