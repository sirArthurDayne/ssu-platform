<?php
    //Clase Controlador de Proyectos, esta se encarga de acceder a la BD
    class Proyects extends Controller{
        
        private $lastEditedProyectId = -1;

        public function __construct()
        {
            //Recuperar el modelo de Proyectos
            $this->proyectModel = $this->model('Proyect');
        }

        public function index()
        {
            //load the data transfer
             $proposal_data = [
                'title' => 'Index de Proyecto'
            ];

            $this->view('proyects/index', $proposal_data);
        }


        public function register()
        {
            //limpiar datos del post
            //limpiar el POST
            $proposal_data = ['title' => 'Registro de propuestas',
            'name' => '',
            'objective' => '',
            'description' => '',
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

            if ($_SERVER['REQUEST_METHOD'] == 'POST')
            {
                echo "validating POST...";
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
                    echo "si ves esto es porque se agrego en la BD!!";
                    header('location: ' . URLROOT . '/homes/index');
                }
                else {
                    die('ERROR, something failed when adding a proposal');
                }

            }
            $this->view("proyects/registro", $proposal_data);
        }

        public function listar_proyectos()
        {
            //recuperar datos de proyectos APROBADOS

            $data = ['title' => 'Listado Proyectos'];
            $this->view('proyects/listado_proyectos', $data);
        }

        public function listarpropuestas()
        {
            //Recuperar datos de propuestas ENPROCESO
            $proposals_data = $this->proyectModel->getInProcessProyects();

            $data = ['title' => 'Listado de propuestas',
                     'propuestas' => $proposals_data];

            $this->view('proyects/listado_propuestas', $data);
        }

        public function adminproposals()
        {
           //load the data transfer
           $proposals_data = $this->proyectModel->getInProcessProyects();
           $action_message = "";
           //recuperar proyecto seleccionado y ejecutar accion
           if ($_SERVER['REQUEST_METHOD'] == 'POST')
           {
               $proyect_id_selected = -1;
               if (isset($_POST['selected_proyectid']))
               {
                    $proyect_id_selected = $_POST['selected_proyectid'];
               }

               if ($_POST['admin_action']==3 && $proyect_id_selected != -1) {
                   /* ...RECHAZAR PROYECTO... */
                    $state = 3;
                    $action_message = $this->proyectModel->setProyectState($proyect_id_selected, $state) ? "se aprobo un proyecto" : "error detectado";
                    header('location: ' . URLROOT . '/proyects/adminproposals');
                }
                else if($_POST['admin_action']==2 && $proyect_id_selected != -1)
                {
                    /* ...APROBAR PROYECTO... */
                    $state = 2;
                    $action_message = $this->proyectModel->setProyectState($proyect_id_selected, $state) ? "se aprobo un proyecto" : "error detectado";
                    header('location: ' . URLROOT . '/proyects/adminproposals');
                }
                else if($_POST['admin_action']==1 && $proyect_id_selected != -1)
                {
                    /* ...EDITAR PROYECTO... */
                    $this->lastEditedProyectId = $proyect_id_selected;
                    header('location:' . URLROOT . '/proyects/editproposal/'. $this->lastEditedProyectId);
                }
            }
            $data = [
            'title' => 'Administrar Propuestas',
            'propuestas' => $proposals_data,
            'user_message' => $action_message
            ];
            $this->view('proyects/administrar_propuestas', $data);
        }

        public function editproposal($params)
        {
            //recuperar datos de propuesta que se va a editar
            $proyectId = $params;
            $toEditProyectData = $this->proyectModel->getEditProyect($proyectId);

            //TODO: checkear post, recuperar datos, actualizar la bd y cambiar de pantalla
            if($_SERVER['REQUEST_METHOD'] == 'POST')
            {
                if($_POST['user_edit'] == 1)//cancelar
                {
                    //volver que administracion  
                    header('location: ' . URLROOT . '/proyects/adminproposals');
                }
                else //aceptar
                {
                    //TODO: validar datos antes de insertar 

                    //recuperar datos
                    $newProyectData = [
                        'name' => trim($_POST['proyect_name']),
                        'objective' => trim($_POST['proyect_obj']),
                        'description' => trim($_POST['proyect_descr']),
                        'level' => trim($_POST['level']),
                        'mode' => trim($_POST['modalidad'])
                    ];
                    echo "getting data...";

                    if ($this->proyectModel->insertIntoCurrentProyect($newProyectData, $proyectId))
                    {
                        header('location: ' . URLROOT . '/proyects/adminproposals');
                    }
                    else // si falla todo
                    {
                       header('location: ' . URLROOT . '/pages/index');
                    }

                }
            }

            $data = ['title' => 'Editar propuestas',
                     'proyecto' => $toEditProyectData,
            ];
            $this->view('proyects/editar_propuesta', $data);
        }


    }
?>
