
<div class="row">
    <div class="col-lg-12 espace logged_recruter">

        <?php echo render('recruteur/recruteur_header'); ?>

        <div class="detail_offre">
            <div id="kj_ventre">
                <div id="jobs_detail">
                    <h1 class="titre1" style="float: left;width: 400px;margin-bottom: -5px;margin-left: 9px;">
                        <?php echo stripslashes($recruteur->nom) ?>
                    </h1>

                    <p><img src="<?php echo Uri::base(false) . 'assets/upload/logo/' . $recruteur->logo ?> " id="logo" width="75"/></p>

                    <?php echo render('inc/likebutton') ?>
                    <table   style="margin-left: 10px;width: 97%; border:1px solid #BCBCBC">
                        <tbody style="float: left;margin: 10px;">
                            <tr>
                                <td><span class="label label-default">Secteur d'activité :</span></td>
                                <td><strong><?php echo stripslashes($recruteur->getSecteur()->secteur) ?></strong></td>
                                <td><span class="label label-default">Statut :</span></td>
                                <td><strong><?php echo stripslashes($recruteur->statut); ?></strong></td>
                            </tr>
                            <tr class="grey">
                                <td><span class="label label-default">Pays :</span></td>
                                <td class="borderR"><strong><?php echo stripslashes($recruteur->pays) ?></strong></td>
                                <td><span class="label label-default">Ville :</span></td>
                                <td class="borderR"><strong><?php echo stripslashes($recruteur->ville) ?></strong></td>
                            </tr>
                            <tr>
                                <td><span class="label label-default">Phone :</span></td>
                                <td><strong><?php echo stripslashes($recruteur->phone) ?></strong></td>
                                <td><span class="label label-default">Site web :</span></td>
                                <td><strong><a target="_blank" href="<?php echo stripslashes($recruteur->site_web); ?>"><?php echo stripslashes($recruteur->site_web); ?></a></strong></td>
                            </tr>
                            <tr class="grey">
                                <td><span class="label label-default">Adresse :</td>
                                <td><strong><?php echo stripslashes($recruteur->adresse) ?></strong></td>
                                <td><span class="label label-default">Contact</span>:</td>
                                <td><strong><?php echo stripslashes($recruteur->phone_contact) ?></strong></td>
                            </tr>

                            <tr class="grey">
                                <td><span class="label label-default">Nom :</span></td>
                                <td ><strong><?php echo stripslashes($recruteur->nom_contact . ' ' . $recruteur->prenom_contact) ?></strong></td>
                                <td><span class="label label-default">Fonction</span></td>
                                <td><strong><?php echo stripslashes($recruteur->fonction_contact) ?></strong></td>
                            </tr>
                        </tbody>
                    </table>

                    <p><?php echo nl2br(stripslashes($recruteur->description)) ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
