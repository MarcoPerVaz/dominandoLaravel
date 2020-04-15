
<!DOCTYPE html>
<html>
<head>
  <title>Home</title>
</head>
<body>

  <nav>
    <ul>
      <li><a href="/">Home</a></li>
      <li><a href="/about">About</a></li>
      <li><a href="/contact">Contact</a></li>
      <li><a href="/portfolio">Portfolio</a></li>
    </ul>
  </nav>

  <h1>Home</h1>

  Bienvenid@ <?php /* echo $nombre */ ?> {{-- Si se manda la variable desde routes/web.php --}}
  <br>
  Bienvenid@ <?php echo $nombre  ?? "invitado" ?> 
</body>
</html>


{{-- Notas:
    | -----------------------------------------------------------------------------------
    | *Se puede usar lenguaje php puro pero Laravel proporciona otros métodos más simples
    | *Una operación ternaria se representa así: hace esto de lo contrario hace esto
    |    *Ejemplo: Imprime una variable de lo contrario imprime "Invitado"
    |      *echo $nombre ?? "invitado"
    |        *Dónde ?? significa de lo contrario
    | -----------------------------------------------------------------------------------
--}}