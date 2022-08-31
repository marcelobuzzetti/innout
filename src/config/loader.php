<?php

function loadModel($modelName) {
    require_once(MODEL_PATH . "/${modelName}.php");
}

function loadView($viewName, $params = array()) {
    if(count($params) > 0) {
        foreach($params as $key => $value) {
            if(strlen($key) > 0) {
                // ${$key} => criando uma variavel com a variavel $key, ex. se $key for teste, sera criado a variavel $teste
                ${$key} = $value;
            }
        }
    }
    require_once(VIEW_PATH . "/${viewName}.php");
}