<?php

    class Conexion{
        //atributos
        public const DB_SERVER = "localhost";
        public const DB_USER = "root";
        public const DB_PASS = "";
        public const DB_NAME = "cafetear";


        const DB_DSN = "mysql:host=" . self::DB_SERVER . ";dbname=" . self::DB_NAME . ";charset=utf8mb4";

        //atributo con tipo poo

        protected PDO $db;


        //metodo contructor

        public function __construct()
        {
            try {
                $this->db = new PDO(self::DB_DSN, self::DB_USER, self::DB_PASS);
            } catch (Exception $e) {
                    die("Error al conectar con MYSQL");
            }
        }
    

    //metodo para llamar la conexion en cada archivo

    public function getConexion() : PDO{
        return $this->db;
    }
        
}




?>