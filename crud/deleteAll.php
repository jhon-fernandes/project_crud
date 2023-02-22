<?php 

require "../conn.php";

	$peopleDeleteAll = "DELETE FROM peoples";
    $execDeleteAll = $pdo->query($peopleDeleteAll);

    header("location: ../");