<?php 
class page {
    //phương thức tính số trang
    function findPage($count, $limit) {
        $page = (($count % $limit) == 0) ? $count / $limit : ceil($count / $limit);
        return $page;
    }

    //phương thức tìm start dựa vào trang hiện tại trên url
    //thông qua một biến đặt là page
    function findStart($limit){
        if(!isset($_GET['page']) || $_GET['page'] == 1) {
            $start = 0;
        }else {
            $start = ($_GET['page'] - 1) * $limit;
        }
        return $start;
    }
}