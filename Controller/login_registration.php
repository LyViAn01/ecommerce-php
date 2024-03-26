<?php
$act = 'dangky';
if (isset($_GET['act'])) {
    $act = $_GET['act'];
}

switch ($act) {
    case 'dangky':
        include_once './View/login_registration.php';
        break;
    case 'dangky_action':
        $tenkh = '';
        $dc = '';
        $sdt = '';
        $user = '';
        $email = '';
        $pass = '';

        if (isset($_POST['submit'])) {
            $tenkh = $_POST['txtname'];
            $dc = $_POST['txtdiachi'];
            $sdt = $_POST['txtsdt'];
            $user = $_POST['txtusername'];
            $email = $_POST['txtemail'];
            $pass = $_POST['txtpass'];
            $saltF = 'G456#@';
            $saltL = 'Fa34%!';
            $passNew = md5($saltF . $pass . $saltL);
            //controller yêu cầu những thông tin này được thêm vào database
            //trước khi insert cần kiểm tra username và email đã tồn tại hay chưa
            $kh = new user();
            $check = $kh->getCheckUser($user, $pass)->rowCount();
            if ($check > 0) {
                echo '<script> alert("Username hoặc email đã tồn tại") </script>';
                include_once './View/login_registration.php';
            } else {
                $data = [
                    'tenkh' => $tenkh,
                    'username' => $user,
                    'matkhau' => $passNew,
                    'email' => $email,
                    'diachi' => $dc,
                    'sodienthoai' => $sdt
                ];
                $newkh = $kh->insertKhachHang($data);
                if ($newkh !== false) {
                    echo '<script> alert("Đăng ký thành công");</script>';
                    include_once './View/home.php';
                } else {
                    echo '<script> alert("Đăng ký không thành công");</script>';
                    include_once './View/login_registration.php';
                }
            }
        }
        break;

    case 'login_action':
        if (isset($_POST['send_login'])) {
            $username = isset($_POST['txtusername']) ? $_POST['txtusername'] : '';
            $password = isset($_POST['txtpass']) ? $_POST['txtpass'] : '';
            $saltF = 'G456#@';
            $saltL = 'Fa34%!';
            $user = new user();
            $result = $user->login($username, md5($saltF . $password . $saltL));
            if ($result) {
                $_SESSION['makh'] = $result['makh'];
                $_SESSION['tenkh'] = $result['tenkh'];
                echo '<script> alert("Đăng nhập thành công");</script>';
                echo '<meta http-equiv="refresh" content="0;url=index.php?action=home"/>';
            } else {
                echo '<script> alert("Đăng nhập không thành công");</script>';
                include_once './View/login_registration.php';
            }
        }
        break;

    case 'logout':

        unset($_SESSION['makh']);
        unset($_SESSION['tenkh']);
        echo '<meta http-equiv="refresh" content="0;url=index.php?action=home"/>';
        break;
    default:
        include_once './View/login_registration.php';
        break;
}
