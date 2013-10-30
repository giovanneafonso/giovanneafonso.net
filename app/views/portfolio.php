<?php

$projects = App::make('Portfolio')->getProjects();
$toggle = false;
?>

<div class="row">
    <?=View::make('portfolio._thumbs', array('projects'=>$projects));?>
</div>
