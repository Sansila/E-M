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
	.cur_sort_down{
		background-image: url('<?php echo base_url('assets/images/icons/sort-down.png')?>');
		background-position: left;
		background-repeat: no-repeat;
		padding-left: 15px !important;
	}
	.datepicker {z-index: 9999;}
</style>

<div class="wrapper">
	<div class="clearfix" id="main_content_outer">
	    <div id="main_content">
	      <div class="row result_info">
		      	<div class="col-xs-6">
		      		<strong id='title'>Family List</strong>
		      	</div>
		      	<div class="col-xs-6" style="text-align: right">
		      		<span class="top_action_button">
			    		<a>
			    			<img onclick="showsort(event);" src="<?php echo base_url('assets/images/icons/sort.png')?>" />
			    		</a>
			    	</span>
		      		<span class="top_action_button">
		      			<?php if($this->green->gAction("I")){ ?>
				    		<a href="<?php echo site_url('student/student/import')?>" class="import">
				    			<img src="<?php echo base_url('assets/images/icons/import.png')?>" />
				    		</a>
				    	<?php } ;?>	
			    	</span>
			    	<span class="top_action_button">	
			    		<?php if($this->green->gAction("E")){ ?>
				    		<a href="#" id="export" title="Export" class="export">
				    			<img src="<?php echo base_url('assets/images/icons/export.png')?>" />
				    		</a>
			    		<?php } ?>
			    	</span>
		      		<span class="top_action_button">
		      			<?php if($this->green->gAction("P")){ ?>
							<a href="#" id="print" title="Print" class="print">
				    			<img src="<?php echo base_url('assets/images/icons/print.png')?>" />
				    		</a>
				    	<?php } ?>
		      		</span>		    	
			    	<span class="top_action_button">
			    		<?php if($this->green->gAction("C")){ ?>
				    		<a href="<?php echo site_url('social/family/add')?>" class="add">
				    			<img src="<?php echo base_url('assets/images/icons/add.png')?>" />
				    		</a>
			    		<?php } ?>
			    	</span>	      		
		      	</div> 			      
		  </div>
		 
		  	<div class="panel panel-default" id="sort_ad" style="display:none">
			  <div class="panel-heading">
			  		<span class="label label-default" onclick="sortadvance(event);">A</span>
			  		<span class="label label-default" onclick="sortadvance(event);">B</span>
			  		<span class="label label-default" onclick="sortadvance(event);">C</span>
			  		<span class="label label-default" onclick="sortadvance(event);">D</span>
			  		<span class="label label-default" onclick="sortadvance(event);">E</span>
			  		<span class="label label-default" onclick="sortadvance(event);">F</span>
			  		<span class="label label-default" onclick="sortadvance(event);">G</span>
			  		<span class="label label-default" onclick="sortadvance(event);">H</span>
			  		<span class="label label-default" onclick="sortadvance(event);">I</span>
			  		<span class="label label-default" onclick="sortadvance(event);">J</span>
			  		<span class="label label-default" onclick="sortadvance(event);">K</span>
			  		<span class="label label-default" onclick="sortadvance(event);">L</span>
			  		<span class="label label-default" onclick="sortadvance(event);">M</span>
			  		<span class="label label-default" onclick="sortadvance(event);">N</span>
			  		<span class="label label-default" onclick="sortadvance(event);">O</span>
			  		<span class="label label-default" onclick="sortadvance(event);">P</span>
			  		<span class="label label-default" onclick="sortadvance(event);">Q</span>
			  		<span class="label label-default" onclick="sortadvance(event);">R</span>
			  		<span class="label label-default" onclick="sortadvance(event);">S</span>
			  		<span class="label label-default" onclick="sortadvance(event);">T</span>
			  		<span class="label label-default" onclick="sortadvance(event);">U</span>
			  		<span class="label label-default" onclick="sortadvance(event);">V</span>
			  		<span class="label label-default" onclick="sortadvance(event);">W</span>
			  		<span class="label label-default" onclick="sortadvance(event);">X</span>
			  		<span class="label label-default" onclick="sortadvance(event);">Y</span>
			  		<span class="label label-default" onclick="sortadvance(event);">Z</span>
			  		<span class="label label-default" onclick="sortadvance(event);">0-9</span>
			  </div>
			  
			</div>
			<div class="table-responsive hide"  id="tab_print">
		  		<table class="table" id='exptbl' border='0'>

		  		</table>
		  	</div>
	      <div class="row">
	      	<div class="col-sm-12">
	      		<div class="panel panel-default">
	      			<div class="panel-body">
		           		<div class="table-responsive">
		           			<?php 
		           			$thr="";
		           			$tr="";	
		           			$school=$this->db->where('schoolid',$this->session->userdata('schoolid'))->get('sch_school_infor')->row();
		           			$school_name=$school->name;
		           			$school_adr=$school->address;	
		           			foreach($thead as $th=>$val){
		           				if($th=='No')
		           					$thr.="<th class='$val' align='center'>".$th."</th>";
		           				else if($th=='Action')
		           					$thr.="<th class='remove_tag' align='center'>".$th."</th>";
		           				else
		           					$thr.="<th align='center' class='no_wrap sort $val' onclick='sort(event);' rel='$val'>".$th."</th>";								
		           			}
		           			
		           			if(count($tdata)>0){
		           				$i=1;
		           				if(isset($_GET['per_page']))
									$i=$_GET['per_page']+1;
								
								foreach($tdata as $row){																
									$tr.="<tr>
												<td class='No'>".str_pad($i,2,"0",STR_PAD_LEFT)."</td>
												 <td class='family_code'>".$row['family_code']."</td>
												 <td class='father_name'>".$row['father_name']."</td>
												 <td class='father_name_kh'>".$row['father_name_kh']."</td>
												 <td class='father_ocupation'>".$row['father_ocupation']."</td>
												 <td class='mother_name'>".$row['mother_name']."</td>
												 <td class='mother_name_kh'>".$row['mother_name_kh']."</td>
												 <td class='mother_ocupation'>".$row['mother_ocupation']."</td>
												 <td class='revenue'>".$row['revenue']." ".$row['family_revenu_currcode']."</td>
												 <td>
													<div class='btn-group'>
									                  <button type='button' class='btn btn-default'>Action</button>
									                  <button type='button' class='btn btn-default dropdown-toggle' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
													    <span class='caret'></span></button>
													    <ul class='dropdown-menu'>
													     
													      <li><a title='Contract' rel='".$row['familyid']."' onclick='previewstudent(event);' role='menuitem' tabindex='-1' href='".site_url('social/family/preview').'/'.$row['familyid']."'>preview</a></li>
													       <li><a title='Contract' rel='".$row['familyid']."' onclick='updatefamily(event);' role='menuitem' tabindex='-1' href='#'>Update</a></li>
													       <li><a title='Contract' rel='".$row['familyid']."' onclick='viewcard(event);' role='menuitem' tabindex='-1' href='#'>Family Card</a></li>
											        <li><a title='Temporary Card' rel='".$row['familyid']."' onclick='setcard(event);' role='menuitem' tabindex='-1' href='javascript:void(0)'>Temporary Card</a></li>

													      <li class='divider'></li>";
													      	if(isset($_GET['tr']) && $_GET['tr']==0){
													      		$tr.= "<li><a title='Contract' rel='".$row['familyid']."'  onclick='trash(event);' role='menuitem' tabindex='-1' href='#'>Delete From Trush</a></li>";
													      		$tr.= "<li><a title='Contract' rel='".$row['familyid']."'  onclick='untrash(event);' role='menuitem' tabindex='-1' href='#'>Untrush</a></li>";
															}else{
													      		$tr.="<li><a title='Contract' rel='".$row['familyid']."'  onclick='deletestudent(event);' role='menuitem' tabindex='-1' href='#'>Delete</a></li>";
															}

													   $tr.= "</ul>
												  	</div>
												</td>";
											// 	 <td class='remove_tag'>";
											// if($this->green->gAction("P")){											 
											// 	$tr.="<a class='read' href='".site_url('social/family/preview').'/'.$row['familyid']."' target='_balnk'>
											// 		 		<img rel=".$row['familyid']."  src='".site_url('../assets/images/icons/preview.png')."'/>
											// 		 	</a>";
											// }
											// if($this->green->gAction("D")){			
											// 	$tr.="<a class='delete'>
											// 		 		<img rel=".$row['familyid']." onclick='deletestudent(event);' src='".site_url('../assets/images/icons/delete.png')."'/>
											// 		 	</a>";
											// }if($this->green->gAction("U")){				 	
											// 	$tr.="<a class='update'>
											// 		 		<img  rel=".$row['familyid']." onclick='updatefamily(event);' src='".site_url('../assets/images/icons/edit.png')."'/>
											// 		 	</a>";
											// }		 	
											// $tr.="</td>
											 "</tr>
										 ";										 
									$i++;	 
								}
							}
													
		           			?>

		           			<table class="table table-striped">
		           				<thead><?php echo $thr ?></thead>
		           				<thead class='remove_tag'>
		           				<form class="frmsearch">
		           					<td>
		           						<input type='text' id='page' class='hide' value="<?PHP if(isset($_GET['per_page'])) echo $_GET['per_page'] ?>" />
		           						<input type='text' value='asc' name='sort' id='sort' style='width:30px; display:none'/>
		           						<input type='hidden' value="<?php if(isset($_GET['nst'])) echo $_GET['nst']; ?>" name='nst' id='nst'/>
		           						<input type='hidden' value="<?php if(isset($_GET['srev'])) echo $_GET['srev']; ?>" name='srev' id='srev'/>
		           					</td>
		           					<td ><input type='text' value="<?php if(isset($_GET['s_id'])) echo $_GET['s_id']; ?>" onkeyup='//search();' class='form-control input-sm' name='s_family_code' id='s_family_code'/></td>
							 		<td ><input type='text' value="<?php if(isset($_GET['s_id'])) echo $_GET['s_id']; ?>" onkeyup='//search();' class='form-control input-sm' name='s_father_name' id='s_father_name'/></td>
							 		<td><input type='text' value="<?php if(isset($_GET['fn'])) echo $_GET['fn']; ?>" onkeyup='//search();' class='form-control input-sm' name='s_father_name_kh' id='s_father_name_kh'/></td>
							 		<td><input type='text' value="<?php if(isset($_GET['fn'])) echo $_GET['fn']; ?>" onkeyup='//search();' class='form-control input-sm' name='s_father_ocupation' id='s_father_ocupation'/></td>
							 		<td><input type='text' value="<?php if(isset($_GET['s_id'])) echo $_GET['s_id']; ?>" onkeyup='//search();' class='form-control input-sm' name='s_mother_name' id='s_mother_name'/></td>
									<td><input type='text' value="<?php if(isset($_GET['s_id'])) echo $_GET['s_id']; ?>" onkeyup='//search();' class='form-control input-sm' name='s_mother_name_kh' id='s_mother_name_kh'/></td>
							 		<td ><input type='text' value="<?php if(isset($_GET['fn'])) echo $_GET['fn']; ?>" onkeyup='//search();' class='form-control input-sm' name='s_mother_ocupation' id='s_mother_ocupation'/></td>
							 		<td class='col-xs-1'>
							 			<select class='form-control input-sm parsley-validated'  name='s_trash' id='s_trash'>
                   						 <option value="1" <?php if(isset($_GET['tr']) && $_GET['tr']==1) echo 'selected'; ?>>Untrash</option>
                   						 <option value="0" <?php if(isset($_GET['tr']) && $_GET['tr']==0) echo 'selected'; ?>>Trashed</option>
					                    
				                 		</select>
				              		</td>
		           					<td width='170'><input type='text' value='' name='sortquery' id='sortquery' style='width:80px; display:none'/>
		           					<input type="submit" value="Filter" class="btn btn-primary btn-sm"></td>
		           				</form>
		           					
		           				</thead>
		           				<tbody class='listbody'>
		           					<?php echo $tr ?>
		           					<tr class='remove_tag'>
										<td colspan='12' id='pgt'>
											<div style='margin-top:20px; width:11%; float:left;'>
											Display : <select id="sort_num"  onchange='sort_num(event);' style='padding:5px; margin-right:0px;'>
															<?php
															$num=100;
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
<div class="modal fade bs-example-modal-lg" id="temporarycard" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="wrapper">
				<div class="clearfix" id="main_content_outer">
				    <div id="main_content">
					    <div class="result_info">
					    	<div class="col-sm-6">
					      		<strong>Student Temporary Card</strong>
					      	</div>
					      	<div class="col-sm-6" style="text-align: center">
					      		<strong>
					      			<center class='visit_error' style='color:red;'></center>
					      		</strong>	
					      	</div>
					    </div>
					      
				        <div class="row">
							<div class="col-sm-10 col-sm-offset-1">
									<form enctype="multipart/form-data" name="" id="frm_temcard" method="POST" action="">
									
						                <div class="form_group">
							                <label class="req" for="classid">Card number</label>
							               	<input type="text" name="tem_card" onblur="checkcard(event);" class="form-control" placeholder="Temporary card" />
						        			<input type="hidden" id="stdid_tem" />
						                </div>
						                <div class="form_group">
							                <label class="req" for="classid">Expired date</label>
							               	<input type="text" name="expired_date" class="form-control" placeholder="yyyy-mm-dd" />
						        
						                </div>
						                <div class="modal-footer">
								            	<div class="col-sm-8 checkbox">
								                   
								                </div>
								                
									            <div class='col-sm-4'>
									            	<button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
									           
									                <button type="submit" class="btn btn-primary">Save</button>
									            </div>
								        </div>        
							    	</form>
						    </div> 

						</div><br>
					      
					</div> 
			    </div>
			</div> 
					                          <!-- /.modal-content -->
    	</div>
                                <!-- /.modal-dialog -->
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
										               			foreach($exp as $th=>$val){
											           					echo "<th class='no_wrap'>".$th."</th>";	
											           			}?>
										               		</thead>
										               		<tbody >
										               			<?php
										               			foreach($exp as $th=>$val){
										               				if($th!='Action')
											           					echo "<td align='center'><input type='checkbox' checked class='colch' value='$th' rel='".$val."'></td>";	
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
            	<div class="col-sm-9 checkbox">
                    <label>
                      <input type="checkbox" name='is_all' id='is_all' value='0'>Print/Export All Page
                    </label>  
                </div>
                <div class='col-sm-3'>
	                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	                <button type="button" id='btnprint' rel='P' onclick='expdata(event);' class="btn btn-primary">Print</button>
	                <button type="button" id='btnexport' rel='E' onclick='expdata(event);' class="btn btn-primary">Export</button>
	            </div>
        </div>                       <!-- /.modal-content -->
    </div>
                                <!-- /.modal-dialog -->
</div>
<script type="text/javascript">

	$('#frm_temcard').on('keyup keypress', function(e) {
	  var keyCode = e.keyCode || e.which;  
	  if (keyCode === 13) { 
	  	// alert('test');
	    e.preventDefault();
	    return false;
	  }
	});
	$('.frmsearch').submit(function(e){
			e.preventDefault();
			search();
		})
	function checkcard(event){
		var card_number=$(event.target).val();
		var studentid=$("#stdid_tem").val();
		$.ajax({
                url:"<?php echo base_url(); ?>index.php/social/family/validatecard/"+card_number+"/"+studentid,    
                data: {},
                type:"post",
                dataType:'json',
                async:false,
                success: function(data){
                	if(data==1){
                		alert('This card is already register with someone.');
                		$(event.target).val('');
                	}
                }
        });
	}
	$(function(){
		$("input[name='expired_date']").datepicker({
      		language: 'en',
      		pick12HourFormat: true,
      		format:'yyyy-mm-dd'
    	});
	})

	var m="<?php echo isset($_GET['m'])?$_GET['m']:'' ?>";
	var p="<?php echo isset($_GET['p'])?$_GET['p']:'' ?>";
	var y="<?php echo isset($_GET['y'])?$_GET['y']:'' ?>";

		// $('.colch').click(function(){
		// 	if($(this).is(':checked')){
		// 	}else{
		// 		var col=$(this).attr('rel');
		// 		$('.'+col).addClass(' remove_tag');
		// 	}
		// })
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
		function prints(){
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
			   	var data = $("#tab_print").html().replace(/<img[^>]*>/gi,"");
			   	var export_data = $("<center>"+data+"</center>").clone().find(".remove_tag").remove().end().html();
			   		export_data+=htmlToPrint;
			   	gsPrint(title,export_data);
		}
		function exports(){
			var title="<div style='width:300px; text-align:left;'><span style='font-weight:bold; font-size:16px;'><?php echo $school_name; ?></span><br>";
			var s_adr="<?php echo $school_adr; ?></div>";
					title+=s_adr;
					title +="<h4 align='center'>"+ $("#title").text()+"</h4>";
			var year =$("#year :selected").text();
					title+="Year : "+year;
			var data=$('#exptbl').attr('border',1);
				data = $("#tab_print").html().replace(/<img[^>]*>/gi,"");
   			var export_data = $("<center><h3 align='center'>"+title+"</h3>"+data+"</center>").clone().find(".remove_tag").remove().end().html();
			window.open('data:application/vnd.ms-excel,' + encodeURIComponent(export_data));
			$('.table').attr('border',0);
		}
		function expdata(event){
			var family_code=jQuery('#s_family_code').val();
			var father_name=jQuery('#s_father_name').val();
			var father_name_kh=jQuery('#s_father_name_kh').val();
			var father_ocupation=jQuery('#s_father_ocupation').val();
			var mother_name=jQuery('#s_mother_name').val();
			var mother_name_kh=jQuery('#s_mother_name_kh').val();
			var mother_ocupation=jQuery('#s_mother_ocupation').val();
			var sort_num=$('#sort_num').val();
			var sortstd=$('#sortquery').val();
			var page=$('#page').val();
			var is_all=0;
			if($('#is_all').is(':checked'))
				is_all=1;
			if(sortstd=='')
					sortstd=' order by familyid desc ';
			var field={};
			$('.colch').each(function(){
				if($(this).is(':checked')){
					var key=$(this).attr('rel');
					var val=$(this).val();
					field[key]=val;
				}
					
			})
			$.ajax({
					url:"<?php echo base_url(); ?>index.php/social/family/getexp",    
					data: {
							'page':page,
							'is_all':is_all,
							'f':field,
							'sort_num':sort_num,
							'sort':sortstd,
							'father_name':father_name,
							'father_name_kh':father_name_kh,
							'father_ocupation':father_ocupation,
							'mother_name':mother_name,
							'mother_name_kh':mother_name_kh,
							'mother_ocupation':mother_ocupation,
							'family_code':family_code},
					type: "POST",
					dataType:'json',
					async:false,
					success: function(data){
						$('#exptbl').html(data.data);
						var s=$(event.target).attr('rel');
						if(s=='E')
							exports();
						else
							prints();
				}
			});
		}
		function sort_num(event){
			search('');
		}	
		function setcard(event){
			var studentid=$(event.target).attr('rel');
			$("#stdid_tem").val(studentid);
			$.ajax({
                    url:"<?php echo base_url(); ?>index.php/social/family/gettemcard/"+studentid,    
                    data: {},
                    type:"post",
                    dataType:'json',
                    async:false,
                    success: function(data){
                    	// alert(data.tem_card_expired);
                    	$('input[name="tem_card"]').val(data.tem_card_number);
                    	$('input[name="expired_date"]').val(data.tem_card_expired);
	                }
            });
			$('#temporarycard').modal('show');
			$('#frm_temcard').attr('action',"<?php echo site_url('social/family/settemcard') ?>/"+studentid+"?m=<?php echo $m ?>&p=<?php echo $m ?>");

		}
		function search(event,sql){
			//alert('ok');
			$("body").loading();
				if(sql==''){
					$('.panel div span').removeClass('label-danger');
					$('.panel div span').addClass('label-default');
				}
				var family_code=jQuery('#s_family_code').val();
				var father_name=jQuery('#s_father_name').val();
				var father_name_kh=jQuery('#s_father_name_kh').val();
				var father_ocupation=jQuery('#s_father_ocupation').val();
				var mother_name=jQuery('#s_mother_name').val();
				var mother_name_kh=jQuery('#s_mother_name_kh').val();
				var mother_ocupation=jQuery('#s_mother_ocupation').val();
				var sort_num=$('#sort_num').val();
				var sortstd=$('#sortquery').val();
				var nst=$('#nst').val();
				var srev=$('#srev').val();
				var trash=$('#s_trash').val(); 
				//alert(sort_num);
				if(sortstd=='')
					sortstd=' order by familyid desc ';
				setTimeout(function(){ 
					$.ajax({
								url:"<?php echo base_url(); ?>index.php/social/family/search",    
								data: {'sort_ad':sql,
										'sort_num':sort_num,
										'sort':sortstd,
										'father_name':father_name,
										'father_name_kh':father_name_kh,
										'father_ocupation':father_ocupation,
										'mother_name':mother_name,
										'mother_name_kh':mother_name_kh,
										'mother_ocupation':mother_ocupation,
										'family_code':family_code,
										'nst':nst,
										'trash':trash,
										'srev':srev
									},
								type: "POST",
								success: function(data){
	                               //alert(data);
	                               jQuery('.listbody').html(data);
	                               $('body').loading('stop');
							}
					});
				}, 500);
				
			}
		function deletestudent(event){
			var r = confirm("Are you sure to delete this item !");
			if (r == true) {
			    var fam_id=jQuery(event.target).attr("rel");
				location.href="<?PHP echo site_url('social/family/delete');?>/"+fam_id+"?y="+y+"&m="+m+"&p="+p; 
			} else {
			    txt = "You pressed Cancel!";
			}
			
		}
		function trash(event){
			var r = confirm("Are you sure to delete this family !");
			if (r == true) {
			    var fam_id=jQuery(event.target).attr("rel");
				location.href="<?PHP echo site_url('social/family/trash');?>/"+fam_id+"?y="+y+"&m="+m+"&p="+p; 
			} else {
			    txt = "You pressed Cancel!";
			}
			
		}
		function untrush(event){
			var r = confirm("Are you sure to untrush this family ?");
			if (r == true) {
			    var fam_id=jQuery(event.target).attr("rel");
				location.href="<?PHP echo site_url('social/family/untrush');?>/"+fam_id+"?y="+y+"&m="+m+"&p="+p; 
			} else {
			    txt = "You pressed Cancel!";
			}
			
		}
		function loading(){
			 $('#loading').modal('show');
              setTimeout(function() { $('#loading').modal('hide'); }, 2000);
		}
		function viewcard(event){
				var familyid=jQuery(event.target).attr("rel");
				 location.href="<?PHP echo site_url('social/family/view_card');?>/"+familyid;
		}
		function updatefamily(event){
				var family_id=jQuery(event.target).attr("rel");
				location.href="<?PHP echo site_url('social/family/edit');?>/"+family_id+"?y="+y+"&m="+m+"&p="+p;
		}
		function showsort(event){
			
			$('#sort_ad').fadeToggle('3000');
		}
		function sortadvance(event){
			var value=$(event.target).text();
			var sql='';
			if($('.cur').attr('rel')==undefined){
				alert('please select field');
			}else {
				$(event.target).removeClass('label-default');
				$('.panel div span').removeClass('label-danger');
				$('.panel div span').addClass('label-default');
				$(event.target).addClass('label-danger');
				var field=$('.cur').attr('rel');
				if(value=='0-9')
					sql="  ORDER BY CASE WHEN "+field+" LIKE '[0-9]%' Then 1 Else 0 End Asc, "+field;
				else
					sql=" AND ("+field+" LIKE '"+value+"%')";
				search(0,sql);	
			}
				
			//search(value);
			//alert(value);
		}
		function sort(event)
		{
			var sort=$(event.target).attr('rel');
			var sorttype=$('#sort').val();
			if(sorttype=='asc'){
				$('#sort').val('desc');
				$('.sort').removeClass('cur_sort_down cur');
				$(event.target).addClass('cur_sort_up cur');
				
			}
			else{
				$('#sort').val('asc');
				$('.sort').removeClass('cur_sort_up cur');
				$(event.target).addClass('cur_sort_down cur');
			}
				
			//alert('sort : '+ sort);
			$('#sortquery').val('ORDER BY '+sort+' '+sorttype);
			search();
			
		}
	</script>