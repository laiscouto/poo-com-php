<?php

interface Canidaes {
    public function falar();
}

class CachorroSelvagem implements Canidaes {
    public function falar()
    {
        return 'au au' . PHP_EOL;
    }
}

class CachorroDomestico implements Canidaes {
    private string $tipoDeFala;

    public function __construct() {
        $this->tipoDeFala = 'hey';
    }

    public function falar()
    {
        return "$this->tipoDeFala $this->tipoDeFala" . PHP_EOL;
    }
}

class Lobo implements Canidaes{
    public function falar()
    {
        return 'auuu' . PHP_EOL;
    }
}

function imprimir(Canidaes $canidae) {
    echo $canidae->falar();
}

imprimir(new CachorroSelvagem);
imprimir(new CachorroDomestico);
imprimir(new Lobo);
