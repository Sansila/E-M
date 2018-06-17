<div class="container" style="padding-top: 20px; font-family: 'Khmer OS'">
	<div class="row text-center"><h1>ក្រសួងការពារជាតិ</h1><h4>MINISTRY OF DEFENCE</h4><br><h4>បញ្ចូលព៍តមានកងឯកភាពថ្មី</h4></div><br>
	<form class="form-horizontal" method="post" action="<?php echo site_url().'employee/army_record/insert_unit';?>">
	  <div class="form-group">
	    <label class="control-label col-sm-2" for="unit_short">ឈ្មោះកាត់</label>
	    <div class="col-sm-10">
	      <input name="unit_short" type="text" required class="form-control" id="unit_short" placeholder="ឈ្មោះកាត់">
	    </div>
	  </div>
	  <div class="form-group">
	    <label class="control-label col-sm-2" for="unit_full">ឈ្មោះពេញ</label>
	    <div class="col-sm-10"> 
	      <input name="unit_full" type="text" required class="form-control" id="unit_full" placeholder="ឈ្មោះពេញ">
	    </div>
	  </div>
	  <div class="form-group">
	    <label class="control-label col-sm-2" for="pwd">ពិពណ៍នា</label>
	    <div class="col-sm-10"> 
	      <textarea name="txt_desc" required style="width: 100%" rows="5"></textarea>
	    </div>
	  </div>
	  <div class="form-group"> 
	    <div class="col-sm-offset-2 col-sm-10">
	      <button type="submit" class="btn btn-success">SAVE</button>
	    </div>
	  </div>
	</form>
</div>