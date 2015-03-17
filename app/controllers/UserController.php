<?php

class UserController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {

    }

    public function projectAction($id)
    {
        //Nom de l'utilisateur
        $user = User::findFirst($id);
        $this->view->setVar("user", $user);

        //Nom du projet
        $projects = Projet::find("idClient =".$id);
        $this->view->setVar("projects", $projects);

        //Barre avancement du projet
        $bootstrap=$this->jquery->bootstrap();
        //$bootstrap->htmlProgress

        //Nombre de jours restant

        //Bouton ouvrir
        $bootstrap=$this->jquery->bootstrap();
        $bootstrap->htmlButton("btOpen","Ouvrir...");
        $this->jquery->compile($this->view);
    }


}


