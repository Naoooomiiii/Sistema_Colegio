<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingreso de Notas</title>
    <link rel="stylesheet" href="ingreso_notas.css">
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
    <div id="contenedor_total_listas">
        <section id="ingreso_notas_lista">
            <h3>Listado de registro de notas y comportamiento</h3>
            <table>
                <thead>
                    <tr>
                        <th>N°</th>
                        <th>Código</th>
                        <th>Nombre y Apellido</th>
                        <th>Nota</th>
                        <th>Comportamiento</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>01</td>
                        <td>123456789</td>
                        <td>Hector Hugo Cuzco Alvarez</td>
                        <td> 15 </td>
                        <td> A </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
            <div id="pagination_container">
                <button id="prev_page" class="button">Anterior</button>
                <button id="next_page" class="button">Siguiente</button>
            </div>
        </section>

        <div id="botones_accion_notas">
            <button id="button_guardar_notas" class="button">GUARDAR</button>
            <button id="button_cancelar_notas" class="button">CANCELAR</button>
        </div>
    </div>
    <script src="../../menu.js"></script>
</body>
</html>
