<?php

/**
 * name : guzel-obligation-page
 * title : Block pour page Obligations
 * align : wide
 * description : Intro
 * category : ng1-blocks
 * keywords: ['ng1', 'block']
 * withoutContainer : true
 * withoutWrapper : true
 * icon : welcome-learn-more
 * withCss : true
 * withJs : true
 */

?>
<div class="obligation-texte" id="<?= $id; ?>">
    <h3><?= $titre; ?></h3>
    <div class="description"><?= $description; ?></div>
    <div class="alert"><?= $alerte; ?></div>
</div>