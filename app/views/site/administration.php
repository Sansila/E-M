<!-- Inner Banner -->
	  	<div class="parallax-window inner-banner tc-padding overlay-dark" data-parallax="scroll" data-image-src="images/inner-banner/img-04.jpg">
	  		<div class="container">
	  			<div class="inner-page-heading h-white">
	  				<h2>Book Listing</h2>
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
  					<li>Shop Detail</li>
  				</ul>
  			</div>
  		</div>
  	</div>
  	<!-- Breadcrumb -->

	<!-- Main Content -->
	<main class="main-content">

		<!-- Book List -->
		<div class="tc-padding">
			<div class="container">
				<div class="row">
					
					<!-- Content -->
					<div class="col-lg-9 col-md-8 col-xs-12 pull-right pull-none">

						<!-- Book List Header -->
						<div class="book-list-header">
							
							<!-- Heading -->
							<h4>Popular Books</h4>
							<!-- Heading -->

							<!-- Filter Nav -->
							<div class="filter-tags-holder">
								<ul id="filterbale-nav" class="option-set">
									<li><a class="selected" data-filter="*" href="#">All General</a></li>
									<li><a data-filter=".business" href="#">Business</a></li>
									<li><a data-filter=".science" href="#">Science</a></li>
									<li><a data-filter=".fiction" href="#">Fiction</a></li>
									<li><a data-filter=".philosopy" href="#">Philosopy</a></li>
									<li><a data-filter=".biography" href="#">Biography</a></li>
								</ul>
							</div>	
							<!-- Filter Nav -->

						</div>
						<!-- Book List Header -->

						<!-- Book List Widgets -->
						<div id="filter-masonry" class="gallery-masonry">
							<?php foreach($templates as $template) { ?>
							<div class="book-list-widget masonry-grid business">
								<span class="heart-batch"><i class="fa fa-heart"></i></span>
								
								<div class="book-list-detail">
									<img src="<?=base_url().'assets/images/book-list/img-01.jpg'?>" alt="">
									<div class="detail">
										<span>by Dwinawan Hariwijaya</span>
										<div class="book-name">
											<h5>Jewels of Nizam <span>Cooking Book</span></h5><strong>$30.99</strong>
										</div>
										<ul class="rating-stars">
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star-half-o"></i></li>
											<li>1,987765 reviews</li>
										</ul>
										<p>He’s become a well-known journalist, and Linda–a famous novelist and infamous recluse–knows no one will believe her if she accuses him. She does the only thing she can think...</p>
	    							</div>
								</div>
								 
								<div class="book-list-btm">
									<div class="user-likes">
										<ul>
											<li><img src="<?=base_url().'assets/images/user-likes/img-01.jpg'?>" alt=""></li>
											<li><img src="<?=base_url().'assets/images/user-likes/img-02.jpg'?>" alt=""></li>
											<li><img src="<?=base_url().'assets/images/user-likes/img-03.jpg'?>" alt=""></li>
											<li>Samantha William and 2 other friends like this book</li>
										</ul>
									</div>
									<div class="like-nd-share">
										<ul>
											<li><a href="<?= site_url('site/templatedetail/'.$template->article_id); ?>"><i class="fa fa-eye"></i>View</a></li>
											<li><a href="<?= site_url('site/gallarydetail/'.$template->article_id); ?>"><i class="fa fa-share-alt"></i>Share</a></li>
										</ul>
									</div>
								</div>
							</div>
							<?php } ?>
							<div class="book-list-widget masonry-grid science">
								<span class="heart-batch"><i class="fa fa-heart"></i></span>
								<div class="book-list-detail">
									<img src="<?=base_url().'assets/images/book-list/img-02.jpg'?>" alt="">
									<div class="detail">
										<span>by Juan Gomez</span>
										<div class="book-name">
											<h5>Trial by Fire<span>Sespence Novel</span></h5><strong>$30.99</strong>
										</div>
										<ul class="rating-stars">
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star-half-o"></i></li>
											<li>1,987765 reviews</li>
										</ul>
										<p>There are a lot of beautiful WordPress themes for writers and authors in the wild. Here’s a (constantly updated)  list to help you cut through the chaff. I’m confident you’ll find a theme...</p>
	    							</div>
								</div>
								<div class="book-list-btm">
									<div class="user-likes">
										<ul>
											<li><img src="images/user-likes/img-04.jpg" alt=""></li>
											<li>Jalen Davenport like this book</li>
										</ul>
									</div>
									<div class="like-nd-share">
										<ul>
											<li><a href="#"><i class="fa fa-eye"></i>View</a></li>
											<li><a href="#"><i class="fa fa-share-alt"></i>Share</a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="book-list-widget masonry-grid fiction">
								<span class="heart-batch"><i class="fa fa-heart"></i></span>
								<div class="book-list-detail">
									<img src="<?=base_url().'assets/images/book-list/img-03.jpg'?>" alt="">
									<div class="detail">
										<span>by Raphael Lopes</span>
										<div class="book-name">
											<h5>Vegetables<span>Cooking Book</span></h5><strong>$30.99</strong>
										</div>
										<ul class="rating-stars">
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star-half-o"></i></li>
											<li>1,987765 reviews</li>
										</ul>
										<p>Sometimes it’s easy to recommend a new WordPress theme. You see it and you just know that the designer is also an author and understands the challenges involved with having a good site...</p>
	    							</div>
								</div>
								<div class="book-list-btm">
									<div class="user-likes">
										<ul>
											<li><img src="<?=base_url().'assets/images/user-likes/img-05.jpg'?>" alt=""></li>
											<li><img src="<?=base_url().'assets/images/user-likes/img-06.jpg'?>" alt=""></li>
											<li>Tobia Crivellari  and Colby Fayock like this book</li>
										</ul>
									</div>
									<div class="like-nd-share">
										<ul>
											<li><a href="#"><i class="fa fa-eye"></i>View</a></li>
											<li><a href="#"><i class="fa fa-share-alt"></i>Share</a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="book-list-widget masonry-grid philosopy">
								<span class="heart-batch"><i class="fa fa-heart"></i></span>
								<div class="book-list-detail">
									<img src="<?=base_url().'assets/images/book-list/img-04.jpg'?>" alt="">
									<div class="detail">
										<span>by Mike Precious</span>
										<div class="book-name">
											<h5>Jhon Carter of Mars <span>Story of Mars</span></h5><strong>$30.99</strong>
										</div>
										<ul class="rating-stars">
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star-half-o"></i></li>
											<li>1,987765 reviews</li>
										</ul>
										<p>Oh, wait a third benefit is the Author Pro plug-in which allows authors to easily add books to their sites. The books can display custom information...</p>
	    							</div>
								</div>
								<div class="book-list-btm">
									<div class="user-likes">
										<ul>
											<li><img src="<?=base_url().'assets/images/user-likes/img-07.jpg'?>" alt=""></li>
											<li>Olia Gozha  like this book</li>
										</ul>
									</div>
									<div class="like-nd-share">
										<ul>
											<li><a href="#"><i class="fa fa-eye"></i>View</a></li>
											<li><a href="#"><i class="fa fa-share-alt"></i>Share</a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="book-list-widget masonry-grid biography">
								<span class="heart-batch"><i class="fa fa-heart"></i></span>
								<div class="book-list-detail">
									<img src="<?=base_url().'assets/images/book-list/img-01.jpg'?>" alt="">
									<div class="detail">
										<span>by Dwinawan Hariwijaya</span>
										<div class="book-name">
											<h5>Jewels of Nizam <span>Cooking Book</span></h5><strong>$30.99</strong>
										</div>
										<ul class="rating-stars">
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star-half-o"></i></li>
											<li>1,987765 reviews</li>
										</ul>
										<p>He’s become a well-known journalist, and Linda–a famous novelist and infamous recluse–knows no one will believe her if she accuses him. She does the only thing she can think...</p>
	    							</div>
								</div>
								<div class="book-list-btm">
									<div class="user-likes">
										<ul>
											<li><img src="<?=base_url().'assets/images/user-likes/img-01.jpg'?>" alt=""></li>
											<li><img src="<?=base_url().'assets/images/user-likes/img-02.jpg'?>" alt=""></li>
											<li><img src="<?=base_url().'assets/images/user-likes/img-03.jpg'?>" alt=""></li>
											<li>Samantha William and 2 other friends like this book</li>
										</ul>
									</div>
									<div class="like-nd-share">
										<ul>
											<li><a href="#"><i class="fa fa-eye"></i>View</a></li>
											<li><a href="#"><i class="fa fa-share-alt"></i>Share</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<!-- Book List Widgets -->

						<!-- Pagination -->
		           		<div class="pagination-holder">
		           			<?php echo $pagination; ?>
		           		</div>
		           		<!-- Pagination -->

					</div>
					<!-- Content -->

					<!-- Aside -->
					<aside class="col-lg-3 col-md-4 col-xs-12 pull-left pull-none">

						<!-- Aside Widget -->
						<div class="aside-widget">
							<h6>Author of the Week</h6>
							<ul class="s-arthor-list">
								<li>
									<div class="s-arthor-wighet">
										<div class="s-arthor-img">
											<img src="<?=base_url().'assets/images/s-arthor-list/img-01.jpg'?>" alt="">
											<div class="overlay">
												<a class="position-center-center" href="#">+</a>
											</div>
										</div>
										<div class="s-arthor-detail">
											<h6>Jonathan Doe <a href="#">@jdoe</a></h6>
											<a href="#">+ Follow on</a>
										</div>
									</div>
								</li>
								<li>
									<div class="s-arthor-wighet">
										<div class="s-arthor-img">
											<img src="<?=base_url().'assets/images/s-arthor-list/img-02.jpg'?>" alt="">
											<div class="overlay">
												<a class="position-center-center" href="#">+</a>
											</div>
										</div>
										<div class="s-arthor-detail">
											<h6>Anelina Summer <a href="#">@asummer</a></h6>
											<a href="#">+ Follow on</a>
										</div>
									</div>
								</li>
								<li>
									<div class="s-arthor-wighet">
										<div class="s-arthor-img">
											<img src="<?=base_url().'assets/images/s-arthor-list/img-03.jpg'?>" alt="">
											<div class="overlay">
												<a class="position-center-center" href="#">+</a>
											</div>
										</div>
										<div class="s-arthor-detail">
											<h6>Sebastian Jeremy <a href="#">@sjermy</a></h6>
											<a href="#">+ Follow on</a>
										</div>
									</div>
								</li>
								<li>
									<div class="s-arthor-wighet">
										<div class="s-arthor-img">
											<img src="<?=base_url().'assets/images/s-arthor-list/img-04.jpg'?>" alt="">
											<div class="overlay">
												<a class="position-center-center" href="#">+</a>
											</div>
										</div>
										<div class="s-arthor-detail">
											<h6>Noah Jones <a href="#">@njones</a></h6>
											<a href="#">+ Follow on</a>
										</div>
									</div>
								</li>
								<li>
									<div class="s-arthor-wighet">
										<div class="s-arthor-img">
											<img src="<?=base_url().'assets/images/s-arthor-list/img-05.jpg'?>" alt="">
											<div class="overlay">
												<a class="position-center-center" href="#">+</a>
											</div>
										</div>
										<div class="s-arthor-detail">
											<h6>Tommy Adam <a href="#">@tadam</a></h6>
											<a href="#">+ Follow on</a>
										</div>
									</div>
								</li>
							</ul>
						</div>
						<!-- Aside Widget -->

						<!-- Aside Widget -->
						<div class="aside-widget">
							<h6>Books of the Year</h6>
							<ul class="books-year-list">
								<li>
									<div class="books-post-widget">
										<img src="<?=base_url().'assets/images/books-year-list/img-01.jpg'?>" alt="">
										<h6><a href="#">My Brilliant Friend The Neapolitan Novels, Book One</a></h6>
										<span>By Elena Ferrante</span>
									</div>
								</li>
								<li>
									<div class="books-post-widget">
										<img src="<?=base_url().'assets/images/books-year-list/img-02.jpg'?>" alt="">
										<h6><a href="#">As night fell, something stirred the darkness.</a></h6>
										<span>By Meg Caddy</span>
									</div>
								</li>
								<li>
									<div class="books-post-widget">
										<img src="<?=base_url().'assets/images/books-year-list/img-03.jpg'?>" alt="">
										<h6><a href="#">The Rosie Project: Don Tillman 1</a></h6>
										<span>By Graeme Simsion</span>
									</div>
								</li>
								<li>
									<div class="books-post-widget">
										<img src="<?=base_url().'assets/images/books-year-list/img-04.jpg'?>" alt="">
										<h6><a href="#">Heartbreaking, joyous, traumatic, intimate and</a></h6>
										<span>By Magda Szubanski</span>
									</div>
								</li>
							</ul>
						</div>
						<!-- Aside Widget -->

					</aside>
					<!-- Aside -->

				</div>
			</div>
		</div>
		<!-- Blog All Views -->

	</main>
	<!-- Main Content -->