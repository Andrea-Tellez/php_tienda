  
<?php
    $id_producto = $_GET["id_producto"];

    $db = new SQLite3("../../sql/tienda.db");

    $db->exec("DELETE FROM Productos where id_producto='$id_producto';");

    header("Location: ../index.php");
?>