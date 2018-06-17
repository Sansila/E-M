<?php
  $tr_search ='<tr class="remove_tag" >
          <td></td>
          <td><input type="text" name="fullname" id="fullname" class="form-control" onkeyup="search();"></td>
          <td><input type="text" name="bname" id="bname" class="form-control" onkeyup="search();"></td>
         
          
          <td"colspan="3"></td>
        </tr>';

  $tr = ""; $num_pos = 1;
  if(count($tdata) >0 ){
    foreach( $tdata as $row_pos ){

      $tr .= '<tr class="no_data" rel="1">
            <td class="pos_1">'.($num_pos++).'</td>
            <td class="pos_2">'.$row_pos['fullname'].'</td>
            <td class="pos_3">'.$row_pos['name'].'</td>
            <td class="pos_4">'.$row_pos['borrow_date'].'</td>
            <td class="pos_5">'.$row_pos['return_date'].'</td>
           <td>
              <div class="btn-group">
                  <button type="button" class="btn btn-default">Action</button>
                  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <span class="caret"></span>
                      <span class="sr-only">Toggle Dropdown</span>
                  </button>
                  <ul class="dropdown-menu">
                    <li ><a title="Contract" rel="'.$row_pos['studentid'].'" class="view_borrow" role="menuitem" tabindex="-1" href="#">View Borrw</a></li>
                      <li class="divider"></li>
                     <li ><a title=" Contract" rel="'.$row_pos['studentid'].'" class="return_borrow" role="menuitem" tabindex="-1" href="#">Return</a></li>
                      <li ><a title=" Contract" rel="'.$row_pos['studentid'].'" onclick="edit_pos(event);" class="editbr" role="menuitem" tabindex="-1" href="#">Update</a></li>
                    
                  </ul>
              </div>
            </td>   
          </tr>';
    }
      
  }else{
    //$tr .="<tr><td colspan='8'>No Position</td></tr>";
    $tr .="<tr class='no_data' rel='0'><td colspan='8' style='text-align:center;'><b>We didn't find anything to show here</b></td></tr>";
  }
?>
<style>
  a,.sort{cursor: pointer;}
  a,.sort,.panel-heading span{cursor: pointer;}
  .panel-heading span{margin-left: 10px;}
  .cur_sort_up{
    background-image: url('<?php echo base_url('assets/images/icons/sort-up.png')?>');
    background-position: left;
    background-repeat: no-repeat;
    padding-left: 15px !important;
  }
  .cur_sort_down{
    background-image: url('<?php echo base_url('assets/images/icons/sort-down.png')?>');
    background-position: left;
    background-repeat: no-repeat;
    padding-left: 15px !important;
  }
