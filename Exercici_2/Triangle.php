<?php

declare(strict_types=1);

require_once 'Shape.php';

class Triangle extends Shape {
    public function calcularArea(): float {
        return ($this->ample * $this->alt) / 2;
    }
}
?>

