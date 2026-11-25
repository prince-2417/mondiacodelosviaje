<!doctype html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>InformaciÃ³n para el anunciante | Mondiaco de los Viajes</title>
  <link rel="stylesheet" href="/styles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">`n
</head>

<body>
  <div class="site">
    <?php include('include/header.php'); ?>

    <main>
      <section class="inner-page-hero">
        <div class="inner-page-content">
          <p class="section-kicker">PUBLICIDAD RESPONSABLE</p>
          <h1>InformaciÃ³n para el Anunciante</h1>
          <p>Explicamos cÃ³mo se presentan anuncios, promociones y ofertas de viaje de manera clara y responsable.</p>
          <div class="inner-page-actions">
            <a class="gold-button" href="tel:18883707045">Llamar 1-888-370-7045</a>
            <a class="primary-button" href="/contactarnos">Contactarnos</a>
          </div>
        </div>
      </section>
      <section class="section inner-page-details">
        <article>
          <h2>Transparencia</h2>
          <p>Las tarifas y promociones se muestran con tÃ©rminos, condiciones y datos relevantes.</p>
        </article>
        <article>
          <h2>Disponibilidad</h2>
          <p>Los precios pueden cambiar por demanda y actualizaciones de las aerolÃ­neas.</p>
        </article>
        <article>
          <h2>Cumplimiento</h2>
          <p>Seguimos estÃ¡ndares aplicables de publicidad y protecciÃ³n al consumidor.</p>
        </article>
        <article>
          <h2>Privacidad</h2>
          <p>Toda comunicaciÃ³n promocional cumple con nuestra PolÃ­tica de Privacidad.</p>
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