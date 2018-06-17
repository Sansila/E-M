    <main class="main-content">
    
        <!-- Upcoming Release -->
        <section class="upcoming-release">

            <!-- Heading -->
            <div class="container-fluid p-0">
            <div class="release-heading pull-right h-white">
                <h5>Our Services</h5>
            </div>
            </div>
            <!-- Heading -->

            <!-- Upcoming Release Slider -->
            <div class="upcoming-slider">
                <div class="container">

                    <!-- Release Book Detail -->
                    <div class="release-book-detail h-white p-white" style="height: 258px;">
                        <div class="release-book-slider">
                             <?php foreach($event_service as $services) { ?>
                            <div class="item">
                                <div class="detail">
                                    <h5><a href="<?= site_url('site/customerdetail/'.$services->article_id); ?>"><?= substr($services->article_title, 0, 301); ?></a></h5>
                                    <p><?=$services->meta_desc?></p>
                                    <!-- <span>$25.<sup>00</sup></span> -->
                                    <!-- <i class="fa fa-angle-double-right"></i> -->
                                </div>
                                <div class="detail-img">
                                    <img src="<?= site_url('assets/upload/article/'.$services->article_id.'_'.$services->url); ?>" alt="" style="width: 100px;">
                                </div>
                            </div>
                             <?php } ?>
                            
                        </div>
                    </div>
                    <!-- Release Book Detail -->

                    <!-- Thumbs -->
                    <div class="release-thumb-holder" style=" float: left;">
                        <ul id="release-thumb" class="release-thumb">
                            <?php $i=0; foreach ($event_service as $servicetum ) {
                                # code...
                            ?>
                            <li>
                                <a data-slide-index="<?=$i?>" href="#">
                                    <span>James oliver</span>
                                    <img src="<?= site_url('assets/upload/article/'.$servicetum->article_id.'_'.$servicetum->url); ?>" alt="" style="width: 110px;">
                                    <img class="b-shadow" src="<?=base_url().'assets/images/upcoming-release/b-shadow.png'?>" alt="">
                                    <span data-toggle="modal" data-target="#<?=str_replace(' ', '', $servicetum->article_title)?>" class="plus-icon">+</span>
                                    <!-- <a href="" class="plus-icon">+</a> -->
                                </a>
                            </li>
                            <?php $i++; }?>
                           
                        </ul>
                    </div>
                    <!-- Thumbs -->

                </div>
            </div>
            <!-- Upcoming Release Slider -->

        </section>
         <?php foreach ($event_service as $modal) {
           $show=str_replace(' ', '', $modal->article_title);
        ?>
        <div class="modal fade quick-view" id="<?=$show?>" role="dialog">
            <div class="position-center-center" role="document">
                <div class="modal-content">
                    <button class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <div class="single-product-detail">
                        <div class="row">
                    <div class="col-sm-12">
                        <div class="single-product-detail">
                            <!-- <span class="availability">Availability :<strong>Stock<i class="fa fa-check-circle"></i></strong></span> -->
                            <h3 style=""><?php echo $modal->article_title;?></h3>
                            <ul class="rating-stars hide">
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star-half-o"></i></li>
                                <li>1 customer review</li>
                            </ul>
                            <!-- <div class="prics"><del class="was">$32.00</del><span class="now">$30.99</span></div> -->
                           <a href="<?= site_url('site/customerdetail/'.$modal->article_id); ?>"><h4>View</h4></a> 
                            <!-- <p><?=substr($modal->content,0,700)?></p> -->
                            <div class="quantity-box hide">
                                <label>Qty :</label>
                                <div class="sp-quantity">
                                    <div class="sp-minus fff"><a class="ddd" data-multi="-1">-</a></div>
                                    <div class="sp-input">
                                      <input type="text" class="quntity-input" value="1" />
                                    </div>
                                    <div class="sp-plus fff"><a class="ddd" data-multi="1">+</a></div>
                                </div>
                            </div>
                            <ul class="btn-list hide">
                                <li><a class="btn-1 sm shadow-0 " href="#">add to cart</a></li>
                                <li><a class="btn-1 sm shadow-0 blank" href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a class="btn-1 sm shadow-0 blank" href="#"><i class="fa fa-repeat"></i></a></li>
                                <li><a class="btn-1 sm shadow-0 blank" href="#"><i class="fa fa-share-alt"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Product Thumnbnail -->
                    <div class="col-sm-12">
                        <div class="product-thumnbnail">
                            <img src="<?= site_url('assets/upload/article/'.$modal->article_id.'_'.$modal->url); ?>" alt="" style="width: 80%">
                        </div>
                    </div>
                    <!-- Product Thumnbnail -->
                    <!-- Product Detail -->
                    
                    <!-- Product Detail -->

                </div>
            </div>
            <!-- Single Product Detail -->

                </div>
            </div>
        </div>
        <?php }?>

          <!-- Recomend products -->
        <div class="tc-padding" style="background-color: #E4E4E4;">
            <div class="container">
                 <div class="main-heading-holder">
                    <div class="main-heading style-1">
                        <h2>About <span class="theme-color">Hosting Price </span></h2>
                    </div>
                </div>
            <div class="content_top">
            <div class="wrap">
                <div class="ptables ">
                <ul class="green pricing jcarousel-list jcarousel-list-horizontal ">
                  <li>
                       <ul>
                            <li class="title"><h3>BASIC</h3><h4>$19<small>/year</small></h4></li>
                            <li class="divider"></li>
                            <li>1 Domain</li>
                            <li>10GB Storage</li>
                            <li>150GB Bandwidth</li>
                            <li>Unlimited Sub Domain</li>
                            <li>Unlimited Email</li>
                            <!-- <li>Easy To Upgrade</li> -->
                            <!-- <li><a href="#">Sign Up Now</a></li> -->
                     </ul>
                 </li>
                     <li>
                         <ul>
                           <li class="title"><h3>STANDARD</h3><h4>$49<small>/year</small></h4></li>
                           <li class="divider"></li>                    
                           <li>5 Domains</li>
                           <li>25GB Storage</li>
                           <li>250GB Bandwidth</li>
                           <li>Unlimited Sub Domain</li>
                           <li>Unlimited Email</li>
                           <!-- <li>Easy To Upgrade</li> -->
                           <!-- <li><a href="#">Sign Up Now</a></li> -->
                       </ul>
                    </li>               
                    <li>
                        <ul>
                            <li class="title"><h3>PREMIUM</h3><h4>$19<small>/month</small></h4></li>
                            <li class="divider"></li>
                            <li>1 Domain</li>
                            <li>20GB Storage</li>
                            <li>Unlimited Bandwidth</li>
                            <li>Unlimited Sub Domain</li>
                            <li>Unlimited Email</li>
                            <!-- <li>Easy To Upgrade</li> -->
                            <!-- <li><a href="#">Sign Up Now</a></li> -->
                        </ul>
                    </li>        
                <li>
                    <ul>
                        <li class="title"><h3>ULTIMATE</h3><h4>$19<small>/month</small></h4></li>
                        <li class="divider"></li>
                        <li>5 Domains</li>
                        <li>100GB Storage</li>
                        <li>Unlimited Bandwidth</li>
                        <li>Unlimited Sub Domain</li>
                        <li>Unlimited Email</li>
                        <!-- <li>Easy To Upgrade</li> -->
                        <!-- <li><a href="#member">Sign Up Now</a></li> -->
                 </ul>
               </li>   
               <div class="clear"></div>          
            </ul>
                 </div>
             </div>
         </div>
            </div>
        </div>
        <!-- Recomend products -->
        <!-- Upcoming Release -->

        <!-- Best Seller Products -->
        <section class="best-seller tc-padding">
            <div class="container">
                
                <!-- Main Heading -->
                <div class="main-heading-holder">
                    <div class="main-heading style-1">
                        <h2>About <span class="theme-color">855 Solution </span></h2>
                    </div>
                </div>
                <!-- Main Heading -->

                <!-- Best sellers Tabs -->
                <div id="best-sellers-tabs" class="best-sellers-tabs">

                    <!-- Nav tabs -->
                    <div class="tabs-nav-holder">
                        <ul class="tabs-nav">
                            <?php
                                $i=1;
                             foreach ($getcategory as $category) { ?>
                            <li><a href="#tab-<?=$i?>"><?=$category->location_name?></a></li>
                            <?php $i++; }?>
                            <!-- <li><a href="#tab-2">Leadership</a></li>
                            <li><a href="#tab-3">Peotry</a></li>
                            <li><a href="#tab-4">Mathmatics</a></li>
                            <li><a href="#tab-5">Kids Books</a></li> -->
                        </ul>
                    </div>
                    <!-- Nav tabs -->

                <!-- Tab panes -->
                <div class="tab-content">

                    <!-- Best Seller Slider -->
                    <div id="tab-1">
                        <div class="best-seller-slider">
                             <?php foreach ($event_product as $products) {
                              
                             ?>
                           
                            <div class="item ">
                                <div class="product-box">
                                    <div class="product-img">
                                        <img src="<?= site_url('assets/upload/article/'.$products->article_id.'_'.$products->url); ?>" alt="">
                                        <ul class="product-cart-option position-center-x" style="left: 40%">
                                            <li><a href="<?= site_url('site/customerdetail/'.$products->article_id); ?>"><i class="fa fa-eye"></i></a></li>
                                           <!--  <li><a href="#"><i class="fa fa-cart-arrow-down"></i></a></li>
                                            <li><a href="#"><i class="fa fa-share-alt"></i></a></li> -->
                                        </ul>
                                        <!-- <span class="sale-bacth">sale</span> -->
                                    </div>
                                    <div class="product-detail">
                                        <!-- <span>Novel</span> -->
                                        <h5><a href="<?= site_url('site/customerdetail/'.$products->article_id); ?>"><?=$products->article_title?></a></h5>
                                        <!-- <p><?=$products->meta_desc?></p> -->
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
                            
                            <!-- Product Box -->

                        </div>
                    </div>





                    <!-- Best Seller Slider -->

                    <!-- Best Seller Slider -->
                    <div id="tab-2">
                        <div class="best-seller-slider">

                            <!-- Product Box -->
                            <?php foreach ($event_service as $services ) {  ?>
                           
                            <div class="item">
                                <div class="product-box">
                                    <div class="product-img">
                                        <img src="<?= site_url('assets/upload/article/'.$services->article_id.'_'.$services->url); ?>" alt="">
                                        <ul class="product-cart-option position-center-x" style="left: 40%">
                                            <li><a href="<?= site_url('site/customerdetail/'.$services->article_id); ?>"><i class="fa fa-eye"></i></a></li>
                                            <!-- <li><a href="#"><i class="fa fa-cart-arrow-down"></i></a></li>
                                            <li><a href="#"><i class="fa fa-share-alt"></i></a></li> -->
                                        </ul>
                                        <!-- <span class="sale-bacth">sale</span> -->
                                    </div>
                                    <div class="product-detail">
                                        <!-- <span>Novel</span> -->
                                        <h5><a href="<?= site_url('site/customerdetail/'.$services->article_id); ?>"><?=$services->article_title?></a></h5>
                                        <!-- <p><?=$services->meta_desc?></p> -->
                                        <div class="rating-nd-price hide">
                                            <!-- <strong>$280.99</strong> -->
                                            <ul class="rating-stars hide">
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
                    <!-- Best Seller Slider -->

                    <!-- Best Seller Slider -->
                    <div id="tab-3">
                        <div class="best-seller-slider">

                            <!-- Product Box -->
                            <?php foreach ($event_getuptemplate_home as $templates) { ?>
                          
                            <div class="item ">
                                <div class="product-box">
                                    <div class="product-img">
                                        <img src="<?= site_url('assets/upload/article/'.$templates->article_id.'_'.$templates->url); ?>" alt="">
                                        <ul class="product-cart-option position-center-x" style="left: 40%">
                                            <li><a href="<?= site_url('site/customerdetail/'.$templates->article_id); ?>"><i class="fa fa-eye"></i></a></li>
                                            <!-- <li><a href="#"><i class="fa fa-cart-arrow-down"></i></a></li> -->
                                            <!-- <li><a href="#"><i class="fa fa-share-alt"></i></a></li> -->
                                        </ul>
                                    </div>
                                    <div class="product-detail">
                                        <!-- <span>Novel</span> -->
                                        <h5><a href="<?= site_url('site/customerdetail/'.$templates->article_id); ?>"><?=$templates->article_title?></a></h5>
                                        <!-- <p><?=$templates->meta_desc?></p> -->
                                        <div class="rating-nd-price hide">
                                            <!-- <strong>$280.99</strong> -->
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
                    <!-- Best Seller Slider -->

                    <!-- Best Seller Slider -->
                    <div id="tab-4">
                        <div class="best-seller-slider">

                            <!-- Product Box -->
                            <?php foreach ($event_project as $projects) { ?>
                            
                            <div class="item ">
                                <div class="product-box">
                                    <div class="product-img">
                                        <img src="<?= site_url('assets/upload/article/'.$projects->article_id.'_'.$projects->url); ?>" alt="">
                                        <ul class="product-cart-option position-center-x" style="left: 40%">
                                            <li><a href="<?= site_url('site/customerdetail/'.$projects->article_id); ?>"><i class="fa fa-eye"></i></a></li>
                                            <!-- <li><a href="#"><i class="fa fa-cart-arrow-down"></i></a></li> -->
                                            <!-- <li><a href="#"><i class="fa fa-share-alt"></i></a></li> -->
                                        </ul>
                                    </div>
                                    <div class="product-detail">
                                        <!-- <span>Novel</span> -->
                                        <h5><a href="<?= site_url('site/customerdetail/'.$projects->article_id); ?>"><?=$projects->article_title?></a></h5>
                                        <!-- <p><?=$projects->meta_desc?></p> -->
                                        <div class="rating-nd-price hide">
                                            <!-- <strong>$280.99</strong> -->
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
                    <!-- Best Seller Slider -->

                    <!-- Best Seller Slider -->
                   
                    <!-- Best Seller Slider -->

                </div>
                <!-- Tab panes -->

                </div>
                <!-- Best sellers Tabs -->

            </div>
        </section>
        
        <!-- Recomend products -->
        <div class="recomended-products tc-padding hide">
            <div class="container">
                
                <!-- Main Heading -->
                <div class="main-heading-holder">
                    <div class="main-heading">
                        <h2>Staff <span class="theme-color">Recomended </span> Books</h2>
                        <!-- <p>Whether you’re a large or small employer, enterpreneur, educational institution, professional</p> -->
                    </div>
                </div>
                <!-- Main Heading -->

                <div class="related-produst-slider">
                           
                            <div class="item">
                                <div class="grid-blog">
                                    <div class="grid-blog-img">
                                        <img src="<?=base_url().'assets/images/grid-blog/img-01.jpg'?>" style="width: 100%;" alt="">
                                    </div>
                                    <div class="product-detail blog-detail">
                                        <span class="date"><i class="fa fa-calendar"></i>02 March 2016</span>
                                        <h5>How to write an eBook in 2015 and make</h5>
                                        <p>How to make money writing and publishing eBooks Part 1. The first post in this series is on how...</p>
                                        <div class="aurthor-detail">
                                            <span><img src="<?=base_url().'assets/images/book-aurthor/img-01.jpg'?>" alt="">Chelsea McMnin</span>
                                            <a class="add-wish" href="#"><i class="fa fa-share-alt"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="item">
                                <div class="grid-blog">
                                    <div class="grid-blog-img">
                                        <img src="<?=base_url().'assets/images/grid-blog/img-02.jpg'?>" style="width: 100%;" alt="">
                                    </div>
                                    <div class="product-detail blog-detail">
                                        <span class="date"><i class="fa fa-calendar"></i>02 March 2016</span>
                                        <h5>21 Quotes That Remind Us Just How Much</h5>
                                        <p>How to make money writing and publishing eBooks Part 1. The first post in this series is on how...</p>
                                        <div class="aurthor-detail">
                                            <span><img src="<?=base_url().'assets/images/book-aurthor/img-01.jpg'?>" alt="">Chelsea McMnin</span>
                                            <a class="add-wish" href="#"><i class="fa fa-share-alt"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="grid-blog">
                                    <div class="grid-blog-img">
                                        <img src="<?=base_url().'assets/images/grid-blog/img-03.jpg'?>" style="width: 100%;" alt="">
                                    </div>
                                    <div class="product-detail blog-detail">
                                        <span class="date"><i class="fa fa-calendar"></i>02 March 2016</span>
                                        <h5>Books Mini Poster, the love of real books</h5>
                                        <p>How to make money writing and publishing eBooks Part 1. The first post in this series is on how...</p>
                                        <div class="aurthor-detail">
                                            <span><img src="<?=base_url().'assets/images/book-aurthor/img-01.jpg'?>" alt="">Chelsea McMnin</span>
                                            <a class="add-wish" href="#"><i class="fa fa-share-alt"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="grid-blog">
                                    <div class="grid-blog-img">
                                        <img src="<?=base_url().'assets/images/grid-blog/img-01.jpg'?>"  style="width: 100%;" alt="">
                                    </div>
                                    <div class="product-detail blog-detail">
                                        <span class="date"><i class="fa fa-calendar"></i>02 March 2016</span>
                                        <h5>How to write an eBook in 2015 and make</h5>
                                        <p>How to make money writing and publishing eBooks Part 1. The first post in this series is on how...</p>
                                        <div class="aurthor-detail">
                                            <span><img src="<?=base_url().'assets/images/book-aurthor/img-01.jpg'?>" alt="">Chelsea McMnin</span>
                                            <a class="add-wish" href="#"><i class="fa fa-share-alt"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="grid-blog">
                                    <div class="grid-blog-img">
                                        <img src="<?=base_url().'assets/images/grid-blog/img-02.jpg'?>" style="width: 100%;" alt="">
                                    </div>
                                    <div class="product-detail blog-detail">
                                        <span class="date"><i class="fa fa-calendar"></i>02 March 2016</span>
                                        <h5>21 Quotes That Remind Us Just How Much</h5>
                                        <p>How to make money writing and publishing eBooks Part 1. The first post in this series is on how...</p>
                                        <div class="aurthor-detail">
                                            <span><img src="<?=base_url().'assets/images/book-aurthor/img-01.jpg'?>" alt="">Chelsea McMnin</span>
                                            <a class="add-wish" href="#"><i class="fa fa-share-alt"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="grid-blog">
                                    <div class="grid-blog-img">
                                        <img src="<?=base_url().'assets/images/grid-blog/img-03.jpg'?>" style="width: 100%;" alt="">
                                    </div>
                                    <div class="product-detail blog-detail">
                                        <span class="date"><i class="fa fa-calendar"></i>02 March 2016</span>
                                        <h5>Books Mini Poster, the love of real books</h5>
                                        <p>How to make money writing and publishing eBooks Part 1. The first post in this series is on how...</p>
                                        <div class="aurthor-detail">
                                            <span><img src="<?=base_url().'assets/images/book-aurthor/img-01.jpg'?>" alt="">Chelsea McMnin</span>
                                            <a class="add-wish" href="#"><i class="fa fa-share-alt"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

            </div>
        </div>
        <!-- Recomend products -->
        <div class=" tc-padding hide">
            <div class="container">
                
                <!-- Main Heading -->
                <div class="main-heading-holder">
                    <div class="main-heading">
                        <h2>Staff <span class="theme-color">Recomended </span> Books</h2>
                        <p>Whether you’re a large or small employer, enterpreneur, educational institution, professional</p>
                    </div>
                </div>
                <!-- Main Heading -->

                <div class="related-produst-slider">

                            <div class="item">
                                <div class="s-arthor-wighet">
                                        <div class="s-arthor-img">
                                            <img src="<?=base_url().'assets/images/s-news-post/img-01.jpg'?>" alt="">
                                        </div>
                                        <div class="s-arthor-detail">
                                            <h6><a href="#">Watch Magda Szubanski Read from He Award</a></h6>
                                            <span>Posted on 24 March 2016 </span>
                                        </div>
                                    </div>
                            </div>
                            <div class="item">
                                 <div class="s-arthor-wighet">
                                        <div class="s-arthor-img">
                                            <img src="<?=base_url().'assets/images/s-news-post/img-01.jpg'?>" alt="">
                                        </div>
                                        <div class="s-arthor-detail">
                                            <h6><a href="#">Watch Magda Szubanski Read from He Award</a></h6>
                                            <span>Posted on 24 March 2016 </span>
                                        </div>
                                    </div>
                            </div>
                            <div class="item">
                                 <div class="s-arthor-wighet">
                                        <div class="s-arthor-img">
                                            <img src="<?=base_url().'assets/images/s-news-post/img-01.jpg'?>" alt="">
                                        </div>
                                        <div class="s-arthor-detail">
                                            <h6><a href="#">Watch Magda Szubanski Read from He Award</a></h6>
                                            <span>Posted on 24 March 2016 </span>
                                        </div>
                                    </div>
                            </div>
                            <div class="item">
                                <div class="s-arthor-wighet">
                                        <div class="s-arthor-img">
                                            <img src="<?=base_url().'assets/images/s-news-post/img-01.jpg'?>" alt="">
                                        </div>
                                        <div class="s-arthor-detail">
                                            <h6><a href="#">Watch Magda Szubanski Read from He Award</a></h6>
                                            <span>Posted on 24 March 2016 </span>
                                        </div>
                                    </div>
                            </div>
                            <div class="item">
                                <div class="s-arthor-wighet">
                                        <div class="s-arthor-img">
                                            <img src="<?=base_url().'assets/images/s-news-post/img-01.jpg'?>" alt="">
                                        </div>
                                        <div class="s-arthor-detail">
                                            <h6><a href="#">Watch Magda Szubanski Read from He Award</a></h6>
                                            <span>Posted on 24 March 2016 </span>
                                        </div>
                                    </div>
                            </div>
                            <div class="item">
                                 <div class="s-arthor-wighet">
                                        <div class="s-arthor-img">
                                            <img src="<?=base_url().'assets/images/s-news-post/img-01.jpg'?>" alt="">
                                        </div>
                                        <div class="s-arthor-detail">
                                            <h6><a href="#">Watch Magda Szubanski Read from He Award</a></h6>
                                            <span>Posted on 24 March 2016 </span>
                                        </div>
                                    </div>
                            </div>
                        </div>

            </div>
        </div>
         <!-- Recomend products -->
        <div class="tc-padding" style="background-color: #ddd">
            <div class="container">
                
                <!-- Main Heading -->
                <div class="main-heading-holder"> 
                    <div class="main-heading">
                        <h2>OUR <span class="theme-color">PRODUCTS </span></h2>
                        <!-- <p>Whether you’re a large or small employer, enterpreneur, educational institution, professional</p> -->
                    </div>
                </div>
                <!-- Main Heading -->

                <div class="">
                    <div class="collection-content">
                        <ul>
                             <?php foreach ($event_product as $event_products ) {  ?>
                            <li>
                                <div class="s-product">
                                    <div class="s-product-img">
                                        <img src="<?= site_url('assets/upload/article/'.$event_products->article_id.'_'.$event_products->url); ?>" style="width: 100%;" alt="">
                                        <div class="s-product-hover">
                                            <div class="position-center-x">
                                                <!-- <a href="#" class="plus-icon"><i class="fa fa-shopping-cart"></i></span> -->
                                                <a class="btn-1 sm shadow-0" data-toggle="modal" data-target="" href="<?= site_url('site/customerdetail/'.$event_products->article_id); ?>">Quick view</a>
                                            </div>
                                        </div>
                                    </div>
                                    <h6><a href="<?= site_url('site/customerdetail/'.$event_products->article_id); ?>"><?=$event_products->article_title?></a></h6>
                                    <span><?=$event_products->meta_desc?></span>
                                </div>
                            </li>
                            <?php } ?>
                            
                        </ul>
                    </div>
                    <a class="btn-1 sm shadow-0" data-toggle="modal" data-target="" href="<?php echo site_url('site/allproduct/32')?>" style="float: right;margin-right: 20px;">VIEW ALL</a>
                </div>

            </div>
        </div>
        <!-- Recomend products -->
        <div class="tc-padding">  
            <section class="partners tc-padding-bottom">
            <div class="container">

                <!-- Main Heading -->
                <div class="main-heading-holder">
                    <div class="main-heading style-2">
                        <h2>OUT <span class="theme-color">CUSTOMERS</span></h2>
                        <!-- <p>We are committed to providing first-class services to the writers who trust us</p> -->
                    </div>
                </div>
                <!-- Main Heading -->

                <!-- Partners Logos -->
              <!--   <ul class="logos-slider">
                    <?php foreach ($event_customer as $customers ) {  ?>
                    <li><a href="<?= site_url('site/customerdetail/'.$customers->article_id); ?>"><img title="<?=$customers->article_title?>" src="<?= site_url('assets/upload/article/'.$customers->article_id.'_'.$customers->url); ?>" alt=""></a></li>
                    <?php } ?>
                </ul> -->
                <div class="">
                    <!-- Collection Content -->
                    <div class="collection-content">
                        <ul>
                             <?php foreach ($event_customer as $event_products ) {  ?>
                            <li>
                                <div class="s-product">
                                    <div class="s-product-img">
                                        <img src="<?= site_url('assets/upload/article/'.$event_products->article_id.'_'.$event_products->url); ?>" style="padding: 10px 50px 10px;" alt="">
                                        <div class="s-product-hover">
                                            <div class="position-center-x" style="top: 30px;">
                                                <!-- <a href="#" class="plus-icon"><i class="fa fa-shopping-cart"></i></span> -->
                                                <a class="btn-1 sm shadow-0" data-toggle="modal" data-target="" href="<?= site_url('site/customerdetail/'.$event_products->article_id); ?>">Quick view</a>
                                            </div>
                                        </div>
                                    </div>
                                    <h6><a href="<?= site_url('site/customerdetail/'.$event_products->article_id); ?>"><?=$event_products->article_title?></a></h6>
                                    <span><?=$event_products->meta_desc?></span>
                                </div>
                            </li>
                            <?php } ?>
                            
                        </ul>
                    </div>
                       <a class="btn-1 sm shadow-0" data-toggle="modal" data-target="" href="<?php echo site_url('site/allcustomer/31')?>" style="float: right;margin-right: 20px;">VIEW ALL</a>
                </div>

            </div>
        </section>
        </div>
         
        <!-- Blog Nd Gallery-->
        <section class="tc-padding hide">
            <div class="container">
                <div class="row">

                    <!-- Author History -->
                    <div class="col-lg-8 col-xs-12">

                        <!-- Secondary heading -->
                        <div class="sec-heading">
                            <h4>Author History of Invation</h4>
                        </div>
                        <!-- Secondary heading -->

                        <!-- History -->
                        <div class="aurthor-history style-2">
                            <img src="<?=base_url().'assets/images/aurthors/img-02.jpg'?>" alt="">
                            <div class="text-box">
                                <div class="left-box">
                                    <h5>Smith Jhon <span class="theme-color">Book Writer Fiction</span></h5>
                                    <p>The author of a work may receive a percentage calculated on a wholesale or a specific price or a fixed amount on each book sold. Publishers, at times, reduced the risk of this type.  of arrangement, by agreeing only to pay this after.</p>
                                </div>
                                <div class="follow-nd-s-pro">
                                    <div class="follow">
                                        <p>set against future royalties, but this is no longer common practice.[citation needed] Most independent publishers pay royalties as.</p>
                                        <ul class="social-icons">
                                        <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a class="youtube" href="#"><i class="fa fa-youtube-play"></i></a></li>
                                        <li><a class="pinterest" href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                        </ul>
                                    </div>
                                    <ul class="s-related-products">
                                        <li>
                                            <img src="<?=base_url().'assets/images/s-related-products/img-1-1.jpg'?>" alt="">
                                            <span class="name">$28.99</span> 
                                        </li>
                                        <li>
                                            <img src="<?=base_url().'assets/images/s-related-products/img-1-2.jpg'?>" alt="">
                                            <span class="name">$28.99</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- History -->

                    </div>
                    <!-- Author History -->

                    <!-- Blog -->
                    <div class="col-lg-4 col-xs-12">

                        <!-- Secondary heading -->
                        <div class="sec-heading">
                            <h4>Latest Blog Post</h4>
                        </div>
                        <!-- Secondary heading -->

                        <!-- Blog list -->
                        <div class="blog-style-1 style-2">
                           <div class="post-box">
                              <div class="thumb"><img src="<?=base_url().'assets/images/blog/img-1-1.jpg'?>" alt=""></div>
                              <div class="text-column"><a href="blog-detail.html">24 Images About Bookstores That Every Reader </a> 
                              <span><i class="fa fa-user" aria-hidden="true"></i>Anderson jhon</span> <em><i class="fa fa-clock-o" aria-hidden="true"></i>2 hour ago</em> </div>
                           </div>
                           <div class="post-box">
                              <div class="thumb"><img src="<?=base_url().'assets/images/blog/img-1-2.jpg'?>" alt=""></div>
                              <div class="text-column"><a href="blog-detail.html">The 30 Best Places To Be If You Love Books Mark</a> 
                              <span><i class="fa fa-user" aria-hidden="true"></i>Anderson jhon</span> <em><i class="fa fa-clock-o" aria-hidden="true"></i>2 hour ago</em> </div>
                           </div>
                           <div class="post-box">
                              <div class="thumb"><img src="<?=base_url().'assets/images/blog/img-1-3.jpg'?>" alt=""></div>
                              <div class="text-column"><a href="blog-detail.html">The Old Butcher's Bookshop, a rare books store</a>
                              <span><i class="fa fa-user" aria-hidden="true"></i>Anderson jhon</span> <em><i class="fa fa-clock-o" aria-hidden="true"></i>2 hour ago</em> </div>
                           </div>
                        </div>
                        <!-- Blog list -->

                    </div>
                    <!-- Blog -->

                </div>
            </div>
        </section>
        <!-- Blog Nd Gallery--> 
        
        <!-- Related Products -->
        <section class="related-product tc-padding-bottom hori-scroll ">
            <div class="container">

                <!-- Main Heading -->
                <div class="main-heading-holder">
                    <div class="main-heading">
                         <h2>Our <span class="theme-color">Customers</span></h2>
                    </div>
                </div>
                <!-- Main Heading -->

                <!-- Content -->
                <div class="content scroll-x">
                    <ul>
                        <?php foreach ($event_customer as $event_products ) {  ?>
                        <li>
                            <!-- <span class="price"><sup>$</sup>12.00</span> -->
                            <img src="<?= site_url('assets/upload/article/'.$event_products->article_id.'_'.$event_products->url); ?>" alt="" width="100px">
                            <h5><a href="#"><?=$event_products->article_title?></a></h5>
                            <!-- <ul class="product-cart-option position-center-x">
                                <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                <li><a href="#"><i class="fa fa-cart-arrow-down"></i></a></li>
                                <li><a href="#"><i class="fa fa-share-alt"></i></a></li>
                            </ul> -->
                        </li>
                          <?php } ?>
                    </ul>
                </div>
                <!-- Content -->

            </div>
        </section>
        <!-- Related Products --> 
        <!-- Tweet Slider -->
        <div class="tweet hide">
            <div class="container">
              <div id="tweet-slider" class="tweet-slider">
                    <div class="item">
                        <span class="twit-icon"><i class="fa fa-twitter"></i></span>
                        <p><strong>@jhonrogie</strong> Woohoo! Check out the Twitter Search Plugin I just released with UpThemes! <a href="#"> htttp://upthem.es/twitter</a></p>
                        <ul>
                            <li><i class="fa fa-clock-o"></i>45 minutes ago from</li>
                            <li><i class="fa fa-map-marker"></i>Tower of Terror</li>
                        </ul>
                    </div>
                    <div class="item">
                        <span class="twit-icon"><i class="fa fa-twitter"></i></span>
                        <p><strong>@bjmorkegljnr</strong> Woohoo! Check out the Twitter Search Plugin I just released with UpThemes! <a href="#"> htttp://upthem.es/twitter</a></p>
                        <ul>
                            <li><i class="fa fa-clock-o"></i>45 minutes ago from</li>
                            <li><i class="fa fa-map-marker"></i>Tower of Terror</li>
                        </ul>
                    </div>
              </div>
            </div>
        </div>
        <!-- Tweet Slider --> 

    </main>
        