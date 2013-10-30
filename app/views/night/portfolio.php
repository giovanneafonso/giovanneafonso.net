<?php

$projects = App::make('Portfolio')->getProjects();
$toggle = false;

?><div id="portfolio-items">

    <?php
    /**
     * Echo image html code
     */
    function projectImageHere($project) {
        ?>
            <div class="col-sm-5">
                <div class="pf-img">
                    <img src="<?=$project->thumbnail;?>" class="img-thumbnail">
                </div>
            </div>
        <?php
    }

    foreach($projects as $pindex => $project) {
    ?>
        <div class="portfolio-item portfolio-hover" onclick="openProject('<?=e($project->id);?>');">
            <div class="row">
                
                <?php if(!$toggle) projectImageHere($project); ?>
                
                <div class="col-sm-7">
                    <h2><?=$project->title;?></h2>
                    
                    <div class="pf-status">
                        <?php
                            switch($project->status) {
                                case 'finished':
                                    echo '<span class="label label-success">Concluído</span>';
                                    break;
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
                        <?=$project->resume;?>
                    </p>
                </div>
                
                <?php if($toggle) projectImageHere($project); ?>
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
