<?php
require 'mm.php';

$db = new Db();
$response =$db->delete_by_id($_GET['id']);
header("location: index.php");