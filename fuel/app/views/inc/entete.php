<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
        <?php echo Asset::css(array('bootstrap.css', 'global.css')) ?>
        <?php echo Asset::js(array('jquery-latest.js', 'bootstrap.js')) ?>
        <title>Guinée-Emploi : ESPACE CANDIDAT - <?php echo $candidat->nom . ' ' . $candidat->prenom; ?></title>
    </head>
    <body class="interne candidat" id="">