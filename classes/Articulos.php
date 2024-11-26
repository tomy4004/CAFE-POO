<?php

class Articulos
{
    //atributos
    protected $id;
    protected $nombre;
    protected $peso;
    protected $varietal;
    protected $notas;
    protected $sensaciones;
    protected $precio;
    protected $portada;
    protected $id_variedades;
    protected $id_nacionalidad;
   


    //metodos
    //devuelve el catalogo completo

    public function catalogo_completo(): array
    {
        $catalogo = [];

        $conexion = (new conexion())->getConexion();

        $query = "SELECT * FROM articulos";


        $PDOStatement = $conexion->prepare($query);

        $PDOStatement->setFetchMode(PDO::FETCH_CLASS, self::class);

        $PDOStatement->execute();

        $catalogo = $PDOStatement->fetchAll();

        return $catalogo;
    }


    //devuelve el catalogo de productos  de una variedad en particular

    public function catalogo_x_variedades(int $id_variedades)
    {
        $catalogo = [];

        $conexion = (new conexion())->getConexion();

        $query = "SELECT * FROM articulos WHERE id_variedades = $id_variedades";


        $PDOStatement = $conexion->prepare($query);

        $PDOStatement->setFetchMode(PDO::FETCH_CLASS, self::class);

        $PDOStatement->execute();

        $catalogo = $PDOStatement->fetchAll();

        return $catalogo;
    }

    //devolver es un producto particular
    /* marcador de posiciones ,evitan vulnerabilidades con la inyeccion de sql*/

    public function producto_x_id(int $idProducto)
    {

        $conexion = (new Conexion())->getConexion();

        $query = "SELECT * FROM articulos WHERE id = :idProducto";

        $PDOStatement = $conexion->prepare($query);

        $PDOStatement->setFetchMode(PDO::FETCH_CLASS, self::class);

        $PDOStatement->execute(
            [
                'idProducto' => $idProducto
            ]
        );

        $resultado = $PDOStatement->fetch();

        if (!$resultado) {
            return null;
        }

        return $resultado;
    }





    //traer los nombres de cada clase sin usar JOIN (utilizar metodos


    public function getNacionalidad()
    {

        $nacionalidad = (new Nacionalidad())->get_x_id($this->id_nacionalidad);
        $nombre = $nacionalidad->getPais();
        return $nombre;
    }


    public function getVariedades()
    {

        $variedades = (new Variedades())->get_x_id($this->id_variedades);
        $nombre = $variedades->getTipo();
        return $nombre;
    }

    

    
    public function insert($nombre,$peso,$varietal,$notas,$sensaciones,$precio,$portada,$id_variedades,$id_nacionalidad){

        $conexion = (new Conexion())->getConexion();

        $query = " INSERT INTO articulos VALUES(null, :nombre, :peso, :varietal, :notas, :sensaciones, :precio, :portada, :id_variedades, :id_nacionalidad)";
   
    $PDOStatement = $conexion->prepare($query);

    $PDOStatement->execute(
        [
            'nombre' => $nombre,
            'peso' => $peso,
            'varietal' => $varietal,
            'notas' => $notas,
            'sensaciones' => $sensaciones,
            'portada' => $portada,
            'precio' => $precio,
            'id_variedades' => $id_variedades,
            'id_nacionalidad' => $id_nacionalidad,
       

        ]
        );

    }

    








    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the value of titulo
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Get the value of volumen
     */
    public function getPeso()
    {
        return $this->peso;
    }

    /**
     * Get the value of numero
     */
    public function getVarietal()
    {
        return $this->varietal;
    }

    /**
     * Get the value of publicacion
     */
    public function getNotas()
    {
        return $this->notas;
    }

    /**
     * Get the value of origen
     */
    public function getSensaciones()
    {
        return $this->sensaciones;
    }

    

    /**
     * Get the value of portada
     */
    public function getPortada()
    {
        return $this->portada;
    }

    /**
     * Get the value of precio
     */
    public function getPrecio()
    {
        return $this->precio;
    }

    /**
     * Get the value of id_personaje
     */
    public function getId_nacionalidad()
    {
        return $this->id_nacionalidad;
    }

    /**
     * Get the value of id_serie
     */
    public function getId_variedades()
    {
        return $this->id_variedades;
    }

}
?>