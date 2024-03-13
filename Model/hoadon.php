<?php
    class hoadon{
        function insertHoaDon($makh){
            $date=new DateTime('now');
            $ngay=$date->format('Y-m-d');
            $db=new connect();
            $query="insert into hoadon(masohd,makh,ngaydat,tongtien) values(Null,$makh,'$ngay',0)";
            $db->exec($query);
            $select="select masohd from hoadon order by masohd desc limit 1";
            $mahd=$db->getInstance($select);
            return $mahd[0];
        }
        function insertCTHoaDon($masohd,$mahh,$soluongmua,$thanhtien){
            $db=new connect();
            $query="insert into cthoadon(masohd,mahh,soluongmua,thanhtien,tinhtrang) values($masohd,$mahh,$soluongmua,$thanhtien,0)";
            $db->exec($query);
        }
        function updateHoaDonThanhTien($masohd,$makh,$total){
            $db=new connect();
            $query="update hoadon set tongtien=$total WHERE masohd=$masohd and makh=$makh";
            $db->exec($query);
        }
        function updateSoLuongHH($mahh,$masohd){
            $db=new connect();
            $query="update cthanghoa 
            set soluongton = soluongton - (select soluongmua from cthoadon where cthoadon.mahh =$mahh and masohd =$masohd),
            soluotmua = soluotmua + (select soluongmua from cthoadon where cthoadon.mahh =$mahh and masohd =$masohd)
            WHERE idhanghoa = $mahh";
            $result=$db->exec($query);
            return $result;
        }
        function getHoaDonKH($masohd){
            $db=new connect();
            $select="select b.masohd,b.ngaydat,a.tenkh,a.diachi,a.sodienthoai from khachhang a INNER JOIN hoadon b on a.makh=b.makh WHERE masohd=$masohd";
            $result=$db->getInstance($select);
            return $result;
        }
        function getHoaDonCTHD($masohd){
            $db=new connect();
            $select="select DISTINCT a.tenhh,b.dongia,c.soluongmua from hanghoa a, cthanghoa b, cthoadon WHERE a.mahh=b.idhanghoa and a.mahh=c.mahh and c.masohd=$masohd";
            $result=$db->getList($select);
            return $result;
        }
    }
?>