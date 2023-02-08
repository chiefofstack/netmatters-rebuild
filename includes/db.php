<?php 

// Connection
$dsn = "mysql:host=localhost;dbname=netmatters;charset=utf8mb4";
$options = [
    PDO::ATTR_EMULATE_PREPARES   => false,  // use real statements
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, //enable errors as exception
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, //fetch are associative
];

try {
    $pdo = new PDO($dsn, "developer", "developer", $options);
} catch (Exception $e) {
    error_log($e->getMessage());
    exit('There was an error connecting to the database'); // display error when cannot connect
}

// News 
$query = $pdo->prepare("SELECT * FROM news ORDER BY published_on DESC");
$query->execute([5]);
$arr = $query->fetchAll(PDO::FETCH_ASSOC);
if(!$arr) exit('No rows');
var_export($arr);
$query = null;

?>