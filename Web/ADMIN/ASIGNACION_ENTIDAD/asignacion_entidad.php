<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asignación de Entidades</title>
    <link rel="stylesheet" href="asignacion_entidad.css">
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

    <h2>Asignación de Entidades</h2>

    <section id="ingreso_datos">
        <h3>Ingreso de Datos</h3>
        <div>
            <p>Seleccionar Curso:</p>
            <select name="Cursos" id="ingreso_curso">
                <option value=""></option>
                <option value="1">Valor 1</option>
                <option value="2">Valor 2</option>
                <option value="3">Valor 3</option>
            </select>
        </div>
        <div>
            <p>Seleccionar Horario:</p>
            <select name="Horario" id="ingreso_horario">
                <option value=""></option>
                <option value="1">Valor 1</option>
                <option value="2">Valor 2</option>
                <option value="3">Valor 3</option>
            </select>
        </div>
        <div class="div_button">
            <button id="button_buscar_datos" class="button">Buscar</button>
        </div>
    </section>

    <section id="codigo_alumno_sect">
        <div id="ingreso_codigo">
            <p>Ingresa código:</p>
            <input type="text" inputmode="numeric" id="codigo_numero_alumno" pattern="\d*" placeholder="Ingrese código de alumno">
            <button id="button_añadir_codigo" class="button">Añadir</button>
        </div>
        <div id="codigos_alumno">
            <table>
                <thead>
                    <tr>
                        <th>N°</th>
                        <th>Código</th>
                        <th>Nombre y Apellido</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>01</td>
                        <td>123456789</td>
                        <td>Hector Hugo Cuzco Alvarez</td>
                    </tr>
                    <!-- Aquí se añadirán dinámicamente los códigos de los alumnos -->
                </tbody>
            </table>
        </div>
        <div class="div_button">
            <button id="button_asignar" class="button">Asignar</button>
        </div>
    </section>
    <script src="../../menu.js"></script>
</body>
</html>
