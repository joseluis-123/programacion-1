<?php
/* Cree una clase llamada Libro, que deberá incluir cuatro (04) variables: nombre de libro, número de ISBN, nombre de autor y editor. La clase deberá contar con un constructor inicialice las cuatro variables, y un método llamado getLibroInfo que devuelva la descripción del Libro 
como una cadena (la descripción debe incluir toda la información sobre el libro). Escriba una aplicación de prueba llamada LibroTest y cree una instancia para demostrar las capacidades de la clase Libro (deberá hacer uso del método getLibroInfo). */
class Libro
{
    private $nombre;
    private $isbn;
    private $autor;
    private $editor;

    public function __construct(string $n, string $isbn, string $a, string $e)
    {
        $this->nombre = $n;
        $this->isbn = $isbn;
        $this->autor = $a;
        $this->editor = $e;
    }

    public function getLibroInfo(): string
    {
        return "Nombre:{$this->nombre} <br/>ISBN:{$this->isbn}<br/>Autor:{$this->autor} <br/>Editor:{$this->editor}";
    }
}

$libroTest = new Libro("La Ilida", "24578456", "Homero", "Robert Fagles");
echo $libroTest->getLibroInfo();
 ?>