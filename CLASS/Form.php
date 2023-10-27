<?php
require_once("ENUM/METHOD.php");
require_once("FIELD/Field.php");
require_once("FIELD/SimpleField.php");
require_once("FIELD/MultipleField.php");
class Form {
    private METHOD $method;
    private string $action;
    private string $title;
    private array $fields;
    
    public function __Construct(METHOD $method, string $action, string $title, array $fields = []){
        $this->action = $action;
        $this->method = $method;
        $this->title = $title;
        $this->fields = $fields;
    }

    public function add(Field $field): bool{
        if (!array_key_exists($field->name, $this->fields)) {
            $this->fields[] = $field;
            return true;
        }
        return false;
    }

    public function del(Field $field): bool{
        if (array_key_exists($field->name, $this->fields)) {
            unset($field);
            return true;
        }
        return false;
    }

    public function render(){
        echo "\t<h1>$this->title</h1>\n"
        . "\t<form action=\"$this->action\" method=\"{$this->method->value}\">";
        foreach($this->fields as $field) {
            echo "\n";
            $field->render();
        }
        echo "<input type=\"button\" value=\"Enviar\">"
        . "\n\t</form>";
    }
}