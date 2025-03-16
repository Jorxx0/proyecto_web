# Tienda de Componentes Informáticos

Este proyecto es una tienda en línea de componentes informáticos desarrollada en PHP utilizando el patrón de diseño MVC (Modelo-Vista-Controlador). La tienda permite a los usuarios navegar por los productos, añadir productos al carrito y realizar compras.

## Instalación

### Clonar el Repositorio

1. Clona el repositorio en tu máquina local:
    ```sh
    git clone https://github.com/tu-usuario/tu-repositorio.git
    ```

2. Navega al directorio del proyecto:
    ```sh
    cd tu-repositorio
    ```

### Configurar la Base de Datos

3. Configura la base de datos:
    - Crea una base de datos en tu servidor MySQL.
    - Importa el archivo `create_table.sql` para crear las tablas necesarias.

4. Configura la conexión a la base de datos en el archivo `ddbb/conexion.php`:
    ```php
    class Database {
        public static function open_connection(){
            try{
                $host = "mariadb";
                $dbname = "database";
                $user = "admin";
                $password = "changepassword";
            
                $dsn = "mysql:host=$host;dbname=$dbname";
                $dbh = new PDO($dsn, $user, $password);

                return $dbh;

            } catch (PDOException $e) {
                echo $e->getMessage();
            }  
        }
    }
    ```

### Configurar en una Máquina AWS con Docker

5. Lanza una instancia de EC2 en AWS con una AMI que tenga Docker preinstalado (por ejemplo, Amazon Linux 2 AMI).

6. Conéctate a tu instancia EC2 mediante SSH:
    ```sh
    ssh -i "ruta/a/tu-llave.pem" ec2-user@tu-direccion-ip
    ```

7. Instala Docker en tu instancia EC2 si no está preinstalado:
    ```sh
    sudo yum update -y
    sudo amazon-linux-extras install docker
    sudo service docker start
    sudo usermod -a -G docker ec2-user
    ```

8. Crea un archivo `Dockerfile` en el directorio del proyecto con el siguiente contenido:
    ```dockerfile
    FROM php:7.4-apache
    COPY . /var/www/html/
    RUN docker-php-ext-install mysqli pdo pdo_mysql
    ```

9. Crea un archivo `docker-compose.yml` en el directorio del proyecto con el siguiente contenido:
    ```yaml
    version: '3.1'

    services:
      web:
        build: .
        ports:
          - "80:80"
        volumes:
          - .:/var/www/html
        depends_on:
          - db

      db:
        image: mariadb
        restart: always
        environment:
          MYSQL_ROOT_PASSWORD: changepassword
          MYSQL_DATABASE: database
          MYSQL_USER: admin
          MYSQL_PASSWORD: changepassword
        ports:
          - "3306:3306"
    ```

10. Construye y levanta los contenedores Docker:
    ```sh
    sudo docker-compose up --build -d
    ```

### Acceder a la Aplicación

11. Abre tu navegador y navega a `http://tu-direccion-ip` para ver la aplicación en funcionamiento.

## Uso

- **Navegar por los productos**: Los usuarios pueden ver la lista de productos disponibles en la tienda.
- **Añadir productos al carrito**: Los usuarios pueden añadir productos al carrito de compras.
- **Realizar compras**: Los usuarios pueden proceder a la compra de los productos en el carrito.

## Estructura del Proyecto
