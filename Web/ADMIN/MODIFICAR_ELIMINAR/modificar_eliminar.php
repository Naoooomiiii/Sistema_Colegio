<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acciones Entidad</title>
    <link rel="stylesheet" href="entidades_modificar_eliminar.css">
    <link rel="stylesheet" href="../../menu.css">
</head>
<body>
    <nav>
        <div id="icon_menu" class="icon">
            <img src="../../../Assets/menu_icon.png" alt="menu">
            <div class="menu" id="menu_container">
                <div id="primera_parte">
                    <a href="#">Crear, modificar o eliminar: Horarios, Cursos, Alumnos y Docentes</a>
                    <a href="#">Creación de Cuentas Docente</a>
                    <a href="#">Asignación de Entidades</a>
                </div>
                <div id="separador"></div>
                <div id="segunda_parte">
                    <a href="#">Inicio</a>
                    <a href="#">Cerrar Sesión</a>
                </div>
            </div>
        </div>

        <div id="bienvenida_texto" class="texto1">
            <p>Bienvenido(a):</p>
            <p>Nombres y Apellidos</p>
        </div>
        <div id="administrador_texto" class="rol">
            <h1>ADMINISTRADOR</h1>
        </div>
    </nav>

    <section id="seleccion_acciones">
        <h3>Selección de Acciones</h3>
        <div>
            <p>Seleccionar Acción:</p>
            <select name="Cursos" id="ingreso_curso">
                <option value=""></option>
                <option value="1">Valor 1</option>
                <option value="2">Valor 2</option>
                <option value="3">Valor 3</option>
            </select>
        </div>
        <div>
            <p>Seleccionar Entidad:</p>
            <select name="Horario" id="ingreso_horario">
                <option value=""></option>
                <option value="1">Alumno</option>
                <option value="2">Docente</option>
                <option value="3">Curso</option>
            </select>
        </div>
        <div class="div_button">
            <button id="button_buscar_datos" class="button">Buscar</button>
        </div>
    </section>

    <section id="secc_acciones">
        <div id="acciones_entidades">
            <h2>Acciones</h2>
            <table>
                <thead>
                    <tr>
                        <th>N°</th>
                        <th>Nombre</th>
                        <th>Acción</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>01</td>
                        <td>Matemática</td>
                        <td id="iconos_acciones">
                            <div id="icon_editar">
                                <a href="">
                                    <img src="../Assets/editar.png" alt="editar">
                                </a>
                            </div>
                            <div id="icon_ver">
                                <a href="">
                                    <img src="../Assets/delete.png" alt="ver">
                                </a>
                            </div>
                        </td>
                    </tr>
                    <!-- Aquí se añadirán dinámicamente los códigos de los alumnos -->
                </tbody>
            </table>
        </div>
    </section>

    <script src="../../menu.js"></script>
</body>
</html>
