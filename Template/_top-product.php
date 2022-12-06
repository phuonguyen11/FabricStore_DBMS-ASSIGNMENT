<?php
    $type = array_map(function($pro){ return $pro['TID']; }, $product_shuffle);
    $unique = array_unique($type);
    sort($unique);
    shuffle($product_shuffle);
?>


<section id="top-product">
                <div class="container">
                    <h4 class ="font-rale font-size-16">Sản Phẩm Đáng Chú Ý</h4>
                    <div id ="filters" class="button-group text-right">
                        <button class="btn is-checked" data-filter="*">Tất Cả Loại Hàng</button>
                        <?php
                array_map(function ($type){
                    printf('<button class="btn" data-filter=".%s">%s</button>', $type, $type);
                }, $unique);
            ?>
            </div>

            <div class="grid">

            <?php array_map(function ($item) { ?>

            <div class="grid-item border <?php echo  $item['TID'] ?? "Loại Hàng" ; ?>">
                <div class="item py-2" style="width: 200px;">
                    <div class="product font-alex">
                        <a href="<?php printf('%s?TID=%s', 'product.php',  $item['TID']); ?>"><img src="<?php echo $item['image'] ?? "./assets/products/13.png"; ?>" alt="product1" class="img-fluid"></a>
                        <div class="text-center">
                            <h6><?php echo $item['Name'] ?? "Unknown"; ?></h6>
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>

                            <div class="price py-2">
                                <span><?php echo $item['price'] ?? 0 ?></span>VND
                            </div>
                            <button type="submit" class ="btn btn-dark font-size-12">Thêm vào giỏ hàng</button>

                        </div>
                    </div>

                </div>
            </div>
            <?php }, $product_shuffle) ?>
        </div>
    </div>
</section>
