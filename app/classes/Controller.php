<?php 
    //Controller base class
    //Allows to load model and the view
    class Controller {
        public function model($model)
        {
            //require model file
            require_once '../app/models/' . $model . '.php';
            //instancia el modelo
            return new $model();
        }
        //cargar la vista
        public function view($view, $data = [])
        {
            if (file_exists('../app/views/' . $view . '.php')) 
            {
                //recuperar la vista
                require_once '../app/views/'. $view . '.php';
            }
            else 
            {
                die("Vista No existente!!");
            }
        }
    }