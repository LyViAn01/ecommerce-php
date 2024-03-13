<?php
    class binhluan{
        function insertBinhLuan($idkh,$idhanghoa,$content){
            $db=new connect();
            $query="insert into comment(idcomment,idkh,idhanghoa,content,luotthich) values(NULL,$idkh,$idhanghoa,'$content',0)";
            $db->exec($query);
        }
        function selectComment($idmasp){
            $db=new connect();
            $select="select a.content,b.username from comment a, khachhang b where a.idkh=b.makh and a.idhanghoa=$idmasp";
            $result=$db->getList($select);
            return $result;
        }
    }
?>