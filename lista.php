<?php
include_once("conexao.php");
include_once "cab.php";

$result_sql = "SELECT * FROM texto";
$resultado_sql = mysqli_query($conn, $result_sql);



?>


<ul class="list-group">
<?php
        while($row = mysqli_fetch_assoc($resultado_sql)){
            echo "<li class='list-group-item'>".$row['texto_c']."</li>";
        }
        ?>

  
</ul>
