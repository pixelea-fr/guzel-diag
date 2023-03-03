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
        <span class="top-contact">
            Contactez-moi :
            <p class="adress"><? the_field('adresse', 'option'); ?></p>
            <p class="phone">Téléphone : <a href="tel:<? the_field('telephone', 'option'); ?>"><? the_field('telephone', 'option') ?></a></p>
            <p class="email">E-mail : <a href="mailto:<? the_field('email', 'option'); ?>"><? the_field('email', 'option'); ?></a></p>
        </span>
        <?php if ($geo) { ?>
            <span class="zone-geo">
                <div><?= $geo; ?></div>
            </span>
        <? } ?>
    </div>
</div>