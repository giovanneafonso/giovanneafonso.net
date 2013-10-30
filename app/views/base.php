<?php

$cmc = function($name) use ($currentmenu) {
    if($name==$currentmenu) {
        return 'current_menu';
    }
    return '';
};

?><!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Giovanne Afonso</title>
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-theme.min.css">
        <link href='http://fonts.googleapis.com/css?family=Lily+Script+One' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet' type='text/css'>
        <link rel="stylesheet/less" type="text/css" href="/static/css/base.less.css">
    </head>
    
    <body>
        <div class="sitecontainer" id="sitecontainer">
            
            <header id="siteheader">
                <div class="row">
                    <!--<div id="sitelogo">
                        GA
                    </div>-->
                    <a href="/" id="sitelogo2">
                        <img src="/static/img/logo.png">
                    </a>
                    
                    <nav id="topmenu">
                        <ul>
                            <li class="<?=$cmc('index');?>"> <a href="/">Início</a>
                            <li class="<?=$cmc('portfolio');?>"> <a href="/portfolio">Portfólio</a>
                            <li class="<?=$cmc('contact');?>"> <a href="/contato">Contato</a>
                        </ul>
                    </nav>
                    <div class="clearfix"></div>
                </div>
            </header>
            
            <div id="sitecontent">
                <?=$content;?>
            </div>
            
            <footer id="sitefooter">
                <div class="row">
                    <div class="col-sm-12">
                        &copy; 2013 Giovanne Afonso
                    </div>
                </div>
            </footer>
        </div>
        
        <div id="loading-site">
            <!-- Carregando... -->
            <img src="http://augusto.digitpa.gov.it/img/ajax-loader.gif">
        </div>
        
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="/static/js/base.js"></script>
<script src="/static/lib/less-1.5.0.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    </body>
</html>
