<form id="contract_register" method="POST" enctype="multipart/form-data"  action="<?php echo site_url("employee/general_setup/new_save/$row->id?save=add&m=$m&p=$p")?>">
	<div class="row">
		<div class="col-sm-12" style="margin-bottom: 15px;">
			<div class="form_sep">
				<div class="form_sep">
					<label>USD To Riel(Rate/USD)</label>
					<input type="text" name="rate" value="<?php echo $this->contract->getmaxid();?>" id="contractid" class="form-control" data-required="true" required data-parsley-required-message="Enter Contract ID">
				</div>

			</div>
		</div>
	</div>
</form>