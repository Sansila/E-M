<style type="text/css"> 
 
  a{
    cursor: pointer;
  }
 table tbody tr td img{
 	width: 20px;	
 }
 table th{
 	font-weight: normal;
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
			    	<th></th>
			    	<?php 
			    	$countglevel=0;
			    	foreach($query as $row){
			        		echo "<th>$row->grade_level</th>";
			        		$countglevel++;
			        }
			        ?>
			        <!------- Button Preview ------>
			        <?php if($this->green->gAction("P")){ ?>
		    	 	<a href="<?php echo site_url('school/classes/preview/?m='.$m.'&p='.$p.'');?>">
		    	 		<img style='margin-bottom:-50px;margin-right:40px' align='right' src="<?php echo base_url('assets/images/icons/preview.png')?>" />
		    	 	</a>
		    	 	<?php } ?>
		    	 	<!------ End button ------>
			    </thead>
				<thead>
					<th><input type="text" name="txtsearchglabel" id="txtsearchglabel" onkeyup='search(event);' value='<?php if(isset($_GET['s'])) echo $_GET['s']; ?>' class="form-control"  style='width:50px;padding:10px'/></th>
			    	<?php 
			    	foreach($query as $row){
			        	echo "<th></th>";
			        } ?>
				</thead>
				
				<tbody id='bodylist'>
				    <?php
				    //---- Loop for subject from controller ------------
				    //$countsub=0;
				    foreach($query1 as $row1){
				      echo "
				        <tr>
				          	<td>$row1->grade_label</td>
				          	<td style='display:none'><input type='checkbox' class='checkall'></td>
				         ";
				         foreach($query as $row){
				         	if($this->getclassmode->getclass($row->grade_levelid, $row1->grade_labelid, $this->session->userdata('schoolid')) > 0 )
			        			echo "<td><input type='checkbox' checked disabled>&nbsp;".$this->getclassmode->getclassname($row->grade_levelid, $row1->grade_labelid, $this->session->userdata('schoolid'))->class_name."</td>";
			        		else
			        			echo "<td><input type='checkbox' disabled >&nbsp;$row->grade_level$row1->grade_label</td>";
			        	}
				      echo "<td align=center>";
				      		if($this->green->gAction("U")){
				              echo "<a href='".site_url('school/classes/edits/'.$row1->grade_labelid."/".$row->grade_levelid."/".$this->session->userdata('schoolid')."/".$row1->grade_label)."?m=$m&p=$p"."'>
				              <img src='".site_url('../assets/images/icons/edit.png')."' />
				              </a> |";
				          	}
				          	if($this->green->gAction("D")){
				              echo "<a><img onclick='deleteclass(event);' rel='$row1->grade_labelid' 
				              src='".site_url('../assets/images/icons/delete.png')."' />
				              </a>";
				          	}
				            echo "</td>";
				      echo "</tr>";
				    }
				    //echo $countsub;

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
    
    function deleteclass(event){
    	//var r = confirm("Are you sure to delete this item?");
           // if (r == true) {
           //     var schoolid="<?php echo $this->session->userdata('schoolid') ?>";
	          //  var glabelid=$(event.target).attr('rel');

           //   //---- delete all ------
           //   $.ajax({
           //            url:"<?php echo site_url('school/classes/deleteclass'); ?>/"+glabelid+"/"+schoolid,    
           //            data: {
           //                'schoolid':schoolid,
           //                'grade_labelid':glabelid
           //            },
           //            type: "POST",
           //            success: function(data){
           //                location.href=("<?php echo site_url('school/classes/?delete');?>");   
           //     		 }
           //    });
           // } else {
               
           // }   
           var r = confirm("Are you sure to delete this item?");
           var schoolid="<?php echo $this->session->userdata('schoolid') ?>";
	       var glabelid=$(event.target).attr('rel');

           if (r == true) {
               var id=jQuery(event.target).attr("rel");
              location.href="<?PHP echo site_url('school/classes/deleteclass/');?>/"+glabelid+"/"+schoolid+"?<?php echo "m=$m&p=$p" ?>";
           } else {
               txt = "You pressed Cancel!";
           }             
    }

    function search(event){
        var glabel=jQuery('#txtsearchglabel').val();
        var roleid=<?php echo $this->session->userdata('roleid');?>;
		var m=<?php echo $m;?>;
		var p=<?php echo $p;?>;

        $.ajax({
           url:"<?php echo site_url('school/classes/searchs'); ?>",   
           data: {
                  'grade_labelid':glabel,
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