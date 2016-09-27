<?php


/*

This is the class that handles the menu items

@DEPENDENCIES:
----------------------
-login.class.php;-
-Controller.class.php;-
----------------------

*/

class Menus extends Login
{

	public $posts;
	/* Unnecesary but wont delete it just yet!
	protected $db;

	public function setDb($db) {

		$this->db = $db;

	}
	*/


	public function addMenu($post)
	{
	// $post should be an array consisting of title

		if ($this->isLoggedIn()) {

		if (exif_imagetype($_FILES["img"]["tmp_name"]) != false) {

				$filename = tempnam('img/', 'img');
	    		unlink($filename);
	    		$period_position = strrpos($filename, ".");
	   			$filename = substr($filename, 0, $period_position);
	    		$file = substr($filename, -7);
	    		$post[1] = $file;

	    	if (move_uploaded_file($_FILES['img']['tmp_name'], $filename)) {

					$sql = "INSERT INTO menu (menu_header, img) VALUES (?, ?);";

					$sth = $this->db->prepare($sql);

					$sth->execute($post);

					$this->redirect("/menu");

				} else {

					$this->redirect("/menu", "Fel i uppladningen av filen!");

				}

			} else {

				$this->redirect("/menu", "Filen måste vara ett bildformat!");

			}

		} else {

			$this->redirect("/menu", "Du måste vara inloggad för att lägga till en post");

		}



	}


	public function getMenu()
	{

		return $this->db->query("SELECT * FROM menu", PDO::FETCH_ASSOC);

	}


  // unnesseceary never used
	// public function getMenuById($id)
	// {

	// 	$sql = "SELECT * FROM menu WHERE menu=?;";

	// 	$sth = $this->db->prepare($sql);

	// 	$sth->execute(array($id));

	// 	$result = $sth->fetchAll(PDO::FETCH_ASSOC);

	// 	return $result;
	// }


	public function delMenu($id) 
	{

		$sql = "DELETE FROM menu WHERE menu=?";

		$sth = $this->db->prepare($sql);

		$sth->bindParam(1, $id, PDO::PARAM_INT);

		$sth->execute();

		$run = $sth->rowCount();

		return $run;

	}


}