<section id="service-title">
    <?php $sql = $this->db->query("SELECT * FROM tbllocation WHERE location_id = 9 AND is_active = 1")->row();?>
    <div class="main-title" style="background-color: #0B5345; ">
        <div class="container">
            <h1 class="main-title__primary style"><?php echo $sql->location_name;?></h1>
        </div>
    </div>
      <br>
       <div class="container">
        <div class="row">
            
            <?php
            foreach ($loaditem as $item) {
            ?>
            <div class="col-md-4">
                <div class="blog_news" style="margin: 13px 0">
                    <div class="single_blog_item">
                        <div class="blog_img">
                            <img src="<?=base_url().'assets/upload/article/'.$item->article_id.'_'.$item->url;?>" alt="">
                        </div>
                        <div class="blog_content">
                            <h2 style="text-align: center;"><bold>
                            <?php echo $item->article_title;?>
                            </bold></h2>
                            <div class="truncate"><?php echo $item->content;?></div>
                            <a class="blog_link" style="cursor:pointer; margin: 0; float: left;" href="<?= site_url('site/more_detail/'.$item->article_id); ?>">read more</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            }
            
            ?>
        </div>
        <!--   <div class="row">
            <?php
            foreach ($loaditem as $value) {
            ?>
            <div class="blog_img">
                <img src="<?=base_url().'assets/upload/article/'.$item->article_id.'_'.$item->url;?>" alt="">
            </div>
            <?php
            echo $value->article_title;
            }
            ?>
        </div> -->
        <!--End of row-->
    </div>
    <!--End of container-->
</section>
<!-- end of blog-->