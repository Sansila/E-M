<div class="wrapper">
  <div class="clearfix" id="main_content_outer">
    <div id="main_content">
      
       <div class="result_info">
        <div class="col-sm-6">
          <strong>Setup Time Table</strong>  
        </div>
        <div class="col-sm-6" style="text-align: right">
           
          <!-- Block message -->
            <?php if(isset($exist)) echo $exist ?>
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
      
      <form  method="post" accept-charset="utf-8" action="<?php echo site_url('school/timetable/saves'); ?>" class="tdrow" id="fschyear">
        <div class="row">          
           <div class="col-sm-6">           
              <div class="panel-body">
                  <div class="form_sep">
                    <label class="req" for="cboschool">School<span style="color:red">*</span></label>
                    <select class="form-control" id='cboschool'name='cboschool' min=1 required data-parsley-required-message="Select any school">
                        <option value='0'>Select School</option>
                  <?php foreach ($this->timetables->getschool() as $row) { ?>
                           <option value='<?php echo $row->schoolid; ?>' <?php if($row->schoolid==$this->session->userdata('schoolid')) echo "selected";?> > <?php echo $row->name;?></option>
                  <?php } ?>
                    </select>
                  </div> 
                  <div class="form_sep">
                   <label class="req" for="cboschlevel">School level<span style="color:red">*</span></label>
                   <select class="form-control" id='cboschoolevel'name='cboschoolevel' onchange='filterclass(event);' min=1 required data-parsley-required-message="Select any school level">
                        <option value='0'>Select School level</option>
                        <?php
                        foreach ($this->timetables->getschlevel() as $row) {?>
                        <option value='<?php echo $row->schlevelid ?>'<?php if(isset($_GET['sl'])) if($_GET['sl']==$row->schlevelid) echo 'selected' ?>><?php echo $row->sch_level?></option>
                       <?php  }
                       ?>
                    </select>
                  </div>                
                <div class="form_sep">
                   <label class="req" for="cboschlevel">Class<span style="color:red">*</span></label>
                   <select class="form-control" id='cboclass' name='cboclass' min=1 required data-parsley-required-message="Select any Class">
                        <option value='0'>Select Class</option>
                       <?php
                       if(isset($_GET['cl'])){
                          foreach ($this->timetables->getclass($_GET['sl']) as $row) {?>
                            <option value='<?php echo $row->classid ?>'<?php if(isset($_GET['cl'])) if($_GET['cl']==$row->classid) echo ' selected' ?>><?php echo $row->class_name?></option>
                         <?php  }
                      }
                       ?>
                    </select>
                  </div>   
                  <div class="form_sep">
                    <label class="req" for="cboschool">Academic Year<span style="color:red">*</span></label>
                    <select class="form-control" id='cboyear'name='cboyear' min=1 required data-parsley-required-message="Select any school">
                        <option value='0'>Select year</option>
                        <?php foreach ($this->timetables->getyear() as $row) { ?>
                                 <option value='<?php echo $row->yearid; ?>' <?php if($row->yearid==$this->session->userdata('year')) echo "selected";?>> <?php echo $row->sch_year;?></option>
                        <?php } ?>
                    </select>
                  </div> 
                   <div class="form_sep">
                   <label class="req" for="cboschlevel">Day<span style="color:red">*</span></label>
                   <select class="form-control" id='cboday' name='cboday' min=1 required data-parsley-required-message="Select any day">
                        <option value='0'>Select Day</option>
                        <?php
                        foreach ($this->timetables->getday() as $row) {
                        echo "<option value='$row->dayid'>$row->dayname</option>";
                        }
                       ?>
                    </select>
                  </div> 
                  <!-- <div class="form_sep">
                    <label class="req" for="cboschool">Leave time</label><br/>
                    <input type="checkbox" name="chbleave" id="chbleave" value="1">
                  </div>  -->  
              </div>
            </div>           
            <div class="col-sm-6">
              <div class="panel-body">
                  <div class="form_sep">
                    <label class="req" for="cboschool">Teacher<span style="color:red">*</span></label>
                    <input type="text" name="txtteacher" id="txtteacher" class="form-control" required data-parsley-required-message="Fill teacher" />
                    <input type="text" style="display:none;" name="txtgetteacherid" id="txtgetteacherid" class="form-control" />
                  </div>
                  <div class="form_sep">
                  <label class="req" for="cboschlevel">Subject<span style="color:red">*</span></label>
                   <select class="form-control" id='cbosubject' name='cbosubject' min=1 required data-parsley-required-message="Select any subject">
                        <option value='0'>Select Subject</option>
                        <?php
                        foreach ($this->db->get('sch_subject_type')->result() as $sj_type) {
                          echo "<option disabled value='$sj_type->subj_type_id'>$sj_type->subject_type</option>";
                           foreach($this->timetables->getsubjects($sj_type->subj_type_id) as $row){
                              echo "<option value='$row->subjectid'>&nbsp;&nbsp;&nbsp;$row->subject</option>";
                           }
                        }
                       ?>
                    </select>
                  </div> 
                  <div class="form_sep">
                  <label class="req" for="cboschlevel">Time<span style="color:red">*</span></label>
                   <select class="form-control" id='cbotime' name='cbotime' min=1 required data-parsley-required-message="Select any time">
                        <option value='0'>Select time</option>
                        <?php
                        foreach ($this->timetables->gettime() as $row) {
                        echo "<option value='$row->timeid'>".date('H:i',strtotime($row->from_time)).'-'.date('H:i',strtotime($row->to_time))."</option>";
                        }
                       ?>
                    </select>
                  </div> 
                    <div class="form_sep">
                    <label class="req" for="cboschool">Description</label>
                    <textarea name="txtnote" id="txtnote" style="height:100px;border-radius:4px; resize:none;" class="form-control"></textarea>                 
              </div>
              </div> 
          </div>  
        </div>     
        <div class="row">
          <div class="col-sm-12">          
            <div class="panel-body">
                <div class="form_sep">
                  <input type="submit" name="btnsaves" id='btnsaves' value="Save" class="btn btn-primary" />
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
   .tdrow tr,.tdrow th,.tdrow td
   {
    border: none !important;
   }
</style>

<script type="text/javascript"> 


$(function() {
   //--------- parseley validation -----
    $('#fschyear').parsley(); 
    autofillteacher();      
  });   
//---------- end of validation --------
//---------- auto complete ------------
function autofillteacher(){    
  var fillteacher="<?php echo site_url("school/timetable/fillteacher")?>";
    $("#txtteacher").autocomplete({
      source: fillteacher,
      minLength:0,
      select: function( events, ui ) {          
        var f_id=ui.item.id;
        $("#txtgetteacherid").val(f_id); 
      }           
    });
}
//---------- end ----------------------

$('#year').change(function(){
    var yearid=$('#year').val();
      $('#cboyear').val(yearid);
});

function filterclass(event){
    var schlevelid=jQuery('#cboschoolevel').val();

    $.ajax({
       url:"<?php echo site_url('school/timetable/getschlevelid'); ?>",   
       data: {
              'schlevelid':schlevelid,
             },
       type: "POST",
       success: function(data){
          jQuery('#cboclass').html(data);                   
       }
     });
}
    
    $("#btncancel").click(function(){
      var r = confirm("Do you want to cancel?");
      if (r == true) {
        location.href=("<?php echo site_url('school/timetable/');?>");  
      } else {}        
  });
</script>