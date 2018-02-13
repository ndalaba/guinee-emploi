<div class="row">
    <div class="col-lg-12 bloc_contenu">
        <h2 style="font-size: 24px;"><span style="color: green;">Guinée Emploi</span> vous souhaite la bienvenue
            <span style="color: green;"><?php echo $recruteur->nom; ?></span> sur sa platforme de recrutement.
        </h2>
        <div class="alert alert-success" style="width: 100%;">Votre compte a été crée avec succès.</div>

        <p>Vous serez contacté dans les minutes qui suivent pour des questions
            concernant la validation de votre compte sur le numéro que vous avez renseigné lors de votre
        inscription.</p>

        <h4>Voici les renseignements que vous avez fournis :</h4>
        <table class="table table-condensed">
            <tr>
                <td>Nom de votre Entreprise</td>
                <td><span class="label label-info"><i class="icon icon-ok"></i> <?php echo $recruteur->nom; ?></span></td>
            </tr>
            <tr>
                <td>Adresse</td>
                <td><span class="label label-info"><i class="icon icon-ok"></i> <?php echo $recruteur->adresse; ?></span></td>
            </tr>
            <tr>
                <td>E-mail</td>
                <td><span class="label label-info"><i class="icon icon-ok"></i> <?php echo $recruteur->email; ?></span></td>
            </tr>
            <tr>
                <td>Tel.</td>
                <td><span class="label label-info"><i class="icon icon-ok"></i> <?php echo $recruteur->phone; ?></span></td>
            </tr>
            <tr>
                <td>Secteur d'activité</td>
                <td><span class="label label-info"><i class="icon icon-ok"></i> <?php
                    $secteur = Model_Secteur::find($recruteur->secteur_id);
                    echo $secteur->secteur; ?></span></td>
            </tr>
        </table>
        <p>Si vous avez fait une erreur pendant votre inscription ou si vous estimez que ces informations ne sont pas
        les votres, veuillez nous <a class="btn btn-success btn-xs" href="<?php echo \Fuel\Core\Uri::create('contact'); ?>">contacter.</a></p>
        <div class="well">
            <p class="text-center">
                <a class="btn btn-success" href="<?php echo \Fuel\Core\Uri::create('recruteur/profilRecruteur/'); ?>">Completer votre profil pour activer votre compte c'est gratuit</a>
            </p>
        </div>
    </div>
</div>