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
            //echo "<h1>About page loaded</h1>";
            $this->view('pages/about');
        }
    }