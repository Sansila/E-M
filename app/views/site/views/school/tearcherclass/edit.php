<div class="wrapper">
    <div class="clearfix" id="main_content_outer">
    <div id="main_content">
      
       <div class="result_info">
        <div class="col-sm-6">
            <strong>Setup Teacher Assignation</strong>  
        </div>
        <div class="col-sm-6" style="text-align: right">
            <strong>
                       
            </strong>
            <!-- block messate -->
            <?php if(isset($exist)) echo $exist;
            echo "<p style='color:red;' id='exist'></p>";
            ?>
          <!-- End block message -->   
        </div> 
      </div> 
      <form method="post"  enctype="multipart/form-data" accept-charset="utf-8" action="<?php echo site_url('school/tearcherclass/saves'); ?>" class="tdrow" id="fschyear">
        <div class="row">          
       
           <div class="col-sm-6">           
                <div class="panel-body">
                <div class="form_sep">
                    <label class="req" for="cboschlevel">Academic Year<span style="color:red">*</span></label>
                   <select class="form-control" disabled id='cboyear' name='cboyear' min=1 required data-parsley-required-message="Choose To date">
                        <option>Select Year</option>
                            <?php
                            foreach ($this->tclass->getyear() as $row) {?>
                                <option value='<?php echo $row->yearid; ?>' <?php if($row->yearid==$classrow->yearid) echo "selected";?>><?php echo $row->sch_year;?></option>
                            <?php }
                           ?>
                    </select>
                    <input type="text" style="display:none;" name="txtyear" id='txtyear' value="<?php echo $classrow->yearid;?>"/>
                  </div>
                  <div class="form_sep">
                    <label class="req" for="cboschlevel">School level<span style="color:red">*</span></label>
                    <select class="form-control" id='cboschoolevel'name='cboschoolevel' onchange='filterclass(event);' min=1 required data-parsley-required-message="Select any school level">
                        <option value='0'>Select School level</option>
                        <?php
                        foreach ($this->tclass->getschlevel() as $row) {?>
                        <option value='<?php echo $row->schlevelid ?>'<?php if($classrow->schlevelid==$row->schlevelid) echo 'selected' ?>><?php echo $row->sch_level?></option>
                       <?php  }
                       ?>
                    </select>
                    <input type="text" style="display:none;" name="txtschlevel" id='txtschlevel' value="<?php echo $classrow->schlevelid;?>"/>
                  </div>         
                <div class="form_sep">
                    <label class="req" for="cboschool">Teacher<span style="color:red">*</span></label>
                    <input type="text" disabled name="txtteacher" id="txtteacher" class="form-control" required data-parsley-required-message="Enter grade label" value="<?php  echo $classrow->last_name." ". $classrow->first_name ?>" />
                    <input type="text" style="display:none;" name="txtgetteacherid" id="txtgetteacherid" class="form-control"  value="<?php echo $classrow->teacher_id;?>"/>
                    <input type="text" style="display:none;" name="txttransno" id='txttransno' value="<?php echo $classrow->transno;?>"/>
                </div>
                <div class="form_sep">
                    <label class="req" for="cboschool">Class Handle<span style="color:red">*</span></label>
                    <input type="text" name="txtclasshandle" id="txtclasshandle" class="form-control" />
                </div>
                <div class="form_sep">
                      <div class='table-responsive'>
                          <table class='table'>
                            <thead class='thead'>
                              <th>Class name</th>
                              <th style='text-align: right;'>Delete</th>
                            </thead>
                            <tbody id='listclasshandle'>
                                <?php foreach ($this->db->where('transno',$classrow->transno)->get('sch_teacher_classhandle')->result() as $teacher_class) {
                                  $class=$this->db->where('classid',$teacher_class->class_id)->get('sch_class')->row();
                                  echo "<tr style='border-bottom: 1px solid #DDDDDD !important;'>
                                          <td><input style='display:none;' type='text' class='class_handle_id' name='class_handle_id[]' value='$class->classid' />$class->class_name</td>
                                          <td style='text-align: right;'>
                                              <a>
                                                <img onclick='removerow(event);' src='".base_url()."assets/images/icons/delete.png' />
                                              </a>
                                            </td>
                                        </tr>";
                                } ?>
                            </tbody>
                          </table>
                      </div>  
                  </div>     
                <div class="form_sep">
                    <label class="req" for="cboschool">Class<span style="color:red">*</span></label>
                    <input type="text" name="txtclass" id="txtclass" class="form-control" />
                </div>
                <div class="form_sep">
                      <div class='table-responsive'>
                          <table class='table'>
                            <thead class='thead'>
                              <th>Class name</th>
                              <th style='text-align: right;'>Delete</th>
                            </thead>
                            <tbody id='listclass'>
                                <?php foreach ($this->db->where('transno',$classrow->transno)->get('sch_teacher_class')->result() as $teacher_class) {
                                  $class=$this->db->where('classid',$teacher_class->class_id)->get('sch_class')->row();
                                  echo "<tr style='border-bottom: 1px solid #DDDDDD !important;'>
                                          <td><input style='display:none;' type='text' class='class_id' name='class_id[]' value='$class->classid' />$class->class_name</td>
                                          <td style='text-align: right;'>
                                              <a>
                                                <img onclick='removerow(event);' src='".base_url()."assets/images/icons/delete.png' />
                                              </a>
                                            </td>
                                        </tr>";
                                } ?>
                            </tbody>
                          </table>
                      </div>  
                  </div>
                 <div class="form_sep">
                      <!-- <label class="req" for="cboschool">Active</label><br/> -->
                      <input type="checkbox" style="display:none;" name="chbinactive" id="chbinactive" value="1" <?php if($classrow->is_active==1) echo "checked"; ?>>
                    </div> 
                  </div>
            </div>
            <div class="col-sm-6">                          
              <div class="panel-body">
                <div class="form_sep">
                    <label class="req" for="cboschool">Subject<span style="color:red">*</span></label>
                    <input type="text" name="txtsubject" id="txtsubject" class="form-control" />
                  </div>
                  <div class="form_sep">
                      <div class='table-responsive'>
                          <table class='table'>
                            <thead class='thead'>
                              <th>Subject</th>
                              <th style='text-align: right;'>Delete</th>
                            </thead>
                            <tbody id='listsubject'>
                                <?php foreach ($this->db->where('transno',$subjectrow->transno)->get('sch_teacher_subject')->result() as $teacher_subject) {
                                  $subject=$this->db->where('subjectid',$teacher_subject->subject_id)->get('sch_subject')->row();
                                  echo "<tr style='border-bottom: 1px solid #DDDDDD !important;'>
                                          <td><input style='display:none;' type='text' class='subjectid' name='subjectid[]' value='$subject->subjectid'/>$subject->subject</td>
                                          <td style='text-align: right;'>
                                              <a>
                                                <img onclick='removerow(event);' src='".base_url()."assets/images/icons/delete.png' />
                                              </a>
                                            </td>
                                        </tr>";
                                } ?>
                            </tbody>
                          </table>
                      </div>  
                  </div>
                 <div class="form_sep">
                    <table class='table'>
                        <td>
                    <div align='center'>
                        <img class="img" src="<?php if(@ file_get_contents(site_url('../assets/upload/teacher/Signature/'.$classrow->teacher_id.'.jpg'))) echo site_url('../assets/upload/teacher/Signature/'.$classrow->teacher_id.'.jpg'); else echo site_url('../assets/upload/No_person.jpg') ?>" id="uploadPreview" style='width:88px; height:77px; margin-bottom:15px'>
                        <input id="uploadImage" type="file" accept="image/gif, image/jpeg, image/jpg, image/png" name="userfile" onchange="PreviewImage();" style="visibility:hidden; display:none;" />
                  </div>
                  <div align='center'>
                        <input type='button' class="btn btn-success" onclick="$('#uploadImage').click();" value='Signature'/>
                  </div>
                        </td>
                        <td>
                            <label class="req" for="cboschool">Description</label>
                            <textarea name="txtaddress" id="txtaddress" style="height:55px;border-radius:4px; resize:none;" class="form-control"><?php echo $classrow->note?></textarea>
                        </td>           
                    </table>
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
   table tbody tr td img{width: 20px; margin-right: 10px}
   .thead{
        border-style: solid;
        border-width: 2px;
        border-left: 0px;
        border-right: 0px;
        border-top: 0px;
        border-color: #DDDDDD;
  }
  .img{
    border:1px solid #DDDDDD;
  }
