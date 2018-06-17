<div class="wrapper">
    <div class="clearfix" id="main_content_outer">
    <div id="main_content">
      
       <div class="result_info">
        <div class="col-sm-6">
            <strong>Setup School Level</strong>  
        </div>
        <div class="col-sm-6" style="text-align: right">
            <!-- block messate -->
            <p id='exist'></p>
          <!-- End block message -->   
        </div> 
      </div> 
      <?php
          $m='';
          $p='';
          if(isset($_GET['m'])){
              $m=$_GET['m'];
          }
          if(isset($_GET['p'])){
              $p=$_GET['p'];
        }
      ?>
      <form method="post"  enctype="multipart/form-data" accept-charset="utf-8" action="<?php echo site_url("school/schoolinfor/updates?m=$m&p=$p"); ?>" class="tdrow" id="fschyear">
            <input type="text" style="display:none;" name="txtschoolid" id='txtschoolid' value="<?php echo $query->schoolid;?>"/>
        <div class="row">
           <div class="col-sm-6">           
                <div class="panel-body">
                    <div class="form_sep">
                    <label class="req" for="cboschool">Name<span style="color:red">*</span></label>
                    <input type="text" name="txtname" id="txtname" onkeypress='' class="form-control" required data-parsley-required-message="Enter name" value="<?php echo $query->name;?>" />
                  </div> 
                  <div class="form_sep">
                    <label class="req" for="cboschool">Contact Person</label>
                    <input type="text" name="txtcontactperson" id="txtcontactperson" class="form-control" value="<?php echo $query->contact_person;?>" />
                  </div>
                  <div class="form_sep">
                    <label class="req" for="cboschool">Contact Tel</label>
                    <input type="text" name="txtcontacttel" id="txtcontacttel" class="form-control" value="<?php echo $query->contact_tel;?>" />
                  </div> 
                  <div class="form_sep">
                    <label class="req" for="cboschool">Email</label>
                    <input type="email" name="txtemail" id="txtemail" class="form-control" data-parsley-type="email" value="<?php echo $query->email;?>" />
                  </div> 
                  <div class="form_sep">
                    <label class="req" for="cboschool">Website</label>
                    <input type="text" name="txtwebsite" id="txtwebsite" class="form-control" value="<?php echo $query->website;?>" />
                  </div>
                  <div class="form_sep">
                    <label class="req" for="cboschool">Slogan</label>
                    <textarea name="txtslogan" id="txtslogan" style="width:430px;height:50px;border-radius:4px; resize:none;" class="form-control" ><?php echo $query->slogan?></textarea>
                  </div>
                  <div class="form_sep">
                  <label class="req" for="classid">Open date</label>
                    <div class='input-group date' id='datetimepicker'>
                       <input type='text' id="txtdate" class="form-control" name="txtdate" value="<?php echo date_format(date_create($query->open_since), 'd-m-Y')?>"/>
                       <span class="input-group-addon"><span class="glyphicon glyphicon-calendar">
                    </div>
                  </div>
                  <div class="form_sep">
                    <label class="req" for="cboschool">Goal</label>
                    <textarea name="txtgoal" id="txtgoal" style="width:430px;height:50px;border-radius:4px; resize:none;" class="form-control" ><?php echo $query->gaol?></textarea>
                  </div> 
                  <div class="form_sep">
                    <label class="req" for="cboschool">Active</label><br/>
                    <input type="checkbox" name="chbactive" id="chbactive" value="1" <?php if($query->is_active==1) echo "checked"; ?> />
                  </div>           
                </div>
            </div>
            <div class="col-sm-6">                          
              <div class="panel-body"> 
              <!-- start picture logo -->
              <div align='center'>
                    <img src="<?php if(@ file_get_contents(site_url('../assets/upload/school/'.$query->schoolid.'_thumb.png'))) echo site_url('../assets/upload/school/'.$query->schoolid.'_thumb.png'); else echo site_url('../assets/upload/No_person.jpg') ?>" id="uploadPreview" style='width:120px; height:150px; margin-bottom:15px'>
                    <input id="uploadImage" type="file" accept="image/gif, image/jpeg, image/jpg, image/png" name="userfile" onchange="PreviewImage();" style="visibility:hidden; display:none;" />
              </div>
              <div align='center'>
                    <input type='button' class="btn btn-success" onclick="$('#uploadImage').click();" value='Browse'/>
              </div>
              <!-- start picture logo -->
              <div class="form_sep">
                    <label class="req" for="cboschool">Vision</label>
                    <textarea name="txtvision" id="txtvision" style="width:430px;height:50px;border-radius:4px; resize:none;" class="form-control" ><?php echo $query->vision?></textarea>
              </div> 
              <div class="form_sep">
                    <label class="req" for="cboschool">Mission</label>
                    <textarea name="txtmission" id="txtmission" style="width:430px;height:50px;border-radius:4px; resize:none;" class="form-control" ><?php echo $query->mission?></textarea>
              </div> 
              <div class="form_sep">
                    <label class="req" for="cboschool">Address</label>
                    <textarea name="txtaddress" id="txtaddress" style="height:115px;border-radius:4px; resize:none;" class="form-control"><?php echo $query->address?></textarea>                 
              </div>
              </div> 
            </div> 
        </div>
        <div class="row">
          <div class="col-sm-12">
            <div class="panel-body">
                <div class="form_sep">
                  <?php if($this->green->gAction("C")){ ?>
                  <input type="submit" name="btnsaves" id='btnsaves' value="Save" class="btn btn-primary" />
                  <?php } ?>
                  <input type="button" name="btncancel" id='btncancel' value="Cancel" class="btn btn-warning" />
                </div>                               
            </div>
          </div>
        </div>
       </form>         
    </div> 
 </div>  
