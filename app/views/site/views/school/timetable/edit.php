<div class="wrapper">
    <div class="clearfix" id="main_content_outer">
    <div id="main_content">
      
       <div class="result_info">
        <div class="col-sm-6">
            <strong>Setup Time Table</strong>  
        </div>
        <div class="col-sm-6" style="text-align: right">
            <!-- block messate -->
            <?php if(isset($exist)) echo $exist ?>
            <p id='exist'></p>
          <!-- End block message -->   
        </div> 
      </div> 
      <form method="post" accept-charset="utf-8" action="<?php echo site_url('school/timetable/updates'); ?>" class="tdrow" id="fschyear">
            <input type="text" style="display:none;" name="txttimetableid" id='txttimetableid' value="<?php echo $query->time_tableid;?>"/>
        <div class="row">          
       
           <div class="col-sm-6">           
                <div class="panel-body">
                    <div class="form_sep">
                    <label class="req" for="cboschool">Name<span style="color:red">*</span></label>
                    <select class="form-control" id='cboschool' name='cboschool' min=1 required data-parsley-required-message="Choose To date">
                        <option>Select School</option>
                            <?php
                            foreach ($this->timetables->getschool() as $row) {?>
                                <option value='<?php echo $row->schoolid; ?>' <?php if($row->schoolid==$query->schoolid) echo "selected";?>><?php echo $row->name;?></option>
                            <?php }
                           ?>
                      </select>
                  </div> 
                  <div class="form_sep">
                    <label class="req" for="cboschlevel">School Level<span style="color:red">*</span></label>
                   <select class="form-control" id='cboschoolevel' name='cboschoolevel' onchange='filterclass(event);' min=1 required data-parsley-required-message="Choose To date">
                        <option>Select School level</option>
                            <?php
                            foreach ($this->timetables->getschlevel() as $row) {?>
                                <option value='<?php echo $row->schlevelid; ?>' <?php if($row->schlevelid==$query->schlevelid) echo "selected";?>><?php echo $row->sch_level;?></option>
                            <?php }
                           ?>
                    </select>
                  </div>          
                <div class="form_sep">
                    <label class="req" for="cboschlevel">Class<span style="color:red">*</span></label>
                   <select class="form-control" id='cboclass' name='cboclass' min=1 required data-parsley-required-message="Choose To date">
                        <option>Select Class</option>
                            <?php
                            foreach ($this->timetables->getclass($query->schlevelid) as $row) {?>
                                <option value='<?php echo $row->classid; ?>' <?php if($row->classid==$query->classid) echo "selected" ;?>><?php echo $row->class_name;?></option>
                                
                            <?php }
                           ?>
                    </select>
                  </div> 
                  <div class="form_sep">
                    <label class="req" for="cboschlevel">Academic Year<span style="color:red">*</span></label>
                   <select class="form-control" id='cboyear' name='cboyear' min=1 required data-parsley-required-message="Choose To date">
                        <option>Select Academic Year</option>
                            <?php
                            foreach ($this->timetables->getyear() as $row) {?>
                                <option value='<?php echo $row->yearid; ?>' <?php if($row->yearid==$query->year) echo "selected";?>><?php echo $row->sch_year;?></option>
                            <?php }
                           ?>
                    </select>
                  </div>
                  <div class="form_sep">
                    <label class="req" for="cboschlevel">Day<span style="color:red">*</span></label>
                    <select class="form-control" id='cboday' name='cboday' min=1 required data-parsley-required-message="Choose To date">
                        <option>Select Day</option>
                            <?php
                            foreach ($this->timetables->getday() as $row) {?>
                                <option value='<?php echo $row->dayid; ?>' <?php if($row->dayid==$query->dayid) echo "selected";?>><?php echo $row->dayname;?></option>
                            <?php }
                           ?>
                    </select>
                  </div>
                 <!--  <div class="form_sep">
                    <label class="req" for="cboschool">Leave time</label><br/>
                    <input type="checkbox" name="chbleave" id="chbleave" value="1" <?php if($query->is_leave_time==1) echo "checked"; ?>>
                  </div> -->    
                </div>
            </div>
            <div class="col-sm-6">                         
              <div class="panel-body">         
              <div class="form_sep">
                    <label class="req" for="cboschool">Teacher<span style="color:red">*</span></label>
                    <input type="text" name="txtteacher" id="txtteacher" class="form-control" required data-parsley-required-message="Fill teacher" value="<?php echo $this->timetables->getteachername($query->teacherid)->first_name.' '.$this->timetables->getteachername($query->teacherid)->last_name;?>" />
                    <input type="text" style="display:none;"  name="txtgetteacherid" id="txtgetteacherid" class="form-control" value="<?php echo $query->teacherid;?>" />
                  </div>
              <div class="form_sep">
                    <label class="req" for="cboschlevel">Subject<span style="color:red">*</span></label>
                    <select class="form-control" id='cbosubject' name='cbosubject' min=1 required data-parsley-required-message="Choose To date">
                        <option>Select Subject</option>
                            <?php
                            foreach ($this->db->get('sch_subject_type')->result() as $sj_type) {
                              echo "<option disabled value='$sj_type->subj_type_id'>$sj_type->subject_type</option>";
                            foreach ($this->timetables->getsubject() as $row) {?>
                                <option value='<?php echo $row->subjectid; ?>' <?php if($row->subjectid==$query->subjectid) echo "selected";?>><?php echo '&nbsp;&nbsp;&nbsp;'.$row->subject;?></option>
                            <?php }}
                           ?>  
                    </select>
                </div> 
                <div class="form_sep">
                    <label class="req" for="cboschlevel">Time<span style="color:red">*</span></label>
                    <select class="form-control" id='cbotime' name='cbotime' min=1 required data-parsley-required-message="Choose To date">
                        <option>Select Time</option>
                            <?php
                            foreach ($this->timetables->gettime() as $row) {?>
                                <option value='<?php echo $row->timeid; ?>' <?php if($row->timeid==$query->timeid) echo "selected";?>><?php echo date('H:i',strtotime($row->from_time)).'-'.date('H:i',strtotime($row->to_time));?></option>
                            <?php }
                           ?>
                    </select>
                  </div> 
               <div class="form_sep">
                    <label class="req" for="cboschool">Description</label>
                    <textarea name="txtnote" id="txtnote" style="height:100px;border-radius:4px; resize:none;" class="form-control"><?php echo $query->note?></textarea>                 
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
  if($('#cboschoolevel').val()!=''){
    //filterclass();
  }

  $(function() {
     //--------- parseley validation -----
      $('#fschyear').parsley(); 
      autofillteacher();       
    });   
  //---------- end of validation ----

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