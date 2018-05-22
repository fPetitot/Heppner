<?php
/**
 * Date: 30/01/18
 * Time: 13:28
 */

namespace App\M;


use Core\Object;

class PermisModel extends Object
{
    protected static $_table='permis';

    public $id;
    public $libelle;
}