<?php

    class Variedades {


        protected $id;
        protected $tipo;
        

              //metodos
        //devolver el listado completo de personajes 

        public function lista_completa() : array {
            $resultado= [];

            $conexion = (new conexion())->getConexion();

            $query = "SELECT * FROM variedades";


            $PDOStatement = $conexion->prepare($query);

            $PDOStatement->setFetchMode(PDO::FETCH_CLASS, self::class);

            $PDOStatement->execute();

            $resultado = $PDOStatement->fetchAll();

            return $resultado;


        }


        public function get_x_id(int $id){
    

            $conexion = (new Conexion())->getConexion();
    
            $query = "SELECT * FROM variedades WHERE id = $id";
    
    
            $PDOStatement = $conexion->prepare($query);
    
            $PDOStatement->setFetchMode(PDO::FETCH_CLASS, self::class);
    
            $PDOStatement->execute();
    
            $resultado = $PDOStatement->fetch();
    
            if(!$resultado){
                return null;
            }
    
            return $resultado;
    
        }

        public function insert($tipo){

            $conexion = (new Conexion())->getConexion();
    
            $query = " INSERT INTO variedades VALUES(null, :tipo)";
       
        $PDOStatement = $conexion->prepare($query);
    
        $PDOStatement->execute(
            [
                'tipo' => $tipo,
                
    
            ]
            );
    
        }
/*metodo reemplazar comic*/

        


/* EDITAR */

public function edit($tipo,$id){

    $conexion = (new Conexion())->getConexion();

    $query = "UPDATE variedades  SET tipo =:tipo WHERE ID = :id";
           

$PDOStatement = $conexion->prepare($query);

$PDOStatement->execute(
    [       'id'=> $id,
            'tipo' => $tipo,
            
    ]
    );


}
//BORRAR
public function delete() {

    $conexion = (new Conexion())->getConexion();

    $query = "DELETE FROM variedades  WHERE id =  ?";
   

    $PDOStatement = $conexion->prepare($query);

    $PDOStatement->execute([$this->id]);
    
        
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
        public function getTipo()
        {
                return $this->tipo;
        }
    }
?>

        








