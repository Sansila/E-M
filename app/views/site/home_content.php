<script>
  jssor_t_slider_init = function() {   
    var jssor_t_options = {
      $AutoPlay: true,
      $AutoPlaySteps: 1,
      $SlideDuration: 500,
      $SlideWidth: 180,
      $SlideSpacing: 10,
      $Cols: 6,
      $ArrowNavigatorOptions: {
        $Class: $JssorArrowNavigator$,
        $Steps: 1
      },
      $BulletNavigatorOptions: {
        $Class: $JssorBulletNavigator$,
        $SpacingX: 1,
        $SpacingY: 1
      }
    };

    var jssor_t_slider = new $JssorSlider$("jssor_t", jssor_t_options);

    //responsive code begin
    //you can remove responsive code if you don't want the slider scales while window resizing
    function ScaleSlider() {
      var refSize = jssor_t_slider.$Elmt.parentNode.clientWidth;
      if (refSize) {
        refSize = Math.min(refSize, 1165);
        jssor_t_slider.$ScaleWidth(refSize);
      }
      else {
        window.setTimeout(ScaleSlider, 30);
      }
    }
    ScaleSlider();
    $Jssor$.$AddEvent(window, "load", ScaleSlider);
    $Jssor$.$AddEvent(window, "resize", ScaleSlider);
    $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
    //responsive code end
  };
</script>

<script>
  jssor_l_slider_init = function() {   
    var jssor_l_options = {
      $AutoPlay: true,
      $AutoPlaySteps: 1,
      $SlideDuration: 500,
      $SlideWidth: 800,
      $SlideSpacing: 100,
      $Cols: 2,
      $ArrowNavigatorOptions: {
        $Class: $JssorArrowNavigator$,
        $Steps: 1
      },
      $BulletNavigatorOptions: {
        $Class: $JssorBulletNavigator$,
        $SpacingX: 1,
        $SpacingY: 1
      }
    };
    
    var jssor_l_slider = new $JssorSlider$("jssor_l", jssor_l_options);
    
    //responsive code begin
    //you can remove responsive code if you don't want the slider scales while window resizing
    function ScaleSlider() {
      var refSize = jssor_l_slider.$Elmt.parentNode.clientWidth;
      if (refSize) {
        refSize = Math.min(refSize, 730);
        jssor_l_slider.$ScaleWidth(refSize);
      }
      else {
        window.setTimeout(ScaleSlider, 30);
      }
    }
    ScaleSlider();
    $Jssor$.$AddEvent(window, "load", ScaleSlider);
    $Jssor$.$AddEvent(window, "resize", ScaleSlider);
    $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
    //responsive code end
  };
</script>

<style>
  

  .jssorb03 {
    position: absolute;
  }
  .jssorb03 div, .jssorb03 div:hover, .jssorb03 .av {
    position: absolute;
    /* size of bullet elment */
    width: 22px;
    height: 22px;
    text-align: center;
    line-height: 21px;
    color: white;
    font-size: 12px;
    background: url('<?php echo base_url()?>img/b03.png') no-repeat;

    overflow: hidden;
    cursor: pointer;
  }
  .jssorb03 div { background-position: -5px -4px; }
  .jssorb03 div:hover, .jssorb03 .av:hover { background-position: -35px -4px; }
  .jssorb03 .av { background-position: -65px -4px; }
  .jssorb03 .dn, .jssorb03 .dn:hover { background-position: -95px -4px; }

  .jssora03l, .jssora03r {
    display: block;
    position: absolute;
    /* size of arrow element */
    width: 55px;
    height: 55px;
    cursor: pointer;
    background: url('<?php echo base_url()?>img/a03.png') no-repeat;
    overflow: hidden;
    margin-left:2.4%;
    margin-right: 2%;
  }

  .jssora03l { background-position: -3px -33px; }
  .jssora03r { background-position: -63px -33px; }
  .jssora03l:hover { background-position: -123px -33px; }
  .jssora03r:hover { background-position: -183px -33px; }
  .jssora03l.jssora03ldn { background-position: -243px -33px; }
  .jssora03r.jssora03rdn { background-position: -303px -33px; }


  .carr, .carl {
    display: block;
    position: absolute;
    /* size of arrow element */
    width: 60px;
    height: 55px;
    cursor: pointer;
    background: url('<?php echo base_url()?>img/a03.png') no-repeat;
    overflow: hidden;
    margin-left: 3.5%;
    margin-right: 4%;
    transition:none;
  }

  .carl { background-position: -60px -33px; }
  .carr { background-position: 0px -33px; }
  .carl:hover { background-position: -180px -33px; }
  .carr:hover { background-position: -120px -33px; }
  .carl.carldn { background-position: -300px -33px; }
  .carr.carrdn { background-position: -240px -33px; }
