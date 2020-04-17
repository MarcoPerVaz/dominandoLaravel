
<!DOCTYPE html>
<html>
<head>
  <title>Mensaje recibido</title>
</head>
<body>
  Contenido del email
  {{-- {{ var_dump($msg) }} --}}
  <p>Recibiste un mensaje de: {{ $msg['name'] }} - {{ $msg['email'] }}</p>
  <p><strong>Asunto: </strong>{{ $msg['subject'] }}</p>
  <p><strong>Contenido: </strong>{{ $msg['content'] }}</p>
</body>
</html>

{{-- Notas:
      | -------------------------------------------------------------
      | *{{ var_dump($msg) }} 
      |   *$msg proviene de app\Mail\MessageReceived.php
      | -------------------------------------------------------------
--}}