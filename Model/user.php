<?php
class user {
    function getCheckUser($username, $email) {
        $db = new connect();
        $select = 'SELECT a.username, a.email FROM khachhang a WHERE a.username = "' . $username . '" OR a.email = "' . $email .'"';
        $result = $db->getList($select);
        return $result;
    }
    function insertKhachHang($data) {
        $db = new connect();
        $tenkh = $data['tenkh'];
        $username = $data['username'];
        $matkhau = $data['matkhau'];
        $email = $data['email'];
        $diachi = $data['diachi'];
        $sodienthoai = $data['sodienthoai'];
        $query = "INSERT INTO khachhang (makh, tenkh, username, matkhau, email, diachi, sodienthoai) VALUES (NULL, '$tenkh', '$username', '$matkhau', '$email', '$diachi', '$sodienthoai')";
        //exec
        $result = $db->exec($query);
        return $result;
    }
    function login($username, $password) {
        $db = new connect();
        $select = "SELECT tenkh,email,diachi,sodienthoai,makh FROM khachhang WHERE username = '$username' AND matkhau = '$password'";
        $result = $db->getInstance($select);
        return $result;
    }
}
