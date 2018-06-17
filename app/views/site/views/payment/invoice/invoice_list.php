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
    div.datepicker {
        z-index: 9999;
    }
    .modal{
        z-index: 9998;
    }
    .paid{
        background: green;
        padding: 3px;
        border-radius: 5px;
        color: white;
        font-size: 9px;
        border:1px solid black;
        font-weight: bold;
    }
    .unpaid{
        background: red;
        padding: 3px;
        border-radius: 5px;
        color: white;
        border:1px solid black;
        font-weight: bold;
        font-size: 9px;

    }
    .partial{
        background: yellow;
        padding: 3px;
        border-radius: 5px;
        color: black;
        font-weight: bold;
        border:1px solid black;
        font-size: 9px;

    }
    .parsley-errors-list{display: none}
</style>
<div class="wrapper">
    <div class="clearfix" id="main_content_outer">
        <div id="main_content">
            <div class="row result_info">
            <div class="col-xs-6">
                <strong class="contr_title"><?php echo $title = "Invoice List";?></strong>
            </div>
            <div class="col-xs-6" style="text-align: right">
                <span class="top_action_button">
                    <a>
                        <img onclick="showsort(event);" src="<?php echo base_url('assets/images/icons/sort.png')?>" />
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
                    <a href="<?php echo site_url('payment/invoice/add')?>" >
                        <img src="<?php echo base_url('assets/images/icons/add.png')?>" />
                    </a>
                </span>             
            </div> 
          </div>
         
          <div class="row">
                <div class="col-xs-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="" id="div_export_print">
                                <table class="table table-bordered table-striped table-hover">
                                    <thead>
                                        <tr>
                                        <?php 
                                            foreach($thead as $th=>$val){
                                                if($th=='Action')
                                                    echo "<th class='remove_tag'>".$th."</th>";
                                                else
                                                   // echo $th."<br>";
                                                    echo "<th class='sort $val no_wrap' onclick='sort(event);' rel='$val'>".$th."</th>";                                
                                            }
                                        ?>
                                        </tr>
                                        <tr class='remove_tag'>
                                            <th></th>
                                            <th>
                                                <input type='text' onkeyup="getdata(1);" class='form-control input-sm' id='name'/> 
                                            </th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody class='list'>

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
        <table width="100%" align="center" class="table">
            <tr>
                <th align="center">N&deg;</th>
                <th align="center">Service Name</th>
                <th align="center">Cost</th>
                <th align="center">Price</th>
                <th align="center">Use_Quantity</th>                
            </tr>
            <tr>
                <td><input type="checkbox" class="chk" rel="1" checked="checked"></td>
                <td><input type="checkbox" class="chk" rel="2" checked="checked"></td>
                <td><input type="checkbox" class="chk" rel="3" checked="checked"></td>
                <td><input type="checkbox" class="chk" rel="4" checked="checked"></td>
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

<div class="modal fade" id="modalservice" data-backdrop=false>
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"><b>Select Service</b></h4>
      </div>
      <form method="post" action="<?php echo site_url('payment/invoice/saveinvoicedetail?m='.$m.'&p='.$p) ?>">
          <div class="modal-body">
            <table width="100%" align="center" class="table">
                <input type="hidden" name="invoice_id" id="invoice_id" />
                <thead>
                    <tr>
                        <th align="center"></th>
                        <th align="center">Service Name</th>
                        <th align="center">Quantity</th>
                        <th align="center" colspan="2">Start Date</th>
                        <th align="center">Payment Type</th>
                        <th align="center">Price</th>
                        <th align="center">discount (%)</th>                
                        <th align="center">discount (USD)</th>                
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td colspan="6"><label class="control-label">School Fee</label></td>
                    </tr>
                </tbody>
                <tbody class="list_fee">
                   
                </tbody>
                <tbody>
                    <tr>
                        <td colspan="6"><label class="control-label">Other Service</label></td>
                    </tr>
                </tbody>
                <tbody class="list_service">
                   
                   
                </tbody>
                   
            </table>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-success">Add</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
          </div>
      </form>
          
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog --> 
</div>




