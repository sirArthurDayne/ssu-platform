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
                'mision_text' => "Sensibilizar y motivar al estudiante de la Universidad Tecnológica de Panamá hacia una participación
                            activa en beneficio de las poblaciones vulnerables del país, a través del servicio social universitario
                            y el voluntariado.",
                'vision_text' => "Ofrecer soluciones mediante la aplicación de los conocimientos científicos, tecnológicos y humanísticos
                de los estudiantes de la Universidad Tecnológica de Panamá, a diversos problemas de la sociedad."
            ];
            //load the view and transfer data
            $this->view('homes/index', $data);
        }
    }
