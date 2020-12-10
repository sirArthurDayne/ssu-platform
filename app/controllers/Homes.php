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
            //$proyects = $this->proyectModel->getProyects();

            //load the data transfer
            $data = [
                'title' => 'Pagina Principal',
                //'proyects' => $proyects
            ];
            //load the view and transfer data
            $this->view('homes/index', $data);
        }
    }
