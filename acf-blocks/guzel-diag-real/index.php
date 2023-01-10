<?php

/**
 * name : guzel-diag-real
 * title : Diags. Réalisés
 * align : wide
 * description : Intro
 * category : ng1-blocks
 * keywords: ['ng1', 'block','slider-image']
 * withoutContainer : true
 * withoutWrapper : true
 * icon : welcome-write-blog
 * withCss : true
 * withJs : true
 */

?>
<div class="diag_real">
    <h3><?= $titre; ?></h3>
    <span class="sous-titre"><?= $texte_intro; ?></span>
    <div class="article-list">
        <?php
        $args = array(
            'post_type' => 'Diagnostics',
            'post_status' => 'publish',
            'orderby' => 'ID',
            'order'   => 'ASC',
        );

        $diags_list = new WP_Query($args);

        while ($diags_list->have_posts()) : $diags_list->the_post(); ?>
            <article class="diag">
                <span class="diag-title"><?= the_title(); ?><span class="icon-plus"></span></span>
                <? $fields = get_fields(get_the_ID());
                extract($fields); ?>

                <div class="diag-desc">
                    <?= $texte_obligation; ?>
                    <a class="btt" href="/diagnostics/#<?= the_title(); ?>">En savoir plus</a>
                </div>

            </article>
        <? endwhile;

        wp_reset_postdata(); ?>
    </div>
    <a class="btt devis" href="/devis">Demander un devis</a>
</div>