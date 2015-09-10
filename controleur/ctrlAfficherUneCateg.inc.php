<?php
    include_once("./modele/modele.inc.php");
    if (!isset($connection) || $connection != null) {
        $connexion = connecter();
    }
    $ok = false;
    if ($connexion) {
        $listeCateg= getListeCategoriesProduits($connexion);
        if (isset($_GET["id"])){
            $listeProduits = getListeProduitsParCateg($connexion, "bul");
            $ok = true;
        }
    }

$titre="La fleur and co";
$entete= "./vue/vueEntete.inc.php";
$gauche= "./vue/vueGauche.inc.php";
if ($ok) {
    $centre= "./vue/vueCentreListeProduits.inc.php";
}else{
    $centre= "./vue/vueCentreAccueil.inc.php";
}
$pied= "./vue/vuePied.inc.php";
include("./vue/template.inc.php");

?>
