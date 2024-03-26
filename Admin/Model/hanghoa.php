<?php
class hanghoa
{
    function getHangHoa()
    {
        $db = new connect();
        $select = "select * from hanghoa";
        $result = $db->getList($select);
        return $result;
    }
    // pt thêm
    function insertHangHoa($tenhh, $maloai, $dacbiet, $slx, $ngaylap, $mota)
    {
        $db = new connect();
        $query = "insert into hanghoa(tenhh,maloai,dacbiet,soluotxem,ngaylap,mota) 
        values ('$tenhh',$maloai,$dacbiet,$slx,'$ngaylap','$mota')";
        $result = $db->exec($query);
        return $result;
    }
    function deleteHangHoa($id)
    {
        $db = new connect();
        $query = "DELETE FROM hanghoa WHERE mahh=$id";
        $result = $db->exec($query);
        return $result;
    }
    // phương thức lấy thông tin 1 món hàng
    function getHangHoaId($id)
    {
        $db = new connect();
        $select = "select * from hanghoa where mahh=$id";
        $result = $db->getInstance($select);
        return $result;
    }
    // phương thức update
    function updateHangHoa($mahh, $tenhh, $maloai, $dacbiet, $slx, $ngaylap, $mota)
    {
        $db = new connect();
        $query = "update hanghoa 
        set tenhh='$tenhh', maloai=$maloai,dacbiet=$dacbiet,soluotxem=$slx,ngaylap='$ngaylap',mota='$mota' 
        where mahh=$mahh";
        $result = $db->exec($query);
        return $result;
    }
    function getMau()
    {
        $db = new connect();
        $select = "select * from mausac";
        $result = $db->getList($select);
        return $result;
    }

    function getThongKe()
    {
        $db = new connect();
        $select = "select b.hang,sum(a.soluongmua) as soluong from cthoadon a, hanghoa b WHERE a.mahh=b.mahh group by b.hang";
        $result = $db->getList($select);
        return $result;
    }
    function getSubHoaDon()
    {
        $db = new connect();
        $select = "SELECT COUNT(DISTINCT masohd) AS masohd FROM hoadon";
        $result = $db->getInstance($select);
        return $result;
    }
    function getHoaDonToday()
{
    $db = new connect();
    $select = "SELECT COUNT(*) AS total FROM hoadon WHERE DATE(ngaydat) = CURDATE()";
    $result = $db->getInstance($select);
    return $result;
}



}
