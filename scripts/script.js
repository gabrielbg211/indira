// scripts/script.js
document.addEventListener("DOMContentLoaded", function() {
    // Ocultar sección de registro al cargar la página
    document.getElementById('registerSection').style.display = 'none';
});

function toggleForm(section) {
    if (section === 'register') {
        document.getElementById('loginSection').style.display = 'none';
        document.getElementById('registerSection').style.display = 'block';
    } else if (section === 'login') {
        document.getElementById('registerSection').style.display = 'none';
        document.getElementById('loginSection').style.display = 'block';
    }
}
