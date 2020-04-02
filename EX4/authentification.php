<?php
 try{
    $source=fopen("login.txt","r");
    }catch(exception $e){
        die("l'erreur est:".$e);
    }


if(isset($_POST["psw"]) && isset($_POST["email"]) )
{
if (testMail($_POST["email"])===true && testmot($_POST["psw"])== true )
{
  if (test($source)== true) {
    echo "Authentification réussie" ;
  }
   
    else 
    {
        echo "Login inexistant" ;
    }
        
       
}
else
{
    echo "Mot de passe ou Email invalide" ;
}



}

// pour extraire les lignes d'un fichier
function test($fichier)
{
    while($ligne=fgets($fichier))
    {
        
        $arr=explode("|",$ligne);
        if( $arr[0]==$_POST["email"] && $arr[1]==$_POST["psw"] )
        {
            return true ;
           
             
        }
       
        

    }  
}

/// tester la validation de mot de pass 
function testmot($password){
    
        //  $password = $_POST['password'];
   
      if (preg_match('#^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W)#', $password) && strlen($password) >= 8) {
          return true ;
      }
      
      else {
          return false ;
      }
          
      
    }

  /// tester la validation  d'email   
    function testMail($email)
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return true ;

          }
        else 
        {
            return false ;
        }
    } 


    









?>