<style type="text/css">
	@font-face{
		font-family:'KhmerOSMoul';
		src:url(<?php echo site_url('../assets/fonts/KhmerOSMoul.ttf');?>);

	}
	@font-face{
		font-family:'PreyChas';
		src:url(<?php echo site_url('../assets/fonts/KhWattPreyChas.ttf');?>);
	}
	.disable{display: none;}
	input[type="text"]{
		height: 30px;
	}
	.sp_name{
		width: 40%;
		margin-right: 10px;
	}
	.col-sm-12, .col-sm-3{
		padding-left: 0;
	}
	.sp_list{
		padding-bottom: 5px;
	}
	.wrapper{
		font-family: 'Khmer OS';
	}
</style>
<div class="wrapper">
	<div class="clearfix" id="main_content_outer">
	    <div id="main_content">
	      <div class="row result_info">
	      	<div class="col-xs-6">
		      	<strong>Edit Soldier  Information</strong>
		    </div>
		    <div class="col-xs-6 text-center">
		    	<ul class="nav nav-tabs nav-left">
				  <li class="active"><a href="#personal" data-toggle = "tab">Personal Details</a></li>
				  <li><a href="#Family" data-toggle = "tab">Family</a></li>
				  <li><a href="#wrk_his" data-toggle = "tab">Work History</a></li>
				  <li><a href="#evaluate" data-toggle = "tab">Evaluation</a></li>
				</ul>

				

		    </div>
	      </div>
	      	<form action="<?php echo site_url('employee/army_record/update_army').'/'.$id;?>" method="post" enctype="multipart/form-data">
	      	<!-- tab contents -->
	      	<div class="tab-content">
				<div class="tab-pane active" id="personal">
					<div class="row">
			      		<div class="col-sm-8 text-center">
			      			<h1>បណ្ណ័ជីវប្រវត្តិសង្ខេប</h1>
			      			<h3>នាយទាហាន នាយទាហានរង ពលទាហាន</h3>
			      		</div>
			      		<div class="col-sm-4" style="padding-top: 30px;">
			      			<div class="col-sm-12">
			      				<label>លេខ :</label>
			      				<input value="<?= $army->serial_num;?>" type="text" name="txtsoldier_serial_number">
			      			</div>
			      			<div class="col-sm-12">
			      				<label>អក្សរតម្កល់ :</label>
			      				<input value="<?= $army->stored_letter;?>" type="text" name="txtsoldier_stored_letter">
			      			</div>
			      		</div>
			      	</div>

			      	<div class="row">
			      		<div class="col-sm-3 text-center">
			      			<div class="form_sep">
								<img src="<?php echo site_url('../assets/upload/army/thumb/'.$id.'.jpg') ?>" id="uploadPreview" style='width:120px; height:150px; margin-bottom:15px; border:1px solid #CCCCCC'>
									<input id="uploadImage" type="file" accept="image/*" name="userfile" onchange="PreviewImage();" style="visibility:hidden; display:none;" /> <br/>
								<input type='button' class="btn btn-success" onclick="$('#uploadImage').click();" value='Browse'/>
				      		</div>
				      		<table align="center" style="margin-top: 10px;">
				      			<tr>
				      				<td align="left"><h5>អត្តលេខ</h5></td>
				      				<td> <input value="<?= $army->id_num;?>" type="text" name="txtsoldier_id" id="soldier_id" class="form-control"></td>
				      			</tr>
				      			<tr>
				      				<td align="left"><h5>អត្តសញ្ញាណបណ្ណ័</h5></td>
				      				<td> <input value="<?= $army->ssid;?>" type="text" name="txtssid" id="txtssid" class="form-control"></td>
				      			</tr>
				      			<tr>
				      				<td align="left"><h5>ប្រភេទឈាម</h5></td>
				      				<td><input value="<?= $army->blood_type;?>" type="text" name="txtblood_type" id="txtblood_type" class="form-control"></td>
				      			</tr>
				      		</table>
				      		
			      		</div>

			      		<div class="col-sm-9">

			      			<div class="col-sm-12">
			      				<div class="panel panel-default">

			      					<div class="panel-heading">
			      						<h4 class="panel-title">Information</h4>
			      					</div>

			      					<div class="panel-body">
			      					<!--information-->

				      					<div class="row">
				      						<div class="col-sm-2"><h5>នាមត្រកូល នាមខ្លួន</h5></div>
		      								<div class="col-sm-10">
		      								<input required value="<?= $army->full_name;?>" type="text" name="txtfull_name" id="fullname" class="form-control ">
		      								</div>
				      					</div>
				      					<div class="row">
				      						<div class="col-sm-2"><h5>អក្សរឡាតាំង</h5></div>
		      								<div class="col-sm-10">
		      								<input value="<?= $army->full_name_latin;?>" type="text" name="txt_latin_fullname" id="latin_fullname" class="form-control">
		      								</div>
				      					</div>
				      					<div class="row">
				      						<div class="col-sm-2"><h5>ឈ្មោះពីកំណើត</h5></div>
		      								<div class="col-sm-10">
		      								<input value="<?= $army->name_from_birth;?>" type="text" name="name_from_birth" id="name_from_birth" class="form-control ">
		      								</div>
				      					</div>
				      					<div class="row">
				      						<div class="col-sm-2"><h5>ឈ្មោះពីផ្សេងទៀត</h5></div>
		      								<div class="col-sm-10">
		      								<input value="<?= $army->name_other;?>" type="text" name="txt_other_name" id="other_name" class="form-control">
		      								</div>
				      					</div>
				      					<div class="row dob">
				      						<div class="col-sm-2"><h5>ឆ្នាំកំណើត</h5></div>
		      								<div class="col-sm-10">
		      									<div class="col-sm-6">
		      										<label>ឆ្នាំ ខែ ថ្ងៃ</label>
		      										<input value="<?= $army->birth_date;?>" type="text" name="dob" id="dob">
		      									</div>
		      									<div class="col-sm-3">
		      										<label>ភេទ</label>
		      										<?php $m='';$f = ''; if($army->gender == 'ប្រុស'){
		      												$m='selected'; $f='';
		      											}else{
		      												$m=''; $f='selected';
		      												} ?>
		      										<select name="cbo_gender">
		      											<option <?= $m?> value="ប្រុស">ប្រុស</option>
		      											<option <?= $f?> value="ស្រី">ស្រី</option>
		      										</select>
		      									</div>
		      								</div>
				      					</div>
				      					<div class="row pob">
				      						<div class="col-sm-2"><h5>ស្រុកកំណើត</h5></div>
		      								<div class="col-sm-10">
		      									<div class="col-sm-3">
		      										<label>ភូមិ</label>
		      										<input value="<?= $army->pob_v;?>" type="text" name="pob_village">
		      									</div>
		      									<div class="col-sm-3">
		      										<label>ឃុំ</label>
		      										<input value="<?= $army->pob_c;?>" type="text" name="pob_commune">
		      									</div>
		      									<div class="col-sm-3">
		      										<label>ស្រុក</label>
		      										<input value="<?= $army->pob_d;?>" type="text" name="pob_district">
		      									</div>
		      									<div class="col-sm-3">
		      										<label>ខេត្ត</label>
		      										<input value="<?= $army->pob_p;?>" type="text" name="pob_province">
		      									</div>
		      								</div>
				      					</div>
				      					<div class="row pob">
				      						<div class="col-sm-2"><h5>ទីលំនៅបច្ចុប្បន្ន</h5></div>
		      								<div class="col-sm-10">
		      									<div class="col-sm-3">
		      										<label>ភូមិ</label>
		      										<input value="<?= $army->adr_v;?>" type="text" name="adr_v">
		      									</div>
		      									<div class="col-sm-3">
		      										<label>ឃុំ</label>
		      										<input value="<?= $army->adr_c;?>" type="text" name="adr_c">
		      									</div>
		      									<div class="col-sm-3">
		      										<label>ស្រុក</label>
		      										<input value="<?= $army->adr_d;?>" type="text" name="adr_d">
		      									</div>
		      									<div class="col-sm-3">
		      										<label>ខេត្ត</label>
		      										<input value="<?= $army->adr_p;?>" type="text" name="adr_p">
		      									</div>
		      								</div>
				      					</div>
				      					<div class="row">
				      						<div class="col-sm-2"><h5>ឋានន្ដរសក្ដិ</h5></div>
		      								<div class="col-sm-2">
		      								<input value="<?= $army->range;?>" type="text" name="txt_range" id="txt_range" class="form-control">
		      								</div>
		      								<div class="col-sm-8">
		  										<label>កាលបរិច្ឆេត ឆ្នាំ ខែ ថ្ងៃ</label>
		  										<input value="<?= $army->range_date;?>" type="text" name="range_date"​ id="range_date">
		  									</div>
		  									
				      					</div>
				      					<div class="row">
				      						<div class="col-sm-2"><h5>មុខតំណែង</h5></div>
		      								<div class="col-sm-2">
		      								<input value="<?= $army->position;?>" type="text" name="txt_position" class="form-control">
		      								</div>
		      								<div class="col-sm-8">
		  										<label>កាលបរិច្ឆេត ឆ្នាំ ខែ ថ្ងៃ</label>
		  										<input value="<?= $army->position_date;?>" type="text" name="position_date"​ id="pos_date">
		  									</div>
				      					</div>
				      					<div class="row">
				      						<div class="col-sm-2"><h5>កងឯកភាព</h5></div>
		      								<div class="col-sm-10">
		      								<!-- <input value="<?= $army->unit;?>" type="text" id="txt_unit" class="form-control "> -->
		      								<select name="txt_unit" class="form-control" style="padding: 0;">
		      								<?php foreach ($unit as $item) {
		      									$select = "";
		      									if($army->unit == $item->unit_id){$select='selected';}
		      									echo '<option '.$select.' value="'.$item->unit_id.'">'.$item->unit_short.'</option>';

		      								} ?>	
		      								</select>
		      								</div>
				      					</div>
				      					<div class="row">
				      						<div class="col-sm-2"><h5>ជនជាតិ</h5></div>
		      								<div class="col-sm-10">
		      									<div class="col-sm-4" style="margin-left: -15px;">
			      								<input value="<?= $army->ethnicity;?>" type="text" name="txt_ethnicity" id="txt_ethnicity" class="form-control ">
			      								</div>
			      								<div class="col-sm-4">
			  										<label>សញ្ជាតិ</label>
			  										<input value="<?= $army->nationality;?>" type="text" name="txt_nationality">
			  									</div>
			  									<div class="col-sm-4">
			  										<label>សាសនា</label>
			  										<input value="<?= $army->religion;?>" type="text" name="txt_religion">
			  									</div>
		      								</div>
				      					</div>
				      					<div class="row">
				      						<div class="col-sm-2"><h5>កម្រិតវប្បធម៍</h5></div>
		      								<div class="col-sm-10">
		      								<input value="<?= $army->edu_degree;?>" type="text" name="txt_edu_degree" id="txt_edu_degree" class="form-control ">
		      								</div>
				      					</div>
				      					<div class="row">
				      						<div class="col-sm-2"><h5>ភាសាបរទេស</h5></div>
		      								<div class="col-sm-10">
		      								<input value="<?= $army->foreign_lang;?>" type="text" name="txt_foriegn_lang" id="txt_foriegn_lang" class="form-control ">
		      								</div>
				      					</div>
				      					<div class="row">
				      						<div class="col-sm-2"><h5>មុខជំនាញ ឯកទេស</h5></div>
		      								<div class="col-sm-10">
		      								<input value="<?= $army->skill;?>" type="text" name="txt_skill" id="txt_skill" class="form-control ">
		      								</div>
				      					</div>
				      					<div class="row">
				      						<div class="col-sm-2"><h5>ឆ្លងវគ្គសិក្សា (រយៈពេល)</h5></div>
		      								<div class="col-sm-10" style="padding-right: 0">
		      									<div class="col-sm-12"><input value="<?= $army->course_duration;?>"
		      									 type="text" name="txt_duration" id="txt_duration" class="form-control "></div>

		      									<div class="row">
		      										<div class="col-sm-12">
		      										<div class="col-sm-2"><label>ក្នុងប្រទេស</label></div>
		      										<div class="col-sm-10">
		      											<input value="<?= $army->course_local;?>"
		      											 type="text" name="txt_course_local" id="txt_duration" class="form-control ">
		      										</div>
		      									</div>
		      									</div>
		      									<div class="row">
		      										<div class="col-sm-12">
		      										<div class="col-sm-2"><label>ក្រៅប្រទេស</label></div>
		      										<div class="col-sm-10">
		      											<input type="text" value="<?= $army->course_abroad;?>"
		      											 name="txt_course_abroad" id="txt_duration" class="form-control ">
		      										</div>
		      									</div>
		      									</div>
		      								</div>
				      					</div>
				      					<div class="row">
				      						<div class="col-sm-3"><h5>ឆ្លងប្រយុទ្ធ បម្រើប្រយុទ្ធ (ថ្នាក់ខ្ពស់បំផុត)</h5></div>
		      								<div class="col-sm-9">
		      								<input type="text" value="<?= $army->highest_mission;?>"
		      								 name="txt_high_mission" id="txt_exp" class="form-control ">
		      								</div>
				      					</div>
			      						<div class="row">
				      						<div class="col-sm-3"><h5>សុខភាព របួស ពិការ</h5></div>
		      								<div class="col-sm-9">
		      									<div class="col-sm-12" style="padding: 0;">
		      										<div class="col-sm-4" style="padding-right: 0"><label>កាលបរិច្ឆេត ឆ្នាំ ខែ ថ្ងៃ</label></div>
		      										<div class="col-sm-8" style="padding:0">
		      											<input type="text" value="<?= $army->health_date;?>"
		      											name="txt_health_date" id="health_date" class="form-control" >
		      										</div>
		      									
		      									</div>
		  									</div>
		  								</div>

		  								<div class="row">
				      						<div class="col-sm-3"></div>
		      								<div class="col-sm-9">
		      								<input value="<?= $army->health_desc;?>" type="text" name="txt_health_desc" id="txt_exp" class="form-control ">
		      								</div>
				      					</div>

			      						<div class="row">
				      						<div class="col-sm-2"><h5>សសើរ</h5></div>
		      								<div class="col-sm-10">
		      								<input value="<?= $army->admire;?>" type="text" name="txt_admire" id="txt_admire" class="form-control ">
		      								</div>
				      					</div>
				      					<div class="row">
				      						<div class="col-sm-2"><h5>ពិន័យ ទណ្ឌកម្ម តុលាការ</h5></div>
		      								<div class="col-sm-10">
		      								<input value="<?= $army->punishment;?>" type="text" name="txt_punishment" id="txt_punishment" class="form-control ">
		      								</div>
				      					</div>
				      					
				      					<div class="row">
				      						<div class="col-sm-2"><h5>ភិនភាគ ស្លាកស្នាម</h5></div>
		      								<div class="col-sm-10">
		      								<input value="<?= $army->note;?>" type="text" name="txt_note" id="txt_identify" class="form-control ">
		      								</div>
				      					</div>
				      					<div class="row">
				      						<div class="col-sm-2"><h5>កំពស់</h5></div>
		      								<div class="col-sm-10">
		      								<input value="<?= $army->height;?>" type="text" name="txt_height" id="" class="form-control ">
		      								</div>
				      					</div>
				      					<div class="row">
				      						<div class="col-sm-3"><h5>ចូលកងទព័</h5></div>
		      								<div class="col-sm-9">
		      									<div class="col-sm-12" style="padding:0">
		      										<div class="col-sm-4" style="padding-right: 0"><label>កាលបរិច្ឆេត ឆ្នាំ ខែ ថ្ងៃ</label></div>
		      										<div class="col-sm-8" style="padding:0">
		      											<input type="text" value="<?= $army->army_date;?>"
		      											name="txt_army_date" id="army_date" class="form-control" >
		      										</div>
		      									
		      									</div>
		  									</div>
		  								</div>
					      				<!--information-->

				      				</div><!--panel body-->
			      				</div>
			    			</div>
			      		</div>
	      	</div> <!-- end row -->
				</div>
				<div class="tab-pane" id="Family">
					<div class="row">
		      		<div class="col-sm-6">
		      			<div class="panel panel-primary">
					      <div class="panel-heading text-center">ឪពុក ម្ដាយ</div>
					      	<div class="panel-body">
					      		<div class="form-group row">
									  <div class="col-sm-3"><label for="example-text-input">ឪពុកឈ្មោះ</label></div>
									  <div class="col-sm-9">
									   	<div class="col-sm-6" style="padding: 0px;">
									   	<input value="<?php echo $father->parents_name;?>" class="form-control" type="text" id="" name="txt_father_name">
									   	</div>
									   	<div class="col-sm-6" style="padding: 0px;">
									   		<div class="col-sm-4" style="padding: 0px;"><label for="example-text-input">ឆ្នាំកំណើត</label></div>
									   		<div class="col-sm-8" style="padding-right: 0px; ">
									   		<input value="<?php echo $father->birth_year;?>" class="form-control" type="text" id="" name="txt_father_dob_y">
									   		</div>
									   	</div>
									  </div>
								</div>
								<div class="form-group row">
								  <div class="col-sm-3"><label for="example-text-input">ស្ថានភាពរស់នៅ</label></div>
								  <div class="col-sm-9">
								  <?php $live; $died; if($father->alive == 1){
								  		$live = 'checked'; $died = '';
								  	}else{
							  			$live = ''; $died = 'checked';
							  		} ?>
								    	<div class="col-sm-6">
								    		<div class="radio">
											  <label><input <?= $live?> type="radio" name="radio_life" value="1">នៅរស់</label>
											</div>
								    	</div>
								    	<div class="col-sm-6">
								    		<div class="radio">
											  <label><input <?= $died?> type="radio" name="radio_life" value="0">ស្លាប់</label>
											</div>
								    	</div>
								  </div>
								</div>
								<div class="form-group row">
								  <div class="col-sm-3"><label for="example-text-input">ស្រុកកំណើត</label></div>
								  <div class="col-sm-9">
								    <input type="text-center" value="<?php echo $father->birth_place;?>"
								     name="txt_father_pob" class="form-control" >
								  </div>
								</div>
								<div class="form-group row">
								  <div class="col-sm-3"><label for="example-text-input">មុខរបរ</label></div>
								  <div class="col-sm-9">
								    <input class="form-control" value="<?php echo $father->occupation;?>"
								     type="text" id="" name="txt_father_job">
								  </div>
								</div>
								<div class="form-group row">
								  <div class="col-sm-3"><label for="example-text-input">ទីលំនោះបច្ចុប្បន្ន</label></div>
								  <div class="col-sm-9">
								    <input class="form-control" value="<?php echo $father->permanent_adr;?>"
								     type="text" id="" name="txt_father_adr">
								  </div>
								</div>
								<hr>
								<div class="form-group row">
									  <div class="col-sm-3"><label for="example-text-input">ម្ដាយឈ្មោះ</label></div>
									  <div class="col-sm-9">
									   	<div class="col-sm-6" style="padding: 0px;">
									   		<input class="form-control" value="<?php echo $mother->parents_name;?>"
									   		 type="text" id="" name="txt_mother_name">
									   	</div>
									   	<div class="col-sm-6" style="padding: 0px;">
									   		<div class="col-sm-4" style="padding: 0px;"><label for="example-text-input">ឆ្នាំកំណើត</label></div>
									   		<div class="col-sm-8" style="padding-right: 0px; ">
									   		<input class="form-control" value="<?php echo $mother->birth_year;?>"
									   		 type="text" id="" name="txt_mother_dob_y">
									   		</div>
									   	</div>
									  </div>
								</div>
								<?php $l; $d; if($mother->alive == 1){
								  		$l = 'checked'; $d​= '';
								  	}else{
							  			$d = ''; $d = 'checked';
							  		} ?>
								<div class="form-group row">
								  <div class="col-sm-3"><label for="example-text-input">ស្ថានភាពរស់នៅ</label></div>
								  <div class="col-sm-9">
								    	<div class="col-sm-6">
								    		<div class="radio">
											  <label><input <?php echo $l ?> type="radio" name="radio_life_mother" value="1">នៅរស់</label>
											</div>
								    	</div>
								    	<div class="col-sm-6">
								    	<div class="radio">
											  <label><input <?php echo $d ?> type="radio" name="radio_life_mother" value="0">ស្លាប់</label>
											</div>
								    	</div>
								  </div>
								</div>
								<div class="form-group row">
								  <div class="col-sm-3"><label for="example-text-input">ស្រុកកំណើត</label></div>
								  <div class="col-sm-9">
								    <input type="text-center" value="<?php echo $mother->birth_place;?>"
								    name="txt_pob_mother" class="form-control" >
								  </div>
								</div>
								<div class="form-group row">
								  <div class="col-sm-3"><label for="example-text-input">មុខរបរ</label></div>
								  <div class="col-sm-9">
								    <input class="form-control" type="text" value="<?php echo $mother->occupation;?>"
								    id="" name="txt_mother_job">
								  </div>
								</div>
								<div class="form-group row">
								  <div class="col-sm-3"><label for="example-text-input">ទីលំនោះបច្ចុប្បន្ន</label></div>
								  <div class="col-sm-9">
								    <input class="form-control" type="text" id="" value="<?php echo $mother->permanent_adr;?>"
								    name="txt_mother_adr">
								  </div>
								</div>
							</div> <!-- end panel body -->
					    </div>
					</div>

		      		<div class="col-sm-6">
		      			<div class="panel panel-primary">
					      <div class="panel-heading text-center">ប្រពន្ធ ប្ដី កូន</div>
					      <div class="panel-body">

					      		<div class="row">
					      			<div class="col-sm-2 text-center">
					      				<div class="form_sep">
											<img src="<?php echo site_url('../assets/upload/army/wife_'.$id.'.jpg') ?>" id="uploadprewife" style='width:120px; height:150px; margin-bottom:15px; border:1px solid #CCCCCC'>
												<input id="uploadImagewife" type="file" accept="image/*" name="userfilewife" onchange="PreviewImage_wife();" style="visibility:hidden; display:none;" /> <br/>
											<input type='button' class="btn btn-success" onclick="$('#uploadImagewife').click();" value='Browse'/>
							      		</div>
					      			</div>
					      			<div class="col-sm-10">
					      			<?php $s; $marry; if($army->status == 'រៀបការរួច'){
					      					$s = ''; $marry='checked';
					      				}else{
					      					$s = 'checked'; $marry='';
					      					} ?>
					      				<ul class="ul_spouse">
					      					<li class="sp_list">
					      						<input <?php echo $s; ?> type="radio" name="single" value="នៅលីវ"​ checked>នៅលីវ</label>
										    	<label><input <?php echo $marry; ?> type="radio" name="single" value="រៀបការរួច">រៀបការរួច</label>
					      					</li>
					      					<li class="sp_list">
					      						<label>នាមត្រកូល នាមខ្លួន</label>
					      						<input class="sp_name" value="<?= $spouse->name;?>" 
					      						type="text" name="txt_spouse_name"><label><input type="radio" name="radio_spouse" value="wife"​ checked>ត្រូវជាប្រពន្ធ</label>
										    	<label><input type="radio" name="radio_spouse" value="husband">ត្រូវជាប្ដី</label>
					      					</li>
					      					<li class="sp_list">
					      						<label>លិខិតអាពាហ៏ពីពាហ៏លេខ</label>
					      						<input class="sp_name" value="<?= $spouse->wedding_letter_num;?>"  type="text" name="txt_wed_num">
					      					</li>
					      					<li class="sp_list" style="height:40px">
					      						<div class="col-sm-12">
					      							<label>ចុះថ្ងៃទី</label>
					      							<input type="text" value="<?= $spouse->wedding_letter_date;?>"  name="txt_wed_date" id="wed_date">
					      						</div>
					      						
					      					</li>
					      					<li class="sp_list">
					      						<label>ទីលំនៅបច្ចុប្បន្ន</label>
					      						<input value="<?= $spouse->current_adr;?>" class="sp_name" type="text" name="txt_cur_adr" style="width:70%">
					      					</li>
					      				</ul>
					      			</div>
					      		</div>
					      		<hr>
					      		<br>

					      		<div class="row">
					      			<div class="col-sm-4">
					      				<label>ចំនួនកូន</label>
					      				<input value="<?php $ch_num = count($child);$work_num = count($work); echo $ch_num?>" class="txt_ch_name" type="text" name="txt_ch_num" id="ch_num" style="width:70%">
					      			</div>
					      			<div class="col-sm-4">
					      				<label>ស្រី</label>
					      				<input class="txt_ch_name" type="text" name="txt_chm_num" style="width:70%">
					      			</div>
					      			<div class="col-sm-4">
					      				<label>ប្រុស</label>
					      				<input class="txt_ch_name" type="text" name="txt_chf_num" style="width:70%">
					      			</div>
					      		</div>
					      		
					      		<?php $i; $n = count($child) ;for($i=1; $i<=$n; $i++){ ?>
					      		<div class="row child_row" style="padding-top: 10px;">
					      			<div class="col-sm-1">

					      				<label>កូនទី<?=$i;?></label>
					      			</div>
					      			<div class="col-sm-3">
					      				<label>ឈ្មោះ</label>
					      				<input value="<?= $child[$i-1]->child_name;?>" class="txt_ch_name" type="text" name="ch_name[]" style="width:70%">
					      			</div>
					      			<div class="col-sm-4">
					      				<label>ឆ្មាំកំណើត</label>
					      				<input value="<?= $child[$i-1]->birth_year;?>" class="txt_ch_name" type="text" name="ch_dob[]" style="width:70%">
					      			</div>
					      			<?php $m; $f; if($child[$i-1]->gender=='male'){$m='selected'; $f='';}else{$m=''; $f='selected';} ?>
					      			<div class="col-sm-2 text-center">
					      				<label>ភេទ</label>
					      				<select name="ch_gender[]">
					      					<option <?=$m?> value="male">ប្រុស</option>
					      					<option <?=$f?> value="female">ស្រី</option>
					      				</select>
					      			</div>
					      			<div class="col-sm-2 text-center">
					      				<a href="javascript:void(0)" class="btn btn-danger del_child">Delete</a>
					      			</div>
					      		</div>
					      		<?php } ?>
					      		<div class="child_form">
					      			<!-- generate child from script -->
					      		</div>
					      		<hr>
					      		<div class="col-sm-12 text-center">
					      			<h4>ក្នុងករណីមានប្រពន្ធ ឫ ប្ដីទី២ ត្រូវបញ្ជាក់បន្ថែមឱ្យបានច្បាស់ពីមូលហេតុ</h4>
					      		</div>
					      		<div class="col-sm-12 text-center">
					      			<textarea name="txt_sp_desc" rows = "8" style="width: 100%"><?= $spouse->spouse_desc;?></textarea>
					      		</div>
					      </div>
					    </div>
		      		</div>
	      		</div>
				</div>

				<div class="tab-pane" id="wrk_his">
					<div class="row" style="margin-left: 0;">
			      		<div class="col-sm-12">
			      			<div class="panel panel-primary">
						      <div class="panel-heading text-center"><h5>រយៈពេលការងារ</h5></div>
						      	<div class="panel-body">
							      	<div class="col-sm-12 pull-right">
						      			<h5>Select to Add Rows</h5>
						      			<select id="select">
						      				<option>0</option>
						      				<option>1</option>
						      				<option>2</option>
						      				<option>3</option>
						      				<option>4</option>
						      				<option>5</option>
						      				<option>6</option>
						      				<option>7</option>
						      				<option>8</option>
						      				<option>9</option>
						      				<option>10</option>
						      			</select>
						      		</div>
						      		<!-- work History -->
						      		
						      		<table class="table" id="myTable">
									    <thead>
									      <tr>
									        <th width="10%" class="text-center"><br>
									        	ពីថ្ងៃខែឆ្នាំ ដល់
									        </th>
									        <th width="10%" class="text-center">ថ្ងៃខែឆ្នាំ</th>
									        <th class="text-center"><h5>ឋានន្តរសក្ដិ មុខតំណែង កងឯកភាព</h5></th>
									        <th width="20%" class="text-center"><h5>ថ្នាក់សម្រេច</h5></th>
									      </tr>
									    </thead>
									    <tbody class="work_row">
									    <?php foreach ($work as $item) {?>
									      <tr>
									        <td class="text-center"><input value="<?php echo $item->start_date; ?>" 
									        style="width: 100%" type="text" name="txt_start_date[]" id="start_date"></td>
									        <td class="text-center"><input value="<?php echo $item->end_date; ?>" 
									         style="width: 100%" type="text" name="txt_end_date[]" id="end_date">
									        </td>
									        <td>
									        <input value="<?php echo $item->range_desc; ?>" type="text" 
									        style="width: 100%" rows = '3' name="txt_range_desc[]">
					      					</td>
									        <td><input value="<?php echo $item->eva_unit; ?>" style="width: 100%" align="center" type="text" name="txt_eva_unit[]">
									        </td>
									        <td><button onclick="deleteRow(this)" class="btn-danger">Delete</button></td>
									      </tr>
									    <?php } ?>
										    <tbody class="work_his">
										    	
										    </tbody>
									    </tbody>
									    
									</table>
						      		<!-- work History -->
								</div> <!-- end panel body -->
						    </div>
			      		</div>

			      		<div class="col-sm-12">
			      			<div class="panel panel-primary">
						      <div class="panel-heading text-center">
						      <h5>
						      ស្ថានភាពគ្រូសារឪពុកម្ដាយបង្កើត និង ផ្ទាល់ខ្លួន ធ្វើអ្វី នៅឯណា គ្រប់ជំនាន់
						      </h5></div>
						      	<div class="panel-body">
						      		<div class="row">
						      			<div class="col-sm-12">
						      				<h3>ឪពុក</h3>
						      				<textarea rows = '4' name="txt_father_desc" style="width: 100%"><?php echo $eva->father_desc; ?></textarea>
						      			</div>
						      			<div class="col-sm-12">
						      				<h3>ម្ដាយ</h3>
						      				<textarea rows = '4' name="txt_mother_desc" style="width: 100%"><?php echo $eva->mother_desc; ?></textarea>
						      			</div>
						      			<div class="col-sm-12">
						      				<h3>ផ្ទាល់ខ្លួន</h3>
						      				<textarea rows = '4' name="txt_personal_desc" style="width: 100%"><?php echo $eva->personal_desc; ?></textarea>
						      			</div>
						      		</div>
								</div> <!-- end panel body -->
						    </div>
			      		</div>
			      	</div>
				</div>

				<div class="tab-pane" id="evaluate">
					<div class="col-sm-12">
	      			<div class="panel panel-primary">
				      <div class="panel-heading text-center">
				      <h5>
				      សេចក្ដីសន្និដ្ធាន
				      </h5></div>
				      	<div class="panel-body">
				      		<div class="row">
				      			<div class="col-sm-12">
				      				<textarea rows = '10' name="txt_evaluation" style="width: 100%"><?php echo $eva->eva_desc; ?></textarea>
				      			</div>
				      		</div>
				      		<br>
				      		<div class="row">
				      			<div class="col-sm-5 text-center">
			      					<label>កាលបរិច្ឆេទ ឆ្នាំ ខែ ថ្ងៃ</label>
			      					<input value="<?php echo $eva->confirm_date; ?>" type="text-center" name="txt_confirm_date" id="confirm_date"><br>
			      					<h4>មេបញ្ជាការកងឯកភាព</h4>
			      					<input value="<?php echo $eva->commander_name; ?>" type="text-center" name="txt_commander_name">
				      			</div>
				      			<div class="col-sm-7 text-center">
			      					<label>ធ្វើនៅ ឆ្នាំ ខែ ថ្ងៃ</label>
			      					<input value="<?php echo $eva->commit_on; ?>" type="text-center" name="txt_commit_on" id="commit_on">
			      					<label>ធ្វើនៅ</label>
			      					<input value="<?php echo $eva->commit_at; ?>" type="text-center" name="txt_commit_at"​ style="width:50%; height: 30px;"> <br><br>
			      					<label>ហត្ថលេខា និង ស្នាមមេដៃរបស់សមីខ្លួន</label> <br>
			      					<input value="<?php echo $eva->commiter_name; ?>" type="text-center" name="txt_commiter_name">
				      			</div>
				      		</div>
						</div> <!-- end panel body -->
				    </div>
					<div class="pull-right">
						<a href="#"><button class="btn btn-danger">Cancel</button></a>
				    	<button type="submit" class="btn btn-success">Update</button>
					</div>
	      		</div>
				</div>
			</div>
			<!-- tab contents -->
			</form>
			<!------Soldier From-->
		</div>
