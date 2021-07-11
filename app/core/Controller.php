<?php

class Controller {
    public function view($view, $data = []){
        require 'app/view/' . $view . '.php';
    }

    public function model($model, $data = []){
        require 'app/model/' . $model . '.php';
        return new $model;
    }
}