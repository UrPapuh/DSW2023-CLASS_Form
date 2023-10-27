<?php
require_once('Field.php');
/**
 * Clase que aborda los inputs complejos [
 * - SELECT
 * - RADIO
 * ]
 */
class MultipleField extends Field{
    private array $options;

    public function __Construct(TYPE $type, string $name, string $text, array $options = []){
        parent::__Construct($type, $name, $text);
        $this->options = $options;
    }

    public function addOption(){}
    public function delOption(){}

    public function render(){
        if ($this->type == TYPE::RADIO) {
            foreach ($options as $text => $value) {
                echo <<<STR
                    <input type="{$this->type->value}" name="$this->name" value="$value">
                    <label for="$this->name">$text</label>
                STR;
            }
        } else if ($this->type == TYPE::SELECT) {
            echo "<label for=\"$this->name\">$text</label>"
            . "<select name=\"$this->name\">";
            foreach ($options as $text => $value) {
                echo "<option value=\"$value\">$text</option>";
            }
            echo "</select>";
        }
    }
}