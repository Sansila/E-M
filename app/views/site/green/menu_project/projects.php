
<div class="main-title" style="background-color: #154360; ">
	<div class="container">
				<h1 class="main-title__primary style">Projects</h1>
	</div>
	
</div>
<section id="projects">
	<div class="container">


		<ul id="breadcrumbs-four">
		    <!-- <li><a href="">Lorem ipsum</a></li>
		    <li><a href="">Vivamus nisi eros</a></li>
		    <li><a href="">Nulla sed lorem risus</a></li>
		    <li><a href="">Nam iaculis commodo</a></li>
		    <li><a href="" class="current">Current crumb</a></li> -->
		    <?php foreach ($projectmenu as $menu) {?>
		   		<li><a href="<?php echo base_url().$menu->link.'/'.$menu->menu_id;?>"><?php echo $menu->menu_name?></a></li>
		    <?php }?>
		</ul>



		<nav class="submenu">
			<ul>
				<li class="onproject"><a href="<?=base_url('site/projects')?>">All Project</a></li>
				<li><a href="<?=base_url('site/church')?>">CHURCH</a></li>
				<li><a href="<?=base_url('site/education')?>">EDUCATION</a></li>
				<li><a href="<?=base_url('site/goverment')?>">GOVERNMENT</a></li>
				<li><a href="<?=base_url('site/health_science')?>">HEALTH / SCIENCE / TECHNOLOGY</a></li>
				<li><a href="<?=base_url('site/menufacture')?>">INDUSTRIAL / MANUFACTURING</a></li>
				<li><a href="<?=base_url('site/multifamily')?>">MULTIFAMILY</a></li>
				<li><a href="<?=base_url('site/office')?>">OFFICE</a></li>
				<li><a href="<?=base_url('site/restaurant')?>">RESTAURANT/ RETAIL</a></li>
			</ul>
		</nav>

		

		<div class="contentItem">
			<div class="row">
				<div class="col-md-3">
					<a href=""><img class="image3" src="<?=base_url('assets/images/buildingInformatin.jpg')?>"></a>	
				</div>
				<div class="col-md-3">
					<a href=""><img class="image3" src="<?=base_url('assets/images/buildingInformatin.jpg')?>"></a>	
				</div>
				<div class="col-md-3">
					<a href=""><img class="image3" src="<?=base_url('assets/images/buildingInformatin.jpg')?>"></a>	
				</div>
				<div class="col-md-3">
					<a href=""><img class="image3" src="<?=base_url('assets/images/buildingInformatin.jpg')?>"></a>	
				</div>
				<div class="col-md-3">
					<a href=""><img class="image3" src="<?=base_url('assets/images/buildingInformatin.jpg')?>"></a>	
				</div>
				<div class="col-md-3">
					<a href=""><img class="image3" src="<?=base_url('assets/images/buildingInformatin.jpg')?>"></a>	
				</div>
				<div class="col-md-3">
					<a href=""><img class="image3" src="<?=base_url('assets/images/buildingInformatin.jpg')?>"></a>	
				</div>
				<div class="col-md-3">
					<a href=""><img class="image3" src="<?=base_url('assets/images/buildingInformatin.jpg')?>"></a>	
				</div>
			</div>
		</div>
	</div>
</section>