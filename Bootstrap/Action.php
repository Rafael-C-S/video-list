<?php

namespace Bootstrap;

class Action
{
    protected $view;

    public function __construct()
    {
        $this->view = new \stdClass();
    }

    public function render($action)
    {
        $classe_atual = get_class($this);
        $class_name = (str_replace("App\\Controllers\\", "", $classe_atual));
        $pasta = strtolower(str_replace("Controller", "", $class_name )).'s/';
        include_once "../App/Views/" . $pasta . $action . ".phtml";
    }
}