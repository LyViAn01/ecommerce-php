<?php 
class giohang {
    function addGioHang($mahh, $soluong) {
        // thiếu hình tên đơn giá thành tiền
        $sanpham = new hanghoa();
        $sp = $sanpham->getHangHoaId($mahh);
        $tenhh = $sp['tenhh'];
        $dongia = $sp['dongia'];
        //lấy hình dựa vào mã hàng màu sắc
        $hinh = $sanpham->getHangHoaHinhMau($mahh);
        $img = $hinh['hinh'];
        $total = $soluong * $dongia;
        $flag = false;

        foreach ($_SESSION['cart_project'] as $key => $item) {
            if ($item['mahh'] == $mahh) {
                $flag=true;
                $soluong += $_SESSION['cart_project'][$key]['soluong'];
                $this->updateHh($key, $soluong);// giohang::updateHh($key, $soluong);
            }
        }
        if ($flag == false) { 
            // tạo đối tượng
            $item = array(
                'mahh' => $mahh,
                'tenhh' => $tenhh,
                'soluong' => $soluong,
                'dongia' => $dongia,
                'thanhtien' => $total,
                'hinh' => $img,
            );

            //add đối tượng vào giỏ hàng a
            $_SESSION['cart_project'][] = $item;
        }
    }

    function updateHh($index, $soluong) {
        if ($soluong < 0) {
            unset($_SESSION['cart_project'][$index]);
        }else {
            $_SESSION['cart_project'][$index]['soluong'] = $soluong;
            $thanhtiennew = $_SESSION['cart_project'][$index]['soluong'] * $_SESSION['cart_project'][$index]['dongia'];
            $_SESSION['cart_project'][$index]['thanhtien'] = $thanhtiennew;
        }
    }

    function subTotal() {
        $subtotal = 0;
        foreach ($_SESSION['cart_project']as $item) {
            $subtotal += $item['thanhtien'];
        }
        $subtotal = number_format($subtotal, 2);
        return $subtotal;
    }
}