
<section class="carousel">
    <div class="carousel-container">
        <?php
        // Define las rutas de las imágenes
        $images = array(
            get_template_directory_uri() . '/img/consultgroup.png', // Cambia los nombres a tus imágenes
            get_template_directory_uri() . '/img/empren.png',
        );

        // Muestra las imágenes en el carrusel
        foreach ($images as $image_url) {
        ?>
            <div class="carousel-slide">
                <img src="<?php echo esc_url($image_url); ?>" alt="Descripción de la imagen">
                <div class="overlay">
                    <p>Vos podrias estas aqui!</p> <!-- Cambia esto según sea necesario -->
                </div>
            </div>
        <?php
        }
        ?>
    </div>
    <button class="prev" onclick="moveSlide(-1)">&#10094;</button>
    <button class="next" onclick="moveSlide(1)">&#10095;</button>
</section>