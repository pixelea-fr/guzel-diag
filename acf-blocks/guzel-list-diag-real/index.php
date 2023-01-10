<?php

/**
 * name : guzel-diag-real-complete
 * title : Liste des Diags. Réalisés 
 * align : wide
 * description : Intro
 * category : ng1-blocks
 * keywords: ['ng1', 'block','slider-image']
 * withoutContainer : true
 * withoutWrapper : true
 * icon : list-view
 * withCss : true
 * withJs : true
 */

?>
<div class="list_diag_real">
    <div class="diag-list">
        <?php
        $args = array(
            'post_type' => 'Diagnostics',
            'post_status' => 'publish',
            'orderby' => 'ID',
            'order'   => 'ASC',
        );

        $diags_list = new WP_Query($args);

        while ($diags_list->have_posts()) : $diags_list->the_post(); ?>
            <article id="<?= the_title(); ?>" class="diag">
                <h3 class="diag-title"><?= the_title(); ?></h3>
                <? $fields = get_fields(get_the_ID());
                extract($fields); ?>
                <div class="diag-obli">
                    <?= $texte_obligation; ?>
                </div>
                <div class="diag-desc">
                    <?= $texte_descriptif; ?>
                </div>
                <? if ($risques) { ?>
                    <div class="diag-risque">
                        <p><?= $risques; ?></p>
                    </div>
                <? }; ?>
                <? if ($texte_risques) { ?>
                    <div class="diag-text-risque">
                        <?= $texte_risques; ?>
                    </div>
                <? }; ?>
                <? if ($alerte) { ?>
                    <div class="diag-alert">
                        <p><?= $alerte; ?></p>
                    </div>
                <? }; ?>
                <a class="btt devis" href="/devis">Demander un devis</a>
            </article>
        <? endwhile;

        wp_reset_postdata(); ?>
    </div>
</div>