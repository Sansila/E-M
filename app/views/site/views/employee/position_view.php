<div class="wrapper">
	<div class="clearfix" id="main_content_outer">
	    <div id="main_content">
	      <div class="row result_info col-xs-10">
		      	<div class="col-xs-6">
		      		<strong>Position Detail</strong>
		      	</div>
		      	<div class="col-xs-6" style="text-align: right">
		      		<span class="top_action_button">
						<a href="#" id="print" title="Print">
			    			<img src="<?php echo base_url('assets/images/icons/print.png')?>" />
			    		</a>
		      		</span>		
		      	</div> 			      
		  </div>
		</div>
	</div>
</div>	
<div class="row">
	<div class="col-sm-10" id='preview_wr'>
	    <div class="panel panel-default">
	      	<div class="panel-body">
	      		<div class="table-responsive" id="div_export_print">
	      			<table class="table">
	      				<thead>
	      					<tr>
	      						<th>Position</th>
	      						<th>Position (Kh)</th>
	      						<th>Description</th>
	      					</tr>
	      				</thead>
	      				<tbody>
	      					<tr>
	      						<td><?php echo $vpos['position'];?></td>
	      						<td><?php echo $vpos['position_kh'];?></td>
	      						<td><?php echo $vpos['description'];?></td>
	      					</tr>
	      				</tbody>
	      			</table>
	      		</div>
	      	</div>
	    </div>
	</div>
</div>