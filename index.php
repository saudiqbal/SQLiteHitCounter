<?php
// open the database
$db = new PDO('sqlite:Counter.db');
if (!headers_sent()) session_start();
if (!(array_key_exists('counter', $_SESSION)))
{
	$_SESSION['counter'] = true;
    $db->exec("UPDATE Counter SET Counter = Counter + 1 WHERE Id = 1");
}
$result = $db->query('SELECT * FROM Counter WHERE Id=1');

echo number_format($result->fetchColumn(1));
// If you want to display the counter in a regular format like 122223001 then uncomment the bottom line and comment the above line.
// echo $result->fetchColumn(1);

// close the database connection
$db = NULL;
?>
