<style type="text/css">
    .row span {
        style="color: rgb(102, 102, 102); 
        font-family: Verdana, Geneva, sans-serif; 
        font-size: 13px;
    }
</style>
<section id="blog">
    <div class="container">
        <div class="row">
            <div class="col-md-offset-4 col-md-4">
                <div class="parallax-window inner-banner tc-padding overlay-dark tc-paddings " data-parallax="scroll" data-image-src="images/inner-banner/img-06.jpg">
                    <div class="container">
                        <div class="inner-page-heading h-white style-2">
                            <h2 style=" "><?php  echo $header->article_title;?></h2>
                            
                        </div>
                    </div>
                </div><br>
            </div>
        </div>
  
        <div class="row">
            <div class="col-md-offset-2 col-md-8">
                <div class="blog_news" style="margin: 13px 0">
                    <div class="row">
                        <?php foreach ($content as $service) {
                           
                        ?>
                        <div class="col-md-12">
                            <img src="<?= site_url('assets/upload/article/'.$service->article_id.'_'.$service->url); ?>" alt="" style="padding: 2px;" >
                            <!-- <div class="overlay">
                                <ul class="position-center-x"> -->
                                    <!-- <li class="hide"><a href="#"><i class="fa fa-heart"></i>Likes</a></li> -->
                                    <!-- <li><a href="<?= site_url('assets/upload/article/'.$service->article_id.'_'.$service->url); ?>" data-rel="prettyPhoto[gallery]" style="margin: 0 0 0 45px;"><i class="fa fa-eye" style="margin: 0px;"></i></a></li>
                                </ul>
                            </div> -->
                        </div>
                    <?php }?>
                    </div><br>
                    <div class="row">
                        <div class="">
                        <?php echo $header->content;?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>

<script>
    $(document).ready(function(){
        $("p").removeClass("truncate");
    });
</script>