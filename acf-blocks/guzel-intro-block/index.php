<?php

/**
 * name : guzel-intro-block
 * title : Block d'intro
 * align : wide
 * description : Intro
 * category : ng1-blocks
 * keywords: ['ng1', 'block','slider-image']
 * withoutContainer : true
 * withoutWrapper : true
 * icon : admin-users
 * withCss : true
 * withJs : true
 */

?>
<div class="intro">
    <div class="intro-grid">
        <?php
                $size = 'full';
        if ($certification) { ?>
            <span class="certification">
                Certifié <div><?= wp_get_attachment_image($certification, $size); ?></div>
            </span>
        <? }
        if ($photo) { ?>
            <span class="photo"><?= wp_get_attachment_image($photo, $size); ?></span>
        <? } ?>
        <div class="intro-grid-sub">
            <? if ($prenom) { ?>
                <h2 class="home"><?= $prenom; ?> <span><?= $nom; ?></span></h2>
            <? }
            if ($titre) { ?>
                <h1 class="home"><?= $titre; ?></h1>
            <? } ?>
            <div class="button-container">
                <button name="Devis" class="cta">
                    <a href="/devis">Devis</a>
                </button>
                <button name="Contact" class="cta">
                    <a href="/contact">Contact</a>
                </button>
            </div>
            <div class="descrip"><?= $description; ?></div>
        </div>
    </div>
</div>