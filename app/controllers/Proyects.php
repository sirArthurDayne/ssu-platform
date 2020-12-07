<?php
    //Clase Controlador de Proyectos, esta se encarga de acceder a la BD
    class Proyects extends Controller{
        public function __construct()
        {
            //Recuperar el modelo de Proyectos
            $this->proyectModel = $this->model('Proyect');
        }

        public function index()
        {
            $proyect_list = $this->proyectModel->getProyects();

            $data = [
                'title' => 'index de registro de Propuesta de Proyecto',
                'proyects' => $proyect_list
            ];
            $this->view('proyects/index', $data);
        }

        public function register()
        {
            //Recover the model
            //load the data transfer
             $proposal_data = [
                'title' => 'Registro de Propuesta de Proyecto',
                'name' => '',
                'objective' => '',
                'description' => '' ,
                'level' => '',
                'mode' => '',
                'student_amount' => '',
                'student_profile' => '',
                'place' => '',
                'date' => '',
                'place_descr' => '',
                'hours_amount' => '',
                'asesor_name' => '',
                'asesor_tel' => '',
                'asesor_email' => '',
                'supervisor_name' => '',
                'supervisor_tel' => '',
                'supervisor_email' => '',
                'organismo' => ''
            ];


            //limpiar datos del post
            if ($_POST != NULL)
            {
                //limpiar el POST
                echo "im in";
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
                $proposal_data = [
                    'name' => trim($_POST['proyect_name']),
                    'objective' => trim($_POST['proyect_obj']),
                    'description' => trim($_POST['proyect_descr']),
                    'level' => trim($_POST['level']),
                    'mode' => trim($_POST['modalidad']),
                    'student_amount' => trim($_POST['student_amount']),
                    'student_profile' => trim($_POST['student_profile']),
                    'place' => trim($_POST['place']),
                    'date' => trim($_POST['proyect_date']),
                    'place_descr' => trim($_POST['place_descr']),
                    'hours_amount' => trim($_POST['hours_amount']),
                    'asesor_name' => trim($_POST['asesor_name']),
                    'asesor_tel' => trim($_POST['asesor_tel']),
                    'asesor_email' => trim($_POST['asesor_email']),
                    'supervisor_name' => trim($_POST['supervisor_name']),
                    'supervisor_tel' => trim($_POST['supervisor_tel']),
                    'supervisor_email' => trim($_POST['supervisor_email']),
                    'organismo' => trim($_POST['organismo'])
                ];

                //TODO: validate before sending to DB
                //$text_regex = "/^[a-zA-Z0-9]*$/";
                //$number_regex = "/^[0-9]*$/";

                //register proposal inside BD throw the 'ProyectModel'
                if($this->proyectModel->registerProyect($proposal_data))
                {
                    //redirect to homepage when proposal is save
                    header('Location: ' . URLROOT . '/homes/index');
                }
                else {
                    die('ERROR, something failed when adding a proposal');
                }
            }
            //load the view and transfer data
            $this->view('proyects/register', $proposal_data);
        }


    }
?>
