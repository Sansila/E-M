<?php 
	$range_id = "";
	$range_name = "";
	$old = "";
	$new = "";
	$increment = "";
	$difference = "";
	$basic_salary = "";
	$similar_range = "";
	$action = base_url().'employee/range/save';
	if(isset($range)){
		$range_id = $range->range_id;
		$range_name = $range->range_name;
		$old = $range->old;
		$new = $range->new;
		$increment = $range->increment;
		$difference = $range->difference;
		$basic_salary = $range->basic_salary;
		$similar_range = $range->similar_range;
		$action = base_url().'employee/range/update';
	}
?>
<div class="container" style="padding-top: 20px; font-family: 'Khmer OS'">
	<div class="row text-center"><h1>ក្រសួងការពារជាតិ</h1><h4>MINISTRY OF DEFENCE</h4><br><h4>ឋានន្តរសក្ដិ</h4></div><br>
	<form class="form-horizontal" method="post" action="<?=$action;?>">
	  <div class="form-group">
	    <label class="control-label col-sm-2" for="range_name">ឋានន្តរសក្ដិ*</label>
	    <div class="col-sm-10">
	    	<input type="hidden" value="<?=$range_id?>" name="range_id">
	      <input name="range_name" value="<?=$range_name?>" type="text" required class="form-control" id="range_name" placeholder="ឋានន្តរសក្ដិ">
	    </div>
	  </div>
	  <div class="form-group">
	    <label class="control-label col-sm-2" for="unit_full">ចាស់*</label>
	    <div class="col-sm-10"> 
	      <input name="old" value="<?=$old?>" type="number" required class="form-control" id="old" placeholder="ចាស់">
	    </div>
	  </div>
	  <div class="form-group">
	    <label class="control-label col-sm-2" for="unit_full">ថ្មី*</label>
	    <div class="col-sm-10"> 
	      <input name="new" value="<?=$new?>" type="number" required class="form-control" id="new" placeholder="ថ្មី">
	    </div>
	  </div>
	  <div class="form-group">
	    <label class="control-label col-sm-2" for="unit_full">កើន</label>
	    <div class="col-sm-10"> 
	      <input name="increment" value="<?=$increment?>" type="number" class="form-control" id="increment" placeholder="កើន">
	    </div>
	  </div>
	  <div class="form-group">
	    <label class="control-label col-sm-2" for="unit_full">លំអៀងក្នុងមួយថ្នាក់</label>
	    <div class="col-sm-10"> 
	      <input name="difference" value="<?=$difference?>" type="number" class="form-control" id="difference" placeholder="លំអៀងក្នុងមួយថ្នាក់">
	    </div>
	  </div>
	  <div class="form-group">
	    <label class="control-label col-sm-2" for="unit_full">ប្រាក់បៀវត្សន៌មូលដ្ឋាន*</label>
	    <div class="col-sm-10"> 
	      <input name="basic_salary" value="<?=$basic_salary?>" type="number" required class="form-control" id="basic_salary" placeholder="ប្រាក់បៀវត្សន៌មូលដ្ឋាន">
	    </div>
	  </div>
	  <div class="form-group">
	    <label class="control-label col-sm-2" for="unit_full">សក្ដិប្រហែល</label>
	    <div class="col-sm-10"> 
	      <input name="similar_range" value="<?=$similar_range?>" type="text" class="form-control" id="similar_range" placeholder="សក្ដិប្រហែល">
	    </div>
	  </div>
	  <div class="form-group"> 
	    <div class="col-sm-12" align="right">
	      <a href="<?=base_url().'employee/range/add'?>"><button type="button" class="btn btn-danger">Cancel</button></a>
	      <button type="submit" class="btn btn-success"><?=$range_id==""?"SAVE":"UPDATE"?></button>
	    </div>
	  </div>
	</form>
	<table class="table table-bordered">
		<thead>
			<tr>
				<th rowspan="2" class="kh-content">លេខរៀង</th>
				<th rowspan="2" class="kh-content">ឋានន្តរសក្ដិ</th>
				<th colspan="4" class="kh-content">ចំនួនសន្ទស្សន៌(តម្លៃ១ស/ទ ១៥២០ រៀល)</th>
				<th rowspan="2" class="kh-content">ប្រាក់បៀវត្សន៌មូលដ្ឋាន</th>
				<th rowspan="2" class="kh-content">សក្ដិប្រហែល</th>
				<th rowspan="2" class="kh-content">ផ្សេងៗ</th>
			</tr>
			<tr>
				<th class="kh-content">ចាស់</th>
				<th class="kh-content">ថ្មី</th>
				<th class="kh-content">កើន</th>
				<th class="kh-content">លំអៀងក្នុងមួយថ្នាក់</th>
			</tr>
			<tbody id="tbody_range">
			</tbody>
		</thead>
	</table>
</div>
<script type="text/javascript">
	$('td,th').addClass('text-center');
	$('th[rowspan],td[rowspan]').css("vertical-align", "middle");
	document.getElementById('range_name').focus();
	$(document).ready(function(){
		getdata();
	});
	function getdata() {
		$.get("<?=base_url().'employee/range/getdata'?>", function(data, status){
	        $('#tbody_range').html(data.tbody);
	    });
	}
	function delete_range(id) {
		var c = confirm("Are You Sure To Delete?");
		if(c){
			location.href = "<?=base_url()?>"+"employee/range/delete/"+id;
		}
	}
</script>