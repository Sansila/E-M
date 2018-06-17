<?php     
	$user_name=$this->session->userdata('user_name');	
	if($user_name==""){
		$this->green->goToPage(site_url('login'));		
	}    
	#====== get menu ============
	//print_r($this->session->userdata('moduleids'));
	$menu="";
	$roleid=$this->session->userdata('roleid');    
	$modules=$this->session->userdata('ModuleInfors');	
	
	$pages=$this->session->userdata('PageInfors');

    $year=$this->session->userdata('year');
    $schoolid=$this->session->userdata('schoolid');

    if(isset($_REQUEST['yearid']) && $_REQUEST['yearid']!=""){
        $year=$_REQUEST['yearid'];
    }elseif(isset($_REQUEST['y']) && $_REQUEST['y']!=""){
        $year=$_REQUEST['y'];
    }elseif(isset($_REQUEST['year']) && $_REQUEST['year']!=""){
        $year=$_REQUEST['year'];
    }
    $this->green->setActiveUser($this->session->userdata('userid'));
    $this->green->setActiveRole($roleid);
    if(isset($_GET['m'])){
        $this->green->setActiveModule($_GET['m']);
    }
    if(isset($_GET['p'])){
        $this->green->setActivePage($_GET['p']); 
    }
          

    if(count($modules)>0){

		foreach ($modules as $row) {
            if($row['mod_position']=='2'){
                        
    			$menu.='<li>
    		                <a href="#"><i class="fa fa-wrench fa-fw"></i> '.$row['module_name'].'<span class="fa arrow"></span></a>';					
    					if(count($pages)>0){

    						if(isset($pages[$row['moduleid']])){
    							$page_mod=$pages[$row['moduleid']];

        						if(count($page_mod)>0 && isset($pages[$row['moduleid']])){

        							$menu.='<ul class="nav nav-second-level">'; 
        							foreach($page_mod as $page){
        								$page_link=$page['link'];
        								 $menu.='<li>
        					                        <a href="'.site_url($page_link).'?y='.$year.'&m='.urlencode($row['moduleid']).'&p='.urlencode($page['pageid']).'"><i class="fa '.$page['icon'].' fa-fw"></i> '.$page['page_name'].'</a>
        					                    </li>';
        							}
        							$menu.='</ul>';							
        						}
                            }   
    						
    					}	
    										
    	                
    			$menu.='</li>';
			}		
		}
	}
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Report Payment</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/js/jquery.pos.js'); ?>">
    <!-- Bootstrap Core CSS -->     
    <link href="<?php echo base_url('assets/bower_components/bootstrap/dist/css/bootstrap.min.css') ?>" rel="stylesheet"> 
       
    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url('assets/bower_components/metisMenu/dist/metisMenu.min.css')?>" rel="stylesheet">
    <!-- Timeline CSS -->
    <link href="<?php echo base_url('assets/dist/css/timeline.css')?>" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo base_url('assets/dist/css/sb-admin-2.css')?>" rel="stylesheet">
    <!-- Morris Charts CSS -->
    <link href="<?php echo base_url('assets/bower_components/morrisjs/morris.css')?>" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="<?php echo base_url('assets/bower_components/font-awesome/css/font-awesome.min.css')?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('assets/css/font-awesome.min.css')?>" rel="stylesheet" type="text/css">
    <!-- Jquery ui -->
    <link href="<?php echo base_url('assets/css/jquery/jquery-ui.css') ?>" rel="stylesheet">
	<!-- datepicker -->
	<link href="<?php echo base_url('assets/css/datepicker.css') ?>" rel="stylesheet">
	
	
	<!-- Green CSS --->
	<link href="<?php echo base_url('assets/css/style.css') ?>" rel="stylesheet">
	<!-- Favicon -->
    <link rel="apple-touch-icon" href="../../apple-touch-icon.html">
    <link rel="icon" href="../../favicon.html">
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

	<!-- jQuery -->
	<script src="<?php echo base_url('assets/bower_components/jquery/dist/jquery.min.js')?>"></script>	
	<script src="<?php echo base_url('assets/js/jquery/jquery-ui.js')?>"></script>     
		
	<!-- Parsley Form Validation -->
	<script src="<?php echo base_url('assets/js/parsley.min.js')?>"></script> 	
	<!-- Bootstrap Core JavaScript -->
	<script src="<?php echo base_url('assets/bower_components/bootstrap/dist/js/bootstrap.min.js')?>"></script>		
	<!-- Metis Menu Plugin JavaScript -->
	<script src="<?php echo base_url('assets/bower_components/metisMenu/dist/metisMenu.min.js')?>"></script>		
	<!-- Morris Charts JavaScript 
	<script src="<?php echo base_url('assets/bower_components/raphael/raphael-min.js')?>"></script>
	<script src="<?php echo base_url('assets/bower_components/morrisjs/morris.min.js')?>"></script>
	<script src="<?php echo base_url('assets/js/morris-data.js')?>"></script>	-->
	
    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url('assets/dist/js/sb-admin-2.js')?>" ></script> 
	<!-- Date pictker -->
	<script src="<?php echo base_url('assets/js/bootstrap-datepicker.js')?>"></script>	
    <!-- jqprint -->
    <script src="<?php echo base_url('assets/js/jquery/jquery.PrintArea.js')?>"></script>  
    <script src="<?php echo base_url('assets/js/gScript.js')?>"></script>
    <script src="<?php echo base_url('assets/js/jquery-barcode.min.js')?>"></script>
        