</style>
<style>
ul#menu li {
    display:inline;
}
</style>
<style type="text/css">
  
  #pb{
    padding: 10px;
    background: #84bae7;
    color: white;
    text-align: center;
  }
  .bss{
    width: 95%;
    height: 75px;
    margin-top: 10px;
    margin-left: 10px;
    border-bottom: 1px solid red;
  }
  .bimg{
    width: 25%;
    height: 100%;
    float: left;
  }
  .tcon{
    width: 74%;
    height: 100%;
    margin-left: 3px;
    float: left;
    color: blue;
  }
  .top_sl{
    text-align: center;
    margin-top: 10px;
  }
  #readsl{
    padding: 0px 3px  !important;
    background: red;
    font-size: 10px !important;
    color: white;
    border-radius:10%;
    float: right;
  }
</style>
<style type="text/css">
  
  .currentvideo {
    background: #e6e6e6;
  }

  .headerLabel::first-letter {
    font-size: 150%;
    color: black;
  }

  .slimg{
    position: relative; 
    top: 0px; left: 0px; 
    width: 100% !important; 
    height:411px; 
    overflow: hidden; 
    visibility: hidden;
  }
  .slimg img{
    width: 100%;
    max-height: 340px
  }
  .slimg2 img{
    width:100%;
    max-height: 340px;
  }
  .slimg2{
    cursor: default; 
    position: relative; 
    top: 0px; left: 0px; 
    width: 100% !important; 
    height: 411px; 
    overflow: hidden; 
    background:#844303;
  }

  .imgtop{
    width:100%; 
    padding:35px 20px;
    padding-bottom: 0;
  }
  .imgleft{
    width:100%;
    float:right;
    padding:10px; 
    color: white;
  }

  .tb{
    border-bottom: 1px dotted gray;
  }
  .lastb{
    width:50%; height: 40% !important;
  }
  .lastb2{
    width:100%;
  }
  #information_boardbox #west_calendar img{
    transition:all 0.2s;
  }
  #west_calendar img:hover{
    background: white;
    padding: 5px;
    border-radius: 3px;
  }
  @media(max-width: 768px){
    .b_pop1,.b_pop2,.b_pop3{
      width: 100% !important;
      float: left;
      /* display: block; */
      margin-top: 0;
      margin-bottom: 2%;
      margin-left: 0;
      padding: 10px;
      font-size: 15px;
    }
    .m_img{
      width: 100%;
    }
    #ytvideo2 {
      width: 85%;
      height: 350px !important;
      /*height: 50% !important;*/
      padding: 0px;
      margin: 0px;
    }

    .yt_holder ul li {
      list-style-type: none;
      display:block;
      background: #f1f1f1;
      width: 100%;
      margin-bottom: 5px;
      padding:2px;
    }

    .yt_holder ul {
      width: 100%;
      overflow-y:scroll !important;
      overflow-x:hidden;
      max-height: 450px;
    }

    .yt_holder ul li img {
      width: 100%;
      float: left;
      margin-right: 5px;
      border: 1px solid #999;

    }
    .lastb,.lastb2{
      width: 100%;
    }
  }
  #veall a:hover{
    background:#0a006a;
    color: white !important;
  }

</style>
<script type="text/ecmascript">
  $(function() {
    $("ul.demo1").ytplaylist();
    $("ul.demo2").ytplaylist({addThumbs:true, autoPlay: false, holderId: 'youtube-main'});
  });
</script>
<div class=" ">
   <div data-spy="marquee" data-life="2" class="col-sm-12">
    <div class="breaking-news">
      <div class="row">
      
          <label class="box " style="color: #ffff; margin-top: 2px; margin-bottom: -48px;background: red;border-radius: 5px;"> ព័ត៌មានថ្មីបំផុត</label>
        
        
           <marquee id="marquee" class="box"  bgcolor="" style="margin-top: 2px;margin-bottom: 0px;  border-top: 0px solid; border-radius: 0px; height: 45px;     margin-left: 106px !important;"  >
            <ul class="" style="margin-bottom: 0px;" onMouseOver="document.all.marquee.stop()" onMouseOut="document.all.marquee.start()">
               <?php foreach($newsmarquee as $new) { ?>
               <i > <img src="<?php echo site_url()?>assets/img/Actions-arrow-right-icon.png" style="width: 20px;"> </i>
              <li style="display:inline;"><a href="<?= site_url('site/events/'.$new->menu_id.'/'.$new->article_id.'/'.$new->location_id);?>">
                <?= substr($new->article_title, 0, 301); ?>
              </a>
              
              </li>
               <?php } ?>
            </ul>
             <!--  នាយកដ្ឋានវិទ្យុទាក់ទង បានបើកកិច្ចប្រជុំប្រចាំសប្តាហ៏របស់នាយកដ្ឋាន -->
           </marquee>
        
         
  </div>
  </div>
  </div>