</div>
<style>
   .tdrow tr,.tdrow th,.tdrow td{
    border: none !important; 
  }
</style>
<script type="text/javascript">

        //-------- Upload image logo -------------- 
        function PreviewImage() {
            var oFReader = new FileReader();
            oFReader.readAsDataURL(document.getElementById("uploadImage").files[0]);

            oFReader.onload = function (oFREvent) {
                document.getElementById("uploadPreview").src = oFREvent.target.result;
                document.getElementById("uploadPreview").style.backgroundImage = "none";
            };
        };
        //-------- End Upload image logo -------------- 

     $(function() {
      //----- Start Date time picker -----
        $('#txtdate').datepicker({format: 'dd-mm-yyyy'});
        //----- End ate time picker -----

        //--------- parseley validation -----
        $('#fschyear').parsley();       
                
        //  $("#btnsaves").click(function() {         
        //     $('#fschyear').submit();           
        // });
        
        // $('#fschyear').submit(function(e) { 
        //     e.preventDefault();         
        //     if ($(this).parsley().isValid() ) {
        //         updateschoolinfor();   
        //     }
        // });     
        //---------- end of validation ----


         $("#btncancel").click(function(){
             var r = confirm("Do you want to cancel?");
                 if (r == true) { 
                     location.href=("<?php echo site_url('school/schoolinfor/?m='.$m.'&p='.$p.'');?>"); 
               } else {
                    
            }
        });

         //--- This functioni is not used any more cos we use submit form to do ----
        function updateschoolinfor(){
            var schoolid=$('#txtschoolid').val();
            var name=$('#txtname').val()
            var person=$('#txtcontactperson').val();
            var tel=$('#txtcontacttel').val();
            var email=$('#txtemail').val();
            var website=$('#txtwebsite').val();
            var slogan=$('#txtslogan').val();
            var is_active=0;
            var vision=$('#txtvision').val();
            var mission=$('#txtmission').val();
            var goal=$('#txtgoal').val();
            var dates=$('#txtdate').val();
            var address=$('#txtaddress').val();
            //var desc=$('#txtdesc').val();

            if ($('#chbactive').is(":checked")) { is_active=1; }
            
            if(name==''){
                alert('Please input school name...');
            }else{

                    $.ajax({
                            //school/schoollevel is call controller
                            //url:"<?php echo base_url(); ?>index.php/school/schoollevel/updates" = url:"<?php echo site_url('school/schoollevel/updates'); ?>"
                            url:"<?php echo site_url('school/schoolinfor/updates'); ?>",    
                            data: {
                                    'schoolid':schoolid, 
                                    'name':name,
                                    'person':person,
                                    'tel':tel,
                                    'email':email,
                                    'website':website,
                                    'slogan':slogan,
                                    'is_active':is_active,
                                    'vision':vision,
                                    'mission':mission,
                                    'goal':goal,
                                    'dates':dates,
                                    'address':address,
                                    //'desc':desc,
                            },
                            type: "POST",
                            success: function(data){
                            
                            if(data=='true'){
                                 location.href=("<?php echo site_url('school/schoolinfor/?edit');?>");
                            }else{
                                 $("#exist").html("<p style='color:red;'>Your data has already exist...!</p>");
                            }
                        }
                    });
            }
        }
        
    });
</script>