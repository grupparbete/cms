<?php
class Db {
	public $mysql;

	function __construct() {
	$this->mysql = new mysqli('localhost', 'root', '', 'hue') or die('connection problem');
}

function update_by_id($id, $description){
	$query = "UPDATE hardwired
			SET description = ? 
			WHERE id =? 
			LIMIT 1";

	if($stmt->mysql->prepare($query)){
		$stmt->bind_param('si', $description, $id);
		$stmt->execute();
	}
}

function delete_by_id($id){
	$query = "DELETE from hardwired WHERE id = $id";
	$results = $this->mysql->query($query) or die("problem med kontakten till databas");
}

} 