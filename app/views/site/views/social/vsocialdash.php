
<div class="wrapper">
	<div class="clearfix" id="main_content_outer">
	    <div id="main_content">
	      <div class="row result_info">
		      	<div class="col-xs-6">
		      		<strong id='title'>Social Report Summary</strong>
		      	</div>
		      	<div class="col-xs-6" style="text-align: right">
		      		<span class="top_action_button">
			    		<a>
			    			<img onclick="showsort(event);" src="<?php echo base_url('assets/images/icons/sort.png')?>" />
			    		</a>
			    	</span>
		      		<span class="top_action_button">
			    		<a href="<?php echo site_url('student/student/import')?>" >
			    			<img src="<?php echo base_url('assets/images/icons/import.png')?>" />
			    		</a>
			    	</span>
			    	<span class="top_action_button">	
			    		<a href="#" id="export" title="Export">
			    			<img src="<?php echo base_url('assets/images/icons/export.png')?>" />
			    		</a>
			    	</span>
		      		<span class="top_action_button">
						<a href="#" id="print" title="Print">
			    			<img src="<?php echo base_url('assets/images/icons/print.png')?>" />
			    		</a>
		      		</span>		    	
			    	<span class="top_action_button">
			    		<a href="<?php echo site_url('social/family/add')?>" >
			    			<img src="<?php echo base_url('assets/images/icons/add.png')?>" />
			    		</a>
			    	</span>	      		
		      	</div> 			      
		  </div>
		  <?php //print_r($data)?>
		  <div class="row">
	      	<div class="col-sm-6">
	      		<div class="panel panel-default">
	      			<div class="panel-body">
		           		<div class="form_sep">
			                  <label class="req" for="reg_input_name"><?php echo "1. Thear are ".$data['f_total']['num_student']." children from ".$data['f_total']['num_family']." families" ?></label>
			                  <label class="req" for="reg_input_name"><?php echo "&nbsp &nbsp &nbsp".$data['f_total']['over_1student']." of ".$data['f_total']['num_family']." families have more than 1 child at Happy Chandara Primary School" ?></label> 
			                  <table class='table table-bordered'>
			                  		<thead>
			                  			<th>No</th>
			                  			<th>Family</th>
			                  			<th>Have Child</th>
			                  		</thead>
			                  		<tbody>
			                  			<?php
				                  			$i=1;
				                  			foreach ($data['h_child'] as $h_child) {
				                  				$father_name='';$father_name_kh='';$father_ocupation='';$mother_name='';$mother_name_kh='';$mother_ocupation='';$sort_num='100';$family_code='';$num_stu=$h_child['number_stu'];
				                  				$link=site_url()."/social/family/search?fn=$father_name&fnk=$father_name_kh&fc=$father_ocupation&mn=$mother_name&srev=&mnk=$mother_name_kh&mc=$mother_ocupation&s_num=$sort_num&fcode=$family_code&nst=$num_stu";
				                  				echo "<tr>
				                  							<td>$i</td>
									                  		<td>".$h_child['num_fam'] ." of ".$data['f_total']['num_family']." families</td>
									                  		<td><a href='".$link."' target='_blank'>".$h_child['number_stu']." children </a></td>
				                  					</tr>";
				                  					$i++;
				                  			}
			                  			?>
			                  			
			                  		</tbody>
			                  </table>
		                </div> 
					</div>
					<div class="panel-body">
		           		<div class="form_sep">
		           			<?php 
		           				  $f_percent=number_format(($datarice['family_get']['f_total']*100)/$data['f_total']['num_family'],2) ;
		           				  $family_not_re=($data['f_total']['num_family']-$datarice['family_get']['f_total']);
		           				  $f_not_recieved_percent=(100-$f_percent);
		           			?>
			                  <label class="req" for="reg_input_name"><?php echo "2. ".$datarice['family_get']['f_total']." of ".$data['f_total']['num_family']." families = ".$f_percent." % had reveived different quantity of rice" ?></label>
			                  <label class="req" for="reg_input_name"><?php echo "&nbsp &nbsp &nbsp".$family_not_re." of ".$data['f_total']['num_family']." families = ". $f_not_recieved_percent." % had never received rice from the school" ?></label> 
			                  <table class='table table-bordered'>
			                  		<thead>
			                  			<th>No</th>
			                  			<th>Family</th>
			                  			<th>Percent</th>
			                  			<th>Had Received</th>
			                  		</thead>
			                  		<tbody>
			                  			<?php
				                  			$j=1;
				                  			foreach ($datarice['f_times'] as $times) {
				                  				echo "<tr>
				                  							<td>$j</td>
									                  		<td>".$times['family'] ." of ".$datarice['family_get']['f_total']." families</td>
									                  		<td>".number_format(($times['family']*100)/$datarice['family_get']['f_total'],2)." %</td>
									                  		<td>".$times['num']." Times</td>
				                  					</tr>";
				                  					$j++;
				                  			}
			                  			?>
			                  			
			                  		</tbody>
			                  </table>
		                </div> 
					</div>
					<div class="panel-body">
		           		<div class="form_sep">
			                  <label class="req" for="reg_input_name"><?php echo "3. Happy Chandara Primary School had distributed ".$totalrice['totalrice']['total']." Kg in ".date('Y') ?></label>
			                  <table class='table table-bordered'>
			                  		<thead>
			                  			<th>No</th>
			                  			<th>Family</th>
			                  			<th>Received(Kg)</th>
			                  			<th>Total(Kg)</th>
			                  		</thead>
			                  		<tbody>
			                  			<?php
				                  			$j=1;
				                  			foreach ($totalrice['rice_detail'] as $rice) {
				                  				echo "<tr>
				                  							<td>$j</td>
									                  		<td>".$rice['family'] ." of ".$datarice['family_get']['f_total']." families</td>
									                  		<td>".$rice['f_rice']." Kg</td>
									                  		<td>".$rice['family']*$rice['f_rice']." Kg</td>
				                  					</tr>";
				                  					$j++;
				                  			}
			                  			?>
			                  			
			                  		</tbody>
			                  </table>
		                </div> 
					</div>
	      		</div>
	      	</div>

	      	<div class="col-sm-6">
	      		<div class="panel panel-default">
	      			<div class="panel-body">
		           		<div class="form_sep">
			                  <label class="req" for="reg_input_name"><?php echo "4. Thear are ".$member['total']." Member from ".$data['f_total']['num_family']." families" ?></label>
			                  <table class='table table-bordered'>
			                  		<thead>
			                  			<th>No</th>
			                  			<th>Family</th>
			                  			<th>Have Member</th>
			                  		</thead>
			                  		<tbody>
			                  			<?php
				                  			$i=1;
				                  			foreach ($member['data'] as $m) {
				                  				$father_name='';$father_name_kh='';$father_ocupation='';$mother_name='';$mother_name_kh='';$mother_ocupation='';$sort_num='100';$family_code='';$num_stu='';$num_mem=$m->t_mem;
				                  				$link=site_url()."/social/family/search?fn=$father_name&fnk=$father_name_kh&fc=$father_ocupation&mn=$mother_name&mnk=$mother_name_kh&srev=&mc=$mother_ocupation&s_num=$sort_num&fcode=$family_code&nst=$num_stu&nm=$num_mem";
				                  				echo "<tr>
				                  							<td>$i</td>
									                  		<td>".$m->f_total ." of ".$data['f_total']['num_family']." families</td>
									                  		<td><a href='".$link."' target='_blank'>".$m->t_mem." Member </a></td>
				                  					</tr>";
				                  					$i++;
				                  			}
			                  			?>
			                  			
			                  		</tbody>
			                  </table>
		                </div> 
					</div>
					
	      		</div>
	      	</div>	      	
	      </div>
	    </div>
   </div>
</div>

<script type="text/javascript">
	$(function(){

	});		
</script>