<?php
    $act="cthanghoa";
    if(isset($_GET['act']))
    {
        $act=$_GET['act'];
    }
    switch ($act) {
        case 'cthanghoa':
            include_once "./View/cthanghoa.php";
            break;
        
        case 'cthanghoa_action':
            if(isset($_POST["submit"]))
            {
                $mahh=$_POST['mahh'];
                $mamau=$_POST['mamau'];
                $dongia=$_POST['dongia'];
                $slt=$_POST['slt'];
                $slm=$_POST['slm'];
                $hinh=$_FILES['image']['name'];
                $giamgia=$_POST['giamgia'];
                $ct=new cthanghoa();
                $check=$ct->insertCTHangHoa($mahh,$mamau,$dongia,$slt,$slm,$hinh,$giamgia);
                if($check!==false)
                {
                    
                    echo '<script>alert("Thêm dữ liệu thành công");</script>';
                    echo '<meta http-equiv=refresh content="0;url=../Admin/index.php?action=cthanghoa"/>';
                }
                else
                {
                    echo '<script>alert("Thêm dữ liệu ko thành công");</script>';
                    echo '<meta http-equiv=refresh content="0;url=../Admin/index.php?action=cthanghoa"/>';
                }
            }
            break;
    }
?>