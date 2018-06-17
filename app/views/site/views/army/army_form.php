
<style type="text/css">
	.child_order{
		margin-left: 15px;
	}
	.mr5{margin-right: 5px;}
	.child_order label{
	 margin-top: 10px;
	}
	.show{
		font-size: 20px;
		font-family: 'Khmer OS';
	}
	.for-label{
		margin-top: 7px;
		font-size: 16px;
		font-family: 'Khmer OS';
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
	.table_head{
		margin-top: 7px;
		font-size: 15px;
		font-family: 'Khmer OS Bokor';
	}
	.body_table{
		font-family: 'Khmer OS';
		font-size: 12px;
	}
	input{
		height: 30px;
	}
	.disable{display: none;}
	.sp_name{
		width: 40%;
		margin-right: 10px;
	}
	.col-sm-12, .col-sm-10, .col-sm-9{
		padding: 0;
	}
	.sp_list{
		padding-bottom: 5px;
	}
	.wrapper{
		font-family: 'Khmer OS';
	}
	input[type="radio"]{
		margin-top: -7px;
	}
	.pr10{
		padding-right: 10px;
	}
	.mb5{
		margin-bottom: 5px;
	}
	.form_sep{
		margin-bottom: 10px;
	}
	.form_sep label{
		width: 35%;
	    text-align: right;
	    padding-right: 2%;
	    padding-top: 10px;
	}
	.form_sep input[type="text"],.form_sep select{
		width: 65%;
	    display: inline;
	    float: right;
	}
	.pl5{
		padding-left: 5px;
	}
	.my-select{
		width: 20% !important;
		right: 45% !important;
		position: relative !important;
		height: 34px !important;
	}
	select.form-control{
		padding: 0 10px !important;
	}
	#pan-personal-body{
		height: 903px !important;
	}
	#pan-parents-body{
		height: 601px !important;
	}
	label.control-label{
		position: relative;
    	bottom: -10px;
	}
</style>

<?php 
	$chk_mission_abroad = "";
 ?>
