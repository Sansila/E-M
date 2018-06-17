<section class="page-heading contant">
	<div class="container">
		<h2 style="padding-left:10px;"><?= $this->lang->line('event_gallery'); ?></h2>
	</div>
</section>

<div class="contant" style="margin-bottom: 30px;">
	<div class="container">
		<div class="row">
			<div class="col-sm-9">
				<div class="box gallery" id="gallery">
					<ul class="row">
	          <?php foreach ($event_gallery as $gallery) { ?>
	          <li class="col-sm-4">
	            <div class="thumbnail">
	              <a href="<?= site_url('assets/upload/gallery/'.$gallery->url); ?>"><img src="<?= site_url('assets/upload/gallery/thumb/'.$gallery->url); ?>" title="gallery" style="width:100%;" alt=""></a>
	            </div>
	          </li>
	          <?php } ?>
	        </ul>
				</div>
			</div>

			<div class="col-sm-3">
				<div class="sidebar">
					<div class="box">
						<h2 class="title text-center"><?= $this->lang->line('other_institution'); ?></h2>
						<div class="owl-carousel owl-theme">
				      <div class="">
				        <a href="http://www.interior.gov.kh/" target="_blank">
				          <img data-u="image" src="<?= site_url('assets/images/1.png'); ?>">
				        </a>
				      </div>
				      <div class="">
				        <a href="http://www.police.gov.kh/" target="_blank">
				          <img data-u="image" src="<?= site_url('assets/images/2.png'); ?>">
				        </a>
				      </div>
				      <div class="">
				        <a href="http://news.gdi.gov.kh/" target="_blank">
				          <img data-u="image" src="<?= site_url('assets/images/3.gif'); ?>">
				        </a>
				      </div>
				      <div class="">
				        <a href="http://www.immigration.interior.gov.kh/" target="_blank">
				          <img data-u="image" src="<?= site_url('assets/images/4.gif'); ?>">
				        </a>
				      </div>
				      <div class="">
				        <a href="http://pac.edu.kh/" target="_blank">
				          <img data-u="image" src="<?= site_url('assets/images/5.png'); ?>">
				        </a>
				      </div>
				      <div class="">
				        <a href="http://www.trc.gov.kh/km/" target="_blank">
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

    $('#gallery').photobox('a');
    // or with a fancier selector and some settings, and a callback:
    $('#gallery').photobox('a:first', { thumbs:false, time:0 }, imageLoaded);
    function imageLoaded(){
      console.log('image has been loaded...');
    }
  });
</script>