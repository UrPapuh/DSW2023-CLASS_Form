<?php
require_once('Field.php');
/**
 * Clase que aborda los inputs basicos [
 * - TEXT
 * - PASSWORD
 * - COLOR
 * - DATE
 * - DATETIME-LOCAL
 * - MONTH
 * - WEEK
 * - TIME
 * - EMAIL
 * - IMAGE
 * - FILE
 * - SEARCH
 * - URL
 * - HIDDEN
 * - SUBMIT
 * - RESET
 * - CHECKBOX
 * ]
 */

 // FALTAN: NUMBER, RANGE, TEL
 // LINK: https://www.w3schools.com/html/html_form_input_types.asp
class SimpleField extends Field{
    private string $value;
    
    public function __Construct(TYPE $type, string $name, string $value, string $text){
        parent::__Construct($type, $name, $text);
        $this->value = $value;
    }

    public function render(){
        if ($this->type == TYPE::TEXT || $this->type == TYPE::PASSWORD) {
            echo <<<STR
                <label for="$this->name">$this->text</label>
                <input type="{$this->type->value}" name="$this->name" value="$this->value">
            STR;
        } else if ($this->type == TYPE::CHECKBOX) {
            echo <<<STR
                <input type="{$this->type->value}" name="$this->name" value="$this->value">
                <label for="$this->name">$this->text</label>
            STR;
        } else if ($this->type == TYPE::SUBMIT || $this->type == TYPE::RESET) {
            echo "<input type=\"{$this->type->value}\" value=\"$this->value\">";
        }
    }
}
