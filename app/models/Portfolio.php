<?php

class Portfolio
{
    /**
     * Lista de todos os projetos
     *
     * @return stdClass
     */
    public function getProjects()
    {
        /*
        $portfolio = DB::select('
            select
                p.id as pid,
                p.title as project_title,
                p.status as project_status,
                p.resume,
                p.thumbnail
            from project as p
            left join project_page as pg on pg.project_id = p.id
            order by p.order asc, pg.order asc
        ');
        */
        
        return DB::select('select * from project order by `order` asc');
    }
    
    /**
     * Lista de projetos relacionados
     *
     * @param stdClass|int $project
     * @param int $limit
     * @return stdClass
     */
    public function getRelatedProjects($project, $limit = 3)
    {
        return DB::select('select * from project where not id = :pid order by `order` asc limit :limit', array(
            ':pid'   => is_int($project)?$project:$project->id,
            ':limit' => $limit
        ));
    }
    
    /**
     * Informações de um projeto e suas páginas
     *
     * @return array
     */
    public function getProject($id)
    {
        return array(
            'project' => DB::select('select * from project where id = :pid', array(':pid' => $id))[0],
            'pages'   => DB::select('select * from project_page where project_id = :pid order by `order` asc', array(':pid' => $id))
        );
    }
    
    
    /**
     * Cria template dos projetos relacionados
     *
     * @param stdClass|int $project
     * @return string
     */
    public function makeRelated($project)
    {
        $projects = $this->getRelatedProjects($project);
        return View::make('portfolio._related',array('projects'=>$projects));
    }
}
