<?php

class Tache extends \Phalcon\Mvc\Model
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
    public $libelle;

    /**
     *
     * @var string
     */
    public $date;

    /**
     *
     * @var integer
     */
    public $avancement;

    /**
     *
     * @var string
     */
    public $codeUseCase;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSource('Tache');
    }

    /**
     * Independent Column Mapping.
     */
    public function columnMap()
    {
        return array(
            'id' => 'id', 
            'libelle' => 'libelle', 
            'date' => 'date', 
            'avancement' => 'avancement', 
            'codeUseCase' => 'codeUseCase'
        );
    }

}
