
<style type="text/css">
	table tbody tr td img{width: 20px; margin-right: 10px}
	a,.sort{cursor: pointer;}

	.cur_sort_up{
		background-image: url('<?php echo base_url('assets/images/icons/sort-up.png')?>');
		background-position: left;
		background-repeat: no-repeat;
		padding-left: 15px !important;
	}
	#top-bar img{width: 20px; margin-top: 5px;}

	.cur_sort_down{
		background-image: url('<?php echo base_url('assets/images/icons/sort-down.png')?>');
		background-position: left;
		background-repeat: no-repeat;
		padding-left: 15px !important;
	}
	.ui-autocomplete{
		z-index: 9999;
	}
	.modal{
		z-index: 9998;
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
	      <div class="col-xs-12">
		      	<div class="col-xs-6">
		      	</div>
		      	  
		  </div>
	      <div class="row">
	      		<div class="col-sm-12">
	      			<div class="widget-box table-responsive">
						<div class="row result_info">
		      	<div class="col-xs-6">
		      		<strong id='title'>Student Reconduction</strong>
		      	</div>
		      	<div class="col-xs-6" style="text-align: right">
		      		<span class="top_action_button">
		      			<?php if($this->green->gAction("I")){ ?>
				    		<a href="<?php echo site_url('student/student/import')?>" >
				    			<img src="<?php echo base_url('assets/images/icons/import.png')?>" />
				    		</a>
				    	<?php } ?>
			    	</span>
			    	<span class="top_action_button">	
			    		<?php if($this->green->gAction("E")){ ?>
				    		<a href="javascript:void(0);" id="exports" title="Export">
				    			<img id='export' src="<?php echo base_url('assets/images/icons/export.png')?>" />
				    		</a>
				    	<?php } ?>
			    	</span>
		      		<span class="top_action_button">
		      			<?php if($this->green->gAction("P")){ ?>
							<a href="javascript:void(0);" id="print" title="Print">
				    			<img src="<?php echo base_url('assets/images/icons/print.png')?>" />
				    		</a>
				    	<?php } ?>
		      		</span>	
		      		<span class="top_action_button">
		      			<?php if($this->green->gAction("P")){ $yearid=$this->session->userdata('year'); if(isset($_GET['y'])) $yearid=$_GET['y']?>
							<a href="<?php echo site_url("student/student/previewmulti/?yearid=$yearid")?>" id="print_multi" title="print_multi" target="_blank">
				    			<img src="<?php echo base_url('assets/images/icons/preview.png')?>" />
				    		</a>
				    	<?php } ?>
		      		</span>		    	
			    	<span class="top_action_button">
			    		<?php if($this->green->gAction("C")){ ?>
				    		<a href="javascript:void(0)" >
				    			<img id="add" src="<?php echo base_url('assets/images/icons/add.png')?>" />
				    		</a>
				    	<?php } ?>
			    	</span>	      		
		      	</div> 			      
		  </div>
						<div class="widget-content nopadding" id='tap_print'>

							<table class="table table-bordered table-striped table-hover">
								<thead>
									<tr>
									<?php 
										foreach($thead as $th=>$val){
					           				if($th=='Action')
					           					echo "<th class='remove_tag'>".$th."</th>";
					           				else
					           					echo "<th class='sort $val no_wrap' onclick='sort(event);' rel='$val'>".$th."</th>";								
					           			}
									?>
									</tr>
									<tr class='remove_tag'>
										<th></th>
										<th></th>
										<th>
											<input type="text" id="student_num" class="form-control" />
										</th>
										<th>
											<input type="text" id="student_name" class="form-control" />
											
										</th>
										<th>
											<select class="form-control" id="class_id">
												<option value="">Select Class</option>
											</select>
										</th>
										<th></th>
										<th></th>
										
									</tr>
								</thead>
								<tbody class='list'>

								</tbody>
							</table>  

						</div>
					</div>
					<div class="fg-toolbar ui-toolbar ui-widget-header ui-corner-bl ui-corner-br ui-helper-clearfix">
							<div class='col-sm-3'>
								<label>Show 
									
									<select id='perpage' onchange='getdata(1);' name="DataTables_Table_0_length" size="1" aria-controls="DataTables_Table_0" tabindex="-1" class="form-control select2-offscreen">
										<?PHP
										for ($i=10; $i < 500; $i+=10) { 
											echo "<option value='$i'>$i</option>";
										}
										 ?>
									</select> 
								</label>
							</div>
							<div class='dataTables_paginate'>

							</div>
					</div>
	      		</div>	      	
	        </div> 
	    </div>
   </div>
</div>

<div class="modal fade bs-example-modal-lg" id="addmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="wrapper">
				<div class="clearfix" id="main_content_outer">
				    <div id="main_content">
					    <div class="result_info">
					    	<div class="col-sm-6">
					      		<strong>Add New Reconduct</strong>
					      	</div>
					      	<div class="col-sm-6" style="text-align: center">
					      		<strong>
					      			<center class='visit_error' style='color:red;'></center>
					      		</strong>	
					      	</div>
					    </div>
					      <form enctype="multipart/form-data" id="frmreconduction" action="<?php echo site_url('student/reconduct/save?m='.$m.'&p='.$p) ?>" method="POST">
						        <div class="row">
									<div class="col-sm-12">
							            	<div class="panel-body">
							            		<div class="col-sm-12">
							            			<label>Student</label>
							            			<input type="text" id="student" name="student" class="form-control" />
							            			<input type="hidden" id="studentid" name="student_id" class="form-control" />
							            			<input type="hidden" id="recon_id" name="recon_id" class="form-control" />
							            		</div>
							            		<div class="col-sm-12">
							            			<label>Description</label>
							            			<textarea id="desc" name="desc" class="form-control"></textarea> 
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
                <button type="button" id='btnsave' class="btn btn-primary">Save</button>
            </div>
        </div>                       <!-- /.modal-content -->
    </div>
                                <!-- /.modal-dialog -->
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
		$("#btnsave").click(function(){
			$('#frmreconduction').submit();
		})
		$('#add').click(function(){
			$("#addmodal").modal('show');
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
			getdata(1);	
			autostudent();
			$(document).on('click', '.pagenav', function(){
			    var page = $(this).attr("id");
				getdata(page);			
			});	
			$("#btnprint").on("click",function(){
					var htmlToPrint = '' +
					        '<style type="text/css">' +
					        'table th, table td {' +
					        'border:1px solid #000 !important;' +
					        'padding;0.5em;' +
					        '}' +
					        '</style>';				
					var title="Store List";	
				   	var data = $("#tap_print").html().replace(/<img[^>]*>/gi,"");
				   	var export_data = $("<center>"+data+"</center>").clone().find(".remove_tag").remove().end().html();
				   		export_data+=htmlToPrint;
				   	gsPrint(title,export_data);
			});
			$("#btnexport").on("click",function(e){
				var title="Store List";			
				var data=$('.table').attr('border',1);
					data = $("#tap_print").html().replace(/<img[^>]*>/gi,"");
	   			var export_data = $("<center><h3 align='center'>"+title+"</h3>"+data+"</center>").clone().find(".remove_tag").remove().end().html();
				window.open('data:application/vnd.ms-excel,' + encodeURIComponent(export_data));
    			e.preventDefault();
    			$('.table').attr('border',0);
			});
		})
		function getdata(page){
          	var url="<?php echo site_url('student/reconduct/getdata')?>";
          	var m="<?PHP echo $m?>";
          	var p="<?PHP echo $p?>";
          	var s_name=$('#s_store_name').val();
          	
          	var perpage=$('#perpage').val();
			$.ajax({
		            url:url,
		            type:"POST",
		            datatype:"Json",
		            async:false,
		            data:{'m':m,
		            		'p':p,
		            		'page':page,
		            		's_name':s_name,
		            		
		            		'perpage':perpage
		            	},
		            success:function(data) {
		              $(".list").html(data.data);
		              $('.dataTables_paginate').html(data.pagina.pagination);
		            }
		          })
		}
		
		function update(event){
			var url="<?php echo site_url('student/reconduct/getedit')?>";
          	var conduct_id=$(event.target).attr('rel');
          	
          	var perpage=$('#perpage').val();
			$.ajax({
		            url:url,
		            type:"POST",
		            datatype:"Json",
		            async:false,
		            data:{'conduct_id':conduct_id},
		            success:function(data) {
		            	$('#studentid').val(data.studentid);
		            	$('#recon_id').val(data.conduct_id);
		            	$('#student').val(data.first_name+' '+data.last_name);
		            	$('#desc').val(data.desc);
		             	$("#addmodal").modal('show');
		            }
		    })
			   
			
		}
		function previewstore(event){
			    var storeid=jQuery(event.target).attr("rel");
				window.open("<?PHP echo site_url('store/store/preview');?>/"+storeid+"?<?php echo "m=$m&p=$p" ?>",'_blank');
			
		}
		function autostudent(){	
			var classid=$('#classid').val();	
			var fillrespon="<?php echo site_url("student/reconduct/fillstudent")?>";
	    	$("#student").autocomplete({
				source: fillrespon,
				minLength:0,
				select: function( events, ui ) {	
					$('#studentid').val(ui.item.id);
					
				}						
			});
		}
		function deletestore(event){
			var conf=confirm("Are you Sure to delete this article");
			if(conf==true){
				var storeid=jQuery(event.target).attr("rel");
				var url="<?php echo site_url('article/delete')?>/"+storeid;
				$.ajax({
		            url:url,
		            type:"POST",
		            datatype:"Json",
		            async:false,
		            data:{'storeid':storeid},
		            success:function(data) {
		             	getdata(1);
		            }
		          })
			}
		}
		
		
		
	</script>