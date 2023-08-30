<?php

include_once "model.php";

class Controller
{
    private $model;

    public function __construct()
    {
        $this->model = new Model();
    }

    private function view(string $view, array $variables)
    {
        extract($variables);

        include $view;
    }

    public function listProjects()
    {
        
        $projects = implode(', ', $this->model->all());

        return $this->view('view.php', [
            'projects' => $projects
        ]);
    }
}
