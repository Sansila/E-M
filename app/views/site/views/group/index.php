<div class="row">
	<div class="col-sm-6">
		<h4>បញ្ជី កង</h4>
		<p><a href="<?php echo site_url('employee/group/add'); ?>" class="btn btn-success">ថែមថ្មី</a></p> 
	</div>
</div>
<table class="table table-striped table-bordered">
    <tr>
		<th>No</th>
		<th>ប្រទេស</th>
		<th>ឈ្មោះកង</th>
		<th>កាលបរិច្ឆេត</th>
		<th>ផ្សេងៗ</th>
    </tr>
	<?php $i=1; foreach($groups as $t){ ?>
    <tr>
		<td><?php echo $i; ?></td>
		<td><?php echo $t['country_name']; ?></td>
		<td><?php echo $t['group_name']; ?></td>
		<td><?php echo $t['group_date']; ?></td>
		<td>
            <a href="<?php echo site_url('employee/group/edit/'.$t['group_id']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a onclick="delete_group('<?=$t['group_id']?>');" href="#" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php $i++;} ?>
</table>
<div class="pull-right">
    <?php echo $this->pagination->create_links(); ?>    
</div>
<script type="text/javascript">
	$('td,th').addClass('text-center');
	function delete_group(group_id){
		var url = "<?php echo site_url('employee/group/remove/'); ?>"+"/"+group_id;
		var c = confirm('Are You Sure?');
		if(c){
			location.href = url;
		}
	}
</script>