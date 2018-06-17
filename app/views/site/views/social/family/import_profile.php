<div class="wrapper">
	<div class="clearfix" id="main_content_outer">
	    <div id="main_content">
	      <div class="alert alert-info"><strong>Import Family Profile</strong></div>
	      <div class="row">
	      	<div class="col-sm-12">
	      		<div class="panel panel-default">
	      			<div class="panel-body">
	      				<label class="alert"><?php echo $import_status?></label>
	      				<form action="<?php echo site_url('social/Family/importProfile')?>" method="POST" enctype="multipart/form-data">
	      					<div class="form_sep">
			                  <label class="req" for="classid">Choose File</label>
			                  <input type="file" name="file[]" class="file"/>
			                </div> 
			                <br/>
			                <div class="form_sep">           
			                  <button id="std_reg_submit" name="std_reg_submit" type="submit" class="btn btn-success">Import</button>
			                </div> 
	      				</form>		           		
					</div>
	      		</div>
	      	</div>	      	
	      </div> 
	    </div>
   </div>
</div>