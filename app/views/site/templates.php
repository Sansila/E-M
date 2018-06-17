 <div class="parallax-window inner-banner tc-padding overlay-dark tc-paddings" data-parallax="scroll" >
            <div class="container">
                <div class="inner-page-heading h-white">
                    <h2 style=" ">
                        Template List
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
                            <?php foreach ($templates as $template) {
                              
                             ?>
                            <div class="item col-sm-3">
                                <div class="product-box">
                                    <div class="product-img">
                                        <img src="<?= site_url('assets/upload/article/'.$template->article_id.'_'.$template->url); ?>" alt="">
                                        <ul class="product-cart-option position-center-x" style="left: 40%">
                                            <li><a href="<?= site_url('site/customerdetail/'.$template->article_id); ?>"><i class="fa fa-eye"></i></a></li>
                                           <!--  <li><a href="#"><i class="fa fa-cart-arrow-down"></i></a></li>
                                            <li><a href="#"><i class="fa fa-share-alt"></i></a></li> -->
                                        </ul>
                                        <!-- <span class="sale-bacth">sale</span> -->
                                    </div>
                                    <div class="product-detail">
                                        <!-- <span>Novel</span> -->
                                        <h5><a href="book-detail.html"><?=$template->article_title?></a></h5>
                                        <p><?=$template->meta_desc?></p>
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