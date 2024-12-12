<?php

declare(strict_types=1);

require_once 'Shape.php';

class Rectangle extends Shape {
    public function calcularArea(): float {
        return $this->ample * $this->alt;
    }
}

?>
