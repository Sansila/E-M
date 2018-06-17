<style>
  .gradecls{
    margin-top: 20px;
  }
  .gradecls td{
    padding:0 10px;
    
  }
  .gradecls ul{display: none !important;}
  .ex{
    padding:3px !important;
    vertical-align: center !important;
  }
  .tdrow tr,.tdrow th,.tdrow td{
    border: none !important;
   }
   .exlabel{
      width:20px;
   }
</style>

<div class="wrapper">
  <div class="clearfix" id="main_content_outer">
    <div id="main_content">
      
       <div class="result_info">
        <div class="col-sm-6">
          <strong>Setup Class</strong>  
        </div>
        <div class="col-sm-6" style="text-align: right">
         
              <?php if(isset($error)) echo $error ?>
         
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
      <form method="post" accept-charset="utf-8" action="<?php echo site_url('school/classes/saves?m='.$m.'&p='.$p.''); ?>" class="tdrow" id="fschyear">
        <div class="row">          
       
           <div class="col-sm-6">           
              <div class="panel-body">
                  <!-- <div class="form_sep">
                    <label class="req" for="cboschool">Class name<span style="color:red">*</span></label>
                    <input type="text" name="txtglabel" id="txtglabel" class="form-control" required data-parsley-required-message="Enter grade level" />
                  </div> -->
                  <div class="form_sep">
                    <label class="req" for="cboschool">School<span style="color:red">*</span></label>
                    <select class="form-control" id='cboschool' name='cboschool' min='1' required data-parsley-required-message="Select any school">
                        <option value='0'>Select School</option>
                        <?php foreach ($this->getclassmode->getschool() as $schoolrow) { ?>
                           <option value="<?php echo $schoolrow->schoolid; ?>" <?php if($schoolrow->schoolid==$this->session->userdata('schoolid')) echo "selected";?> > <?php echo $schoolrow->name;?></option>
                        <?php } ?>
                    </select>
                  </div> 
                  <div class="form_sep">
                    <label class="req" for="cboschool">Grade Label<span style="color:red">*</span></label>
                    <select class="form-control" id='cbogradelabel'name='cbogradelabel' min=1 required data-parsley-required-message="Select any school" >
                        <option value='0'>Select Label</option>
                        <?php
                        foreach ($this->getclassmode->getgradelabel() as $row) {
                        echo "<option value='$row->grade_labelid' rel='$row->grade_label' id='opt'>$row->grade_label</option>";
                        }
                       ?>
                    </select>
                  </div>

              </div>
            </div>
            
            <div class="col-sm-6">                        
              <div class="panel-body" style="padding-left:0;">
                  
                  <div class="form_sep">
                       <table class="gradecls">
                       <?php 
                       $i=1;
                          echo "<tr></tr>";
                          //----- Select label to display for label textbox ----
                          echo "<td class='ex exlabel'><input name='l_label' type='text' class='hide' id='l_label' /><span id='sp_label'></span></td>";
                          //----- End Select -----------------------------------
                          foreach($query as $row){?>
                             <td  class='ex'><input type='text'  id="ch<?php echo $i; ?>" class="ex" name='glabel[]' style="width:32px"/></td>
                            <?php $i++; ?>
                       <?php } echo "</tr>";
                       ?> 
                       </table>                  
                  </div>

                  <div class="form_sep">
                    <div class='table-responsive'>
                       <table class="gradecls">
                       <?php 
                       $i=1;
                       echo "<tr>";
                          foreach($query as $row){
                              echo "<td>$row->grade_level</td>";
                              $i++;
                            }
                       echo "</tr>";
                      $j=1;
                       echo "<tr>";
                          foreach($query as $row){?>
                             <td><input type='checkbox' disabled rel="<?php echo $j; ?>" id="chk" name="chk<?php echo $j; ?>" class="chk<?php echo $j; ?>" value='<?php echo $row->grade_levelid; ?> '/></td>
                             
                             <?php $j++; ?> 
                       <?php } echo "</tr>"; 
                       ?> 
                       <input type='text' class='hide' value='<?php echo $j ?>' name='totallevel'/>
                       </table>
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
                  <input type="submit" name="btnsave" id='btnsave' value="Save" class="btn btn-primary" />
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

<script type="text/javascript">  

    $(function() {
      $('#fschyear').parsley();

      $("#btncancel").click(function(){
            var r = confirm("Do you want to cancel?");
            if (r == true) {
              location.href=("<?php echo site_url('school/classes/?m='.$m.'&p='.$p.'');?>");  
            } else {
              
            }
        }); 

//----- Checkbox pass value to textbox ----
$('.gradecls :checkbox').click(function() {
  var id=$(this).attr('rel');
  var glabel = $("#sp_label").text();
  if($('.chk'+id).is(':checked')){
    $("#ch"+id).val(id+glabel);
  }else{
    $("#ch"+id).val("");
  }
});
//---- End Checkbox ------------------------

//----- Select label to display for label textbox ----
$("#cbogradelabel").change(function(){
  var sbox = $("#cbogradelabel option:selected").text();
  $(".gradecls :text").val("");
  $(".gradecls :checkbox").attr("checked", false);
  if(sbox!="Select Label"){
    $("#sp_label").text(sbox);
    $("#l_label").val(sbox);
    $(".gradecls :checkbox").removeAttr('disabled');
    
  }else{
    $("#sp_label").text("");
    $(".gradecls :checkbox").attr('disabled','disabled');
  }
});
//----- End select -----------------------------------
});
</script>