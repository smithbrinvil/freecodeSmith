<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include('include/main/cdn.php')  ?>
    <?php include('include/main/sc-cdn.php') ?>
    <?php include('include/global/link-css.php') ?>

</head>

<body>
    <div class="w-100">
        <div class="container mb-3" style="margin-top: 160px;">
            <div class="mt-3">
                  <span class="fs-4 fw-bold d-block mb-4">Cart</span>
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive mb-3">
                        <table class="table table-bordered align-middle">
                            <thead class="table-dark">
                                <tr>
                                    <th scope="col">Image</th>
                                    <th scope="col">Product</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Total</th>
                                    <th scope="col">Remove</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <a href="#" class="text-decoration-none">
                                            <img src="./assets/images/male-wear-white-short.jpg" width="43" alt="cart-image">
                                        </a>
                                    </td>
                                    <td><a href="#" class="text-decoration-none">dictum idrisus</a></td>
                                    <td><span class="fw-bold text-black-50">$165.00</span></td>
                                    <td><input type="number" class="form-control w-50" value="1" min="1"></td>
                                    <td>$165.00</td>
                                    <td>
                                        <a href="#" class="text-danger"><i class="bi bi-trash3 fs-5"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#" class="text-decoration-none">
                                            <img src="https://htmldemo.net/nevara/nevara/img/new-products/1_1.jpg" width="43" alt="cart-image">
                                        </a>
                                    </td>
                                    <td><a href="#" class="text-decoration-none">Carte Postal Clock</a></td>
                                    <td><span class="fw-bold text-black-50">$50.00</span></td>
                                    <td><input type="number" class="form-control w-50" value="1" min="1"></td>
                                    <td>$50.00</td>
                                    <td>
                                        <a href="#" class="text-danger"><i class="bi bi-trash3 fs-5"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="buttons-cart d-flex justify-content-between mb-5 mt-4">
                        <div class="styled-bt mt-2 text-end">
                            <span>
                                <a href=""> <button class="button_outline">Continue Shopping</button></a>
                            </span>
                        </div>
                        <div class="styled-bt mt-2 text-end">
                            <span>
                                <button class="button_outline d-flex align-items-center"><i class="bi bi-arrow-clockwise"></i> Update Cart</button>

                            </span>
                        </div>

                    </div>

                    <div class="row">

                        <div class="col-lg-12">
                            <div class="cart_total mb-3">
                                <span class="fs-4 fw-bold d-block mb-3">Cart Totals</span>
                                <span class="fs-14 cart-subtotal d-block">Subtotal : $215.00</span>
                                <span class="fs-4 fw-bold ordert-total d-block">Total : $215.00</span>
                                <div class="wc-proceed-to-checkout">
                                    <div class="styled-bt mt-5">
                                        <span>
                                            <button class="button_four d-flex align-items-center"><i class="bi bi-check-all"></i> Checkout</button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Cart Totals End -->
                    </div>
                </div>
            </div>
            </div>
          
        </div>

    </div>
    <script type="module" src="/assets/global/js/index.js"></script>
    <script src="./assets/js/product.js"></script>
</body>

</html>
