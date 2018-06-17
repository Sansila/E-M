
<?php 
	$article_id='';
	if(isset($_GET['p'])){
		$row=$this->db->query("SELECT * FROM tblmenus m INNER JOIN tblarticle c ON(m.article_id=c.article_id) where m.menu_id='".$_GET['p']."'")->row();
		$article_id=$row->article_id;
	}

	if(isset($_GET['a'])){
	$row=$this->db->query("SELECT * FROM tblarticle  where article_id='".$_GET['a']."'")->row();
	$article_id=$row->article_id;
}
	$locat=$this->db->query("SELECT * FROM tbllocation WHERE location_id='".$menu_type."' AND is_active='1'")->row();
	
?>
<div class="contant">
	<div class="container">
		<div class="page-heading">
			<!-- <div class="container"> -->
			<h2 style="padding-left:10px;"><?php echo $lang=='en'?$locat->location_name:$locat->location_name_kh ?></h2>
	<!-- <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr</p> -->
		</div>
	</div>
</div>
</div>
<div class="contant">
	<div class="container">
	<?php 
		$conn="";
		if (isset($_GET['p']) && $row->layout_id) {
			$conn = $row->layout_id;
		}
		if ($conn==1){
			?>
			<div class="event-page">
		 	<?php 
				$data=array();
				if(isset($search)){
					$data=$search;
				}else{
					$data=$this->db->query("SELECT * FROM tblarticle WHERE location_id='".$menu_type."' AND is_active='1'")->result();

				}
				$i=0;
				foreach ($data as $row) { 
					$img=$this->sites->getdefualtimg($row->article_id);
	    			$image_part=base_url('assets/upload/no_image.jpg');
		        	if(count($img)>0)
		        		$image_part=base_url("/assets/upload/article/thumb/".$row->article_id.'_'.$img->url);
				?>
					<div class="row events">
						<div class="span4">
							<div class="thumb">
								<a href="<?php echo site_url('site/viewarticle?a='.$row->article_id) ?>"><img src="<?php echo $image_part ?>" alt=""></a>
							</div>
						</div>
						 
						<div class="span8">
							<div class="text">
							 
								<div class="event-header">
									<!-- <span>Mon July 2</span> -->
									<h2><?php echo $lang=='en'?$row->article_title:$row->article_title_kh ?></h2>
									<div class="data-tags">
										<a href="<?php echo site_url('site/viewarticle?a='.$row->article_id) ?>"><?php echo $lang=='en'?$locat->location_name:$locat->location_name_kh ?></a>
									</div>
								</div>
								 
								 
								<div class="event-body">
									<p><?php echo substr(strip_tags($lang=='en'?$row->content:$row->content_kh),0,1000); ?></p>
								</div>
								 
								<!--  
								<div class="event-vanue">
									<table>
										<tr>
											<td><p class="color">Date:</p></td>
											<td><a href="#"><i class="fa fa-calendar-o"></i>06 Dec, 20140 - 14 Dec, 2014</a> <a href="#"><i class="fa fa-clock-o"></i>7:30 am - 9:00 pm</a></td>
											</tr>
											<tr>
											<td><p class="color">Venue:</p></td>
											<td><a href="#">103, C Block, West Street, New York, BMC, US</a></td>
										</tr>
									</table>
								</div> -->
								 
								 
								<div class="event-footer">
								<a href="<?php echo site_url('site/viewarticle?a='.$row->article_id) ?>" class="btn-style"><?php echo $lang=='en'?'Readmore...':'អានបន្ត..'; ?></a>
								</div>
							 
							</div>
						</div>
					 
					</div>
			<?php 		
				}	
			 ?>
		</div>
		<?php
		}
		else{
			?>
			<div class="span8">
				<div class="event-page">
		 	<?php 
				$data=array();
				if(isset($search)){
					$data=$search;
				}else{
					$data=$this->db->query("SELECT * FROM tblarticle WHERE location_id='".$menu_type."' AND is_active='1'")->result();

				}
				$i=0;
				foreach ($data as $row) { 
					$img=$this->sites->getdefualtimg($row->article_id);
	    			$image_part=base_url('assets/upload/no_image.jpg');
		        	if(count($img)>0)
		        		$image_part=base_url("/assets/upload/article/thumb/".$row->article_id.'_'.$img->url);
				?>
					<div class="row events">
						<div class="span4">
							<div class="thumb">
								<a href="<?php echo site_url('site/viewarticle?a='.$row->article_id) ?>"><img src="<?php echo $image_part ?>" alt=""></a>
							</div>
						</div>
						 
						<div class="span8">
							<div class="text">
							 
								<div class="event-header">
									<!-- <span>Mon July 2</span> -->
									<h2><?php echo $lang=='en'?$row->article_title:$row->article_title_kh ?></h2>
									<div class="data-tags">
										<a href="<?php echo site_url('site/viewarticle?a='.$row->article_id) ?>"><?php echo $lang=='en'?$locat->location_name:$locat->location_name_kh ?></a>
									</div>
								</div>
								 
								 
								<div class="event-body">
									<p><?php echo substr(strip_tags($lang=='en'?$row->content:$row->content_kh),0,1000); ?></p>
								</div>
								<div class="event-footer">
								<a href="<?php echo site_url('site/viewarticle?a='.$row->article_id) ?>" class="btn-style"><?php echo $lang=='en'?'Readmore...':'អានបន្ត..'; ?></a>
								</div>
							 
							</div>
						</div>
					 
					</div>
			<?php 		
				}
				
			 ?>
			
		</div>
			</div>
			<div class="span3">
				<h3>Content List</h3>
				 <ul  style="list-style-type: none;">
				<?php
					$parentid = $this->db->query("SELECT parentid FROM tblmenus WHERE menu_id='".$_GET['p']."' AND is_active=1")->row()->parentid;
			  		$menu = $this->db->query("SELECT * FROM tblmenus WHERE parentid='$parentid' AND is_active=1 ORDER BY `order` ASC")->result();
			  		foreach ($menu as $men) {							
			  			?>
			  			<li style="padding:5px 10px;"><a href="<?= site_url('site/index?p=$menu->menu_id') ?>"><?php echo $men->menu_name ?></a></li>
			  			<?php
			  		}
		  		?>
			</ul>
			</div>
			<?php
		}
		
	 ?>
		
	</div>
	}
</div>















