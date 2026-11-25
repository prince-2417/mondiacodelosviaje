<!doctype html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PolÃ­tica de cumplimiento | Mondiaco de los Viajes</title>
  <link rel="stylesheet" href="/styles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">`n
</head>

<body>
  <div class="site">
    <?php include('include/header.php'); ?>

    <main>
      <section class="inner-page-hero">
        <div class="inner-page-content">
          <p class="section-kicker">SEGURIDAD Y CONFIANZA</p>
          <h1>PolÃ­tica de Cumplimiento</h1>
          <p>Nos comprometemos a ofrecer una experiencia de reserva confiable, transparente y segura.</p>
          <div class="inner-page-actions">
            <a class="gold-button" href="tel:18883707045">Llamar 1-888-370-7045</a>
            <a class="primary-button" href="/contactarnos">Contactarnos</a>
          </div>
        </div>
      </section>
      <section class="section inner-page-details">
        <article>
          <h2>SatisfacciÃ³n</h2>
          <p>Priorizamos atenciÃ³n profesional y una experiencia sencilla para cada viajero.</p>
        </article>
        <article>
          <h2>TecnologÃ­a segura</h2>
          <p>Utilizamos sistemas protegidos para buscar, comparar y confirmar vuelos.</p>
        </article>
        <article>
          <h2>ComunicaciÃ³n clara</h2>
          <p>Presentamos las tarifas, polÃ­ticas y condiciones antes de completar una reserva.</p>
        </article>
        <article>
          <h2>Mejora continua</h2>
          <p>Actualizamos nuestros servicios conforme a comentarios de clientes y estÃ¡ndares del sector.</p>
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