<?php

class ProjectOld
{
    // Projects directory
    // Important: Put slash at the final of string, e.g.: '../public/projects/'
    private $projects_basedir = '../public/projects/';
    
    /**
     * Gets a file as string or empty string
     *
     * @param string $path  File path
     * @return string
     */
    private function getFile($path)
    {
        if(file_exists($path))
            return mb_convert_encoding(file_get_contents($path), 'HTML-ENTITIES', "UTF-8");
        else return '';
    }
    
    /**
     * Get content inside a "fake tag"
     *
     * @param string $contents  String to get contents from
     * @param string $tagname
     * @return string
     */
    private function ftContent($contents, $tagname)
    {
        $tags = ['<','>'];
        //$_tagname = implode('\\',str_split($tagname));
        $pattern = "/{$tags[0]}{$tagname}{$tags[1]}([\s\S]*){$tags[0]}\/{$tagname}{$tags[1]}/";
        //die($pattern);
        preg_match($pattern, $contents, $matches);
        return $matches[1];
    }
    
    /**
     * Get project info from file and parse it's contents
     *
     * @param array $project_name
     * @return stdObject
     */
    private function parseProject($project)
    {
        $projectFile = $this->getFile($this->projects_basedir . $project->name . '.html');
        $projectData = new stdClass;
        $projectData->resume = $this->ftContent($projectFile, 'Resume');
        $projectData->about  = $this->ftContent($projectFile, 'About');
        return $projectData;
    }
    
    /**
     * Get all projects configuration
     *
     * @return stdObject
     */
    public function getAll()
    {
        // Projects configs
        $projects = json_decode($this->getFile($this->projects_basedir . 'projects.json'))->projects;
        
        // Parse Projects
        foreach($projects as &$project) {
            $project->data = $this->parseProject($project);
        }
        
        return $projects;
    }
}

class Project
{
    public function getAll()
    {
        $projeto = simplexml_load_file('../public/projects/teste.html');
        dd($projeto);
    }
}
