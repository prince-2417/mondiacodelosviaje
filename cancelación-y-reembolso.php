<!doctype html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CancelaciÃ³n y reembolso | Mondiaco de los Viajes</title>
  <link rel="stylesheet" href="/styles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">`n
</head>

<body>
  <div class="site">
    <?php include('include/header.php'); ?>

    <main>
      <section class="inner-page-hero">
        <div class="inner-page-content">
          <p class="section-kicker">CAMBIOS DE VIAJE</p>
          <h1>PolÃ­tica de CancelaciÃ³n y Reembolso</h1>
          <p>Las cancelaciones y reembolsos dependen de las polÃ­ticas de la aerolÃ­nea o proveedor que gestiona su boleto.</p>
          <div class="inner-page-actions">
            <a class="gold-button" href="tel:18883707045">Llamar 1-888-370-7045</a>
            <a class="primary-button" href="/contactarnos">Contactarnos</a>
          </div>
        </div>
      </section>
      <section class="section inner-page-details">
        <article>
          <h2>Responsabilidad</h2>
          <p>La aerolÃ­nea o proveedor gestiona directamente los cambios, reembolsos y elegibilidad.</p>
        </article>
        <article>
          <h2>Tarifas reembolsables</h2>
          <p>Los reembolsos pueden incluir deducciones por cargos de aerolÃ­nea y servicio.</p>
        </article>
        <article>
          <h2>Tarifas no reembolsables</h2>
          <p>Los boletos promocionales pueden perder su valor segÃºn las restricciones aplicables.</p>
        </article>
        <article>
          <h2>Plazos</h2>
          <p>Los reembolsos pueden tardar entre 7 y 30 dÃ­as hÃ¡biles y pueden requerir tiempo adicional del banco.</p>
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