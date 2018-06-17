<div class="row">
	<div class="col-sm-6">
		<h4>បញ្ជី ប្រទេស</h4>
		<p><a href="<?php echo site_url('employee/country/add'); ?>" class="btn btn-success">ថែមថ្មី</a></p> 
	</div>
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>No</th>
		<th>ឈ្មោះប្រទេស</th>
		<th>ផ្សេងៗ</th>
    </tr>
	<?php $i=1; foreach($countries as $t){ ?>
    <tr>
		<td><?php echo $i; ?></td>
		<td><?php echo $t['country_name']; ?></td>
		<td>
            <a href="<?php echo site_url('employee/country/edit/'.$t['country_id']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a onclick="del(<?=$t['country_id']?>)" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php $i++;} ?>
</table>
<div class="pull-right">
    <?php echo $this->pagination->create_links(); ?>    
</div>
<script type="text/javascript">
	$('td,th').addClass('text-center');
	function del(id){
		var url = "<?php echo site_url('employee/country/remove/'); ?>"+"/"+id;
		var c = confirm('Are You Sure?');
		if(c){
			location.href = url;
		}
	}
</script>
