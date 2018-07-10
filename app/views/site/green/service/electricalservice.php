
<div class="main-title" style=" background-color: #154360; ">
	<div class="container">
				<h1 class="main-title__primary style">Electrical Services</h1>
	</div>
</div>


    <?php $sql = "SELECT * FROM site_profile";
    $siteprofile=$this->db->query($sql)->row();
    ?>

<section id="mechanical">
	<div class="container">
		<div class="row">
			<div class="col-md-9">
				 <?php 
				
				 foreach ($loadelectrical as $key){
				 if( $key->article_id == 128) { 
				 ?>
				 	<div class="row">
					<div class="col-md-12">
						<div class="col-md-4">
							<div class="image-article">
								<img src="<?=base_url().'assets/upload/article/'.$key->article_id.'_'.$key->url;?>" style="height: 250px;">
							</div>
						</div>
						<div class="col-md-8">
							<div class="mechanical-title">
								<h1 class="style-title"><?php echo $key->article_title; ?></h1>
							</div>
							<div class="display-content">
								<?php echo $key->content; ?>
							</div>
						</div>
					</div>
				</div>
			<?php } else  {
		?>
			<?php 
					?>
				<div class="electrical-title">
					<h1 class="style-title"><?php echo $key->article_title; ?></h1>
				</div>
				<div class="display-content">
					<?php echo $key->content; ?>
				</div>
			</div>
			<?php 
				}
				
			} 
			?>
			<div class="col-md-3">
				<div class="row">
					<div class="col-md-12">
						<h4 class="style-title">SERVICE</h4>
							<div class="blog-menu">
								<ul id="service-menu" class="menu">
									<li class="menu-list"><a href="<?=base_url('site/mechanical')?>"> Mechanical Services</a></li>
									<li class="onmenu"><a href="<?=base_url('site/electrical')?>">Electrical Services</a></li>
									<li class="menu-list"><a href="<?=base_url('site/plumbing')?>">Plumbing Services</a></li>
									<li class="menu-list"><a href="<?=base_url('site/building')?>">Building and Tenant Services</a></li>
									<li class="menu-list"><a href="<?=base_url('site/specialty')?>">Specialty Services</a></li>
									<li class="menu-list"><a href="<?=base_url('site/buildinginformation')?>">Building Information Modeling</a></li>
								</ul>
							</div>
							<div class="clearfix"></div>
						<h4 class="style-title">Contact Us</h4>
							<div class="contectus-content">
								<p>
									<a href="tel:911" title="call"><i class="fa fa-phone"></i> <?=$siteprofile->phone?></a><br>
									<a href="google.com"><i class="fa fa-envelope"></i> <?=$siteprofile->email?></a>
								</p>
								<p><i class="fa fa-home"></i> <?=$siteprofile->address?></p>
								<p><a href="/contact-us/" title="Request a Proposal Online">Request a Proposal Online</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
</section>