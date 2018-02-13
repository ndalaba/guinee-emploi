<div class="row">
    <header class="col-lg-12">
        <div class="row">

            <p class="col-lg-4 logo" >
                <img class="img-responsive" alt="Guinée Emploi" src="<?php echo Uri::base(false) . 'assets' ?>/img/logo.png"/>
            </p> 
            <div class="col-lg-8">
                <div class="row">
                    <nav class="col-lg-12">

                        <ul class="list-unstyled  nav nav-tabs">
                            <li class="spane"></li>
                            <li ><a href="<?php echo Uri::base(false) ?>" id="page_accueil">Accueil</a></li>
                            <?php if (Session::get('logged_recruteur')): ?>
                            <li ><a href="<?php echo Uri::create('cvtheque') ?>" id="page_cvtek">CVthèque</a></li>
                            <?php endif; ?>
                            <?php if (!Session::get('logged_recruteur')): ?>
                                <li ><a href="<?php echo Uri::create('recruteur') ?>" id="page_cvtek">CVthèque</a></li>
                            <?php endif; ?>
                                <li ><a href="<?php echo Uri::base(false) . 'offre' ?>" id="page_offres">Offres d'emploi</a></li>
                                <li class="last"><a href="<?php echo Uri::base(false) . 'contact' ?>" id="page_contact">Contacts</a></li>
                        </ul>

                    </nav>
                </div>

                <div class="row">
                    <div class="col-lg-12 recherche_job">
                        <h3 class="text-right">Recherchez une offre d'emploi</h3>
                    </div>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-12">
                        <form role="form" action="<?php echo Uri::base(false) . 'offre' ?>" method="post" >

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="sr-only" for="motcles">Mots cles</label>
                                        <input type="text" name="motcles"  class="form-control" placeholder="offre d'emploi" />
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="sr-only" for="ville">Ville</label>
                                        <select class="form-control" name="ville" >
                                            <option value="Conakry">Conakry</option>
                                            <option value="Beyla">Beyla</option>
                                            <option value="Boffa">Boffa</option>
                                            <option value="Boké">Boké</option>
                                            <option value="Coyah">Coyah</option>
                                            <option value="Dabola">Dabola</option>
                                            <option value="Dalaba">Dalaba</option>
                                            <option value="Dinguiraye">Dinguiraye</option>
                                            <option value="Dubréka">Dubréka</option>
                                            <option value="Faranah">Faranah</option>
                                            <option value="Forékariah">Forékariah</option>
                                            <option value="Fria">Fria</option>
                                            <option value="Gaoual">Gaoual</option>
                                            <option value="Guékédou">Guékédou</option>
                                            <option value="Kankan">Kankan</option>
                                            <option value="Kérouané">Kérouané</option>
                                            <option value="Kindia">Kindia</option>
                                            <option value="Kissidougou">Kissidougou</option>
                                            <option value="Koubia">Koubia</option>
                                            <option value="Koundara">Koundara</option>
                                            <option value="Kouroussa">Kouroussa</option>
                                            <option value="Labé">Labé</option>
                                            <option value="Lelouma">Lelouma</option>
                                            <option value="Lola">Lola</option>
                                            <option value="Macenta">Macenta</option>
                                            <option value="Mali">Mali</option>
                                            <option value="Mamou">Mamou</option>
                                            <option value="Mandiana">Mandiana</option>
                                            <option value="N'Zérékoré">N'Zérékoré</option>
                                            <option value="Pita">Pita</option>
                                            <option value="Siguiri">Siguiri</option>
                                            <option value="Télimélé">Télimélé</option>
                                            <option value="Tougué">Tougué</option>
                                            <option value="Yomou">Yomou</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-2">
                                    <button style="margin-left: 0; width: 100%;" type="submit" class="btn btn-default">GO</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </header>
</div>
