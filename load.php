<?php
//load.php
header("Content-Type: application/json");

$connect = new PDO('mysql:dbname=test;host=localhost:8080', 'root', '');

$data = array();

$query = "SELECT * FROM events ORDER BY id";

$statement = $connect->prepare($query);

$statement->execute();

$result = $statement->fetchAll();

foreach($result as $row)
{
 $data[] = array(
  'id'   => $row["id"],
  'title'   => $row["title"],
  'start'   => $row["start_event"]->format("dd-mm-Y H:i:s"),
  'end'   => $row["end_event"]->format("dd-mm-Y H:i:s")
 );
}

echo json_encode($data);

?>