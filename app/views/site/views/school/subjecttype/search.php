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
<table border="0" cellpadding="5" cellspacing="0"​ width="970" align="center" id='listsubjecttype'>
    <thead>
         <th align=center width=40>No</th>
        <th width=170>Subject type</th>
        <th width=170>Main type</th>
        <th>Description</th>
        <th width=130>Action</th>
    </thead>
    <tr>
        <td></td>
        <td><input type="text" name="txtsearchsubjecttype" id="txtsearchsubjecttype" onkeyup='search(event);' class="form-control" /></td>
        <td><input type="text" name="txtsearchmaintype" id="txtsearchmaintype" onkeyup='search(event);' class="form-control" /></td>
        <td></td>
      <td></td>
    </tr>
    <tbody id='bodylist'>
    <?php
        $i=1;
    
    foreach($query as $subjecttyperow){
      echo "
      
        <tr>
          <td align=center width=40>$i</td>
          <td width=170>$subjecttyperow->subject_type</td>
          <td width=170>$subjecttyperow->main_type</td>
          <td>$subjecttyperow->note</td>
          <td align=center width=130>
              <a href='".site_url('school/subjecttype/editsubjecttype/'.$subjecttyperow->subj_type_id)."'>Update</a> |
              <a onclick='deletesubjecttype(event);' rel='$subjecttyperow->subj_type_id'>Delete</a> 
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
               //school/subjecttype is controller
              location.href="<?PHP echo site_url('school/subjecttype/deletesubjecttype');?>/"+id;
           } else {
               txt = "You pressed Cancel!";
           }      
    }
    function search(event){
        var subjecttype=jQuery('#txtsearchsubjecttype').val();
        var maintype=jQuery('#txtsearchmaintype').val();
        $.ajax({
           url:"<?php echo base_url(); ?>index.php/school/subjecttype/search",    
           data: {'subjecttype':subjecttype,'maintype':maintype},
           type: "POST",
           success: function(data){
              //alert(data);
              jQuery('#bodylist').html(data);                   
           }
         });
     } 
</script>