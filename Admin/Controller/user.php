<?php
    $act="user";
    if(isset($_GET['act']))
    {
        $act=$_GET['act'];
    }
    switch ($act) {
        case 'user':
            include_once "./View/user.php";
            break;
        case 'user_action':
            include_once "./View/adduser.php";
            break;

        case 'insert_action':
            
            if($_SERVER['REQUEST_METHOD']=='POST')
            {
                $makh=$_POST['makh'];
                $tenkh=$_POST['tenkh'];
                $username=$_POST['username'];
                $email=$_POST['email'];
                $dichi=$_POST['dichi'];
                $sodienthoai=$_POST['sodienthoai'];


                $hh=new user();
                
                $check=$hh->insertuser($tenkh,$username,$email,$dichi,$sodienthoai);
                if($check!==false)
                {
                    echo '<script>alert("Thêm dữ liệu thành công");</script>';
                    echo '<meta http-equiv=refresh content="0;url=../Admin/index.php?action=user"/>';
                }
                else
                {
                    echo '<script>alert("Thêm dữ liệu ko thành công");</script>';
                    include_once "./View/user.php";
                }
            }
            break;
        case 'update_user':
            include_once "./View/edituser.php";
            break;
        case 'update_action':
            if($_SERVER['REQUEST_METHOD']=='POST')
            {
                $makh=$_POST['makh'];
                $tenkh=$_POST['tenkh'];
                $username=$_POST['username'];
                $email=$_POST['email'];
                $diachi=$_POST['diachi'];
                $sodienthoai=$_POST['sodienthoai'];

                // dem thong tin này insert vào database
                $hh=new user();
                $check=$hh->updateuser($makh,$tenkh,$username,$email,$diachi,$sodienthoai);
                if($check!==false)
                {
                    echo '<script>alert("Update dữ liệu thành công");</script>';
                    echo '<meta http-equiv=refresh content="0;url=../Admin/index.php?action=user"/>';
                }
                else
                {
                    echo '<script>alert("UPdate dữ liệu ko thành công");</script>';
                    include_once "./View/user.php";
                }
            }
            break;
        case 'delete_user':
            $id = $_GET['id'];
            $hh=new user();
            $check=$hh->deleteuser($id);
            if($check!==false)
            {
                echo '<script>alert("Xóa dữ liệu thành công");</script>';
                echo '<meta http-equiv=refresh content="0;url=../Admin/index.php?action=user"/>';
            }
            else
            {
                echo '<script>alert("Xóa dữ liệu không thành công");</script>';
                include_once "./View/user.php";
            }
            break;
        default:
            include_once "./View/user.php";
            break;
    }
    
?>