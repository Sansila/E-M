<!-- <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.min.css" />
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker3.min.css" />
-->

<!-- <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.min.js"></script> -->
<?php 
    $fdate='';
    $ldate='';
    if (isset($_GET['first_date']))
        $fdate = $_GET['first_date'];
    if (isset($_GET['last_date']))
        $ldate = $_GET['last_date'];
    ?>
    <div class="report">
            <span class="top_action_button">
                <a href="JavaScript:void(0);" id="print_inv" class="print_inv" title="Print">
                    <img src="<?php echo base_url('assets/img/pn.png')?>" />
                </a>
            </span> 
           
          
            <div class="header" style=" width: 100%;">
                <div class="row" style="padding-left: 15px; padding-right: 15px;">
                    <div class="col-sm-12">
                        <div class="row">
                     
                            <div class="col-sm-9 pull-right" style="text-align: right;">

                                  <form class="form-inline" role="form" method="get" action="<?php echo site_url('reports/myothersalary_report');?>">
                                       
                                         <div class="form-group">
                                            <label for="email">បុគ្គលិក</label>
                                            <select class="form-control" name="emp_id" id="empid">
                                                <option value=''>Please Select</option>
                                                <?php 
                                                    foreach ($emp as $empr) {
                                                        $sel='';
                                                        if($emp_id==$empr->empid){
                                                            $sel='selected';
                                                        }
                                                        echo "<option value='$empr->empid' $sel>$empr->last_name".'_'.$empr->first_name.'_'."$empr->empcode</option>";
                                                    }
                                                ?>
                                            </select>
                                        </div> 
                                        <div class="form-group">
                                            <label for="email">ចាប់ពីថ្ងៃ ទី </label>
                                             <div class="input-group input-tip" data-date-format="yyyy-mm-dd" id="b_date">
                                                <span class="input-group-addon add-on"><span class="fa fa-calendar"></span></span>
                                                <input type="text" class="form-control b_date" value="<?php echo $fdate ;?>" name="first_date" id="first_date" style="width: 120px;" />
                                                
                                            </div>
                                        </div>
                                        <div class="form-group eventForm">
                                            <label for="pwd"> ដល់ថ្ងៃ​ ទី  </label>
                                            <div class="input-group input-tip" data-date-format="yyyy-mm-dd" id="e_date">
                                                <span class="input-group-addon add-on"><span class="fa fa-calendar"></span></span>
                                                <input type="text" class="form-control e_date" value="<?php echo $ldate ;?>" name="last_date" id="last_date" style="width: 120px;" />
                                                
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" class="btn btn-info" value="Search" />
                                        </div>
                                        
                                  </form>
           
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div> 
                <div class="modal-body" id="inv_print">
                   
                    <div class="header" style="height: 100px; width: 100%;">
                        <div class="row" style="padding-left: 15px; padding-right: 15px;">
                            <div class="col-sm-12">
                                <div class="row">
                                   
                                    <div class="col-sm-4">
                                        <!-- <img src="<?php echo base_url();?>updatepos/img/kpg.png"> -->
                                    </div>
                                    <div class="col-sm-4" style="text-align: center; padding-bottom: 10px; margin-top: 30px; font-family: Khmer OS Muol; font-size: 20px;">របាយការណ៍ប្រាក់បន្ថែមផ្សេងៗ</div>
                                   
                                    <?php if(isset($_GET['first_date'])){
                                        echo '<div class="col-sm-12" style="text-align: center; font-size:14px;">របាយការណ៍ចាប់ពីថ្ងៃ '.date_format(date_create($_GET['first_date']),'d-M-Y').' ដល់ '.date_format(date_create($_GET['last_date']),'d-M-Y').'</div>';
                                    }else{
                                        echo '<div class="col-sm-12" style="text-align: center; font-size:14px;">របាយការណ៍ប្រចាំថ្ងៃ : '.date('d-M-Y').'</div>';
                                    } 
                                    if(isset($emprow->empid)){
                                         echo '<div class="col-sm-12" style="text-align: center; font-size:14px;">បុគ្គលិក : '.$emprow->last_name.' '.$emprow->first_name.'</div>';
                                    }
                                    ?>

                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="padding-left: 15px; padding-right: 15px;">
                        <div class="col-sm-12">
                            <style type="text/css">
                                #head tr th{
                                    text-align: center !important;
                                }
                            </style>
                            <table class="table table-bordered" style=" border-left: none;">
                                <tbody id="head">
                                    <tr>
                                        <th >No</th>
                                        <th >Date</th>
                                        <th >EmployeeID</th>
                                        <th >Employee</th>   
                                        <th >Position</th>   
                                        <th >Submited by</th>   
                                        <th >Bonuse Type</th>
                                        <th >OT Date(Only for OT)</th>
                                        <th >Description</th>
                                        <th >Amount(USD)</th>

                                     

                                    </tr>
                                    <!--  <tr>
                                       
                                        <th>ចំនួន</th>
                                        <th>ថ្លៃដើម</th>
                                        <th>ថ្លៃលក់ចេញ</th>
                                         <th>ប្រាក់ចំនេញ</th>
                                    </tr> -->
                                </tbody>
                                <tbody>
                                <?php 
                                    // var_dump($getrp);

                                    // $f='2016-05-22';
                                    // $t='2016-05-24';
                                    // $sql="SELECT * From sma_sales WHERE date BETWEEN '$f' AND '$t' ORDER BY id DESC";
                                    // $filter_report=$this->db->query($sql)->result();
                                    $i=0;
                                    $total = 0;
                                    // print_r($getrp);
                                    foreach ($getrp as $filter_report) {  
                                        $total = $total + $filter_report->salary;
                                       
                                        $i++;
                                ?>
                                <tr>
                                    <td   align="center"><?php echo $i ?></td>
                                    <td  align="center"><?php echo $filter_report->date ?></td>
                                    <td   align="center"><?php echo $filter_report->empcode ?></td>
                                    <td  align="center"><?php echo $filter_report->fullname ?></td> 
                                    <td  align="center"><?php echo $filter_report->position ?></td>
                                    <td  align="center"><?php echo $filter_report->user_name ?></td>
                                    <td  align="center"><?php echo $filter_report->bonuse_type ?></td>
                                    <td  align="center"><?php echo $filter_report->otdate ?></td>
                                    <td  align="center"><?php echo $filter_report->note ?></td>
                                    <td  align="center"><?php echo $filter_report->salary ?></td>

                                </tr>
                                <?php } ?>
                                    <tr >
                                        <td colspan="9"  style="font-size: 11px; text-align: right; background: #cbcac4;">សរុប</td>
                                        <td align="center" style="font-weight: bold; "><?php  echo number_format($total,2); ?></td>
                                    </tr>
                                </tbody>
                                   <!--  <tbody style="border:1px solid #E6E6E6;">
                                        <tr >
                                            <td style="border-left: none; border-bottom: 0px; border-left: none;" colspan="5" rowspan="3"></td>
                                            <td style="font-size: 18px; text-align: right; background: #cbcac4;border-bottom: 1.5px solid #E6E6E6;">សរុប</td>
                                            <td align="center" style="font-weight: bold; border-bottom: 1.5px solid #E6E6E6;"><?php  echo $total; ?></td>
                                            <td align="center" style="font-weight: bold;border-bottom: 1.5px solid #E6E6E6;"><?php echo $total1; ?></td>
                                            <td align="center" style="font-weight: bold;border-bottom: 1.5px solid #E6E6E6;"><?php  echo $total2; ?></td>
                                        </tr>
                                       
                                    </tbody>
     -->

                            </table>
                            <p style="text-align: right; font-size: 12px;">រាជធានីភ្នំពេញ ថ្ងៃទី............ខែ.................ឆ្នាំ ២០១....</p>
                            <h4 style="text-align: right; padding-right: 99px; font-size: 12px; font-weight: bold;font-family: khmer OS Muol">ហត្ថលេខា</h4><br/><br/>
                        </div>
                    </div>

                </div>
            </div>
    </div>
      <script src="<?php echo base_url('assets/update/js/bootstrap-datepicker1.js')?>"></script> 

<script type="text/javascript">
    
 $("#b_date input").datepicker();
 $("#e_date input").datepicker();
 $('#empid').select2();

 $(function(){
            $("#print_inv").on("click", function(){
                var export_data = $("#inv_print").html();
                    export_data +='<style type="text/css">'+
                                    'td,th,h5,h6,h2,h3,p,h1,div,span,label{'+
                                        'font-family: Cambria;'+
                                    '}'+
                                    'th{'+
                                        'font-size: 11px;'+
                                        'font-weight: bold;'+
                                    '}'+
                                    'td{'+
                                        'font-size: 11px;'+
                                    '}'+
                                '</style>';
                var title = "";
                gsPrint(title,export_data);
            });
});

</script>