<div class="modal fade" id="modalpay" data-backdrop=false>
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title"><b>Input your payment</b></h4>
        </div>
        <form method="post" action="<?php echo site_url('payment/invoice/pay?m='.$m.'&p='.$p) ?>">
            <div class="modal-body">
                <input type="hidden" name="invoice_id" id="payinvoice_id" />
                <div class="form_sep">
                    <label>Total Amount</label>
                    <input type="text" readonly name="amount" value="" id="payamount" class="form-control parsley-validated" data-required="true" required data-parsley-required-message="Enter student Name or StudentID">
                  
                </div>
                <div class="form_sep">
                    <label>Due Amount</label>
                    <input type="text" readonly name="due_amount" value="" id="due_amount" class="form-control parsley-validated" data-required="true" required data-parsley-required-message="Enter student Name or StudentID">
                  
                </div>
                 <div class="form_sep">
                    <label>Pay</label>
                    <input type="text" name="pay" value="" onkeypress="return isNumberKey(event);" onblur="calculatepay(event);" id="pay" class="form-control parsley-validated" data-required="true" required data-parsley-required-message="Enter student Name or StudentID">
                  
                </div>
                <div class="form_sep">
                    <label>Description</label>
                    <textarea class="form-control" name="desc"></textarea>
                </div>
            </div>
             <div class="modal-footer">
                <button type="submit" class="btn btn-success">Pay</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            </div>
        </form>
          
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog --> 
</div>



<!-- dialog view invoice -->
<div class="modal fade" id="view_invoice" data-backdrop=false>
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"><b>View Invoice</b></h4>
      </div>
      <div class="modal-body" id="inv_print">
        <div id="print_content">
            <style type="text/css"> 
                .table1{ padding: 5px;}
                .table1 thead tr th{
                    border: solid 1px; border-color: #e4e4e4;
                    text-align: center;
                    padding: 5px !important;
                    font-size: 11px !important;
                    background: #666666 !important;
                    color: white !important;


                }
                #print_content{
                    height: 490px !important;
                }
                .table1 tbody tr td{
                    border: solid 1px; border-color: #e4e4e4;
                    text-align: center;
                    padding: 5px;
                    font-size: 11px !important;
                }
                td label{
                    font-weight: bold !important;
                }
                .makeup{
                    background: #CCCCCC !important;
                }
                #headertitle tbody tr td{ padding: 5px 0px 5px 0px;}
                 #headertitle thead tr th{ padding: 10px; text-align: center; font-weight: bold; font-size: 18px;}
            </style>
            <table width="100%" id="headertitle">
                <tbody>
                    <tr>
                      <td rowspan="2" align="left"><img style="width: 300px;" src="<?php echo site_url('../assets/images/logo/logo.png') ?>"></td> 
                      <td align="right">Receipt N&deg; :<span id="recipt_no">PR-09343</span></td> 
                    </tr>
                    <tr>
                      <td align="right" >Date:<span id="recipt_date">PR-09343</span></td> 
                    </tr>
                </tbody>
            </table>

            <!-- header title -->
            <table width="100%"  id="headertitle">
                <thead>
                    <tr>
                        <th>OFFICIAL RECEIPT</th>
                    </tr>
                    <tr>
                        <td style="text-align: center !important;">*************</td>
                    </tr>
                </thead>
            </table>
            <table width="100%" id="headertitle">
                <tbody>
                    <tr>
                        <td>Student Name: <label id="std_name" style="text-transform: uppercase;">PR-09343</label></td>
                        <td align="right">Class:<label id="recipt_class">PR-09343</label></td>
                    </tr>
                    <tr>
                        <td>Student ID: <label id="std_id">PR-09343</label></td>
                        <td align="right"></td>
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
                        <th align="center" rowspan="2">Description</th>
                        <th align="center" rowspan="2">Term</th>
                        <th align="center" rowspan="2">Issue Date</th>
                        <th align="center" colspan="2">Class Duration</th> 
                        <th align="center" rowspan="2">QTY</th> 
                        <th align="center" rowspan="2">Full<br> Amount</th>
                        <!-- <th align="center" rowspan="2">Dis<br>(%)</th>                 -->
                        <th align="center"  colspan="2">Discount</th>                
                        <th align="center" rowspan="2">Net<br>Amount</th>                
                    </tr>
                     <tr>
                        <th align="center">Stard Date</th>  
                        <th align="center">End Date</th>     
                        <th align="center" >(%)</th>                
                        <th align="center">(USD)</th>          
                    </tr>

                </thead>
                <tbody class="list_invoice_detail">
                   
                </tbody>
                <tbody>
                    <tr>
                        <td colspan="7" style="text-align: center;">TOTAL</td>
                        <td style="text-align: right;" >$ <label id="inv_amount"></label></td>
                        <td style="text-align: center;"></td>
                        <td style="text-align: center;"></td>
                        <td style="text-align: right;" >$ <label id="inv_total_amount"></label></td>
                    </tr>
                    
                </tbody>
                
               
            </table>
            <table style="margin-top: 40px; width: 100%">
                  <tr>
                      <td style="text-align: center !important;">__________________________</td>
                      <td style="text-align: center !important;" align="right">__________________________</td>
                  </tr>
                   <tr>
                      <td style="text-align: center !important;"><h5>Cashier's Signature</h5></td>
                      <td style="text-align: center !important;" align="right"><h5>Receiver's Signature</h5></td>
                  </tr>
            </table>
        </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" id="print_inv" data-dismiss="modal">Print</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog --> 
