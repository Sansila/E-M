
<?php 
	$article_id='';
	if(isset($_GET['p'])){
		$row=$this->db->query("SELECT * FROM tblmenus m INNER JOIN tblarticle c ON(m.article_id=c.article_id) where m.menu_id='".$_GET['p']."'")->row();
		if ($row) {
			$article_id=$row->article_id;
		}
		
	}

	if(isset($_GET['a'])){
	$row=$this->db->query("SELECT * FROM tblarticle  where article_id='".$_GET['a']."'")->row();
	$article_id=$row->article_id;
}
	$locat=$this->db->query("SELECT * FROM tbllocation WHERE location_id='3' AND is_active='1'")->row();
	
?>

<style type="text/css">
	.pg{
		background: #f9f9f9;
		color: grey;
		border: 1px solid #ececec;
		padding:0.8% 1.5%;
	}
	.active {
		background: #fff;
		color: grey;
		border: 1px solid #ececec;
		padding:0.8% 1.5%;
	}
	#pagination{
		border-top: 1px solid rgba(128, 128, 128, 0.34);
		padding: 2% 0;
	}
</style>

<div class="contant" style="background:white;">
	<div class="container">
		<div style="border-bottom:1px solid #4200ff;margin-bottom:3%">
			<!-- <div class="container"> -->
			<?php if ($locat): ?>
			<h2 style="padding-left:10px;"><?php echo $lang=='en'?"Event Gallery":"ព្រឹត្តិការណ៍" ?></h2>
				
			<?php endif ?>
	<!-- <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr</p> -->
		</div>
	</div>
</div>
</div>
<div class="contant" style="background:white;padding-bottom:1%;">
	<div class="container">
	<?php 
		$conn="";
		$la_id='';
		if ($row) {
			$la_id=$row->layout_id;
		}
		if (isset($_GET['p']) && $la_id) {
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
								<a href="<?php echo site_url('site/viewevent?e='.$row->article_id) ?>"><img src="<?php echo $image_part ?>" alt=""></a>
							</div>
						</div>
						 
						<div class="span8">
							<div class="text">
							 
								<div class="event-header">
									<!-- <span>Mon July 2</span> -->
									<h2><?php echo $lang=='en'?$row->article_title:$row->article_title_kh ?></h2>
									<div class="data-tags">
										<a href="<?php echo site_url('site/viewevent?e='.$row->article_id) ?>"><?php echo $lang=='en'?$locat->location_name:$locat->location_name_kh ?></a>
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
								<a href="<?php echo site_url('site/viewevent?e='.$row->article_id) ?>" class="btn-style"><?php echo $lang=='en'?'Readmore...':'អានបន្ត..'; ?></a>
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
		 	<?php 
				$num_rec_per_page=3;

				if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; }; 
				$start_from = ($page-1) * $num_rec_per_page; 
				$sql = "SELECT * FROM tblarticle WHERE location_id = 3 LIMIT $start_from, $num_rec_per_page"; 
				$rs_result = mysql_query ($sql); //run the query
				?> 

				<?php 
				while ($row = mysql_fetch_assoc($rs_result)) { 
					$img=$this->sites->getdefualtimg($row['article_id']);
					$image_part=base_url('assets/upload/no_image.jpg');
						if(count($img)>0)
							$image_part=base_url("/assets/upload/article/thumb/".$row['article_id'].'_'.$img->url);
							$time = strtotime($row['article_date']);
				                            $day = date('d', $time);
				                            $month = date('M', $time);
				                            $year = date('Y', $time);
				?> 
				           <div id="each_event" style="width:100%;float:left;margin-bottom:3%;">
									<div id="event_date" style="line-height: 5px;text-align: center;text-transform: uppercase;background-size:100%;height:100px;background-image:url('<?php echo base_url('assets/upload/calender/date_event.png')?>');float:left;width:8%;">
										<span style="color:white;word-wrap:break-word" id="date_font">
										<h3 style="margin-bottom:1px;"><?php echo $day ?></h3>
										<p><?php echo $month ?></p>
										<p><?php echo $year ?></p>
										</span>

									</div>
									<div style="float:right;width:91%;">
										<?php if ($image_part!=base_url('assets/upload/no_image.jpg')): ?>
											<div id="event_img" style="background-size: 100% 250%;background-position: center;height:200px;width:100%;background-image:url('<?php echo $image_part ?>')">
												
											</div>
										<?php endif ?>
											
											<div style="width:100%;color:#3097c6">
												<h3><?php echo $lang=='en'?$row['article_title']:$row['article_title_kh'] ?></h3>
											</div >		
											<div style="width:100%">
												<p><?php echo substr(strip_tags($lang=='en'?$row['content']:$row['content_kh']),0,250)."..."; ?></p>
											</div>
											<div style="width:100%">
												<a href="<?php echo site_url('site/viewevent?e='.$row['article_id']) ?>"><?php echo $lang=='en'?'Continue Reading ':'អានបន្ត..'; ?><i class="fa fa-long-arrow-right"></i></a>
											</div>
									</div>
								</div>		
				<?php 
				}; 
				?> 
				<div id="pagination" class="contant" align="center">
					<?php 
					$sql = "SELECT * FROM tblarticle WHERE location_id=3"; 
					$rs_result = mysql_query($sql); //run the query
					$total_records = mysql_num_rows($rs_result);  //count number of records
					$total_pages = ceil($total_records / $num_rec_per_page); 
					$cur_page='';
					$active='pg';
					if (isset($_GET['page'])) {
						$cur_page=$_GET['page'];
					}
					// echo "<div align='center'><a class='pg' href='?page=1'>".'|<'."</a> "; // Goto 1st page  

					for ($i=1; $i<=$total_pages; $i++) { 
							if ($cur_page==$i) {
								$active = 'active';
							}else{
								$active='pg';
							}

					            echo "<a class='$active' href='index?p=32&page=".$i."'>".$i."</a> "; 
					}; 
					// echo "<a class='pg' href='?page=$total_pages'>".'>|'."</a></div>"; // Goto last page
					?>
				</div>
			</div>

			
			
			<div class="right_banner">
	 	<div>
	 		<?php 
	 			$s=$this->db->query("SELECT * FROM tblbanner WHERE location_id='2' and is_active=1 order by `orders` asc")->row();
					
					    echo "<img src='".base_url("assets/upload/banner/".$s->banner_id.".png")."' style='width: 100% !important' ;>" ;
					
	 		 ?>
	 	</div>
	 </div>
			<?php
		}
		
	 ?>
		
	</div>
</div>