</div>
<div class="">
  <div id="slidewrap" class="">
    <div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 1170px; height: 500px; overflow: hidden; visibility: hidden;">
      <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
        <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
        <div style="position:absolute;display:block;background:url('<?base_url()?>assets/img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
      </div>
      <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 1170px; height: 500px; overflow: hidden;">                  
        <?php
          $slider=$this->db->query("SELECT * FROM tblbanner WHERE location_id='1' and is_active=1 order by `orders` asc")->result();
          foreach ($slider as $s) {
            echo "<div data-p='225.00' style='display: none;'><img data-u='image' src='".base_url("assets/upload/banner/".$s->banner_id.".png")."' style='width: 100% !important' ;></div>" ;
          }
        ?>  
        <a data-u="add" href="http://www.jssor.com" style="display:none">Jssor Slider</a>               
      </div>
      <!-- Bullet Navigator -->
      <!-- <div data-u="navigator" class="jssorb05" style="bottom:16px;right:16px;" data-autocenter="1"> -->
        <!-- bullet navigator item prototype -->
        <!-- <div data-u="prototype" style="width:16px;height:16px;"></div>
      </div> -->
      <!-- Arrow Navigator -->
      <span data-u="arrowleft" class="jssora22l" style="top:0px;left:15px;width:40px;height:58px;" data-autocenter="2"></span>
      <span data-u="arrowright" class="jssora22r" style="top:0px;right:15px;width:40px;height:58px;" data-autocenter="2"></span>
    </div>
    <!-- end script slide -->
    <script>
      jssor_1_slider_init = function() {          
        var jssor_1_SlideoTransitions = [
          [{b:5500,d:3000,o:-1,r:240,e:{r:2}}],
          [{b:-1,d:1,o:-1,c:{x:51.0,t:-51.0}},{b:0,d:1000,o:1,c:{x:-51.0,t:51.0},e:{o:7,c:{x:7,t:7}}}],
          [{b:-1,d:1,o:-1,sX:9,sY:9},{b:1000,d:1000,o:1,sX:-9,sY:-9,e:{sX:2,sY:2}}],
          [{b:-1,d:1,o:-1,r:-180,sX:9,sY:9},{b:2000,d:1000,o:1,r:180,sX:-9,sY:-9,e:{r:2,sX:2,sY:2}}],
          [{b:-1,d:1,o:-1},{b:3000,d:2000,y:180,o:1,e:{y:16}}],
          [{b:-1,d:1,o:-1,r:-150},{b:7500,d:1600,o:1,r:150,e:{r:3}}],
          [{b:10000,d:2000,x:-379,e:{x:7}}],
          [{b:10000,d:2000,x:-379,e:{x:7}}],
          [{b:-1,d:1,o:-1,r:288,sX:9,sY:9},{b:9100,d:900,x:-1400,y:-660,o:1,r:-288,sX:-9,sY:-9,e:{r:6}},{b:10000,d:1600,x:-200,o:-1,e:{x:16}}]
        ];
          
        var jssor_1_options = {
          $AutoPlay: true,
          $SlideDuration: 800,
          $SlideEasing: $Jease$.$OutQuint,
          $CaptionSliderOptions: {
            $Class: $JssorCaptionSlideo$,
            $Transitions: jssor_1_SlideoTransitions
          },
          $ArrowNavigatorOptions: {
            $Class: $JssorArrowNavigator$
          },
          $BulletNavigatorOptions: {
            $Class: $JssorBulletNavigator$
          }
        };
          
        var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);
          
        //responsive code begin
        //you can remove responsive code if you don't want the slider scales while window resizing
        function ScaleSlider() {
          var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
          if (refSize) {
            refSize = Math.min(refSize);
            jssor_1_slider.$ScaleWidth(refSize);
          }
          else {
            window.setTimeout(ScaleSlider, 30);
          }
        }
        ScaleSlider();
        $Jssor$.$AddEvent(window, "load", ScaleSlider);
        $Jssor$.$AddEvent(window, "resize", ScaleSlider);
        $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
        //responsive code end
      };

      jssor_1_slider_init();
      var jssor_slider1 = new $JssorSlider$("#slidewrap", options);

      //responsive code begin
      //you can remove responsive code if you don't want the slider scales while window resizes
      function ScaleSlider() {
        var parentWidth = jssor_slider1.$Elmt.parentNode.clientWidth;
        if (parentWidth)
          jssor_slider1.$ScaleWidth(Math.min(parentWidth, 1920));
        else
          window.setTimeout(ScaleSlider, 30);
      }
      ScaleSlider();

      $(window).bind("load", ScaleSlider);
      $(window).bind("resize", ScaleSlider);
      $(window).bind("orientationchange", ScaleSlider);
      //responsive code end
    </script>
  </div>
  <!-- end slide -->
