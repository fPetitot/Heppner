<?php
/**
 * Date: 30/01/18
 * Time: 13:28
 */

namespace App\M;


use Core\Object;

class ModeleModel extends Object
{
    protected static $_table='modele';

    public $id;
    public $libelle;
    public $poidsVide;
    public $volumeUtile;
    public $vitesseMoyenne;
    public $vitesseMaximum;
    public $marque_id;
    public $volume;
    public $categorie_id;

    public function getNbVehicules()
    {
        //select count(*) from vehicule where modele_id=?
        return VehiculeModel::count(['modele_id'=>$this->id]);
    }
}