</style>

<script type="text/javascript">
//-------- Upload image logo -------------- 
function PreviewImage() {
    var oFReader = new FileReader();
    oFReader.readAsDataURL(document.getElementById("uploadImage").files[0]);

    oFReader.onload = function (oFREvent) {
        document.getElementById("uploadPreview").src = oFREvent.target.result;
        document.getElementById("uploadPreview").style.backgroundImage = "none";
    };
};
//-------- End Upload image logo -------------- 
$(function() {
   //--------- parseley validation -----
    $('#fschyear').parsley(); 
        autofillteacher(); 
        autofillclasshandle();
        autofillclass();
        autofillsubject(); 
        filterclass();     
  });   
//---------- end of validation ----

//---------- auto complete ------------
function autofillteacher(){    
  var fillteacher="<?php echo site_url("school/tearcherclass/fillteacher")?>";
    $("#txtteacher").autocomplete({
      source: fillteacher,
      minLength:0,
      select: function(events,ui) {          
        var f_id=ui.item.id;
        $("#txtgetteacherid").val(f_id); 
      }           
    });
}
$('#btnsaves').click(function(){
  //----- validate teacher class -----------
  var countclass= $('.class_id').length;
  var countclasshandle=$('.class_handle_id').length;
  var countsubject=$('.subjectid').length;
  if(countclass>0 && countclasshandle>0 && countsubject>0){
    $('#fschyear').submit();
    $('#exist').html('');
  }else{
    $('#exist').html('Please select any class or class handle or subject for teacher...!');
  }
})
function autofillclasshandle(){
  var schlevelids=jQuery('#cboschoolevel').val();
  var fillclasshandle="<?php echo site_url("school/tearcherclass/fillclasshandle")?>/"+schlevelids;
    $("#txtclasshandle").autocomplete({
      source: fillclasshandle,
      minLength:0,
      select: function(events,ui) {          
        var class_handle_id=ui.item.id;
        var exist=false;
        $("#txtclasshandleid").val(class_handle_id); 
        $('.class_handle_id').each(function(){
            var old_class=$(this).val();
           if(old_class==class_handle_id)
              exist=true;
        })
        if(exist==false){
           getclasshandletolist(class_handle_id);
           $('#exist').html('');
        }else{
          $('#exist').html('Data is already exist...!');
        }
      }           
    });
}
function autofillclass(){
  var schlevelid=jQuery('#cboschoolevel').val();
  var fillclass="<?php echo site_url("school/tearcherclass/fillclass")?>/"+schlevelid;
    $("#txtclass").autocomplete({
      source: fillclass,
      minLength:0,
      select: function(events,ui) {          
        var class_id=ui.item.id;
        var exist=false;
        $("#txtclassid").val(class_id); 
        $('.class_id').each(function(){
            var old_class=$(this).val();
           if(old_class==class_id)
              exist=true;
        })
        if(exist==false){
           getclasstolist(class_id);
           $('#exist').html('');
        }else{
          $('#exist').html('Data is already exist...!');
        }
      }           
    });
}
function autofillsubject(){    
  var fillclass="<?php echo site_url("school/tearcherclass/fillsubject")?>";
    $("#txtsubject").autocomplete({
      source: fillclass,
      minLength:0,
      select: function(events,ui) {          
        var subject_id=ui.item.id;
        var exist=false;
        $("#txtsubjectid").val(subject_id); 
        $('.subjectid').each(function(){
            var old_subject=$(this).val();
           if(old_subject==subject_id)
              exist=true;
        })
        if(exist==false){
           getsubjecttolist(subject_id);
           $('#exist').html('');
        }else{
          $('#exist').html('Data is already existed !');
        }
      }           
    });  
}
//---------- end autocomplete ----------------------

