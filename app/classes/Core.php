<?php
    //Main App class
    class Core{
        protected $currentController = 'Homes';//controlador por defecto, se activa cuando no encuentra
        protected $currentMethod = 'index';//metodo por defecto, se activa cuando no encuentra
        protected $params = []; //carga la ruta que se ingrese

        public function __construct()
        {
            //print_r($this->getUrl());
            $url = $this->getUrl();
            //buscar primero el controlador, si existe. ucwords:coloca mayuscula a la primera letra
            if(isset($url[0]))
            {
                if (file_exists('../app/controllers/' . ucwords($url[0]) . '.php'))
                {
                    $this->currentController = ucwords($url[0]);
                    unset($url[0]);
                }
            }
                //recupera el controlador
            require_once '../app/controllers/' . $this->currentController . '.php';
            $this->currentController = new $this->currentController;

            //busca segundo el metodo dentro del controlador.
            if (isset($url[1]))
            {
                if (method_exists($this->currentController, $url[1]))
                {
                    $this->currentMethod = $url[1];
                    unset($url[1]);
                }
            }
            //recuperar parametros si tiene
            $this->params = $url ? array_values($url) : [];

            //call a callback with array of params
            call_user_func_array([$this->currentController,$this->currentMethod], $this->params);
        }

        public function getUrl()
        {
            if(isset($_GET['url']))//si existe una ruta
            {
                //eliminamos el '/' final
                $current_url = rtrim($_GET['url'], '/');
                $current_url = str_replace(URLROOT, "", $current_url);//delete URLROOT
                //filtra caracteres especiales de la ruta (string/number)
                $current_url = filter_var($current_url, FILTER_SANITIZE_URL);
                //separar url en un array para procesar
                $current_url = explode('/',$current_url);
                return $current_url;
            }
        }
    }
