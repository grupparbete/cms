<?php

class Db
{
  public $mysql;

  function __construct() 
  {

    $this->mysql = new mysqli('localhost', 'root', '', 'coffeeshop') or die('connection problem');
    
  }
}
?>
