<?php
require_once('ENUM/TYPE.php');
abstract class Field {
    protected TYPE $type;
    public string $name;
    protected string $text;

    public function __Construct(TYPE $type, string $name, string $text){
        $this->type = $type;
        $this->name = $name;
        $this->text = $text;
    }

    // public __get(string $name): mixed {
    //     return $this->$name;
    // }
    // public __set(string $name, mixed $value): void {}
    // public __unset(string $name): void {}
    // public __isset(string $name): bool {}

    abstract public function render();
}