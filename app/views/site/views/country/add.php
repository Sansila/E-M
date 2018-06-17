
<div class="container" style="padding-top: 20px; font-family: 'Khmer OS'">
	<div class="row text-center">
		<h1>ក្រសួងការពារជាតិ</h1>
		<h4>MINISTRY OF DEFENCE</h4>
		<br>
		<h4>បំពេញពត៌មាន ប្រទេស</h4>
	</div><br>
	<?php echo form_open('employee/country/add',array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="country_name" class="col-md-4 control-label">ឈ្មោះប្រទេស</label>
		<div class="col-md-8">
			<input type="text" name="country_name" value="<?php echo $this->input->post('country_name'); ?>" class="form-control" id="country_name" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>

<?php echo form_close(); ?>

</div>




