
<style type="text/css">
	table tbody tr td img{width: 20px; margin-right: 10px}
	.table th td {border:1px solid gray;}

	table tr:hover{cursor: pointer;}
	a,.sort{cursor: pointer;}
	a,.sort,.panel-heading span{cursor: pointer;}
	.panel-heading span{margin-left: 10px;}
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
	.middle{
		vertical-align: middle !important;
	}
</style>
<div class="col-sm-12">
	<div class="form_sep">
		<!-- <label><input type="radio" value="1" name="rdcheckin" checked> Check-in</label>
		<label><input type="radio" value="0" name="rdcheckin"> Check-Out</label> -->
		<div class="alert alert-success succ hide">
		  	<strong>Success!</strong> Successfull .
		</div>
	<div class="alert alert-danger error hide">
	  	<strong>Error!</strong> <span id="err_lable">Your card is not found or expired</span>
	</div>
	</div>
</div>
<div class="col-sm-3">
	<div id="jquery_jplayer_2" class="jp-jplayer"></div>
	<div id="jp_container_2" class="jp-audio" role="application" aria-label="media player">
		<div class="jp-type-playlist">
			<div class="jp-gui jp-interface">
				<div class="jp-controls">
					<button class="jp-previous" role="button" tabindex="0">previous</button>
					<button class="jp-play" role="button" tabindex="0">play</button>
					<button class="jp-next" role="button" tabindex="0">next</button>
					<button class="jp-stop" role="button" tabindex="0">stop</button>
				</div>
				<div class="jp-progress">
					<div class="jp-seek-bar">
						<div class="jp-play-bar"></div>
					</div>
				</div>
				<div class="jp-volume-controls">
					<button class="jp-mute" role="button" tabindex="0">mute</button>
					<button class="jp-volume-max" role="button" tabindex="0">max volume</button>
					<div class="jp-volume-bar">
						<div class="jp-volume-bar-value"></div>
					</div>
				</div>
				<div class="jp-time-holder">
					<div class="jp-current-time" role="timer" aria-label="time">&nbsp;</div>
					<div class="jp-duration" role="timer" aria-label="duration">&nbsp;</div>
				</div>
				<div class="jp-toggles">
					<button class="jp-repeat" role="button" tabindex="0">repeat</button>
					<button class="jp-shuffle" role="button" tabindex="0">shuffle</button>
				</div>
			</div>
			<div class="jp-playlist">
				<ul>
					<li>&nbsp;</li>
				</ul>
			</div>
			<div class="jp-no-solution">
				<span>Update Required</span>
				To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>.
			</div>
		</div>
	</div>
</div>
<div class="col-sm-9">
	<div class="clearfix" id="main_content_outer">
	    <div id="main_content">
	        <div class="row result_info">
		      	<div class="col-xs-6">
			      	<strong class="emp_title"><?php echo $title = "Student Pickup";?></strong>
			    </div>
			    <div class="col-xs-6">
			      	<strong class="emp_title"><a class="pull-right btn btn-warning" href="<?php echo site_url('login'); ?>">LOGIN</a></strong>
			    </div>
		    
	        </div>

	       <div class="row">
	       		<div class="col-sm-12">
	       			<div class="panel panel-default">
		       			<div class="panel-body">
		       				<!-- <form id="contract_register" method="POST" enctype="multipart/form-data"> -->
					     		
	     						<div class="row">
	     							<div class="col-xs-6">
	     								<div class="form_sep">
			     							<label><input type="radio" value="1" name="rdcheckin" onclick="player.remove(); $('#jquery_jplayer_2').jPlayer('destroy'); loadplayer(); getdata(1);" checked> Input Student</label>
			     							<label><input type="radio" value="0" onclick="player.remove(); $('#jquery_jplayer_2').jPlayer('destroy'); loadplayer(); getdata(1);" name="rdcheckin"> Student out</label>
			     							
			     						</div>
			     				
			     						<div class="col-xs-10" style="padding:0px !important;">
			     							<div class="form_sep">
				     							<!-- <label>Contract ID</label> -->
				     							<input type="text" name="emp_id" onkeypress="enter(event);" placeholder='Enter Student ID' value="" id="emp_id" class="form-control" data-required="true" required data-parsley-required-message="Enter Contract ID">
				     							<!-- <button class="btn btn-success">Submit</button> -->
				     						</div>
			     						</div>
			     						<div class="col-xs-2">
	     									<input type="button" class="btn btn-primary" onclick="submitatt(event);" value="Sumit">
			     						</div>
	     								
			     					</div>
			     				</div>
			     				
					     	<!-- </form> -->
		       				<div class="table-responsive" id="div_export_print">
		       					<table class="table" border="0" cellspacing="0" cellpadding="0">
		       						<thead>
		       							<tr>
		       								<!-- <th class="pos_1 sort">N&deg;</th> -->
		       								<th class="pos_2 sort" rel="empcode">Image</th>
		       								<th class="pos_2 sort" rel="empcode">StudentID</th>
		       								<th class="pos_3 sort"  rel="first_name">Full Name</th> 
		       								<th class="pos_3 sort"  rel="first_name">Remove</th><!--
		       								<th class="pos_4 sort"  rel="first_name_kh">Position</th>
		       								<th class="pos_5 sort" rel="dob">Check-in</th>
		       								<th class="pos_6 sort"  rel="pos_id">Check-out</th> -->
		       								<!-- <th colspan="3" class="remove_tag">Action</th> -->
		       							</tr>
		       						</thead>
		       						<tbody class="listbody">
		       							
		       						</tbody>
		       					</table>
		       				</div>
		       			</div>
		       			
	       			</div>
	       		</div>
	        </div>

	       	<form id="excel-form" action="<?php echo base_url('app/libraries/Z_EXPORT_TO_EXCEL.PHP')?>" method="POST">
	             <input type="hidden" name="num_colspan" value="6" id="num_colspan"/>
	             <input type="hidden" name="exporttile" value="<?php echo $title ?>"/>
	             <input type="hidden" name="pagesecurity" value="PgSecurity"/>
	             <textarea id="excel-data" name="data" style="display:none;"></textarea>
	        </form>

	       <!-------------End Show Table------------>
	    </div>
	</div>
