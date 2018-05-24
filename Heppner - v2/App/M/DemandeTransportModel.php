<?php
/**
 * Date: 30/01/18
 * Time: 13:28
 */

namespace App\M;


use Core\Object;

class DemandeTransportModel extends Object
{
    protected static $_table='demandeTransport';

    public $id;
    public $client_id;
    public $villeDepart;
    public $villeArrivee;
    public $distance;
    public $duree;
    public $typeMarchandise_id;
    public $volume;
    public $poids;
    public $dateDemande;
    public $dateLimite;

    /**
     * @return string
     */
    public static function getTable()
    {
        return self::$_table;
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
    public function getClientId()
    {
        return $this->client_id;
    }

    /**
     * @return mixed
     */
    public function getVilleDepart()
    {
        return $this->villeDepart;
    }

    /**
     * @return mixed
     */
    public function getVilleArrivee()
    {
        return $this->villeArrivee;
    }

    /**
     * @return mixed
     */
    public function getDistance()
    {
        return $this->distance;
    }

    /**
     * @return mixed
     */
    public function getDuree()
    {
        return $this->duree;
    }

    /**
     * @return mixed
     */
    public function getTypeMarchandiseId()
    {
        return $this->typeMarchandise_id;
    }

    /**
     * @return mixed
     */
    public function getVolume()
    {
        return $this->volume;
    }

    /**
     * @return mixed
     */
    public function getPoids()
    {
        return $this->poids;
    }

    /**
     * @return mixed
     */
    public function getDateDemande()
    {
        return $this->dateDemande;
    }

    /**
     * @return mixed
     */
    public function getDateLimite()
    {
        return $this->dateLimite;
    }


    public static function getTrajetLePlusLong(){
        $query = self::query("SELECT MAX(distance) FROM demandeTransport",[0]);
        foreach($query[0] as $data);
        return $data;
    }

}
