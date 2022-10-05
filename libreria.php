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
