<!doctype html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tasas de venta de entradas | Mondiaco de los Viajes</title>
  <link rel="stylesheet" href="/styles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">`n
</head>

<body>
  <div class="site">
    <?php include('include/header.php'); ?>

    <main>
      <section class="inner-page-hero">
        <div class="inner-page-content">
          <p class="section-kicker">TASAS POSVENTA</p>
          <h1>Tasas de Venta de Entradas</h1>
          <p>Las tasas pueden aplicarse a cancelaciones, cambios, reembolsos, crÃ©ditos y servicios especiales de asistencia.</p>
          <div class="inner-page-actions">
            <a class="gold-button" href="tel:18883707045">Llamar 1-888-370-7045</a>
            <a class="primary-button" href="/contactarnos">Contactarnos</a>
          </div>
        </div>
      </section>
      <section class="section inner-page-details">
        <article>
          <h2>Cancelaciones</h2>
          <p>Dentro de las 24 horas o despuÃ©s pueden aplicarse cargos diferentes segÃºn la tarifa.</p>
        </article>
        <article>
          <h2>Cambios</h2>
          <p>Los cambios pueden generar cargos por asistencia y diferencias de tarifa.</p>
        </article>
        <article>
          <h2>Reembolsos</h2>
          <p>Los importes dependen de la elegibilidad de la aerolÃ­nea y del procesamiento del proveedor.</p>
        </article>
        <article>
          <h2>Servicios especiales</h2>
          <p>Algunas solicitudes mÃ©dicas, militares, de visa, nombre o boletos duplicados pueden requerir asistencia adicional.</p>
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