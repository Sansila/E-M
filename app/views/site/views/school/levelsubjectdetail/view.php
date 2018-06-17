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
			        <!-------Button ------>
			        <?php if($this->green->gAction("P")){ ?>
		    	 	<a >
		    	 		<img onclick='preview(event);' style='margin-bottom:-50px;margin-right:40px' align='right' src="<?php echo base_url('assets/images/icons/preview.png')?>" />
		    	 	</a>
		    	 	<?php } ?>
		    	 	<!------ End button ------>
			    </thead>
				<thead>
					<th><input type="text" id="txtsearchsub" onkeyup='search(event);' value='<?php if(isset($_GET['s'])) echo $_GET['s']; ?>' class="form-control input-sm"  style='width:150px;padding:10px'/></th>
					<th colspan='13'>
						<div class='col-sm-3'>
							<select class='form-control input-sm' onchange='search(event);' id='s_trim'>
								<option value=''>----Select----</option>
								<option value='0'>Normal</option>
								<option value='1'>Trimester</option>
							</select>
						</div>
					</th>
				</thead>
				<tbody id='bodylist'>
				    <?php
				    foreach ($this->db->get('sch_subject_type')->result() as $sj_type) {
					    	echo "<tr>
					    			<td>$sj_type->subject_type</td>";
					    			  foreach($query as $row){
					    			  	echo "<td></td>";
					    			  }
					    	echo "</tr>";

						    foreach($this->levelsubjectdetails->getsubjects($sj_type->subj_type_id) as $row1){
						    	$trim='';
						    	if($row1->is_trimester_sub>0)
						    		$trim='*';
						     //$countsub++;
						      echo "
						        <tr>
						          	<td>&nbsp;&nbsp;&nbsp;$row1->subject <span style='color:red'>$trim</span></td>
						          	<td style='display:none'><input type='checkbox' class='checkall'></td>
						         ";
							      // for($i=1;$i<=$countglevel;$i++){
							      // 	
							      // }
						         foreach($query as $row){
						         	if($this->levelsubjectdetails->getlevelsubject($row->grade_levelid, $row1->subjectid,$this->session->userdata('year'),$this->session->userdata('schoolid')) > 0 )
					        			echo "<td><input type='checkbox' checked disabled></td>";
					        		else
					        			echo "<td><input type='checkbox' disabled ></td>";
					        	}
					          
						      echo "<td align=center>";
						      		  if($this->green->gAction("U")){
						              	echo "<a href='".site_url('school/levelsubjectdetail/edits/'.$row1->subjectid."/".$this->session->userdata('year')."/".$this->session->userdata('schoolid'))."?m=$m&p=$p"."'>
						              		  <img src='".site_url('../assets/images/icons/edit.png')."' />
						              		  </a> |";
						              }
						              if($this->green->gAction("D")){
						              	echo "<a><img onclick='delevelsubjectde(event);' rel='$row1->subjectid'
						              	      src='".site_url('../assets/images/icons/delete.png')."' />
						              		  </a>";
						              }
						      echo "</td>";
						      echo "</tr>";
						    }
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
    
    //  function deletelevelsubject(event){
    //       //alert(jQuery(event.target).attr("rel"));
    //        var r = confirm("Are you sure to delete this item?");
    //        if (r == true) {
    //            var id=jQuery(event.target).attr("rel");
    //            location.href="<?PHP echo site_url('school/levelsubjectdetail/deletes/');?>/"+id;
    //        } else {
               
    //        }      
    // }
    function preview(event){
    	var is_trim=$('#s_trim').val();
    	window.open("<?php echo site_url('school/levelsubjectdetail/preview');?>/?is_t="+is_trim,"_blank");
    }
    function delevelsubjectde(event){
    	// var r = confirm("Are you sure to delete this item?");
     //       if (r == true) {
     //           var schoolid="<?php echo $this->session->userdata('schoolid') ?>";
	    //        var subjectid=$(event.target).attr('rel');
	    //        var yearid="<?php echo $this->session->userdata('year') ?>";

     //         //---- delete all ------
     //         $.ajax({
     //                  url:"<?php echo site_url('school/levelsubjectdetail/deletelevelsubject'); ?>/"+subjectid+"/"+yearid+"/"+schoolid+"?<?php echo "m=$m&p=$p"; ?>",    
     //                  data: {
     //                      'schoolid':schoolid,
     //                      'subjectid':subjectid,
     //                      'year':yearid
     //                  },
     //                  type: "POST",
     //                  success: function(data){
     //                      location.href=("<?php echo site_url('school/levelsubjectdetail/?delete&');?>");   
     //           		 }
                  
     //          });
     //       } else {
               
     //       }
           var r = confirm("Are you sure to delete this item?");
           if (r == true) {
           	   var schoolid="<?php echo $this->session->userdata('schoolid') ?>";
	           var subjectid=$(event.target).attr('rel');
	           var yearid="<?php echo $this->session->userdata('year') ?>";

               //var id=jQuery(event.target).attr("rel");
               location.href="<?PHP echo site_url('school/levelsubjectdetail/deletes');?>/"+subjectid+"/"+yearid+"/"+schoolid+"?<?php echo "m=$m&p=$p"; ?>";
           } else {
               txt = "You pressed Cancel!";
           }      
    }
    function search(event){
        var subject=jQuery('#txtsearchsub').val(); 
        var s_trim=jQuery('#s_trim').val();
        var roleid=<?php echo $this->session->userdata('roleid');?>;
		var m=<?php echo $m;?>;
		var p=<?php echo $p;?>;

        $.ajax({
           url:"<?php echo site_url('school/levelsubjectdetail/searchs'); ?>",   
           data: {
                  'subject':subject,
                  'trim':s_trim,
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

     $(function(){			
			$("#print").on("click",function(){
				gPrint("tab_print");
			});
			
		})
     function gsPrint(emp_title,data){
			 var element = "<div>"+data+"</div>";
			 $("<center><p style='padding-top:15px;text-align:center;'><b>"+emp_title+"</b></p><hr>"+element+"</center>").printArea({
			  mode:"popup",  //printable window is either iframe or browser popup              
			  popHt: 600 ,  // popup window height
			  popWd: 500,  // popup window width
			  popX: 0 ,  // popup window screen X position
			  popY: 0 , //popup window screen Y position
			  popTitle:"test", // popup window title element
			  popClose: false,  // popup window close after printing
			  strict: false 
			  });
		}
     $("#print").on("click",function(){
					var htmlToPrint = '' +
					        '<style type="text/css">' +
					        'table th, table td {' +
					        'border:1px solid #000 !important;' +
					        'padding;0.5em;' +
					        '}' +
					        '</style>';
					var title = $("#title").text();
				   	var data = $("#tab_print").html().replace(/<img[^>]*>/gi,"");
				   	var export_data = $("<center>"+data+"</center>").clone().find(".remove_tag").remove().end().html();
				   		export_data+=htmlToPrint;
				   	gsPrint(title,export_data);
			});
     $("#export").on("click",function(e){
				var title=$('#title').text();
				var data=$('.table').attr('border',1);
					data = $("#tab_print").html().replace(/<img[^>]*>/gi,"");
	   			var export_data = $("<center><h3 align='center'>"+title+"</h3>"+data+"</center>").clone().find(".remove_tag").remove().end().html();
				window.open('data:application/vnd.ms-excel,' + encodeURIComponent(export_data));
    			e.preventDefault();
    			$('.table').attr('border',0);
			});
</script>