<?php echo form_open('employee/country/edit/'.$country['country_id'],array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="country_name" class="col-md-4 control-label">Country Name</label>
		<div class="col-md-8">
			<input type="text" name="country_name" value="<?php echo ($this->input->post('country_name') ? $this->input->post('country_name') : $country['country_name']); ?>" class="form-control" id="country_name" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>
	
<?php echo form_close(); ?>