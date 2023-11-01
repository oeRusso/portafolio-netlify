// Obtén todos los elementos con la clase "carousel"
const carousels = document.querySelectorAll('.carousel');

// Inicializa el índice del video actual
let currentIndex = 0;

// Oculta todos los videos excepto el primero
function hideAllVideos() {
    carousels.forEach(carousel => {
        carousel.style.display = 'none';
    });
}

// Muestra el video en el índice dado
function showVideo(index) {
    hideAllVideos();
    carousels[index].style.display = 'block';
}

// Función para mostrar el siguiente video
function showNextVideo() {
    currentIndex = (currentIndex + 1) % carousels.length;
    showVideo(currentIndex);
}

// Función para mostrar el video anterior
function showPreviousVideo() {
    currentIndex = (currentIndex - 1 + carousels.length) % carousels.length;
    showVideo(currentIndex);
}

// Mostrar el primer video al cargar la página
showVideo(currentIndex);

// Agrega eventos a los botones de navegación
document.getElementById('nextBtn').addEventListener('click', showNextVideo);
document.getElementById('prevBtn').addEventListener('click', showPreviousVideo);
