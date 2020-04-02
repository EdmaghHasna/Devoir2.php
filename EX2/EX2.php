<?php 
    try
    {
        $fichier = fopen("commandes.txt" , "r") ;
    }
    catch(exception $e){
        die("l'erreur est:".$e);
    }
    //     fichier client 1
    try
    {
        $CLI1001= fopen("pscde01_CLI1001.txt" , "w+") ;
    }
    catch(exception $e){
        die("l'erreur est:".$e);
    }
    //      fichier client 2
    try
    {
        $CLI1004 = fopen("psccl01_CLI1004.txt" , "w+") ;
    }
    catch(exception $e){
        die("l'erreur est:".$e);
    }
    






?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
<table border=1>
    <tr >
        <th>Numero de commande</th>
        <th>Numero Client</th>
        <th>Date de commande</th>
        <th>Désignation article</th>
        <th>Quantité</th>
        <th>prix unitaire</th>
        <th>Date de livraison</th>
        <th>Adresse client</th>
    </tr>

<?php
    while(!feof($fichier) ) {
       
        echo"<tr>";
        $ligne = fgets($fichier) ;
        $tab  = explode("|" , $ligne) ;
        if($tab[1]=="CLI1001")
        {
            fwrite($CLI1001, $ligne);
        }
        elseif($tab[1]=="CLI1004")
        {
            fwrite($CLI1004, $ligne);
        }
        foreach ($tab as $char) {

            echo '<td>'.$char.'</td>' ;
            # code...
        }


        echo"</tr>";
        //echo fgets($myfile) . "<br>";
      }
      
      
 ?>
</table>
</body>
</html>