
<div class="main-title" style="background-color: #154360; ">
	<div class="container">
				<h1 class="main-title__primary style">Projects</h1>
	</div>
	
</div>
<section id="projects">
	<div class="container">


		<ul id="breadcrumbs-four">
		   
		    <?php foreach ($projectmenu as $menu) {?>
		   		<li><a href="<?php echo base_url().$menu->link.'/'.$menu->menu_type;?>"><?php echo $menu->menu_name?></a></li>
			<?php 
			}?>
		</ul>
		<div class="contentItem">
			<div class="row">



				<?php 
		
					foreach ($listmenu as $list) {
						$sql = $this->db->query("SELECT * FROM tblgallery WHERE article_id = '$list->article_id' limit 1 ")->row();
						?>
						<div class="col-md-3 hover" style="padding-top: 30px;">
					  <img src="<?=base_url().'assets/upload/article/'.$list->article_id.'_'.$sql->url;?>" alt="" class="image">
					  <div class="middle">
					  	<p><?php echo $list->article_title;?></p>
					    <a href="<?= site_url('site/articlespecify/'.$list->article_id);?>"><div class="text">Read More</div></a>
					  </div>
				</div>
				<?php }
				?>

				
			</div>
		</div>
	</div>
</section>