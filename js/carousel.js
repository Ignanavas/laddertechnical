let slideIndex = 0;

function showSlides() {
    const slides = document.getElementsByClassName("carousel-slide");
    for (let i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex >= slides.length) {slideIndex = 0}    
    slides[slideIndex].style.display = "block";  
    setTimeout(showSlides, 3000); // Cambia de imagen cada 3 segundos
}

function moveSlide(n) {
    slideIndex += n;
    const slides = document.getElementsByClassName("carousel-slide");
    if (slideIndex >= slides.length) {slideIndex = 0}    
    if (slideIndex < 0) {slideIndex = slides.length - 1}    
    for (let i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";  
    }
    slides[slideIndex].style.display = "block";  
}

// Inicia el carrusel
showSlides();
