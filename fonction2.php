<?php


// Choix du répertoire
$chemin = '/../';
// Ouverture du répertoire
$repertoire = opendir($chemin);
echo '<b><u>Le répertoire choisi contient</u><br />';
echo 'Les répertoires</b> : <br />';
// Boucle pour lire le répertoire ligne par ligne
while($fichier = readdir($repertoire)) {
	// Stockage nom fichier dans un tableau
	$liste_fichiers[] = $fichier; }
// Tri des fichiers
natsort($liste_fichiers);
// Réindexation du tableau selon le nouvel ordre
$liste_fichiers = array_values($liste_fichiers);
$nombre = count($liste_fichiers);
// Boucle pour lire et afficher les répertoires
for ($i=1; $i<=$nombre; $i++) {
	if ($liste_fichiers[$i] != "" && $liste_fichiers[$i] != "." && $liste_fichiers[$i] != "..") {
		if (is_dir($chemin.$liste_fichiers[$i])) echo '<img src="../dossier.png" border="0" align="absmiddle"> '.$liste_fichiers[$i].'<br />'; } }
echo '<b>et les fichiers</b> : <br />';
// Boucle pour lire et afficher les fichiers
for ($i=1; $i<=$nombre; $i++) {
	if ($liste_fichiers[$i] != "" && $liste_fichiers[$i] != "." && $liste_fichiers[$i] != "..") {
		if (!is_dir($chemin.$liste_fichiers[$i])) echo $liste_fichiers[$i].'<br />'; } }
?>
