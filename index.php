<!DOCTYPE html>
<html>

 <head>
   <script type="text/javascript" src="Librairie/jquery.js"></script>
   <script type="text/javascript" src="script.js"></script>
   <script rel="stylesheet" href="bouton.css"></script>
   <link rel="stylesheet" href="Librairie/bootstrap/css/bootstrap.css">
   <meta charset="utf-8">
   <title>Index Commun</title>
 </head>

 <body>
   <nav class="navbar navbar-dark bg-primary">
     <form class="form-inline col-12">
       <input class="form-control col-7 mr-sm-3" type="url">
       <a href="#" class="btn btn-primary btn-primary col-4">
       <span class="glyphicon glyphicon-arrow-left"></span> Retour</a>
     </form>
    </nav>

 <footer>
   <!-- Affiche la taille du dossier -->
   <?php
    
    function calc_size($dir)
    {
     $size = calc_size_Rdir($dir);
      $filesizename = array(" Bytes", " KB", " MB", " GB", " TB", " PB", " EB", " ZB", " YB");
       return round($size/pow(1024, ($i = floor(log($size, 1024)))), 2) . $filesizename[$i];
    }

    function calc_size_Rdir($dir_start)
    {
     $size = 0;
      $open = opendir($dir_start);
       while($file = readdir($open))
    {

    if($file != '.' && $file != '..')
    {
     if(is_dir($dir_start .'/'.$file))
    {
   $new_dir = $dir_start .'/'.$file;
    $size = $size + calc_size_Rdir($new_dir);
    }
    else
    {
    $size = $size + filesize($dir_start .'/'.$file);
     }
    }
   }

    return $size;
    }
   ?>
   <?php

    $size = calc_size('.');
    echo $size;
   
   ?>
   </footer>

 </body>

</html>