<div class="main-title" style=" background-color: #154360; ">
	<div class="container">
				<h1 class="main-title__primary style">Plumbing Services</h1>
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
				foreach ($loadplumbing as $key) {
					if($key->article_id  == 130) { ?>
						<div class="mechanical-title">
							<h1 class="style-title"><?php echo $key->article_title; ?></h1>
						</div>

						<div class="row" style="padding: 25px 0;">
							<div class="col-md-4">
								<div class="plumbing-image-article">
									<img src="<?=base_url().'assets/upload/article/'.$key->article_id.'_'.$key->url;?>">
								</div>
							</div>
							<div class="col-md-8">
								<div class="display-content">
									<?php echo $key->content; ?>
								</div>
							</div>
						</div>
					<?php } 
					else{ ?>		
					
						
						<div class="electrical-title">
							<h1 class="style-title"><?php echo $key->article_title; ?></h1>
						</div>
						<div class="display-content">
							<?php echo $key->content; ?>
						</div>
					
					<?php }
				} ?>
				</div>
				<!-- <div class="mechanical-title">
					<h1 class="style-title">Prevent issues by looking at the “big picture”</h1>
				</div>
				<div class="row">
					<div class="col-md-12" style=" padding: 40px 0;">
						<div class="col-md-4">
							
								<div class="plumbing-image-article">
									<img src="<?=base_url().'assets/images/plumbing.jpeg'?>">
								</div>
						</div>
						<div class="col-md-8">
							
							<div class="display-content">
								<p>Our plumbing engineers design systems with your “whole building” in mind to help you avoid surprises. From determining tap size, to coordinating with civil engineers, to deciding the location of incoming utilities, we carefully orchestrate your plumbing solutions to integrate with your overall plan. We look at project objectives, materials and designs from many different angles to get it right. Our engineers ensure that water and energy are used efficiently, that thorough fire protection and broad pollution systems are established and that your overall site is sustainable. We provide high-functioning systems to meet your specific needs as well as assist you in conserving natural resources.</p>
							</div>
						</div>
					</div>
		
				</div>
				<div class="electrical-title">
					<h1 class="style-title">A Holistic Design Approach</h1>
				</div>
				<div class="display-content">
					<p>Accomplishing great plumbing design means assembling a team that works on various aspects of your project while keeping multiple objectives in mind. Our engineering team members are highly-experienced and certified or licensed either as P.E., E.I., LEED AP or a combination of the three. They stay informed and on top of the latest developments in the field through active participation in a variety of organizations.</p>
				</div>
			</div> -->
			<div class="col-md-3">
				<div class="row">
					<div class="col-md-12">
						<h4 class="style-title">SERVICE</h4>
							<div id="rightmenu">
								<ul>
									<li ><a  href="<?=base_url('site/mechanical')?>"> Mechanical Services</a></li>
									<li ><a href="<?=base_url('site/electrical')?>">Electrical Services</a></li>
									<li class="onmenu"><a href="<?=base_url('site/plumbing')?>">Plumbing Services</a></li>
									<li ><a href="<?=base_url('site/building')?>">Building and Tenant Services</a></li>
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