<!doctype html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sobre Nosotros | Mondiaco de los Viajes</title>
  <link rel="stylesheet" href="/styles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">`n
</head>

<body>
  <div class="site">
    <?php include('include/header.php'); ?>

    <main>
      <section class="inner-page-hero">
        <div class="inner-page-content">
          <p class="section-kicker">CONOZCA MÃS SOBRE NOSOTROS</p>
          <h1>Su Socio de Confianza Para Reservar Vuelos</h1>
          <p>En Mondiaco de los Viajes hacemos que viajar sea mÃ¡s fÃ¡cil, rÃ¡pido y accesible. Ofrecemos una experiencia de reserva sencilla, tarifas competitivas y un servicio confiable para destinos nacionales e internacionales.</p>
          <div class="inner-page-actions">
            <a class="gold-button" href="tel:18883707045">Llamar 1-888-370-7045</a>
            <a class="primary-button" href="/contactarnos">Contactarnos</a>
          </div>
        </div>
      </section>
      <section class="section inner-page-details">
        <article>
          <h2>Reservas fÃ¡ciles y rÃ¡pidas</h2>
          <p>Compare opciones de vuelo y reserve con confianza gracias a nuestro proceso seguro y eficiente.</p>
        </article>
        <article>
          <h2>Tarifas competitivas</h2>
          <p>Encuentre opciones para destinos nacionales e internacionales con informaciÃ³n clara antes del pago.</p>
        </article>
        <article>
          <h2>Compromiso con el cliente</h2>
          <p>Nuestro equipo ofrece asistencia personalizada antes, durante y despuÃ©s de su viaje.</p>
        </article>
        <article>
          <h2>Por quÃ© elegirnos</h2>
          <p>Hacemos que viajar sea mÃ¡s fÃ¡cil y accesible, con atenciÃ³n profesional y precios transparentes.</p>
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