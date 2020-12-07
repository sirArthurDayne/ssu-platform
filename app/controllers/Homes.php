<?php
    //Controlador de prueba
    class Homes extends Controller {
        public function __construct()
        {
            //Recover the model instance test
            //$this->proyectModel = $this->model('Proyect');
        }
        public function index()
        {
            //Get data from Model
            //$users = $this->proyectModel->getProyects();

            //load the data transfer
            $data = [
                'title' => 'Home Page',
            ];
            //load the view and transfer data
            $this->view('homes/index', $data);
        }
    }
