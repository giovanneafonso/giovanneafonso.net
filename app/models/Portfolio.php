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
}
