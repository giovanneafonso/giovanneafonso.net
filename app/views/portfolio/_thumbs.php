<ul class="thumbs">

    <?php foreach($projects as $pindex => $project) { ?>
        <li>
            <a href="/portfolio/<?=$project->id;?>" class="fadelink">
                <?php /*<img src="<?=$project->thumbnail;?>">*/ ?>
                <img src="/static/img/portfolio/thumbs/<?=$project->id;?>.jpg">
                <div class="thumb-description">
                    <h4><?=$project->title;?></h4>
                    <p><?=$project->description;?></p>
                </div>
            </a>
        </li>
    <?php } ?>

</ul>
