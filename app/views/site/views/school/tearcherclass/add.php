<!-- <div id='msg' style='color:white; background-color:#286090;height:30px;  text-align:center'></div> -->

<div class="wrapper">
  <div class="clearfix" id="main_content_outer">
    <div id="main_content">
      
       <div class="result_info">
        <div class="col-sm-6">
          <strong>Setup Teacher Assignation</strong>  
        </div>
        <div class="col-sm-6" style="text-align: right">
           
          <!-- Block message -->
            <?php if(isset($exist)) echo $exist ?>
            <?PHP if(isset($_GET['save'])){
                  echo "<p id='exist'>Your data has been saved successfully...!</p>";
              }else if(isset($_GET['edit'])){
                  echo "<p id='exist'>Your data has been updated successfully...!</p>";
              }else if(isset($_GET['delete'])){
                  echo "<p style='color:red;'>Your data has been deleted successfully...!</p>";
              }
              echo "<p style='color:red;' id='exist'></p>";
              //echo "";
            ?>
          <!-- End block message -->
        </div> 
      </div> 
      
      <form enctype="multipart/form-data"  method="post" accept-charset="utf-8" action="<?php echo site_url('school/tearcherclass/saves'); ?>" class="tdrow" id="fschyear">
        <div class="row">          
       
           <div class="col-sm-6">           
              <div class="panel-body">
                  <div class="form_sep">
                    <label class="req" for="cboschool">Year<span style="color:red">*</span></label>
                    <!--<input type="text" name="txtyear" id="txtyear" class="form-control" maxlength="4" onkeypress='return isNumberKey(event);' required data-parsley-required-message="Enter year" />-->
                    <select class="form-control" id='cboyear'name='cboyear' min=1 required data-parsley-required-message="Select any school">
                        <option value='0'>Select year</option>
                       <?php foreach ($this->tclass->getschoolyear() as $row) { ?>
                           <option value='<?php echo $row->yearid; ?>' <?php if($row->yearid==$this->session->userdata('year')) echo "selected";?> > <?php echo $row->sch_year;?></option>
                       <?php } ?>
                    </select>
                  </div> 
                  <div class="form_sep">
                   <label class="req" for="cboschlevel">School level<span style="color:red">*</span></label>
                   <select class="form-control" id='cboschoolevel'name='cboschoolevel' onchange='filterclass(event);' min=1 required data-parsley-required-message="Select any school level">
                        <option value='0'>Select School level</option>
                        <?php
                        foreach ($this->tclass->getschlevel() as $row) {?>
                        <option value='<?php echo $row->schlevelid ?>'<?php if(isset($_GET['sl'])) if($_GET['sl']==$row->schlevelid) echo 'selected' ?>><?php echo $row->sch_level?></option>
                       <?php  }
                       ?>
                    </select>
                  </div>  
                  <div class="form_sep">
                    <label class="req" for="cboschool">Teacher<span style="color:red">*</span></label>
                    <input type="text" name="txtteacher" id="txtteacher" class="form-control" required data-parsley-required-message="Fill teacher"/>
                    <input type="text" style="display:none;" name="txtgetteacherid" id="txtgetteacherid" />
                    <input type="text" style="display:none;" name="txttransno" id='txttransno' value=""/>
                  </div>
                  <div class="form_sep">
                    <label class="req" for="cboschool">Class Handle</label>
                    <input type="text" name="txtclasshandle" id="txtclasshandle" class="form-control"/>
                    <input type='text' class='hide' name='txtclasshandleid' id='txtclasshandleid'/>
                  </div>
                  <div class="form_sep">
                      <div class='table-responsive'>
                          <table class='table'>
                            <thead class='thead'>
                              <th>Class</th>
                              <th style='text-align: right;'>Delete</th>
                            </thead>
                            <tbody id='listclasshandle'>
                              
                            </tbody>
                          </table>
                      </div>  
                  </div>  
                  <div class="form_sep">
                    <label class="req" for="cboschool">Class<span style="color:red">*</span></label>
                    <input type="text" name="txtclass" id="txtclass" class="form-control"/>
                    <input type='text' class='hide' name='txtclassid' id='txtclassid'/>
                  </div>
                  <div class="form_sep">
                      <div class='table-responsive'>
                          <table class='table'>
                            <thead class='thead'>
                              <th>Class</th>
                              <th style='text-align: right;'>Delete</th>
                            </thead>
                            <tbody id='listclass'>
                              
                            </tbody>
                          </table>
                      </div>  
                  </div>
                  <div class="form_sep">
                    <!-- <label class="req" for="cboschool">Active</label><br/> -->
                    <input type="checkbox" style="display:none" name="chbinactive" id="chbinactive"  checked="checked" value="1">
                  </div>  
              </div>
            </div>
            
            <div class="col-sm-6">
              <div class="panel-body">
                
                  <div class="form_sep">
                    <label class="req" for="cboschool">Subject<span style="color:red">*</span></label>
                    <input type="text" name="txtsubject" id="txtsubject" class="form-control"/>
                    <input type='text' class='hide' name='txtsubjectid' id='txtsubjectid'/>
                  </div>
                  <div class="form_sep">
                      <div class='table-responsive'>
                          <table class='table'>
                            <thead class='thead'>
                              <th>Subject</th>
                              <th style='text-align: right;'>Delete</th>
                            </thead>
                            <tbody id='listsubject'>
                              
                            </tbody>
                          </table>
                      </div>  
                  </div>
                <div class="form_sep">
                    <table class='table'>
                          <td>
                              <!-- start upload image signature -->
                              <div align='center'>
                                    <img  src="<?php echo site_url('../assets/upload/No_person.jpg') ?>" id="uploadPreview" style='width:88px; height:77px; margin-bottom:15px; border:1px solid #CCCCCC;'>
                                    <input id="uploadImage" accept="image/gif, image/jpeg, image/jpg, image/png" type="file" name="userfile"  onchange="PreviewImage();" style="visibility:hidden; display:none" />
                              </div>
                              <div align='center'>
                                    <input type='button' class="btn btn-success" onclick="$('#uploadImage').click();" value='Signature'/>
                              </div>
                              <!-- end upload image signature -->
                          </td>
                          <td><label class="req" for="cboschool">Description</label>
                              <textarea name="txtaddress" id="txtaddress" style="height:55px;border-radius:4px; resize:none;" class="form-control"></textarea>
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
<style type="text/css">
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
</style>

<script type="text/javascript"> 

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

//-------- Upload image signature -------------- 
function PreviewImage() {
      var oFReader = new FileReader();
      oFReader.readAsDataURL(document.getElementById("uploadImage").files[0]);

      oFReader.onload = function (oFREvent) {
          document.getElementById("uploadPreview").src = oFREvent.target.result;
          document.getElementById("uploadPreview").style.backgroundImage = "none";
      };
  };
  //----- end upload image signature ------------

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
  //var countclasshandle=$('.class_handle_id').length;
  var countsubject=$('.subjectid').length;
  if(countclass>0 && countsubject>0){
    $('#fschyear').submit();
    $('#exist').html('');
  }else{
    $('#exist').html('Please select any class or subject for teacher...!');
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
          $('#exist').html('Data is already exist...!');
        }
      }           
    });
}
//---------- end autocomplete ----------------------

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
              url:"<?php echo site_url(); ?>school/tearcherclass/getsubjecttolist",    
              data: {'subjectid':subject_id},
              type:"post",
              success: function(data){
                $('#listsubject').append(data);
            }
        });
  }
 
</script>