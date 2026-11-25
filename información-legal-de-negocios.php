<!doctype html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>InformaciÃ³n Legal De Negocios | Mondiaco de los Viajes</title>
  <link rel="stylesheet" href="/styles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">`n
</head>

<body>
  <div class="site">
    <?php include('include/header.php'); ?>

    <main>
      <section class="inner-page-hero">
        <div class="inner-page-content">
          <p class="section-kicker">INFORMACIÃ“N EMPRESARIAL</p>
          <h1>InformaciÃ³n Legal Empresarial</h1>
          <p>Mondiaco de los Viajes opera como proveedor independiente de servicios de viaje para viajeros individuales y corporativos.</p>
          <div class="inner-page-actions">
            <a class="gold-button" href="tel:18883707045">Llamar 1-888-370-7045</a>
            <a class="primary-button" href="/contactarnos">Contactarnos</a>
          </div>
        </div>
      </section>
      <section class="section inner-page-details">
        <article>
          <h2>Proveedor independiente</h2>
          <p>No somos una aerolÃ­nea y no representamos a ninguna aerolÃ­nea salvo que se indique expresamente.</p>
        </article>
        <article>
          <h2>Servicios de reserva</h2>
          <p>Asistimos en bÃºsqueda de vuelos, comparaciÃ³n de tarifas, confirmaciÃ³n y emisiÃ³n de boletos.</p>
        </article>
        <article>
          <h2>Cumplimiento</h2>
          <p>Nuestros servicios se prestan conforme a la legislaciÃ³n vigente y las polÃ­ticas aplicables.</p>
        </article>
        <article>
          <h2>Experiencia confiable</h2>
          <p>Buscamos ofrecer una experiencia segura, transparente y responsable para cada cliente.</p>
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