<title>Tìm kiếm</title>
<?php include './app/layout/head.php';?>
<link rel="stylesheet" href="/assets/css/category.css?v=<?= $ver?>">
<script charset="utf-8" src="/assets/js/category.js?v=<?= $ver?>"></script>

<?php include './app/layout/header.php'; ?>
<section id="js-category">
    <div class="site-w">
        <div class="breadcrumb-box">
            <ul class="breadcrumb" itemscope="" itemtype="http://schema.org/BreadcrumbList">
                <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                    <a href="/" itemprop="item">
                        <span itemprop="name">Trang chủ</span>
                    </a>
                </li>
                <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                        <span>Bạn đang tìm từ khóa: <strong class="js-search"></strong> </span>
                </li>
            </ul>
        </div>
        <!-- content -->
        <main class="category-content-wrapper flex-b flex-w">
            <aside class="category-sidebar">
                <?php include './app/common/products/filter-product.php'; ?>
            </aside>
            <div class="category-content">
                <h1 class="main-heading">
                    Bạn đang tìm từ khóa: <strong class="js-search"></strong>
                </h1>
                <div class="category-top-box">
                    <div class="filter-price">

                    </div>
                    <div class="filter-by-criteria flex-b flex-s align-c">
                        <div class="open-filter-box is-mobile">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-funnel" viewBox="0 0 16 16">
                                <path d="M1.5 1.5A.5.5 0 0 1 2 1h12a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.128.334L10 8.692V13.5a.5.5 0 0 1-.342.474l-3 1A.5.5 0 0 1 6 14.5V8.692L1.628 3.834A.5.5 0 0 1 1.5 3.5v-2zm1 .5v1.308l4.372 4.858A.5.5 0 0 1 7 8.5v5.306l2-.666V8.5a.5.5 0 0 1 .128-.334L13.5 3.308V2h-11z"></path>
                            </svg>
                            <span class="filter-icon">
                                Lọc
                            </span>
                        </div>
                        <div class="criteria-form">
                            <label class="is-mobile criteria-title" for="">
                                Sắp xếp:
                                <span id="sort-result">
                                    Mặc định
                                </span>
                            </label>
                            <div class="criteria-list flex-b">
                                <label class="is-mobile" for="">
                                    Sắp xếp theo:
                                </label>
                                <a class="criteria-item" href="/danh-muc">
                                    Mặc định
                                </a>
                                <a class="criteria-item" href="?sort=price-desc">
                                    Giá cao
                                </a>
                                <a class="criteria-item" href="/danh-muc?sort=price-asc">
                                    Giá thấp
                                </a>
                                <a class="criteria-item" href="/danh-muc?sort=recent">
                                    Hàng mới về
                                </a>
                                <a class="criteria-item" href="/danh-muc?sort=rating">
                                    Đánh giá
                                </a>
                                <a class="criteria-item" href="/danh-muc?sort=inventory">
                                    Tồn kho
                                </a>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="list-product-item">
                    <?php include './app/common/products/product-item.php'; ?>
                    <?php include './app/common/products/product-item.php'; ?>
                </div>
                <ul class="pagination">
                    <li class="disabled"><span>«</span></li>
                    <li class="active"><span>1</span></li>
                    <li><a href="danh-muc?page=2">2</a></li>
                    <li><a href="danh-muc?page=3">3</a></li>
                    <li><a href="danh-muc?page=4">4</a></li>
                    <li><a href="danh-muc?page=5">5</a></li>
                    <li><a href="danh-muc?page=2" rel="next">»</a></li>
                </ul>
        </main>
    </div>
</section>
<?php include './app/layout/footer.php'; ?>
