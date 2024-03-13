<main class="main">
	<div class="page-header text-center" style="background-image: url('Content/images/page-header-bg.jpg')">
		<div class="container">
			<h1 class="page-title">Shopping Cart</h1>
		</div><!-- End .container -->
	</div><!-- End .page-header -->
	<nav aria-label="breadcrumb" class="breadcrumb-nav">
		<div class="container">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="index.html">Home</a></li>
				<li class="breadcrumb-item active" aria-current="page">Shopping Cart</li>
			</ol>
		</div><!-- End .container -->
	</nav><!-- End .breadcrumb-nav -->
	<?php if (isset($_SESSION['cart_project']) && count($_SESSION['cart_project']) > 0) { ?>
		<div class="page-content">
			<div class="cart">
				<div class="container">
					<div class="row">
						<div class="col-lg-9">
							<form action="index.php?action=giohang&act=giohang_update" method="post">
								<table class="table table-cart table-mobile">
									<thead>
										<tr>
											<th>Product</th>
											<th>Price</th>
											<th>Quantity</th>
											<th>Total</th>
											<th></th>
										</tr>
									</thead>

									<tbody>
										<?php
										$j = 0;
										foreach ($_SESSION['cart_project'] as $key => $cart) :
											$j++;
										?>
											<tr>
												<td class="product-col">
													<div class="product">
														<figure class="product-media">
															<a href="#">
																<img src="Content/images/products/phone/<?php echo $cart['hinh']; ?>" alt="Product image">
															</a>
														</figure>

														<h3 class="product-title">
															<a href="#"><?php echo $cart['tenhh']; ?></a>
														</h3><!-- End .product-title -->
													</div><!-- End .product -->
												</td>
												<td class="price-col"><?php echo number_format($cart['dongia']); ?></td>
												<td class="quantity-col">
													<div class="cart-product-quantity">
														<input type="number" name="newqty[<?php echo $key; ?>]" class="form-control" value="<?php echo $cart['soluong']; ?>" min="1" max="10" step="1" data-decimals="0" required>
													</div><!-- End .cart-product-quantity -->
												</td>
												<td class="total-col"><?php echo number_format($cart['thanhtien']); ?></td>
												<td class="remove-col"><a href="index.php?action=giohang&act=giohang_xoa&id=<?php echo $key; ?>" class="btn-remove"><i class="icon-close"></i></a></td>
											</tr>
										<?php
										endforeach;
										?>

									</tbody>
								</table><!-- End .table table-wishlist -->
								<div class="pull-right">
									<button type="submit" class="btn btn-outline-dark-2"><span>UPDATE CART</span><i class="icon-refresh"></i></button>
								</div>
							</form>

						</div><!-- End .col-lg-9 -->

						<aside class="col-lg-3">
							<div class="summary summary-cart">
								<h3 class="summary-title">Cart Total</h3><!-- End .summary-title -->
									<table class="table table-summary">
										<tbody>
											<tr class="summary-subtotal">
												<td>Subtotal:</td>
												<td>
													<?php
													$gh = new giohang();
													echo $gh->subTotal();
													?><sup>VND</sup>
												</td>
											</tr><!-- End .summary-subtotal -->
											<tr class="summary-shipping">
												<td>Shipping:</td>
												<td>&nbsp;</td>
											</tr>

											<tr class="summary-shipping-row">
												<td>
													<div class="custom-control custom-radio">
														<input type="radio" id="free-shipping" name="free-shipping" class="custom-control-input">
														<label class="custom-control-label" for="free-shipping">Free Shipping</label>
													</div><!-- End .custom-control -->
												</td>
												<td>0.00<sup>VND</sup></td>
											</tr><!-- End .summary-shipping-row -->

											<tr class="summary-shipping-row">
												<td>
													<div class="custom-control custom-radio">
														<input type="radio" id="standart-shipping" name="standart-shipping" class="custom-control-input">
														<label class="custom-control-label" for="standart-shipping">Standart:</label>
													</div><!-- End .custom-control -->
												</td>
												<td>30,000.00<sup>VND</sup></td>
											</tr><!-- End .summary-shipping-row -->

											<tr class="summary-shipping-row">
												<td>
													<div class="custom-control custom-radio">
														<input type="radio" id="express-shipping" name="express-shipping" class="custom-control-input">
														<label class="custom-control-label" for="express-shipping">Express:</label>
													</div><!-- End .custom-control -->
												</td>
												<td>70,000.00<sup>VND</sup></td>
											</tr><!-- End .summary-shipping-row -->

											<tr class="summary-total">
												<td>Total:</td>
												<td><?php echo $gh->subTotal(); ?><sup>VND</sup></td>
											</tr><!-- End .summary-total -->
										</tbody>
									</table><!-- End .table table-summary -->
									<div class="accordion-summary" id="accordion-payment">
                                    <div class="card">
                                        <div class="card-header" id="heading-1">
                                            <h2 class="card-title">
                                                <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-1" aria-expanded="true" aria-controls="collapse-1">
                                                    Direct bank transfer
                                                </a>
                                            </h2>
                                        </div><!-- End .card-header -->
                                        <div id="collapse-1" class="collapse" aria-labelledby="heading-1" data-parent="#accordion-payment">
                                            <div class="card-body">
                                                Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order will not be shipped until the funds have cleared in our account.
                                            </div><!-- End .card-body -->
                                        </div><!-- End .collapse -->
                                    </div><!-- End .card -->

                                    <div class="card">
                                        <div class="card-header" id="heading-2">
                                            <h2 class="card-title">
                                                <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
                                                    Check payments
                                                </a>
                                            </h2>
                                        </div><!-- End .card-header -->
                                        <div id="collapse-2" class="collapse" aria-labelledby="heading-2" data-parent="#accordion-payment">
                                            <div class="card-body">
                                                Ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis.
                                            </div><!-- End .card-body -->
                                        </div><!-- End .collapse -->
                                    </div><!-- End .card -->

                                    <div class="card">
                                        <div class="card-header" id="heading-3">
                                            <h2 class="card-title">
                                                <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-3" aria-expanded="false" aria-controls="collapse-3">
                                                    Cash on delivery
                                                </a>
                                            </h2>
                                        </div><!-- End .card-header -->
                                        <div id="collapse-3" class="collapse" aria-labelledby="heading-3" data-parent="#accordion-payment">
                                            <div class="card-body">Quisque volutpat mattis eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros.
                                            </div><!-- End .card-body -->
                                        </div><!-- End .collapse -->
                                    </div><!-- End .card -->

                                    <div class="card">
                                        <div class="card-header" id="heading-4">
                                            <h2 class="card-title">
                                                <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-4" aria-expanded="false" aria-controls="collapse-4">
                                                    PayPal <small class="float-right paypal-link">What is PayPal?</small>
                                                </a>
                                            </h2>
                                        </div><!-- End .card-header -->
                                        <div id="collapse-4" class="collapse" aria-labelledby="heading-4" data-parent="#accordion-payment">
                                            <div class="card-body">
                                                Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum.
                                            </div><!-- End .card-body -->
                                        </div><!-- End .collapse -->
                                    </div><!-- End .card -->

                                    <div class="card">
                                        <div class="card-header" id="heading-5">
                                            <h2 class="card-title">
                                                <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-5" aria-expanded="false" aria-controls="collapse-5">
                                                    Credit Card (Stripe)
                                                    <img src="Content/images/payments-summary.png" alt="payments cards">
                                                </a>
                                            </h2>
                                        </div><!-- End .card-header -->
                                        <div id="collapse-5" class="collapse" aria-labelledby="heading-5" data-parent="#accordion-payment">
                                            <div class="card-body"> Donec nec justo eget felis facilisis fermentum.Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Lorem ipsum dolor sit ame.
                                            </div><!-- End .card-body -->
                                        </div><!-- End .collapse -->
                                    </div><!-- End .card -->
                                </div><!-- End .accordion -->
								<a href="index.php?action=thanhtoan" class="btn btn-outline-primary-2 btn-order btn-block">Place Order</a>
							</div><!-- End .summary -->

							<a href="category.html" class="btn btn-outline-dark-2 btn-block mb-3"><span>CONTINUE SHOPPING</span><i class="icon-refresh"></i></a>
						</aside><!-- End .col-lg-3 -->
					</div><!-- End .row -->
				</div><!-- End .container -->
			</div><!-- End .cart -->
		</div><!-- End .page-content -->
	<?php } else {
		echo '<script>alert("Giỏ hàng của bạn chưa có hàng")</script>';
		echo '<meta http-equiv="refresh" content="0;url=index.php?action=home"/>';
	} ?>
</main><!-- End .main -->