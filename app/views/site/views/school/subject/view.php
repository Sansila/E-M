<style type="text/css"> 
 
  a{
    cursor: pointer;
  }
 table tbody tr td img{
  width: 20px;  
 }
 </style>
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
<div class="row">          
 <div class="col-sm-12">    
  <div class="panel panel-default">
        
    <div class="panel-body">                 
    <div class="table-responsive">  
      
      <table border="0"​ align="center" id='listsubject' class="table">
          <thead>
        <th align=center width=40>No</th>
        <th width=120>Subject</th>
        <th width=120>Subject (KH)</th>
        <th width=120>Subject type</th>
        <th width=120>Sort Subject</th>
        <th>Status</th>
        <th>Is Evaluate</th>
        <th width=50>Action</th>
    </thead>
          <tr>
              <td></td>
              <td><input type="text" name="txtsearchsubject" id="txtsearchsubject" onkeyup='search(event);' value='<?php if(isset($_GET['s'])) echo $_GET['s']; ?>' class="form-control" /></td>
              <td></td>
              <td><select class="form-control" id='cbosubjecttypes' name='cbosubjecttypes' onchange='search(event);'>
                <option value='0'>Select Subject type</option>
                      <?php
                      $s_type=0;
                      if(isset($_GET['s_type']))
                        $s_type=$_GET['s_type'];
                        foreach ($this->subjects->getsubjecttype() as $subjecttyperow) {?>
                          <option value='<?php echo $subjecttyperow->subj_type_id; ?>' <?php  if($subjecttyperow->subj_type_id==$s_type) echo 'selected';?> > <?php echo $subjecttyperow->subject_type; ?></option>";
                        <?php }
                      ?>
            </select></td>
              <td><input type="text" name="txtsearchshortcut" id="txtsearchshortcut" value='<?php if(isset($_GET['sh'])) echo $_GET['sh']; ?>' onkeyup='search(event);' class="form-control" /></td>
              <td><select class="form-control" id='s_trim'name='s_trim' onchange='search(event);'>
                      <option value=''>----Select----</option>
                      <option value='0'>For MoEYS</option>
                      <option value='1'>For TAE</option>
                 
                  </select>
              </td>
              <td class='col-xs-2'>
                <select class="form-control" id='s_eval'name='s_eval' onchange='search(event);'>
                      <option value=''>----Select----</option>
                      <option value='1'>For Evaluate</option>
                </select>
                <!-- <select class="form-control" id='cboschools'name='cboschools' onchange='search(event);'>
                <option value='0'>Select School</option>
                  <?php
                    $sch=0;
                    if (isset($_GET['sch']))
                      $sch=$_GET['sch'];
                    foreach ($this->subjects->getschool() as $schoolrow) {
                      //<option value='<?php echo $subjecttyperow->subj_type_id; ?>' <?php  if($subjecttyperow->subj_type_id==$s_type) echo 'selected';?> > <?php echo $subjecttyperow->subject_type; ?></option>";
                      <option value='<?php echo $schoolrow->schoolid; ?>' <?php  if($schoolrow->schoolid==$sch) echo 'selected';?> > <?php echo $schoolrow->name; ?></option>";
                        <?php }
                      ?>
                  </select> -->
              </td>
              <td></td>
          </tr>
          <tbody id='bodylist'>
            <?php
                    $i=1;
                
                foreach($query as $subjectrow){
                  $trim='';
                  $is_eval='';
                  if($subjectrow->is_trimester_sub==1)
                    $trim='For TAE';
                  if($subjectrow->is_eval==1)
                    $is_eval='For Evaluate';
                  echo "
                  
                    <tr>
                      <td align=center width=40>$i</td>
                      <td>$subjectrow->subject</td>
                      <td>$subjectrow->subject_kh</td>
                      <td>$subjectrow->subject_type</td>
                      <td>$subjectrow->short_sub</td>
                      <td>$trim</td>
                      <td>$is_eval</td>
                      <td align=center width=130>";
                          if($this->green->gAction("U")){
                            echo "<a href='".site_url('school/subject/editsubject/'.$subjectrow->subjectid)."?m=$m&p=$p'><img src='".site_url('../assets/images/icons/edit.png')."' />
                                 </a> |";
                          }
                          if($this->green->gAction("D")){
                            echo "<a><img onclick='deletesubject(event);' rel='$subjectrow->subjectid' src='".site_url('../assets/images/icons/delete.png')."?m=$m&p=$p' />
                                 </a>";
                          } 
                      echo "</td>
                    </tr>";
                    $i++;
                }
                ?>
              <!-- Start Pagination -->
               <tr>
                <td colspan='8' id='pgt'>
                  <ul class='pagination'>
                    <?php echo $this->pagination->create_links();?>
                  </ul>
                </td>
              </tr>
                <!-- End Pagination-->
          </tbody>
      </table>
      
    </div>
     </div>
    </div>
    
  </div>
</div>
 
 <!-- // -->

<script type="text/javascript">
    $(document).ready(function(e) {
              
    })
     function deletesubject(event){
           var r = confirm("Are you sure to delete this item?");
           if (r == true) {
               var id=jQuery(event.target).attr("rel");
              //school/subjecttype is controller
              location.href="<?PHP echo site_url('school/subject/deletesubject');?>/"+id+"?<?php echo "m=$m&p=$p" ?>";
           } else {
               txt = "You pressed Cancel!";
           }      
    }
    function search(event){
        var subjects=jQuery('#txtsearchsubject').val();
        var subjecttype=jQuery('#cbosubjecttypes').val();
        var shortcut=jQuery('#txtsearchshortcut').val();
        var trimester=jQuery('#s_trim').val(); 
        var is_eval=jQuery('#s_eval').val(); 
       
        var roleid=<?php echo $this->session->userdata('roleid');?>;
        var m=<?php echo $m;?>;
        var p=<?php echo $p;?>;

        $.ajax({
           url:"<?php echo base_url(); ?>index.php/school/subject/search",    
           data: {
                  'subject':subjects,
                  'subjecttype':subjecttype,
                  'shortcut':shortcut,
                  'eval':is_eval,
                  'trimester':trimester,
                  'roleid':roleid,
                  'm':m,
                  'p':p,
                 },
           type: "POST",
           success: function(data){
              jQuery('#bodylist').html(data);                   
           }
         });
     } 
</script>