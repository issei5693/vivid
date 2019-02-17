<?php get_header(); ?>

<div class="l-main__content">
    <div class="l-main__content-primary">

        <div class="l-main__content-primary-first">
            <div class="p-item">
                <figure class="p-item__image">
                    <img class="p-item__img" src="<?php echo get_template_directory_uri(); ?>/img/150x150.png">
                </figure>
                <section class="p-item__content">
                    <h2 class="p-item__header-title">
                        <a class="p-item__sub-title" href="">メーカー名</a>
                        <span class="p-item__title"><?php the_title(); ?></span>
                    </h2>
                    <table class="p-item__info">
                        <tbody>
                            <tr>
                                <th class="p-item__info-title">カテゴリ</th>
                                <td class="p-item__info-data">ローション</td>
                            </tr>
                            <tr>
                                <th class="p-item__info-title">通常価格</th>
                                <td class="p-item__info-data"><s>15,000円</s></td>
                            </tr>
                            <tr>
                                <th class="p-item__info-title">販売価格</th>
                                <td class="p-item__info-data">10,000円(税込)<span>30%OFF</span></td>
                            </tr>
                        </tbody>
                    </table>
                    <p class="p-item__text">テキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                    <div><!-- カラーミー導入時に数量、色の選択、などをAPIで引けるかどうか精査 -->
                        <p>数量</p>
                        <p>色の選択</p>
                        <p>購入ボタン</p>
                    </div>
                </section>

            </div>
        </div>

        <?php // 関連商品

            $args = array(
                'post__in' => array()
            );

            $the_query = new WP_Query($args);

            if(!empty($the_query->found_posts)): ?>

                <section class="l-main__content-primary-second">
                    <h2 class="c-icon-header">「<?php echo get_the_category()[0]->name; ?>」の関連商品</h2>
                    <ul>
                    <?php
                    if ($the_query->have_posts()) :
                        while ($the_query->have_posts()) : $the_query->the_post(); ?>
                            <li>
                                <div class="c-lisence-card">
                                    <a class="c-lisence-card__link" href="<?php the_permalink(); ?>">
                                        <?php
                                            if (has_post_thumbnail()): ?>
                                                <figure class="c-lisence-card__image">
                                                    <img class="c-lisence-card__img" src="<?php the_post_thumbnail_url( 'full' ); ?>" alt="<?php the_title(); ?>">
                                                </figure>
                                        <?php else: ?>
                                                <figure class="c-lisence-card__image">
                                                    <img class="c-lisence-card__img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/150x150.png" alt="<?php the_title(); ?>">    
                                                </figure>
                                        <?php endif;  ?>
                                    
                                        <h3 class="c-lisence-card__title">
                                            <span class="c-lisence-card__section"><?php echo get_the_category($id)[0]->name; ?></span>
                                            <span class="c-lisence-card__section"><?php the_title(); ?></span>
                                        </h3>
                                        <p class="c-lisence-card__content">
                                            <span class="c-lisence-card__section">30% OFF</span>
                                            <span class="c-lisence-card__price">¥10,000円</span>
                                            <s>¥15,000円</s>
                                        </p>
                                    </a>
                                </div>
                            </li>
                        <?php endwhile;
                    endif;
                    wp_reset_postdata();
                    ?>
                </section>

        <?php
            endif;
        ?>

        <?php // 同じブランドの商品 

            $args = array(
                'post__in' => array()
            );

            $the_query = new WP_Query($args);

            if(!empty($the_query->found_posts)): ?>

                <section class="l-main__content-primary-third">
                    <h2 class="c-icon-header">「<?php echo get_the_category()[0]->name; ?>」の関連商品</h2>
                    <ul>
                    <?php
                    if ($the_query->have_posts()) :
                        while ($the_query->have_posts()) : $the_query->the_post(); ?>
                            <li>
                                <div class="c-lisence-card">
                                    <a class="c-lisence-card__link" href="<?php the_permalink(); ?>">
                                        <?php
                                            if (has_post_thumbnail()): ?>
                                                <figure class="c-lisence-card__image">
                                                    <img class="c-lisence-card__img" src="<?php the_post_thumbnail_url( 'full' ); ?>" alt="<?php the_title(); ?>">
                                                </figure>
                                        <?php else: ?>
                                                <figure class="c-lisence-card__image">
                                                    <img class="c-lisence-card__img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/150x150.png" alt="<?php the_title(); ?>">    
                                                </figure>
                                        <?php endif;  ?>
                                    
                                        <h3 class="c-lisence-card__title">
                                            <span class="c-lisence-card__section"><?php echo get_the_category($id)[0]->name; ?></span>
                                            <span class="c-lisence-card__section"><?php the_title(); ?></span>
                                        </h3>
                                        <p class="c-lisence-card__content">
                                            <span class="c-lisence-card__section">30% OFF</span>
                                            <span class="c-lisence-card__price">¥10,000円</span>
                                            <s>¥15,000円</s>
                                        </p>
                                    </a>
                                </div>
                            </li>
                        <?php endwhile;
                    endif;
                    wp_reset_postdata();
                    ?>
                </section>

        <?php
            endif;
        ?>

        <?php // 同じブランドの商品 タグが2子以上ついている場合はor条件で絞り込み。全てのタグ商品を検索。

            $args = array(
                'post__in' => array()
            );

            $the_query = new WP_Query($args);

            if(!empty($the_query->found_posts)): ?>
                <section class="l-main__content-primary-fourth"">
                    <h2 class="c-icon-header"><?php 
                        foreach(get_the_tags() as $tag ) {
                            echo '「'.$tag->name.'」';
                        } ?>の他の商品
                    </h2>
                    <ul>
                    <?php
                    if ($the_query->have_posts()) :
                        while ($the_query->have_posts()) : $the_query->the_post(); ?>
                            <li>
                                <div class="c-lisence-card">
                                    <a class="c-lisence-card__link" href="<?php the_permalink(); ?>">
                                        <?php
                                            if (has_post_thumbnail()): ?>
                                                <figure class="c-lisence-card__image">
                                                    <img class="c-lisence-card__img" src="<?php the_post_thumbnail_url( 'full' ); ?>" alt="<?php the_title(); ?>">
                                                </figure>
                                        <?php else: ?>
                                                <figure class="c-lisence-card__image">
                                                    <img class="c-lisence-card__img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/150x150.png" alt="<?php the_title(); ?>">    
                                                </figure>
                                        <?php endif;  ?>
                                    
                                        <h3 class="c-lisence-card__title">
                                            <span class="c-lisence-card__section"><?php echo get_the_category($id)[0]->name; ?></span>
                                            <span class="c-lisence-card__section"><?php the_title(); ?></span>
                                        </h3>
                                        <p class="c-lisence-card__content">
                                            <span class="c-lisence-card__section">30% OFF</span>
                                            <span class="c-lisence-card__price">¥10,000円</span>
                                            <s>¥15,000円</s>
                                        </p>
                                    </a>
                                </div>
                            </li>
                        <?php endwhile;
                    endif;
                    wp_reset_postdata();
                    ?>
                </section>

        <?php
            endif;
        ?>

    </div>
    <aside class="l-main__content-secondary">
        <?php get_sidebar(); ?>
    </aside>
</div>

<?php get_footer(); ?>