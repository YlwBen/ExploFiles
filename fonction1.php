<?php

function explo($chemin){

  $repertoire = opendir($chemin);
  $nomdefichier = readdir($repertoire);

  while($nomdefichier != false)
  {
    if (is_dir($chemin.'/'.$nomdefichier))
    {
      echo '<img style="width="20" height="20"" src="img/file.png"/>';
    }else{
      echo '<img style="width="20" height="20"" src="img/file2.png"/>';
    }

    echo $nomdefichier.'</br>';
    $nomdefichier = readdir($repertoire);
  }
}
  if (isset($_POST['action'])&&!empty($_POST['action'])) {
    $action=$_POST['action'];
    explo($action);
  }

?>
