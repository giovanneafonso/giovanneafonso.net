<?php

?>
<div style="padding-top:15px;"></div>
<div class="portfolio-item">
    <div class="row">
        
        <div class="col-sm-5">
            <div class="pf-img">
                <img src="<?=$project->thumbnail;?>" class="img-thumbnail">
            </div>
        </div>
        
        <div class="col-sm-7">
            <h1><?=$project->title;?></h1>
            
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
    </div>
</div>

<div class="sp-content">
    <div class="inpad">
        <?php foreach($pages as $page) { ?>
            <section id="project-page-<?=$page->id;?>" class="sp-page">
                <?php /*<div class="well"><?php var_dump($page); ?></div>*/ ?>
                <h2 class="sp-title"><?=$page->title;?></h2>
                <div class="sp-page-content">
                    <?=$page->content;?>
                </div>
            </section>
        <?php } ?>
    </div>
</div>
