<?php
  include_once "header/header.php"; 
?>
<!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-header">
          <h2>Contacto</h2>
          <p></p>
        </div>

      </div>

      <div class="map">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3596.4066377005515!2d-102.27149536215158!3d21.904191113762444!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8429ee396ca39e09%3A0x3cccca5324d8289d!2sAv%20Gabriela%20Mistral%20818%2C%20Sta%20Anita%20IV%2C%2020170%20Aguascalientes%2C%20Ags.!5e0!3m2!1ses-419!2smx!4v1668706667253!5m2!1ses-419!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div><!-- End Google Maps -->

      <div class="container">

        <div class="row gy-5 gx-lg-5">

          <div class="col-lg-4">

            <div class="info">
              <h3>¡Contáctanos!</h3>
              <p>Llena el siguiente formulario y en breve nos comunicaremos contigo.</p>

              <div class="info-item d-flex">
                <i class="bi bi-geo-alt flex-shrink-0"></i>
                <div>
                  <h4>Ubicacion:</h4>
                  <p>Gabriela Mistral #818, Santa Anita IV, Aguascalientes, Ags</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="bi bi-envelope flex-shrink-0"></i>
                <div>
                  <h4>Email:</h4>
                  <p>contrataciones@digitalnet.com.mx</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="bi bi-phone flex-shrink-0"></i>
                <div>
                  <h4>Telefono:</h4>
                  <p>449-972-1609</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="bi bi-whatsapp flex-shrink-0"></i>
                <div>
                  <a target="_blank" href="https://api.whatsapp.com/send/?phone=524499721609&text=Hola disculpe, Necesito mas informacion!"> Envíanos un mensaje de WhatsApp</a>
                </div>
              </div><!-- End Info Item -->

            </div>

          </div>

          <div class="col-lg-8">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Nombre" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Correo Electronico" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="telefono" id="telefono" placeholder="Telefono" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="mensaje" placeholder="Mensaje" ></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Cargando</div>
                <div class="error-message"></div>
                <div class="sent-message">Tu mensaje ha sido enviado. ¡Gracias!</div>
              </div>
              <div class="text-center"><button type="submit">Enviar</button></div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>
    </section>
<!-- End Contact Section -->

<?php
  include_once "header/header2.php"; 
?>