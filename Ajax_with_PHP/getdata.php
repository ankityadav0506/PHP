<?php

$val = $_GET['selectvalue'];

$framework1 = array('Laravel','Symfony','CodeIgniter','CakePHP','Phalcon');
$framework2 = array('React','Vue','Angular','Ember','Backbone');
$framework3 = array('Django','CubicWeb','TurboGears','web2py','Pyramid');

switch($val){
    case 'PHP': foreach($framework1 as $frameval){
        echo "<option>$frameval</option>";
    }
    break;

    case 'JAVASCRIPT': foreach($framework2 as $frameval){
        echo " <option> $frameval </option> ";
    }
    break;

    case 'PYTHON': foreach($framework3 as $frameval){
        echo "<option>$frameval</option>";
    }
    break;

    default: echo "Error";
    break;
}
?>