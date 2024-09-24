# Sistema para una zapateria

## Modelo entidad - relación

![modelo Entidad-Relación](img/entidad-relacion.png "Modelo Entidad-Relación")

## Modelo físico de la BD

![modelo físico](img/fisico.png "Modelo Físico de la BD")

## Tabla Fabricante

![Tabla Fabriante](img/tabla_fabricante.png "Tabla Fabricante")

## Tabla Artículo

![Tabla Artículo](img/tabla_articulo.png "Tabla Artículo")

## Consultas a la BD

1. Mostrar la lista de todos los fabricantes

`SELECT * FROM Fabricante;`

2. Mosrar la lista de nombres de los Fabricantes 

`SELECT nombre_fabricante FROM Fabricante`

![Consulta2](img/consulta2.png "Consulta 2")

3. Mostrar los nombres de los productos

`SELECT nombre_articulo FROM Articulo;`

![Consulta3](img/consulta3.png "Consulta 3")

4. Obtener los nombres y los precios de los productos de la tienda

`SELECT nombre_articulo AS Nombre; precio_articulo AS precio FROM Articulo;`

![Consulta4](img/consulta4.png "Consulta 4")

5. Obtener los nombres de ls articulos cuyo precio sea superior a 50000

`SELECT nombre_articulo FROM Articulo WHERE precio_articulo > 50000;`

![Consulta5](img/consulta5.png "Consulta 5")

6. Obtener el nombre de los artículos cuyo precio esté entre 5000 y 40000 (ambos incluidos)

### Forma 1

`SELECT nombre_articulo FROM Articulo WHERE precio_articulo >= 5000 AND precio_articulo <= 40000;`

### Forma 2

`SELECT nombre_articulo FROM Articulo WHERE precio_articulo BETWEEN 50000 AND 40000;`

![Consulta6](img/consulta6.png "Consulta 6")