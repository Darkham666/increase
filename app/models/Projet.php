<?php

class Projet extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $id;

    /**
     *
     * @var string
     */
    public $nom;

    /**
     *
     * @var string
     */
    public $description;

    /**
     *
     * @var string
     */
    public $dateLancement;

    /**
     *
     * @var string
     */
    public $dateFinPrevue;

    /**
     *
     * @var integer
     */
    public $idClient;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSource('Projet');
    }

    /**
     * Independent Column Mapping.
     */
    public function columnMap()
    {
        return array(
            'id' => 'id', 
            'nom' => 'nom', 
            'description' => 'description', 
            'dateLancement' => 'dateLancement', 
            'dateFinPrevue' => 'dateFinPrevue', 
            'idClient' => 'idClient'
        );
    }

}
