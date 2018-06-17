<section id="service" class="service2 sections lightbg">
            <div class="container" >
                <div class="row" >
                    <div class="main_service2" style="text-align: center;">
                        <h2><?php
                        if (isset($row->article_title))
                         echo $row->article_title 
                         ?> </h2>
                           <!--  <p>condimentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p> -->
                        </div>

                        <div class="" > 
                        	<?php foreach($result as $products) { ?>
                            <div class="col-md-3 col-sm-3 ">
                                <div class="box" >
                                    <div class="" >
                                           <img src="<?= site_url('assets/upload/article/'.$products->article_id.'_'.$products->url); ?>" alt="">
                                        
                                        <div class="product-desc">
                                              
                                           
                                            <div class="small m-t-xs"> 
                                                
                                            </div>
                                            <div class="m-t text-righ">
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                            <?php } ?>
                            <div class="col-sm-12 col-xs-12">
                            <?php
                            if (isset($row->content ))
                             echo $row->content 
                             ?>
                            </div>
                            
          
                        </div>
                    </div>
                </div>
            </div>
        </section>