</style>
<div class="wrapper">
  <div class="clearfix" id="main_content_outer">
      <div id="main_content">
        <div class="row result_info">
          <div class="col-xs-6">
            <strong class="contr_title"><?php echo $title = "Borrow List";?></strong>
          </div>
          <div class="col-xs-6" style="text-align: right">
            <span class="top_action_button">
            <a>
              <img onclick="
              (event);" src="<?php echo base_url('assets/images/icons/sort.png')?>" />
            </a>
          </span>
            <span class="top_action_button">
            <a href="<?php echo site_url('employee/position/import')?>" >
              <img src="<?php echo base_url('assets/images/icons/import.png')?>" />
            </a>
          </span>
          <span class="top_action_button">  
            <a href="JavaScript:void(0);" id="export" class="export" title="Export">
              <img src="<?php echo base_url('assets/images/icons/export.png')?>" />
            </a>
          </span>
            <span class="top_action_button">
          <a href="JavaScript:void(0);" id="print" class="print" title="Print">
              <img src="<?php echo base_url('assets/images/icons/print.png')?>" />
            </a>
            </span>         
          <span class="top_action_button">
            <a href="<?php echo site_url('library/book_borrow/add')?>" >
              <img src="<?php echo base_url('assets/images/icons/add.png')?>" />
            </a>
          </span>           
          </div> 
        </div>
        <div class="panel panel-default" id="sort_ad" style="display:none">
       
      </div>
        <!--End -->
        <div class="row">
            <div class="col-xs-12">
              <div class="panel panel-default">
                <div class="panel-body">
                  <div class="" id="div_export_print">
                    <table class="table table-bordered table-striped table-hover" border="0" cellspacing="0" cellpadding="0">
                      <thead>
                        <tr>
                          <th class="pos_1">N&deg;</th>
                          <th class="pos_2 sort" onclick="sort(event);" rel="level">Student Name</th>
                          <th class="pos_3 sort" onclick="sort(event);" rel="level">Book Name</th>
                          <th class="pos_4 sort" onclick="sort(event);" rel="grade">Borrow Date</th>
                          <th class="pos_5 sort" onclick="sort(event);" rel="year">Return Date</th>
                          <!-- <th class="pos_8 sort" onclick="sort(event);" rel="createby">Create By</th> -->
                          <!-- <th class="pos_9 sort" onclick="sort(event);" rel="modify">Modify By</th> -->
                          <th colspan="2" class="remove_tag">Action</th>
                        </tr>
                        <input type='hidden' value='ASC' name='sort' id='sort' style='width:80px;'/>
                        <input type='hidden' value='' name='sortquery' id='sortquery' style='width:200px;'/>
                        <?php echo $tr_search;?>
                      </thead>
                      <tbody class="listbody">
                      <?php echo $tr;?>
                      <tr class="remove_tag">
                    <td colspan='12' id='pgt'>
                      <div style='margin-top:20px; width:11%; float:left;'>
                      Display : <select id="sort_num" style='padding:5px; margin-right:0px;'>
                              <?php
                              $num=50;
                              for($i=0;$i<10;$i++){?>
                                <option value="<?php echo $num ;?>" <?php if(isset($_GET['s_num'])){ if($num==$_GET['s_num']) echo 'selected'; }?> ><?php echo $num;?></option>
                                <?php $num+=50;
                              }
                              ?>
                            </select>
                      </div>
                      <div style='text-align:center; verticle-align:center; width:89%; float:right;'>
                        <ul class='pagination' style='text-align:center'>
                          
                          <?php echo $this->pagination->create_links(); ?>
                        </ul>
                      </div>

                    </td>
                  </tr> 
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
        </div>
        <form id="excel-form" action="<?php echo base_url('app/libraries/Z_EXPORT_TO_EXCEL.PHP')?>" method="POST">
             <input type="hidden" name="num_colspan" value="4" id="num_colspan"/>
             <input type="hidden" name="exporttile" value="<?php echo $title ?>"/>
             <input type="hidden" name="pagesecurity" value="PgSecurity"/>
             <textarea id="excel-data" name="data" style="display:none;"></textarea>
        </form>
      </div>
  </div>
</div>
<!--Check Print Export-->
<div class="modal fade" id="check_export_print" data-backdrop=false>
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"><b>Print Option</b></h4>
      </div>
      <div class="modal-body">
        <table width="100%" align="center" class="table table-bordered table-striped table-hover">
          <tr>
            <th align="center">N&deg;</th>
            <th align="center">Student Name</th>
            <th align="center">Book Name</th>
            <th align="center">Borrow Date</th>
            <th align="center">Return Date</th>
            
              <th align="center">active</th>
          </tr>
          <tr>
          <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            
          </tr>
          <tr>
            <td><input type="checkbox" class="chk" rel="1" checked="checked"></td>
            <td><input type="checkbox" class="chk" rel="2" checked="checked"></td>
            <td><input type="checkbox" class="chk" rel="3" checked="checked"></td>
            <td><input type="checkbox" class="chk" rel="4" checked="checked"></td>
            <td><input type="checkbox" class="chk" rel="5" checked="checked"></td>
             

          </tr>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" id="clk_print" data-dismiss="modal">Print</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div>
