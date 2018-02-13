<div class="row">
    <div class="col-lg-12">
        <div class="row">
            <div class="col-lg-12 bloc_entete">
                <h2 class="text-right">Toutes les annonces et offres d'emploi publiées sur  le site</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 bloc_contenu">
                <h3>dernières offres</h3>
                
                <?php $nbr=count($offres_left); foreach ( $offres_left as $offre ){ $data[] = $offre; } ?>
                <div class="row" >
                    <div class="col-lg-6">
                        <?php for($i = 0; $i < (int)$nbr/2; $i++): ?>
                            <h4><a href="<?php echo Uri::base(false) . 'offre/detail/' . $data[$i]->id . '/' . Inflector::friendly_title($data[$i]->titre) ?>"><?php echo stripslashes($data[$i]->titre) ?></a></h4>
                            <p><a href="<?php echo Uri::base(false) . 'offre/detail/' . $data[$i]->id . '/' . Inflector::friendly_title($data[$i]->titre) ?>"><?php echo Str::truncate(stripcslashes($data[$i]->description), 75) ?></a></p>
                        <?php endfor; ?>
                    </div>
                    <div class="col-lg-6">
                        <?php for($i = (int)$nbr/2; $i <$nbr; $i++): ?>
                            <h4><a href="<?php echo Uri::base(false) . 'offre/detail/' . $data[$i]->id . '/' . Inflector::friendly_title($data[$i]->titre) ?>"><?php echo stripslashes($data[$i]->titre) ?></a></h4>
                            <p><a href="<?php echo Uri::base(false) . 'offre/detail/' . $data[$i]->id . '/' . Inflector::friendly_title($data[$i]->titre) ?>"><?php echo Str::truncate(stripcslashes($data[$i]->description), 75) ?></a></p>
                        <?php endfor; ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 text-right" >
                        <h6><a class="alljobs" href="<?php echo Uri::base(false) . 'offre/'?>">Toutes les offres &raquo;</a></h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>