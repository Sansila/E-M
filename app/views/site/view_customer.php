<div class="parallax-window inner-banner tc-padding overlay-dark tc-paddings" data-parallax="scroll" >
            <div class="container">
                <div class="inner-page-heading h-white">
                    <h2 style=" ">
                        Customers List
                    </h2>
                </div>
            </div>
        </div>
        <!-- Inner Banner -->

    </header>
    
    <main class="main-content">

        <!-- Blog Grid -->
        <div class="tc-padding">
            <div class="container">
                <div class="row">
                    
                    <!-- Content -->
                    <div class="col-lg-12 col-md-12 col-xs-12">

                        <!-- Grid Blog -->
                        <div class="blog-grid">
                            <div class="row">
                                <div class="">

                            <!-- Product Box -->
                            <?php foreach ($event_customer as $customers) {
                              
                             ?>
                            <div class="item col-sm-3" style="margin-bottom: 10px;">
                                <div class="product-box">
                                    <div class="product-img">
                                        <img src="<?= site_url('assets/upload/article/'.$customers->article_id.'_'.$customers->url); ?>" alt="">
                                        <ul class="product-cart-option position-center-x" style="left: 40%">
                                            <li><a href="<?= site_url('site/customerdetail/'.$customers->article_id); ?>"><i class="fa fa-eye"></i></a></li>
                                           <!--  <li><a href="#"><i class="fa fa-cart-arrow-down"></i></a></li>
                                            <li><a href="#"><i class="fa fa-share-alt"></i></a></li> -->
                                        </ul>
                                        <!-- <span class="sale-bacth">sale</span> -->
                                    </div>
                                    <div class="product-details" style="padding: 5px 15px;">
                                        <!-- <span>Novel</span> -->
                                        <h5><a href=""><?=$customers->article_title?></a></h5>
                                        <!-- <p>How to Write a Book Review...</p> -->
                                        <div class="rating-nd-price hide">
                                            <strong>$280.99</strong>
                                            <ul class="rating-stars">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star-half-o"></i></li>
                                            </ul>
                                        </div>
                                        <div class="aurthor-detail hide">
                                            <span><img src="<?=base_url().'assets/images/book-aurthor/img-01.jpg'?>" alt="">Pawel Kadysz</span>
                                            <a class="add-wish" href="#"><i class="fa fa-heart"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                            <!-- Product Box -->

                           

                        </div>
                                

                                
                        </div>
                        <nav aria-label="Page navigation example"​​​​​ style="text-align: center;">
                          <?php echo $pagination; ?>
                        </nav>
                        </div>
                        <!-- Grid Blog -->

                    </div>
                    <!-- Content -->

                    

                </div>
            </div>
        </div>
        <!-- Blog Grid -->

    </main>