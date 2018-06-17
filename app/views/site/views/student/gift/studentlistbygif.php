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

</style>
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
		      		<strong id='title'>Donation List</strong>
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
								foreach($tdata as $row){
									$tpe='';
									if($row->donate_type=='AG')
										$tpe="Annual Gift";
									else
										$tpe="Sponsor Order";
									
									$tr.="<tr>
										 	 <td class='no'>".str_pad($i,2,"0",STR_PAD_LEFT)."</td>
											 <td class='date'>".date('d-m-Y',strtotime($row->date))."</td>
											 <td class='fullname'>".$row->fullname."</td>
											 <td class='donate_type'>".$tpe."</td>
											 <td class='class_name'>".$row->class_name."</td>
											 <td class='year'>".$row->sch_year."</td>
									 	</tr>";
									 $i++;
								}
							}?>
		           			<table class="table">
		           				<thead><?php echo $thr ?></thead>
		           				<thead class='remove_tag'>
		           						<th colspan='3'>
											<div class="row">
												  <div class="col-xs-4">
												    	<div class='input-group new_ex' id='datetimepicker'>
														    <input value="<?php if(isset($_GET['s_name'])) echo $_GET['s_date'] ?>" type='text' class='form-control input-sm s_date' name='s_date'/>
														    <span class='input-group-addon'><span class='glyphicon glyphicon-calendar'>
														</div>	
												  </div>
												  <div class="col-xs-4">
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
		           						<th class='col-xs-2'>
		           							<select class='form-control input-sm' id='s_schlevelid' onchange='search(event);'>
		           								<option value=''>----Select Level----</option>
						                  		<?php
						                  			foreach ($this->db->get('sch_school_level')->result() as $sch) { ?>
						                  			<option value='<?php echo $sch->schlevelid; ?>'><?php echo $sch->sch_level; ?></option>	
						                  		<?php	}
						                  		 ?>
		           							</select>
		           						</th>
		           						<th class='col-xs-2'>
		           							<select class='form-control input-sm' id='s_class' onchange='search(event);'>
		           								<option value=''>----Select class----</option>
						                  		<?php
						                  			foreach ($this->db->get('sch_class')->result() as $c) { ?>
						                  			<option value='<?php echo $c->classid; ?>'><?php echo $c->class_name; ?></option>	
						                  		<?php	}
						                  		 ?>
		           							</select>
		           						</th>
		           						<th class='col-xs-2'>
		           							<select class='form-control input-sm' id='s_gifid' onchange='search(event);'>
		           								<option value=''>----Select Gift----</option>
						                  		<?php
						                  			foreach ($this->db->get('sch_student_gif')->result() as $g) { ?>
						                  			<option value='<?php echo $g->gifid; ?>'><?php echo $g->gifname; ?></option>	
						                  		<?php	}
						                  		 ?>
		           							</select>
		           						</th>

		           				</thead>
		           				<tbody class='listbody'>
		           					<?php echo $tr ?>

		           					<tr class='remove_tag'>
										<td colspan='7' id='pgt'>
											<div style='margin-top:20px; width:11%; float:left;'>
											Display : <select id="sort_num"  onchange='search(event);' style='padding:5px; margin-right:0px;'>
															<?php
															$num=10;
															for($i=0;$i<20;$i++){?>
																<option value="<?php echo $num ;?>" <?php if(isset($_GET['s_num'])){ if($num==$_GET['s_num']) echo 'selected'; }?> ><?php echo $num;?></option>
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
										               		<tbody>
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
<script type="text/javascript">
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
	$(function(){		
			$(".s_date,.end_date").datepicker({
	      		language: 'en',
	      		pick12HourFormat: true,
	      		format:'dd-mm-yyyy'
	    	});	
			$("#btnprint").on("click",function(){
					var htmlToPrint = '' +
					        '<style type="text/css">' +
					        'table th, table td {' +
					        'border:1px solid #000 !important;' +
					        'padding;0.5em;' +
					        '}' +
					        'table th{border-top:1px solid #000 !important;}'+
					        'h5{margin:0px !important;}'+
					        '</style>';
					var title="<div style='width:300px; text-align:left;'><span style='font-weight:bold; font-size:16px;'><?php echo $school_name; ?></span><br>";
					var s_adr="<?php echo $school_adr; ?></div>";
					var year='';

					var e_date=$('.end_date').val();
					var s_date=$('.s_date').val();
					var gifid=$('#s_gifid').val();

					if(e_date!='' && s_date!='')
						year="From Date : "+s_date+" To :"+e_date;
					else
						year="Year : "+$('#year option:selected').text();
						title+=s_adr;
						title +="<h4 align='center'>"+ $("#title").text()+"</h4>";
						title +="<br/><h5 align='left'>"+ year+"</h5>";
					if(gifid!='')
						title +="<br/><h5 align='left'>Student Get : "+ $('#s_gifid option:selected').text()+"</h5>";
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
					var year='';
					var gifid=$('#s_gifid').val();

					var e_date=$('.end_date').val();
					var s_date=$('.s_date').val();
					if(e_date!='' && s_date!='')
						year="From Date : "+s_date+" To :"+e_date;
					else
						year="Year : "+$('#year option:selected').text();
					title +="<br/><h5 align='center'>"+ year+"</h5>";
					if(gifid!='')
						title +="<br/><h5 align='left'>Student Get : "+ $('#s_gifid option:selected').text()+"</h5>";
					
				var data=$('.table').attr('border',1);
					data = $("#tab_print").html().replace(/<img[^>]*>/gi,"");
	  		 var export_data = $("<center><h3 align='center'>"+title+"</h3>"+data+"</center>").clone().find(".remove_tag").remove().end().html();
				window.open('data:application/vnd.ms-excel,' + encodeURIComponent(export_data));
		    e.preventDefault();
		    $('.table').attr('border',0);
			});
	})
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
				var donateid=jQuery(event.target).attr("rel");
				var studentid=jQuery(event.target).attr('std');
				location.href="<?PHP echo site_url('student/donation/preview');?>/"+donateid+'/'+studentid;
		}
	function edit(event){
			var donateid=jQuery(event.target).attr("rel");
			location.href="<?PHP echo site_url('student/donation/edit');?>/"+donateid+"?<?php echo "m=$m&p=$p" ?>";
	}
	function deletes(event){
			var donateid=jQuery(event.target).attr("rel");
			var con=confirm("Are you sure want to delete ...!");
			if(con==true)
				location.href="<?PHP echo site_url('student/donation/deletes');?>/"+donateid+"?<?php echo "m=$m&p=$p" ?>";
	}
	
	function search(event){
		var roleid=<?php echo $this->session->userdata('roleid');?>;
		var m=<?php echo $m;?>;
		var p=<?php echo $p;?>;
		var sort_num=$('#sort_num').val();
		var gifid=$("#s_gifid").val();
		var classid=$("#s_class").val();
		var yearid=$("#year").val();
		var schlevelid=$("#s_schlevelid").val();
		var s_date=$(".s_date").val();
		var e_date=$(".end_date").val();
		$.ajax({
				url:"<?php echo base_url(); ?>index.php/student/gift_report/searchstd",    
				data: {'gifid':gifid,
						'schlevelid':schlevelid,
						's_date':s_date,
						'e_date':e_date,
						'yearid':yearid,
						'sort_num':sort_num,
						'classid':classid,
						'roleid':roleid,
						'm':m,
						'p':p
					},
				type: "POST",
				success: function(data){
                   $('.listbody').html(data);
			}
		});
	}

		
</script>
