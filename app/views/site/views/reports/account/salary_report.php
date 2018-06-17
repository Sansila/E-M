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
                     
                            <div class="col-sm-6 pull-right" style="text-align: right;">

                                  <form class="form-inline" role="form" method="get" action="<?php echo site_url('reports/mysalary_report');?>">
                                        <div class="form-group">
                                            <label for="email">Year : </label>
                                             <select class="input-xs" id="year" name="year">
                                                <option value=''>Select Year</option>
                                                <?php 
                                                    for ($i=date('Y'); $i >= date('Y')-5; $i--) { 
                                                        $sel='';
                                                        if($i==$year){
                                                            $sel='selected';
                                                        }
                                                        echo "<option $sel>$i</option>";# code...
                                                    }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Month : </label>
                                               <select class="input-xs" id="month" name="month">
                                                <option value=''>Select Month</option>
                                                <?php 
                                                    $months = array(1 => 'Jan', 2 => 'Feb', 3 => 'Mar', 4 => 'Apr', 5 => 'May', 6 => 'Jun', 7 => 'Jul', 8 => 'Aug', 9 => 'Sep', 10 => 'Oct', 11 => 'Nov', 12 => 'Dec');
                                                      foreach ($months as $key => $value) {
                                                        $sel='';
                                                        if($key==$month){
                                                            $sel='selected';
                                                        }
                                                          echo "<option value='$key' $sel>".$value."</option>";
                                                      }
                                                ?>
                                            </select>
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
                                    <div class="col-sm-4" style="text-align: center; padding-bottom: 10px; margin-top: 30px; font-family: Khmer OS Muol; font-size: 20px;">របាយការណ៍ប្រាក់បៀវត្តន៍</div>
                                   
                                    <?php 
                                        // if(isset($supplierrow->id)){
                                            echo '<div class="col-sm-12" style="text-align: center; font-size:14px;">របាយការណ៍ប្រចាំខែ : '.$months[$month].' - '.$year.'</div>';
                                        // }
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
                                        <th >Salary For</th>
                                        <th >Main Salary</th>
                                        <th >Other Bonus</th>
                                        <th >Grand Total</th>
                                        <th >Tax Salary</th>
                                        <th >Total Salary</th>

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
                                    // $f='2016-05-22';
                                    // $t='2016-05-24';
                                    // $sql="SELECT * From sma_sales WHERE date BETWEEN '$f' AND '$t' ORDER BY id DESC";
                                    // $filter_report=$this->db->query($sql)->result();
                                    $i=0;
                                    $total = 0;
                                    $total1 = 0;
                                    $total2 = 0;
                                    // print_r($getrp);
                                    foreach ($getrp as $filter_report) {  
                                        $total = $total + $filter_report->main_salary;
                                        $total1 = $total1 + $filter_report->bonus;
                                        $total2 = $total2 + ($filter_report->main_salary+$filter_report->bonus);
                                        $tax=$tax+$filter_report->tax_salary;
                                         $t_salary=$t_salary+$filter_report->total_salary-$tax;
                                        $i++;
                                        $fullname = $filter_report->first_name.' '.$filter_report->last_name;
                                ?>
                                <tr>
                                    <td   align="center"><?php echo $i ?></td>
                                    <td  align="center"><?php echo $filter_report->date ?></td>
                                    <td   align="center"><?php echo $filter_report->empcode ?></td>
                                    <td  align="center"><?php echo $fullname ?></td> 
                                    <td  align="center"><?php echo $filter_report->position ?></td>
                                    <td  align="center"><?php echo $months[$filter_report->month] ?></td>
                                    <td  align="center"><?php echo number_format($filter_report->main_salary,2) ?></td>
                                    <td  align="center"><?php echo number_format($filter_report->bonus,2) ?></td>
                                    <td  align="center"><?php echo number_format($filter_report->bonus+$filter_report->main_salary,2) ?></td>
                                    <td align="center"><?php echo number_format($filter_report->tax_salary,2)?></td>
                                     <td align="center"><?php echo number_format(($filter_report->total_salary-$tax),2)?></td>

                                </tr>
                                <?php } ?>
                                    <tr >
                                <td colspan="6"  style="font-size: 11px; text-align: right; background: #cbcac4;">សរុប</td>
                                <td align="center" style="font-weight: bold; "><?php  echo number_format($total,2); ?></td>
                                <td align="center" style="font-weight: bold;"><?php echo number_format($total1,2); ?></td>
                                <td align="center" style="font-weight: bold;;"><?php  echo number_format($total2,2); ?></td>
                                <td align="center" style="font-weight: bold;;"><?php  echo number_format($tax,2); ?></td>
                                <td align="center" style="font-weight: bold;;"><?php  echo number_format($t_salary,2); ?></td>
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

<script type="text/javascript">
$('.input-xs').select2();
 $(".b_date,.e_date").datepicker({
            language: 'en',
            pick12HourFormat: true,
            format:'yyyy-mm-dd'
        });

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

