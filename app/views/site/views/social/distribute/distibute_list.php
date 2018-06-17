<style type="text/css">
	table tbody tr td img{width: 20px; margin-right: 10px}
	a,.sort,.panel-heading span{cursor: pointer;}
	.panel-heading span{margin-left: 10px;}
	.cur_sort_up{
		background-image: url('<?php echo base_url('assets/images/icons/sort-up.png')?>');
		background-position: left;
		background-repeat: no-repeat;
		padding-left: 15px !important;
	}
	.ui-autocomplete{z-index: 9999;}
	.cur_sort_down{
		background-image: url('<?php echo base_url('assets/images/icons/sort-down.png')?>');
		background-position: left;
		background-repeat: no-repeat;
		padding-left: 15px !important;
	}
	.datepicker {z-index: 9999;}

</style>
<?php
function f_date($date){
	if($date!='0000-00-00' && $date!='')
		return date('d-m-Y',strtotime($date));
	else 
		return '00-00-0000';
}
  ?>
<?php
$school=$this->db->where('schoolid',$this->session->userdata('schoolid'))->get('sch_school_infor')->row();
		           			$school_name=$school->name;
		           			$school_adr=$school->address;	
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
		      		<strong id='title'>Distribute List</strong>
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
			    	<span class="top_action_button">
			    		<?php if($this->green->gAction("C")){ ?>
				    		<a href="<?php echo site_url("social/distribute/add?m=$m&p=$p")?>">
				    			<img data-toggle="modal" class='btnaddmidi' data-target="#addmedicine" src="<?php echo base_url().'assets/images/icons/add.png'?>" />
				    		</a>
				    	<?php } ?>
			    	</span>	      		
		      	</div> 			      
		  </div>
	      <div class="row">
	      	<div class="col-sm-12">
	      		<div class="panel panel-default">
	      			<div class="panel-body">
		           		<div class="table-responsive" id="tab_print">
		           			<?php 
		           			$thr="";
		           			$tr="";		
		           			foreach($thead as $th=>$val){
		           				if($th=='No')
		           					$thr.="<th class='$val' align='center' rel='$val'>".$th."</th>";
		           				else if($th=='Action')
		           					$thr.="<th class='remove_tag' align='center'>".$th."</th>";
		           				else
		           					$thr.="<th class='$val' align='center' class='sort' rel='$val'>".$th."</th>";								
		           			}
		           			
		           			if(count($tdata)>0){
		           				
		           				$i=1;
		           				if(isset($_GET['per_page']))
									$i=$_GET['per_page']+1;
		           				$arrtran=array();
		           				foreach($tdata as $row){
									$tr.="<tr>
											 	<td class='no'>".str_pad($i,2,"0",STR_PAD_LEFT)."</td>
											 	 <td class='family_code'>".$row->family_code."</td>
											 	<td class='dis_date'>".$row->dis_date."</td>
												 <td class='father_name'>".$row->father_name."</td>
												 <td class='mother_name'>".$row->mother_name."</td>
												 <td class='amt_rice alignright'>$row->amt_rice $row->rice_uom</td>
												 <td class='oil alignright'>".$row->oil.' '.$row->oil_uom."</td>
												 <td class='remark'>$row->remark</td>										 
												 <td class='remove_tag no_wrap'>" ;
									if(!isset($arrtran[$row->transno])){
										if($this->green->gAction("P")){	
											$tr.="<a>
												 		<img rel='".$row->distribut_id."' type='".$row->distrib_type."' id='".$row->distribut_id."'  onclick='preview(event);' src='".site_url('../assets/images/icons/preview.png')."'/>
												 	</a>";
										}
										if($this->green->gAction("D")){	
											$tr.="<a>
												 		<img rel='".$row->distribut_id."' onclick='deletedis(event);' src='".site_url('../assets/images/icons/delete.png')."'/>
												 	</a>";
										}
										if($this->green->gAction("U")){	
											$tr.="<a>
												 		<img rel='".$row->distribut_id."' onclick='edit(event);' src='".site_url('../assets/images/icons/edit.png')."'/>
												 </a>" ;
										}
									}	
									$tr.="</td>
												 
										 	</tr>
										 ";
									 	$i++;
									 	$arrtran[$row->transno]=$row->transno;
								}
							}?>
		           			<table class="table">
		           				<thead><?php echo $thr ?></thead>
		           				<thead class='remove_tag'>
		           						<th></th>
		           						<th width='80'>
		           							<input type='text' value="<?php if(isset($_GET['s_name'])) echo $_GET['s_name'] ?>" onkeyup="search(event);" id='s_family_code' class='form-control input-sm'/>
		           						</th>	
		           						<th width="130"></th>
		           						<th >
		           							<input type='text' value="<?php if(isset($_GET['s_name'])) echo $_GET['s_name'] ?>" onkeyup="search(event);" id='s_father_name' class='form-control input-sm'/>
		           						</th>
		           						<th >
		           							<input type='text' value="<?php if(isset($_GET['s_name'])) echo $_GET['s_name'] ?>" onkeyup="search(event);" id='s_mother_name' class='form-control input-sm'/>
		           						</th>
		           						<th colspan='3'>
											<div class="row">
												  <div class="col-xs-5">
												    	<div class='input-group new_ex' id='datetimepicker'>
														    <input value="<?php if(isset($_GET['s_name'])) echo $_GET['s_date'] ?>" type='text' class='form-control input-sm s_date' name='s_date'/>
														    <span class='input-group-addon'><span class='glyphicon glyphicon-calendar'>
														</div>	
												  </div>
												  <div class="col-xs-5">
												    	<div class='input-group new_ex' id='datetimepicker'>
														    <input value="<?php if(isset($_GET['s_name'])) echo $_GET['e_date'] ?>" type='text' class='form-control input-sm end_date' name='end_date'/>
														    <span class='input-group-addon'><span class='glyphicon glyphicon-calendar'>
														</div>	
												  </div>
												  <div class="col-xs-1">
												   		<button type="button" onClick='search(event);' class="btn btn-default btn-sm">
														  	<span class="glyphicon glyphicon-search"  aria-hidden="true"></span> Search
														</button>	
												  </div>
											</div>
		           						</th>
		           						<th></th>
		           				</thead>	
		           				<tbody class='listbody'>
		           					<?php echo $tr ?>
		           					<tr class='remove_tag'>
										<td colspan='12' id='pgt'>
											<div style='margin-top:20px; width:11%; float:left;'>
											Display : <select id="sort_num"  onchange='search(event);' style='padding:5px; margin-right:0px;'>
															<?php
															$num=10;
															if(isset($_GET['s_num']))
																$s_num=$_GET['s_num'];
															else{
																$s_num=30;
															}
															for($i=0;$i<20;$i++){?>
																<option value="<?php echo $num ;?>" <?php if($num==$s_num) echo 'selected';?> ><?php echo $num;?></option>
																<?php $num+=10;
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
 </div>
  
</div>  
<script type="text/javascript">
	
	$(function(){
		$("#a_medicine").focus(function(){
			autofillmedicine();
		});
		$("#frmmedicine").parsley();
		$(".new_date,.s_date,.end_date").datepicker({
      		language: 'en',
      		pick12HourFormat: true,
      		format:'dd-mm-yyyy'
    	});
	});
	function edit(event){
		var distribut_id=$(event.target).attr('rel');
		location.href="<?php echo site_url('social/distribute/edit');?>/"+distribut_id+"?upd=true&<?php echo "m=$m&p=$p" ?>";
	}
	function deletedis(event){
		var distribut_id=$(event.target).attr('rel');
		var confr=confirm("Are your Sure ? This action Will delete all of Distribute member...!");
		if(confr==true){
			location.href="<?php echo site_url('social/distribute/deletedis');?>/"+distribut_id+"?<?php echo "m=$m&p=$p" ?>";
		}
		
	}
	function search(event){				
				var family_code=$('#s_family_code').val();
				var father_name=$('#s_father_name').val();	
				var mother_name=$('#s_mother_name').val();	
				var roleid=<?php echo $this->session->userdata('roleid');?>;
				var m=<?php echo $m;?>;
				var p=<?php echo $p;?>;
				var s_date=$('.s_date').val();
				var end_date=$('.end_date').val();
				var year=$('#s_year').val();
				var sort_num=$('#sort_num').val();
				var sortstd=$('#sortquery').val();
				if(sortstd=='')
					sortstd='order by family_code desc';
				$.ajax({
							url:"<?php echo base_url(); ?>index.php/social/distribute/search",    
							data: {'sort_num':sort_num,
									'family_code':family_code,
									'father_name':father_name,
									'mother_name':mother_name,
									's_date':s_date,
									'roleid':roleid,
									'm':m,
									'p':p,
									'end_date':end_date,
								},
							type: "POST",
							success: function(data){                              
                               jQuery('.listbody').html(data);
						}
					});
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
			  popTitle:"distribute", // popup window title element
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
	function preview(event){
		var distribut_id=$(event.target).attr('rel');
		var dis_type=$(event.target).attr('type');
		var id=$(event.target).attr('id');
		window.open("<?php echo site_url('social/distribute/preview');?>/"+distribut_id+"?dis_type="+dis_type+"&id="+id,'_blank');
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
</script>
