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
			        <th width=170>Year</th>
			        <th width=170>From date</th>
			        <th width=170>To date</th>
			        <th>School</th>
			        <th width=50>Action</th>
			    </thead>
			    <tr>
			        <td></td>
			        <td><input type="text" name="txtsearchyear" id="txtsearchyear" onkeyup='search(event);' value='<?php if(isset($_GET['s'])) echo $_GET['s']; ?>' class="form-control" /></td>
			        <td></td>
			        <td></td>
			        <td><select class="form-control" id='cboschools'name='cboschools' onchange='search(event);'>
			                <option value='0'>Select School</option>
			                  <?php
			                    $sch=0;
			                    if (isset($_GET['sch']))
			                      $sch=$_GET['sch'];
			                    foreach ($this->schoolyears->getschool() as $schoolrow) {?>
			                    
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
				    foreach($query as $schoolyearrow){
				      $fromdate=date_create($schoolyearrow->from_date);
				      $todate=date_create($schoolyearrow->to_date);
				      echo "
				      
				        <tr>
				          <td align=center width=40>$i</td>
				          <td width=170>$schoolyearrow->sch_year</td>
				          <td>".date_format($fromdate, 'd-m-Y')."</td>
				          <td>".date_format($todate, 'd-m-Y')."</td>
				          <td>$schoolyearrow->name</td>
				          <td align=center width=130>";
				          	if($this->green->gAction("U")){
				            	echo "<a href='".site_url('school/schoolyear/editschoolyear/'.$schoolyearrow->yearid)."?m=$m&p=$p"."'>
				              	<img src='".site_url('../assets/images/icons/edit.png')."' /></a> |
				              	";
				              }

				              if($this->green->gAction("D")){
				                echo "<a><img onclick='deleteschoolyear(event);' rel='$schoolyearrow->yearid' 
				              src='".site_url('../assets/images/icons/delete.png')."' />
				              </a>";
				              } 
				          
				          echo "</td>
				        </tr>";
				        $i++;
				    }
				    ?>
				<!-- Start Pagination -->
			    <!-- <tr>
			      <td colspan='5' id='pgt'>
			        <ul class='pagination'>
			          <?php //echo $this->pagination->create_links();?>
			        </ul>
			      </td>
			    </tr> -->
			    <!-- End Pagination-->
			   	</tbody>
			</table>
			
		</div>
  	 </div>
  	</div>
  	
  </div>
</div>
<script type="text/javascript">
    
     function deleteschoolyear(event){
          //alert(jQuery(event.target).attr("rel"));
           var r = confirm("Are you sure to delete this item?");
           if (r == true) {
           	  var id=jQuery(event.target).attr("rel");
          	  location.href="<?PHP echo site_url('school/schoolyear/deleteschoolyear/');?>/"+id+"?<?php echo "m=$m&p=$p"; ?>";
           } else {
               txt = "You pressed Cancel!";
           }      
    }
    function search(event){
        var year=jQuery('#txtsearchyear').val();
        var school=jQuery('#cboschools').val(); 

        var roleid=<?php echo $this->session->userdata('roleid');?>;
		var m=<?php echo $m;?>;
		var p=<?php echo $p;?>;

        $.ajax({
           url:"<?php echo base_url(); ?>index.php/school/schoolyear/search",    
           data: {
                  'year':year,
                  'school':school,
                  'roleid':roleid,
				  'm':m,
			      'p':p,
                 },
           type: "POST",
           success: function(data){
              jQuery('#bodylist').html(data);           }
         });
     } 
</script>