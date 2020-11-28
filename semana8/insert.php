<?php
    
    $cantidad = $_GET['cantidad'];
    $producto = $_GET['producto']; 
    $total_de_articulos = $_GET['total_de_articulos'];

    $db = new SQLite3('../../sql/tienda.db');

    $db->exec("INSERT INTO Tickets (cantidad,producto,total_de_articulos) VALUES ('$cantidad', '$producto', '$total_de_articulos', );");
    
    header("Location: ../index.php");

?>