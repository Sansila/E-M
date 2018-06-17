<style type="text/css"> 
 
  a{
    cursor: pointer;
  }
 table tbody tr td img{
 	width: 20px;	
 }
 </style>
<div class="row">          
 <div class="col-sm-12">    
 	<div class="panel panel-default">
 		  	
	  <div class="panel-body">	          		 
		<div class="table-responsive">	
			
			<table border="0"​ align="center" id='listsubject' class="table">
			    <thead>
			        <th align=center width=40>No</th>
			        <th>Day</th>
			        <th width=130>Action</th>
			    </thead>
			    <tr>
			        <td></td>
			        <td><input type="text" name="txtsearchinfor" id="txtsearchinfor" onkeyup='search(event);' 
			        	value='<?php //if(isset($_GET['s'])) echo $_GET['s']; ?>' class="form-control" />
			        </td>
			        <td>
			        	
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
				          <td>$row->dayname</td>
				          
				          <td align=center>
				              <a href='".site_url('school/day/edits/'.$row->dayid)."'>
				              <img src='".site_url('../assets/images/icons/edit.png')."' /></a> |
				              <a><img onclick='deleteday(event);' rel='$row->dayid' 
				              src='".site_url('../assets/images/icons/delete.png')."' /></a> 
				          
				          </td>
				        </tr>
				      
				        ";
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
    
     function deleteday(event){
           var r = confirm("Are you sure to delete this item?");
           if (r == true) {
               var id=jQuery(event.target).attr("rel");
              //school/gradelabel is controller
              location.href="<?PHP echo site_url('school/day/deletes/');?>/"+id;
           } else {
               
           }      
    }
    function search(event){
        var schoolid=jQuery('#cboschools').val();
        $.ajax({
        	//--- school/schoolinfor is controller ---
           //url:"<?php echo base_url(); ?>index.php/school/schoolinfor/searchs",
           url:"<?php echo site_url('school/day/searchs'); ?>",   
           data: {
                  'day':day,
                 },
           type: "POST",
           success: function(data){
              jQuery('#bodylist').html(data);                   
           }
         });
     } 
</script>