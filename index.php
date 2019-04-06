
<!DOCTYPE html>
<html>
<head>
	<title>Titre</title>
</head>
<body>


	<!-- Menu Navigation -->
	<?php include "menunavigation.php" ?>

	<form method="post">
		 <input type="text" name="pseudo" id="pseudo" placeholder="Votre pseudo/id" required><br>
		 <input type="text" name="age" id="age" placeholder="Votre age"  ><br>
		 <input type="email" name="email" id="email" placeholder="Votre E-Mail" required><br>
		 <input type="submit" name="formsend" id="formsend">
	</form>

	<?php 

	include "database.php";
	global $db;
	$q = $db->query("SELECT * FROM user");
	while ($user = $q->fetch()) {
		echo "id : " . $user["id"] ."pseudo : " .$user['pseudo'];
	}
    
    if (isset($_POST["formsend"])) {


    	$pseudo = $_POST["pseudo"];
    	$age = $_POST["age"];
    	$email = $_POST["email"];

    	if (!empty($pseudo) && !empty($email) && !empty($age)) {
    	    #echo"Votre Pseudo: " .$pseudo ."<br/>";
    		#echo "Votre E-Mail: " .$email . "<br/>";
    		#echo "Votre Age: " .$age ."<br/>";
    	}
    	else{

    		echo "Veuillez tout remplir";
    	}
    	
    }		
	 ?>

</body>
</html>