<style type="text/css">
    .row span {
        style="color: rgb(102, 102, 102); 
        font-family: Verdana, Geneva, sans-serif; 
        
    }
     .detail_title{
        padding-bottom: 20px;
        font-size: 36px;
        font-weight: 700;
        text-transform: uppercase;
        font-family: 'Roboto Slab', serif;
        color: #222222;
        text-align: center;

    }
    
    .content-p{
        position: relative;
        font-size: 18px;
        line-height: 1.3em;
        margin-bottom: 16px;
        color: rgba(0, 0, 0, 0.80);
        padding: 0;
    }
    .content-p p{
        padding-top: 2em;
    }
</style>
<section id="blog">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-8">
                     <div class="inner-page-heading h-white style-2">
                        <h2 class="detail_title"><?php  echo $header->article_title;?></h2>
                      </div>
                  </div>
           </div>
            <div class="col-md-12">
                <div class="border">
                </div>
            </div>  
       </div>
           <div class="row">                     
            <div class="col-md-12">
                <div class="blog_news" style="margin: 13px 0">
                    <div class="row">
                        <?php foreach ($content as $service) {
                           
                        ?>
                        <div class="col-md-8">
                            <img src="<?= site_url('assets/upload/article/'.$service->article_id.'_'.$service->url); ?>" alt="" style="padding: 2px; width: 100%; height: 450px">
                        </div>
                        <div class="col-md-4">
                            <div class="row">
                                <div class="col-md-offset-3 col-md-6">
                                    <div class="fa fa-repeat"> <span style="font-weight: 700; font-size: 18px; padding-left: 1px"> RECENT POST</span></div>
                                </div>
                            </div><br>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="col-md-4">
                                        <img src="<?= site_url('assets/upload/article/'.$service->article_id.'_'.$service->url); ?>" alt="" style="padding: 2px; width: 80px; height: 70px;"><?php }?>
                                    </div>
                                    <div class="col-md-8">
                                        <?php echo $header->article_title;?>                                              
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                    </div><br>
                    <div class="row">
                       
                        <div class="col-md-8">
                            <div class="col-md-12">
                                <div class="content-p">
                                    <?php echo $header->content;?>
                                </div>
                            </div>
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