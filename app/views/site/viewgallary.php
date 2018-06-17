<!--Inner Banner -->
	  	<div class="parallax-window inner-banner tc-padding overlay-dark" data-parallax="scroll" data-image-src="images/inner-banner/img-06.jpg">
	  		<div class="container">
	  			<div class="inner-page-heading h-white style-2">
	  				<h2>Gallery Shop</h2>
	  				<p> Spanning fifteen years of work, Everywhere I Look is a book full of unexpected moments,</p>
	  			</div>
	  		</div>
	  	</div>
	  	<!-- Inner Banner -->

	</header>
	<!-- Header -->

	<!-- breadcrumb -->
  	<div class="breadcrumb-holder white-bg">
  		<div class="container">
  			<div class="breadcrumbs">
  				<ul>
  					<li><a href="#">Home</a></li>
  					<li>About</li>
  				</ul>
  			</div>
  		</div>
  	</div>
  	<!-- Breadcrumb -->

	<!-- Main Content -->
	<main class="main-content" style="background-color: #fff">

		<!-- Gallery -->
        <div class="gallery tc-padding" style="background-color: #fff">
      		<div class="container">
      			<div class="row no-gutters">
      				<?php 
      				foreach ($result as $products) {
      					
      				
      				?>
      				<div class="col-lg-3 col-xs-6 r-full-width">
      					<div class="gallery-figure style-2"> 
	                  		<img src="<?= site_url('assets/upload/article/'.$products->article_id.'_'.$products->url); ?>" alt="">
	                  		<div class="overlay">
	                  			<ul class="position-center-x">
	                  				<!-- <li class="hide"><a href="#"><i class="fa fa-heart"></i>Likes</a></li> -->
	                  				<li><a href="<?= site_url('assets/upload/article/'.$products->article_id.'_'.$products->url); ?>" data-rel="prettyPhoto[gallery]" style="margin: 0 0 0 45px;"><i class="fa fa-eye" style="margin: 0px;"></i></a></li>
	                  			</ul>
	                  		</div>
	                  	</div>
      				</div>
					<?php }?>
      				
      				<!-- <div class="col-xs-12">
      					<div class="pagination-holder">
		           			<ul class="pagination">
							    <li><a href="#" aria-label="Previous">Prev</a></li>
							    <li><a href="#">1</a></li>
							    <li class="active"><a href="#">2</a></li>
							    <li><a href="#">3</a></li>
							    <li><a href="#">4</a></li>
							    <li><a href="#">5</a></li>
							    <li><a href="#">6</a></li>
							    <li><a href="#">7</a></li>
							    <li><a href="#">...</a></li>
							    <li><a href="#">23</a></li>
							    <li><a href="#" aria-label="Next">Next</a></li>
							</ul>
		           		</div>
      				</div> -->
      			</div>
            </div>
      	</div>
		<!-- Gallery -->

	</main>
	<!-- Main Content