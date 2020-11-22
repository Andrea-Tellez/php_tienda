  
CREATE TABLE Productos(
    id_producto integer PRIMARY KEY AUTOINCREMENT,
    producto varchar(100) NOT NULL,
    precio varchar(100) NOT NULL,
    existencias varchar(100) NOT NULL
);
INSERT INTO Productos(producto, precio, existencias) values("Cargador Inalambrico Móvil De Carga Rápida", "$170", "20 piezas en existencias");
INSERT INTO Productos(producto, precio, existencias) values("Funda Contra Agua Sumergible Protector Universal ", "$20", "45 piezas en existencias");


CREATE TABLE Tickets(
    fecha date,
    hora_venta time,
    cantidad_producto varchar(100) NOT NULL,
    producto varchar(100) NOT NULL,
    total_producto varchar(100) NOT NULL
);
INSERT INTO Tickets (fecha, hora_venta, cantidad_producto, producto, total_producto) values (date (), time (), "2", "Cargador Inalambrico Móvil De Carga Rápida", "$170");
INSERT INTO Tickets (fecha, hora_venta, cantidad_producto, producto, total_producto) values (date (), time (), "2", "Funda Contra Agua Sumergible Protector Universal ", "$20");