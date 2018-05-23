<?php
/**
 * Date: 30/01/18
 * Time: 13:28
 */

namespace App\M;


use Core\Object;

class TrajetModel extends Object
{
    protected static $_table='trajet';

    public $id;
    public $devis_id;
    public $vehicule_id;
    public $conducteur_id;
    public $dateDepart;
    public $dateArrivee;
/*
    public static function getConducteursEnDeplacement(){
        return self::count(["dateArrivee" => "NULL"]);..
    }
*/


    public static function getEnDeplacement(){
        $somme=0;
        $deplacements=self::getAll();

        foreach ($deplacements as $deplacement){
            if (is_null($deplacement->getDateArrivee())){
                $somme++;
            }

        }
        return $somme;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getDevisId()
    {
        return $this->devis_id;
    }

    /**
     * @return mixed
     */
    public function getVehiculeId()
    {
        return $this->vehicule_id;
    }

    /**
     * @return mixed
     */
    public function getConducteurId()
    {
        return $this->conducteur_id;
    }

    /**
     * @return mixed
     */
    public function getDateDepart()
    {
        return $this->dateDepart;
    }

    /**
     * @return mixed
     */
    public function getDateArrivee()
    {
        return $this->dateArrivee;
    }


}
