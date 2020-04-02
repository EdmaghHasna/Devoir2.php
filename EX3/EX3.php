
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>

<body>
<h1>Choisir une date </h1>
<!--action="traitement.php"!-->


<form method="post"  action="valideDate.php">
    <p>
        <label >Jour</label>
        <input type="number" name="jour"  placeholder="Jour" size="30" maxlength="10" />
        <label >Mois</label>
        <input type="number" name="mois"  placeholder="Mois" size="30" maxlength="10" />
        <label >Annee</label>
        <input type="number" name="Annee"  placeholder="Annee" size="30" maxlength="10" />
        <input type="submit" value="Envoyer">



    </p>
</form>

</body>
</html>