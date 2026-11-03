<?php

class Coche
{
    private $id;
    private $marca;
    private $modelo;
    private $precio;
    private $kilometros;
    private $disponible;

    public function __construct(
        $id,
        $marca,
        $modelo,
        $precio,
        $kilometros,
        $disponible
    ) {
        $this->id = $id;
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->precio = $precio;
        $this->kilometros = $kilometros;
        $this->disponible = $disponible;
    }

    // Getters

    public function getId()
    {
        return $this->id;
    }

    public function getMarca()
    {
        return $this->marca;
    }

    public function getModelo()
    {
        return $this->modelo;
    }

    public function getPrecio()
    {
        return $this->precio;
    }

    public function getKilometros()
    {
        return $this->kilometros;
    }

    public function getDisponible()
    {
        return $this->disponible;
    }

    // Setter del precio

    public function setPrecio($precio)
    {
        if ($precio > 0) {
            $this->precio = $precio;
        }
    }

    // Setter de kilómetros

    public function setKilometros($kilometros)
    {
        if ($kilometros >= 0) {
            $this->kilometros = $kilometros;
        }
    }

    // Comprobar si es nuevo

    public function esNuevo()
    {
        return $this->kilometros == 0;
    }

    // Aplicar descuento

    public function aplicarDescuento($porcentaje)
    {
        if ($porcentaje < 0 || $porcentaje > 100) {
            return $this->precio;
        }

        return $this->precio - ($this->precio * $porcentaje / 100);
    }

    // Filtrar coches

    public function filter($criterio)
    {
        if ($criterio == "disponible") {
            return $this->disponible;
        }

        if ($criterio == "nuevo") {
            return $this->esNuevo();
        }

        if ($criterio == "oferta") {
            return $this->precio <= 15000;
        }

        // Si el criterio es una marca
        return strtolower($this->marca) == strtolower($criterio);
    }

    // Pintar tarjeta

    public function pintarTarjeta()
    {
        ?>

        <article class="tarjeta">

            <h3>
                <?= htmlspecialchars($this->marca) ?>
                <?= htmlspecialchars($this->modelo) ?>
            </h3>

            <p>Precio:
                <?= number_format($this->precio, 2) ?> €
            </p>

            <p>Kilómetros:
                <?= number_format($this->kilometros, 0, ",", ".") ?> km
            </p>

            <p>
                <?= $this->disponible
                    ? "Disponible"
                    : "No disponible" ?>
            </p>

        </article>

        <?php
    }
}