</div>
<!--Modal  -->
<div class="modal fade" id="myModal_Emp_IDCard" data-backdrop=false>
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"><b>Warning</b></h4>
      </div>
      <div class="modal-body">
        <b class="message-body"></b>
      </div> 
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal">OK</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div>
<script type="text/javascript">

$(function(){
		$("#dob, #health_date, #range_date, #pos_date, #army_date, #wed_date, #start_date, #end_date, #confirm_date, #commit_on").datepicker({
	  		language: 'en',
	  		pick12HourFormat: true,
	  		format:'yyyy/mm/dd'
		});
});

function PreviewImage() {
    var oFReader = new FileReader();
    oFReader.readAsDataURL(document.getElementById("uploadImage").files[0]);

    oFReader.onload = function (oFREvent) {
        document.getElementById("uploadPreview").src = oFREvent.target.result;
        document.getElementById("uploadPreview").style.backgroundImage = "none";
    };
}

function PreviewImage_wife() {
    var oFReader = new FileReader();
    oFReader.readAsDataURL(document.getElementById("uploadImagewife").files[0]);

    oFReader.onload = function (oFREvent) {
        document.getElementById("uploadprewife").src = oFREvent.target.result;
        document.getElementById("uploadprewife").style.backgroundImage = "none";
    };
}

