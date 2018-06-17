<?php
 header('ETag: etagforie7download'); //IE7 requires this header
 header('Content-type: application/octet_stream');
 header('Content-disposition: attachment;filename="'.$_REQUEST['exporttitle'].'-'.date('Y-m-d-h-i-s').'.xls');
 echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />';
 echo $_REQUEST['data'];
?>