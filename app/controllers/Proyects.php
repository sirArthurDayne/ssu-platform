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
            $proposal_data = [
            'title' => 'Registro de propuestas',
            'name' => '',
            'objective' => '',
            'description' => '',
            'level' => '',
            'mode' => '',
            'student_amount' => '',
            'student_profile' => '',
            'place' => '',
            'date' => '',
            'hours_amount' => '',
            'asesor_name' => '',
            'asesor_tel' => '',
            'asesor_email' => '',
            'supervisor_name' => '',
            'supervisor_tel' => '',
            'supervisor_email' => '',
            'organismo' => '',
            'imagen' => '',
            'lugar_descr'=> '',
            //error handling data
            'nameError' => '',
            'objectiveError' => '',
            'descriptionError' => '',
            'levelError' => '',
            'modeError' => '',
            'student_amountError' => '',
            'student_profileError' => '',
            'placeError' => '',
            'dateError' => '',
            'hours_amountError' => '',
            'asesor_nameError' => '',
            'asesor_telError' => '',
            'asesor_emailError' => '',
            'supervisor_nameError' => '',
            'supervisor_telError' => '',
            'supervisor_emailError' => '',
            'organismoError' => '',
            'imagenError' => '',
            'lugar_descrError'=> ''
        ];

            if ($_SERVER['REQUEST_METHOD'] == 'POST')
            {
                /* echo "validating POST..."; */
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
                $proposal_data = [

                    'title' => 'Registro de propuestas',
                    'name' => trim($_POST['proyect_name']),
                    'objective' => trim($_POST['proyect_obj']),
                    'description' => trim($_POST['proyect_descr']),
                    'level' => isset($_POST['level']) ? $_POST['level'] : "",
                    'mode' => isset($_POST['modalidad']) ? $_POST['modalidad'] : "",
                    'student_amount' => trim($_POST['student_amount']),
                    'student_profile' => trim($_POST['student_profile']),
                    'place' => trim($_POST['place']),
                    'date' => trim($_POST['proyect_date']),
                    'hours_amount' => trim($_POST['hours_amount']),
                    'asesor_name' => trim($_POST['asesor_name']),
                    'asesor_tel' => trim($_POST['asesor_tel']),
                    'asesor_email' => trim($_POST['asesor_email']),
                    'supervisor_name' => trim($_POST['supervisor_name']),
                    'supervisor_tel' => trim($_POST['supervisor_tel']),
                    'supervisor_email' => trim($_POST['supervisor_email']),
                    'organismo' => trim($_POST['organismo']),
                    'imagen' => $_POST['proyect_image'],
                    'lugar_descr' => trim($_POST['place_descr']),
                    //error handling data
                    'nameError' => '',
                    'objectiveError' => '',
                    'descriptionError' => '',
                    'levelError' => '',
                    'modeError' => '',
                    'student_amountError' => '',
                    'student_profileError' => '',
                    'placeError' => '',
                    'dateError' => '',
                    'hours_amountError' => '',
                    'asesor_nameError' => '',
                    'asesor_telError' => '',
                    'asesor_emailError' => '',
                    'supervisor_nameError' => '',
                    'supervisor_telError' => '',
                    'supervisor_emailError' => '',
                    'organismoError' => '',
                    'imagenError' => '',
                    'lugar_descrError'=> ''
                ];


                //start validation before passing to model, return to register
                //if error found
                require_once APPROOT . '/test/validations.php';

                if(emptyField($proposal_data))//verifica q los campos no esten vacios
                {
                    $this->view("proyects/registro", $proposal_data);
                    exit();//stop running this script
                }
                if(exceedCharacterLimit($proposal_data))//verifica que campos cumplan con limite de caracteres
                {
                    $this->view("proyects/registro", $proposal_data);
                    exit();
                }
                if(notAlfaNumeric($proposal_data))//se asegura de algunos campos sean alfanumericos
                {
                    $this->view("proyects/registro", $proposal_data);
                    exit();
                }
                if(notAValidNumber($proposal_data))//valida campos con numeros
                {
                    $this->view("proyects/registro", $proposal_data);
                    exit();
                }
                if(notValidPhoneNumber($proposal_data))//valida campos con numeros de telefono
                {
                    $this->view("proyects/registro", $proposal_data);
                    exit();
                }
                if(notValidEmail($proposal_data))
                {
                    $this->view("proyects/registro", $proposal_data);
                    exit();
                }

                //register proposal inside BD throw the 'ProyectModel'
                if($this->proyectModel->registerProyect($proposal_data))
                {
                    //redirect to homepage when proposal is save
                    echo "si ves esto es porque se agrego en la BD!!";
                    header('location: ' . URLROOT . '/homes/index');
                }
                else {
                    die('ERROR, something failed when adding a proposal, after validations');
                }

            }
            $this->view("proyects/registro", $proposal_data);
        }

        /*recuperar datos de proyectos APROBADOS*/
        public function listarproyectos()
        {

            if ($_SERVER['REQUEST_METHOD'] == 'POST')
            {
                $proyect_id_selected = -1;
                if (isset($_POST['proyectId_btn']))
                {
                    //transicion a pantalla de ver de proyectos
                    $proyect_id_selected = $_POST['proyectId_btn'];
                    header('location:' . URLROOT . '/proyects/seedetails/' . $proyect_id_selected);
                }

            }


            $aprovedProyects = $this->proyectModel->getProyectByState(2);
            $data = ['title' => 'Listado Proyectos de Labor Social',
                     'aproved' => $aprovedProyects
                    ];




            $this->view('proyects/listado_proyectos', $data);
        }

        /*Recuperar datos de propuestas ENPROCESO*/
        public function listarpropuestas()
        {
            $proposals_data = $this->proyectModel->getInProcessProyects();

            if($_SERVER['REQUEST_METHOD'] == 'POST')
            {
                $proyect_id_selected = -1;
                if(isset($_POST['getproyectIdBtn']) != null)
                {
                    $proyect_id_selected = $_POST['getproyectIdBtn'];
                    header('location:' . URLROOT . '/proyects/ver_proyecto/' . $proyect_id_selected);
                }
            }

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
                    $action_message = $this->proyectModel->setProyectState($proyect_id_selected, $state) ? "se rechazo un proyecto" : "error detectado";
                    header('location: ' . URLROOT . '/proyects/rejectproposal/' . $proyect_id_selected);
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

            $data = ['title' => 'Sugerencias de Cambio',
                     'proyecto' => $toEditProyectData,
                     'comentario' => '',
                     'comentario_error' => ''
            ];
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
                    //recuperar datos
                    // $newProyectData = [
                    //     'name' => trim($_POST['proyect_name']),
                    //     'objective' => trim($_POST['proyect_obj']),
                    //     'description' => trim($_POST['proyect_descr']),
                    //     'level' => trim($_POST['level']),
                    //     'mode' => trim($_POST['modalidad']),
                    //     'stud_amount' => trim($_POST['student_amount']),
                    //     'stud_profile' => trim($_POST['student_profile']),
                    //     'hours' => trim($_POST['hours_amount']),
                    //     'place'=> trim($_POST['place']),
                    //     'place_descr' => trim($_POST['place_descr']),
                    //     'proyect_obj' => trim($_POST['proyect_obj']),
                    //     'proyect_descr' => trim($_POST['proyect_descr']),
                    //     'asesor_name' => trim($_POST['asesor_name']),
                    //     'asesor_tel' => trim($_POST['asesor_tel']),
                    //     'asesor_email' => trim($_POST['asesor_email']),
                    //     'supervisor_name'=> trim($_POST['supervisor_name']),
                    //     'supervisor_tel' => trim($_POST['supervisor_tel']),
                    //     'supervisor_email' => trim($_POST['supervisor_email']),
                    //     'organismo' => trim($_POST['organismo']),
                    //     'imagen' => trim($_POST['proyect_image']),
                    //     'lugar_descr' => trim($_POST['place_descr'])
                    // ];
                    
                    if(isset($_POST['motivo']))
                    {
                        $data = ['title' => 'Sugerencias de Cambio',
                        'proyecto' => $toEditProyectData,
                        'comentario' => trim($_POST['motivo']),
                        'comentario_error' => ''
                        ];
                        if(!empty($data['comentario']))
                        {
                            //insert into db and return to adminproposal
                            if($this->proyectModel->updateProyectComment($data['comentario'], $proyectId))
                            {
                                header('location: ' . URLROOT . '/proyects/adminproposals');   
                            }
                            else
                            {
                                die("Error, no se pudo guardar el comment en la BD");
                                //header('location: ' . URLROOT . '/homes/index');
                            }
                        }
                        else
                        {
                            $data['comentario_error'] = "Debe escribir una sugerencia";
                            $this->view("proyects/editpropuesta", $data);
                        }
                    }
                    else
                    {
                        $data['comentario_error'] = "Debe escribir algo";
                        $this->view("proyects/editpropuesta", $data);
                    }
                }
            }

            
            $this->view('proyects/editpropuesta', $data);
        }

        /*llamado a pantalla de rechazo de propuestas */
        public function rejectproposal($params)
        {
            //recuperar datos de propuesta que se va a editar
            $proyectId = $params;
            $rejectedProyect = $this->proyectModel->getEditProyect($proyectId);

            $data = [
                'title' => 'Rechazo de Propuesta',
                'proyecto' => $rejectedProyect,
                'comentario' => '',
                'comentario_error' => ''
            ];

            if ($_SERVER['REQUEST_METHOD'] == 'POST')
            {
                if(isset($_POST['motivo_rechazo']))
                {
                    $data = [
                        'title' => 'Rechazo de Propuesta',
                        'proyecto' => $rejectedProyect,
                        'comentario' => trim($_POST['motivo_rechazo']),
                        'comentario_error' => ''
                    ];
                    if(!empty($data['comentario']))
                    {
                        //insert into db and return to adminproposal
                        if($this->proyectModel->updateProyectComment($data['comentario'], $proyectId))
                        {
                            header('location: ' . URLROOT . '/proyects/adminproposals');   
                        }
                        else
                        {
                            die("Error, no se pudo guardar el comment en la BD");
                        }
                    }
                    else 
                    {
                        $data['comentario_error'] = "Debe escribir motivo de rechazo"; 
                        $this->view("proyects/rejectpropuesta", $data);
                    }
                }
                else//error message
                {
                    $data['comentario_error'] = "Debe escribir motivo de rechazo"; 
                    $this->view("proyects/rejectpropuesta", $data);
                    exit();
                }
            }

            $this->view("proyects/rejectpropuesta", $data);
        }

        /*Visualizar detalles de proyectos*/
        public function seedetails($params)
        {
            $proyectId = $params;
            $seeDetailsProyect = $this->proyectModel->getEditProyect($proyectId);
            $data = [
                'title' => 'Visualizar Proyecto',
                'seeProyect' => $seeDetailsProyect

            ];

            $this->view("proyects/vista_de_proyecto", $data);
        }

        public function ver_proyecto($params)
        {
            $proyectId = $params;
            $seeDetailsProyect = $this->proyectModel->getEditProyect($proyectId);
            $data = [
                'title' => 'Visualizar Propuesta',
                'seeProyect' => $seeDetailsProyect

            ];

            $this->view("proyects/vista_de_propuesta", $data);
        }

    }
?>