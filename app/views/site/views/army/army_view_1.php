<?php $this->load->model('employee/modarmy','m_army');?>
<style type="text/css">
	/*body {
	    background-image: url("<?php echo base_url('assets/images/logo/logo_02_edited.png')?>");
	    background-repeat: no-repeat;
	}*/
	#bg_div{
	    position: absolute;
	    width: 35%;
	    left: 37.9%;
	    top: 36%;
	    z-index: -10;
	    opacity: 0.2;
    }
    @media screen and (max-width: 1600px){
    	#bg_div{
	        position: absolute;
		    width: 45%;
		    left: 33.9%;
		    top: 60%;
		    z-index: -10;
		    opacity: 0.2;
	    }
	}
    }
    .kh-os{
    	font-family: 'Khmer OS';
    }
    .bold{
    	font-weight: 1000 !important;
    }
	@media print{
		.bold{
	    	font-weight: 1000 !important;
	    }
		td{
	    	font-family: "Khmer OS";
	    }
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
	    #bg_div{
    	    position: absolute;
		    width: 90%;
		    left: 5%;
		    top: 24%;
		    z-index: -10;
		    opacity: 0.2;
	    }
	    /*#bg_div{
	        position: absolute;
		    width: 45%;
		    left: 33.9%;
		    top: 60%;
		    z-index: -10;
		    opacity: 0.2;
		    background: red;
	    }*/
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
			padding-top:10px !important;
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
		font-family: 'Khmer OS Bokor';
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
		padding:10px 10px 50px 35px;
		border:1px solid gray;
		margin-bottom: 20px;
	}
	.my_table > tbody{
		line-height: 2.5;
	}
</style>

<?php 
	$qr_name = $army->full_name_latin;
	$qr_id = $army->army_id;
	$qrcode_text = "ID: ".$qr_id."<br>Name: ".$qr_name;
 ?>
<div class="row action_btn" style="background-color: transparent; margin-right: 0px; padding: 20px 20px 0 0;" align="right">
	<span class="top_action_button">
	<a id="army_print" class="btn" onClick="PrintElem('#export_print')"><img height="40px;" width="40px;" src="<?php echo base_url('assets/images/icons/print.png')?>" /></a>
	</span>
