<style type="text/css">
	@font-face{
		font-family:'KhmerOSMoul';
		src:url(../../assets/fonts/KhmerOSMoul.ttf);
	}
	@font-face{
		font-family:'PreyChas';
		src:url(../../assets/fonts/KhWattPreyChas.ttf);
	}

	#title, .table{
		font-family: 'Khmer OS';
	}
</style>
<div class="container">
  <h2 id="title">បញ្ជីកងឯកភាព</h2>
  <div class="row">
  	<div class="col-sm-2"><h4>បន្ថែមថ្មី</h4></div>
  	<div class="col-sm-1">
    	<span class="top_action_button">
    		<a href="<?php echo site_url('employee/army_record/add_unit')?>" >
    			<img src="<?php echo base_url('assets/images/icons/add.png')?>" />
    		</a>
    	</span>
  	</div>
  </div>
 
  <table class="table">
    <thead>
      <tr>
        <th>Nº</th>
        <th>ឈ្មោះកាត់</th>
        <th>ឈ្មោះពេញ</th>
        <th>ផ្សេងៗ</th>
      </tr>
    </thead>
    <tbody>
    <?php foreach($unit as $items){ ?>
      <tr>
        <td><?php echo $items->unit_id; ?></td>
        <td><?php echo $items->unit_short; ?></td>
        <td><?php echo $items->unit_full; ?></td>
        <td>
        <a href="<?php echo site_url().'/employee/army_record/edit_unit/'.$items->unit_id;?>">
			<button class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span></button>
		</a>
        <button onClick="delete_unit(<?php echo $items->unit_id; ?>);" class="btn btn-danger"><span class="glyphicon glyphicon-remove-sign"></span></button>
        </td>
      </tr>
    <?php } ?>
    </tbody>
  </table>
</div>
<script type="text/javascript">
	function delete_unit($unit_id){
		if (confirm('Are You Sure deleting this Unit ?')) {
			location.href="<?php echo base_url(); ?>index.php/employee/army_record/delete_unit/"+$unit_id;
		}
	}
</script>