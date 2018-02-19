<?php

try
{
	$bdd = new PDO('mysql:host=localhost;dbname=monsupersite;', 'root', '');
}

catch(Exception $e)
{
	die('Erreur: '.$e->getMessage());
}

if (isset($_POST['pseudo']) && $_POST['message'])
{
	$pseudo = htmlspecialchars($_POST['pseudo']);
	$message = htmlspecialchars($_POST['message']);

	$req = $bdd->prepare('INSERT INTO contact(pseudo, message) VALUES(:pseudo, :message)');
	$req->bindParam(':pseudo', $pseudo);
	$req->bindParam(':message', $message);
	$req->execute();

	$req->closeCursor();
}

else
{
	header('Location: index.php');
}
