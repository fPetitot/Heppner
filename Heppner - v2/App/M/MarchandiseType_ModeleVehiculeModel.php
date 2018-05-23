<?php
/**
 * Date: 30/01/18
 * Time: 13:28
 */

namespace App\M;


use Core\Object;

class MarchandiseType_ModeleVehiculeModel extends Object
{
    protected static $_table='marchandiseType_modeleVehicule';

    public $id;
    public $marchandiseType_id;
    public $modeleVehicule_id;
}