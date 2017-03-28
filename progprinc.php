

<?php

require_once("Personne.php");
require_once("Etudiant.php");
require_once("Professeur.php");
require_once("Cours.php");






$Etudiant1 = new Etudiant(new Personne("Bonnet", "Sophie", "Nantes", 21), 125000, 1325, "MED", "Pédiatrie", "NTE");
$Etudiant2= new Etudiant(new Personne("Boucher", "Pierre", "Bouguenais", 19), 30000, 233.25, "LNG", "Polonais", "NTE");
$Etudiant3= new Etudiant(new Personne("Fernandez", "Gabin", "Haute-Goulaine", 19), 32000, 275.60, "SCI", "Mathématiques", "NTE");
$Etudiant4= new Etudiant(new Personne("Bretaudeau", "Danielle", "Brisseau", 24), 153000, 2796, "HIS", "Mondiale", "NTE");

$Professeur1 = new Professeur(new Personne("Alliaume", "Marie", "Nantes", 45), 2590, "SCI", "NTE");

$Math = new Cours("Mathématiques", "SCI");

$Math ->Etudiant_rattache($Etudiant3);
$Math ->Professeur_rattache($Professeur1);

echo $Math;







?>
