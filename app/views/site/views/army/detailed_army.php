<style type="text/css">
	.u-dotted{
		border-bottom: 1px dotted #555 !important;
	}
	.p0{
		padding: 0 !important;
	}
</style>
<div class="row result_info">
	<div class="col-sm-12">
		<span class="top_action_button" id="button_print">
			<a href="JavaScript:void(0);" id="emp_print" title="Print">
    			<img src="<?php echo base_url('assets/images/icons/print.png')?>" />
    		</a>
  		</span>
	</div>
</div>
<div class="container-fluid PrintArea">
	<div class="row">
		<div class="col-sm-9 text-center" style="padding-left: 15%;">
			<h3 class="kh-muol">ប័ណ្ណជីវប្រវត្តិសង្ខេប</h3>
			<h4 class="kh-muol">នាយទាហាន នាយទាហានរង ពលទាហាន</h4>
		</div>
		<div class="col-sm-3" style="margin-top:15px;">
			<p class="kh-os">លេខ​ ៖ <?=$army->serial_num?></p>
			<p class="kh-os">អក្សរតម្កល់ ៖ <?=$army->stored_letter?></p>
		</div>
	</div>
	<div class="row" style="margin-top: 15px;">
		<div class="col-sm-3 text-center">
			<?php 
				$src = "assets/upload/thumb/".$army->army_id.".jpg";
				// $src = "assets/upload/thumb/1.jpg";
		      	if(!file_exists(FCPATH.$src)){
		      		$src = site_url('../assets/upload/No_person.jpg');
		      	}else{
		      		$src = base_url().$src;
		      	}
			?>
			<img style="height:160px; width:130px;"
			src="<?php echo $src;?>">
			<div class="form-group">
			  <label class="kh-os" for="usr">អត្តលេខ</label>
			  <p class=""><?=$army->id_num?></p>
			</div>
			<div class="form-group">
			  <label class="kh-os" for="usr">លេខអត្តសញ្ញាណប័ណ្ណ</label>
			  <p class=""><?=$army->ssid?></p>
			</div>
			<div class="form-group">
			    <label class="col-sm-6 kh-os" for="email">ប្រភេទឈាម</label>
			    <div class="col-sm-6">
			      <p class="text-left"><?=$army->blood_type?></p>
			    </div>
			</div>
			<?php 
				$src = "assets/upload/wife/wife_".$army->army_id.".jpg";
				// $src = "assets/upload/thumb/1.jpg";
		      	if(!file_exists(FCPATH.$src)){
		      		$src = site_url('../assets/upload/No_person.jpg');
		      	}else{
		      		$src = base_url().$src;
		      	}
			?>
			<img style="height:160px; width:130px; margin-top: 360%;"
			src="<?php echo $src;?>">
		</div>
		<div class="col-sm-9">
			<form class="form-horizontal" action="#">
			  <div class="form-group">
			    <label class="col-sm-2 kh-os" for="email">- នាមត្រកូល នាមខ្លួន </label>
			    <div class="col-sm-10">
			      <p class="u-dotted kh-os"><?=$army->full_name?></p>
			    </div>
			  </div>
			  <div class="form-group">
			    <label class="col-sm-2 kh-os" for="email">- អក្សរឡាតាំង </label>
			    <div class="col-sm-10">
			      <p class="u-dotted"><?=strtoupper($army->full_name_latin)?></p>
			    </div>
			  </div>
			  <div class="form-group">
			    <label class="col-sm-2 kh-os" for="email">- ឈ្មោះពីកំណើត </label>
			    <div class="col-sm-10">
			      <p class="u-dotted"><?=$army->name_from_birth?></p>
			    </div>
			  </div>
			  <div class="form-group">
			    <label class="col-sm-2 kh-os" for="email">- ឈ្មោះផ្សេងទៀត </label>
			    <div class="col-sm-10">
			      <p class="u-dotted"><?=$army->name_other?></p>
			    </div>
			  </div>
			  <div class="form-group">
			    <label class="col-sm-2 kh-os" for="email">- ឆ្នាំកំណើត </label>
			    <div class="col-sm-10">
			      <div class="form-group col-sm-3">
				    <label class="col-sm-6 kh-os p0" for="email">កើតថ្ងៃទី ៖  </label>
				    <div class="col-sm-6">
				      <p class="u-dotted"><?=date('d',strtotime($army->birth_date))?></p>
				    </div>
				  </div>
				  <div class="form-group col-sm-3">
				    <label class="col-sm-5 kh-os" for="email">ខែ ៖  </label>
				    <div class="col-sm-7">
				      <p class="u-dotted"><?=date('m',strtotime($army->birth_date))?></p>
				    </div>
				  </div>
				  <div class="form-group col-sm-3">
				    <label class="col-sm-5 kh-os" for="email">ឆ្នាំ ៖  </label>
				    <div class="col-sm-7">
				      <p class="u-dotted"><?=date('Y',strtotime($army->birth_date))?></p>
				    </div>
				  </div>
				  <div class="form-group col-sm-3">
				    <label class="col-sm-5 kh-os p0" for="email">ភេទ ៖  </label>
				    <div class="col-sm-7">
				      <p class="u-dotted kh-os"><?=$army->gender?></p>
				    </div>
				  </div>
			    </div>
			  </div>

			  <div class="form-group">
			    <label class="col-sm-2 kh-os" for="email">- ស្រុកកំណើត </label>
			    <div class="col-sm-10">
			      <div class="form-group col-sm-3">
				    <label class="col-sm-5 kh-os" for="email">ភូមិ ៖  </label>
				    <div class="col-sm-7">
				      <p class="u-dotted"><?=$army->pob_v?></p>
				    </div>
				  </div>
				  <div class="form-group col-sm-3">
				    <label class="col-sm-5 kh-os" for="email">ឃុំ ៖  </label>
				    <div class="col-sm-7">
				      <p class="u-dotted"><?=$army->pob_c?></p>
				    </div>
				  </div>
				  <div class="form-group col-sm-3 p0">
				    <label class="col-sm-5 kh-os" for="email">ស្រុក ៖  </label>
				    <div class="col-sm-7">
				      <p class="u-dotted"><?=$army->pob_d?></p>
				    </div>
				  </div>
				  <div class="form-group col-sm-3 p0">
				    <label class="col-sm-5 kh-os" for="email">ខេត្ត ៖  </label>
				    <div class="col-sm-7">
				      <p class="u-dotted"><?=$army->pob_p?></p>
				    </div>
				  </div>
			    </div>
			  </div>

			  <div class="form-group">
			    <label class="col-sm-2 kh-os" for="email">- ទីលំនៅបច្ចុប្បន្ន </label>
			    <div class="col-sm-10">
			      <p class="u-dotted"><?=$army->adr_v.'-'.$army->adr_c.'-'.$army->adr_d.'-'.$army->adr_p?></p>
			    </div>
			  </div>

			  <div class="form-group">
			    <label class="col-sm-2 kh-os" for="email">- ឋានន្តរសក្ដិ </label>
			    <div class="col-sm-10">
			      <div class="form-group col-sm-3">
				    <div class="col-sm-12">
				      <p class="u-dotted"><?=$army->range?></p>
				    </div>
				  </div>
				  <div class="form-group col-sm-3">
				    <label class="col-sm-5 kh-os" for="email">ថ្ងៃ ៖  </label>
				    <div class="col-sm-7">
				      <p class="u-dotted"><?=date('d',strtotime($army->range_date))?></p>
				    </div>
				  </div>
				  <div class="form-group col-sm-3">
				    <label class="col-sm-5 kh-os" for="email">ខែ ៖  </label>
				    <div class="col-sm-7">
				      <p class="u-dotted"><?=date('m',strtotime($army->range_date))?></p>
				    </div>
				  </div>
				  <div class="form-group col-sm-3">
				    <label class="col-sm-5 kh-os" for="email">ឆ្នាំ ៖  </label>
				    <div class="col-sm-7">
				      <p class="u-dotted"><?=date('Y',strtotime($army->range_date))?></p>
				    </div>
				  </div>
			    </div>
			  </div>

			  <div class="form-group">
			    <label class="col-sm-2 kh-os" for="email">- មុខតំណែង </label>
			    <div class="col-sm-10">
			      <div class="form-group col-sm-3">
				    <div class="col-sm-12">
				      <p class="u-dotted"><?=$army->position?></p>
				    </div>
				  </div>
				  <div class="form-group col-sm-3">
				    <label class="col-sm-5 kh-os" for="email">ថ្ងៃ ៖  </label>
				    <div class="col-sm-7">
				      <p class="u-dotted"><?=date('d',strtotime($army->position_date))?></p>
				    </div>
				  </div>
				  <div class="form-group col-sm-3">
				    <label class="col-sm-5 kh-os" for="email">ខែ ៖  </label>
				    <div class="col-sm-7">
				      <p class="u-dotted"><?=date('m',strtotime($army->position_date))?></p>
				    </div>
				  </div>
				  <div class="form-group col-sm-3">
				    <label class="col-sm-5 kh-os" for="email">ឆ្នាំ ៖  </label>
				    <div class="col-sm-7">
				      <p class="u-dotted"><?=date('Y',strtotime($army->position_date))?></p>
				    </div>
				  </div>
			    </div>
			  </div>

			  <div class="form-group">
			    <label class="col-sm-2 kh-os" for="email">- កងឯកភាព </label>
			    <div class="col-sm-10">
			      <p class="u-dotted"><?=$army->unit_full?></p>
			    </div>
			  </div>

			  <div class="form-group">
			    <label class="col-sm-2 kh-os" for="email">- ជនជាតិ </label>
			    <div class="col-sm-10">
			      <div class="form-group col-sm-4">
				    <div class="col-sm-12">
				      <p class="u-dotted"><?=$army->ethnicity?></p>
				    </div>
				  </div>
				  <div class="form-group col-sm-4 p0">
				    <label class="col-sm-5 kh-os" for="email">សញ្ជាតិ ៖  </label>
				    <div class="col-sm-7">
				      <p class="u-dotted"><?=$army->nationality?></p>
				    </div>
				  </div>
				  <div class="form-group col-sm-4 p0">
				    <label class="col-sm-5 kh-os" for="email">សាសនា ៖  </label>
				    <div class="col-sm-7">
				      <p class="u-dotted"><?=$army->religion?></p>
				    </div>
				  </div>
			    </div>
			  </div>

			  <div class="form-group">
			    <label class="col-sm-2 kh-os" for="email">- កម្រិតវប្បធម៌ </label>
			    <div class="col-sm-10">
			      <p class="u-dotted"><?=$army->edu_degree?></p>
			    </div>
			  </div>

			  <div class="form-group">
			    <label class="col-sm-2 kh-os" for="email">- ភាសារបរទេស </label>
			    <div class="col-sm-10">
			      <p class="u-dotted"><?=$army->foreign_lang?></p>
			    </div>
			  </div>

			  <div class="form-group">
			    <label class="col-sm-2 kh-os" for="email">- មុខជំនាញ-ឯកទេស </label>
			    <div class="col-sm-10">
			      <p class="u-dotted"><?=$army->skill?></p>
			    </div>
			  </div>

			  <div class="form-group">
			    <label class="col-sm-2 kh-os" for="email">- ឆ្លងវគ្គសិក្សា (រយៈពេល) </label>
			    <div class="col-sm-10">
			      <p class="u-dotted"><?=$army->course_duration?></p>
			    </div>
			  </div>

			  <div class="form-group">
			    <label class="col-sm-2 kh-os" for="email">- ក្នុងប្រទេស </label>
			    <div class="col-sm-10">
			      <p class="u-dotted"><?=$army->course_local?></p>
			    </div>
			  </div>

			  <div class="form-group">
			    <label class="col-sm-2 kh-os" for="email">- ក្រៅប្រទេស </label>
			    <div class="col-sm-10">
			      <p class="u-dotted"><?=$army->course_abroad?></p>
			    </div>
			  </div>
			  <div class="form-group">
			    <label class="col-sm-4 kh-os" for="email">- ឆ្លងប្រយុទ្ធ - បម្រើប្រយុទ្ធ (ថ្នាក់ខ្ពស់បំផុត) </label>
			    <div class="col-sm-8">
			      <p class="u-dotted"><?=$army->highest_mission?></p>
			    </div>
			  </div>

			  <div class="form-group">
			    <label class="col-sm-2 kh-os" for="email">- សុខភាព - របួស - ពិការ </label>
			    <div class="col-sm-10">
			      <div class="form-group col-sm-4">
				    <label class="col-sm-5 kh-os" for="email">ថ្ងៃទី ៖  </label>
				    <div class="col-sm-7">
				      <p class="u-dotted"><?=date('d',strtotime($army->health_date))?></p>
				    </div>
				  </div>
				  <div class="form-group col-sm-4">
				    <label class="col-sm-5 kh-os" for="email">ខែ ៖  </label>
				    <div class="col-sm-7">
				      <p class="u-dotted"><?=date('m',strtotime($army->health_date))?></p>
				    </div>
				  </div>
				  <div class="form-group col-sm-4">
				    <label class="col-sm-5 kh-os" for="email">ឆ្នាំ ៖  </label>
				    <div class="col-sm-7">
				      <p class="u-dotted"><?=date('Y',strtotime($army->health_date))?></p>
				    </div>
				  </div>
			    </div>
			  </div>

			  <div class="form-group">
			    <div class="col-sm-offset-2 col-sm-10">
			      <p class="u-dotted"><?=$army->health_desc?></p>
			    </div>
			  </div>

			  <div class="form-group">
			    <label class="col-sm-2 kh-os" for="email">- សសើរ </label>
			    <div class="col-sm-10">
			      <p class="u-dotted"><?=$army->admire?></p>
			    </div>
			  </div>

			  <div class="form-group">
			    <label class="col-sm-3 kh-os" for="email">- ពិន័យ - ទណ្ឌកម្ម - តុលាការ </label>
			    <div class="col-sm-9">
			      <p class="u-dotted"><?=$army->punishment?></p>
			    </div>
			  </div>

			  <div class="form-group">
			    <label class="col-sm-2 kh-os" for="email">- ភិនភាគស្លាកស្នាម កំពស់ </label>
			    <div class="col-sm-10">
			      <p class="u-dotted"><?=$army->note?></p>
			    </div>
			  </div>

			  <div class="form-group">
			    <label class="col-sm-2 kh-os" for="email">- ចូលកងទ័ព </label>
			    <div class="col-sm-10">
			      <div class="form-group col-sm-4">
				    <label class="col-sm-5 kh-os" for="email">ថ្ងៃទី ៖  </label>
				    <div class="col-sm-7">
				      <p class="u-dotted"><?=date('d',strtotime($army->army_date))?></p>
				    </div>
				  </div>
				  <div class="form-group col-sm-4">
				    <label class="col-sm-5 kh-os" for="email">ខែ ៖  </label>
				    <div class="col-sm-7">
				      <p class="u-dotted"><?=date('m',strtotime($army->army_date))?></p>
				    </div>
				  </div>
				  <div class="form-group col-sm-4">
				    <label class="col-sm-5 kh-os" for="email">ឆ្នាំ ៖  </label>
				    <div class="col-sm-7">
				      <p class="u-dotted"><?=date('Y',strtotime($army->army_date))?></p>
				    </div>
				  </div>
			    </div>
			  </div>

				<div class="form-group">
				    <label class="col-sm-2 kh-os" for="email">- បេសកកម្មក្រៅប្រទេស </label>
				    <div class="col-sm-10">
				      <p class="u-dotted"><?=$army->mission_abroad?></p>
				    </div>
				</div>

				<div class="form-group">
				    <label class="col-sm-2 kh-os" for="email">- លេខទូរស័ព្ទ </label>
				    <div class="col-sm-10">
				      <p class="u-dotted"><?=$army->phone?></p>
				    </div>
				</div>

				<div class="form-group">
				    <label class="col-sm-2 kh-os" for="email">- ឪពុកឈ្មោះ  </label>
				    <div class="col-sm-10">
				      <div class="form-group col-sm-4">
					    <div class="col-sm-12">
					      <p class="u-dotted"><?=$father->parents_name?></p>
					    </div>
					  </div>
					  <div class="form-group col-sm-4">
					    <label class="col-sm-5 kh-os" for="email">ឆ្នាំកំណើត ៖  </label>
					    <div class="col-sm-7">
					      <p class="u-dotted"><?=$father->birth_year?></p>
					    </div>
					  </div>
					  <div class="form-group col-sm-4">
					    <label class="col-sm-12 kh-os" for="email">
					    	<?php 
					    		if($father->alive==1){
					    			echo "(នៅរស់ <strike>ឬ ស្លាប់</strike>)";
					    		}else{
					    			echo "(<strike>នៅរស់ ឬ</strike> ស្លាប់)";
					    		}
					    	?>
					    </label>
					  </div>
				    </div>
				  </div>

				<div class="form-group">
				    <label class="col-sm-2 kh-os" for="email">- ស្រុកកំណើត </label>
				    <div class="col-sm-10">
				      <p class="u-dotted"><?=$father->birth_place?></p>
				    </div>
				</div>

				<div class="form-group">
				    <label class="col-sm-2 kh-os" for="email">- មុខរបរ </label>
				    <div class="col-sm-10">
				      <p class="u-dotted"><?=$father->occupation?></p>
				    </div>
				</div>

				<div class="form-group">
				    <label class="col-sm-2 kh-os" for="email">- ទីលំនៅបច្ចុប្បន្ន </label>
				    <div class="col-sm-10">
				      <p class="u-dotted"><?=$father->permanent_adr?></p>
				    </div>
				</div>

				<div class="form-group">
				    <label class="col-sm-2 kh-os" for="email">- ម្ដាយឈ្មោះ  </label>
				    <div class="col-sm-10">
				      <div class="form-group col-sm-4">
					    <div class="col-sm-12">
					      <p class="u-dotted"><?=$mother->parents_name?></p>
					    </div>
					  </div>
					  <div class="form-group col-sm-4">
					    <label class="col-sm-5 kh-os" for="email">ឆ្នាំកំណើត ៖  </label>
					    <div class="col-sm-7">
					      <p class="u-dotted"><?=$mother->birth_year?></p>
					    </div>
					  </div>
					  <div class="form-group col-sm-4">
					    <label class="col-sm-12 kh-os" for="email">
					    	<?php 
					    		if($mother->alive==1){
					    			echo "(នៅរស់ <strike>ឬ ស្លាប់</strike>)";
					    		}else{
					    			echo "(<strike>នៅរស់ ឬ</strike> ស្លាប់)";
					    		}
					    	?>
						</label>
					  </div>
				    </div>
			  	</div>

			  	<div class="form-group">
				    <label class="col-sm-2 kh-os" for="email">- ស្រុកកំណើត </label>
				    <div class="col-sm-10">
				      <p class="u-dotted"><?=$mother->birth_place?></p>
				    </div>
				</div>

				<div class="form-group">
				    <label class="col-sm-2 kh-os" for="email">- មុខរបរ </label>
				    <div class="col-sm-10">
				      <p class="u-dotted"><?=$mother->occupation?></p>
				    </div>
				</div>

				<div class="form-group">
				    <label class="col-sm-2 kh-os" for="email">- ទីលំនៅបច្ចុប្បន្ន </label>
				    <div class="col-sm-10">
				      <p class="u-dotted"><?=$mother->permanent_adr?></p>
				    </div>
				</div>

				<div class="form-group">
				    <label class="col-sm-3 kh-os" for="email">-នាមត្រកូល នាមខ្លូន (ប្រពន្ធ ឬប្ដី)</label>
				    <div class="col-sm-9">
				      <div class="form-group col-sm-4">
					    <div class="col-sm-12">
					      <p class="u-dotted"><?=$spouse->name?></p>
					    </div>
					  </div>
					  <div class="form-group col-sm-4">
					    <label class="col-sm-5 kh-os" for="email">ឆ្នាំកំណើត ៖  </label>
					    <div class="col-sm-7">
					      <p class="u-dotted"><?=$spouse->spouse_birth_year?></p>
					    </div>
					  </div>
				    </div>
			  	</div>

			  	<div class="form-group">
				    <label class="col-sm-2 kh-os" for="email">- លិខិតអាពាហ៌ពិពាហ៌លេខ </label>
				    <div class="col-sm-10">
				      <div class="form-group col-sm-3">
					    <div class="col-sm-12">
					      <p class="u-dotted"><?=$spouse->wedding_letter_num?></p>
					    </div>
					  </div>
					  <div class="form-group col-sm-3">
					    <label class="col-sm-5 kh-os" for="email">ចុះថ្ងៃទី  </label>
					    <div class="col-sm-7">
					      <p class="u-dotted"><?=date('d',strtotime($spouse->wedding_letter_date))?></p>
					    </div>
					  </div>
					  <div class="form-group col-sm-3">
					    <label class="col-sm-5 kh-os" for="email">ខែ   </label>
					    <div class="col-sm-7">
					      <p class="u-dotted"><?=date('m',strtotime($spouse->wedding_letter_date))?></p>
					    </div>
					  </div>
					  <div class="form-group col-sm-3">
					    <label class="col-sm-5 kh-os" for="email">ឆ្នាំ   </label>
					    <div class="col-sm-7">
					      <p class="u-dotted"><?=date('Y',strtotime($spouse->wedding_letter_date))?></p>
					    </div>
					  </div>
				    </div>
				</div>

				<div class="form-group">
				    <label class="col-sm-2 kh-os" for="email">- ទីលំនៅបច្ចុប្បន្ន </label>
				    <div class="col-sm-10">
				      <p class="u-dotted"><?=$spouse->current_adr?></p>
				    </div>
				</div>
				<?php 
					$m = 0;
					$f = 0;
					$i=1;
					$ch = '';
					if(count($child)>0){
						foreach($child as $child){
							$gender = '';
							if($child->gender=='male'){
								$gender = 'ប្រុស';
								$m++;
							}else{
								$gender = 'ស្រី';
								$f++;
							}
							$ch .= '
								<div class="form-group">
								    <label class="col-sm-2 kh-os" for="email">- '.$i.'. ឈ្មោះ </label>
								    <div class="col-sm-10">
								      <div class="form-group col-sm-3">
									    <div class="col-sm-12">
									      <p class="u-dotted">'.$child->child_name.'</p>
									    </div>
									  </div>
									  <div class="form-group col-sm-3">
									    <label class="col-sm-5 kh-os" for="email">ឆ្នាំកំណើត  </label>
									    <div class="col-sm-7">
									      <p class="u-dotted">'.$child->birth_year.'</p>
									    </div>
									  </div>
									  <div class="form-group col-sm-3">
									    <label class="col-sm-5 kh-os" for="email">ភេទ   </label>
									    <div class="col-sm-7">
									      <p class="u-dotted">'.$gender.'</p>
									    </div>
									  </div>
									  
								    </div>
								</div>
							';
						$i++;}
					}
				?>
				<div class="form-group">
				    <label class="col-sm-2 kh-os" for="email">- ចំនួនកូន </label>
				    <div class="col-sm-10">
				      <div class="form-group col-sm-3">
					    <div class="col-sm-12">
					      <p class="u-dotted"><?=count($child)?></p>
					    </div>
					  </div>
					  <div class="form-group col-sm-3">
					    <label class="col-sm-5 kh-os" for="email">ប្រុស  </label>
					    <div class="col-sm-7">
					      <p class="u-dotted"><?=$m?></p>
					    </div>
					  </div>
					  <div class="form-group col-sm-3">
					    <label class="col-sm-5 kh-os" for="email">ស្រី   </label>
					    <div class="col-sm-7">
					      <p class="u-dotted"><?=$f?></p>
					    </div>
					  </div>
					  
				    </div>
				</div>
				<?=$ch?>
				<!-- <div class="form-group">
				    <label class="col-sm-2 kh-os" for="email">- ១. ឈ្មោះ </label>
				    <div class="col-sm-10">
				      <div class="form-group col-sm-3">
					    <div class="col-sm-12">
					      <p class="u-dotted">example</p>
					    </div>
					  </div>
					  <div class="form-group col-sm-3">
					    <label class="col-sm-5 kh-os" for="email">ឆ្នាំកំណើត  </label>
					    <div class="col-sm-7">
					      <p class="u-dotted">example</p>
					    </div>
					  </div>
					  <div class="form-group col-sm-3">
					    <label class="col-sm-5 kh-os" for="email">ភេទ   </label>
					    <div class="col-sm-7">
					      <p class="u-dotted">example</p>
					    </div>
					  </div>
					  
				    </div>
				</div> -->

				<div class="form-group">
				    <label class="col-sm-12 kh-os text-center" for="email"> (ក្នុងករណីមានប្រពន្ធ ឫប្ដីទី២ ត្រូវបញ្ជាក់ច្បាស់ពីមូលហេតុ) </label>
				    <p class="u-dotted col-sm-12"><?=$spouse->spouse_desc?></p>
				</div>
			</form>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<h3 class="kh-muol text-center">រយៈពេលការងារ</h3>
			<table class="table table-bordered table-work">
				<thead>
					<tr>
						<th class="text-center kh-os" colspan="2">រយៈពេល</th>
						<th style="vertical-align: middle;" class="text-center kh-os" rowspan="2">ឋានន្តរសក្ដិ - មុខតំណែង - កងឯកភាព</th>
						<th style="vertical-align: middle;" class="kh-os text-center" rowspan="2">ថ្នាក់សំរេច</th>
					</tr>
					<tr>
						<th class="text-center kh-os" colspan="2">ថ្ងៃ ខែ ឆ្នាំ ដល់ ថ្ងៃ ខែ ឆ្នាំ</th>
					</tr>
				</thead>
				<tbody>
					<?php
						if(count($works>0)){
							foreach($works as $row){
								echo '
									<tr>
										<td class="kh-os">'.$row->start_date.'</td>
										<td class="kh-os">'.$row->end_date.'</td>
										<td class="kh-os">'.$row->range_desc.'</td>
										<td class="kh-os">'.$row->eva_unit.'</td>
									</tr>
								';
							}
						}
					?>
				</tbody>
			</table>
			<h4 class="kh-os text-center">សង្ខេបស្ថានភាពគ្រួសារឪពុកម្ដាយបង្កើតនិងផ្ទាល់ខ្លួន ធ្វើអ្វី នៅឯណា គ្រប់ជំនាន់</h4>
			<p class="u-dotted kh-os"><?=$eva->father_desc?></p>
			<p class="u-dotted kh-os"><?=$eva->mother_desc?></p>
			<p class="u-dotted kh-os"><?=$eva->personal_desc?></p>
			<h3 class="kh-muol text-center">សេចក្ដីសន្និដ្ឋាន</h3>
			<p class="u-dotted kh-os"><?=$eva->eva_desc?></p>
		</div>
	</div>
	<div class="row" style="margin-top: 15px;">
		<div class="col-sm-6">
			<p style="font-size: 15px;" class="kh-os">ថ្ងៃទី .....ខែ......ឆ្នាំ.........</p>
			<p style="font-size: 15px;" class="kh-os">មេបញ្ជាការកងឯកភាព</p>
		</div>
		<div class="col-sm-6 text-center">
			<p style="font-size: 15px;" class="kh-os">ថ្ងៃទី .....ខែ......ឆ្នាំ.........</p>
			<p style="font-size: 15px;" class="kh-os">ធ្វើនៅ............................</p>
			<p style="font-size: 15px;" class="kh-os">ហត្ថលេខា និងស្នាមមេដៃសមីខ្លួន</p>
		</div>
	</div>
</div>
<script type="text/javascript">
	$('.table-work th,td').addClass('text-center');
	$('p.u-dotted').addClass('kh-os');
	$(document).ready(function(){
      $("#button_print").click(function(){
      var options = {
      	mode:"popup",
      	popHt: 500,
      	popWd: 400,
      	popX: 500,
      	popY: 600,
      	popTitle:"Printing Detailed",
      	popClose: false
      };
      $("div.PrintArea").printArea( options ); 
      });      
  	});
</script>