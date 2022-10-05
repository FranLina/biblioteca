<?php class Libro
{
    public $isbn;
    public $titulo;
    public $autor;
    public $fecha_publicacion;

    /*function __construct($isbn, $titulo, $autor, $fecha_publicacion)
        {
            $this->isbn = $isbn;
            $this->titulo = $titulo;
            $this->autor = $autor;
            $this->fecha_publicacion = $fecha_publicacion;
        }*/

    function set_isbn($isbn)
    {
        $this->isbn = $isbn;
    }

    function get_isbn()
    {
        return $this->isbn;
    }

    function set_titulo($titulo)
    {
        $this->titulo = $titulo;
    }

    function get_titulo()
    {
        return $this->titulo;
    }

    function set_autor($autor)
    {
        $this->autor = $autor;
    }

    function get_autor()
    {
        return $this->autor;
    }

    function set_fecha_publicacion($fecha_publicacion)
    {
        $this->fecha_publicacion = $fecha_publicacion;
    }

    function get_fecha_publicacion()
    {
        return $this->fecha_publicacion;
    }
}

class Socio{

    public $n_socio;
    public $nombre;
    public $apellidos;
    public $telefono;
    public $direccion;

    function set_n_socio($n_socio)
    {
        $this->n_socio = $n_socio;
    }

    function get_n_socio()
    {
        return $this->n_socio;
    }

    function set_nombre($nombre)
    {
        $this->nombre = $nombre;
    }

    function get_nombre()
    {
        return $this->nombre;
    }

    function set_apellidos($apellidos)
    {
        $this->apellidos = $apellidos;
    }

    function get_apellidos()
    {
        return $this->apellidos;
    }

    function set_telefono($telefono)
    {
        $this->telefono = $telefono;
    }

    function get_telefono()
    {
        return $this->telefono;
    }

    function set_direccion($direccion)
    {
        $this->direccion = $direccion;
    }

    function get_direccion()
    {
        return $this->direccion;
    }
}
