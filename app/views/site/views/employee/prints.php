<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET SALARY </title>
    <link href="<?php //echo $assets ?>styles/style.css" rel="stylesheet">
      <!-- <link rel="shortcut icon" href="<?= $assets ?>images/icon.png"/> -->
        <!-- <link rel="stylesheet" href="<?= $assets ?>styles/theme.css" type="text/css"/> -->
    <link href="<?php echo base_url('assets/bower_components/bootstrap/dist/css/bootstrap.min.css') ?>" rel="stylesheet"> 

    <style type="text/css">
        html, body {
            height: 100%;
            background: #FFF;
        }

        body:before, body:after {
            display: none !important;
        }

        #wrap{
            max-width: 900px;
            margin: 10px auto !important;
            padding: 10px;
        }
        .table th {
            text-align: center;
            padding: 5px;
            font-size: 12px !important;
        }
        td {
            /*text-align: center;
            padding: 5px;*/
            font-size: 11px !important;
        }

        .table td {
            padding: 4px;
        }
        .boldtable td{
            font-weight: bold !important;
            font-size: 12px !important;
        }
        .table-bordered th, .table-bordered td { 
            border: 1px solid #ddd !important;
        }
    </style>
</head>

<body onload="window.print()">
<style type="text/css">
        @media print{
          body{ background-color:#FFFFFF; background-image:none; color:#000000 }
          #ad{ display:none;}
          #leftbar{ display:none;}
          #contentarea{ width:100%;}
        }
        </style>
<div id="wrap">
    <div class="row">
        
           <div style="width:100%; margin:10px auto !important;">
            <div class="clearfix"></div>
            <div class="row padding10">
               
                    <div class="col-xs-4 pull-left">
                        <div class="col-xs-12 pull-right">
                            <h1 style="text-align:center!imporatant; margin:0px !important;font-size:48px;">DSV</h1>
                        </div>
                    </div>
            </div>
            <div class="clearfix"></div>
           
            <h3 style="font-family: 'Khmer OS Muol Light'; font-weight: bold;font-size: 14px;margin-top: 5px;margin-bottom: 5px; text-align:center">វិក្កយបត្រ</h3>
            <h3 style="font-family: 'Khmer OS Muol Light'; font-weight: bold;font-size: 9px;margin-top: 5px;margin-bottom: 5px; text-align:center">SALARY RECEIPT</h3>

            <div class="clearfix"></div>
             <table class="table table-bordered">
                <thead>
                    <th>No</th>
                    <th>Date</th>
                    <th>Bonus Type</th>
                    <th>Date OT</th>
                    <th>Total Time OT</th>
                    <th>Description</th>
                    <th>Tax Include</th>
                    <th>Bonus Money(USD)</th>
                </thead>
                <tbody>
                    <?php

                    $i=1;
                    $total=0;
                    foreach ($getsalarydetail as $row) {
                      $total+=$row->salary;
                      $vattotal+=($row->tax_include==1)?$row->salary:0;
                      $tax=($row->tax_include==1)?'Yes' : 'No';
                       echo "<tr>
                              <td>$i</td>
                              <td>".date('Y-m-d',strtotime($row->date))."</td>
                              <td>$row->bonuse_type</td>
                              <td>$row->otdate</td>
                              <td>$row->time_ot</td>
                              <td>$row->note</td>
                              <td>$tax</td>
                              <td>$row->salary</td>
                            </tr>";
                            $i++;
                    }
                    ?>
                </tbody>
                <tfoot>
                  <tr>
                      <td colspan="7">
                          <label class="pull-right">Sub Total :</label>
                      </td>
                      <td><?= number_format($total,2); ?></td>
                  </tr>
                  <tr>
                      <td colspan="7">
                          <label class="pull-right">Main Salary :</label>
                      </td>
                      <td><?= number_format($getsalaryrow->main_salary,2); ?></td>
                  </tr>
                  <tr>
                      <td colspan="7">
                          <label class="pull-right">Grand Total :</label>
                      </td>
                      <td><?= number_format($getsalaryrow->total_salary,2); ?></td>
                  </tr>

                  <tr>
                      <td colspan="7">
                          <label class="pull-right">Grand Total For Tax :</label>
                      </td>
                      <td><?= number_format($getsalaryrow->tax_grand_total,2); ?></td>
                  </tr>

                  <tr>
                      <td colspan="7">
                          <label class="pull-right">Tax Salary :</label>
                      </td>
                      <td><?= number_format($getsalaryrow->tax_salary,2); ?></td>
                  </tr>
                   <tr>
                      <td colspan="7">
                          <label class="pull-right">Total Salary :</label>
                      </td>
                      <td><?= number_format(($getsalaryrow->total_salary-$getsalaryrow->tax_salary),2); ?></td>
                  </tr>
                </tfoot>
            </table>

    </div>
    <div id="buttons" style="padding-top:10px; text-transform:uppercase;" class="no-print">
        <hr>
        <?php if ($message) { ?>
        <div class="alert alert-success">
            <button data-dismiss="alert" class="close" type="button">×</button>
            <?= is_array($message) ? print_r($message, true) : $message; ?>
        </div>
    <?php } ?>

      <span class="col-xs-12" style="padding-bottom:15px;">
            <a class="btn btn-block btn-primary" id="web_print" href="javascript:window.print()">Web Print</a>
        </span>

        <span class="col-xs-12">
            <a class="btn btn-block btn-warning" id="back_" href="<?= site_url('#'); ?>">Back To Dashboard</a>
        </span>
        <?php if (!$pos_settings->java_applet) { ?>
            <div style="clear:both;"></div>
            <div class="col-xs-12" style="background:#F5F5F5; padding:10px;">
                <p style="font-weight:bold;">Please don't forget to disble the header and footer in browser print
                    settings.</p>

                <p style="text-transform: capitalize;"><strong>FF:</strong> File &gt; Print Setup &gt; Margin &amp;
                    Header/Footer Make all --blank--</p>

                <p style="text-transform: capitalize;"><strong>chrome:</strong> Menu &gt; Print &gt; Disable Header/Footer
                    in Option &amp; Set Margins to None</p></div>
        <?php } ?>
        <div style="clear:both;"></div>

    </div>

    
</div>
</body>
</html>