<?php
require_once 'mm.php';
$db = new Db();
$response = $db->update_by_id($_POST['id'], $_POST['description']);
?>