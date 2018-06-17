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
			<!-------Button ------>
		    	 	<!-- <a href="<?php //echo site_url('school/timetable/timetable_preview/');?>">
		    	 		<img style='margin-bottom:-50px;margin-right:5px' align='right' src="<?php //echo base_url('assets/images/icons/preview.png')?>" />
		    	 	</a> -->
		    	 	<!------ End button ------>
			<table border="0"​ align="center" id='listsubject' class="table">
			    <thead>
			        <th align=center width=40>No</th>
			        <th width=100>Class</th>
			        <th width=100>Time</th>
			        <th width=100>Subject</th>
			        <th width=100>Teacher</th>
			        <th width=100>S.Level</th>
			        <th width=100>Day</th>
			        <th>School</th>
			        <!-- <th width=30>Leave</th> -->
			        <th width=100>Desc</th>
			        <th width=115>Action</th>
			    </thead>
			    <tr>
			        <td></td>
			        <td><input type="text" name="txtsearchclass" id="txtsearchclass" onkeyup='search(event);' 
			        	value='<?php if(isset($_GET['classid'])) echo $_GET['classid']; ?>' class="form-control input-sm" />
			        </td>
			        <td><input type="text" name="txtsearchtime" id="txtsearchtime" onkeyup='search(event);' 
			        	value='<?php if(isset($_GET['time'])) echo $_GET['time']; ?>' class="form-control input-sm" />
			        </td>
			        <td><input type="text" name="txtsearchsubject" id="txtsearchsubject" onkeyup='search(event);' 
			        	value='<?php if(isset($_GET['subject'])) echo $_GET['subject']; ?>' class="form-control input-sm" />
			        </td>
			        <td><input type="text" name="txtsearchteacher" id="txtsearchteacher" onkeyup='search(event);' 
			        	value='<?php if(isset($_GET['teacher'])) echo $_GET['teacher']; ?>' class="form-control input-sm" />
			        </td>
			        <td></td>
			        <td></td>
			        <td>
			        	<select class="form-control input-sm" id='cbosearchschool'name='cbosearchschool' onchange='search(event);'>
			                <option value='0'>Select School</option>
			                  <?php
			                    $sch=0;
			                    if (isset($_GET['schoolid']))
			                      $sch=$_GET['schoolid'];
			                    foreach ($this->timetables->getschool() as $row) {?>
			                    
			                      <option value='<?php echo $row->schoolid; ?>' <?php  if($row->schoolid==$sch) echo 'selected';?> > <?php echo $row->name; ?></option>
			                        <?php }
			                      ?>
			            </select>
			        </td>
			        <td></td>
			    </tr>
			    <tbody id='bodylist'>
				    <?php
				        $i=1;
				    
				    //---- this query<-pass from controller ----
				    foreach($query as $row){
				     
				      echo "
				      
				        <tr>
				          <td align=center width=40>$i</td>
				          <td>$row->class_name</td>
				          <td>".date('H:i',strtotime($row->from_time)).'-'.date('H:i',strtotime($row->to_time))."</td>
				          <td>$row->subject</td>
				          <td>$row->last_name".' '."$row->first_name</td>
				          <td>$row->sch_level</td>
				          <td>$row->dayname</td>
				          <td>$row->name</td>";
				       // echo '<input type="checkbox" name="chbleave" id="chbleave" value="1" disabled ';
				       //    if($row->is_leave_time==1) echo "checked";
				       //echo ">";
				       echo "
				          <td>$row->note</td>
				          <td align=center>
				          	  <a href='".site_url('school/timetable/timetable_preview/'.$row->time_tableid)."'>
				              	<img src='".site_url('../assets/images/icons/preview.png')."' /></a> |
				              <a href='".site_url('school/timetable/edits/'.$row->time_tableid)."'>
				              	<img src='".site_url('../assets/images/icons/edit.png')."' /></a> |
				              <a>
				              	<img onclick='deletetimetable(event);' rel='$row->time_tableid' 
				              src='".site_url('../assets/images/icons/delete.png')."' /></a> 
				          </td>
				        </tr>
				      
				        ";
				        $i++;
				    }
				    ?>
				<!---- Start pagination ---->
			     <!--  <tr>
			       <td colspan='5' id='pgt'>
			        <ul class='pagination'>
			          <?php //echo $this->pagination->create_links();?>
			        </ul>
			      </td>
			    </tr>  -->
			    <!---- End Pagination ---->
			   	</tbody>
			</table>
			
		</div>
  	 </div>
  	</div>
  	
  </div>
</div>
<script type="text/javascript">
    
     function deletetimetable(event){
           var r = confirm("Are you sure to delete this item?");
           if (r == true) {
               var id=jQuery(event.target).attr("rel");
              location.href="<?PHP echo site_url('school/timetable/deletes/');?>/"+id;
           } else {
               
           }      
    }
    function search(event){
        var schoolid=jQuery('#cbosearchschool').val();
        var classid=jQuery('#txtsearchclass').val();
        var time=jQuery('#txtsearchtime').val();
        var subject=jQuery('#txtsearchsubject').val();
        var teacher=jQuery('#txtsearchteacher').val();

        $.ajax({
           url:"<?php echo site_url('school/timetable/searchs'); ?>",   
           data: {
                  'schoolid':schoolid,
                  'classid':classid,
                  'time':time,
                  'subject':subject,
                  'teacher':teacher,
                 },
           type: "POST",
           success: function(data){
              jQuery('#bodylist').html(data);                   
           }
         });
     } 
</script>