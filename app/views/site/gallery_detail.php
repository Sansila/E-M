<?php 
$gid ='';
$aname='';
	if (isset($_GET['g'])) {
		$gid = $_GET['g'];
	}
	$gal = $this->db->query("SELECT * FROM tblgallery WHERE article_id = $gid")->result();
	$aname = $this->db->query("SELECT * FROM tblarticle WHERE article_id = $gid")->row();
 ?>

<style type="text/css">
	
#ima{
	height: 300px;
	width: 24.5%;
	margin: 0.2%;
	float: left;
	background-size: 130% 100%;
	background-position: center;
	transition:background-size 0.2s;
}
#ima:hover{
	background-size: 180% 150%;

}
</style>
<div class="contant" style="background:white;">
	<div class="container-fluid">
		<div style="border-bottom:1px solid #4200ff;margin-bottom:3%">
			<!-- <div class="container"> -->
				<h2 style="padding-left:10px;"> <?php echo $lang=='en'?$aname->article_title:$aname->article_title_kh ?>&nbsp<?php echo $aname->article_date; ?></h2>

			<!-- <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr</p> -->
			<!-- </div> -->
		</div>
	</div>
</div>
<div class="contant" style="padding: 0 4%;background:white;" align="center">
	<div>
		<?php foreach ($gal as $g) {
		?>
		<div class="bottom_gallery">
		<a href="<?php echo site_url('/assets/upload/article/'.$gid.'_'.$g->url)?>">
			<div id='ima' style="background-image:url('<?php echo site_url('/assets/upload/article/thumb/'.$gid.'_'.$g->url)?>')">
			</div>
		</a>			
		</div>
		

		<?php
		} ?>
	</div>
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