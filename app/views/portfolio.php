<?php


$projects = App::make('project')->getAll();
$toggle = false;



?><div id="portfolio-items">



<?php

/**
 * Echo image html code
 */
function projectImageHere() {
    ?>
        <div class="col-sm-5">
            <div class="pf-img">
                <img src="" class="img-thumbnail">
            </div>
        </div>
    <?php
}

foreach($projects as $pname => $project) {
?>
    <div class="portfolio-item">
        <div class="row">
            
            <?php if(!$toggle) projectImageHere(); ?>
            
            <div class="col-sm-7">
                <h2><?=$project->title;?></h2>
                
                <div class="pf-status">
                    <?php
                        switch($project->status) {
                            case 'development':
                                echo '<span class="label label-primary">Em desenvolvimento</span>';
                                break;
                            case 'stopped':
                                echo '<span class="label label-default">Parado</span>';
                                break;
                            case 'canceled':
                                echo '<span class="label label-danger">Cancelado</span>';
                                break;
                        }
                    ?>
                </div>
                
                <p class="pf-desc">
                    <?=$project->data->resume;?>
                </p>
            </div>
            
            <?php if($toggle) projectImageHere(); ?>
        </div>
        
        <div class="pf-menu">
            <div class="text-right">
                <button class="btn btn-primary"><span class="glyphicon glyphicon-bookmark"></span> Ver detalhes do projeto</button>
            </div>
        </div>
    </div>
<?php
    $toggle = !$toggle;
}
?>
</div><!-- #portfolio-items -->

<!--
    <div class="portfolio-item">
        <div class="row">
            <div class="col-sm-5">
                <div class="pf-img">
                    <img src="" class="img-thumbnail">
                </div>
            </div>
            <div class="col-sm-7">
                <h2>Mobile Provider</h2>
                <div class="pf-status">
                    <span class="label label-primary">Em desenvolvimento</span>
                </div>
                <p class="pf-desc">
                    <a href="http://mobileprovider.com.br" target="_blank">Mobile provider</a> é um projeto da empresa
                    <a href="http://centralsigma.com.br" target="_blank">Rede Industrial</a>
                    que reúne uma coleção de aplicativos empresariais que podem ser acessados pela web, tablets ou smartphones.
                </p>
            </div>
        </div>
        
        <div class="pf-menu">
            <div class="text-right">
                <button class="btn btn-primary"><span class="glyphicon glyphicon-bookmark"></span> Ver detalhes do projeto</button>
            </div>
        </div>
    </div>
-->


























<div class="overitem">
    <div class="oi-header">
        <div class="container">
            <div class="row">
                <div class="pull-left" style="padding-left:0;">
                    <h2>Mobile Provider</h2>
                </div>
                <div class="pull-right" style="padding-right:0;">
                    <button class="btn btn-default"><span class="glyphicon glyphicon-eye-close"></span> Fechar detalhes do projeto <b>(ESC)</b></button>
                </div>
            </div>
        </div>
    </div>
    
    <div class="oi-body">
        <div class="container">
            <div class="row">
                <div class="col-md-4 oi-sidebar">
                    <div class="list-group">
                        <a href="" class="list-group-item">Sobre o projeto</a>
                        <a href="" class="list-group-item">Minha participação</a>
                        <a href="" class="list-group-item">Screenshots</a>
                    </div>
                </div>
                <div class="col-md-8 pull-right oi-content">
                    <div class="oi-about">
                        <h3>Resumo sobre o projeto</h3>
                        <p>
                            <a href="http://mobileprovider.com.br" target="_blank">Mobile provider</a> é um projeto da empresa
                            <a href="http://centralsigma.com.br" target="_blank">Rede Industrial</a>
                            que reúne uma coleção de aplicativos empresariais que podem ser acessados pela web, tablets ou smartphones.
                        </p>
                    </div>
                    <div class="oi-idid">
                        <h3>O que fiz neste projeto</h3>
                        
                        <ul>
                            <li> Item 1 da lista
                            <li> Item dois da lista
                            <li> mais um item aqui
                            <li> Item 1 da lista
                            <li> Outro item
                        </ul>
                    </div>
                    <div class="oi-screenshots">
                        <div class="row">
                            <div class="col-md-3">
                                <img class="img-thumbnail img-responsive" style="height:100px;width:100%;max-width:165px;">
                                <img class="img-thumbnail img-responsive" style="height:100px;width:100%;max-width:165px;">
                                <img class="img-thumbnail img-responsive" style="height:100px;width:100%;max-width:165px;">
                            </div>
                            <div class="col-md-9">
                                <img class="img-thumbnail img-responsive" style="height:600px;width:100%;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
