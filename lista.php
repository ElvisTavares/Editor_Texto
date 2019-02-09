<?php
include_once("conexao.php");

$result_sql = "SELECT * FROM texto";
$resultado_sql = mysqli_query($conn, $result_sql);

while($row = mysqli_fetch_assoc($resultado_sql)){
    echo $row['texto_c']."<br><hr>";
}

?>



