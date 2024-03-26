<?php
$act="bill";
if(isset($_GET['act']))
{
    $act=$_GET['act'];
}
switch ($act) {
    case 'bill':
        include_once "./View/bill.php";
        break;
    
}
  
?>