<?php

//delete.php

if(isset($_POST["id"]))
{
    $connect = new PDO('mysql:dbname=test;host=127.0.0.1', 'root', '');
 $query = "
 DELETE from events WHERE id=:id
 ";
 $statement = $connect->prepare($query);
 $statement->execute(
  array(
   ':id' => $_POST['id']
  )
 );
}

?>