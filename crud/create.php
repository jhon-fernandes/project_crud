<?php 

require "../conn.php";

$firstName = $_POST['firstName'];
$lastName  = $_POST['lastName'];
$phone     = $_POST['phone'];
$email     = $_POST['email'];

$peopleCreate = "INSERT INTO peoples(`firstName`, `lastName`, `phone`, `email`) 
value(\"$firstName \", \"$lastName\", \"$phone\", \"$email\")";

 $execPeople = $pdo->query($peopleCreate);

 if($execPeople->rowCount() >=1 )
{
        echo json_encode(' <p class="alert alert-success"> Usuário cadastrado com sucesso! </p>');
    
}   else 
{
    echo json_encode (' <p class="alert alert-danger"> Erro ao cadastrar. </p>');
}