<!--Model Export Print-->
<div class="modal fade" id="myModal_export_print" data-backdrop=false>
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"><b>Warning</b></h4>
      </div>
      <div class="modal-body">
        <b id="message_body"></b>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal">OK</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div>
<!--Modal Delete-->
<div class="modal fade" id="myModal_del" data-backdrop=false>
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"><b>Warning</b></h4>
      </div>
      <div class="modal-body">
        <b>Are you sure to delet this record !</b>
        <input type="hidden" name="get_rel" id="get_rel">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" onclick="delete_pos(event);">Yes</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div>


<!-- dialog view invoice -->
<div class="modal fade" id="view_invoice" data-backdrop=false>
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"><b>View Borrow </b></h4>
      </div>
      <div class="modal-body" id="inv_print">
        <style type="text/css"> 
            .table1{ padding: 5px;}
            .table1 thead tr th{
                border: solid 1px; border-color: #e4e4e4;
                text-align: center;
                padding: 10px;
            }
            .table1 tbody tr td{
                border: solid 1px; border-color: #e4e4e4;
                text-align: center;
                padding: 15px;
            }
            #headertitle tbody tr td{ padding: 5px 0px 5px 0px;}
             #headertitle thead tr th{ padding: 10px; text-align: center; font-weight: bold; font-size: 18px;}
        </style>
      
        <!-- header title -->
        <table width="100%"  id="headertitle"><thead><tr><th>LIBRARY RECEIPT</th></tr></thead></table>
        <table width="100%" id="headertitle">
           
        </table>

        <table width="100%" align="center" class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th align="center" rowspan="2">N&deg;</th>
                    <th align="center" rowspan="2">Student Name</th>
                    <th align="center" rowspan="2">Book Name</th>
                    <th align="center" rowspan="2">Borrow Date</th>  
                    <th align="center" rowspan="2">Return Date</th>            
                </tr>
            </thead>
            <thead>
                <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
            </thead>
            <tbody class="list_borrow_detail" >
                
            </tbody>
       
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" id="print_inv" data-dismiss="modal">Print</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog --> 
</div>


<!-- dialog view invoice -->
<div class="modal fade" id="update" data-backdrop=false>
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"><b>Update Borrow </b></h4>
      </div>
      <div class="modal-body" id="inv_print">
        <style type="text/css"> 
            .table1{ padding: 5px;}
            .table1 thead tr th{
                border: solid 1px; border-color: #e4e4e4;
                text-align: center;
                padding: 10px;
            }
            .table1 tbody tr td{
                border: solid 1px; border-color: #e4e4e4;
                text-align: center;
                padding: 15px;
            }
            #headertitle tbody tr td{ padding: 5px 0px 5px 0px;}
             #headertitle thead tr th{ padding: 10px; text-align: center; font-weight: bold; font-size: 18px;}
        </style>
      
        <!-- header title -->
        <table width="100%"  id="headertitle"><thead><tr><th>LIBRARY RECEIPT</th></tr></thead></table>
        <table width="100%" id="headertitle">
           
        </table>

        <table width="100%" align="center" class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th align="center" rowspan="2">N&deg;</th>
                    <th align="center" rowspan="2">Student Name</th>
                    <th align="center" rowspan="2">Book Name</th>
                    <th align="center" rowspan="2">Borrow Date</th>  
                    <th align="center" rowspan="2">Return Date</th>
                    <th align="center" rowspan="2">Update</th>
                    <th align="center" rowspan="2">Delete</th>            
                </tr>
            </thead>
            <thead>
                <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                   <td></td>
                  <td></td>
                </tr>
            </thead>
            <tbody class="list_borrow_detail2" >
                
            </tbody>
       
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" id="print_inv" data-dismiss="modal">Print</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog --> 
</div>

