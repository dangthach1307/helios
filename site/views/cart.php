<!-- Breadcrumbs -->
<div class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <ul>
                    <li class="home"> <a href="index.php" title="Go to Home Page">Home</a> <span>/</span></li>
                    <li> <strong>Giỏ hàng </strong> </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumbs End -->

<section class="main-container col1-layout">
    <div class="main container">
        <div class="row">
            <div class="col-sm-12 col-xs-12">
                <div class="product-area">
                    <div class="title-tab-product-category">
                        <div class="text-center">
                            <ul class="nav jtv-heading-style" role="tablist">
                                <li role="presentation" class="active"><a href="#cart" aria-controls="cart" role="tab" data-toggle="tab">Shopping cart</a></li>
                                <li role="presentation" class=""><a href="#checkout" aria-controls="checkout" role="tab" data-toggle="tab">Checkout</a></li>
                                <!-- <li role="presentation" class=""><a href="#complete-order" aria-controls="complete-order" role="tab" data-toggle="tab">3 Complete Order</a></li> -->
                            </ul>
                        </div>
                    </div>
                    <div class="content-tab-product-category">
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="cart">
                                <!-- cart are start-->
                                <form action="index.php?option=cart&act=cart-update" method="post">
                                    <div class="cart-page-area">
                                        <?php if ($list != NULL) : ?>
                                            <div class="table-responsive">
                                                <table class="shop-cart-table">
                                                    <thead>
                                                        <tr>
                                                            <th class="product-thumbnail">Hình ảnh</th>
                                                            <th class="product-name ">Thông tin sản phẩm</th>
                                                            <th class="product-price ">Giá tiền</th>
                                                            <th class="product-quantity">Số lượng</th>
                                                            <th class="product-subtotal ">Tổng tiền</th>
                                                            <th class="product-remove">Xoá</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php $total = 0; ?>
                                                        <?php foreach ($list as $item_cart) : ?>
                                                            <?php
                                                            $sub_total = $item_cart['qty'] * $item_cart['price'];
                                                            $total += $sub_total;
                                                            ?>
                                                            <tr class="cart_item">
                                                                <input type="hidden" name="pid[]" value="<?= $item_cart['id'] ?>">
                                                                <td class="item-img">
                                                                    <a href="?option=page&act=product-detail&id=<?= $item_cart['slug'] ?>">
                                                                        <img src="../public/images/product/<?= $item_cart['img'] ?>" alt="<?= $item_cart['name'] ?>">
                                                                    </a>
                                                                </td>
                                                                <td class="item-title">
                                                                    <a href="?option=page&act=product-detail&id=<?= $item_cart['slug'] ?>">
                                                                        <?= $item_cart['name'] ?>
                                                                    </a> <br>
                                                                    <?php if ($item_cart['material'] !== null) : ?>
                                                                        Chất liệu: <?= $item_cart['material'] ?><br>
                                                                    <?php endif; ?>
                                                                    <?php if ($item_cart['size'] !== null) : ?>
                                                                        Kích cỡ: <?= $item_cart['size'] ?><br>
                                                                    <?php endif; ?>
                                                                </td>
                                                                <td class="item-price">
                                                                    <?= number_format($item_cart['price']) ?>
                                                                </td>
                                                                <td class="item-qty">
                                                                    <div class="cart-quantity">
                                                                        <div class="product-qty">
                                                                            <div class="cart-quantity">
                                                                                <div class="cart-plus-minus">
                                                                                    <button onClick="var result = document.getElementById('qty<?= $item_cart['id'] ?>'); var qty = parseInt(result.value); if (!isNaN(qty) && qty > 1) result.value = qty - 1;" class="dec qtybutton" type="button">
                                                                                        <i class="fa fa-minus">&nbsp;</i>
                                                                                    </button>
                                                                                    <input type="text" class="cart-plus-minus-box" title="Qty" value="<?= $item_cart['qty'] ?>" maxlength="12" id="qty<?= $item_cart['id'] ?>" name="qty[]" readonly>
                                                                                    <button onClick="var result = document.getElementById('qty<?= $item_cart['id'] ?>'); var qty = parseInt(result.value); if (!isNaN(qty)) result.value = qty + 1;" class="inc qtybutton" type="button">
                                                                                        <i class="fa fa-plus">&nbsp;</i>
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="total-price">
                                                                    <strong>
                                                                        <?php echo number_format($sub_total); ?>
                                                                    </strong>
                                                                </td>
                                                                <td class="remove-item">
                                                                    <a href="index.php?option=cart&act=cart-delete&pid=<?= $item_cart['id'] ?>">
                                                                        <i class="fa fa-trash-o"></i>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                        <?php endforeach; ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="cart-bottom-area">
                                                <div class="row">
                                                    <div class="col-md-8 col-sm-7 col-xs-12">
                                                        <div class="update-coupne-area">
                                                            <div class="update-continue-btn text-right">
                                                                <button class="button btn-default" title="Tiếp tục mua hàng" name="continue_shop_action">
                                                                    <span><a href="index.php?option=page&act=home">Tiếp tục mua hàng</a></span>
                                                                </button>
                                                                <button class="button btn-update" title="Cập nhật giỏ hàng" value="update_qty" name="update_cart_action" type="submit">
                                                                    <span>Cập nhật giỏ hàng</span>
                                                                </button>
                                                                <button class="button btn-empty" title="Xoá giỏ hàng" value="empty_cart" name="clear_cart_action">
                                                                    <span><a href="index.php?option=cart&act=cart-delete">Xoá giỏ hàng</a></span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 col-sm-5 col-xs-12">
                                                        <div class="cart-total-area">
                                                            <div class="catagory-title cat-tit-5 text-right">
                                                                <h3>Tổng tiền đơn hàng</h3>
                                                            </div>
                                                            <!-- <div class="sub-shipping">
                                                                <p>Subtotal <span><?= number_format($total) ?></span></p>
                                                                <p>Shipping <span>20,000</span></p>
                                                            </div> -->
                                                            <!-- <div class="shipping-method text-right">
                                                                <div class="shipp">
                                                                    <input type="radio" name="ship" id="pay-toggle1">
                                                                    <label for="pay-toggle1">Flat Rate</label>
                                                                </div>
                                                                <div class="shipp">
                                                                    <input type="radio" name="ship" id="pay-toggle3">
                                                                    <label for="pay-toggle3">Direct Bank Transfer</label>
                                                                </div>
                                                                <p><a href="#">Calculate Shipping</a></p>
                                                            </div> -->
                                                            <div class="process-cart-total">
                                                                <p>Total <span><?= number_format($total) ?> Vnđ</span></p>
                                                            </div>
                                                            <div class="process-checkout-btn text-right">
                                                                <button class="button btn-proceed-checkout" title="Proceed to Checkout" type="button" onclick="document.querySelector('a[href=\'#checkout\']').click();"><span>Proceed to Checkout</span></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php else : ?>
                                            <h4>
                                                Chưa có sản phẩm trong giỏ hàng. Quay lại mua hàng nhé!
                                            </h4>
                                        <?php endif; ?>
                                    </div>
                                </form>
                                <!-- cart are end-->
                            </div>
                            <?php if ($list != NULL) : ?>
                                <div role="tabpanel" class="tab-pane  fade in " id="checkout">
                                    <!-- Checkout are start-->
                                    <div class="checkout-area">
                                        <div class="">
                                            <div class="row">
                                                <div class="col-md-7 col-sm-12 col-xs-12">
                                                    <div class="coupne-customer-area mb50">
                                                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                                            <!-- <div class="panel panel-checkout">
                                                                <div class="panel-heading" role="tab" id="headingThree">
                                                                    <h4 class="panel-title"> <img src="images/acc.jpg" alt=""> Have A Coupon? <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree"> Click here to enter your code </a> </h4>
                                                                </div>
                                                                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                                                    <div class="panel-body coupon-body">
                                                                        <div class="first-last-area">
                                                                            <div class="input-box">
                                                                                <input type="text" placeholder="Coupon Code" class="info" name="code">
                                                                            </div>
                                                                            <div class="frm-action">
                                                                                <div class="input-box tci-box"> <a href="#" class="btn-def btn2">Apply Coupon</a> </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div> -->
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12 col-xs-12">
                                                            <div class="billing-details">
                                                                <div class="contact-text right-side">
                                                                    <h2>Billing Details</h2>
                                                                    <form action="#">
                                                                        <div class="row">
                                                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                                                <div class="input-box">
                                                                                    <label>Full Name <em>*</em></label>
                                                                                    <input type="text" name="fullname" class="info" placeholder="First Name">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                                                <div class="input-box">
                                                                                    <label>Email Address<em>*</em></label>
                                                                                    <input type="email" name="email" class="info" placeholder="Your Email">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                                                <div class="input-box">
                                                                                    <label>Phone Number<em>*</em></label>
                                                                                    <input type="text" name="phone" class="info" placeholder="Phone Number">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                <div class="input-box">
                                                                                    <label>Address <em>*</em></label>
                                                                                    <input type="text" name="Address" class="info mb-10" placeholder="Your Address">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- <div class="col-md-6 col-xs-12">
                                                            <div class="billing-details">
                                                                <div class="right-side">
                                                                    <div class="ship-acc clearfix">
                                                                        <div class="ship-toggle">
                                                                            <input type="checkbox" id="ship-toggle">
                                                                            <label for="ship-toggle">Ship to a different address?</label>
                                                                        </div>
                                                                        <div class="ship-acc-body">
                                                                            <form action="#">
                                                                                <div class="row">
                                                                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                                                                        <div class="input-box">
                                                                                            <label>First Name <em>*</em></label>
                                                                                            <input type="text" name="namm" class="info" placeholder="First Name">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                                                                        <div class="input-box">
                                                                                            <label>Last Name<em>*</em></label>
                                                                                            <input type="text" name="namm" class="info" placeholder="Last Name">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                        <div class="input-box">
                                                                                            <label>Company Name</label>
                                                                                            <input type="text" name="cpany" class="info" placeholder="Company Name">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                                                                        <div class="input-box">
                                                                                            <label>Email Address<em>*</em></label>
                                                                                            <input type="email" name="email" class="info" placeholder="Your Email">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                                                                        <div class="input-box">
                                                                                            <label>Phone Number<em>*</em></label>
                                                                                            <input type="text" name="phone" class="info" placeholder="Phone Number">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                        <div class="input-box">
                                                                                            <label>Country <em>*</em></label>
                                                                                            <select class="selectpicker select-custom" data-live-search="true">
                                                                                                <option data-tokens="Bangladesh">Bangladesh</option>
                                                                                                <option data-tokens="India">India</option>
                                                                                                <option data-tokens="Pakistan">Pakistan</option>
                                                                                                <option data-tokens="Pakistan">Pakistan</option>
                                                                                                <option data-tokens="Srilanka">Srilanka</option>
                                                                                                <option data-tokens="Nepal">Nepal</option>
                                                                                                <option data-tokens="Butan">Butan</option>
                                                                                                <option data-tokens="USA">USA</option>
                                                                                                <option data-tokens="England">England</option>
                                                                                                <option data-tokens="Brazil">Brazil</option>
                                                                                                <option data-tokens="Canada">Canada</option>
                                                                                                <option data-tokens="China">China</option>
                                                                                                <option data-tokens="Koeria">Koeria</option>
                                                                                                <option data-tokens="Soudi">Soudi Arabia</option>
                                                                                                <option data-tokens="Spain">Spain</option>
                                                                                                <option data-tokens="France">France</option>
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                        <div class="input-box">
                                                                                            <label>Address <em>*</em></label>
                                                                                            <input type="text" name="add1" class="info mb-10" placeholder="Street Address">
                                                                                            <input type="text" name="add2" class="info mt10" placeholder="Apartment, suite, unit etc. (optional)">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                        <div class="input-box">
                                                                                            <label>Town/City <em>*</em></label>
                                                                                            <input type="text" name="add1" class="info" placeholder="Town/City">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                                                                        <div class="input-box">
                                                                                            <label>State/Divison <em>*</em></label>
                                                                                            <select class="selectpicker select-custom" data-live-search="true">
                                                                                                <option data-tokens="Barisal">Barisal</option>
                                                                                                <option data-tokens="Dhaka">Dhaka</option>
                                                                                                <option data-tokens="Kulna">Kulna</option>
                                                                                                <option data-tokens="Rajshahi">Rajshahi</option>
                                                                                                <option data-tokens="Sylet">Sylet</option>
                                                                                                <option data-tokens="Chittagong">Chittagong</option>
                                                                                                <option data-tokens="Rangpur">Rangpur</option>
                                                                                                <option data-tokens="Maymanshing">Maymanshing</option>
                                                                                                <option data-tokens="Cox">Cox's Bazar</option>
                                                                                                <option data-tokens="Saint">Saint Martin</option>
                                                                                                <option data-tokens="Kuakata">Kuakata</option>
                                                                                                <option data-tokens="Sajeq">Sajeq</option>
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                                                                        <div class="input-box">
                                                                                            <label>Post Code/Zip Code<em>*</em></label>
                                                                                            <input type="text" name="zipcode" class="info" placeholder="Zip Code">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form">
                                                                        <div class="input-box">
                                                                            <label>Order Notes</label>
                                                                            <textarea placeholder="Notes about your order, e.g. special notes for delivery." class="area-tex"></textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div> -->
                                                    </div>
                                                </div>
                                                <div class="col-md-5 col-sm-12 col-xs-12">
                                                    <div class="checkout-payment-area">
                                                        <div class="checkout-total">
                                                            <h3>Your order</h3>
                                                            <form action="#" method="post">
                                                                <div class="table-responsive">
                                                                    <table class="checkout-area table">
                                                                        <thead>
                                                                            <tr class="cart_item check-heading">
                                                                                <td class="ctg-type"> Product</td>
                                                                                <td class="cgt-des"> Total</td>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <?php foreach ($list as $item_cart) : ?>
                                                                                <?php
                                                                                // $sub_total = $item_cart['qty'] * $item_cart['price'];
                                                                                // $total += $sub_total;
                                                                                ?>
                                                                                <tr class="cart_item check-item prd-name">
                                                                                    <td class="ctg-type"> <?= $item_cart['name'] ?> × <span><?= $item_cart['qty'] ?></span></td>
                                                                                    <td class="cgt-des"> <?php echo number_format($item_cart['qty'] * $item_cart['price']); ?></td>
                                                                                </tr>
                                                                            <?php endforeach; ?>
                                                                            <!-- <tr class="cart_item">
                                                                    <td class="ctg-type"> Subtotal</td>
                                                                    <td class="cgt-des"><?php echo number_format($total); ?></td>
                                                                </tr> -->
                                                                            <!-- <tr class="cart_item">
                                                                    <td class="ctg-type">Shipping</td>
                                                                    <td class="cgt-des ship-opt">
                                                                        <div class="shipp">
                                                                            <input type="radio" id="pay-toggle" name="ship">
                                                                            <label for="pay-toggle">Flat Rate: <span>$05</span></label>
                                                                        </div>
                                                                        <div class="shipp">
                                                                            <input type="radio" id="pay-toggle2" name="ship">
                                                                            <label for="pay-toggle2">Free Shipping</label>
                                                                        </div>
                                                                    </td>
                                                                </tr> -->
                                                                            <tr class="cart_item">
                                                                                <td class="ctg-type crt-total"> Total</td>
                                                                                <td class="cgt-des prc-total"> <?php echo number_format($total); ?> Vnđ </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </form>
                                                        </div>
                                                        <div class="payment-section">
                                                            <div class="pay-toggle">
                                                                <form action="#">
                                                                    <!-- <div class="pay-type-total">
                                                            <div class="pay-type">
                                                                <input type="radio" id="pay-toggle01" name="pay">
                                                                <label for="pay-toggle01">Direct Bank Transfer</label>
                                                            </div>
                                                            <div class="pay-type">
                                                                <input type="radio" id="pay-toggle02" name="pay">
                                                                <label for="pay-toggle02">Cheque Payment</label>
                                                            </div>
                                                            <div class="pay-type">
                                                                <input type="radio" id="pay-toggle03" name="pay">
                                                                <label for="pay-toggle03">Cash on Delivery</label>
                                                            </div>
                                                            <div class="pay-type">
                                                                <input type="radio" id="pay-toggle04" name="pay">
                                                                <label for="pay-toggle04">Paypal</label>
                                                            </div>
                                                        </div> -->
                                                                    <div class="input-box"> <a class="btn-def btn2" href="#">Place order</a> </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Checkout are end-->
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- <div class="container">
    <div class="jtv-crosssel-pro">
        <div class="jtv-new-title">
            <h2>you may be interested</h2>
        </div>
        <div class="category-products">
            <ul class="products-grid">
                <li class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                    <div class="item-inner">
                        <div class="item-img">
                            <div class="item-img-info"><a class="product-image" title="Product tilte is here" href="#"> <img alt="Product tilte is here" src="images/products/product-fashion-1.jpg"> </a>
                                <div class="new-label new-top-left">new</div>
                                <div class="sale-label sale-top-right">sale</div>
                                <div class="mask-shop-white"></div>
                                <div class="new-label new-top-left">new</div>
                                <a class="quickview-btn" href="quick-view.html"><span>Quick View</span></a> <a href="wishlist.html">
                                    <div class="mask-left-shop"><i class="fa fa-heart"></i></div>
                                </a> <a href="compare.html">
                                    <div class="mask-right-shop"><i class="fa fa-signal"></i></div>
                                </a>
                            </div>
                        </div>
                        <div class="item-info">
                            <div class="info-inner">
                                <div class="item-title"> <a title="Product tilte is here" href="#">Product tilte is here </a> </div>
                                <div class="item-content">
                                    <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                    <div class="item-price">
                                        <div class="price-box"> <span class="regular-price"> <span class="price">$75.00</span></span></div>
                                    </div>
                                    <div class="actions"><a href="#" class="link-wishlist" title="Add to Wishlist"></a>
                                        <div class="add_cart">
                                            <button class="button btn-cart" type="button"><span>Add to Cart</span></button>
                                        </div>
                                        <a href="#" class="link-compare" title="Add to Compare"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                    <div class="item-inner">
                        <div class="item-img">
                            <div class="item-img-info"><a class="product-image" title="Product tilte is here" href="#"> <img alt="Product tilte is here" src="images/products/product-fashion-1.jpg"> </a>
                                <div class="mask-shop-white"></div>
                                <div class="new-label new-top-left">new</div>
                                <a class="quickview-btn" href="quick-view.html"><span>Quick View</span></a> <a href="wishlist.html">
                                    <div class="mask-left-shop"><i class="fa fa-heart"></i></div>
                                </a> <a href="compare.html">
                                    <div class="mask-right-shop"><i class="fa fa-signal"></i></div>
                                </a>
                            </div>
                        </div>
                        <div class="item-info">
                            <div class="info-inner">
                                <div class="item-title"> <a title="Product tilte is here" href="#">Product tilte is here </a> </div>
                                <div class="item-content">
                                    <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                    <div class="item-price">
                                        <div class="price-box"> <span class="regular-price"> <span class="price">$88.99</span></span></div>
                                    </div>
                                    <div class="actions"><a href="#" class="link-wishlist" title="Add to Wishlist"></a>
                                        <div class="add_cart">
                                            <button class="button btn-cart" type="button"><span>Add to Cart</span></button>
                                        </div>
                                        <a href="#" class="link-compare" title="Add to Compare"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                    <div class="item-inner">
                        <div class="item-img">
                            <div class="item-img-info"><a class="product-image" title="Product tilte is here" href="#"> <img alt="Product tilte is here" src="images/products/product-fashion-1.jpg"> </a>
                                <div class="mask-shop-white"></div>
                                <div class="new-label new-top-left">new</div>
                                <a class="quickview-btn" href="quick-view.html"><span>Quick View</span></a> <a href="wishlist.html">
                                    <div class="mask-left-shop"><i class="fa fa-heart"></i></div>
                                </a> <a href="compare.html">
                                    <div class="mask-right-shop"><i class="fa fa-signal"></i></div>
                                </a>
                            </div>
                        </div>
                        <div class="item-info">
                            <div class="info-inner">
                                <div class="item-title"> <a title="Product tilte is here" href="#">Product tilte is here </a> </div>
                                <div class="item-content">
                                    <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                    <div class="item-price">
                                        <div class="price-box"> <span class="regular-price"> <span class="price">$149.00</span></span></div>
                                    </div>
                                    <div class="actions"><a href="#" class="link-wishlist" title="Add to Wishlist"></a>
                                        <div class="add_cart">
                                            <button class="button btn-cart" type="button"><span>Add to Cart</span></button>
                                        </div>
                                        <a href="#" class="link-compare" title="Add to Compare"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                    <div class="item-inner">
                        <div class="item-img">
                            <div class="item-img-info"><a class="product-image" title="Product tilte is here" href="#"> <img alt="Product tilte is here" src="images/products/product-fashion-1.jpg"> </a>
                                <div class="sale-label sale-top-left">sale</div>
                                <div class="mask-shop-white"></div>
                                <div class="new-label new-top-left">new</div>
                                <a class="quickview-btn" href="quick-view.html"><span>Quick View</span></a> <a href="wishlist.html">
                                    <div class="mask-left-shop"><i class="fa fa-heart"></i></div>
                                </a> <a href="compare.html">
                                    <div class="mask-right-shop"><i class="fa fa-signal"></i></div>
                                </a>
                            </div>
                        </div>
                        <div class="item-info">
                            <div class="info-inner">
                                <div class="item-title"> <a title="Product tilte is here" href="#">Product tilte is here </a> </div>
                                <div class="item-content">
                                    <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                    <div class="item-price">
                                        <div class="price-box"> <span class="regular-price"> <span class="price">$139.55</span></span></div>
                                    </div>
                                    <div class="actions"><a href="#" class="link-wishlist" title="Add to Wishlist"></a>
                                        <div class="add_cart">
                                            <button class="button btn-cart" type="button"><span>Add to Cart</span></button>
                                        </div>
                                        <a href="#" class="link-compare" title="Add to Compare"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div> -->