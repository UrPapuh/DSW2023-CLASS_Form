<?php
require_once("Form.php");
class Document {
    private string $title;
    private array $elements;

    public function __Construct(string $title, array $elements = []){
        $this->title = $title;
        $this->elements = $elements;
    }

    public function render(){
        echo "<!DOCTYPE html>\n"
        . "<html lang=\"es\">\n"
        . "<head>\n\t"
        .    "<meta charset=\"UTF-8\">\n\t"
        .    "<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">\n\t"
        .    "<title>{$this->title}</title>\n"
        . "</head>\n"
        . "<body>\n";
        foreach($this->elements as $element) {
            $element->render();
            echo "\n";
        }
        echo "</body>\n"
        . "</html>\n";
    }
}