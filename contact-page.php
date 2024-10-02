
<?php
/**
 * Template Name: Página de Contacto
 */
?>
<section class="contact-section">
 <div class="contact-container">
 <div class="contact-form">
     <h2>Contáctanos</h2>
     <form action="<?php echo esc_url(admin_url('admin-post.php')); ?>" method="post">
         <input type="hidden" name="action" value="handle_contact_form">
         <div class="form-group">
             <label for="name">Nombre:</label>
             <input type="text" id="name" name="name" required>
         </div>
         <div class="form-group">
             <label for="email">Correo Electrónico:</label>
             <input type="email" id="email" name="email" required>
         </div>
         <div class="form-group">
             <label for="message">Mensaje:</label>
             <textarea id="message" name="message" required></textarea>
         </div>
         <button type="submit">Enviar</button>
     </form>
 </div>

 <div class="contact-image">
     <img src="<?php echo get_template_directory_uri(); ?>/img/contactame.jpg" alt="Descripción de la imagen de contacto">
 </div>
</div>
</section>
