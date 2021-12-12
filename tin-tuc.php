<title>Tin tức Thạch Bàn</title>
<?php include './app/layout/head.php';?>
<link rel="stylesheet" href="/assets/css/news.css?v=<?= $ver?>">
<script charset="utf-8" src="/assets/js/news.js?v=<?= $ver?>"></script>

<?php include './app/layout/header.php'; ?>
<main class="site-main">
    <div class=" site-w">
        <div class="breadcrumb-box">
            <ul class="breadcrumb" itemscope="" itemtype="http://schema.org/BreadcrumbList">
                <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                    <a href="/" itemprop="item">
                        <span itemprop="name">Trang chủ</span>
                    </a>
                </li>
                <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                    <span itemprop="name">Tin tức</span>
                </li>
            </ul>
        </div>
    </div>
    <div class="shortcut-category">
        <div class="submenu-children site-w flex-b align-c">
            <h2 class="menu-item-main">
                <a class="child-link" href="/tin-tuc"> Mới nhất </a>
            </h2>
            <h2 class="menu-item-main">
                <a class="child-link" href="/tin-tuc?kinh-nghiem-hay" title="Sức Khỏe">
                    Kinh nghiệm hay
                </a>
            </h2>
            <h2 class="menu-item-main">
                <a class="child-link" href="/tin-tuc?kinh-nghiem-hay" title="Sức Khỏe">
                    Khuyến mãi
                </a>
            </h2>
        </div>
    </div>
    <div class="site-w">
        <section class="news-content-wrap flex-b align-s">
            <article class="news-page">
                <div class="blogpage-newslist flex-b align-s">
                    <div class="news-slider">
                        <div class="blogpage-slider">
                            <?php for ($i=1; $i < 5; $i++) { ?>
                                <div class="item">
                                    <a href="/chi-tiet?chinh-sach-bao-mat">
                                        <div class="latest-image-box">
                                            <img class="latest-image" src="/images/news/<?= $i?>.webp">
                                        </div>
                                        <h3 class="latest-title">Gạch Thạch Bàn Chính Hãng – Các Mẫu Gạch Ốp Lát Đẹp, Mới Nhất 2021.</h3>
                                    </a>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="news-list">
                        <?php for ($i=1; $i < 5; $i++) { ?>
                            <div class="news-list-item <?php if ($i == 0) { echo "newslist-feature"; } ?>">
                                <a href="/tin-tuc?thuc-pham-chuc-nang-cua-my">
                                    <?php if ($i == 0) { ?>
                                        <img class="latest-image" src="/images/news/<?= $i?>.webp">
                                    <?php } ?>
                                    <h3 class="news-list-heading">
                                        Magna graeci legimus eu eos, qui ne libris verterem
                                    </h3>
                                </a>
                            </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="blogpage-list-other-news">
                    <?php for ($i=0; $i < 10; $i++) { ?>
                        <div class="other-news-item flex-b">
                            <a class="post-image" href="#" title="">
                                <img src="/images/news/<?= $i?>.webp" alt="">
                            </a>
                            <div class="post-content">
                                <h3 class="headline">
                                    <a href="chi-tiet?sua-rua-mat-cho-da-kho" title="">
                                        Tất tần tật những mẫu gạch Thạch Bàn HOT nhất 2021
                                    </a>
                                </h3>
                                <div class="description">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                </div>
                                <div class="timepost">
                                    <time datetime="2021-06-22 17:32:11">22/06/2021</time>
                                    <a class="namecate" href="/tin-tuc?Kinh nghiệm hay" title="Kinh nghiệm hay"> Kinh nghiệm hay </a>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </article>
            <aside class="news-sidebar">
                <?php include './app/common/news/news.sidebar.php'; ?>
            </aside>
        </section>
    </div>
</main>
<script>
$(document).ready(function () {
    $('.blogpage-slider').slick({
        arrows: false,
        dots: false,
        infinite: false,
        autoplay: true,
        autoplaySpeed: 5000,
        speed: 1000,
        responsive: [
            {
                breakpoint: 990,
                settings: {
                    arrows: true,
                    dots: false,
                }
            }
        ]
    });
});
</script>
<?php include './app/layout/footer.php'; ?>
