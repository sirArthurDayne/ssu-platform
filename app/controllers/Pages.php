<?php
    //Controlador de prueba
    class Pages extends Controller {
        public function __construct()
        {
            //echo "Controller Loaded";
        }
        public function index()
        {
            //load data from example
            $data = [
                'title' => 'Home Page',
                'name' => 'Xavier'
            ];
            //load the view from a path 
            $this->view('pages/index', $data);
        }
        public function about()
        {
            $this->view('pages/about');
        }
    }