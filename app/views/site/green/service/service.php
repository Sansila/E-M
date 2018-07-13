
<div class="main-title" style=" background-color: #154360; ">
	<div class="container">

				<h1 class="main-title__primary style">Services</h1>
	</div>
</div>

<?php $sql = "SELECT * FROM site_profile";
    $siteprofile=$this->db->query($sql)->row();
    ?>

    
<section id="service">
	<div class="container">
		<div class="col-md-9">
			<div class="row">
			<?php 
			$i= 1;
			foreach ($serviceblog as $key ) 
			{
					if($key->article_id == 124)
						{ ?>
							<div class="col-md-6">
								<h4 class="servicetitle" ><?php echo $key->article_title;?></h4>
								<?php echo $key->content; ?>
							</div>
							<div class="col-md-6" style="padding-top: 20px;">
								<img src="<?=base_url().'assets/upload/article/'.$key->article_id.'_'.$key->url;?>" style="width: 100%; height: 380px;">
							</div>
					<?php } else { ?>
			</div>
							<h4 class="articletitle"><?php echo $key->article_title;?></h4>
							<div class="textwidget">
								<?php echo $key->content; ?>
							</div>
				<?php	}
				$i++;
					} ?>
					
					

				
			<!-- <h4 class="articletitle">Benefit from an integrated focus on Green Design</h4>
			<div class="textwidget">
				<p>Each of our designers and engineers is trained to recognize opportunities for and recommend Green Building Design Approaches wherever possible. We believe sustainable design equals good stewardship of our natural resources. We strive to exceed standards outlined by the US Green Building Council LEED and ASHRAE’s Standard 90.1 Energy Standard for Buildings on every project.</p>
			</div> -->
			<!-- end class grid 9 -->
			<div class="row">

					<div class="col-md-6">
						<div class="link-page-block">
							<div class="col-md-4">
								<div class="link-page-box">
									<a href="<?=base_url('site/mechanical')?>"><img src="<?=base_url().'assets/images/Mechanical-555x370.jpg'?>"></a>
								</div>
							</div>
							<div class="col-md-8">
								<h5 class="box-title"><a href="<?=base_url('site/mechanical')?>">MECHANICAL SERVICES</a></h5>
								<p class="paragraph">Whether you need to install cooling for a new server room or …</p>
							</div>
						</div>
						<div class="link-page-block">
							<div class="col-md-4">
								<div class="link-page-box">
									<a href="<?=base_url('site/electrical')?>"><img src="<?=base_url().'assets/images/electricalservice.jpg'?>"></a>
								</div>
							</div>
							<div class="col-md-8">
								<h5 class="box-title"><a href="<?=base_url('site/electrical')?>">ELECTRICAL SERVICES</a></h5>
								<p class="paragraph">As you decide who to hire for your next electrical project, your …</p>
							</div>
						</div>
						<div class="link-page-block">
							<div class="col-md-4">
								<div class="link-page-box">
									<a href="<?=base_url('site/plumbing')?>"><img src="<?=base_url().'assets/images/plumbing-tn.jpg'?>"></a>
								</div>
							</div>
							<div class="col-md-8">
								<h5 class="box-title"><a href="<?=base_url('site/plumbing')?>">Plumbing Services</a></h5>
								<p class="paragraph">Our plumbing engineers design systems with your “whole building” …</p>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="link-page-block">
							<div class="col-md-4">
								<div class="link-page-box">
									<a href="<?=base_url('site/building')?>"><img src="<?=base_url().'assets/images/building&tanant.png'?>"></a>
								</div>
							</div>
							<div class="col-md-8">
								<h5 class="box-title"><a href="<?=base_url('site/plumbing')?>">Building and Tenant Services</a></h5>
								<p class="paragraph">Whether you need to install cooling for a new server room or …</p>
							</div>
						</div>
						<div class="link-page-block">
							<div class="col-md-4">
								<div class="link-page-box">
									<a href="#"><img src="<?=base_url().'assets/images/speacialty.jpg'?>"></a>
								</div>
							</div>
							<div class="col-md-8">
								<h5 class="box-title"><a href="<?=base_url('site/plumbing')?>">Specialty Services</a></h5>
								<p class="paragraph">Whether you need to install cooling for a new server room or …</p>
							</div>
						</div>
						<div class="link-page-block">
							<div class="col-md-4">
								<div class="link-page-box">
									<a href="#"><img src="<?=base_url().'assets/images/buildingInformatin.jpg'?>"></a>
								</div>
							</div>
							<div class="col-md-8">
								<h5 class="box-title"><a href="<?=base_url('site/buildinginformation')?>">Building Information Modeling</a></h5>
								<p class="paragraph">Whether you need to install cooling for a new server room or …</p>
							</div>
						</div>
					</div>
			</div>
		</div>
		<div class="com-md-3 ">
			<div class="row">
				<div class="right-grid">
					<div class="recent-blog">
						<h4 class="style-title">SERVICE</h4>
						<div id="rightmenu">
							<ul>
								<li ><a  href="<?=base_url('site/mechanical')?>"> Mechanical Services</a></li>
								<li ><a href="<?=base_url('site/electrical')?>">Electrical Services</a></li>
								<li ><a href="<?=base_url('site/plumbing')?>">Plumbing Services</a></li>
								<li ><a href="<?=base_url('site/building')?>">Building and Tenant Services</a></li>
								<li ><a href="<?=base_url('site/specialty')?>">Specialty Services</a></li>
								<li ><a href="<?=base_url('site/buildinginformation')?>">Building Information Modeling</a></li>
							</ul>
						</div>
					</div>
				</div>
				
				<div class="right-grid">
					<div class="recent-blog">
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