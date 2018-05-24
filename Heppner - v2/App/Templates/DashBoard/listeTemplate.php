<ol class="breadcrumb">
    <li class="breadcrumb-item" style="text-align:center">
        <a href="#">Tableau de bord</a>
    </li>
</ol>


<div class="row">

    <div class="col-xl-3 col-sm-6 mb-3">
        <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
                <div class="card-body-icon">
                    <i class="fa fa-fw fa-globe"></i>
                </div>
                <div class="mr-5"><?php echo \App\M\ClientModel::count(); ?> clients</div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-sm-6 mb-3">
        <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
                <div class="card-body-icon">
                    <i class="fa fa-fw fa-truck"></i>
                </div>
                <div class="mr-5"><?php echo \App\M\VehiculeModel::count(); ?> véhicules</div>
            </div>
        </div>
    </div>


    <div class="col-xl-3 col-sm-6 mb-3">
        <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
                <div class="card-body-icon">
                    <i class="fa fa-fw fa-address-book"></i>
                </div>
                <div class="mr-5"><?php echo \App\M\ConducteurModel::count(); ?> conducteurs.</div>
            </div>
        </div>
    </div>

</div>


    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="#"> sépaTestration</a>
        </li>
    </ol>



<div class="row">

    <div class="col-xl-3 col-sm-6 mb-3">
        <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
                <div class="card-body-icon">
                    <i class="fa fa-fw fa-book"></i>
                </div>
                <div class="mr-5"><?php echo \App\M\DevisModel::devisARealiser(); ?> devis à réaliser</div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-sm-6 mb-3">
        <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
                <div class="card-body-icon">
                    <i class="fa fa-fw fa-forward"></i>
                </div>
                <div class="mr-5"><?php echo \App\M\TrajetModel::getEnDeplacement(); ?> conducteurs en déplacement</div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-sm-6 mb-3">
        <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
                <div class="card-body-icon">
                    <i class="fa fa-fw fa-building"></i>
                </div>
                <div class="mr-5"><?php echo \App\M\ConducteurModel::count() - \App\M\TrajetModel::getEnDeplacement(); ?> conducteurs sans affectation</div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-sm-6 mb-3">
        <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
                <div class="card-body-icon">
                    <i class="fa fa-fw fa-forward"></i>
                </div>
                <div class="mr-5"><?php echo \App\M\DevisModel::getCAJour(); ?> € de chiffre d'affaire</div>
            </div>
        </div>
    </div>

</div>

<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="#">Informations complémentaires</a>
    </li>
</ol>



<div class="row">

<?php

    echo '<div class="card mb-3">
            <div class="card-header"><i class="fa fa-table"></i>  Liste des conducteurs</div>
                <div class="card-body">
                    <div class="table-responsive">';
    echo '      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">';
    echo '      <thead><th>Nom</th><th>Prenom</th><th>Date d\'embauche</th><th>Date de naissance</th><th>Date de sortie</th><!--<th>Nombre de biens vendus</th><th>Chiffre d\'affaire</th>--></tr></thead><tbody>';

// Contenu du tableau
foreach($this->getTableauConducteursSansAffectation() as $conducteur){
    echo '<tr>';

    echo '<td>',$conducteur->getNom(),'</td>';
    echo '<td>',$conducteur->getPrenom(),'</td>';
    echo '<td>',$conducteur->getDateEmbauche(),'</td>';
    echo '<td>',$conducteur->getDateNaissance(),'</td>';
    echo '<td>',$conducteur->getDateSortie(),'</td>';

    echo '</tr>';
}

// Fin du tableau et des cadres
echo '      </tbody>
            </table>
            </div>
            </div>
     </div>';

