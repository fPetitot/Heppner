<?php
/**
 * Date: 30/01/18
 * Time: 13:28
 */

namespace App\M;


use Core\Object;

class ClientModel extends Object
{
    protected static $_table='client';

    public $id;
    public $raisonSociale;
}