</div>

<div class="container" style="">
  <section class="row tags">
    <div class=" col-sm-3" >
      <div class="tags-item" style="height: 91px;">
        <a href="#" class="tags"><?= $this->lang->line('department_photo'); ?></a>
      </div>
    </div>
    <div class="col-sm-6">
        
            <img  src="<?= site_url('assets/images/Untitled-1-2.jpg'); ?>" style ="margin-top: 0px;margin-left: 0px;margin-bottom: 0px;width: 100%;">

  
      <div class="row col-sm-12" style="margin-top: 1px;">

      
           <div class="col-sm-6">
               <img  src="<?= site_url('assets/images/Untitled-1-2.jpg'); ?>" style ="margin-top: 0px;margin-left: -14px;margin-bottom: 0px; width: 100%;">
            </div>
         <div class="col-sm-6" style="margin-left: -12px;">
               <img  src="<?= site_url('assets/images/Untitled-1-2.jpg'); ?>" style =" margin-top: 1px; margin-left: 0px;margin-right: 1px;float: right; width: 100%;">
          </div>
      
       
  </div>
    </div>
    <div class="col-sm-3">
      <div class="tags-item" style="height: 91px;">
        <a href="#"><?= $this->lang->line('leadership'); ?></a>
      </div>
    </div>
  </section>
  
</div>

<div class="container">
  <section class="row">
    <div class="col-sm-3">
      <div class="box">
        <h2 class="title" style="font-size: 1.3rem;"><?= $this->lang->line('general_director'); ?></h2>
        <?php foreach($directors as $director) { 
          echo "<div class='' style='padding:0;text-align: center;'>";          
          if(file_exists(FCPATH.'assets/upload/banner/thumb/'.$director->banner_id.'.png')) {
            echo "<img src='".site_url('assets/upload/banner/thumb/'.$director->banner_id.'.png')."' style='width:100%;' alt=''>";
          }            
          echo "<p class='caption'>$director->title</p>";
          echo "</div>";
        } ?>
      </div>
    </div>
    <div class="col-sm-6"> 
      <div class="box">
        <h2 class="title" style="font-size: 1.3rem;"><?= $this->lang->line('latest_news'); ?></h2>
        <ul class="list-style">
          <?php foreach($news as $new) { ?>
            <li class="">
              <a href="<?= site_url('site/events/'.$new->menu_id.'/'.$new->article_id.'/'.$new->location_id);?>">
                <img src="<?= site_url('assets/upload/article/thumb/'.$new->article_id.'_'.$new->url); ?>" width="130" alt="">
                <span><i class="fa fa-clock-o"></i> <?= $new->article_date; ?></span>
                <h5 title="<?= $new->article_title; ?>"><?= substr($new->article_title, 0, 301); ?>...</h5>
              </a>
            </li>
          <?php } ?>
        </ul>
        <?php echo count($news)==4 ? ("<div class='view-all'><a href='".site_url('site/events/38/0/3')."'>".$this->lang->line('view_all')."</a></div>") : ""; ?>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="box">
        <h2 class="title" style="font-size: 1.3rem;"><?= $this->lang->line('latest_videos'); ?></h2>
        <ul class="list-style video">
          <?php foreach($videos as $item){ ?>
            <li class="">
              <a href="<?= site_url('site/video/74/'.$item->gallery_id.'/'.$item->location_id); ?>" title="
               
                ">
                <img src="https://img.youtube.com/vi/<?= $item->url; ?>/hqdefault.jpg" width="90" alt="" class="">
              </a>
              <h5 style="font-size: 14px;">
                <a href="<?= site_url('site/video/74/'.$item->gallery_id.'/'.$item->location_id); ?>" title="<?= $item->gallery_title; ?>"><?= substr($item->gallery_title, 0, 301); ?>...</a>
              </h5>
            </li>
          <?php } ?>
        </ul>
      </div>
    </div> 
  </section>