<div class="wrapper">
	<div class="clearfix" id="main_content_outer">
	    <div id="main_content">
	      <div class="row result_info">
	      	<div class="col-xs-6">
		      	<strong>Soldier  Information</strong>
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
	      <?php 
	      	$link = site_url().'employee/army_record/insert';
	      	isset($id)?$link = site_url().'employee/army_record/update_army/'.$id:"";
	      ?>
	      	<form action="<?php echo $link;?>" method="post" enctype="multipart/form-data">
	      	<!-- tab contents -->
	      	<div class="tab-content">
				<div class="tab-pane active" id="personal">
					<div class="row">
			      		<div class="col-sm-12 text-center">
			      			<h1 class="kh-muol">បណ្ណ័ជីវប្រវត្តិសង្ខេប</h1>
			      			<h3>នាយទាហាន នាយទាហានរង ពលទាហាន</h3>
			      		</div>
			      	</div>
			      	<div class="row">
	      			<div class="col-sm-6">
	      				<div class="panel panel-primary">
	      					<div class="panel-heading">
	      						<h4 class="panel-title">ពត៌មានផ្ទាល់ខ្លួន</h4>
	      					</div>
	      					<?php 
	      						$src = site_url('../assets/upload/No_person.jpg?');
	      						if(isset($id)){
	      							$src = "assets/upload/thumb/".$id.".jpg";
	      							if(!file_exists(FCPATH.$src)){
							      		$src = site_url('../assets/upload/No_person.jpg');
							      	}else{
							      		$src = base_url().$src.'?';
							      	}
	      						}
	      					?>
	      					<div class="panel-body" id="pan-personal-body">
	      						<div class="row">
		      						<div class="col-sm-3 text-center">
		      							<label>រូបថត</label>
						      			<div class="form_sep text-center">
											<img src="<?php echo $src; ?>" id="uploadPreview" style='width:120px; height:150px; margin-bottom:15px; border:1px solid #CCCCCC'>
												<input id="uploadImage" type="file" accept="image/*" name="userfile" onchange="PreviewImage();" style="visibility:hidden; display:none;" /> <br/>
											<input style="width: 120px; float: none;" type='button' class="btn btn-success" onclick="$('#uploadImage').click();" value='Browse'/>
							      		</div>
						      		</div>
						      		<div class="col-sm-9" style="padding-left: 0;padding-right: 15px;">
						      			<div class="form_sep">
			      							<label>លេខ</label>
			      							<input type="text" name="txtsoldier_serial_number"
			      							value="<?=isset($id)?$army->serial_num:""?>" 
			      							class="form-control mb5">
			      						</div>
			      						<div class="form_sep">
			      							<label>អក្សរតម្កល់</label>
			      							<input type="text" name="txtsoldier_stored_letter" 
			      							value="<?=isset($id)?$army->stored_letter:""?>" 
			      							class="form-control">
			      						</div>

						      			<div class="form_sep">
			      							<label>អត្តលេខ</label>
			      							<input type="text" name="txtsoldier_id" id="soldier_id" 
			      							value="<?=isset($id)?$army->id_num:""?>" 
			      							class="form-control mb5">
			      						</div>
			      						<div class="form_sep">
			      							<label style="width: 35%">អត្តសញ្ញាណបណ្ណ័</label>
			      							<input style="width: 65%" type="text" name="txtssid" id="txtssid" 
			      							value="<?=isset($id)?$army->ssid:""?>"
			      							class="form-control mb5">
			      						</div>
			      						<div class="form_sep">
			      							<label>ប្រភេទឈាម</label>
			      							<input type="text" name="txtblood_type" id="txtblood_type"
			      							value="<?=isset($id)?$army->blood_type:""?>"
			      							class="form-control mb5">
			      						</div>
						      		</div>
					      		</div>
	      						<div class="form_sep">
	      							<label>នាមត្រកូល នាមខ្លួន</label>
	      							<input required type="text" name="txtfull_name" 
	      							value="<?=isset($id)?$army->full_name:""?>"
	      							id="fullname" class="form-control">
	      						</div>
	      						<div class="form_sep">
		      						<label>អក្សរឡាតាំង</label>
		      						<input type="text" name="txt_latin_fullname" 
		      						value="<?=isset($id)?$army->full_name_latin:""?>"
		      						id="latin_fullname" class="form-control">
		      					</div>
	      						<div class="form_sep">
		      						<label>ឈ្មោះពីកំណើត</label>
		      						<input type="text" name="name_from_birth" id="name_from_birth"
		      						value="<?=isset($id)?$army->name_from_birth:""?>"
		      						class="form-control ">
		      					</div>
		      					<div class="form_sep">
			      					<label>ឈ្មោះផ្សេងទៀត</label>
			      					<input type="text" name="txt_other_name" id="other_name"
			      					value="<?=isset($id)?$army->name_other:""?>"
			      					class="form-control">
		      					</div>
		      					<div class="form_sep">
			      					<label>ឆ្នាំកំណើត</label>
			      					<input type="text" name="dob" id="dob" 
			      					value="<?=isset($id)?$army->birth_date:""?>"
			      					class="form-control">
		      					</div>
		      					<div class="form_sep">
		      						<?php 
		      							$m = "";
		      							$f = "";
		      							if(isset($id)){
		      								if($army->gender=="ប្រុស"){
		      									$m="selected";
		      								}else{
		      									$f="selected";
		      								}
		      							}
		      						?>
			      					<label>ភេទ</label>
			      					<select name="cbo_gender" class="my-select">
										<option <?=$m?> value="ប្រុស">ប្រុស</option>
										<option <?=$f?> value="ស្រី">ស្រី</option>
									</select>
		      					</div>
		      					<div class="form_sep">
			      					<label>ស្រុកកំណើត</label>
			      					<input type="text" name="army_place_of_birth" 
			      					value="<?=isset($id)?$army->place_of_birth:""?>"
			      					id="army_place_of_birth" class="form-control">
		      					</div>
		      					<div class="form_sep">
			      					<label>ទីលំនៅបច្ចុប្បន្ន</label>
			      					<input type="text" name="army_address" id="army_address" 
			      					value="<?=isset($id)?$army->address:""?>"
			      					class="form-control">
		      					</div>
		      					<div class="form_sep">
			      					<label>ឋានន្ដរសក្ដិ</label>
			      					<select name="range_id" class="my-select">
										<?php
											
											foreach($ranges->result() as $range){
												$s="";
												if(isset($id) && $army->range_id==$range->range_id){
													$s = "selected";
												}
												echo "<option ".$s." value='".$range->range_id."'>".$range->range_name."</option>";
											}
										?>
									</select>
		      					</div>
		      					<div class="form_sep">
			      					<label>កាលបរិច្ឆេត</label>
			      					<input type="text" name="range_date" id="range_date"
			      					value="<?=isset($id)?$army->range_date:""?>" 
			      					class="form-control">
		      					</div>
		      					<div class="form_sep">
			      					<label>មុខតំណែង</label>
			      					<select name="txt_position" class="form-control">
										<?php 
											foreach($pos as $p){
												$s="";
												if(isset($id) && $army->position2==$p['army_pos_id']){
													$s = "selected";
												}
												echo "<option ".$s." value='".$p['army_pos_id']."'>".$p['pos_name']."</option>";
											}
										?>
									</select>
		      					</div>
		      					<div class="form_sep">
			      					<label>កាលបរិច្ឆេត</label>
			      					<input type="text" name="position_date" id="pos_date"
			      					value="<?=isset($id)?$army->position_date:""?>" class="form-control">
		      					</div>
	      						<div class="form_sep">
			      					<label>កងឯកភាព</label>
			      					<select name="txt_unit" class="form-control" style="padding: 0;">
      								<?php foreach ($unit as $item) {
      									$s="";
										if(isset($id) && $army->unit==$item->unit_id){
											$s = "selected";
										}
      									echo '<option '.$s.' value="'.$item->unit_id.'">'.$item->unit_short.'</option>';
      								} ?>	
      								</select>
		      					</div>
		      					<div class="form_sep">
			      					<label>ស្ថាប័ន</label>
			      					<select name="army_dep_id" class="form-control" style="padding: 0;">
      								<?php foreach ($dep as $d) {
      									$s="";
										if(isset($id) && $army->army_dep_id==$d->army_dep_id){
											$s = "selected";
										}
      									echo '<option '.$s.' value="'.$d->army_dep_id.'">'.$d->dep_name.'</option>';
      								} ?>	
      								</select>
		      					</div>
		      					<div class="row">
		      						<div class="form_sep col-sm-4">
				      					<label>ជនជាតិ</label>
				      					<input type="text" name="txt_ethnicity" 
				      					value="<?=isset($id)?$army->ethnicity:""?>" id="txt_ethnicity" class="form-control">
			      					</div>
			      					<div class="form_sep col-sm-4">
				      					<label>សញ្ជាតិ</label>
				      					<input type="text" name="txt_nationality" 
				      					value="<?=isset($id)?$army->nationality:""?>" class="form-control">
			      					</div>
			      					<div class="form_sep col-sm-4">
				      					<label>សាសនា</label>
				      					<input type="text" name="txt_religion" 
				      					value="<?=isset($id)?$army->religion:""?>" class="form-control">
			      					</div>
		      					</div>
		      					
	      					</div>
	      				</div>
	      			</div>
	      			<div class="col-sm-6">
	      				<div class="panel panel-primary" id="pan-personal">
	      					<div class="panel-heading">
	      						<h4 class="panel-title">ពត៌មានផ្ទាល់ខ្លួន</h4>
	      					</div>
	      					<div class="panel-body">
		      					<div class="form_sep">
			      					<label>កម្រិតវប្បធម៍</label>
			      					<input type="text" name="txt_edu_degree" id="txt_edu_degree"
			      					value="<?=isset($id)?$army->edu_degree:""?>" class="form-control ">
		      					</div>
		      					<div class="form_sep">
			      					<label>ភាសាបរទេស</label>
			      					<input type="text" name="txt_foriegn_lang" id="txt_foriegn_lang"
			      					value="<?=isset($id)?$army->foreign_lang:""?>" class="form-control ">
		      					</div>
		      					<div class="form_sep">
			      					<label>មុខជំនាញ ឯកទេស</label>
			      					<input type="text" name="txt_skill" id="txt_skill"
			      					value="<?=isset($id)?$army->skill:""?>"
			      					 class="form-control ">
		      					</div>
		      					<div class="form_sep">
			      					<label>ឆ្លងវគ្គសិក្សា (រយៈពេល)</label>
			      					<input type="text" name="txt_duration" id="txt_skill" 
			      					value="<?=isset($id)?$army->course_duration:""?>" class="form-control ">
		      					</div>
		      					<div class="form_sep">
			      					<label>ក្នុងស្រុក</label>
			      					<input type="text" name="txt_course_local"
			      					value="<?=isset($id)?$army->course_local:""?>" id="txt_course_local" class="form-control ">
		      					</div>
		      					<div class="form_sep">
			      					<label>ក្រៅស្រុក</label>
			      					<input type="text" name="txt_course_abroad" id="txt_course_abroad" value="<?=isset($id)?$army->course_abroad:""?>" class="form-control ">
		      					</div>
		      					
		      					<div class="form_sep">
			      					<label>ឆ្លងប្រយុទ្ធ បម្រើប្រយុទ្ធ (ថ្នាក់ខ្ពស់បំផុត)</label>
			      					<input type="text" name="txt_high_mission" id="txt_exp"
			      					value="<?=isset($id)?$army->highest_mission:""?>" class="form-control ">
		      					</div>
		      					<div class="form_sep">
			      					<label>សុខភាព របួស ពិការ</label>
			      					<input type="text" name="txt_health_desc"
			      					value="<?=isset($id)?$army->health_desc:""?>" id="txt_exp" class="form-control ">
		      					</div>
		      					<div class="form_sep">
			      					<label>កាលបរិច្ឆេត ឆ្នាំ ខែ ថ្ងៃ</label>
			      					<input type="text" name="txt_health_date" id="health_date"
			      					value="<?=isset($id)&&$army->health_date!="0000-00-00"?$army->health_date:""?>" class="form-control" >
		      					</div>
		      					<div class="form_sep">
			      					<label>សសើរ</label>
			      					<input type="text" name="txt_admire" id="txt_admire"
			      					value="<?=isset($id)?$army->admire:""?>" class="form-control ">
		      					</div>
		      					<div class="form_sep">
			      					<label>ពិន័យ ទណ្ឌកម្ម តុលាការ</label>
			      					<input type="text" name="txt_punishment"
			      					value="<?=isset($id)?$army->punishment:""?>" id="txt_punishment" class="form-control ">
		      					</div>
		      					<div class="form_sep">
			      					<label>ភិនភាគ ស្លាកស្នាម</label>
			      					<input type="text" name="txt_note" id="txt_identify"
			      					value="<?=isset($id)?$army->note:""?>" class="form-control ">
		      					</div>
		      					<div class="form_sep">
			      					<label>កំពស់</label>
			      					<input type="text" name="txt_height" id=""
			      					value="<?=isset($id)?$army->height:""?>" class="form-control ">
		      					</div>
		      					<div class="form_sep">
			      					<label>ចូលកងទព័ (កាលបរិច្ឆេត ឆ្នាំ ខែ ថ្ងៃ)</label>
			      					<input type="text" name="txt_army_date"
			      					value="<?=isset($id)&&$army->army_date!="0000-00-00"?$army->army_date:""?>" id="army_date" class="form-control ">
		      					</div>
		      					<hr>
		      					<div class="form_sep">
		      						<div class="row">

		      							<?php 
		      								if(isset($army->mission_abroad))
		      								{
		      									if($army->mission_abroad == 1)
		      										$chk_mission_abroad = "checked";
		      									else
		      										$chk_mission_abroad = "";
		      								}
		      							 ?>

		      							<label for="have_mission_abroad" class="col-sm-2">បេសសកម្មក្រៅប្រទេស</label>
		      							<input class="col-sm-1" type="checkbox" value="1" name="have_mission_abroad" id="have_mission_abroad" <?=$chk_mission_abroad?>>
		      						</div>
		      					</div>
		      					<div class="form_sep">
			      					<label>ប្រទេស</label>
			      					<select name="country" class="form-control abroad_mission" id="country">
			      						<?=$opt_con?>
			      					</select>
		      					</div>
		      					<div class="form_sep">
			      					<label>កង</label>
			      					<select name="group_id" class="form-control abroad_mission" id="group">
			      						
			      					</select>
		      					</div>
		      					<div class="form_sep">
			      					<label class="">ឋានន្តរសិក្ក អ.ស.ប</label>
			      					<select name="range2_id" class="form-control abroad_mission">
			      						<option value="0">ជ្រើសរើស</option>
										<?php 
											foreach($ranges->result() as $range){
												$s="";
												if(isset($id)&&$army->range2_id==$range->range_id){
													$s="selected";
												}
												echo "<option ".$s." value='".$range->range_id."'>".$range->range_name."</option>";
											}
										?>
									</select>
		      					</div>
		      					<div class="form_sep">
			      					<label>តួនាទី អ.ស.ប</label>
			      					<?php 
			      						$a_possition = "";
			      						if(isset($id))
			      						{
			      							if($army->position == "0")
			      								$a_possition = "";
			      							else
			      								$a_possition = $army->position;
			      						}
			      					 ?>
			      					<input type="text" name="txt_position2"​​ class="abroad_mission" value="<?=$a_possition?>">
			      					
		      					</div>
		      					<div class="form_sep">
			      					<label>លេខទូរសព្ទ័</label>
			      					<input type="text" name="phone" id="phone" 
			      					value="<?=isset($id)?$army->phone:""?>" class="form-control ">
		      					</div>
	      					</div>
	      				</div>
	      			</div>
	      		</div>

				</div>

				<div class="tab-pane" id="Family">
					<div class="row" style="display:table;width:100%;">
			      		<div class="col-sm-6">
			      			<div class="panel panel-primary">
		      					<div class="panel-heading">
		      						<h4 class="panel-title">ពត៌មានអំពី ឪពុក ម្ដាយ</h4>
		      					</div>
		      					<div class="panel-body" id="pan-parents-body">
		      						<form class="form-horizontal" action="/action_page.php">

									  <!-- <div class="row">
									  	<div class="form-group">
										    <label class="control-label col-sm-3 text-right" for="email">ឪពុកឈ្មោះ</label>
										    <div class="col-sm-9">
										      <input type="email" class="form-control" id="email">
										    </div>
										  </div>
									  </div>

									  <div class="row">
									  	<div class="form-group">
										    <label class="control-label col-sm-3 text-right" for="email">ឪពុកឈ្មោះ</label>
										    <div class="col-sm-9">
										      <input type="email" class="form-control" id="email">
										    </div>
										  </div>
									  </div> -->

									</form>
		      						<div class="form_sep row">
				      					<div class="col-sm-3">
				      						<label style="width: 100%">ឪពុកឈ្មោះ</label>
				      					</div>
				      					<div class="col-sm-9">
				      						<div class="col-sm-4">
	      										<input style="width: 100%" class="form-control" type="text" value="<?=isset($id)?$father->parents_name:""?>" id="" name="txt_father_name">
	      									</div>
	      									<div class="col-sm-8">
	      										<label style="width: 40%">ឆ្នាំកំណើត</label>
	      										<input style="width: 60%" type="text" class="pl5 form-control" 
	      										value="<?=isset($id)?$father->birth_year:""?>" name="txt_father_dob_y"​ id="txt_father_dob_y">

	      									</div>
				      					</div>
			      					</div>
			      					<div class="form_sep row">
				      					<div class="col-sm-3">
				      						<label style="width: 100%">ស្ថានភាពរស់នៅ</label>
				      					</div>
				      					<div class="col-sm-9">
				      						<div class="col-sm-6">
				      							<?php 
				      								$l = "";
				      								$d = "";
				      								if(isset($id)){
				      									if($father->alive==1){
				      										$l = "checked";
				      									}else{
				      										$d = "checked";
				      									}
				      								}
				      							?>
									    		<div class="radio" style="margin-top: 0">
												  <label><input <?=!isset($id)?"checked":""?> type="radio" name="radio_life"
												  <?=$l?> value="1">នៅរស់</label>
												</div>
									    	</div>
									    	<div class="col-sm-6">
									    	<div class="radio" style="margin-top: 0">
												  <label><input <?=$d?> type="radio" name="radio_life" value="0">ស្លាប់</label>
												</div>
									    	</div>
				      					</div>
			      					</div>
			      					<div class="form_sep">
				      					<label>ស្រុកកំណើត</label>
				      					<input type="text" name="txt_father_pob"
				      					value="<?=isset($id)?$father->birth_place:""?>" class="form-control" >
			      					</div>
			      					<div class="form_sep">
				      					<label>មុខរបរ</label>
				      					<input value="<?=isset($id)?$father->occupation:""?>" class="form-control" type="text" id="" name="txt_father_job">
			      					</div>
			      					<div class="form_sep">
				      					<label>ទីលំនោះបច្ចុប្បន្ន</label>
				      					<input class="form-control" type="text" id=""
				      					value="<?=isset($id)?$father->permanent_adr:""?>" name="txt_father_adr">
			      					</div>
			      					<hr>
			      					<div class="form_sep row">
				      					<div class="col-sm-3">
				      						<label style="width: 100%">ម្ដាយឈ្មោះ</label>
				      					</div>
				      					<div class="col-sm-9">
				      						<div class="col-sm-4">
	      										<input style="width: 100%" class="form-control" type="text" id=""
	      										value="<?=isset($id)?$mother->parents_name:""?>" name="txt_mother_name">
	      									</div>
	      									<div class="col-sm-8">
	      										<label style="width: 40%">ឆ្នាំកំណើត</label>
	      										<input style="width: 60%" type="text" class="pl5 form-control"
	      										value="<?=isset($id)?$mother->birth_year:""?>" name="txt_mother_dob_y"​ id="txt_mother_dob_y">

	      									</div>
				      					</div>
			      					</div>
			      					<div class="form_sep row">
				      					<div class="col-sm-3">
				      						<label style="width: 100%">ស្ថានភាពរស់នៅ</label>
				      					</div>
				      					<div class="col-sm-9">
				      						<?php 
			      								$l = "";
			      								$d = "";
			      								if(isset($id)){
			      									if($mother->alive==1){
			      										$l = "checked";
			      									}else{
			      										$d = "checked";
			      									}
			      								}
			      							?>
				      						<div class="col-sm-6">
									    		<div class="radio" style="margin-top: 0">
												  <label><input <?=!isset($id)?"checked":""?> type="radio" name="radio_life_mother"
												  <?=$l?> value="1">នៅរស់</label>
												</div>
									    	</div>
									    	<div class="col-sm-6">
									    	<div class="radio" style="margin-top: 0">
												  <label><input type="radio" <?=$d?> name="radio_life_mother" value="0">ស្លាប់</label>
												</div>
									    	</div>
				      					</div>
			      					</div>
			      					<div class="form_sep">
				      					<label>ស្រុកកំណើត</label>
				      					<input type="text" name="txt_pob_mother"
				      					value="<?=isset($id)?$mother->birth_place:""?>"  class="form-control" >
			      					</div>
			      					<div class="form_sep">
				      					<label>មុខរបរ</label>
				      					<input class="form-control" type="text" id=""
				      					value="<?=isset($id)?$mother->occupation:""?>" name="txt_mother_job">
			      					</div>
			      					<div class="form_sep">
				      					<label>ទីលំននៅបច្ចុប្បន្ន</label>
				      					<input class="form-control" type="text" id=""
				      					value="<?=isset($id)?$mother->permanent_adr:""?>" name="txt_mother_adr">
			      					</div>
		      					</div>
		      				</div>
						</div>

		      		<div class="col-sm-6">
		      			<div class="panel panel-primary">
					      	<div class="panel-heading text-center">ប្រពន្ធ ប្ដី កូន</div>
					      	<div class="panel-body">
					      		<div class="row">
					      			<div class="col-sm-3 text-center" style="padding: 0">
					      				<?php 
				      						$src_wife = site_url('../assets/upload/No_person.jpg');
				      						if(isset($id)){
				      							$src_wife = "assets/upload/wife/wife_".$id.".jpg";
				      							if(!file_exists(FCPATH.$src_wife)){
										      		$src_wife = site_url('../assets/upload/No_person.jpg');
										      	}else{
										      		$src_wife = base_url().$src_wife.'?'.rand(0,100);
										      	}
				      						}
				      					?>
					      				<div class="form_sep">
											<img src="<?php echo $src_wife ?>" id="uploadprewife" style='width:120px; height:150px; margin-bottom:15px; border:1px solid #CCCCCC'>
												<input id="uploadImagewife" type="file" accept="image/*" name="userfilewife" onchange="PreviewImage_wife();" style="visibility:hidden; display:none;" /> <br/>
											<input type='button' class="btn btn-success" onclick="$('#uploadImagewife').click();" value='Browse'/>
							      		</div>
					      			</div>
					      			<div class="col-sm-9">
					      				<div class="form_sep row">
					      					<div class="col-sm-4">
					      						<label style="width: 100%">ស្ថានភាពគ្រួសារ</label>
					      					</div>
					      					<?php 
			      								$s = "";
			      								$m = "";
			      								if(isset($id)){
			      									if($army->status=="រៀបការរួច"){
			      										$m = "checked";
			      									}else{
			      										$s = "checked";
			      									}
			      								}
			      							?>
					      					<div class="col-sm-8">
					      						<div class="col-sm-6">
										    		<div class="radio" style="margin-top: 0">
													  <label><input <?=!isset($id)?"checked":""?>
													  <?=$s?> type="radio" name="single" value="នៅលីវ"​>នៅលីវ</label>
													</div>
										    	</div>
										    	<div class="col-sm-6">
										    	<div class="radio" style="margin-top: 0">
													  <label style="width: 100%"><input type="radio" 
													  	<?=$m?> name="single" value="រៀបការរួច">រៀបការរួច</label>
													</div>
										    	</div>
					      					</div>
				      					</div>
				      					<?php 
		      								$h = "";
		      								$w = "";
		      								$sp_name = "";
		      								$wed_letter = "";
		      								$wed_letter_date = "";
		      								$sp_adr = "";
		      								$spouse_desc = "";
		      								$sp_birth_year = "";

		      								if(isset($id) && $army->status=="រៀបការរួច" && count($spouse>0)){
		      									$sp_name = $spouse->name;
		      									$wed_letter = $spouse->wedding_letter_num;
			      								$wed_letter_date = $spouse->wedding_letter_date;
			      								$sp_adr = $spouse->current_adr;
			      								$sp_birth_year = $spouse->spouse_birth_year;
			      								$spouse_desc = $spouse->spouse_desc;
		      									if($spouse->who_is=='wife'){
		      										$w = "checked";
		      									}else{
		      										$h = "checked";
		      									}
		      								}
		      							?>
				      					<div class="form_sep row">
					      					<div class="col-md-4">
					      						<label style="width: 100%">នាមត្រកូល នាមខ្លួន</label>
					      					</div>
					      					<div class="col-sm-8" style="padding: 0">
					      						<div class="col-lg-4" style="padding: 0">
		      										<input style="width: 100%" class="sp_name form-control"
		      										value="<?=$sp_name?>" type="text" name="txt_spouse_name">
		      									</div>
		      									<div class="col-lg-8">
		      										<div class="col-sm-6" style="padding: 0">
											    		<div class="radio" style="margin-top: 0">
														  <label style="width: 100%">
														  	<input <?=!isset($id)?"checked":$w?>
														  	type="radio" name="radio_spouse" 
														  	value="wife"​>ជាប្រពន្ធ</label>
														</div>
											    	</div>
											    	<div class="col-sm-6" style="padding: 0">
											    	<div class="radio" style="margin-top: 0">
														  <label style="width: 100%"><input type="radio" name="radio_spouse"
														  	<?=$h?>
														  value="husband">ជាប្ដី</label>
														</div>
											    	</div>
		      									</div>
					      					</div>
				      					</div>
				      					
					      				<div class="form_sep">
					      					<label style="width: 37%">លិខិតអាពាហ៏ពីពាហ៏លេខ</label>
					      					<input style="width: 60%;margin-right: 2%;"
					      					value="<?=$wed_letter?>" type="text" name="txt_wed_num" id="txt_wed_num" class="form-control ">
				      					</div>
				      					<div class="form_sep">
					      					<label style="width: 37%">ចុះថ្ងៃទី</label>
					      					<input style="width: 60%;margin-right: 2%;"
					      					value="<?=$wed_letter_date?>" type="text" name="txt_wed_date" id="wed_date" class="form-control ">
				      					</div>
				      					<div class="form_sep">
					      					<label style="width: 37%">ទីលំនៅបច្ចុប្បន្ន</label>
					      					<input style="width: 60%;margin-right: 2%;"
					      					value="<?=$sp_adr?>" type="text" name="txt_cur_adr" class="form-control ">
				      					</div>
				      					<div class="form_sep">
					      					<label style="width: 37%">ឆ្នាំកំណើត</label>
					      					<input style="width: 60%;margin-right: 2%;" type="text" name="spouse_birth_year"
					      					value="<?=$sp_birth_year?>" class="form-control ">
				      					</div>
					      			</div>
					      		</div>
					      		<hr>
					      		<?php 
					      			$male_child = 0;
					      			$female_child = 0;
					      			$child_count = 0;
					      			$child_row = "";
					      			$disabled = "";
					      			if(isset($id) && count($child)>0){
					      				$child_count = count($child);
					      				$i = 1;
					      				$disabled = "disabled";
					      				foreach($child as $row){
					      					$m = "";
					      					$f = "";
					      					if($row->gender=="female"){
					      						$female_child+=1;
					      						$f = "selected";
					      					}else if($row->gender=="male"){
					      						$male_child+=1;
					      						$m = "selected";
					      					}
					      					$child_row .= '
					      					<div id="'.$row->child_id.'" class="row div_child_row" style="padding-top: 10px;">
								      			<div class="col-sm-1 child_order">
								      				<label>កូនទី'.$i.'</label>
								      			</div>
								      			<div class="col-sm-3">
								      				<label class="mr5">ឈ្មោះ</label>
								      				<input class="txt_ch_name form-control" type="text" name="ch_name[]"
								      				value="'.$row->child_name.'" style="width:70%">
								      			</div>
								      			<div class="col-sm-4">
								      				<label class="mr5">ឆ្មាំកំណើត</label>
								      				<input class="txt_ch_name form-control" type="text" name="ch_dob[]" 
								      				value="'.$row->birth_year.'" style="width:70%">
								      			</div>
								      			<div class="col-sm-2">
								      				<label class="mr5">ភេទ</label>
								      				<select name="ch_gender[]" class="form-control">
								      					<option '.$m.' value="male">ប្រុស</option>
								      					<option '.$f.' value="female">ស្រី</option>
								      				</select>
								      			</div>
								      			<button onclick="del_ch('.$row->child_id.')" type="button" style="width: 6%;margin-top: 20px;" class="btn btn-danger col-sm-1 glyphicon glyphicon-minus text-center">
					      						</button>
								      		</div>
					      					';
					      				$i++;}
					      			}
					      		?>
					      		<div class="row">
					      			<div class="col-sm-4">
					      				<label>ចំនួនកូន</label>
					      				<input <?=$disabled?> class="txt_ch_num pl5 form-control" type="text" name="txt_ch_num"
					      				value="<?=$child_count?>" id="ch_num" style="width:60%">
					      			</div>
					      			<div class="col-sm-4">
					      				<label>ស្រី</label>
					      				<input class="txt_ch_name pl5 form-control" type="text"
					      				value="<?=$female_child?>" name="txt_chm_num" style="width:70%">
					      			</div>
					      			<?php if(isset($id) && count($child)>0){ ?>
					      			<div class="col-sm-3">
					      				<label>ប្រុស</label>
					      				<input class="txt_ch_name pl5 form-control" type="text"
					      				value="<?=$male_child?>" name="txt_chf_num" style="width:70%;padding: 0">
					      			</div>
					      			<button onclick="add_child();" type="button" style="width: 6%" class="btn btn-success col-sm-1 glyphicon glyphicon-plus text-center">
					      			</button>
					      			<?php }else{ ?>
					      			<div class="col-sm-4">
					      				<label>ប្រុស</label>
					      				<input class="txt_ch_name pl5 form-control" type="text"
					      				value="<?=$male_child?>" name="txt_chf_num" style="width:70%;padding: 0">
					      			</div>
					      			<?php } ?>
					      		</div>
					      		
					      		<div class="row child_form">
					      			<?=$child_row?>
					      		</div>
					      		<hr>
					      		<div class="col-sm-12 text-center">
					      			<h4>ក្នុងករណីមានប្រពន្ធ ឫ ប្ដីទី២ ត្រូវបញ្ជាក់បន្ថែមឱ្យបានច្បាស់ពីមូលហេតុ<?php echo $sp_name ?></h4>
					      		</div>
					      		<div class="col-sm-12 text-center">
					      			<textarea name="txt_sp_desc" class="form-control" rows = "8" style="width: 100%">
					      				<?php echo $spouse_desc ?>
					      			</textarea>
					      		</div>
					      </div>
					    </div>
		      		</div>
	      			</div>
				</div>

				<div class="tab-pane" id="wrk_his">
					<div class="row" style="margin-left: 0px;">
			      		<div class="col-sm-12">
			      			<div class="panel panel-primary">
						      <div class="panel-heading text-center"><h5>រយៈពេលការងារ</h5></div>
						      	<div class="panel-body">
						      		<div class="col-sm-12 pull-right">
						      			<?php if(!isset($id)){ ?>
						      			<h5>Select Rows</h5>
						      			<select id="select">
						      				<?php
						      					$count_work = 0;
						      					if(isset($id) && count($work)>0){
						      						$count_work = count($work);
						      					} 
						      					for($i=1;$i<=30;$i++){
						      						$s = $count_work==$i?"selected":"";
						      						echo "<option ".$s.">".$i."</option>";
						      					}
						      				?>
						      			</select>
						      			<?php }else{ ?>
							      		<button onclick="add_work();" type="button" style="width: 6%" class="btn btn-success col-sm-1 glyphicon glyphicon-plus text-center">
						      			</button>
						      			<?php } ?>
						      		</div>
						      		<table class="table">
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
									    <?php
									    	$tr_work = ""; 
									    	if(isset($id) && count($work)>0){
									    		foreach($work as $w){
									    			$tr_work .= '
									    				<tr class="tr_work" id='.$w->work_id.'>
													        <td class="text-center">
													        	<input style="width: 100%" type="text" 
													        	value='.$w->start_date.'
													        	name="txt_start_date[]" id="start_date"> 
													        </td>
													        <td class="text-center">
													        	<input style="width: 100%" type="text" 
													        	value='.$w->end_date.' name="txt_end_date[]" id="end_date">
													        </td>
													        <td>
														        <input type="text" style="width: 100%" rows ="3"
												value="'.$w->range_desc.'" name="txt_range_desc[]"/>
										      					</td>
													        <td>
													        	<input style="width: 100%" 
					value="'.$w->eva_unit.'" align="center3" type="text" name="txt_eva_unit[]">
													        </td>
													        <td>
													        	<button onclick="del_work('.$w->work_id.')" type="button" class="btn btn-danger glyphicon glyphicon-minus text-center">
					      										</button>
													        </td>
													      </tr>
									    			';
									    		}
									    	}
									    ?>
									    <tbody class="work_his">
									    	<?php echo $tr_work ?>
									      <!-- <tr>
									        <td class="text-center">
									        	<input style="width: 100%" type="text" name="txt_start_date" id="start_date"> 
									        </td>
									        <td class="text-center">
									        	<input style="width: 100%" type="text" name="txt_end_date" id="end_date">
									        </td>
									        <td>
										        <input type="text" style="width: 100%" rows = '3' name="txt_range_desc">
						      					</td>
									        <td>
									        	<input style="width: 100%" align="center" type="text" name="txt_eva_unit">
									        </td>
									      </tr> -->
									    </tbody>
									</table>
								</div> <!-- end panel body -->
						    </div>
			      		</div>

			      		<div class="col-sm-12">
			      			<div class="panel panel-primary">
						      <div class="panel-heading text-center">
						      <h5>
						      ស្ថានភាពគ្រូសារឪពុកម្ដាយបង្កើត និង ផ្ទាល់ខ្លួន ធ្វើអ្វី នៅឯណា គ្រប់ជំនាន់
						      </h5></div>
						      <?php
						      $fa = "";
						      $mo = "";
						      $personal = "";
						      $eva_desc = "";
						      $confirm_date = "";
						      $commander_name = "";
						      $commit_on = "";
						      $commit_at = "";
						      $commiter_name = "";

						      if(isset($eva)){
						      	$fa = $eva->father_desc;
						      	$mo = $eva->mother_desc;
						      	$personal = $eva->personal_desc;
						      	$confirm_date = $eva->confirm_date;
						      	$commander_name = $eva->commander_name;
						      	$commit_on = $eva->commit_on;
						      	$commit_at = $eva->commit_at;
						      	$commiter_name = $eva->commiter_name;
						      	$eva_desc = $eva->eva_desc;
						      }
						      ?>
						      	<div class="panel-body">
						      		<div class="row" style="margin:10px;">
						      			<div class="col-sm-12">

						      					<h3>ឪពុក</h3>
							      				<textarea rows = '4' class="form-control" name="txt_father_desc" style="width: 100%">
							      					<?=$fa?>
							      				</textarea>
						      			
						      			</div>
						      			<div class="col-sm-12">
						      				<h3>ម្ដាយ</h3>
						      				<textarea rows = '4' class="form-control"  name="txt_mother_desc" style="width: 100%">
						      					<?=$mo?>
						      				</textarea>
						      			</div>
						      			<div class="col-sm-12">
						      				<h3>ផ្ទាល់ខ្លួន</h3>
						      				<textarea rows = '4' class="form-control"  name="txt_personal_desc" style="width: 100%">
						      					<?=$personal?>
						      				</textarea>
						      			</div>
						      		</div>
								</div> <!-- end panel body -->
						    </div>
			      		</div>
			      	</div>
				</div>

				<div class="tab-pane" id="evaluate">
					<div class="col-sm-12" style="padding-right: 0px;">
		      			<div class="panel panel-primary">
					      <div class="panel-heading text-center">
					      <h5>
					      សេចក្ដីសន្និដ្ធាន
					      </h5></div>
					      	<div class="panel-body">
					      		<div class="row" style="margin:10px;">
					      			<div class="col-sm-12">
					      				<textarea rows = '10' class="form-control" name="txt_evaluation" style="width: 100%">
					      					<?=$eva_desc?>
					      				</textarea>
					      			</div>
					      		</div>
					      		<br>
					      		<div class="row">
					      			<div class="col-md-4">
				      					<label>កាលបរិច្ឆេទ ឆ្នាំ ខែ ថ្ងៃ</label>
				      					<input class="form-control" type="text" name="txt_confirm_date" value="<?=$confirm_date?>" id="confirm_date"><br>
					      			</div>
					      			<div class="col-md-4">
					      				<label>មេបញ្ជាការកងឯកភាព</label>
				      					<input class="form-control" value="<?=$commander_name?>" type="text" name="txt_commander_name">
					      			</div>
					      			<div class="col-md-4">
				      					<label>ធ្វើនៅ ឆ្នាំ ខែ ថ្ងៃ</label>
				      					<input class="form-control" value="<?=$commit_on?>" type="text" name="txt_commit_on" id="commit_on">
					      			</div>
					      		</div>
					      		<div class="row">
								   <div class="col-md-4">
					      				<label>ធ្វើនៅ</label>
				      					<input class="form-control" value="<?=$commit_at?>" type="text" name="txt_commit_at"​>
					      			</div>
					      			<div class="col-md-4">
					      				<label>ហត្ថលេខា និង ស្នាមមេដៃរបស់សមីខ្លួន</label> <br>
				      					<input class="form-control" type="text" value="<?=$commiter_name?>" name="txt_commiter_name">
					      			</div>
							</div>
							</div>
							
							 <!-- end panel body -->
					    </div>
						<div class="pull-right">
							<a href="#"><button class="btn btn-danger">Cancel</button></a>
					    	<button type="submit" class="btn btn-success"><?=isset($army)?"Update":"Save"?></button>
						</div>
	      			</div>
				</div>
				</div>
			</div>
			<!-- tab contents -->
			</form>
			<!------Soldier From-->
		</div>
