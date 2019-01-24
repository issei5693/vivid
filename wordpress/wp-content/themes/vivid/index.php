<!DOCTYPE html>
<html>   
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
    <title>Yoast SEO</title>
    <meta name="description" content="Yoast SEO">

    <?php wp_head(); ?>
</head>

<body>

<div id="wrapper">
    <header class="l-header">
        <div class="l-header__primary">
            <div class="l-header__primary-first">
                <figure class="c-logo">
                    <a class="c-logo__link" href="#">
                        <!-- <img class="c-logo__img" src="<?php echo get_template_directory_uri(); ?>/img/logo.png"> -->
                        <img class="c-logo__img" src="https://placehold.jp/200x80.png?text=Vivid-shop">

                    </a>
                    <span class="c-logo__sub-text">化粧品ディスカウント</span>
                </figure>
            </div>
            <div class="l-header__primary-second">
                <ul class="p-sp-header-nav-list">
                    <li class="p-sp-header-nav-list__item">
                        <a href="" class="p-sp-header-nav-list__link">
                            <img class="p-sp-header-nav-list__img" src="https://placehold.jp/42x42.png" alt="買い物かごを見る">
                            <span class="p-sp-header-nav-list__ruby">買い物かご</span>
                        </a>
                    </li>
                    <li class="p-sp-header-nav-list__item">
                        <a href="" class="p-sp-header-nav-list__link">
                            <img class="p-sp-header-nav-list__img" src="https://placehold.jp/42x42.png" alt="商品を探す">
                            <span class="p-sp-header-nav-list__ruby">検索</span>
                        </a>
                    </li>
                    <li class="p-sp-header-nav-list__item">
                        <a href="" class="p-sp-header-nav-list__link">
                            <img class="p-sp-header-nav-list__img" src="https://placehold.jp/42x42.png" alt="メニュー">
                            <span class="p-sp-header-nav-list__ruby">メニュー</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="l-header__secondary">
            <ul class="p-global-nav-list">
                <li class="p-global-nav-list__item"><a class="p-global-nav-list__link" href="">TOP</a></li>
                <li class="p-global-nav-list__item"><a class="p-global-nav-list__link" href="">ブランドから探す</a></li>
                <li class="p-global-nav-list__item"><a class="p-global-nav-list__link" href="">カテゴリから探す</a></li>
            </ul>
        </div>
    </header>

    <main class="l-main">
        <div class="l-main__content">
            <div class="l-main__content-primary">

                <div class="l-main__content-primary-first">
                    <div class="p-first-view">
                        <div class="swiper-container">
                            <ul class="swiper-wrapper">
                                <li class="swiper-slide"><img style="width:100%" src="https://placehold.jp/820x400.png" alt="スライダー画像"></li>
                                <li class="swiper-slide"><img style="width:100%" src="https://placehold.jp/820x400.png" alt="スライダー画像"></li>
                                <li class="swiper-slide"><img style="width:100%" src="https://placehold.jp/820x400.png" alt="スライダー画像"></li>
                                <li class="swiper-slide"><img style="width:100%" src="https://placehold.jp/820x400.png" alt="スライダー画像"></li>
                            </ul>

                            <div class="swiper-pagination"></div>

                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>
                        </div>

                    </div>

                    <div class="p-banners">
                        <ul>
                            <li><a href=""><img style="width:100%" src="https://placehold.jp/820x50.png"" alt="バナー"></a></li>
                            <li><a href=""><img style="width:100%" src="https://placehold.jp/820x50.png"" alt="バナー"></a></li>
                        </ul>
                    </div>
                </div>

                <section class="l-main__content-primary-second">
                    <h2>新着情報</h2>
                    <ul class="p-informations-list">
                        <li class="p-informations-list__item"><a href="">YYYY.MM.DD テキストテキスト</a></li>
                        <li><a href="">YYYY.MM.DD テキストテキスト</a></li>
                        <li><a href="">YYYY.MM.DD テキストテキスト</a></li>
                        <li><a href="">YYYY.MM.DD テキストテキスト</a></li>
                        <li><a href="">YYYY.MM.DD テキストテキスト</a></li>
                        <li><a href="">YYYY.MM.DD テキストテキスト</a></li>
                    </ul>

                    <a href="">もっと見る</a>
                </section>

                <section class="l-main__content-primary-third">
                    <h2>今月のおすすめ商品</h2>
                    <ul>
                        <li><a href=""><img src="" alt="今月のおすすめ商品"></a></li>
                        <li><a href=""><img src="" alt="今月のおすすめ商品"></a></li>
                        <li><a href=""><img src="" alt="今月のおすすめ商品"></a></li>
                        <li><a href=""><img src="" alt="今月のおすすめ商品"></a></li>
                        <li><a href=""><img src="" alt="今月のおすすめ商品"></a></li>
                        <li><a href=""><img src="" alt="今月のおすすめ商品"></a></li>
                    </ul>
                </section>

                <section class="l-main__content-primary-fourth">
                    <h2>人気商品ランキング</h2>
                    <ul>
                        <li><a href=""><img src="" alt="人気商品ランキング"></a></li>
                        <li><a href=""><img src="" alt="人気商品ランキング"></a></li>
                        <li><a href=""><img src="" alt="人気商品ランキング"></a></li>
                        <li><a href=""><img src="" alt="人気商品ランキング"></a></li>
                        <li><a href=""><img src="" alt="人気商品ランキング"></a></li>
                        <li><a href=""><img src="" alt="人気商品ランキング"></a></li>
                    </ul>
                </section>

            </div>
            <aside class="l-main__content-secondry">
                <section class="l-main__content-secondry-first">
                    <h2>取扱ブランド一覧</h2>
                    <ul>
                        <li><a href="">取扱ブランド</a></li>
                        <li><a href="">取扱ブランド</a></li>
                        <li><a href="">取扱ブランド</a></li>
                        <li><a href="">取扱ブランド</a></li>
                        <li><a href="">取扱ブランド</a></li>
                        <li><a href="">取扱ブランド</a></li>
                    </ul>
                </section>
                
                <section class="l-main__content-secondry-second">
                    <h2>カテゴリ一覧</h2>
                    <ul>
                        <li><a href="">カテゴリ</a></li>
                        <li><a href="">カテゴリ</a></li>
                        <li><a href="">カテゴリ</a></li>
                        <li><a href="">カテゴリ</a></li>
                        <li><a href="">カテゴリ</a></li>
                        <li><a href="">カテゴリ</a></li>
                    </ul>
                </section>

                <div class="l-main__content-secondry-third">
                    <ul>
                        <li><a href=""><img src="" alt="サイドバーバナー"></a></li>
                    </ul>
                </div>


            </aside>
        </div>
    </main>

    <footer class="l-footer">
        <div class="l-footer__primary">
            <div class="p-footer-banner">
            </div>
        </div>

        <div class="l-footer__secondary">
            <div class="l-footer__secondary-first">
                <ul>
                    <li><a href="">フッターナビ1</a></li>
                    <li><a href="">フッターナビ1</a></li>
                    <li><a href="">フッターナビ1</a></li>
                    <li><a href="">フッターナビ1</a></li>
                </ul>
            </div>

            <div class="l-footer__secondary-second">
                <figure>
                    <a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png"></a>
                </figure>
            </div>
        </div>

        <div class="l-footer__tertiary">
            <small class="p-copyright">&copy;<a href=""><?php echo bloginfo('name'); ?></a></small>
        </div>
    </footer>
</div>

<?php wp_footer(); ?>
</body>
</html>