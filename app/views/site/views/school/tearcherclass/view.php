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
			        <th width=150>Teacher</th>
			        <!-- <th width=150>School level</th> -->
			        <th width=150>Class</th>
			        <!-- <th width=150>Subject</th> -->
			        <th width=150>Class Handle</th>
			        <th width=100>Action</th>
			        <!------- Button Preview ------>
			        <?php if($this->green->gAction("P")){ ?>
		    	 	<a >
		    	 		<img onclick='viewsall(event);' style='margin-bottom:-50px;margin-right:10px' align='right' src="<?php echo base_url('assets/images/icons/preview.png')?>" />
		    	 	</a>
		    	 	<?php } ?>
		    	 	<!------ End button ------>
			    </thead>
			    <tr>
			        <td></td>
			        <td><input type="text" name="txtsearchteacher" id="txtsearchteacher" onkeyup='search(event);' 
			        	value='<?php if(isset($_GET['s'])) echo $_GET['s']; ?>' class="form-control input-sm" />
			        </td>
			        <!-- <td><input type="text" name="txtsearchlevel" id="txtsearchlevel" onkeyup='search(event);' 
			        	value='<?php //if(isset($_GET['s'])) echo $_GET['s']; ?>' class="form-control input-sm" />
			        </td> -->
			        <!-- <td><input type="text" name="txtsearchclass" id="txtsearchclass" onkeyup='search(event);' 
			        	value='<?php //if(isset($_GET['s'])) echo $_GET['s']; ?>' class="form-control input-sm" />
			        </td> -->
			        <!-- <td><input type="text" name="txtsearchsubject" id="txtsearchsubject" onkeyup='search(event);' 
			        	value='<?php //if(isset($_GET['s'])) echo $_GET['s']; ?>' class="form-control input-sm" />
			        </td> -->
			    </tr>
			    <tbody id='bodylist'>
				    <?php
				        $i=1;
				    foreach($query as $row){
				      echo "
				        <tr>
				          <td align=center>$i</td>
				      			<td>$row->last_name $row->first_name</td>
				      			<td>
				         			<table>";
								         foreach ($this->tclass->getteacherclass($row->teacher_id) as $c) {
								         	echo "$c->class_name,"; 
								         }
					         echo "</table>
					         	</td>
					         	<td>
					         	<table>";
								         foreach ($this->tclass->getteacherclasshandle($row->teacher_id) as $c) {
								         	echo "$c->class_name,"; 
								         }
					         echo "</table>";
					         echo "</td>";
					         echo "<td align=center>";
					         	if($this->green->gAction("P")){ 
					          echo "<a href='".site_url('school/tearcherclass/preview/'.$row->teacher_id."/".$row->yearid)."'>
					              <img src='".site_url('../assets/images/icons/preview.png')."' />
					              </a> |";
					              }
					            if($this->green->gAction("U")){
					          echo "<a href='".site_url('school/tearcherclass/edits/'.$row->transno)."'>
					              <img src='".site_url('../assets/images/icons/edit.png')."' />
					              </a> |";
					              }
					            if($this->green->gAction("D")){
					           echo "<a><img onclick='deletes(event);' rel='$row->transno' 
					              src='".site_url('../assets/images/icons/delete.png')."' />
					              </a>"; 
					          	  }
					          "</td>
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
			      </td>
			    </tr> -->
			    <!---- End Pagination ---->
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
              location.href="<?PHP echo site_url('school/tearcherclass/deletes/');?>/"+id;
           } else {
               
           }      
    }
    $('#year').change(function(){
    	search();
    })
    function viewsall(event){
    	var year=jQuery('#year').val();
    	location.href="<?PHP echo site_url('school/tearcherclass/preview/');?>/0/"+year;
    }
    function search(event){
        var teacher=jQuery('#txtsearchteacher').val();
        var year=jQuery('#year').val();
        var roleid=<?php echo $this->session->userdata('roleid');?>;
		var m="<?php echo $m;?>";
		var p="<?php echo $p;?>";
        // var schlevel=jQuery('#txtsearchlevel').val();
        // var sclass=jQuery('#txtsearchclass').val(); 
        // var sclasshandle=jQuery('#txtsearchclasshandle').val();
        // var subject=jQuery('#txtsearchsubject').val();

        $.ajax({
           url:"<?php echo site_url('school/tearcherclass/searchs'); ?>", 
           data: {
                  'teacher':teacher,
                  'year':year,
                  'roleid':roleid,
				  'm':m,
			      'p':p
                  // 'schlevel':schlevel,
                  // 'sclass':sclass,
                  // 'sclasshandle':sclasshandle,
                  // 'subject':subject,
                 },
           type: "POST",
           success: function(data){
              jQuery('#bodylist').html(data);                   
           }
         });
     } 
</script>