<!doctype html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TÃ©rminos y Condiciones | Mondiaco de los Viajes</title>
  <link rel="stylesheet" href="/styles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">`n
</head>

<body>
  <div class="site">
    <?php include('include/header.php'); ?>
    <main>
      <section class="inner-page-hero">
        <div class="inner-page-content">
          <p class="section-kicker">CONDICIONES DE USO</p>
          <h1>TÃ©rminos y Condiciones</h1>
          <p>Al acceder y utilizar Mondiacodelosviaje.com, usted acepta las condiciones que regulan el uso de nuestros servicios de viaje.</p>
          <div class="inner-page-actions">
            <a class="gold-button" href="tel:18883707045">Llamar 1-888-370-7045</a>
            <a class="primary-button" href="/contactarnos">Contactarnos</a>
          </div>
        </div>
      </section>
      <section class="section inner-page-details">
        <article>
          <h2>AceptaciÃ³n de tÃ©rminos</h2>
          <p>Al realizar una reserva confirma que ha leÃ­do y aceptado estos tÃ©rminos.</p>
        </article>
        <article>
          <h2>Reservas y pagos</h2>
          <p>Las reservas dependen de disponibilidad y polÃ­ticas de la aerolÃ­nea. Se confirman tras el pago exitoso y emisiÃ³n del e-ticket.</p>
        </article>
        <article>
          <h2>Cambios y cancelaciones</h2>
          <p>Las reglas y posibles cargos dependen de la tarifa y la aerolÃ­nea correspondiente.</p>
        </article>
        <article>
          <h2>Responsabilidades</h2>
          <p>Debe proporcionar datos correctos y cumplir requisitos de pasaporte, visa, salud, equipaje y check-in.</p>
        </article>
      </section>
      <section class="page-contact-band">
        <div>
          <p class="section-kicker">Â¿NECESITA AYUDA?</p>
          <h2>Nuestro equipo estÃ¡ listo para ayudarle.</h2>
        </div>
        <a href="tel:18883707045">Llamar 1-888-370-7045</a>
      </section>
    </main>
    <?php include('include/footer.php'); ?>

  </div>
  <script>
    document.getElementById('menu').addEventListener('click', () => document.getElementById('nav').classList.toggle('open'));
    document.querySelectorAll('.dropdown-toggle').forEach(toggle => {
      toggle.addEventListener('click', event => {
        if (window.innerWidth <= 760) {
          event.preventDefault();
          toggle.parentElement.classList.toggle('open');
        }
      });
    });
  </script>
</body>

</html>