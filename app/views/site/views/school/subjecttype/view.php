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
        <th width=170>Subject type</th>
        <th width=170>Main type</th>
        <th>Description</th>
        <th width=130>Action</th>
    </thead>
          <tr>
              <td></td>
              <td><input type="text" name="txtsearchsubjecttype" id="txtsearchsubjecttype" onkeyup='search(event);' class="form-control" /></td></td>
              <td><input type="text" name="txtsearchmaintype" id="txtsearchmaintype" onkeyup='search(event);' class="form-control" /></td>
              <td></td>
              <td></td>
          </tr>
          <tbody id='bodylist'>
    <?php
        $i=1;
    foreach($this->subjecttypes->getpagination() as $subjecttyperow){
      echo "
        <tr>
          <td align=center width=40>$i</td>
          <td width=170>$subjecttyperow->subject_type</td>
          <td width=170>$subjecttyperow->main_type</td>
          <td>$subjecttyperow->note</td>
          <td align=center width=130>";
              if($this->green->gAction("U")){
                echo "<a href='".site_url('school/subjecttype/editsubjecttype/'.$subjecttyperow->subj_type_id)."?m=$m&p=$p"."'>
                      <img src='".site_url('../assets/images/icons/edit.png')."' />
                      </a> |";
              }
              if($this->green->gAction("D")){
                echo "<a><img onclick='deletesubjecttype(event);' rel='$subjecttyperow->subj_type_id' src='".site_url('../assets/images/icons/delete.png')."' />
                      </a>"; 
              }
          echo "</td>
        </tr>" ;
        $i++;
    }
    ?>
    <!-- <tr>
      <td colspan='5' id='pgt'>
        <ul class='pagination'>
          <?php //echo $this->pagination->create_links();?>
        </ul>
      </td>
    </tr> -->
   </tbody>
      </table>
      
    </div>
     </div>
    </div>
    
  </div>
</div>

<script type="text/javascript">
    $(document).ready(function(e) {
              
    })
     function deletesubjecttype(event){
           var r = confirm("Are you sure to delete this item?");
           if (r == true) {
               var id=jQuery(event.target).attr("rel");
               location.href="<?PHP echo site_url('school/subjecttype/deletesubjecttype');?>/"+id+"?<?php echo "m=$m&p=$p"; ?>";
           } else {
               txt = "You pressed Cancel!";
           }      
    }
    function search(event){
        var subjecttype=jQuery('#txtsearchsubjecttype').val();
        var maintype=jQuery('#txtsearchmaintype').val();

        var roleid=<?php echo $this->session->userdata('roleid');?>;
        var m=<?php echo $m;?>;
        var p=<?php echo $p;?>;

        $.ajax({
           url:"<?php echo base_url(); ?>index.php/school/subjecttype/search",    
           data: {
                  'subjecttype':subjecttype,
                  'maintype':maintype,
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