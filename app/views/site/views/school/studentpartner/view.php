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
			        <th width=170>Company Name</th>
			        <th width=170>Contact Name</th>
			        <th width=170>Telephone</th>
			        <th width=170>Email</th>
			        <th>Address</th>
			        <th width=50>Action</th>
			    </thead>
			    <tr>
			        <td></td>
			        <td><input type="text" class="form-control input-sm" name="txtsearchcname" id="txtsearchcname" onkeyup='search(event);' value='<?php if(isset($_GET['s'])) echo $_GET['s']; ?>' class="form-control" /></td>
			        <td></td>
			        <td></td>
			        <td></td>
			        <td></td>
			        <td></td>
			    </tr>
			    <tbody id='bodylist'>
				    <?php
				        $i=1;
					    foreach($query as $row){
					      echo "
					        <tr>
					          <td align=center width=40>$i</td>
					          <td width=170>$row->company_name</td>
					          <td>$row->contact_name</td>
					          <td>$row->tel</td>
					          <td>$row->email</td>
					          <td>$row->address</td>
					          <td align=center width=130>";
					          if($this->green->gAction("U")){
					            echo  "<a href='".site_url('school/studentpartner/edits/'.$row->partnerid)."?m=$m&p=$p"."'>
					              <img src='".site_url('../assets/images/icons/edit.png')."' />
					              </a> |";
					          }
					          if($this->green->gAction("D")){
					            echo  "<a><img onclick='deletes(event);' rel='$row->partnerid'
					              src='".site_url('../assets/images/icons/delete.png')."' />
					              </a>"; 
					          }
					         echo "</td>
					        </tr>";
					        $i++;
				    	}
				    ?>
				<!-- Start pagination -->
			     <tr>
			       <td colspan='7' id='pgt'>
			        <ul class='pagination'>
			          <?php echo $this->pagination->create_links();?>
			        </ul>
			      </td> 
			    </tr>
			    <!-- End Pagination -->
			   	</tbody>
			</table>	
		</div>
  	 </div>
  	</div>
  	
  </div>
</div>
<script type="text/javascript">
    
     function deletes(event){
           var r = confirm("Are you sure to delete this item?");
           if (r == true) {
               var id=jQuery(event.target).attr("rel");
              location.href="<?PHP echo site_url('school/studentpartner/deletes/');?>/"+id+"?<?php echo "m=$m&p=$p" ?>";
           } else {
               txt = "You pressed Cancel!";
           }      
    }
    function search(event){
        var cname=jQuery('#txtsearchcname').val(); 
     	var roleid=<?php echo $this->session->userdata('roleid');?>;
		var m=<?php echo $m;?>;
		var p=<?php echo $p;?>;

        $.ajax({
           url:"<?php echo base_url(); ?>index.php/school/studentpartner/searchs",    
           data: {
                  'cname':cname,
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