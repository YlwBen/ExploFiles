<!DOCTYPE html>
<html>

 <head>
   <script type="text/javascript" src="Librairie/jquery.js"></script>
   <script type="text/javascript" src="ajax.js"></script>
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

 <div id="arbo"></div>


 <footer>

     <!-- Affiche la taille du dossier -->

     <?php

       function taille_dossier($rep){
           $racine=opendir($rep);
           $taille=0;
           while($dossier=readdir($racine)){
             if(!in_array($dossier, array("..", "."))){
               if(is_dir("$rep/$dossier")){
                 $taille+=taille_dossier("$rep/$dossier");
               }else{
                 $taille+=filesize("$rep/$dossier");
               }
             }
           }
           closedir($racine);
           return $taille;
         }
       function taille_dossier1($rep){
           $racine=opendir($rep);
           $taille=0;
           $dossier=readdir($racine);
           $dossier=readdir($racine);
           while($dossier=readdir($racine)){

              if(is_dir("$rep/$dossier")){
                 $taille+=taille_dossier("$rep/$dossier");
               }else{
                 $taille+=filesize("$rep/$dossier");
               }

           }
           closedir($racine);
           return $taille;
         }
       echo "Taille du dossier : ";
       echo taille_dossier("/home/johan")/(1024*1024)."";
       echo "MB <br />";


      //affiche la date et l'heure de la dernière mise a jour du fichier index.php (pour l'expemple)

      $filename = 'index.php';
      if (file_exists($filename)) {
          echo "$filename a été modifié le : " . date ("F d Y H:i:s.", filemtime($filename));
      }


     ?>




   </footer>

 </body>

</html>
