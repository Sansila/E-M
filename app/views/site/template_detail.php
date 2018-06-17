<section id="service" class="service2 sections lightbg">
            <div class="container" >
                <div class="row" >
                    <div class="main_service2" style="text-align: center;">
                        <h2><?php 
                        if (isset($row->article_title)) 
                        echo $row->article_title 
                        ?> </h2>
                           
                        </div>

                        <div class="" > 
                        	<?php foreach($result as $products) { ?>
                            <div class="col-md-6 col-sm-6 col-xs-12" >
                                <div class="ibox" >
                                    <div class="" >
                                           <img src="<?= site_url('assets/upload/article/'.$products->article_id.'_'.$products->url); ?>" alt="" style="width: 100%;">
                                        
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
                           
                            
          
                        </div>
                    </div>
                </div>
            </div>
        </section>


<!-- <div class="container">
    <div class="panel panel-default">
      <div class="panel-heading">Image Upluad</div>
      <div class="panel-body">


        <div class="row">
            <div class="col-md-4 text-center">
                <div id="upload-demo" style="width:350px"></div>
            </div>
            <div class="col-md-4" style="padding-top:30px;">
                <strong>Select Image:</strong>
                <br/>
                <input type="file" id="upload">
                <br/>
                <button class="btn btn-success upload-result">Upload Image</button>
            </div>
            <div class="col-md-4" style="">
                <div id="upload-demo-i" style="background:#e1e1e1;width:300px;padding:30px;height:300px;margin-top:30px"></div>
            </div>
        </div>


      </div>
    </div>
</div>


<script type="text/javascript">
$uploadCrop = $('#upload-demo').croppie({
    enableExif: true,
    viewport: {
        width: 200,
        height: 200,
        type: 'circle'
    },
    boundary: {
        width: 300,
        height: 300
    }
});


$('#upload').on('change', function () { 
    var reader = new FileReader();
    reader.onload = function (e) {
        $uploadCrop.croppie('bind', {
            url: e.target.result
        }).then(function(){
            console.log('jQuery bind complete');
        });
        
    }
    reader.readAsDataURL(this.files[0]);
});


$('.upload-result').on('click', function (ev) {
    $uploadCrop.croppie('result', {
        type: 'canvas',
        size: 'viewport'
    }).then(function (resp) {


        $.ajax({
            url: "<?php site_url('/ajaxpro.php')?>",
            type: "POST",
            data: {"image":resp},
            success: function (data) {
                html = '<img src="' + resp + '" />';
                $("#upload-demo-i").html(html);
            }
        });
    });
});


</script> -->


