<main class="main">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-12">
                <div class="intro-slider-container mt-2">
                    <div class="intro-slider owl-carousel owl-theme owl-nav-inside owl-light" data-toggle="owl" data-owl-options='{
                                    "dots": true,
                                    "nav": true, 
                                    "responsive": {
                                        "1200": {
                                            "nav": true,
                                            "dots": true
                                        }
                                    }
                                }'>
                        <div class="intro-slide banner-lg" style="background-image: url(Content/images/demos/demo-22/slider/slide-1.png);">
                            <div class="intro">
                                <div class="title">
                                    <a>deal of the day</a>
                                </div>
                                <div class="content">
                                    <h3><span>up to</span> 20% <span>off</span></h3>
                                    <h4>heavy duty deals</h4>
                                </div>
                                <div class="action">
                                    <a href="category.html">discover now</a>
                                </div>
                            </div>
                        </div><!-- End .intro-slide -->

                        <div class="intro-slide banner-lg" style="background-image: url(Content/images/demos/demo-22/slider/slide-2.png);">
                            <div class="intro">
                                <div class="title">
                                    <a>clearance</a>
                                </div>
                                <div class="content">
                                    <h3>power tools<br>up to <span>30% off</span></h3>
                                </div>
                                <div class="action">
                                    <a href="category.html">discover now</a>
                                </div>
                            </div>
                        </div><!-- End .intro-slide -->



                    </div><!-- End .intro-slider owl-carousel owl-simple -->

                    <span class="slider-loader"></span><!-- End .slider-loader -->
                </div><!-- End .intro-slider-container -->
            </div>
            <div class="col-lg-4 banner">
                <div class="col-12" style="background-image: url(Content/images/demos/demo-22/slider/banner-1.png)">
                    <div class="intro">
                        <div class="title">
                            <h3>New arrivals</h3>
                        </div>
                        <div class="content">
                            <h3>up to </h3>
                            <h3 class="highlight">&nbsp;40% off</h3>
                        </div>
                        <div class="action">
                            <a href="category.html">shop now</a>
                        </div>
                    </div>
                </div>
                <div class="col-12" style="background-image: url(Content/images/demos/demo-22/slider/banner-2.png);">
                    <div class="intro">
                        <div class="title">
                            <h2>outdoor</h2>
                        </div>
                        <div class="content">
                            <h4>power equipment</h4>
                        </div>
                        <div class="action">
                            <a href="category.html">shop now</a>
                        </div>
                    </div>
                </div>
                <div class="col-12" style="background-image: url(Content/images/demos/demo-22/slider/banner-3.png)">
                    <div class="intro">
                        <div class="title">
                            <h3 class="highlight">save 20%</h3>
                            <h3>&nbsp;or more</h3>
                        </div>
                        <div class="content">
                            <h3>deals & savings</h3>
                        </div>
                        <div class="action">
                            <a href="category.html">shop now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container text-center shop">
        <h2 class="title mt-4 mb-5"> Shop by Brands </h2>
        <div class="owl-carousel mb-5 owl-simple" data-toggle="owl" data-owl-options='{
                        "nav": true, 
                        "dots": false,
                        "margin": 30,
                        "loop": false,
                        "responsive": {
                            "0": {
                                "items":2
                            },
                            "420": {
                                "items":3
                            },
                            "600": {
                                "items":4
                            },
                            "900": {
                                "items":5
                            },
                            "1024": {
                                "items":6
                            }
                        }
                    }'>
            <a href="#" class="brand">
                <img src="Content/images/brands/1.png" alt="Brand Name">
            </a>

            <a href="#" class="brand">
                <img src="Content/images/brands/2.png" alt="Brand Name">
            </a>

            <a href="#" class="brand">
                <img src="Content/images/brands/3.png" alt="Brand Name">
            </a>

            <a href="#" class="brand">
                <img src="Content/images/brands/4.png" alt="Brand Name">
            </a>

            <a href="#" class="brand">
                <img src="Content/images/brands/5.png" alt="Brand Name">
            </a>

            <a href="#" class="brand">
                <img src="Content/images/brands/6.png" alt="Brand Name">
            </a>

            <a href="#" class="brand">
                <img src="Content/images/brands/7.png" alt="Brand Name">
            </a>
        </div><!-- End .owl-carousel -->
    </div><!-- End .container -->

    <div class="featured-back" style="background-image: url(Content/images/demos/demo-22/featured/background.jpg);">
        <div class="container">
            <div class="section-title">
                <ul class="nav nav-pills nav-border-anim" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="tab-featured-link" data-toggle="tab" href="#tab-featured" role="tab" aria-controls="tab-featured" aria-selected="true"><span>Featured</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="tab-best-link" data-toggle="tab" href="#tab-best" role="tab" aria-controls="tab-best" aria-selected="false"><span>Bestsellers</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="tab-sale-link" data-toggle="tab" href="#tab-sale" role="tab" aria-controls="tab-sale" aria-selected="false"><span>Sale</span></a>
                    </li>
                </ul>


                <a class="link" href="index.php?action=sanpham">All Products</a>
            </div>

            <div class="row">
                <?php
                $hh = new hanghoa();
                $result = $hh->getHangHoaOne();
                while ($set = $result->fetch()) :
                ?>
                    <div class="col-lg-4 col-md-4">


                        <div class="product-lg">
                            <figure class="product-media">
                                <span class="product-label label-limited">limited time sale</span>
                                <a href="index.php?action=sanpham&act=sanphamchitiet&id=<?php echo $set['mahh'] ?>">
                                    <img src="Content/images/products/phone/<?php echo $set['hinh']; ?>" alt="Product image" class="product-image">
                                </a>

                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <h3 class="save-price"><span>Save <?php echo number_format($set['dongia']-$set['giamgia']); ?> VND</span></h3>
                                <h3 class="product-title"><a href="index.php?action=sanpham&act=sanphamchitiet&id=<?php echo $set['mahh'] ?>"><?php echo $set['tenhh'] ?></a></h3><!-- End .product-title -->
                                <div class="product-price">
                                    <span class="new-price"><?php echo number_format($set['dongia']); ?> VND</span>
                                    <?php if ($set['giamgia'] > 0) : ?>
                                        <span class="old-price"><?php echo number_format($set['giamgia']); ?> VND</span>
                                    <?php endif; ?>
                                </div><!-- End .product-price -->
                                <div class="action">
                                    <a href="category.html">shop now</a>
                                </div>
                            </div><!-- End .product-body -->
                        </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->

                    </div><?php endwhile; ?>
                <div class="col-lg-8 col-md-8">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="tab-featured" role="tabpanel" aria-labelledby="tab-featured-link">
                            <div class="row products all">

                                <?php
                                $hh = new hanghoa();
                                $result = $hh->getHangHoaFeatured();
                                while ($set = $result->fetch()) :
                                ?>

                                    <div class="col-lg-4 col-6">
                                        <div class="product product-3 text-center">
                                            <figure class="product-media">
                                                <?php if ($set['giamgia'] > 0) : ?>
                                                    <span class="product-label label-sale">Sale</span>
                                                <?php endif; ?>
                                                <a href="index.php?action=sanpham&act=sanphamchitiet&id=<?php echo $set['mahh'] ?>">
                                                    <img src="Content/images/products/phone/<?php echo $set['hinh']; ?>" alt="Product image" class="product-image">
                                                </a>

                                                <div class="product-action-vertical">
                                                    <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                                </div><!-- End .product-action-vertical -->
                                            </figure><!-- End .product-media -->

                                            <div class="product-body">
                                                <div class="product-cat">
                                                    <a href="#">Hand Tools</a>
                                                </div><!-- End .product-cat -->
                                                <h3 class="product-title"><a href="index.php?action=sanpham&act=sanphamchitiet&id=<?php echo $set['mahh'] ?>"><?php echo $set['tenhh'] ?></a></h3><!-- End .product-title -->
                                                <div class="product-price">
                                                    <span class="new-price"><?php echo number_format($set['dongia']); ?> VND</span>
                                                    <?php if ($set['giamgia'] > 0) : ?>
                                                        <span class="old-price"><?php echo number_format($set['giamgia']); ?> VND</span>
                                                    <?php endif; ?>
                                                </div><!-- End .product-price -->
                                            </div><!-- End .product-body -->

                                            <div class="product-footer">
                                                <div class="ratings-container">
                                                    <div class="ratings">
                                                        <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                                                    </div><!-- End .ratings -->
                                                    <span class="ratings-text">( 4 Reviews )</span>
                                                </div><!-- End .rating-container -->

                                                <div class="product-action">
                                                    <a href="index.php?action=giohang&act=giohang_action" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                                    <a href="popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
                                                </div><!-- End .product-action -->
                                            </div><!-- End .product-footer -->
                                        </div><!-- End .product -->
                                    </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->

                                <?php endwhile; ?>



                            </div><!-- End .row -->
                        </div><!-- .End .tab-pane -->
                        <div class="tab-pane fade" id="tab-best" role="tabpanel" aria-labelledby="tab-best-link">
                            <div class="row products">
                                <?php
                                $hh = new hanghoa();
                                $result = $hh->getHangHoaBestsellers();

                                while ($set = $result->fetch()) :
                                    
                                ?>

                                        <div class="col-lg-4 col-6">
                                            <div class="product product-3 text-center">
                                                <figure class="product-media">
                                                    <?php if ($set['giamgia'] > 0) : ?>
                                                        <span class="product-label label-sale">Sale</span>
                                                    <?php endif; ?>
                                                    <a href="index.php?action=sanpham&act=sanphamchitiet&id=<?php echo $set['mahh'] ?>">
                                                        <img src="Content/images/products/phone/<?php echo $set['hinh']; ?>" alt="Product image" class="product-image">
                                                    </a>

                                                    <div class="product-action-vertical">
                                                        <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                                    </div><!-- End .product-action-vertical -->
                                                </figure><!-- End .product-media -->

                                                <div class="product-body">
                                                    <div class="product-cat">
                                                        <a href="#" class="">Phone</a>
                                                    </div><!-- End .product-cat -->
                                                    <h3 class="product-title"><a href="index.php?action=sanpham&act=sanphamchitiet&id=<?php echo $set['mahh'] ?>"><?php echo $set['tenhh'] ?></a></h3><!-- End .product-title -->
                                                    <div class="product-price">
                                                        <span class="new-price"><?php echo number_format($set['dongia']); ?> VND</span>
                                                        <?php if ($set['giamgia'] > 0) : ?>
                                                            <span class="old-price"><?php echo number_format($set['giamgia']); ?> VND</span>
                                                        <?php endif; ?>
                                                    </div><!-- End .product-price -->
                                                </div><!-- End .product-body -->

                                                <div class="product-footer">
                                                    <!-- ... (rest of the code) ... -->
                                                </div><!-- End .product-footer -->
                                            </div><!-- End .product -->
                                        </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->

                                <?php
                                    
                                endwhile;
                                ?>

                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-sale" role="tabpanel" aria-labelledby="tab-sale-link">
                            <div class="row products">
                                <?php
                                $hh = new hanghoa();
                                $result = $hh->getHangHoaSale();
                                while ($set = $result->fetch()) :
                                ?>

                                    <div class="col-lg-4 col-6">
                                        <div class="product product-3 text-center">
                                            <figure class="product-media">
                                                <?php if ($set['giamgia'] > 0) : ?>
                                                    <span class="product-label label-sale">Sale</span>
                                                <?php endif; ?>
                                                <a href="index.php?action=sanpham&act=sanphamchitiet&id=<?php echo $set['mahh'] ?>">
                                                    <img src="Content/images/products/phone/<?php echo $set['hinh']; ?>" alt="Product image" class="product-image">
                                                </a>

                                                <div class="product-action-vertical">
                                                    <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                                </div><!-- End .product-action-vertical -->
                                            </figure><!-- End .product-media -->

                                            <div class="product-body">
                                                <div class="product-cat">
                                                    <a href="#">Hand Tools</a>
                                                </div><!-- End .product-cat -->
                                                <h3 class="product-title"><a href="index.php?action=sanpham&act=sanphamchitiet&id=<?php echo $set['mahh'] ?>"><?php echo $set['tenhh'] ?></a></h3><!-- End .product-title -->
                                                <div class="product-price">
                                                    <span class="new-price"><?php echo number_format($set['dongia']); ?> VND</span>
                                                    <?php if ($set['giamgia'] > 0) : ?>
                                                        <span class="old-price"><?php echo number_format($set['giamgia']); ?> VND</span>
                                                    <?php endif; ?>
                                                </div><!-- End .product-price -->
                                            </div><!-- End .product-body -->

                                            <div class="product-footer">
                                                <div class="ratings-container">
                                                    <div class="ratings">
                                                        <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                                                    </div><!-- End .ratings -->
                                                    <span class="ratings-text">( 4 Reviews )</span>
                                                </div><!-- End .rating-container -->

                                                <div class="product-action">
                                                    <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                                    <a href="popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
                                                </div><!-- End .product-action -->
                                            </div><!-- End .product-footer -->
                                        </div><!-- End .product -->
                                    </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->
                                <?php endwhile; ?>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

            <div class="mb-2"></div><!-- End .mb-6 -->
        </div><!-- End .container -->
    </div>

    <div class="newsletter" style="background-image: url(Content/images/demos/demo-22/newsLetter/background.jpg);">
        <div class="container">
            <div class="subscribe text-center">
                <div class="intro">
                    <h3 class="title">Subscribe for Our Newsletter</h3>
                    <h4 class="content">Learn about new offers and get more deals by joining our newsletter</h4>
                </div>
                <div class="subscribe action">
                    <form action="#">
                        <div class="input-group">
                            <input type="email" placeholder="Enter your Email Address" aria-label="Email Adress" required="">
                            <div class="input-group-append">
                                <button class="btn btn-subscribe" type="submit"><span>Subscribe now</span></button>
                            </div><!-- .End .input-group-append -->
                        </div><!-- .End .input-group -->
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="container banner-container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 banner-lg">
                <a href="category.html">
                    <img src="Content/images/demos/demo-22/banner/banner-1.png">
                </a>
                <div class="banner-content">
                    <div class="title">
                        <a href="category.html">save up to 30%</a>
                    </div>
                    <div class="content">
                        <a href="category.html">
                            <h3 class="highlight">Premium Brands</h3>
                            <h4>for the Toughest Jobs</h4>
                        </a>
                    </div>
                    <div class="action">
                        <a href="category.html">discover now</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-6 banner-lg">
                <a href="category.html">
                    <img src="Content/images/demos/demo-22/banner/banner-2.png">
                </a>
                <div class="banner-content">
                    <div class="title">
                        <a href="category.html">best sellers in tools</a>
                    </div>
                    <div class="content">
                        <a href="category.html">
                            <h3>Pro-level tools</h3>
                            <h4 class="highlight">Save on Bestsellers</h4>
                        </a>
                    </div>
                    <div class="action">
                        <a href="category.html">shop now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container service">
        <div class="row">
            <div class="col-sm-6 col-lg-3">
                <div class="icon-box icon-box-side">
                    <span class="icon-box-icon text-dark">
                        <i class="icon-rocket"></i>
                    </span>

                    <div class="icon-box-content">
                        <h3 class="icon-box-title">Free Shipping</h3><!-- End .icon-box-title -->
                        <p>Orders $50 or more</p>
                    </div><!-- End .icon-box-content -->
                </div><!-- End .icon-box -->
            </div><!-- End .col-sm-6 col-lg-4 -->

            <div class="col-sm-6 col-lg-3">
                <div class="icon-box icon-box-side">
                    <span class="icon-box-icon text-dark">
                        <i class="icon-rotate-left"></i>
                    </span>

                    <div class="icon-box-content">
                        <h3 class="icon-box-title">Free Returns</h3><!-- End .icon-box-title -->
                        <p>Within 30 days</p>
                    </div><!-- End .icon-box-content -->
                </div><!-- End .icon-box -->
            </div><!-- End .col-sm-6 col-lg-4 -->

            <div class="col-sm-6 col-lg-3">
                <div class="icon-box icon-box-side">
                    <span class="icon-box-icon text-dark">
                        <i class="icon-info-circle"></i>
                    </span>

                    <div class="icon-box-content">
                        <h3 class="icon-box-title">Get 20% Off 1 Item</h3><!-- End .icon-box-title -->
                        <p>When you sign up</p>
                    </div><!-- End .icon-box-content -->
                </div><!-- End .icon-box -->
            </div><!-- End .col-sm-6 col-lg-4 -->

            <div class="col-sm-6 col-lg-3">
                <div class="icon-box icon-box-side">
                    <span class="icon-box-icon text-dark">
                        <i class="icon-life-ring"></i>
                    </span>

                    <div class="icon-box-content">
                        <h3 class="icon-box-title">We Support</h3><!-- End .icon-box-title -->
                        <p>24/7 amazing services</p>
                    </div><!-- End .icon-box-content -->
                </div><!-- End .icon-box -->
            </div><!-- End .col-sm-6 col-lg-4 -->

        </div>
    </div>

    <div class="container popular">
        <hr class="mb-5">

        <div class="section-title">
            <div>
                <p class="title"><span>Popular Products</span></p>
            </div>

            <a class="link" href="index.php?action=sanpham">All Products</a>
        </div>

        <div class="row products">
            <?php
            $hh = new hanghoa();
            $result = $hh->getHangHoa();
            while ($set = $result->fetch()) :
            ?>
                <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                    <div class="product product-3 text-center">
                        <figure class="product-media">
                            <?php if ($set['giamgia'] > 0) : ?>
                                <span class="product-label label-sale">Sale</span>
                            <?php endif; ?>
                            <span class="product-label label-new">New</span>
                            <a href="index.php?action=sanpham&act=sanphamchitiet&id=<?php echo $set['mahh'] ?>">
                                <img src="Content/images/products/phone/<?php echo $set['hinh']; ?>" alt="Product image" class="product-image">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                            </div><!-- End .product-action-vertical -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <div class="product-cat">
                                <a href="#">phone</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="index.php?action=sanpham&act=sanphamchitiet&id=<?php echo $set['mahh'] ?>"><?php echo $set['tenhh'] ?></a></h3><!-- End .product-title -->
                            <div class="product-price">
                                <span class="new-price"><?php echo number_format($set['dongia']); ?> VND</span>
                                <?php if ($set['giamgia'] > 0) : ?>
                                    <span class="old-price"><?php echo number_format($set['giamgia']); ?> VND</span>
                                <?php endif; ?>
                            </div><!-- End .product-price -->
                        </div><!-- End .product-body -->

                        <div class="product-footer">
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 0%;"></div><!-- End .ratings-val -->
                                </div><!-- End .ratings -->
                                <span class="ratings-text">( 0 Reviews )</span>
                            </div><!-- End .rating-container -->

                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart" title="Add to cart"></a>
                                <a href="popup/quickView.html" class="btn-product btn-quickview" title="Quick view"></a>
                            </div><!-- End .product-action -->
                        </div><!-- End .product-footer -->
                    </div><!-- End .product -->
                </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->
            <?php endwhile; ?>
        </div><!-- End .row -->
    </div>




</main>