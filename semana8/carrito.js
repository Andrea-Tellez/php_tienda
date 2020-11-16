var total=0;
function introducir(form) {
		
		var nombreDelArticulo = document.getElementById('Articulo');

		var origen = nombreDelArticulo.options[nombreDelArticulo.selectedIndex].text;

		var origen2 = nombreDelArticulo.options[nombreDelArticulo.selectedIndex].value;

		var articulos=document.getElementById('Numero de Articulos').value;

		var calculo=parseFloat(articulos);

		var numero=parseFloat(origen2);

		var totalDeLaCompra =calculo*numero;

		total = total + totalDeLaCompra; 

		document.getElementById('Carrito de compras').value += "Total de Articulos:"+articulos+"\tArticulo:"+origen+"\tTotal: "+ " $"+totalDeLaCompra + "\n";

		document.getElementById('suma a pagar').value=total;
    
	}