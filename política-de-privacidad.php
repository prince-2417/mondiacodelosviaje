<!doctype html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PolÃ­tica De Privacidad | Mondiaco de los Viajes</title>
  <link rel="stylesheet" href="/styles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">`n
</head>

<body>
  <div class="site">
    <?php include('include/header.php'); ?>

    <main>
      <section class="inner-page-hero">
        <div class="inner-page-content">
          <p class="section-kicker">PROTECCIÃ“N DE DATOS</p>
          <h1>PolÃ­tica de Privacidad</h1>
          <p>Valoramos su confianza y explicamos cÃ³mo recopilamos, utilizamos, compartimos y protegemos su informaciÃ³n.</p>
          <div class="inner-page-actions">
            <a class="gold-button" href="tel:18883707045">Llamar 1-888-370-7045</a>
            <a class="primary-button" href="/contactarnos">Contactarnos</a>
          </div>
        </div>
      </section>
      <section class="section inner-page-details">
        <article>
          <h2>InformaciÃ³n que recopilamos</h2>
          <p>Recopilamos datos personales, datos de viaje, datos de reserva, dispositivo, direcciÃ³n IP y cookies.</p>
        </article>
        <article>
          <h2>Uso de la informaciÃ³n</h2>
          <p>Usamos los datos para confirmar reservas, brindar soporte, mejorar el sitio y prevenir fraudes.</p>
        </article>
        <article>
          <h2>Compartir informaciÃ³n</h2>
          <p>Podemos compartir datos necesarios con aerolÃ­neas, proveedores de viaje y procesadores de pagos.</p>
        </article>
        <article>
          <h2>Sus derechos</h2>
          <p>Puede solicitar acceso, correcciÃ³n, eliminaciÃ³n o desactivaciÃ³n de comunicaciones y seguimiento, segÃºn su ubicaciÃ³n.</p>
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