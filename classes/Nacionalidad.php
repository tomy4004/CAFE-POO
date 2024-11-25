<?php

    class Nacionalidad {


        protected $id;
        protected $pais;
        protected $altura;
    


        public function get_x_id(int $id){
    

            $conexion = (new Conexion())->getConexion();
    
            $query = "SELECT * FROM nacionalidad WHERE id = $id";
    
    
            $PDOStatement = $conexion->prepare($query);
    
            $PDOStatement->setFetchMode(PDO::FETCH_CLASS, self::class);
    
            $PDOStatement->execute();
    
            $resultado = $PDOStatement->fetch();
    
            if(!$resultado){
                return null;
            }
    
            return $resultado;
    
        }






        /**
         * Get the value of id
         */ 
        public function getId()
        {
                return $this->id;
        }

        /**
         * Get the value of nombre_completo
         */ 
        public function getPais()
        {
                return $this->pais;
        }

        /**
         * Get the value of biografia
         */ 
        public function getAltura()
        {
                return $this->altura;
        }

        
    }









?>