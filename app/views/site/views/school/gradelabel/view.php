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
			        <th>School</th>
			        <th width=170>Grade Label</th>
			        <th width=130>Action</th>
			    </thead>
			    <tr>
			        <td></td>
			        <!-- <td><input type="text" name="txtsearchinfor" id="txtsearchinfor" onkeyup='search(event);' 
			        	value='<?php //if(isset($_GET['s'])) echo $_GET['s']; ?>' class="form-control" />
			        </td> -->
			        <td>
			        	<select class="form-control" id='cboschools'name='cboschools' onchange='search(event);'>
			                <option value='0'>Select School</option>
			                  <?php
			                    $sch=0;
			                    if (isset($_GET['sch']))
			                      $sch=$_GET['sch'];
			                    foreach ($this->gradelabels->getschool() as $schoolrow) {?>
			                    
			                      <option value='<?php echo $schoolrow->schoolid; ?>' <?php  if($schoolrow->schoolid==$sch) echo 'selected';?> > <?php echo $schoolrow->name; ?></option>
			                        <?php }
			                      ?>
			            </select>
			        </td>
			        <td></td>
			    </tr>
			    <tbody id='bodylist'>
				    <?php
				        $i=1;
				    
				    //---- this query<-pass from controller
				    foreach($query as $row){
				     
				      echo "
				      
				        <tr>
				          <td align=center width=40>$i</td>
				          <td>$row->name</td>
				          <td>$row->grade_label</td>
				          <td align=center>";
				          	  if($this->green->gAction("U")){
				              echo "<a href='".site_url('school/gradelabel/edits/'.$row->grade_labelid)."?m=$m&p=$p"."'>
				              <img src='".site_url('../assets/images/icons/edit.png')."' />
				              </a> |";
				              }
				              if($this->green->gAction("D")){
				              echo "<a><img onclick='deletegradelabel(event);' rel='$row->grade_labelid' 
				              src='".site_url('../assets/images/icons/delete.png')."' />
				              </a>";
				              }
				          echo "</td>
				        </tr>";
				        $i++;
				    }
				    ?>
				<!---- Start pagination ---->
			     <!-- <tr>
			       <td colspan='5' id='pgt'>
			        <ul class='pagination'>
			          <?php //echo $this->pagination->create_links();?>
			        </ul>
			      </td>  -->
			    </tr> 
			    <!---- End Pagination ---->
			   	</tbody>
			</table>
			
		</div>
  	 </div>
  	</div>
  	
  </div>
</div>
<script type="text/javascript">
    
     function deletegradelabel(event){
          //alert(jQuery(event.target).attr("rel"));
           var r = confirm("Are you sure to delete this item?");
           if (r == true) {
               var id=jQuery(event.target).attr("rel");
              location.href="<?PHP echo site_url('school/gradelabel/deletes/');?>/"+id+"?<?php echo "m=$m&p=$p"; ?>";
           } else {
               
           }      
    }
    function search(event){
        var schoolid=jQuery('#cboschools').val();
        var roleid=<?php echo $this->session->userdata('roleid');?>;
		var m=<?php echo $m;?>;
		var p=<?php echo $p;?>;

        $.ajax({
           url:"<?php echo site_url('school/gradelabel/searchs'); ?>",   
           data: {
                  'schoolid':schoolid,
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