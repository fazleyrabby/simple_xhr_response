<?php
//My DB config
$servername = "localhost"; //Host name
$username = "root"; //Host username
$password = ""; 
$dbname = "library"; //db name

// CONNECT DB
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

// SELECT ALL DATA FROM THE TABLE BOOKS
$statement = $conn->prepare("select * from books");

// EXECUTE QUERY
$statement->execute();

// FETCH ALL DATA WITH ASSOCIATE ARRAY
$row = $statement->fetchAll(PDO::FETCH_ASSOC);


// ECHO AS JSON FORMAT
echo json_encode($row);

    
?>