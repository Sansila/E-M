<div class="parallax-window inner-banner tc-padding overlay-dark tc-paddings" data-parallax="scroll" >
            <div class="container">
                <div class="inner-page-heading h-white">
                    <h2 style=" ">
                        Request Quote
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
                 <div class="form-holder">

                    <!-- Secondary heading -->
                    <div class="sec-heading">
                        <h3>Request Quote</h3>
                    </div>
                    <!-- Secondary heading -->

                    <!-- Sending Form -->
                    <form class="sending-form">
                        <div class="row">
                            
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" required="required" placeholder="Full name">
                                    <i class="fa fa-user"></i>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" required="required" placeholder="Phone no.">
                                    <i class="fa fa-phone"></i>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" required="required" placeholder="Email">
                                    <i class="fa fa-envelope"></i>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                  <select name="" id="" class="form-control">
                                     <option>--Selaect Product--</option>
                                   <?php
                                          $locat=$this->db->query("SELECT `article_id`,`article_title` FROM `tblarticle` WHERE `location_id`=6 and is_active=1 ")->result();
                                              foreach ($locat as $me) {
                                                  $se='';
                                                  if(isset($row->article_id))
                                                      if($row->location_id==$me->article_id)
                                                          $se='selected';
                                                  echo "<option value='$me->article_id' $se>$me->article_title</option>";
                                              }
                                    ?>
                                  </select>
                                    <!-- <input class="form-control" required="required" placeholder="Email"> -->
                                    <i class="fa fa-shopping-bag"></i>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <textarea class="form-control" required="required" rows="5" placeholder="Text here..."></textarea>
                                    <i class="fa fa-pencil-square-o"></i>
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <button class="btn-1 shadow-0 sm">send message</button>
                            </div>
                        </div>
                    </form>
                    <!-- Sending Form --> 

                </div>
                </div>
            </div>
        </div>
        <!-- Blog Grid -->

    </main>

 