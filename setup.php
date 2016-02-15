<?php
  try
  {
    //open the database
    $db = new PDO('sqlite:Counter.db');

    //create the database
    $db->exec("CREATE TABLE Counter (Id INTEGER PRIMARY KEY, Counter INTEGER)");
	$db->exec("INSERT INTO Counter (Id, Counter) VALUES (1, 0)");

	echo "Database and Table created sucessfully.";
	
    // close the database connection
    $db = NULL;
  }
  catch(PDOException $e)
  {
    print 'Exception : '.$e->getMessage();
  }
?>