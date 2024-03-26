<?php
    class cthanghoa{
        function insertCTHangHoa($mahh,$mamau,$dongia,$slt,$slm,$hinh,$giamgia)
        {
            $db=new connect();
            $query="insert into cthanghoa(idhanghoa,idmau,dongia,soluongton,soluotmua,hinh,giamgia) values ($mahh,$mamau,$dongia,$slt,$slm,'$hinh',$giamgia)";
            echo $query;
            $result=$db->exec($query);
            return $result;
        }
    }
?>