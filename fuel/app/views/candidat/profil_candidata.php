<!DOCTYPE HTML>
<html>
<head>
  <?php echo render('inc/meta') ?>
  <?php echo Asset::css('global.css')?>
   <?php echo Asset::css('style.css')?>
 <?php echo Asset::js('jquery-latest.js')?>

	<title>JOBSITE : MODIFIER PROFIL</title>
    <style>.profil input, select, option, button, textarea, label {font-family: Arial,Helvetica,sans-serif;font-size: 11px; color: #666666;}</style>

</head>
<script>
function slide(){
        
        $('#catlist').slideToggle();
         $('#acat').slideToggle();
      
}
</script>
<body class="interne profil candidat" id="">
  <div id="main">
  <div id="top"></div>
    <div id="content">
        <div id="left">
          <?php echo render('inc/header')?>
          <div class="espace">
              <div class="haut">
                <p class="left">Bienvenue <span><?php echo $candidat->prenom.' '.$candidat->nom; ?></span></p>
                <div class="right">
                   <ul>
                     <li><a href="#">Nouvelles Offres</a></li>
                     <li><a href="<?php echo Uri::base(false).'candidat/profilCandidat'?>">Mon Profil Public</a></li>
                     <li class="last"><a href="<?php echo Uri::base(false).'candidat/alertjob'?>">Cr�er des AlertsJobs </a></li>
                   </ul>
                </div>
              </div>
            <div class="form">
                <ul class="errors">
            <?php 
            if(isset($errors)):
              foreach($errors as $cle=>$val):
				echo '<li>'.$val.'</li>';
			  endforeach;
            endif;
            
            ?></ul>
            <form class="formKJ" method="post" action="<?php echo Uri::base(false).'candidat/add/'?>" style="float:left" onsubmit="loadContent()">
	<input type="hidden" name="cvdoc" value="<?php echo $candidat->cvdoc ?>"/><input type="hidden" name="photo" value="<?php echo $candidat->photo ?>" /><input type="hidden" name="pwd"  value="<?php echo $candidat->pwd ?>"/>
  <input type="hidden" name="idCandidat" value="<?php echo $candidat->idCandidat ?>"/>
  <h2>DONN�ES PERSONNELLES </h2>
    <fieldset class="highlightCreationCompte">
    <ol>
        <!-- START Data only available when modifying candidate -->
        
        
        <li>
                <label>Etat Civil :</label>
                <span class="optgroup">
                
                            <input type="radio" class="radio" id="genderIdsElement1" value="M."  <?php echo ($candidat->etat_civil=="M.") ? ("checked=''") : ("") ?>  name="etat_civil">
                            <label for="genderIdsElement1">M.</label>                          
                        
                            <input type="radio" class="radio" id="genderIdsElement2" value="Mme." <?php echo ($candidat->etat_civil=="Mme.") ? ("checked=''") : ("") ?> name="etat_civil">
                            <label for="genderIdsElement2">Mme.</label>                          
                        
                            <input type="radio" class="radio" id="genderIdsElement3" value="Melle."  <?php echo ($candidat->etat_civil=="Melle.") ? ("checked=''") : ("") ?>name="etat_civil">
                            <label for="genderIdsElement3">Melle.</label>                          
                        
            </span>
            
            </li>
            
            <li> 
                <label for="lastName">Nom*&nbsp;:</label>
                <input type="text" value="<?php echo $candidat->nom ?>" id="lastName" name="nom" maxlength="32"/>
                
            </li>
            <li>         
                <label for="firstName">Pr�nom*&nbsp;:</label>
                <input type="text" value="<?php echo $candidat->prenom ?>" id="firstName" name="prenom" maxlength="32">
                  
            </li>
         
       <!-- END Data only available when modifying candidate -->
       <li> 
                <label for="age">Tranche d'�ge&nbsp;:</label>
                <select id="age" name="tranche_age">
        
              <option value="0" <?php echo ($candidat->etat_civil=="0") ? ("selected=''") : ("") ?>>...</option>
            
              <option value="Moins de 18 ans" <?php echo ($candidat->tranche_age=="Moins de 18 ans") ? ("selected=''") : ("") ?>>Moins de 18 ans</option>
            
              <option value="18 - 24" <?php echo ($candidat->tranche_age=="18 - 24") ? ("selected=''") : ("") ?>>18 - 24</option>
            
              <option <?php echo ($candidat->tranche_age=="25 - 34") ? ("selected=''") : ("") ?> value="25 - 34">25 - 34</option>
            
              <option <?php echo ($candidat->tranche_age=="35 - 44") ? ("selected=''") : ("") ?>value="35 - 44">35 - 44</option>
            
              <option <?php echo ($candidat->tranche_age=="45 - 65") ? ("selected=''") : ("") ?>value="45 - 65">45 - 65</option>
            
              <option <?php echo ($candidat->tranche_age=="Plus de 65 ans") ? ("selected=''") : ("") ?>value="Plus de 65 ans">Plus de 65 ans</option>
            
      </select>
                
       </li>
            <li>
        <label for="address">Adresse&nbsp;:</label>
        <input value="<?php echo $candidat->adresse ?>" maxlength="256" id="address" name="adresse">
            </li>
				<li>
        <label for="country">Pays*&nbsp;:</label> 
        <select id="country" name="pays">
        
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
      
      </li>
            
            <li>
        <label for="city">Ville*&nbsp;: </label>
        
            <select id="ville" class="last" name="ville">
              <option value="1">Conakry</option>
              <option value="2">Beyla</option>
              <option value="3">Boffa</option>
              <option value="4">Bok�</option>
             
              <option value="5">Coyah</option>
              <option value="6">Dabola</option>
              <option value="7">Dalaba</option>
              <option value="8">Dinguiraye</option>
              <option value="9">Dubr�ka</option>
              <option value="10">Faranah</option>
              <option value="11">For�kariah</option>
              <option value="12">Fria</option>
              <option value="13">Gaoual</option>
              <option value="14">Gu�k�dou</option>
              <option value="15">Kankan</option>
              <option value="16">K�rouan�</option>
              <option value="17"> Kindia</option>
              <option value="18">Kissidougou</option>
              <option value="19">Koubia</option>
              <option value="20">Koundara</option>
              <option value="21">Kouroussa</option>
              <option value="22">Lab�</option>
              <option value="23">Lelouma</option>
              <option value="24">Lola</option>
              <option value="25">Macenta</option>
              <option value="26">Mali</option>
              <option value="27">Mamou</option>
              <option value="28">Mandiana</option>
              <option value="29">N'Z�r�kor�</option>
              <option value="30">Pita</option>
              <option value="31">Siguiri</option>
              <option value="32">T�lim�l�</option>
              <option value="33">Tougu�</option>
              <option value="34">Yomou</option>
            </select>
        
               
      </li>
        
            
            <li>
        <div class="intPhoneNumber">
          <label for="codePhoneNumber">T�l�phone :</label> 
            
          <input value="<?php echo $candidat->phone ?>" maxlength="15" name="phone">
       </div>
       
            </li>
            
      
    </ol>
        </fieldset>
        <h2>SITUATION ACTUELLE</h2>
    <fieldset class="highlightCreationCompte">
    <ol>
            <li>
        <label for="activity">Activit�*&nbsp;:</label>
        <select id="activity" name="activite">
          
                    <option value="0" <?php echo ($candidat->activite=="0") ? ("selected=''") : ("") ?>>...</option>
                
                    <option <?php echo ($candidat->activite=="1") ? ("selected=''") : ("") ?> value="1">En poste, en recherche active</option>
                
                    <option <?php echo ($candidat->activite=="2") ? ("selected=''") : ("") ?>value="2">En poste, � l'�coute du march�</option>
                
                    <option <?php echo ($candidat->activite=="3") ? ("selected=''") : ("") ?>value="3">Etudiant</option>
                
                    <option <?php echo ($candidat->activite=="4") ? ("selected=''") : ("") ?>value="4">Sans emploi</option>
                
      </select>
     
      </li>
      <li>
        <label for="status">Statut*&nbsp;:</label>
        <select id="status" name="statut">
          
                <option <?php echo ($candidat->statut=="0") ? ("selected=''") : ("") ?>value="0">...</option>
              
                <option <?php echo ($candidat->statut=="1") ? ("selected=''") : ("") ?> value="1">Employ�</option>
              
                <option <?php echo ($candidat->statut=="2") ? ("selected=''") : ("") ?>value="2">Agent de ma�trise</option>
              
                <option <?php echo ($candidat->statut=="3") ? ("selected=''") : ("") ?>value="3e">Cadre</option>
              
                <option <?php echo ($candidat->statut=="4") ? ("selected=''") : ("") ?>value="4">Cadre dirigeant</option>
              
        </select>
        
      </li>
     </ol>
        </fieldset>
        <h2>EXP�RIENCE PROFESSIONELLE</h2>
    <fieldset class="highlightCreationCompte">
    <ol>
            <li>
        <!--<label for="nbYearExp">D�tails exp�rience*&nbsp;:</label>-->
        <textarea class="description" style="visibility: hidden;width: 424px; height: 1px;" id="exp" name="experience"></textarea>
        <textarea  id="experience" class="mceEditor" rows="3" cols="15" tabindex="2"><?php echo $candidat->experience ?></textarea>
        

      </li>
     </ol>
        </fieldset>
        <h2>FORMATION</h2>
    <fieldset>
    <ol>
      <li>
        <label for="levelEducation">Niveau de formation*&nbsp;:</label>
        <select id="levelEducation" name="niveau_formation">
          
                <option <?php echo ($candidat->niveau_formation=="0") ? ("selected=''") : ("") ?>value="0">...</option>
              
                <option <?php echo ($candidat->niveau_formation=="CAP") ? ("selected=''") : ("") ?> value="CAP">CAP</option>
              
                <option <?php echo ($candidat->niveau_formation=="BEP") ? ("selected=''") : ("") ?>value="BEP">BEP</option>
              
                <option <?php echo ($candidat->niveau_formation=="BAC") ? ("selected=''") : ("") ?>value="BAC">BAC</option>
              
                <option <?php echo ($candidat->niveau_formation=="BAC+1") ? ("selected=''") : ("") ?>value="BAC+1">BAC+1</option>
              
                <option <?php echo ($candidat->niveau_formation=="BAC+2") ? ("selected=''") : ("") ?>value="BAC+2">BAC+2</option>
              
                <option <?php echo ($candidat->niveau_formation=="BAC+3") ? ("selected=''") : ("") ?>value="BAC+3">BAC+3</option>
              
                <option <?php echo ($candidat->niveau_formation=="BAC+4") ? ("selected=''") : ("") ?>value="BAC+4">BAC+4</option>
              
                <option <?php echo ($candidat->niveau_formation=="BAC+5") ? ("selected=''") : ("") ?>value="BAC+5">BAC+5</option>
              
                <option <?php echo ($candidat->niveau_formation=="&gt; BAC+5") ? ("selected=''") : ("") ?>value="&gt; BAC+5">&gt; BAC+5</option>
              
        </select>
        
            </li>
      <li>
        <label for="firstLanguage">Premi�re langue&nbsp;:</label>
        <select id="firstLanguage" name="premiere_langue">
          
                <option <?php echo ($candidat->premiere_langue=="0") ? ("selected=''") : ("") ?> value="0">S�lectionnez votre choix ...</option>
              
                <option <?php echo ($candidat->premiere_langue=="1") ? ("selected=''") : ("") ?>value="1">Allemand</option>
              
                <option <?php echo ($candidat->premiere_langue=="2") ? ("selected=''") : ("") ?>value="2">Anglais</option>
              
                <option <?php echo ($candidat->premiere_langue=="3") ? ("selected=''") : ("") ?>value="3">Arabe</option>
              
                <option <?php echo ($candidat->premiere_langue=="4") ? ("selected=''") : ("") ?>value="4">Chinois</option>
              
               
                <option <?php echo ($candidat->premiere_langue=="5") ? ("selected=''") : ("") ?>value="5">Fran�ais</option>
              
                
                <option <?php echo ($candidat->premiere_langue=="6") ? ("selected=''") : ("") ?>value="6">Russe</option>
              
              
        </select>
      
            </li>
      <li>
        <label for="levelFirstLanguage">Niveau de premi�re langue&nbsp;:</label>
        <select id="levelFirstLanguage" name="niveau_plangue">
          
                <option <?php echo ($candidat->niveau_plangue=="0") ? ("selected=''") : ("") ?> value="0">S�lectionnez votre choix ...</option>
              
                <option <?php echo ($candidat->niveau_plangue=="1") ? ("selected=''") : ("") ?>value="1">D�butant</option>
              
                <option <?php echo ($candidat->niveau_plangue=="2") ? ("selected=''") : ("") ?>value="2">Moyen</option>
              
                <option <?php echo ($candidat->niveau_plangue=="3") ? ("selected=''") : ("") ?>value="3">Courant</option>
              
                <option <?php echo ($candidat->niveau_plangue=="4") ? ("selected=''") : ("") ?>value="3">Bilingue</option>
              
              
        </select>
      
      </li>
            <li>
        <label for="secondLanguage">Deuxi�me langue&nbsp;:</label>
        <select id="firstLanguage" name="deuxieme_langue">
          
                <option <?php echo ($candidat->deuxieme_langue=="0") ? ("selected=''") : ("") ?> value="0">S�lectionnez votre choix ...</option>
              
                <option <?php echo ($candidat->deuxieme_langue=="1") ? ("selected=''") : ("") ?>value="1">Allemand</option>
              
                <option <?php echo ($candidat->deuxieme_langue=="2") ? ("selected=''") : ("") ?>value="2">Anglais</option>
              
                <option <?php echo ($candidat->deuxieme_langue=="3") ? ("selected=''") : ("") ?>value="3">Arabe</option>
              
                <option <?php echo ($candidat->deuxieme_langue=="4") ? ("selected=''") : ("") ?>value="4">Chinois</option>
              
               
                <option <?php echo ($candidat->deuxieme_langue=="5") ? ("selected=''") : ("") ?>value="5">Fran�ais</option>
              
                
                <option <?php echo ($candidat->deuxieme_langue=="6") ? ("selected=''") : ("") ?>value="6">Russe</option>
              
              
        </select>
      
            </li>
      <li>
        <label for="levelSecondLanguage">Niveau deuxi�me langue&nbsp;:</label>
        <select id="levelSecondLanguage" name="niveau_dlangue">
          
                <option <?php echo ($candidat->niveau_dlangue=="0") ? ("selected=''") : ("") ?> value="0">S�lectionnez votre choix ...</option>
              
                <option <?php echo ($candidat->niveau_dlangue=="1") ? ("selected=''") : ("") ?>value="1">D�butant</option>
              
                <option <?php echo ($candidat->niveau_dlangue=="2") ? ("selected=''") : ("") ?>value="2">Moyen</option>
              
                <option <?php echo ($candidat->niveau_dlangue=="3") ? ("selected=''") : ("") ?>value="3">Courant</option>
              
                <option <?php echo ($candidat->niveau_dlangue=="4") ? ("selected=''") : ("") ?>value="4">Bilingue</option>
              
        </select>
      
      </li>
    </ol>
        </fieldset>
    <p class="btnValiderP">
          <button value="Valider et continuer" type="submit" class="btnType1 bgType1">
			
				<span>Valider</span>
			
		</button>
    </p>
	</form>
              </div>
          </div>
           <ul class="bot" id="espace">
                <li><a href="#" class="one">D�posez votre CV</a></li>
                <li><a href="#" class="two">Espace Candidats</a></li>
                <li><a href="#" class="three">Espace Annonceurs</a></li>
             
             </ul>
        
        
        </div>
        <?php echo render('inc/right')?>
   
    </div>
  
  </div>
<?php echo render('inc/footer')?>
<script>
var editor = new TINY.editor.edit('editor', {
	id: 'experience',
	width: 584,
	height: 175,
	cssclass: 'tinyeditor',
	controlclass: 'tinyeditor-control',
	rowclass: 'tinyeditor-header',
	dividerclass: 'tinyeditor-divider',
	controls: ['bold', 'italic'],
	footer: true,
	fonts: ['Verdana','Arial','Georgia','Trebuchet MS'],
	xhtml: true,
	cssfile: 'custom.css',
	bodyid: 'editor',
	footerclass: 'tinyeditor-footer',
	toggle: {text: 'source', activetext: 'wysiwyg', cssclass: 'toggle'},
	resize: {cssclass: 'resize'}
});
</script>
</body>
</html>