</div>

<p style="clear:both"></p>


<script type="text/JavaScript">
	loadplayer();
	var player='';
	function loadplayer(){
		$.ajax({
			type: "POST",
			url:"<?php echo base_url(); ?>index.php/student/come_accept/getaudio",    
			data: {},
			success: function(data){
	         	player = new jPlayerPlaylist({
					jPlayer: "#jquery_jplayer_2",
					cssSelectorAncestor: "#jp_container_2"
				},data, {
					swfPath: "../../dist/jplayer",
					supplied: "oga, mp3",
					wmode: "window",
					useStateClassSkin: true,
					autoBlur: false,
					smoothPlayBar: true,
					keyEnabled: true,  
					playlistOptions: {
					    autoPlay: true,
					    enableRemoveControls: true
					   
					}
					// ended: function() {
					// 	var current         = player.current,
     //    				length        = player.playlist.length;
     //    				if(current==length){
     //    					player.remove();
					// 		$("#jquery_jplayer_2").jPlayer("destroy");
     //                    	loadplayer();
     //    				}else{
     //    					alert(current+'-'+length);
     //    				}

						
     //            	}
					
				});
				// $(".jp-play").click();
			}
		});
	}
	$("#jquery_jplayer_2").bind($.jPlayer.event.ended, function(event) {
                   var current         = player.current,
        				length        = Number(player.playlist.length)-1;
        			if(current==length){
        					player.remove();
							$("#jquery_jplayer_2").jPlayer("destroy");
                        	loadplayer();
        			}
     });
	function enter(event){
		// alert(event.keyCode);
		if (event.keyCode==13){submitatt();}
	}
	getdata();
	// $(document).ready(function() {
	//     var pressed = false; 
	//     var chars = []; 
	//     $(window).keypress(function(e) {
	//         chars.push(String.fromCharCode(e.which));
	//         if (pressed == false) {
	//             setTimeout(function(){
	//                 if (chars.length >= 8) {
	//                     var barcode = chars.join("");
	//                     submitatt();//alert('ok');//$( "#add_item" ).focus().autocomplete( "search", barcode );
	//                 }
	//                 chars = [];
	//                 pressed = false;
	//             },200);
	//         }
	//         pressed = true;
	//     });
	// });
	 setInterval(function(){ getdata(); }, 8000);
	function getdata(){
			var chk=$("input[type='radio'][name='rdcheckin']:checked").val();
			$.ajax({
				type: "POST",
				url:"<?php echo base_url(); ?>index.php/student/come_accept/getdata",    
				data: {'chk':chk},
				success: function(data){
		           $('.listbody').html(data.data);
		           $('#emp_id').val('');
		           $('#emp_id').focus();
		           if(data.playlist.length>0){
		           		for (var i = 0; i < data.playlist.length; i++) {
		           			player.add(data.playlist[i]);
		           			player.add(data.playlist[i]);
		           		}
		           		$("#jquery_jplayer_2").jPlayer("play");
		           		// player.add(data.playlist);
		           }
				}
			});
		
	}

	function submitatt(event){
		$('body').loading({theme: 'dark'});
		var val=$("#emp_id").val();
		var chk=$("input[type='radio'][name='rdcheckin']:checked").val();
		// alert(chk);
		$.ajax({
				type: "POST",
				url:"<?php echo base_url(); ?>index.php/student/come_accept/submitdata",    
				data: {
					'val':val,
					'chk':chk
				},
				success: function(data){
		            if(data!=0){
			           	if(chk==1){
			           		for (var i = 0; i < data.length; i++) {
			           			player.add(data[i]);
			           			player.add(data[i]);
			           		}
			           		
			           		$("#jquery_jplayer_2").jPlayer("play");
			           	}
		           		getdata();
		           		$('.succ').removeClass('hide'); 
		           		 $('.error').addClass('hide');
		            }else{
		           		// alert('Student Not Found ! ');
		           		 $('.succ').addClass('hide'); 
		           		 $('.error').removeClass('hide');

		            }
		            setTimeout(function(){ $('body').loading('stop'); }, 1000);
		           	setInterval(function(){ $('.succ').addClass('hide'); $('.error').addClass('hide'); }, 5000);
				}
			});
	}
	function removestd(student_acceptid){
			$.ajax({
				type: "POST",
				url:"<?php echo base_url(); ?>index.php/student/come_accept/removestd",    
				data: {'student_acceptid':student_acceptid},
				success: function(data){
					getdata();
				}
			});
	}
	

</script>