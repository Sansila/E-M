<div class="wrapper">
    <div class="clearfix" id="main_content_outer">
    <div id="main_content">
      
       <div class="result_info">
        <div class="col-sm-6">
            <strong>Setup School Level</strong>  
        </div>
        <div class="col-sm-6" style="text-align: right">
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
      <form enctype="multipart/form-data" method="post" accept-charset="utf-8" action='<?php echo site_url("school/schoollevel/save?m=$m&p=$p")?>' class="tdrow" id="fschyear">
            <input type="text" style="display:none;" name="txtlevel_id" id='txtlevel_id' value="<?php echo $query->schlevelid;?>"/>
        <div class="row">          
       
           <div class="col-sm-6">           
                <div class="panel-body">
                    <div class="form_sep">
                      <label class="req" for="cboschool">School</label>
                      <select class="form-control" id='cboschool' name='cboschool' min=1 required data-parsley-required-message="Choose To date">
                        <option>Select School</option>
                            <?php
                            foreach ($this->schoollevels->getschool() as $schoolrow) {?>
                                <option value='<?php echo $schoolrow->schoolid; ?>' <?php if($schoolrow->schoolid==$query->schoolid) echo "selected";?>><?php echo $schoolrow->name;?></option>
                           <?php }
                           ?>
                      </select>
                    </div>
                    <div class="form_sep">
                      <label class="req" for="cboschool">School level<span style="color:red">*</span></label>
                      <input type="text" name="txtlevel" id="txtlevel" class="form-control" required data-parsley-required-message="Choose To date" value="<?php echo $query->sch_level?>" />
                    </div> 
                    <div class="form_sep">
                      <label class="req" for="cboschool">Order</label>
                      <input type="text" name="txtorder" id="txtorder" onkeypress='return isNumberKey(event);' class="form-control" required data-parsley-required-message="Choose To date" value="<?php echo $query->orders?>" />
                    </div>     
                    <div class="form_sep hide">
                      <label class="req" for="cboschool">Is vtc</label><br/>
                      <input type="checkbox" name="chbvtc" id="chbvtc"  <?php if($query->is_vtc==1) echo "checked"; ?>>
                  </div>                
                </div>
            </div>
            
            <div class="col-sm-6">                          
              <div class="panel-body">
                <div class="form_sep">
                <div class="form_sep">
                  <label class="req" for="classid">Description</label>
                  <!-- <div class='input-group date' id='datetimepicker'> -->
                     <textarea name="txtdesc" id="txtdesc" style="width:450px;height:80px; resize:none;" class="form-control" ><?php echo $query->note?></textarea>
                     <!-- <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"> -->
                  <!-- </div> -->
                </div>
                 <div class="form_sep hide">
                    <label class="req" for="cboschool">Director<span style="color:red">*</span></label>
                    <!-- <input type="text" name="director" id="director" value='<?PHP echo $query->last_name.' '.$query->first_name ?>'  class="form-control" required data-parsley-required-message="Choose Director" /> -->
                    <input type="text" name="directorid" id="directorid" value='<?PHP echo $query->schlv_director ?>' class="hide" />
                </div>   
                <div class="form_sep">
                    <img id="uploadPreview" src='<?php if(@ file_get_contents(site_url('../assets/upload/school/director/'.$query->schlevelid.'.jpg'))) echo site_url('../assets/upload/school/director/'.$query->schlevelid.'.jpg'); else echo site_url('../assets/upload/NoImage.png') ?>' style='width:160px; height:100px; margin-top:10px; margin-right:15px; border:1px solid #CCCCCC'/>
                    <input id="uploadImage" accept="image/gif, image/jpeg, image/jpg, image/png" type="file" name="userfile" onchange="PreviewImage();" style="visibility:hidden; display:none" />
                    <input type='button' class="btn btn-success" onclick="$('#uploadImage').click();" value='Browse'/>
                </div>                  
              </div> 
            </div>  
             
        </div>
        
        <div class="row">
          <div class="col-sm-12">
            
            <div class="panel-body">
                <div class="form_sep">
                  <?php if($this->green->gAction("C")){ ?>
                  <input type="submit" name="btnsaves" id='btnsaves' value="Save" class="btn btn-primary" />
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
function PreviewImage() {
    var oFReader = new FileReader();
    oFReader.readAsDataURL(document.getElementById("uploadImage").files[0]);

    oFReader.onload = function (oFREvent) {
        document.getElementById("uploadPreview").src = oFREvent.target.result;
         document.getElementById("uploadPreview").style.backgroundImage = "none";
    };
}
function isNumberKey(evt){
    var e = window.event || evt; // for trans-browser compatibility 
    var charCode = e.which || e.keyCode; 
    if ((charCode > 47 && charCode < 58 ) || charCode == 8 || charCode==37 || charCode==39 || charCode==46){ 
        return true; 
    } 
    return false;  
}

$(function() {
  //--------- parseley validation -----
        filldirector();
        $('#fschyear').parsley();  
       
  });     
  //---------- end of validation ----
 function filldirector(){    
    var techer="<?php echo site_url("school/schoollevel/filldirector")?>";
      $("#director").autocomplete({
        source: techer,
        minLength:0,
        select: function( events, ui ) {
          $('#directorid').val(ui.item.id);
        }     
    });
}
$("#btncancel").click(function(){
   var r = confirm("Do you want to cancel?");
       if (r == true) {
          location.href=("<?php echo site_url('school/schoollevel/?m='.$m.'&p='.$p.'');?>");  
     } else {
          
  }
});


</script>