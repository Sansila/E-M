<section id="blog">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="latest_blog text-center">
                        <?php 
                            $sql = $this->db->query("SELECT * FROM tbllocation WHERE location_id = 20 AND is_active = 1")->row();
                            echo $sql->location_name;
                        ?>
                    </div>
                </div>
            </div>
            <!--End of row-->
            <div class="row">
                <?php
                    $sql3 = $this->db->query("SELECT * FROM tblarticle as a 
                        inner join tblgallery as g on a.article_id = g.article_id
                        WHERE a.location_id = 20 AND a.is_active = 1 ")->result();
                    foreach ($sql3 as $item3) {
                ?>
                <div class="col-md-4">
                    <div class="blog_news">
                        <div class="single_blog_item">
                            <div class="blog_img">
                                <img src="<?=base_url().'assets/upload/article/'.$item3->article_id.'_'.$item3->url?>" alt="">
                            </div>
                            <div class="blog_content">
                                <?php 
                                    echo $item3->article_title;
                                    echo $item3->content;
                                ?>
                            </div>
                        </div>
                    </div>
                </div>

                <?php 
                    }
                ?>
            </div>
            <!--End of row-->
        </div>
        <!--End of container-->
    </section>
    <!-- end of blog-->