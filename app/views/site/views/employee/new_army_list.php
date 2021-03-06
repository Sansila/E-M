<?php $this->load->model('employee/modarmy','m_army'); ?>
<style type="text/css">
	@font-face{
		font-family:'KhmerOSMoul';
		src:url(../../assets/fonts/KhmerOSMoul.ttf);
	}
	@font-face{
		font-family:'PreyChas';
		src:url(../../assets/fonts/KhWattPreyChas.ttf);
	}
	.show{
		font-size: 20px;
	}
	.for-label{
		margin-top: 7px;
		font-size: 16px;
		font-family: 'Khmer OS';
	}
	
	.show{
		font-family: 'Khmer OS';
	}
	.row{
		margin-bottom: 10px;
	}
	.title{
		font-family: 'KhmerOSMoul';
		text-shadow: -2px -2px #7F7F7F;
		}
	.ft{
		font-family: 'KhmerOSMoul';
	}
	.sub-title{
		font-family: 'KhmerOSMoul';
	}
	.table_head{
		margin-top: 7px;
		font-size: 12px;
		font-family: 'Khmer OS Bokor';
	}
	.body_table{
		font-family: 'Khmer OS';
		font-size: 11px;
	}
	input{
		height: 30px;
	}
	.search{
		padding: 0 5px;
	}
	.kh-os{
		font-family: 'Khmer OS';
	}
	.container-fluid{
		padding: 0 !important;
	}
	.bd{
		border-bottom: 2px solid #ddd;
	}
	.vm{
		vertical-align: middle !important;
	}
	select[name="select_group"],
	select[name="select_dep"],
	select[name="select_country"]{
		padding: 0!important;
		font-size: 9px;
	}
</style>

<!-- <div class="row" id="test">
	test Screen
</div> -->
<div class="container-fluid">
	<div class="row result_info">
		<div class="col-sm-2" style="padding-right: 0">
	  		<span>បញ្ជីឈ្មោះ</span>
	  		<span class="top_action_button">
	    		<a href="<?php echo site_url('employee/employee/add')?>" >
	    			<img src="<?php echo base_url('assets/images/icons/add.png')?>" />
	    		</a>
	    	</span>	
		</div>
		<div class="col-sm-10">
			<div class="col-sm-1" style="padding-right: 0">
		  		<span>ស្វែងរក</span>
			</div>
			<div class="col-sm-2">
				<input type="text" placeholder="អត្តលេខ" name="search_id" class="form-control">
			</div>
			<div class="col-sm-2">
				<input type="text" placeholder="ឈ្មោះ" name="search_id" class="form-control">
			</div>
			<div class="col-sm-3" style="padding: 0">
		  		<select class="form-control" name="select_dep">
					<option value="0">ជ្រើសរើសនាយកដ្ឋាន</option>
					<?=$opt_dep;?>
				</select>
			</div>
			<div class="col-sm-2" style="padding: 0;">
				<select class="form-control" name="select_country">
					<option value="0">ជ្រើសរើស ប្រទេស</option>
					<?=$opt_con?>
				</select>
			</div>
			<div class="col-sm-2" style="padding: 0">
				<select class="form-control"  name="select_group">
					<option value="0">ជ្រើសរើស កង</option>
				</select>
			</div>
		</div>
	</div>
