<div class="main-title" style="background-image: url('http://www.mep-eng.com/wp-content/uploads/2018/05/Mechanical3-edit.png'); background-position: center center; background-repeat: no-repeat; background-attachment: scroll; background-color: #f2f2f2; ">
	<div class="container">
				<h1 class="main-title__primary style">Building and Tenant Services</h1>
	</div>
</div>

<?php $sql = "SELECT * FROM site_profile";
    $siteprofile=$this->db->query($sql)->row();
    ?>


<section id="mechanical">
	<div class="container">
		<div class="row">
			<div class="col-md-9">
				<?php foreach ($loadbuilding as $key) {
					if($key->article_id == 132){ ?>
						<div class="mechanical-title">
							<h1 class="style-title"><?php echo $key->article_title; ?></h1>
						</div>
						<div class="row">
							<div class="col-md-12" style=" padding: 40px 0;">
								<div class="col-md-5">
									<div class="plumbing-image-article">
										<img src="<?=base_url().'assets/upload/article/'.$key->article_id.'_'.$key->url;?>">
									</div>
								</div>
								<div class="col-md-7">
									<div class="display-content">
										<?php echo $key->content; ?>
									</div>
								</div>
							</div>
						</div>
						<?php }else{ ?>

						<div class="electrical-title">
							<h1 class="style-title"><?php echo $key->article_title; ?></h1>
						</div>
					
					<?php }
					} ?>
				</div>
				<!-- <div class="mechanical-title">
					<h1 class="style-title">Tenant Improvement Specialists</h1>
				</div>
				<div class="row">
					<div class="col-md-12" style=" padding: 40px 0;">
						<div class="col-md-5">
							
								<div class="plumbing-image-article">
									<img src="<?=base_url().'assets/images/building.png'?>">
								</div>
						</div>
						<div class="col-md-7">
							
							<div class="display-content">
								<p>Our dedicated Building and Tenant Services team is here for you and your building. We know you need a dependable partner who will deliver on time, every time, at the drop of the hat. We understand your primary objective—to keep every building tenant happy!</p>
								<p>Our Building and Tenant Services group has Tenant Improvement down to a science. We are a small, nimble team that can respond to your needs quickly, yet we have our entire MEP office to draw upon when required. We have completed over 2,000 tenant improvement projects ranging in size from 100 square feet to over 150,000 square feet.</p>
							</div>
						</div>
					</div>
		
				</div> -->
				<!-- <div class="electrical-title">
					<h1 class="style-title">Find out how our TI team can help you:</h1>
				</div>
			</div> -->
			<div class="col-md-3">
				<div class="row">
					<div class="col-md-12">
						<h4 class="style-title">SERVICE</h4>
							<div class="blog-menu">
								<ul id="service-menu" class="menu">
									<li class="menu-list"><a href="<?=base_url('site/mechanical')?>"> Mechanical Services</a></li>
									<li class="menu-list"><a href="<?=base_url('site/electrical')?>">Electrical Services</a></li>
									<li class="menu-list"><a href="<?=base_url('site/plumbing')?>">Plumbing Services</a></li>
									<li class="onmenu"><a href="<?=base_url('site/building')?>">Building and Tenant Services</a></li>
									<li class="menu-list"><a href="<?=base_url('site/specialty')?>">Specialty Services</a></li>
									<li class="menu-list"><a href="<?=base_url('site/buildinginformation')?>">Building Information Modeling</a></li>
								</ul>
							</div>
							<div class="clearfix"></div>
						<h4 class="style-title">Contact Us</h4>
							<div class="contectus-content">
								<p>
									<a href="tel:911" title="call"><i class="fa fa-phone"></i><?=$siteprofile->phone?></a><br>
									<a href="google.com"><i class="fa fa-envelope"></i> <?=$siteprofile->email?></a>
								</p>
								<p><i class="fa fa-home"></i><?=$siteprofile->address?></p>
								<p><a href="/contact-us/" title="Request a Proposal Online">Request a Proposal Online</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
</section>