<?php $this->load->model('employee/modarmy','m_army');?>
<style type="text/css">
	@media print{
		  	
		@font-face{
		font-family:'KhmerOSMoul';
		src:url(<?php echo site_url('../assets/fonts/KhmerOSMoul.ttf');?>);

		}
		@font-face{
			font-family:'PreyChas';
			src:url(<?php echo site_url('../assets/fonts/KhWattPreyChas.ttf');?>);
		}
		html,body {
	        height: auto !important;  
	        page-break-after: avoid !important;  
			width: 100% !important; 

	    }
		.action_btn{
			display: none !important;
		}
		.container{
			width: 100% !important;
			left: 0 !important;
		}
		.printDiv{
			width: 100% !important; 
			/*max-height: 100% !important;*/
			height: 100% !important;
			padding:0 !important;
			margin: 0 !important;
			border:none !important;
			margin: 0px !important;
		}
		.aphoto{
			width: 20% !important;
			float: left !important;
		}
		.alogo{
			width: 80% !important;
			float: left !important;
		}

		.header-holder{
			width: 100% !important;
			margin-top: 0px !important;
		}
		.anumber{
			width: 100% !important;	
			/*margin-top: 15px !important;*/
			/*float: left !important;*/
		}
		.nl{

			width: 25% !important;
			float: left !important;	
			text-align: right !important;
		}
		.ncl{
			width: 30% !important;
			float: left !important;
			text-align: left !important;
			column-span: 2;

		}
		.nlid{
			width: 25% !important;
			float:left !important;
			text-align: left !important;

		}
		.nclid{
			width: 20% !important;
			float: left !important;	
			text-align: left !important;

		}
		.bcode{
			width: 50% !important;
			float: left !important;
		}
		.signature{
			width: 50% !important;
			float: left !important;
		}
		th{
			font-weight: bold !important;
		}
		.foot-holder{
			width: 100% !important;
		}
		.top_row{
			width: 100% !important;
		}
		#page-wrapper{
			margin:0px !important;
			border:none !important;
			height: auto !important;
	        page-break-after: avoid !important;  
			
		}
		

	}
	@font-face{
		font-family:'KhmerOSMoul';
		src:url(<?php echo site_url('../assets/fonts/KhmerOSMoul.ttf');?>);

	}
	@font-face{
		font-family:'PreyChas';
		src:url(<?php echo site_url('../assets/fonts/KhWattPreyChas.ttf');?>);
	}
	#top_row{
		padding-right: 20px; 
		margin-bottom: 0px;
		font-family: 'Khmer OS';
	}
	.for-label{
		margin-top: 7px;
		padding: 0;
		font-size: 12px;
		font-family: 'Khmer OS';
	}
	.table_head{
		margin-top: 7px;
		font-size: 15px;
		font-family: 'Khmer OS Bokor';
	}
	.show{
		font-family: 'Khmer OS';
		font-size: 13px;
		margin-top: 5px;
		padding-left: 0px;
	}
	.row{
		margin-bottom: 10px;
	}
	.title{
		font-family: 'KhmerOSMoul';
		text-shadow: -2px -2px #7F7F7F;
		}
	.ft{
		font-family: 'KhmerOSMoul';
	}
	.sub-title{
		font-family: 'KhmerOSMoul';
	}
	.body_table{
		font-family: 'Khmer OS';
		font-size: 12px;
	}
	.printDiv{
		width: 21cm; 
		height: auto;
		padding:20px 10px 50px 10px;
		border:1px solid gray;
		margin-bottom: 20px;
	}
	.my_table > tbody{
		line-height: 2.5;
	}
</style>
<div class="row action_btn" style="background-color: transparent; margin-right: 0px; padding: 20px 20px 0 0;" align="right">
	<span class="top_action_button">
	<a id="army_print" class="btn" onClick="PrintElem('#export_print')"><img height="40px;" width="40px;" src="<?php echo base_url('assets/images/icons/print.png')?>" /></a>
	</span>
	<!-- <span class="top_action_button">	
		<a href="#" id="amry_export"  title="Export">
			<img height="40px;" width="40px;" src="<?php echo base_url('assets/images/icons/exp_pdf.jpg')?>" />
		</a>
	</span> -->
