<!doctype html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Impuestos y Tasas | Mondiaco de los Viajes</title>
  <link rel="stylesheet" href="/styles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">`n
</head>

<body>
  <div class="site">
    <?php include('include/header.php'); ?>

    <main>
      <section class="inner-page-hero">
        <div class="inner-page-content">
          <p class="section-kicker">CARGOS Y REGULACIONES</p>
          <h1>Impuestos y Tasas</h1>
          <p>Los boletos pueden incluir impuestos gubernamentales, tasas aeroportuarias, cargos de seguridad y cargos por servicio.</p>
          <div class="inner-page-actions">
            <a class="gold-button" href="tel:18883707045">Llamar 1-888-370-7045</a>
            <a class="primary-button" href="/contactarnos">Contactarnos</a>
          </div>
        </div>
      </section>
      <section class="section inner-page-details">
        <article>
          <h2>Impuestos aÃ©reos</h2>
          <p>Los cargos pueden incluir impuestos nacionales, internacionales, segmentaciÃ³n de vuelos y transporte.</p>
        </article>
        <article>
          <h2>Tasas aeroportuarias</h2>
          <p>Los aeropuertos pueden cobrar cargos por instalaciones, seguridad, aduanas, inmigraciÃ³n y sanidad.</p>
        </article>
        <article>
          <h2>Cargos por servicio</h2>
          <p>Los cargos pueden variar por pasajero, clase, ruta, itinerario y servicios adicionales.</p>
        </article>
        <article>
          <h2>Cambios y aproximaciones</h2>
          <p>Los importes pueden cambiar por regulaciones, aerolÃ­neas y condiciones del mercado sin previo aviso.</p>
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