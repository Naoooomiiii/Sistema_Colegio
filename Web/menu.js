document.addEventListener("DOMContentLoaded", function() {
    const iconMenu = document.getElementById("icon_menu");
    const menu = iconMenu.querySelector(".menu");

    // Función para abrir y cerrar el menú
    function toggleMenu() {
        menu.style.display = (menu.style.display === "block") ? "none" : "block";
    }

    // Mostrar u ocultar el menú al hacer clic en el icono
    iconMenu.addEventListener("click", function(event) {
        toggleMenu();
        event.stopPropagation(); // Evitar que el evento se propague al documento
    });

    // Cerrar el menú si se hace clic fuera de él
    document.addEventListener("click", function(event) {
        if (!iconMenu.contains(event.target)) {
            menu.style.display = "none";
        }
    });
});
