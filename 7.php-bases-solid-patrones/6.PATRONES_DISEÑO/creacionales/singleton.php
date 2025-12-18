<?php
/** sin aplicar el patron */
class Database {
    private $connection;

    public function __construct() {
        $this->connection = new PDO('mysql:host=localhost;dbname=empresa', 'usuario', 'contraseña');
    }

    public function getConnection() {
        return $this->connection;
    }
}

// Uso sin Singleton
$db1 = new Database();
$db2 = new Database();

// Se crean dos conexiones distintas a la base de datos

#APLICANDO EL PATRON
class DatabaseSingleton {
    private static $instance = null;
    private $connection;

    private function __construct() {
        $this->connection = new PDO('mysql:host=localhost;dbname=empresa', 'usuario', 'contraseña');
    }

    public static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new Database();
        }
        return self::$instance;
    }

    public function getConnection() {
        return $this->connection;
    }
}

// Uso con Singleton
$db1 = DatabaseSingleton::getInstance();
$db2 = DatabaseSingleton::getInstance();
// Ambas variables $db1 y $db2 apuntan a la misma instancia, evitando múltiples conexiones

?>