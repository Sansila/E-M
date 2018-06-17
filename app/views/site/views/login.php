<!DOCTYPE html>
<html lang="en">
	<head>	
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta name="description" content="">
	    <meta name="author" content="">	
	    <title>GreenSIM</title>	
	    <!-- Bootstrap Core CSS -->     
	 <link href="<?php echo base_url('assets/bower_components/bootstrap/dist/css/bootstrap.min.css') ?>" rel="stylesheet"> 
	    <!-- Custom Fonts -->
	    <!-- <link href="<?php echo base_url('assets/bower_components/font-awesome/css/font-awesome.min.css')?>" rel="stylesheet" type="text/css">  -->   
	    <!-- Jquery ui -->
	  <!--  <link href="<?php echo base_url('assets/css/jquery/jquery-ui.css') ?>" rel="stylesheet">
 -->		<link href="<?php echo base_url('assets/css/logstyle.css')?>" rel="stylesheet" type="text/css">    
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
		<script src="<?php echo base_url('assets/js/parsley.min.js')?>"></script> 	
		<!-- Bootstrap Core JavaScript -->
		<script src="<?php echo base_url('assets/bower_components/bootstrap/dist/js/bootstrap.min.js')?>"></script>	
		<style type="text/css">
			#login-form h3
			{
				/*background-color: #0093de;*/
			}

		</style>
		<script type="text/javascript">
			$(function(){
				$('#login-form').parsley();				
			})				
		</script>
		
	</head>
	<body style="background-image: url(<?php echo base_url('assets/images/logo/sa.jpg')?>);">	    
	  	<div class="container pull-right" >
	  	<!-- <div class="row">
	  		<div class="col-md-4">
	  			
	  		</div>
	  		<div class="col-md-4">
	  			<div id="login-form" style="text-align:center;margin-bottom:15px;">
	  				<img src="<?=base_url('assets/images/logo/logo_02_edited.png')?>" style="width:150px;">
	  			</div>
	  		</div>
	  	</div> -->
	  	<div class="row">
	  		<div class="col-sm-4"></div>
	  		<div class="col-sm-6">
	  			 <div id="login-form">

			  <h3>LOGIN <i class="glyphicon glyphicon-lock pull-right"></i></h3>
		
			    <fieldset>
			    	
			      <form class="form-horizontal" action="<?php echo site_url('login/getLogin')?>" method="post" >
			      		
			      		
			      		<div class="form-group">
				      	 <label class="control-label col-sm-3" for="email">Username:</label>
	      					<div class="col-sm-9">
				      		<input type="text" name="user_name" id="user_name" class="form-control" required data-parsley-required-message="Enter User Name"/>
							</div>
			      		</div>

			      		<div class="form-group">
				      	 <label class="control-label col-sm-3" for="email">Password:</label>
	      					<div class="col-sm-9">
				      		<input type="password" name="password" id="password"  class="form-control" required data-parsley-required-message="Enter Password" style="padding: 0 10px;" />
							</div>
			      		</div>

			      		<div class="form-group">			
							<div class="col-sm-4">
				      			<input type="submit" name="login" id="login"  class="btn btn-primary" value="Login"/>
							</div>
			      		</div>
			      </form>

			    </fieldset>

			  </div>
	  		</div>
	  		<div class="col-sm-2"></div>
	  	</div>
</div>
		<!-- <div class="container-fluid" style="background-image: url(<?php echo base_url('assets/images/nnnn.jpg')?>); height: 100%;width: 100%;position: absolute;">
		    <div class="row-fluid">
		        <div class="loginform text-center">	
		        	<div class="dv_login" >
		        		<div class="dv_login_icon">
		        			<img src="<?php echo base_url('assets/images/icons/login.png') ?>"/>
		        		</div> 
		        		<div class="dv_login_form">
		        			<form action="<?php echo site_url('login/getLogin')?>" method="post" id="loginform">
		        				<table class="">
			        				<tr>	     
			        				  					
			        					<td colspan="3" align="left" class="login_title"> 
			        						<span class="">855 SOLUTION</span>
			        					</td>
			        				</tr>
			        				<tr>
			        					<td>School</td>
			        					<td>:</td>
			        					<td>
			        						<select class="form-control" name="schoolid">
			        							<?php echo $this->green->GetSchool()?>	        							
			        						</select>
			        					</td>
			        				</tr>
			        				<tr>
			        					<td>Year</td>
			        					<td>:</td>
			        					<td>
			        						<select class="form-control" name="year">
			        							<?php echo $this->green->GetSchYear();?>	        							
			        						</select>
			        					</td>
			        				</tr>
			        				<tr>
			        					<td>UserName</td>
			        					<td>:</td>
			        					<td>
			        						<input type="text" name="user_name" id="user_name" class="form-control col-sm-4" required data-parsley-required-message="Enter User Name"/>
			        					</td>
			        				</tr>
			        				<tr>
			        					<td>Password</td>
			        					<td>:</td>
			        					<td>
			        						<input type="password" name="password" id="password"  class="form-control col-sm-4" required data-parsley-required-message="Enter Password"/>
			        					</td>
			        				</tr>
			        				<tr>		        					
			        					<td colspan="3" style="text-align: center!import">
			        						<input type="submit" name="login" id="login"  class="form-control btn-primary" value="Login"/>
			        					</td>
			        				</tr>
			        			</table>		        				
		        			</form>		        					        			
		        		</div>    		
		        	</div>		        	
		        </div>
		    </div>
		</div> -->
	  
	</body>
	<style>
		html, body{height:100%; margin:0;padding:0}
		
		body {
		    /*background-image: url(<?php echo base_url("assets/images/background.png")?>);*/
		    background-repeat: no-repeat;
		    background-position: 0 0;
		    background-size: cover;
		    opacity: 1px;
		}
		.log_action{
			padding-top: 18px;
			vertical-align: middle !important;
		}
		.log_action a{
			text-transform: uppercase;
			font-weight: bold;
			font-size: 9px;
			color: rgb(25,141,152);
		}
		.login_title{
			font-size: 18px;
			color: #276B08;
			font-weight: bold;
			padding-bottom: 20px;
			border-bottom: 1px solid #E9EDE8;
		}
		table{
			padding: 5px;
		}
		table td{
			padding: 3px;
			text-align: left;
		}
 
		.container-fluid{
		  height:100%;
		  display:table;
		  width: 100%;
		  padding: 0;
		}		 
		.row-fluid {height: 100%; display:table-cell; vertical-align: middle;} 
		.dv_login{
			position: relative;			
			width:600px;
			height:340px;
			margin: 0 auto; 			
			background: none repeat scroll 0 0 #f8f8f8;
		    border: 1px solid #DBD4D4;		 		   	
		    /*box-shadow: 1px 5px 5px 2px #E2DEDE;*/
		    border-radius: 4px;
		    padding-top: 15px;
		    opacity: 1;
			
		}
		.dv_login_icon{
			width:200px;
			float: left;			
		}
		.dv_login_form{
			width:290px;			
			float: left;
		}
		#login{
			width: 100px;
		}
	</style>
</html>
