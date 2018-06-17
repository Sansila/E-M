
<style type="text/css">
	table tbody tr td img{width: 20px; margin-right: 10px}
	a,.sort{cursor: pointer;}
	.cur_sort_up{
		background-image: url('<?php echo base_url('assets/images/icons/sort-up.png')?>');
		background-position: left;
		background-repeat: no-repeat;
		padding-left: 15px !important;
	}
	.cur_sort_down{
		background-image: url('<?php echo base_url('assets/images/icons/sort-down.png')?>');
		background-position: left;
		background-repeat: no-repeat;
		padding-left: 15px !important;
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
<div class="wrapper">
	<div class="clearfix" id="main_content_outer">
	    <div id="main_content">
	      <div class="row result_info">
		      	<div class="col-xs-6">
		      		<strong id='title'>Student List</strong>
		      	</div>
		      	<div class="col-xs-6" style="text-align: right">
			    	<span class="top_action_button">	
			    		<?php if($this->green->gAction("E")){ ?>
				    		<a href="#" id="exports" title="Export">
				    			<img id='export' src="<?php echo base_url('assets/images/icons/export.png')?>" />
				    		</a>
				    	<?php } ?>
			    	</span>
		      		<span class="top_action_button">
		      			<?php if($this->green->gAction("P")){ ?>
							<a href="#" id="print" title="Print">
				    			<img src="<?php echo base_url('assets/images/icons/print.png')?>" />
				    		</a>
				    	<?php } ?>
		      		</span>	    		
		      	</div> 			      
		  </div>
	      <div class="row">
	      	<div class="col-sm-12">
	      		<div class="panel panel-default">
	      			<div class="panel-body">
		           		<div class="table-responsive"  id="tab_print">
		           			<?php 
		           			$thr="";	
		           			$tr="";	
		           			$school=$this->db->where('schoolid',$this->session->userdata('schoolid'))->get('sch_school_infor')->row();
		           			$school_name=$school->name;
		           			$school_adr=$school->address;
		           			foreach($thead as $th=>$val){
		           				if($th=='No' || $th=='Nationality' || $th=='Class')
		           					$thr.="<th class='$val'>".$th."</th>";
		           				else if($th=='Action')
		           					$thr.="<th class='remove_tag'>".$th."</th>";
		           				else
		           					$thr.="<th class='sort $val' onclick='sort(event);' rel='$val'>".$th."</th>";								
		           			}
		           			
		           			if(count($tdata)>0){
		           				$i=1;
		           				if(isset($_GET['per_page']))
									$i=$_GET['per_page']+1;
								
								foreach($tdata as $row){
									if($row['familyid']!=''){
										$family_code=$this->db->query("SELECT family_code FROM sch_family WHERE familyid='".$row['familyid']."'")->row()->family_code;
									}
									else
										$family_code='';
									$tr.="<tr>
											 <td class='No'>".str_pad($i,2,"0",STR_PAD_LEFT)."</td>
											 <td class='student_num'>".$row['student_num']."</td>
											 <td class='last_name'>".$row['last_name']." ".$row['first_name']."</td>
											 <td class='last_name_kh'>".$row['last_name_kh']." ".$row['first_name_kh']."</td>
											 <td class='dateofbirth'>".$row['dob']."</td>
											 <td class='class_name'>".$row['class_name']."</td>
											 <td class='yearid'>".$row['sch_year']."</td>
											 <td class='FamilyID'>$family_code</td>
										 </tr>
										 ";										 
									$i++;	 
								}
							}
													
		           			?>

		           			<table class="table" border='0'>
		           				<thead ><?php echo $thr ?></thead>
		           				<thead class='remove_tag'>
		           					<td class='col-xs-1' ><input type='text' value='asc' name='sort' id='sort' style='width:30px; display:none'/>
		           						
									</td>
		           					<td class='col-xs-1'><input type='text' value="<?php if(isset($_GET['s_id'])) echo $_GET['s_id']; ?>" onkeyup='search(event);' class='form-control input-sm' name='s_student_id' id='s_student_id'/></td>
							 		<td class='col-xs-2'><input type='text' value="<?php if(isset($_GET['fn'])) echo $_GET['fn']; ?>" onkeyup='search(event);' class='form-control input-sm' name='s_full_name' id='s_full_name'/></td>
							 		<td class='col-xs-2'><input type='text' value="<?php if(isset($_GET['fnk'])) echo $_GET['fnk']; ?>" onkeyup='search(event);' class='form-control input-sm' name='s_full_name_kh' id='s_full_name_kh'/></td>
							 		<td ><input type='text' value='' name='sortquery' id='sortquery' style='width:80px; display:none'/></td>
							 		<td class='col-xs-1'>
							 		<select class='form-control input-sm parsley-validated' onchange='search(event);' name='s_classid' id='s_classid'>
                   						 <option value="">Select Class</option>
					                    <?php
					                    	foreach ($this->std->getclass()->result() as $class) {?>
					                    		<option value="<?php echo $class->classid ;?>" <?php if(isset($_GET['class'])){ if($class->classid==$_GET['class']) echo 'selected'; }?> ><?php echo $class->class_name;?></option>
					                    	<?php }
					                    ?>
				                 	</select>
				              		</td>
							 		<td ></td>
							 		<td ></td>
		           				</thead>
		           				<tbody class='listbody'>
		           					<?php echo $tr ?>
		           					<tr class='remove_tag'>
										<td colspan='12' id='pgt'>
											<div style='margin-top:20px; width:11%; float:left;'>
											Display : <select id="sort_num"  onchange='search(event);' style='padding:5px; margin-right:0px;'>
															<?php
															$num=50;
															for($i=0;$i<10;$i++){?>
																<option value="<?php echo $num ;?>" <?php if(isset($_GET['s_num'])){ if($num==$_GET['s_num']) echo 'selected'; }?> ><?php echo $num;?></option>
																<?php $num+=50;
															}
															?>
															<option value='all' <?php if(isset($_GET['s_num'])){ if($_GET['s_num']=='all') echo 'selected'; }?>>All</option>
														</select>
											</div>
											<div style='text-align:center; verticle-align:center; width:89%; float:right;'>
												<ul class='pagination' style='text-align:center'>
													
													<?php echo $this->pagination->create_links(); ?>
												</ul>
											</div>

										</td>
									</tr> 
		           				</tbody>
		           			</table>
						</div>  
					</div>
	      		</div>
	      	</div>	      	
	      </div> 
	    </div>
   </div>
</div>
<div class="modal fade bs-example-modal-sm" id='loading' tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-sm">
         <div class="modal-content">
			<img src="<?php echo base_url().'assets/images/icons/loading.gif'?>">
		</div>
	</div>
</div>
<div class="modal fade bs-example-modal-lg" id="exporttap" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="wrapper">
				<div class="clearfix" id="main_content_outer">
				    <div id="main_content">
					    <div class="result_info">
					    	<div class="col-sm-6">
					      		<strong>Choose Column To Export</strong>
					      	</div>
					      	<div class="col-sm-6" style="text-align: center">
					      		<strong>
					      			<center class='visit_error' style='color:red;'></center>
					      		</strong>	
					      	</div>
					    </div>
					      	<form enctype="multipart/form-data" name="frmvisit" id="frmvisit" method="POST">
						        <div class="row">
									<div class="col-sm-12">
							            	<div class="panel-body">
							            		<div class='table-responsive'>
										               <table class='table'>
										               		<thead >
										               			<?php
										               			foreach($thead as $th=>$val){
										               				if($th!='Action')
											           					echo "<th>".$th."</th>";	
											           			}?>
										               		</thead>
										               		<tbody >
										               			<?php
										               			foreach($thead as $th=>$val){
										               				if($th!='Action')
											           					echo "<td align='center'><input type='checkbox' checked class='colch' rel='".$val."'></td>";	
											           			}?>
										               		</tbody>
										               </table>
											   </div>
								            </div>
								    </div> 
								</div>
					      </form>
					</div> 
			    </div>
			</div> 
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" id='btnprint' class="btn btn-primary">Print</button>
                <button type="button" id='btnexport' class="btn btn-primary">Export</button>
            </div>
        </div>                       <!-- /.modal-content -->
    </div>
                                <!-- /.modal-dialog -->
</div>
<script type="text/javascript">
		//loading();
		selectschlevel();
		getviewpermis();
		function getviewpermis(){
			var schlevelid=$('#schlevelid').val();
			if(schlevelid>0 || schlevelid!='')
				search();
		}
		$('#export').click(function(){
			$('#exporttap').modal('show');
			$('#btnprint').hide();
			$('#btnexport').show();
		})
		$('#print').click(function(){
			$('#exporttap').modal('show');
			$('#btnprint').show();
			$('#btnexport').hide();
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
		$('.colch').click(function(){
			if($(this).is(':checked')){
			}else{
				var col=$(this).attr('rel');
				$('.'+col).addClass(' remove_tag');
			}
		})
		$('#schlevelid').change(function(){
			search();
		})
		function selectschlevel(){
			var schlevelid="<?php if(isset($_GET['l'])) echo $_GET['l'] ?>";
			$("#schlevelid option[value='"+schlevelid+"']").attr('selected',true);
		}
		$(function(){			
			$("#btnprint").on("click",function(){
					var htmlToPrint = '' +
					        '<style type="text/css">' +
					        'table th, table td {' +
					        'border:1px solid #000 !important;' +
					        'padding;0.5em;' +
					        '}' +
					        '</style>';
					var title="<div style='width:300px; text-align:left;'><span style='font-weight:bold; font-size:16px;'><?php echo $school_name; ?></span><br>";
					var s_adr="<?php echo $school_adr; ?></div>";
						title+=s_adr;
						title +="<h4 align='center'>"+ $("#title").text()+"</h4>";
					var year =$("#year :selected").text();
						title+="Year : "+year;
					if($('#s_classid').val()!='')
						title+="<br>Class : " + $('#s_classid :selected').text();
				   	var data = $("#tab_print").html().replace(/<img[^>]*>/gi,"");
				   	var export_data = $("<center>"+data+"</center>").clone().find(".remove_tag").remove().end().html();
				   		export_data+=htmlToPrint;
				   	gsPrint(title,export_data);
			});
			$("#btnexport").on("click",function(e){
				var title="<div style='width:300px; text-align:left;'><span style='font-weight:bold; font-size:16px;'><?php echo $school_name; ?></span><br>";
				var s_adr="<?php echo $school_adr; ?></div>";
						title+=s_adr;
						title +="<h4 align='center'>"+ $("#title").text()+"</h4>";
				var year =$("#year :selected").text();
						title+="Year : "+year;
					if($('#s_classid').val()!='')
						title+="<br>Class : " + $('#s_classid :selected').text();
				var data=$('.table').attr('border',1);
					data = $("#tab_print").html().replace(/<img[^>]*>/gi,"");
	   			var export_data = $("<center><h3 align='center'>"+title+"</h3>"+data+"</center>").clone().find(".remove_tag").remove().end().html();
				window.open('data:application/vnd.ms-excel,' + encodeURIComponent(export_data));
    			e.preventDefault();
    			$('.table').attr('border',0);
			});
		})

		function search(event){
			var roleid=<?php echo $this->session->userdata('roleid');?>;
			var m=<?php echo $m;?>;
			var p=<?php echo $p;?>;
				var year=$('#year').val();
				var studentid=jQuery('#s_student_id').val();
				var full_name=jQuery('#s_full_name').val();
				var full_name_kh=jQuery('#s_full_name_kh').val();
				var classid=jQuery('#s_classid').val();
				var sort_num=$('#sort_num').val();
				var sortstd=$('#sortquery').val();
				var schlevelid=$('#schlevelid').val();
				if(sortstd=='')
					sortstd='order by studentid desc';
				$.ajax({
							url:"<?php echo base_url(); ?>index.php/student/student/search",    
							data: {'boarding':1,'schlevelid':schlevelid,'roleid':roleid,'m':m,'p':p,'year':year,'sort_num':sort_num,'sort':sortstd,'studentid':studentid,'full_name':full_name,'full_name_kh':full_name_kh,'classid':classid},
							type: "POST",
							success: function(data){
                               //alert(data);
                               jQuery('.listbody').html(data);
						}
					});
			}
		$('#year').change(function(){
			var year_id=$(this).val();
			search();
		})
		
		function sort(event)
		{
			var sort=$(event.target).attr('rel');
			var ex_sort="";
			var sorttype=$('#sort').val();
			var classid=$("#s_classid").val();
			if(sorttype=='asc'){
				$('#sort').val('desc');
				$('.sort').removeClass('cur_sort_down');
				$(event.target).addClass('cur_sort_up');
			}
			else{
				$('#sort').val('asc');
				$('.sort').removeClass('cur_sort_up');
				$(event.target).addClass('cur_sort_down');
			}
			
			if(sort!=""){
				ex_sort=" classid ASC , ";
			}	
			//alert('sort : '+ sort);
			$('#sortquery').val('ORDER BY'+ex_sort+sort+' '+sorttype);

			search();
			//loading();
		}
	</script>