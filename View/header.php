<header class="header header-22">
    <div class="header-middle">
        <div class="container">
            <div class="header-left">
                <button class="mobile-menu-toggler">
                    <span class="sr-only">Toggle mobile menu</span>
                    <i class="icon-bars"></i>
                </button>

                <a href="index.html" class="logo">
                    <img src="Content/images/demos/demo-22/logo.png" alt="Molla Logo" width="130" height="30">
                </a>
            </div><!-- End .header-left -->

            <div class="header-center">
                <div class="header-search header-search-extended header-search-visible header-search-no-round">
                    <a href="#" class="search-toggle" role="button"><i class="icon-search"></i></a>
                    <form action="index.php?action=sanpham&act=timkiem" method="post">
                        <div class="header-search-wrapper search-wrapper-wide">
                            <label for="txtsearch" class="sr-only">Search</label>
                            <input type="search" class="form-control" name="txtsearch" id="txtsearch" placeholder="Search product ..." required>

                            <button class="btn btn-primary" type="submit"><i class="icon-search"></i></button>
                        </div><!-- End .header-search-wrapper -->
                    </form>
                </div><!-- End .header-search -->
            </div>

            <div class="header-right">
                <div class="dropdown compare-dropdown">
                    <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static" title="Compare Products" aria-label="Compare Products">
                        <i class="icon-random"></i>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right">
                        <ul class="compare-products">
                            <li class="compare-product">
                                <a href="#" class="btn-remove" title="Remove Product"><i class="icon-close"></i></a>
                                <h4 class="compare-product-title"><a href="product.html">Blue Night Dress</a></h4>
                            </li>
                            <li class="compare-product">
                                <a href="#" class="btn-remove" title="Remove Product"><i class="icon-close"></i></a>
                                <h4 class="compare-product-title"><a href="product.html">White Long Skirt</a></h4>
                            </li>
                        </ul>

                        <div class="compare-actions">
                            <a href="#" class="action-link">Clear All</a>
                            <a href="#" class="btn btn-outline-primary-2"><span>Compare</span><i class="icon-long-arrow-right"></i></a>
                        </div>
                    </div><!-- End .dropdown-menu -->
                </div>
                <a href="wishlist.html" class="wishlist-link">
                    <i class="icon-heart-o"></i>
                    <span class="wishlist-count">3</span>
                </a>
                <?php if (isset($_SESSION['cart_project']) && count($_SESSION['cart_project']) > 0) { ?>
                    <div class="dropdown cart-dropdown">
                        <a href="index.php?action=giohang" class="dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-bs-display="static">
                            <i class="icon-shopping-cart"></i>
                            <span class="cart-count"></span>
                        </a>
                        <?php
                        $j = 0;
                        foreach ($_SESSION['cart_project'] as $key => $cart) :
                            $j++;
                        ?>
                            <div class="dropdown-menu dropdown-menu-right">
                                <div class="dropdown-cart-products">
                                    <div class="product">
                                        <div class="product-cart-details">
                                            <h4 class="product-title">
                                                <a href="product.html"><?php echo $cart['tenhh']; ?></a>
                                            </h4>

                                            <span class="cart-product-info">
                                                <span class="cart-product-qty"><?php echo $cart['soluong']; ?></span>
                                                x <?php echo number_format($cart['dongia']); ?>
                                            </span>
                                        </div><!-- End .product-cart-details -->

                                        <figure class="product-image-container">
                                            <a href="product.html" class="product-image">
                                                <img src="Content/images/products/phone/<?php echo $cart['hinh']; ?>" alt="product">
                                            </a>
                                        </figure>
                                        <a href="index.php?action=giohang&act=giohang_xoa&id=<?php echo $key; ?>" class="btn-remove" title="Remove Product"><i class="icon-close"></i></a>
                                    </div><!-- End .product -->
                                </div><!-- End .cart-product -->

                                <div class="dropdown-cart-total">
                                    <span>Total</span>

                                    <span class="cart-total-price"><?php echo number_format($cart['thanhtien']); ?></span>
                                </div><!-- End .dropdown-cart-total -->

                                <div class="dropdown-cart-action">
                                    <a href="index.php?action=giohang" class="btn btn-primary">View Cart</a>
                                    <a href="checkout.html" class="btn btn-outline-primary-2"><span>Checkout</span><i class="icon-long-arrow-right"></i></a>
                                </div><!-- End .dropdown-cart-total -->
                            </div><!-- End .dropdown-menu -->
                        <?php
                        endforeach;
                        ?>
                    </div><!-- End .cart-dropdown -->
                <?php } ?>
            </div><!-- End .header-right -->
        </div><!-- End .container -->
    </div><!-- End .header-middle -->

    <div class="wrap-container sticky-header">
        <div class="header-bottom">
            <div class="container">
                <div class="header-left">
                    <div class="dropdown category-dropdown" data-visible="false">
                        <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" data-display="static" title="Browse Categories">
                            Browse Categories
                        </a>

                        <div class="dropdown-menu">
                            <nav class="side-nav">
                                <ul class="menu-vertical sf-arrows sf-js-enabled" style="touch-action: pan-y;">
                                    <li><a href="#"><i class="icon-laptop"></i>Electronics</a></li>
                                    <li><a href="#"><i class="icon-mobile-alt"></i>Smart Phones</a></li>
                                    <li><a href="#"><i class="icon-tv"></i>TV &amp; Audio</a></li>
                                    <li><a href="#"><i class="icon-couch"></i>Furniture</a></li>
                                    <li><a href="#"><i class="icon-concierge-bell"></i>Cooking</a></li>
                                    <li><a href="#"><i class="icon-tshirt"></i>Clothing</a></li>
                                    <li><a href="#"><i class="icon-blender"></i>Home Appliances</a></li>
                                    <li><a href="#"><i class="icon-heartbeat"></i>Healthy &amp; Beauty</a></li>
                                    
                                </ul><!-- End .menu-vertical -->
                            </nav><!-- End .side-nav -->
                        </div><!-- End .dropdown-menu -->
                    </div>
                </div>
                <div class="header-center">
                    <nav class="main-nav">
                        <ul class="menu sf-arrows">
                            <li class="megamenu-container">
                                <a href="index.php" class="">Home</a>
                            </li>
                            <li>
                                <a href="index.php?action=sanpham" class="">Product</a>
                            </li>
                            <li>
                                <a href="#" class="">Pages</a>
                            </li>
                            <li>
                                <a href="blog.html" class="">Blog</a>
                            </li>
                            <li>
                                <a href="elements-list.html" class="">Elements</a>
                            </li>
                        </ul><!-- End .menu -->
                    </nav><!-- End .main-nav -->
                </div><!-- End .header-left -->

                <div class="header-right">
                    <div class="header-text">
                        <ul class="top-menu top-link-menu">
                            <li>
                                <ul>
                                    <?php if (!isset($_SESSION['makh'])) { ?>

                                        <li><a href="index.php?action=login_registration"><i class="icon-user"></i>Login / Registration</a></li>
                                    <?php } else { ?>
                                        <li><a href="index.php"><?php echo $_SESSION['tenkh']; ?></a></li>
                                        <li><a href="index.php?action=login_registration&act=logout">Đăng Xuất</a></li>
                                    <?php } ?>


                                </ul>
                            </li>
                        </ul>
                    </div><!-- End .header-text -->
                </div><!-- End .header-right -->
            </div><!-- End .container -->
        </div><!-- End .header-bottom -->
    </div><!-- End .wrap-container -->
</header><!-- End .header -->