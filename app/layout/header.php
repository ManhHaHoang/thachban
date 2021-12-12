<header class="site-header">
    <div class="topnav">
        <div class="site-w flex-b align-c flex-s">
            <div class="topnav-left">
                <a class="topnav-link" href="/tin-tuc">Tin tức</a>
                <a class="topnav-link" href="/tin-tuc">Khuyến mãi</a>
                <a class="topnav-link" href="/tin-tuc">Kênh người bán</a>
            </div>
            <div class="topnav-right">
                <a class="topnav-link" href="/dang-nhap">Đăng nhập</a>
                <a class="topnav-link" href="/dang-ky">Đăng ký</a>
            </div>
        </div>
    </div>
    <div class="site-w">
        <div class="top-header flex-b align-c">
            <button type="button" class="menu-icon is-mobile">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <a class="site-logo" href="/">
                <picture>
                    <source media="(min-width: 320px)" srcset="/images/logo.png" height="60">
                    <source src="/images/blank.gif">
                    <img src="/images/blank.gif" alt="Electic - Thiết bị điện tử, điện lạnh">
                </picture>
            </a>

            <div class="search-wrapper">
                <form class="search-form flex-b align-s flex-s" action="/tim-kiem" method="get">
                    <div class="parent-item">
                        <input autocomplete="off" class="category-keyword input-text" readonly name="c" placeholder="Tất cả danh mục" type="text" >
                        <div class="content hidden">
                            <ul class="autocomplte-list">
                                <li class="autocomplte-item">Tất cả danh mục</li>
                                <li class="autocomplte-item">Gạch lát nền Thạch Bàn 800x800</li>
                                <li class="autocomplte-item">Gạch lát nền Thạch Bàn 600x600</li>
                                <li class="autocomplte-item">Gạch ốp lát Thạch Bàn 300x600</li>
                                <li class="autocomplte-item">Gạch lát nền Thạch Bàn 300x300</li>
                                <li class="autocomplte-item">Ngói Thạch Bàn</li>
                                <li class="autocomplte-item">Gạch đất sét nung Thạch Bàn</li>
                                <li class="autocomplte-item">Sản phẩm khác</li>
                            </ul>
                        </div>
                    </div>

                    <input class="search-keyword input-text" type="text" name="q" placeholder="Nhập tên sản phẩm, từ khóa cần tìm">
                    <button class="search-button button" type="submit">
                        <svg class="default-search-icon" xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                        </svg>
                        <div class="default-loading"></div>
                    </button>
                </form>
                <button type="button" class="search-icon is-mobile">
                    &times;
                </button>
                <?php include 'app/common/suggestions.php'; ?>
            </div>

            <div class="header-support-action flex-b align-s flex-s">
                <a href="tel:099.789.6789" class="support-item hotline-wrapper flex-b align-s flex-s">
                    <span class="support-icon flex-b align-c flex-c">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                            <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                        </svg>
                    </span>
                    <span class="support-number flex-b align-c flex-c column">
                        099.789.6789
                        <small>Tư vấn bán hàng</small>
                    </span>
                </a>
                <div class="support-item  flex-b align-s flex-s">
                    <span class="support-icon flex-b align-c flex-c">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
                            <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
                            <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                        </svg>
                    </span>
                    <span class="support-number flex-b align-c">
                        Địa điểm
                    </span>
                </div>
                <div class="support-item  flex-b align-s flex-s">
                    <span class="support-icon flex-b align-c flex-c">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"  viewBox="0 0 16 16">
                            <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z"/>
                        </svg>

                    </span>
                    <span class="support-number flex-b align-c">
                        Giỏ hàng <small class="count-item">0</small>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <div class="header-search-wrapper">
        <div class="site-w flex-b align-c">
            <div id="shortLink" class="flex-b align-c flex-c">
                <div class="short-link-item category-wrapper">
                    <div class="category-main-text flex-b align-c flex-c">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                        </svg>
                        <div>Danh mục sản phẩm</div>
                    </div>
                    <?php include 'app/layout/navigation.php'; ?>
                </div>
            </div>

            <div class="header-news flex-b align-c flex-e">
                <a class="flex-b align-c" href="/">
                    Trang chủ
                </a>
                <a class="flex-b align-c" href="/khuyen-mai">
                    Khuyến mãi
                </a>
                <a class="flex-b align-c" href="/e-catalogue">
                    E-Catalogue
                </a>
                <a class="flex-b align-c" href="/tin-tuc">
                    Tin tức
                </a>
                <a class="flex-b align-c" href="/lien-he">
                    Liên hệ
                </a>
            </div>
        </div>
    </div>
    <div class="is-mobile navigation-background"></div>
</header>
