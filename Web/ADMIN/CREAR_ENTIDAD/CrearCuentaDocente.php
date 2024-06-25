<!DOCTYPE php>
<php lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ccscrearcuentadocente.css">
    <title>Creación de Cuentas Docente</title>
</head>
<body>
    <div class="cabecera">
        <img src="../../../Assets\menu_icon.png" class="barra">
        <a class="princip">Bienvenido(a):</a>
        <input class="inputT">
        <h1 class="Titulo">ADMINISTRADOR</h1>    
    </div>

    <div class="izquierda">
        <p id="menu1">Crear, modificar o eliminar: Horarios, Cursos, Alumnos y Docentes</p>
        <p id="menu2">Creación de Cuentas Docente</p>
        <p id="menu3">Asignación de Entidades</p>
        <p id="inicio" ><a href="UI_ADMIN.php">Inicio</a></p>
       <p id="salir"><a href="">Cerrar Sesión</a></p>
     </div>

    <section class="derecha">
     <p class="subtitle"><span id="abc">_____</span>Creación de Cuentas Docente</p>
     <div class="container">
         <div class="content">
             <h3 class="small-subtitle">Ingreso de datos</h3>
             <div class="vertical-words">
                 <div class="field">
                     <label for="option1">Seleccionar Docente:</label>
                     <select id="option1">
                         <option value="">Docente1</option>
                         <option value="">Docente2</option>
                         <option value="">Docente3</option>
                         <option value="">Docente4</option>
                         <!-- Opciones adicionales -->
                     </select>
                 </div>
                 <div class="field">
                     <label for="option2">Seleccionar Curso:</label>
                     <select id="option2">
                         <option value="">Curso1</option>
                         <option value="">Curso2</option>
                         <option value="">Curso3</option>
                         <option value="">Curso4</option>
                         <!-- Opciones adicionales -->
                     </select>
                 </div>
                 <div class="field">
                     <label for="input1">Crear Correo:</label>
                     <input type="text" id="input1">
                 </div>
                 <div class="field">
                     <label for="input2">Crear Contraseña:</label>
                     <input type="text" id="input2"> 
                 </div>
             </div>
         </div>
         <button class="create-account-button">Crear Cuenta</button>
     </div>
     <div class="empty-container">
        <h4 class="vistaprevia">Vista Previa</h3>  
     </div>
    </section>
</body>
</php>

 