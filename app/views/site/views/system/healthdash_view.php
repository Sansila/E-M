
<div class="wrapper">
	<div class="clearfix" id="main_content_outer">
	    <div id="main_content">
	      <div class="row result_info">
		      	<div class="col-xs-6">
		      		<strong id='title'>Health Report Summary</strong>
		      	</div>
		      	<div class="col-xs-6" style="text-align: right">
		      		
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
		  <?php $school=$this->db->where('schoolid',$this->session->userdata('schoolid'))->get('sch_school_infor')->row();
   			$school_name=$school->name;
   			$school_adr=$school->address;?>
		  <div class="row" id='export_tab'>
	      	<div class="col-sm-6">
	      		<div class="panel panel-default">
	      			<div class="panel-body" id='tab_print'>
		           		<div class="form_sep">
		           				<div style='float:left; '>
									<div style=' font-weight:bold; text-transform: uppercase;'><?php echo $school_name ?></div>
									<div style='text-align:center !important; font-weight:bold;'></div>
								</div>
								<p style="clear:both"></p>
				                <table align='center'>
									<thead>
										<th valign='top' align="center" style='width:80%'><h5 align="center">Health Report</h5></th> 
									</thead>
								</table>
			                  <label class="req" for="reg_input_name">Health : </label> Date :<?php echo date('d-m-Y',strtotime($date['s_date'])).' <b>To :</b> '.date('d-m-Y',strtotime($date['e_date'])) ?><br/>
			                  <label class='req'>Primary School : </label><br/>
			                  &emsp; &emsp; &emsp; Total Of medical visit: <?php echo $health['total'] ?>
			                 <div class="table-responsive" >
				                  <table class='table table-bordered'>
				                  		<thead>
				                  			<th></th>
				                  			<th># of visit</th>
				                  			<?php foreach ($this->dash->getdoctor() as $doc) {
				                  				echo "<th>$doc->first_name</th>";
				                  			} ?>
				                  		</thead>
					                  		<tr>
					                  			<td>Student</td>
					                  			<td><?php echo $health['stu'] ?></td>
					                  			<?php foreach ($this->dash->getdoctor() as $doc) {
					                  				$count=$this->db->query("SELECT count('treatmentid') as total 
					                  										FROM sch_medi_treatment 
					                  										WHERE patient_type='student' 
					                  										AND doctorid='".$doc->empid."'")->row()->total;
					                  				echo "<td>$count</td>";
					                  			} ?>
					                  		</tr>
					                  		<tr>
					                  			<td>Employee</td>
					                  			<td><?php echo $health['emp'] ?></td>
					                  			<?php foreach ($this->dash->getdoctor() as $doc) {
					                  				$counts=$this->db->query("SELECT count('treatmentid') as total 
					                  										FROM sch_medi_treatment 
					                  										WHERE patient_type='emp' 
					                  										AND doctorid='".$doc->empid."'")->row()->total;
					                  				echo "<td>$counts</td>";
					                  			} ?>
					                  		</tr>
				                  			
				                  		</tbody>
				                  </table>
				                </div>
		                </div>
		                <div class="form_sep">
		                	 &emsp; &emsp; &emsp; <label class='req'>Sickness Statistic : </label>
		                	<ul class='list-unstyled' style='margin-left:80px;'>
		                		<?php foreach ($this->dash->getsicknes($date['s_date'],$date['e_date']) as $sick) {
		                			echo "<li>$sick->disease : $sick->discount </li>";
		                		} ?>
		                	</ul>
		                </div>
		                <div class="form_sep">
		                	<?php $total=$this->dash->getrefer($date['s_date'],$date['e_date']);

		                	$patient=$this->dash->getrefer($date['s_date'],$date['e_date']); ?>
		                	 &emsp; &emsp; &emsp; <label class='req'>Refer : <?php echo $patient['patient'];  ?> patient, <?php echo $total['total']   ?> times of refer</label>
		                	<ul class='list-unstyled' style='margin-left:80px;'>

		                		<?php 
		                			$ex=$this->dash->getrefer($date['s_date'],$date['e_date']);
		                			foreach ($ex['ex'] as $refer) {
		                			echo "<li>$refer->external_hospital : $refer->count </li>";
		                		} ?>
		                	</ul>
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
			$("#print").on("click",function(){
				gPrint("tab_print");
			});
		})
		$("#export").on("click",function(e){
				var data=$('.table').attr('border',1);
					data = $("#export_tap").html().replace(/<img[^>]*>/gi,"");
	   			var export_data = $("<center><h3 align='center'></h3>"+data+"</center>").clone().find(".remove_tag").remove().end().html();
				window.open('data:application/vnd.ms-excel,' + encodeURIComponent(export_data));
    			e.preventDefault();
    			$('.table').attr('border',0);
		});
	</script>