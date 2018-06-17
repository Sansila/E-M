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
	<div class="modal-body" id="inv_print">
	<div class="row" style="padding-top: 20px; padding-left: 20px; padding-right: 20px;">
		
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
			<div class="row">
				<div class="col-sm-12">
					<div class="row">
						<div class="col-sm-11">
							<img src="<?php echo base_url();?>/app/logo/logo.png" width="200">
						</div>
						<div class="col-sm-1" style="text-align: right;">
							 <span class="top_action_button">
          <a href="JavaScript:void(0);" id="print_inv" class="print_inv" title="Print">
              <img src="<?php echo base_url('assets/images/icons/print.png')?>" />
            </a>
            </span>     
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
									.ftd{
										text-align: left;font-weight: bold; font-size: 12px; font-family: "Times New Roman", Times, serif; 
									}
							  </style>
					        <!-- header title -->
					        <table width="100%"  id="headertitle"><thead><tr><th>INCOME SUMMARY</th></tr></thead></table>
					        <table width="100%"  id="headertitle1"><thead><tr><th>School Year: 2015-2016</th></tr></thead></table>
					        <table width="100%"  id="headertitle3"><thead><tr><th>As of: 31 Aug 2015</th></tr></thead></table>

					        <table class="table table-bordered" style="text-align: center;">
						    <thead>
						    	<tr style="background-color: #e8f8f5; padding: 5px;font-weight: bold; font-size: 14px; font-family: "Times New Roman", Times, serif;">
						    		<td align="center"> Revanue</td>
						    		<td align="center"> 
						    			<span class="top_action_button">
								    		<a href="#" >
								    			<img src="<?php echo base_url('assets/images/icons/addicon.png')?>" />
								    		</a>
								    	</span>	  
						    		</td>
						    		<td align="center"> 
						    			<span class="top_action_button">
								    		<a href="#" >
								    			<img src="<?php echo base_url('assets/images/icons/removeicon.png')?>" />
								    		</a>
								    	</span>		
						    		</td>
						    		<td align="center"> Unearn</td>
						    	</tr>
						    </thead>
						    <tbody>
						    <?php 
						    $sql="SELECT * from sch_pay_service where deleted='0'";
			     			$sg=$this->db->query($sql)->result();

			     			foreach ($sg as $key => $vg) {	

						     ?>
						    	<tr>
						    		<td class="ftd" ><?php echo $vg->service_name; ?></td>
						    		<td><?php echo $vg->cost; ?></td>
						    		<td><?php echo $vg->price; ?></td>
						    		<td>Unsign</td>
						    		
						    	</tr>
						    <?php } ?>
						    </tbody>
						 
						</table>	  
					       
				</div>
				
			</div>
			
			

		</div>
		<div class="col-sm-2"></div>
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