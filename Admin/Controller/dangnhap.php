<?php
$act="dangnhap";
if(isset($_GET['act']))
{
    $act=$_GET['act'];
}
switch ($act) {
    case 'dangnhap':
        include_once "./View/dangnhap.php";
        break;
    
    case 'dangnhap_action':
        if($_SERVER['REQUEST_METHOD']=='POST')
        {
            $user=$_POST['txtusername'];
            $pass=$_POST['txtpassword'];

            $nv=new nhanvien();
            $check=$nv->getAdmin($user,$pass);
            if($check!==false)
            {
                $_SESSION['admin']=$check['username'];
                echo '<script>alert("Đăng nhập thành công");</script>';
                 echo '<meta http-equiv=refresh content="0;url=../Admin/index.php?action=home"/>';
            }
            else
            {
                echo '<script>alert("Đăng nhập ko thành công");</script>';
                include_once "./View/dangnhap.php";
            }
        }
        break;
    case 'logout':
        unset($_SESSION['admin']);
        echo '<meta http-equiv="refresh" content="0;url=../index.php?action=home"/>';
        break;
}

?>