
<?php

class Videojuego
{
    private $id;
    private $titulo;
    private $genero;
    private $precio;
    private $puntuacion;
    private $imagen;
    private $stock;

    public function __construct($id, $titulo, $genero, $precio, $puntuacion, $imagen, $stock)
    {
        $this->id = $id;
        $this->titulo = $titulo;
        $this->genero = $genero;
        $this->setPrecio($precio);
        $this->setPuntuacion($puntuacion);
        $this->imagen = $imagen;
        $this->stock = $stock;
    }

    // Getters
    public function getId() { return $this->id; }
    public function getTitulo() { return $this->titulo; }
    public function getGenero() { return $this->genero; }
    public function getPrecio() { return $this->precio; }
    public function getPuntuacion() { return $this->puntuacion; }
    public function getImagen() { return $this->imagen; }
    public function getStock() { return $this->stock; }

    // Setters con validacion
    public function setPrecio($precio)
    {
        if ($precio <= 0) {
            throw new InvalidArgumentException("El precio debe ser mayor que 0");
        }

        $this->precio = $precio;
    }

    public function setPuntuacion($puntuacion)
    {
        if ($puntuacion < 0 || $puntuacion > 10) {
            throw new InvalidArgumentException("La puntuacion debe estar entre 0 y 10");
        }

        $this->puntuacion = $puntuacion;
    }

    public function tieneStock()
    {
        return $this->stock > 0;
    }

    public function aplicarDescuento($porcentaje)
    {
        return $this->precio - ($this->precio * $porcentaje / 100);
    }

    public function filter($criterio)
    {
        if ($criterio == "recomendado") {
            return $this->puntuacion >= 8;
        }

        if ($criterio == "oferta") {
            return $this->precio <= 20;
        }

        if ($criterio == "disponible") {
            return $this->stock > 0;
        }

        return false;
    }

    public function pintarTarjeta($oferta = false)
    {
        echo '<article class="tarjeta">';

        echo '<img src="' . $this->imagen . '" alt="' .
             $this->titulo . '">';

        echo '<div class="contenido">';
        echo '<h3>' . $this->titulo . '</h3>';
        echo '<p>Genero: ' . $this->genero . '</p>';
        echo '<p>Puntuacion: ' . $this->puntuacion . '/10</p>';

        if ($oferta) {
            echo '<p class="precio-original">' . number_format($this->precio, 2) . ' €</p>';
            echo '<p class="precio-oferta">' .
                 number_format($this->aplicarDescuento(20), 2) . ' €</p>';
        } else {
            echo '<p class="precio">' . number_format($this->precio, 2) . ' €</p>';
        }

        if (!$this->tieneStock()) {
            echo '<span class="sin-stock">Sin stock</span>';
        }

        echo '</div>';
        echo '</article>';
    }
}
