<div id="left" class="row espace_int">
    <div class="col-lg-12 espace_candidat">
        <div class="row haut">
            <p class="col-lg-4 left">Bienvenue <span><?php echo $candidat->prenom . ' ' . $candidat->nom; ?></span></p>
            <?php echo render('inc/space') ?>
        </div>
        <div class="row candidatures alertes">
            <h1  class="col-lg-12 bigtitle">MES ALERTES</h1> 
            <?php if (isset($alertes) and (count($alertes) > 0)) { ?>
            <table class="table">
                    <tr>
                        <th class="one">ID</th>
                        <th class="">Titre</th>
                        <th class="action">Action</th>
                    </tr>

                    <?php foreach ($alertes as $alerte): ?>
                        <tr class="tr<?php echo $alerte->idAlert ?>">
                            <td  class="one"><?php echo $alerte->idAlert ?></td>
                            <td><?php echo $alerte->titre ?></td>
                            <td class="action">  <a href="javascript:;" onclick="supprimerAlert(<?php echo $alerte->idAlert ?>)" class="del" title="Supprimer l'offre">Supprimer</a></td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            <?php
            } else {
                echo '<h2 class="col-lg-12 alert">Vous n\'avez pas recu d\'alerte job</h2>';
            }
            ?>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12" id="espace">
        <?php echo render('inc/espace') ?>
    </div>              
</div>
 <?php echo render('inc/lastJobs') ?>