<!-- dialog view invoice -->
<div class="modal fade" id="return_borrow" data-backdrop=false>
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"><b>View Borrow </b></h4>
      </div>
      <div class="modal-body" id="inv_print">
        <style type="text/css"> 
            .table1{ padding: 5px;}
            .table1 thead tr th{
                border: solid 1px; border-color: #e4e4e4;
                text-align: center;
                padding: 10px;
            }
            .table1 tbody tr td{
                border: solid 1px; border-color: #e4e4e4;
                text-align: center;
                padding: 15px;
            }
            #headertitle tbody tr td{ padding: 5px 0px 5px 0px;}
             #headertitle thead tr th{ padding: 10px; text-align: center; font-weight: bold; font-size: 18px;}
        </style>
      <table width="100%" id="headertitle">
            <tbody>
                <tr><td align="right">Receipt N&deg; :<span id="recipt_no">RL-09343</span></td> </tr>
                 <tr><td align="right" >Date:<span id="recipt_date">RL-09343</span></td> </tr>
            </tbody>
        </table>

        <!-- header title -->
        <table width="100%"  id="headertitle"><thead><tr><th>LIBRARY RECEIPT</th></tr></thead></table>
        <table width="100%" id="headertitle">
            <tbody>
                <tr>
                    <td>Name: <span id="std_name">LB-09343</span></td>
                    <td align="right">Class:<span id="recipt_class">LB-09343</span></td>
                </tr>
               <!--  <tr>
                    <td> Sex: <span id="std_sex">PR-09343</span></td>
                    <td align="right"></td>
                </tr> -->
            </tbody>
        </table>

        <table width="100%" align="center" class="table1">
            <thead>
                <tr>
                    <th align="center" rowspan="2">N&deg;</th>
                    <th align="center" rowspan="2">Student Name</th>
                    <th align="center" rowspan="2">Book Name</th>
                    <th align="center" rowspan="2">Borrow Date</th>  
                    <th align="center" rowspan="2">Return Date</th>
                    <th align="center" rowspan="2"></th>
                    <th align="center" rowspan="2">Return</th>             
                </tr>

            </thead>
            <thead></thead>
            <tbody class="list_borrow_detail1">
         
            </tbody>
       
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" id="btnreturn" data-dismiss="modal">Save</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog --> 
</div>
<!------>
<script type="text/javascript">
    // function view_invoice(event){
      
    //     $("#view_invoice").modal('show');
    //     var 
    //     getborrow();
    // }
   $(document).on('click','.return_borrow',function(){
        $("#return_borrow").modal('show');
        $('.is_return').val(0);
        $('.list_borrow_detail1').html("");
        var id = $(this).attr("rel");
        getrow(id);
    });
 $(function(){
            $("#print_inv").on("click", function(){
                var export_data = $("#inv_print").html();
                var title = "";
                gsPrint(title,export_data);
            });
  });

  $(function(){
    $("#print").on("click", function(){
      var no_data = $(".no_data").attr('rel');
      $(".chk").attr('checked', true);
      if(no_data ==1){
        $("#check_export_print").modal('show');
      }else{
        $("#message_body").text("We didn't find anything to Print.");
        $("#myModal_export_print").modal('show');

      }
    });

    $("#export").on("click", function(){
      var no_data = $(".no_data").attr('rel');
      var data = $("#div_export_print").html().replace(/<img[^>]*>/gi,"");
      var export_data = $("<center>"+data+"</center>").clone().find(".remove_tag").remove().end().html();
      if(no_data ==1){
        $('#excel-data').text(export_data);
        $('#excel-form').submit();
      }else{
        $("#message_body").text("We didn't find anything to Export.");
        $("#myModal_export_print").modal('show');
      }

    });

    $("#sort_num").on("change", function(){
      search();
    });

    $(".chk").on("click", function(){
      var get_chk = $(this).attr('rel');
      if($(this).is(":checked")){
        $(".pos_"+get_chk).removeClass('remove_tag');
      }else{
        $(".pos_"+get_chk).addClass('remove_tag');
      }
    });

    $("#clk_print").on("click", function(){
      var data = $("#div_export_print").html();
      gsPrint('Position List',data,'remove_tag');
    });

    //======================update=================//
      $(document).on('click','.editbr',function(){
        $('.list_borrow_detail2').html("");
        $("#update").modal('show');
        var id = $(this).attr("rel");
       // alert(id);
        getrowup(id);
    });

    //===============================view borrow========================//

     $(document).on('click','.view_borrow',function(){
        $('.list_borrow_detail').html("");
        $("#view_invoice").modal('show');
        var id = $(this).attr("rel");

        getborrow(id);
    });

  //===============================Return borrow========================//

    // $('.return_borrow').on("click",function(){
    //     $("#return_borrow").modal('show');
    //     $('.is_return').val(0);
    //     $('.list_borrow_detail1').html("");
    //     var id = $(this).attr("rel");
    //     getrow(id);
    // });

     $("#btnreturn").on("click", function(){ 
        var ch = $('.is_return').val();
        if(ch == 1)
        {
          var id = $('.is_return').attr('data');
          $.ajax({
            type: "POST",
            url:"<?php echo base_url(); ?>index.php/library/book_borrow/update",    
            data: {
              'id':id
            },
            success: function(data){
                var rid = $('.return_borrow').attr("rel");
                getrow(rid);
            }
          });
        }
        
        
      });


  });
  //---------End Main Function 
