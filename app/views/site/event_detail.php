<?php
$article_id='';
if(isset($_GET['p'])){
	$row=$this->db->query("SELECT * FROM tblmenus m INNER JOIN tblarticle c ON(m.article_id=c.article_id) where m.menu_id='".$_GET['p']."'")->row();
	if ($row) {
		$article_id=$row->article_id;
	}
}
if(isset($_GET['e'])){
	$row=$this->db->query("SELECT * FROM tblarticle  where article_id='".$_GET['e']."'")->row();
	$article_id=$row->article_id;
	$locat=$this->db->query("SELECT * FROM tbllocation WHERE location_id = $row->location_id")->row();
}
	
 ?>
<style type="text/css">
	#gallery li{
		width: 150px;
		float: left;
		list-style: none;
	}
</style>
<div class="contant" style="background:white;">
	<div class="container-fluid">
		<div style="border-bottom:1px solid #4200ff;margin-bottom:3%">
			<!-- <div class="container"> -->
				<h2 style="padding-left:10px;"> <?php echo $lang=='en'?"Event Gallery":"ព្រឹត្តិការណ៍" ?></h2>
			<!-- <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr</p> -->
			<!-- </div> -->
		</div>
	</div>
</div>

<div class="contant" style="padding:2%;background:white;">
	<!-- containfull -->
	<div style="width:40%;">
		
	</div>
	


	<?php 
	$img=$this->sites->getdefualtimg($row->article_id);
	$image_part=base_url('assets/upload/no_image.jpg');
	if(count($img)>0)
		$image_part=base_url("/assets/upload/article/thumb/".$row->article_id.'_'.$img->url);
		$time = strtotime($row->article_date);
        $day = date('d', $time);
        $month = date('M', $time);
        $year = date('Y', $time);
	?>
	<div style="width:60%">
				<div style="width:100%;float:left;margin-bottom:3%;">
					<div style="line-height: 5px;text-align: center;text-transform: uppercase;background-size:100%;height:100px;background-image:url('<?php echo base_url('assets/upload/calender/date_event.png')?>');float:left;width:8%;">
						<span style="color:white;word-wrap:break-word">
						<h3 style="margin-bottom:1px;"><?php echo $day ?></h3>
						<p><?php echo $month ?></p>
						<p><?php echo $year ?></p>
						</span>

					</div>
					<div class='bottom_gallery' style="float:right;width:91%;">
						<?php if ($image_part!=base_url('assets/upload/no_image.jpg')): ?>
							<a  href="<?php echo site_url('/assets/upload/article/'.$article_id.'_'.$img->url) ?>">
							<div style="background-size: 100% 250%;background-position: center;height:200px;width:100%;background-image:url('<?php echo $image_part ?>')">
								
							</div>
							</a>
						<?php endif ?>
							
							<div style="width:100%;color:#3097c6">
								<h3><?php echo $lang=='en'?$row->article_title:$row->article_title_kh ?></h3>
							</div >		
							<div style="width:100%">
								<p><?php echo $lang=='en'?$row->content:$row->content_kh; ?></p>
							</div>
							<div style="width:100%">
							
							</div>
					</div>
				</div>		

			
		</div>
	<!-- end containfull -->
</div>



<script>
    // applying photobox on a `gallery` element which has lots of thumbnails links.
    // Passing options object as well:
    //-----------------------------------------------
   
	$('.bottom_gallery').photobox('a');
	// or with a fancier selector and some settings, and a callback:
	$('.bottom_gallery').photobox('a:first', { thumbs:false, time:0 }, imageLoaded);
	function imageLoaded(){
		console.log('image has been loaded...');
	}
	$('.top_gallery').photobox('a');
	// or with a fancier selector and some settings, and a callback:
	$('.top_gallery').photobox('a:first', { thumbs:false, time:0 }, imageLoaded);
	function imageLoaded(){
		console.log('image has been loaded...');
	}
</script>