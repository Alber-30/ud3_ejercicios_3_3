# Utilizamos la imagen base oficial de MariaDB
FROM mariadb:latest

# Configuración de variables de entorno para la base de datos
ENV MARIADB_ROOT_PASSWORD=m1_s3cr3t
ENV MARIADB_USER=root
ENV MARIADB_PASSWORD=m1_s3cr3t
ENV MARIADB_DATABASE=test1

# Exponemos el puerto 3306 para que sea accesible desde fuera del contenedor
EXPOSE 3306

# Configuramos el comando por defecto para iniciar el servidor de MariaDB
CMD ["mysqld"]


