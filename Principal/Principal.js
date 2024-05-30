// script.js
function showSection(sectionId) {
    // Ocultar todas las secciones
    const sections = document.querySelectorAll('.content-section');
    sections.forEach(section => section.classList.remove('active'));

    // Mostrar la sección seleccionada
    const sectionToShow = document.getElementById(sectionId);
    if (sectionToShow) {
        sectionToShow.classList.add('active');
    }
}

// Mostrar la primera sección por defecto
document.addEventListener('DOMContentLoaded', () => {
    showSection('registro');
});
