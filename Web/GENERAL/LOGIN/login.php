<!DOCTYPE php>
<php lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    
    <div class="login-container">
        <h2>ACCEDER</h2>
        <form id="loginForm">
            <label for="username">USUARIO</label>
            <div class="input-container">
                <i class="icon">@</i>
                <input type="text" id="username" name="username" required>
            </div>
            <label for="password">Contraseña</label>
            <div class="input-container">
                <i class="icon">🔒</i>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="button-container">
                <button type="button" class="admin-btn">Ingresar como Administrador</button>
                <button type="button" class="professor-btn">Ingresar como Profesor</button>
            </div>
        </form>
        <p id="error-message" class="error-message"></p>
    </div>
    <script src="script.js"></script>
</body>
</php>

