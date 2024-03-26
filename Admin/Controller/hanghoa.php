<?php
    $act="hanghoa";
    if(isset($_GET['act']))
    {
        $act=$_GET['act'];
    }
    switch ($act) {
        case 'hanghoa':
            include_once "./View/hanghoa.php";
            break;
        
        case 'hanghoa_action':
            include_once "./View/addhanghoa.php";
            break;
        case 'insert_action':
            
            if($_SERVER['REQUEST_METHOD']=='POST')
            {
                $mahh=$_POST['mahh'];
                $tenhh=$_POST['tenhh'];
                $maloai=$_POST['maloai'];
                $dacbiet=$_POST['dacbiet'];
                $slx=$_POST['slx'];
                $ngaylap=$_POST['ngaylap'];
                $mota=$_POST['mota'];

                $hh=new hanghoa();
                
                $check=$hh->insertHangHoa($tenhh,$maloai,$dacbiet,$slx,$ngaylap,$mota);
                if($check!==false)
                {
                    uploadImage();
                    echo '<script>alert("Thêm dữ liệu thành công");</script>';
                    echo '<meta http-equiv=refresh content="0;url=../Admin/index.php?action=cthanghoa"/>';
                }
                else
                {
                    echo '<script>alert("Thêm dữ liệu ko thành công");</script>';
                    include_once "./View/addhanghoa.php";
                }
            }
            break;
        case 'update_hanghoa':
            include_once "./View/edithanghoa.php";
            break;
        case 'update_action':
            if($_SERVER['REQUEST_METHOD']=='POST')
            {
                $mahh=$_POST['mahh'];
                $tenhh=$_POST['tenhh'];
                $maloai=$_POST['maloai'];
                $dacbiet=$_POST['dacbiet'];
                $slx=$_POST['slx'];
                $ngaylap=$_POST['ngaylap'];
                $mota=$_POST['mota'];
                $hh=new hanghoa();
                $check=$hh->updateHangHoa($mahh,$tenhh,$maloai,$dacbiet,$slx,$ngaylap,$mota);
                if($check!==false)
                {
                    echo '<script>alert("Update dữ liệu thành công");</script>';
                    echo '<meta http-equiv=refresh content="0;url=../Admin/index.php?action=hanghoa"/>';
                }
                else
                {
                    echo '<script>alert("UPdate dữ liệu ko thành công");</script>';
                    include_once "./View/edithanghoa.php";
                }
            }
            break;
        case 'delete_hanghoa':
            $id = $_GET['id'];
            $hh=new hanghoa();
            $check=$hh->deleteHangHoa($id);
            if($check!==false)
            {
                echo '<script>alert("Xóa dữ liệu thành công");</script>';
                echo '<meta http-equiv=refresh content="0;url=../Admin/index.php?action=hanghoa"/>';
            }
            else
            {
                echo '<script>alert("Xóa dữ liệu không thành công");</script>';
                include_once "./View/hanghoa.php";
            }
            break;
        default:
            include_once "./View/hanghoa.php";
            break;
    }
    
?>