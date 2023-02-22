<?php 
    require "../conn.php";

    $id = $_GET['id'];
	$peopleDelete = "DELETE FROM peoples WHERE id={$id}";
    $execDelete = $pdo->query($peopleDelete);

    header("location: ../");