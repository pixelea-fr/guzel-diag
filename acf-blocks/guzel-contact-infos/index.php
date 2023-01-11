<?php

/**
 * name : guzel-contact-infos
 * title : Infos Contact
 * align : wide
 * description : Intro
 * category : ng1-blocks
 * keywords: ['ng1', 'block']
 * withoutContainer : true
 * withoutWrapper : true
 * icon : phone
 * withCss : true
 * withJs : true
 */

?>
<div class="contact-infos">
    <h3>Mes coordonées</h3>
    <? $fields = get_fields('option');
    extract($fields); ?>
    <div class="contact">
        <p class="name"><?= $prenom_nom; ?></p>
        <p class="titre"><?= $titre_pro; ?></p>
        <p class="adress"><?= $adresse; ?></p>
        <p class="phone">Téléphone : <a href="tel:<?= $telephone; ?>"><?= $telephone; ?></a></p>
        <p class="email">E-mail : <a href="mailto:<?= $email; ?>"><?= $email; ?></a></p>
    </div>
</div>