</div>
<div class="container printDiv" id="export_print">
	<div id="bg_div">
    	<img width="100%" src="<?php echo base_url('assets/images/logo/logo_02_edited.png')?>">
    </div>
	<div id="top_row" class="row top_row" align="right">
		<p class="for-label">ទម្រង់: ក.ព.ជ.០១</p>
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
			<img style="margin-top: 70px; height:140px; width:120px;"
			src="<?php echo $src;?>">
		</div>
		<br>
		<div class="col-sm-10 text-center alogo" style="margin-left:-70px; margin-top:-70px;">
			<img style="margin-top: 10px;" height="150px;" src="<?php echo site_url('../assets/upload/mod_logo.png');?>">
	     	<h2 class="modal-title title"><i>បណ្ណ័ជីវប្រវត្តិសង្ខេប</i></h2>
			<h4 class="modal-title sub-title"><i>នាយទាហាន នាយទាហានរង និងពលទាហាន</i></h4><br>
			<div style="width: 120%">
				<div style="display:inline-block;margin-right: 5px; width: 20%;">
					<p class="for-label"><label class="bold">អត្តលេខ : </label> <?php echo $army->id_num; ?></p>
				</div>
				<div style="display:inline-block;margin-right: 5px; width: 30%">
					<p class="for-label"><strong>អត្តសញ្ញាណបណ្ណ័ : </strong> <?php echo $army->ssid; ?></p>
				</div>
				<div style="display:inline-block;margin-right: 5px; width: 20%">
					<p class="for-label"><strong>ប្រភេទឈាម : </strong> <?php echo $army->blood_type; ?></p>
				</div>
			</div>
			<!-- <div class="row anumber">
				<div align="right" class="col-sm-3 nl" style="padding: 0;">
					<p class="for-label">អត្តលេខ</p>
				</div>
				<div align="left" class="col-sm-2 nlid"><p class="show"><?php echo $army->id_num; ?></p>
				</div>
				<div style="padding: 0;margin-right: 5px;" align="right" class="col-sm-2 ncl">
					<p class="for-label">អត្តសញ្ញាណបណ្ណ័</p>
				</div>
				<div align="left" class="col-sm-2 nclid" style="padding: 0;"><p class="show"><?php echo $army->ssid; ?></p>
				</div>
				<div style="padding: 0;margin-right: 5px;" align="right" class="col-sm-2 ncl"><p class="for-label"><strong>ប្រភេទឈាម</strong> <?php echo $army->blood_type; ?></p>
				</div>
			</div> -->
	    </div>
	</div>
    <table class="my_table">
	    <tbody>
	    	<tr>
	    		<th colspan="2" class="for-label bold">នាមត្រកូល នាមខ្លួន : </th>
		        <td class="sub-title"><?php echo $army->full_name; ?></td>
	    		<th class="for-label" style="text-align: right;">ឈ្មោះឡាតាំង :</th>
				<td style="text-transform: uppercase;">&nbsp;&nbsp;
					<?php echo $army->full_name_latin; ?></td>
				<th class="for-label" style="text-align: right;">ភេទ : &nbsp;&nbsp;&nbsp;</th>
				<td class="kh-os">
					<?php echo $army->gender; ?></td>
	    	</tr>
		    <tr>
		        <th colspan="2" class="for-label">ថ្ងៃខែឆ្នាំកំណើត : </th>
		        <td colspan="5"><?php echo date('d/m/Y',strtotime($army->birth_date)) ?></td>
		    </tr>
		    <tr>
		        <th colspan="2" class="for-label">ស្រុកកំណើត : </th>
		        <td colspan="5" class="kh-os"><?php echo $army->place_of_birth ?></td>
		    </tr>
		    <tr>
		        <th colspan="2" class="for-label">អាស័យដ្ឋាន : </th>
		        <td colspan="5"  class="kh-os"><?php echo $army->address; ?></td>
		    </tr>
		    <tr>
		        <th colspan="2" class="for-label">កងឯកភាព : </th>
		        <td colspan="6" class="kh-os"><?php echo $unit->unit_short; ?></td>
		    </tr>
		    <tr>
		        <th colspan="2" class="for-label">ស្ថាប័ន : </th>
		        <td colspan="5" class="kh-os"><?php echo $dep->dep_name; ?></td>
		    </tr>
		    <tr class="hide">
		        <th colspan="2" class="for-label">ឋានន្តរសក្ដិ : </th>
		        <td colspan="2" class="kh-os"><?php echo $army_range->range_name; ?></td>
		        <th class="for-label" style="text-align: right;">ថ្ងៃឡើងសក្ដិ: </th>
		        <td>&nbsp;&nbsp;<?php echo date('d/m/Y',strtotime($army->range_date)); ?></td>
		        
		    </tr>
		    <tr>
		        <th colspan="2" class="for-label">ឋានន្តរសក្ដិ : </th>
		        <td colspan="6" class="kh-os">
		        	<?php echo $army_range->range_name; ?> &nbsp;&nbsp;&nbsp;<label class="for-label" id="pos_date">ថ្ងៃទទួលមុខតំណែង : </label>
		        	<span><?php echo date('d/m/Y',strtotime($army->range_date)); ?></span>
		        </td>
		    </tr>
		    <tr>
		        <th colspan="2" class="for-label">មុខតំណែង : </th>
		        <td colspan="6" class="kh-os">
		        	<?php echo $pos->pos_name; ?> &nbsp;&nbsp;&nbsp;<label class="for-label" id="pos_date">ថ្ងៃទទួលមុខតំណែង : </label>
		        	<span><?php echo date('d/m/Y',strtotime($army->position_date)); ?></span>
		        </td>
		    </tr>
		    <tr>
		        <th colspan="2" class="for-label">ជំនាញ/ឯកទេស :</th>
		        <td colspan="5" class="kh-os"><?php echo $army->skill; ?></td>
		    </tr>
		    <tr>
		        <th colspan="2" class="for-label">ថ្ងៃចូលកងទ័ព : </th>
		        <td colspan="2"><?php echo date('d/m/Y',strtotime($army->army_date)); ?></td>
		        <th class="for-label" style="text-align: right;">កំពស់ :</th>
		        <td>&nbsp; &nbsp;<?php echo $army->height; ?></td>
		        <th class="for-label" style="text-align: right;">សុខភាព : &nbsp;&nbsp;</th>
		        <td class="kh-os"><?php echo $army->health_desc; ?></td>
		    </tr>
		    <tr>
		        <th colspan="2" class="for-label">កម្រិតវប្បធម៌ : </th>
		        <td colspan="2" class="kh-os"><?php echo $army->edu_degree; ?></td>
		        <th class="for-label" style="text-align: right">ភាសា : </th>
		        <td class="kh-os">&nbsp;&nbsp;<?php echo $army->foreign_lang; ?></td>
		        
		    </tr>
		    <tr>
		        <th colspan="2" colspan="2" class="for-label">ឆ្លងវគ្គសិក្សា (រយៈពេល) :</th>
		        <td colspan="5" class="kh-os">&nbsp; &nbsp; <?php echo $army->course_duration; ?></td>
		    </tr>
		    <tr>
		        <th colspan="2" class="for-label">ក្នុងប្រទេស : </th>
		        <td colspan="6" class="kh-os"><?php echo $army->course_local; ?></td>
		    </tr>
		    <tr>
		        <th colspan="2" class="for-label">ក្រៅប្រទេស : </th>
		        <td colspan="6" class="kh-os"><?php echo $army->course_abroad; ?></td>
		    </tr>
		    <tr>
	    		<th colspan="2" class="for-label bold">ឈ្មោះឪពុក : </th>
		        <td class="sub-title"><?php echo $this->m_army->get_parent_name('father', $id)->parents_name;?></td>
	    		<th class="for-label" style="text-align: right;">ឈ្មោះម្ដាយ :</th>
				<td>&nbsp;&nbsp;
					<?php echo $this->m_army->get_parent_name('mother', $id)->parents_name; ?>
				</td>
				
	    	</tr>
	    	<tr>
	    		<th colspan="2" class="for-label bold">ស្ថានភាពគ្រួសារ : </th>
		        <td class="kh-os"><?php echo $army->status; ?></td>
	    		<th class="for-label" style="text-align: right;">ឈ្មោះប្ដីឫប្រពន្ធ :</th>
				<td>&nbsp;&nbsp;
					<?php echo $this->m_army->get_spouse($id)->name; ?></td>
				<th class="for-label" style="text-align: right;">កូន : &nbsp;&nbsp;&nbsp;</th>
				<td class="kh-os">
					<?php echo $child_num_kh;//count($this->m_army->get_child($id)) ?></td>
	    	</tr>
		    <tr>
		        <th colspan="2" class="for-label">ភិនភាគស្លាកស្នាម : </th>
		        <td colspan="5" class="kh-os"><?php echo $army->note; ?></td>
		    </tr>
		    <?php 
		    	$mission_abroad = "";
		    	$range2 = $this->m_army->get_range($army->range2_id)->row()->range_name;
		    	if($army->mission_abroad!=0){
		    		$mission_abroad = $army_country->country_name.", ".$army_group->group_name;
		    	}
		    ?>
		    <?php 
		    	if(isset($army) AND $army->mission_abroad!=0){
		    ?>
		    <tr>
		        <th colspan="2" class="for-label">បេសកកម្មក្រៅប្រទេស : </th>
		        <td colspan="6" class="kh-os"><?=$mission_abroad?></td>
		    </tr>
		    <tr>
		        <th class="for-label">ឋានន្តរសក្ដិ អ.ស.ប : </th>
		        <td colspan="4" class="kh-os"><?php echo $army_range2->range_name; ?></td>
		        <th class="for-label">តួនាទី អ.ស.ប : </th>
		        <td colspan="3" class="kh-os"><?php echo $army->position; ?></td>
		    </tr>
		    <?php } ?>
		    <tr>
		        <th class="for-label">លេខទូរស័ព្ទ : </th>
		        <td colspan="6" class="kh-os"><?php echo $army->phone; ?></td>
		    </tr>
	    </tbody>
	</table>

	<div class="row foot-holder" style="margin-top: 20px;">
    	<div class="col-sm-6 bcode">
    	<img class="hide" height="50px;" width="250px;" src="<?php echo site_url('../assets/upload/barcode.png');?>"> <br><br>
    		<p style="font-family: 'Khmer OS'">(១) បោះពុម្ភលើកទី១ នៅថ្ងៃទី <?=date('d')?> ខែ<?=date('m')?> ឆ្នាំ <?=date('Y')?> <br>
    		វេលាម៉ោង <?=date('H:i')?> នាទី</p>
    	<div id="qrcode">
    		
    	</div>

    	</div>
    	<div class="col-sm-6 signature" align="center">
    		<p class="kh-os">ជំនាញគ្រប់គ្រងធនធានមនុស្ស និង បណ្ដុះបណ្ដាល</p>
    		<h5 class="table_head">ប្រធាន</h5>
    	</div>
    </div>
</div>




<script type="text/javascript">
	$('#army_print').click(function(){
		window.print();
	});

	$("#qrcode").qrcode({
		width: 64,
		height: 64,
		text: "<?=$qrcode_text?>"
	});
</script>