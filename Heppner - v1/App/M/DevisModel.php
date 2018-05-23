<?php
/**
 * Date: 30/01/18
 * Time: 13:28
 */

namespace App\M;


use Core\Object;

class DevisModel extends Object
{
    protected static $_table = 'devis';

    public $id;
    public $demandeTransport_id;
    public $montant;
    public $dateEnvoi;
    public $dateArriveePrevue;
    public $valide;
    public $dateJour=\DateTime::ATOM;

    /**
     * @return mixed
     */
    public static function getCAJour()
    {
        $listeDevis=DevisModel::getAll();
        $CAJour=0;

        foreach ($listeDevis as $unDevis){
            $CAJour+=$unDevis->getMontant();
        }
        return $CAJour;
    }

    /**
     * @return string
     */
    public function getDateJour()
    {
        return $this->dateJour;
    }

    /**
     * @return mixed
     */
    public function getMontant()
    {
        return $this->montant;
    }
}