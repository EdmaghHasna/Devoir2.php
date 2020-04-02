<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<h1>Validation de la date</h1>

	<?php 


    if(isset($_POST['jour']) && isset($_POST['mois']) && isset($_POST['Annee'])   )
{
    echo "la date saisie est :" .$_POST['jour']."/" .$_POST['mois']."/".$_POST['Annee']."</br>" ;
    validate_date($_POST['jour'], $_POST['mois'],$_POST['Annee'] ) ;
}
    
// $a = $_POST["Annee"] ; 
// $m = $_POST['mois'] ;
// $j = $_POST['jour'] ;

function validate_date($j, $m ,$a )
{
    if(($j<0 || $j>31) || ($m<0 || $m>12) )
        {
            echo "la date saisie est "."<span style='color:red'>"." Date Invalide"."</span>" ;
        }
    elseif ($j>30 && ($m==4 ||$m==6 ||$m==9||$m==11))
        {
        echo "la date saisie est "."<span style='color:red'>"." Date Invalide"."</span>" ;
        }
    elseif ($j>28 && $m==2 && $a%4 !=0 )
        {
        echo "l'annee " .$a."est non bissextile : "."<span style='color:red'>"." Date Invalide"."</span>" ;
        }
    else
        {
            echo "<span style='color:green'>"." Date valide"."</span>" ; ;
        }

}


// $t=checkdate ( $_POST["mois"],$_POST["jour"],$_POST["Annee"]) ;


// if ($t=='true') {

// 	echo "data valide";
// 	# code...
// }

// else
// echo "data invalide";
	 


?>


</body>
</html>