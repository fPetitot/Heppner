<?php
/**
 * Date: 30/01/18
 * Time: 13:28
 */

namespace App\M;


use Core\Object;
use DateTime;
use function Sodium\compare;

class DevisModel extends Object
{
    protected static $_table = 'devis';

    public $id;
    public $demandeTransport_id;
    public $montant;
    public $dateEnvoi;
    public $dateArriveePrevue;
    public $valide;

    public static function devisARealiser(){
        return self::count(["valide"=>0]);
    }

    public function getDateEnvoi()
    {
        return $this->dateEnvoi;
    }

    public static function getCAJour()
    {
        $listeDevis=DevisModel::getAll();


        // $listeDevis[5] : accès à la 5 eme ligne (tuple) de la liste qui est un objet de type DevisModel, mais en objet on dit qui est un élémenent de la liste qui est un objet instance de la classe DevisModel donc
        // $listeDevis[5]->getDateEnvoie() pour récupere la date d'envoie du 5 eme élément de la liste (sous entendu la ci,nqiuieme ligne de la table Devis)
        $CAJour=0;
        $dateJour=new DateTime("NOW");



        // Pour chaque element de la $listeDevis, je le nomme $unDevis puis je travaille avec dans la boucle :
        foreach ($listeDevis as $unDevis){
            $dateAujourdhui = new DateTime($unDevis->getDateEnvoi());
            if($dateJour==$dateAujourdhui){
                $CAJour+=$unDevis->getMontant();
            }
        }
        return $CAJour;

    }

    /**
     * @return mixed
     */



    /**
     * @return mixed
     */
    public function getMontant()
    {
        return $this->montant;
    }
}
