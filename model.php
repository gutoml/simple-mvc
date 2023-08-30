<?php

class Model
{
    private $data;

    public function __construct() {
        $this->data = [
            'Projeto 1',
            'Projeto 2',
            'Projeto 3',
            'Projeto 4',
            'Projeto 5',
        ];
    }

    public function all() {
        return $this->data;
    }
}