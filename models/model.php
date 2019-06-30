<?php
	function dbConnect()
	{
		try
		{
			$user = 'mglsi_user';
			$password = 'passer';
			$server = 'localhost';
			$bdd = new PDO('mysql:host='.$server.';dbname=mglsi_news;charset=utf8', $user, $password);
			return $bdd;
		}
		catch (Exception $e) 
		{
			return null;
		}
	}

	function getList($table='Article')
	{
        $bdd = dbConnect();
		$reponse = $bdd->query('SELECT * FROM '.$table);
		if ($table === 'Categorie') 
		{
			$table .= ' ORDER BY length(libelle)';
		}
		$articles = $reponse->fetchAll(PDO::FETCH_OBJ);
		$reponse->closeCursor();
		return $articles;
	}

	function getItem($id, $table='Article')
	{
        $bdd = dbConnect();
		$reponse = $bdd->query('SELECT * FROM '.$table. ' WHERE id = '.$id);
		$item = $reponse->fetch(PDO::FETCH_OBJ);
		$reponse->closeCursor();
		return $item;
	}

	function getItemByCategorie($catId)
	{
        $bdd = dbConnect();
		$reponse = $bdd->query('SELECT * FROM Article WHERE categorie = '.$catId);
		$articles = $reponse->fetchAll(PDO::FETCH_OBJ);
		$reponse->closeCursor();
		return $articles;
	}
?>