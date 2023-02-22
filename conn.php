<?php 

$host = "localhost";
$dbname = "db_project_crud";
$username = "root";
$passwd = "";

try {
    $pdo = new PDO("mysql:host={$host};dbname={$dbname}", $username, $passwd);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Conectado com sucesso!";
} catch(PDOException $e) 
{
    echo 'Ops, Algo aconteceu. Erro com a conexão com o banco. '; //. $e->getMessage();
}