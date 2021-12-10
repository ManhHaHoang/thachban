<?php
    $homeSliderList = [
        'gachlatnen800' => ['Gạch lát nền Thạch Bàn 600x600'],
        'gachlatnen600' => ['Gạch lát nền Thạch Bàn 600x600'],
        'gachlatnen300' => ['Gạch ốp lát Thạch Bàn 300x600'],
        'gachlatnen300600' => ['Gạch lát nền Thạch Bàn 300x300'],
        'ngoithachban' => ['Ngói Thạch Bàn'],
        'datsetnung' => ['Gạch đất sét nung Thạch Bàn'],
     ]
?>
<div class="home-slider-wrapper">
    <div class="site-w">
        <?php foreach ($homeSliderList as $key => $value) { ?>
            <div class="home-slider-content-box">
                <div class="home-slider-tabs flex-b align-c">
                    <h2 class="home-slider-tab-heading">
                        <?= $value[0] ?>
                    </h2>
                    <div class="home-slider-tab-list flex-b align-c">
                        <div class="home-slider-tab-item"><a class="home-slider-tab-link" href="#">Sản phẩm mới</a></div>
                        <div class="home-slider-tab-item"><a class="home-slider-tab-link" href="#">Sản phẩm bán chạy</a></div>
                    </div>
                    <div class="home-slider-tab-view-all is-desktop">
                        <a class="home-slider-tab-link" href="#">Xem hết</a>
                    </div>
                </div>
                <div class="home-slider-init">
                    <?php include './app/common/products/product-item.php'; ?>
                </div>
            </div>
        <?php } ?>

    </div>
</div>
