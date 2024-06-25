<!DOCTYPE php>
<php lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ccsreportealumno.css">
    <title>Reporte Alumno</title>
</head>
<body> 
    <main> 
    <header>
        <a href="UI_ADMIN.php" class="Retro"><span class="flecha">&lt; Atrás</a>
        <h1 class="Titulo">REPORTE ALUMNO</h1>    
    </header>
    <h3 class="subtitulo">Reporte Alumno Creado con Exito!!</h3>

    <form>
        <section class="nombre1">
            <label for="">Nombre Alumno:</label>
            <input class="input_tabla_1">
         </section>
         <section class="codigo1">
            <label for="">Código Alumno:</label>
            <input  class="input_tabla_2">
         </section>
         <section class="grado">
            <label for="">Grado:</label>
            <input  class="input_tabla_3">
            <label for="" class="seccion">Sección:</label>
            <input  class="input_tabla_4">
         </section>
         <section class="fecha">
            <label for="">Fecha de Consulta:</label>
            <input  class="input_tabla_5">
         </section>
    </form>
    <table>
        <tr id="ecb_tabla">
            <td id="curso">CURSO</td>
            <td id="prom">PROMEDIO GENERAL</td>
            <td id="comp">COMPORTAMIENTO</td>
       </tr>

        <tr id="rest1">
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr id="rest1">
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr id="rest1">
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr id="rest1">
            <td></td>
            <td></td>
            <td></td>
        </tr>
    </table>

    <img src="imagenes/imprimir.png" alt="" class="img1">
    <img src="imagenes/guardar.png" alt="" class="img2">

    </main>   
</php>
</html>