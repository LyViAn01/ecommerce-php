<?php

class hanghoa
{
    function getHangHoaOne()
    {
        $db = new connect();
        $select = 'select a.mahh,a.tenhh,a.soluotxem,b.hinh,b.dongia,b.giamgia from hanghoa a, cthanghoa b where a.mahh=b.idhanghoa and a.mahh=6 order by a.mahh DESC limit 1';
        $result = $db->getList($select);
        return $result;
    }
    function getHangHoa()
    {
        $db = new connect();
        $select = 'select a.mahh,a.tenhh,a.soluotxem,b.hinh,b.dongia,b.giamgia from hanghoa a, cthanghoa b where a.mahh=b.idhanghoa order by a.mahh DESC limit 10';
        $result = $db->getList($select);
        return $result;
    }
    function getHangHoaRelated()
    {
        $db = new connect();
        $select = 'select a.mahh,a.tenhh,a.soluotxem,b.hinh,b.dongia,b.giamgia from hanghoa a, cthanghoa b where a.mahh=b.idhanghoa order by a.mahh DESC limit 4';
        $result = $db->getList($select);
        return $result;
    }
    function getHangHoaFeatured()
    {
        $db = new connect();
        $select = 'select a.mahh,a.tenhh,a.soluotxem,b.hinh,b.dongia,b.giamgia,b.soluotmua from hanghoa a, cthanghoa b where a.mahh=b.idhanghoa order by a.mahh DESC limit 6';
        $result = $db->getList($select);
        return $result;
    }
    function getHangHoaBestsellers()
    {
        $db = new connect();
        $select = 'select a.mahh,a.tenhh,a.soluotxem,b.hinh,b.dongia,b.giamgia,b.soluotmua from hanghoa a, cthanghoa b where a.mahh=b.idhanghoa and b.soluotmua > 50 order by a.mahh DESC limit 6';
        $result = $db->getList($select);
        return $result;
    }
    function getHangHoaSale()
    {
        $db = new connect();
        $select = 'select a.mahh,a.tenhh,a.soluotxem,b.hinh,b.dongia, b.giamgia from hanghoa a, cthanghoa b where a.mahh=b.idhanghoa and  b.giamgia != 0 order by a.mahh DESC limit 6';
        $result = $db->getList($select);
        return $result;
    }

    function getHangHoaAll()
    {
        $db = new connect();
        $select = 'select a.mahh,a.tenhh,a.soluotxem,b.hinh,b.dongia, b.giamgia from hanghoa a, cthanghoa b where a.mahh=b.idhanghoa order by a.mahh DESC';
        $result = $db->getList($select);
        return $result;
    }

    function getHangHoaAllFeatured()
    {
        $db = new connect();
        $select = 'select a.mahh,a.tenhh,a.soluotxem,b.dongia,b.hinh,b.giamgia from hanghoa a,cthanghoa b WHERE a.mahh=b.idhanghoa AND b.giamgia!=0 ORDER by a.mahh DESC';
        $result = $db->getList($select);
        return $result;
    }
    function getHangHoaAllPage($start, $limit)
    {
        $db = new connect();
        $select = "select a.mahh,a.tenhh,a.soluotxem,b.dongia,b.hinh,b.giamgia
        from hanghoa a,cthanghoa b
        WHERE a.mahh=b.idhanghoa ORDER by a.mahh DESC limit " . $start . "," . $limit;
        $result = $db->getList($select);
        return $result;
    }
    function getHangHoaId($id)
    {
        $db = new connect();
        $select = "select DISTINCT b.mahh, b.tenhh, b.mota,a.dongia,a.giamgia from cthanghoa a, hanghoa b where a.idhanghoa=b.mahh and b.mahh = $id";
        $result = $db->getInstance($select);
        return $result;
    }
    
    function getHangHoaHinh($id)
    {
        $db = new connect();
        $select = "SELECT a.hinh FROM cthanghoa a WHERE a.idhanghoa = $id";
        $result = $db->getList($select);
        return $result;
    }

    function getHangHoaHinhMau($mahh) {
        $db = new connect();
        $select = "SELECT DISTINCT a.hinh
        FROM cthanghoa a
        WHERE a.idhanghoa = $mahh";
        $result = $db->getInstance($select);
        return $result;
    }
    function selectTimKiem($tenhh){
        $db=new connect();
        $select="select a.mahh,a.tenhh,a.soluotxem,b.dongia,b.hinh,b.giamgia from hanghoa a, cthanghoa b where a.mahh=b.idhanghoa and a.tenhh like '%$tenhh%' order by a.mahh desc";
        $result=$db->getList($select);
        return $result;
    }
}
