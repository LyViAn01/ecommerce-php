<?php
    class bill{
        function getBill()
    {
        $db = new connect();
        $select = 'SELECT a.masohd, d.tenkh, c.tenhh, b.soluongmua, a.ngaydat, a.tongtien 
        FROM hoadon a, cthoadon b, hanghoa c, khachhang d 
        WHERE a.masohd=b.masohd AND b.mahh=c.mahh AND a.makh=d.makh 
        ORDER BY a.ngaydat DESC;
        ';
        $result = $db->getList($select);
        return $result;
    }
    }
?>