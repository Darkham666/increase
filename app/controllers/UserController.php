<?php

class UserController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {

    }

    public function projectAction($id)
    {
        $bootstrap=$this->jquery->bootstrap();
        $bootstrap->htmlButton("btOkay","Okay");
        $bootstrap->htmlButton("btMasquer","Afficher/Masquer Bouton Okay","btn-primary",$this->jquery->toggle("#btOkay"));
        $this->jquery->doJQueryAndBindTo("#checkbox", "change", "#div", "toggle", "$('#checkbox').is(':checked')");
        $this->jquery->compile($this->view);
        echo $id;
    }

}


