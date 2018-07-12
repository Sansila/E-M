
<div class="main-title" style="background-color: #154360; ">
	<div class="container">
				<?php foreach($projectmenu as $title ){
					if($title->menu_type == $menu_id){ ?>

						<h1 class="main-title__primary style"><?php echo $title->menu_name;?></h1>
					<?php } 
				}?>	
	</div>
	
</div>
<section id="projects">
	<div class="container">


		<ul id="breadcrumbs-four">
		   
		    <?php 
		    	$current = '';
		    	foreach ($projectmenu as $menu) {
		    		if($menu->menu_type == $menu_id)
		    		{
		    			$current = 'current';
		    		}else{
		    			$current = '';
		    		}
		    ?>
		   		<li><a class="<?php echo $current;?>" href="<?php echo base_url().$menu->link.'/'.$menu->menu_type;?>"><?php echo $menu->menu_name?></a></li>
			<?php }?>
		</ul>
		<div class="contentItem" style="margin: 0px 0px 10px;">
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