</div>
<div class="container-fluid">
  <table class="table table-hover">
    <thead>
      <tr>
		<th class="table_head text-center">ល.រ</th>
		<th class="table_head text-center">រូបថត</th>
		<th class="table_head text-center" onclick="sort(event);" rel="empcode">អត្តលេខ</th>
		<th class="table_head text-center" onclick="sort(event);" rel="first_name">នាមត្រកូល នាមខ្លួន</th>
		<th class="table_head text-center" onclick="sort(event);" rel="first_name_kh">កងឯកភាព</th>
		<th class="table_head text-center" onclick="sort(event);" rel="dob">ឋានន្តរស័ក្ដិ</th>
		<th class="table_head text-center" onclick="sort(event);" rel="pos_id">មុខតំណែង</th>
		<th class="text-center table_head">ផ្សេងៗ</th>
	</tr>
	<?php echo $tr_search;?>
    </thead>
    <tbody class="listbody">
      <?php 
      $i = (is_numeric($_GET['per_page']) ? $_GET['per_page']+1 : 1); 
      foreach($army as $items){
      	$src = "assets/upload/thumb/".$items->army_id.".jpg";
      	if(!file_exists(FCPATH.$src)){
      		$src = site_url('../assets/upload/No_person.jpg');
      	}else{
      		$src = base_url().$src.'?'.rand(0,100);
      	}
      ?>
		<tr>
			<td class="text-center vm"><?php echo $i++; ?></td>
			<td class="text-center bd"><img height="75px" width="65px" src="<?php echo $src ;?>"></td>
			<td class="body_table text-center bd"><?=$items->id_num.'</br></br>'.$items->blood_type; ?></td>
			<td class="body_table text-center bd"><?php echo $items->full_name.'</br></br>'.$items->ssid; ?></td>
			<td class="body_table text-center bd"><?php echo $items->unit_short."<br><br>".$items->dep_name; ?></td>
			<td class="body_table text-center bd">
			<?=$items->range_name.'</br>'.$items->country_name.'</br>'.$items->group_name?>
			</td>
			<td class="body_table text-center bd"><?php echo $items->pos_name; ?></td>
			<td class="text-center">
				<div class='btn-group'>
					<button type='button' class='btn btn-default btn-sm'>Action</button>
					<button type='button' class='btn btn-default dropdown-toggle btn-sm' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
					<span class='caret'></span></button>
					<ul class='dropdown-menu dropdown-menu-right'>
						<li>
							<a target="_blank" href="<?php echo site_url().'/employee/army_record/view_army/'.$items->army_id;?>" title="Preview"><i class="fa fa-info-circle" aria-hidden="true"></i> Preview
							</a>
							<a href="<?php echo site_url().'/employee/army_record/detail/'.$items->army_id;?>" title="Detail"><i class="fa fa-info-circle" aria-hidden="true"></i> Detail
							</a>
						</li>
						<li>
							<a href="<?php echo site_url().'/employee/army_record/edit_army/'.$items->army_id;?>" title="Edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</a>
						</li>
						<li><a style="cursor: pointer;" onclick="delete_army(<?php echo $items->army_id; ?>);" title="Edit"><span class="text-danger"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</span></a></li>
					</ul>
				</div>
			</td>
		</tr>
	<?php } ?>
    </tbody>
  </table>
  <nav class="text-center">
  <div style='text-align:center'><ul class='pagination' style='text-align:center'><?php echo $this->pagination->create_links(); ?></ul></div>
</nav>
</div>
<script type="text/javascript">
	function search(){
		var unit = document.getElementById("txt_unit").value;
		var ssid = $("#txt_ssid").val();
		var id_num = document.getElementById("txt_id").value;
		var name = document.getElementById("txt_name").value;
		$.ajax({
			type: "GET",
			url:"<?php echo base_url(); ?>index.php/employee/army_record/search_army",    
			data: {
				'ssid':ssid,
				'id_num':id_num,
				'full_name':name,
				'unit':unit
			},
			success: function(data){
	           $('.listbody').html(data);
	           $("body").loading('stop');
			}
		});
	}
	function delete_army($id){
		if (confirm('Are You Sure deleting this Army ?')) {
			location.href="<?php echo base_url(); ?>index.php/employee/army_record/delete_army/"+$id;
		}
	}
	$('select[name="select_country"]').change(function(){
		var cid = $(this).val();
		setGroup(cid);
	});
	function setGroup(cid){
		var url = "<?=base_url().'employee/army_record/get_group'?>";
		$.get(url,{cid:cid},function(data,status,xhr){
			$('select[name="select_group"]').html(data);
			console.log(data);
		});
	}
</script>