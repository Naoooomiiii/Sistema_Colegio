<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Docente</title>
    <link rel="stylesheet" href="UI_Docente.css">
    <link rel="stylesheet" href="../../menu.css">
</head>
<body>
    <nav>
        <div id="icon_menu" class="icon">
            <img src="../../../Assets/menu_icon.png" alt="menu">
            <div class="menu" id="menu_container">
                <div id="primera_parte">
                    <a href="#">Registro de Notas</a>
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
        <div id="profesor_texto" class="rol">
            <h1>PROFESOR</h1>
        </div>
    </nav>
    <h2> Registro de Notas y Comportamiento</h2>

    <section id="filtro_busqueda">
        <h3>Filtro de Busqueda</h3>
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
            <p>Seleccionar Grado:</p>
            <select name="Grado" id="ingreso_grado">
                <option value=""></option>
                <option value="1">Valor 1</option>
                <option value="2">Valor 2</option>
                <option value="3">Valor 3</option>
            </select>
        </div>
        <div>
            <p>Seleccionar Sección:</p>
            <select name="Sección" id="ingreso_seccion">
                <option value=""></option>
                <option value="1">Valor 1</option>
                <option value="2">Valor 2</option>
                <option value="3">Valor 3</option>
            </select>
        </div>
        <div id="botones_accion_notas">
            <button id="button_buscar_notas" class="button">BUSCAR</button>
            <button id="button_limpiar_notas" class="button">LIMPIAR</button>
        </div>
    </section>

    <section id="resultados_busqueda">
        <h3>Resultados de Busqueda</h3>
        <table>
            <thead>
                <tr>
                    <th>N°</th>
                    <th>CURSO</th>
                    <th>GRADO</th>
                    <th>SECCIÓN</th>
                    <th>ACCIONES</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>01</th>
                    <th>Matemática</th>
                    <th>1°</th>
                    <th>A</th>
                    <th id="iconos_acciones">
                        <div id="icon_editar">
                            <a href="ingreso_notas.php">
                                <img src="../Assets/editar.png" alt="editar">
                            </a>
                        </div>
                        <div id="icon_ver">
                            <a href="ingreso_notas.php">
                                <img src="../Assets/ver.png" alt="ver">
                            </a>
                        </div>

                        
                    </th>
                </tr>
            </tbody>
        </table>
    </section>
<script src="../../menu.js"></script>

</body>
</html>