<script type="text/ecmascript">
  $(function() {
  $("ul.demo2").ytplaylist({addThumbs:true, autoPlay: false, holderId: 'youtube-main'});
});
</script>

<section class="page-heading contant">
	<div class="container">
		<h2 style="padding-left:10px;"><?= $site_lang == 'khmer' ? $row->menu_name_kh : $row->menu_name; ?></h2>
	</div>
</section>

<div class="contant" style="margin-bottom: 30px;">
	<div class="container">
		<div class="row">
			<div class="col-sm-9">
				<div class="events">
					<div class="row">
						<?php foreach($result as $item) { ?>
						<div class="col-sm-4">
		          <a href="<?= site_url('site/videoall/'.$row->menu_id.'/'.$item->gallery_id.'/'.$item->location_id); ?>" class="thumb">
		            <img src="https://img.youtube.com/vi/<?= $item->url; ?>/hqdefault.jpg" alt="" class="">
		          </a>
		          <div class="caption">
		            <h3 class="cap-title">
		              <a href="<?= site_url('site/videoall/'.$row->menu_id.'/'.$item->gallery_id.'/'.$item->location_id); ?>" title="<?= $item->gallery_title; ?>"><?= substr($item->gallery_title, 0, 301); ?>...</a>
		            </h3>
		          </div>
		        </div>
		        <?php } ?>
					</div>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="sidebar">
					<div class="box">
						<h2 class="title text-center"><?= $this->lang->line('other_institution'); ?></h2>
						<div class="owl-carousel owl-theme">
				      <div class="">
				        <a href="http://www.interior.gov.kh/">
				          <img data-u="image" src="<?= site_url('assets/images/1.png'); ?>">
				        </a>
				      </div>
				      <div class="">
				        <a href="http://www.police.gov.kh/">
				          <img data-u="image" src="<?= site_url('assets/images/2.png'); ?>">
				        </a>
				      </div>
				      <div class="">
				        <a href="http://news.gdi.gov.kh/">
				          <img data-u="image" src="<?= site_url('assets/images/3.gif'); ?>">
				        </a>
				      </div>
				      <div class="">
				        <a href="http://www.immigration.interior.gov.kh/">
				          <img data-u="image" src="<?= site_url('assets/images/4.gif'); ?>">
				        </a>
				      </div>
				      <div class="">
				        <a href="http://pac.edu.kh/">
				          <img data-u="image" src="<?= site_url('assets/images/5.png'); ?>">
				        </a>
				      </div>
				      <div class="">
				        <a href="http://www.trc.gov.kh/km/">
				          <img data-u="image" src="<?= site_url('assets/images/6.png'); ?>">
				        </a>
				      </div>
				    </div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
	<!-- end containfull -->

<script>
  $(document).ready(function() {
  	$(".owl-carousel").owlCarousel({
    loop:true,
    margin:0, 
    //nav: true, 
    // navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
    dots: false,
    responsiveClass:true,
    responsive:{
        0:{	
            autoplay: true,
            items:1,
            margin:30
           
        },
        600:{
        	autoplay: true,
            items:1,
            margin:0
            
        },
        1000:{
        	autoplay: true,
            margin:40,  
            items:1
          
        }
    }
	});

    //
  });
   
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