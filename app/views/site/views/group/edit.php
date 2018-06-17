<div class="container" style="padding-top: 20px; font-family: 'Khmer OS'">
	<div class="row text-center">
		<h1>ក្រសួងការពារជាតិ</h1>
		<h4>MINISTRY OF DEFENCE</h4>
		<br>
		<h4>បំពេញពត៌មាន កង</h4>
	</div><br>
	<?php echo form_open('employee/group/edit/'.$group['group_id'],array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="country_id" class="col-md-4 control-label">Country</label>
		<div class="col-md-7">
			<select name="country_id" id="country_id" class="form-control">
				<?php 
					foreach($countries as $t){
						$s=$t['country_id']==$group['country_id']?"selected":"";
						echo "<option ".$s." value='".$t['country_id']."'>".$t['country_name']."</option>";
					}
				?>
			</select>
		</div>
		<div class="col-md-1">
			<a class="btn btn-success" href="<?php echo site_url('employee/country/add'); ?>">ថែម</a>
		</div>
	</div>
	<div class="form-group">
		<label for="group_name" class="col-md-4 control-label">Group Name</label>
		<div class="col-md-8">
			<input type="text" name="group_name" value="<?php echo ($this->input->post('group_name') ? $this->input->post('group_name') : $group['group_name']); ?>" class="form-control" id="group_name" />
		</div>
	</div>
	<div class="form-group">
		<label for="group_date" class="col-md-4 control-label">Group Date</label>
		<div class="col-md-8">
			<input type="text" name="group_date" value="<?php echo ($this->input->post('group_date') ? $this->input->post('group_date') : $group['group_date']); ?>" class="form-control" id="group_date" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Update</button>
        </div>
	</div>
	
<?php echo form_close(); ?>

</div>
<script type="text/javascript">
	$("#group_date").datepicker({
  		language: 'en',
  		pick12HourFormat: true,
  		format:'yyyy-mm-dd'
	});
</script>