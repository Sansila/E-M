<?php $this->load->model('employee/modarmy','m_army'); ?>
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
		width: 25%;
	    text-align: right;
	    padding-right: 2%;
	    padding-top: 10px;
	}
	.form_sep input[type="text"],.form_sep select{
		width: 75%;
	    display: inline;
	    float: right;
	}
	.pl5{
		padding-left: 5px;
	}
</style>
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
	      	<form action="<?php echo site_url().'employee/army_record/insert';?>" method="post" enctype="multipart/form-data">
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
	      					<div class="panel-body">
	      						<div class="row">
		      						<div class="col-sm-4 text-center">
		      							<label>រូបថត</label>
						      			<div class="form_sep text-center">
											<img src="<?php echo site_url('../assets/upload/No_person.jpg') ?>" id="uploadPreview" style='width:120px; height:150px; margin-bottom:15px; border:1px solid #CCCCCC'>
												<input id="uploadImage" type="file" accept="image/*" name="userfile" onchange="PreviewImage();" style="visibility:hidden; display:none;" /> <br/>
											<input style="width: 120px; float: none;" type='button' class="btn btn-success" onclick="$('#uploadImage').click();" value='Browse'/>
							      		</div>
						      		</div>
						      		<div class="col-sm-8">
						      			<div class="form_sep">
			      							<label>លេខ</label>
			      							<input type="text" name="txtsoldier_serial_number" class="form-control mb5">
			      						</div>
			      						<div class="form_sep">
			      							<label>អក្សរតម្កល់</label>
			      							<input type="text" name="txtsoldier_stored_letter" class="form-control">
			      						</div>

						      			<div class="form_sep">
			      							<label>អត្តលេខ</label>
			      							<input type="text" name="txtsoldier_id" id="soldier_id" class="form-control mb5">
			      						</div>
			      						<div class="form_sep">
			      							<label>អត្តសញ្ញាណបណ្ណ័</label>
			      							<input type="text" name="txtssid" id="txtssid" class="form-control mb5">
			      						</div>
			      						<div class="form_sep">
			      							<label>ប្រភេទឈាម</label>
			      							<input type="text" name="txtblood_type" id="txtblood_type" class="form-control mb5">
			      						</div>
						      		</div>
					      		</div>
	      						<div class="form_sep">
	      							<label>នាមត្រកូល នាមខ្លួន</label>
	      							<input required type="text" name="txtfull_name" id="fullname" class="form-control ">
	      						</div>
	      						<div class="form_sep">
		      						<label>អក្សរឡាតាំង</label>
		      						<input type="text" name="txt_latin_fullname" id="latin_fullname" class="form-control">
		      					</div>
	      						<div class="form_sep">
		      						<label>ឈ្មោះពីកំណើត</label>
		      						<input type="text" name="name_from_birth" id="name_from_birth" class="form-control ">
		      					</div>
		      					<div class="form_sep">
			      					<label>ឈ្មោះផ្សេងទៀត</label>
			      					<input type="text" name="txt_other_name" id="other_name" class="form-control">
		      					</div>
		      					<div class="form_sep">
			      					<label>ឆ្នាំកំណើត</label>
			      					<input type="text" name="dob" id="dob" class="form-control">
		      					</div>
		      					<div class="form_sep">
			      					<label>ភេទ</label>
			      					<select name="cbo_gender">
										<option value="ប្រុស">ប្រុស</option>
										<option value="ស្រី">ស្រី</option>
									</select>
		      					</div>
		      					<div class="form_sep row">
			      					<div class="col-sm-3">
			      						<label style="width: 100%">ស្រុកកំណើត</label>
			      					</div>
			      					<div class="col-sm-9">
			      						<div class="col-sm-3" style="padding-left: 0">
      										<label>ភូមិ</label>
      										<input type="text" class="pl5" name="pob_village">
      									</div>
      									<div class="col-sm-3">
      										<label>ឃុំ</label>
      										<input type="text" class="pl5" name="pob_commune">
      									</div>
      									<div class="col-sm-3">
      										<label style="margin-left: -15px;">ស្រុក</label>
      										<input type="text" class="pl5" name="pob_district">
      									</div>
      									<div class="col-sm-3">
      										<label style="margin-left: -15px;">ខេត្ត</label>
      										<input type="text" class="pl5" name="pob_province">
      									</div>
			      					</div>
		      					</div>
		      					<div class="form_sep row">
			      					<div class="col-sm-3">
			      						<label style="width: 100%">ទីលំនៅបច្ចុប្បន្ន</label>
			      					</div>
			      					<div class="col-sm-9">
			      						<div class="col-sm-3" style="padding-left: 0">
      										<label style="">ភូមិ</label>
      										<input type="text" class="pl5" name="adr_v">
      									</div>
      									<div class="col-sm-3">
      										<label>ឃុំ</label>
      										<input type="text" class="pl5" name="adr_c">
      									</div>
      									<div class="col-sm-3">
      										<label style="margin-left: -15px;">ស្រុក</label>
      										<input type="text" class="pl5" name="adr_d">
      									</div>
      									<div class="col-sm-3">
      										<label style="margin-left: -15px;">ខេត្ត</label>
      										<input type="text" class="pl5" name="adr_p">
      									</div>
			      					</div>
		      					</div>
		      					<div class="form_sep row">
			      					<div class="col-sm-3">
			      						<label style="width: 100%">ឋានន្ដរសក្ដិ</label>
			      					</div>
			      					<div class="col-sm-9">
			      						<div class="col-sm-4">
      										<select style="width: 100%" name="txt_range">
      											<?php 
      												foreach($ranges->result() as $range){
      													echo "<option value='".$range->range_id."'>".$range->range_name."</option>";
      												}
      											?>
      										</select>
      									</div>
      									<div class="col-sm-8">
      										<label style="width: 40%">កាលបរិច្ឆេត ឆ្នាំ ខែ ថ្ងៃ</label>
      										<input style="width: 60%" type="text" class="pl5" name="range_date"​ id="range_date">

      									</div>
			      					</div>
		      					</div>
		      					<div class="form_sep row">
			      					<div class="col-sm-3">
			      						<label style="width: 100%">មុខតំណែង</label>
			      					</div>
			      					<div class="col-sm-9">
			      						<div class="col-sm-4">
      										<input style="width: 100%" type="text" class="pl5" name="txt_position">
      									</div>
      									<div class="col-sm-8">
      										<label style="width: 40%">កាលបរិច្ឆេត ឆ្នាំ ខែ ថ្ងៃ</label>
      										<input style="width: 60%" type="text" class="pl5" name="position_date" id="pos_date">
      									</div>
			      					</div>
		      					</div>
	      						<div class="form_sep">
			      					<label>កងឯកភាព</label>
			      					<select name="txt_unit" class="form-control" style="padding: 0;">
      								<?php foreach ($unit as $item) {
      									echo '<option value="'.$item->unit_id.'">'.$item->unit_short.'</option>';
      								} ?>	
      								</select>
		      					</div>
		      					<div class="form_sep">
			      					<label>ជនជាតិ</label>
			      					<input type="text" name="txt_ethnicity" id="txt_ethnicity" class="form-control">
		      					</div>
		      					<div class="form_sep">
			      					<label>សញ្ជាតិ</label>
			      					<input type="text" name="txt_nationality" class="form-control">
		      					</div>
	      					</div>
	      				</div>
	      			</div>
	      			<div class="col-sm-6">
	      				<div class="panel panel-primary">
	      					<div class="panel-heading">
	      						<h4 class="panel-title">ពត៌មានផ្ទាល់ខ្លួន</h4>
	      					</div>
	      					<div class="panel-body">
		      					<div class="form_sep">
			      					<label>សាសនា</label>
			      					<input type="text" name="txt_religion" class="form-control">
		      					</div>
		      					<div class="form_sep">
			      					<label>កម្រិតវប្បធម៍</label>
			      					<input type="text" name="txt_edu_degree" id="txt_edu_degree" class="form-control ">
		      					</div>
		      					<div class="form_sep">
			      					<label>ភាសាបរទេស</label>
			      					<input type="text" name="txt_foriegn_lang" id="txt_foriegn_lang" class="form-control ">
		      					</div>
		      					<div class="form_sep">
			      					<label>មុខជំនាញ ឯកទេស</label>
			      					<input type="text" name="txt_skill" id="txt_skill" class="form-control ">
		      					</div>
		      					<div class="form_sep">
			      					<label>ឆ្លងវគ្គសិក្សា (រយៈពេល)</label>
			      					<input type="text" name="txt_duration" id="txt_skill" class="form-control ">
		      					</div>
		      					<div class="form_sep">
			      					<label>ក្នុងស្រុក</label>
			      					<input type="text" name="txt_course_local" id="txt_course_local" class="form-control ">
		      					</div>
		      					<div class="form_sep">
			      					<label>ក្រៅស្រុក</label>
			      					<input type="text" name="txt_course_abroad" id="txt_course_abroad" class="form-control ">
		      					</div>
		      					
		      					<div class="form_sep">
			      					<label>ឆ្លងប្រយុទ្ធ បម្រើប្រយុទ្ធ <br> (ថ្នាក់ខ្ពស់បំផុត)</label>
			      					<input type="text" name="txt_high_mission" id="txt_exp" class="form-control ">
		      					</div>
		      					<div class="form_sep">
			      					<label>សុខភាព របួស ពិការ</label>
			      					<input type="text" name="txt_health_desc" id="txt_exp" class="form-control ">
		      					</div>
		      					<div class="form_sep">
			      					<label>កាលបរិច្ឆេត ឆ្នាំ ខែ ថ្ងៃ</label>
			      					<input type="text" name="txt_health_date" id="health_date" class="form-control" >
		      					</div>
		      					<div class="form_sep">
			      					<label>សសើរ</label>
			      					<input type="text" name="txt_admire" id="txt_admire" class="form-control ">
		      					</div>
		      					<div class="form_sep">
			      					<label>ពិន័យ ទណ្ឌកម្ម តុលាការ</label>
			      					<input type="text" name="txt_punishment" id="txt_punishment" class="form-control ">
		      					</div>
		      					<div class="form_sep">
			      					<label>ភិនភាគ ស្លាកស្នាម</label>
			      					<input type="text" name="txt_note" id="txt_identify" class="form-control ">
		      					</div>
		      					<div class="form_sep">
			      					<label>កំពស់</label>
			      					<input type="text" name="txt_height" id="" class="form-control ">
		      					</div>
		      					<div class="form_sep">
			      					<label>ចូលកងទព័ <br>(កាលបរិច្ឆេត ឆ្នាំ ខែ ថ្ងៃ)</label>
			      					<input type="text" name="txt_army_date" id="army_date" class="form-control ">
		      					</div>
		      					<div class="form_sep">
			      					<label>បេសសកម្មក្រៅប្រទេស</label>
			      					<input type="text" name="mission_abroad" id="mission_abroad" class="form-control ">
		      					</div>
		      					<div class="form_sep">
			      					<label>លេខទូរសព្ទ័</label>
			      					<input type="text" name="phone" id="phone" class="form-control ">
		      					</div>
	      					</div>
	      				</div>
	      			</div>
	      		</div>

				</div>

				<div class="tab-pane" id="Family">
					<div class="row">
			      		<div class="col-sm-6">
			      			<div class="panel panel-primary">
	      					<div class="panel-heading">
	      						<h4 class="panel-title">ពត៌មានអំពី ឪពុក ម្ដាយ</h4>
	      					</div>
	      					<div class="panel-body">
	      						<div class="form_sep row">
			      					<div class="col-sm-3">
			      						<label style="width: 100%">ឪពុកឈ្មោះ</label>
			      					</div>
			      					<div class="col-sm-9">
			      						<div class="col-sm-4">
      										<input style="width: 100%" class="form-control" type="text" id="" name="txt_father_name">
      									</div>
      									<div class="col-sm-8">
      										<label style="width: 40%">ឆ្នាំកំណើត</label>
      										<input style="width: 60%" type="text" class="pl5" name="txt_father_dob_y"​ id="txt_father_dob_y">

      									</div>
			      					</div>
		      					</div>
		      					<div class="form_sep row">
			      					<div class="col-sm-3">
			      						<label style="width: 100%">ស្ថានភាពរស់នៅ</label>
			      					</div>
			      					<div class="col-sm-9">
			      						<div class="col-sm-6">
								    		<div class="radio" style="margin-top: 0">
											  <label><input checked type="radio" name="radio_life" value="1">នៅរស់</label>
											</div>
								    	</div>
								    	<div class="col-sm-6">
								    	<div class="radio" style="margin-top: 0">
											  <label><input type="radio" name="radio_life" value="0">ស្លាប់</label>
											</div>
								    	</div>
			      					</div>
		      					</div>
		      					<div class="form_sep">
			      					<label>ស្រុកកំណើត</label>
			      					<input type="text" name="txt_father_pob" class="form-control" >
		      					</div>
		      					<div class="form_sep">
			      					<label>មុខរបរ</label>
			      					<input class="form-control" type="text" id="" name="txt_father_job">
		      					</div>
		      					<div class="form_sep">
			      					<label>ទីលំនោះបច្ចុប្បន្ន</label>
			      					<input class="form-control" type="text" id="" name="txt_father_adr">
		      					</div>
		      					<hr>
		      					<div class="form_sep row">
			      					<div class="col-sm-3">
			      						<label style="width: 100%">ម្ដាយឈ្មោះ</label>
			      					</div>
			      					<div class="col-sm-9">
			      						<div class="col-sm-4">
      										<input style="width: 100%" class="form-control" type="text" id="" name="txt_mother_name">
      									</div>
      									<div class="col-sm-8">
      										<label style="width: 40%">ឆ្នាំកំណើត</label>
      										<input style="width: 60%" type="text" class="pl5" name="txt_mother_dob_y"​ id="txt_mother_dob_y">

      									</div>
			      					</div>
		      					</div>
		      					<div class="form_sep row">
			      					<div class="col-sm-3">
			      						<label style="width: 100%">ស្ថានភាពរស់នៅ</label>
			      					</div>
			      					<div class="col-sm-9">
			      						<div class="col-sm-6">
								    		<div class="radio" style="margin-top: 0">
											  <label><input checked type="radio" name="radio_life_mother" value="1">នៅរស់</label>
											</div>
								    	</div>
								    	<div class="col-sm-6">
								    	<div class="radio" style="margin-top: 0">
											  <label><input type="radio" name="radio_life_mother" value="0">ស្លាប់</label>
											</div>
								    	</div>
			      					</div>
		      					</div>
		      					<div class="form_sep">
			      					<label>ស្រុកកំណើត</label>
			      					<input type="text" name="txt_pob_mother" class="form-control" >
		      					</div>
		      					<div class="form_sep">
			      					<label>មុខរបរ</label>
			      					<input class="form-control" type="text" id="" name="txt_mother_job">
		      					</div>
		      					<div class="form_sep">
			      					<label>ទីលំនោះបច្ចុប្បន្ន</label>
			      					<input class="form-control" type="text" id="" name="txt_mother_adr">
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
					      				<div class="form_sep">
											<img src="<?php echo site_url('../assets/upload/No_person.jpg') ?>" id="uploadprewife" style='width:120px; height:150px; margin-bottom:15px; border:1px solid #CCCCCC'>
												<input id="uploadImagewife" type="file" accept="image/*" name="userfilewife" onchange="PreviewImage_wife();" style="visibility:hidden; display:none;" /> <br/>
											<input type='button' class="btn btn-success" onclick="$('#uploadImagewife').click();" value='Browse'/>
							      		</div>
					      			</div>
					      			<div class="col-sm-9">
					      				<div class="form_sep row">
					      					<div class="col-sm-4">
					      						<label style="width: 100%">ស្ថានភាពគ្រួសារ</label>
					      					</div>
					      					<div class="col-sm-8">
					      						<div class="col-sm-6">
										    		<div class="radio" style="margin-top: 0">
													  <label><input checked type="radio" name="single" value="នៅលីវ"​>នៅលីវ</label>
													</div>
										    	</div>
										    	<div class="col-sm-6">
										    	<div class="radio" style="margin-top: 0">
													  <label style="width: 100%"><input type="radio" name="single" value="រៀបការរួច">រៀបការរួច</label>
													</div>
										    	</div>
					      					</div>
				      					</div>
				      					<div class="form_sep row">
					      					<div class="col-md-4">
					      						<label style="width: 100%">នាមត្រកូល នាមខ្លួន</label>
					      					</div>
					      					<div class="col-sm-8" style="padding: 0">
					      						<div class="col-lg-4" style="padding: 0">
		      										<input style="width: 100%" class="sp_name" type="text" name="txt_spouse_name">
		      									</div>
		      									<div class="col-lg-8">
		      										<div class="col-sm-6" style="padding: 0">
											    		<div class="radio" style="margin-top: 0">
														  <label style="width: 100%"><input checked type="radio" name="radio_spouse" value="wife"​>ជាប្រពន្ធ</label>
														</div>
											    	</div>
											    	<div class="col-sm-6" style="padding: 0">
											    	<div class="radio" style="margin-top: 0">
														  <label style="width: 100%"><input type="radio" name="radio_spouse" value="husband">ជាប្ដី</label>
														</div>
											    	</div>
		      									</div>
					      					</div>
				      					</div>
					      				<div class="form_sep">
					      					<label>លិខិតអាពាហ៏ពីពាហ៏លេខ</label>
					      					<input style="width: 60%;margin-right: 2%;" type="text" name="txt_wed_num" id="txt_wed_num" class="form-control ">
				      					</div>
				      					<div class="form_sep">
					      					<label>ចុះថ្ងៃទី</label>
					      					<input style="width: 60%;margin-right: 2%;" type="text" name="txt_wed_date" id="wed_date" class="form-control ">
				      					</div>
				      					<div class="form_sep">
					      					<label>ទីលំនៅបច្ចុប្បន្ន</label>
					      					<input style="width: 60%;margin-right: 2%;" type="text" name="txt_cur_adr" class="form-control ">
				      					</div>
				      					<div class="form_sep">
					      					<label>ឆ្នាំកំណើត</label>
					      					<input style="width: 60%;margin-right: 2%;" type="text" name="spouse_birth_year" class="form-control ">
				      					</div>
					      			</div>
					      		</div>
					      		<hr>
					      		<br>
					      		<div class="row">
					      			<div class="col-sm-4">
					      				<label>ចំនួនកូន</label>
					      				<input class="txt_ch_num pl5" type="text" name="txt_ch_num" id="ch_num" style="width:60%">
					      			</div>
					      			<div class="col-sm-4">
					      				<label>ស្រី</label>
					      				<input class="txt_ch_name pl5" type="text" name="txt_chm_num" style="width:70%">
					      			</div>
					      			<div class="col-sm-4">
					      				<label>ប្រុស</label>
					      				<input class="txt_ch_name pl5" type="text" name="txt_chf_num" style="width:70%">
					      			</div>
					      		</div>
					      		
					      		<div class="row child_form">
					      			
					      		</div>
					      		<hr>
					      		<div class="col-sm-12 text-center">
					      			<h4>ក្នុងករណីមានប្រពន្ធ ឫ ប្ដីទី២ ត្រូវបញ្ជាក់បន្ថែមឱ្យបានច្បាស់ពីមូលហេតុ</h4>
					      		</div>
					      		<div class="col-sm-12 text-center">
					      			<textarea name="txt_sp_desc" rows = "8" style="width: 100%"></textarea>
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
						      			<h5>Select Rows</h5>
						      			<select id="select">
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
									    <tbody class="work_his">
									      <tr>
									        <td class="text-center"><input style="width: 100%" type="text" name="txt_start_date" id="start_date"> </td>
									        <td class="text-center"><input style="width: 100%" type="text" name="txt_end_date" id="end_date"></td>
									        <td>
									        <input type="text" style="width: 100%" rows = '3' name="txt_range_desc">
					      					</td>
									        <td><input style="width: 100%" align="center" type="text" name="txt_eva_unit"></td>
									      </tr>
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
						      	<div class="panel-body">
						      		<div class="row">
						      			<div class="col-sm-12">
						      				<h3>ឪពុក</h3>
						      				<textarea rows = '4' name="txt_father_desc" style="width: 100%"></textarea>
						      			</div>
						      			<div class="col-sm-12">
						      				<h3>ម្ដាយ</h3>
						      				<textarea rows = '4' name="txt_mother_desc" style="width: 100%"></textarea>
						      			</div>
						      			<div class="col-sm-12">
						      				<h3>ផ្ទាល់ខ្លួន</h3>
						      				<textarea rows = '4' name="txt_personal_desc" style="width: 100%"></textarea>
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
					      		<div class="row">
					      			<div class="col-sm-12">
					      				<textarea rows = '10' name="txt_evaluation" style="width: 100%"></textarea>
					      			</div>
					      		</div>
					      		<br>
					      		<div class="row">
					      			<div class="col-sm-5 text-center">
				      					<label>កាលបរិច្ឆេទ ឆ្នាំ ខែ ថ្ងៃ</label>
				      					<input type="text-center" name="txt_confirm_date" id="confirm_date"><br>
				      					<h4>មេបញ្ជាការកងឯកភាព</h4>
				      					<input type="text-center" name="txt_commander_name">
					      			</div>
					      			<div class="col-sm-7 text-center">
				      					<label>ធ្វើនៅ ឆ្នាំ ខែ ថ្ងៃ</label>
				      					<input type="text-center" name="txt_commit_on" id="commit_on">
				      					<label>ធ្វើនៅ</label>
				      					<input type="text-center" name="txt_commit_at"​ style="width:50%; height: 30px;"> <br><br>
				      					<label>ហត្ថលេខា និង ស្នាមមេដៃរបស់សមីខ្លួន</label> <br>
				      					<input type="text-center" name="txt_commiter_name">
					      			</div>
					      		</div>
							</div> <!-- end panel body -->
					    </div>
						<div class="pull-right">
							<a href="#"><button class="btn btn-danger">Cancel</button></a>
					    	<button type="submit" class="btn btn-success">Save</button>
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
			+'<td><input style="width: 100%" align="center" type="text" name="txt_eva_unit[]"></td>'
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

</script>