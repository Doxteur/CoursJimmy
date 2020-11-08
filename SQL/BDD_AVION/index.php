<?php

try {
	$bdd = new PDO('mysql:host=localhost;dbname=cours;charset=utf8', 'root', '');
} 
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
?>
<!-- REQUETE R1 R2 R3 R4 -->

<h1>Requete R1 et R2 et R3 et R4</h1>

<?php 

$reponseR1 = $bdd->query('SELECT * FROM AVION WHERE CAPACITE >= 100  ORDER BY NUMAVION ');

while ($donnees = $reponseR1->fetch())
{
    
     echo "Le vol numéro  " . $donnees['NUMAVION']  . " avec pour Nom d'avion " . $donnees['NOMAVION'] . " et comme capacité " .$donnees['CAPACITE'] . " </br>";

}
$reponseR1->closeCursor(); // Termine le traitement de la requête
?>
<!-- REQUETE R5 -->
<h1>Requete R5</h1>

<?php 

$reponse = $bdd->query('SELECT * FROM PILOTE WHERE BONUS >= SALAIRE');

while ($donnees = $reponse ->fetch())
{
    
     echo "Voici les/le pilotes qui on un bonus supérieur a leur salaire : " . $donnees['NOMPILOTE']. " avec comme bonus " . $donnees['BONUS'] . ".</br>";

}
$reponse->closeCursor(); // Termine le traitement de la requête
?>

<!-- REQUETE R6 -->
<h1>Requete R6</h1>

<?php 

$reponse = $bdd->query('SELECT * FROM PILOTE WHERE BONUS BETWEEN 800 AND 1000');

while ($donnees = $reponse ->fetch())
{
    
     echo "Voici les/le pilotes qui on un salaire entre 800 et 1000 : " . $donnees['NOMPILOTE'] . " avec comme salaire " .$donnees['BONUS'] . ".</br>";

}
$reponse->closeCursor(); // Termine le traitement de la requête
?>

<!-- REQUETE R7 -->
<h1>Requete R7</h1>

<?php 

$reponse = $bdd->query('SELECT * FROM PILOTE WHERE NOMPILOTE LIKE "DUP%" ');

while ($donnees = $reponse ->fetch())
{
    
     echo "Voici les/le pilotes dont le nom commence par DUP : " . $donnees['NOMPILOTE'] . ".</br>";

}
$reponse->closeCursor(); // Termine le traitement de la requête
?>

<!-- REQUETE R8 -->
<h1>Requete R8</h1>

<?php 

$reponse = $bdd->query("SELECT * FROM VOL WHERE VILLEARRIVEE IN ( 'GILLOT' , 'MAURICE')");

while ($donnees = $reponse ->fetch())
{
    
     echo "Voici les numéros de Vol avec comme arrivée GILLOT OU MAURICE : " . $donnees['NUMVOL'] . ".</br>";

}
$reponse->closeCursor(); // Termine le traitement de la requête
?>
<!-- REQUETE R9.1 -->
<h1>Requete R9.1</h1>

<?php 

$reponse = $bdd->query("SELECT * FROM PILOTE WHERE BONUS < 800 OR (SALAIRE < 3500 AND ADRESSE LIKE '%PARIS%') ");

while ($donnees = $reponse ->fetch())
{
    
     echo "Voici les pilotes qui on un bonus inférieur a 800 ou un salaire supérieur a 3500 et vivant a paris " . $donnees['NOMPILOTE'] . ".</br>";

}
$reponse->closeCursor(); // Termine le traitement de la requête
?>
<!-- REQUETE R9.2 -->
<h1>Requete R9.2</h1>

<?php 

$reponse = $bdd->query("SELECT * FROM PILOTE WHERE ADRESSE LIKE '%Sainte Marie' OR (ADRESSE LIKE '%Saint Denis' AND BONUS > 800)");

while ($donnees = $reponse ->fetch())
{
    
     echo "Voici les pilotes habitant a Saint-Denis ou Saint-Marie : " . $donnees['NOMPILOTE'] . ".</br>";

}
$reponse->closeCursor(); // Termine le traitement de la requête
?>

<!-- REQUETE R10 -->
<h1>Requete R10</h1>

<?php 

$reponse = $bdd->query("SELECT * FROM PILOTE WHERE BONUS IS NULL");

while ($donnees = $reponse ->fetch())
{
    
     echo "Voici les pilotes n'ayant pas de bonus : " . $donnees['NOMPILOTE'] . ".</br>";

}
$reponse->closeCursor(); // Termine le traitement de la requête
?>
