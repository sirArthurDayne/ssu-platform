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
            $users = $this->proyectModel->getProyects();

            //load the data transfer
            $data = [
                'title' => 'Home Page',
                'users' => $users
            ];
            //load the view and transfer data
            $this->view('pages/index', $data);
        }
        public function about()
        {
            $this->view('pages/about');
        }
    }
