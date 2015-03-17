<?php

class ProjectController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {

    }

    public function projectAction($id)
    {
        //Nom du projet
        $name = Projet::findFirst("id =".$id);
        $this->view->setVar("name", $name);

    }
}

