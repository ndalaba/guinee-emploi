<div class="row" id="left">
    <div class="col-lg-12 logged_recruter espace">
        <?php echo render('recruteur/recruteur_header'); ?>
        <div class="row">
            <div class="col-lg-12 filtre">
                <hr>
                <form id="frmfiltreOffre" class="form-horizontal">
                    <input type="hidden" id="todo" value="mesOffres">
                    <?php if (isset($categorie)): ?><!-- Page affichée à la suite d'une recherche par categorie (utidivsé dans le js)-->
                        <input type="hidden" id="action"  value="<?php echo $categorie ?>" action="categorie"/>
                    <?php elseif (isset($motcle)) : ?><!-- Page affichée à la suite d'une recherche par mot clé (utidivsé dans le js) -->
                        <input type="hidden" id="action" value="<?php echo $motcle ?>" action="motcle" ville="<?php echo $ville ?>"/>
                    <?php else: ?> <!-- Page affichée de façon normale (utidivsé dans le js) -->
                        <input type="hidden" id="action" value="0" action="offre" action="offre"/>
                    <?php endif; ?>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="col-lg-12">Fonction</label>
                            <div class="col-lg-12">
                                <select  id="fonction" name="fonction_id"  class="form-control">
                                    <option value="">--Toutes les fonctions--</option>
                                    <?php
                                    if (isset($fonctions)) {
                                        foreach ($fonctions as $fonction):
                                            ?>
                                            <option  value="<?php echo $fonction->id ?>"><?php echo ($fonction->fonction) ?></option>
                                            <?php
                                        endforeach;
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="col-lg-12">Contrat</label>
                            <div class="col-lg-12">
                                <select name="type_contrat" id="type_contrat"  class="form-control">
                                    <option value="">--Tous les type de contrats--</option>
                                    <option value="CDI">CDI</option>
                                    <option value="CDD">CDD</option>
                                    <option value="Freelance">Freelance</option>
                                    <option value="Stage">Stage</option>
                                    <option value="Alternance">Alternance</option>
                                    <option value="Interim">Intérim</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="col-lg-12">Période</label>
                            <div class="col-lg-12">
                                <select name="date" id="date"  class="form-control">
                                    <option value="0">--Indifférent --</option>
                                    <option value="1">Aujourd'hui</option>
                                    <option value="2">Moins de 7 jours</option>
                                    <option value="3">Moins de 14 jours</option>
                                    <option value="4">Moins de 21 jours</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="col-lg-12">Ville</label>
                            <div class="col-lg-12">
                                <input type="text" class="form-control" name="ville" style="margin-bottom: 10px;"  id="ville" value="<?php echo isset($ville) ? $ville : "" ?>" placeholder="Conakry"/>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <h3>Liste des offres que vous avez publiées</h3>
        <?php if ($recruteur->getOffres(5) != null): ?>
            <table class="table table-condensed toutsec" id="divclic">
                <?php foreach ($recruteur->getOffres(5) as $offre): ?>
                    <tr class="tout" id="<?php echo $offre->id ?>">
                        <td>
                            <h3 style="text-transform: uppercase;"><a style="color: #688e0a;" href="<?php echo Uri::base(false) . 'offre/detail/' . $offre->id ?>" target="_blank"><?php echo $offre->titre ?></a></h3>
                            <address>
                                <p>
                                    <a href="#" class="first"> <?php echo Helper::formatDate($offre->date_fin) ?></a><br>
                                    <a href="#"><?php echo $offre->type_contrat ?></a><br>
                                    <a href="#" class="last"><?php echo stripslashes($offre->ville) ?></a>
                                </p>
                            </address>
                            <p>
                                <a href="<?php echo Uri::base(false) . 'offre/detail/' . $offre->id ?>"><?php echo Str::truncate($offre->description, 200) ?></a>
                            </p>
                        </td>
                        <td>
                          <?php if($offre->publier==1 ) :?>
                            <p>
                                <a style="width: 85px;" lien_id="<?php echo $offre->id ?>" class="publier btn btn-xs btn-warning" href="<?php echo Uri::base(false) . 'recruteur/publication/' . $offre->id ?>" >
                                    <i class="icon icon-off"></i>  Depublier</a></p>
                            <p>
                            <?php else : ?>
                            <p>
                                <a style="width: 85px;" lien_id="<?php echo $offre->id ?>" class="publier btn btn-xs btn-warning" href="<?php echo Uri::base(false) . 'recruteur/publication/' . $offre->id ?>" >
                                    <i class="icon icon-list"></i>  Publier</a></p>
                            <p>
                             <?php endif; ?>
                            <p>
                                <a style="width: 85px;" class="btn btn-xs btn-default"  href="<?php echo Uri::base(false) . 'recruteur/publierOffre/' . $offre->id ?>">
                                    <i class="icon icon-edit"></i>  Modifier</a></p>
                            <!--<p>
                                <a style="width: 85px;" offre_id = "<?php //echo $offre->id   ?>"  class="btn btn-xs btn-danger supprimerOffre" href="<?php //echo Uri::base(false) . 'recruteur/supprimerOffre/' . $offre->id   ?>">

                                    <i class="icon icon-remove"></i> Supprimer</a>
                            </p>-->
                            <p>
                                <a style="width: 85px;" offre_id ="<?php echo $offre->id ?>"  class="btn btn-xs btn-danger suppression" href="<?php echo Uri::base(false) . 'recruteur/desactiver/' . $offre->id ?>">

                                    <i class="icon icon-remove"></i> Supprimer</a>
                            </p>
                            <p><a style="width: 85px;" class="btn btn-xs btn-success" href="<?php echo Uri::create('offre/candidats/' . $offre->id . '/' . Inflector::friendly_title($offre->titre)) ?>">
                                    <i class="icon icon-eye-open"></i>  Postulants</a></p>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
            <div class="row">
                <div class="col-lg-12" style="text-align: right;">
                    <p>
                        <button class="btn btn-xs btn-success pagin">Voir les offres suivantes &raquo;&raquo;</button>
                    </p>
                </div>
            </div> 
            <div style="display:none;width: 50px;margin: auto;" id="ajaxImgFiltre"><img src="<?php echo Uri::create('assets/img/ajax-loader.gif') ?>"/></div>
        <?php else: ?>
            <div class="alert alert-success" style="margin-left: 0; width: 100%;">
                Aucune offres dans votre liste. <a class="btn btn-xs btn-success" href="<?php echo Uri::create('recruteur/publierOffre'); ?>">Publier une offre</a>
            </div>
        <?php endif; ?>
    </div>
    <?php echo render('inc/espace') ?>

</div>
<?php echo render('inc/lastJobs') ?>
<div class="modal fade" id="modal_message">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Alert</h4>
            </div>

            <div class="modal-body">
                <div id="msg_alert"></div>
            </div>

            <div class="modal-footer">
                <button class="btn btn-default" data-dismiss="modal">Fermer</button>
            </div>

        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function() {

        $('.supprimerOffre').click(function(event) {

            var this_id = $(this).attr('offre_id');

            $.ajax({
                type: 'POST',
                url: $(this).attr('href'),
                dataType: 'html',
                success: function(data) {
                    if (data == 'yes')
                    {
                        $('#' + this_id).fadeOut(2000);
                        alert("L'offre a bien été supprimée");
                    }
                }
            });

            event.preventDefault();
        });

    });
    var divclic = $('#divclic');
    divclic.on('click', '.publier', function(e) { 
        var this_id=$(this).attr('lien_id');
        
        $.ajax({
            type: 'GET',
            url: $(this).attr('href'),
            dataType: 'html',
            success: function(data) {
                if(data=='1'){
                    $('#modal_message').modal();
                    $('#modal_message #msg_alert').html('Votre offre a été publier avec succes sur le site de Guinée Emploi');
                    $("a[lien_id="+ this_id +"]").html('<i class="icon icon-off"></i> Depublier');
                }else{
                    $('#modal_message').modal();
                    $('#modal_message #msg_alert').html('Votre offre a été depublier avec succes sur le site de Guinée Emploi. Elle ne sera plus visible sur le site pour les candidats');
                   $("a[lien_id="+ this_id +"]").html('<i class="icon icon-list"></i> Publier');
                }
            }
        });
        return false;

    });
    
    divclic.on('click', '.suppression', function(e) {

        if (confirm("Voulez vous supprimer cette offre ?")) {
            var this_id = $(this).attr('offre_id');
            $.ajax({
                type: 'GET',
                url: $(this).attr('href'),
                dataType: 'html',
                success: function(data) {
                    $('#' + this_id).fadeOut(2000);
                }
            });
            return false;
        }
        return false;
    });

</script>

<?php echo \Fuel\Core\Asset::js('recruteur.js'); ?>