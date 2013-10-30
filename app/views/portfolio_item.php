<?=View::make('portfolio.'.$project->id, array('project' => $project));?>
<?=App::make('Portfolio')->makeRelated($project);?>
<?php /* <article>
    <section id="portfolio-header">
        <div class="row">
            <div class="col-sm-6">
                <hgroup>
                    <h1><?=$project->title;?></h1>
                    <h4><?=$project->resume;?></h4>
                </hgroup>
            </div>
            <div class="col-sm-6">
                <img src="<?=$project->thumbnail;?>" class="thumbnail" style="width:100%;">
            </div>
        </div>
    </section>
    
    <div class="row">
        
    </div>
</article>


<div class="separator"></div>
<?php var_dump($project); ?>

*/ ?>