</div>

<div class="container">
  <div class="box">
  <div class="col-sm-12">
  <section class="">
    <h2 class="title"><?= $this->lang->line('other_institution'); ?> </h2>

    <div class="owl-carousel owl-theme">
      <div class="item">
        <a href="http://www.interior.gov.kh/" target="_blank">
          <img data-u="image" style="height: 156px;" src="<?= site_url('assets/images/1.png'); ?>">
          <div class="top_sl">
            <h5 style="font-size: 14px;">ក្រសួងមហាផ្ទៃ</h5>
          </div>
        </a>
      </div>
      <div class="item">
        <a href="http://www.police.gov.kh/" target="_blank">
          <img data-u="image" style="height: 156px;" src="<?= site_url('assets/images/2.png'); ?>">
          <div class="top_sl">
            <h5 style="font-size: 14px;">ន.ប.ជ.ក</h5>
          </div>
        </a>
      </div>
      <div class="item">
        <a href="http://news.gdi.gov.kh/" target="_blank">
          <img data-u="image" style="height: 156px;" src="<?= site_url('assets/images/3.gif'); ?>">
          <div class="top_sl">
            <h5 style="font-size: 14px;">អគ្គ.អត្តសញ្ញាណកម្ម</h5>
          </div>
        </a>
      </div>
      <div class="item"> 
        <a href="http://www.immigration.interior.gov.kh/" target="_blank">
          <img data-u="image" style="height: 156px;" src="<?= site_url('assets/images/4.gif'); ?>">
          <div class="top_sl">
            <h5 style="font-size: 14px;">អគ្គ.អន្តោប្រវេសន៍</h5>
          </div>
        </a>
      </div>
      <div class="item">
        <a href="http://pac.edu.kh/" target="_blank">
          <img data-u="image" style="height: 156px;" src="<?= site_url('assets/images/5.png'); ?>">
          <div class="top_sl">
            <h5 style="font-size: 14px;">បណ្ឌិត្យសភា ន.ប.ក</h5>
          </div>
        </a>
      </div>
      <div class="item">
        <a href="http://www.trc.gov.kh/km/" target="_blank">
          <img data-u="image" style="height: 156px;" src="<?= site_url('assets/images/6.png'); ?>">
          <div class="top_sl">
            <h5 style="font-size: 14px;">ន.ទ.ក</h5>
          </div>
        </a>
      </div>
    </div>
  </section>
</div>
</div>
</div>

<div class="container">
  <section class="box">
    <h2 class="title"><?= $this->lang->line('event_gallery'); ?></h2>
      <div id="gallery" class="gallery">
        <ul class="row">
          <?php foreach ($event_gallery as $gallery) { ?>
          <li class="col-sm-3">
            <div class="thumbnail">
              <a href="<?= site_url('assets/upload/gallery/'.$gallery->url); ?>"><img src="<?= site_url('assets/upload/gallery/thumb/'.$gallery->url); ?>" title="gallery" alt=""></a>
            </div>
          </li>
          <?php } ?>
        </ul>
      </div>
      <?php if(count($event_gallery)==8) { echo "<div class='view-all'><a href='".site_url('gallery/all')."'>".$this->lang->line('view_all')."</a></div>"; } ?>
  </section>
</div>

<script>
  // applying photobox on a `gallery` element which has lots of thumbnails links.
  // Passing options object as well:
  //-----------------------------------------------
  $(document).ready(function() {
    $('#gallery').photobox('a');
    // or with a fancier selector and some settings, and a callback:
    $('#gallery').photobox('a:first', { thumbs:false, time:0 }, imageLoaded);
    function imageLoaded(){
      console.log('image has been loaded...');
    }
    $('.demo2').slimScroll({
      height: '380px',
      wheelstep:1,
      railVisible:true
    });

    // $(".owl-carousel").owlCarousel({
    //   loop: true,
    //   margin: 30,
    //   nav: false,
    //   items: 6
    // });

    $(".owl-carousel").owlCarousel({
    loop:true,
    margin:10,      
    autoplay: true,
    dots: false,
    responsiveClass:true,
    responsive:{
        0:{
            autoplay: true,
            items:2,
           
        },
        600:{
            items:4
            
        },
        1000:{
             margin:30,  
            items:6,
            loop:false
        }
    }
});


  });
</script>
