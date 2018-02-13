
<div class="row espace_int">

    <div class="col-lg-12">
        <div class="row">
            <div class="col-lg-12">
                <p class="breadcrumb">Les <span id="nbre"> <?php echo $count; ?> </span> derniers cv</p> 
            </div>            
        </div>
        <div class="row">
            <div class="col-lg-12 filtre">
                <form id="frmfiltreCandidat" class="form-horizontal">
                   
                    <input type="hidden" id="action" value="0" /> 
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="col-lg-12">Compétences</label>
                            <div class="col-lg-12">
                                <input type="text" class="form-control" name="competence" placeholder="développeur, comptable, chauffeur....." />  
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="col-lg-12">Statut</label>
                            <div class="col-lg-12">
                                <select id="status" name="statut" class="form-control">
                                    <option value="">...</option>
                                    <option value="Sans emploi">Sans emploi</option>
                                    <option value="Etudiant">Etudiant</option>
                                    <option value="En poste, en recherche active">En poste, en recherche active</option>
                                    <option value="marché">En poste, à l'écoute du marché</option>
                                    <option value="Agent de maîtrise">Agent de maîtrise</option>
                                    <option value="Cadre">Cadre</option>
                                    <option value="Cadre dirigeant">Cadre dirigeant</option>
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
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="col-lg-12">Age</label>
                            <div class="col-lg-12">
                                <select id="age" name="tranche_age" class="form-control">
                                    <option value="">...</option>
                                    <option value="Moins de 18 ans" >Moins de 18 ans</option>
                                    <option value="18 - 24">18 - 24</option>
                                    <option value="25 - 34">25 - 34</option>
                                    <option value="35 - 44">35 - 44</option>
                                    <option value="45 - 65">45 - 65</option>
                                    <option value="Plus de 65 ans">Plus de 65 ans</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="col-lg-12">Niveau de formation</label>
                            <div class="col-lg-12">
                                <select id="levelEducation" name="niveau_formation" class="form-control">
                                    <option value="">...</option>
                                    <option value="CAP">CAP</option>
                                    <option value="BEP">BEP</option>
                                    <option value="BAC">BAC</option>
                                    <option value="BAC+1">BAC+1</option>
                                    <option value="BAC+2">BAC+2</option>
                                    <option value="BAC+3">BAC+3</option>
                                    <option value="BAC+4">BAC+4</option>
                                    <option value="BAC+5">BAC+5</option>
                                    <option value="&gt; BAC+5">&gt; BAC+5</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="col-lg-12">Langues</label>
                            <div class="col-lg-12">
                                <select id="langue" name="langue" class="form-control">
                                    <option value="">...</option>
                                    <option value="Anglais">Anglais</option>
                                    <option value="Allemand">Allemand</option>
                                    <option value="Arabe">Arabe</option>
                                    <option value="Chinois">Chinois</option>
                                    <option value="Français">Français</option>
                                    <option value="Russe">Russe</option>
                                </select>
                            </div>
                        </div>
                    </div>


                </form>
            </div>
        </div>
        <div style="display:none;width: 50px;margin: auto;" id="ajaxImgFiltre"><img src="<?php echo Uri::create('assets/img/ajax-loader.gif') ?>"/></div>
        <div class="row listcandidats">
            <?php foreach ($cvs as $cv) : ?>
                <div class="col-lg-12 tout" id="<?php echo $cv->ajout ?>">
                    <div class="row ">
                        <div class="col-lg-9">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h5 class="title"><a href="<?php echo Uri::base(false) . 'candidat/detail/' . $cv->id . '/' . Inflector::friendly_title($cv->nom . ' ' . $cv->prenom) ?>"><?php echo stripslashes($cv->nom . ' ' . $cv->prenom) ?></a></h5>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <p class="soustitle"><a href="#" class="first"><?php echo $cv->niveau_formation ?></a><a href="#"><?php echo $cv->tranche_age ?></a><a href="#"><?php echo $cv->premiere_langue . '-' . $cv->deuxieme_langue ?></a><a href="#"><?php echo $cv->statut ?></a><a href="#" class="last"><?php echo stripslashes($cv->ville) ?></a></p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12 text">
                                    <span class="glyphicon glyphicon-tag"></span> <?php echo stripslashes($cv->specialite) ?><br>
                                    <span class="glyphicon glyphicon-briefcase"></span> <?php echo ($cv->expe == 0) ? "Pas d'expérience" : stripslashes($cv->expe) . " ans d'expérience" ?>
                                </div> 
                            </div>

                        </div>
                        <div class="col-lg-2">
                            <div  ><a href="<?php echo Uri::base(false) . 'candidat/detail/' . $cv->id . '/' . Inflector::friendly_title($cv->nom . ' ' . $cv->prenom) ?>">
                                    <img class="img-responsive" src="<?php echo Uri::base(false) . 'assets/upload/photo/' . $cv->photo ?>"  /></a>
                            </div>
                        </div>

                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <div style="display:none;width: 50px;margin: auto;" id="ajaxImg"><img src="<?php echo Uri::create('assets/img/ajax-loader.gif') ?>"/></div>

    </div>
</div>
<div class="row">
    <div class="col-lg-12"e id="espace">
        <?php echo render('inc/espace') ?>
    </div>
</div>

<?php echo Fuel\Core\Asset::js('candidat.js'); ?>