</div>
<script type="text/javascript">

$(document).ready(function(){
	disable_mission_abroad();

	$("#have_mission_abroad").click(function(){
		disable_mission_abroad();;
	});
	
});

$(function(){
	$("#dob, #health_date, #range_date, #pos_date, #army_date, #wed_date, #start_date, #end_date, #confirm_date, #commit_on").datepicker({
  		language: 'en',
  		pick12HourFormat: true,
  		format:'yyyy-mm-dd'
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

$(function(){
	


	$('#emp_register').parsley();
	getPosition();

	$("#dob,#employed_date,#resigned_date").datepicker({
  		language: 'en',
  		pick12HourFormat: true,
  		format:'yyyy-mm-dd'
	});

	$(".nationality").on("change", function(){
		var get_value = $(this).val();
		//alert(get_value);
		validate_foriegn(get_value);
		window.getSelection().removeAllRanges();
	});
	//------is_foreigner------------
	$(".is_foreigner").on("click", function(){
		var get_value = $("#nationality").val();
		validate_foriegn(get_value);
	});

	function validate_foriegn(get_value){
		var get_national = get_value.toLowerCase();
		var is_yes = $(".is_yes").val();
		var is_no = $(".is_no").val();
		if( get_national =="cambodia" || get_national =="cambodian" || get_national == "khmer" || get_national ==""  ) {
			$(".is_no").attr("checked", true);
			$(".is_yes").attr("checked", false);
		}else{
			$(".is_yes").attr("checked", true);
			$(".is_no").attr("checked", false);
		}
	}
	//------Check Duplicate Employee ID-------
	$("#empcode").on("change", function(){
		var empcode_val = $(this).val();
		$.ajax({
			type:"post",
			url:"<?php echo $_SERVER['PHP_SELF']?>",
			data:{
				act_empcode_val:1,
				empcode_val:empcode_val
			},
			success:function(data){
				if( data ==1 ){
					$(".message-body").text("You have enter Duplicate ID, Please try another Employee ID!");
					$("#myModal_Emp_IDCard").modal('show');
					var empcode = $("#empcode_hidden").val();
					$("#empcode").val(empcode).focus();
					return false;
				}
			}
		});
	});
	
	//------ Chage Employee Type-----------
	$("#emp_type").on("change", function(){		
		//getposition();
	});

	function getPosition(selected){
		$.ajax({
			type:"post",
			url:"<?php echo site_url('employee/employee/getPosition'); ?>",
			data:{
				posid:selected
			},
			success: function(data){				
				$("#pos_id").html(data);
			}
		});
	}
	//------Check Duplicate ID Card-----------
	$("#idcard").on("change", function(){
		var idcard_val = $(this).val();
		$.ajax({
			type:"post",
			url:"<?php echo $_SERVER['PHP_SELF'];?>",
			data:{
				act_idcard_val:1,
				idcard_val:idcard_val
			},
			success:function(data){
				if( data ==1 ){
					$(".message-body").text("You have enter ID Card, Please try another ID Card!");
					$("#myModal_Emp_IDCard").modal('show');
					$("#idcard").val('').select();
					return false;
				}
			}
		});
	});

	//----------Validate Leave School----
	$("#leave_school").on("change", function(){
		var get_val = $(this).val();
		if(get_val == 0 ){
			$("#sh_reason").fadeOut("slow");
		}else if(get_val == 1){
			$("#sh_reason").fadeIn("slow");
		}

	});

	$("#village,#commune,#district,#province").on("change", function(){
		perm_adr();
	});
});

function perm_adr(){
	var village = $("#village").val();
	var commune = $("#commune").val();
	var district = $("#district").val();
	var province = $("#province").val();
	var get_val = "";
	
	if( village !="" && commune !=""){
		get_val +=village+", ";
	}else{
		get_val +=village;
	}

	if( commune != "" && district !=""){
		get_val +=commune+", ";
	}else{
		get_val +=commune;
	}

	if( district != "" && province !="" ){
		get_val +=district+", ";
	}else{
		get_val +=district;
	}
	
	if( province != ""){
		get_val +=province;
	}
	$("#perm_adr").val(get_val);
}

$('.txt_ch_num').change(function(){
	var ch_count = $("#ch_num").val();
	$('.child_form').html('');
	generate_child(ch_count);
})

function generate_child(ch){
	for (var i = 1; i <= ch; i++) {
		
		$('.child_form').append('<div class="row" style="padding-top: 10px;">'
						      			+'<div class="col-sm-1 child_order">'
						      				+'<label>កូនទី'+i+'</label>'
						      			+'</div>'
						      			+'<div class="col-sm-3">'
						      				+'<label class="mr5">ឈ្មោះ</label>'
						      				+'<input class="txt_ch_name" type="text" name="ch_name[]" style="width:70%">'
						      			+'</div>'
						      			+'<div class="col-sm-4">'
						      				+'<label class="mr5">ឆ្មាំកំណើត</label>'
						      				+'<input class="txt_ch_name" type="text" name="ch_dob[]" style="width:70%">'
						      			+'</div>'
						      			+'<div class="col-sm-3">'
						      				+'<label class="mr5">ភេទ</label>'
						      				+'<select name="ch_gender[]">'
						      					+'<option value="male">ប្រុស</option>'
						      					+'<option value="female">ស្រី</option>'
						      				+'</select>'
						      			+'</div>'
						      		+'</div>');
	}
}
$('#select').change(function(){
	var row = document.getElementById("select").value;
	//window.alert(row);
	$('.work_his').empty();
	generate_work(row);
})
function generate_work(num){
	for (var i = 1; i <= num; i++) {
		$('.work_his').append(
			'<tr>'
			+'<td class="text-center"><input style="width: 100%" type="text" name="txt_start_date[]" id="S_date"> </td>'
			+'<td class="text-center"><input style="width: 100%" type="text" name="txt_end_date[]" id="E_date"></td>'
			+'<td><input type="text" style="width: 100%" name="txt_range_desc[]"></td>'
			+'<td><input style="width: 100%" align="center1" type="text" name="txt_eva_unit[]"></td>'
			+'</tr>'
			);
		
	}
	$(function(){
		$("#S_date, #E_date").datepicker({
	  		language: 'en',
	  		pick12HourFormat: true,
	  		format:'yyyy-mm-dd'
		});
	});
}
$('#country').change(function(){
	var cid = $(this).val();
	setGroup(cid);
});
function setGroup(cid){
	var url = "<?=base_url().'employee/army_record/get_group'?>";
	var gid = "<?=isset($id)?$army->group_id:""?>";
	$.get(url,{cid:cid,gid:gid},function(data,status,xhr){
		$('#group').html(data);
	});
}
$(function(){
	$("#S_date, #E_date").datepicker({
  		language: 'en',
  		pick12HourFormat: true,
  		format:'yyyy-mm-dd'
	});
	setGroup($('#country').val());
	<?php if(!isset($id)){ ?>
	generate_work(1);
	<?php } ?>
});
function add_child(){
	var i = $('.div_child_row').length + 1;
	$('.child_form').append('<div id="'+i+'" class="row div_child_row" style="padding-top: 10px;">'
						      			+'<div class="col-sm-1 child_order">'
						      				+'<label>កូនទី'+i+'</label>'
						      			+'</div>'
						      			+'<div class="col-sm-3">'
						      				+'<label class="mr5">ឈ្មោះ</label>'
						      				+'<input class="txt_ch_name" type="text" name="ch_name[]" style="width:70%">'
						      			+'</div>'
						      			+'<div class="col-sm-4">'
						      				+'<label class="mr5">ឆ្មាំកំណើត</label>'
						      				+'<input class="txt_ch_name" type="text" name="ch_dob[]" style="width:70%">'
						      			+'</div>'
						      			+'<div class="col-sm-2">'
						      				+'<label class="mr5">ភេទ</label>'
						      				+'<select name="ch_gender[]">'
						      					+'<option value="male">ប្រុស</option>'
						      					+'<option value="female">ស្រី</option>'
						      				+'</select>'
						      			+'</div>'
					      				+'<button onclick="del_ch('+i+')" type="button" style="width: 6%;margin-top: 20px;" class="btn btn-danger col-sm-1 glyphicon glyphicon-minus text-center">'
				      					+'</button>'
						      		+'</div>');
}
function del_ch(id){
	$('div#'+id).remove();
}
function del_work(id){
	$('tr[id='+id+']').remove();
}
function add_work(){
	var id = $('.tr_work').length + 1;
	var tr_work = '<tr class="tr_work" id='+id+'>'
			        +'<td class="text-center">'
			        	+'<input style="width: 100%" type="text"'
			        	+'name="txt_start_date[]" id="start_date">' 
			        +'</td>'
			        +'<td class="text-center">'
			        	+'<input style="width: 100%" type="text"' 
			        	+'name="txt_end_date[]" id="end_date">'
			        +'</td>'
			        +'<td>'
				        +'<input type="text" style="width: 100%" rows ="3"'
				        +'name="txt_range_desc[]">'
      					+'</td>'
			        +'<td>'
			        	+'<input style="width: 100%"' 
			        	+'align="center2" type="text" name="txt_eva_unit[]">'
			        +'</td>'
			        +'<td>'
			        	+'<button onclick="del_work('+id+')"'
			        	+'type="button" class="btn btn-danger glyphicon glyphicon-minus text-center">'
						+'</button>'
			        +'</td>'
			      +'</tr>'
			;

	$('.work_his').append(tr_work);
	$('input[name="txt_start_date[]"], input[name="txt_end_date[]"]').datepicker({
  		language: 'en',
  		pick12HourFormat: true,
  		format:'yyyy-mm-dd'
	});
}

function disable_mission_abroad()
{
	if($('#have_mission_abroad').is(':checked'))
	{
		$(".abroad_mission").prop( "disabled",false);
	}
	else
	{
		$(".abroad_mission").prop( "disabled",true);
	}
	
}

function enable_mission_abroad()
{
	$(".abroad_mission").prop( "disabled",false);
}
</script>