function getr(){

}
   
  function delete_pos(event){
    var r = confirm("Are you sure to delete this record !");
    if(r == true){
      var bid = $(event.target).attr('rel');
      location.href="<?php echo site_url('library/book_borrow/delete');?>/"+bid;
    }
  }
  function del(event){
    var r = confirm("Are you sure to delete this record !");
    if(r == true){
      var bid = $(event.target).attr('rel');
      //alert(bid);
      location.href="<?php echo site_url('library/book_borrow/delete');?>/"+bid;
    }
  }
  function view_position(event){
    var posid = $(event.target).attr('rel');
    location.href="<?php echo site_url('school/school_term/view_pos');?>/"+posid;
  }

  function edit_pos(event){
    var sid = $(event.target).attr('rel');
   // location.href="<?php echo site_url('library/book_borrow/edit');?>/"+sid;


  }
    function ed(event){
    var did = $(event.target).attr('rel');
   location.href="<?php echo site_url('library/book_borrow/edit');?>/"+did;
   // var id=$('#ed').attr('rel');
   //alert(did);
  }
  function getreturn(event){
    var sid = $(event.target).attr('rel');
    location.href="<?php echo site_url('library/book_borrow/Return');?>/"+sid;
  } 
  function showsort(event){ 
    $('#sort_ad').fadeToggle('3000');
  }

  function sortadvance(event){
    var value = $(event.target).text();
    
    var sql='';
    if($('.cur').attr('rel')==undefined){
      alert('please select field');
    }else {
      $(event.target).removeClass('label-default');
      $('.panel div span').removeClass('label-danger');
      $('.panel div span').addClass('label-default');
      $(event.target).addClass('label-danger');
      var field = $('.cur').attr('rel');
      
      if(value=='0-9')
        sql="ORDER BY Case When "+field+" Like '[0-9]%' Then 1 Else 0 End Asc, "+field;
      else
        sql="AND "+field+" LIKE '"+value+"%' ";
      search(sql);  
    }
  }

  function sort(event){
    var sort=$(event.target).attr('rel');
    var sorttype=$('#sort').val();
    if(sorttype=='ASC'){
      $('#sort').val('DESC');
      $('.sort').removeClass('cur_sort_down cur');
      $(event.target).addClass('cur_sort_up cur');
    }
    else{
      $('#sort').val('ASC');
      $('.sort').removeClass('cur_sort_up cur');
      $(event.target).addClass('cur_sort_down cur');
    }
    $('#sortquery').val('ORDER BY '+sort+' '+sorttype);
    search();
  }

  function search(sort){
    if(sort==''){
      $('.panel div span').removeClass('label-danger');
      $('.panel div span').addClass('label-default');
    }
    var sort_num  = $("#sort_num").val();
    var fullname  = $("#fullname").val();
    var bname      = $("#bname").val();
    var sortpos   = $('#sortquery').val();
    
    //alert(sort_num+''+sortpos);

    if(sortpos == '')
      sortpos='ORDER BY borrow_id DESC';
    
    $.ajax({
      type: "POST",
      url:"<?php echo base_url(); ?>index.php/library/book_borrow/search_name",    
      data: {
        'sort_ad':sort,
        'sort':sortpos,
        'sort_num':sort_num,
        'fullname':fullname,
        'bname':bname
      },
      success: function(data){
             $('.listbody').html(data);
      }
    });
    
  }

  function getborrow(id){
        var url="<?php echo site_url('library/book_borrow/getborrow')?>";
        $.ajax({
                url:url,
                type: 'POST',
                datatype:"json",
                async:false,
                data: {'id': id},
          
                success:function(data) {
            
                  $.each(data, function(i) {
                      //alert(data[i].fullname);

                      $('.list_borrow_detail').append("<tr>"+
                                                            "<td>"+data[i].r+"</td>"+
                                                            "<td>"+data[i].fullname+"</td>"+
                                                            "<td>"+data[i].name+"</td>"+
                                                            "<td>"+data[i].borrow_date+"</td>"+
                                                            "<td>"+data[i].return_date+"</td>"+
                                                      "</tr>");
                    
                  });
                }

        });
   }

   function getrow(id){
        var url="<?php echo site_url('library/book_borrow/getbor')?>";
        $.ajax({
                url:url,
                type: 'POST',
                datatype:"json",
                async:false,
                data: {'id': id},
              
                success:function(data) {
            
                  $.each(data, function(i) {
                      //alert(data[i].fullname);
                      $('.is_return').val(0);
                      $('.list_borrow_detail1').append("<tr>"+
                                                           "<input type='hidden' name='school_feeid' class='returnid' id='school_feeid'>"+
                                                            "<td>"+data[i].r+"</td>"+
                                                            "<td>"+data[i].fullname+"</td>"+
                                                            "<td>"+data[i].name+"</td>"+
                                                            "<td>"+data[i].borrow_date+"</td>"+
                                                            "<td>"+data[i].return_date+"</td>"+
                                                            "<td class='hello'>"+"<td><input type='checkbox' data='"+ data[i].borrow_id +"' name='is_return[]' id='is_return' class='is_return' value='"+ data[i].is_return+"'/></td>"+"</td>"+
                                                      "</tr>");
                    
                  });

                    $(".is_return").change(function() {
                        $(this).val(0);
                        if(this.checked) {
                            $(this).val(1);

                        }
                    });
                }

        });
   }

     function getrowup(id){
        var url="<?php echo site_url('library/book_borrow/getrowup')?>";
        $.ajax({
                url:url,
                type: 'POST',
                datatype:"json",
                async:false,
                data: {'id': id},
              
                success:function(data) {
            
                  $.each(data, function(i) {
                      //alert(data[i].borrow_id);

                      $('.is_return').val(0);
                      $('.list_borrow_detail2').append("<tr>"+
                                                           "<input type='hidden' name='school_feeid' class='returnid' id='school_feeid'>"+
                                                            "<td>"+data[i].r+"</td>"+
                                                            "<td>"+data[i].fullname+"</td>"+
                                                            "<td>"+data[i].name+"</td>"+
                                                            "<td>"+data[i].borrow_date+"</td>"+
                                                            "<td>"+data[i].return_date+"</td>"+
                                                            "<td>"+"<a rel='"+data[i].borrow_id+"' data='"+data[i].borrow_id+"' onclick='ed(event);' class='btn btn-warning ed' id='ed' href='#'>Update</a>"+"</td>"+
                                                            "<td>"+"<a rel='"+data[i].borrow_id+"' data='"+data[i].borrow_id+"' onclick='del(event);' class='btn btn-danger ed' id='ed' href='#'>Delete</a>"+"</td>"+
                                                      "</tr>");
                    
                  });
                }
        });
   }


</script>