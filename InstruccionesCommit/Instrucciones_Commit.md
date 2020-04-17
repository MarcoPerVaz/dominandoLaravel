
<!-- title -->
<h1 align="center">Curso - Dominando Laravel de Cero a Experto Laravel 5.7</h1>
<!-- end title -->

<!-- commit name -->
### Commit | __Cómo enviar emails en Laravel__
<!-- end commit name -->
===
<!-- official documentation -->
[Documentación | `Generating Mailables`](https://laravel.com/docs/5.7/mail#generating-mailables)
<!-- end official documentation -->

<!-- commit instructions -->
1. Edición del controlador `app\Http\Controllers\MessagesController.php`
    - Edición de la función `store()`

        **No olvidar importar `use Illuminate\Support\Facades\Mail;`*

        **No olvidar importar `use App\Mail\MessageReceived;`*
2. Creación y edición del archivo mail `app\Mail\MessageReceived.php`
    > php artisan make:mail MessageReceived
    
     **Si el directorio `app\Mail` no existe, se creará automáticamente al usar el comando*
    - Edición de la función `build()`
    - Edición de la función `__construct($msg)`

      **No olvidar `public $subject = 'Mensaje recibido';`*

      **No olvidar `public $msg;`
3. Creación del directorio `resources\views\emails`
   - Creación y edición de la vista `resources\views\emails\message-received.blade.php`
4. Edición del archivo de configuración `.env` para usar `log`
   - `MAIL_DRIVER=log`

     **Al mandar email y teniendo MAIL_DRIVER=log en el archivo .env crea o muestra un archivo en storage\logs\laravel.log con los datos del email(funciona) en lugar de mandar un mail usando smtp*

   - Agregar: `MAIL_FROM_ADDRESS=admin@mail.com`
   - Agregar: `MAIL_FROM_NAME='Marco Antonio'`
4. Edición del archivo de configuración `.env` para usar `smtp`
   - `MAIL_DRIVER=smtp`

     **Al mandar email y teniendo MAIL_DRIVER=log en el archivo .env crea o muestra un archivo en storage\logs\laravel.log con los datos del email(funciona) en lugar de mandar un mail usando smtp*

   - Agregar: `MAIL_USERNAME=usuarioDadoenMailtrap`
   - Agregar: `MAIL_PASSWORD=contraseñaDadaenMailtrap`
   - Agregar: `MAIL_FROM_ADDRESS=admin@mail.com`
   - Agregar: `MAIL_FROM_NAME='Marco Antonio'`
5. Para mandar un email real en modo de producción
    
    **Laravel por defecto no soporta Sendgrid, por lo que se debe instalar el paquete*

    - Crear cuenta o iniciar sesion en SendGrid
    - Ir a Settings/API Keys
    - Create API Key
    - Asignar nombre y create API Key
        - Copiar la API KEY y pegar en el archivo `.env`
            - `SENDGRID_API_KEY='YOUR_SENDGRID_API_KEY'`
    - [Ir a `Sendgrid`](https://sendgrid.com/pricing/)
       - Seleccionar el paquete `free` ya que es suficiente
    - [Ir al repositorio `Laravel SendGrid`](https://github.com/s-ichikawa/laravel-sendgrid-driver/tree/2.0.0)
        - Instalar el paquete de Sendgrid 2.0 para Laravel 5.5 y 5.7
          > composer require s-ichikawa/laravel-sendgrid-driver "~2.0"
    - Edición del archivo `.env`
        - `MAIL_DRIVER=sendgrid`
        - `SENDGRID_API_KEY='YOUR_SENDGRID_API_KEY'`
6. Edición del archivo `config\services.php`

        /* sendgrid service */
         'sendgrid' => [
            'api_key' => env('SENDGRID_API_KEY'),
         ],
        /* end sendgrid service */ 
7. (Opcional) Reflejar lo hecho desde `.env` hacía `.env.example` para mantener consistencia en caso de clonar el proyecto 
  - __Llega el correo a gmail, llega el correo a mailtrap y se crea el log con los datos del correo(comporbado)__ 
<!-- end commit instructions -->
===
<!-- notes -->
#### Notas:
  - [Documentación oficial de `Laravel 5.7`](https://laravel.com/docs/5.7)
<!-- end notes -->
===
<!-- information -->
#### Información
**Más información en `app\Http\Controllers\MessagesController.php`*

**Más información en `app\Mail\MessageReceived.php`*

**Más información en `resources\views\emails\message-received.blade.php`*
<!-- end information -->