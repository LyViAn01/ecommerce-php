<main class="main">
    <div class="page-header text-center" style="background-image: url('assets/images/page-header-bg.jpg')">
        <div class="container">
            <h1 class="page-title">Billing</h1>
        </div><!-- End .container -->
    </div><!-- End .page-header -->
    <nav aria-label="breadcrumb" class="breadcrumb-nav">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Shop</a></li>
                <li class="breadcrumb-item active" aria-current="page">Bill</li>
            </ol>
        </div><!-- End .container -->
    </nav><!-- End .breadcrumb-nav -->
    <?php
    if (!$_SESSION['makh']) :
        echo '<script>alert("Bạn chưa đăng nhập");</script>';
        echo '<meta http-equiv="refresh" content=0;url=./index.php?action=login_registration>';
    ?>
    <?php
    else :
    ?>

        <div class="page-content">
            <div class="checkout">
                <div class="container">
                    <?php
                    if (isset($_SESSION['makh']) && isset($_SESSION['masohd'])) {
                        $hd = new hoadon();
                        $hduser = $hd->getHoaDonKH($_SESSION['masohd']);
                        $sohd = $hduser['masohd'];
                        $tenkh = $hduser['tenkh'];
                        $ngay = $hduser['ngaydat'];
                        $dc = $hduser['diachi'];
                        $sodt = $hduser['sodienthoai'];
                    ?>
                        <form action="#">
                            <div class="row">
                                <div class="col-lg-9">
                                    <h3 class="summary-title">Billing Details</h3><!-- End .summary-title -->

                                    <table class="table table-cart table-mobile">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Image</th>
                                                <th>Product</th>
                                                <th>Price</th>
                                                <th>Quantity</th>
                                                <th>Total</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <?php
                                            $j = 0;
                                            foreach ($_SESSION['cart_project'] as $key => $cart) :
                                                $j++;
                                            ?>
                                                    <tr>
                                                        <td class="id-col"><?php echo $j; ?></td>
                                                        <td class="product-col">
                                                            <figure class="product-media">
                                                                <img src="Content/images/products/phone/<?php echo $cart['hinh']; ?>" alt="Product image">
                                                            </figure>
                                                        </td>
                                                        <td class="product-title"><?php echo $cart['tenhh']; ?></td>
                                                        <td class="price-col"><?php echo number_format($cart['dongia']); ?></td>
                                                        <td class="quantity-col"><?php echo $cart['soluong']; ?></td>
                                                        <td class="total-col"><?php echo number_format($cart['thanhtien']); ?></td>
                                                    </tr>
                                            <?php
                                                endforeach;                          
                                            ?>
    <tr>
        <td colspan="5"><b>SubTotal</b></td>
        <td class="subtotal-col">
            <?php
                $gh=new giohang();
                echo $gh->SubTotal();
            ?>
        </td>
    </tr>
                                        </tbody>
                                    </table><!-- End .table table-wishlist -->

                                </div><!-- End .col-lg-9 -->
                                <aside class="col-lg-3">
                                    <div class="summary">
                                        <label>Bill Id</label>
                                        <input type="text" class="form-control" value="<?php echo $sohd; ?>" readonly>

                                        <label>Name</label>
                                        <input type="text" class="form-control" value="<?php echo $tenkh; ?>" readonly>

                                        <label>Address</label>
                                        <input type="text" class="form-control" value="<?php echo $dc; ?>" readonly>

                                        <div class="row">
                                            <div class="col-sm-6">
                                                <label>Email address</label>
                                                <input type="email" class="form-control" value="<?php echo $tenkh; ?>" readonly>
                                            </div><!-- End .col-sm-6 -->

                                            <div class="col-sm-6">
                                                <label>Phone</label>
                                                <input type="tel" class="form-control" value="<?php echo $sodt; ?>" readonly>
                                            </div><!-- End .col-sm-6 -->
                                        </div><!-- End .row -->

                                        <label>Date</label>
                                        <input type="text" class="form-control" value="<?php echo $ngay; ?>" readonly>
                                    </div><!-- End .summary -->
                                </aside><!-- End .col-lg-3 -->
                            </div><!-- End .row -->
                        </form>
                    <?php } else {
                        echo 'ahihihi';
                    } ?>
                </div><!-- End .container -->
            </div><!-- End .checkout -->
        </div><!-- End .page-content -->
    <?php endif; ?>
</main><!-- End .main -->