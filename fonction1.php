<?php

function explo($chemin){

  $repertoire = opendir($chemin);
  $nomdefichier = readdir($repertoire);

  while($nomdefichier != false)
  {
    echo '<div class="clique container col-8 offset-2 text-center">';
    if (is_dir($chemin.'/'.$nomdefichier))
    {
      echo '<img style="width="20" height="20"" src="img/file.png"/>';
    }else{
      echo '<img style="width="20" height="20"" src="img/file2.png"/>';
    }
    echo $nomdefichier.'</br>';
    $nomdefichier = readdir($repertoire);

    echo '</div>';
  }
}
  if (isset($_POST['action'])&&!empty($_POST['action'])) {
    $action=$_POST['action'];
    explo($action);
  }

 

?>

<!-- Affiche la taille du dossier -->

<?php

  // function taille_dossier($rep){
  //     $racine=opendir($rep);
  //     $taille=0;
  //     while($dossier=readdir($racine)){
  //       if(!in_array($dossier, array("..", "."))){
  //         if(is_dir("$rep/$dossier")){
  //           $taille+=taille_dossier("$rep/$dossier");
  //         }else{
  //           $taille+=filesize("$rep/$dossier");
  //         }
  //       }
  //     }
  //     closedir($racine);
  //     return $taille;
  //   }
  // function taille_dossier1($rep){
  //     $racine=opendir($rep);
  //     $taille=0;
  //     $dossier=readdir($racine);
  //     $dossier=readdir($racine);
  //     while($dossier=readdir($racine)){
  //
  //        if(is_dir("$rep/$dossier")){
  //           $taille+=taille_dossier("$rep/$dossier");
  //         }else{
  //           $taille+=filesize("$rep/$dossier");
  //         }
  //
  //     }
  //     closedir($racine);
  //     return $taille;
  //   }
  // echo "Taille du dossier : ";
  // echo taille_dossier($taille)/(1024*1024)."";
  // echo "MB";

?>
