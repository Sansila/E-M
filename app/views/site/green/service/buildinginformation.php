<div class="main-title" style="background-image: url('http://www.mep-eng.com/wp-content/uploads/2018/05/Mechanical3-edit.png'); background-position: center center; background-repeat: no-repeat; background-attachment: scroll; background-color: #f2f2f2; ">
	<div class="container">
				<h1 class="main-title__primary style">Building Information Modeling</h1>
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
				$i = 1;
				foreach($loadbuildinginformation as $value){
					?>
						<div class="mechanical-title">
							<h1 class="style-title"><?php echo $value->article_title; ?></h1>
						</div>
						<?php
							if($i == 1) {
								$img = $this->db->query("SELECT * FROM tblgallery where article_id = '$value->article_id' ")->result(); ?>
								<div class="row">
									<div class="col-md-12" style=" padding: 40px 0;">
										<div class="col-md-5">	
											<?php foreach($img as $img){?>
											<div class="image-article">
												<img src="<?=base_url().'assets/upload/article/'.$value->article_id.'_'.$img->url;?>">
											</div>
										<?php }?>
										</div>
										<div class="col-md-7">
											<div class="display-content">
												<?php echo $value->content; ?>
											</div>
										</div>
									</div>
						
								</div>

						<?php	} else { 
							$img = $this->db->query("SELECT * FROM tblgallery where article_id = '$value->article_id' ")->result();
						?>
							
							<div class="row">
							<div class="col-md-12">
								<div class="display-fix">
									<div class="col-md-5 left-grid"> 
										<?php foreach($img as $img) {?>
											<div class="image-article">
												<img src="<?=base_url().'assets/upload/article/'.$value->article_id.'_'.$img->url;?>">
											</div>
										<?php }?>
									</div>
									<div class="col-md-7">
										<div class="display-p">
											<?php echo $value->content; ?>
											
										</div>
									</div>
								</div>
							</div>
						</div>


						<?php }
						$i++;
					}
					?>
					
			</div>
			<div class="col-md-3">
				<div class="row">
					<div class="col-md-12">
						<h4 class="style-title">SERVICE</h4>
							<div class="blog-menu">
								<ul id="service-menu" class="menu">
									<li class="menu-list"><a href="<?=base_url('site/mechanical')?>"> Mechanical Services</a></li>
									<li class="menu-list"><a href="<?=base_url('site/electrical')?>">Electrical Services</a></li>
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