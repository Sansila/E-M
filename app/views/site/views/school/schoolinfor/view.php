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
			        <th>Name</th>
			        <th width=100>Telephone</th>
			        <th width=100>Email</th>
			        <th width=100>Website</th>
			        <th width=100>Goal</th>
			        <th width=100>Open date</th>
			        <th width=100>Con. Person</th>
			        <th width=80>Show Inactive</th>
			        <th width="30px">Action</th>
			    </thead>
			    <tr>
			        <td></td>
			        <td><input type="text" name="txtsearchinfor" id="txtsearchinfor" onkeyup='search(event);' 
			        	value='<?php if(isset($_GET['s'])) echo $_GET['s']; ?>' class="form-control" />
			        </td>
			        <td></td>
			        <td></td>
			        <td></td>
			        <td></td>
			        <td></td>
			        <td></td>
			        <td><!--<input type="checkbox" name="chbsallactive" id="chbsallactive"  value="1" onchange='search(event);'-->
						<input type="checkbox" onchange='search(event);' name="chbvactive" checked id="chbvactive" onkeyup='search(event);' >
			        </td> 
			    </tr>
			    <tbody id='bodylist'>
				    <?php
				        $i=1;
				    
				   
				    //---- this query<-pass from controller
				    foreach($query as $row){
				     $pendate=date_create($row->open_since);

				      echo "
				      
				        <tr>
				          <td align=center width=40>$i</td>
				          <td>$row->name</td>
				          <td>$row->contact_tel</td>
				          <td>$row->email</td>
				          <td>$row->website</td>
				          <td>$row->gaol</td>
				          <td>".date_format($pendate, 'd-m-Y')."</td>
				          <td>$row->contact_person</td>
				          <td>";
				          if ($row->is_active==1){ 
				          			echo 'active';
				          		}else{ 
				          			echo 'inactive';}
				          echo "</td>";
				          echo "<td align=center width=130>";
				          	  if($this->green->gAction("U")){
				              		echo "<a href='".site_url('school/schoolinfor/edits/'.$row->schoolid)."?m=$m&p=$p"."'>
				              		<img src='".site_url('../assets/images/icons/edit.png')."' />
				              		</a> | ";
				              }
				              if($this->green->gAction("D")){
				              		echo "<a><img onclick='deletessch_infor(event);' rel='$row->schoolid' 
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
    
     function deletessch_infor(event){
           var r = confirm("Are you sure to delete this record?");
           if (r == true) {
               var id=jQuery(event.target).attr("rel");
              location.href="<?PHP echo site_url('school/schoolinfor/deletes/');?>/"+id+"?<?php echo "m=$m&p=$p"; ?>";
           }       
    }

    function search(event){
        var schname=jQuery('#txtsearchinfor').val();
        var is_active=0;
        var showall=0;
       
		if($('#chbvactive').is(":checked")){
			schname='';
			showall=1;
			is_active=1;
		}

		var roleid=<?php echo $this->session->userdata('roleid');?>;
        var m=<?php echo $m;?>;
        var p=<?php echo $p;?>;

        $.ajax({
           //--- school/schoolinfor is controller ---
           //url:"<?php echo base_url(); ?>index.php/school/schoolinfor/searchs",
           url:"<?php echo site_url('school/schoolinfor/searchs'); ?>",  
           data: {
                  'schname':schname,
                  'is_active':is_active,
                  'showall':showall,
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