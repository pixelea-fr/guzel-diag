<?php

/**
 * name : guzel-obligations-home
 * title : Obligations - Home
 * align : wide
 * description : Information Obligations
 * category : ng1-blocks
 * keywords: ['ng1', 'block','obligation']
 * withoutContainer : true
 * withoutWrapper : true
 * icon : visibility
 * withCss : true
 * withJs : true
 */

?>
<section class="obligation-home">
    <h3><?= $titre; ?></h3>
    <p class="sous-titre"><?= $texte_intro; ?></p>
    <div class="obligation-home-list">
        <?php foreach ($type_de_vente as $item) : ?>
            <?php extract($item); ?>
            <div class="item">
                <p><?= $question; ?></p>
                <a class="btt" href="<?= $ancre_url; ?>">En savoir plus</a>
            </div>
        <?php endforeach; ?>
    </div>
</section>