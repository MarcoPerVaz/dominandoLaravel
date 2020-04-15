
<!-- title -->
<h1 align="center">Curso - Dominando Laravel de Cero a Experto Laravel 5.7</h1>
<!-- end title -->

<!-- commit name -->
### Commit | __*Instalaciones necesarias o recomendadas para Laravel__
<!-- end commit name -->

<!-- commit instructions -->
1. Sitio oficial de [Laragon](https://laragon.org/)
    - Instalar Laragon
        Descargar [Descargar Laragon](https://laragon.org/download/)

    `Laragon` incluye todo lo necesario para empezar a desarrollar
    - **Laragon provee un poderoso y moderno entorno de desarrollo web local*
    - **Soporta lenguajes como:* `PHP, Node js, Phyton, Java, Go, Ruby`
    - **Soporta gestores de base de datos como:* `HeidiSQL, MySQL(MariaDB)`
    - **Es rápido, ligero y fácil de usar*
    - **Permite usar* `URLs bonitas` como por ejemplo
      - `http//app.test` en lugar de `localhost/` o `127.0.0.1`
    - **Certificado de seguridad* `SSL`
    - **Creación de proyectos con un solo click*
    - **Es escalable (se pueden instalar diferentes versiones de los lenguajes*
    - `Laragon en su versión full incluye Git, Composer, NPM, YARN entre otros...`
2. Sitio oficial de [Git]("https://git-scm.com/)
    - Descargar e instalar Git
    - **Git es un lenguaje de versiones*
    - **Para usar la consola de comandos `Git Bash` es necesario tener git instalado*
3. Instalar `Laravel` de forma global
      > composer global require laravel/installer

      **Para crear un nuevo proyecto con la versión más recientede Laravel usando laravel installer*

      > laravel new nombreProyecto

      **Si se desea instalar una versión antigüa de laravel deberá usar el comando de composer*

    **Desde consola debe especificarse la ruta raíz de los proyectos de laragon*
      > cd c/laragon/www/
    **Deberá reiniciar el servidor de apache en Laragon para que tenga en cuenta el nuevo proyecto*
4. Instalar `Laravel 5.7` usando `Composer`
    > composer create-project --prefer-dist laravel/laravel nombreProyecto "5.7.*"

    **Dónde `5.7.*` es la versión de laravel que se quiere instalar y si no se pone `.*` se instalará la versión más reciente de la versión 5.7*
5. Instalar el editor de código que desee (la lista es de los más populares, pero existen otros)

    [Página Oficial `VSCode`](https://code.visualstudio.com/)

    [Página Oficial `PHP Storm`](https://www.jetbrains.com/es-es/phpstorm/)

    [Página Oficial `Sublime Text 3`](https://www.sublimetext.com/)

6. Crear el proyecto que servirá para el curso __*`Dominando Laravel de Cero a Experto`*__
    > composer create-project --prefer-dist laravel/laravel dominandoLaravel57 "5.7.*"
      
<!-- end commit instructions -->

<!-- notes -->
## Notas:
  - [Documentación oficial de `Laragon`](https://laragon.org/docs/)
  - [Documentación oficial de `Laravel 5.7`](https://laravel.com/docs/5.7)
  - [Documentación oficial de `Git`]("https://git-scm.com/doc)
  - Para ver la versión de composer desde la consola
     > composer --version
  - Para ver la versión de npm desde la consola
     > npm --version
  - Para ver la versión de php desde la consola
     > php --version
  - Para ver la versión de yarn desde la consola
     > yarn --version
  -  Para ver la versión de git desde la consola
     > git --version
<!-- end notes -->