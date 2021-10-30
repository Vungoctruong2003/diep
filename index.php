<!doctype html>
<html lang="en">
<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0; user-scalable=0;">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>

    </style>
</head>
<body>
<?php
include_once "navbar.php";
include_once "slide.php";
?>


    <?php
    $products = [
        ['product_image' => 'https://product.hstatic.net/1000093072/product/artboard_16ads_pn2332_9b50511f4c6f406b9db85b5d56b3b81b_medium.jpg',
            'product_name' => 'LẨU CÁ KÈO LÁ GIANG 16',
            'product_price' => 380000],
        ['product_image' => 'https://product.hstatic.net/1000093072/product/z2459746308478_b9999c19a1e4b37ebd3459d81580620e_7905ade681b843efba132b467364a464_medium.jpg',
            'product_name' => 'ẾCH ĐỒNG RANG MUỐI',
            'product_price' => 480000],
        ['product_image' => 'https://product.hstatic.net/1000093072/product/artboard_26ads_pn_-_copy_6b32848764584b09b97880ac8da18a64_medium.jpg',
            'product_name' => 'Bánh tráng phơi sương cuốn rau rừng thịt ba chỉ quay',
            'product_price' => 185000],
        ['product_image' => 'https://product.hstatic.net/1000093072/product/nem-nuong-lui1_2fe9cc69ab5648c2bc71da9815b381fd_large.jpg',
            'product_name' => 'Nem nướng cuốn bánh hỏi',
            'product_price' => 145000],
        ['product_image' => 'https://product.hstatic.net/1000093072/product/2__1__ad1c7d60f1e24df58a85ee2684418af7_large.png',
            'product_name' => 'Mắm kho quẹt',
            'product_price' => 100000]
    ];
    ?>
    <div class="product mr-auto mt-2 mt-lg-0"  id="column">
        <div class="row mt-3 ml-5 mr-5">
            <?php foreach ($products as $product) : ?>
                <div class="col-3 mt-4 pr-2 pl-2">
                    <div class="" style="width: 15rem;">
                        <img  src=" <?php echo $product["product_image"] ?>" class="rounded mx-auto d-block"
                             alt="..." width="250" height="250" style="min-width: 100%" >
                        <div class="">
                            <h6 class="card-title"><?php echo $product["product_name"] ?> </h6>
                            <p class="card-text"> <?php echo number_format($product["product_price"]) ?> VND</p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

<?php
include_once 'footer.php';
?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>
</html>