$('.txt_ch_name').change(function(){
	var ch_count = $("#ch_num").val();
	$('.child_form').html('');
	generate_child(ch_count);
})

function generate_child(ch){
	var val_ch = parseInt(<?php echo $ch_num ?>);
	var total = 0;
	for (var i = 1; i <= ch-val_ch; i++) {
		total = 
		$('.child_form').append('<div class="row child_row" style="padding-top: 10px;">'
						      			+'<div class="col-sm-1">'
						      				+'<label>កូនទី'+ (i+val_ch) +'</label>'
						      			+'</div>'
						      			+'<div class="col-sm-3">'
						      				+'<label>ឈ្មោះ</label>'
						      				+'<input class="txt_ch_name" type="text" name="ch_name[]" style="width:70%">'
						      			+'</div>'
						      			+'<div class="col-sm-4">'
						      				+'<label>ឆ្មាំកំណើត</label>'
						      				+'<input class="txt_ch_name" type="text" name="ch_dob[]" style="width:70%">'
						      			+'</div>'
						      			+'<div class="col-sm-4">'
						      				+'<label>ភេទ</label>'
						      				+'<select name="ch_gender[]">'
						      					+'<option value="male">ប្រុស</option>'
						      					+'<option value="female">ស្រី</option>'
						      				+'</select>'
						      			+'</div>'
						      		+'</div>');
	}
}
$('.del_child').click(function(){
	var d = $(this);
	d.closest('.child_row').remove();
});
function deleteRow(r) {
    var i = r.parentNode.parentNode.rowIndex;
    document.getElementById("myTable").deleteRow(i);
}
$('#select').change(function(){
	var row = $("#select").val();
	$('.work_his').empty();
	generate_work(row);
})
function generate_work(row){
	for (var i = 1; i <= row; i++) {
		$('.work_his').append(
			'<tr>'
		        +'<td class="text-center"><input type="text" name="txt_start_date[]" id="S_date"' 
		        +'style="width: 100%" type="text"></td>'
		        +'<td class="text-center"><input type="text" name="txt_end_date[]" id="E_date"'
		        +'style="width: 100%" type="text"></td>'
		        +'<td><input type="text" style="width: 100%" name="txt_range_desc[]"></td>'
		        +'<td><input style="width: 100%" align="center" type="text" name="txt_eva_unit[]"></td>'
		     +'</tr>'
			);
		
	}
	$(function(){
		$("#S_date, #E_date").datepicker({
	  		language: 'en',
	  		pick12HourFormat: true,
	  		format:'yyyy/mm/dd'
		});
	});	
}
</script>