<div class="row">
	<div class="col-sm-6">
		<h4>បញ្ជី នាយកដ្ឋាន</h4>
		<p><a href="<?php echo site_url('employee/army_department/add'); ?>" class="btn btn-success">ថែមថ្មី</a></p> 
	</div>
</div>
<table class="table table-striped table-bordered">
    <tr>
		<th>No</th>
		<th>នាយកដ្ឋាន</th>
		<th>សម្គាល់</th>
		<th>ផ្សេងៗ</th>
    </tr>
	<?php $i=1; foreach($army_department as $a){ ?>
    <tr>
		<td><?php echo $i; ?></td>
		<td><?php echo $a['dep_name']; ?></td>
		<td><?php echo $a['dep_note']; ?></td>
		<td>
            <a href="<?php echo site_url('employee/army_department/edit/'.$a['army_dep_id']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a onclick="del(<?=$a['army_dep_id']?>)" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php $i++;} ?>
</table>
<script type="text/javascript">
	$('td,th').addClass('text-center');
	function del(id){
		var url = "<?php echo site_url('employee/army_department/remove/'); ?>"+"/"+id;
		var c = confirm('Are You Sure?');
		if(c){
			location.href = url;
		}
	}
</script>