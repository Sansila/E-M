<div class="main-title" style="background-color: #154360; ">
	<div class="container">
				<h1 class="main-title__primary style">Projects</h1>
	</div>
	
</div>
<section id="projects">
	<div class="container">
		<nav class="submenu">
			<ul>
				<li><a href="<?=base_url('site/projects')?>">All Project</a></li>
				<li class="onproject"><a href="<?=base_url('site/church')?>">CHURCH</a></li>
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
				<?php 
					foreach($loadchurch as $church) {
					$sql = $this->db->query("SELECT * FROM tblgallery WHERE article_id = '$church->article_id' limit 1 ")->row();
				?>
				<div class="col-md-3 hover" style="padding-top: 30px;">
					  <img src="<?=base_url().'assets/upload/article/'.$church->article_id.'_'.$sql->url;?>" alt="" class="image">
					  <div class="middle">
					  	<p><?php echo $church->article_title;?></p>
					    <a href="<?= site_url('site/articlespecify/'.$church->article_id);?>"><div class="text">Read More</div></a>
					  </div>
				</div>
					<?php 
						} 
					?>
					

			</div>
		</div>
	</div>
</section>
