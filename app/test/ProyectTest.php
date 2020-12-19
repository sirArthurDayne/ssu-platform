<?php
/* COMANDOS Y FUNCIONES BASICAS PARA USAR PHP-unit
 * test function $ ./vendor/bin/phpunit --colors=always --filter testSumar CalculadoraTest.php
 * test all function $ ./vendor/bin/phpunit --colors=always CalculadoraTest.php
 * assertEquals($expected, $calc)
 * assertEqualsWithDelta($expected, $calc, $delta)
 * assertSame($expected, $calc) inverso AssertNotSame()
 * assertContains($expected_element, $array) element in array
 * assertCount($expected_size, $array) size of array
 * assertEmpty($array) inverse assertNotEmpty
*/

/*Importacion de credenciales de BD y clases  */
    define('DB_HOST', 'mysql_ssu');
    define('DB_USER', 'root');
    define('DB_PASSWORD', 'clave123');
    define('DB_NAME', 'ssu');

    require_once(dirname(__FILE__,2) . '/classes/Database.php');
    require_once(dirname(__FILE__,2) . '/models/Proyect.php');
    use \PHPUnit\Framework\TestCase;/*Recuperacion de libreria PHPUNIt */

    /*
        CLASE TEST para la clase-modelo Proyect del patron MVC 
        
        Objetivos generales de prueba: 
            1 crear datas providers para validar funciones en Proyect.php
            2 crear tets para validar funciones en validation.php
     
        Objetivo de clase-modelo Proyect.php:
            1. tener metodos crear instancia de  conexion con la bd
            2. ejecutar querys que realicen algun tipo de operacion dentro de la BD.     
    */

    class ProyectTest extends TestCase {
        
        /*DATA PROVIDER */
        /*data provider para metodo testRegisterProyect*/
        public function RegistrarProyectoProveedor()
        {
            return [
                'formulario valido' => array(array(
                                        'name' => 'Caminata CintaCostera4',
                                        'objective' => 'caminata por cinta costera',
                                        'description' => 'caminata por cinta costera',
                                        'level' => 'voluntariado',
                                        'mode' => 'individual',
                                        'student_amount' => '10',
                                        'student_profile' => 'estudiantes utp',
                                        'place' => 'Cinta Costera',
                                        'date' => '2020-12-24',
                                        'hours_amount' => '10',
                                        'asesor_name' => 'jason doe',
                                        'asesor_tel' => '62332413',
                                        'asesor_email' => 'jasondoe@gmail.com',
                                        'supervisor_name' => 'federico gonzalez',
                                        'supervisor_tel' => '6523134', 
                                        'supervisor_email' => 'federico12@gmail.com',
                                        'organismo' => 'alcaldia',
                                        'imagen' => 'https://www.guanacastealaaltura.com/media/k2/items/cache/1faac66da558b39ce1b69794e4285496_XL.jpg', 
                                        'lugar_descr' => 'avenida balboa'
                                    ))
            ];
        }

        /*data provider para metodo testCambiarEstadoDeProyecto */
        public function CambiarEstadoDeProyectoProveedor()
        {
            return [
                'cambio de estado exitoso' => [1,3 , true],
                'cambio de estado fallido' => [-1,2, false],
            ];
        }
        /*data provider para metodo testRecuperarProyectoSegunEstado */
        public function RecuperarProyectoSegunEstadoProveedor()
        {
            return [
                'recuperacion de proyectos valida' => [1],
                'recuperacion de proyectos Invalida' => [-2]
            ];
        }
        /*data provider para metodo testUpdateProyectComment */
        public function UpdateProyectCommentProveedor()
        {
            return [
                'actualizacion de comentario valida' => ['proyecto', 17, true],
                'actualizacion de comentario valida' => ['proyecto', -1, false]
            ];
        }
        /*data provider para metodo testInsertIntoProyect*/
        public function InsertIntoProyectProveedor()
        {
            return [
                'actualizacion de formulario valida' => array(17,true,array(
                        'name' => 'Caminata CintaCostera4',
                        'objective' => 'caminata por cinta costera',
                        'description' => 'caminata por cinta costera',
                        'level' => 'voluntariado',
                        'mode' => 'individual',
                        'stud_amount' => '10',
                        'student_profile' => 'estudiantes utp',
                        'place' => 'Cinta Costera',
                        'date' => '2020-12-24',
                        'hours' => '20',
                        'asesor_name' => 'jason doe',
                        'asesor_tel' => '62332413',
                        'asesor_email' => 'jasondoe@gmail.com',
                        'supervisor_name' => 'CARLOS GUZMAN',
                        'supervisor_tel' => '6523134', 
                        'supervisor_email' => 'carlosGuzman@gmail.com',
                        'organismo' => 'alcaldia',
                        'imagen' => 'https://www.guanacastealaaltura.com/media/k2/items/cache/1faac66da558b39ce1b69794e4285496_XL.jpg', 
                        'lugar_descr' => 'avenida balboa'
                ))
                ];
        }
        /*data provider para metodo testGetEditProyect*/
        public function GetEditProyectsProveedor()
        {
            return [
                'proyecto Existente en la bd' => [18],
            ];
        }
        /*METODOS DE PRUEBA  */
        /*metodo de prueba para clase Proyect::registerProyect  */
        /**
         * @dataProvider RegistrarProyectoProveedor
         */   
        public function testRegisterProyect($data)
        {
            $propuesta = new Proyect;
            $resultado_esperado = true;
            $this->assertEquals($resultado_esperado, $propuesta->registerProyect($data));
        }
        /*metodo de prueba para clase Proyect::getProyects  */
        public function testGetProyects()
        {
            $proyectInstance = new Proyect;
            $this->assertNotEmpty($proyectInstance->getProyects());
        }
        /*metodo  de prueba para clase Proyect::getInProcessProyects*/
        public function testGetInProcessProyects()
        {
            $proyectInstance = new Proyect;
            $resultado_esperado = true;
            $this->assertNotEmpty($proyectInstance->getInProcessProyects());
        }
        /*metodo  de prueba para clase Proyect::getProyectByState*/
        /**
         * @dataProvider RecuperarProyectoSegunEstadoProveedor
         */
        public function testGetProyectByState($estado)
        {
            $proyectInstance = new Proyect;
            $this->assertEmpty($proyectInstance->getProyectByState($estado));
        }
        /*metodo  de prueba para clase Proyect::setProyectState*/
        /**
         * @dataProvider CambiarEstadoDeProyectoProveedor
         */
        public function testSetProyectState($id, $estado, $resultado_esperado)
        {
            $Proyect = new Proyect;
            $this->assertEquals($resultado_esperado, $Proyect->setProyectState($id, $estado));
        }


        /*metodo  de prueba para clase Proyect::getEditProyect*/
        /**
         * @dataProvider GetEditProyectsProveedor
         */
        public function testGetEditProyect($id)
        {
            $ProyectInstance = new Proyect;
            $this->assertNotEmpty($ProyectInstance->getEditProyect($id));
        }
        /*metodo de prueba para clase Proyect::updateProyectComment*/
        /**
         * @dataProvider UpdateProyectCommentProveedor
         */
        public function testUpdateProyectComment($nuevoComentario, $id, $resultado_esperado)
        {
            $proyectInstance = new Proyect;
            $this->assertEquals($resultado_esperado, $proyectInstance->updateProyectComment($nuevoComentario, $id));
        }


        /*metodo de prueba para la clase Proyect::insertIntoCurrentProyect */
        /**
         * @dataProvider InsertIntoProyectProveedor
         */
        public function testInsertIntoCurrentProyect($id, $resultado_esperado, $datos)
        {
            $ProyectInstance = new Proyect;
            $this->assertEquals($resultado_esperado, $ProyectInstance->insertIntoCurrentProyect($datos, $id));
        }


}