<style>
  .gradecls{
    margin-top: 30px;
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
   .tdrow tr,.tdrow th,.tdrow td{
    border: none !important; 
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
            <strong>
                   <?php if(isset($error)) echo $error ?>  
            </strong>
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

         if(isset($modi->modified_by))
                 $user=$this->db->where('userid',$modi->modified_by)->get('sch_user')->row()->user_name;
      ?>
      <form method="post" accept-charset="utf-8" action="<?php echo site_url('school/classes/saveclass?m='.$m.'&p='.$p.''); ?>" class="tdrow" id="fschyear">
            <input type="text" style='display:none'  name="txtlabelid" id='txtlabelid' value="<?php echo $data->grade_labelid;?>"/>
            <input type="text" style='display:none' name="txtschooid" id='txtschooid' value="<?php echo $data->schoolid;?>"/>
            <label style="float:right !important; font-size:11px !important; color:red;"><?php if(isset($modi->modified_by)) echo "Last Modified Date: ".date_format(date_create($modi->modified_date),'d-m-Y H:i:s')." By : $user"; ?></label>
        <div class="row">   
           <div class="col-sm-6">
                <div class="panel-body">
                    <div class="form_sep">
                    <label class="req" for="cboschool">School<span style="color:red">*</span></label>
                    <input class='hide' type='text' name="schoolid" value="<?php echo $data->schoolid ?>"/>
                    <select class="form-control" disabled id='cboschool' name='cboschool' min=1 required data-parsley-required-message="Choose To date">
                        <option>Select School</option>
                            <?php
                            foreach ($this->getclassmode->getschool() as $row) {?>
                                <option readonly value='<?php echo $row->schoolid; ?>' <?php if($row->schoolid==$data->schoolid) echo "selected";?>><?php echo $row->name;?></option>
                            <?php }
                           ?>
                      </select>
                  </div> 
                  <div class="form_sep">
                    <label class="req" for="cboschool">Grade Label<span style="color:red">*</span></label>
                    <input class='hide' type='text' name="grade_labelid" value="<?php echo $data->grade_labelid ?>"/>
                    <select class="form-control" disabled id='cbolabel'name='cbolabel' min=1 required data-parsley-required-message="Select any Subject">
                        <option value='0'>Select Label</option>
                        <?php
                        foreach ($this->getclassmode->getgradelabel() as $row) {?>
                            <option readonly value='<?php echo $row->grade_labelid; ?>' <?php if($row->grade_labelid==$data->grade_labelid) echo "selected";?>><?php echo $row->grade_label;?></option>
                        <?php }
                        ?>
                    </select>
                  </div> 
                </div>
            </div>
            <div class="col-sm-6">                          
              <div class="panel-body"> 
              <div class="form_sep">
                    <table class="gradecls">
                       <?php 
                       $i=1;
                          echo "<tr></tr>";
                          //----- Select label to display for label textbox ----
                          echo "<td class='ex exlabel'><input name='l_label' type='text' class='hide' id='l_label' /><span id='sp_label'>";
                            if(isset($data)){
                                echo $data->grade_label;
                            }

                            echo "</span></td>";
                          //$le=1;
                          //----- End Select -----------------------------------
                         foreach($query as $row){?>
                         
                             <td  class='ex'><input type='text' id="ch<?php echo $i; ?>" class="ex" name='glabel[]' style="width:32px" 
                              <?php
                                 if($this->getclassmode->getclass($row->grade_levelid, $data->grade_labelid, $data->schoolid) > 0 )
                                    echo "value='".$this->getclassmode->getclassname($row->grade_levelid, $data->grade_labelid, $this->session->userdata('schoolid'))->class_name."'";
                                  //$le++;                              
                              ?>
                              /></td>
                            <?php $i++; 
                        } echo "</tr>"; ?>
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
                            foreach($query as $row){
                              if($this->getclassmode->getclass($row->grade_levelid, $data->grade_labelid, $data->schoolid) > 0 ){
                              ?>
                                 <td><input type='text' value='<?php echo $row->grade_levelid; ?>' name='dk<?php echo $j; ?>' class='hide'/><input type='checkbox' rel="<?php echo $j; ?>" id="chk" name="chk<?php echo $j; ?>" class="chk<?php echo $j; ?>" value='<?php echo $row->grade_levelid; ?>' checked/></td>
                               <?php
                              }else{
                                 ?>
                                <td><input type='text' value='<?php echo $row->grade_levelid; ?>' name='dk<?php echo $j; ?>' class='hide'/><input type='checkbox' rel="<?php echo $j; ?>" id="chk"  name="chk<?php echo $j; ?>" class="chk<?php echo $j; ?>" value='<?php echo $row->grade_levelid; ?> '/></td>
                                 <?php
                              }
                               
                               $j++;
                        }
                         echo "</tr>";
                             
                        ?>
                        <input type='text' class='hide' value='<?php echo $j ?>' name='totallevel'/>
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
                  <input type="submit" name="btnsaves" id='btnsave' value="Save" class="btn btn-primary" />
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