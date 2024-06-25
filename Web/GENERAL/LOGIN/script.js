document.querySelector('.admin-btn').addEventListener('click', function() {
    handleLogin('admin');
});

document.querySelector('.professor-btn').addEventListener('click', function() {
    handleLogin('professor');
});

function handleLogin(role) {
    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;
    const errorMessage = document.getElementById('error-message');

    // Aquí puedes agregar tu lógica de autenticación
    if (username === 'admin' && password === 'admin123') {
        alert(`Login exitoso como ${role}`);
        errorMessage.style.display = 'none';
    } else {
        errorMessage.textContent = 'Usuario o contraseña incorrectos';
        errorMessage.style.display = 'block';
    }
}

