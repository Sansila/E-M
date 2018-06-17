<?php
	
?>
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
	.top_action_button img{
		height: 30px;
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
		      		<strong id='title'>Annual Rice Proposal</strong>
		      	</div>
		      	<div class="col-xs-6" style="text-align: right">
		      		<span class="top_action_button">
			    		<span style='color:red;' id='error_blog'></span>
			    	</span>
			    	<span class="top_action_button">
			    		<?php if($this->green->gAction("P")){ ?>
				    		<a>
				    			<img onclick='preview(event);' src="<?php echo base_url('assets/images/icons/preview.png')?>" />
				    		</a>
				    	<?php } ?>
			    	</span>
			    	<span class="top_action_button">
			    		<?php if($this->green->gAction("I")){ ?>
				    		<a href="<?php echo site_url('social/distribplan/import')?>" >
				    			<img src="<?php echo base_url('assets/images/icons/import.png')?>" />
				    		</a>
				    	<?php } ?>
			    	</span>
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
			    	<span class="top_action_button">
			    		<?php if($this->green->gAction("C")){ ?>
				    		<a >
				    			<img onclick="Copy(event);" src="<?php echo base_url('assets/images/icons/copy.png')?>" />
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
		           				if($th=='Action')
		           					$thr.="<th class='remove_tag'>".$th."</th>";
		           				else
		           					$thr.="<th class='sort $val no_wrap' onclick='sort(event);' rel='$val'>".$th."</th>";								
		           			}
		           			
		           			if(count($tdata)>0){
		           				$i=1;
		           				if(isset($_GET['per_page']))
									$i=$_GET['per_page']+1;
								
								foreach($tdata as $row){								

									$tr.="<tr>
											 <td class='family_code'>".$row['family_code']."</td>
											 <td class='father_name'>".$row['father_name']."</td>										 
											 <td class='father_name_kh'>".$row['father_name_kh']."</td>

											 <td class='mother_name'>".$row['mother_name']."</td>
											 <td class='mother_name_kh'>".$row['mother_name_kh']."</td>

											 <td class='amt_rice'>".$row['amt_rice']." ".$row['rice_uom']."</td>
											 <td class='oil'>".$row['oil']." ".$row['oil_uom']."</td>
											 <td class='remark'>".substr($row['remark'],0,17)."...</td>

											 <td class='modified_date no_wrap'>".$row['modified_date']."</td>
											 <td class='remove_tag'>";
											 if($this->green->gAction("P")){	
													$tr.="<a><img rel=".$row['familyid']." year='".$row['year']."' onclick='previewonefam(event);' src='".site_url('../assets/images/icons/preview.png')."'/></a> ";  
												}	
											$tr.="</td>
										 </tr>
										 ";		
										 //  <td class='remove_tag'>
											//  <a><img rel=".$row['displanid']." onclick='previewstock(event);' src='".site_url('../assets/images/icons/preview.png')."'/></a>   
											//  <a><img rel=".$row['displanid']." onclick='deletestock(event);' src='".site_url('../assets/images/icons/delete.png')."'/></a> 
											//  <a><img rel=".$row['displanid']." onclick='updatestock(event);' src='".site_url('../assets/images/icons/edit.png')."'/></a>
										 // </td>								 
									$i++;	 
								}
							}
													
		           			?>

		           			<table class="table" border='0'>
		           				<thead ><?php echo $thr ?></thead>
		           				<thead class='remove_tag'>		           					
									<td class='col-xs-1'>
										<input type='text' value='asc' name='sort' id='sort' style='width:30px; display:none'/>
										<input type='text' value="<?php if(isset($_GET['fid'])) echo $_GET['fid']; ?>" onkeyup='search(event);' 
										class='form-control input-sm' name='s_family_code' id='s_family_code'/>
									</td>
							 		<td class='col-xs-2' colspan="2">
							 			<input type='text' value="<?php if(isset($_GET['fn'])) echo $_GET['fn']; ?>" onkeyup='search(event);' 
							 			class='form-control input-sm' name='s_father_name' id='s_father_name'/>
							 		</td>							 		
		           					<td class='col-xs-2' colspan="2">
		           						<input type='text' value="<?php if(isset($_GET['mn'])) echo $_GET['mn']; ?>" onkeyup='search(event);' 
		           						class='form-control input-sm' name='s_mother_name' id='s_mother_name'/>
		           					</td>
		           					<td class='col-xs-1'>
		           						<select name="s_distrib_type" onchange='search(event);' class="form-control" id="s_distrib_type">
		           							
		           							<?php
		           								$dt='';
		           								 if(isset($_GET['dt'])) $dt=$_GET['dt'];
		           							 	echo $this->green->gOption($this->dis->getDistribType(),$dt);

		           							 ?>
		           						</select>
		           					</td>

		           					<td class='col-xs-1'>
		           						<select name="s_year" onchange='search(event);' class="form-control" id="s_year">
		           							<?php
		           								 $year='';
		           								 if(isset($_GET['y'])) $year=$_GET['y'];
		           								 echo $this->green->gOption($this->dis->getdatedis(),$year);
		           							?>
		           						</select>
		           					</td>
							 		
							 		<td ><input type='text' value='' name='sortquery' id='sortquery' style='width:80px; display:none'/></td>
							 		<td class='col-xs-1'>							 		
				              		</td>
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
				var col=$(this).attr('rel');
					$('.'+col).removeClass(' remove_tag');
			}else{
				var col=$(this).attr('rel');
				$('.'+col).addClass(' remove_tag');
			}
		})
		$(function(){			
			$("#btnprint").on("click",function(){
					var htmlToPrint = '' +
					        '<style type="text/css">' +
					        'table th, table td {' +
					        'border:1px solid #000 !important;' +
					        'padding;0.5em;' +
					        '}' +
					        '</style>';
					var dis_type=$("#s_distrib_type").val();
					var title="<div style='width:300px; text-align:left;'><span style='font-weight:bold; font-size:16px;'><?php echo $school_name; ?></span><br>";
					var s_adr="<?php echo $school_adr; ?></div>";
						title+=s_adr;
						if(dis_type=='12')
							title +="<h4 align='center'>Families whom get rice every month</h4>";
						if(dis_type=='4')
							title +="<h4 align='center'>Families whom get rice 4 times per year</h4>";
						if(dis_type=='2')
							title +="<h4 align='center'>Families whom get rice 2 times per year</h4>";
							// title +="<h4 align='center'>"+ $("#title").text()+"</h4>";
					// var year =$("#year :selected").text();
					// 	title+="Year : "+year;
					// if($('#s_classid').val()!='')
					// 	title+="<br>Class : " + $('#s_classid :selected').text();
				   	var data = $("#tab_print").html().replace(/<img[^>]*>/gi,"");
				   	var export_data = $("<center>"+data+"</center>").clone().find(".remove_tag").remove().end().html();
				   		export_data+=htmlToPrint;
				   	gsPrint(title,export_data);
			});
			$("#btnexport").on("click",function(e){
				var title="<div style='width:300px; text-align:left;'><span style='font-weight:bold; font-size:16px;'><?php echo $school_name; ?></span><br>";
				var s_adr="<?php echo $school_adr; ?></div>";
						var dis_type=$("#s_distrib_type").val();
						title+=s_adr;
						if(dis_type=='12')
							title +="<h4 align='center'>Families whom get rice every month</h4>";
						if(dis_type=='4')
							title +="<h4 align='center'>Families whom get rice 4 times per year</h4>";
						if(dis_type=='2')
							title +="<h4 align='center'>Families whom get rice 2 times per year</h4>";
						// title +="<h4 align='center'>"+ $("#title").text()+"</h4>";
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
		function Copy(){
			var conf=confirm('Are you Sure want to copy all...!')
			if(conf==true){
				var year=$("#s_year").val();
				$.ajax({
							url:"<?php echo base_url(); ?>index.php/social/distribplan/getexistdate",    
							data: {'year':year},
							type: "POST",
							success: function(data){                              
                             	if(data=='true')
                             		$('#error_blog').html('Year : '+(Number(year)+Number(1))+ " is Already Exist...!");
                             	else
                             		location.href="<?php echo base_url(); ?>index.php/social/distribplan"+"?<?php echo "m=$m&p=$p" ?>";
						}
					});
			}
		}
		function search(event){				
				var family_code=$('#s_family_code').val();
				var father_name=$('#s_father_name').val();	
				var mother_name=$('#s_mother_name').val();		
				var distrib_type=$('#s_distrib_type').val();
				var year=$('#s_year').val();
				var sort_num=$('#sort_num').val();
				var sortstd=$('#sortquery').val();
				var roleid=<?php echo $this->session->userdata('roleid');?>;
				var m=<?php echo $m;?>;
				var p=<?php echo $p;?>;
				if(sortstd=='')
					sortstd='order by family_code desc';
				$.ajax({
							url:"<?php echo base_url(); ?>index.php/social/distribplan/search",    
							data: {'sort_num':sort_num,
									'sort':sortstd,
									'family_code':family_code,
									'father_name':father_name,
									'mother_name':mother_name,
									'year':year,
									'roleid':roleid,
									'm':m,
									'p':p,
									'distrib_type':distrib_type
								},
							type: "POST",
							success: function(data){                              
                               jQuery('.listbody').html(data);
						}
					});
			}
		$('#year').change(function(){
			var year=$(this).val();
			search();
		})
		
		function previewonefam(event){
			var familyid=$(event.target).attr('rel');
			var year=$(event.target).attr('year');
			window.open("<?PHP echo site_url('social/distribplan/previewone');?>/"+familyid+"/"+year,'_blank');
		}
		function sort(event)
		{
			var sort=$(event.target).attr('rel');
			var sorttype=$('#sort').val();
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
				
			//alert('sort : '+ sort);
			$('#sortquery').val('ORDER BY '+sort+' '+sorttype);
			search();
			//loading();
		}
	</script>