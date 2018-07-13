<div class="main-title" style=" background-color: #154360; ">
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
				
			<div class="col-md-3">
				<div class="row">
					<div class="col-md-12">
						<h4 class="style-title">SERVICE</h4>
							<div id="rightmenu">
								<ul>
									<li ><a  href="<?=base_url('site/mechanical')?>"> Mechanical Services</a></li>
									<li ><a href="<?=base_url('site/electrical')?>">Electrical Services</a></li>
									<li ><a href="<?=base_url('site/plumbing')?>">Plumbing Services</a></li>
									<li class="onmenu"><a href="<?=base_url('site/building')?>">Building and Tenant Services</a></li>
									<li ><a href="<?=base_url('site/specialty')?>">Specialty Services</a></li>
									<li ><a href="<?=base_url('site/buildinginformation')?>">Building Information Modeling</a></li>
								</ul>
							</div>
							<div class="clearfix"></div>
						<h4 class="style-title" style="padding-top: 20px;">Contact Us</h4>
							<div class="contectus-content">
								<p>
									<a href="tel:911" title="call"><i class="fa fa-phone"></i> <?=$siteprofile->phone?></a>
									<a href="google.com"><i class="fa fa-envelope"></i> <?=$siteprofile->email?></a>
								</p>
								<p><i class="fa fa-home"></i> <?=$siteprofile->address?></p>
								<!-- <p><a href="/contact-us/" title="Request a Proposal Online"> Request a Proposal Online</a></p> -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
</section>