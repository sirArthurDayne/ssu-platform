<?php
    //Controlador de prueba
    class Pages extends Controller {
        public function __construct()
        {
            //Recover the model instance test
            $this->proyectModel = $this->model('Proyect');
        }
        public function index()
        {
            //Get data from Model
            $proyectList = $this->proyectModel->getProyects();

            //load the data transfer
            $data = [
                'title' => 'Error 404, Controlador No encontrado',
                'proyects' => $proyectList
            ];
            //load the view and transfer data
            $this->view('pages/index', $data);
        }
    }
