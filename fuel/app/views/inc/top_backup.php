<div class="row">
    <header class="col-lg-12">
        <div class="row">

            <p class="col-lg-4 logo" >
                <img src="<?php echo Uri::base(false) . 'assets' ?>/img/logo.png"/>
            </p> 
            <div class="col-lg-8">
                <div class="row">
                    <nav class="col-lg-12">

                        <ul class="row list-unstyled  nav nav-tabs">
                            <li class="spane"></li>
                            <li ><a href="<?php echo Uri::base(false) ?>">Accueil</a></li>
                            <?php if (Session::get('logged_recruteur')): ?>
                                <li ><a href="<?php echo Uri::create('cvtheque') ?>">CVthèque</a></li>
                            <?php endif; ?>
                            <?php if (!Session::get('logged_recruteur')): ?>
                                <li ><a href="<?php echo Uri::create('recruteur') ?>">CVthèque</a></li>
                            <?php endif; ?>
                            <li ><a href="<?php echo Uri::base(false) . 'offre' ?>">Offres d'emploi</a></li>
                            <!--<li><a href="<?php echo Uri::base(false) . 'articles' ?>">News</a></li>-->
                            <li class="last"><a href="<?php echo Uri::base(false) . 'contact' ?>">Contacts</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="row">
                    <div class="col-lg-12" id="recheform">
                        <div class="row"><h3 class="col-lg-11">Recherchez une offre d'emploi</h3></div>
                        <form class="row" action="<?php echo Uri::base(false) . 'offre' ?>" method="post" >
                            <input type="text" name="motcles" id="motcle"  class="col-lg-6 form-control" placeholder="offre d'emploi" />
                            <select id="ville" class="col-lg-4 form-control" name="ville" >
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
                            <input type="submit"  value="GO" class="btn col-lg-2"/>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </header>
</div>
