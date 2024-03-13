<?php
$hh = new hanghoa();
$id = isset($_GET['id']) ? $_GET['id'] : 1;
$sanpham = $hh->getHangHoaId($id);
?>
<main class="main">
    <nav aria-label="breadcrumb" class="breadcrumb-nav border-0 mb-0">
        <div class="container d-flex align-items-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Products</a></li>
            </ol>

            <nav class="product-pager ml-auto" aria-label="Product">
                <a class="product-pager-link product-pager-prev" href="#" aria-label="Previous" tabindex="-1">
                    <i class="icon-angle-left"></i>
                    <span>Prev</span>
                </a>

                <a class="product-pager-link product-pager-next" href="#" aria-label="Next" tabindex="-1">
                    <span>Next</span>
                    <i class="icon-angle-right"></i>
                </a>
            </nav><!-- End .pager-nav -->
        </div><!-- End .container -->
    </nav><!-- End .breadcrumb-nav -->

    <div class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="product-details-top">
                        <form action="index.php?action=giohang&act=giohang_action" method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="product-gallery">
                                        <figure class="product-main-image">
                                            <?php
                                            $hinh = $hh->getHangHoaHinh($id);
                                            $set = $hinh->fetch();
                                            ?>
                                            <span class="product-label label-top">Top</span>
                                            <img id="product-zoom" src="Content/images/products/phone/<?php echo $set['hinh']; ?>" data-bs-zoom-image="Content/images/products/phone/<?php echo $set['hinh']; ?>" alt="product image">

                                            <a href="#" id="btn-product-gallery" class="btn-product-gallery">
                                                <i class="icon-arrows"></i>
                                            </a>
                                        </figure><!-- End .product-main-image -->


                                        <div id="product-zoom-gallery" class="product-image-gallery">
                                            <?php
                                            while ($img = $hinh->fetch()) :
                                            ?>
                                                <a class="product-gallery-item active" href="Content/images/products/phone/<?php echo $img['hinh']; ?>" data-image="Content/images/products/phone/<?php echo $img['hinh']; ?>" data-zoom-image="Content/images/products/phone/<?php echo $img['hinh']; ?>">
                                                    <img src="Content/images/products/phone/<?php echo $img['hinh']; ?>" alt="product side">
                                                </a>
                                            <?php endwhile; ?>
                                        </div><!-- End .product-image-gallery -->

                                    </div><!-- End .product-gallery -->
                                </div><!-- End .col-md-6 -->

                                <div class="col-md-6">
                                    <div class="product-details product-details-sidebar">
                                        <input type="hidden" name="mahh" id="mahh" value="<?php echo $sanpham['mahh']; ?>">
                                        <h1 class="product-title"><?php echo $sanpham['tenhh']; ?></h1><!-- End .product-title -->

                                        <div class="ratings-container">
                                            <div class="ratings">
                                                <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                                            </div><!-- End .ratings -->
                                            <a class="ratings-text" href="#product-review-link" id="review-link">( 2 Reviews )</a>
                                        </div><!-- End .rating-container -->

                                        <div class="product-price">
                                            <?php echo number_format($sanpham['dongia']); ?> VND
                                            <?php if ($sanpham['giamgia'] > 0) : ?>
                                                <span class="old-price"><s><?php echo number_format($sanpham['giamgia']); ?> VND</s></span>
                                            <?php endif; ?>
                                        </div><!-- End .product-price -->

                                        <div class="product-content">
                                            <p><?php echo $sanpham['mota']; ?></p>
                                        </div><!-- End .product-content -->

                                        <div class="product-details-action">
                                            <div class="details-action-col">
                                                <label for="qty">Qty:</label>
                                                <div class="product-details-quantity">
                                                    <input type="number" id="soluong" name="soluong" class="form-control" value="1" min="1" max="10" step="1" data-decimals="0" required>
                                                </div><!-- End .product-details-quantity -->

                                                <button type="submit" class="btn-product btn-cart">add to cart</button>
                                            </div><!-- End .details-action-col -->

                                            <div class="details-action-wrapper">
                                                <a href="#" class="btn-product btn-wishlist" title="Wishlist"><span>Add to Wishlist</span></a>
                                                <a href="#" class="btn-product btn-compare" title="Compare"><span>Add to Compare</span></a>
                                            </div><!-- End .details-action-wrapper -->
                                        </div><!-- End .product-details-action -->

                                        <div class="product-details-footer details-footer-col">
                                            <div class="product-cat">
                                                <span>Category:</span>
                                                <a href="#">Women</a>,
                                                <a href="#">Dresses</a>,
                                                <a href="#">Yellow</a>
                                            </div><!-- End .product-cat -->

                                            <div class="social-icons social-icons-sm">
                                                <span class="social-label">Share:</span>
                                                <a href="#" class="social-icon" title="Facebook" target="_blank"><i class="icon-facebook-f"></i></a>
                                                <a href="#" class="social-icon" title="Twitter" target="_blank"><i class="icon-twitter"></i></a>
                                                <a href="#" class="social-icon" title="Instagram" target="_blank"><i class="icon-instagram"></i></a>
                                                <a href="#" class="social-icon" title="Pinterest" target="_blank"><i class="icon-pinterest"></i></a>
                                            </div>
                                        </div><!-- End .product-details-footer -->
                                    </div><!-- End .product-details -->
                                </div><!-- End .col-md-6 -->
                            </div><!-- End .row -->
                        </form>
                    </div><!-- End .product-details-top -->

                    <div class="product-details-tab">
                        <ul class="nav nav-pills justify-content-center" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="product-desc-link" data-toggle="tab" href="#product-desc-tab" role="tab" aria-controls="product-desc-tab" aria-selected="true">Description</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="product-info-link" data-toggle="tab" href="#product-info-tab" role="tab" aria-controls="product-info-tab" aria-selected="false">Additional information</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="product-shipping-link" data-toggle="tab" href="#product-shipping-tab" role="tab" aria-controls="product-shipping-tab" aria-selected="false">Shipping & Returns</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="product-review-link" data-toggle="tab" href="#product-review-tab" role="tab" aria-controls="product-review-tab" aria-selected="false">Reviews (2)</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="product-desc-tab" role="tabpanel" aria-labelledby="product-desc-link">
                                <div class="product-desc-content">
                                    <h3>Product Information</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus. </p>
                                    <ul>
                                        <li>Nunc nec porttitor turpis. In eu risus enim. In vitae mollis elit. </li>
                                        <li>Vivamus finibus vel mauris ut vehicula.</li>
                                        <li>Nullam a magna porttitor, dictum risus nec, faucibus sapien.</li>
                                    </ul>

                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus. </p>
                                </div><!-- End .product-desc-content -->
                            </div><!-- .End .tab-pane -->
                            <div class="tab-pane fade" id="product-info-tab" role="tabpanel" aria-labelledby="product-info-link">
                                <div class="product-desc-content">
                                    <h3>Information</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. </p>

                                    <h3>Fabric & care</h3>
                                    <ul>
                                        <li>Faux suede fabric</li>
                                        <li>Gold tone metal hoop handles.</li>
                                        <li>RI branding</li>
                                        <li>Snake print trim interior </li>
                                        <li>Adjustable cross body strap</li>
                                        <li> Height: 31cm; Width: 32cm; Depth: 12cm; Handle Drop: 61cm</li>
                                    </ul>

                                    <h3>Size</h3>
                                    <p>one size</p>
                                </div><!-- End .product-desc-content -->
                            </div><!-- .End .tab-pane -->
                            <div class="tab-pane fade" id="product-shipping-tab" role="tabpanel" aria-labelledby="product-shipping-link">
                                <div class="product-desc-content">
                                    <h3>Delivery & returns</h3>
                                    <p>We deliver to over 100 countries around the world. For full details of the delivery options we offer, please view our <a href="#">Delivery information</a><br>
                                        We hope you’ll love every purchase, but if you ever need to return an item you can do so within a month of receipt. For full details of how to make a return, please view our <a href="#">Returns information</a></p>
                                </div><!-- End .product-desc-content -->
                            </div><!-- .End .tab-pane -->
                            <div class="tab-pane fade" id="product-review-tab" role="tabpanel" aria-labelledby="product-review-link">
                                <div class="reviews">
                                    <form action="index.php?action=binhluan" method="post">
                                        <?php
                                            if(isset($_SESSION['makh'])):
                                        ?>
                                        <input type="hidden" name="txtmahh" value="<?php echo $id ?>" />
                                        <h3>Reviews</h3>
                                        <textarea class="input-field" type="text" name="comment" rows="3" cols="110" id="comment" placeholder="Thêm bình luận">  </textarea>
                                        <input type="submit" name="submit" id="" value="comment"><br><br>
                                        <div class="review">
                                            <?php
                                                $bl=new binhluan();
                                                $noidung=$bl->selectComment($id);
                                                while($set=$noidung->fetch()):
                                            ?>
                                            <div class="row no-gutters">
                                                <div class="col-auto">
                                                    <h4><a href="#"><?php echo $set['username']; ?></a></h4>
                                                    <div class="ratings-container">
                                                        <div class="ratings">
                                                            <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                                                        </div><!-- End .ratings -->
                                                    </div><!-- End .rating-container -->
                                                    <span class="review-date">6 days ago</span>
                                                </div><!-- End .col -->
                                                <div class="col">
                                                    <h4><?php echo $set['content']; ?></h4>

                                                    <div class="review-action">
                                                        <a href="#"><i class="icon-thumbs-up"></i>Helpful (2)</a>
                                                        <a href="#"><i class="icon-thumbs-down"></i>Unhelpful (0)</a>
                                                    </div><!-- End .review-action -->
                                                </div><!-- End .col-auto -->
                                            </div><!-- End .row -->
                                            <?php
                                                endwhile;
                                            ?>
                                        </div><!-- End .review -->
                                        <?php
                                            endif;
                                        ?>
                                    </form>
                                </div><!-- End .reviews -->
                            </div><!-- .End .tab-pane -->
                        </div><!-- End .tab-content -->
                    </div><!-- End .product-details-tab -->

                </div><!-- End .col-lg-9 -->

                <aside class="col-lg-3">
                    <div class="sidebar sidebar-product">
                        <div class="widget widget-products">
                            <h4 class="widget-title">Related Product</h4><!-- End .widget-title -->
                            <?php
                            $limit = 4;
                            $result = $hh->getHangHoaRelated();
                            while ($set = $result->fetch()) :
                            ?>
                                <div class="products">
                                    <div class="product product-sm">
                                        <figure class="product-media">
                                            <a href="index.php?action=sanpham&act=sanphamchitiet&id=<?php echo $set['mahh'] ?>">
                                                <img src="Content/images/products/phone/<?php echo $set['hinh']; ?>" alt="Product image" class="product-image">
                                            </a>
                                        </figure>

                                        <div class="product-body">
                                            <h5 class="product-title"><a href="index.php?action=sanpham&act=sanphamchitiet&id=<?php echo $set['mahh'] ?>"><?php echo $set['tenhh'] ?></a></h5><!-- End .product-title -->
                                            <div class="product-price">
                                                <span class="new-price"><?php echo number_format($set['dongia']); ?> VND</span>
                                                <?php if ($set['giamgia'] > 0) : ?>
                                                    <span class="old-price"><s><?php echo number_format($set['giamgia']); ?> VND</s></span>
                                                <?php endif; ?>
                                            </div><!-- End .product-price -->
                                        </div><!-- End .product-body -->
                                    </div><!-- End .product product-sm -->


                                </div><!-- End .products -->
                            <?php endwhile; ?>
                            <a href="category.html" class="btn btn-outline-dark-3"><span>View More Products</span><i class="icon-long-arrow-right"></i></a>
                        </div><!-- End .widget widget-products -->

                        <div class="widget widget-banner-sidebar">
                            <div class="banner-sidebar-title">ad box 280 x 280</div><!-- End .ad-title -->

                            <div class="banner-sidebar banner-overlay">
                                <a href="#">
                                    <img src="Content/images/blog/sidebar/banner.jpg" alt="banner">
                                </a>
                            </div><!-- End .banner-ad -->
                        </div><!-- End .widget -->
                    </div><!-- End .sidebar sidebar-product -->
                </aside><!-- End .col-lg-3 -->
            </div><!-- End .row -->

        </div><!-- End .container -->
    </div><!-- End .page-content -->
</main><!-- End .main -->