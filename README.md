# **Reglas al usar el repositorio**

- Antes de hacer un cambios en el repositorio se debe crear una rama personal con el siguiente formato: Tarea que van realizar + "guión (-)" + Las iniciales de la persona que creo la rama.
- Ponerle nombre explicativos a los commits que realicen (Expliquen cuales fueron las tareas que realizaron en ese commit).
- Crear un pull request después de haber hecho el push.
- Avisar cada vez que se haga un push.
- Para el uso de la base de datos, es necesario que cada programador ingrese sus credenciales de forma manual dentro del archivo __config.php__ ubicado en la ruta ```app/config/config.php```, esto lo hacemos para evitar conflictos al momento de hacer pull a un.
- Todos las clase *controlador* creadas deben tener la primera letra en mayuscula y nombre en *plural*. Ejemplo: ```Users.php```
- Todos las clase *modelo* creadas deben tener la primera letra en mayuscula y nombre en *singular*. Ejemplo: ```User.php```
- Todas las *vistas* deben estar dentro de una carpeta con el nombre del controlador en *minuscula*. Ejemplo: ```app/views/users/*.php```
- Cada programador debe de ir a config.php y levantar sus propias credenciales para la BD.

# **Tareas**

### **Front End**

#### Enrique Y Clyde

### **Backend**

#### Francisco y Xavi

### **Base de datos**

#### Olmedo

## Instalacion

1. Clone el repositorio ```git clone https://github.com/sirArthurDayne/ssu-platform.git``` dentro de la carpeta ```htdocs``` en su ruta a Apache.  
Ejemplo win10:  
            - ```$ cd C:/Apache24/htdocs/```  
            -```$ git clone https://github.com/sirArthurDayne/ssu-platform.git``` 

    **IMPORTANTE**: debe tener PHP7+Composer, Apache Server y MySQL/MariaDB instalado previamente.
2. Activar su Apache Server.
3. Ir a su navegador de preferencia y colocar la ruta para probar que todo esta bien.
    - La ruta del proyecto en el browser es ```http://localhost/ssu-platform```  
    - Si todo sale bien verá el HomePage en pantalla.
    
    **IMPORTANTE**  
    * En caso de fallo, asegúrese de que el puerto que este usando no este ocupado. Por defecto se usa el _port 80_.
    * Esto último esta sujeto a cambios a medida que el proyecto crezca.  

## RAMAS
 - ```master```: contiene todo el codigo final del proyecto, utilizado para pruebas con selenium.
 -```test-docker```:codigo modificado para funcionar dentro de contenedores, incluye su ```dockerfile``` y ```docker-compose.yml```, utilizado para pruebas con PhpUnit.

## Explicacion de carpetas

La carpeta ```ssu-platform``` almacena 2 subcarpetas:
    - public: frontend de la app.
    - app: backend. Todo la lógica de nuestra aplicacion usando el patron de diseño MVC.

## Carpeta 'public'

Almacena todo el codigo css, js e imagenes de la aplicacion, ademas del _index.php_ que es el punto de entrada.

## Carpeta 'app'

_app_ esta compuesto por 2 archivos (_require.php_ y _.htaccess_) y otras 6 carpetas

- _.htaccess_: archivo que restringe el acceso del usuario a esta carpeta con el Apache server.
- _require.php_:debe usarse para llamar librerias o dependencias de la carpeta 'classes', instanciar clases importantes.
- classes: almacena las clases base o dependencias de nuestra aplicacion. Ejemplo: basededatos, controlador base y aplicacion base, etc.
- config: Almacena los archivos .php sueltos con las credenciales de cada programador. Ejemplo: credenciales de base de datos.
- controllers: Almacena los archivos .php que contiene la logica de llamado de clases segun el patron MVC.
- models: Almacena los modelos segun el patron MVC. Ejemplo: 
- tests: Almacena codigo de pruebas hechas con PhpUnit.
- views: Almacena las vistas segun el patron MVC.   
