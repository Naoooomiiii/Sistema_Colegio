<!DOCTYPE php>
<php lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="home.css">
</head>
<body>
    <header>
        </div>
        <nav>
            <ul>
                <li><a href="../HOME/home.php">Inicio</a></li>
                <li><a href="../HISTORIA/historia.php">Historia</a></li>
                <li><a href="../NOSOTROS/nosotros.php">Nosotros</a></li>
            </ul>
        </nav>
        
    </header>
    <main>
       
        <div class="image-box"><img src="imagenes/imagen_4.png" style="border-radius: 10%;" width="350" height="225" alt="Imagen de encabezado"></div>

    
        <section class="banner">
            <div class="button-container">
                <button id="button_ingresar">INGRESAR</button>
                <button id="button_consultar">CONSULTAR</button>
            </div>
        </section>
        <section class="images-container">
            <div class="image-box"><img src="imagenes/imagen_1.png" style="border-radius: 10%;" width="350" height="225" alt="Imagen 1"></div>
            <div class="image-box"><img src="imagenes/imagen_2.png" style="border-radius: 10%;" width="350" height="225" alt="Imagen 2"></div>
            <div class="image-box"><img src="imagenes/imagen_3.png" style="border-radius: 10%;" width="350" height="225" alt="Imagen 3"></div>
            <div class="image-box"><img src="imagenes/imagen 5.png" style="border-radius: 10%;" width="350" height="225" alt="Imagen 4"></div>
            <div class="image-box"><img src="imagenes/imagen.png"  style="border-radius: 10%;" width="350" height="225" alt="Imagen 5"></div>
            <div class="image-box"><img src="imagenes/imagen_4.png" style="border-radius: 10%;" width="350" height="225" alt="Imagen 6"></div>

        </section>
    </main>
    <script>
        document.getElementById("button_ingresar").addEventListener("click", function() {
            window.location.href = "../LOGIN/login.php";
        });
        document.getElementById("button_consultar").addEventListener("click", function() {
            window.location.href = "../../CONSULTAS/FORMULARIO/consultas.php";
        });
    </script>
</body>
</php>
