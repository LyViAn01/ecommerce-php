<?php 
// unset($_SESSION['cart_project']);
if(!isset($_SESSION['cart_project'])) {
    $_SESSION['cart_project'] = array();
}
$act = 'giohang';
if(isset($_GET['act'])) {
    $act = $_GET['act'];
}

switch ($act) {
    case 'giohang':
        include_once './View/cart.php';
        break;
    
    case 'giohang_action':
        $mahh = 0;
        if (isset($_POST['mahh'])) {
            //chỉ nhận được mahhsố lượng vì nó nằm trong thẻ input và select 
            $mahh = $_POST['mahh'];
            $soluong = $_POST['soluong'];
            $gh = new giohang();
            $add = $gh->addGioHang($mahh, $soluong);
            echo '<meta http-equiv="refresh" content="0;url=index.php?action=giohang"/>';
        }
        break;
    case "giohang_xoa":
        if (isset($_GET['id'])) {
            unset($_SESSION['cart_project'][$_GET['id']]);
            echo '<meta http-equiv="refresh" content="0;url=index.php?action=giohang"/>';
        }
        break;
    case "giohang_update":
        if(isset($_POST['newqty'])){
            $newsoluong=$_POST['newqty'];
            foreach($newsoluong as $key =>$value){
                if($_SESSION['cart_project'][$key]['soluong']!=$value){
                    $gh=new giohang();
                    $gh->updateHH($key,$value);  
                }
            }
            echo '<meta http-equiv="refresh" content="0;url=index.php?action=giohang"/>';
        }
        break;


    default:
        include_once './View/cart.php';
        break;
}