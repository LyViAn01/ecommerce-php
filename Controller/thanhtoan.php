<?php
    $act="thanhtoan";
    if(isset($_GET['act'])){
        $act=$_GET['act'];
    }
    switch ($act) {
        case 'thanhtoan':
            $hd=new hoadon();
            if(isset($_SESSION['makh'])){
                $makh=$_SESSION['makh'];
                $sohd=$hd->insertHoaDon($makh);
                $total=0;
                $_SESSION['masohd']=$sohd;
                foreach ($_SESSION['cart_project'] as $key => $item){
                    $hd->insertCTHoaDon($sohd,$item['mahh'],$item['soluong'],$item['thanhtien']);
                    $total += $item['thanhtien'];
                }
                $hd->updateHoaDonThanhTien($sohd,$makh,$total);
                foreach ($_SESSION['cart_project'] as $key => $item){
                    $mahh = $item['mahh'];
                    $hd->updateSoLuongHH($mahh, $sohd);
                }
                // echo '<meta http-equiv="refresh" content="0;url=index.php?action=order"/>';
            }
            include_once "./View/billing.php";
            break;
    }
?>