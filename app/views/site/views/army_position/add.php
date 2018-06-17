<div class="container" style="padding-top: 20px; font-family: 'Khmer OS'">
	<div class="row text-center">
		<h1>ក្រសួងការពារជាតិ</h1>
		<h4>MINISTRY OF DEFENCE</h4>
		<br>
		<h4>បំពេញពត៌មាន មុខតំណែង</h4>
	</div><br>
	<?php echo form_open('employee/army_position/add',array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="pos_name" class="col-md-4 control-label"><span class="text-danger">*</span>មុខតំណែង</label>
		<div class="col-md-8">
			<input type="text" name="pos_name" value="<?php echo $this->input->post('pos_name'); ?>" class="form-control" id="pos_name" />
			<span class="text-danger"><?php echo form_error('pos_name');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="pos_note" class="col-md-4 control-label">ផ្សេងៗ</label>
		<div class="col-md-8">
			<input type="text" name="pos_note" value="<?php echo $this->input->post('pos_note'); ?>" class="form-control" id="pos_note" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>

<?php echo form_close(); ?>

</div>
