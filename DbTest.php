<?php

require_once('_db.php');

class DbTest extends PHPUnit_Framework_TestCase
{

$host = "localhost";
$port = 3306;
$username = "root";
$password = "meena";
$database = "hotel";   // the database will be created if it doesn't exist

date_default_timezone_set("UTC");

$db = new PDO("mysql:host=$host;port=$port",
               $username,
               $password);
  public function setUp(){ }
  public function tearDown(){ }

  public function testConnectionIsValid()
  {
    // test to ensure that the object from an fsockopen is valid
    $connObj = new RemoteConnect();
    $serverName = 'www.google.com';
    $this->assertTrue($connObj->connectToServer($serverName) !== false);
  }
  
  public function tableExistsTest($db, "rooms")
  {
	$results = $dbh->query("SHOW TABLES LIKE '$id'");
	$this->assertTrue(if($results->rowCount() > 0) == true);
  }
}
?>