<style type="text/css">
  table{
   border-collapse: collapse;
   /*border:1px solid #CCCCCC;*/
  }
  td,th{
   
   padding: 5px ;
  }
  #listsubjecttype td,#listsubjecttype th{
   padding: 5px ;
   border:1px solid  #CCCCCC;
  }
  #pgt{
   border:solid 0px !important;
  }
  th{
    background-color: #383547;
    text-align: center;
    color: white;
  }
  a{
    cursor: pointer;
  }
 </style>

<h3 align="center">Subject Type List</h3>
<table border="0" cellpadding="5" cellspacing="0"​ width="970" align="center" id='listsubject'>
    <thead>
         <th align=center width=40>No</th>
        <th width=170>Subject</th>
        <th width=170>Subject type</th>
        <th width=170>Short cut</th>
        <th width=170>School</th>
        <th width=130>Action</th>
    </thead>
    <tr>
        <td></td>
        <td><input type="text" name="txtsearchsubject" id="txtsearchsubject" onkeyup='search(event);' class="form-control" /></td>
        <td><select class="form-control" id='cbosearchsubjecttype'name='cbosearchsubjecttype' onchange='search(event);'>
                <option value='0'>Select Subject type</option>
                      <?php
                        foreach ($this->subjects->getsubjecttype() as $subjecttyperow) {
                        echo "<option value='$subjecttyperow->subj_type_id'>$subjecttyperow->subject_type</option>";
                        }
                      ?>
            </select>
        </td>
        <td><input type="text" name="txtsearchshortcut" id="txtsearchshortcut" onkeyup='search(event);' class="form-control" /></td>
        <td><select class="form-control" id='cbosearchschool'name='cbosearchschool' onchange='search(event);'>
                <option value='0'>Select School</option>
                  <?php
                    foreach ($this->subjects->getschool() as $schoolrow) {
                    echo "<option value='$schoolrow->schoolid'>$schoolrow->name</option>";
                    }
                   ?>
            </select>
        </td>
        <td></td>
    </tr>
    <tbody id='bodylist'>
    <?php
        $i=1;
    
    foreach($this->subjects->getpagination() as $subjectrow){
      echo "
      
        <tr>
          <td align=center width=40>$i</td>
          <td width=170>$subjectrow->subject</td>
          <td width=170>$subjectrow->subject_type</td>
          <td>$subjectrow->short_sub</td>
          <td>$subjectrow->name</td>
          <td align=center width=130>
              <a href='".site_url('school/subject/editsubject/'.$subjectrow->subjectid)."'><img src='".site_url('../assets/images/icons/edit.png')."' /></a> |
              <a onclick='deletesubjecttype(event);' rel='$subjectrow->subjectid'><img src='".site_url('../assets/images/icons/delete.png')."' /></a> 
          </td>
        </tr>
      
        " ;
        $i++;
    }
    ?>
    <tr>
      <td colspan='5' id='pgt'>
        <ul class='pagination'>
          <?php echo $this->pagination->create_links();?>
        </ul>
      </td>
    </tr>
   </tbody> 
</table>

<script type="text/javascript">
    $(document).ready(function(e) {
              
    })
     function deletesubjecttype(event){
           var r = confirm("Are you sure to delete this item?");
           if (r == true) {
               var id=jQuery(event.target).attr("rel");
               //school/subject is call controller
              location.href="<?PHP echo site_url('school/subject/deletesubject');?>/"+id;
           } else {
               txt = "You pressed Cancel!";
           }      
    }
    function search(event){
        var subject=jQuery('#txtsearchsubject').val();
        var subjecttype=jQuery('#cbosearchsubjecttype').val();
        var shortcut=jQuery('#txtsearchshortcut').val();
        var school=jQuery('#cbosearchschool').val();
        $.ajax({
           url:"<?php echo base_url(); ?>index.php/school/subject/search",    
           data: {
                  'subject':subjecttype,
                  'subjecttype':maintype,
                  'shortcut':shortcut,
                  'school':school},
           type: "POST",
           success: function(data){
              //alert(data);
              jQuery('#bodylist').html(data);                   
           }
         });
     } 
</script>