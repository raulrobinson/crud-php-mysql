## BASIC API WITH PHP - MYSQL.

- Execute with XAMPP or WAMP or Apache, Nginx, Tomcat or Other Server with PHP.

## Create Database and Tables.

> Database create.
mysql> CREATE SCHEMA `php_mysql` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci;

> Database use.
mysql> use php_mysql;

> Create customers table.
mysql> CREATE TABLE IF NOT EXISTS `customers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `city` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
COMMIT;

> Insert register on the customers table.
mysql> INSERT INTO customers (name, city) VALUES ('Raul', 'Barranquilla');

