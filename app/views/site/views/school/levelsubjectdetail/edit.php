<style>
  .gradecls td{
    padding:0 10px;
  }
</style>

<div class="wrapper">
    <div class="clearfix" id="main_content_outer">
    <div id="main_content">
      
       <div class="result_info">
        <div class="col-sm-6">
            <strong>Setup Level Subject Detail</strong>  
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

          if ($query->modified_by !='')
                $user=$this->db->where('userid',$query->modified_by)->get('sch_user')->row()->user_name;
      ?>
      <form method="post" accept-charset="utf-8" action="<?php echo site_url("school/levelsubjectdetail/savelevelsubject?m=$m&p=$p"); ?>" class="tdrow" id="fschyear">
            <input type="text" style="display:none;" name="txtsubjlevelid" id='txtsubjlevelid' value=""/>
            <label style="float:right !important; font-size:11px !important; color:red;"><?php if($query->modified_by!='') echo "Last Modified Date: ".date_format(date_create($query->modified_date),'d-m-Y H:i:s')." By : $user"; ?></label> 
        <div class="row"> 
           <div class="col-sm-6">           
                <div class="panel-body">
                    <div class="form_sep">
                    <label class="req" for="cboschool">School name<span style="color:red">*</span></label>
                    <input class='hide' type='text' name="schoolid" value="<?php echo $data->school ?>"/>
                    <select disabled class="form-control" id='cboschool' name='cboschool' min=1 required data-parsley-required-message="Choose To date">
                        <option>Select School</option>
                            <?php
                            foreach ($this->levelsubjectdetails->getschool() as $row) {?>
                                <option readonly value='<?php echo $row->schoolid; ?>' <?php if($row->schoolid==$data->school) echo "selected";?>><?php echo $row->name;?></option>
                            <?php }
                           ?>
                      </select>
                  </div> 
                  <div class="form_sep">
                    <label class="req" for="cboschool">Year<span style="color:red">*</span></label>
                    <input class='hide' type='text' name="yearid" value="<?php echo $data->year ?>"/>
                    <!--<input type="text" name="txtyear" id="txtyear" class="form-control" maxlength="4" onkeypress='return isNumberKey(event);' required data-parsley-required-message="Enter year" />-->
                    <select disabled class="form-control" id='cboyear' name='cboyear' min=1 required data-parsley-required-message="Select any school">
                        <option value='0'>Select year</option>
                       <?php foreach ($this->levelsubjectdetails->getschoolyear() as $row) { ?>
                           <option readonly value='<?php echo $row->yearid; ?>' <?php if($row->yearid==$data->year) echo "selected";?> > <?php echo $row->sch_year;?></option>
                       <?php } ?>
                    </select>
                  </div>
                  <div class="form_sep">
                    <label class="req" for="cboschool">Subject<span style="color:red">*</span></label>
                    <input class='hide' type='text' name="subjectid" value="<?php echo $data->subjectid ?>"/>
                    <select disabled class="form-control" id='cbosubject' name='cbosubject' min=1 required data-parsley-required-message="Select any Subject">
                        <option value='0'>Select Subject</option>
                        <?php
                        foreach ($this->levelsubjectdetails->getsubject() as $row) {?>
                            <option readonly value='<?php echo $row->subjectid; ?>' <?php if($row->subjectid==$data->subjectid) echo "selected";?>><?php echo $row->subject;?></option>
                        <?php }
                        ?>
                    </select>
                  </div> 

                </div>
            </div>
            <div class="col-sm-6">                          
              <div class="panel-body">
              <div class="form_sep">
                  <label class="req" for="classid">Description</label>
                      <textarea name="txtdesc" id="txtdesc" style="height:90px;border-radius:4px; resize:none;" class="form-control"><?php if(isset($query->note)) echo $query->note?></textarea>                         
                </div>
             <div class="form_sep">
                  <label class="req" for="classid">Grade Level<span style="color:red">*</span></label>
                  <div class='table-responsive'>
                     <table class="gradecls">
                     <?php 
                     $i=1;
                     echo "<tr>";
                        foreach($grade as $row){
                            echo "<td>$row->grade_level</td>";
                            $i++;
                          }
                    echo "</tr>";
                    echo "<tr>";
                        foreach($grade as $row){
                           if($this->levelsubjectdetails->getlevelsubject($row->grade_levelid, $data->subjectid,$data->year,$data->school) > 0 )
                              echo "<td><input type='checkbox'  name='grade[]' value='$row->grade_levelid' checked ></td>";
                            else
                              echo "<td><input type='checkbox' name='grade[]' value='$row->grade_levelid' ></td>";
                     }      
                     echo "</tr>"; 
                     ?> 
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
<style>
   .tdrow tr,.tdrow th,.tdrow td{
    border: none !important; 
  }
</style>
<script type="text/javascript">
     $(function() {
      //----- Start Date time picker -----
        $('#txtdate').datepicker({format: 'dd-mm-yyyy'});        
        //----- End ate time picker -----

        //--------- parseley validation -----
         $("#btncancel").click(function(){
             var r = confirm("Do you want to cancel?");
                 if (r == true) {
                     location.href=("<?php echo site_url('school/levelsubjectdetail/?m='.$m.'&p='.$p.'');?>");  
               } else {    
            }
        });
    });
     //---- this functioin is not use any more ----
     function updatelevelsubjectde(){
            var schoolid=$('#cboschool').val();
            var subjectid=$('#cbosubject').val();
            var yearid=$('#cboyear').val();
            var desc=$('#txtdesc').val();
            var counlevel=$(".countlevel").val();
             //---- delete all ------
             $.ajax({
                      url:"<?php echo site_url('school/levelsubjectdetail/deletelevelsubject'); ?>",    
                      data: {
                          'schoolid':schoolid,
                          'subjectid':subjectid,
                          'year':yearid
                      },
                      type: "POST",
                      success: function(data){
                            //---- insert new all -----
                             $(".level").each(function() {
                                 if($(this).is(':checked')){
                                    var glevelid=$(this).attr('rel');
                                     $.ajax({
                                              url:"<?php echo site_url('school/levelsubjectdetail/savelevelsubject'); ?>",    
                                              data: {
                                                  'schoolid':schoolid,
                                                  'subjectid':subjectid,
                                                  'glevel':glevelid,
                                                  'year':yearid,
                                                  'desc':desc,
                                              },
                                              type: "POST",
                                              
                                              success: function(data){
                                            }
                                          
                                      });
                                   }
                           });
                    }
                  
              });
           
       }
</script>