<div id="main-banner" class="site-w" role="banner">
    <div class="main-banner-wrapper flex-b align-s flex-s">
        <div class="menu-dummy"></div>
        <div class="list-banner-wrapper flex-b align-s flex-s">
            <div class="main-banner">
                <?php for ($i=1; $i < 4; $i++) { ?>
                    <a href="#" class="main-banner-item">
                        <picture>
                            <source media="(min-width: 320px)" srcset="/images/banner/<?= $i?>.jpg">
                            <source src="/images/blank.gif">
                            <img src="/images/blank.gif" alt="">
                        </picture>
                    </a>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
