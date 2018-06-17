<style type="text/css">
	.emp_msg{
		background: #FFE8A6 none repeat scroll 0% 0%;
		padding: 1%;
		border-radius: 5px;
		border: 1px solid rgba(255, 0, 0, 0.18);
		color: red;
	}
	.emp_suc{
		background: rgba(166, 255, 214, 0.4) none repeat scroll 0% 0%;
		padding: 1%;
		border-radius: 5px;
		border: 1px solid rgba(0, 255, 192, 0.33);
		color: #00D2FF;
	}
</style>
<?php 
$msg = $this->session->flashdata('message');
$error = $this->session->flashdata('error');
 ?>
<?php if ($msg): ?>
	    	<div class="row">
	    		<div class="col-xs-12 emp_suc">
	    			<strong><?php echo $msg ?></strong>
	    		</div>
	    	</div>
<?php endif ?>
<?php if ($error): ?>
	    	<div class="row">
	    		<div class="col-xs-12 emp_msg">
	    			<strong><?php echo $error ?></strong>
	    		</div>
	    	</div>
<?php endif ?>
