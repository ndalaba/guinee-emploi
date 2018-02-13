<!DOCTYPE HTML>
<html>
    <head>
        <title>Guinee-Emploi : MES ALERTES EMAILS</title>
        <?php echo render('inc/meta') ?>
        <?php echo Asset::css('global.css') ?>
        <?php echo Asset::js('jquery-latest.js') ?>      
    </head>
    <script>
        function slide() {

            $('#catlist').slideToggle();
            $('#acat').slideToggle();

        }
    </script><style>.formKJ {float: left;width: 100%;}.profil input, select, option, button, textarea, label {font-family: Arial,Helvetica,sans-serif;font-size: 11px; color: #666666;}</style>
    <body class="interne profil candidat" id="">
        <div id="main">
            <div id="top"></div>
            <div id="content">
                <div id="left">
                    <?php echo render('inc/header') ?>
                    <div class="espace">
                        <div class="haut">
                            <p class="left">Bienvenue <span><?php echo $candidat->prenom . ' ' . $candidat->nom; ?></span></p>
                            <?php echo render('inc/space') ?>
                        </div>
                        <div class="form">
                            <ul class="errors">
                                <?php
                                if (isset($errors)):
                                    foreach ($errors as $cle => $val):
                                        echo '<li>' . $val . '</li>';
                                    endforeach;
                                endif;
                                ?></ul>
                            <div id="alert">

                                <h1 class="bigtitle">CREER MON ALERTE EMAIL</h1>

                                <!-- fil d'Ariane inscription -->



                                <form class="formKJ formCreateAlert" method="post" action="<?php echo Uri::base(false) . 'candidat/creerAlert/' ?>">

                                    <input type="hidden" value="" name="idAlert"/>

                                    <fieldset class="highlightCreationCompte">
                                        <ol>
                                            <li> 
                                                <label for="alertName">Nom de l'alerte*&nbsp;:</label> 
                                                <input type="text" value="" maxlength="64" name="titre"/>

                                            </li>

                                            <li>
                                                <label for="country">Pays*&nbsp;:</label> 
                                                <select id="country" name="pays">

                                                    <option value="">SELECTIONNER</option>
                                                    <option value="FRANCE">FRANCE</option>

                                                    <option value="ALLEMAGNE">ALLEMAGNE</option>

                                                    <option value="AUTRICHE">AUTRICHE</option>

                                                    <option value="BELGIQUE">BELGIQUE</option>

                                                    <option value="ESPAGNE">ESPAGNE</option>

                                                    <option value="FINLANDE">FINLANDE</option>

                                                    <option value="GRECE">GRECE</option>

                                                    <option value="IRLANDE">IRLANDE</option>

                                                    <option value="ITALIE">ITALIE</option>

                                                    <option value="PORTUGAL">PORTUGAL</option>

                                                    <option value="ROYAUME UNI">ROYAUME UNI</option>

                                                    <option value="SUEDE">SUEDE</option>

                                                    <option value="SUISSE">SUISSE</option>

                                                    <option value="ALBANIE">ALBANIE</option>

                                                    <option value="ANDORRE">ANDORRE</option>

                                                    <option value="BIELORUSSIE">BIELORUSSIE</option>

                                                    <option value="BOSNIE HERZEGOVINE">BOSNIE HERZEGOVINE</option>

                                                    <option value="BULGARIE">BULGARIE</option>

                                                    <option value="CROATIE">CROATIE</option>

                                                    <option value="DANEMARK">DANEMARK</option>

                                                    <option value="ESTONIE">ESTONIE</option>

                                                    <option value="HONGRIE">HONGRIE</option>

                                                    <option value="ISLANDE">ISLANDE</option>

                                                    <option value="KOSOVO">KOSOVO</option>

                                                    <option value="LETTONIE">LETTONIE</option>

                                                    <option value="LIECHTENSTEIN">LIECHTENSTEIN</option>

                                                    <option value="LITUANIE">LITUANIE</option>

                                                    <option value="LUXEMBOURG">LUXEMBOURG</option>

                                                    <option value="MACEDOINE">MACEDOINE</option>

                                                    <option value="MOLDAVIE">MOLDAVIE</option>

                                                    <option value="MONACO">MONACO</option>

                                                    <option value="NORVEGE">NORVEGE</option>

                                                    <option value="PAYS BAS">PAYS BAS</option>

                                                    <option value="POLOGNE">POLOGNE</option>

                                                    <option value="REPUBLIQUE TCHEQUE">REPUBLIQUE TCHEQUE</option>

                                                    <option value="ROUMANIE">ROUMANIE</option>

                                                    <option value="SLOVAQUIE">SLOVAQUIE</option>

                                                    <option value="SLOVENIE">SLOVENIE</option>

                                                    <option value="UKRAINE">UKRAINE</option>

                                                    <option value="YOUGOSLAVIE">YOUGOSLAVIE</option>

                                                    <option value="CANADA">CANADA</option>

                                                    <option value="ETATS UNIS">ETATS UNIS</option>

                                                    <option value="MEXIQUE">MEXIQUE</option>

                                                    <option value="ARGENTINE">ARGENTINE</option>

                                                    <option value="BOLIVIE">BOLIVIE</option>

                                                    <option value="BRESIL">BRESIL</option>

                                                    <option value="CHILIE">CHILIE</option>

                                                    <option value="COLOMBIE">COLOMBIE</option>

                                                    <option value="EQUATEUR">EQUATEUR</option>

                                                    <option value="GUYANA">GUYANA</option>

                                                    <option value="PEROU">PEROU</option>

                                                    <option value="SURINAM">SURINAM</option>

                                                    <option value="URUGUAY">URUGUAY</option>

                                                    <option value="VENEZUELA">VENEZUELA</option>

                                                    <option value="CARAIBES">CARAIBES</option>

                                                    <option value="COSTA RICA">COSTA RICA</option>

                                                    <option value="GUATEMALA">GUATEMALA</option>

                                                    <option value="HONDURAS">HONDURAS</option>

                                                    <option value="NICARAGUA">NICARAGUA</option>

                                                    <option value="PANAMA">PANAMA</option>

                                                    <option value="PARAGUAY">PARAGUAY</option>

                                                    <option value="SALVADOR">SALVADOR</option>

                                                    <option value="AUSTRALIE">AUSTRALIE</option>

                                                    <option value="NOUVELLE ZELANDE">NOUVELLE ZELANDE</option>

                                                    <option value="PAPOUASIE">PAPOUASIE</option>

                                                    <option value="AFRIQUE DU SUD">AFRIQUE DU SUD</option>

                                                    <option value="ALGERIE">ALGERIE</option>

                                                    <option value="ANGOLA">ANGOLA</option>

                                                    <option value="BENIN">BENIN</option>

                                                    <option value="BURKINA FASO">BURKINA FASO</option>

                                                    <option value="BURUNDI">BURUNDI</option>

                                                    <option value="BOTSWANA">BOTSWANA</option>

                                                    <option value="CAMEROUN">CAMEROUN</option>

                                                    <option value="CONGO">CONGO</option>

                                                    <option value="COTE D'IVOIRE">COTE D'IVOIRE</option>

                                                    <option value="DJIBOUTI">DJIBOUTI</option>

                                                    <option value="EGYPTE">EGYPTE</option>

                                                    <option value="ERYTHREE">ERYTHREE</option>

                                                    <option value="ETHIOPIE">ETHIOPIE</option>

                                                    <option value="GABON">GABON</option>

                                                    <option value="GAMBIE">GAMBIE</option>

                                                    <option value="GHANA">GHANA</option>

                                                    <option selected="selected " value="GUINEE">GUINEE</option>

                                                    <option value="GUINEE BISSAU">GUINEE BISSAU</option>

                                                    <option value="KENYA">KENYA</option>

                                                    <option value="LIBERIA">LIBERIA</option>

                                                    <option value="LIBYE">LIBYE</option>

                                                    <option value="MADAGASCAR">MADAGASCAR</option>

                                                    <option value="MALAWIE">MALAWIE</option>

                                                    <option value="MALI">MALI</option>

                                                    <option value="MAROC">MAROC</option>

                                                    <option value="MAURITANIE">MAURITANIE</option>

                                                    <option value="MOZAMBIQUE">MOZAMBIQUE</option>

                                                    <option value="NAMIBIE">NAMIBIE</option>

                                                    <option value="NIGER">NIGER</option>

                                                    <option value="NIGERIA">NIGERIA</option>

                                                    <option value="OUGANDA">OUGANDA</option>

                                                    <option value="REP.CENTRAFRICAINE">REP.CENTRAFRICAINE</option>

                                                    <option value="REP.DEM.DU CONGO">REP.DEM.DU CONGO</option>

                                                    <option value="RWANDA">RWANDA</option>

                                                    <option value="SENEGAL">SENEGAL</option>

                                                    <option value="SIERRA LEONE">SIERRA LEONE</option>

                                                    <option value="SOMALIE">SOMALIE</option>

                                                    <option value="SOUDAN">SOUDAN</option>

                                                    <option value="SWAZILAND">SWAZILAND</option>

                                                    <option value="TANZANIE">TANZANIE</option>

                                                    <option value="TCHAD">TCHAD</option>

                                                    <option value="TUNISIE">TUNISIE</option>

                                                    <option value="TOGO">TOGO</option>

                                                    <option value="ZAMBIE">ZAMBIE</option>

                                                    <option value="CAP-VERT">CAP-VERT</option>

                                                    <option value="COMORES">COMORES</option>

                                                    <option value="MAURICE">MAURICE</option>

                                                    <option value="SEYCHELLES">SEYCHELLES</option>

                                                    <option value="AFGHANISTAN">AFGHANISTAN</option>

                                                    <option value="ARABIE SAOUDITE">ARABIE SAOUDITE</option>

                                                    <option value="ARMENIE">ARMENIE</option>

                                                    <option value="AZERBAIDJAN">AZERBAIDJAN</option>

                                                    <option value="BANGLADESH">BANGLADESH</option>

                                                    <option value="BIRMANIE">BIRMANIE</option>

                                                    <option value="BOUTHAN">BOUTHAN</option>

                                                    <option value="CAMBODGE">CAMBODGE</option>

                                                    <option value="CHINE">CHINE</option>

                                                    <option value="COREE DU NORD">COREE DU NORD</option>

                                                    <option value="COREE DU SUD">COREE DU SUD</option>

                                                    <option value="EMIRATS ARABES UNIS">EMIRATS ARABES UNIS</option>

                                                    <option value="GEORGIE">GEORGIE</option>

                                                    <option value="HONG KONG">HONG KONG</option>

                                                    <option value="INDE">INDE</option>

                                                    <option value="INDONESIE">INDONESIE</option>

                                                    <option value="IRAN">IRAN</option>

                                                    <option value="IRAK">IRAK</option>

                                                    <option value="ISRAEL">ISRAEL</option>

                                                    <option value="JAPON">JAPON</option>

                                                    <option value="JORDANIE">JORDANIE</option>

                                                    <option value="KAZAKHSTAN">KAZAKHSTAN</option>

                                                    <option value="KIRGHIZSTAN">KIRGHIZSTAN</option>

                                                    <option value="KOWEIT">KOWEIT</option>

                                                    <option value="LAOS">LAOS</option>

                                                    <option value="LIBAN">LIBAN</option>

                                                    <option value="MALAISIE">MALAISIE</option>

                                                    <option value="MONGOLIE">MONGOLIE</option>

                                                    <option value="NEPAL">NEPAL</option>

                                                    <option value="OMAN">OMAN</option>

                                                    <option value="OUZBEKISTAN">OUZBEKISTAN</option>

                                                    <option value="PAKISTAN">PAKISTAN</option>

                                                    <option value="PHILIPINES">PHILIPINES</option>

                                                    <option value="QATAR">QATAR</option>

                                                    <option value="RUSSIE">RUSSIE</option>

                                                    <option value="TADJIKISTAN">TADJIKISTAN</option>

                                                    <option value="TAIWAN">TAIWAN</option>

                                                    <option value="THAILANDE">THAILANDE</option>

                                                    <option value="TURKMENISTAN">TURKMENISTAN</option>

                                                    <option value="TURQUIE">TURQUIE</option>

                                                    <option value="VIETNAM">VIETNAM</option>

                                                    <option value="YEMEN">YEMEN</option>

                                                </select>

                                            </li><li>
                                                <label for="city">Ville*&nbsp;: </label>

                                                <select id="ville" class="last" name="ville">
                                                    <option value="1">Conakry</option>
                                                    <option value="2">Beyla</option>
                                                    <option value="3">Boffa</option>
                                                    <option value="4">Boké</option>
                                                    <option value="5">Coyah</option>
                                                    <option value="6">Dabola</option>
                                                    <option value="7">Dalaba</option>
                                                    <option value="8">Dinguiraye</option>
                                                    <option value="9">Dubréka</option>
                                                    <option value="10">Faranah</option>
                                                    <option value="11">Forékariah</option>
                                                    <option value="12">Fria</option>
                                                    <option value="13">Gaoual</option>
                                                    <option value="14">Guékédou</option>
                                                    <option value="15">Kankan</option>
                                                    <option value="16">Kérouané</option>
                                                    <option value="17"> Kindia</option>
                                                    <option value="18">Kissidougou</option>
                                                    <option value="19">Koubia</option>
                                                    <option value="20">Koundara</option>
                                                    <option value="21">Kouroussa</option>
                                                    <option value="22">Labé</option>
                                                    <option value="23">Lelouma</option>
                                                    <option value="24">Lola</option>
                                                    <option value="25">Macenta</option>
                                                    <option value="26">Mali</option>
                                                    <option value="27">Mamou</option>
                                                    <option value="28">Mandiana</option>
                                                    <option value="29">N'Zérékoré</option>
                                                    <option value="30">Pita</option>
                                                    <option value="31">Siguiri</option>
                                                    <option value="32">Télimélé</option>
                                                    <option value="33">Tougué</option>
                                                    <option value="34">Yomou</option>
                                                </select>


                                            </li>        
                                            <li>

                                                <label class="haute" for="selectedFunctionIds">Fonction(s) :</label>
                                                <select  id="function" name="fonction">
                                                    <option value="">--Toutes les fonctions--</option>
                                                    <?php if (isset($fonctions)) {
                                                        foreach ($fonctions as $fonction):
                                                            ?>
                                                            <option  value="<?php echo $fonction->idFonction ?>"><?php echo utf8_decode($fonction->fonction) ?></option>
                                                        <?php endforeach;
                                                    }
                                                    ?>

                                                </select>
                                            </li>
                                            <li> 
                                                <label for="keywords">Mots-clés:</label> 
                                                <input type="text" value="" maxlength="64" name="motcles"/>

                                            </li>

                                            <li> 
                                                <label for="employer">Société&nbsp;:</label> 
                                                <select name="idRecruteur">
                                                    <option value="">--Toutes les sociétés--</option>
                                                    <?php foreach ($recruteurs as $recruteur): ?>
                                                        <option value="<?php echo $recruteur->idRecruteur ?>"><?php echo $recruteur->nom ?></option>
<?php endforeach; ?>
                                                </select>
                                            </li>
                                            <li>
                                                <label for="contrats">Type de contrat&nbsp;:</label>
                                                <span class="optgroup">

                                                    <input type="checkbox" id="type_contratCDI" value="CDI" name="type_contrat[]" class="cocher">
                                                    <label for="type_contrat1" class="checkboxLabel">CDI</label>							

                                                    <input type="checkbox" id="type_contratCDD" value="CDD" name="type_contrat[]" class="cocher">
                                                    <label for="type_contrat2" class="checkboxLabel">CDD</label>							

                                                    <input type="checkbox" id="type_contratStage" value="Stage" name="type_contrat[]" class="cocher">
                                                    <label for="type_contrat3" class="checkboxLabel">Stage</label>							

                                                    <input type="checkbox" id="type_contratIntérim" value="Interim" name="type_contrat[]" class="cocher">
                                                    <label for="type_contrat4" class="checkboxLabel">Intérim</label>							



                                                    <input type="checkbox" id="type_contratAlternance" value="Alternance" name="type_contrat[]" class="cocher">
                                                    <label for="type_contrat7" class="checkboxLabel">Alternance</label>							

                                                    <input type="checkbox" id="type_contratFreelance" value="Freelance" name="type_contrat[]" class="cocher">
                                                    <label for="type_contrat8" class="checkboxLabel">Freelance</label>							


                                                </span>
                                            </li>
                                            <li> 
                                                <label for="sector">Secteur d'activité&nbsp;:</label> 
                                                <select id="sector" name="secteur_activite">

                                                    <option selected="selected" value="">
                                                        Tous les secteurs
                                                    </option>

                                                    <option value="11">
                                                        Agriculture / Agroalimentaire / Environnement
                                                    </option>

                                                    <option value="64">
                                                        Associatif / Art / Culture
                                                    </option>

                                                    <option value="128">
                                                        Banques / Assurances / Finance
                                                    </option>

                                                    <option value="130">
                                                        &nbsp;&nbsp;&nbsp;-&nbsp;Assurances
                                                    </option>

                                                    <option value="129">
                                                        &nbsp;&nbsp;&nbsp;-&nbsp;Banques, Etablissements de crédits
                                                    </option>

                                                    <option value="131">
                                                        &nbsp;&nbsp;&nbsp;-&nbsp;Finance de marché
                                                    </option>

                                                    <option value="50">
                                                        Commerce / Distribution
                                                    </option>

                                                    <option value="52">
                                                        &nbsp;&nbsp;&nbsp;-&nbsp;Distribution de détail, spécialisée
                                                    </option>

                                                    <option value="53">
                                                        &nbsp;&nbsp;&nbsp;-&nbsp;E-commerce, Vente en ligne
                                                    </option>

                                                    <option value="51">
                                                        &nbsp;&nbsp;&nbsp;-&nbsp;Grande distribution
                                                    </option>

                                                    <option value="46">
                                                        Communication / Publicité / Média
                                                    </option>

                                                    <option value="47">
                                                        &nbsp;&nbsp;&nbsp;-&nbsp;Communication, Publicité
                                                    </option>

                                                    <option value="48">
                                                        &nbsp;&nbsp;&nbsp;-&nbsp;Edition, Presse, Gestion de contenus
                                                    </option>

                                                    <option value="49">
                                                        &nbsp;&nbsp;&nbsp;-&nbsp;Internet, Multimédia, Audiovisuel
                                                    </option>

                                                    <option value="38">
                                                        Conseil / Consulting
                                                    </option>

                                                    <option value="41">
                                                        &nbsp;&nbsp;&nbsp;-&nbsp;Cabinets d'interim, Cabinets de recrutement, Conseil RH
                                                    </option>

                                                    <option value="40">
                                                        &nbsp;&nbsp;&nbsp;-&nbsp;Conseil en organisation, Conseil en management
                                                    </option>

                                                    <option value="39">
                                                        &nbsp;&nbsp;&nbsp;-&nbsp;Conseil juridique, Fiscal, Cabinets d'avocats
                                                    </option>

                                                    <option value="17">
                                                        Construction / BTP / Immobilier
                                                    </option>

                                                    <option value="18">
                                                        &nbsp;&nbsp;&nbsp;-&nbsp;Architecture
                                                    </option>

                                                    <option value="19">
                                                        &nbsp;&nbsp;&nbsp;-&nbsp;Construction, BTP, TP
                                                    </option>

                                                    <option value="20">
                                                        &nbsp;&nbsp;&nbsp;-&nbsp;Immobilier
                                                    </option>

                                                    <option value="58">
                                                        Enseignement / Formation
                                                    </option>

                                                    <option value="21">
                                                        Industries
                                                    </option>

                                                    <option value="22">
                                                        &nbsp;&nbsp;&nbsp;-&nbsp;Aéronautique
                                                    </option>

                                                    <option value="23">
                                                        &nbsp;&nbsp;&nbsp;-&nbsp;Automobile
                                                    </option>

                                                    <option value="31">
                                                        &nbsp;&nbsp;&nbsp;-&nbsp;Bureau d'études, Ingénierie
                                                    </option>

                                                    <option value="29">
                                                        &nbsp;&nbsp;&nbsp;-&nbsp;Industrie pharmaceutique
                                                    </option>

                                                    <option value="28">
                                                        &nbsp;&nbsp;&nbsp;-&nbsp;Industries chimique, pétrochimique et minière
                                                    </option>

                                                    <option value="25">
                                                        &nbsp;&nbsp;&nbsp;-&nbsp;Industries manufacturières et production
                                                    </option>

                                                    <option value="26">
                                                        &nbsp;&nbsp;&nbsp;-&nbsp;Matières premières
                                                    </option>

                                                    <option value="30">
                                                        &nbsp;&nbsp;&nbsp;-&nbsp;Technologies de pointe, Electronique
                                                    </option>

                                                    <option value="27">
                                                        &nbsp;&nbsp;&nbsp;-&nbsp;Transformation des matériaux
                                                    </option>

                                                    <option value="32">
                                                        Informatique /Télécom
                                                    </option>

                                                    <option value="33">
                                                        &nbsp;&nbsp;&nbsp;-&nbsp;Constructeurs, Hardware
                                                    </option>

                                                    <option value="34">
                                                        &nbsp;&nbsp;&nbsp;-&nbsp;Editeurs logiciels, Software
                                                    </option>

                                                    <option value="35">
                                                        &nbsp;&nbsp;&nbsp;-&nbsp;Multimédia et Internet
                                                    </option>

                                                    <option value="37">
                                                        &nbsp;&nbsp;&nbsp;-&nbsp;SSII
                                                    </option>

                                                    <option value="36">
                                                        &nbsp;&nbsp;&nbsp;-&nbsp;Télécom
                                                    </option>

                                                    <option value="42">
                                                        Services aux entreprises
                                                    </option>

                                                    <option value="45">
                                                        &nbsp;&nbsp;&nbsp;-&nbsp;Autres tertiaires
                                                    </option>

                                                    <option value="44">
                                                        &nbsp;&nbsp;&nbsp;-&nbsp;Entretien, nettoyage
                                                    </option>

                                                    <option value="43">
                                                        &nbsp;&nbsp;&nbsp;-&nbsp;Sécurité, gardiennage
                                                    </option>

                                                    <option value="59">
                                                        Santé / Social
                                                    </option>

                                                    <option value="60">
                                                        &nbsp;&nbsp;&nbsp;-&nbsp;Hôpitaux, Médecine
                                                    </option>

                                                    <option value="61">
                                                        &nbsp;&nbsp;&nbsp;-&nbsp;Pharmacie, Paramédical
                                                    </option>

                                                    <option value="62">
                                                        &nbsp;&nbsp;&nbsp;-&nbsp;Social, Services à la personne
                                                    </option>

                                                    <option value="63">
                                                        Secteur Public
                                                    </option>

                                                    <option value="54">
                                                        Tourisme / Hôtellerie / Restauration / Loisirs
                                                    </option>

                                                    <option value="56">
                                                        &nbsp;&nbsp;&nbsp;-&nbsp;Hôtellerie
                                                    </option>

                                                    <option value="57">
                                                        &nbsp;&nbsp;&nbsp;-&nbsp;Restauration
                                                    </option>

                                                    <option value="55">
                                                        &nbsp;&nbsp;&nbsp;-&nbsp;Tourisme, Loisirs
                                                    </option>

                                                    <option value="13">
                                                        Transport / Logistique
                                                    </option>

                                                    <option value="15">
                                                        &nbsp;&nbsp;&nbsp;-&nbsp;Logistique
                                                    </option>

                                                    <option value="16">
                                                        &nbsp;&nbsp;&nbsp;-&nbsp;Stockage
                                                    </option>

                                                    <option value="14">
                                                        &nbsp;&nbsp;&nbsp;-&nbsp;Transport
                                                    </option>

                                                </select>
                                            </li>
                                            <li> 
                                                <label class="haute" for="experience">Expérience&nbsp;:</label> 
                                                <select name="experience">

                                                    <option selected="" value="0">(Indifférent)</option>

                                                    <option value="1">Débutant</option>

                                                    <option value="2">Expérimenté</option>

                                                </select>
                                            </li>
                                            <!-- div affichage 0 resultat pour l'alerte -->

                                        </ol>			
                                    </fieldset>
                                    <p class="formbtn"><button value="Valider" type="submit" class="btnType1 bgType1"><span>Valider</span></button></p>
                                </form>
                            </div>
                        </div>
                    </div>
                    <ul class="bot" id="espace">
                        <li><a href="#" class="one">Déposez votre CV</a></li>
                        <li><a href="#" class="two">Espace Candidats</a></li>
                        <li><a href="#" class="three">Espace Annonceurs</a></li>

                    </ul>


                </div>
<?php echo render('inc/right') ?>

            </div>

        </div>
<?php echo render('inc/footer') ?>

    </body>
</html>