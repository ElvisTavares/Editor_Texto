<?php
session_start();
include_once("conexao.php");
$ex = $_POST['exemplo'];

echo htmlspecialchars($ex);

$result_sql = "INSERT INTO texto (texto_c) VALUES ('$ex')";
$resultado_sql = mysqli_query($conn, $result_sql);

if(mysqli_insert_id($conn)){
    $_SESSION['msg'] = "Texto enviado com sucesso";
    header("Location: index.php");
}else{
    $_SESSION['msg'] = "Texto não foi enviado com sucesso";
    header("Location: index.php");
}
