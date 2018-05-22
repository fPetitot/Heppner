<?php
/**
 * Date: 30/01/18
 * Time: 13:28
 */

namespace App\M;


use Core\Object;

class VehiculeModel extends Object
{
    protected static $_table='vehicule';

    public $id;
    public $immatriculation;
    public $dateMiseEnCirculation;
    public $kilometrageAchat;
    public $coutAchat;
    public $modele_id;

    public function getPoids(){
        return $this->modele->poidsVide;
    }
    public function getTrajets(){
        return TrajetModel::find(['vehicule_id'=>$this->id]);
    }
}