</div>
<div class="container printDiv" id="export_print">
	<div id="top_row" class="row top_row" align="right">
		<p class="for-label">ទម្រង់៖ ក.ព.ជ.០១</p>
	</div>

	<div class="row header-holder">
		<div class="col-sm-2 aphoto">
			<?php 
				$src = "assets/upload/thumb/".$id.".jpg";
		      	if(!file_exists(FCPATH.$src)){
		      		$src = site_url('../assets/upload/No_person.jpg');
		      	}else{
		      		$src = base_url().$src;
		      	}
			?>
			<img style="margin-top: 115px; height:160px; width:130px;"
			src="<?php echo $src;?>">
		</div>
		<br>
		<div class="col-sm-10 text-center alogo" style="margin-left:-70px; margin-top:-60px;">
			<img height="200px;" src="<?php echo site_url('../assets/upload/mod_logo.png');?>">
	     	<h1 class="modal-title title"><i>បណ្ណ័ជីវប្រវត្តិសង្ខេប</i></h1>
			<h4 class="modal-title sub-title"><i>នាយទាហាន នាយទាហានរង និងពលទាហាន</i></h4><br>
			<div class="row anumber">
				<div align="right" class="col-sm-3 nl" style="padding-right: 0;"><p class="for-label">អត្តលេខ</p></div>
				<div align="left" class="col-sm-3 nlid"><p class="show"><?php echo $army->id_num; ?></p></div>
				<div align="right" class="col-sm-3 ncl"><p class="for-label">អត្តសញ្ញាណបណ្ណ័</p></div>
				<div align="left" class="col-sm-2 nclid" style="padding-left: 0;"><p class="show"><?php echo $army->ssid; ?></p></div>
			</div>
	    </div>
	</div>
    <table class="my_table">
	    <tbody>
		    <tr style="width: auto;">
		        <th colspan="2" class="for-label">នាមត្រកូល នាមខ្លួន</th>
		        <td colspan="2" class="for-label sub-title"><?php echo $army->full_name; ?></td>
		        <th class="for-label">ឈ្មោះឡាតាំង</th>
		        <th></th>
		        <td colspan="3" class="for-label" style="text-transform: uppercase;"><?php echo $army->full_name_latin; ?></td>
		    </tr>
		     <tr>
		        <th class="for-label">ឈ្មោះកំណើត</th>
		        <td colspan="2" class="for-label"><?php echo $army->name_from_birth; ?></td>
		        <th class="for-label">ឈ្មោះហៅក្រៅ</th>
		        <td colspan="3" class="for-label"><?php echo $army->name_from_birth; ?></td>
		        
		    </tr>
		    
		    <tr>
		        <th class="for-label">ស្រុកកំណើត</th>
		        <td class="for-label">ភូមិ<?php echo $army->pob_v; ?></td>
		        <td class="for-label">ឃុំ<?php echo $army->pob_c; ?></td>
		        <td class="for-label">ស្រុក<?php echo $army->pob_d; ?></td>
		        <td class="for-label" colspan="2">ខេត្ត<?php echo $army->pob_p; ?></td>
		    </tr>
		    <tr>
		        <th class="for-label">អាស័យដ្ឋាន</th>
		        <td class="for-label">ភូមិ<?php echo $army->adr_v; ?></td>
		        <td class="for-label">ឃុំ<?php echo $army->adr_c; ?></td>
		        <td class="for-label">ស្រុក<?php echo $army->adr_d; ?></td>
		        <td class="for-label" colspan="2">ខេត្ត<?php echo $army->adr_p; ?></td>
		    </tr>
		    <tr>
		        <th class="for-label">កងឯកភាព</th>
		        <td colspan="3" class="for-label"><?php echo $army->unit_short; ?></td>
		    </tr>
		    <tr>
		        <th class="for-label">នាយកដ្ឋាន</th>
		        <td colspan="3" class="for-label"><?php echo $army->unit_short; ?></td>
		    </tr>
		    <tr>
		        <th class="for-label">ឋានន្តរសក្ដិ</th>
		        <td class="for-label"><?php echo $army->range; ?></td>
		        <th class="for-label">ថ្ងៃឡើងសក្ដិ៖ </th>
		        <td class="for-label"><?php echo $army->range_date; ?></td>
		        
		    </tr>
		    <tr>
		        <th class="for-label">មុខតំណែង</th>
		        <td class="for-label"><?php echo $army->position; ?></td>
		        <th class="for-label">ថ្ងៃទទួលមុខតំណែង៖ </th>
		        <td class="for-label"><?php echo $army->position_date; ?></td>
		        
		    </tr>
		    <tr>
		        <th class="for-label">ថ្ងៃចូលកងទ័ព</th>
		        <td class="for-label"><?php echo $army->army_date; ?></td>
		        <th class="for-label">កំពស់៖</th>
		        <td class="for-label"><?php echo $army->height; ?></td>
		        <th class="for-label" style="width: 5%">ប្រភេទឈាម៖ </th>
		        <td class="for-label" style="width: 5%"><?php echo $army->blood_type; ?></td>
		        <th class="for-label">សុខភាព </th>
		        <td class="for-label"><?php echo $army->health_desc; ?></td>
		    </tr>
		    <tr>
		        <th class="for-label">កម្រិតវប្បធម៍</th>
		        <td class="for-label"><?php echo $army->edu_degree; ?></td>
		        <th class="for-label">ភាសា</th>
		        <td class="for-label"><?php echo $army->foreign_lang; ?></td>
		        <th colspan="3" class="for-label">ឆ្លងវគ្គសិក្សា (រយៈពេល)</th>
		        <td class="for-label"><?php echo $army->course_duration; ?></td>
		    </tr>
		    <tr>
		        <th class="for-label">ក្នុងប្រទេស</th>
		        <td class="for-label" colspan="6"><?php echo $army->course_local; ?></td>
		    </tr>
		    <tr>
		        <th class="for-label">ក្រៅប្រទេស</th>
		        <td class="for-label" colspan="6"><?php echo $army->course_abroad; ?></td>
		    </tr>
		    <tr>
		        <th class="for-label">ឈ្មោះឪពុក</th>
		        <td class="for-label"><?php echo $this->m_army->get_parent_name('father', $id)->parents_name;?></td>
		        <th class="for-label">ឈ្មោះម្ដាយ</th>
		        <td class="for-label"><?php echo $this->m_army->get_parent_name('mother', $id)->parents_name; ?></td>
		    </tr>
		    <tr>
		        <th class="for-label">ស្ថានភាពគ្រួសារ</th>
		        <td class="for-label"​​​​ colspan="6"><?php echo $army->status; ?></td>
		    </tr>
		    <tr>
		        <th colspan="2" class="for-label">ភិនភាគស្លាកស្នាម</th>
		        <td class="for-label" colspan="6"><?php echo $army->note; ?></td>
		    </tr>
		    <tr>
		        <th colspan="2" class="for-label">បេសកកម្មក្រៅប្រទេស</th>
		        <td class="for-label" colspan="6">បេសកកម្មក្រៅប្រទេស</td>
		    </tr>
		    <tr>
		        <th class="for-label">លេខទូរសព្ទ</th>
		        <td class="for-label" colspan="6"><?php echo $army->phone; ?></td>
		    </tr>
	    </tbody>
	</table>
	<div class="row foot-holder" style="margin-top: 20px;">
    	<div class="col-sm-6 bcode">
    	<img height="50px;" width="250px;" src="<?php echo site_url('../assets/upload/barcode.png');?>"> <br><br>
    		<p>(១) បោះពុម្ភលើកទី១ នៅថ្ងៃទី <?=date('d')?> ខែ<?=date('m')?> ឆ្នាំ <?=date('Y')?> <br>
    		វេលាម៉ោង <?=date('H:i')?> នាទី</p>
    	</div>
    	<div class="col-sm-6 signature" align="center">
    		<h5 class="table_head">ប្រធានគ្រប់គ្រង</h5>
    		<p style="font-family: 'Khmer OS';">ជំនាញធនធានមនុស្ស និង បណ្ដុះបណ្ដាល</p>
    	</div>
    </div>
</div>



<script type="text/javascript">
//----------------Print Data--------
	// $("#army_print").on("click",function(){
	// 	var no_data = $(".no_data").attr('rel');
	// 	var data = $("#export_print").html();
	// 	//alert(no_data);return false;
	// 	if(no_data == 1){
	// 		$("#check_export_print").modal('show');
	// 	}else{
	// 		$("#message_body").text("We didn't find anything to Print.");
	// 		$("#myModal_export_print").modal('show');
	// 	}
	// });
	//----------------Export Data--------
	// $("#amry_export").on("click", function(){
	// 	var no_data = $(".no_data").attr('rel');
	// 	var data = $("#div_export_print").html().replace(/<img[^>]*>/gi,"");
	// 	var export_data = $("<center>"+data+"</center>").clone().find(".remove_tag").remove().end().html();
	// 	if(no_data == 1){
	// 		$('#excel-data').text(export_data);
	// 		$('#excel-form').submit();
	// 	}else{
	// 		$("#message_body").text("We didn't find anything to Export.");
	// 		$("#myModal_export_print").modal('show');
	// 	}
		
	// });

	$('#army_print').click(function(){
		window.print();
	});
</script>