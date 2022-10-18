<?php

namespace JPsistemasBR\View;

/**
 * Class JPsistemasBR Dispatch
 *
 * @author JP Sistemas BR <https://github.com/jpsistemasbr>
 * @package JPsistemasBR\Router
 */

use League\Plates\Engine;

class View
{

    private $view;
    private $dir_template;
    private $type_template;
    function render($name, $data, $type = '.php'): void
    {
        $this->dir_template = !empty(DIR_TEMPPLATE) ? DIR_TEMPPLATE : __DIR__ . "/../app/views/";
        $this->type_template = !empty(TYPE_TEMPPLATE) ? TYPE_TEMPPLATE : "php";
        $this->view = new Engine($this->dir_template, $this->type_template);
        $viewPath = $this->dir_template . $name . $type;
        if (file_exists($viewPath)) {
            echo $this->view->render($name, $data);
        } else {
            header("Location: " . URL_BASE . "/ops/506");
        }
    }
    function redirect($rout = null)
    {
        header("Location: " . URL_BASE . "/$rout");
    }
}