<section class="page-heading contant">
	<div class="container">
		<?php if(count($result)>0) { ?>
		<h2 style="padding-left:10px;"> <?= $site_lang == 'khmer' ? $result->article_title_kh : $result->article_title; ?></h2>
		<?php } ?>
	</div>
</section>

<div class="contant" style="margin-bottom: 30px;">
	<div class="container"> 
		<div class="row">
			<div class="col-sm-9">
				<div class="box">
					<?php if(count($result)>0) { ?>
					<?php if($result->url != '') {
						echo "<img src='".site_url('assets/upload/article/'.$result->article_id.'_'.$result->url)."' class='img-responsive' alt=''>";
					} ?>
					<p><?php echo $site_lang == 'khmer' ? $result->content_kh : $result->content; ?></p>
					<?php } ?>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="sidebar">
					<div class="box">
						<h2 class="title text-center"><?= $this->lang->line('other_institution'); ?></h2>
						<div class="owl-carousel owl-theme">
				      <div class="" align="text-center">
				        <a href="http://www.interior.gov.kh/">
				          <img data-u="image" src="<?= site_url('assets/images/1.png'); ?>"  >
				          	
				          </style>
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