</div>
<!-- finish view invoice modal dilaig -->

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

<!---->
<script type="text/javascript">
    function isNumberKey(evt){
        var e = window.event || evt; // for trans-browser compatibility 
        var charCode = e.which || e.keyCode; 
        if ((charCode > 45 && charCode < 58) || charCode == 8){ 
            return true; 
        } 
        return false;  
    }
    $(function(){
        $('form').parsley();
       


    });

    
    //---------End Main Function 
    function view_invoice(invoice_id){
        getinvoice(invoice_id);
        $("#view_invoice").modal('show');
    }
    function addservice(invoice_id){
        getservice(invoice_id);
        $("#invoice_id").val(invoice_id);
        $("#modalservice").modal('show');
    }
    function addpay(invoice_id){
        getpayment(invoice_id);
        $("#payinvoice_id").val(invoice_id);
        $("#modalpay").modal('show');
    }
    
    function delete_pos(event){
        var r = confirm("Are you sure to delete this record !");
        if(r == true){
            var sid = $(event.target).attr('rel');
            location.href="<?php echo site_url('payment/service/delete');?>/"+sid;
        }
    }
    function view_position(event){
        var posid = $(event.target).attr('rel');
        location.href="<?php echo site_url('payment/service/view_pos');?>/"+posid;
    }

    function edit_pos(event){
        var sid = $(event.target).attr('rel');
        location.href="<?php echo site_url('payment/service/edit');?>/"+sid;
    }
    function setinputvisible(event){
        if( $(event.target).is(':checked')){
            $(event.target).closest('tr').find('input[type="text"]').prop('disabled',false);
            $(event.target).closest('tr').find('.discount').prop('required',true);
            $(event.target).closest('tr').find('.discount_us').prop('required',true);
        }else{
            $(event.target).closest('tr').find('input[type="text"]').prop('disabled',true);
            $(event.target).closest('tr').find('.discount').prop('required',false);
            $(event.target).closest('tr').find('.discount_us').prop('required',false);
        }
    }
    getdata(1);
    $("#year").change(function(){
        getdata(1);
    })
    $(document).on('change','.s_date',function(){
            alert($(this).val());
    })
     function getdata(page){
            var url="<?php echo site_url('payment/invoice/getdata')?>";
            var m="<?PHP echo $m?>";
            var p="<?PHP echo $p?>";
            var year=$('#year').val();
            var name=$('#name').val();
            
            var perpage=$('#perpage').val();
            $.ajax({
                    url:url,
                    type:"POST",
                    datatype:"Json",
                    async:false,
                    data:{'m':m,
                            'p':p,
                            'year':year,
                            'perpage':perpage,
                            'name':name
                        },
                    success:function(data) {
                      $(".list").html(data.data);
                      $('.dataTables_paginate').html(data.pagina.pagination);
                    }
                  })
        }
        function getservice(invoice_id){
            var url="<?php echo site_url('payment/invoice/getajaxservice')?>/"+invoice_id;
            var year=$('#year').val();
            $.ajax({
                    url:url,
                    type:"POST",
                    datatype:"Json",
                    async:false,
                    data:{
                            'year':year
                        },
                    success:function(data) {
                        $(".list_fee").html(data.fee);
                        $(".list_service").html(data.service);
                        $(".s_date").datepicker({
                                language: 'en',
                                pick12HourFormat: true,
                                format:'yyyy-mm-dd'

                        }).on('changeDate', function(event) {
                                var date=$.datepicker.formatDate("yy-mm-dd", event.date);
                                var service_id=$(event.target).closest('tr').find('.service_id').val();
                                // alert(date);
                                // alert($(event.target).closest('tr').html());
                                 var url="<?php echo site_url('payment/invoice/getserviceprice')?>/"+invoice_id+'/'+service_id;
                                $.ajax({
                                        url:url,
                                        data:{'date':date},
                                        type:"POST",
                                        datatype:"Json",
                                        async:false,
                                        success:function(data) {
                                           $(event.target).closest('tr').find('.ser_price').val(data);
                                           $(event.target).closest('tr').find('.ser_price_label').html(data);
                                        }
                                })

                        });

                    }
                  })
                      

        }
       
        function getpayment(invoice_id){
            var url="<?php echo site_url('payment/invoice/getpayment')?>/"+invoice_id;
            $.ajax({
                    url:url,
                    type:"POST",
                    datatype:"Json",
                    async:false,
                    success:function(data) {
                        $("#payamount").val(data.amount);
                        var due_amount=Number(data.amount)-Number(data.amount_paid);
                        $("#due_amount").val(Number(due_amount).toFixed(2));
                        $("#pay").val(Number(due_amount).toFixed(2));
                    }
                  })
        }
        function getinvoice(invoice_id){
            var url="<?php echo site_url('payment/invoice/getinvoice')?>/"+invoice_id;
            $.ajax({
                    url:url,
                    type:"POST",
                    datatype:"Json",
                    async:false,
                    success:function(data) {
                       $("#recipt_no").html(data.row.invoice_number);
                       $("#recipt_class").html(data.row.class_name);
                       $("#inv_amount").html(data.totalamount);
                       $("#inv_total_amount").html(data.row.amount);
                       $("#std_name").html(data.row.first_name+' '+data.row.last_name);
                       $("#std_name").html(data.student_num);
                       $("#recipt_date").html(data.row.invoice_date);
                       $('.list_invoice_detail').html(data.data);
                    }
                  })
        }
        function calculatepay(event){
            var due=$("#due_amount").val();
            var pay=$(event.target).val();
            if(Number(pay)>Number(due)){
                alert('Pay amount can not > due amount');
                $(event.target).val(0);
            }
        }
        $(function(){
            $("#print_inv").on("click", function(){
                var export_data = $("#inv_print").html();
                var export_data2=export_data;
                export_data+=export_data2;
                var title = "";
                gsPrint(title,export_data);
            });
            // var emp="<?php echo $employee['empcode'] ?>";
            // $("#bcTarget").barcode(emp, "code93");   
        });

</script>