<?php
class user{
    function getUser()
    {
        $db = new connect();
        $select = "select * from khachhang";
        $result = $db->getList($select);
        return $result;
    }
    // pt thêm
    function insertUser($tenkh, $username, $email, $diachi, $sodienthoai)
    {
        $db = new connect();
        $query = "insert into khachhang(tenkh,username,email,diachi,sodienthoai) 
        values ('$tenkh','$username','$email','$diachi','$sodienthoai')";
        $result = $db->exec($query);
        return $result;
    }
    function deleteUser($id)
    {
        $db = new connect();
        $query = "DELETE FROM khachhang WHERE makh=$id";
        $result = $db->exec($query);
        return $result;
    }
    // phương thức lấy thông tin 1 món hàng
    function getUserId($id)
    {
        $db = new connect();
        $select = "select * from khachhang where makh=$id";
        $result = $db->getInstance($select);
        return $result;
    }
    // phương thức update
    function updateUser($makh,$tenkh, $username, $email, $diachi, $sodienthoai)
    {
        $db = new connect();
        $query = "update khachhang 
        set tenkh='$tenkh', username='$username',email='$email',diachi='$diachi',sodienthoai='$sodienthoai'
        where makh=$makh";
        $result = $db->exec($query);
        return $result;
    }
    function getSubUser()
    {
        $db = new connect();
        $select = "SELECT COUNT(DISTINCT makh) AS makh FROM khachhang";
        $result = $db->getInstance($select);
        return $result;
    }
    
}
?>