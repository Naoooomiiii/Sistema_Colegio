<!DOCTYPE php>
<php lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cssui_admin.css">
    <title>UI_Admin</title>
</head>
<body> 
    <div class="cabecera">
        <img src="../../../Assets\menu_icon.png" class="barra">
        <a class="princip">Bienvenido(a):</a>
        <input>
        <h1 class="Titulo">ADMINISTRADOR</h1>    
    </div>

    <div class="izquierda">
       <p id="menu1">Crear, modificar o eliminar: Horarios, Cursos, Alumnos y Docentes</p>
       <p id="menu2">Creación de Cuentas Docente</p>
       <p id="menu3">Asignación de Entidades</p>
       <p id="inicio" ><a href="UI_ADMIN.php">Inicio</a></p>
       <p id="salir"><a href="">Cerrar Sesión</a></p>
    </div>

    <div class="container">
        <div class="top-row">
            <div class="icon-container">
                <img src="imagenes/img1.png" alt="Icono 1" class="icon">
                <p class="icon-text">Crear, modificar o eliminar: Horarios, Cursos, Alumnos y Docentes</p>
                <a class="icon-button" href="CrearEntidad.php">Acceder</a>
            </div>
            <div class="icon-container">
                <img src="imagenes/img2.png" alt="Icono 2" class="icon">
                <p class="icon-text">Creación de Cuentas Docente</p>
                <a class="icon-button" href="CrearCuentaDocente.php">Acceder</a>
            </div>
        </div>
        <div class="bottom-row">
            <div class="icon-container">
                <img src="imagenes/img3.png" alt="Icono 3" class="icon">
                <p class="icon-text">Asignación de Entidades</p>
                <a  class="icon-button" href="">Acceder</a>
            </div>
        </div>
    </div>
</body>
</php>