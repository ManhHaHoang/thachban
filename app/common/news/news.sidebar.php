<div class="widget newslist-box">
    <h2 class="widget-title flex-b column">Bài viết nổi bật</h2>
    <ul class="sidebar-feature">
        <?php for ($i=5; $i < 10; $i++) { ?>
            <li class="sidebar-feature-item">
                <a class="flex-b" href="/chi-tiet?cach-dung-bha-obagi-hieu-qua" title="So how did the classical Latin become so incoherent?">
                    <img class="sidebar-feature-image" src="/images/news/<?= $i?>.webp" alt="So how did the classical Latin become so incoherent?">
                    <h3 class="sidebar-feature-headline">
                        So how did the classical Latin become so incoherent?
                    </h3>
                </a>
            </li>
        <?php } ?>
    </ul>
</div>
<div class="widget newslist-box">
    <h2 class="widget-title flex-b column">Bán chạy</h2>
    <div class="list-product">
        <?php include './app/common/products/product-item.php'; ?>
    </div>
</div>
<div class="widget newslist-box">
    <h2 class="widget-title flex-b column">Đăng ký nhận Email</h2>
    <small>Đăng ký nhận Email hàng tuần</small>
    <form class="flex-b align-s subcriber-form" method="post" action="/dang-ky-nhan-thong-tin">
        <input type="email" name="email" class="form-control" placeholder="Nhập địa chỉ Email">
        <button class="button primary btn-subcriber" type="submit">Gửi</button>
    </form>
</div>
