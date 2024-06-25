<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador</title>
    <link rel="stylesheet" href="modificar.css">
</head>
<body>
    <div class="container">
        <header>
            <div class="menu-icon">&#9776;</div>
            <div class="welcome-message">Bienvenido(a): NOMBRES Y APELLIDOS</div>
        </header>
        <aside>
            <ul>
                <li>Crear, modificar o eliminar: Horarios, Cursos, Alumnos y Docentes</li>
                <li>Creación de Cuentas Docente</li>
                <li>Asignación de Entidades</li>
            </ul>
            <div class="footer">
                <a href="#">Inicio</a>
                <a href="#">Cerrar Sesión</a>
            </div>
        </aside>
        <main>
            <h1>ADMINISTRADOR</h1>
            <form action="save_changes.php" method="POST">
                <table>
                    <tr>
                        <th>Atributo</th>
                        <th>Contenido</th>
                    </tr>
                    <tr>
                        <td>Nombre</td>
                        <td><input type="text" name="nombre" required></td>
                    </tr>
                    <tr>
                        <td>Apellido</td>
                        <td><input type="text" name="apellido" required></td>
                    </tr>
                </table>
                <button type="submit" class="save-button">Guardar</button>
            </form>
        </main>
    </div>
</body>
</html>