function getclasstolist(class_id){
    $.ajax({
              url:"<?php echo site_url(); ?>school/tearcherclass/getclasstolist",    
              data: {'classid':class_id},
              type:"post",
              success: function(data){
                $('#listclass').append(data);
            }
        });
  }
  function getclasshandletolist(class_handle_id){
    $.ajax({
              url:"<?php echo site_url(); ?>school/tearcherclass/getclasshandletolist",    
              data: {'classhandleid':class_handle_id},
              type:"post",
              success: function(data){
                $('#listclasshandle').append(data);
            }
        });
  }
  function getsubjecttolist(subject_id){
    $.ajax({
              url:"<?php echo base_url(); ?>index.php/school/tearcherclass/getsubjecttolist",    
              data: {'subjectid':subject_id},
              type:"post",
              success: function(data){
                $('#listsubject').append(data);
            }
        });    
  }

function removerow(event){
    var transno=$(event.target).attr('tran');
    var r = confirm("Are you sure to delete this item !");
      if (r == true) {
        var row_class=$(event.target).closest('tr').remove();
      }
}

function filterclass(event){
    var schlevelid=jQuery('#cboschoolevel').val();

    $.ajax({
       url:"<?php echo site_url('school/tearcherclass/getschlevelid'); ?>",   
       data: {
              'schlevelid':schlevelid,
             },
       type: "POST",
       success: function(data){
          jQuery('#cboclass').html(data);                   
       }
     });
    //----- fill via school level -----
    autofillclass();
    autofillclasshandle();
}

$("#btncancel").click(function(){
    var r = confirm("Do you want to cancel?");
    if (r == true) {
      location.href=("<?php echo site_url('school/tearcherclass/');?>");
    } else {
      
    } 
});
</script>