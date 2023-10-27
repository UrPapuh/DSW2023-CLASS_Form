<?php
    require_once('CLASS/Form.php');
    require_once('CLASS/Document.php');
    $form1 = new Form(METHOD::GET, "view-form.php", "Prueba de Formulario");
    $f1 = new SimpleField(TYPE::CHECKBOX, 'checkbox1', 'Este es el checkbox 1', 'Checkbox 1: ');
    echo $form1->add($f1)? "true":"false";
    echo $form1->add($f1)? "true":"false";
    //$form1->render();
    $doc1 = new Document('Documento 1', ['Prueba de Formulario' => $form1]);
    $doc1->render();