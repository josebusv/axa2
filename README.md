# Prueba de desarrollo Distribuciones AXA

Este es el repositorio de la entrega para la prueba de desarrollo de Jose Luis Bustos, para la vacante de desarrollador PHP

## Instrucciones

al finalizar la clonacion es necesario ejecutar el siguiente comando:

composer install

Para configurar la base de datos en la raiz del directorio se debe buscar el archivo .env

en
DB_HOST va la direccion del servidor de base de datos
DB_PORT el puerto
DB_DATABASE el nombre de la DB
DB_USERNAME el nombre del usuario
DB_PASSWORD el password

Para generar data de prueba se debe ejecutar el comando php artisan migrate:refresh --seed, este comando creara las tablas en la DB y generara 100 clientes de prueba y 2000 registros en la tabla de pagos
## Respuestas del Cuestionario

1. El método isset se utiliza para:
R: Chequea si una variable esta definida
2. Enuncie los tipos de array en PHP
R: indexado, Asociativo, Multidimencional
3. La función require genera un warning y continúa ejecutando el script
R: Verdadero
4. Enuncie la diferencia entre usar el método POST vs el método GET
R: Post usa los encabezado HTTP para tranferir informacion, mientras que GET envia la informacion agregandola a la solicitud de la pagina en la url
