document.addEventListener('DOMContentLoaded', function () {
    const toggleButton = document.getElementById('toggleButton');
    const navbarCollapse = document.getElementById('navbarToggleExternalContent');

    toggleButton.addEventListener('click', function () {
        navbarCollapse.classList.toggle('show');
    });

    // Cerrar la barra de navegación al hacer clic en un enlace
    const navLinks = document.querySelectorAll('.navbar-nav .nav-link');
    navLinks.forEach(function (link) {
        link.addEventListener('click', function () {
            navbarCollapse.classList.remove('show');
        });
    });
});