

        <div class="parallax-window inner-banner tc-padding overlay-dark tc-paddings " data-parallax="scroll" data-image-src="images/inner-banner/img-06.jpg">
            <div class="container">
                <div class="inner-page-heading h-white style-2">
                    <h2 style=" "><?php  echo $row->article_title;?></h2>
                    
                </div>
            </div>
        </div>
        <!-- Inner Banner -->

    </header>
    <!-- Header -->


    <!-- Main Content -->
    <main class="main-content" style="background-color: #fff">

        <!-- Gallery -->
        <div class="gallery tc-padding" style="background-color: #fff">
            <div class="container">
                <div class="row no-gutters">
                    <?php 
                    foreach ($result as $service) {
                        
                    
                    ?>
                    <div class="col-lg-3 col-xs-6 r-full-width">
                        <div class="gallery-figure style-2"> 
                            <img src="<?= site_url('assets/upload/article/'.$service->article_id.'_'.$service->url); ?>" alt="" style="padding: 2px;" >
                            <div class="overlay">
                                <ul class="position-center-x">
                                    <!-- <li class="hide"><a href="#"><i class="fa fa-heart"></i>Likes</a></li> -->
                                    <li><a href="<?= site_url('assets/upload/article/'.$service->article_id.'_'.$service->url); ?>" data-rel="prettyPhoto[gallery]" style="margin: 0 0 0 45px;"><i class="fa fa-eye" style="margin: 0px;"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <?php }?>
                    
                    
                </div><br>
                <div class="col-xs-12">
                    <?php  echo $row->content;?>
                </div>
            </div>
        </div>
        <!-- Gallery -->

    </main>
    <!-- Main Content