<!DOCTYPE html >
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="robots" content="noindex, nofollow">
        <title>GUINEE-EMPLOI - Administration</title>
        <?php echo Asset::css(array('bootstrap.css')); ?>
        <meta name="robots" content="noindex, nofollow">
    </head>
    <style>
       body{background:#eee url(http://subtlepatterns.com/patterns/sativa.png)}html,body{position:relative;height:100%}.login-container{position:relative;width:300px;margin:80px auto;padding:20px 40px 40px;text-align:center;background:#fff;border:1px solid #ccc}#output{position:absolute;width:300px;top:-75px;left:0;color:#fff}#output.alert-success{background:#19cc19}#output.alert-danger{background:#e46969}.login-container::before,.login-container::after{content:"";position:absolute;width:100%;height:100%;top:3.5px;left:0;background:#fff;z-index:-1;border:1px solid #ccc}.avatar{width:100px;height:100px;margin:10px auto 30px;border-radius:100%;border:2px solid #aaa;background-size:cover}.form-box input{width:100%;padding:10px;text-align:center;height:40px;border:1px solid #ccc;background:#fafafa;transition:.2s ease-in-out}.form-box input:focus{outline:0;background:#eee}.form-box input[type="text"]{border-radius:5px 5px 0 0;text-transform:lowercase}.form-box input[type="password"]{border-radius:0 0 5px 5px;border-top:0}.form-box button.login{margin-top:15px;padding:10px 20px}
    </style>
    <body style=" padding-top: 100px">        
        <div class="container">
            <div class="login-container">
                <div id="output"> <label class="checkbox" style="width: 255px;">   <?php if (isset($error)) echo $error; ?></label></div>
                <div class="avatar"><img class="img-responsive" alt="Guinée Emploi" src="http://www.guinee-emploi.com/assets/img/logo.png"></div>
                <div class="form-box">
                    <form  action="<?php echo Uri::create('admin/admin/connection') ?>" method="POST">
                        <input name="login" type="text" placeholder="login">
                        <input type="password" placeholder="Mot de passe" name="pwd">
                        <button class="btn btn-info btn-block login" type="submit">Login</button>
                    </form>
                </div>
            </div>
    </div>              
    </body>
</html>