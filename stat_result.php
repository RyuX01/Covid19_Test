<?php
include ("modal/database.php");
$db = db_connect();

include ('modal/stats.php');
include("views/layout/header.php"); ?>

<!-- le nombres de personnes à risque minimal est  -->

<?php  
$requete = list_pas_risque($db);
$Risque1 = $requete->rowCount(); 
$requete = list_peu_risque($db);
$Risque2 = $requete->rowCount();
?>

<!-- le nombres de personnes à risque -->

<?php  $requete = list_risque($db);
$Risque3 = $requete->rowCount();
?>

<!-- le nombres de personnes à risque le dernier mois -->
<?php  
$requete = risque_dernier_mois($db);
$dernierMois = $requete->rowCount(); 
?>
<!-- le nombres de personnes à risque la derniere annee -->

<?php  
$requete = risque_dernier_annee($db);
$dernieran = $requete->rowCount();
?>

<div class="card info" style="width: 18rem;">
    <div class="card-body">
        <p class="card-text">Le nombres de personnes à risque minimal est : <h1><?= $Risque2 + $Risque1; ?></h1> </p>
    </div>

    <div class="card-body">
        <p class="card-text"><h1>Le nombres de personnes à risque la derniere annee est : <?= $dernieran ?></h1></p>
    </div>

    <div class="card-body">
        <p class="card-text"><h1>Le nombres de personnes à risque est : <?= $Risque3 ?></h1></p>
    </div>

    <div class="card-body">
        <p class="card-text"><h1>Le nombres de personnes à risque le dernier mois est : <?= $dernierMois ?></h1></p>
    </div>
</div>

<?php include("views/layout/footer.php");