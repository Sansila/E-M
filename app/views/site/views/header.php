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

    // $year=$this->session->userdata('year');
    // $schoolid=$this->session->userdata('schoolid');

    // if(isset($_REQUEST['yearid']) && $_REQUEST['yearid']!=""){
    //     $year=$_REQUEST['yearid'];
    // }elseif(isset($_REQUEST['y']) && $_REQUEST['y']!=""){
    //     $year=$_REQUEST['y'];
    // }elseif(isset($_REQUEST['year']) && $_REQUEST['year']!=""){
    //     $year=$_REQUEST['year'];
    // }
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
        					                        <a href="'.site_url($page_link).'?m='.urlencode($row['moduleid']).'&p='.urlencode($page['pageid']).'"><i class="fa '.$page['icon'].' fa-fw"></i> '.$page['page_name'].'</a>
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

    <title>ArmyLocal</title>
    <!-- jQuery -->
    <script src="<?php echo base_url('assets/bower_components/jquery/dist/jquery.min.js')?>"></script>  

    

    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/js/jquery.pos.js'); ?>">
    <!-- Bootstrap Core CSS -->     
    <link href="<?php echo base_url('assets/bower_components/bootstrap/dist/css/bootstrap.min.css') ?>" rel="stylesheet"> 
    

    <script src="<?php echo base_url('assets/bower_components/bootstrap/dist/js/bootstrap.min.js')?>"></script>  
    <script src="<?php echo base_url('assets/bower_components/metisMenu/dist/metisMenu.min.js')?>"></script>
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
    <!--QR_Code-->
    <script src="<?php echo base_url('assets/js/qr_code/jquery.qrcode.js')?>"></script>
    <script src="<?php echo base_url('assets/js/qr_code/qrcode.js')?>"></script>
    <!-- Jquery ui -->
    <link href="<?php echo base_url('assets/css/jquery/jquery-ui.css') ?>" rel="stylesheet">
	<!-- datepicker -->
    <link href="<?php echo base_url('assets/css/datepicker.css') ?>" rel="stylesheet">
	<link href="<?php echo base_url('assets/css/bootstrap-timepicker.css') ?>" rel="stylesheet">
        <link href="<?php echo base_url('assets/loading/jquery.loading.css') ?>" rel="stylesheet">
        <link href="<?php echo base_url('assets/select2/css/select2.min.css') ?>" rel="stylesheet">
	    <script src="<?php echo base_url(); ?>assets/plugins/validate/jquery.validate.min.js"></script>
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrapValidator.min.css">
    <script src="<?php echo base_url(); ?>assets/js/formValidation.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrapValidator.min.js"></script>
       <script src="<?php echo base_url('assets/js/bootstrap-datepicker.js')?>"></script> 
    <script src="<?php echo base_url('assets/js/bootstrap-timepicker.js')?>"></script>  
	<!-- Green CSS --->
	<link href="<?php echo base_url('assets/css/style.css') ?>" rel="stylesheet">
	<!-- Favicon -->
    <link rel="apple-touch-icon" href="../../apple-touch-icon.html">
    <link rel="icon" href="../../favicon.html">
    <link href="https://fonts.googleapis.com/css?family=Khmer" rel="stylesheet">


 
       
    
		
	<!-- Parsley Form Validation -->
	<script src="<?php echo base_url('assets/js/parsley.min.js')?>"></script> 	
	<!-- Bootstrap Core JavaScript -->
	<!-- Metis Menu Plugin JavaScript -->
			

    <script src="<?php echo base_url('assets/dist/js/sb-admin-2.js')?>" ></script> 
	
    <!-- jqprint -->
    <script src="<?php echo base_url('assets/js/jquery/jquery.PrintArea.js')?>"></script>  
    <script src="<?php echo base_url('assets/js/jquery-barcode.min.js')?>"></script>
            <script src="<?php echo base_url('assets/loading/jquery.loading.js')?>"></script>
            <script src="<?php echo base_url('assets/select2/js/select2.min.js')?>"></script>
    <link rel='stylesheet' href="<?php echo base_url('assets/css/15-inch.css')?>" />
        
    <style type="text/css">
        .kh-os{
            font-family: 'Khmer', 'Khmer OS' !important;
        }

        .navbar
        {
            background-color: #0093de;
        }

        #user_prifile
        {
            color: #ffffff;
        }
        #user_prifile:hover,#user_prifile:focus
        {
            background-color: #0f587e;
        }
    </style>
</head>	  
<body>

    <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo base_url()?>">
                	<!-- <img src="<?php echo base_url('assets/images/logo/logo.png')?>"  /> -->
                </a>

            </div>

            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                

                <li class="dropdown">
                    <!-- <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-envelope fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <a href="#">
                                <div>
                                    <strong>Mr.Chantha</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>
                                	Just starting to create user management form                                	
                                </div>
                            </a>
                        </li>                                                                   
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>Read All Messages</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul> -->
                    <!-- /.dropdown-messages -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <!-- <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-tasks fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-tasks">
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 1</strong>
                                        <span class="pull-right text-muted">40% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                            <span class="sr-only">40% Complete (success)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 2</strong>
                                        <span class="pull-right text-muted">20% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                            <span class="sr-only">20% Complete</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>                        
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Tasks</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul> -->
                    <!-- /.dropdown-tasks -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <!-- <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i> New Comment
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="pull-right text-muted small">12 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> Message Sent
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-tasks fa-fw"></i> New Task
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Alerts</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul> -->
                    <!-- /.dropdown-alerts -->
                </li>

                <!-- /.dropdown -->                
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="user_prifile">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <?php if($roleid=='1'){?>
                        <li><a href="<?php echo site_url("setting/user")?>"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="<?php echo site_url("setting/setting")?>"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <?php }?>
                        <li class="divider"></li>
                        <li><a href="<?php echo site_url("login/logOut") ?>"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->

            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search text-center">
                            <!-- <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div> -->
                            <!-- /input-group -->
                            <img src="<?=base_url().'assets/upload/mod_logo.png'?>" width="80px;">
                        </li>
                        <li>
                            <a href="<?php echo site_url("system/dashboard") ?>"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <!--
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Charts Report<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="flot.html">Student by class</a>
                                </li>
                                <li>
                                    <a href="morris.html">Families visit by month</a>
                                </li>
                            </ul>                            
                        </li>
                        --> 
                        <?php echo $menu;?>                
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
				
        <div id="page-wrapper">
       <!-- content --- -->

       <?php 
            if($this->session->flashdata("permision_error") == true)
            {


        ?>
       <div class="alert alert-danger alert-dismissable fade in" style="margin-top:15px;">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Error</strong> Sorry you don't have permision to perform the action.
      </div>

      <?php 
             }
       ?>
        	
        	
        	