<div class="main-title" style="background-color: #154360; ">
	<div class="container">
				<h1 class="main-title__primary style">Mechanical Services</h1>
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
					foreach ($loadmechanical as $val) { // it loop throw to the article title 
				?>
					<div class="mechanical-title">
						<h1 class="style-title"><?php echo $val->article_title;?></h1>
					</div>
				<?php
				//define condition of article id to get images from that id
						if($i == 1)
						{
						   $img = $this->db->query("SELECT * FROM tblgallery where article_id = '$val->article_id' ")->result();
				?>
						<div class="display-fix">
							<div class="row">
								<div class="col-md-5 left-grid"> 
									<?php 
										foreach ($img as $img) {
									?>
									<div class="image-article">
										<img src="<?=base_url().'assets/upload/article/'.$val->article_id.'_'.$img->url;?>">
									</div>
									<?php 
										}
									?>
								</div>
								<div class="col-md-7">
									<div class="display-content">
										<?php echo $val->content;?>
									</div>
								</div>
							</div>
						</div>
				<?php
						}else{
				?>
						<div class="collaboration-content">
							<?php echo $val->content;?>
						</div>
				<?php
						}
						$i++;
					}
				?>
					
					
					
			</div>
			<div class="col-md-3">
				<div class="row">
					<div class="col-md-12">
						<h4 class="style-title">SERVICE</h4>
							<div id="rightmenu">
								<ul>
									<li class="onmenu"><a  href="<?=base_url('site/mechanical')?>"> Mechanical Services</a></li>
									<li ><a href="<?=base_url('site/electrical')?>">Electrical Services</a></li>
									<li ><a href="<?=base_url('site/plumbing')?>">Plumbing Services</a></li>
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
</section>