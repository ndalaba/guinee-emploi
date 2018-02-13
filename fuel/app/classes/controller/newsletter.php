<?php

class Controller_Newsletter extends Controller {

    public function action_index() {
        if (!\Fuel\Core\Session::get('isAdmin')) {
            exit();
        }
        $dest = Model_Newsletter::getMails(0, 10000);
        foreach ($dest as $val) {
            echo $val['email'] . '<br/>';
        }
    }

    public function action_updateOpened($email, $newsletter) {
        Model_Newsletter::updateOpened($email, $newsletter, time());
    }

    public function action_sendNews() {
        if (!\Fuel\Core\Session::get('isAdmin')) {
            exit();
        }
        $titre = "Lettre_" . time();
        $nl = Model_Offre::getLast();
        $message = '<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional //EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
    <head>
        <title>Guinee-Emploi - Toutes les offres d\'emploi et appels d\'offres de la Guinée via email</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=320, target-densitydpi=device-dpi">
        <style type="text/css">
            /* Mobile-specific Styles */
            @media only screen and (max-width: 660px) { 
                table[class=w0], td[class=w0] { width: 0 !important; }
                table[class=w10], td[class=w10], img[class=w10] { width:10px !important; }
                table[class=w15], td[class=w15], img[class=w15] { width:5px !important; }
                table[class=w30], td[class=w30], img[class=w30] { width:10px !important; }
                table[class=w60], td[class=w60], img[class=w60] { width:10px !important; }
                table[class=w125], td[class=w125], img[class=w125] { width:80px !important; }
                table[class=w130], td[class=w130], img[class=w130] { width:55px !important; }
                table[class=w140], td[class=w140], img[class=w140] { width:90px !important; }
                table[class=w160], td[class=w160], img[class=w160] { width:180px !important; }
                table[class=w170], td[class=w170], img[class=w170] { width:100px !important; }
                table[class=w180], td[class=w180], img[class=w180] { width:80px !important; }
                table[class=w195], td[class=w195], img[class=w195] { width:80px !important; }
                table[class=w220], td[class=w220], img[class=w220] { width:80px !important; }
                table[class=w240], td[class=w240], img[class=w240] { width:180px !important; }
                table[class=w255], td[class=w255], img[class=w255] { width:185px !important; }
                table[class=w275], td[class=w275], img[class=w275] { width:135px !important; }
                table[class=w280], td[class=w280], img[class=w280] { width:135px !important; }
                table[class=w300], td[class=w300], img[class=w300] { width:140px !important; }
                table[class=w325], td[class=w325], img[class=w325] { width:95px !important; }
                table[class=w360], td[class=w360], img[class=w360] { width:140px !important; }
                table[class=w410], td[class=w410], img[class=w410] { width:180px !important; }
                table[class=w470], td[class=w470], img[class=w470] { width:200px !important; }
                table[class=w580], td[class=w580], img[class=w580] { width:280px !important; }
                table[class=w640], td[class=w640], img[class=w640] { width:300px !important; }
                table[class*=hide], td[class*=hide], img[class*=hide], p[class*=hide], span[class*=hide] { display:none !important; }
                table[class=h0], td[class=h0] { height: 0 !important; }
                p[class=footer-content-left] { text-align: center !important; }
                #headline p { font-size: 30px !important; }
                .article-content, #left-sidebar{ -webkit-text-size-adjust: 90% !important; -ms-text-size-adjust: 90% !important; }
                .header-content, .footer-content-left {-webkit-text-size-adjust: 80% !important; -ms-text-size-adjust: 80% !important;}
                img { height: auto; line-height: 100%;}
            } 
            /* Client-specific Styles */
            #outlook a { padding: 0; }	/* Force Outlook to provide a "view in browser" button. */
            body { width: 100% !important; }
            .ReadMsgBody { width: 100%; }
            .ExternalClass { width: 100%; display:block !important; } /* Force Hotmail to display emails at full width */
            
            body { background-color: #ececec; margin: 0; padding: 0; }
            img { outline: none; text-decoration: none; display: block;}
            br, strong br, b br, em br, i br { line-height:100%; }
            h1, h2, h3, h4, h5, h6 { line-height: 100% !important; -webkit-font-smoothing: antialiased; }
            h1 a, h2 a, h3 a, h4 a, h5 a, h6 a { color: blue !important; }
            h1 a:active, h2 a:active,  h3 a:active, h4 a:active, h5 a:active, h6 a:active {	color: red !important; }
            /* Preferably not the same color as the normal header link color.  There is limited support for psuedo classes in email clients, this was added just for good measure. */
            h1 a:visited, h2 a:visited,  h3 a:visited, h4 a:visited, h5 a:visited, h6 a:visited { color: purple !important; }
            /* Preferably not the same color as the normal header link color. There is limited support for psuedo classes in email clients, this was added just for good measure. */  
            table td, table tr { border-collapse: collapse; }
            .yshortcuts, .yshortcuts a, .yshortcuts a:link,.yshortcuts a:visited, .yshortcuts a:hover, .yshortcuts a span {
                color: black; text-decoration: none !important; border-bottom: none !important; background: none !important;
            }	
            code {
                white-space: normal;
                word-break: break-all;
            }
            #background-table { background-color: #ececec; }
            /* Webkit Elements */
            #top-bar { border-radius:6px 6px 0px 0px; -moz-border-radius: 6px 6px 0px 0px; -webkit-border-radius:6px 6px 0px 0px; -webkit-font-smoothing: antialiased; background-color: #043948; color: #e7cba3; }
            #top-bar a { font-weight: bold; color: #ffffff; text-decoration: none;}
            #footer { border-radius:0px 0px 6px 6px; -moz-border-radius: 0px 0px 6px 6px; -webkit-border-radius:0px 0px 6px 6px; -webkit-font-smoothing: antialiased; }
            /* Fonts and Content */
            body, td { font-family: \'Helvetica Neue\', Arial, Helvetica, Geneva, sans-serif; }
            .header-content, .footer-content-left, .footer-content-right { -webkit-text-size-adjust: none; -ms-text-size-adjust: none; }
            /* Prevent Webkit and Windows Mobile platforms from changing default font sizes on header and footer. */
            .header-content { font-size: 12px; color: #e7cba3; }
            .header-content a { font-weight: bold; color: #ffffff; text-decoration: none; }
            #headline p { color: #e7cba3; font-family: \'Helvetica Neue\', Arial, Helvetica, Geneva, sans-serif; font-size: 36px; text-align: center; margin-top:0px; margin-bottom:30px; }
            #headline p a { color: #e7cba3; text-decoration: none; }
            #left-sidebar .toc-item { font-family: \'Helvetica Neue\', Arial, Helvetica, Geneva, sans-serif; font-size: 12px; line-height: 16px; color: #292629; margin-top: 0px; margin-bottom: 6px; }
            #left-sidebar .toc-item a { color: #999999; text-decoration: none; font-weight: bold;}
            #left-sidebar .toc-heading { font-family: \'Helvetica Neue\', Arial, Helvetica, Geneva, sans-serif; font-size: 11px; line-height: 15px; color:#9a9661; font-weight:bold; }
            #left-sidebar .toc-heading a {color: #161615;text-decoration: none;font-size: 14px;}
            #left-sidebar .left-column-heading { font-family: \'Helvetica Neue\', Arial, Helvetica, Geneva, sans-serif; font-size: 11px; line-height:15px; color: #9a9661; font-weight:bold; }
            #left-sidebar .left-column-heading a { color: #9a9661; text-decoration:none; }
            #left-sidebar .left-column-subhead { font-family: \'Helvetica Neue\', Arial, Helvetica, Geneva, sans-serif; font-size: 13px; line-height: 16px; color: #999999; font-weight: bold; margin-top: 0px; margin-bottom: 16px; }
            #left-sidebar .left-column-subhead a { color: #999999; text-decoration:none; text-transform:uppercase; }
            #left-sidebar .left-column-content { font-family: \'Helvetica Neue\', Arial, Helvetica, Geneva, sans-serif; font-size: 12px; line-height: 16px; color: #9a9661; margin-top: 0px; margin-bottom: 16px; }
            #left-sidebar .left-column-content a { color: #292629; text-decoration: none; }
            .article-title { font-size: 18px; line-height:24px; color: #516f08; font-weight:bold; margin-top:0px; margin-bottom:18px; font-family: \'Helvetica Neue\', Arial, Helvetica, Geneva, sans-serif; }
            .article-title a { color: #516f08; text-decoration: none; }
            .article-title.with-meta {margin-bottom: 0;}
            .article-meta { font-size: 13px; line-height: 20px; color: #ccc; font-weight: bold; margin-top: 0;}
            .article-content { font-size: 13px; line-height: 18px; color: #444444; margin-top: 0px; margin-bottom: 18px; font-family: \'Helvetica Neue\', Arial, Helvetica, Geneva, sans-serif; }
            .article-content a { color: #84b210; font-weight:bold; text-decoration:none; }
            .article-content img { max-width: 100% }
            .article-content ol, .article-content ul { margin-top:0px; margin-bottom:18px; margin-left:19px; padding:0; }
            .article-content li { font-size: 13px; line-height: 18px; color: #444444; }
            .article-content li a { color: #84b210; text-decoration:underline; }
            .article-content p {margin-bottom: 15px;}
            .footer-content-left { font-size: 12px; line-height: 15px; color: #e2e2e2; margin-top: 0px; margin-bottom: 15px; }
            .footer-content-left a { color: #e7cba3; font-weight: bold; text-decoration: none; }
            .footer-content-right { font-size: 11px; line-height: 16px; color: #e2e2e2; margin-top: 0px; margin-bottom: 15px; }
            .footer-content-right a { color: #e7cba3; font-weight: bold; text-decoration: none; }
            #footer { background-color: #043948; color: #e2e2e2; }
            #footer a { color: #e7cba3; text-decoration: none; font-weight: bold; }
            #permission-reminder { white-space: normal; }
            #street-address { color: #e7cba3; white-space: normal; }
        </style>
        <!--[if gte mso 9]>
        <style _tmplitem="524" >
        .article-content ol, .article-content ul {
           margin: 0 0 0 24px;
           padding: 0;
           list-style-position: inside;
        }
        </style>
        <![endif]-->
    </head>
    <body>
        <table width="100%" cellpadding="0" cellspacing="0" border="0" id="background-table">
            <tbody>
                <tr>
                    <td align="center" bgcolor="#ececec">
                        <table class="w640" style="margin:0 10px;" width="640" cellpadding="0" cellspacing="0" border="0">
                            <tbody>
                                <tr><td class="w640" width="640" height="20"></td></tr>
                                <tr>
                                    <td class="w640" width="640">
                                        <table id="top-bar" class="w640" width="640" cellpadding="0" cellspacing="0" border="0" bgcolor="#f0f5f5">
                                            <tbody><tr>
                                                    <td class="w15" width="15"></td>
                                                    <td class="w325" width="350" valign="middle" align="left">
                                                        <table class="w325" width="350" cellpadding="0" cellspacing="0" border="0">
                                                            <tbody><tr><td class="w325" width="350" height="8"></td></tr>
                                                            </tbody></table>
                                                        <div class="header-content">
                                                            <a href="http://guinee-emploi.com/newsletters/' . \Fuel\Core\Inflector::friendly_title($titre) . '.html">Version WEB</a>
                                                            <span class="hide">&nbsp;&nbsp;|&nbsp; &COPY; <a href="http://www.guinee-webdev.com">Guinee-Webdev</a></span></div>
                                                        <table class="w325" width="350" cellpadding="0" cellspacing="0" border="0">
                                                            <tbody><tr><td class="w325" width="350" height="8"></td></tr>
                                                            </tbody></table>
                                                    </td>
                                                    <td class="w30" width="30"></td>
                                                    <td class="w255" width="255" valign="middle" align="right">
                                                        <table class="w255" width="255" cellpadding="0" cellspacing="0" border="0">
                                                            <tbody><tr><td class="w255" width="255" height="8"></td></tr>
                                                            </tbody></table>
                                                        <table cellpadding="0" cellspacing="0" border="0">
                                                            <tbody>
                                                                <tr>

                                                                    <td valign="middle"><a href="https://www.facebook.com/GuineeEmploi"><img src="https://img.createsend1.com/img/templatebuilder/like-glyph.png" border="0" width="8" height="14" alt="Facebook icon"=""></a></td>
                                                                    <td width="3"></td>
                                                                    <td valign="middle"><div class="header-content"><a href="https://www.facebook.com/GuineeEmploi">J\'aime</a></div></td>
                                                                </tr>
                                                            </tbody></table>
                                                        <table class="w255" width="255" cellpadding="0" cellspacing="0" border="0">
                                                            <tbody><tr><td class="w255" width="255" height="8"></td></tr>
                                                            </tbody></table>
                                                    </td>
                                                    <td class="w15" width="15"></td>
                                                </tr>
                                            </tbody></table>

                                    </td>
                                </tr>
                                <tr>
                                    <td id="header" class="w640" width="640" align="center" bgcolor="#f0f5f5" background="http://www.guinee-emploi.com/assets/img/guinee_interne.png">

                                        <div align="left" style="text-align: left;background-image: url(\'http://www.guinee-emploi.com/assets/img/guinee_interne.png\');background-repeat: no-repeat;">
                                            <a href="http://guinee-emploi.com/">
                                                <img id="customHeaderImage" width="200" src="http://www.guinee-emploi.com/assets/img/logo.png" class="w640" border="0" align="top" style="display: inline"/>
                                            </a>
                                        </div>


                                    </td>
                                </tr>
                                <tr id="twocolumn-content-row">
                                    <td class="w640" width="640">
                                        <table class="w640" width="640" cellpadding="0" cellspacing="0" border="0">
                                            <tbody>
                                                <tr>
                                                    <td class="w15" width="15" bgcolor="#e2e2e2"></td>
                                                    <td id="left-sidebar" class="w140" width="140" bgcolor="#e2e2e2" valign="top" align="left">
                                                        <table class="w140" width="140" cellpadding="0" cellspacing="0" border="0">
                                                            <tbody>
                                                                <tr>
                                                                    <td class="w140" width="140" height="15"></td></tr>
                                                                <tr>
                                                                    <td class="w140" width="140">
                                                                        <p align="left" class="toc-heading">
                                                            <singleline>GUINEE-EMPLOI</singleline>
                                                        </p>
                                                            <tableofcontents>
                                                                <table cellpadding="0" cellspacing="0" border="0">
                                                                    <tbody><tr>
                                                                            <td width="3"></td>
                                                                            <td valign="top">
                                                                                <p align="left" class="toc-item">• <a href="http://www.guinee-emploi.com/">Accueil</a></p>
                                                                                <p align="left" class="toc-item">• <a href="http://www.guinee-emploi.com/offre">Nos Offres</a></p>
                                                                                <p align="left" class="toc-item">• <a href="http://www.guinee-emploi.com/contact">Nous contacter</a></p>
                                                                                <p align="left" class="toc-item">• <a href="http://www.guinee-emploi.com/recruteur/enregistrer">Recruteurs</a></p>
                                                                                <p align="left" class="toc-item">• <a href="http://www.guinee-emploi.com/candidat/enregistrer">Candidats</a></p>
                                                                            </td>
                                                                            <td width="6"></td>
                                                                            <td valign="top"><p align="left" class="toc-item"><strong><repeatertitle></strong></p></td>
                                                                        </tr>
                                                                    </tbody></table>
                                                            </tableofcontents>
                                                    </td>
                                                </tr>
                                                <tr><td class="w140" width="140" height="15"></td></tr>
                                            </tbody>
                                        </table>


                    </td>
                    <td class="w15" width="15" bgcolor="#e2e2e2"></td>
                    <td class="w470" width="470" bgcolor="#ffffff" valign="top">
                        <table class="w470" width="470" cellpadding="0" cellspacing="0" border="0">
                            <tbody><tr><td class="w470" width="470" height="30"></td></tr>
                            </tbody></table>
                        <table class="w470" width="470" cellpadding="0" cellspacing="0" border="0">
                            <tbody><tr>
                                    <td class="w30" width="30"></td>
                                    <td class="w410" width="410">
                            <repeater>';

        foreach ($nl as $news) {
            $message.='            <layout label="Text only">
                                    <table class="w410" width="410" cellpadding="0" cellspacing="0" border="0">
                                        <tbody><tr>
                                                <td class="w410" width="410">
                                                    <p align="left" class="article-title">
                                        <singleline repeatertitle="true" label="Article Title"><a href="http://guinee-emploi.com/offre/detail/' . $news->id . '/' . Inflector::friendly_title($news->titre) . '">' . (Str::truncate($news->titre, 150)) . ' </a></singleline></p>
                                        <div align="left" class="article-content"><multiline label="Description">' . Fuel\Core\Str::truncate($news->description, 200) . ' </multiline></div>
                                        </td>
                                        </tr>
                                        <tr><td class="w410" width="410" height="10"></td></tr>
                                        </tbody></table>
                                </layout>';
        }

        $message.=' <layout label="Image gallery">
                                    <table class="w410" width="410" cellpadding="0" cellspacing="0" border="0">
                                        <tbody><tr>
                                                <td class="w195" width="195" valign="top">
                                                    <table class="w195" width="195" cellpadding="0" cellspacing="0" border="0">
                                                        <tbody><tr>
                                                                <td class="w195" width="195">
  <a href="http://www.maakiti.com"><img src="http://www.maakiti.com/assets/img/cp_logo_black.png" class="w195" width="195" border="0"></a></td>
                                                            </tr>
                                                            <tr><td class="w195" width="195" height="10"></td></tr>
                                                            <tr>
                                                                <td class="w195" width="195">
                                                                    <div align="left" class="article-content"><multiline label="Description">L\'expertise des petites annonces en Guinée et dans toute la Région</multiline></div>
                                                                </td>
                                                            </tr>
                                                            <tr><td class="w195" width="195" height="10"></td></tr>
                                                        </tbody></table>
                                                </td>
                                                <td width="20"></td>
                                                <td class="w195" width="195" valign="top">
                                                    <table class="w195" width="195" cellpadding="0" cellspacing="0" border="0">
                                                        <tbody><tr>
                                                                <td class="w195" width="195">
                                                        <a href="http://www.afrimarine.com">
                                                            <img src="http://www.afrimarine.com/i/logo-afrimarine.png" style="width: 70px" class="w195" width="195" border="0"></a></td>
                                                            </tr>
                                                            <tr><td class="w195" width="195" height="10"></td></tr>
                                                            <tr>
                                                                <td class="w195" width="195">
                                                                    <div align="left" class="article-content"><multiline label="Description">Afrimarine Ship Agency in West Africa - Your trusted business partner</multiline></div>
                                                                </td>
                                                            </tr>
                                                            <tr><td class="w195" width="195" height="10"></td></tr>
                                                        </tbody></table>
                                                </td>
                                            </tr>
                                        </tbody></table>
                                </layout></repeater>
                    </td>
                    <td class="w30" width="30"></td>
                </tr>
            </tbody></table>
                </td>
            </tr>
            </tbody></table>
            </td>
            </tr>
            <tr>
                <td class="w640" width="640"><table class="w640" width="640" cellpadding="0" cellspacing="0" border="0">
                        <tbody>
                            <tr>
                                <td class="w170" width="170" bgcolor="#e2e2e2" height="15"></td>
                                <td class="w470" width="470" bgcolor="#ffffff" height="15"></td>
                            </tr>
                        </tbody>
                    </table>

    </td>
</tr>

<tr>
    <td class="w640" width="640">
        <table id="footer" class="w640" width="640" cellpadding="0" cellspacing="0" border="0" bgcolor="#043948">
            <tbody>
                <tr>
                    <td class="w30" width="30"></td>
                    <td class="w580 h0" width="360" height="30"></td>
                    <td class="w0" width="60"></td><td class="w0" width="160"></td>
                    <td class="w30" width="30"></td></tr>
                <tr>
                    <td class="w30" width="30"></td>
                    <td class="w580" width="360" valign="top">
                        <img src="http://www.guinee-emploi.com/assets/img/newsletter/footerimg.gif" width="371" height="77" border="0" usemap="#guijobo"/> 
                    </td>
    <td class="hide w0" width="60"></td>
    <td class="hide w0" width="160" valign="top">
        <p id="street-address" align="right" class="footer-content-right"><span>WAQF BID GUINEE</span><br>
            <span>T: +224 622 912 041 </span><br>
            <span>  +224 622 196 457</span><br>
            <span>E: jobnl@guinee-emploi.com</span><br>
            <span></span></p>
    </td>
    <td class="w30" width="30"></td>
</tr>
<tr>
    <td class="w30" width="30"></td>
    <td class="w580 h0" width="360" height="15"></td>
    <td class="w0" width="60"></td>
    <td class="w0" width="160"></td>
    <td class="w30" width="30"></td>
</tr>
                            </tbody>
                        </table>
                        </td>
                        </tr>
                        <tr>
                            <td class="w640" width="640" height="60"></td>
                        </tr>
                        </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
         <map name="guijobo" id="guijobo">
            <area shape="rect" coords="21,8,160,21" href="mailto:jobnl@guinee-emploi.com" target="_blank" />
            <area shape="rect" coords="21,28,94,40" href="mailto:jobnl@guinee-emploi.com" target="_blank" />
            <area shape="rect" coords="22,47,139,57" href="mailto:jobnl@guinee-emploi.com" target="_blank" />
            <area shape="rect" coords="186,55,265,66" href="http://www.guinee-emploi.com" target="_blank" />
            <area shape="rect" coords="202,34,352,52" href="http://www.guinee-emploi.com" target="_blank" />
            <area shape="circle" coords="320,42,47" href="http://www.guinee-emploi.com" target="_blank" />
        </map>';
// $message.='<img style="float: left;width: 0px;height: 0px;" src="' . Uri::create('newletter/updateOpened/' . trim($v['email']) . '/' . time()) . '"/>';
        $message.='</body></html>';
        $objet="Appels d'Offres";
        $dest = Model_Newsletter::getMails(Input::post('i', 0), Input::post('n', 1999));
        $liste = 'dmn@guinee-webdev.com';
        $mails = array();
        foreach ($dest as $val) {
            if (filter_var($val['email'], FILTER_VALIDATE_EMAIL)) {
                array_push($mails, strtolower($val['email']));
                $liste .= ','; //On sépare les adresses par une virgule.
                $liste .= $val['email'];
            }
        }
       /* $destinataire = $liste;
        $headers = 'MIME-Version: 1.0' . '\r\n';
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . '\r\n';
        $headers .= 'From: jobnl@guinee-emploi.com' . '\r\n'; // On définit l'expéditeur.
        $headers .= 'Bcc:' . $liste . '' . '\r\n'; // On définit les destinataires en copie cachée pour qu'ils ne puissent pas voir les adresses des autres inscrits.
        if (mail($destinataire, $objet, $message, $headers)) {
            echo utf8_decode('L\'Envoi de la newsletter a &eacute;t&eacute; &eacute;ffectu&eacute; avec succ&egrave;s');
        } else {
             echo utf8_decode('L\'envoi de la newsletter a &eacute;chou&eacute;');
        }*/

      $email = Email::forge();
        $email->from('jobnl@guinee-emploi.com', 'GUINEE-EMPLOI');
        $email->to(array('dmn@guinee-webdev.com'));
        $email->bcc($mails);
        $email->subject($objet);
        $email->html_body($message);
        try {

            $email->send();

            if (file_exists(DOCROOT . 'newsletters/' . Inflector::friendly_title($titre) . '.html')) {
                \Fuel\Core\File::delete(DOCROOT . 'newsletters/' . Inflector::friendly_title($titre) . '.html');
            }
            \Fuel\Core\File::create(DOCROOT . 'newsletters/', Inflector::friendly_title($titre) . '.html', $message);
            echo utf8_decode('L\'Envoi de la newsletter a &eacute;t&eacute; &eacute;ffectu&eacute; avec succ&egrave;s');
        } catch (\EmailValidationFailedException $e) {
            echo utf8_decode('Echec de la validation des emails');
            print_r($email->get_invalid_addresses());
        } catch (Email\EmailSendingFailedException $e) {
            echo utf8_decode('L\'envoi de la newsletter a &eacute;chou&eacute;');
        }
    }

}
