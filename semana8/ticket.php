<?php
?>
<!DOCTYPE html>
<html>
<head>

    <style>
        * {
            font-size: 18px;
            font-family: Courier New;
           }
         </style>
    </head>

<body>
    <div class="ticket">
        <h1>Andrea Store</h1>
        <h1>Ticket</h1>
        <?php 
        $time = time();
       echo date("d-m-Y (H:i:s)", $time);
       ?>
        <?php

        $productos = [
            [
                "cantidad" => 1,
                "descripcion" => "Plumones Crayola Caja Con 50 piezas",
                "precio" => 320,
            ],
            [
                "cantidad" => 2,
                "descripcion" => "Mochila Nylon Impermiable Portátil",
                "precio" => 498,
            ],
            [
                "cantidad" =>1,
                "descripcion" => "Cafeteria Oster",
                "precio" => 823,
            ],
            [
                "cantidad" => 2,
                "descripcion" => "Reloj Coach Dama Color Purpura",
                "precio" => 1700,
            ],
        ];
        ?>

        <table>
            <thead>
                <tr class="centrado">
                    <th class="cantidad">Cantidad</th>
                    <th class="producto">Producto</th>
                    <th class="precio">Precio</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $total = 0;
                foreach ($productos as $producto) {
                    $total += $producto["cantidad"] * $producto["precio"];
                ?>
                    <tr>
                        <td class="cantidad"><?php echo number_format($producto["cantidad"], 2) ?></td>
                        <td class="producto"><?php echo $producto["descripcion"] ?></td>
                        <td class="precio">$<?php echo number_format($producto["precio"], 2) ?></td>
                    </tr>
                <?php } ?>
            </tbody>
            <tr>
                <td class="cantidad"></td>
                <td class="producto">
                    <strong>TOTAL</strong>
                </td>
                <td class="precio">
                    $<?php echo number_format($total, 2) ?>
                </td>
            </tr>
        </table>
        <p class="centrado">¡GRACIAS POR SU PREFERENCIA,VUELVA PRONTO!
            
    </div>
</body>

</html>