

Para esta base de datos construi una pagina llamada main.php para redirigir los usuarios a las
paginas principales llamadas Cliente y Caso(cliente.php y casos.php respectivamente). Dentro de  
Cliente y Caso se puede encontrar los links para editar, anadir y eliminar. El hyperlink llamado 
Editar y el hyperlink llamado Anadir se dirige al file insertar.php donde puedes ingresar la informacion 
necesaria para cada cliente o caso. Dentro de insertar.php, esta tiene el input validation necesario 
para las tres tablas. Luego insertar.php manda la informacion a procesainsertar.php donde se encuentra el 
query necesario para hacer los cambios en la base de datos se hace. Por otro lado el Hyperlink llamado 
Eliminar se redirige a procesaeliminar.php donde se encuentra el query necesario para eliminar el record de la 
tabla. Dentro de mociones al lado de Editar y Eliminar esta el link para Mociones.Este redirige al 
link mociones.php.Esta tambien tiene los links para editar, anadir y insertar que se redirigen a los 
mismos lugares mencionados. Finalmente, Mociones imprime la informacion de ese caso en particular. 
Cada uno de estas tres paginas tambien tiene un link para redirigirse a main.phpllamado Main