</head>	  
<body>
 <span class="top_action_button">
          <a href="JavaScript:void(0);" id="print_inv" class="print_inv" title="Print">
              <img src="<?php echo base_url('assets/images/icons/print.png')?>" />
            </a>
            </span>      
	 <div class="modal-body" id="inv_print">
	<div class="row" style="padding-top: 20px; padding-left: 20px; padding-right: 20px;">
		

		<div class="col-sm-12">
			<div class="row">
				<div class="col-sm-12">
					<div class="row">
						<div class="col-sm-11">
							<img src="<?php echo base_url();?>/app/logo/logo.png" width="200">
						</div>
						<div class="col-sm-1" style="text-align: right;">
							
						</div>
					</div>
					
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12">
							 <style type="text/css"> 
							 		#headertitle4 tbody tr td{ padding: 5px 0px 5px 0px; font-size: 10px;}
						            #headertitle4 thead tr th{ padding: 10px; text-align: center; font-weight: bold; font-size: 12px; font-family: "Times New Roman", Times, serif;}
						              
						          	#headertitle5 tbody tr td{ padding: 5px 0px 5px 0px; font-size: 10px;}
						            #headertitle5 thead tr th{ padding: 10px; text-align: center; font-weight: bold; font-size: 12px; font-family: "Times New Roman", Times, serif;}
						              
						            #headertitle tbody tr td{ padding: 5px 0px 5px 0px; font-size: 10px;}
						            #headertitle thead tr th{ padding: 10px; text-align: center; font-weight: bold; font-size: 32px; font-family: "Times New Roman", Times, serif;}
						            #headertitle1 thead tr th{ padding: 5px;padding-bottom: 10px; text-align: center; font-weight: bold; font-size: 18px; font-family: "Times New Roman", Times, serif;}
						            #headertitle3 thead tr th{ padding: 5px; text-align: left; font-weight: bold; font-size: 18px; font-family: "Times New Roman", Times, serif;}
						            #headertitle2 thead tr th{font-family: "Times New Roman", Times, serif;}
						            .nowrap {
									    white-space: nowrap;
									}
							  </style>
					        <!-- header title -->
					        <table width="100%"  id="headertitle"><thead><tr><th>INCOME SUMMARY</th></tr></thead></table>
					        <table width="100%"  id="headertitle1"><thead><tr><th>School Year: 2015-2016</th></tr></thead></table>
					        <table width="100%"  id="headertitle3"><thead><tr><th>As of: 31 Aug 2015</th></tr></thead></table>

					        <table class="table table-bordered" id="headertitle2" style="border-bottom: none;border-style: none;">
						    <thead style="background-color: #fbeee6;font-size: 12px; ">
							     <tr style="font-size: 13px;" >
							        <th align="center" rowspan="2" style="padding-bottom: 30px;">N&deg;</th>
					                    <th align="center" rowspan="2" style="text-align: center;padding-bottom: 30px;">Revenue</th>
							        	<?php 
							        		$i=1;
							        		$month_arr=array();
							        		$term_arr=array();
							        		foreach ($term as $row) {
							        			$term_arr[]=$row->term_type_id;
							        			$monthdata=$this->inv->getmonth($row->term_start_date,$row->term_end_date);
							        			$month_arr[]=$monthdata;
							        			$nummonth=count($monthdata);
							        			echo ' <th align="center" colspan="'.$nummonth.'" style="text-align: center;">Term '.$i.'</th> 
					                    				<th align="center" rowspan="2" style="text-align: center; padding-bottom: 30px;">Total</th> ';
					                    		$i++;
					                    		
							        		}
							        	 ?>
					                               
					                    <th align="center" rowspan="2" style="text-align: center;padding-bottom: 30px;">GRAND TOTAL</th> 
							    </tr>
				       			<tr>	
				       					<?php 
				       						foreach ($month_arr as $key => $value) {
				       							foreach ($value as $arrkey => $month) {
				       								echo '<th align="center" style="text-align: center;width:90px;padding-bottom: 15px;" >'.$month.'</th>';
				       								# code...
				       							}
				       						}
				       					?>
					                  
				                </tr>
				        		
						    </thead>
						    <tbody style="text-align: center;">
						    	<!-- <tr>
						    		<td>1</td>
						    		<td>Enrollment</td>
						    		<?php 
				       						foreach ($month_arr as $key => $value) {
				       							foreach ($value as $arrkey => $month) {
				       								echo '<th align="center" style="text-align: center;width:90px;padding-bottom: 15px;" >'.$month.'</th>';
				       								# code...
				       							}
				       							echo '<td></td>';

				       						}
				       					?>
						    		<td></td>

						    	</tr> -->
						    <?php
						    	$i=1;
						    	$total_by_month=array();
						    	$total_sum_service=0;
						    	foreach ($service as $row) {
						    		echo " <tr>
										        <td>$i</td>
										        <td>$row->service_name</td>";
										        $total_service=0;
										        foreach ($month_arr as $key => $value) {
										        	$total_term=0;
					       							foreach ($value as $arrkey => $month) {

					       								$service_id=$row->service_id;
					       								$term_type_id=$term_arr[$key];
					       								$total_month=$this->inv->gettotalmoneybymonth($service_id,$term_type_id,$month);
					       								$total_term+=$total_month->total;

					       								if(isset($total_by_month[$key][$arrkey])){
					       									$total_by_month[$key][$arrkey]+=$total_month->total;
					       								}else{
					       									$total_by_month[$key][$arrkey]=$total_month->total;
					       								}

					       								echo '<td class="nowrap" align="center" style="text-align: center;" >$ '.number_format($total_month->total,2).'</td>';
					       								# code...
					       							}
					       							if(isset($total_by_month[$key][$arrkey])){
				       									$total_by_month[$key]['total_term']+=$total_term;
				       								}else{
				       									$total_by_month[$key]['total_term']=$total_term;
				       								}
										        	$total_service+=$total_term;
					       							echo '<th class="nowrap">$ '.number_format($total_term,2).'</th>';
					       						}
					       						// if(isset($total_by_month[$key][$arrkey])){
			       								// 	$total_by_month[$key]['total_service']+=$total_service;
			       								// }else{
			       								// 	$total_by_month[$key]['total_service']=$total_service;
			       								// }
			       								$total_sum_service+=$total_service;
					       						echo '<th class="nowrap">$ '.number_format($total_service,2).'</th>';

										       
									echo "</tr>";# code...
										      $i++;
						    	}
						     ?>
						     
						    </tbody>
						    <thead style="background-color: #fbeee6;">
						    	<tr style="background-color: #fbeee6;text-align: center;">
						    		<td align="center" colspan="2">Sub-Total</td>
						    		<?php 
							    		foreach ($total_by_month as $key => $value) {
							    			foreach ($value as $keyarr => $total) {
							    				echo "<th class='nowrap'>$ ".number_format($total,2)."</th>";# code...
							    			}

							    		}
							    		echo "<th class='nowrap'>$ ".number_format($total_sum_service,2)."</th>";# code...

						    		?>

						    	</tr>
						    </thead>
						   <!--  <thead style="border-style: none;">
						    	<tr style="border-style: none; border-bottom: none;font-weight:bold;">
						    		<td colspan="6" style="border-style: none;text-align: right;">Total Ost-2015: </td>
						    		<td colspan="2" style="border-style: none;text-align: left;"> $  4,015.05</td>
						    		<td colspan="3" style="border-style: none;text-align: right;">Total Ost-2015: </td>
						    		<td colspan="2" style="border-style: none;text-align: left;"> $  4,015.05</td>
						    		<td colspan="3" style="border-style: none;text-align: right;">Total Ost-2015: </td>
						    		<td colspan="2" style="border-style: none;text-align: left;"> $  4,015.05</td>
						    	</tr>
						    </thead> -->
						  </table>
						  
					       
				</div>
				
			</div>
			<div class="row" style="padding-top: 20px;padding-left:20px;">
				
					<div class="col-sm-12">
						<div class="row">
								<div class="col-sm-5" style="text-align: center;padding-right: 60px;">
											<table id="headertitle5" style="border-style: none;border-bottom: none;text-align: center;">
											    <thead style="border-style: none;border-bottom: none; text-align: center;text-align: center;">
											      <tr style="border-style: none;border-bottom: none;text-align: center;">
											      
											        <th colspan="8" align="center" style="text-align: center;font-size: 15px;">Number of Student by Term</th>

											      </tr>
											    </thead>
											    <thead style="border-style: none;border-bottom: none; ">
											      <tr style="border-style: none;border-bottom: none;">
											        
											        <th align="center" style="width: 120px;"></th>
											        <th align="center" style="width: 100px;background-color: #ebedef;">Tuition</th>
											        <th align="center" style="width: 100px;background-color: #ebedef;">Admin</th>
											        <th align="center" style="width: 100px;background-color: #ebedef;">Snack</th>
											        <th align="center" style="width: 100px;background-color: #ebedef;">Lunch</th>
											        <th align="center" style="width: 100px;background-color: #ebedef;">Lerning<br>Marterail</th>
											        <th align="center" style="width: 100x;background-color: #ebedef;">Enroll</th>
											        <th align="center" style="width: 100px;background-color: #ebedef;">Van<br>Service</th>

											      </tr>
											    </thead>
											    <tbody>
											      <tr>
											        <td style="text-align: right;">Term 1</td>
											        <td>177</td>
											        <td>85</td>
											        <td>46</td>
											        <td>37</td>
											        <td>138</td>
											        <td>53</td>
											        <td>99</td>
											      </tr>
											      <tr>
											        <td style="text-align: right;">Term 2</td>
											        <td>33</td>
											        <td>132</td>
											        <td>671</td>
											        <td>3</td>
											        <td>9</td>
											        <td>76</td>
											        <td>89</td>
											      </tr>
											      <tr>
											        <td style="text-align: right;">Term 3</td>
											        <td>33</td>
											        <td>132</td>
											        <td>671</td>
											        <td>3</td>
											        <td>9</td>
											        <td>76</td>
											        <td>89</td>
											      </tr>
											      <tr>
											        <td style="text-align: right;">Term 4</td>
											        <td>33</td>
											        <td>132</td>
											        <td>671</td>
											        <td>3</td>
											        <td>9</td>
											        <td>76</td>
											        <td>89</td>
											      </tr>
											      <tr>
											        <td style="text-align: right;">Semester 1</td>
											        <td>33</td>
											        <td>132</td>
											        <td>671</td>
											        <td>3</td>
											        <td>9</td>
											        <td>76</td>
											        <td>89</td>
											      </tr>
											      <tr>
											        <td style="text-align: right;">Semester 2</td>
											        <td>33</td>
											        <td>132</td>
											        <td>671</td>
											        <td>3</td>
											        <td>9</td>
											        <td>76</td>
											        <td>89</td>
											      </tr>
											      <tr>
											        <td style="text-align: right;">Year</td>
											        <td>33</td>
											        <td>132</td>
											        <td>671</td>
											        <td>3</td>
											        <td>9</td>
											        <td>76</td>
											        <td>89</td>
											      </tr>
											    </tbody>
											  </table>
								</div>

								<div class="col-sm-5" style="text-align: center;">
										<table id="headertitle5" style="border-style: none;border-bottom: none;text-align: center;">
										    <thead style="border-style: none;border-bottom: none; text-align: center;text-align: center;">
										      <tr style="border-style: none;border-bottom: none;text-align: center;">
										      
										        <th colspan="8" align="center" style="text-align: center;font-size: 15px;">Number of Student by Term</th>

										      </tr>
										    </thead>
										    <thead style="border-style: none;border-bottom: none; ">
										      <tr style="border-style: none;border-bottom: none; background-color:  #ebedef;">
										        
										        <th align="center" style="width: 220px;">Number of Student</th>
										        <th align="center" style="width: 90px;">Tuition</th>
										        <th align="center" style="width: 90px;">Admin</th>
										        <th align="center" style="width: 90px;">Snack</th>
										        <th align="center" style="width: 90px;">Lunch</th>
										        <th align="center" style="width: 90px;">Lerning<br>Marterail</th>
										        <th align="center" style="width: 90px;">Van<br>Service</th>

										      </tr>
										    </thead>
										    <tbody>
										      <tr>
										        <td>Term 1 + Semester 1 + Year</td>
										        <td>30</td>
										        <td>49</td>
										        <td>44</td>
										        <td>456</td>
										        <td>122</td>
										        <td>223</td>
										        
										      </tr>
										      <tr>
										        <td>Term 2 + Semester 1 + Year</td>
										        <td>123</td>
										        <td>78</td>
										        <td>545</td>
										        <td>32</td>
										        <td>19</td>
										        <td>78</td>
										       
										      </tr>
										       <tr>
										        <td>Term 1 + Semester 1 + Year</td>
										        <td>30</td>
										        <td>49</td>
										        <td>44</td>
										        <td>456</td>
										        <td>122</td>
										        <td>223</td>
										        
										      </tr>
										      <tr>
										        <td>Term 2 + Semester 1 + Year</td>
										        <td>123</td>
										        <td>78</td>
										        <td>545</td>
										        <td>32</td>
										        <td>19</td>
										        <td>78</td>
										       
										      </tr>

										    </tbody>
										  </table>
							  	</div>
							  	<div class="col-sm-2" align="right" >
										  <table id="headertitle4" style="text-align: right;">
								
											<thead>
												<tr>
													<th colspan="2" style="font-size: 14px;">Amount</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td style="font-weight: bold; padding-right: 20px; text-align: right;font-family: "Times New Roman", Times, serif;">Term 1 </td>
													<td> $  140.00</td>
												</tr>
												<tr>
													<td style="font-weight: bold; padding-right: 20px;text-align: right; font-family: "Times New Roman", Times, serif;">Term 2 </td>
													<td style="border-bottom: solid;"> $  140.00</td>
												</tr>
												<tr style="font-weight: bold;">
													<td style="font-weight: bold; padding-right: 20px;text-align: right; text-align: right;padding-bottom: 30px; font-family: "Times New Roman", Times, serif;">Semester 1 </td>
													<td style="padding-bottom: 30px;"> $  140.00</td>
												</tr>


												<tr>
													<td style="font-weight: bold; padding-right: 20px;text-align: right; font-family: "Times New Roman", Times, serif;">Term 1 </td>
													<td> $  140.00</td>
												</tr>
												<tr>
													<td style="font-weight: bold; padding-right: 20px;text-align: right; font-family: "Times New Roman", Times, serif;">Term 2 </td>
													<td style="border-bottom: solid;"> $  140.00</td>
												</tr>
												<tr style="font-weight: bold;">
													<td style="font-weight: bold; padding-right: 20px; text-align: right;font-family: "Times New Roman", Times, serif;">Semester 2 </td>
													<td style=""> $  140.00</td>
												</tr>
												<tr style="font-weight: bold;">
													<td style="font-weight: bold; padding-right: 20px;text-align: right; font-family: "Times New Roman", Times, serif;">Year  </td>
													<td style=""> $  140.00</td>
												</tr>

											</tbody>
											
										</table>
								</div>

						</div>

					</div>
			</div>
			<div class="row" style="padding-left: 70px; padding-bottom: 100px;padding-top: 100px;">
					<div class="col-sm-12">
						<div class="row">
							<div class="col-sm-3">
								<table>
									<tr>
										<td style="padding-bottom: 120px;">Prepared by :</td>
									</tr>
									<tr>
										<td style="border-bottom: groove;"></td>
									</tr>
								</table>
							</div>
							<div class="col-sm-3">
								<table>
									<tr>
										<td style="padding-bottom: 120px;">Checked by :</td>
									</tr>
									<tr>
										<td style="border-bottom: groove;"></td>
									</tr>
								</table>
							</div>
							<div class="col-sm-3">
								<table>
									<tr>
										<td style="padding-bottom: 120px;">Verified by :</td>
									</tr>
									<tr>
										<td style="border-bottom: groove;"></td>
									</tr>
								</table>
							</div>
							<div class="col-sm-3">
								<table>
									<tr>
										<td style="padding-bottom: 120px;">Approved by :</td>
									</tr>
									<tr>
										<td style="border-bottom: groove;"></td>
									</tr>
								</table>
							</div>
						</div>
							
						
					</div>
			</div>

		</div>

	</div>
	</div>
<script type="text/javascript">
	 $(function(){
            $("#print_inv").on("click", function(){
                var export_data = $("#inv_print").html();
                var title = "";
                gsPrint(title,export_data);
            });
        });
</script>
</body>
</html>