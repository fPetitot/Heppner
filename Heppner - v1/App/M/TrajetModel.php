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


}
