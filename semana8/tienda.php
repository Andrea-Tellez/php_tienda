<!DOCTYPE html >

<html lang="es-mx">

<head><h1>Carrito de Compras</h1></head>

<title>Javascript tienda y carrito de compra</title>

<script src="carrito.js" language="javascript" type="text/javascript">
</script>
<body>

<form action="ticket.php" method="GET"  
	<form id="FormularioTienda" class="FormularioTienda">

		    <p><label>Cantidad:   <input type="number" name="cantidad" min="0" max="10" id="Numero de Articulos"></label></p>
	    	<p></br><label>Artiulo: </label>
		    <select id="Articulo">
			  <option></option>
        <option id="Cargador Inalambrico Móvil De Carga Rápida" value="170">Cargador Inalambrico Móvil De Carga Rápida - $170</option> 
          <option id="Control Para Celular Bluetooth Con Soporte Gamepad Android" value="229">Control Para Celular Bluetooth Con Soporte Gamepad Android - $229</option>
          <option id="Funda Contra Agua Sumergible Protector Universal " value="20">Funda Contra Agua Sumergible Protector Universal- $20</option>
          <option id="Audífonos Inalámbricos Con Bluetooth Resistentes Al Agua" value="219">Audífonos Inalámbricos Con Bluetooth Resistentes Al Agua- $219</option>
          <option id="Reloj Coach Dama Color Purpura" value="1700">Reloj Coach Dama Color Purpura- $1700</option>
          <option id="Mochila Nylon Impermeable Portátil" value="498">Mochila Nylon Impermeable Portátil- $498</option>
          <option id="Plumones Crayola Caja Con 50 Piezas" value="320">Plumones Crayola Caja Con 50 Piezas - $320</option>
          <option id="Cafetera Oster" value="823">Cafetera Oster- $823</option>

			</select>
		<input type="button" name="indroducir" value="Insertar" onclick="introducir(this)"</p>
		<p><label>Carrito de compras: </br></label>
		<textarea id="Carrito de compras" readonly=""></textarea>
		<p><label></br>Total a pagar:
		<input type="number" name="totaldepago" id="suma a pagar" readonly=""></label></p>
		<input type="button" id="botonNuevo" value="Nueva Compra" onclick="location.reload()">
    
    <form action="insert.php" method="GET">
    <input type="submit" id="cobrar" href="insert.php" value="Cobrar" </p>
		</form>
        <div class="container-fluid">
        <h1>Base de datos los articulos </h1>
        <a href="../index.php">Ingresa aqui</a>
    </div>
    <div class="container-fluid">
        <h1>Historial de las ventas</h1>
        <a href="historial_ventas.php">Ingresa aquí</a>
        
    </div>
</body>

</html>