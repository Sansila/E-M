<section id="blog">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1 class="style-title"> <?php echo $loadarticle->article_title;?></h1>
				<?php echo $loadarticle->content; ?>

				<!-- this is the form for edit or upload new article on project`s categories -->
				<!-- <div class="project_metadata">
					<ul class="list_unstyled">
						<li><span class="project_metairon"><i class="fa fa-folder"></i></span>
							<strong>Name:</strong>
							 Gateway Office Building
						</li>
						<li><span class="project_metairon"><i class="fa fa-map"></i></span>
							<strong>Location:</strong>
							  Englewood, CO
						</li>
						<li><span class="project_metairon"><i class="fa fa-building"></i></span>
							<strong>Type:</strong>
							  Mixed use office and retail building
						</li>
						<li><span class="project_metairon"><i class="fa  fa-cogs"></i></span>
							<strong> MEP Services:</strong>
							   We provided mechanical, electrical, and plumbing engineering services for a 3-story 18,000 square foot mixed use office/retail building.
						</li>
						<li><span class="project_metairon"><i class="fa fa-th-list"></i></span>
							<strong> Category:</strong>
							 New Build, Office
						</li>
					</ul>
				</div>
				<div class="hentry__content content-p">
					<p>Historic Olde Town Arvada welcomed this series of three buildings in 2008. The site now houses the popular Grandview Tavern and is surrounded by several other well-patronized pubs, eateries and specialty shops. The Grandview is just two blocks from the planned Gold Line light rail station.</p>
					<p>We provided mechanical, electrical, and plumbing engineering design services for three buildings to core-shell only. The project was built out in two phases.</p>
					<p>The mechanical system incorporated an under-floor (UFAD) air distribution system, high efficiency domestic hot water heaters. The electrical system used a photovoltaic panel system to assist with electrical load shedding for the building.</p>
				</div> -->
			</div>
			<div class="row">
				<?php 
					$img = $this->db->query("SELECT * FROM tblgallery where article_id = '$loadarticle->article_id' ")->result();
					// print_r($img);
					foreach ($img as $img) {
					
				 ?>
					<div class="col-md-2" style="padding-top: 10px;">
						<img src="<?=base_url().'assets/upload/article/'.$loadarticle->article_id.'_'.$img->url;?>">
					</div>
					<?php } ?>
			</div>
		</div>
	</div>
</section>